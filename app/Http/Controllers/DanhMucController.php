<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;

use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function AddDanhMuc(Request $request)
    {

        // dd($request->all()); // in toàn bộ dữ liệu gửi lên form

        $request->validate([
            'ten_danh_muc' => 'required|string|max:100',
            'loai_danh_muc' => 'required|string|max:20',
            'mo_ta' => 'nullable|string'
        ]);

        $danhmuc = DanhMuc::create([
            'TenDanhMuc' => $request->ten_danh_muc,
            'LoaiDanhMuc' => $request->loai_danh_muc,
            'MoTa' => $request->mo_ta
        ]);
        

        return redirect()->route('admin.addproducts')->with('success', (bool)$danhmuc);
    }
}
