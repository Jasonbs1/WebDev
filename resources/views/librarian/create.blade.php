@extends('layouts.app')

@section('content')
    <h1>Add New Collection</h1>

    <form action="{{ route('librarian.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control" onchange="toggleLecturerNameField(this.value)" required>
                <option value="book">Book</option>
                <option value="journal">Journal</option>
                <option value="ebook">E-Book</option>
                <option value="newspaper">Newspaper</option>
                <option value="cd_dvd">CD/DVD</option>
            </select>
        </div>
        <div class="form-group" id="lecturer_name_field" style="display: none;">
            <label for="lecturer_name">Lecturer Name</label>
            <input type="text" name="lecturer_name" id="lecturer_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" id="publisher" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Add Collection</button>
    </form>

    <script>
        function toggleLecturerNameField(type) {
            const lecturerField = document.getElementById('lecturer_name_field');
            lecturerField.style.display = (type === 'journal') ? 'block' : 'none';
        }
    </script>
@endsection
