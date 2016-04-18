<?php 
/*
$data = "kof97";

$res = serialize($data);

var_dump($res);

$un = unserialize($res);

var_dump($un);
*/
/**
 *  
 */	
final class test
{
	public $user = "kof";
	public static $k = 0;

	public function __toString()
	{

		return $this->user;
	}
}

/**
 * 
 */
class ClassName
{
	
}

$test = new test();

echo $test . "<br>";

var_dump(PHP_EOL);

var_dump($test->__toString());



