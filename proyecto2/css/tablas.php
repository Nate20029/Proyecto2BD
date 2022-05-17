<?php

try {
  include_once ("conexion.php");
  $conn = CConexion::ConexionBD();

  // sql to create table
  $sql = "CREATE TABLE Cuentas (
  id SERIAL PRIMARY KEY,
  nombre_com VARCHAR(60) NOT NULL,
  userC VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  pass_hash VARCHAR(50) NOT NULL,
  tipo_cuenta VARCHAR(30) NOT NULL,
  c_admin INT NOT NULL
  )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table Cuentas created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>