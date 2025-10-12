<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\sanpham_hinhanh;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'tensp' => 'required|string|max:150',
            'gia' => 'required|numeric|min:0',
            'soluong' => 'required|integer|min:0',
            'danhmuc_id' => 'required|integer',
            'mota' => 'nullable|string',
            'hinhanh' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Thêm Sản Phẩm
        $SanPham = SanPham::create([
            'TenSP' => $request->tensp,
            'Gia' => $request->gia,
            'MoTa' => $request->mota,
            'SoLuongTon' => $request->soluong,
            'MaDanhMuc' => $request->danhmuc_id,
            'MaThuongHieu' => 2, // tạm thời cố định
            'TrangThai' => $request->trangthai,
        ]);

        if($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('user/images'), $filename);
            // Lưu tên file vào database nếu cần
            $HinhAnh = sanpham_hinhanh::create([
                'MaSP' => $SanPham->MaSP,
                'UrlHinh' => $filename
            ]);
        }

        if ($SanPham){
            return redirect()->route('admin.addproducts')->with('success', true);
        }

        return redirect()->route('admin.addproducts')->with('success', false);
    }

    
}
