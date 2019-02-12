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
    public function word_pairs($str_s, $str_t)
    {
        $str_s = trim($str_s);
        $str_t = trim($str_t);
        if (empty($str_s) || empty($str_t)) {
            return '请输入正确的字符串';
        }
        $str_s_array = explode(' ', $str_s);
        $str_t_array = explode(' ', $str_t);

        foreach ($str_s_array as $word_s) {
            foreach ($str_t_array as $word_t) {
                if (0 === strcasecmp($word_s, $word_t)) {
                    return strtolower($word_s);
                }
            }
        }
        return NULL;
    }
}
