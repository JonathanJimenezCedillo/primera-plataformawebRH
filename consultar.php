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
 <title>Consultar Registros</title>

	 <nav  class="navbar navbar-light bg-light">
	<img src="imagenes/avatar.png" width="45" height="40" class="d-inline-block align-top" >

				<a class="nav-link" href="menu.php">Inicio</a>

	 </nav>
 </head>

 <body>

 <form action="mostrar.php" method="POST">

 <center>    <h1>Consultar</h1>     </center>


 <div  class="input-group">


	   <input  type="text" name="tipo" id="TEXTO" class="cajadetexto" placeholder="  Ingrese los datos de busqueda" aria-label="Text input with segmented dropdown button" required>

 	 <button type="submit" name="elegir" class="btn btn-outline-info" onclick="acciones.php">consultar</button>
<br>



 </div>
 <br>
<center>  <div class="">
 	<select  class="btn btn-outline-success" name="opcion">
 	<option selected>Seleccionar el tipo de busqueda</option>
 	<option value=1>Nombre de Empleado</option>
 	<option value=2>Numero de Empleado</option>
 	<option value=3>Departamento</option>
 	<option value=4>Tipo de Trabajo</option>
 	<option value=5>Sindicalizado</option>
 	<option value=6>Edad</option>
 	<option value=7>Sexo</option>
 	<option value=8>Activos o no Activos</option>
 	</select>
 </div>
</center>

  <script src="js/jquery-3.3.1.min.js"></script>
 	 <script src="js/bootstrap.bundle.min.js"></script>
 	 <script src="js/bootstrap.min.js"></script>
 </body>
 </form>




</body>
</html>
