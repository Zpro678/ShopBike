<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanPhamHinhAnh extends Model
{
    protected $table = 'sanpham_hinhanh';
    public $timestamps = false;
    protected $primaryKey = 'MaHinh';

    protected $fillable = ['MaHinh', 'MaSP', 'UrlHinh'];

    // quan he
    public function sanPham()
    {
        return $this->belongsTo(SanPham::class, 'MaSP', 'MaSP');
    }
}
