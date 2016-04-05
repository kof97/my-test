<?php 

$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "Accept-Language:zh-CN,zh;q=0.8\r\n" .
                    "Accept:application/json, text/javascript, */*; q=0.01\r\n" . 
                    "Host: www.bilibili.com\r\n" . 
                    "Referer: http://www.bilibili.com/ranking\r\n" . 
                    "Origin: www.bilibili.com\r\n" . 
                
                    //"Cookie: foo=bar\r\n" . 
                    "X-Requested-With:XMLHttpRequest\r\n"
    )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('http://www.bilibili.com/index/rank/all-1-0.json', false, $context);




echo $file;


