@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    <form action="{{ route('admin.updateStudent', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $student->name) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $student->email) }}" required>
        </div>
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input type="text" name="student_id" id="student_id" class="form-control" value="{{ old('student_id', $student->student_id) }}" required>
        </div>
        <div class="form-group">
            <label for="program">Program</label>
            <input type="text" name="program" id="program" class="form-control" value="{{ old('program', $student->program) }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Student</button>
    </form>
@endsection
