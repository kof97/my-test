<?php 
	error_reporting(E_ALL ^ E_NOTICE);


	$years = $_POST['years'];

	$k = getShuXiang($years);
	echo $k;



	function getShuXiang($years) {        
		if($years < 1000 || $years > 3000) {                
			echo "请输入1000-3000";    
		}    

		$data = array('鼠', '牛', '虎', '兔', '龙', '蛇', '马', '羊', '猴', '鸡', '狗', '猪');    
		$index = ($years - 1000) % 12;    
		return $data[$index];
	}


?>