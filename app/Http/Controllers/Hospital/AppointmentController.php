<?php

namespace App\Http\Controllers\Hospital;

use App\Models\Appointment;  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\AppoinmentMail;
use Illuminate\Support\Facades\Redirect;


class AppointmentController extends Controller
{
        public function store(Request $request) : RedirectResponse {
        $request->validate([
            'doctor_name' => ['nullable', 'string', 'max:255'],
            'doctor_email' => ['nullable', 'string', 'max:255'],
            'doctor_special' => ['nullable', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:55'], 
            'home_address' => ['required', 'string', 'max:255'],
            'state_of_residence' => ['required', 'string','max:55'],
            'department' => ['required', 'string', 'max:255'],
            'a_date' => ['required', 'string', 'max:55'],
            'complain' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);


        $app = Appointment::create([
            'doctor_name' => $request->doctor_name,
            'doctor_email' => $request->doctor_email,
            'doctor_special' => $request->doctor_special,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'home_address' => $request->home_address,
            'state_of_residence' => $request->state_of_residence,
            'department' => $request->department,
            'a_date' => $request->a_date,
            'complain' => $request->complain,
            'email' => $request->email,
        ]);
                // Mail::to($app->email)->send(new AppoinmentMail($app));
                
                
                return redirect()->back()->with('status', 'appointment-success');
        }



}


