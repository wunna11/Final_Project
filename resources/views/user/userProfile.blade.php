@extends('layouts.page_layout')
@section('content')
<div class="container mt-4">
    <h1 class="mt-5 mb-5">User Profile</h1>
    <!-- Default form login -->
    <form class="border border-light p-5" action="#!">

        <!-- Username -->
        <label for="">Username</label>
        <input type="text" id="defaultLoginFormEmail" class="form-control mb-4">

        {{-- Email --}}
        <label for="">Email</label>
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4">

        <!-- Photo -->
        <label for="">Photo</label>
        <input type="file" id="defaultLoginFormPassword" class="form-control mb-4">

        {{-- password --}}
        <label for="">Old Password</label>
        <input type="password" class="form-control mb-4">

        <label for="">New Password</label>
        <input type="password" class="form-control mb-4">

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Submit</button>

    </form>
<!-- Default form login -->
</div>
@endsection