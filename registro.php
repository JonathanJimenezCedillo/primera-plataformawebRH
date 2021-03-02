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
	<!DOCTYPE html public>
	<html lang="en" dir="ltr" >
	  <head>
	  <script type="text/javascript" src="js\jquery-3.3.1.min.js"></script>

	    <meta charset="utf-8" http-equiv="refresh" content="/documentacion_chimal">
	    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	    <link rel="stylesheet" type="text/css" href="css\jquery-ui.css">
	        <script type="text/javascript" src="js\jquery-ui.js"></script>


	    <link rel="stylesheet" href="css/registro.css">
	   <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
	   <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link rel="stylesheet" href="css/bootstrap-grid.css">
	   <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
		 </head>
		 <title>Registro de Empleados</title>

   <link rel="stylesheet" type="text/css" href="css/tcal.css" />
   <script type="text/javascript" src="js/tcal.js"></script>


  </head>
  <body>

   <nav class="navbar navbar-light bg-light">
    <img src="imagenes/avatar.png" width="45" height="40" class="d-inline-block align-top">
    <a class="nav-link"  href="consultar.php" align="left">Consultar</a>
    <a class="nav-link" href="menu.php">Inicio</a>
   </nav>

	 		<center>    <h1>Registro de Empleados</h1>     </center>
	 		<center> <form class="formulario" action="funciones.php" method="POST" enctype="multipart/form-data">
   		<center><h2>Datos personales</h2></center>

			<div class="form-row">
		 <div class="form-group col-md-5">
			 <label for="inputCity">Nombre completo</label>
				<input onKeyUp="this.value=this.value.toUpperCase();" type="text" name="nombre" class="form-control" id="inputCity" placeholder=" Nombre, Apellidos">
		 </div>
		 <div class="form-group col-md-2">
			 <label for="inputZip">Edad</label>
			 <input  type="text" name="edad" class="form-control" id="inputZip" placeholder=" Edad">
		 </div>
		 <div class="form-group col-md-2">
			 <label for="inputState">Sexo</label>
			 <select id="inputState" name="sexo" class="form-control">
				 <option value="MASCULINO">MASCULINO</option>
				 <option value="FEMENINO">FEMENINO</option>

			 </select>
		 </div>
		 <div class="form-group col-md-3">
			 <label for="inputState">Estado civil</label>
			 <select id="inputState" name="estadoCivil" class="form-control">
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
			 <input onKeyUp="this.value=this.value.toUpperCase();" type="text" name="rfc" class="form-control" id="inputCity" placeholder=" Ingrese RFC" >
		 </div>

		 <div class="form-group col-md-4">
			 <label for="inputCity">CURP</label>
			 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="curp" class="form-control" id="inputCity" placeholder="Clave Curp" >
		 </div>
		 <div class="form-group col-md-4">
			 <label for="inputCity">Lugar de nacimiento</label>
			 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="lugarNacimiento" class="form-control" id="inputCity" placeholder=" Ingrese Lugar de Nacimiento" >
		 </div>
		 <div class="form-group col-md-4" >
			 <label for="inputZip">Fecha de Nacimiento</label><br>
			 <div><input type="text" name="fechaNacimiento" class="tcal tcalInput form-control" id="inputCity"    width="250" placeholder=" 0000/00/00"  /></div>
			 <!--<input type="text" name="fechaNacimiento"   class="tcal" value=""  placeholder=" 0000/00/00"  >-->
		 </div>
		 <div class="form-group col-md-4">
			 <label for="inputZip">Email</label>
			 <input type="email" name="correo" class="form-control" id="inputZip" placeholder=" Ingrese Correo Electronico" >
		 </div>
		 <div class="form-group col-md-4">
			 <label for="inputZip">Telefono de Casa</label>
			 <input type="text" name="telefonoCasa" class="form-control" id="inputZip" placeholder=" Ingrese Número Telefonico" >
		 </div>
		 <div class="form-group col-md-4">
		 		<label for="inputZip">Telefono Celular</label>
				<input type="text" name="telefonoCelular" class="form-control" id="inputZip" placeholder="Ingrese Numero Celular">
		 </div>
		 <div class="form-group col-md-4">
			 <label for="inputState">Grado de Estudios</label>
			 <select id="inputState" name="estudios" class="form-control">
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
			 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="descES" class="form-control" id="inputCity" placeholder=" Descripcion de Estudios" >
		 </div>
	 </div>



	 <div class="form-row">
			 <div class="form-row">
				 <div class="form-group col-md-4">
					 <label for="inputCity">Calle</label>
					 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="calle" class="form-control" id="inputCity" placeholder=" Ingrese calle / Mz a Lt" >
				 </div>

				 <div class="form-group col-md-4">
					 <label for="inputZip">Colonia</label>
					 <input onKeyUp="this.value=this.value.toUpperCase();"id="colonia_chimal"type="text" name="colonia" class="form-control" id="inputZip" placeholder=" Ingrese Colonia" >
				 </div>
				 <div class="form-group col-md-4">
					 <label for="inputZip">Municipio/Alcaldia</label>
					 <input onKeyUp="this.value=this.value.toUpperCase();"id="municipio_chimal"type="text" name="municipio" class="form-control" id="inputZip" placeholder=" Ingrese Municipio" >
				 </div>

				 <div class="form-group col-md-3">
					 <label for="inputZip">Estado</label>
					 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="estado" class="form-control" id="inputZip" placeholder=" Ingrese Estado" >
				 </div>
				 <div class="form-group col-md-3">
					 <label for="inputZip">Codigo Postal</label>
					 <input type="text" name="codigoPostal" class="form-control" id="inputZip" placeholder=" Ingrese Codigo postal" >
				 </div>
				 <div class="form-group col-md-3">
					 <label for="inputZip">Nacionalidad</label>
					 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="nacionalidad" class="form-control" id="inputZip" placeholder=" Ingrese Nacionalidad" >
				 </div>
				 <div class="form-group col-md-3">
					 <label for="inputCity">Clave Electoral</label>
					 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="claveElectoral" class="form-control" id="inputCity" placeholder=" Clave Electoral" >
				 </div>
			  </div>
			 </div>
			<br>
			  <center><h3>Area Laboral</h3> </center>
			<div class="form-row">
				<div class="form-group col-md-4">
		 <label for="inputCity">Numero de Empleado</label>
		 <input type="text" name="numeroEmpleado" class="form-control" id="inputCity" placeholder=" Ingrese Numero" >
	 </div>
	 <div class="form-group col-md-4">
		 <label for="inputState">Tipo de trabajo</label>
		 <select id="inputState" name="tipoTrabajo" class="form-control">
			 <option value="GENARAL">GENARAL</option>
			 <option value="CONFIANZA">CONFIANZA</option>
			 <option value="POLICIAS">POLICIAS</option>
			 <option value="SINDICATO">SINDICATO</option>
			 <option value="LISTA DE RAYA">LISTA DE RAYA</option>
		 </select>
	 </div>

	 <div class="form-group col-md-4">
		 <label for="inputZip">Cargo</label>
		 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="cargo" class="form-control" id="inputZip" placeholder=" Ingrese Tipo de cargo" >
	 </div>
		 <div class="form-group col-md-4">
			 <label for="inputCity">Direccion Laboral </label>
			 <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="direccionLaboral" class="form-control" id="inputCity" placeholder=" Ingrese el Direccion Laboral" >
		 </div>
		 <div class="form-group col-md-4">
			<label for="inputCity">Departamento Laboral </label>
			<input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="departamentolaboral" class="form-control" id="inputCity" placeholder=" Ingrese el Direccion Laboral" >
		</div>
		 <div class="form-group col-md-4">
      <label for="inputState">Forma de Pago</label>
			<input type="text" name="pago"  class="form-control" id="inputZip" placeholder=" QUINCENAL" value="QUINCENAL">

    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Salario Base</label>
      <input type="text" name="salarioBase" class="form-control" id="inputZip" placeholder=" $$$$$$" >
    </div>
		<div class="form-group col-md-4">
			<label for="inputZip">Salario Bruto</label>
			<input type="text" name="salarioBruto" class="form-control" id="inputZip" placeholder=" $$$$$$" >
		</div>
		<div class="form-group col-md-4">
 		 <label for="inputZip">Fecha de ingreso</label><br>
 		 <input type="text" name="fechaIngreso" class="tcal tcalInput form-control" id="inputZip" placeholder=" 0000/00/00" >
 	 </div>
	 <div class="form-group col-md-4">
		<label for="inputZip">Fecha de baja</label><br>
		<input type="text" name="fechaBaja" class="tcal tcalInput form-control" id="inputZip" placeholder=" 0000/00/00" >
	</div>
	<div class="form-group col-md-2">
     <label for="inputState">Estatus</label>
     <select id="inputState" name="estatus" class="form-control">
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
			 <option value="SI">SI</option>
			 <option value="NO">NO</option>
		 </select>
	 </div>


    <div class="form-group col-md-4">
      <label for="inputCity">Sindicato</label>
      <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="sindicato" class="form-control" id="inputCity" placeholder=" Ingrese el Sindicato" >
    </div>
		<div class="form-group col-md-6">
      <label for="inputZip">Fecha de Ingreso al Sindicato</label><br>
      <input type="text" name="fechaIngresoSindicato" class="tcal tcalInput form-control" class="form-control" id="inputZip" placeholder=" 0000/00/00" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Quien autorizo</label>
      <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="autoriza" class="form-control" id="inputZip" placeholder="Nombre de la persona que autorizo" >
    </div>
		<div class="form-group col-md-12">
  		<label for="exampleFormControlTextarea1">Funcion</label>
  		<textarea onKeyUp="this.value=this.value.toUpperCase();"class="form-control" name="observaSin" id="exampleFormControlTextarea1" rows="5" ></textarea>
		</div>
		<div class="form-group col-md-3">
    <label for="inputState">Responsable</label>
    <select id="inputState" name="responsable" class="form-control">
      <option value="SI">SI</option>
      <option value="NO">NO</option>
    </select>
  </div>

  <div class="form-group col-md-5">
    <label for="inputCity">Folio de Gafete</label>
    <input onKeyUp="this.value=this.value.toUpperCase();"type="text" name="folioGafete" class="form-control" id="inputCity" placeholder=" Ingrese el Tipo de Gafete" >
  </div>

	<div class="form-group col-md-4">
 	 <label for="inputZip">Numero de Seguro Social</label>
 	 <input type="text" name="numeroSeguro" class="form-control" id="inputZip" placeholder="ISSEMYM" >
  </div>
	<div class="form-group col-md-12">
 	 <label for="exampleFormControlTextarea1">Motivos de baja</label>
 	 <textarea onKeyUp="this.value=this.value.toUpperCase();"class="form-control" name="MotivoBaja" id="exampleFormControlTextarea1" rows="5" ></textarea>
  </div>
 </div>


<br>
<center><h3>Documentación</h3> </center>
<div>


     <div class="custom-file was-validated">

    <input type="file" name="solicitudElaborada" class="custom-file-input" id="validatedCustomFile" lang="es" required>
       <label id="lunas"class="custom-file-label" for="validatedCustomFile">Solicitud Elaborada</label>
       <div class="invalid-feedback"></div>

     </div>
     </div>
     <br>
     <div>
     <div class="custom-file was-validated">
       <input type="file" name="curriculum" class="custom-file-input" id="validatedCustomFile" lang="es" required>
       <label id="lunas"class="custom-file-label" for="validatedCustomFile">Curriculum Vitae</label>
       <div class="invalid-feedback"></div>
     </div>
        </div>
     <br>
     <div >
     <div class="custom-file was-validated">
       <input type="file" name="actaNacimiento" class="custom-file-input" id="customFileLang" lang="es" required>
        <div class="invalid-feedback"></div>
				<label id="lunas"class="custom-file-label" for="customFileLang">Acta de Nacimiento</label>
     </div>
     </div>
     <br>
     <div>
     <div class="custom-file was-validated">
       <input type="file" name="curpDigital" class="custom-file-input" id="customFileLang" lang="es" required>
       <label id="lunas" class="custom-file-label" for="customFileLang">Seleccione Curp</label>
        <div class="invalid-feedback"></div>
     </div>
     </div>
     <br>
     <div>
     <div class="custom-file was-validated">
       <input type="file" name="credencial_de_lector" class="custom-file-input" id="customFileLang" lang="es" required>
       <label id="lunas" class="custom-file-label" for="customFileLang">Credencial de Elector</label>
        <div class="invalid-feedback"></div>
     </div>
     </div>
<br>
      <div>
      <div class="custom-file was-validated">
        <input type="file" name="comprobanteDomicilio" class="custom-file-input" id="customFileLang" lang="es" required>
        <label id="lunas" class="custom-file-label" for="customFileLang">Comprobante de Domicilio</label>
         <div class="invalid-feedback"></div>
      </div>
      </div>
      <br>
      <div>
      <div class="custom-file was-validated">
        <input type="file" name="cartillaMilitar" class="custom-file-input" id="customFileLang" lang="es" required>
        <label id="lunas" class="custom-file-label" for="customFileLang">Cartilla Libarada o Precartilla</label>
         <div class="invalid-feedback"></div>
      </div>
      </div>
      <br>
      <div>
      <div class="custom-file was-validated">
         <input type="file" name="comprobanteEstudios" class="custom-file-input" id="customFileLang" lang="es" required>
         <label id="lunas" class="custom-file-label" for="customFileLang">Comprobante de Estudios</label>
          <div class="invalid-feedback"></div>
       </div>
       </div>
       <br>
       <div>
       <div class="custom-file was-validated">
          <input type="file" name="cartaRecomendacion1" class="custom-file-input" id="customFileLang" lang="es" required>
          <label  id="lunas"class="custom-file-label" for="customFileLang">Carta de Recomendacion 1</label>
           <div class="invalid-feedback"></div>
        </div>
        </div>
        <br>
        <div>
         <div class="custom-file was-validated">
           <input type="file" name="cartaRecomendacion2" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Carta de Recomendacion 2</label>
            <div class="invalid-feedback"></div>
         </div>
         </div>
         <br>
         <div>
         <div class="custom-file was-validated">
           <input type="file" name="altaSeguro" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Alta de ISSEMYM</label>
            <div class="invalid-feedback"></div>
         </div>
         </div>
         <br>
         <div>
         <div class="custom-file was-validated">
           <input type="file" name="cartaNombramiento" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Copia de Nombramiento</label>
            <div class="invalid-feedback"></div>
         </div>
         </div>
         <br>
         <div>
         <div class="custom-file was-validated">
           <input type="file" name="reciboPago" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Recibo de Pago</label>
            <div class="invalid-feedback"></div>
         </div>
         </div>
         <br>
         <div>
         <div class="custom-file was-validated">
           <input type="file" name="referenciaDomicilio1" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Referencia Domiciliaria 1</label>
            <div class="invalid-feedback"></div>
         </div>
         </div>
         <br>
         <div>
         <div class="custom-file was-validated">
           <input type="file"  name="referenciaDomicilio2" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Referencia Domiciliaria 2</label>
            <div class="invalid-feedback"></div>
         </div>
         </div>
         <br>
         <div>
         <div class="custom-file was-validated">
           <input type="file" name="croquisDomicilio" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Croquis Domiciliario</label>
            <div class="invalid-feedback"></div>
         </div>
         </div>
         <br>
         <div>
         <div class="custom-file was-validated">
           <input type="file" name="listaAsistencia" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Hoja de no Inabilitacion</label>
            <div class="invalid-feedback"></div>
         </div>
         </div>
         <br>
         <div>
         <div class="custom-file was-validated">
           <input type="file" name="fotografia" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Fotografia Infantil</label>
            <div class="invalid-feedback"></div>
         </div>
         <br>
         <br>
         <div class="custom-file was-validated">
           <input type="file" name="imagenCredencial" class="custom-file-input" id="customFileLang" lang="es" required>
           <label id="lunas" class="custom-file-label" for="customFileLang">Imagen de Credencial (Perfil de usuario/Gafete)</label>
            <div class="invalid-feedback"></div>
         </div>
         </div>


<br><br>

  <button type="submit" name="subir" onclick="funciones.php" class="btn btn-primary">INGRESAR DATOS DEL EMPLEADO</button>
</form> </center>




  		<script src="js/bootstrap.bundle.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>


		</body>
	</html>
