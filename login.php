<?php
require("conexion.php");

if (!empty($_POST))
{
    //obteneos los usuarios respecto a la usuario que llega por parametro
    $query = " SELECT * FROM usuarios WHERE email = :username ";

    $query_params = array(':username' => $_POST['username']);

    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        //para testear pueden utilizar lo de abajo
        //die("la consulta murio " . $ex->getMessage());

        $response["success"] = 0;
        $response["message"] = "Problema con la base de datos, vuelve a intetarlo";
        die(json_encode($response));

    }

    //la variable a continuación nos permitirará determinar si es o no la información correcta
    $login_ok = false;

    //vamos a buscar a todas las filas
    $row = $stmt->fetch();
    if ($row)
    {
        if ($_POST['password'] === $row['contrase'])
        {
            $login_ok = true;
        }
    }

    // Otherwise, we display a login failed message and show the login form again
    if ($login_ok) {
        $response["success"] = 1;
        $response["message"] = "Login correcto!";
        die(json_encode($response));
    } else {
        $response["success"] = 0;
        $response["message"] = "Login INCORRECTO";
        die(json_encode($response));
    }
} else {
?>
  <h1>Login</h1>
  <form action="login.php" method="post">
      Username:<br />
      <input type="text" name="username" placeholder="username" />
      <br /><br />
      Password:<br />
      <input type="password" name="password" placeholder="password" value="" />
      <br /><br />
      <input type="submit" value="Login" />
  </form>
 <?php
}

 ?>
