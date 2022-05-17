<?php 
$nombre_perfil=$_POST['nombre_perfil'];
include_once ("conexion.php"); 
$correo = $_COOKIE["correoCK"];
$db=CConexion::ConexionBD();
 if ($db->query("INSERT INTO perfiles (nombre_perfil, correo) VALUES ('$nombre_perfil','$correo')")) {
 	header("location:Perfiles.php");
 } else {
 	echo 'Error al agregar los datos';
 }
 ?>