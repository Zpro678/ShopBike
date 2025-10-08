<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Panel')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="d-flex">
  
  {{-- Sidebar --}}
  @include('layouts.admin.sidebar')

  {{-- Nội dung chính --}}
  <div class="flex-grow-1">
    
    {{-- Header / Topbar --}}
    @include('layouts.admin.header')

    {{-- Content --}}
    <div class="container-fluid p-4">
      @yield('content')
    </div>

    {{-- Footer --}}
    @include('layouts.admin.footer')

  </div>
</div>
</body>
</html>
