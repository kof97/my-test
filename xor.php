<?php 

$a = 555;
$b = 777;

$arr = array(1, 2, 2, 3, 1, 3, 4, 5, 5);

$res = 0;
foreach ($arr as $key => $value) {
	$res = $res ^ $value;
}

var_dump($res);


