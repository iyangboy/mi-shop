<?php

namespace App\Http\Controllers\ZingFront;

use App\Http\Controllers\Controller;
use App\Http\Requests\Zingfront\NumSumRequest;
use Illuminate\Http\Request;

class NumSumController extends Controller
{
    public function index()
    {
        return view('zingfront.num_sum');
    }

    public function store(NumSumRequest $request)
    {
        $num = $request->num;

        $str = $this->continuous_sum($num);

        return $str;
    }

    // 词语配对
    function continuous_sum(int $num)
    {
        if ($num > 10000) {
            return 'N <= 10000';
        }
        $sum     = 0;     // 累加和数
        $str     = '';    // 输出
        $i       = 1;     // 初始值
        $count   = 1;     // 计算次数
        $str_num = '';
        $max_num = ceil($num / 2);
        while ($i < $max_num) {
            $count++;
            for ($j = $i; $j <= $max_num; $j++) {
                $sum += $j;
                $str .= $j . ',';

                if ($sum == $num) {
                    $str_num .= rtrim($str, ',') . "<br>";
                    $str     = '';
                    $sum     = 0;
                    $i       = $count - 1;
                    break;
                }
                if ($sum > $num) {
                    $str = '';
                    $sum = 0;
                    $i   = $count - 1;
                    break;
                }
            }
            $i++;
        }


        if (!empty($str_num)) {
            return $str_num;
        } else {
            return 'NONE';
        }
    }
}
