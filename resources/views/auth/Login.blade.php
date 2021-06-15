@extends('layouts.auth_layout')
@section('content')
    <div class="container mt-5">
        <div class="col-md-6 offset-3">
            <!-- Material form login -->
            <div class="card">

                <h5 class="card-header info-color white-text text-center py-4">
                <strong>Sign in</strong>
                </h5>
            
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
            
                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="#!">
            
                    <!-- Email -->
                    <div class="md-form">
                    <input type="email" id="materialLoginFormEmail" class="form-control">
                    <label for="materialLoginFormEmail">E-mail</label>
                    </div>
            
                    <!-- Password -->
                    <div class="md-form">
                    <input type="password" id="materialLoginFormPassword" class="form-control">
                    <label for="materialLoginFormPassword">Password</label>
                    </div>
            
                    <div class="d-flex justify-content-around">
                    <div>
                        <!-- Forgot password -->
                        <a href="">Forgot password?</a>
                    </div>
                    </div>
            
                    <!-- Sign in button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Login</button>
            
                    <!-- Register -->
                    <a href="{{ route("register") }}">Register</a>
                    </p>
            
                    <!-- Social login -->
                    <p>or sign in with:</p>
                    <a type="button" class="btn-floating btn-fb btn-sm">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                    <i class="fab fa-github"></i>
                    </a>
            
                </form>
                <!-- Form -->
            
                </div>
            
            </div>
  <!-- Material form login -->
        </div>
    </div>
@endsection