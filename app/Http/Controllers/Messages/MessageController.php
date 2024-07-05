<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Messages;
use Illuminate\Http\RedirectResponse;  
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
     public function store(Request $request) : RedirectResponse {
            $request->validate([
                'user_id' => ['required', 'string', 'max:25'],
                'resiver_id' => ['required', 'string', 'max:25'],
                'message_body' => ['required', 'string'],
                'replying_msg' => ['nullable', 'string', 'max:225'],
                'image_sent_path' => ['nullable', 'image', 'max:2048'],
            ]);

            // Handle avatar upload and resizing
            if ($request->hasFile('image_sent_path')) {
                $imageFile = $request->file('image_sent_path');
                $imageSize = $imageFile->getSize();

                // Check if the avatar exceeds 2MB
                if ($imageSize > 2048000) { // 2MB in bytes
                    // Resize the image to reduce file size
                    $image = Image::make($imageFile)->resize(500, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                    // Store the resized avatar
                    $imagePath = $image->store('public/messageimages'); // Store the resized image
                } else {
                    // Avatar is within 2MB size limit, store it as usual
                    $imagePath = $request->file('avatar')->store('public/messageimages');
                }
                $imagePath = str_replace('public/', '', $imagePath);
            } else {
                $imagePath = "no image uploaded";
            }

            // Hash the password before storing it
            $hashedPassword = bcrypt($request->password);

            $add = Messages::create([
                'user_id' => $request->user_id,
                'resiver_id' => $request->resiver_id,
                'message_body' => $request->message_body,
                'replying_msg' => $request->replying_msg,
                'image_sent_path' => $imagePath,
            ]);

            // Mail::to($add->email)->send(new AddPatientMail($add));

            return redirect()->back()->with('status', 'Message Succesfully Sent');
        }


}
