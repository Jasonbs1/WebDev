<?php

namespace App\Http\Controllers;

use App\Models\Librarian;
use App\Models\Student;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Display a list of librarians
    public function index()
    {
        $librarians = Librarian::all();
        $students = Student::all();   // Get all students
        $lecturers = Lecturer::all(); // Get all lecturers

        return view('admin.index', compact('librarians', 'students', 'lecturers'));
    }


    // Show form to add a new librarian
    public function create()
    {
        return view('admin.create');
    }

    // Store a new librarian
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:librarians',
            'phone' => 'required'
        ]);

        Librarian::create($request->all());
        return redirect()->route('admin.index')->with('success', 'Librarian added successfully.');
    }

    // Delete a librarian
    public function destroy($id)
    {
        $librarian = Librarian::findOrFail($id);
        $librarian->delete();

        return redirect()->route('admin.index')->with('success', 'Librarian removed successfully.');
    }

    // Display a list of students
    public function showStudents()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    // Show form to add a new student
    public function createStudent()
    {
        return view('admin.students.create');
    }

    // Store a new student
    public function storeStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'student_id' => 'required|unique:students,student_id',
            'program' => 'required|string',
        ]);

        Student::create($request->all());

        return redirect()->route('admin.showStudents')->with('success', 'Student added successfully.');
    }

    // Edit a student
    public function editStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.edit', compact('student'));
    }

    // Update a student
    public function updateStudent(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'student_id' => 'required',
            'program' => 'required|string',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('admin.showStudents')->with('success', 'Student updated successfully.');
    }

    // Delete a student
    public function destroyStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('admin.showStudents')->with('success', 'Student removed successfully.');
    }

    // Display a list of lecturers
    public function showLecturers()
    {
        $lecturers = Lecturer::all();
        return view('admin.lecturers.index', compact('lecturers'));
    }

    // Show form to add a new lecturer
    public function createLecturer()
    {
        return view('admin.lecturers.create');
    }

    // Store a new lecturer
    public function storeLecturer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:lecturers,email',
            'lecturer_id' => 'required|unique:lecturers,lecturer_id',
            'department' => 'required|string',
        ]);

        Lecturer::create($request->all());

        return redirect()->route('admin.showLecturers')->with('success', 'Lecturer added successfully.');
    }

    // Edit a lecturer
    public function editLecturer($id)
    {
        $lecturer = Lecturer::findOrFail($id);
        return view('admin.lecturers.edit', compact('lecturer'));
    }

    // Update a lecturer
    public function updateLecturer(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'lecturer_id' => 'required',
            'department' => 'required|string',
        ]);

        $lecturer = Lecturer::findOrFail($id);
        $lecturer->update($request->all());

        return redirect()->route('admin.showLecturers')->with('success', 'Lecturer updated successfully.');
    }

    // Delete a lecturer
    public function destroyLecturer($id)
    {
        $lecturer = Lecturer::findOrFail($id);
        $lecturer->delete();

        return redirect()->route('admin.showLecturers')->with('success', 'Lecturer removed successfully.');
    }
}
