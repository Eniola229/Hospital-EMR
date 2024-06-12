<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;  


class ViewComplainsController extends Controller
{
    public function showcomplains(Request $request)
    {
        $data = Appointment::all();
        
        // Ensure the return statement is inside the method
        return view('complains', compact('data'));
    }
}