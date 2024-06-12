<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  

class ViewStaffController extends Controller
{
    //

    public function viewstaffs(Request $request)
    {
        // code...

        $data = User::all();

        return view('allstaffs', compact('data'));
    }
} 
