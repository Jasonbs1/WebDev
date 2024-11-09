<!-- resources/views/catalog/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Library Catalog</h1>

        <!-- Sort and Category Filter -->
        <form method="GET" action="{{ route('catalog.index') }}" class="mb-4">
            <div class="row">
                <div class="col">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="all" {{ $category == 'all' ? 'selected' : '' }}>All</option>
                        <option value="journal" {{ $category == 'journal' ? 'selected' : '' }}>Journals</option>
                        <option value="book" {{ $category == 'book' ? 'selected' : '' }}>Books</option>
                        <option value="cd" {{ $category == 'cd' ? 'selected' : '' }}>CDs</option>
                        <option value="newspaper" {{ $category == 'newspaper' ? 'selected' : '' }}>Newspapers</option>
                        <option value="fyp" {{ $category == 'fyp' ? 'selected' : '' }}>Final Year Projects</option>
                    </select>
                </div>
                <div class="col">
                    <label for="sort">Sort by Title</label>
                    <select name="sort" id="sort" class="form-control">
                        <option value="asc" {{ $sort == 'asc' ? 'selected' : '' }}>Ascending</option>
                        <option value="desc" {{ $sort == 'desc' ? 'selected' : '' }}>Descending</option>
                    </select>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary mt-4">Filter</button>
                </div>
            </div>
        </form>

        <!-- Display Catalog Items -->
        <div class="row">
            @foreach ($catalogs as $catalog)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $catalog->journal_title ?? $catalog->book_title ?? $catalog->cd_title ?? $catalog->np_title ?? $catalog->fyp_title }}
                            </h5>
                            <p class="card-text">
                                Author: {{ $catalog->journal_author ?? $catalog->book_author ?? $catalog->cd_author ?? $catalog->np_author ?? $catalog->fyp_author }}<br>
                                Genre: {{ $catalog->journal_genre ?? $catalog->book_genre ?? $catalog->cd_genre ?? $catalog->np_genre ?? $catalog->fyp_genre }}<br>
                                Published on: {{ $catalog->journal_publish_date ?? $catalog->book_publish_date ?? $catalog->cd_publish_date ?? $catalog->np_publish_date ?? $catalog->fyp_publish_date }}<br>
                                Price: {{ $catalog->journal_price ?? $catalog->book_price ?? $catalog->cd_price ?? $catalog->np_price ?? $catalog->fyp_price }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
