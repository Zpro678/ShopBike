<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\NhanVien;

// use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Trang dashboard

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Trang đăng nhập - THÊM CHECK KHÁCH HÀNG Ở ĐÂY
    public function loginIndex()
    {
        // MỚI: Block nếu đang login khách hàng
        if (Auth::guard('khachhang')->check()) {
            return redirect('/client/403')->with('error', 'Tài khoản khách hàng không được truy cập trang quản trị! Vui lòng đăng xuất trước.');
        }

        return view('admin.login');
    }

    // Xử lý đăng nhập - THÊM CHECK KHÁCH HÀNG Ở ĐÂY (dự phòng)
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:1',
        ], [
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu phải ít nhất 1 ký tự.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Dữ liệu không hợp lệ!',
                'errors' => $validator->errors()
            ], 422);
        }

        $admin = NhanVien::where('Email', $request->email)->first();

        // Kiểm tra mật khẩu (hash nếu dùng Hash::make)
        if (!$admin || !Hash::check($request->password, $admin->MatKhau)) {
            return response()->json([
                'success' => false,
                'message' => 'Email hoặc mật khẩu sai!'
            ], 401);
        }

        // Đăng nhập bằng guard 'nhanvien'
        Auth::guard('nhanvien')->login($admin);

        return response()->json([
            'success' => true,
            'message' => 'Đăng nhập thành công!',
            'admin' => $admin
        ]);
    }

    //Trang logout
    public function logout(Request $request)
    {
        Auth::guard('nhanvien')->logout(); // logout guard

        $request->session()->flush(); // xóa toàn bộ session

        return redirect()->route('admin.login'); // chuyển về trang login
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

    public function addproducts()
    {
        return view('admin.addproducts');
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
    //Hiếu
    // Trả về dữ liệu JSON cho AJAX
    // PHieu da sua
    public function getProducts()
    {
        $products = SanPham::getAll();
        // if(count($products) == 0)
        // {
        //     return view('admin.404');
        // }
        // Trả về dạng JSON để JavaScript xử lý
        return response()->json($products);
    }
    //Hiếu
    // PHieu
    public function getDanhMuc()
    {
        $DanhMuc = DanhMuc::getAll();
        return response()->json($DanhMuc);
    }
}
