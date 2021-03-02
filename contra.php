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
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
          <link rel="stylesheet" href="css/main.css">
  	  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
  		<link rel="stylesheet" href="css/bootstrap.min.css">
  		<link rel="stylesheet" href="css/bootstrap-grid.css">
  		<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
      <title>Cambiar Contraseña</title>
    </head>
    <body>
      <nav class="navbar navbar-light bg-light">
  <img src="imagenes/avatar.png" width="45" height="40" class="d-inline-block align-top" alt="">
  </a>
        <a class="nav-link" href="menu.php">Regresar</a>

      </nav>
      <div class="loginbox">
        <img src="imagenes/avatar.png" class="avatarbox">
        <h1>Cambiar Contraseña</h1>
        <form method="POST" action="conexionC.php" >
          <br>

          <p>Contraseña Actual</p>
          <input type="password" name="antiguo-Password" value="" placeholder="Inserte la Contraseña Actual" required>
          <p>Contraseña Nueva</p>
          <input type="password" name="contraseña" value="" placeholder="Inserte la Nueva Contraseña del Usuario" required>


          <input type="submit" name="submit" value="Confirmar" href="/documentacion_chimal">

        </form>

      </div>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/main.js"></script>
    </body>
  </html>
