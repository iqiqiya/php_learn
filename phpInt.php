<?php  
$x = 5985;
var_dump($x);
echo "<br>";

$x = -345; //复数
var_dump($x);
echo "<br>";

$x = 0x8C; //十六进制数
var_dump($x);
echo "<br>";

$x = 022;
var_dump($x); //八进制数
echo "<br>";

$x = 10.635;
var_dump($x);
echo "<br>";

$x = 2.4e3;
var_dump($x);
echo "<br>";

$x = 8E-5;
var_dump($x);
echo "<br>";

$x = true;
var_dump($x);
echo "<br>";

$cars = array('Volvo' => "BMW", "Toyota");
var_dump($cars);
echo "<br>";
echo "{$cars[0]}";
echo "<br>";

/**
 * 这是一个对象
 */
class Car
{
	var $color;
	function __construct($color="green")
	{
		# code...
		$this->color = $color;
	}
	function what_color(){
		return $this->color;
	}
}
var_dump(Car);
echo "<br>";

$x = "Hello world";
$x = null;
var_dump($x);
?>