<?php
$server = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'documentacion_chimalhuacan';

$conexion=mysqli_connect($server,$username,$password,$database);

$Nombre=$_POST['NOMBRE_COMPLETO'];
$Edad=$_POST['EDAD'];
$Sexo=$_POST['SEXO'];
$Estadocivil=$_POST['ESTADO_CIVIL'];
$Rfc=$_POST['RFC'];
$Email=$_POST['EMAIL'];
$Telefono_Casa=$_POST['TELEFONO_DE_CASA'];
$Telefono_Celular=$_POST['TELEFONO_CELULAR'];
$Lugar_Nacimiento=$_POST['LUGAR_NACIMIENTO'];
$Fecha_Nacimiento=$_POST['FECHA_NACIMIENTO'];
$Nacionalidad=$_POST['NACIONALIDAD'];
$Calle=$_POST['CALLE'];
$Colonia=$_POST['COLONIA'];
$Municipio=$_POST['MUNICIPIO'];
$Estado=$_POST['ESTADO'];
$Curp=$_POST['CLAVE_CURP'];
$Clave_Electoral=$_POST['CLAVE_ELECTORAL'];
$Codigo_Postal=$_POST['CODIGO_POSTAL'];
$Estudios=$_POST['GRADO_ESTUDIO'];
$Numero_Empleado=$_POST['NUMERO_EMPLEADO'];
$Tipo_Trabajo=$_POST['TIPO_TRABAJO'];
$Cargo=$_POST['CARGO'];
$Fecha_Ingreso =$_POST['FECHA_DE_INGRESO'];
$Direccion_Laboral=$_POST['DIRECCION_LABORAL'];
$Area_Laboral=$_POST['DEPARTAMENTO_LABORAL'];
$Pago=$_POST['FORMA_PAGO'];
$Salario=$_POST['SALARIO'];
$Numero_Seguro=$_POST['N_SEGURO_SOCIAL'];
$Sindicalizado=$_POST['SINDICALIZADO'];
$Sindicato=$_POST['SINDICATO'];
$Fecha_Ingreso_Sindicato=$_POST['F_INGRESO_SINDICATO'];
$Autoriza=$_POST['QUIEN_AUTORIZO'];
$Observa_Sin=$_POST['OBSERVA_SIN'];
$Responsable=$_POST['RESPONSABLE'];
$Folio_Gafete=$_POST['FOLIO_DE_GAFETE'];
$Tipo_Gafete=$_POST['TIPO_DE_GAFETE'];
$Estatus=$_POST['ESTATUS'];

$Solicitud=$_FILES['SOLICITUD_ELABORADA_PDF']['name'];
$Curriculum=$_FILES['CURRICULUM_VITAE_PDF']['name'];
$Curp_Digital=$_FILES['CURP_PDF']['name'];
$Acta_Nacimiento=$_FILES['ACTA_DE_NACIMIENTO_PDF']['name'];
$Cartilla_Militar=$_FILES['CARTILLA_PRECARTILLA_PDF']['name'];
$Comprobante_Domicilio=$_FILES['DOMICILIO_PDF']['name'];
$Comprobante_Estudios=$_FILES['ESTUDIOS_PDF']['name'];
$Carta_Recomendacion1=$_FILES['C_RECOMENDACION_UNO_PDF']['name'];
$Carta_Recomendacion2=$_FILES['C_RECOMENDACION_DOS_PDF']['name'];
$Alta_Seguro=$_FILES['ALTA_SEGURO_PDF']['name'];
$Carta_Nombramiento=$_FILES['C_DE_NOMBRAMIENTO_PDF']['name'];
$Recibo_Pago=$_FILES['RECIBO_DE_PAGO_PDF']['name'];
$Fotografia=$_FILES['FOTOGRAFIA_INFANTIL_PDF']['name'];
$Croquis_Domicilio=$_FILES['CROQUIS_PDF']['name'];
$Referencia_domicilio1=$_FILES['DOMICILIARIO_UNO_PDF']['name'];
$Referencia_domicilio2=$_FILES['DOMICILIARIO_DOS_PDF']['name'];
$Lista_Asistencia=$_FILES['LISTA_DE_ASISTENCIA_PDF']['name'];
$imagen_Crendencial=$_FILES['PERFIL_IMA_PDF']['name'];
$Credencial_Lector=$_FILES['LECTOR_PDF']['name']
;

$ingresar ="INSERT INTO documentacion_chimalhuacan.registro(nombre_completo,edad,sexo,estado_civil,rfc,email,
telefono_de_casa,telefono_celular,lugar_naciemiento,fecha_nacimiento,nacionalidad,
calle,colonia,municipio,estado,clave_curp,clave_electoral,codigo_postal,
grado_estudios,numero_empleado,tipo_trabajo,cargo,fecha_de_ingreso,direccion_laboral,area_laboral,
forma_pago,salario,N_seguro_social,sindicalizado,sindicato,F_ingreso_sindicato,
quien_autorizo,observa_Sin,responsable,folio_de_gafete,tipo_de_gafete,estatus,
solicitud_elaborada_PDF,curriculum_vitae_PDF,curp_PDF,acta_de_nacimiento_PDF,
cartilla_precartilla_PDF,domicilio_PDF,estudios_PDF,C_recomendacion_uno_PDF,
C_recomendacion_dos_PDF,alta_seguro_PDF,copia_de_nombramiento_PDF,recibo_de_pago_PDF,
fotografia_infantil_PDF,croquis_PDF,domiciliario_uno_PDF,domiciliario_dos_PDF,lista_de_asistencia_PDF,
perfil_ima_PDF,lector_PDF) VALUES('$Nombre','$Edad','$Sexo',
'$Estadocivil','$Rfc','$Email','$Telefono_Casa','$Telefono_Celular',
'$Lugar_Nacimiento','$Fecha_Nacimiento','$Nacionalidad','$Calle','$Colonia',
'$Municipio','$Estado','$Curp','$Clave_Electoral','$Codigo_Postal',
'$Estudios','$Numero_Empleado','$Tipo_Trabajo','$Cargo','$Fecha_Ingreso','$Direccion_Laboral',
'$Area_Laboral','$Pago','$Salario','$Numero_Seguro','$Sindicalizado','$Sindicato',
'$Fecha_Ingreso_Sindicato','$Autoriza','$Observa_Sin','$Responsable','$Folio_Gafete',
'$Tipo_Gafete','$Estatus','$Solicitud','$Curriculum','$Curp_Digital',
'$Acta_Nacimiento','$Cartilla_Militar','$Comprobante_Domicilio','$Comprobante_Estudios',
'$Carta_Recomendacion1','$Carta_Recomendacion2','$Alta_Seguro','$Carta_Nombramiento',
'$Recibo_Pago','$Fotografia','$Croquis_Domicilio','$Referencia_domicilio1',
'$Referencia_domicilio2','$Lista_Asistencia','$imagen_Crendencial','$Credencial_Lector')";

if(!$conexion){
  echo "conexion no establecida";
}else{


}

$resultado= mysqli_query($conexion,$ingresar);

if(!$resultado){
   echo "Error: " . $resultado. "<br>" . mysqli_error($conexion);
}else{
  echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
echo "<link rel='stylesheet' href='css/bootstrap-grid.css'>";
echo "<link rel='stylesheet' href='css/bootstrap-reboot.min.css'>";

echo "<div class='alert alert-warning' role='alert'>";
echo "Se ha registrado correctamete";
echo "<a href='menu.php' class='alert-link'>   dale click para continuar en la plataforma</a>";
echo "</div>";
}
mysqli_close($conexion);

 ?>
