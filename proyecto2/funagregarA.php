<?php 
$id=$_POST['id'];
$nombre_anuncio=$_POST['nombre_anuncio'];
$link=$_POST['link'];

include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 if ($db->query("INSERT INTO Anuncios (nombre_anuncio,link) VALUES ('$nombre_anuncio','$link')")) {
 	header("location:Anuncios.php");
 } else {
 	echo 'Error al agregar los datos';
 }
 ?>