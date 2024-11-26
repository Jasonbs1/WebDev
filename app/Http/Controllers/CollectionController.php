<?php
namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    // Display a list of collections
    public function index()
    {
        $collections = Collection::all();
        return view('collections.index', compact('collections'));
    }

    // Show form to add a new collection
    public function create()
    {
        return view('collections.create');
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
            'lecturer_name' => 'nullable|string|sometimes', // Default
        ]);

        // Enforce `lecturer_name` for journals
        if ($request->type === 'journal') {
            $request->validate([
                'lecturer_name' => 'required|string',
            ]);

            // Check lecturer's supervision limit
            $journalCount = Collection::where('type', 'journal')
                ->where('lecturer_name', $request->lecturer_name)
                ->where('year', $request->year)
                ->count();

            if ($journalCount >= 2) {
                return redirect()->back()->withErrors([
                    'lecturer_name' => 'This lecturer is already supervising 2 journals this year.',
                ]);
            }
        }

        Collection::create($request->all());
        return redirect()->route('collections.index')->with('success', 'Collection added successfully.');
    }


    // Delete a collection
    public function destroy($id)
    {
        $collection = Collection::findOrFail($id);
        $collection->delete();

        return redirect()->route('collections.index')->with('success', 'Collection removed successfully.');
    }
}
