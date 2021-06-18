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

    //validation
    function post_register() {
        $validation = request()->validate([
           'username' => 'required|max:255',
           'email' => 'required|max:255',
           'password' => 'required|min:5',
           'image' => 'required',
        ]);

         if($validation) {
             return redirect()->route("home");
         } else {
             return back()->withErrors($validation);
         }
    }

    //caught username from register blade to AuthController
    // function post_register() {
    //     $username = request("username");
    //     return $username;
    // }
}
