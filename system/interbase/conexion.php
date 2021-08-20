<?php
 
 $link = mysqli_connect("localhost", "root", "", "collecto"); 
 
 if (!$link) {
     echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
     echo "errno de depuraci贸n: " . mysqli_connect_errno() . PHP_EOL;
     echo "error de depuraci贸n: " . mysqli_connect_error() . PHP_EOL;
     exit;
 }
 
 
 // Check connection
 if ($link->connect_error) {
     die("Connection failed: " . $link->connect_error);
 } 
 // ya solo quedaria la conexion ala base de datos del hosting
 
 ?>


