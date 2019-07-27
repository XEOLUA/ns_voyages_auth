@extends('layouts.app')
@section('content')
    @isset($posts)
        @foreach($posts as $post)
             @include('layouts.onepost',['post'=>$post])
        @endforeach
    @endisset
@endsection
