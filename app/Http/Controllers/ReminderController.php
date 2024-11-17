<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    // Show all reminders
    public function index()
    {
        $reminders = Reminder::all(); // Retrieve all reminders
        return view('reminders.index', compact('reminders'));
    }

    // Create a new reminder
    public function create()
    {
        return view('reminders.create');
    }

    // Store a new reminder
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'details' => 'required|string',
            'due_date' => 'required|date',
        ]);

        Reminder::create([
            'type' => $request->type,
            'details' => $request->details,
            'due_date' => $request->due_date,
            'status' => 'pending',
        ]);

        return redirect()->route('reminders.index');
    }

    // Update the reminder status to resolved
    public function update($id)
    {
        $reminder = Reminder::findOrFail($id);
        $reminder->status = 'resolved';
        $reminder->save();

        return redirect()->route('reminders.index');
    }

    // Delete a reminder
    public function destroy($id)
    {
        $reminder = Reminder::findOrFail($id);
        $reminder->delete();

        return redirect()->route('reminders.index');
    }
}
