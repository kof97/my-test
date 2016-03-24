<?php 
//header("content-type:application/json; charset=utf-8");

include_once './curl/CaseInsensitiveArray.php';
include_once './curl/Curl.php';

$curl = new Curl();

//$a = $curl->get('http://www.microsoft.com/zh-hk/');
//$a = $curl->get('http://www.acfun.tv/rank/list/#cid=-1;range=1');

$a = $curl->get('http://www.bilibili.com/ranking');

//$res = json_decode($a);
//var_dump();

echo $a;

