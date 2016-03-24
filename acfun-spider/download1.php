<?php 
//header("content-type:application/json; charset=utf-8");

$filepath = "http://www.bilibili.com/index/rank/";
$filename = "all-3-0.json";
$url = $filepath . $filename; 

$ch = curl_init();

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_HEADER, 1);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$data = curl_exec($curl);


curl_close($curl);

var_dump($data);
