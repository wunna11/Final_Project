<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        return view('admin.index');
    }

    function manage_premium_user() {
        return view('admin.manage_premium_user');
    }

    function contact_message() {
        $messages = ContactMessage::latest()->get();
        return view('admin.contact_message', ['messages'=>$messages]);
    }
}
