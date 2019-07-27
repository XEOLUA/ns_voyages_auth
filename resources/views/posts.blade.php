@extends('layouts.app')
@section('content')
    @isset($posts)
        @foreach($posts as $post)
            <h1>{!! $post->title !!}</h1>
            <h4>{!! $post->created_at !!}</h4>
        @endforeach
    @endisset
@endsection
