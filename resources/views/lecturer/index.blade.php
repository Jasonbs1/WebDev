@extends('layouts.app')

@section('content')
    <h1>Lecturers</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Lecturer ID</th>
                <th>Department</th>
                <th>Reservations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lecturers as $lecturer)
                <tr>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->email }}</td>
                    <td>{{ $lecturer->lecturer_id }}</td>
                    <td>{{ $lecturer->department }}</td>
                    <td>
                        @if ($lecturer->reservations->count())
                            <ul>
                                @foreach ($lecturer->reservations as $reservation)
                                    <li>{{ $reservation->book_title }} - {{ $reservation->reservation_date }} ({{ $reservation->status }})</li>
                                @endforeach
                            </ul>
                        @else
                            No reservations
                        @endif
                        <a href="{{ route('lecturers.reservations') }}" class="btn btn-info">View My Reservations</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
