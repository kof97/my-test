<?php 

function huiwen($str)
{
	$str2 = implode(array_reverse(str_split($str)), "");

	if ($str == $str2) {
		echo "$str, yes";
	} else {
		echo "$str, no";
	}
}


huiwen("321123");


function palindrome($str)
{	
	$n = strlen($str);
	$pos = 0;
	$max = 0;

	for ($i = 0; $i < $n; $i++) { 
		for ($j = 0; ($i - $j >= 0) && ($i + $j < $n); $j++) { 
			if ($str[$i - $j] != $str[$i + $j]) {
				break;
			}
			if ($j > $max) {
				$max = $j;
				$pos = $i;
			}
		}
	}
	var_dump(substr($str, $pos - $max, $max * 2 + 1));
}

function palindromeUp($str)
{	
	
	$pos = 0;
	$max = 0;


	$newStr = "#" . implode(str_split($str), "#") . "#";
	$n = strlen($newStr);

	for ($i = 0; $i < $n; $i++) { 
		for ($j = 0; ($i - $j >= 0) && ($i + $j < $n); $j++) { 
			if ($newStr[$i - $j] != $newStr[$i + $j]) {
				break;
			}
			if ($j > $max) {
				$max = $j;
				$pos = $i;
			}
		}
	}

	$r = substr($newStr, $pos - $max, $max * 2);
	$res = str_replace("#", "", $r);
	var_dump($res);
}

function palindromeUp2($str)
{	
	// 最大回文序列中间坐标
	$pos = 0;
	// 最大回文长度
	$max = 0;
	// 回文序列最右边界坐标
	$mx = 0;

	$p = array("0" => 1, "1" => 1);

	$newStr = "@#" . implode(str_split($str), "#") . "#\0";
	$n = strlen($newStr);

	for ($i = 2; $newStr[$i] != "\0"; $i++) {
		// $i 相对于最大回文序列中间坐标 $pos 的对称点
		$j = $pos - $i > 0 ? $pos - $i : 1;
		$p[$i] = $mx > $i ? min($p[$j], $mx - $i) : 1; 
		while ($newStr[$i - $p[$i]] == $newStr[$i + $p[$i]]) {
			$p[$i]++;
		}

		if ($p[$i] > $max) {
			$max = $p[$i];
			$pos = $i;
			$mx = $i + $max;
		}
	}

	$r = substr($newStr, $pos - $max + 1, $max * 2 - 1);
	$res = str_replace(array("#", "@", "\0"), "", $r);
	var_dump($res);
}

palindromeUp2("123321132112asdfdsa1144121");

function manacher($str)
{

}


