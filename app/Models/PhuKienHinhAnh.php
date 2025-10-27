<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhuKienHinhAnh extends Model
{
    protected $table = 'phukien_hinhanh';
    public $timestamps = false;
    protected $primaryKey = 'MaHinh';

    protected $fillable = ['MaHinh', 'MaPK', 'UrlHinh'];

    public function phuKien(){
        return $this->belongsTo(PhuKien::class, 'MaPK', 'MaPK');
    }
}
