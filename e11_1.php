<html>
<head>
  <title>EJERCICIO 11</title>
  <meta charset="utf-8">
</head>
<body>
<?php
  $equipo1=$_POST['equipo1'];;
  $equipo2=$_POST['equipo2'];
  $equipo3=$_POST['equipo3'];
  $equipo4=$_POST['equipo4'];
  $equipo5=$_POST['equipo5'];
  $equipo6=$_POST['equipo6'];//recupera las variables 




$entrada = array("$equipo1", "$equipo2", "$equipo3", 
"$equipo4", "$equipo5", "$equipo6");// asigna las variables al array asociativo
$claves_aleatorias = array_rand($entrada, 6);



?>
<h1 id="arriba">Enlaces</h1>
<form action="e11.php">
  <tr>
      <td><h1><font color=#000ff>Fixture de Partidos</font></h1></td>
      <td> </td>
    </tr>
<table width="258" border="1">
    
    <tr>
      <td><?php echo $entrada[$claves_aleatorias[0]] . "\n";?></td> <!--muestra los valores de los arraysaleatorios-->
      <td>Vs.</td>
      <td><?php echo $entrada[$claves_aleatorias[1]] . "\n";?></td>
    </tr>
    <tr>
    <tr>
      <td><?php echo $entrada[$claves_aleatorias[3]] . "\n";?></td>
      <td>Vs.</td>
      <td><?php echo $entrada[$claves_aleatorias[5]] . "\n";?></td>
    </tr>
    <tr>
      <td><?php echo $entrada[$claves_aleatorias[4]] . "\n";?></td>
      <td>Vs.     </td>
      <td><?php echo $entrada[$claves_aleatorias[2]] . "\n";?></td>
    </tr>
  </table> 
  <br> 
  <input type="submit" value="Volver a Registrar Equipos">
  <p><a href="http://localhost/practica5PHP/index.php">Volver al Inicio</a></p>
</form>
</body>
</html>

