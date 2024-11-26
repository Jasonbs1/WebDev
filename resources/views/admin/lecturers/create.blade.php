@extends('layouts.app')

@section('content')
    <h1>Add New Lecturer</h1>

    <form action="{{ route('admin.storeLecturer') }}" method="POST">
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
            <label for="lecturer_id">Lecturer ID</label>
            <input type="text" name="lecturer_id" id="lecturer_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" id="department" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Add Lecturer</button>
    </form>
@endsection
