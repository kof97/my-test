<?php 

header("content-type:application/json; charset=utf-8"); //header('Content-type: text/html; charset=utf-8');

$content = file_get_contents("http://www.bilibili.com/index/rank/all-3-0.json"); 

//$data = json_decode($content); 

var_dump($data);

//echo $data->data->video_info->media->yuanhua->play_url->backup_url_1;