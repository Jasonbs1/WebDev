<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Librarian;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Display a list of librarians
    public function index()
    {
        $librarians = Librarian::all();
        return view('admin.index', compact('librarians'));
    }

    // Show form to add a new librarian
    public function create()
    {
        return view('admin.create');
    }

    // Store a new librarian
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:librarians',
            'phone' => 'required'
        ]);

        Librarian::create($request->all());
        return redirect()->route('admin.index')->with('success', 'Librarian added successfully.');
    }

    // Delete a librarian
    public function destroy($id)
    {
        $librarian = Librarian::findOrFail($id);
        $librarian->delete();

        return redirect()->route('admin.index')->with('success', 'Librarian removed successfully.');
    }
}
