@extends('layouts.page_layout')
@section('content')
    <div class="container mt-5 text-center">
        <img src="{{ asset('images/posts/'.$post->image) }}" alt="" width="800px" height="500px">
        <h1 class="mt-3">{{ $post->title }}</h1>
        <p class="mt-5">{{ $post->content }}</p>
        <div>
            <a href="" type="button" class="btn btn-success">Edit</a>
            <a href="{{ route("deletePost", $post->id) }}" type="button" class="btn btn-danger">Delete</a>
        </div>
    </div>
@endsection