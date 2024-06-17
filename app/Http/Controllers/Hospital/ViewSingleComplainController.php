<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointmentdoc;  


class ViewSingleComplainController extends Controller
{
    public function show($id)
    {
        // Retrieve the complain with the given ID
        $complain = Appointmentdoc::find($id);

        // Check if doctor exists
        if (!$complain) {
            return redirect()->back()->with('error', 'Complain not found');
        }

        // Return the view with doctor details
        return view('viewsinglecomplain', compact('complain'));
    }
}
