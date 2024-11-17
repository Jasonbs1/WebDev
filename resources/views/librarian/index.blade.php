@extends('layouts.app')

@section('content')
    <h1>Library Collections</h1>
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
                        <a href="{{ route('librarian.edit', $collection->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
