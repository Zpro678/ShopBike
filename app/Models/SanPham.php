<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has; 

class SanPham extends Model
{
    // 
    use HasFactory;

    protected $table = 'sanpham';
    public $timestamps = false;
    protected $primaryKey = 'MaSP';

    protected $fillable = [ 'MaSP','TenSP', 'ModelNo', 'Gia', 'MoTa',
        'SoLuongTon', 'MaDanhMuc', 'MaThuongHieu', 'TrangThai', ];

}
