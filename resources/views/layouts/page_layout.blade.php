<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final Project</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- notification --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>
<body>
    <!--Navbar -->
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
                {{-- <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0"
                alt="avatar image"> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
                aria-labelledby="navbarDropdownMenuLink-55">
                <a class="dropdown-item" href="{{ route("userProfile") }}">User Profile</a>
                <a class="dropdown-item" href="{{ route("logout") }}">Logout</a>
            </div>
            </li>
        </ul>
        </div>
    </nav>
  <!--/.Navbar -->
    @yield('content')
    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    {{-- notification --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script>
        @if(Session("message"))
            let msg = "{{Session("message")}}";
            toastr.success(msg);
        @endif
    </script>
</body>
</html>