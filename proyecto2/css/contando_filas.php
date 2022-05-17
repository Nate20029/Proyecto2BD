<?php

try {
  include_once ("conexion.php");
  $conn = CConexion::ConexionBD();

  // sql to create table
  $sql = "SELECT COUNT(*) FROM cuentas";
  // use exec() because no results are returned
  $conn->exec($sql);
  //$stmt = $this->connect()->query($sql);
  $count = $conn->fetchColumn();
  echo $count;
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>