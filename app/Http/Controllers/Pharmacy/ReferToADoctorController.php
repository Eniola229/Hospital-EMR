<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\ReferADcotor;  

class ReferToADoctorController extends Controller
{
    public function store(Request $request): RedirectResponse {
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
