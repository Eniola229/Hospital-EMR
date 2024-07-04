<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 

class ViewStaffMsgInfoController extends Controller
{
       public function show($id)
        {
            // Retrieve the doctor with the given id
            $staffinfo = User::find($id); 

            // Check if staffinfo exists
            if (!$staffinfo) {
                return redirect()->back()->with('error', 'Staff not found');
            }

            // Return the view with staff details
            return view('messagestaff', compact('staffinfo'));
        }
}
 