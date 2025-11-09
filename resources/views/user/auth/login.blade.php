@extends('layouts.user.auth.app')

<style>
    .input-custom {
        width: 90%;
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

    .p-text-danger{
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
        <h3>Login</h3>

        {{-- Hiện error từ session --}}
        @if (session('error'))
            <div id="session-error" style="color: red; background: #f8d7da; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 10px;">
                {{ session('error') }}
            </div>
        @endif

        <!-- ------------------------------ -->
        <form id="login-Form">
            <div class="wrap-input">
                <input class="user input-custom" type="text" id="email" name="email" placeholder="Email">
                <p class="p-text-danger" id="email-error"></p>
            </div>
            <div class="wrap-input">
                <input class="password input-custom" id="password" name="password" type="password" placeholder="Password">
                <p class="p-text-danger" id="password-error"></p>
            </div>

            <div id="message"></div><!-- Div để hiển thị message chung -->

            <input type="submit" value="Login"><br>
            <a class="morebtn" href="{{ route('user.register.index') }}">Create account</a>
        </form>
    </div>
</div>

<script>
    const loginForm = document.getElementById('login-Form'); // Lấy form
    const messageDiv = document.getElementById('message'); // Lấy div message
    const sessionErrorDiv = document.getElementById('session-error');// Lấy div error từ session (nếu có)

    // Lấy CSRF token từ meta tag
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Ngăn reload trang

        // Ẩn div error từ session (middleware redirect) ngay khi click submit
        if (sessionErrorDiv) {
            sessionErrorDiv.style.display = 'none';
        }

        // Reset lỗi
        document.getElementById('email-error').innerText = '';
        document.getElementById('password-error').innerText = '';
        messageDiv.style.display = 'none'; // Ẩn message cũ

        // Lấy dữ liệu form
        const data = {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
        };

        fetch("{{ route('user.login.store') }}", {
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
                window.location.href = '{{ route("user.index.index") }}';// Chuyển trang
            }
            else{
                // Lỗi: Kiểm tra loại lỗi
                if (result.errors) {
                    for (const field in result.errors) {
                        const paragraph = document.getElementById(`${field}-error`);
                        if (paragraph) {
                            paragraph.innerHTML = result.errors[field][0];
                        }
                    }
                }
                else {
                    // Lỗi khác (ví dụ: email/password sai)
                    messageDiv.innerHTML = `<p class="p-text-danger">${result.message || 'Có lỗi xảy ra!'}</p>`;
                    messageDiv.style.display = 'block';
                }
            }
        })
        .catch(error => {
            console.log('Lỗi đăng nhập:', error);
            messageDiv.innerHTML = `<p class="text-danger">Lỗi kết nối server!</p>`;
            messageDiv.style.display = 'block';
        });
    });
</script>

@endsection