<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient; 

class ViewPateintPharController extends Controller
{
   public function show(Request $request)
    {
        $patients = AddPatient::orderBy('created_at', 'desc')->get();
        
        return view('pharmacy', compact('patients'));
    }
}

