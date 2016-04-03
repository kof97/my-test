<?php 

$a = "noface.jpg";

$k = "uploads/headpic/20160318050525_thumb.jpg";

var_dump(strpos($k, "noface.jpg"));
if (strpos($k, "noface.jpg") === false) {
	echo "false";
}
