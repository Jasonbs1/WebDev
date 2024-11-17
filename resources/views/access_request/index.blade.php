@extends('layouts.app')

@section('content')
    <h1>Access Requests</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Material Requested</th>
                <th>Request Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accessRequests as $request)
                <tr>
                    <td>{{ $request->student_name }}</td>
                    <td>{{ $request->material }}</td>
                    <td>{{ $request->request_date }}</td>
                    <td>{{ $request->status }}</td>
                    <td>
                        <form action="{{ route('access_requests.update', $request->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                        <form action="{{ route('access_requests.destroy', $request->id) }}" method="POST" style="display:inline;">
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
