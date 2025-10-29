<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Facades\Hash;

class HashCast implements CastsAttributes
{
    // đọc db return lại giá trị
    public function get($model, string $key, $value, array $attributes)
    {
        return $value;
    }

    // xử lí hash trc khi ghi vào db
    public function set($model, string $key, $value, array $attributes)
    {
        // có thể thêm xử lí khác

        if (Hash::needsRehash($value)) {
            return Hash::make($value);
        }

        return $value;
    }
}
