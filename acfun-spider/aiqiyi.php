<?php 


$url = "http://www.iqiyi.com/v_19rrkzlg5c.html?vfm=2008_aldbd&bvfm=videolocal"; 

$curl = curl_init();

$header = array('CLIENT-IP:115.25.211.17','X-FORWARDED-FOR:115.25.211.17',);

curl_setopt($curl, CURLOPT_URL, $url);



curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

curl_setopt ($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_REFERER, "http://www.iqiyi.com");   //构造来路

curl_setopt($curl, CURLOPT_HEADER, 1);

$data = curl_exec($curl);


curl_close($curl);

$out = ob_get_contents();



//$data = file_get_contents("http://www.iqiyi.com/v_19rrkzlg5c.html?vfm=2008_aldbd&bvfm=videolocal");


//preg_replace("", "", $data);

echo $data;
