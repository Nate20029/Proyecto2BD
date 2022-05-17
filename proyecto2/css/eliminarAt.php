<?php 
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 $id=$_GET['id'];
 if ($db->query("DELETE FROM Anunciantes WHERE id=$id")) {
 	header("location:Anunciantes.php");
 } else {
 	echo 'Error al eliminar los datos';
 }
 ?>