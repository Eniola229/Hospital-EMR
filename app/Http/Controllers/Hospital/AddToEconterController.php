<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Econter;  
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\AddPatient; 

class AddToEconterController extends Controller
{
   public function store(Request $request) : RedirectResponse
    {
        // Validate the request
        $request->validate([
            'patient_id' => ['required', 'string', 'max:55'],
            'full_name' => ['required', 'string', 'max:255'],
            'unit' => ['required', 'string', 'max:255'], 
            'ward' => ['required', 'string', 'max:255'],
            'consultant' => ['required', 'string', 'max:255'],
            'presenting_complaint' => ['required', 'string', 'max:255'],
            'physical_examination' => ['required', 'string', 'max:255'],
            'clinic_diagnosis' => ['required', 'string'],
            'history_presenting_complaint' => ['required', 'string', 'max:255'],
            'plan' => ['required', 'string', 'max:255'],
            'patientid' => ['required', 'string', 'max:55'],
        ]);

        // Create a new record in the database
        $add = Econter::create([
            'patient_id' => $request->patient_id,
            'full_name' => $request->full_name,
            'unit' => $request->unit,
            'ward' => $request->ward,
            'consultant' => $request->consultant,
           'medical_officer' => Auth::user()->first_name,
            'presenting_complaint' => $request->presenting_complaint,
            'physical_examination' => $request->physical_examination,
            'clinic_diagnosis' => $request->clinic_diagnosis,
            'history_presenting_complaint' => $request->history_presenting_complaint,
            'plan' => $request->plan,
            'patientid' => $request->patientid,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('status', 'Ecounter Note Successfully Added');
    }

      public function show($id)
        {
            // Retrieve the patient with the given ID
            $patient = AddPatient::find($id);

            // Check if patient exists
            if (!$patient) {
                return redirect()->back()->with('error', 'Patient not found');
            }

            // Retrieve the associated ecounter using patient id
            $ecounters = Econter::where('patient_id', $id)
                         ->orderBy('created_at', 'desc')
                         ->get();

            // Return the view with patient and ecounter details
            return view('viewsingleeconterpatient', compact('patient', 'ecounters'));
        }
}
 