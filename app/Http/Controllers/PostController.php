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

    public function showForm(){
        $this->role_id=0;
        if(Auth::check())
        {
            $this->role_id=User::select('role_id')->where('id',Auth::id())->first()->role_id;
            if($this->role_id==1||$this->role_id==3) return view('layouts.postadd',['role_id'=>$this->role_id]);
            else return "Access denied! Return to <a href='\'>Home</a>";
        }else return "Access denied! Return to <a href='\'>Home</a>";
    }

    public function addPost(Request $request){
        $this->validate($request, [
            'title'=>'required|max:100',
            'body'=>'required',
            'excerpt'=>'required',
            'slug'=>'required|unique:posts'
        ]);

        $data=$request->all();
        $post=new Post;
        $post->fill($data);
//        dump($post);
        $post->author_id=Auth::id();
        $post->seo_title='st';
        $post->status='PUBLISHED';

        $img='';
        //dd($_FILES['image']);
        if ($post->image!=null) $img=$_FILES['image']['name'];
//dd($img);
        // якщо вдалося скопіювати отриманий файл до сервера
        if ($post->image!=null)
            if( copy($_FILES['image']['tmp_name'], 'storage/posts/'.$img))
            {
                echo("Файл успішно завантажено <br>");
                echo('<br>Ім`я файлу: ');
                echo($img);
                echo('<br>Розмір файлу: ');
                echo($_FILES['image']['size']);
                echo('<br>Тип файлу: ');
                echo($_FILES['image']['type']);
                $post->image="posts/".$img;
                //img_min($img,"min".$img,150,150);
            }
            else
            {
                echo("Помилка завантаження файлу");
                echo $img;
            }

        $post->save();
        return redirect('/posts');
    }

}
