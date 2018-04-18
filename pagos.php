<html lang="en">
<head>
  <title>Pagos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="img/logo.png" />
</head>
<body>

<div class="container">

  <form class="form" action="reporte.php" method="POST">
    <h2>Consulta de Pagos</h2>
    <div style="width:10%;float:right;">
      <button class="btn btn-primary btn-lg" name="btnImprimirPagos" type="submit">Imprimir</button>        
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID PAGO</th>
          <th>CUENTA</th>
          <th>FECHA DE PAGO</th>
          <th>TOTAL</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include('conexion.php');
          $consulta = mysqli_query($conexion, "SELECT pagos.idPago, cuentas.nombreCliente, pagos.fecha, pagos.total FROM pagos INNER JOIN cuentas ON cuentas.idCuenta = pagos.idCuenta");
          while (($fila = mysqli_fetch_array($consulta))!=NULL)
          {
            echo "
            <tr>
              <td>".$fila['idPago']."</td>
              <td>".$fila['nombreCliente']."</td>
              <td>".$fila['fecha']."</td>
              <td>".$fila['total']."</td>
            </tr>";
          }
          echo "</table></center>";
        ?>
      </tbody>
    </table>
  </form>
</div>
</body>
</html>
