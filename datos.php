
    <?php
    mysql_connect('127.0.0.1','root','');
    mysql_select_db('documentacion_chimalhuacan');
    if (is_callable($Accion)) {
    $Accion();
    }

    function GetDireccion(){
      header('Content-Type: application/json');
      $Direccion_labor = array();
      $Consulta_labor = mysql_query("SELECT * FROM direccion_laboral");
      while ($fila = mysql_fetch_assoc($Consulta_labor)) {
      $Direccion_labor[] = $fila;
    }

    echo json_encode($Direccion_labor);
}
function GetDepartamento(){
  header('Content-Type: application/json');
  $Departamento_labor = array();
  $Consulta_labor = mysql_query("SELECT * FROM departamento_laboral WHERE IdDireccion_Laboral = ".$_REQUEST['IdDepartamento_Laboral']);
  while ($fila = mysql_fetch_assoc($Consulta_labor)){
     $Departamento_labor[]= $fila;
  }
echo json_encode();
}


     ?>
