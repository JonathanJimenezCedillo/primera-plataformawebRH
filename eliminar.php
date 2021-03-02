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
	  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="css/menu.css">
<title>Eliminar Registros</title>
</head>
<body background= "imagenes/simbolo.jpg" align="middle" >
    <nav class="navbar navbar-light bg-light">
<img src="imagenes/avatar.png" width="45" height="40" class="d-inline-block align-top">

  <a class="nav-link"  href="consultar.php" align="left">Consultar</a>



          <a class="nav-link" href="menu.php">Inicio</a>

    </nav>

<center>    <h1>Eliminar Registro</h1>     </center>

<br>

<form class="" action="eliminarC.php" method="post">
<div  class="input-group">
  <input  type="text" id="TEXTO" class="cajadetexto" placeholder="Ingrese el Numero de Empleado" aria-label="Text input with segmented dropdown button" required name="numberEmpli">
	<div class="input-group-append">
    <button type="submit" name="elegir" class="btn btn-outline-info" value="Eliminar">Aceptar</button>

    </div>
  </div>
	</form>
    <script src="js/jquery-3.3.1.min.js"></script>
  		<script src="js/bootstrap.bundle.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>
  </body>
</html>
