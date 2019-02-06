<?php
$x=5;
$y=10;
echo "GLOBALS[index]";
echo "<br>";
function myTest()
{
	$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}

myTest();

echo $y;
?>