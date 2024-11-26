@extends('layouts.app')

@section('content')
    <h1>Edit Lecturer</h1>

    <form action="{{ route('admin.updateLecturer', $lecturer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $lecturer->name) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $lecturer->email) }}" required>
        </div>
        <div class="form-group">
            <label for="lecturer_id">Lecturer ID</label>
            <input type="text" name="lecturer_id" id="lecturer_id" class="form-control" value="{{ old('lecturer_id', $lecturer->lecturer_id) }}" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" id="department" class="form-control" value="{{ old('department', $lecturer->department) }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Lecturer</button>
    </form>
@endsection
