<?php  

/**
 * 一个简易的网页爬虫
 * @author iqiqiya
 * @copyright 2018 77sec.cn
 */

//include("phpQuery/phpQuery.php");
require('phpQuery/phpQuery.php');

$link = "http://news.163.com/19/0131/15/E6S1OSOL000189DH.html";

/*function curl_get($url, $gzip=false){
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
	if($gzip) curl_setopt($curl, CURLOPT_ENCODING, "gzip"); // 关键在这里
	$content = curl_exec($curl);
	curl_close($curl);
	return $content;
}

$content = curl_get($link,$gzip=false);*/

$content = file_get_contents($link);


$content = iconv("gb2312", "utf-8//IGNORE", $content);
//echo $content;

phpQuery::newDocumentFile($content); //以html内容的方式进行初始化

$title = pq(".post_content_main h1")->text();

var_dump($title); //输出
?>