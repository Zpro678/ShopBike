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
        
       
    <form onsubmit="return validateForm()" method="POST" action="{{ route('auth.register.store') }}">
    @csrf

    <!-- Họ tên -->
    <div style="margin-bottom: 10px;">
        <input class="user" type="text" name="hoten" placeholder="Username" value="{{ old('hoten') }}" ><br>
        <small id="error-hoten" style="color:red; font-size:14px;"></small>
    </div>

    <!-- Email -->
    <div style="margin-bottom: 10px;">
        <input class="user" type="text" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <small id="error-email" style="color:red; font-size:14px;"></small>
    </div>

    <!-- Số điện thoại -->
    <div style="margin-bottom: 10px;">
        <input class="user" type="text" name="sdt" placeholder="Số điện thoại" value="{{ old('sdt') }}"   
        oninput="this.value = this.value.replace(/[^0-9]/g, '');"><br>
        <small id="error-sdt" style="color:red; font-size:14px;"></small>
    </div>

    <!-- Địa chỉ -->
    <div style="margin-bottom: 10px;">
        <input class="user" type="text" name="diachi" placeholder="Địa chỉ" value="{{ old('diachi') }}"><br>
        <small id="error-diachi" style="color:red; font-size:14px;"></small>
    </div>

    <!-- Mật khẩu -->
    <div style="margin-bottom: 10px;">
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
        <small id="error-matkhau" style="color:red; font-size:14px;"></small>
    </div>

    <!-- Xác nhận mật khẩu -->
    <div style="margin-bottom: 10px;">
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
        <small id="error-matkhau_confirmation" style="color:red; font-size:14px;"></small>
    </div>

    <input type="submit" value="Create Account"><br>
    <a class="morebtn" href="{{ route('auth.login') }}">Login</a>
</form>
        
    </div>
</div>

<script>
function validateForm() {
    // Lấy giá trị các trường
    const hoten = document.querySelector('[name="hoten"]').value.trim();
    const email = document.querySelector('[name="email"]').value.trim();
    const sdt = document.querySelector('[name="sdt"]').value.trim();
    const diachi = document.querySelector('[name="diachi"]').value.trim();
    const matkhau = document.querySelector('[name="matkhau"]').value;
    const matkhau_confirmation = document.querySelector('[name="matkhau_confirmation"]').value;

    // Xóa lỗi cũ
    document.querySelectorAll("small[id^='error-']").forEach(e => e.textContent = "");

    let valid = true;

    // Họ tên
    if (hoten === "") {
        document.getElementById("error-hoten").textContent = "Tên không được để trống.";
        valid = false;
    }

    // Email
    if (email === "") {
        document.getElementById("error-email").textContent = "Email không được để trống.";
        valid = false;
    } else if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
        document.getElementById("error-email").textContent = "Email không hợp lệ.";
        valid = false;
    }

    // Số điện thoại
    if (sdt === "") {
        document.getElementById("error-sdt").textContent = "Số điện thoại không được để trống.";
        valid = false;
    } else if (!/^[0-9]{1,15}$/.test(sdt)) {
        document.getElementById("error-sdt").textContent = "Số điện thoại phải là số và tối đa 15 chữ số.";
        valid = false;
    }

    // Địa chỉ
    if (diachi === "") {
        document.getElementById("error-diachi").textContent = "Địa chỉ không được để trống.";
        valid = false;
    }

    // Mật khẩu
    if (matkhau === "") {
        document.getElementById("error-matkhau").textContent = "Mật khẩu không được để trống.";
        valid = false;
    } else if (matkhau.length < 1) {
        document.getElementById("error-matkhau").textContent = "Mật khẩu phải ít nhất 1 ký tự.";
        valid = false;
    }

    // Xác nhận mật khẩu
    if (matkhau_confirmation === "") {
        document.getElementById("error-matkhau_confirmation").textContent = "Vui lòng nhập lại mật khẩu xác nhận.";
        valid = false;
    } else if (matkhau !== matkhau_confirmation) {
        document.getElementById("error-matkhau_confirmation").textContent = "Mật khẩu xác nhận không khớp.";
        valid = false;
    }

    return valid;
}
</script>
@endsection