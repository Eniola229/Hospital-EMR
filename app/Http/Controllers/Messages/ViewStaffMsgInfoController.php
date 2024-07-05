<?php
namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Messages; 
use Illuminate\Support\Facades\Auth;

class ViewStaffMsgInfoController extends Controller
{
    public function show($id)
    {
       
        $staffinfo = User::find($id); 
        $userId = Auth::user()->id;
        
        // Retrieve received and sent messages
        $messagesreceiveds = Messages::where('resiver_id', $userId)->get();
        $messagessents = Messages::where('user_id', $userId)->get();

        // Check if staffinfo exists
        if (!$staffinfo) {
            return redirect()->back()->with('error', 'Staff not found');
        }

        // Merge and sort messages by created_at
        $allMessages = $messagesreceiveds->merge($messagessents)->sortBy('created_at');

      
        return view('messagestaff', compact('staffinfo', 'allMessages'));
    }
}
