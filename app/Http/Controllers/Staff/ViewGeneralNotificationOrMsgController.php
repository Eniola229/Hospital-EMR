<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Moddels\ReferADcotor; 

class ViewGeneralNotificationOrMsgController extends Controller
{
    public function show()
    {
        $refers = ReferADcotor::all();

        return view('dashboard', compact('refers'));
    }
}
