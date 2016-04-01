<?php

	function pictureCompressionOutput($file, $new_file, $new_width = 0, $new_height = 0) {
		header('Content-type: image/jpeg');

		list($width, $height) = getimagesize($file);

		$new_width = intval($new_width)?$new_width:$width;
		$new_height = intval($new_height)?$new_height:$height;
		
		// 创建一个图片。接收参数分别为宽高，返回生成的资源句柄
		$thumb = imagecreatetruecolor($new_width, $new_height);
		//获取源文件资源句柄。接收参数为图片路径，返回句柄
		$source = imagecreatefromjpeg($file);
		// 将源文件剪切全部域并缩小放到目标图片上。前两个为资源句柄
		imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

		imagejpeg($thumb, $new_file);

		return $new_file;
	}

	// pictureCompressionOutput("./001.jpg", "./" . time() . ".jpg", 100, 100);
	pictureCompressionOutput("./001.jpg", "./001.jpg");

?>