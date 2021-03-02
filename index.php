<?php

$host="127.0.0.1";
$user="root";
$password="";
$db="documentacion_chimalhuacan";

$conexion=mysqli_connect($host,$user,$password);
mysqli_select_db($conexion,$db);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.ico">
    <link rel="stylesheet" href="css/main.css">
    <title>Municipio de Chimalhuacán</title>
  </head>
  <body >
    <div class="loginbox">
      <img src="imagenes/avatar.png" class="avatarbox">
      <h1>Iniciar Sesión</h1>
      <form method="POST" action="operacion_guardar.php" >
        <br>

        <p>Nombre del Usuario</p>

        <input type="text" name="nombre" value="" placeholder="Inserte el Nombre del Usuario" required>
        <p>Contraseña</p>
        <input type="password" name="contraseña" value="" placeholder="Inserte la Contraseña del Usuario" required>
        <input type="submit" name="submit" value="Entrar">

      </form>

    </div>
    <script src="js/jquery-3.3.1.min.js"></script>

  </body>
</html>
