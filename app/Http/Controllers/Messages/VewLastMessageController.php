<?php

namespace App\Http\Controllers\Messages;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Messages;  
 
class VewLastMessageController extends Controller
{
    //
    public function viewstaffsmsg(Request $request)
    {
        // code...

        $staffs = User::all();
        $rId = Auth::user()->id;
        $messages = Messages::where('resiver_id', $rId)->get();
 
        return view('message', compact('staffs', 'messages'));
    }
}
 