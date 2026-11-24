<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with(['creator', 'assignee'])
            ->latest()
            ->paginate(10);

        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'priority' => ['required', 'in:low,medium,high,urgent'],
        ]);

        $validated['created_by'] = auth()->id();

        Ticket::create($validated);

        return redirect()
            ->route('tickets.index')
            ->with('success', 'Заявка успешно создана');
    }

    public function show(Ticket $ticket)
    {
        $ticket->load(['creator', 'assignee', 'comments.user']);

        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'status' => ['required', 'in:new,in_progress,resolved,closed'],
            'priority' => ['required', 'in:low,medium,high,urgent'],
        ]);

        $ticket->update($validated);

        return redirect()
            ->route('tickets.index')
            ->with('success', 'Заявка обновлена');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()
            ->route('tickets.index')
            ->with('success', 'Заявка удалена');
    }
}
