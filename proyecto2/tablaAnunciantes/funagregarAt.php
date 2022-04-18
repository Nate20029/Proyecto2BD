<?php 
$nombre_serie_pelicula=$_POST['nombre_serie_pelicula'];
$imagen=$_POST['imagen'];
$links=$_POST['links'];
$director=$_POST['director'];
$estreno=$_POST['estreno'];
$duracion=$_POST['duracion'];
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 if ($db->query("INSERT INTO serie_pelicula ( nombre_serie_pelicula,imagen,links,director,estreno,duracion) VALUES ('$nombre_serie_pelicula','$imagen','$links','$director','$estreno','$duracion')")) {
 	header("location:peliculas.php");
 } else {
 	echo 'Error al agregar los datos';
 }
 ?>