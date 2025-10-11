@extends('layouts.admin.app')

@section('title', 'Products')
@section('page_title', 'Products')

@section('content')
<button class="btn btn-warning mb-3">➕ Add Product</button>
<div class="card p-3">
  <table class="table table-striped">
    <thead><tr><th>#</th><th>Name</th><th>Price</th><th>Stock</th><th>Action</th></tr></thead>
    <tbody>
      <tr>
        <td>1</td><td>Road Bike</td><td>$500</td><td>20</td>
        <td>
          <button class="btn btn-sm btn-primary">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
        <td>2</td><td>Helmet</td><td>$50</td><td>100</td>
        <td>
          <button class="btn btn-sm btn-primary">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
