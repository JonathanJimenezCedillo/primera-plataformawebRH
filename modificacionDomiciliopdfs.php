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

$nombre_archivo = $_FILES['domicilio']['name'];
$tipo_archivo = $_FILES['domicilio']['type'];
$size_archivo = $_FILES['domicilio']['size'];

$numberEmpliA=$_POST['numeroEmpleadoDomicilio'];



$host = 'localhost';
$user = 'root';
$password = '';
$db = 'documentacion_chimalhuacan';



$conexion = mysqli_connect( $host, $user, $password,$db);
$files = glob('archivos/Domicilio/'.$numberEmpliA.'/*.pdf'); //obtenemos todos los nombres de los ficheros


$sql="UPDATE registro SET domicilio_PDF = '$nombre_archivo' WHERE numero_empleado=$numberEmpliA";
$result=mysqli_query($conexion,$sql);

$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/documentacion_chimal/archivos/Domicilio/'.$numberEmpliA.'/';
move_uploaded_file($_FILES['domicilio']['tmp_name'],$carpeta_destino.$nombre_archivo);

foreach($files as $file){
    if(is_file($file))
    unlink($file); //elimino el fichero
}



header('Location:http://localhost/documentacion_chimal/modificar.php');

?>
