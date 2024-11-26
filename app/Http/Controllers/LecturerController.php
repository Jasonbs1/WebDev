<?php
namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Reservation;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    // Fetch all lecturers with their reservations
    public function index()
    {
        $lecturers = Lecturer::with('reservations')->get();
        return response()->json($lecturers);
    }

    // Fetch a specific lecturer by ID
    public function show($id)
    {
        $lecturer = Lecturer::with('reservations')->find($id);
        if ($lecturer) {
            return response()->json($lecturer);
        }
        return response()->json(['message' => 'Lecturer not found'], 404);
    }

    // Store a new lecturer
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:lecturers,email',
            'lecturer_id' => 'required|unique:lecturers,lecturer_id',
            'department' => 'required|string',
        ]);

        $lecturer = Lecturer::create($request->all());
        return response()->json($lecturer, 201); // Return created status with the lecturer data
    }

    // Update an existing lecturer
    public function update(Request $request, $id)
    {
        $lecturer = Lecturer::find($id);
        if ($lecturer) {
            $lecturer->update($request->all());
            return response()->json($lecturer);
        }
        return response()->json(['message' => 'Lecturer not found'], 404);
    }

    // Delete a lecturer
    public function destroy($id)
    {
        $lecturer = Lecturer::find($id);
        if ($lecturer) {
            $lecturer->delete();
            return response()->json(['message' => 'Lecturer deleted successfully']);
        }
        return response()->json(['message' => 'Lecturer not found'], 404);
    }
}
