@extends('layouts.admin.app')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="row g-4">
  <div class="col-md-4"><div class="card text-center p-3"><h5>Products</h5><h2>120</h2></div></div>
  <div class="col-md-4"><div class="card text-center p-3"><h5>Orders</h5><h2>85</h2></div></div>
  <div class="col-md-4"><div class="card text-center p-3"><h5>Users</h5><h2>40</h2></div></div>
</div>

<div class="card mt-4 p-3">
  <h5>Sales Overview</h5>
  <canvas id="salesChart"></canvas>
</div>

<script>
const ctx = document.getElementById('salesChart');
new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Jan','Feb','Mar','Apr','May'],
    datasets: [{
      label: 'Sales',
      data: [12, 19, 3, 5, 2],
      borderColor: '#ffb400',
      backgroundColor: 'rgba(255,180,0,0.3)',
      fill: true,
      tension: 0.3
    }]
  }
});
</script>
@endsection
