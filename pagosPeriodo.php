<html lang="en">
<head>
  <title>Consulta de pagos por período</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Consulta de Pagos por periodo</h2>
  <form method="POST" action="reporte.php">
  <div style="width:10%;float:right;">
    <button class="btn btn-primary btn-lg" name="btnImprimirPAGOSP" value="btnImprimirPAGOSP" type="submit">Imprimir</button> 
  </div>
  <div>
    <?php
      $FI = $_POST['fechaI'];
      $FF = $_POST['fechaF'];
      echo "<label>Fecha Inicial: </label>";
      echo '<input disabled="disabled" value= "'.$FI.'" id="fechI" name="fechI" type="text" style="width:200px;height:25px">';
      echo "<label>Fecha Final: </label>";
      echo '<input disabled="disabled" value= "'.$FF.'" id="fechF" name="fechF" type="text" style="width:200px;height:25px">';
    ?>
  </div>
  <center>
  <div style ="">
  </div>
  </center>
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
        include('conexion.php');
        $FI = $_POST['fechaI'];
        $FF = $_POST['fechaF'];
        $consulta = mysqli_query($conexion, "SELECT pagos.idPago, cuentas.nombreCliente, pagos.fecha, pagos.total FROM pagos INNER JOIN cuentas ON cuentas.idCuenta = pagos.idCuenta WHERE pagos.fecha BETWEEN '$FI' AND '$FF'");
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
</div>
</body>
</html>