
<html lang="en">
<head>
  <title>Detalle de pago</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="img/logo.png" />
</head>
<body>

<div class="container">

  <h2>Detalle de pago</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>IDPAGO</th>
        <th>DESCRIPCION</th>
        <th>TARIFA</th>
        <th>MES INICIAL</th>
        <th>MES FINAL</th>
        <th>CUOTA FIJA</th>
        <th>RECARGO</th>
        <th>T.A.R</th>
        <th>INFRAESTRUCTURA</th>
        <th>DESCUENTO</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <?php
        session_start();
        include('conexion.php');
        $idPago = $_POST['datotabla'];
        $consulta = mysqli_query($conexion, "SELECT pagos.idPago, situaciones.descripcion, tarifas.fecha, 
        detallepago.MesInicial, detallepago.MesFinal, detallepago.coutaFija, detallepago.recargo, detallepago.tarifa, 
        detallepago.infraestructura, detallepago.descuento, pagos.total FROM detallepago INNER JOIN situaciones ON situaciones.idSituacion = detallepago.idSituacion INNER JOIN tarifas ON tarifas.idTarifa = detallepago.idTarifa INNER JOIN pagos ON detallepago.idPago = pagos.idPago WHERE pagos.idPago= $idPago");
        while (($fila = mysqli_fetch_array($consulta))!=NULL)
        {
          echo "
                <tr>
                    <td>".$fila['idPago']."</td>
                    <td>".$fila['descripcion']."</td>
                    <td>".$fila['fecha']."</td>
                    <td>".$fila['MesInicial']."</td>
                    <td>".$fila['MesFinal']."</td>
                    <td>".$fila['coutaFija']."</td>
                    <td>".$fila['recargo']."</td>
                    <td>".$fila['tarifa']."</td>
                    <td>".$fila['infraestructura']."</td>
                    <td>".$fila['descuento']."</td>
                    <td>".$fila['total']."</td>
                </tr>
                </form>";
        }
        echo "</table></center>";
      ?>
    </tbody>
  </table>
</div>
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Detalle del pago </h4>
          </div>

          <div class="modal-body">
            <form class="form" action="pagosCliente.php" method="POST">
              <div class="col-xs-6" style="width:50%;float:left;"> 
                <label>Fecha Inicial:</label>
                <input class="form-control" id="fechaI" name="fechaI" type="date" placeholder="Fecha de alta" required="required" data-validation-required-message="Ingrese una fecha." style="width:200px;height:25px">
                <p class="help-block text-danger"></p>
              </div>

              <div class="col-xs-6" style="width:50%;float:left;"> 
                <label>Fecha Final:</label>
                <input class="form-control" id="fechaF" name="fechaF" type="date" placeholder="Fecha inicial" required="required" data-validation-required-message="Ingrese una fecha." style="width:200px;height:25px">
                <p class="help-block text-danger"></p>
              </div>
              <p class="mb-5"></p>
              <center>
                <div>
                  <button class="btn btn-primary btn-lg" type="submit" name="btnImprimirPAGOSP">Consultar</button>
                </div>
              </center>
            </form>
          </div>
        </div>
      </div>     
    </div>

</body>
</html>