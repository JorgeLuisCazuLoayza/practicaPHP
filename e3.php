<!DOCTYPE html>
<html lang="es">
<head>
  <meta>
  <title>EJERCIO 3</title>
<h2><font color=#0000ff> TABLERO DE AJEDREZ</font></h2>
                                                  
 </head>                                                                 
 <body>      
  <?php 
  $filas = 9;
  $columnas = 9;
  $dato = 0;
  $si = true;
  ?> 
<table border="1">
 <?php
 for($t=1;$t<=$filas;$t++){
          echo "<tr>";
      for($y=1;$y<=$columnas;$y++){
         if($si){
              echo "<td style=padding:3px;
                 bgcolor=#0000FF>".$dato."</td>";
              $si=false;
              $dato++;
         }
         else{
              echo "<td style=padding:3px;>".$dato."</td>";
              $si=true;
              $dato++;
          }
       }
       echo "</tr>";
  }
 ?>
 </table> 
<p><a href="http://localhost/practica5PHP/index.php">Ir al principio</a></p> 
 </body>
</html>