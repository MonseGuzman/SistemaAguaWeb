<html lang="en">
<head>
  <title>Cuentas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="img/logo.png" />
</head>
<body>

<div class="container">

  <h2>Consulta de cuentas</h2>
  <form class="form" action="reporte.php" method="POST">

    <div style="width:10%;float:right;">
      <button class="btn btn-primary btn-lg" name="btnImprimirCuenta" type="submit">Imprimir</button>        
    </div>
  </form>  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID CUENTA</th>
        <th>NOMBRE</th>
        <th>DOMICILIO</th>
        <th>NO.EXT</th>
        <th>NO.INT</th>
        <th>TELÉFONO</th>
        <th>FECHA DE ALTA</th>
        <th>ÚLTIMO PAGO</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('conexion.php');
        header("Content-Type: text/html;charset=utf-8");

        $consulta = mysqli_query($conexion, "SELECT idCuenta, nombre, nombreCliente, noExterior, noInterior,
        telefono, fechaAlta, ultimoPagoM, ultimoPagoA FROM cuentas INNER JOIN calles on calles.idCalle = cuentas.idCalle");
        
        while (($fila = mysqli_fetch_array($consulta))!=NULL)
        {
        echo "
        <tr>
          <td>".$fila['idCuenta']."</td>
          <td>".utf8_decode($fila['nombreCliente'])."</td>
          <td>".utf8_decode($fila['nombre'])."</td>
          <td>".$fila['noExterior']."</td>
          <td>".$fila['noInterior']."</td>
          <td>".$fila['telefono']."</td>
          <td>".$fila['fechaAlta']."</td>
          <td>".$fila['ultimoPagoM']."/".$fila['ultimoPagoA']."</td>
        </tr>";
      }
      echo "</table></center>";
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
