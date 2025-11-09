<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KhachHang;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Login
    public function loginIndex()
    {
        return view('user.auth.login');
    }

    //Register
    public function registerIndex()
    {
        return view('user.auth.register');
    }

    //
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
        $user = KhachHang::where('Email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->MatKhau)) {
            return response()->json([
                'message' => 'Email hoặc mật khẩu sai',
                'success' => false
            ], 401);
        }

        // Đăng nhập bằng session
        Auth::guard('khachhang')->login($user); // Vào config/auth.php để xem cấu hình 'guard'

        // Thành công
        return response()->json([
            'success' => true,
            'message' => 'Đăng nhập thành công!',
            'user'    => $user,
        ]);

        // Sai email/mật khẩu
        return response()->json([
            'success' => false,
            'message' => 'Email hoặc mật khẩu sai!'
        ], 401);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hoten' => 'required|string|max:255',
            'email' => 'required|email|unique:khachhang,Email',
            'sdt' => 'required|digits_between:9,15',
            'diachi' => 'required|string|max:255',
            'matkhau' => 'required|string|min:1',
            'matkhau_confirmation' => 'required|same:matkhau',
        ], [
            'hoten.required' => 'Tên không được để trống.',
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'sdt.required' => 'Số điện thoại không được để trống.',
            'sdt.digits_between' => 'Số điện thoại phải từ 9 số trở lên.',
            'diachi.required' => 'Địa chỉ không được để trống.',
            'matkhau.required' => 'Mật khẩu không được để trống.',
            'matkhau.min' => 'Mật khẩu phải ít nhất 1 ký tự.',
            'matkhau_confirmation.required' => 'Vui lòng nhập lại mật khẩu.',
            'matkhau_confirmation.same' => 'Mật khẩu xác nhận không khớp.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Dữ liệu không hợp lệ!',
                'errors'  => $validator->errors()
            ], 422);
        }

        $data = $request->all();
        $data['matkhau'] = Hash::make($request->matkhau);
        $user = KhachHang::createKH($data);

        return response()->json([
            'success' => true,
            'message' => 'Đăng ký thành công! Hãy đăng nhập.',
            'user' => $user
        ], 201);
    }

    //Logout
    public function logout(Request $request)
    {
        // Logout chuẩn Laravel: Xóa session Auth hoàn toàn
        Auth::guard('khachhang')->logout();

        // Flush toàn bộ session để an toàn (xóa hết data cũ)
        $request->session()->flush();

        return redirect('/');
    }
}
