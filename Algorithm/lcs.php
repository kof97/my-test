<?php 
/**
 * 动态规划 —— LCS 算法
 *
 * 字符相同，则指向左上，并加1
 * 字符不同，则指向左边或者上边较大的那个
 */
function lcs($str1, $str2)
{
    // 存储生成的二维矩阵
    $dp = array();
    // 最大子串长度
    $max = 0;

    for ($i = 0; $i < strlen($str1); $i++) { 
        for ($j = 0; $j < strlen($str2); $j++) { 
            if ($str1[$i] == $str2[$j]) {
                $dp[$i][$j] = isset($dp[$i-1][$j-1]) ? $dp[$i-1][$j-1] + 1 : 1;
            } else {
                $dp[$i-1][$j] = isset($dp[$i-1][$j]) ? $dp[$i-1][$j] : 0;
                $dp[$i][$j-1] = isset($dp[$i][$j-1]) ? $dp[$i][$j-1] : 0;

                $dp[$i][$j] = $dp[$i-1][$j] > $dp[$i][$j-1] ? $dp[$i-1][$j] : $dp[$i][$j-1];
            }

            $max = $dp[$i][$j] > $max ? $dp[$i][$j] : $max;
        }
    }

    for ($i = 0; $i < strlen($str1); $i++) { 
        for ($j = 0; $j < strlen($str2); $j++) { 
            echo $dp[$i][$j] . " ";
        }
        echo "<br />";
    }

    var_dump($max);
}

lcs("abcbdab", "bdcaba");



