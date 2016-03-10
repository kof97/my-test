<?php 

include_once './curl/CaseInsensitiveArray.php';
include_once './curl/Curl.php';

$curl = new Curl();

$a = $curl->get('http://www.microsoft.com/zh-hk/');

echo $a;




