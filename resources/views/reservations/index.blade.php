@extends('layouts.app')

@section('content')
    <h1>Reservations</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Book Title</th>
                <th>Reservation Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->student_name }}</td>
                    <td>{{ $reservation->book_title }}</td>
                    <td>{{ $reservation->reservation_date }}</td>
                    <td>{{ $reservation->status }}</td>
                    <td>
                        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Reject</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
