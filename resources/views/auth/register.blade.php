@extends('layouts.auth.app')

@section('main')
<div class="contact">
    <div class="container">
        <h3>Register</h3>

        {{-- Hiện lỗi nếu có --}}
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $err)
                    <p style="color: red;">{{ $err }}</p>
                @endforeach
            </div>
        @endif
        
        <form method="POST" action="{{ route('auth.register.store') }}">
            @csrf
            <input class="user" type="text" name="hoten" placeholder="Username" value="{{ old('hoten') }}"><br>
            
            <input class="user" type="text" name="email" placeholder="Email" value="{{ old('email') }}"><br>

            <input class="user" type="text" name="sdt" placeholder="Số điện thoại" value="{{ old('sdt') }}"><br>

            <input class="user" type="text" name="diachi" placeholder="Dia Chi" value="{{ old('diachi') }}"><br>
            
            <input class="" type="password" name="matkhau" placeholder="Password" style="
                width: 90%;
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
            " value="{{ old('matkhau') }}"><br>
            
            <input class="" type="password" name="matkhau_confirmation" placeholder="Confirm Password" style="
                width: 90%;
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
            " value="{{ old('matkhau_confirmation') }}"><br>
            
            <input type="submit" value="Create Account"><br>
            <a class="morebtn" href="{{ route('auth.login') }}">Login</a>
        </form>
        
    </div>
</div>
@endsection