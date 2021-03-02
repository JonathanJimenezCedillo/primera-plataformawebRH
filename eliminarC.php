<?php
$server = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'documentacion_chimalhuacan';


$numberEmpliA=$_POST['numberEmpli'];
////////////////////////////////


$conex = mysqli_connect( $server, $username, $password,$database);
 mysqli_select_db($conex,$database);



  //obtenemos todos los nombres de los ficheros
/*
 $rutaC = glob('archivos/Curriculum/'.$numberEmpliA.'/*');

 $rutaCurp = glob('archivos/Curp/'.$numberEmpliA.'/*');

 $rutaAN = glob('archivos/ActadeNacimiento/'.$numberEmpliA.'/*');

 $rutaCM = glob('archivos/CartillaMilitar/'.$numberEmpliA.'/*');

 $rutaCD = glob('archivos/Domicilio/'.$numberEmpliA.'/*');

 $rutaNE = glob('archivos/NiveldeEstudios/'.$numberEmpliA.'/*');

 $rutaCRU = glob('archivos/CartadeRecomendacionUno/'.$numberEmpliA.'/*');

 $rutaCRD = glob('archivos/CartadeRecomendacionDos/'.$numberEmpliA.'/*');

 $rutaASS = glob('archivos/AltadelSeguro/'.$numberEmpliA.'/*');

 $rutaCN = glob('archivos/CopiadeNombramiento/'.$numberEmpliA.'/*');

 $rutaRP = glob('archivos/RecibodePago/'.$numberEmpliA.'/*');

 $rutaFoto = glob('archivos/FotografiaInfantil/'.$numberEmpliA.'/*');

 $rutaCroquis = glob('archivos/Croquis/'.$numberEmpliA.'/*');

 $rutaDomiciUno = glob('archivos/DomiciliarioUno/'.$numberEmpliA.'/*');

 $rutaDomiciDos = glob('archivos/DomiciliarioDos/'.$numberEmpliA.'/*');

 $rutaLAsist = glob('archivos/ListadeAsistencia/'.$numberEmpliA.'/*');

 $rutaIC = glob('archivos/Perfil/'.$numberEmpliA.'/*');

 $rutaCL = glob('archivos/CredencialLector/'.$numberEmpliA.'/*');

*/
 $sqlnumberEmployer ="DELETE FROM registro WHERE numero_empleado='$numberEmpliA'";
 $results = mysqli_query($conex,$sqlnumberEmployer);

if ($results) {

   foreach(glob('archivos/Solicitud/'.$numberEmpliA.'/*') as $archivos_carpeta)
   {
     if (is_dir($archivos_carpeta))
     {
       eliminarDir($archivos_carpeta);
     }
     else
     {
       unlink($archivos_carpeta);
     }
   }
   rmdir('archivos/Solicitud/'.$numberEmpliA);
 //////////////////////////////////////////////////////

   foreach(glob('archivos/Curriculum/'.$numberEmpliA.'/*') as $archivos_carpeta)
   {
     if (is_dir($archivos_carpeta))
     {
       eliminarDir($archivos_carpeta);
     }
     else
     {
       unlink($archivos_carpeta);
     }
   }
   rmdir('archivos/Curriculum/'.$numberEmpliA);
///////////////////////////////////////////////////////////////////
foreach(glob('archivos/Curp/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/Curp/'.$numberEmpliA);
//////////////////////////////////////////////////////////////////
foreach(glob('archivos/ActadeNacimiento/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/ActadeNacimiento/'.$numberEmpliA);
/////////////////////////////////////////////////////////////////
foreach(glob('archivos/CartillaMilitar/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/CartillaMilitar/'.$numberEmpliA);
////////////////////////////////////////////////////////////////
foreach(glob('archivos/Domicilio/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/Domicilio/'.$numberEmpliA);
/////////////////////////////////////////////////////////////////
foreach(glob('archivos/CopiadeNombramiento/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/CopiadeNombramiento/'.$numberEmpliA);
////////////////////////////////////////////////////////////////
foreach(glob('archivos/NiveldeEstudios/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/NiveldeEstudios/'.$numberEmpliA);
/////////////////////////////////////////////////////////////////
foreach(glob('archivos/CartadeRecomendacionUno/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/CartadeRecomendacionUno/'.$numberEmpliA);
//////////////////////////////////////////////////////////////////
foreach(glob('archivos/CartadeRecomendacionDos/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/CartadeRecomendacionDos/'.$numberEmpliA);
/////////////////////////////////////////////////////////////////
foreach(glob('archivos/AltadelSeguro/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/AltadelSeguro/'.$numberEmpliA);
////////////////////////////////////////////////////////////////
foreach(glob('archivos/DomiciliarioUno/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/DomiciliarioUno/'.$numberEmpliA);
////////////////////////////////////////////////////////////////
foreach(glob('archivos/DomiciliarioDos/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/DomiciliarioDos/'.$numberEmpliA);
///////////////////////////////////////////////////////////////
foreach(glob('archivos/Croquis/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/Croquis/'.$numberEmpliA);
///////////////////////////////////////////////////////////////////
foreach(glob('archivos/RecibodePago/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/RecibodePago/'.$numberEmpliA);
/////////////////////////////////////////////////////////////////
foreach(glob('archivos/FotografiaInfantil/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/FotografiaInfantil/'.$numberEmpliA);
/////////////////////////////////////////////////////////////////
foreach(glob('archivos/ListadeAsistencia/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/ListadeAsistencia/'.$numberEmpliA);
////////////////////////////////////////////////////////////////
foreach(glob('archivos/Perfil/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/Perfil/'.$numberEmpliA);
/////////////////////////////////////////////////////////////
foreach(glob('archivos/CredencialLector/'.$numberEmpliA.'/*') as $archivos_carpeta)
{
  if (is_dir($archivos_carpeta))
  {
    eliminarDir($archivos_carpeta);
  }
  else
  {
    unlink($archivos_carpeta);
  }
}
rmdir('archivos/CredencialLector/'.$numberEmpliA);
////////////////////////////////////////////////////////////

         echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
       echo "<link rel='stylesheet' href='css/bootstrap-grid.css'>";
       echo "<link rel='stylesheet' href='css/bootstrap-reboot.min.css'>";

       echo "<div class='alert alert-warning' role='alert'>";
       echo "Se ha eliminado el registrado correctamete";
       echo "<a href='menu.php' class='alert-link'>   dale click para continuar en la plataforma</a>";
       echo "</div>";



///else
}else {

  echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
echo "<link rel='stylesheet' href='css/bootstrap-grid.css'>";
echo "<link rel='stylesheet' href='css/bootstrap-reboot.min.css'>";

echo "<div class='alert alert-warning' role='alert'>";
echo "no existe el registro";
echo "<a href='menu.php' class='alert-link'>   dale click para continuar en la plataforma</a>";
echo "</div>";

}



 ?>
