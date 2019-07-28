 <section class="postConteiner">
     <div class="postHeader">
     <div class="postTitle">
         {!! $post->title !!}
     </div>
    <div class="postDateCreated">
    {!! $post->created_at !!}
    </div>
     </div>
     <div class="postBody">
        @if($post->image!=null)
         <img class="postImage" src="storage/{{$post->image}}" align="left">
         @endif
         {!! $post->excerpt  !!}
     </div>
     @if(Auth::check()&&($role==1||$role==3))
         <div class="postAdminBar">
         <a target=_blank href=admin/posts/{{$post->id}}/edit>Редагувати</a> |
         <a href=postdel/{{$post->id}}>Видалити</a>
         </div>
     @endif
 </section>
