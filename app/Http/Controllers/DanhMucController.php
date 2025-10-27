<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;

use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function AddDanhMuc(Request $request)
    {
        $request->validate([
            'ten_danh_muc' => 'required|string|max:100',
            'loai_danh_muc' => 'required|string|max:20',
            'mo_ta' => 'nullable|string'
        ]);

        // PHieu
        // all: chuyển req từ obj thành array, đúng logic nhưng ko bắt buộc
        $danhmuc = DanhMuc::addDanhMuc($request->all());

        return redirect()->route('admin.addproducts')->with('success', (bool)$danhmuc);
    }
}
