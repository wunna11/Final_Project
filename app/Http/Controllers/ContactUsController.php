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

    function deleteMessage($id) {
        $delete_message = ContactMessage::find($id);
        $delete_message->delete();
        return back()->with("message", "Message is deleted");
    }

    function editMessage($id) {
        $edit_message = ContactMessage::find($id);
        return view('admin.edit_contact_message', ['edit_message'=>$edit_message]);
    }

    function updateMessage($id) {
        //find data by id
        $update_message = ContactMessage::find($id);
        //override data
        $update_message->username = request("username");
        $update_message->email = request("email");
        $update_message->content = request("text");
        $update_message->update();
        return redirect()->route("admin.contact_message", "Message is updated");
    }
}