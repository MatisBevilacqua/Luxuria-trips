<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.ticket', compact('tickets'));
    }

    public function showClientTicket()
    {
        $tickets = Ticket::all();
        return view('tickets.tickets', compact('tickets'));
    }


    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.show', compact('ticket'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price_per_person' => 'required|numeric',
            'event_date' => 'required|date',
        ]);

        Ticket::create($request->all());

        return redirect()->route('ticket')->with('success', 'Ticket created successfully.');
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price_per_person' => 'required|numeric|min:0',
            'event_date' => 'required|date|after:today',
        ]);

        $ticket->update($request->all());

        return redirect()->route('ticket')->with('success', 'Ticket updated successfully.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('ticket')->with('success', 'Ticket deleted successfully.');
    }


}
