
@extends('layouts.app')

@section('content')
    @isset($page){!! $page->body !!} @endisset
@endsection

