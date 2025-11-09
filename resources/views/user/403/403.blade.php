@extends('layouts.user.auth.app')

@section('title', '403 - Không đủ quyền truy cập')

<style>
    .a-center{
        text-align: center !important;
        font-size: 18px !important;
        display: block !important;
        margin: 0 auto !important;
        width: fit-content;
    }
</style>

@section('main')
<div class="container-fluid">
    <h1>Bạn không đủ quyền truy cập trang này!</h1>
    <br>

    <a href="{{ route('user.index.index') }}" class="btn btn-primary a-center">Về trang chủ</a> {{-- Adjust route 'home' --}}
</div>
@endsection