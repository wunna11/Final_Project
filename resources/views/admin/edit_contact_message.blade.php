<x-admin_layout>
    <form class="text-center border border-light p-5" action="{{ Route("updateMessage", $edit_message->id) }}" method="POST">
        @csrf
        <p class="h4 mb-4">Update Message</p>

        {{-- Username --}}
        <input type="text" class="form-control mb-4" placeholder="Username" name="username" value="{{$edit_message->username}}">
        @error('username')
            <p class="text-danger">{{$message}}</p>
        @enderror

        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" value="{{$edit_message->email}}">
        @error('email')
            <p class="text-danger">{{$message}}</p>
        @enderror

        {{-- Message --}}
        <textarea name="text" id="" cols="30" rows="10" placeholder="Content" class="form-control mb-4">{{$edit_message->content}}</textarea>
        @error('text')
            <p class="text-danger">{{$message}}</p>
        @enderror

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Update</button>

    </form>
<!-- Default form login -->
</x-admin_layout>