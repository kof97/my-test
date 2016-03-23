<?php 

include_once './curl/CaseInsensitiveArray.php';
include_once './curl/Curl.php';

$curl = new Curl();

//$a = $curl->get('http://www.microsoft.com/zh-hk/');
$a = $curl->get('http://www.acfun.tv/rank/list/#cid=-1;range=1');



echo $a;
