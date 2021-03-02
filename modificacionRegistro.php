
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
<?php


$host = 'localhost';
$user = 'root';
$password = '';
$db = 'documentacion_chimalhuacan';
$conexion = mysqli_connect( $host, $user, $password,$db);

////////////////////////////////////////
$newname     = $_POST ['nombre'];
$newedad     = $_POST ['edad'];
$newsex      = $_POST ['sexo'];
$newECivil   = $_POST ['estadoCivil'];
$newRFC      = $_POST ['rfc'];
$newcorreo   = $_POST ['correo'];
$newtdc      = $_POST ['telefonoCasa'];
$newtc       = $_POST ['telefonoCelular'];
$newlunaci   = $_POST ['lugarNacimiento'];
$newfenaci   = $_POST ['fechaNacimiento'];
$newnacion   = $_POST ['nacionalidad'];
$newaddres   = $_POST ['calle'];
$newcln      = $_POST ['colonia'];
$newmnp      = $_POST ['municipio'];
$newedo      = $_POST ['estado'];
$newcurp     = $_POST ['curp'];
$newCElec    = $_POST ['claveElectoral'];
$newCPostal  = $_POST ['codigoPostal'];
$newGEstud   = $_POST ['estudios'];
$newEstudy   = $_POST ['descES'];
$newNEmple   = $_POST ['numeroEmpleado'];
$newTTraba   = $_POST ['tipoTrabajo'];
$newcargo    = $_POST ['cargo'];
$newFIngreso = $_POST ['fechaIngreso'];
$newFBaja    = $_POST ['fechaBaja'];
$newDireLbor = $_POST ['direccionLaboral'];
$newALabor   = $_POST ['departamentolaboral'];
$newFPago    = $_POST ['pago'];
$newsaldo    = $_POST ['salarioBase'];
$newsaldoB   = $_POST ['salarioBruto'];
$newNSSocial = $_POST ['numeroSeguro'];
$newSindcdo  = $_POST ['sindicalizado'];
$newSindicato= $_POST ['sindicato'];
$newFISincato= $_POST ['fechaIngresoSindicato'];
$newQAutoriza= $_POST ['autoriza'];
$newOSin     = $_POST ['observaSin'];
$newRespoble = $_POST ['responsable'];
$newFGafete  = $_POST ['folioGafete'];

$newEstatus  = $_POST ['estatus'];
$newMotiveB  = $_POST ['MotivoBaja'];







$updateRegistro = "UPDATE registro SET nombre_completo='$newname',edad='$newedad',sexo='$newsex',estado_civil='$newECivil',rfc='$newRFC',
email='$newcorreo',telefono_de_casa='$newtdc',telefono_celular='$newtc',lugar_naciemiento='$newlunaci',fecha_nacimiento='$newfenaci',nacionalidad='$newnacion',
calle='$newaddres',colonia='$newcln',municipio='$newmnp',estado='$newedo',clave_curp='$newcurp',clave_electoral='$newCElec',codigo_postal='$newCPostal',grado_estudios='$newGEstud',
descEstudi='$newEstudy',tipo_trabajo='$newTTraba',cargo='$newcargo',fecha_de_ingreso='$newFIngreso',fechaBaja='$newFBaja',direccion_laboral='$newDireLbor',departamento_laboral='$newALabor',forma_pago='$newFPago',
salario='$newsaldo',salarioBruto='$newsaldoB',N_seguro_social='$newNSSocial',
Sindicalizado='$newSindcdo',sindicato='$newSindicato',F_ingreso_sindicato='$newFISincato',quien_autorizo='$newQAutoriza',observa_Sin='$newOSin',responsable='$newRespoble',
folio_de_gafete='$newFGafete',estatus='$newEstatus',motivoBaja='$newMotiveB'

WHERE numero_empleado='$newNEmple'";

$rActualiza = mysqli_query($conexion,$updateRegistro);



$sql ="SELECT * FROM registro WHERE numero_empleado='$newNEmple'";
$result = mysqli_query($conexion,$sql);
///////////////////////////////

////////////////////////////////////
while ($fila = mysqli_fetch_array($result)) {
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
  $Cargo    = $fila ['cargo'];
  $FIngreso = $fila ['fecha_de_ingreso'];
	$FBaja    = $fila ['fechaBaja'];
  $DirecLbor= $fila ['direccion_laboral'];
  $ALabor   = $fila ['departamento_laboral'];
  $FPago    = $fila ['forma_pago'];
  $saldo    = $fila ['salario'];
  $salarioB = $fila ['salarioBruto'];
  $NSSocial = $fila ['N_seguro_social'];
  $Sindcdo  = $fila ['sindicalizado'];
  $Sindicato= $fila ['sindicato'];
  $FISincato= $fila ['F_ingreso_sindicato'];
  $QAutoriza= $fila ['quien_autorizo'];
  $OSin     = $fila ['observa_Sin'];
  $Respoble = $fila ['responsable'];
  $FGafete  = $fila ['folio_de_gafete'];
  $Estatus  = $fila ['estatus'];
	$MotiveB  = $fila ['motivoBaja'];
 }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
    <link rel="stylesheet" href="css/registro.css">
   <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap-grid.css">
   <link rel="stylesheet" href="css/bootstrap-reboot.min.css">


    <title>Modificar Registro de Empleados</title>
    <link rel="stylesheet" type="text/css" href="css/tcal.css" />
   <script type="text/javascript" src="js/tcal.js"></script>
  </head>
  <body  >

    <nav class="navbar navbar-light bg-light">
<img src="imagenes/avatar.png" width="45" height="40" class="d-inline-block align-top">
  <a class="nav-link"  href="consultar.php" align="left">Consultar</a>
          <a class="nav-link" href="menu.php">Inicio</a>
    </nav>

<center>    <h1>Registro de Empleados</h1>     </center>
<center> <form class="formulario" action="modificacionRegistro.php" method="POST">
	<center><h2>Datos personales</h2></center>

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
	 <select id="inputState" name="sexo" class="form-control">
		 <option><?php echo "$sex" ?></option>
		 <option value="MASCULINO">MASCULINO</option>
		 <option value="FEMENINO">FEMENINO</option>

	 </select>
 </div>
 <div class="form-group col-md-3">
	 <label for="inputState">Estado civil</label>
	 <select id="inputState" name="estadoCivil" class="form-control">
		 <option><?php echo "$ECivil"; ?></option>
		 <option value="SOlTERO/A">SOlTERO/A</option>
		 <option value="CASADO/A">CASADO/A</option>
		 <option value="VIUDO/A">VIUDO/A</option>
		 <option value="DIVORSIADO/A">DIVORSIADO/A</option>
	 </select>
 </div>
</div>



<div class="form-row">
 <div class="form-group col-md-4">
	 <label for="inputCity">RFC</label>
	 <input onKeyUp="this.value=this.value.toUpperCase();" type="text" name="rfc" class="form-control" id="inputCity" value="<?php echo "$RFC" ?>" >
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
	 <div><input type="text" name="fechaNacimiento" class="tcal tcalInput form-control" id="inputCity" width="250" value="<?php echo "$fenaci" ?>"  /></div>
	 <!--<input type="text" name="fechaNacimiento"   class="tcal" value=""  placeholder=" 0000/00/00"  >-->
 </div>
 <div class="form-group col-md-4">
	 <label for="inputZip">Email</label>
	 <input type="email" name="correo" class="form-control" id="inputZip" value="<?php echo "$correo" ?>" >
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
	 <select id="inputState" name="estudios" class="form-control">
		 <option><?php echo "$GEstud" ?></option>
		 <option value="SIN ESTUDIOS">SIN ESTUDIOS</option>
		<option value="ALFABETIZADO">ALFABETIZADO</option>
	 <option value="PRIMARIA">PRIMARIA</option>
	 <option value="SECUNDARIA">SECUNDARIA</option>
	 <option value="BACHILLERATO/PREPARATORIA">BACHILLERATO/PREPARATORIA</option>
		<option value="CARRERA TECNICA">CARRERA TECNICA</option>
	 <option value="LICENCIATURA/INGENIERIA">LICENCIATURA/INGENIERIA</option>
	 <option value="MAESTRIA">MAESTRIA</option>
	 <option value="DOCTORADO">DOCTORADO</option>
		<option value="OTROS">OTROS</option>
	 </select>
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
			 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="calle" class="form-control" id="inputCity" value="<?php echo "$addres" ?>">
		 </div>

		 <div class="form-group col-md-4">
			 <label for="inputZip">Colonia</label>
			 <input onKeyUp="this.value=this.value.toUpperCase();"id="colonia_chimal"type="text" name="colonia" class="form-control" id="inputZip" value="<?php echo "$cln" ?>" >
		 </div>
		 <div class="form-group col-md-4">
			 <label for="inputZip">Municipio/Alcaldia</label>
			 <input onKeyUp="this.value=this.value.toUpperCase();"id="municipio_chimal"type="text" name="municipio" class="form-control" id="inputZip" value="<?php echo "$mnp" ?>">
		 </div>

		 <div class="form-group col-md-3">
			 <label for="inputZip">Estado</label>
			 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="estado" class="form-control" id="inputZip" value="<?php echo "$edo" ?>">
		 </div>
		 <div class="form-group col-md-3">
			 <label for="inputZip">Codigo Postal</label>
			 <input type="text" name="codigoPostal" class="form-control" id="inputZip" value="<?php echo "$CPostal" ?>" >
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
 <select id="inputState" name="tipoTrabajo" class="form-control">
	 <option><?php echo "$TTraba" ?></option>
	 <option value="GENARAL">GENARAL</option>
	 <option value="CONFIANZA">CONFIANZA</option>
	 <option value="POLICIAS">POLICIAS</option>
	 <option value="SINDICATO">SINDICATO</option>
	 <option value="LISTA DE RAYA">LISTA DE RAYA</option>
 </select>
</div>

<div class="form-group col-md-4">
 <label for="inputZip">Cargo</label>
 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="cargo" class="form-control" id="inputZip" value="<?php echo "$Cargo"?>" >
</div>
 <div class="form-group col-md-4">
	 <label for="inputCity">Direccion Laboral </label>
	 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="direccionLaboral" class="form-control" id="inputCity" value="<?php echo "$DirecLbor" ?>" >
 </div>
 <div class="form-group col-md-4">
	<label for="inputCity">Departamento Laboral </label>
	<input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="departamentolaboral" class="form-control" id="inputCity" value="<?php echo "$ALabor"?>" >
</div>
 <div class="form-group col-md-4">
	<label for="inputState">Forma de Pago</label>
	<input type="text" name="pago" class="form-control" id="inputZip" value="<?php echo "$FPago" ?>" >
</div>
<div class="form-group col-md-4">
	<label for="inputZip">Salario Base</label>
	<input type="text" name="salarioBase" class="form-control" id="inputZip" value="<?php echo "$saldo" ?>" >
</div>
<div class="form-group col-md-4">
	<label for="inputZip">Salario Bruto</label>
	<input type="text" name="salarioBruto" class="form-control" id="inputZip" value="<?php echo "$salarioB" ?>" >
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
 <select id="inputState" name="estatus" class="form-control">
	 <option><?php echo "$Estatus"; ?></option>
	 <option value="ACTIVO">ACTIVO</option>
	 <option value="NO ACTIVO">NO ACTIVO</option>
	 <option value="LICENCIA">LICENCIA</option>
	 <option value="COMICIONADO">COMICIONADO</option>
	 <option value="BAJA">BAJA</option>
 </select>
</div>
<div class="form-group col-md-2">
 <label for="inputState">Sindicalizado</label>
 <select id="inputState" name="sindicalizado" class="form-control">
	 <option><?php echo "$Sindcdo"; ?></option>
	 <option value="SI">SI</option>
	 <option value="NO">NO</option>
 </select>
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
<select id="inputState" name="responsable" class="form-control">
	<option value="SI">SI</option>
	<option value="NO">NO</option>
</select>
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
<textarea onKeyUp="this.value=this.value.toUpperCase();"class="form-control" name="MotivoBaja" id="exampleFormControlTextarea1" rows="5" ><?php echo "$MotiveB" ?></textarea>
</div>
</div>

  <button type="submit" class="btn btn-primary btn-lg btn-block">Modificar Datos</button>
</div>

<br>
<div>
</div>
    <script src="js/jquery-3.3.1.min.js"></script>
  		<script src="js/bootstrap.bundle.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>

  </body>
</html>
