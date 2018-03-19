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
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#sesion">Cerrar sesión</a>
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
         <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2" title="Perfil" >
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cuentas2.png" alt="">
            </a>
          </div>
    </section>
    <section class="portfolio" id="pagos">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Realizar pagos de agua</h2>
        <hr class="star-dark mb-5">
         <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1" title="Pagos" >
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/pago.png" alt="">
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
          <form action="situacion.php" method="POST">
            <button class="btn btn-primary btn-lg" type="submit" name="consultaSituacion" value="consultaSituacion">Consulta Situación</button>
            <p class="mb-2"></p>
          </form>  
          <form action="tarifas.php" method="POST">
            <button class="btn btn-primary btn-lg" type="submit" name="consultaTarifas" value="consultaTarifas">Consulta Tarifas</button>
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
            <p class="lead">System-app permite a los ayuntamientos a tener un control optimizado de los procesos de pago de agua y otros servicios</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Siendo una herramienta capaz de optimizar procesos y generar un beneficio al cliente y a la dependencia</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->

    <!-- Footer -->
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
            <h4 class="text-uppercase mb-4">Acerca de System-app</h4>
            <p class="lead mb-0">¡¡System-app es tu mejor opción!!</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; System-app 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

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
              <form action="acciones.php" method="POST">

                <div class="form-group">
                <div style="width:50%;float:left;">
                    <label class="labels">Nombre del cliente</label>
                    <select name="idCuenta">
                      <option value="0">Seleccione el nombre</option>
                      <?php
                      include('conexion.php');

                      $query = "SELECT * FROM cuentas";
                      $result = mysqli_query($conexion, $query);
                      while ($row = $result->fetch_assoc())
                      {
                        echo "<option value='".$row['idCuenta']."'>".$row['nombreCliente']."</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="col-xs-6" style="width:50%;float:left;">
                    <label>Fecha de pago</label>
                    <input class="form-control" id="fechaP" name="fechaP" type="date" placeholder="Fecha de pago" required="required" data-validation-required-message="Ingrese una fecha." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div style="width:50%;float:left;">
                    <label>Total a pagar</label>
                    <input class="form-control" id="pago" name="pago" type="number" placeholder="Ingrese solo números" required="required" data-validation-required-message="Ingrese un pago."style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br/><br/><br/><br/><br/><br/>
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
                  <div class="" style="width:50%;float:left;">
                    <label>Nombre del cliente</label>
                    <input class="form-control" id="nombreP" name="nombreP" type="text" placeholder="Nombre completo" required="required" data-validation-required-message="Ingrese un nombre." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
                  </div>

                  <!--<div style="width:50%;float:left;">
                    <label class="labels">Nombre de la Calle</label>
                    <!<br/>
                    <input class="form-control" id="nombreCalle" name="nombreCalle" type="text" placeholder="Ingrese solo letras" required="required" data-validation-required-message="Ingrese un nombre." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>-->
                  <div class="" style="width:50%;float:left;">
                    <label>Nombre del cliente</label>
                    <input class="form-control" id="nombreP" name="nombreP" type="text" placeholder="Nombre completo" required="required" data-validation-required-message="Ingrese un nombre." style="width:300px;height:25px">
                    <p class="help-block text-danger"></p>
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
                      <br>
                  </div>
                </div>
                <br/><br/><br/><br/><br/><br/>
                <p class="mb-5"></p>
                <div>
                  <button class="btn btn-primary btn-lg" type="submit" name="botonCuentas">Modificar</button>
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