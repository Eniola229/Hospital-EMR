<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  

class ViewDoctorsController extends Controller
{
    public function show(Request $request)
    {
        $query = User::query();

        // Apply the search filter if it exists
        if ($request->has('search')) {
            $search = $request->input('search', ' ');
            $query->where('specialization', 'like', '%' . $search . '%');
          } elseif ($request->has('location')) {
            $location = $request->input('location', ' ');
            $query->where('location', 'like', '%' . $location . '%');
        }
        
        // Filter by role (only roles with a value of 3)
        $query->where('role', 3);

        $data = $query->get();

        // Return the view with the data
        return view('doctors', compact('data'));
    }
}
