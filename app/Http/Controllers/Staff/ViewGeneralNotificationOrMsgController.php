<?php

namespace App\Http\Controllers\Staff;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReferADcotor; 

class ViewGeneralNotificationOrMsgController extends Controller
{
    public function show()
    {

        // Get the authenticated user's email
        $userEmail = Auth::user()->email;
        $refers = ReferADcotor::where('doctor_email', $userEmail)->get();

        return view('dashboard', compact('refers'));
    }
}
