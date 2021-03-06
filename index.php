<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>System-app</title>
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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Catálogos</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Acerca de...</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#consultas">Consultas</a>
            </li>
            <li  class="nav-item mx-0 mx-lg-1">
              <div class="dropdown">
                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" id="dropdownMenu1" data-toggle="dropdown" >
                  Reportes
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">
                  <li><a href="calles.php">Calles</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="cuentas.php">Clientes</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="pagos.php">Historial de pagos</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="#" data-toggle="modal" data-target="#miModal">Pagos por período</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="situacion.php">Situación</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="tarifas.php">Tarifas</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <form action="acciones.php" method ="post">
                <button class="btn btn-primary btn-lg" type="submit" name="cerrar">
                  Cerrar sesión</button>
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
        <h2 class="text-center text-uppercase text-secondary mb-0">Catálogos</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1" title="Registro de calles">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/calles2.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2" title="Registro de Cuentas" >
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cuentas2.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3" title="Registro de Empleados">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/empleados2.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4" title="Registro de Situaciones">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/situacion.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5" title="Registro de Tarifas">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/tarifas.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6" title="Registro de Usuarios">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/usuarios.png" alt="">
            </a>
          </div>
        </div>
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
              <form action="calles.php" method="POST">
                <button class="btn btn-primary btn-lg" type="submit" name="consultaCalles" value="consultaCalles">Consulta Calles</button>
                <p class="mb-2"></p>
              </form>
            </div>
            <div style="width:33%;float:left;">
              <form action="cuentas.php" method="POST">
                <button class="btn btn-primary btn-lg" type="submit" name="consultaCuentas" value="consultaCuentas">Consulta Cuentas</button>
                <p class="mb-2"></p>
              </form>
            </div>
            <div style="width:33%;float:left;">
              <form action = "empleados.php" method = "POST">
                <button class="btn btn-primary btn-lg" type="submit" name="consultaEmpleados" value="consultaEmpleados">Consulta Empleados</button>
                <p class="mb-2"></p>
              </form>
            </div>
          </center>
          <center>
            <div style="width:25%;float:left;">
              <form action="situacion.php" method="POST">
                <button class="btn btn-primary btn-lg" type="submit" name="consultaSituacion" value="consultaSituacion">Consulta Situación</button>
                <p class="mb-2"></p>
              </form>
            </div>
            <div style="width:25%;float:left;">
              <form action="tarifas.php" method="POST">
                <button class="btn btn-primary btn-lg" type="submit" name="consultaTarifas" value="consultaTarifas">Consulta Tarifas</button>
                <p class="mb-2"></p>
              </form>
            </div>
            <div style="width:25%;float:left;">
              <form action="usuarios.php" method="POST">
                <button class="btn btn-primary btn-lg" type="submit" name="consultaUsuarios" value="consultaUsuarios">Consulta Usuarios</button>
                <p class="mb-2"></p>
              </form>
            </div>
            <div style="width:25%;float:left;">
              <form action="pagos.php" method="POST">
                <button class="btn btn-primary btn-lg" type="submit" name="consultaPagos" value="consultaPagos">Consulta de Pagos</button>
                <p class="mb-2"></p>
              </form>
            </div>
            <br/><br/><br/>
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

    <!-- Portfolio CALLES -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Calles</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/calls.png" alt="">
              <form action="acciones.php" method="POST">

                <div class="form-group">
                  <div style="width:50%;float:left;">
                    <label>Nombre de la calle</label>
                    <input class="form-control" id="calle" name="calle" type="text" placeholder="Ingrese solo letras" required="required" data-validation-required-message="Ingrese un nombre para la calle." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div style="width:50%;float:left;">
                    <label>Colonia</label>
                    <input class="form-control" id="colonia" name="colonia" type="text" placeholder="Ingrese solo letras" required="required" data-validation-required-message="Ingrese una colonia." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div style="width:50%;float:left;">
                    <label>Código postal</label>
                    <input class="form-control" id="cp" name="cp" type="text" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un código postal." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br/><br/><br/><br/><br/><br/>
                <p class="mb-5"></p>
                <div>
                  <button class="btn btn-primary btn-lg" type="submit" name="botonCalles" value="botonCalles">Guardar</button>
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

    <!-- Portfolio CUENTAS -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">

        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>

        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Cuentas</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cuenta.png" alt="">

              <form class="form" action="acciones.php" method="POST">

                <div class="form-group">
                  <div style="width:50%;float:left;">
                    <label>Nombre del cliente</label>
                    <input class="form-control" id="nombreP" name="nombreP" type="text" placeholder="Nombre completo" required="required" data-validation-required-message="Ingrese un nombre." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div style="width:50%;float:left;">
                    <label class="labels">Nombre de la Calle</label>
                    <select name="calle">
                    <option value="0">Seleccione una calle</option>
                    <?php
                    include('conexion.php');

                      $query = "SELECT * FROM calles";
                      $result = mysqli_query($conexion, $query);
                      while ($row = $result->fetch_assoc())
                      {
                        echo "<option value='".$row['idCalle']."'>".$row['nombre']."</option>";
                      }
                      ?>
                    </select>
                  </div>

                  <div style="width:50%;float:left;">
                    <label>Teléfono</label>
                    <input class="form-control" id="telefono" name="telefono"  maxlength="10" type="tel" placeholder= "Ingresa solo número" required="required" data-validation-required-message="Ingrese un teléfono." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="form-group">
                  <div style="width:50%;float:left;">
                    <label>Número Exterior</label>
                    <input class="form-control" id="noExt" name="noExt" type="number" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un número exterior."style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                    <label>Número Interior</label>
                    <input class="form-control" id="noInt" name="noInt" type="text" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un número interior." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                      <label>Email</label>
                      <input class="form-control" id="email" name="email" type="text" placeholder="Ingresa un correo valido" required="required" data-validation-required-message="Ingrese un email." style="width:300px;height:25px">
                      <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-6" style="width:50%;float:left;">
                    <label>Fecha de alta</label>
                    <input class="form-control" id="fecha" name="fecha" type="date" placeholder="Fecha de alta" required="required" data-validation-required-message="Ingrese una fecha." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                      <label>Año del último pago</label>
                      <input class="form-control" id="ultimoPagoA" name="ultimoPagoA" maxlength="4" type="text" placeholder="Ingresa un año valido" required="required" data-validation-required-message="Ingrese un año." style="width:300px;height:25px">
                      <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                      <label>Mes del último pago</label>
                      <input class="form-control" id="ultimoPagoM" name="ultimoPagoM" maxlength="2" type="number" placeholder="Ingresa solo número" required="required" data-validation-required-message="Ingrese un mes." style="width:300px;height:25px">
                      <p class="help-block text-danger"></p>
                  </div>
                </div>

                <p class="mb-5"></p>
                <div>
                  <button class="btn btn-primary btn-lg" type="submit" name="botonCuentas">Guardar</button>
                  <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                    <i class="fa fa-close"></i> Cerrar</a>
                </div>
              </form>
          </div> <!-- segundo col -->
        </div> <!-- row -->
      </div> <!-- primer div-->
    </div>
  </div>

    <!-- Portfolio EMPLEADOS -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Empleados</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/trabajadors.png" alt="">

              <form action="acciones.php" method="POST">

                <div class="form-group">
                  <div style="width:50%;float:left;">
                    <label>Nombre completo</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre completo" required="required" data-validation-required-message="Ingrese un nombre." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div>
                    <label>Rol</label>
                    <input class="form-control" id="rol" name="rol" type="text" placeholder="Rol" required="required" data-validation-required-message="Ingrese un rol." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                    <label class="labels">Email perteneciente</label>
                    <select name="empleado">
                      <option value="0">Seleccione un email</option>
                      <?php
                      include('conexion.php');

                      $query = "SELECT * FROM usuarios WHERE rol = 'Administrador'";
                      $result = mysqli_query($conexion, $query);
                      while ($row = $result->fetch_assoc())
                      {
                        echo "<option value='".$row['idUsuario']."'>".$row['email']."</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <br/><br/><br/>
                <p class="mb-5"></p>
                <div>
                  <button class="btn btn-primary btn-lg" type="submit" name="botonEmpleados">Guardar</button>
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
            <h4 class="modal-title" id="myModalLabel">Consulta de pagos por período</h4>
          </div>

          <div class="modal-body">
            <form class="form" action="reporte.php" method="POST">
              <div class="col-xs-6" style="width:50%;float:left;"> 
                <label>Fecha Inicial:</label>
                <input class="form-control" id="fechaI" name="fechaI" type="date" placeholder="Fecha de inicial" required="required" data-validation-required-message="Ingrese una fecha." style="width:200px;height:25px">
                <p class="help-block text-danger"></p>
              </div>

              <div class="col-xs-6" style="width:50%;float:left;"> 
                <label>Fecha Final:</label>
                <input class="form-control" id="fechaF" name="fechaF" type="date" placeholder="Fecha final" required="required" data-validation-required-message="Ingrese una fecha." style="width:200px;height:25px">
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

    <!-- Portfolio SITUACIONES -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Situación</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/situacions.png" alt="">

              <form name="formSituacion" id="formSituacion" action="acciones.php", method="POST">
                <div class="form-group">
                  <div style="width:50%;float:left;">
                    <label>Descripción</label>
                    <input class="form-control" id="descripcion" name="descripcion" type="text" placeholder="Descripción" required="required" data-validation-required-message="Ingrese una descripción." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div style="width:50%;float:left;">
                    <label>Descuento</label>
                    <input class="form-control" id="descuento"  name="descuento"  type="number" placeholder="Solo números" required="required" data-validation-required-message="Ingrese un descuento." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <p class="mb-5"></p>
                <div>
                  <button class="btn btn-primary btn-lg" type="submit" name="botonSituacion" value="botonSituacion">Guardar</button>
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

    <!-- Portfolio TARIFAS -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Tarifas</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/tar.png" alt="">

              <form action="acciones.php" method="POST">
                <div class="form-group">
                  <div style="width:50%;float:left;">
                    <label>Año</label>
                    <input class="form-control" id="año" name="año" type="number" placeholder="Solo números" required="required" data-validation-required-message="Ingrese el año de la tarifa" style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div style="width:50%;float:left;">
                    <label>Cuota Fija</label>
                    <input class="form-control" id="cuotaFija" name="cuotaFija" type="number" placeholder="Solo números" required="required" data-validation-required-message="Ingrese la cuota fija" style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div style="width:50%;float:left;">
                    <label>Infraestructura</label>
                    <input class="form-control" id="infra" name="infra" type="number" placeholder="Solo números" required="required" data-validation-required-message="Ingrese la infraestructura" style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div style="width:50%;float:left;">
                    <label>Recargo</label>
                    <input class="form-control" id="recargo" name="recargo" type="number" placeholder="Solo números" required="required" data-validation-required-message="Ingrese el recargo"style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div style="width:50%;float:left;">
                    <label>T.A.R</label>
                    <input class="form-control" id="tar" name="tar" type="number" placeholder="Solo números" required="required" data-validation-required-message="Ingrese el T.A.R" style="width:300px;height:25px"
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <p class="mb-5"></p>
                <div >
                  <button class="btn btn-primary btn-lg" type="submit" name="botonTarifas" value="botonTarifas">Guardar</button>
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

    <!-- Portfolio USUARIOS -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Registro de Usuarios</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/users.png" alt="">
              <form action="acciones.php" method="POST">
                <div class="control-group">
                  <div >
                    <label>Correo electrónico</label>
                    <input class="form-control" id="email" name="email" type="email" placeholder="correo electrónico" required="required" data-validation-required-message="Ingrese su correo electrónico." >
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div>
                    <label>Contraseña</label>
                    <input class="form-control" id="pass" name="pass" type="password" placeholder="Contraseña" required="required" data-validation-required-message="Ingrese su contraseña." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <p class="mb-5"></p>
                <div>
                  <button class="btn btn-primary btn-lg" type="submit" name="botonUsuarios">Guardar</button>
                  <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                    <i class="fa fa-close"></i>
                    Cerrar</a>
                </div>
              </form>
              <p class="mb-5"></p>

            </div>
          </div>
        </div>
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
