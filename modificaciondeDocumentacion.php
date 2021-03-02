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
$numberEmployer=$_POST['numberEmployers'];


$host = 'localhost';
$user = 'root';
$password = '';
$db = 'documentacion_chimalhuacan';


$conexion = mysqli_connect( $host, $user, $password,$db);

$sql="select solicitud_elaborada_PDF,curriculum_vitae_PDF,curp_PDF,acta_de_nacimiento_PDF,cartilla_precartilla_PDF,
      domicilio_PDF,estudios_PDF,C_recomendacion_uno_PDF, C_recomendacion_dos_PDF,alta_seguro_PDF,
      copia_de_nombramiento_PDF,recibo_de_pago_PDF,fotografia_infantil_PDF,croquis_PDF,domiciliario_uno_PDF,
      domiciliario_dos_PDF,lista_de_asistencia_PDF,perfil_ima_PDF,lector_PDF
      from registro where numero_empleado='$numberEmployer'";

$result=mysqli_query($conexion,$sql);
while ($fila=mysqli_fetch_array($result)) {
  $ARCS=$fila['solicitud_elaborada_PDF'];
  $ARCC=$fila['curriculum_vitae_PDF'];
  $ARCCURP=$fila['curp_PDF'];
  $ARCANACIMIENTO=$fila['acta_de_nacimiento_PDF'];
  $ARCCATILLA=$fila['cartilla_precartilla_PDF'];
  $ARCDOMICILIO=$fila['domicilio_PDF'];
  $ARCNIVELESTUDIOS=$fila['estudios_PDF'];
  $ARCCRECOMENDACIONUNO=$fila['C_recomendacion_uno_PDF'];
  $ARCCRECOMENDACIONDOS=$fila['C_recomendacion_dos_PDF'];
  $ARCALTASEGURO=$fila['alta_seguro_PDF'];
  $ARCNOMBRAMIENTO=$fila['copia_de_nombramiento_PDF'];
  $ARCRECIBOPAGO=$fila['recibo_de_pago_PDF'];
  $ARCFOTO=$fila['fotografia_infantil_PDF'];
  $ARCCROQUIS=$fila['croquis_PDF'];
  $ARCDOMICILIARIOUNO=$fila['domiciliario_uno_PDF'];
  $ARCDOMICILIARIODOS=$fila['domiciliario_dos_PDF'];
  $ARCLISTAASISTENCIA=$fila['lista_de_asistencia_PDF'];
  $ARCPERFIL=$fila['perfil_ima_PDF'];
  $ARCREDENCIALLECTOR=$fila['lector_PDF'];
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

    <title>Registro Documentacion de Empleados</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light">
<img src="imagenes/avatar.png" width="45" height="40" class="d-inline-block align-top">
  <a class="nav-link"  href="consultar.php" align="left">Consultar</a>
          <a class="nav-link" href="menu.php">Inicio</a>
    </nav>
    <div class="form-group">

  <!--MODIFICACION DE LA SOLICITUD-->
<center>
<form action="modificacionSolicitudpdfs.php" method="post" enctype="multipart/form-data">
     <center><h3>Modificacion de la Documentación de los Empleado</h3> </center>
     <br><br>
     <label for="">Numero del Empleado</label>
     <input id="label_number"type="text" name="numeroEmpleadoSE" value="<?php echo "$numberEmployer"?>"></center>
     <div>

       <center> <iframe align="center" src="/documentacion_chimal/archivos/Solicitud/<?php echo"$numberEmployer/$ARCS" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
       <input type="file" name="solicitudElaborada" class="custom-file-input" id="customFileLang" lang="es">
       <label id="luna"class="custom-file-label" for="customFileLang">Solicitud Elaborada</label>
     </div>
<br>
  <div class="form-group">
    <div class="form-check">
    </div>
  </div>
  <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Solicitud</button>
</form> </center>

<br><br>
<!--MODIFICACION DEL CURRICULUM-->
<center>
<form action="modificacionCurriculumpdfs.php" method="post" enctype="multipart/form-data">
<div>
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoCV" value="<?php echo "$numberEmployer"?>"></center>
  <center> <iframe align="center" src="/documentacion_chimal/archivos/Curriculum/<?php echo"$numberEmployer/$ARCC" ?>" width="900" height="500"></iframe> </center>

     <div class="custom-file">
       <input type="file" name="curriculumvitae" class="custom-file-input" id="customFileLang" lang="es">
       <label id="luna"class="custom-file-label" for="customFileLang">Curriculum Vitae</label>
     </div>
<br>
  <div class="form-group">
    <div class="form-check">
    </div>
  </div>
  <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Curriculum Vitae</button>
</form>
</center>

<br><br>
<!--MODIFICACION DEL CURP DIGITAL-->
<center>
<form  action="modificacionCurpDigtalpdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoCurp" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/Curp/<?php echo"$numberEmployer/$ARCCURP" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
         <input type="file" name="curpDigital" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang">Curp Digital</label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Curp Digital</button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL ACTA NACIMIENTO-->
<center>
<form  action="modificacionActaNacimientopdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number" type="text" name="numeroEmpleadoActaNacimiento" value="<?php echo "$numberEmployer"?>"></center>

  <center> <iframe align="center" src="/documentacion_chimal/archivos/ActadeNacimiento/<?php echo"$numberEmployer/$ARCANACIMIENTO" ?>" width="900" height="500"></iframe> </center>

  <div>
       <div class="custom-file">
         <input type="file" name="actaNacimiento" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang">Acta Nacimiento</label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Acta Nacimiento</button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL CARTILLA MILITAR-->
<center>
<form  action="modificacionCartillaMilitarpdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoCatilla" value="<?php echo "$numberEmployer"?>"></center>

  <center> <iframe align="center" src="/documentacion_chimal/archivos/CartillaMilitar/<?php echo"$numberEmployer/$ARCCATILLA" ?>" width="900" height="500"></iframe> </center>


  <div>
       <div class="custom-file">
         <input type="file" name="cartillaMilitar" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang">Cartilla Militar/Precartilla</label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Cartilla Militar/Precartilla</button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL DOMICILIO-->
<center>
<form  action="modificacionDomiciliopdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoDomicilio" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/Domicilio/<?php echo"$numberEmployer/$ARCDOMICILIO" ?>" width="900" height="500"></iframe> </center>


       <div class="custom-file">
         <input type="file" name="domicilio" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Domicilio</label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Domicilio</button>

</form>
<br><br>
</center>
<!--MODIFICACION DEL NIVEL DE ESTUDIOS-->
<center>
<form  action="modificacionNivelEstudiospdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoNivelEstudios" value="<?php echo "$numberEmployer"?>"></center>

  <center> <iframe align="center" src="/documentacion_chimal/archivos/NiveldeEstudios/<?php echo"$numberEmployer/$ARCNIVELESTUDIOS" ?>" width="900" height="500"></iframe> </center>


  <div>
       <div class="custom-file">
         <input type="file" name="nivelEstudios" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang">Nivel de Estudio</label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Nivel de Estudio</button>

</form>
</center>

<br><br>
</center>
<!--MODIFICACION DEL CARTA DE RECOMENDACION UNO-->
<center>
<form  action="modificacionCRecomendacionUnopdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoCRecomendacionUno" value="<?php echo "$numberEmployer"?>"></center>

  <center> <iframe align="center" src="/documentacion_chimal/archivos/CartadeRecomendacionUno/<?php echo"$numberEmployer/$ARCCRECOMENDACIONUNO" ?>" width="900" height="500"></iframe> </center>


  <div>
       <div class="custom-file">
         <input type="file" name="CRecomendacionUno" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang">Carta de Recomendacion Uno</label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Carta de Recomendacion Uno</button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL CARTA DE RECOMENDACION DOS-->
<center>
<form  action="modificacionCRecomendacionDospdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoCRecomendacionDos" value="<?php echo "$numberEmployer"?>"></center>

  <center> <iframe align="center" src="/documentacion_chimal/archivos/CartadeRecomendacionDos/<?php echo"$numberEmployer/$ARCCRECOMENDACIONDOS" ?>" width="900" height="500"></iframe> </center>

  <div>
       <div class="custom-file">
         <input type="file" name="CRecomendacionDos" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang">Carta de Recomendacion Dos</label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Carta de Recomendacion Dos</button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL ALTA DEL SEGURO-->
<center>
<form  action="modificacionAltadelSeguropdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoAltadelSeguro" value="<?php echo "$numberEmployer"?>"></center>

  <center> <iframe align="center" src="/documentacion_chimal/archivos/AltadelSeguro/<?php echo"$numberEmployer/$ARCALTASEGURO" ?>" width="900" height="500"></iframe> </center>

  <div>
       <div class="custom-file">
         <input type="file" name="altadelSeguro" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Alta del Seguro</label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Alta del Seguro</button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL COPIA DE NOMBRAMIENTO -->
<center>
<form  action="modificacionCNombramientopdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoCNombramiento" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/CopiadeNombramiento/<?php echo"$numberEmployer/$ARCNOMBRAMIENTO" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
         <input type="file" name="copiaNombramiento" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Copia del Nombramiento </label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Copia del Nombramiento </button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL RECIBO DE PAGO -->
<center>
<form  action="modificacionReciboPagopdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoReciboPago" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/RecibodePago/<?php echo"$numberEmployer/$ARCRECIBOPAGO" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
         <input type="file" name="reciboPago" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Recibo de Pago </label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Recibo de Pago </button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL FOTOGRAFIA INFANTIL -->
<center>
<form  action="modificacionFotografiaInfantilpdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoFotografiaInfantil" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/FotografiaInfantil/<?php echo"$numberEmployer/$ARCFOTO" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
         <input type="file" name="fotografiaInfantil" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Fotografia Infantil </label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Fotografia Infantil </button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL CROQUIS -->
<center>
<form  action="modificacionCroquispdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoCroquis" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/Croquis/<?php echo"$numberEmployer/$ARCCROQUIS" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
         <input type="file" name="croquis" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Croquis </label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Croquis </button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL DOMICILIARIO UNO -->
<center>
<form  action="modificacionDomiciliarioUnopdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoDomiciliarioUno" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/DomiciliarioUno/<?php echo"$numberEmployer/$ARCDOMICILIARIOUNO" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
         <input type="file" name="domiciliarioUno" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Domiciliario Uno </label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Domiciliario Uno </button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL DOMICILIARIO DOS -->
<center>
<form  action="modificacionDomiciliarioDospdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoDomiciliarioDos" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/DomiciliarioDos/<?php echo"$numberEmployer/$ARCDOMICILIARIODOS" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
         <input type="file" name="domiciliarioDos" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Domiciliario Dos </label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Domiciliario Dos </button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL LISTA DE ASISTENCIA -->
<center>
<form  action="modificacionListadeAsistenciapdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoListadeAsistencia" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/ListadeAsistencia/<?php echo"$numberEmployer/$ARCLISTAASISTENCIA" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
         <input type="file" name="listadeAsistencia" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Hoja de no Inabilitacion </label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar  Hoja de no Inabilitacion </button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL PERFIL -->
<center>
<form  action="modificacionPerfilpdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoPerfil" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <img align="center" src="/documentacion_chimal/archivos/Perfil/<?php echo"$numberEmployer/$ARCPERFIL" ?>" width="450" height="250"></img> </center>

       <div class="custom-file">
         <input type="file" name="perfil" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Perfil </label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Perfil </button>

</form>
</center>

<br><br>
<!--MODIFICACION DEL CREDENCIAL INE -->
<center>
<form  action="modificacionCredencialpdfs.php" method="post" enctype="multipart/form-data">
  <label for="">Numero del Empleado</label>
  <input id="label_number"type="text" name="numeroEmpleadoCredencial" value="<?php echo "$numberEmployer"?>"></center>

  <div>

    <center> <iframe align="center" src="/documentacion_chimal/archivos/CredencialLector/<?php echo"$numberEmployer/$ARCREDENCIALLECTOR" ?>" width="900" height="500"></iframe> </center>

       <div class="custom-file">
         <input type="file" name="credencial" class="custom-file-input" id="customFileLang" lang="es">
         <label id="luna"class="custom-file-label" for="customFileLang"> Credencial / INE  </label>
       </div>
  <br>
    <div class="form-group">
      <div class="form-check">
      </div>
    </div>
    <button id="boton"type="submit" class="btn btn-primary btn-lg btn-block">Modificar Credencial / INE  </button>

</form>
</center>

</div>
    <script src="js/jquery-3.3.1.min.js"></script>
  		<script src="js/bootstrap.bundle.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>

  </body>
</html>
