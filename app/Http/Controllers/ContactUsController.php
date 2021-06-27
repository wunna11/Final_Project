<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function post_contact_us() {
        //validation
        $validation = request()->validate([
            "username" => "required|max:255",
            "email" => "required|max:255",
            "text" => "required|max:255",
        ]);
        if($validation) {
            //get input data from input field
            $username = request("username");
            $email = request("email");
            $content = request("text");
            //dd($username, $email, $content);
            //save data into database
            $contact_message = new ContactMessage();
            $contact_message->username = $username;
            $contact_message->email = $email;
            $contact_message->content = $content;
            $contact_message->save();
            return back()->with('message', "Send message to Admin!");
        } else {
            return back()->withErrors($validation);
        }
    }
}
