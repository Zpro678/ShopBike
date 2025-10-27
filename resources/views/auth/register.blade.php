@extends('layouts.auth.app')

<style>
    .input{
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
    span {
        display: block;
        color: red;
        font-size: 14px;
    }
</style>

@section('main')
<div class="contact">
    <div class="container">
        <h3>Register</h3>

        <form id="registerForm">
            @csrf

            <input class="input" type="text" name="hoten" placeholder="Họ tên" value="{{ old('hoten') }}">
            <span id="hoten-error"></span><br>

            <input class="input" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
            <span id="email-error"></span><br>

            <input class="input" type="text" name="sdt" placeholder="Số điện thoại" value="{{ old('sdt') }}"
                oninput="this.value = this.value.replace(/[^0-9]/g, '');">
            <span id="sdt-error"></span><br>

            <input class="input" type="text" name="diachi" placeholder="Địa chỉ" value="{{ old('diachi') }}">
            <span id="diachi-error"></span><br>

            <input class="input" type="password" name="matkhau" placeholder="Mật khẩu">
            <span id="matkhau-error"></span><br>

            <input class="input" type="password" name="matkhau_confirmation" placeholder="Xác nhận mật khẩu">
            <span id="matkhau_confirmation-error"></span><br>

            <input type="submit" value="Create Account"><br>
            <a class="morebtn" href="{{ route('auth.login') }}">Login</a>
        </form>
    </div>
</div>

<script>
document.getElementById('registerForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    // Xóa lỗi cũ
    document.querySelectorAll('span[id$="-error"]').forEach(span => span.innerText = '');

    const formData = {
        hoten: document.querySelector('[name="hoten"]').value,
        email: document.querySelector('[name="email"]').value,
        sdt: document.querySelector('[name="sdt"]').value,
        diachi: document.querySelector('[name="diachi"]').value,
        matkhau: document.querySelector('[name="matkhau"]').value,
        matkhau_confirmation: document.querySelector('[name="matkhau_confirmation"]').value,
    };

    const response = await fetch("{{ route('api.user.register') }}", {
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
        // Lưu message vào localStorage trước khi redirect
        localStorage.setItem('reg_success_msg', res.message);
        window.location.href = res.redirect;
    } 
    else if (res.errors) {
        // Hiện lỗi từ backend Laravel (với fix cho confirmed)
        for (const key in res.errors) {
            let errorSpanId = `${key}-error`;
            let errorMessage = res.errors[key][0];
            if (key === 'matkhau' && errorMessage === 'Mật khẩu xác nhận không khớp.') {
                errorSpanId = 'matkhau_confirmation-error';
            }
            document.getElementById(errorSpanId).innerText = errorMessage;
        }
    }
});
</script>
@endsection