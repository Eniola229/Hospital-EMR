<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient; 


class ViewEcounterNote extends Controller
{
    public function showeconter(Request $request)
    {
        $patients = AddPatient::all();
        
        return view('econter', compact('patients'));
    }
}

