<x-page_layout>

    <div class="container mt-4">
        <h1 class="mt-5 mb-5">Edit Post</h1>
        <!-- Default form login -->
        <form class="border border-light p-5" action="{{ route("updatePost", $edit_data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <label for="">Title</label>
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Title" name="title" value="{{$edit_data->title}}">
            

            <!-- Photo -->
            <label for="">Photo</label>
            @error('image')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <input type="file" id="defaultLoginFormPassword" class="form-control mb-4" name="image">
            <img src="{{ asset('images/posts/'.$edit_data->image) }}" alt="" width="300px" height="200px"><br>

            {{-- Content --}}
            <label for="" class="mt-4">Content</label>
            @error('content')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <textarea name="content" id="" cols="30" rows="10" class="form-control mb-4">{{$edit_data->content}}</textarea>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Update</button>

        </form>
<!-- Default form login -->
    </div>
</x-page_layout>