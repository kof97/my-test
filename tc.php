<?php 

	$s = 'asdf';

	var_dump(intval($s));
	if ($s==0) {
		echo 'is zero';
	} else
		echo 'is not zero';


	$k = "321321.php";

	$res = substr($k, strrpos($k, "."));

	var_dump($res);

