<?php
$nombre_archivo = $_FILES['fotografiaInfantil']['name'];
$tipo_archivo = $_FILES['fotografiaInfantil']['type'];
$size_archivo = $_FILES['fotografiaInfantil']['size'];

$numberEmpliA=$_POST['numeroEmpleadoFotografiaInfantil'];


$host = 'localhost';
$user = 'root';
$password = '';
$db = 'documentacion_chimalhuacan';



$conexion = mysqli_connect( $host, $user, $password,$db);
$files = glob('archivos/FotografiaInfantil/'.$numberEmpliA.'/*.pdf'); //obtenemos todos los nombres de los ficheros


$sql="UPDATE registro SET fotografia_infantil_PDF = '$nombre_archivo' WHERE numero_empleado=$numberEmpliA";
$result=mysqli_query($conexion,$sql);

$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/documentacion_chimal/archivos/FotografiaInfantil/'.$numberEmpliA.'/';
move_uploaded_file($_FILES['fotografiaInfantil']['tmp_name'],$carpeta_destino.$nombre_archivo);

foreach($files as $file){
    if(is_file($file))
    unlink($file); //elimino el fichero
}


header('Location:http://localhost/documentacion_chimal/modificar.php');

?>
