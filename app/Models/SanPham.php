<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class SanPham extends Model
{
    protected $table = 'sanpham';
    public $timestamps = false;
    protected $primaryKey = 'MaSP';

    protected $fillable = [
        'MaSP',
        'TenSP',
        'ModelNo',
        'Gia',
        'MoTa',
        'SoLuongTon',
        'MaDanhMuc',
        'MaThuongHieu',
        'TrangThai',
    ];

    // quan he 1-n
    public function hinhAnhs() // mảng
    {
        return $this->hasMany(SanPhamHinhAnh::class, 'MaSP', 'MaSP');
    }

    public static function getAll()
    {
        return self::with('hinhAnhs')->get();
    }


    // select lại ????
    public static function getPopular($limit = 10)
    {
        return self::with('hinhAnhs')
            ->orderByDesc('SoLuongTon')
            ->limit($limit)
            ->get();
    }

    public static function getNewArrivals($limit = 10)
    {
        return self::with('hinhAnhs')
            // ->latest('MaSP')
            ->limit($limit)
            ->get();
    }

    // bat buoc truyen object
    public static function createSP($data)
    {
        $sanPham = self::create([
            'TenSP' => $data['tensp'],
            // 'ModelNo' => $data['tensp'],
            'Gia' => $data['gia'],
            'MoTa' => $data['mota'],
            'SoLuongTon' => $data['soluong'],
            'MaDanhMuc' => $data['danhmuc_id'],
            'MaThuongHieu' => 2,
            'TrangThai' => $data['trangthai'],
        ]);

        if ($data->hasFile('hinhanh')) { // do hasFile là method của object
            $file = $data->file('hinhanh');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('user/images'), $filename);
            $HinhAnh = SanPhamHinhAnh::create([
                'MaSP' => $sanPham->MaSP,
                'UrlHinh' => $filename
            ]);
        }

        return $sanPham;
    }
}
