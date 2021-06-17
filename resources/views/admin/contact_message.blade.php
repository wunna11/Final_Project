@extends('layouts.admin_layout')
@section('content')
    <h1>Contact Message</h1>
    <table class="table table-hover">
        <thead class="aqua-gradient white-text">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <button type="button" class="btn btn-sm btn-success">Update</button>
                <button type="button" class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
@endsection