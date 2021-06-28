<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // insert or create post
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

    //update post
    function updatePost($id) {
        //validation
        $validation = request()->validate([
            "title" => "required",
            "image" => "required",
            "content" => "required",
        ]);

        if($validation) {
            //get input data from edit blade
            $title = request('title');
            $image = request('image');
            $content = request('content');

            //update data
            $update_data = Post::find($id);
            $update_data->title = $title;
            $update_data->content = $content;
            //image
            if($image) {
                $imageName = uniqid()."_".$image->getClientOriginalName();
                $image->move(public_path('images/posts/'), $imageName);
                $update_data->image = $imageName;
            }
            $update_data->update();
            return redirect()->route("home")->with('message', 'Post is updated');
        } else {
            return back()->withErrors($validation);
        }
    }

    //delete post
    function deletePost($id) {
        $post_delete = Post::find($id);
        $post_delete->delete();
        return redirect()->route("home")->with("message", "Post deleted!");
     }
}
