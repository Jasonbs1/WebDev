@extends('layouts.app')

@section('content')
    <h1>Make Reservation</h1>

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="student_name">Your Name</label>
            <input type="text" name="student_name" id="student_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="book_title">Book Title</label>
            <input type="text" name="book_title" id="book_title" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Reserve</button>
    </form>
@endsection
