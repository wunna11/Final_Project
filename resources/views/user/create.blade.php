@extends('layouts.page_layout')
@section('content')
    
    <div class="container mt-4">
        <h1 class="mt-5 mb-5">Create Post</h1>
        <!-- Default form login -->
        <form class="border border-light p-5" action="{{ route("post") }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <label for="">Title</label>
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Title" name="title">
            
            <!-- Photo -->
            <label for="">Photo</label>
            @error('image')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="file" id="defaultLoginFormPassword" class="form-control mb-4" name="image">

            {{-- Content --}}
            <label for="">Content</label>
            @error('content')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <textarea name="content" id="" cols="30" rows="10" class="form-control mb-4"></textarea>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Create</button>

        </form>
<!-- Default form login -->
    </div>
@endsection