@extends('layouts.user.auth.app')

<style>
    .input-custom {
        width: 90% !important;
        margin-right: 4%;
        margin-bottom: 0 !important;
        padding: 10px;
        border: 1px solid #b7b7b7;
        border-radius: 7px;
        font-size: 1em;
        font-style: italic;
        font-weight: 400;
        color: #000;
        background: #fff;
        outline: none;
        transition: 0.5s all ease;
    }

    .wrap-input {
        margin-bottom: 2em;
    }

    .p-text-danger {
        color: red !important;
        font-size: 14px !important;
        font-weight: bold !important;
    }

    #message {
        margin-top: 10px;
        padding: 10px;
        border-radius: 5px;
        display: none; /* Ẩn mặc định */
    }
</style>

@section('main')
<div class="contact">
    <div class="container">
        <h3>Register</h3>
        <!-- ------------------------------------ -->
        <form id="register-form">
            <!-- Họ tên -->
            <div class="wrap-input">
                <input class="input-custom" type="text" id="hoten" name="hoten" placeholder="Họ tên">
                <p class="p-text-danger" id="hoten-error"></p>
            </div>

            <!-- Email -->
            <div class="wrap-input">
                <input class="input-custom" type="text" id="email" name="email" placeholder="Email">
                <p class="p-text-danger" id="email-error"></p>
            </div>

            <!-- Số điện thoại -->
            <div class="wrap-input">
                <input class="input-custom" type="text" id="sdt" name="sdt" placeholder="Số điện thoại">
                <p class="p-text-danger" id="sdt-error"></p>
            </div>

            <!-- Địa chỉ -->
            <div class="wrap-input">
                <input class="input-custom" type="text" id="diachi" name="diachi" placeholder="Địa chỉ">
                <p class="p-text-danger" id="diachi-error"></p>
            </div>

            <!-- Mật khẩu -->
            <div class="wrap-input">
                <input class="input-custom" type="password" id="matkhau" name="matkhau" placeholder="Mật khẩu">
                <p class="p-text-danger" id="matkhau-error"></p>
            </div>

            <!-- Xác nhận mật khẩu -->
            <div class="wrap-input">
                <input class="input-custom" type="password" id="matkhau_confirmation" name="matkhau_confirmation" placeholder="Xác nhận mật khẩu">
                <p class="p-text-danger" id="matkhau_confirmation-error"></p>
            </div>

            <div id="message"></div><!-- Hiển thị thông báo chung -->

            <input type="submit" value="Create Account">
            <br>
            <a class="morebtn" href="{{ route('user.login.index') }}">Login</a>
        </form>

    </div>
</div>

<script>
    const registerForm = document.getElementById('register-form');
    const messageDiv = document.getElementById('message');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    registerForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Reset lỗi cũ
        document.querySelectorAll('.p-text-danger').forEach(p => p.innerText = '');
        messageDiv.style.display = 'none';
        messageDiv.innerHTML = '';

        // Lấy dữ liệu form
        const data = {
            hoten: document.getElementById('hoten').value,
            email: document.getElementById('email').value,
            sdt: document.getElementById('sdt').value,
            diachi: document.getElementById('diachi').value,
            matkhau: document.getElementById('matkhau').value,
            matkhau_confirmation: document.getElementById('matkhau_confirmation').value,
        };

        fetch("{{ route('user.register.store') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                // Đăng ký thành công
                messageDiv.innerHTML = `<p style="color:green; font-weight:bold;">${result.message}</p>`;
                messageDiv.style.display = 'block';
                // Chuyển qua trang login
                setTimeout(() => {
                    window.location.href = "{{ route('user.login.index') }}";
                }, 1500);
            } else {
                // Lỗi xác thực
                if (result.errors) {
                    for (const field in result.errors) {
                        const paragraph = document.getElementById(`${field}-error`);
                        if (paragraph) {
                            paragraph.innerText = result.errors[field][0];
                        }
                    }
                } else {
                    // Lỗi khác
                    messageDiv.innerHTML = `<p class="p-text-danger">${result.message || 'Có lỗi xảy ra!'}</p>`;
                    messageDiv.style.display = 'block';
                }
            }
        })
        .catch(error => {
            console.error('Lỗi đăng ký:', error);
            messageDiv.innerHTML = `<p class="p-text-danger">Lỗi kết nối đến server!</p>`;
            messageDiv.style.display = 'block';
        });
    });
</script>
@endsection
