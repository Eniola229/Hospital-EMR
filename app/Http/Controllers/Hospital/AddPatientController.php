<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPatient;  
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\AddPatientMail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class AddPatientController extends Controller
{
    public function store(Request $request) : RedirectResponse {
        $request->validate([
            'full_name' => ['nullable', 'string', 'max:255'],
            'avatar' => ['nullable', 'image', 'max:2048'],
            'phone_number' => ['required', 'string', 'max:55'], 
            'home_address' => ['required', 'string', 'max:255'],
            'state_of_residence' => ['required', 'string','max:55'],
            'date_of_birth' => ['required', 'string','max:55'],
            'by_who_name' => ['required', 'string', 'max:255'],
            'by_who_email' => ['required', 'string', 'max:255'],
            'message_sent' => ['required', 'string'],
            'time_send' => ['nullable', 'string', 'max:55'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255',  'unique:'.AddPatient::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Generating unique_id
        $firstWord = strtok($request->full_name, ' ');
        $randomNumber = rand(1000, 9999);
        $patientID = '@' . $firstWord . $randomNumber; 

        // Handle avatar upload and resizing
        if ($request->hasFile('avatar')) {
            $avatarFile = $request->file('avatar');
            $avatarSize = $avatarFile->getSize();

            // Check if the avatar exceeds 2MB
            if ($avatarSize > 2048000) { // 2MB in bytes
                // Resize the image to reduce file size
                $image = Image::make($avatarFile)->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Store the resized avatar
                $avatarPath = $image->store('public/patientavatar'); // Store the resized image
            } else {
                // Avatar is within 2MB size limit, store it as usual
                $avatarPath = $request->file('avatar')->store('public/patientavatar');
            }
            $avatarPath = str_replace('public/', '', $avatarPath);
        } else {
            $avatarPath = "no file uploaded";
        }

        // Hash the password before storing it
        $hashedPassword = bcrypt($request->password);

        $add = AddPatient::create([
            'full_name' => $request->full_name,
            'patientID' => $patientID,
            'avatar' => $avatarPath,
            'phone_number' => $request->phone_number,
            'home_address' => $request->home_address,
            'state_of_residence' => $request->state_of_residence,
            'date_of_birth' => $request->date_of_birth,
            'by_who_name' => $request->by_who_name,
            'by_who_email' => $request->by_who_email,
            'message_sent' => $request->message_sent,
            'time_send' => $request->time_send,
            'email' => $request->email,
            'password' => $hashedPassword,  // Use the hashed password
        ]);

        // Mail::to($add->email)->send(new AddPatientMail($add));

        return redirect()->back()->with('status', 'Patient Succesfully Added');
    }
}
