<?php

try {
  include_once ("conexion.php");
  $conn = CConexion::ConexionBD();

  if(isset($_POST['btenviar'])){
    $NC = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contrasena'];
    }
  
    //contraseña hash
  $pass_hash = md5($contra);


  $sql = "INSERT INTO Cuentas (nombre_com, userc, email, pass_hash, tipo_cuenta, c_admin)
  VALUES ('$NC','$usuario','$correo','$pass_hash', 'basica', 0)";
  // use exec() because no results are returned
  $conn->exec($sql);
  //echo "New record created successfully";
} catch(PDOException $e) {
  //echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>