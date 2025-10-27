<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\SanPhamHinhAnh;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    //
    public function store(Request $request)
    {
        // PHieu
        $request->validate([
            'tensp' => 'required|string|max:150',
            'gia' => 'required|numeric|min:0',
            'soluong' => 'required|integer|min:0',
            'danhmuc_id' => 'required|integer',
            'mota' => 'nullable|string',
            'hinhanh' => 'image|mimes:jpg,jpeg,png|max:2048', // validate hinh anh
        ]);

        // bat buoc truyen object
        $sanPham = SanPham::createSP($request);

        if ($sanPham) {
            return redirect()->route('admin.addproducts')->with('success', true);
        }

        return redirect()->route('admin.addproducts')->with('success', false);
    }
}
