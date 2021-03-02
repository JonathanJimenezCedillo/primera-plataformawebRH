<?php
$server = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'documentacion_chimalhuacan';

try {
  $conex = mysqli_connect($server,$username,$password);
  mysqli_select_db($conex,$database);
} catch (PDOException $e) {
  die('falla de la conexion: '.$e->getMessage());
}

 ?>
