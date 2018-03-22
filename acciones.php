
<?php
include('conexion.php');
session_start();
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
    $suma = $cuo + $rec + $ta + $infr;
    $respuesta  = mysqli_query($conexion, "INSERT INTO tarifas(fecha,coutaFija,recargo,tarifa,infraestructura, total) VALUES ('$fec','$cuo','$rec','$ta','$infr', '$suma')");
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
    $calle = $_POST['calle'];
    $nombre = $_POST['nombreP'];
    $telefono = $_POST['telefono'];
    $ultimoA = $_POST['ultimoPagoA'];
    $ultimoM = $_POST['ultimoPagoM'];
    $Exterior = $_POST['noExt'];
    $Interior = $_POST['noInt'];
    $fechaAlta = $_POST['fecha'];

    $usuario = $_POST['email'];
    $ah = mysqli_query($conexion, "INSERT INTO usuarios (email, password, rol) VALUES ('$usuario', '123', 'Cliente')");

    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios"); //resolver esta cosa
    $numUsuario = mysqli_num_rows($resultado);

    $respuesta = mysqli_query($conexion, "INSERT INTO cuentas (idCalle, idUsuario, nombreCliente, noExterior, noInterior, telefono, fechaAlta, ultimoPagoM, ultimoPagoA)
    VALUES ('$calle', '$numUsuario', '$nombre', '$Exterior', '$Interior', '$telefono', '$fechaAlta', '$ultimoM', '$ultimoA')");

    

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
      
      $row = mysqli_fetch_assoc($respuesta);
      if($row['rol'] == "Administrador" or $row['rol'] == "Empleado")
      {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $row['rol'];
        $_SESSION['id'] = $row['idUsuario'];
        header('Location: index.php');
      }
      else
      {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $row['rol'];
        $_SESSION['id'] = $row['idUsuario'];
        header('Location: indexCliente.php');
      }
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
//MOVIMIENTO PAGO
if(isset($_POST['botonPagar']))
{
  if($conexion)
  {
    $usuario = $_POST['idCuenta'];
    $fecha = $_POST['fechaP'];
    $pago = $_POST['pago'];

    //almacena detalles
    $CF = $_POST['coutaFija'];
    $recargo = $_POST['recargo'];
    $tar = $_POST['tarifa'];
    $inf = $_POST['infraestructura'];

    $respuesta = mysqli_query($conexion, "INSERT INTO pagos (idCuenta, fecha, total) VALUES ('$usuario', '$fecha','$pago')");
    if($respuesta)
    {
      Include 'indexCliente.php';
      ?>
      <script language="javascript"> alert("¡Pago Realizado!"); </script>
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
//ACTUALIZA CUENTAS
if(isset($_POST['botonCuentas']))
{
  if($conexion)
  {
    //aun no sirve
    $calle = $_POST['calle'];
    $nombre = $_POST['nombreP'];
    $telefono = $_POST['telefono'];
    $ultimoA = $_POST['ultimoPagoA'];
    $ultimoM = $_POST['ultimoPagoM'];
    $Exterior = $_POST['noExt'];
    $Interior = $_POST['noInt'];
    $fechaAlta = $_POST['fecha'];
    $pass = $_POS['contra']; //agregar al diseño

    $usuario = $_POST['email'];
    mysqli_query($conexion, "UPDATE usuarios SET email = '$usuario', password = '$pass' WHERE idCuenta = ".$_SESSION['id']);

    $respuesta = mysqli_query($conexion, "UPDATE cuentas idCalle = '$calle', nombreCliente = '$nombre', noExterior = '$Exterior', noInterior = '$Interior', 
    telefono = '$telefono', ultimoPagoM = '$ultimoM', ultimoPagoA = '$ultimoA'");

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
//CERRAR SESION
if(isset($_POST['cerrar']))
{
  if(isset($_SESSION['usuario']))
  {
    echo "Cierro sesion";
    session_destroy();
    header('Location: inicia.php');
  }
}
?>
