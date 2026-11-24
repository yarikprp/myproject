<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WordPressController extends Controller
{
    private function wordpress()
    {
        return Http::timeout(10)
            ->withBasicAuth(
                config('services.wordpress.username'),
                config('services.wordpress.password')
            );
    }

    public function posts()
    {
        $response = $this->wordpress()->get(
            config('services.wordpress.url') . '/index.php',
            [
                'rest_route' => '/wp/v2/posts',
                'per_page' => 10,
            ]
        );

        if ($response->failed()) {
            abort($response->status(), 'Ошибка WordPress API');
        }

        return response()->json($response->json());
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        $response = $this->wordpress()->post(
            config('services.wordpress.url') . '/index.php?rest_route=/wp/v2/posts',
            [
                'title' => $validated['title'],
                'content' => $validated['content'],
                'status' => 'draft',
            ]
        );

        if ($response->failed()) {
            return response()->json([
                'message' => 'Не удалось создать публикацию',
                'error' => $response->body(),
            ], $response->status());
        }

        return response()->json($response->json(), 201);
    }
}
