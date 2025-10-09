@extends('layouts.admin.app')

@section('title', 'Login Admin')
@section('page_title', 'Login Admin')

@section('content')
<div class="container">

    <!-- Php -->
    {{-- Hiện success nếu từ redirect --}}
    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    {{-- Hiện error từ session --}}
    @if (session('error'))
        <div style="color: red; background: #f8d7da; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 10px;">
            {{ session('error') }}
        </div>
    @endif

    {{-- Hiện lỗi nếu có --}}
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $err)
                <p style="color: red;">{{ $err }}</p>
            @endforeach
        </div>
    @endif
    <!-- End_Php -->

    <form method="POST" action="{{ route('admin.loginAdmin.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-bold fs-5">Email</label>
            <input type="text" name="emailAdmin" placeholder="Email" class="form-control fs-6" value="{{ old('emailAdmin') }}">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold fs-5">Password</label>
            <input type="password" name="passwordAdmin" placeholder="Password" class="form-control fs-6" value="{{ old('passwordAdmin') }}">
        </div>
        <button type="submit" class="btn btn-primary fs-6">Login</button>
    </form>
</div>
@endsection