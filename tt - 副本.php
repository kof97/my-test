<?php

//
// $Id$
//

require ( "sphinxapi.php" );


$cl = new SphinxClient ();

$q = "test";
$sql = "";
$host = "127.0.0.1";
$port = 9312;
$index = "*";

$cl->SetServer ( $host, $port );
$cl->SetConnectTimeout ( 1 );
$cl->SetArrayResult ( true );

$res = $cl->Query ( $q, $index );

foreach ($res as $key => $value) {
	echo "<br/><br/>" . $key . "<br/>"; var_dump($value);
}

?>