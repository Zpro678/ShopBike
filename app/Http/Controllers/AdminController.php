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

    // Trang đăng nhập
    public function loginAdminIndex()
    {
        return view('admin.loginAdmin');
    }

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'emailAdmin' => 'required',
            'passwordAdmin' => 'required|string|min:1',
        ], [
            'emailAdmin.required' => 'Email không được để trống.',
            'passwordAdmin.required' => 'Mật khẩu không được để trống.',
        ]);

        // Lấy input
        $email = $request->input('emailAdmin');
        $password = $request->input('passwordAdmin');

        $admin = DB::table('nhanvien')
            ->where('Email', $email)
            ->first();

        if ($admin && $password === $admin->MatKhau) {
            $request->session()->put('current_admin', $admin);
            $request->session()->put('admin_id', $admin->MaNV);
            
            // dd($request->session()->all());
            
            // return redirect('/')->with('success', 'Đăng nhập OK!');
            return redirect('/');
        }
        
        // KHÔNG phải là lỗi validation, mà là một thông báo lỗi chung
        // return back()->with('error', 'Hệ thống đang bảo trì, vui lòng thử lại sau.')->withInput();

        return back()->withErrors(['email' => 'Email hoặc mật khẩu sai!'])->withInput();
    }
}
