@extends('layouts.app')
@section('content')
    @if(Auth::check()&&($role==1||$role==3))
        <a href="postadd" title="Створення нового повідомлення">Створити</a>
    @endif
    @isset($posts)
        @foreach($posts as $post)
             @include('layouts.onepost',['post'=>$post])
        @endforeach
    @endisset
@endsection
