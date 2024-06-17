<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient;  


class ViewSinglePatientController extends Controller
{
    public function show($id)
    {
        // Retrieve the doctor/AddPatient with the given ID
        $patient = AddPatient::find($id);

        // Check if patient exists
        if (!$patient) {
            return redirect()->back()->with('error', 'Patient not found');
        }

        // Return the view with patient details
        return view('viewsinglepatient', compact('patient'));
    }
}
 