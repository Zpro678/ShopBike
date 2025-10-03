@extends('layouts.admin.app')

@section('title', 'Users')
@section('page_title', 'Users')

@section('content')
<button class="btn btn-warning mb-3">➕ Add User</button>
<div class="card p-3">
  <table class="table table-hover">
    <thead><tr><th>#</th><th>Name</th><th>Email</th><th>Role</th><th>Action</th></tr></thead>
    <tbody>
      <tr>
        <td>1</td><td>Admin</td><td>admin@example.com</td><td>Admin</td>
        <td>
          <button class="btn btn-sm btn-primary">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
        <td>2</td><td>John Doe</td><td>john@example.com</td><td>User</td>
        <td>
          <button class="btn btn-sm btn-primary">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
