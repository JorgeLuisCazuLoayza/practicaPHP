<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO 7</title>
  <meta charset="utf-8">
                                    
 </head>
 <body>      
<h3><font color=FF0000> PROGRAMA QUE DETERMINA EL MAYOR <BR> EL MEDIO Y EL MENOR NUMERO </FONT></h3>

</table>
</form>

<?php
$n1 =$_GET['numero1'];
$n2 =$_GET['numero2'];
$n3 =$_GET['numero3'];
 	$mayor =0;
 	$medio =0;
 	$menor =0;

if($n1>$n2 && $n1>$n3) {
	$mayor=$n1;
}else{
	if ($n2>$n1 && $n2>$n3) {
		$mayor=$n2;	
	}else{
		$mayor=$n3;
	}
}
if($n1<$n2 && $n1<$n3){
	$menor=$n1;
}else{
	if($n2<$n1 && $n2<$n3){
		$menor=$n2;
	}else{
		$menor=$n3;
	}
}
$medio=($n1+$n2+$n3)-($mayor+$menor);
?>

 <?php
echo "1er numero ingresado es: "."$n1"."<br>";
echo "2do numero ingresado es: "."$n2"."<br>";
echo "3er numero ingresado es: "."$n3"."<br><BR>";

echo "el numero mayor es: "."$mayor"."<br>";
echo "el numero medio  es: "."$medio"."<br>";
echo "el numero menor es: "."$menor"."<br>";
?>
<p><a href="http://localhost/practica5PHP/e7.php">Volver a Calcular</a></p> 
 </body>                                                                 
 </html>