@extends('layouts.auth.app')

<style>
    .user-input,
    .password-input {
        width: 90% !important;
        padding: 10px;
        border: 1px solid #b7b7b7;
        font-size: 1em;
        margin-bottom: 0 !important;
        font-style: italic;
        color: #000;
        background: #fff;
        outline: none;
        font-weight: 400;
        border-radius: 7px;
        transition: 0.5s all ease;
    }
    span{
        display: block;
    }
    /* Style cho success message động */
    #session-success {
        color: green;
        background: #d4edda;
        padding: 10px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        margin-bottom: 10px;
    }
</style>

@section('main')
<div class="contact">
    <div class="container">
        <h3>Login</h3>

        {{-- Giữ nguyên cho session success nếu cần --}}
        <!-- @if (session('success'))
            <div id="session-success" class="session-message">
                {{ session('success') }}
            </div>
        @endif -->

        @if (session('error'))
            <div id="session-error" style="color: red; background: #f8d7da; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 10px;">
                {{ session('error') }}
            </div>
        @endif

        {{-- Div success động, ẩn ban đầu --}}
        <div id="session-success" style="display: none;"></div>

        <form id="loginForm">
            @csrf

            <input class="user-input" type="text" id="email" name="email" placeholder="Email">
            <span id="email-error" style="color:red; font-size:14px;"></span><br>

            <input class="password-input" id="password" name="password" type="password" placeholder="Password">
            <span id="password-error" style="color:red; font-size:14px;"></span><br>

            <input type="submit" value="Login"><br>
            <a class="morebtn" href="{{ route('auth.register') }}">Create account</a>
        </form>
    </div>
</div>

<script>
    // Đọc message từ localStorage khi trang load
    const regSuccessMsg = localStorage.getItem('reg_success_msg');
    if (regSuccessMsg) {
        const successDiv = document.getElementById('session-success');
        successDiv.innerText = regSuccessMsg;
        successDiv.style.display = 'block';
        localStorage.removeItem('reg_success_msg');  // Xóa để không hiện lại nếu refresh
    }

    document.getElementById('loginForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        // Xóa success div khi submit (nếu có)
        const successDiv = document.getElementById('session-success');
        if (successDiv && successDiv.style.display !== 'none') {
            successDiv.style.display = 'none';
        }

        const sessionError = document.getElementById('session-error');
        if (sessionError) sessionError.remove();

        // Xóa lỗi cũ
        document.getElementById('email-error').innerText = '';
        document.getElementById('password-error').innerText = '';

        const formData = {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
        };

        const response = await fetch("{{ route('api.user.login') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(formData)
        });

        const res = await response.json();

        if (res.success) {
            window.location.href = res.redirect;
        } 
        else if (res.errors) {
            for (const key in res.errors) {
                document.getElementById(`${key}-error`).innerText = res.errors[key][0];
            }
        }
    });
</script>
@endsection