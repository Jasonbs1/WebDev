@extends('layouts.app')

@section('content')
    <h1>Librarians</h1>
    <a href="{{ route('admin.create') }}" class="btn btn-primary">Add Librarian</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($librarians as $librarian)
                <tr>
                    <td>{{ $librarian->name }}</td>
                    <td>{{ $librarian->email }}</td>
                    <td>{{ $librarian->phone }}</td>
                    <td>
                        <form action="{{ route('admin.destroy', $librarian->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
