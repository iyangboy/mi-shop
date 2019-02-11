<?php

namespace App\Http\Controllers\ZingFront;

use App\Http\Controllers\Controller;
use App\Http\Requests\Zingfront\WordPairsRequest;
use Illuminate\Http\Request;

class WordPairsController extends Controller
{
    public function index()
    {
        return view('zingfront.word_pairs');
    }

    public function store(WordPairsRequest $request)
    {
        $str_s = $request->str_s;
        $str_t = $request->str_t;

        $word = $this->word_pairs($str_s, $str_t);

        return $word;
    }

    // 词语配对
    public function word_pairs($str1, $str2)
    {
        $str1 = trim($str1);
        $str2 = trim($str2);
        if (empty($str1) || empty($str2)) {
            return '请输入正确的字符串';
        }
        $str1_array = explode(' ', $str1);
        $str2_array = explode(' ', $str2);

        foreach ($str1_array as $word_s) {
            foreach ($str2_array as $word_t) {
                if ($word_s == $word_t) {
                    return $word_s;
                    break;
                }
            }
        }
        return NULL;
    }
}
