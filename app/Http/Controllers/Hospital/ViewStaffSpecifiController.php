<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  


class ViewStaffSpecifiController extends Controller
{
    public function show($id)
    {
        // Retrieve the doctor/user with the given ID
        $doctor = User::find($id);

        // Check if doctor exists
        if (!$doctor) {
            return redirect()->back()->with('error', 'Doctor not found');
        }

        // Return the view with doctor details
        return view('seedoctor', compact('doctor'));
    }
}
