@extends('layouts.page_layout')
@section('content')
{{-- background image --}}
    <header></header>

    {{-- post  --}}
    <div class="container">
        <h1 class="mt-3">All Posts</h1>
        <div class="row mt-3">
            @foreach (range(1,10) as $item)
            <div class="col-md-4 mt-3">
                <!-- Card -->
                <div class="card">

                    <!-- Card image -->
                    <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                        alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>
                
                    <!-- Card content -->
                    <div class="card-body">
                
                    <!-- Title -->
                    <h4 class="card-title">Card title</h4>
                    <!-- Text -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">Button</a>
                
                    </div>
                
                </div>
                <!-- Card -->
            </div>
            @endforeach
            
        </div>
    </div>
@endsection