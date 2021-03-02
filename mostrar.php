<style>
body{
  background:none;

}
.tabla_registros{
	width: 50%;
	height: 20%;
}
</style>

<?php

include('consultar.php');
function mostrar_por_nombre(){
  $host = '127.0.0.1';
  $user = 'root';
  $password = '';

  // Conectando, seleccionando la base de datos
  $conexion = mysqli_connect( $host, $user, $password)  or die('No se pudo conectar: ' . mysql_error());

  mysqli_select_db($conexion,'documentacion_chimalhuacan') or die('No se pudo seleccionar la base de datos');


$tipo=$_POST['tipo'];
  // Realizar una consulta MySQL
  $query = "SELECT  nombre_completo, numero_empleado FROM registro WHERE nombre_completo='$tipo'";

  $result = mysqli_query($conexion,$query) or die('Consulta fallida: ' . mysql_error());

  ?>
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
  <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/menu.css">

  <body>


 <center> <form action="modificarRegistro.php" method="POST" class="tabla_registros" >
  <table class="table" border=1>

  		<thead class="thead-dark">
  		<tr>
  			<th>#</th>
  			<th>NOMBRE</th>
  			<th>NUMERO DE EMPLEADO</th>

  		</tr>

  		</thead>

  <?php

$contador=1;
  while ($fila = mysqli_fetch_array($result)){ ?>

    	<tr> <td><?php echo $contador ?></td>

      <td> <?php echo $fila["nombre_completo"] ;?> </td>

      <td> <?php echo $fila["numero_empleado"] ;?> </td>
    </tr>

<?php  $contador=$contador+1;

} }?>
  </table>
</form> </center>
<script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>


<?php


function mostrar_por_numero_empleado(){
  $host="127.0.0.1";
  $user="root";
  $password="";
  $db="documentacion_chimalhuacan";
  ////////////////////////////7777
  $numberEmpleado=$_POST['tipo'];
  ////////////////////////////////


  $conex  = mysqli_connect($host,$user,$password);
   mysqli_select_db($conex,$db);

   $sqlnumberEmployer ="SELECT numero_empleado FROM registro WHERE numero_empleado='$numberEmpleado'";
   $results = mysqli_query($conex,$sqlnumberEmployer);

while ($fila = mysqli_fetch_array($results)) {

 header("Location:perfil.php?numero_empleado=".$fila['numero_empleado']);

}
}
?>


<?php


function mostrar_por_area_de_trabajo(){
  $host = '127.0.0.1';
  $user = 'root';
  $password = '';

  // Conectando, seleccionando la base de datos
  $conexion = mysqli_connect( $host, $user, $password)  or die('No se pudo conectar: ' . mysql_error());

  mysqli_select_db($conexion,'documentacion_chimalhuacan') or die('No se pudo seleccionar la base de datos');

$tipo=$_POST['tipo'];
  // Realizar una consulta MySQL
  $query = "SELECT  nombre_completo, numero_empleado, departamento_laboral FROM registro WHERE departamento_laboral='$tipo'";

  $result = mysqli_query($conexion,$query) or die('Consulta fallida: ' . mysql_error());

  ?>
  <html>
  <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/menu.css">

  <body>



      </nav>


 <center> <form class="tabla_registros" >
  <table class="table" border=1>

  		<thead class="thead-dark">
  		<tr>
  			<th>#</th>
  			<th>NOMBRE</th>
  			<th>NUMERO DE EMPLEADO</th>


  		</tr>

  		</thead>

  <?php

$contador=1;
  while ($fila = mysqli_fetch_array($result)){ ?>

    	<tr> <td><?php echo $contador ?></td>

      <td> <?php echo $fila["nombre_completo"] ;?> </td>

      <td> <?php echo $fila["numero_empleado"] ;?> </td>

    </tr>

<?php  $contador=$contador+1;

} } ?>
  </table>
</form> </center>
<script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>


<?php


function mostrar_por_tipo_de_trabajo(){
  $host = '127.0.0.1';
  $user = 'root';
  $password = '';

  // Conectando, seleccionando la base de datos
  $conexion = mysqli_connect( $host, $user, $password)  or die('No se pudo conectar: ' . mysql_error());

  mysqli_select_db($conexion,'documentacion_chimalhuacan') or die('No se pudo seleccionar la base de datos');


$tipo=$_POST['tipo'];
  // Realizar una consulta MySQL
  $query = "SELECT  nombre_completo, numero_empleado, departamento_laboral, tipo_trabajo FROM registro WHERE tipo_trabajo='$tipo'ORDER BY nombre_completo";

  $result = mysqli_query($conexion,$query) or die('Consulta fallida: ' . mysql_error());

  ?>
  <html>
  <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/menu.css">


  <body>


 <center> <form class="tabla_registros" >
  <table class="table" border=1>

  		<thead class="thead-dark">
  		<tr>
  			<th>#</th>
  			<th>NOMBRE</th>
  			<th>NUMERO DE EMPLEADO</th>

        <th>TIPO DE TRABAJO</th>

  		</tr>

  		</thead>

  <?php

$contador=1;
  while ($fila = mysqli_fetch_array($result)){ ?>

    	<tr >

        <td ><?php echo $contador ?></td>

      <td> <?php echo $fila["nombre_completo"] ;?> </td>

      <td> <?php echo $fila["numero_empleado"] ;?> </td>

          <td> <?php echo $fila["tipo_trabajo"] ;?> </td>

    </tr>

<?php  $contador=$contador+1;

} } ?>
  </table>
</form> </center>
<script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>


<?php


function mostrar_por_sindicalizacion(){
  $host = '127.0.0.1';
  $user = 'root';
  $password = '';

  // Conectando, seleccionando la base de datos
  $conexion = mysqli_connect( $host, $user, $password)  or die('No se pudo conectar: ' . mysql_error());

  mysqli_select_db($conexion,'documentacion_chimalhuacan') or die('No se pudo seleccionar la base de datos');


$tipo=$_POST['tipo'];
  // Realizar una consulta MySQL
  $query = "SELECT  nombre_completo, numero_empleado, departamento_laboral,tipo_trabajo, sindicalizado FROM registro WHERE sindicalizado='$tipo'";

  $result = mysqli_query($conexion,$query) or die('Consulta fallida: ' . mysql_error());

  ?>
  <html>
  <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/menu.css">

  <body>

 <center> <form class="tabla_registros" >
  <table class="table" border=1>

  		<thead class="thead-dark">
  		<tr>
  			<th>#</th>
  			<th>NOMBRE</th>
  			<th>NUMERO DE EMPLEADO</th>
        <th>DEPARTAMENTO</th>
        <th>TIPO DE TRABAJO</th>
        <th>Sindicalizado</th>

  		</tr>

  		</thead>

  <?php

$contador=1;
  while ($fila = mysqli_fetch_array($result)){ ?>

    	<tr> <td><?php echo $contador ?></td>

      <td> <?php echo $fila["nombre_completo"] ;?> </td>

      <td> <?php echo $fila["numero_empleado"] ;?> </td>
        <td> <?php echo $fila["departamento_laboral"] ;?> </td>
          <td> <?php echo $fila["tipo_trabajo"] ;?> </td>
          <td> <?php echo $fila["sindicalizado"] ;?> </td>
    </tr>

<?php  $contador=$contador+1;

} } ?>
  </table>
</form> </center>
<script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>


<?php


function mostrar_por_edad(){
  $host = '127.0.0.1';
  $user = 'root';
  $password = '';

  // Conectando, seleccionando la base de datos
  $conexion = mysqli_connect( $host, $user, $password)  or die('No se pudo conectar: ' . mysql_error());

  mysqli_select_db($conexion,'documentacion_chimalhuacan') or die('No se pudo seleccionar la base de datos');


$tipo=$_POST['tipo'];
  // Realizar una consulta MySQL
  $query = "SELECT  nombre_completo,numero_empleado, edad FROM registro WHERE edad='$tipo'";

  $result = mysqli_query($conexion,$query) or die('Consulta fallida: ' . mysql_error());

  ?>
  <html>
  <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/menu.css">

  <body>


 <center> <form class="tabla_registros" >
  <table class="table" border=1>

  		<thead class="thead-dark">
  		<tr>
  			<th>#</th>
  			<th>NOMBRE</th>
        <th>NUMERO DE EMPLEADO</th>
  			<th>EDAD</th>


  		</tr>

  		</thead>

  <?php

$contador=1;
  while ($fila = mysqli_fetch_array($result)){ ?>

    	<tr> <td><?php echo $contador ?></td>

      <td> <?php echo $fila["nombre_completo"] ;?> </td>

        <td> <?php echo $fila["numero_empleado"] ;?> </td>

      <td> <?php echo $fila["edad"] ;?> </td>

    </tr>

<?php  $contador=$contador+1;

} } ?>
  </table>
</form> </center>
<script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
function mostrar_por_sexo(){
  $host = '127.0.0.1';
  $user = 'root';
  $password = '';

  // Conectando, seleccionando la base de datos
  $conexion = mysqli_connect( $host, $user, $password)  or die('No se pudo conectar: ' . mysql_error());

  mysqli_select_db($conexion,'documentacion_chimalhuacan') or die('No se pudo seleccionar la base de datos');


$tipo=$_POST['tipo'];
  // Realizar una consulta MySQL
  $query = "SELECT  nombre_completo, numero_empleado, sexo FROM registro WHERE sexo='$tipo'ORDER BY nombre_completo";

  $result = mysqli_query($conexion,$query) or die('Consulta fallida: ' . mysql_error());

  ?>

  <html>
  <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/menu.css">

  <body>


 <center> <form class="tabla_registros" >
  <table class="table" border=1>

  		<thead class="thead-dark">
  		<tr>
  			<th>#</th>
  			<th>NOMBRE</th>
        	<th>NUMERO DE EMPLEADO</th>
  			<th>SEXO</th>


  		</tr>

  		</thead>

  <?php

$contador=1;
  while ($fila = mysqli_fetch_array($result)){ ?>

    	<tr> <td><?php echo $contador ?></td>

      <td> <?php echo $fila["nombre_completo"] ;?> </td>

        <td> <?php echo $fila["numero_empleado"] ;?> </td>


      <td> <?php echo $fila["sexo"] ;?> </td>

    </tr>

<?php  $contador=$contador+1;

} }?>
  </table>
</form> </center>
<script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
function mostrar_por_estaus(){
  $host = '127.0.0.1';
  $user = 'root';
  $password = '';

  // Conectando, seleccionando la base de datos
  $conexion = mysqli_connect( $host, $user, $password)  or die('No se pudo conectar: ' . mysql_error());

  mysqli_select_db($conexion,'documentacion_chimalhuacan') or die('No se pudo seleccionar la base de datos');


$tipo=$_POST['tipo'];
  // Realizar una consulta MySQL
  $query = "SELECT  nombre_completo,numero_empleado, estatus FROM registro WHERE estatus='$tipo'";

  $result = mysqli_query($conexion,$query) or die('Consulta fallida: ' . mysql_error());

  ?>
  <html>
  <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/menu.css">

  <body>


 <center> <form class="tabla_registros" >
  <table class="table" border=1>

  		<thead class="thead-dark">
  		<tr>
  			<th>#</th>
  			<th>NOMBRE</th>
        <th>NUMERO DE EMPLEADO</th>
  			<th>ACTIVO</th>


  		</tr>

  		</thead>

  <?php

$contador=1;
  while ($fila = mysqli_fetch_array($result)){ ?>

    	<tr> <td><?php echo $contador ?></td>

      <td> <?php echo $fila["nombre_completo"] ;?> </td>
        <td> <?php echo $fila["numero_empleado"] ;?> </td>

      <td> <?php echo $fila["estatus"] ;?> </td>

    </tr>

<?php  $contador=$contador+1;

} } ?>
  </table>
</form> </center>
<script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
if($_POST['opcion']==1){
  mostrar_por_nombre();
}else if($_POST['opcion']==2){
    mostrar_por_numero_empleado();
  }else if($_POST['opcion']==3){
      mostrar_por_area_de_trabajo();
    }else if($_POST['opcion']==4){
        mostrar_por_tipo_de_trabajo();
      }else if($_POST['opcion']==5){
          mostrar_por_sindicalizacion();
          }
          else if($_POST['opcion']==6){
            mostrar_por_edad();
            }
            else if($_POST['opcion']==7){
              mostrar_por_sexo();
              }
              else if($_POST['opcion']==8){
                mostrar_por_estaus();
                }else{
                  echo "No ha elegido una opcion o los datos o
                  no son correto o no se encuentra ninguno en la base de datos";
                }
?>
