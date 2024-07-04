<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use App\Models\Pharmacy;


class AddPharmacyController extends Controller
{
        public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
            'patient_id' => ['required'],
            'doctors_name' => ['required', 'string', 'max:255'],
            'doctors_email' => ['required', 'string', 'max:255'],
            'patent_name' => ['required', 'string', 'max:255'],
            'patientid' => ['required', 'string', 'max:255'],
            'drugs' => ['required', 'string'],
            'doctors_comments' => ['required', 'string'],
        ]);

        $app = Pharmacy::create($validated);
        // Mail::to($app->email)->send(new AppoinmentMail($app));

        return redirect()->back()->with('status', 'Record Added Succefully');
    }
}
