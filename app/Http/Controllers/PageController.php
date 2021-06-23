<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    function contactUs() {
        return view('user.contactUs');
    }

    // notification
    function post() {
        return redirect()->route("home")->with("message", "Added a post");
    }
}
