<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return view('index');
    }

    function createPost() {
        return view('user.create');
    }

    function userProfile() {
        return view('user.userProfile');
    }

    function contactUs() {
        return view('user.contactUs');
    }

    // notification
    function post() {
        return redirect()->route("home")->with("message", "Added a post");
    }
}
