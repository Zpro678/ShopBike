<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhuKien extends Model
{
    protected $table = 'phukien';
    public $timestamps = false;
    protected $primaryKey = 'MaPK';

    protected $fillable = [
        'MaPK',
        'TenPK',
        'Gia',
        'MoTa',
        'TrangThai',
    ];

    public function hinhAnhs(){
        return $this->hasMany(PhuKienHinhAnh::class, 'MaPK', 'MaPK');
    }

    public static function getAll(){
        return self::with('hinhAnhs')->get();
    }
}
