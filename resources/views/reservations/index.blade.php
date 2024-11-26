@extends('layouts.app')

@section('content')
    <h1>Reservation List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Item</th>
                <th>User</th>
                <th>Duration</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->item->title }}</td>
                    <td>{{ $reservation->user->name }}</td>
                    <td>{{ $reservation->borrow_duration }} days</td>
                    <td>
                        <span class="badge
                            @if($reservation->status == 'approved')
                                badge-success
                            @elseif($reservation->status == 'rejected')
                                badge-danger
                            @else
                                badge-warning
                            @endif">
                            {{ ucfirst($reservation->status) }}
                        </span>
                    </td>
                    <td>
                        @if($reservation->status == 'pending')
                            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" name="status" value="approved" class="btn btn-success btn-sm">Approve</button>
                            </form>
                            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" name="status" value="rejected" class="btn btn-danger btn-sm">Reject</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
