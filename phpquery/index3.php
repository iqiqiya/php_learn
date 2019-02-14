<?php  

/**
 * 一个简易的网页爬虫
 * @author iqiqiya
 * @copyright 2018 77sec.cn
 */

require('phpQuery/phpQuery.php');

$link = "http://news.163.com/19/0131/15/E6S1OSOL000189DH.html";

$doc = file_get_contents($link);

$doc = phpQuery::newDocumentHTML(iconv("GBK","utf-8",$doc));
phpQuery::selectDocument($doc);

$title = pq(".post_content_main h1")->text();

var_dump($title); //输出
?>