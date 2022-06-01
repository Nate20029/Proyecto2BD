<?php   
$str = $_POST["search"];
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
if (isset($_POST["submit"])){
    $sql = "INSERT INTO busqueda(buscador) VALUES ('$str')";
    $db->exec($sql);
    include_once ("busqueda.php"); 
} else {
    echo 'Error al agregar los datos';
}
?>

