<?php

namespace App\Http\Controllers;

use App\Models\AccessRequest;
use Illuminate\Http\Request;

class AccessRequestController extends Controller
{
    // Show all access requests
    public function index()
    {
        $accessRequests = AccessRequest::all(); // Retrieve all access requests
        return view('access_requests.index', compact('accessRequests'));
    }

    // Show the form to create a new access request
    public function create()
    {
        return view('access_requests.create');
    }

    // Store a new access request
    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string',
            'material' => 'required|string',
        ]);

        AccessRequest::create([
            'student_name' => $request->student_name,
            'material' => $request->material,
            'request_date' => now(),
            'status' => 'pending',
        ]);

        return redirect()->route('access_requests.index');
    }

    // Update the access request status to approved
    public function update($id)
    {
        $accessRequest = AccessRequest::findOrFail($id);
        $accessRequest->status = 'approved';
        $accessRequest->save();

        return redirect()->route('access_requests.index');
    }

    // Delete an access request (reject it)
    public function destroy($id)
    {
        $accessRequest = AccessRequest::findOrFail($id);
        $accessRequest->delete();

        return redirect()->route('access_requests.index');
    }
}
