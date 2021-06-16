<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login() {
        return view('auth.Login');
    }

    function register() {
        return view('auth.Register');
    }
}
