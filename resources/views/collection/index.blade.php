@extends('layouts.app')

@section('content')
    <h1>Collections</h1>
    <a href="{{ route('collections.create') }}" class="btn btn-primary">Add Collection</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Year</th>
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
                    <td>
                        <a href="{{ route('collections.edit', $collection->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('collections.destroy', $collection->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
