
<html lang="en">
<head>
  <title>Consulta de pagos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="img/logo.png" />
</head>
<body>

<div class="container">

  <h2>Consulta de Pagos</h2>

  <form method="POST" action="reporte.php">
  <div style="width:10%;float:right;">
    <button class="btn btn-primary btn-lg" name="btnImprimirPAGOSCLIENTES" type="submit">Imprimir</button>        
  </div>
  </form>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>IDPAGO</th>
        <th>CUENTA</th>
        <th>FECHA DE PAGO</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <?php
        session_start();
        include('conexion.php');
        $consulta = mysqli_query($conexion, "SELECT pagos.idPago, cuentas.nombreCliente, pagos.fecha, pagos.total FROM pagos INNER JOIN cuentas ON cuentas.idCuenta = pagos.idCuenta WHERE cuentas.idUsuario = ".$_SESSION['id']);
        while (($fila = mysqli_fetch_array($consulta))!=NULL)
        {
          echo "
                <tr>
                  <td id='valor'>".$fila['idPago']."</td>
                  <td>".$fila['nombreCliente']."</td>
                  <td>".$fila['fecha']."</td>
                  <td>".$fila['total']."</td>
                  <td>
                    <form action = 'detalle.php' method = 'POST'>
                      <input id='datotabla' type = 'hidden' name='datotabla' value=".$fila['idPago'].">
                      <button class='btn btn-primary btn-lg' type ='submit' name='consultaPagosC' data-toggle='modal' data-target='#miModal' value='consultaPagosC'>Ver detalle</button>
                    </form>
                  </td>
                </tr>
                </form>";
        }
        echo "</table></center>";
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
