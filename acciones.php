
<?php
include('conexion.php');
//SITUACIONES
if(isset($_POST['botonSituacion']))
{
  if($conexion)
  {
    $desc = $_POST['descripcion'];
    $descu = $_POST['descuento'];
    $respuesta  = mysqli_query($conexion, "INSERT INTO situaciones(descripcion,descuento) VALUES ('$desc','$descu')");
    if($respuesta)
    {
      header("Location: index.php");
      ?>
      <script language="javascript"> alert("¡Guardado!"); </script>
      <?php
    }
    else
    {
      ?>
      <script language="javascript"> alert("Error al almacenar"); </script>
      <?php
    }
  }
  mysqli_close($conexion);
}
//CALLES
if(isset($_POST['botonCalles']))
{
  if($conexion)
  {
    $nomb = $_POST['calle'];
    $col = $_POST['colonia'];
    $cod = $_POST['cp'];
    $respuesta  = mysqli_query($conexion, "INSERT INTO calles(nombre,colonia,cp) VALUES ('$nomb','$col','$cod')");
    if($respuesta)
    {
      header("Location: index.php");
      //include 'index.php';
      ?>
      <script language="javascript"> alert("¡Guardado!"); </script>
      <?php
    }
    else
    {
      ?>
      <script language="javascript"> alert("Error al almacenar"); </script>
      <?php
    }
  }
  mysqli_close($conexion);
}
//TARIFAS
if(isset($_POST['botonTarifas']))
{
  if($conexion)
  {
    $fec = $_POST['año'];
    $cuo = $_POST['cuotaFija'];
    $rec = $_POST['recargo'];
    $ta = $_POST['tar'];
    $infr = $_POST['infra'];
    $respuesta  = mysqli_query($conexion, "INSERT INTO tarifas(fecha,coutaFija,recargo,tarifa,infraestructura) VALUES ('$fec','$cuo','$rec','$ta','$infr')");
    if($respuesta)
    {
      header("Location: index.php");
      ?>
      <script language="javascript"> alert("¡Guardado!"); </script>
      <?php
    }
    else
    {
      ?>
      <script language="javascript"> alert("Error al almacenar"); </script>
      <?php
    }
  }
  mysqli_close($conexion);
}
//EMPLEADOS
if(isset($_POST['botonEmpleados']))
{
  if($conexion)
  {
    //$ejecuta = mysqli_query($conexion, "SELECT TotalUsuarios() AS TotalUsuarios"); PUEDE SERVIR DESPUÉS
    $nombre = $_POST['nombre'];
    $rol = $_POST['rol'];
    $empleado = $_POST['empleado'];

    $respuesta = mysqli_query($conexion, "INSERT INTO empleados (idUsuario, nombre, rol) VALUES ('$empleado', '$nombre', '$rol')");
    if($respuesta)
    {
      header("Location: index.php");
      ?>
      <script language="javascript"> alert("¡Guardado!"); </script>
      <?php
    }
    else
    {
      ?>
      <script language="javascript"> alert("Error al almacenar"); </script>
      <?php
    }
  }
  mysqli_close($conexion);
}
//USUARIOS
if(isset($_POST['botonUsuarios']))
{
  if($conexion)
  {
    $usuario = $_POST['email'];
    $cont = $_POST['pass'];

    $respuesta = mysqli_query($conexion, "INSERT INTO usuarios (email, password, rol) VALUES ('$usuario', '$cont', 'Administrador')");
    if($respuesta)
    {
      header("Location: index.php");
      ?>
      <script language="javascript"> alert("¡Guardado!"); </script>
      <?php
    }
    else
    {
      ?>
      <script language="javascript"> alert("Error al almacenar"); </script>
      <?php
    }
  }
  mysqli_close($conexion);
}
//CUENTAS
if(isset($_POST['botonCuentas']))
{
  if($conexion)
  {
    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios"); //resolver esta cosa
    $numUsuario = mysqli_num_rows($resultado);

    $calle = $_POST['calle'];
    $nombre = $_POST['nombreP'];
    $telefono = $_POST['telefono'];
    $ultimoA = $_POST['ultimoPagoA'];
    $ultimoM = $_POST['ultimoPagoM'];
    $Exterior = $_POST['noExt'];
    $Interior = $_POST['noInt'];
    $fechaAlta = $_POST['fecha'];

    $respuesta = mysqli_query($conexion, "INSERT INTO cuentas (idCalle, idUsuario, nombreCliente, noExterior, noInterior, telefono, fechaAlta, ultimoPagoM, ultimoPagoA)
    VALUES ('$calle', '$numUsuario', '$nombre', '$Exterior', '$Interior', '$telefono', '$fechaAlta', '$ultimoM', '$ultimoA')");

    $usuario = $_POST['email'];
    $ah = mysqli_query($conexion, "INSERT INTO usuarios (email, password, rol) VALUES ('$usuario', '123', 'Cliente')");

    if($respuesta)
    {
      header("Location: index.php");
      ?>
      <script language="javascript"> alert("¡Guardado!"); </script>
      <?php
    }
    else
    {
      ?>
      <script language="javascript"> alert("Error al almacenar"); </script>
      <?php
    }
  }
  mysqli_close($conexion);
}
//LOGIN
if(isset($_POST['botonLogin']))
{
  if($conexion)
  {
    $usuario = $_POST['user'];
    $password = $_POST['pass'];
    $respuesta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$usuario' AND password = '$password'");
    if(mysqli_num_rows($respuesta) > 0)
    {
      header('Location: index.php');
    }
    else
    {
      ?>
      <script language="javascript"> alert("Error al accesar"); </script>
      <?php
      header('Location: inicia.php');
    }
  }
  mysqli_close($conexion);
}
?>
