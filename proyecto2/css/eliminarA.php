<?php 
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 $id=$_GET['id'];
 if ($db->query("DELETE FROM Anuncios WHERE id=$id")) {
 	header("location:Anuncios.php");
 } else {
 	echo 'Error al eliminar los datos';
 }
 ?>