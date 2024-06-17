<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient; 


class ShowPatientController extends Controller
{
    public function showpatients(Request $request)
    {
        $patients = AddPatient::all();
        
        return view('patients', compact('patients'));
    }
}
