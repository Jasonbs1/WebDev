@extends('layouts.app')

@section('content')
    <h1>Edit Collection</h1>

    <form action="{{ route('librarian.update', $collection->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $collection->title }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control" onchange="toggleLecturerNameField(this.value)" required>
                <option value="book" {{ $collection->type === 'book' ? 'selected' : '' }}>Book</option>
                <option value="journal" {{ $collection->type === 'journal' ? 'selected' : '' }}>Journal</option>
                <option value="ebook" {{ $collection->type === 'ebook' ? 'selected' : '' }}>E-Book</option>
                <option value="newspaper" {{ $collection->type === 'newspaper' ? 'selected' : '' }}>Newspaper</option>
                <option value="cd_dvd" {{ $collection->type === 'cd_dvd' ? 'selected' : '' }}>CD/DVD</option>
            </select>
        </div>
        <div class="form-group" id="lecturer_name_field" style="{{ $collection->type === 'journal' ? '' : 'display: none;' }}">
            <label for="lecturer_name">Lecturer Name</label>
            <input type="text" name="lecturer_name" id="lecturer_name" class="form-control" value="{{ $collection->lecturer_name }}">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $collection->author }}" required>
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" id="publisher" class="form-control" value="{{ $collection->publisher }}" required>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ $collection->year }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Collection</button>
    </form>

    <script>
        function toggleLecturerNameField(type) {
            const lecturerField = document.getElementById('lecturer_name_field');
            lecturerField.style.display = (type === 'journal') ? 'block' : 'none';
        }
    </script>
@endsection
