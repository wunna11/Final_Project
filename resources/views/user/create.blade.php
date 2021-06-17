@extends('layouts.page_layout')
@section('content')
    
    <div class="container mt-4">
        <h1 class="mt-5 mb-5">Create Post</h1>
        <!-- Default form login -->
        <form class="border border-light p-5" action="{{ route("post") }}" method="post">
            @csrf
            <!-- Title -->
            <label for="">Title</label>
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Title">

            <!-- Photo -->
            <label for="">Photo</label>
            <input type="file" id="defaultLoginFormPassword" class="form-control mb-4">

            {{-- Content --}}
            <label for="">Content</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control mb-4"></textarea>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Create</button>

        </form>
<!-- Default form login -->
    </div>
@endsection