<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
class PostController extends Controller
{
    //
    public function showPosts()
    {
        $posts=Post::all()->where('status','PUBLISHED')->sortByDesc('created_at');
       // dd($posts);
        return view('posts',['posts'=>$posts]);
    }

}
