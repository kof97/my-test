<?php


$filepath = "http://www.bilibili.com/index/rank/";
$filename = "all-3-0.json";
$file = $filepath . $filename; 

_Download("F:\myphp\Apache24\www\000\acfun-spider\\" . $filename, $file); 

function _Download($f_location, $f_name)
{
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream'); 
	header('Content-Type: application/force-download'); 
	header("Content-Transfer-Encoding: Binary");
	header('Content-Length: ' . filesize($f_location));
	header('Content-Disposition: attachment; filename=' . basename($f_name)); 

	readfile($f_location);

}
/*
//$file = $filepath . $filename; //CREATE/OUTPUT THE HEADER
header("Content-type: application/force-download");
header("Content-Transfer-Encoding: Binary"); 
  header("Content-length: ".filesize($file)); 
  header("Content-disposition: attachment; filename=\"".basename($file)."\"");
readfile($file); */