<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //Login
    public function loginIndex() {
        return view('auth.login');
    }

    //
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'matkhau' => 'required|string|min:1',
        ], [
            'email.required' => 'Email không được để trống.',
            'matkhau.required' => 'Mật khẩu không được để trống.',
            
        ]);

        // Lấy input
        $email = $request->input('email');
        $matkhau = $request->input('matkhau');

        $user = DB::table('khachhang')
            ->where('Email', $email)
            ->first();

        if ($user && $matkhau === $user->MatKhau) {
            $request->session()->put('current_user', $user);
            $request->session()->put('user_id', $user->MaKH);
            
            // dd($request->session()->all());
            
            // return redirect('/')->with('success', 'Đăng nhập OK!');
            return redirect('/');
        }
        
        // KHÔNG phải là lỗi validation, mà là một thông báo lỗi chung
        // return back()->with('error', 'Hệ thống đang bảo trì, vui lòng thử lại sau.')->withInput();

        return back()->withErrors(['email' => 'Email hoặc mật khẩu sai!'])->withInput();
    }

    //Logout
    public function logout(Request $request)
    {
        $request->session()->forget('current_user');
        $request->session()->forget('user_id');

        return redirect('/');
    }

    //Register
    public function registerIndex() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'hoten' => 'required|string|max:255',
            'email' => 'required|unique:khachhang,Email',
            'sdt' => 'required|digits_between:1,15',
            'diachi' => 'required|string|max:255',
            'matkhau' => 'required|string|min:1|confirmed:matkhau_confirmation',
        ], [
            'hoten.required' => 'Tên không được để trống.',
            'email.required' => 'Email không được để trống.',
            'email.unique' => 'Email đã tồn tại.',
            'sdt.required' => 'Số điện thoại không được để trống.',
            'sdt.digits_between' => 'Số điện thoại phải là số',
            'diachi.required' => 'Địa chỉ không được để trống.',
            'matkhau.required' => 'Mật khẩu không được để trống.',
            'matkhau.min' => 'Mật khẩu phải ít nhất 1 ký tự.',
            'matkhau.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ]);

        // Lấy input
        $hoten = $request->input('hoten');
        $email = $request->input('email');
        $sdt = $request->input('sdt');
        $diachi = $request->input('diachi');
        $matkhau = $request->input('matkhau');

        // Insert vào DB
        DB::table('khachhang')->insert([
            'HoTen' => $hoten,
            'Email' => $email,
            'SoDienThoai' => $sdt,  // Lưu sdt
            'DiaChi' => $diachi,
            'MatKhau' => $matkhau,
            'NgayTao' => now(),
            'TrangThai' => 1,
        ]);

        // Redirect về login với message thành công
        return redirect('/login')->with('success', 'Đăng ký thành công! Hãy đăng nhập.');
    }
}
