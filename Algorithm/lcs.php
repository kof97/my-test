<?php 
/**
 * 
 *
 *
 *
 */
function lcs($str1, $str2)
{
	$dp = array();

	for ($i = 0; $i < strlen($str1); $i++) { 
		for ($j = 0; $j < strlen($str2); $j++) { 
			if ($str1[$i] == $str2[$j]) {
				$dp[$i][$j] = isset($dp[$i-1][$j-1]) ? $dp[$i-1][$j-1] + 1 : 1;
			} else {
				$dp[$i][$j] = isset($dp[$i-1][$j]) ? $dp[$i-1][$j] : 0;
			}
		}
	}

	echo " &nbsp; ";
	for ($j=0; $j < strlen($str2); $j++) { 
		echo $str2[$j] . " ";
	}
	echo "<br>";

	for ($i = 0; $i < strlen($str1); $i++) { 
		echo $str1[$i] . " ";
		for ($j = 0; $j < strlen($str2); $j++) { 
			echo $dp[$i][$j] . " ";
		}
		echo "<br />";
	}
}

lcs("abcbdab", "bdcaba");

