<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\WordPressController;

Route::get('/wordpress/posts', [WordPressController::class, 'posts']);
Route::post('/wordpress/posts', [WordPressController::class, 'store']);
