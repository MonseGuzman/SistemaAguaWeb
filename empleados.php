<?php
include('conexion.php');

if (!empty($_POST))
{
  $usuario = $_POST['idUsuario'];
  $nombre = $_POST['nombre'];
  $rol = $_POST['rol'];

  $query = "insert INTO empleados (idUsuario, nombre, rol) VALUES ($usuario, $nombre, $rol)";

  if(mysqli_query($conexion, $query))
  {
    echo "Se logro insertar";
  }
  else {
    echo "No se logro insertar";
  }


} else {
?>
  <h1>Insertar Empleados</h1>
  <form action="empleados.php" method="post">
      Fecha:<br />
      <input type="text" name="idUsuario" placeholder="No. Usuario" />
      <br /><br />
      Couta Fija:<br />
      <input type="text" name="nombre" placeholder="Nombre empleado"/>
      <br /><br />
      Recargo:<br />
      <input type="text" name="rol" placeholder="Administrador" />
      <br /><br />
      <input type="submit" value="Insertar" />
  </form>
 <?php
}
?>
