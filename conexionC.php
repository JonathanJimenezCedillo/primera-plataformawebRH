<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="documentacion_chimalhuacan";

$passwordAntiguo=$_POST['antiguo-Password'];
$newpassword=$_POST['contraseña'];


$conexion = mysqli_connect( $host, $user, "");
$db = mysqli_select_db( $conexion, $db);

$consultap = 'SELECT * FROM login';
$resultado = mysqli_query( $conexion, $consultap );



if ($columna = mysqli_fetch_array( $resultado))
{
	if($columna['password']==$passwordAntiguo){
    $consulta = "UPDATE login SET password='$newpassword'";
    $resultado1 = mysqli_query( $conexion, $consulta);

		if($consulta){
			echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
  	echo "<link rel='stylesheet' href='css/bootstrap-grid.css'>";
  echo "<link rel='stylesheet' href='css/bootstrap-reboot.min.css'>";

		echo "<div class='alert alert-warning' role='alert'>";
		echo "el password se ha cambiado correctamete";
		echo "<a href='index.php' class='alert-link'>   dale click para continuar en la plataforma</a>";
		echo "</div>";


	}

}else{
	echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
echo "<link rel='stylesheet' href='css/bootstrap-grid.css'>";
echo "<link rel='stylesheet' href='css/bootstrap-reboot.min.css'>";

echo "<div class='alert alert-warning' role='alert'>";
echo "el password no se ha cambiado correctamete";
echo "<a href='contra.php' class='alert-link'>   dale click para intentar otra vez</a>";
echo "</div>";
}
}else{
echo "no hay regisros";
}



	mysqli_close( $conexion );

?>
