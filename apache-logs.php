<?php 

	function logs()
	{	
		header("Content-type: text/html; charset=utf-8");

		$path = "F:\myphp\Apache24\logs\access.log";

		$arr = array();
		$handle = @fopen($path, "r");
		if ($handle) {
		    while (!feof($handle)) {
		        $buffer = fgets($handle, 4096);
		        array_push($arr, $buffer);
		    }
		    fclose($handle);
		}

		echo "";
		echo "<style>strong, span{display:inline-block;width:200px;}.target{width:auto}</style>";
		//echo "<table style='width:800px;text-align:center;'>";
		echo "<strong>时间</strong><strong>ip</strong><strong class='target'>访问页面</strong><br/>";
		$arr = array_reverse($arr);
		foreach ($arr as $key => $value) {
			if (!$value) {
				continue;
			}
			$arr[$key] = explode(" ", $value);

			$ip = $arr[$key][0];
			$time = substr($arr[$key][3], 1);
			$target = trim($arr[$key][6]);

			echo "<span>$time</span><span>$ip</span><span class='target'>$target</span><br/>";
			
		}
		//echo "</table>";

		//var_dump($arr);


	}

	logs();
