<?php 
$id_sp=$_POST['id'];
$nombre_anunciante=$_POST['nombre_anunciante'];
$correo_anunciante=$_POST['correo_anunciante'];
$telefono=$_POST['telefono'];

include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 if ($db->query("INSERT INTO Anunciante ( nombre_anunciante,correo_anunciante,telefono) VALUES ('$nombre_anunciante','$correo_anunciante','$telefono')")) {
 	header("location:Anunciantes.php");
 } else {
 	echo 'Error al agregar los datos';
 }
 ?>