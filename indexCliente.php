<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SYSTEM-APP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png" />
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">System-app</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Perfil</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Acerca de...</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#consultas">Consultas</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#pagos">Pagos</a>
            </li>
            <li  class="nav-item mx-0 mx-lg-1">
              <div class="dropdown">
                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" id="dropdownMenu1" data-toggle="dropdown" >
                  Reportes
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">
                  <li><a href="#" data-toggle="modal" data-target="#miModal">Pagos Individuales</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="pagosCliente.php">Historial de pagos</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <form action="acciones.php" method="POST">
                <button class="btn btn-primary btn-lg" type="submit" name="cerrar">Cerrar sesión</button>
              </form> 
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/logo.png" alt="">
        <h1 class="text-uppercase mb-0">SYSTEM-APP</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Sistema para el control automatizado de agua potable</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Perfil del cliente</h2>
        <hr class="star-dark mb-5">
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2" title="Perfil" >
          <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <center>
            <img class="img-fluid" src="img/portfolio/cuentas2.png" alt="">
          </center>
        </a>
        <div class="col-md-6 col-lg-4">
        </div>
      </div>  
    </section>

    <section class="portfolio" id="pagos">
      <div class="container" >
        <h2 class="text-center text-uppercase text-secondary mb-0">Realizar pagos de agua</h2>
        <hr class="star-dark mb-5">
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1" title="Pagos" >
          <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <center>
            <img class="img-fluid" src="img/portfolio/pago.png" alt="" >
          </center>
        </a>
      </div>  
    </section>

    <!--Consultas Section -->
    <section class="portfolio" id="consultas">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Consultas</h2>
        <hr class="star-dark mb-5">
        <p class="mb-5"></p>
        <center>
          <div style="width:33%;float:left;">
            <form action="situacion.php" method="POST">
              <button class="btn btn-primary btn-lg" type="submit" name="consultaSituacion" value="consultaSituacion">Consulta Situación</button>
              <p class="mb-2"></p>
            </form>
          </div>
          <div style="width:33%;float:left;">  
            <form action="tarifas.php" method="POST">
              <button class="btn btn-primary btn-lg" type="submit" name="consultaTarifas" value="consultaTarifas">Consulta Tarifas</button>
              <p class="mb-2"></p>
            </form>
          </div>
          <div style="width:33%;float:left;">  
            <form action="pagosCliente.php" method="POST">
              <button class="btn btn-primary btn-lg" type="submit" name="consultaPagosC" value="consultaPagosC">Consulta de Pagos</button>
              <p class="mb-2"></p>
            </form>
          </div>
        </center>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Acerca de...</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">SYSTEM-APP permite a los ayuntamientos a tener un control optimizado de los procesos de pago de agua y otros servicios</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Siendo una herramienta capaz de optimizar procesos y generar un beneficio al cliente y a la dependencia</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Ubicación</h4>
            <p class="lead mb-0">Ciudad Guzmán
              <br>Av. Tecnológico 100</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Búscanos en</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="http://www.facebook.com">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://plus.google.com">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://twitter.com/">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://mx.linkedin.com/">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://dribbble.com/">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Acerca de SYSTEM-APP</h4>
            <p class="lead mb-0">¡¡SYSTEM-APP es tu mejor opción!!</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; SYSTEM-APP 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- PORTAFOLIO DE PAGOS -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Pagos</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/pagos.png" alt="">
              <form name = "datosPagos" action="acciones.php" method="POST">

                <div class="form-group">
                  <div style="width:50%;float:left;">
                    <label class="labels">Nombre del cliente</label>
                      <?php
                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control" readonly="true" value= "'.$row['nombreCliente'].'" id="nombreP" name="nombreP" type="text" style="width:300px;height:25px">';
                        }
                      }
                      ?>
                  </div>
                  <div class="col-xs-6" style="width:50%;float:left;">
                    <label>Fecha de pago</label>
                    <?php
                      echo '<input class="form-control" id="fechaP" name="fechaP" type="text" readonly="true" value="'.date('d-m-Y').'" placeholder="Fecha de pago" required="required" data-validation-required-message="Ingrese una fecha." style="width:300px;height:25px">'
                    ?>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-6" style="width:100%;float:left;">
                    <label>Tarifa:</label>
                    <select id="tarifas"  name="tarifas" onchange="mostrar();">
                        <option value="0">Seleccione una Tarifa</option>
                          <?php
                            include('conexion.php');

                            $query = "SELECT * FROM tarifas";
                            $result = mysqli_query($conexion, $query);
                            while ($row = $result->fetch_assoc())
                            {
                              echo "<option value='".$row['idTarifa']."'>".$row['fecha']."</option>";
                            }
                          ?>
                      </select>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="col-xs-6" style="width:25%;float:left;">
                      <label>Cuota Fija </label>
                      <center>
                      <input class="form-control" id="coutaFija" name="coutaFija" type="number" readonly="true" value="0" style="width:150px;height:25px">
                          </center>
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="col-xs-6"style="width:25%;float:left;">
                      <label>Recargo </label>
                      <center>
                      <input class="form-control" id="recargo" name="recargo" type="number" readonly="true" value="0" style="width:150px;height:25px">
                          </center>
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="col-xs-6" style="width:25%;float:left;">
                      <label>T.A.R </label>
                      <CENTER>
                      <input class="form-control" id="tarifa" name="tarifa" type="number" readonly="true" value="0" style="width:150px;height:25px">
                          </CENTER>
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="col-xs-6" style="width:25%;float:left;">
                      <label>Infraestructura</label>
                      <CENTER>
                      <input class="form-control" id="infraestructura" name="infraestructura" type="number" readonly="true" value="0" style="width:150px;height:25px">
                      <p class="help-block text-danger"></p>
                          </CENTER>
                  </div>
                </div>  

                <div class="form-group">
                  <div class="col-xs-6" style="width:100%;float:left;"> 
                      <label>Situación:</label> 
                      <select name="situaciones" id="situaciones" onchange="mostrarSituaciones();">
                        <option value="0">Seleccione una situacion</option>
                        <?php
                          include('conexion.php');

                          $query = "SELECT * FROM situaciones";
                          $result = mysqli_query($conexion, $query);
                          while ($row = $result->fetch_assoc())
                          {
                            echo "<option value='".$row['idSituacion']."'>".$row['descripcion']."</option>";
                          }
                        ?>
                      </select>
                          <center>  
                           <label>porcentaje</label>
                           <input class="form-control" id="descuento" name="descuento" type="number" readonly="true" value="0" style="width:100px;height:25px">
                        </center>
                      <p class="help-block text-danger"></p>
                  </div>
                </div>  

<!--NO MOVER APARENTEMENTE SIRVE -->
<script language="JavaScript" type="text/JavaScript">

var tarifa = {
  <?php
  include('conexion.php');

  $query = "SELECT * FROM tarifas";
  $result = mysqli_query($conexion, $query);
  while ($row = $result->fetch_assoc())
  {
    echo "'".$row['idTarifa']."':['".$row['coutaFija']."', '".$row['recargo']."', '".$row['tarifa']."', '".$row['infraestructura']."' ],";
  }
  ?> 
}

var situacion = {
  <?php
  include('conexion.php');

  $query = "SELECT * FROM situaciones";
  $result = mysqli_query($conexion, $query);
  while ($row = $result->fetch_assoc())
  {
    echo "'".$row['idSituacion']."':['".$row['descuento']."'],";
  }
  ?> 
}

function mostrar()
{
  var comboTarifa = document.getElementById('tarifas');
  var opcion = comboTarifa.value;
  
  document.getElementById('coutaFija').value = tarifa[opcion][0];
  document.getElementById('recargo').value = tarifa[opcion][1];
  document.getElementById('tarifa').value = tarifa[opcion][2];
  document.getElementById('infraestructura').value = tarifa[opcion][3];
}

function mostrarSituaciones()
{
    var comboSituacion = document.getElementById('situaciones').value;
    
    document.getElementById('descuento').value = situacion[comboSituacion][0];
}

function calcularMeses()
{
  var mes1 = document.getElementById('mesInicial').value;
  var mes2 = document.getElementById('mesFinal').value;

  var cf = document.getElementById('coutaFija').value;
  var rec = document.getElementById('recargo').value;
  var tar = document.getElementById('tarifa').value;
  var inf = document.getElementById('infraestructura').value;
  var des = document.getElementById('descuento').value;
  var meses = document.getElementById('TotalMeses').value;
  
  var x;
  var cont = 0;
  for(x = mes1; x< mes2; x++)
  {
    cont = cont + 1;
  }

  var cfTotal = (cf/12) * meses;
  var recTotal = (rec/12) * meses;
  var tarTotal = (tar/12) * meses;
  var infTotal = (inf/12) * meses;

  var sinDescuento = cfTotal + recTotal + tarTotal + infTotal;
  var descuento = (des * sinDescuento)/100;
  var conDescuento = sinDescuento - descuento;

  document.getElementById('TotalMeses').value = cont;  
  document.getElementById('coutaFijaFinal').value = cfTotal;
  document.getElementById('recargoFinal').value = recTotal;
  document.getElementById('tarifaFinal').value = tarTotal;
  document.getElementById('infraestructuraFinal').value = infTotal;
  document.getElementById('total').value = conDescuento;
  document.getElementById('des').value = descuento;
}

</script> 

                <div class="form-group">
                  <div class="col-xs-6" style="width:33%;float:left;">
                    <label>Mes Inicial:</label><br/>
                    <select name="mesInicial" id="mesInicial" >
                      <option value="0">Seleccione un mes</option>
                      <option value="1">Enero</option>
                      <option value="2">Febrero</option>
                      <option value="3">Marzo</option>
                      <option value="4">Abril</option>
                      <option value="5">Mayo</option>
                      <option value="6">Junio</option>
                      <option value="7">Julio</option>
                      <option value="8">Agosto</option>
                      <option value="9">Septiembre</option>
                      <option value="10">Octubre</option>
                      <option value="11">Noviembre</option>
                      <option value="12">Diciembre</option>
                    </select>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="col-xs-6" style="width:33%;float:left;">
                    <label>Mes Final:</label><br/>
                    <select name="mesFinal" id="mesFinal" onchange="calcularMeses();">
                      <option value="0">Seleccione un mes</option>
                      <option value="1">Enero</option>
                      <option value="2">Febrero</option>
                      <option value="3">Marzo</option>
                      <option value="4">Abril</option>
                      <option value="5">Mayo</option>
                      <option value="6">Junio</option>
                      <option value="7">Julio</option>
                      <option value="8">Agosto</option>
                      <option value="9">Septiembre</option>
                      <option value="10">Octubre</option>
                      <option value="11">Noviembre</option>
                      <option value="12">Diciembre</option>
                    </select>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              <div class="form-group">   
                <div  class="col-xs-6" style="width:33%;float:left;">
                  <label>Meses a pagar</label>
                  <input  class="form-control"  id="TotalMeses" name="TotalMeses" type="text" value="0" readonly="true" style="width:200px;height:25px">
                  <p class="help-block text-danger"></p>
                </div>
              </div>  
              <div class="form-group">
                <div class="col-xs-6"style="width:25%;float:left;">
                    <label>Final Cuota Fija</label>
                    <center>
                    <input class="form-control" id="coutaFijaFinal" name="coutaFijaFinal" type="number" readonly="true" value="0" style="width:150px;height:25px">
                    </center>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="col-xs-6" style="width:25%;float:left;">
                    <label>Final Recargo</label>
                    <center>
                    <input class="form-control" id="recargoFinal" name="recargoFinal" type="number" readonly="true" value="0" style="width:150px;height:25px">
                    </center>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="col-xs-6" style="width:25%;float:left;">
                    <label>Final Tarifa</label><br/>
                    <center>
                    <input class="form-control" id="tarifaFinal" name="tarifaFinal" type="number" readonly="true" value="0" style="width:150px;height:25px">
                    </center>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="col-xs-6" style="width:25%;float:left;">
                    <label>Final Infraestructura</label>
                    <center>
                    <input class="form-control" id="infraestructuraFinal" name="infraestructuraFinal" type="number" readonly="true" value="0" style="width:150px;height:25px">
                    </center>
                    <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-xs-6" style="width:50%;float:left;">
                  <label>Descuento</label>
                  <center>
                  <input class="form-control" id="des" name="des" type="number" readonly="true" value="0" style="width:300px;height:25px">
                  </center>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="col-xs-6" style="width:50%;float:left;">
                  <label>Total a pagar</label>
                  <center>
                  <input class="form-control" id="total" name="total" type="text" readonly="true" value="0" style="width:300px;height:25px">
                  </center>
                  <p class="help-block text-danger"></p>
                </div> 
                
              </div> 
              <div>
                <p class="mb-1">.</p><br/>
                </div>
                <p class="mb-5"></p>
                <div>
                  <button class="btn btn-primary btn-lg" type="submit" name="botonPagar" value="botonPagar">Registrar Pago</button>
                  <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                    <i class="fa fa-close"></i>
                    Cerrar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio PAGOS INDIVIDUALES -->
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
            <h4 class="modal-title" id="myModalLabel">Consulta de pagos individuales</h4>
          </div>
          <div class="modal-body">
          <form class="form" action="pagosPeriodo.php" method="POST">
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
              <button class="btn btn-primary btn-lg" type="submit" name="botonPagosP">Guardar</button>
              </div>
            </center>
          </form>
          </div>
        </div>
      </div>     
    </div>

    <!-- Portfolio PAGOS INDIVIDUALES -->
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Consulta de pagos individuales</h4>
          </div>
          <div class="modal-body">
            <form class="form" action="reporte.php" method="POST">
              <div>
                <label>Cliente: </label>
                <?php
                include('conexion.php');          
                  if(isset($_SESSION['id']))
                  {
                    $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                    $result = mysqli_query($conexion, $query);
                      if ($result)
                      {
                        $row = mysqli_fetch_assoc($result);
                        echo '<input class="form-control" disabled="disabled" value= "'.$row['nombreCliente'].'" id="nombreP" name="nombreP" type="text" style="width:300px;height:25px">';
                      }
                  }
                ?>
              </div>
              <p class="mb-5"></p>
              <label>Seleccione el ID del pago: </label>
              <select name="idPago" id="idPago">
                <option value="0">Elegir id</option>
                <?php
                  include('conexion.php');
                  $query = "SELECT * FROM pagos WHERE idCuenta = ".$_SESSION['idCuenta'];
                  $result = mysqli_query($conexion, $query);
                  while ($row = $result->fetch_assoc())
                  {
                    echo "<option value='".$row['idPago']."'>".$row['idPago']."</option>";
                  }
                ?>
              </select>
              <p class="mb-5"></p>
              <center>
                <div>
                  <button class="btn btn-primary btn-lg" type="submit" id="btnImprimirPAGOSI" name="btnImprimirPAGOSI">Consultar</button>
                </div>
              </center>
            </form>
          </div>
        </div>
      </div>     
    </div>

    <!-- Portfolio CUENTAS -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">

        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>

        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Cuenta del cliente</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cuenta.png" alt="">

              <form class="form" action="acciones.php" method="POST">

                <div class="form-group">
                  <div style="width:50%;float:left;">
                    <label>Nombre del cliente</label>
                    <?php
                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control" value= "'.$row['nombreCliente'].'" id="nombreP" name="nombreP" type="text" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">';
                        }
                      }
                    ?>
                    <p class="help-block text-danger"></p>
                  </div>

                  <!--<div style="width:50%;float:left;">
                    <label class="labels">Nombre de la Calle</label>
                    <!<br/>
                    <input class="form-control" id="nombreCalle" name="nombreCalle" type="text" placeholder="Ingrese solo letras" required="required" data-validation-required-message="Ingrese un nombre." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>-->
                  <div style="width:50%;float:left;">
                    <label>Calle</label>
                    <input class="form-control" id="nombreP" name="nombreP" type="text" placeholder="Nombre completo" required="required" data-validation-required-message="Ingrese un nombre." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                    <label>Teléfono</label>
                    <?php
                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control" value= "'.$row['telefono'].'" id="pago" name="telefono" type="text" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">';
                        }
                      }
                      ?>
                      <label>Contraseña</label>
                      
                      <?php
                      include('conexion.php');
                       
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM usuarios WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control" value= "'.$row['password'].'" id="contra" name="contra" type="password" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">';
                        }
                      }
                     ?>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="form-group">
                  <div style="width:50%;float:left;">
                    <label>Número Exterior</label>
                    <?php
                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control" value= "'.$row['noExterior'].'" id="pago" name="noExt" type="text" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">';
                        }
                      }
                      ?>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                    <label>Número Interior</label>
                    <?php
                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control"  value= "'.$row['noInterior'].'" id="pago" name="noInt" type="text" placeholder="Ingrese solo números" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">';
                        }
                      }
                      ?>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                    <label>Email</label>
                      <?php
                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM usuarios WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control" value= "'.$row['email'].'" id="email" name="email" type="text" placeholder="Ingrese un email válido" required="required" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">';
                        }
                      }
                    ?>
                      <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-6" style="width:50%;float:left;">
                    <label>Fecha de alta</label>
                    <?php
                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control" disabled="disabled" value= "'.$row['fechaAlta'].'" name="fechaAlta" type="date" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">';
                        }
                      }
                      ?>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                      <label>Año del último pago</label>
                      <?php
                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control" disabled="disabled" value= "'.$row['ultimoPagoA'].'" id="ultimoPagoM" name="ultimoPagoM" type="text" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">';
                        }
                      }
                    ?>
                      <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                      <label>Mes del último pago</label>
                      <?php
                      include('conexion.php');
                      
                      if(isset($_SESSION['id']))
                      {
                        $query = "SELECT * FROM cuentas WHERE idUsuario = ".$_SESSION['id'];
                        $result = mysqli_query($conexion, $query);
                        if ($result)
                        {
                          $row = mysqli_fetch_assoc($result);
                          echo '<input class="form-control" disabled="disabled" value= "'.$row['ultimoPagoM'].'" name="ultimoPagoA" type="number" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">';
                        }
                      }
                    ?>
                      <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div>
                  <p class="mb-1">.</p><br/>
                </div>
                <div>
                  <br/>
                  <button class="btn btn-primary btn-lg" type="submit" name="botonActualizar">Guardar</button>
                  <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                    <i class="fa fa-close"></i> Cerrar</a>
                </div>
              </form>
          </div> <!-- segundo col -->
        </div> <!-- row -->
      </div> <!-- primer div-->
    </div>
  </div>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
    <script src="web.js"></script>
  </body>

</html>