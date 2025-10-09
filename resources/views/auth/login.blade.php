@extends('layouts.auth.app')

@section('main')
<div class="contact">
    <div class="container">
        <h3>Login</h3>

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
        
        <form method="POST" action="{{ route('auth.login.store') }}">
            @csrf
            <input class="user" type="text" name="email" placeholder="Email" value="{{ old('email') }}"><br>
            <input name="matkhau" type="password" placeholder="Password" style="
                width: 90%; /* Chọn 90% vì nó ở cuối, nếu muốn 43% thì thay đổi */
                margin-right: 4%;
                padding: 10px;
                border: 1px solid #b7b7b7;
                font-size: 1em;
                margin-bottom: 2em;
                font-style: italic;
                color: #000;
                background: #fff;
                outline: none;
                font-weight: 400;
                border-radius: 7px;
                transition: 0.5s all ease;
                -webkit-transition: 0.5s all ease;
                -moz-transition: 0.5s all ease;
                -o-transition: 0.5s all ease;
                -ms-transition: 0.5s all ease;
                /* resize: none; - Bỏ vì input password không hỗ trợ resize, chỉ dùng cho textarea */
            " value="{{ old('matkhau') }}"><br>
            <input type="submit" value="Login"><br>
            <a class="morebtn" href="{{ route('auth.register') }}">Create account</a>
        </form>
        
    </div>
</div>
@endsection