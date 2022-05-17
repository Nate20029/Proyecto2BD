<?php 
$id=$_POST['id'];
$nombre_anuncio=$_POST['nombre_anuncio'];
$link=$_POST['link'];

include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 if ($db->query("UPDATE Anuncios SET nombre_anuncio='$nombre_anuncio', link='$link', WHERE id='$id'")) {
 	header("location:Anuncios.php");
 } else {
 	echo 'Error al editar los datos';
 }
 ?>