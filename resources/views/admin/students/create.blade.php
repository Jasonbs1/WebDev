@extends('layouts.app')

@section('content')
    <h1>Add New Student</h1>

    <form action="{{ route('admin.storeStudent') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input type="text" name="student_id" id="student_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="program">Program</label>
            <input type="text" name="program" id="program" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Add Student</button>
    </form>
@endsection
