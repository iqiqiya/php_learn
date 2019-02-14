<?php  

/**
 * 一个简易的网页爬虫
 * @author iqiqiya
 * @copyright 2018 77sec.cn
 */

include("phpQuery/phpQuery.php");
//require('phpQuery/phpQuery.php');

$link = "http://news.sina.com.cn/c/nd/2016-10-23/doc-ifxwztru6951143.shtml";

phpQuery::newDocumentFile($link); //初始化一个实例

$title = pq(".page-header")->text();

var_dump($title); //输出
?>