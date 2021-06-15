@extends('layouts.auth_layout')
@section('content')
    <div class="container mt-5">
        <div class="col-md-6 offset-3">
            <!-- Material form register -->
            <div class="card">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Sign up</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="#!">

                        <div class="md-form">
                                <!-- First name -->
                            <input type="text" id="materialRegisterFormFirstName" class="form-control">
                            <label for="materialRegisterFormFirstName">Username</label>
                        </div>

                        <!-- E-mail -->
                        <div class="md-form mt-0">
                            <input type="email" id="materialRegisterFormEmail" class="form-control">
                            <label for="materialRegisterFormEmail">E-mail</label>
                        </div>

                        <!-- Password -->
                        <div class="md-form">
                            <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                            <label for="materialRegisterFormPassword">Password</label>
                        </div>

                        <label for="">Select Your Profile Picture</label>
                        <div class="md-form">
                            <input type="file" class="form-control">  
                        </div>
                    
                        

                        <!-- Newsletter -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                            <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                        </div>

                        <!-- Sign up button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
                        <a href="{{ route("login") }}">Already Register</a>
                    </form>
                    <!-- Form -->

                </div>

            </div>
<!-- Material form register -->
        </div>
    </div>
@endsection