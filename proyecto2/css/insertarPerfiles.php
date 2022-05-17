<?php

try {
    include_once ("conexion.php");
    $conn = CConexion::ConexionBD();
  
    $correo = $_COOKIE["correoCK"];
    //$nom_perfil = $_GET['name'];
    /*if(isset($_POST['btperfiles'])){
      $nom_perfil = $_POST['name'];
      }*/

    $nom_perfil = $_GET['var'];
  
    $sql = "INSERT INTO perfiles (nombre_perfil, correo)
    VALUES ('$nom_perfil','$correo')";
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "New record created successfully";
  } catch(PDOException $e) {
    //echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;


?>