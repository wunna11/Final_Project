<x-admin_layout>
     <!-- Default form login -->
     <form class="text-center border border-light p-5" action="{{ Route("updateUser", $edit_user->id) }}" method="POST">
        @csrf
        <p class="h4 mb-4">Edit User</p>

        {{-- Username --}}
        <input type="text" class="form-control mb-4" placeholder="Username" name="username" value="{{$edit_user->name}}">
        @error('username')
            <p class="text-danger">{{$message}}</p>
        @enderror

        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" value="{{$edit_user->email}}">
        @error('email')
            <p class="text-danger">{{$message}}</p>
        @enderror

        {{-- isAdmin --}}
        <label for="">isAdmin</label>
        <select name="isAdmin" id="" class="form-control mb-4">
            <option value="1" {{$edit_user->isAdmin=='1' ? 'selected' : ''}}>True</option>
            <option value="0" {{$edit_user->isAdmin=='0' ? 'selected' : ''}}>False</option>
        </select>

        {{-- isPremium --}}
        <label for="">isPremium</label>
        <select name="isPremium" id="" class="form-control mb-4">
            <option value="1" {{$edit_user->isPremium=='1' ? 'selected' : ''}}>True</option>
            <option value="0" {{$edit_user->isPremium=='0' ? 'selected' : ''}}>False</option>
        </select>
        
        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Update</button>

    </form>
<!-- Default form login -->
</x-admin_layout>