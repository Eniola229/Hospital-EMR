<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient;  
use App\Models\Pharmacy;  



class ViewSinglePatentRecordsController extends Controller
{
        public function show($id)
        {
            // Retrieve the patient with the given ID
            $patient = AddPatient::find($id);


            // Check if patient exists
            if (!$patient) {
                return redirect()->back()->with('error', 'Patient not found');
            }

            // Retrieve the associated encounters using patient id
            $pharmacyrecords = Pharmacy::where('patient_id', $id)->get();

            // Return the view with patient and encounter details
            return view('patientpahrrecord', compact('patient', 'pharmacyrecords'));
        }
}

