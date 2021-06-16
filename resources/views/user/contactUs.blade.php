@extends('layouts.page_layout')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6">
                {{-- Map --}}
            </div>
            <div class="col-md-6">
                <!-- Default form login -->
                <form class="text-center border border-light p-5" action="#!">

                    <p class="h4 mb-4">Contact Us</p>

                    {{-- Username --}}
                    <input type="text" class="form-control mb-4" placeholder="Username">

                    <!-- Email -->
                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                    {{-- Message --}}
                    <textarea name="text" id="" cols="30" rows="10" placeholder="Content" class="form-control mb-4"></textarea>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit">Send Message</button>

                </form>
            <!-- Default form login -->
            </div>
        </div>
    </div>
@endsection