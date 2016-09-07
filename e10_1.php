<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO 10</title>
</head>
<body>
<?php

$usuar=JorgeLuis;
$pass=2016;

$u=$_POST['usuario'];// RECURERA DATOS DEL FORMULARIO
$p=$_POST['password'];// RECURERA DATOS DEL FORMULARIO

if($usuar ==$u && $pass ==$p)

	{	
	header("location:e10_2.php");
	}
	else
	{			
	header("location:e10.php");	
 
    }
?>

</body>
</html>

