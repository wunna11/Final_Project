<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
         //return $validation;

         if($validation) {
             //move image to public folder
             $image = request('image');
             $image_name = uniqid()."_".$image->getClientOriginalName();        //fwad23534_img3.jpg
             $image->move(public_path('images/profiles'), $image_name);         //public parameter->path, image_name
             //dd($image);
            
            // save data into database
            $password = $validation['password'];
            $user = new User();
            $user->name = $validation['username'];
            $user->email = $validation['email'];
            $user->password = Hash::make($password);
            $user->image = $image_name;
            $user->save();

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
