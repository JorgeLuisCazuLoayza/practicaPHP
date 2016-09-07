<!DOCTYPE html>
<html>
<head>
	<title>EJERCIO 1</title>
</head>
<body>
	<h2>TABLA DE 10*10 CON LOS NUMEROS DE 1 AL 100</h2>
	<?php 
	define('tam', 10);
	echo "<table border=3>";
	$c=1;
	for ($c1=1; $c1<=tam  ; $c1++) {
		echo "<tr>";
		for ($c2=1; $c2 <=tam ; $c2++) { 
			echo "<td>", $c, "</td>";
			$c=$c+1;
		}
		echo "</tr>";
	}
	echo "</table>"

	 ?>
<p><a href="http://localhost/practica5PHP/index.php">Ir al principio</a></p> 
</body>
</html>