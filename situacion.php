<html lang="en">
<head>
  <title>Consulta de Situaciones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>Consulta de situaciones</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>IDSITUACIÓN</th>
        <th>DESCRIPCIÓN</th>
        <th>DESCUENTO</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('conexion.php');
         $consulta = mysqli_query($conexion, "SELECT * FROM situaciones");
        while (($fila = mysqli_fetch_array($consulta))!=NULL)
      {
        echo "
        <tr>
          <td>".$fila['idSituacion']."</td>
          <td>".$fila['descripcion']."</td>
          <td>".$fila['descuento']."</td>
        </tr>";
      }
      echo "</table></center>";
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
