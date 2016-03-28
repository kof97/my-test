<?php 


function randomNumber($n = 20, $start = 0, $end = 10)
{
	// 生成一个随机序列
	$arr = array();
	for ($i = 0; $i < $n; $i++) { 
		array_push($arr, rand($start, $end));
	}
	
	// 随机选出一个
	array_splice($arr, rand(0, $n), 1);



	
	var_dump($arr);


}


randomNumber();
