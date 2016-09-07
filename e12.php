<!DOCTYPE html>
<html lang="es">
<head>
	<TITLE >EJERCICIO 12</TITLE>
  <meta charset="utf-8" />

</head>

<body>
	<H2><FONT COLOR=#0000C>SIMULACION DE 2 DADOS</FONT></H2>
<form method="post" action="e12.php">  <!--ojo redirecciona a la misma pagina -->
<?php
// primer dado
$total = "6"; // Numero total de imagenes
$extension = ".jpg";// Definimos la extension, puede ser .jpg, gif, bmp, etc.
$carpeta = "imgdado";//Carpeta con las imagenes
// De aqui para abajo no es necesario modificar nada
$start = "1";
$random = mt_rand($start, $total);// el mt rand es una funcion presstablecida de php que da resultados aleatorios
// EN ESTE CASO SERIA DE 1 A 6 YA QUE LE DIMOS ESOS PARAMETROS DE ENTRADA
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?>


<?php
// segundo dado
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?> <br>
<input type="submit" value="Lanzar Los Dados"> <br><BR>

</form>
   <p>Pulsa <a href="http://localhost/practica5PHP/e12_1.php">
 	aquì</a> para lanzar 5 dados</p>
  <P> </P>
  <p><a href="http://localhost/practica5PHP/index.php">Ir al principio</a></p> 
</body>
</html>