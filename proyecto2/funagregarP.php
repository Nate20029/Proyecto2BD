<?php 
$nombre_perfil=$_POST['nombre_perfil'];
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();


 if ($db->query("INSERT INTO perfiles (nombre_perfil) VALUES ('$nombre_perfil')")) {
 	header("location:Perfiles.php");
 } else {
 	echo 'Error al agregar los datos';
 }
 ?>