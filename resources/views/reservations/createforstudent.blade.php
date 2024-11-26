@extends('layouts.app')

@section('content')
    <h1>Request Borrow for Student</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="item_id">Select Book:</label>
            <select name="item_id" id="item_id" class="form-control">
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="borrow_duration">Duration (in days):</label>
            <input type="number" name="borrow_duration" id="borrow_duration" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit Request</button>
    </form>
@endsection
