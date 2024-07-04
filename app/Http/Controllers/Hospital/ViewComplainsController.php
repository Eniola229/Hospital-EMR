<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointmentdoc;  


class ViewComplainsController extends Controller
{
    public function showcomplains(Request $request)
    {
        
        $data = Appointmentdoc::orderBy('created_at', 'desc')->get();

        return view('complains', compact('data'));
    }
} 