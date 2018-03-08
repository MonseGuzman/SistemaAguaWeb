<?php

//carga y se conecta a la base de datos
include('conexion.php');

if (!empty($_POST))
{
  $fecha = $_POST['fecha'];
  $coutaFija = $_POST['coutaFija'];
  $recargo = $_POST['recargo'];
  $tarifa = $_POST['tarifa'];
  $inf = $_POST['infraestructura'];

  $query = "insert INTO tarifas (fecha, coutaFija, recargo, tarifa, infraestructura) VALUES ($fecha, $coutaFija, $recargo, $tarifa, $inf)";

  if(mysqli_query($conexion, $query))
  {
    echo "Se logro insertar";
  }
  else {
    echo "No se logro insertar";
  }


} else {
?>
  <h1>Insertar Tarifa</h1>
  <form action="tarifas.php" method="post">
      Fecha:<br />
      <input type="text" name="fecha" placeholder="Periodo" />
      <br /><br />
      Couta Fija:<br />
      <input type="text" name="coutaFija" placeholder="couta Fija"/>
      <br /><br />
      Recargo:<br />
      <input type="text" name="recargo" placeholder="93" />
      <br /><br />
      Tarifa:<br />
      <input type="text" name="tarifa" placeholder="0" />
      <br /><br />
      Infraestructura:<br />
      <input type="text" name="infraestructura" placeholder="0" />
      <br /><br />
      <input type="submit" value="Insertar" />
  </form>
 <?php
}
?>
