@extends('layouts.app')

@section('content')
    <h2>Your Reserved Items</h2>
    @if ($lecturerReservations->count())
        <table class="table">
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Reservation Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lecturerReservations as $reservation)
                    <tr>
                        <td>{{ $reservation->book_title }}</td>
                        <td>{{ $reservation->reservation_date }}</td>
                        <td>{{ $reservation->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>You have no reservations yet.</p>
    @endif
@endsection
