<!DOCTYPE html>
<html>
<head>
	<title>EJERCIO 2</title>
</head>
<body>
	<h2> TABLA DE 10*10 CON LOS NUMEROS DE 1 AL 100 
		<br> alternando colores AMARRILLO Y BLANCO</h2>
	<?php 
	define('tam', 10);
	echo "<table border=3>";//CREAMOS LA TABLA
	$c=1;
	for ($c1=1; $c1<=tam  ; $c1++) {
	  if ($c1%2==0)

	  	echo "<tr bgcolor=#FFFF00>";//CRAMOS LA FILA amarrilla
		else
		echo "<tr>"; //CREAMOS LA FILA BLANCA
		for ($c2=1; $c2 <=tam ; $c2++) { 
			echo "<td>", $c, "</td>";//CREAMOS CELDA Y MOSTRAMOS 
			$c=$c+1;
		}
		
		echo "</tr>";//CERRAMOS LA FILA
	}
	echo "</table>"//CERRAMOS LA TABLA

	 ?>

<p><a href="http://localhost/practica5PHP/index.php">Ir al principio</a></p> <br>
</body>
</html>