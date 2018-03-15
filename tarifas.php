<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>Consulta de tarifas</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
       <th>IDTARIFA</th>
        <th>AÑO</th>
        <th>CUOTA FIJA</th>
        <th>RECARGO</th>
        <th>T.A.R</th>
        <th>INFRAESTRUCTURA</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('conexion.php');
        $consulta = mysqli_query($conexion, "SELECT * FROM tarifas");
         while (($fila = mysqli_fetch_array($consulta))!=NULL)
      {
        echo "
        <tr>
          <td>".$fila['idTarifa']."</td>
          <td>".$fila['fecha']."</td>
          <td>".$fila['coutaFija']."</td>
          <td>".$fila['recargo']."</td>
          <td>".$fila['tarifa']."</td>
          <td>".$fila['infraestructura']."</td>
        </tr>";
      }
      echo "</table></center>";
      ?>
    </tbody>
  </table>
</div>
</body>
</html>