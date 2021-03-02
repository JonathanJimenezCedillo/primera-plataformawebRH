<?php
$numberEmployer=$_GET['numero_empleado'];


$host = 'localhost';
$user = 'root';
$password = '';
$db = 'documentacion_chimalhuacan';


$conexion = mysqli_connect( $host, $user, $password,$db);

$sql="select * from registro where numero_empleado='$numberEmployer'";
$result=mysqli_query($conexion,$sql);

while ($fila=mysqli_fetch_array($result)) {
  $name     = $fila ['nombre_completo'];
  $ed       = $fila ['edad'];
  $sex      = $fila ['sexo'];
  $ECivil   = $fila ['estado_civil'];
  $RFC      = $fila ['rfc'];
  $correo   = $fila ['email'];
  $tdc      = $fila ['telefono_de_casa'];
  $tc       = $fila ['telefono_celular'];
  $lunaci   = $fila ['lugar_naciemiento'];
  $fenaci   = $fila ['fecha_nacimiento'];
  $nacion   = $fila ['nacionalidad'];
  $addres   = $fila ['calle'];
  $cln      = $fila ['colonia'];
  $mnp      = $fila ['municipio'];
  $edo      = $fila ['estado'];
  $curp     = $fila ['clave_curp'];
  $CElec    = $fila ['clave_electoral'];
  $CPostal  = $fila ['codigo_postal'];
  $GEstud   = $fila ['grado_estudios'];
  $DscEstdy = $fila ['descEstudi'];
  $NEmple   = $fila ['numero_empleado'];
  $TTraba   = $fila ['tipo_trabajo'];

  $CARGO    = $fila ['cargo'];
  $FIngreso = $fila ['fecha_de_ingreso'];
  $FBaja    = $fila ['fechaBaja'];
  $DirecLbor= $fila ['direccion_laboral'];
  $ALabor   = $fila ['departamento_laboral'];
  $FPago    = $fila ['forma_pago'];
  $saldo    = $fila ['salario'];
  $saldoB   = $fila ['salarioBruto'];
  $NSSocial = $fila ['N_seguro_social'];
  $Sindcdo  = $fila ['sindicalizado'];
  $Sindicato= $fila ['sindicato'];
  $FISincato= $fila ['F_ingreso_sindicato'];
  $QAutoriza= $fila ['quien_autorizo'];
  $OSin     = $fila ['observa_Sin'];
  $Respoble = $fila ['responsable'];
  $FGafete  = $fila ['folio_de_gafete'];

  $motivBaj = $fila ['motivoBaja'];
  $Estatus  = $fila ['estatus'];
  $Perfil   = $fila ['perfil_ima_PDF'];
  }


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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">

	  <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/registro.css">
    <meta charset="utf-8">
    <title>Perfil del Empleado</title>
  </head>
  <body>


        <nav class="navbar navbar-light bg-light">
    <img src="imagenes/avatar.png" width="45" height="40" class="d-inline-block align-top">

              <a class="nav-link" href="menu.php">Inicio</a>

        </nav>
<br>
    <center>    <h2>Perfil del Empleado</h2>     </center>


<center> <form class="formulario" action="" method="POST" enctype="">
  <div class="">
 <br>
 <center> <img align="center" src="/documentacion_chimal/archivos/Perfil/<?php echo"$numberEmployer/$Perfil" ?>" width="350" height="200"></img> </center>

    </div>
<br>
    <div class="card" name>

      <h5 class="card-header">Datos personales</h5>
      <div class="card-body">
        <div class="form-row">
       <div class="form-group col-md-5">
      	 <label for="inputCity">Nombre completo</label>
      		<input onKeyUp="this.value=this.value.toUpperCase();" type="text" name="nombre" class="form-control" id="inputCity" value="<?php echo "$name" ?>">
       </div>
       <div class="form-group col-md-2">
      	 <label for="inputZip">Edad</label>
      	 <input  type="text" name="edad" class="form-control" id="inputZip" value="<?php echo "$ed" ?>">
       </div>
       <div class="form-group col-md-2">
      	 <label for="inputState">Sexo</label>
      	<input type="text" name="sexo" class="form-control" id="inputZip" value="<?php echo"$sex"?>">
       </div>
       <div class="form-group col-md-3">
      	 <label for="inputState">Estado civil</label>
         <input type="text" name="estadoCivil" class="form-control" id="inputZip" value="<?php echo"$ECivil"?>">
       </div>
      </div>



      <div class="form-row">
       <div class="form-group col-md-4">
      	 <label for="inputCity">RFC</label>
      	 <input onKeyUp="this.value=this.value.toUpperCase();" type="text" name="rfc" class="form-control" id="inputCity" value="<?php echo"$RFC" ?>">
       </div>

       <div class="form-group col-md-4">
      	 <label for="inputCity">CURP</label>
      	 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="curp" class="form-control" id="inputCity" value="<?php echo "$curp" ?>" >
       </div>
       <div class="form-group col-md-4">
      	 <label for="inputCity">Lugar de nacimiento</label>
      	 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="lugarNacimiento" class="form-control" id="inputCity" value="<?php echo "$lunaci" ?>" >
       </div>
       <div class="form-group col-md-4" >
      	 <label for="inputZip">Fecha de Nacimiento</label><br>
      	 <div><input type="text" name="fechaNacimiento" class="tcal tcalInput form-control" id="inputCity"    width="250" value="<?php echo "$fenaci" ?>"  /></div>
      	 <!--<input type="text" name="fechaNacimiento"   class="tcal" value=""  placeholder=" 0000/00/00"  >-->
       </div>
       <div class="form-group col-md-4">
      	 <label for="inputZip">Email</label>
      	 <input type="email" name="correo" class="form-control" id="inputZip" placeholder=" Ingrese Correo Electronico" value="<?php echo "$correo" ?>">
       </div>
       <div class="form-group col-md-4">
      	 <label for="inputZip">Telefono de Casa</label>
      	 <input type="text" name="telefonoCasa" class="form-control" id="inputZip" value="<?php echo "$tdc" ?>" >
       </div>
       <div class="form-group col-md-4">
      		<label for="inputZip">Telefono Celular</label>
      		<input type="text" name="telefonoCelular" class="form-control" id="inputZip" value="<?php echo "$tc" ?>">
       </div>
       <div class="form-group col-md-4">
      	 <label for="inputState">Grado de Estudios</label>
         <input type="text" name="estudios" class="form-control" id="inputZip" value="<?php echo "$GEstud" ?>">
       </div>
       <div class="form-group col-md-4">
      	 <label for="inputCity">Descripcion</label>
      	 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="descES" class="form-control" id="inputCity" value="<?php echo "$DscEstdy" ?>" >
       </div>
      </div>



      <div class="form-row">
      	 <div class="form-row">

           <div class="form-group col-md-4">
          	 <label for="inputCity">Calle</label>
          	 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="calle" class="form-control" id="inputCity" value="<?php echo "$addres" ?>" >
           </div>
      		 <div class="form-group col-md-4">
      			 <label for="inputZip">Colonia</label>
      			 <input onKeyUp="this.value=this.value.toUpperCase();"id="colonia_chimal"type="text" name="colonia" class="form-control" id="inputZip" value="<?php echo "$cln" ?>" >
      		 </div>
      		 <div class="form-group col-md-4">
      			 <label for="inputZip">Municipio/Alcaldia</label>
      			 <input onKeyUp="this.value=this.value.toUpperCase();"id="municipio_chimal"type="text" name="municipio" class="form-control" id="inputZip" value="<?php echo "$mnp" ?>" >
      		 </div>

      		 <div class="form-group col-md-3">
      			 <label for="inputZip">Estado</label>
      			 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="estado" class="form-control" id="inputZip" value="<?php echo "$edo" ?>" >
      		 </div>
      		 <div class="form-group col-md-3">
      			 <label for="inputZip">Codigo Postal</label>
      			 <input type="text" name="codigoPostal" class="form-control" id="inputZip" value="<?php echo "$CPostal" ?>">
      		 </div>
      		 <div class="form-group col-md-3">
      			 <label for="inputZip">Nacionalidad</label>
      			 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="nacionalidad" class="form-control" id="inputZip" value="<?php echo "$nacion" ?>" >
      		 </div>
      		 <div class="form-group col-md-3">
      			 <label for="inputCity">Clave Electoral</label>
      			 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="claveElectoral" class="form-control" id="inputCity" value="<?php echo "$CElec" ?>" >
      		 </div>
      		</div>
      	 </div>
      	<br>
      		<center><h3>Area Laboral</h3> </center>
      	<div class="form-row">
      		<div class="form-group col-md-4">
       <label for="inputCity">Numero de Empleado</label>
       <input type="text" name="numeroEmpleado" class="form-control" id="inputCity" value="<?php echo "$NEmple" ?>" >
      </div>
      <div class="form-group col-md-4">
       <label for="inputState">Tipo de trabajo</label>
       <input type="text" name="tipoTrabajo" class="form-control" id="inputZip" value="<?php echo "$TTraba" ?>">
      </div>

      <div class="form-group col-md-4">
       <label for="inputZip">Cargo</label>
       <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="cargo" class="form-control" id="inputZip" value="<?php echo "$CARGO" ?>" >
      </div>
       <div class="form-group col-md-4">
      	 <label for="inputCity">Direccion Laboral </label>
      	 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="direccionLaboral" class="form-control" id="inputCity" value="<?php echo "$DirecLbor" ?>" >
       </div>
       <div class="form-group col-md-4">
      	<label for="inputCity">Departamento Laboral </label>
      	<input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="departamentolaboral" class="form-control" id="inputCity" value="<?php echo "$ALabor" ?>" >
      </div>
       <div class="form-group col-md-4">
      	<label for="inputState">Forma de Pago</label>
        <input type="text" name="pago" class="form-control" id="inputCity" value="<?php echo "$FPago" ?>">
      </div>
      <div class="form-group col-md-4">
      	<label for="inputZip">Salario Base</label>
      	<input type="text" name="salarioBase" class="form-control" id="inputZip" value="<?php echo "$saldo" ?>" >
      </div>
      <div class="form-group col-md-4">
      	<label for="inputZip">Salario Bruto</label>
      	<input type="text" name="salarioBruto" class="form-control" id="inputZip" value="<?php echo "$saldoB" ?>" >
      </div>
      <div class="form-group col-md-4">
       <label for="inputZip">Fecha de ingreso</label><br>
       <input type="text" name="fechaIngreso" class="tcal tcalInput form-control" id="inputZip" value="<?php echo "$FIngreso" ?>" >
      </div>
      <div class="form-group col-md-4">
      <label for="inputZip">Fecha de baja</label><br>
      <input type="text" name="fechaBaja" class="tcal tcalInput form-control" id="inputZip" value="<?php echo "$FBaja" ?>" >
      </div>
      <div class="form-group col-md-2">
       <label for="inputState">Estatus</label>
       <input type="text" name="estatus" class="form-control" id="inputCity" value="<?php echo "$Estatus" ?>">
      </div>
      <div class="form-group col-md-2">
       <label for="inputState">Sindicalizado</label>
       <input type="text" name="sindicalizado"  class="form-control" id="inputZip" value="<?php echo "$Sindcdo" ?>">
      </div>


      <div class="form-group col-md-4">
      	<label for="inputCity">Sindicato</label>
      	<input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="sindicato" class="form-control" id="inputCity" value="<?php echo "$Sindicato" ?>" >
      </div>
      <div class="form-group col-md-5">
      	<label for="inputZip">Fecha de Ingreso al Sindicato</label><br>
      	<input type="text" name="fechaIngresoSindicato" class="tcal tcalInput form-control" class="form-control" id="inputZip" value="<?php echo "$FISincato" ?>" >
      </div>
      <div class="form-group col-md-7">
      	<label for="inputZip">Quien autorizo</label>
      	<input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="autoriza" class="form-control" id="inputZip" value="<?php echo "$QAutoriza" ?>" >
      </div>
      <div class="form-group col-md-12">
      	<label for="exampleFormControlTextarea1">Funcion</label>
      	<textarea onKeyUp="this.value=this.value.toUpperCase();"class="form-control" name="observaSin" id="exampleFormControlTextarea1" rows="5" ><?php echo "$OSin" ?></textarea>
      </div>
      <div class="form-group col-md-2">
      <label for="inputState">Responsable</label>
      <input type="text" name="responsable" class="form-control" id="inputZip" value="<?php echo "$Respoble" ?>">
      </div>

      <div class="form-group col-md-5">
      <label for="inputCity">Folio de Gafete</label>
      <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="folioGafete" class="form-control" id="inputCity" value="<?php echo "$FGafete" ?>" >
      </div>


      <div class="form-group col-md-5">
      <label for="inputZip">Numero de Seguro Social</label>
      <input type="text" name="numeroSeguro" class="form-control" id="inputZip" value="<?php echo "$NSSocial" ?>" >
      </div>
      <div class="form-group col-md-12">
      <label for="exampleFormControlTextarea1">Motivos de baja</label>
      <textarea onKeyUp="this.value=this.value.toUpperCase();"class="form-control" name="MotivoBaja" id="exampleFormControlTextarea1" rows="5" ><?php echo "$motivBaj"; ?></textarea>
      </div>
      </div>
     </div>
     </div>

</form>

</center>



        <script src="js/jquery-3.3.1.min.js"></script>
      		<script src="js/bootstrap.bundle.min.js"></script>
      		<script src="js/bootstrap.min.js"></script>
    </form>
  </body>
</html>
