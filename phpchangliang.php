<?php  
//区分大小写的常量名
define("GREETING","欢迎访问 77sec.cn");
echo GREETING;
echo "<br>";
echo greeting;
echo "<br>";
//不区分大小写的常量名
define("GREETING","欢迎访问", true);
echo(greeting);
echo greeting;
?>