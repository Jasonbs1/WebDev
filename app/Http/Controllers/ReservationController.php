<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Show all reservations
    public function index()
    {
        $reservations = Reservation::all(); // Retrieve all reservations
        return view('reservations.index', compact('reservations')); // Pass data to view
    }

    // Show the form to create a new reservation
    public function create()
    {
        return view('reservations.create');
    }

    // Store a new reservation
    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string',
            'book_title' => 'required|string',
        ]);

        Reservation::create([
            'student_name' => $request->student_name,
            'book_title' => $request->book_title,
            'reservation_date' => now(),
            'status' => 'pending',
        ]);

        return redirect()->route('reservations.index');
    }

    // Update the reservation status to approved
    public function update($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->status = 'approved';
        $reservation->save();

        return redirect()->route('reservations.index');
    }

    // Delete a reservation (reject it)
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservations.index');
    }
}
