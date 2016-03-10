<?php 

$data = "kof97";

$res = serialize($data);

var_dump($res);

$un = unserialize($res);

var_dump($un);

