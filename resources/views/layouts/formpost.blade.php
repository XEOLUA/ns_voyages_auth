
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="formpost" method="POST" action="{{route('addPost')}}">
    Заголовок:<br>
    <input id="title" name="title" value="{{old('title')}}" type="text" placeholder="Назва статті"><br>
    Текст повідомлення:<br>
    <textarea id="body" name="body">{{old('body')}}</textarea><br>
    Опис:<br>
    <input type="text" value="{{old('excerpt')}}" name="excerpt" id="excerpt" placeholder="Короткий витяг"><br>
    Slug:<br>
    <input type="text" value="{{old('slug')}}" name="slug" id="slug" placeholder="slug"><br><br>
    <input type="submit" value="Відправити">
    {{csrf_field()}}
</form>
