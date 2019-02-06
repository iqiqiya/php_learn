<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>测试一下utf-8</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
$name = htmlspecialchars($_REQUEST['fname']); 
echo $name; 
?>

</body>
</html>