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
         <img class="postImage" src="storage/{{$post->image}}" align="left">
         {!! $post->body !!}
     </div>

     @if(Auth::check())
         <div class="postAdminBar">
         <a target=_blank href=admin/posts/{{$post->id}}/edit>Редагувати</a> |
         <a href=''/delete>Видалити</a>

         </div>
     @endif
 </section>
