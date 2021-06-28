<x-auth_layout>

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
                    <form class="text-center" style="color: #757575;" action="{{ route("post_register") }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="md-form">
                                <!-- First name -->
                            <input type="text" class="form-control" name="username">
                            @error('username')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <label for="materialRegisterFormFirstName">Username</label>
                        </div>

                        <!-- E-mail -->
                        <div class="md-form mt-0">
                            <input type="email" id="materialRegisterFormEmail" class="form-control" name="email">
                            @error('email')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <label for="materialRegisterFormEmail">E-mail</label>
                        </div>

                        <!-- Password -->
                        <div class="md-form">
                            <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="password">
                            @error('password')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <label for="materialRegisterFormPassword">Password</label>
                        </div>

                        <label for="">Select Your Profile Picture</label>
                        <div class="md-form">
                            <input type="file" class="form-control" name="image">
                            @error('image')
                                <p class="text-danger">{{$message}}</p>
                            @enderror  
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
</x-auth_layout>