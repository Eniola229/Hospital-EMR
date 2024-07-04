<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient;  
use App\Models\User;  
use App\Models\ReferADcotor;

class ViewSinglePatientController extends Controller
{
    public function show($id)
    {
        // Retrieve the doctor/AddPatient with the given ID
        $patient = AddPatient::find($id);
         //For doctors
        $doctors = User::all();

        //Last refer to a doctor
        $refer = ReferADcotor::where('patient_id', $id)->get();
        // Check if patient exists
        if (!$patient) {
            return redirect()->back()->with('error', 'Patient not found');
        }

        // Return the view with patient details
        return view('viewsinglepatient', compact('patient', 'doctors', 'refer'));
    }
}
 