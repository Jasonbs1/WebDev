<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    // Display a list of collections
    public function index()
    {
        $collections = Collection::all();
        return view('librarian.index', compact('collections'));
    }

    // Show form to update collections
    public function edit($id)
    {
        $collection = Collection::findOrFail($id);
        return view('librarian.edit', compact('collection'));
    }

    // Update a collection
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required|numeric',
        ]);

        $collection = Collection::findOrFail($id);
        $collection->update($request->all());

        return redirect()->route('librarian.index')->with('success', 'Collection updated successfully.');
    }
}
