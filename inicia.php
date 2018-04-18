<!DOCTYPE html>
<html>
<head>
<title>SYSTEM-APP</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="css/freelancer.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/logo.png" />
</head>

<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger">System-app</a>
		</div>
	</nav>

	<header class="container main-section" style="height:555px">
		<div class="row">
			<div class="col-md-12 text-center user-login-header">
				<h1>Iniciar Sesion</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-2 login-image-main text-center">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 user-image-section">
						<img src="img/profile.png">
					</div>
					<form action="acciones.php" method="POST">
						<div class="col-md-12 col-sm-12 col-xs-12 user-login-box">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Correo electrónico" name="user">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Contraseña" name="pass">
							</div>
							<button type="submit" name="botonLogin" class="btn btn-primary btn-block" >Iniciar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</header>
</body>
</html>
