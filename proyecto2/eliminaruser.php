<?php 
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 $id=$_GET['id'];
 if ($db->query("DELETE FROM cuentas WHERE id=$id")) {
 	header("location:usuarios.php");
 } else {
 	echo 'Error al eliminar los datos';
 }
 ?>