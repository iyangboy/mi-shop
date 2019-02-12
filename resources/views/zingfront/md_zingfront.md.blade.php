## Zingfront智线笔试题2018版C新

### - 题 1：
###### 编程实现功能：
> 功能是求出字符 s 与字符串 t 的第二公共单词（这里，假设两个字符串均由英文字母和空格字符组成）；若找到这样的公共单词，函数返回该单词，否则，函数返回 NULL , 如果有多个满足要求，则返回第一个单词。
> 例如：若 s = "This is C programming text"，t = "This is a text for C programming"，则函数返回 "this"。

演示连接 [https://jerry-blog.com/zingfront/word-pairs](https://jerry-blog.com/zingfront/word-pairs)

##### 主要函数逻辑
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

### - 题 2：
> 某些整数能分解成若干个连续整数的和的形式，例如
> 15 = 1 + 2 + 3 + 4 + 5
> 15 = 4 + 5 + 6
> 15 = 7 + 8
> 某些整数不能分解为连续整数的和，例如：16
> 输入：一个整数 N (N <= 10000)
> 输出：整数 N 对应的所有分解组合，按照每个分解中的最小整数从小到大输出，每个分解占一行，每个数字之间有一个空格（每行最后保留一个空格）；如果没有任何分解组合，则输出 NONE

演示连接 [https://jerry-blog.com/zingfront/num-sum](https://jerry-blog.com/zingfront/num-sum)

##### 主要函数逻辑
```php
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
```

### - 题 3：
> 开发一个个人主页，至少包含如下功能部分：
1. 个人简历，把投递到我们这里的简历，在个人网站上还原；
2. “旅行日志”。使用地图 API，把你旅行到过的身份使用某种交互标注出来；鼠标标放到相关省份后
可以看到相关的时间和备注；对于没有去过的地方，可以在地图上直接“做计划”，比如，你之前没有去
过浙江旅行，那直接可以在地图上给浙江省做一个旅行计划，比如，写上“计划2018五一期间旅行”。
对于已经去过的省份，不可以再做计划；

个人简历展示 [https://jerry-blog.com/zingfront/jerry](https://jerry-blog.com/zingfront/jerry)

> 旅行日志，暂时没有完成 (之后将在个人站 [https://jerry-blog.com](https://jerry-blog.com)中展示 )
> 期待有面试机会

* 个人站 简易商城项目 [https://jerry-blog.com](https://jerry-blog.com)
* github: [https://github.com/iyangboy/mi-shop](https://github.com/iyangboy/mi-shop)


> 杨万里 (0212)
