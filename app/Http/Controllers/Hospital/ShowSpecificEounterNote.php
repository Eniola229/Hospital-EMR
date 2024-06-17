<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Econter; 

class ShowSpecificEounterNote extends Controller
{
         public function showecounter($id)
        {
            // Retrieve the doctor/AddPatient with the given patient_id
            $ecounter = Econter::find($id); 

            // Check if ecounter exists
            if (!$ecounter) {
                return redirect()->back()->with('error', 'Patient not found');
            }

            // Return the view with patient details
            return view('viewsingleeconterpatient', compact('ecounter'));
        }
}
 