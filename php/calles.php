<?php

//carga y se conecta a la base de datos
include('conexion.php');

if (!empty($_POST))
{
  $calle = $_POST['calle'];
  $colonia = $_POST['colonia'];
  $cp = $_POST['cp'];

  $query = "insert INTO calles (nombre, colonia, cp) VALUES ('$calle', '$colonia', '$cp')";

  if(mysqli_query($conexion, $query))
  {
    echo "Se logro insertar";
  }
  else {
    echo "No se logro insertar";
  }


} else {
?>
  <h1>Insertar calle</h1>
  <form action="calles.php" method="post">
      Nombre de la calle:<br />
      <input type="text" name="calle" placeholder="Nombre Calle" />
      <br /><br />
      Colonia:<br />
      <input type="text" name="colonia" placeholder="Centro"/>
      <br /><br />
      Codigo Postal:<br />
      <input type="text" name="cp" placeholder="49000" />
      <br /><br />
      <input type="submit" value="Insertar" />
  </form>
 <?php
}
?>
