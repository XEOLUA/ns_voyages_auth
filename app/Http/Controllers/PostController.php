<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use TCG\Voyager\Contracts\User;
use TCG\Voyager\Models\Post;
use Illuminate\Foundation\Auth\User;
class PostController extends Controller
{
    //
    public $role_id=0;

    public function showPosts()
    {
        $this->role_id=0;
        if(Auth::check())
        {
            $this->role_id=User::select('role_id')->where('id',Auth::id())->first()->role_id;
        }
//        dd($this->role_id);
        $posts=Post::all()->where('status','PUBLISHED');
        (setting('site.orderpostsfodate')=='DESC') ? $posts=$posts->sortByDesc('created_at'): $posts=$posts->sortBy('created_at');
        return view('posts',['posts'=>$posts,'role'=>$this->role_id]);
    }

    public function deletePost($postId)
    {
        $this->role_id=User::select('role_id')->where('id',Auth::id())->first()->role_id;
       if(Auth::check()&&($this->role_id==1||$this->role_id==2))
        {
            return view('layouts.postdel',['postId'=>$postId,'role_id'=>$this->role_id]);
        }
    }

    public function addPost(){
        $this->role_id=0;
        if(Auth::check())
        {
            $this->role_id=User::select('role_id')->where('id',Auth::id())->first()->role_id;
            if($this->role_id==1||$this->role_id==3) return view('addPost',['role_id'=>$this->role_id]);
            else return "Access denied!";
        }
    }

}
