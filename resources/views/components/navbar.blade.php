<nav class="mb-1 navbar navbar-expand-lg navbar-dark indigo secondary-color lighten-1 sticky-top">
    <a class="navbar-brand" href="#">Social App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="{{ route("home") }}">Home
            <span class="sr-only">(current)</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route("createPost") }}">Create Post</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route("admin.index") }}">Admin Control</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("contactUs") }}">Contact Us</a>
        </li>
        
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('images/profiles/'.auth()->user()->image) }}" class="rounded-circle z-depth-0"
            alt="avatar image" width="40px" height="40px">
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
            aria-labelledby="navbarDropdownMenuLink-55">
            <a class="dropdown-item" href="">{{ auth()->user()->name }}</a>
            <a class="dropdown-item" href="{{ route("userProfile") }}">User Profile</a>
            <a class="dropdown-item" href="{{ route("logout") }}">Logout</a>
        </div>
        </li>
    </ul>
    </div>
</nav>