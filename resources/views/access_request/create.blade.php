@extends('layouts.app')

@section('content')
    <h1>Request Access</h1>

    <form action="{{ route('access_requests.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="student_name">Your Name</label>
            <input type="text" name="student_name" id="student_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="material">Material Requested</label>
            <input type="text" name="material" id="material" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Request Access</button>
    </form>
@endsection
