<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient;  
use App\Models\User;  
use App\Models\ReferADcotor;
use Illuminate\Http\RedirectResponse;

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

     public function store(Request $request): RedirectResponse 
     {
        $validated = $request->validate([
            'doctor_email' => ['required', 'string', 'max:255'],
            'patient_id' => ['required', 'string', 'max:255'],
            'patient_email' => ['required', 'string', 'max:255'],
            'message_sent' => ['required', 'string'],
            'refer_from_name' => ['required', 'string', 'max:255'],
            'refer_from_email' => ['required', 'string', 'max:255'],
        ]);

        $app = ReferADcotor::create($validated);
        // Mail::to($app->email)->send(new AppoinmentMail($app));

        return redirect()->back()->with('status', 'Message Succefully Sent To Doctor');
    }
}
 