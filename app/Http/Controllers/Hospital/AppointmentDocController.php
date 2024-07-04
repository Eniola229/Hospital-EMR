<?php

namespace App\Http\Controllers\Hospital;

use App\Models\Appointmentdoc;  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\AppoinmentMail;
use Illuminate\Support\Facades\Redirect;

class AppointmentDocController extends Controller
{   public function show(Request $request)
    {
        $status = $request->session()->get('status');
    }


    public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
            'doctor_name' => ['nullable', 'string', 'max:255'],
            'doctor_email' => ['nullable', 'string', 'max:255'],
            'doctor_special' => ['nullable', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:55'],
            'home_address' => ['required', 'string', 'max:255'],
            'state_of_residence' => ['required', 'string', 'max:55'],
            'department' => ['required', 'string', 'max:255'],
            'a_date' => ['required', 'string', 'max:55'],
            'complain' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);

        $app = Appointmentdoc::create($validated);
        Mail::to($app->email)->send(new AppoinmentMail($app));

        return redirect()->back()->with('status', 'appointment-success');
    }
}
