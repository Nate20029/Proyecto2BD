<?php

include_once ("conexion.php");
$conn = CConexion::ConexionBD();

$nombre_perfil = $_GET['nombre'];
setcookie("perfilCK", $nombre_perfil, time() + 30*24*60*60);
include_once ("principal.php");

?>