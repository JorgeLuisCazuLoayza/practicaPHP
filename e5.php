<!DOCTYPE html>
<html lang="es">
<head>
	<meta>
	  <title>EJERCIO 5</title>
<h2><font  color =#0000ff > IMAGENES</font></h2>

</head>

<body>

<?php

if ($gestor = opendir('imagen'))		//ABRE EL GESTOR DE DIRECTORIO DE LA CARPETA FOTOS Y LO ALMACENA EN LA VARIABLE $GESTOR
{
 echo "<table border=1>";
 echo "<tr>";
 $i=0;

 while (false !== ($archivo = readdir($gestor)))  //Lee una entrada desde un gestor de directorio
 {
 		if ($archivo!="." && $archivo!="..")
 		{

 			if ($i==4)//DEERMINA  EL NUMERO DE COLUMNAS 
 			{
				 $i=0;
 			  	echo "</tr>";
				 echo "<tr>";
 			}
 			$i++;
 			echo "<td>";
 			echo "<a href=imagen/$archivo><img src=imagen/$archivo width='100px'> 
			</a>";// MUESTA LAS FOTOS EN SUS RESPECTIVAS CELDAS <td> ADEMAS QUE REDIRECCIONA A LAS HACIENDO CLICK A LAS FOTOS REALES 
		 	echo "</td>";
 		}
 }
 echo "</tr>";
 echo "</table>";
 closedir($gestor);//closedir — Cierra un gestor de directorio
}
?>
<p><a href="http://localhost/practica5PHP/index.php">Ir al principio</a></p> 
</body>
</html>