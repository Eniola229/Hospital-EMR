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
        // code...

        $data = User::all();

        return view('welcome', compact('data'));
    }
} 
