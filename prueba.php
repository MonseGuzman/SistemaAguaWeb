<?php
session_start();
if(isset($_SESSION['usuario']))
{
  echo "inicio sesion " .$_SESSION['id']."<br>";
  echo "inicio sesion " .$_SESSION['rol']."<br>";
  echo "inicio sesion " .$_SESSION['usuario']."<br>";


                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo "inicio sesion " .$row['nombreCliente']."<br>";
                          echo '<input class="form-control" value= "'.$row['nombreCliente'].'" id="pago" name="pago" type="text" style="width:300px;height:25px">';
                        }
                      }
                      
}
else
    echo "no";
?>