<?php
namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;

class PatientAuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('patients.auth.patientlogin');
    }

    // Handle login request 
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the patient
        $patient = Patient::where('email', $request->email)->first();

        if ($patient && Hash::check($request->password, $patient->password)) {
            // Log the patient in
            Auth::login($patient);
            return redirect()->intended('patients.patienthome');
        }

        // Authentication failed
        return back()->withError(['email' => 'The provided credentials do not match our records.']);
    }

    public function dashboard()
    {
        $patient = Auth::user(); // Get the authenticated patient
        return view('patient.patienthome', compact('patient'));
    }

    // Handle logout request
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); // Redirect to the homepage or login page
    }
}
