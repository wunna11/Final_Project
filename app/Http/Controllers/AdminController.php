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

    function contact_message() {
        $messages = ContactMessage::latest()->get();
        return view('admin.contact_message', ['messages'=>$messages]);
    }
}
