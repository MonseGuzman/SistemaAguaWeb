<?php

//carga y se conecta a la base de datos
include('conexion.php');

if (!empty($_POST))
{
  $concepto = $_POST['descripcion'];
  $descuento = $_POST['descuento'];

  $query = "insert INTO situaciones (descripcion, descuento) VALUES ('$concepto', $descuento)";

  if(mysqli_query($conexion, $query))
  {
    echo "Se logro insertar";
  }
  else {
    echo "No se logro insertar";
  }


} else {
?>
  <h1>Insertar Situaciones</h1>
  <form action="situaciones.php" method="post">
      Fecha:<br />
      <input type="text" name="descripcion" placeholder="Descripcion" />
      <br /><br />
      Couta Fija:<br />
      <input type="number" name="descuento" placeholder="0"/>
      <br /><br />
      <input type="submit" value="Insertar" />
  </form>
 <?php
}
?>
