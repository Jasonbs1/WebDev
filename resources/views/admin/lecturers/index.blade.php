@extends('layouts.app')

@section('content')
    <h1>Lecturers</h1>
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
