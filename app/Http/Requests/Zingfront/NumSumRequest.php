<?php

namespace App\Http\Requests\Zingfront;

use App\Http\Requests\Request;

class NumSumRequest extends Request
{
    public function rules()
    {
        return [
            'num' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'num' => '数字 N',
        ];
    }
}
