<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient; 
use App\Models\Econter; 

class ShowPatientSpecificEcounter extends Controller
{
        public function show($id)
        {
            // Retrieve the patient with the given ID
            $patient = AddPatient::find($id);

            // Check if patient exists
            if (!$patient) {
                return redirect()->back()->with('error', 'Patient not found');
            }

            // Retrieve the associated ecounter using patient id
           $ecounters = Econter::where('patient_id', $id)->get();

            // Return the view with patient and ecounter details
            return view('viewsingleeconterpatient', compact('patient', 'ecounters'));
        }
}
  