<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\Ecounter;

class EcounterController extends Controller
{
    public function show()
    {
        $patient = Auth::guard('patient')->user();
        $infos = Patient::where('id', $patient->id)->get();

        return view('patients.patienteconter', compact('infos'));
    }
}
