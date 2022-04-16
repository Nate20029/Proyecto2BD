<?php

try {
  include_once ("conexion.php");
  $conn = CConexion::ConexionBD();

  $tipoc = '';
  if(isset($_POST['btplan1'])){
    $tipoc = 'estandar';
    }
    else if(isset($_POST['btplan2'])){
    $tipoc = 'avanzada';
    }


  $sql = "UPDATE Cuentas SET tipo_cuenta = '$tipoc'
  WHERE (SELECT MAX(id) AS id FROM cuentas) = id";
  // use exec() because no results are returned
  $conn->exec($sql);
  //echo "New record created successfully";
} catch(PDOException $e) {
  //echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


include_once ("inicio.php");
?>