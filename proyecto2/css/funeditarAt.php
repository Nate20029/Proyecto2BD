<?php 
$id_sp=$_POST['id'];
$nombre_anunciante=$_POST['nombre_anunciante'];
$correo_anunciante=$_POST['correo_anunciante'];
$telefono=$_POST['telefono'];

include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 if ($db->query("UPDATE Anunciantes SET nombre_anunciante='$nombre_anunciante', correo_anunciante='$correo_anunciante', telefono='$telefono' WHERE id='$id'")) {
 	header("location:Anunciantes.php");
 } else {
 	echo 'Error al editar los datos';
 }
 ?>