<?php
include("conexion.php");
 $nombre= gethostname();
$consulta="UPDATE login set activo='0', pcnom='' WHERE pcnom='$nombre'";

$result=mysqli_query($conex,$consulta);

if($result){
  header("Location:index.php");
}
 ?>
