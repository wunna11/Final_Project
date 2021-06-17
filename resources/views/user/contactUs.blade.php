@extends('layouts.page_layout')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6">
                {{-- Map --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488799.4874426368!2d95.90137530340911!3d16.838952487010044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon%2C%20Myanmar%20(Burma)!5e0!3m2!1sen!2sus!4v1623940348993!5m2!1sen!2sus" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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