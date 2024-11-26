@extends('layouts.app')

@section('content')
    <h1>Students</h1>
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
@endsection
