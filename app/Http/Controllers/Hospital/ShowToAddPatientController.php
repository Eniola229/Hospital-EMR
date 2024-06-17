<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointmentdoc;  

class ShowToAddPatientController extends Controller
{
    public function show($id)
    {
        // Retrieve the doctor/user with the given ID
        $appointment = Appointmentdoc::find($id);

        // Check if appointment exists
        if (!$appointment) {
            return redirect()->back()->with('error', 'appointment not found');
        }

        // Return the view with appointment details
        return view('addtopatientrecord', compact('appointment'));
    }
}
