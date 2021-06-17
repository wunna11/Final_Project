<?php

namespace App\Http\Controllers;

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
        return view('admin.contact_message');
    }
}
