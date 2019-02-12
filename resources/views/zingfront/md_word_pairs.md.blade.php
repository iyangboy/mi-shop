### 主要功能函数
```php
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
```
