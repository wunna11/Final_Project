<x-admin_layout>
    <h1>Contact Message</h1>
    <table class="table table-hover">
        <thead class="aqua-gradient white-text">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($messages as $message)
            <tr>
              <th scope="row">{{$message->id}}</th>
              <td>{{$message->username}}</td>
              <td>{{$message->email}}</td>
              <td>{{$message->content}}</td>
              <td><button type="button" class="btn btn-sm btn-success">Update</button></td>
              <td><button type="button" class="btn btn-sm btn-danger">Delete</button></td>
            </tr>
          @endforeach
        </tbody>
      </table>
</x-admin_layout>