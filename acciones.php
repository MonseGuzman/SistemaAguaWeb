
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

    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios");
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

    if(isset($_SESSION['id']))
    {
      $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
      $result = mysqli_query($conexion, $query);
      if ($result)
      {
        $row = mysqli_fetch_assoc($result);
        $usuario = $row['idCuenta'];
      }
    }

    $fecha = date('d-m-Y');
    $pago = isset($_POST['total']) ? $_POST['total'] : 0;

    $respuesta = mysqli_query($conexion, "INSERT INTO pagos (idCuenta, fecha, total) VALUES ('$usuario', '$fecha','$pago')");
    
    if($respuesta)
    {
      //almacena detalles
      $CF = isset($_POST['coutaFijaFinal']) ? $_POST['coutaFijaFinal'] : 0;
      $recargo = isset($_POST['recargoFinal']) ? $_POST['recargoFinal'] : 0;
      $tar = isset($_POST['tarifaFinal']) ? $_POST['tarifaFinal'] : 0;
      $inf = isset($_POST['infraestructuraFinal']) ? $_POST['infraestructuraFinal'] : 0;
      $des = isset($_POST['des']) ? $_POST['des'] : 0;
      $idTarifa = $_POST['tarifas'];
      $idSituacion = $_POST['situaciones'];
      $mesInicial = $_POST['mesInicial'];
      $mesFinal = $_POST['mesFinal'];

      $idPago = mysqli_query($conexion, "SELECT * FROM pagos");
      $numPagos = mysqli_num_rows($idPago);

      $resultado = mysqli_query($conexion, "INSERT INTO detallepago (idPago, idSituacion, idTarifa, MesInicial, MesFinal, coutaFija, recargo, tarifa, infraestructura, descuento, total) 
      VALUES ('$numPagos', '$idSituacion','$idTarifa', '$mesInicial', '$mesFinal', '$CF', '$recargo', '$tar', '$inf', '$des', '$pago' )");
      
      if($resultado)
      {
        header('Location: indexCliente.php');
        ?>
        <script language="javascript"> alert("¡Pago Realizado!"); </script>
        <?php
      } 
    }
    else
    {
      header('Location: indexCliente.php');
      ?>
      <script language="javascript"> alert("Error al almacenar"); </script>
      <?php
    }
  }
  mysqli_close($conexion);
}
//ACTUALIZA CUENTAS
if(isset($_POST['botonActualizar']))
{
  if($conexion)
  {
    $calle = $_POST['calle'];
    $nombre = $_POST['nombreP'];
    $email = $_POST['email'];
    $Exterior = $_POST['noExt'];
    $Interior = $_POST['noInt'];
    $telefono = $_POST['telefono'];
    
    $pass = $_POST['contra']; 
    $usuario = $_POST['email'];

    mysqli_query($conexion, "UPDATE usuarios SET email = '$usuario', password = '$pass' WHERE idCuenta = ".$_SESSION['id']);

    $respuesta = mysqli_query($conexion, "UPDATE cuentas SET idCalle = '$calle', nombreCliente = '$nombre', noExterior = '$Exterior', 
    noInterior = '$Interior', telefono = '$telefono' WHERE idCuenta = ".$_SESSION['id']);

    if($respuesta)
    {
      header("Location: indexCliente.php");
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
