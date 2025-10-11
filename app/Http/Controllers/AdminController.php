<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Trang dashboard
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Trang quản lý user
    public function users()
    {
        return view('admin.users');
    }

    // Trang quản lý sản phẩm
    public function products()
    {
        return view('admin.products');
    }

    // Trang quản lý đơn hàng
    public function orders()
    {
        return view('admin.orders');
    }
}
