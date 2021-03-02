<?php



include("conexion.php");
$nombre= gethostname();
$usuario= $_POST['nombre'];
$contra= $_POST['contraseña'];

$consulta="SELECT usuario,password,tipo_us FROM login WHERE usuario='$usuario'";
$result = mysqli_query($conex,$consulta);
if ($result) {

$row =mysqli_fetch_array($result);
$cusuario=$row[0];
$ccontra=$row[1];
$tip=$row[2];
$result->close();

if($usuario===$cusuario && $contra===$ccontra){
$consulta2="UPDATE login SET activo='1',pcnom='$nombre' WHERE usuario='$usuario'";
if($result2 = mysqli_query($conex,$consulta2)){
header("Location: menu.php");
}

else{

header("Location: index.php");
}

}

if($usuario===$cusuario && $cusuario==="usuario" && $contra===$ccontra){
$consulta2="UPDATE login SET activo='1',pcnom='$nombre' WHERE usuario='$usuario'";
if($result2 = mysqli_query($conex,$consulta2)){
header("Location:documentacion_chimalUsuario/menu.php");
}

else{

header("Location: ../index.php");
}

}
}


?>
