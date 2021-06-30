<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;

class PostRoleCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //check current user is admin or premium user
        //normal user can edit or delete (post_id = post->user->id)
        $id = request('id');    //update or delete post id
        $authorId = Post::find($id)->user_id;
        //auth()->user()->id
        if(auth()->user()->isAdmin == "1" || auth()->user()->isPremium == "1" || auth()->user()->id == $authorId) {
            return $next($request);
        } else {
            return redirect()->route('home')->with('error', 'You are not admin or premium user!');
        }
        
    }
}
