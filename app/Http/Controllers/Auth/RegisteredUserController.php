<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
use App\Mail\RegistraionMail;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'avatar' => ['required', 'image', 'max:2048'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'qualification' => ['required', 'string', 'max:255'],
            'specialization' => ['required', 'string', 'max:255'],
            'intro' => ['required', 'string'],
            'years_of_experience' => ['required', 'string', 'max:25'],
            'location' => ['required', 'string', 'max:55'],
            'date_of_birth' => ['required', 'string', 'max:55'],
            'phone_number' => ['required', 'string', 'max:55'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'role' => ['required', 'string', 'max:5'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()], 
        ]);


         // Handle avatar upload and resizing
         if ($request->hasFile('avatar')) {
            $avatarFile = $request->file('avatar');
            $avatarSize = $avatarFile->getSize();

            // Check if the avatar exceeds 2MB
            if ($avatarSize > 2048000) { // 2MB in bytes (1 MB = 1024 KB = 1024 * 1024 bytes)
                // Resize the image to reduce file size
                $image = Image::make($avatarFile)->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Store the resized avatar
                 $avatarPath = $request->file('avatar')->store('public/avatars');
                 $avatarPath = str_replace('public/', '', $avatarPath);
            } else {
                // Avatar is within 2MB size limit, store it as usual
                $avatarPath = $request->file('avatar')->store('public/avatars');
                $avatarPath = str_replace('public/', '', $avatarPath);
            }
     } else {
        $avatarPath = "no file uploaded";
     }

        $user = User::create([
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

        event(new Registered($user));

         //Mail::to($user->email)->send(new RegistraionMail($user));

        // Auth::login($user);

        // return redirect()->intended(url('dashboard'));

        return redirect()->back()->with('status', 'Doctor Succesfully Added');
    }
}
