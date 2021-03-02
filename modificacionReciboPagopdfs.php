<?php
$nombre_archivo = $_FILES['reciboPago']['name'];
$tipo_archivo = $_FILES['reciboPago']['type'];
$size_archivo = $_FILES['reciboPago']['size'];

$numberEmpliA=$_POST['numeroEmpleadoReciboPago'];


$host = 'localhost';
$user = 'root';
$password = '';
$db = 'documentacion_chimalhuacan';



$conexion = mysqli_connect( $host, $user, $password,$db);
$files = glob('archivos/RecibodePago/'.$numberEmpliA.'/*.pdf'); //obtenemos todos los nombres de los ficheros


$sql="UPDATE registro SET recibo_de_pago_PDF = '$nombre_archivo' WHERE numero_empleado=$numberEmpliA";
$result=mysqli_query($conexion,$sql);

$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/documentacion_chimal/archivos/RecibodePago/'.$numberEmpliA.'/';
move_uploaded_file($_FILES['reciboPago']['tmp_name'],$carpeta_destino.$nombre_archivo);

foreach($files as $file){
    if(is_file($file))
    unlink($file); //elimino el fichero
}


header('Location:http://localhost/documentacion_chimal/modificar.php');

?>
