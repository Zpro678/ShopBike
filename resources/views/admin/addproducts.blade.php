@extends('layouts.admin.app')

@section('title', 'addproducts')
@section('page_title', 'addproducts')

@section('content')

<body>

    <div id="wrapper">
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm sản phẩm mới</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nhập thông tin sản phẩm
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- Form thêm sản phẩm --}}
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        {{-- Tên sản phẩm --}}
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input type="text" name="tensp" class="form-control"
                                                placeholder="Nhập tên sản phẩm" required>
                                        </div>

                                        {{-- Giá --}}
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                            <input type="number" name="gia" class="form-control" min="0"
                                                placeholder="Nhập giá sản phẩm" required>
                                        </div>

                                        {{-- Số lượng --}}
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                                            <input type="number" name="soluong" class="form-control" min="0"
                                                placeholder="Nhập số lượng" required>
                                        </div>

                                        {{-- Mô tả --}}
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea name="mota" class="form-control" rows="3"
                                                placeholder="Mô tả sản phẩm..."></textarea>
                                        </div>

                                        {{-- Danh mục --}}
                                        <div class="form-group">
                                            <label>Danh mục</label>
                                            <select name="danhmuc_id" id="danhmucSelect" class="form-control select2"
                                                required>
                                                <option value="">-- Chọn danh mục --</option>

                                            </select>
                                            <span class="input-group-btn">
                                                <button type="button" id="openCategoryModalBtn"
                                                    class="btn btn-success mb-3">
                                                    Thêm danh mục mới
                                                </button>
                                            </span>
                                        </div>

                                        {{-- Hình ảnh --}}
                                        <div class="form-group">
                                            <label>Hình ảnh sản phẩm</label>
                                            <input type="file" name="hinhanh" class="form-control" accept="image/*">
                                        </div>

                                        {{-- Sản phẩm hot --}}
                                        <!-- <div class="form-group">
                                    <label>Đánh dấu sản phẩm hot</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="is_hot" value="1"> Có
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="is_hot" value="0" checked> Không
                                    </label>
                                </div> -->

                                        {{-- Trạng thái --}}
                                        <div class="form-group">
                                            <label>Trạng thái</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="trangthai" value="1" checked> Hiển thị
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="trangthai" value="0"> Ẩn
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Thêm
                                            sản phẩm</button>
                                        <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Làm
                                            mới</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('admin.addCategories');
                </div>

                {{-- Cột phụ (ví dụ preview hình ảnh hoặc thông tin khác) --}}
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Gợi ý hiển thị
                        </div>
                        <div class="panel-body text-center">
                            <p>Ảnh sản phẩm sẽ hiển thị tại đây sau khi tải lên.</p>
                            <img id="preview" src="" alt="Preview" class="img-responsive"
                                style="max-height: 200px; display:none;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hiếu -->
    {{-- Script xem trước ảnh --}}
    <script>
    document.querySelector('input[name="hinhanh"]').addEventListener('change', function(e) {
        const preview = document.getElementById('preview');
        const file = e.target.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    });
    </script>
    <script>
    const apiCategoryUrl = "{{ route('api.categories') }}";
    const modal = document.getElementById('addCategoryModal');
    const openBtn = document.getElementById('openCategoryModalBtn');
    const closeBtn = document.getElementById('closeCategoryModalBtn');
    const closeBtn2 = document.getElementById('closeCategoryModalBtn2');

    // Mở modal
    openBtn.onclick = () => modal.style.display = 'block';

    // Đóng modal
    closeBtn.onclick = () => modal.style.display = 'none';
    closeBtn2.onclick = () => modal.style.display = 'none';

    // Đóng khi click ra ngoài modal
    window.onclick = (e) => {
        if (e.target == modal) modal.style.display = 'none';
    }
    </script>
    <script src=" @theme_admin('dist/js/addproducts.js') "> </script>


    <!-- Hiếu -->
    @if(isset($success))
    @if ($success)
    <script>
    alert('Thêm thành công!');
    </script>
    @else
    <script>
    alert('Thêm thất bại. Vui lòng thử lại.');
    </script>
    @endif
    @endif
</body>
@endsection