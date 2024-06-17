<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  

class ShowController extends Controller
{
    //

       public function show(Request $request)
    {
        // Start with a query builder instance
        $query = User::query();

        // Apply the search filter if it exists
        if ($request->has('search')) {
            $search = $request->input('search', ' ');
            $query->where('specialization', 'like', '%' . $search . '%');
          } elseif ($request->has('location')) {
            $location = $request->input('location', ' ');
            $query->where('location', 'like', '%' . $location . '%');
        }
        
       
        $data = $query->get();

        // Return the view with the data
        return view('welcome', compact('data'));
    }
} 
