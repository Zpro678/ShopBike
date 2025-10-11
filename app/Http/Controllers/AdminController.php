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

    public function blank()
    {
        return view('admin.blank');
    }

    public function buttons()
    {
        return view('admin.buttons');
    }

    public function flot()
    {
        return view('admin.flot');
    }

    public function forms()
    {
        return view('admin.forms');
    }

    public function grid()
    {
        return view('admin.grid');
    }

    public function icons()
    {
        return view('admin.icons');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function morris()
    {
        return view('admin.morris');
    }

    public function notifications()
    {
        return view('admin.notifications');
    }

    public function panels_wells()
    {
        return view('admin.panels-wells');
    }

    public function tables()
    {
        return view('admin.tables');
    }

    public function typography()
    {
        return view('admin.typography');
    }

    // // Trang quản lý user
    // public function users()
    // {
    //     return view('admin.users');
    // }

    // // Trang quản lý sản phẩm
    // public function products()
    // {
    //     return view('admin.products');
    // }

    // // Trang quản lý đơn hàng
    // public function orders()
    // {
    //     return view('admin.orders');
    // }
}
