<?php

namespace App\Http\Requests\Zingfront;

use App\Http\Requests\Request;

class WordPairsRequest extends Request
{
    public function rules()
    {
        return [
            'str_s' => 'required',
            'str_t' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'str_s' => '字符串 S',
            'str_t' => '字符串 T',
        ];
    }
}
