<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        return view('admin.index');
    }

    function manage_premium_user() {
        $users = User::all();
        return view('admin.manage_premium_user', ['users'=>$users]);
    }

    function deleteUser($id) {
        $delete_user = User::find($id);
        $delete_user->delete();
        return back()->with('message', "User is deleted");
    }

    function editUser($id) {
        $edit_user = User::find($id);
        return view('admin.edit_premium_user', ['edit_user'=>$edit_user]);
    }

    function updateUser($id) {
        $validation = request()->validate([
           "username" => "required", 
           "email" => "required", 
           "isAdmin" => "required", 
           "isPremium" => "required", 
        ]);

        if($validation) {
            $name = request('username');
            $email = request('email');
            $isAdmin = request('isAdmin');
            $isPremium = request('isPremium');

            $update_user = User::find($id);
            $update_user->name = $name;
            $update_user->email = $email;
            $update_user->isAdmin = $isAdmin;
            $update_user->isPremium = $isPremium;
            $update_user->update();
            return redirect()->route("admin.manage_premium_user")->with("message", "User is updated");
        } else {
            return back()->with($validation);
        }
    }

    function contact_message() {
        $messages = ContactMessage::latest()->get();
        return view('admin.contact_message', ['messages'=>$messages]);
    }
}
