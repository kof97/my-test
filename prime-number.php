<?php 

	function getPrime($num) {
		for($i = 2; $i <= $num; $i++) {
	 		$primes = 0;
	 		for($k = 1; $k <= $i; $k++) {
	 			if($i % $k === 0) $primes++;
	 		}
			if($primes <= 2) {
				echo "<strong>{$i}</strong><br />";
			}
		}
	}
	
	getPrime(11);

?>