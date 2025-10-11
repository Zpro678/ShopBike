<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Trang dashboard
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Trang đăng nhập
    public function loginIndex()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|string|min:1',
        ], [
            'email.required' => 'Email không được để trống.',
            'password.required' => 'Mật khẩu không được để trống.',
        ]);

        // Lấy input
        $email = $request->input('email');
        $password = $request->input('password');

        $admin = DB::table('nhanvien')
            ->where('Email', $email)
            ->first();

        if ($admin && $password === $admin->MatKhau) {
            $request->session()->put('current_admin', $admin);
            $request->session()->put('admin_id', $admin->MaNV);
            
            // dd($request->session()->all());
            
            // return redirect('/')->with('success', 'Đăng nhập OK!');
            return redirect('/manager');
        }
        
        // KHÔNG phải là lỗi validation, mà là một thông báo lỗi chung
        // return back()->with('error', 'Hệ thống đang bảo trì, vui lòng thử lại sau.')->withInput();

        return back()->withErrors(['email' => 'Email hoặc mật khẩu sai!'])->withInput();
    }

    //Trang logout
    public function logout(Request $request)
    {
        $request->session()->forget('current_admin');
        $request->session()->forget('admin_id');

        return redirect('/manager/login');
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
