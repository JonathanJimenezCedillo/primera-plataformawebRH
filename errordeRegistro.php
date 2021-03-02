
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
<html>
  <head>

    <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <title>Error de Registro</title>
  </head>

  <nav class="navbar navbar-light bg-light">
<img src="imagenes/avatar.png" width="45" height="40" class="d-inline-block align-top">
<a class="nav-link"  href="consultar.php" align="left">Consultar</a>
        <a class="nav-link" href="menu.php">Inicio</a>
  </nav>
  <br><br><br>
  <nav>
    <center><?php echo "El registro no existe, Verifique el numero de empleado";?></center>
    <br>
    <center><a href="http://localhost/documentacion_chimal/modificar.php"> Regresar </a></center>

  </nav>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <body background= "imagenes/simbolo.jpg" align="middle">

  </body >
</html>
