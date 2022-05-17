<?php 
$id=$_POST['id'];
$nombre_perfil=$_POST['nombre_perfil'];

include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 if ($db->query("UPDATE perfiles SET nombre_perfil='$nombre_perfil'  WHERE id='$id'")) {
 	header("location:Perfiles.php");
 } else {
 	echo 'Error al editar los datos';
 }
 ?>