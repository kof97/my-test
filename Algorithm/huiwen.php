<?php 

function huiwen($str)
{
	$arr1 = str_split($str);
	$arr2 = array_reverse($arr1);

	$str2 = implode($arr2, "");

	if ($str == $str2) {
		echo "$str, yes";
	} else {
		echo "$str, no";
	}

}


//huiwen("3211023");


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
	$pos = 0;
	$max = 0;

	$newStr = "@#" . implode(str_split($str), "#") . "#\0";
	$n = strlen($newStr);

	for ($i = 2; $newStr[$i] != "\0"; $i++) {
		$j = 1; 
		while ($newStr[$i - $j] == $newStr[$i + $j]) {
			$j++;
		}

		if ($j > $max) {
			$max = $j;
			$pos = $i;
		}
	}

	$r = substr($newStr, $pos - $max + 1, $max * 2 - 1);
	$res = str_replace(array("#", "@", "\0"), "", $r);
	var_dump($res);


}

palindromeUp2("123321132112asdfdsa11444411121");

function manacher($str)
{

}


