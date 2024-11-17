@extends('layouts.app')

@section('content')
    <h1>Reminders</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Reminder Type</th>
                <th>Details</th>
                <th>Due Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reminders as $reminder)
                <tr>
                    <td>{{ $reminder->type }}</td>
                    <td>{{ $reminder->details }}</td>
                    <td>{{ $reminder->due_date }}</td>
                    <td>{{ $reminder->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
