<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Reservation; // Assuming Reservation model exists for reservations
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display list of students
    public function index()
    {
        // Fetch students and their corresponding reservations
        $students = Student::all();
        foreach ($students as $student) {
            // Use student_id to fetch reservations
            $student->reservations = Reservation::where('student_id', $student->id)->get();
        }

        return view('students.index', compact('students'));
    }




    // Show form to create a new student
    public function create()
    {
        return view('students.create');
    }

    // Store a new student
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:students,email',
            'student_id' => 'required|unique:students,student_id',
            'program' => 'required|string',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    // Show student's reserved items
    public function showReservations()
    {
        // Fetch reservations of the logged-in student
        $studentReservations = Reservation::where('student_name', auth()->user()->name)->get();

        return view('students.reservations', compact('studentReservations'));
    }
}
