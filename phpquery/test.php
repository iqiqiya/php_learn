<?php  

/**
 * 一个简易的网页爬虫
 * @author iqiqiya
 * @copyright 2018 77sec.cn
 */

require('phpQuery/phpQuery.php');

$link = "http://www.17k.com/list/2826670.html";


//$content = file_get_contents($link);

//$content = iconv("gb2312", "utf-8//IGNORE", $content);

//echo $content;

//phpQuery::newDocumentFile($content); //以html内容的方式进行初始化
phpQuery::newDocumentFile($link); //初始化一个实例

$title = pq(".Title")->text();

$author = pq(".Author a")->text();

var_dump($title); //输出
var_dump($Author); //输出
?>