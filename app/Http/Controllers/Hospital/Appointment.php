<?php

namespace App\Http\Controllers\Hospital;

use App\Models\Appoinment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;



class Appointment extends Controller
{
public function store(Request $request) : RedirectResponse {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'phone_number' => ['required', 'string', 'max:55'],
        'home_address' => ['required', 'string', 'max:255'],
        'specialization' => ['required', 'string', 'max:255'],
        'state_of_residence' => ['required', 'string','max:55'],
        'department' => ['required', 'string', 'max:255'],
        'location' => ['required', 'string', 'max:55'],
        'a_date' => ['required', 'string', 'max:55'],
        'complain' => ['required', 'string'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
    ]);


    $app = Appointment::create([
        'avatar' => $avatarPath,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'qualification' => $request->qualification,
        'specialization' => $request->specialization,
        'intro' => $request->intro,
        'years_of_experience' => $request->years_of_experience,
        'location' => $request->location,
        'date_of_birth' => $request->date_of_birth,
        'phone_number' => $request->phone_number,
        'email' => $request->email,
        'role' => $request->role,
        'password' => Hash::make($request->password),
    ]);

            event(new Registered($app));

            Mail::to($app->email)->send(new AppoinmentMail($app));

            return Redirect::route('welcome')->with('status', 'appointment-success');
}
    


}


