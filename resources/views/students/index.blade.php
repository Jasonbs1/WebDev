@extends('layouts.app')

@section('content')
    <h1>Students</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Student ID</th>
                <th>Program</th>
                <th>Reservations</th> <!-- Add column for reservations -->
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->program }}</td>
                    <td>
                        @if ($student->reservations->count())
                            <ul>
                                @foreach ($student->reservations as $reservation)
                                    <li>{{ $reservation->book_title }} - {{ $reservation->reservation_date }} ({{ $reservation->status }})</li>
                                @endforeach
                            </ul>
                        @else
                            No reservations
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
