@section('cssCategory')
<link href="@theme_admin('dist/css/category.css') " rel="stylesheet">
@endsection

{{-- Modal thêm danh mục mới --}}
<div id="addCategoryModal" class="custom-modal">
    <div class="custom-modal-content">
        <span id="closeCategoryModalBtn" class="custom-close">&times;</span>
        <h5>Thêm danh mục mới</h5>
        <form method="POST" action = "{{ route('admin.addCategories') }}">
            @csrf
            <div class="form-group mb-2">
                <label>Tên danh mục</label>
                <input type="text" name="ten_danh_muc" class="form-control" placeholder="Nhập tên danh mục" required>
            </div>
            <div class="form-group mb-2">
                <label>Loại danh mục</label>
                <input type="text" name="loai_danh_muc" class="form-control" placeholder="Nhập loại danh mục" required>
            </div>
            <div class="form-group mb-2">
                <label>Mô tả</label>
                <textarea name="mo_ta" class="form-control" rows="3" placeholder="Mô tả danh mục"></textarea>
            </div>
            <div class="text-end mt-2">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <button type="button" id="closeCategoryModalBtn2" class="btn btn-secondary">Đóng</button>
            </div>
        </form>
    </div>
</div>
