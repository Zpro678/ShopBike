@extends('layouts.admin.app')

@section('title', 'Orders')
@section('page_title', 'Orders')

@section('content')
<div class="card p-3">
  <table class="table table-bordered">
    <thead>
      <tr><th>#</th><th>Customer</th><th>Product</th><th>Status</th><th>Date</th></tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td><td>John Doe</td><td>Road Bike</td>
        <td><span class="badge bg-success">Completed</span></td>
        <td>2025-10-01</td>
      </tr>
      <tr>
        <td>2</td><td>Mary Jane</td><td>Helmet</td>
        <td><span class="badge bg-warning">Pending</span></td>
        <td>2025-10-02</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
