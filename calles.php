<html lang="en">
<head>
  <title>Consulta de Calles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>Consulta de calles</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>COLONIA</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('conexion.php');
        $consulta = mysqli_query($conexion, "SELECT * FROM calles");
        while (($fila = mysqli_fetch_array($consulta))!=NULL)
        {
            echo "
            <tr>
            <td>".$fila['idCalle']."</td>
            <td>".$fila['nombre']."</td>
            <td>".$fila['colonia']."</td>
            </tr>";
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
