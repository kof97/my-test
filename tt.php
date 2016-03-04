<?php

$q = "test";
$sql = "";
$host = "127.0.0.1";
$port = 9306;
$index = "rt";

$mysqli = new mysqli("localhost", "root", "kof97");

$mysqli->query("set names utf8;");
$mysqli->query("use test;");

$res = $mysqli->query("select * from documents");
while ($row = $res->fetch_assoc()) {
	var_dump($row);
}


//$k = $mysqli->query("insert into rt values (5, 'testtt tt', '你好啊', '2', '3')");
//var_dump($k);
/*$res = $mysqli->query("select * from rt where match('你')");
var_dump($res->num_rows); echo "<br/><br/>";

while($row = $res->fetch_assoc()) {
    var_dump($row); echo "<br/>";
} */


