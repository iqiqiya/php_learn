<?php  
$cars = array("Volvo","BMW","Toyota");
$arrlength=count($cars);
print("排序前的数组元素排序如下！<br>");
for($x=0;$x<$arrlength;$x++) {
  echo $cars[$x];
  echo "<br>";
}

sort($cars);
print("对数组进行升序排序后的数组元素排序如下！<br>");
for($x=0;$x<$arrlength;$x++) {
  echo $cars[$x];
  echo "<br>";
}

$age = array('Peter' => '35','Ben' => '37','Joe' => '43');
asort($age);
for($x=0;$x<$arrlength;$x++) {
  echo $age[$x];
  echo "<br>";
}
?>