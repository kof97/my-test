<?php 
//header("content-type:application/json; charset=utf-8");

$filepath = "http://www.bilibili.com/index/rank/";
$filename = "all-1-0.json";
$url = $filepath . $filename; 

ob_start();
$curl = curl_init();

$header = array('CLIENT-IP:113.105.152.207','X-FORWARDED-FOR:113.105.152.207',);

curl_setopt($curl, CURLOPT_URL, $url);



curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

curl_setopt ($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_REFERER, "http://www.bilibili.com/ranking");   //构造来路

curl_setopt($curl, CURLOPT_HEADER, 1);

$data = curl_exec($curl);


curl_close($curl);

$out = ob_get_contents();

ob_clean();

echo $out;
