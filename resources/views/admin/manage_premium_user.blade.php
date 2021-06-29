<x-admin_layout>
    <h1>Manage Premium User</h1>
    <table class="table table-hover">
        <thead class="aqua-gradient white-text">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">isAdmin</th>
            <th scope="col">isPremium</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td><b>{{$user->isAdmin == '0' ? 'FALSE' : 'TRUE'}}</b></td>
              <td><b>{{$user->isPremium == '0' ? 'FALSE' : 'TRUE'}}</b></td>
              <td>
                <a  href="{{ route('editUser', $user->id) }}" type="button" class="btn btn-sm btn-success">Update</a>
                <a href="{{ route('deleteUser', $user->id) }}" type="button" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</x-admin_layout>