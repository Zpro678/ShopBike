<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
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
    //Hiếu
    // Trả về dữ liệu JSON cho AJAX
    public function getProducts()
    {
        // Lấy dữ liệu từ bảng sanphams
        $products = SanPham::select('MaSP', 'TenSP','ModelNo' ,'Gia', 'MoTa','SoLuongTon','MaDanhMuc','MaThuongHieu','TrangThai')->get();
        // if(count($products) == 0)
        // {
        //     return view('admin.404');
        // }
        // Trả về dạng JSON để JavaScript xử lý
        return response()->json($products);
    }
    //Hiếu
    // Hiếu
    public function getDanhMuc(){
        $DanhMuc =DanhMuc::select('MaDanhMuc', 'TenDanhMuc','LoaiDanhMuc', 'MoTa' )->get();

        return response()->json($DanhMuc);
    }
    //Hiếu
   

   
}
