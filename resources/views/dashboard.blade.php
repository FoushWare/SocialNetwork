@extends('layouts.master')
@section('title')
    Dashboard !
@endsection
@section('inner-style')
    body{
    }
    .new-post{
        margin-top:300px;
    }
@endsection
@section('content')
    @include('includes.header')
    @include('includes.message-block')
    @include('includes.newPostForm')
    @include('includes.allPosts')
    @include('layouts.postModal')


@endsection
