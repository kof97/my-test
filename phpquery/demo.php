<?php
/**
 * 技术交流群：287546175  欢迎大家加入
 * http://www.jscto.net/html/616.html
 */
require 'QueryList.class.php';

//采集iteye的资讯列表
$url = "http://www.iteye.com/news";
$reg = array("title"=>array(".content h3 a:eq(1)","text"),"url"=>array(".content h3 a:eq(1)","href"));
$rang = "#index_main .news";
//使用curl抓取源码并以utf-8编码格式输出
$qy = new QueryList($url,$reg,$rang,'curl','utf-8');
$arr = $qy->jsonArr;
echo "<pre>";
print_r($arr);
echo "</pre>";


//采iteye的内容页内容
$url = "http://www.iteye.com/news/28978";
$reg = array("title"=>array(".title a:eq(0)","text"),"content"=>array("#news_content","html"));
$qy = new QueryList($url,$reg);
$arr = $qy->jsonArr;
echo "<pre>";
print_r($arr);
echo "</pre>";