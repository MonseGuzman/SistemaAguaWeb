<html lang="en">
<head>
  <title>Consulta de Cuentas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>Consulta de cuentas</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>IDCUENTA</th>
        <th>IDCALLE</th>
        <th>IDUSUARIO</th>
        <th>NOMBRE</th>
        <th>NO.EXT</th>
        <th>NO.INT</th>
        <th>TELÉFONO</th>
        <th>FECHA DE ALTA</th>
        <th>MES DE ÚLTIMO PAGO</th>
        <th>AÑO DE ÚLTIMO PAGO</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('conexion.php');
        $consulta = mysqli_query($conexion, "SELECT * FROM cuentas");
        while (($fila = mysqli_fetch_array($consulta))!=NULL)
        {
        echo "
        <tr>
          <td>".$fila['idCuenta']."</td>
          <td>".$fila['idCalle']."</td>
          <td>".$fila['idUsuario']."</td>
          <td>".$fila['nombreCliente']."</td>
          <td>".$fila['noExterior']."</td>
          <td>".$fila['noInterior']."</td>
          <td>".$fila['telefono']."</td>
          <td>".$fila['fechaAlta']."</td>
          <td>".$fila['ultimoPagoM']."</td>
          <td>".$fila['ultimoPagoA']."</td>
        </tr>";
      }
      echo "</table></center>";
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
