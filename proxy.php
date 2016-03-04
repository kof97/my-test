<?php 

class A
{
	public function printer()
	{
		print_r("I'm print!");
	}
}

class B
{
	private $print;

	function __construct()
	{
		$this->print = new A();
	}

	function __call($method, $args)
	{
		if (!method_exists($this->print, $method)) {
			exit("the method didn't exist");
		}
		$this->print->$method();
	}

}

$kof = new B();
$kof->printer();
