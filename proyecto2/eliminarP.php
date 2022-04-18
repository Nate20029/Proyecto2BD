<?php 
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 $id_sp=$_GET['id_sp'];
 if ($db->query("DELETE FROM serie_pelicula WHERE id_sp=$id_sp")) {
 	header("location:Perfiles.php");
 } else {
 	echo 'Error al eliminar los datos';
 }
 ?>