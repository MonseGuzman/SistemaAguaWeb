<?php
$username = "root";
$password = "";
$host = "localhost";
$dbname = "sistemaagua";

try
{
  $conexion = mysqli_connect($host, $username, $password);
  mysqli_select_db($conexion, $dbname);
}
catch(PDOException $ex)
{
  die("Error al conectarse a la base de datos: " . $ex->getMessage());
}

 ?>
