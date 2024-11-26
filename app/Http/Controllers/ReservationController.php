<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Collection; // Ensure Collection is imported
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Show all reservations
    public function index()
    {
        $reservations = Reservation::all(); // Retrieve all reservations
        return view('reservations.index', compact('reservations')); // Pass data to view
    }

    // Show the form to create a new reservation for students
    public function createForStudent()
    {
        $books = Collection::where('type', 'book')->get();  // Only fetch books for students
        return view('reservations.createForStudent', compact('books'));
    }

    // Show the form to create a new reservation for lecturers
    public function createForLecturer()
    {
        $items = Collection::all();  // Fetch all collection items for lecturers
        return view('reservations.createForLecturer', compact('items'));
    }

    // Store a new reservation request (either student or lecturer)
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'item_id' => 'required|exists:collections,id', // Ensure the item exists in the collection
            'borrow_duration' => 'required|integer',
        ]);

        // Get the item being requested for borrowing
        $item = Collection::find($request->item_id);

        // Apply borrowing rules
        $user = auth()->user(); // Get the currently authenticated user
        if ($user->role === 'student') {
            // Students can only borrow books, and only for less than 5 days
            if ($item->type !== 'book') {
                return redirect()->back()->withErrors(['item_id' => 'Students can only borrow books.']);
            }

            if ($request->borrow_duration > 5) {
                return redirect()->back()->withErrors(['borrow_duration' => 'Students can borrow books for up to 5 days only.']);
            }
        } elseif ($user->role === 'lecturer') {
            // Lecturers can borrow all items, but only for less than 3 days
            if ($request->borrow_duration > 3) {
                return redirect()->back()->withErrors(['borrow_duration' => 'Lecturers can borrow all items for up to 3 days only.']);
            }
        }

        // Create a new reservation entry
        Reservation::create([
            'user_id' => $user->id,
            'item_id' => $request->item_id,
            'borrow_duration' => $request->borrow_duration,
            'status' => 'pending',  // Default to 'pending' until approved
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservation request submitted.');
    }

    // Update reservation status (approve or reject)
    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        // Check if the librarian approves/rejects based on borrow duration
        if ($reservation->user->role === 'student' && $reservation->borrow_duration > 5) {
            return redirect()->back()->withErrors(['borrow_duration' => 'Students cannot borrow for more than 5 days.']);
        }

        if ($reservation->user->role === 'lecturer' && $reservation->borrow_duration > 3) {
            return redirect()->back()->withErrors(['borrow_duration' => 'Lecturers cannot borrow for more than 3 days.']);
        }

        // Update status based on librarian action
        $reservation->status = $request->status; // 'approved' or 'rejected'
        $reservation->save();

        return redirect()->route('reservations.index')->with('success', 'Reservation ' . $request->status);
    }

    // Delete a reservation (reject it)
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted.');
    }
}
