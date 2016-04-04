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


huiwen("3211023");


function manacher($str)
{
	
}


