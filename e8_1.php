<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCIO 8</title>
	<meta charset="utf-8">
</head>
<body>
		<h2> <font color=#cc00cc>la fecha converida es: </font></h2> 

<?php

$dia=$_POST["dia"];
$mes=$_POST["mes"];
$año=$_POST["año"];

if ($mes=="01"){
		echo "$dia de enero de $año";
}
if ($mes=="02"){
		echo "$dia de febrero de $año";
}
if ($mes=="03"){
		echo "$dia de marzo de $año";
}
if ($mes=="04"){
		echo "$dia de abril de $año";
}
if ($mes=="05"){
		echo "$dia de mayo de $año";
}
if ($mes=="06"){
		echo "$dia de junio de $año";
}
if ($mes=="07"){
		echo "$dia de julio de $año";
}
if ($mes=="08"){
		echo "$dia de agosto de $año";
}
if ($mes=="09"){
		echo "$dia de septiembre de $año";
}
if ($mes=="10"){
		echo "$dia de octubre de $año";
}
if ($mes=="11"){
		echo "$dia de noviembre de $año";
}
if ($mes=="12"){
		echo "$dia de diciembre de $año";
}
"<BR>"
?>	 
</form> <BR> 
<p><a href="http://localhost/practica5PHP/index.php">Ir al Principal</a></p> <br>

</body>
</html>