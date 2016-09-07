<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCIO 6</title>
	<meta charset="utf-8">
</head>
<body>
	<h2><font color=0000cc> ARREGLO ASOCIATIVO  FOREACH</font> </h2>
	<H3><font color=CC00cc> MARCA DE LOS AUTOS </font> </H3>
	<?php
	$marcas=array('TOYOTA','ZUZUKI','MITSHUBISHI','NISSAN','KING LONG ',
					'PRADO' );

	foreach ($marcas as $item) {
	  	echo $item. "<br>";
	  }  
	  ?>

	  <H3><font color=CC00cc> LOS PAISES Y SUS CAPITALES </font> </H3>
     <?php
	  $capitales=array('Bolivia'=>'Sucre','Uruguay'=>'Monte Video',
	  	'Colombia'=>'Bogota','Peru'=>'Lima','Chile'=>'Santiago');
	  foreach ($capitales as $indice => $valor) {
	  	echo "$indice capital: $valor <br>";
	  }
	 ?>
	 <?php
$estacion[] = "Primavera";
$estacion[] = "Verano";
$estacion[] = "Otoño";
$estacion[] = "Invierno";

ECHO "<h3><font color=CC00cc>LAS ESTACIONES SON: </font><BR> </h3>";
foreach($estacion as $valor) {   
echo $valor.'<br/>'; 
}
?>

<p><a href="http://localhost/practica5PHP/index.php">Ir al principio</a></p> <br>
</body>
</html>