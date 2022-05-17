<?php 
$id=$_POST['id'];
$nombre_com=$_POST['nombre_com'];
$userc=$_POST['userc'];
$email=$_POST['email'];
$tipo_cuenta=$_POST['tipo_cuenta'];
$c_admin=$_POST['c_admin'];

include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
 if ($db->query("UPDATE cuentas SET nombre_com='$nombre_com', userc='$userc', email='$email', tipo_cuenta='$tipo_cuenta', c_admin='$c_admin'  WHERE id='$id'")) {
 	header("location:usuarios.php");
 } else {
 	echo 'Error al editar los datos';
 }
 ?>