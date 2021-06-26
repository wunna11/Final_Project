<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{   
    // login
    function login() {
        return view('auth.Login');
    }

    function post_login() {
        //validation
        $validation = request()->validate([
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        if($validation) {
            //if auth success or not
            $auth = Auth::attempt(["email"=>request('email'), "password"=>request('password')]);        //associative array
            if($auth) {
                return redirect()->route("home");
            } else {
                return back()->with('error', 'Authentication failed.Please try again.');
            }
        } else {
            return back()->withErrors($validation);
        }
    }

    function register() {
        return view('auth.Register');
    }

    //create user 
    function post_register() {
        //validation
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
            //svae 1 second or 2 seconds to database so redirect login page.
            //so if auth email and password 
            if(Auth::attempt(["email"=>request('email'), "password"=>request('password')])) {
                return redirect()->route("home");
            }
            
         } else {
             return back()->withErrors($validation);
         }
    }

    //caught username from register blade to AuthController
    // function post_register() {
    //     $username = request("username");
    //     return $username;
    // }

    //update user profile
    function post_userProfile() {
        $name = request("username");
        $email = request(("email"));
        $image = request("image");
        $old_password = request("old_password");
        $new_password = request("new_password");

        $id = auth()->user()->id;
        $current_user = User::find($id);
        $current_user->name = $name;
        $current_user->email = $email;

        if($image) {
            $imageName = uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path('images/profiles'), $imageName);
            $current_user->image = $imageName;
            $current_user->update();
            return back()->with("success", "Image Changed");
        }

        if($old_password && $new_password) {
            //check current password and old password to same
            if(Hash::check($old_password, $current_user->password)) {
                //if same, let user new password to change
                $current_user->password = Hash::make($new_password);
                $current_user->update();
                return back()->with("success", "Password Changed");
            } else {
                return back()->with("error", "Old password is not same.");
            }
        }
        $current_user->update();
        return back();
    }

    function logout() {
        Auth::logout();
        return redirect()->route("login");
    }
}
