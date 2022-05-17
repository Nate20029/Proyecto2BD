<?php 
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 $id=$_GET['id'];
 if ($db->query("DELETE FROM perfiles WHERE id=$id")) {
 	header("location:Perfiles.php");
 } else {
 	echo 'Error al eliminar los datos';
 }
 ?>