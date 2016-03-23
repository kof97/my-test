<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 

require('./QueryList.class.php');

//采集iteye的资讯列表
$url = "http://www.acfun.tv/rank/list/#cid=-1;range=1";

include 'phpQuery.php';  
phpQuery::newDocumentFile('http://job.blueidea.com');  
$companies = pq('#hotcoms .coms')->find('div');  
foreach($companies as $company)  
{  
   echo pq($company)->find('h3 a')->text()."<br>";  
}  