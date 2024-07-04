<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  

class ViewStaffMessageController extends Controller
{
    //
    public function viewstaffsmsg(Request $request)
    {
        // code...

        $staffs = User::all();

        return view('message', compact('staffs'));
    }
}
 