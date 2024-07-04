<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient; 

class ViewForAccount extends Controller
{
    public function showpatientsaccount(Request $request)
    {
        $patients = AddPatient::all();
        
        return view('account', compact('patients'));
    }
}
 