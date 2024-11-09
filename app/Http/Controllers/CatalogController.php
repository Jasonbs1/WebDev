<?php
namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\FinalYearProject;
use App\Models\Journal;
use App\Models\Cd;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the catalogs.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Get the sorting option (ascending or descending)
        $sort = $request->get('sort', 'asc'); // Default sort is 'asc'
        $category = $request->get('category', 'all'); // Default category is 'all'

        // Initialize an empty collection for catalogs
        $catalogs = collect();

        // Fetch data from all categories based on the selected filter
        if ($category == 'all' || $category == 'journal') {
            $catalogs = $catalogs->merge(Journal::orderBy('journal_title', $sort)->get());
        }
        if ($category == 'all' || $category == 'book') {
            $catalogs = $catalogs->merge(Books::orderBy('book_title', $sort)->get());
        }
        if ($category == 'all' || $category == 'cd') {
            $catalogs = $catalogs->merge(Cd::orderBy('cd_title', $sort)->get());
        }
        if ($category == 'all' || $category == 'newspaper') {
            $catalogs = $catalogs->merge(Newspaper::orderBy('np_title', $sort)->get());
        }
        if ($category == 'all' || $category == 'fyp') {
            $catalogs = $catalogs->merge(FinalYearProject::orderBy('fyp_title', $sort)->get());
        }

        // Return the view with the catalogs
        return view('catalog.index', compact('catalogs', 'sort', 'category'));
    }
}
