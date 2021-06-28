<x-page_layout>

    <div class="container mt-4">
        <h1 class="mt-5 mb-5">User Profile</h1>
        <!-- Default form login -->
        <form class="border border-light p-5" action="{{ route("post_userProfile") }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (Session("success"))
                <div class="alert alert-success">
                    {{Session("success")}}
                </div>
            @endif

            @if (Session("error"))
                <div class="alert alert-danger">
                    {{Session("error")}}
                </div>
            @endif

            <!-- Username -->
            <label for="">Username</label>
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" value="{{ auth()->user()->name }}" name="username">

            {{-- Email --}}
            <label for="">Email</label>
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" value="{{ auth()->user()->email }}" name="email">

            <!-- Photo -->
            <label for="">Photo</label>
            <input type="file" id="defaultLoginFormPassword" class="form-control mb-4" name="image">
            <img src="{{ asset('images/profiles/'.auth()->user()->image )}}" width="300px" height="300px" alt=""><br>

            {{-- password --}}
            <label for="" class="mt-3">Old Password</label>
            <input type="password" class="form-control mb-4" name="old_password">

            <label for="">New Password</label>
            <input type="password" class="form-control mb-4" name="new_password">

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Submit</button>

        </form>
    <!-- Default form login -->
    </div>
</x-page_layout>