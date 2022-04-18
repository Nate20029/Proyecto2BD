<?php 
$id_sp=$_POST['id_sp'];
$nombre_serie_pelicula=$_POST['nombre_serie_pelicula'];
$imagen=$_POST['imagen'];
$links=$_POST['links'];
$director=$_POST['director'];
$estreno=$_POST['estreno'];
$duracion=$_POST['duracion'];

include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 if ($db->query("UPDATE serie_pelicula SET nombre_serie_pelicula='$nombre_serie_pelicula', imagen='$imagen', links='$links', director='$director', estreno='$estreno', duracion='$duracion'  WHERE id_sp='$id_sp'")) {
 	header("location:peliculas.php");
 } else {
 	echo 'Error al editar los datos';
 }
 ?>