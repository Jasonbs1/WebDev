@extends('layouts.app')

@section('content')
    <h1>Library Collections</h1>

    <a href="{{ route('librarian.create') }}" class="btn btn-success mb-3">Add New Collection</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Year</th>
                <th>Lecturer Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collections as $collection)
                <tr>
                    <td>{{ $collection->title }}</td>
                    <td>{{ $collection->type }}</td>
                    <td>{{ $collection->author }}</td>
                    <td>{{ $collection->publisher }}</td>
                    <td>{{ $collection->year }}</td>
                    <td>{{ $collection->type === 'journal' ? $collection->lecturer_name : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('librarian.edit', $collection->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('librarian.destroy', $collection->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this collection?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
