<x-page_layout>
<h1>{{ auth()->user()->name }}</h1> 
{{-- background image --}}
    <header></header>

    {{-- post  --}}
    <div class="container">
        <h1 class="mt-3">All Posts</h1>
        <div class="row mt-3">
            @foreach ($posts as $post)
            <div class="col-md-4 mt-3">
                <!-- Card -->
                <div class="card">

                    <!-- Card image -->
                    <div class="view overlay">
                    <img class="card-img-top" src="{{ asset('images/posts/'.$post->image) }}"
                        alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>
                
                    <!-- Card content -->
                    <div class="card-body">
                
                    <!-- Title -->
                    <h4 class="card-title">{{$post->title}}</h4>
                    <!-- Text -->
                    {{-- <p class="card-text">{{$post->content}}</p> --}}
                    <!-- Button -->
                    <a href="{{ route("showPostById", $post->id) }}" class="btn btn-primary">See More</a>
                
                    </div>
                
                </div>
                <!-- Card -->
            </div>
            @endforeach
            
        </div>
    </div>
</x-page_layout>