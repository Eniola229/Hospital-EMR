<?php

// namespace App\Http\Controllers\Hospital;

// use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\ReferADcotor;  
 
// class ViewStaffMessageController extends Controller
// {
//     //
//     public function viewstaffsmsg(Request $request)
//     {
//         // code...

//         $staffs = User::all();
//         $userEmail = Auth::user()->email;
//         $refers = ReferADcotor::where('doctor_email', $userEmail)->get();
 
//         return view('message', compact('staffs', 'refers'));
//     }
// }
//  