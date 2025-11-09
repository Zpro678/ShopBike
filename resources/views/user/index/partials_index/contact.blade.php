<!-- contact -->
<div class="contact">
    <div class="container">
        <h3>CONTACT US</h3>
        <p>Please contact us for all inquiries and purchase options.</p>

        <form onsubmit="submitForm(event)" action="{{ route('user.index.index') }}" method="POST" 
            class="p-5 shadow-lg rounded-4 bg-white mx-auto my-5" style="max-width: 480px;">
            @csrf
            <h3 class="text-center mb-4 fw-bold text-primary">📩 Liên hệ với chúng tôi</h3>

            <div class="mb-4">
                <label for="title" class="form-label fw-semibold">Tiêu đề</label>
                <input type="text" id="title" name="title" class="form-control form-control-lg w-100" placeholder="Nhập tiêu đề" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="form-label fw-semibold">Số điện thoại</label>
                <input type="text" id="phone" name="phone" class="form-control form-control-lg w-100" placeholder="Nhập số điện thoại" pattern="[0-9]{10}" required>
                <div class="form-text text-muted fst-italic">📌 Số điện thoại phải có đúng 10 chữ số</div>
            </div>

            <div class="mb-4">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg w-100" placeholder="user@domain.com" required>
            </div>

            <div class="mb-4">
                <label for="content" class="form-label fw-semibold">Nội dung</label>
                <textarea id="content" name="content" class="form-control form-control-lg w-100" rows="5" placeholder="Nhập nội dung tin nhắn..." required></textarea>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg fw-semibold shadow-sm">Gửi ngay 🚀</button>
            </div>
        </form>
    </div>
</div>
