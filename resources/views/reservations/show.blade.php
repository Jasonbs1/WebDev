<!-- resources/views/reservations/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Reservation Details</h1>
    <p><strong>Item:</strong> {{ $reservation->item->title }}</p>
    <p><strong>User:</strong> {{ $reservation->user->name }}</p>
    <p><strong>Duration:</strong> {{ $reservation->borrow_duration }} days</p>
    <p><strong>Status:</strong> {{ ucfirst($reservation->status) }}</p>
    <p><strong>Request Date:</strong> {{ $reservation->reservation_date }}</p>

    @if($reservation->status == 'pending')
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" name="status" value="approved" class="btn btn-success">Approve</button>
            <button type="submit" name="status" value="rejected" class="btn btn-danger">Reject</button>
        </form>
    @endif

    <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Back to Reservations</a>
@endsection
