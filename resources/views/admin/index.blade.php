@extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>

    <!-- Librarians Section -->
    <h2>Librarians</h2>
    <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Add Librarian</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($librarians as $librarian)
                <tr>
                    <td>{{ $librarian->name }}</td>
                    <td>{{ $librarian->email }}</td>
                    <td>{{ $librarian->phone }}</td>
                    <td>
                        <form action="{{ route('admin.destroy', $librarian->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Students Section -->
    <h2>Students</h2>
    <a href="{{ route('admin.createStudent') }}" class="btn btn-primary mb-3">Add Student</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Student ID</th>
                <th>Program</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->program }}</td>
                    <td>
                        <a href="{{ route('admin.editStudent', $student->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.destroyStudent', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Lecturers Section -->
    <h2>Lecturers</h2>
    <a href="{{ route('admin.createLecturer') }}" class="btn btn-primary mb-3">Add Lecturer</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Lecturer ID</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lecturers as $lecturer)
                <tr>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->email }}</td>
                    <td>{{ $lecturer->lecturer_id }}</td>
                    <td>{{ $lecturer->department }}</td>
                    <td>
                        <a href="{{ route('admin.editLecturer', $lecturer->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.destroyLecturer', $lecturer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
