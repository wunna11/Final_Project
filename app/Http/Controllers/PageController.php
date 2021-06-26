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
    
    //edit post
    function editPost($id) {
        $edit_data = Post::find($id);
        return view('user.edit', ['edit_data'=>$edit_data]);
    }
    
    //user
    function userProfile() {
        return view('user.userProfile');
    }
    
    function contactUs() {
        return view('user.contactUs');
    }
}
