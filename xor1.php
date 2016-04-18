<?php 

$a = 555;
$b = 777;

function s(&$a, &$b)
{
	$a ^= $b;
	$b ^= $a;
	$a ^= $b;
}

s($a, $b);

echo $a . " " . $b;

