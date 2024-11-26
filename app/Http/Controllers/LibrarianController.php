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

    // Show form to create a new collection
    public function create()
    {
        return view('librarian.create');
    }

    // Store a new collection
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required|numeric',
            'lecturer_name' => 'nullable|string', // Only required for journals
        ]);

        $data = $request->all();

        // If the collection is a journal, we add lecturer_name
        if ($data['type'] === 'journal') {
            $data['lecturer_name'] = $request->input('lecturer_name');
        }

        Collection::create($data);

        return redirect()->route('librarian.index')->with('success', 'Collection added successfully.');
    }

    // Show form to edit a collection
    public function edit($id)
    {
        $collection = Collection::findOrFail($id);
        return view('librarian.edit', compact('collection'));
    }

    // Update an existing collection
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required|numeric',
            'lecturer_name' => 'nullable|string', // Only required for journals
        ]);

        $collection = Collection::findOrFail($id);
        $data = $request->all();

        // If the collection is a journal, we update lecturer_name
        if ($data['type'] === 'journal') {
            $data['lecturer_name'] = $request->input('lecturer_name');
        }

        $collection->update($data);

        return redirect()->route('librarian.index')->with('success', 'Collection updated successfully.');
    }

    // Delete a collection
    public function destroy($id)
    {
        $collection = Collection::findOrFail($id);
        $collection->delete();

        return redirect()->route('librarian.index')->with('success', 'Collection deleted successfully.');
    }
}
