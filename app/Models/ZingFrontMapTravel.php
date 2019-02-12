<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZingFrontMapTravel extends Model
{
    protected $table = 'zingfront_map_travel';

    protected $fillable = [
        'name', // 省份名称
        'is_travel', // 是否已旅行
        'remarks' // 备注信息
    ];

}
