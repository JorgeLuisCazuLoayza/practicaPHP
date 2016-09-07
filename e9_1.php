<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO 9</title>
</head>
<body>

<H3><font color=#00ff00>DATOS REGISTRADOS </font></H3>
<?php

$nom=$_POST["nom"];// recibe los datos enviados u¡y los alcena ek¡n la caviabre $nom
$ape=$_POST["ap"];
$cor=$_POST["correo"];
$com=$_POST["com"];

echo "Nombres => $nom <br>";// muestra los datos q contiene la variable $nom

echo "Apellidos => $ape <br>";

echo "Correo => $cor <br>";

echo "Comentario => $com <br>";

?>
<p><a href="http://localhost/practica5PHP/e9.php">Atras</a></p> 
<p><a href="http://localhost/practica5PHP/index.php">Ir al principio</a></p> <br>
</body>
</html>
