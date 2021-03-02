

<?php

	include("conexion.php");
	$nombre= gethostname();
	$consulta="SELECT activo from login where pcnom='$nombre'";
	//$ejecutado=$mysqli->query($consulta);
	$ejecutado = mysqli_query($conex,$consulta);
	//$adentro = $ejecutado->fetch_row();
	$adentro =mysqli_fetch_array($ejecutado);
	$activo=$adentro[0];
	if($activo==0){header("Location: index.php");}
	?>


<html>
<head>
	  <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
				<link rel="stylesheet" href="css/menu.css">
	  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.min.css">


</head>

<title>Menu</title>

<body background= "imagenes/simbolo.jpg" align="middle">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="imagenes/avatar.png" width="45" height="40" class="d-inline-block align-top">
<div class="collapse navbar-collapse" id="navbarNavDropdown">
	<ul class="navbar-nav">
			<a class="nav-link" href="registro.php">Registro <span class="sr-only">(current)</span></a>
				<a class="nav-link" href="eliminar.php">Eliminar</a>

			<a class="nav-link" href="modificar.php">Modificar</a>

			<a class="nav-link" href="consultar.php">Consultar</a>

		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Opciones
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="/documentacion_chimal/contra.php">Modificar contraseña</a>
				<a class="dropdown-item" href="/documentacion_chimal/operacion_salir.php">Salir</a>
			</div>

		</li>

	</span>
	</ul>
</div>
</nav>

	<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>
