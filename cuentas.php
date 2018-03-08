<?php

//carga y se conecta a la base de datos
include('conexion.php');

if (!empty($_POST))
{
  $usuario = $_POST['idUsuario'];
  $calle = $_POST['idCalle'];
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $ultimoA = $_POST['ultimoPagoA'];
  $ultimoM = $_POST['ultimoPagoM'];
  $Exterior = $_POST['noExterior'];
  $Interior = $_POST['noInterior'];
  $fechaAlta = $_POST['fechaAlta'];

  $query = "insert INTO cuentas (idCalle, idUsuario, nombreCliente, noExterior, noInterior, telefono, fechaAlta, ultimoPagoM, ultimoPagoA)
  VALUES ($calle, $usuario, $nombre, $Exterior, $Interior, $telefono, $fechaAlta, $ultimoM, $ultimoA)";

  if(mysqli_query($conexion, $query))
  {
    echo "Se logro insertar";
  }
  else {
    echo "No se logro insertar";
  }


} else {
?>
  <h1>Insertar Cuentas</h1>
  <form action="cuentas.php" method="post">
      idUsuario:<br />
      <input type="number" name="idUsuario" placeholder="No. Usuario" />
      <br /><br />
      idCalle:<br />
      <input type="number" name="idCalle" placeholder="No. Calle"/>
      <br /><br />
      Recargo:<br />
      <input type="text" name="nombreCliente" placeholder="nombre" />
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
