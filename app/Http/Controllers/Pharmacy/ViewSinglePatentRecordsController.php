<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient;  
use App\Models\Pharmacy;  
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;


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


        public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
            'patient_id' => ['required'],
            'doctors_name' => ['required', 'string', 'max:255'],
            'doctors_email' => ['required', 'string', 'max:255'],
            'patent_name' => ['required', 'string', 'max:255'],
            'patientid' => ['required', 'string', 'max:255'],
            'drugs' => ['required', 'string'],
            'doctors_comments' => ['required', 'string'],
        ]);

        $app = Pharmacy::create($validated);
        // Mail::to($app->email)->send(new AppoinmentMail($app));

        return redirect()->back()->with('status', 'Record Added Succefully');
    }
}

