<?php
$nombre_archivo = $_FILES['solicitudElaborada']['name'];
$tipo_archivo = $_FILES['solicitudElaborada']['type'];
$size_archivo = $_FILES['solicitudElaborada']['size'];

$numberEmpliA=$_POST['numeroEmpleadoSE'];



echo "$tipo_archivo";




$host = 'localhost';
$user = 'root';
$password = '';
$db = 'documentacion_chimalhuacan';



$conexion = mysqli_connect( $host, $user, $password,$db);
$files = glob('archivos/Solicitud/'.$numberEmpliA.'/*.pdf'); //obtenemos todos los nombres de los ficheros


$sql="UPDATE registro SET solicitud_elaborada_PDF = '$nombre_archivo' WHERE numero_empleado=$numberEmpliA";
$result=mysqli_query($conexion,$sql);

$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/documentacion_chimal/archivos/Solicitud/'.$numberEmpliA.'/';
move_uploaded_file($_FILES['solicitudElaborada']['tmp_name'],$carpeta_destino.$nombre_archivo);


foreach($files as $file){
    if(is_file($file))
    unlink($file); //elimino el fichero
}






header('Location:http://localhost/documentacion_chimal/modificar.php');


?>
