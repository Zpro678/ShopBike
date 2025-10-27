<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KhachHang;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:1',
        ], [
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email không hợp lệ! Vui lòng nhập đúng định dạng email.',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.min' => 'Mật khẩu phải ít nhất 1 ký tự!',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Dữ liệu không hợp lệ!',
                'errors' => $validator->errors()
            ], 422);
        }

        // Query bảng khachhang
        $user = KhachHang::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                'success' => false,
                'errors' => ['email' => ['Email không tồn tại!']]
            ], 401);
        }

        if ($request->password !== $user->MatKhau) {
            return response()->json([
                'success' => false,
                'errors' => ['password' => ['Mật khẩu sai!']]
            ], 401);
        }

        // Thành công
        $request->session()->put('current_user', $user);
        $request->session()->put('user_id', $user->MaKH);

        return response()->json([
            'success' => true,
            'message' => 'Đăng nhập thành công!',
            'redirect' => route('user.index.index')
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hoten' => 'required|string|max:255',
            'email' => 'required|email|unique:khachhang,Email',
            'sdt' => 'required|digits_between:1,15',
            'diachi' => 'required|string|max:255',
            'matkhau' => 'required|string|min:1|confirmed',
        ], [
            'hoten.required' => 'Tên không được để trống.',
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'sdt.required' => 'Số điện thoại không được để trống.',
            'sdt.digits_between' => 'Số điện thoại phải là số.',
            'diachi.required' => 'Địa chỉ không được để trống.',
            'matkhau.required' => 'Mật khẩu không được để trống.',
            'matkhau.min' => 'Mật khẩu phải ít nhất 1 ký tự.',
            'matkhau.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Nếu không lỗi thì tạo user
        KhachHang::createKH($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Đăng ký thành công! Hãy đăng nhập',
            'redirect' => route('auth.login')
        ]);
    }
}