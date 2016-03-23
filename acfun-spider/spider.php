<?php

include 'phpQuery/phpQuery.php';


$url = "http://www.acfun.tv/rank/";

$doc = phpQuery::newDocumentFile($url); 
phpQuery::selectDocument($doc); 
 

$all = array();

for ($i = 0; $i < 10; $i++) { 
	$res = array();

	$item = pq("#unit-rank-$i div.item");
	foreach ($item as $li) { 
		
		$href = "http://www.acfun.tv" . pq($li)->find('a')->attr('href');

		if (trim(pq($li)->find('a')->attr('title')) == "") {
			$res[pq($li)->find('a')->text()] = $href;
		} else {
			$res[pq($li)->find('a')->attr('title')] = $href;
		}

	} 
	$title = pq("#unit-rank-$i div.banner")->find('p')->text();
	$all[$title] = $res;

}

var_dump($all);
