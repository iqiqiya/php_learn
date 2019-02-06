<?php  
$t = date("H");
if($t < "20")
{
	echo "Have a good day!";
}
else{
	echo "Have a goog night!";
}
echo date("Y-m-d H:i:s",time()+8*3600);
echo date("Y-m-d H:i:s",time());//当前时间
?>