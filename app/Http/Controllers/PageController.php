<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    //post 
    function index() {
        $posts = Post::latest()->get();         //order by id desecnding
        return view('index', ['posts' => $posts]);          //view(blade file, array)
    }

    function createPost() {
        return view('user.create');
    }

    //show post detail
    function showPostById($id) {
        $post = Post::find($id);
        return view('user.showPost', ['post'=>$post]);
    }

    function deletePost($id) {
       $post_delete = Post::find($id);
       $post_delete->delete();
       return redirect()->route("home")->with("message", "Post deleted!");
    }

    //user
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
        $validation = request()->validate([
            "title" => "required",
            "image" => "required",
            "content" => "required",
        ]);

        if($validation) {
            $title = request('title');
            $image = request('image');
            $content = request('content');
            //save data to database
            $post = new Post();
            $post->user_id = auth()->user()->id;
            $post->title = $title;
            $imageName = uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path("images/posts/"), $imageName);
            $post->image = $imageName;
            $post->content = $content;
            $post->save();
            return redirect()->route("home")->with("message", "Added a post");
        } else {
            return back()->withErrors($validation);
        }
    }

    
}
