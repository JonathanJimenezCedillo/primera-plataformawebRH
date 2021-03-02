
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'documentacion_chimalhuacan';
$conexion = mysqli_connect( $host, $user, $password,$db);

$NUMERO_EMPLEADO=$_POST['numeroEmpleado'];
$Nombre=$_POST['nombre'];
$Edad=$_POST['edad'];
$SEXO=$_POST['sexo'];
$ESTADO_CIVIL=$_POST['estadoCivil'];
$FECHA_NACIMIENTO=$_POST['fechaNacimiento'];
$LUGAR_NACIMIENTO=$_POST['lugarNacimiento'];
$RFC=$_POST['rfc'];
$EMAIL=$_POST['correo'];
$TELEFONO_CASA=$_POST['telefonoCasa'];
$TELEFONO_CELULAR=$_POST['telefonoCelular'];
$NACIONALIDAD=$_POST['nacionalidad'];
$ESTUDIOS=$_POST['estudios'];
$DESCESTD=$_POST['descES'];
$CALLE=$_POST['calle'];
$COLONIA=$_POST['colonia'];
$MUNICIPIO=$_POST['municipio'];
$ESTADO=$_POST['estado'];
$CODIGO_POSTAL=$_POST['codigoPostal'];
$CURP=$_POST['curp'];
$CLAVE_ELECTORAL=$_POST['claveElectoral'];
$NUMERO_SEGURO=$_POST['numeroSeguro'];
$TIPO_TRABAJO=$_POST['tipoTrabajo'];
$CARGO=$_POST['cargo'];
$FECHA_INGRESO=$_POST['fechaIngreso'];
$FECHA_BAJA=$_POST['fechaBaja'] ;
$DIRECCION_LABORAL=$_POST['direccionLaboral'];
$DEPARTAMENTO_LABORAL=$_POST['departamentolaboral'];
$PAGO=$_POST['pago'];
$SALARIO=$_POST['salarioBase'];
$SALARIO_BRUTO=$_POST['salarioBruto'];
$SINDICALIZADO=$_POST['sindicalizado'];
$SINDICATO=$_POST['sindicato'];
$FECHA_INGRESO_SINDICATO=$_POST['fechaIngresoSindicato'];
$AUTORIZA=$_POST['autoriza'];
$OBSERVA_SIN=$_POST['observaSin'];
$RESPOSABLE=$_POST['responsable'];
$FOLIO_GAFETE=$_POST['folioGafete'];
$ESTATUS=$_POST['estatus'];
$MOVBAJA=$_POST['MotivoBaja'];



$SOLICITUD=$_FILES['solicitudElaborada']['name'];
$CURRICULUM=$_FILES['curriculum']['name'];
$CURP_DIGITAL=$_FILES['curpDigital']['name'];
$ACTA_NACIMIENTO=$_FILES['actaNacimiento']['name'];
$CARTILLA_MILITAR=$_FILES['cartillaMilitar']['name'];
$COMPROBANTE_DOMICILIO=$_FILES['comprobanteDomicilio']['name'];
$COMPROBANTE_ESTUDIOS=$_FILES['comprobanteEstudios']['name'];
$CARTA_RECOMENDACION1=$_FILES['cartaRecomendacion1']['name'];
$CARTA_RECOMENDACION2=$_FILES['cartaRecomendacion2']['name'];
$ALTA_SEGURO=$_FILES['altaSeguro']['name'];
$CARTA_NOMBRAMIENTO=$_FILES['cartaNombramiento']['name'];
$RECIBO_DE_PAGO=$_FILES['reciboPago']['name'];
$FOTOGRAFIA=$_FILES['fotografia']['name'];
$CROQUIS_DOMICILIO=$_FILES['croquisDomicilio']['name'];
$REFERENCIA_DOMICILIO1=$_FILES['referenciaDomicilio1']['name'];
$REFERENCIA_DOMICILIO2=$_FILES['referenciaDomicilio2']['name'];
$LISTA_ASISTENCIA=$_FILES['listaAsistencia']['name'];
$IMAGEN_CREDENCIAL=$_FILES['imagenCredencial']['name'];
$CREDENCIAL_DE_ELECTOR=$_FILES['credencial_de_lector']['name'];







if (isset($_POST['subir'])) {




          $ingresar ="INSERT INTO registro (numero_empleado,nombre_completo,edad,sexo,estado_civil,fecha_nacimiento,lugar_naciemiento,rfc,email,
                                            telefono_de_casa,telefono_celular,nacionalidad,grado_estudios,descEstudi,calle,colonia,municipio,estado,codigo_postal,
                                            clave_curp,clave_electoral,N_seguro_social,tipo_trabajo,cargo,fecha_de_ingreso,fechaBaja,direccion_laboral,
                                            departamento_laboral,forma_pago,salario,salarioBruto,sindicalizado,sindicato,F_ingreso_sindicato,
                                            quien_autorizo,observa_Sin,responsable,folio_de_gafete,estatus,motivoBaja,
                                            solicitud_elaborada_PDF,curriculum_vitae_PDF,curp_PDF,acta_de_nacimiento_PDF,cartilla_precartilla_PDF,domicilio_PDF,estudios_PDF,
                                            C_recomendacion_uno_PDF,C_recomendacion_dos_PDF,alta_seguro_PDF,copia_de_nombramiento_PDF,recibo_de_pago_PDF,fotografia_infantil_PDF,
                                            croquis_PDF,domiciliario_uno_PDF,domiciliario_dos_PDF,lista_de_asistencia_PDF,perfil_ima_PDF,lector_PDF
                                              )
                                    VALUES ('$NUMERO_EMPLEADO','$Nombre','$Edad','$SEXO','$ESTADO_CIVIL','$FECHA_NACIMIENTO','$LUGAR_NACIMIENTO','$RFC','$EMAIL',
                                            '$TELEFONO_CASA','$TELEFONO_CELULAR','$NACIONALIDAD','$ESTUDIOS','$DESCESTD','$CALLE','$COLONIA','$MUNICIPIO','$ESTADO','$CODIGO_POSTAL',
                                            '$CURP','$CLAVE_ELECTORAL','$NUMERO_SEGURO','$TIPO_TRABAJO','$CARGO','$FECHA_INGRESO','$FECHA_BAJA','$DIRECCION_LABORAL',
                                            '$DEPARTAMENTO_LABORAL','$PAGO','$SALARIO','$SALARIO_BRUTO','$SINDICALIZADO','$SINDICATO','$FECHA_INGRESO_SINDICATO',
                                            '$AUTORIZA','$OBSERVA_SIN','$RESPOSABLE','$FOLIO_GAFETE','$ESTATUS','$MOVBAJA',
                                            '$SOLICITUD','$CURRICULUM','$CURP_DIGITAL','$ACTA_NACIMIENTO','$CARTILLA_MILITAR','$COMPROBANTE_DOMICILIO','$COMPROBANTE_ESTUDIOS',
                                            '$CARTA_RECOMENDACION1','$CARTA_RECOMENDACION2','$ALTA_SEGURO','$CARTA_NOMBRAMIENTO','$RECIBO_DE_PAGO','$FOTOGRAFIA','$CROQUIS_DOMICILIO',
                                            '$REFERENCIA_DOMICILIO1','$REFERENCIA_DOMICILIO2','$LISTA_ASISTENCIA','$IMAGEN_CREDENCIAL','$CREDENCIAL_DE_ELECTOR'
                                            )";

          $resultado= mysqli_query($conexion,$ingresar);

         $rutaS = 'archivos/Solicitud/'.$NUMERO_EMPLEADO.'/';
          $solicitudes = $rutaS.$SOLICITUD;

          $rutaC = 'archivos/Curriculum/'.$NUMERO_EMPLEADO.'/';
          $curricualums = $rutaC.$CURRICULUM;

          $rutaCurp = 'archivos/Curp/'.$NUMERO_EMPLEADO.'/';
          $curps = $rutaCurp.$CURP_DIGITAL;

          $rutaAN = 'archivos/ActadeNacimiento/'.$NUMERO_EMPLEADO.'/';
          $ANazi = $rutaAN.$ACTA_NACIMIENTO;

          $rutaCM = 'archivos/CartillaMilitar/'.$NUMERO_EMPLEADO.'/';
          $CMilitar = $rutaCM.$CARTILLA_MILITAR;

          $rutaCD = 'archivos/Domicilio/'.$NUMERO_EMPLEADO.'/';
          $Cdomicli = $rutaCD.$COMPROBANTE_DOMICILIO;

          $rutaNE = 'archivos/NiveldeEstudios/'.$NUMERO_EMPLEADO.'/';
          $NEstudio = $rutaNE.$COMPROBANTE_ESTUDIOS;

          $rutaCRU = 'archivos/CartadeRecomendacionUno/'.$NUMERO_EMPLEADO.'/';
          $CRUno = $rutaCRU.$CARTA_RECOMENDACION1;

          $rutaCRD = 'archivos/CartadeRecomendacionDos/'.$NUMERO_EMPLEADO.'/';
          $CRDos = $rutaCRD.$CARTA_RECOMENDACION2;

          $rutaASS = 'archivos/AltadelSeguro/'.$NUMERO_EMPLEADO.'/';
          $ASSocial = $rutaASS.$ALTA_SEGURO;

          $rutaCN = 'archivos/CopiadeNombramiento/'.$NUMERO_EMPLEADO.'/';
          $CNombrami = $rutaCN.$CARTA_NOMBRAMIENTO;

          $rutaRP = 'archivos/RecibodePago/'.$NUMERO_EMPLEADO.'/';
          $CPago = $rutaRP.$RECIBO_DE_PAGO;

          $rutaFoto = 'archivos/FotografiaInfantil/'.$NUMERO_EMPLEADO.'/';
          $FotoInfa = $rutaFoto.$FOTOGRAFIA;

          $rutaCroquis = 'archivos/Croquis/'.$NUMERO_EMPLEADO.'/';
          $CDomicilio = $rutaCroquis.$CROQUIS_DOMICILIO;

          $rutaDomiciUno = 'archivos/DomiciliarioUno/'.$NUMERO_EMPLEADO.'/';
          $CDomicilioUno = $rutaDomiciUno.$REFERENCIA_DOMICILIO1;

          $rutaDomiciDos = 'archivos/DomiciliarioDos/'.$NUMERO_EMPLEADO.'/';
          $CDomicilioDos = $rutaDomiciDos.$REFERENCIA_DOMICILIO2;

          $rutaLAsist = 'archivos/ListadeAsistencia/'.$NUMERO_EMPLEADO.'/';
          $LAsist = $rutaLAsist.$LISTA_ASISTENCIA;

          $rutaIC = 'archivos/Perfil/'.$NUMERO_EMPLEADO.'/';
          $ICredencial = $rutaIC.$IMAGEN_CREDENCIAL;

          $rutaCL = 'archivos/CredencialLector/'.$NUMERO_EMPLEADO.'/';
          $CLector = $rutaCL.$CREDENCIAL_DE_ELECTOR;

         if(!file_exists($rutaS)||!file_exists($rutaC)||!file_exists($rutaCurp)||
              !file_exists($rutaAN)||!file_exists($rutaCM)||!file_exists($rutaCD)||
              !file_exists($rutaNE)||!file_exists($rutaCRU)||!file_exists($rutaCRD)||
              !file_exists($rutaASS)||!file_exists($rutaCN)||!file_exists($rutaRP)||
              !file_exists($rutaFoto)||!file_exists($rutaCroquis)||!file_exists($rutaFoto)||
              !file_exists($rutaDomiciUno)||!file_exists($rutaDomiciDos)||!file_exists($rutaLAsist)||
              !file_exists($rutaIC)||!file_exists($rutaCL)){

            mkdir($rutaS);  mkdir($rutaC);  mkdir($rutaCurp);  mkdir($rutaAN);
            mkdir($rutaCM);  mkdir($rutaCD);  mkdir($rutaNE);  mkdir($rutaCRU);
            mkdir($rutaCRD); mkdir($rutaASS); mkdir($rutaCN);  mkdir($rutaRP);
            mkdir($rutaFoto); mkdir($rutaCroquis); mkdir($rutaDomiciUno);
            mkdir($rutaDomiciDos); mkdir($rutaLAsist); mkdir($rutaIC);
            mkdir($rutaCL);
          }



          if(!file_exists($solicitudes)||!file_exists($curricualums)||!file_exists($curps)||
          !file_exists($CMilitar)||!file_exists($Cdomicli)||!file_exists($NEstudio)||
          !file_exists($CRUno)||!file_exists($CRDos)||!file_exists($ASSocial)||
          !file_exists($ASSocial)||!file_exists($CNombrami)||!file_exists($CPago)||
          !file_exists($FotoInfa)||!file_exists($CDomicilio)||!file_exists($CDomicilioUno)||
          !file_exists($CDomicilioDos)||!file_exists($LAsist)||!file_exists($ICredencial)||
          !file_exists($CLector)){

            $resultado = @move_uploaded_file($_FILES["solicitudElaborada"]["tmp_name"], $solicitudes);

            $resultadoC = @move_uploaded_file($_FILES["curriculum"]["tmp_name"], $curricualums);

            $resultadoCurp = @move_uploaded_file($_FILES["curpDigital"]["tmp_name"], $curps);

            $resultadoAN = @move_uploaded_file($_FILES["actaNacimiento"]["tmp_name"], $ANazi);

            $resultadoCM = @move_uploaded_file($_FILES["cartillaMilitar"]["tmp_name"], $CMilitar);

            $resultadoCD = @move_uploaded_file($_FILES["comprobanteDomicilio"]["tmp_name"], $Cdomicli);

            $resultadoNE = @move_uploaded_file($_FILES["comprobanteEstudios"]["tmp_name"], $NEstudio);

            $resultadoNECRU = @move_uploaded_file($_FILES["cartaRecomendacion1"]["tmp_name"], $CRUno);

            $resultadoCRD = @move_uploaded_file($_FILES["cartaRecomendacion2"]["tmp_name"], $CRDos);

            $resultadoASS = @move_uploaded_file($_FILES["altaSeguro"]["tmp_name"], $ASSocial);

            $resultadoCN = @move_uploaded_file($_FILES["cartaNombramiento"]["tmp_name"], $CNombrami);

            $resultadoCP = @move_uploaded_file($_FILES["reciboPago"]["tmp_name"], $CPago);

            $resultadoFI = @move_uploaded_file($_FILES["fotografia"]["tmp_name"], $FotoInfa);

            $resultadoCDomici = @move_uploaded_file($_FILES["croquisDomicilio"]["tmp_name"], $CDomicilio);

            $resultadoRDU = @move_uploaded_file($_FILES["referenciaDomicilio1"]["tmp_name"], $CDomicilioUno);

            $resultadoRDD = @move_uploaded_file($_FILES["referenciaDomicilio2"]["tmp_name"], $CDomicilioDos);

            $resultadoAL = @move_uploaded_file($_FILES["listaAsistencia"]["tmp_name"], $LAsist);

            $resultadoIC = @move_uploaded_file($_FILES["imagenCredencial"]["tmp_name"], $ICredencial);

            $resultadoCL = @move_uploaded_file($_FILES["credencial_de_lector"]["tmp_name"], $CLector);

            if($resultado){
                echo "Se guardo correctamente";
                header("Location:http://localhost/documentacion_chimal/menu.php");
            }
        } else {
            echo "Error";
        }

} else {
    echo "Error";
}

 ?>
