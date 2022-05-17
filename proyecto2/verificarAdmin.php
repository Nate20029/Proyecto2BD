<?php

include_once ("conexion.php");
$conn = CConexion::ConexionBD();

$correo = $_COOKIE['correoCK'];

$sql = 'SELECT email, c_admin 
        FROM cuentas';

$statement = $conn->query($sql);

$bandera = 0;
// get all publishers
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($publishers) {
    // show the publishers
    foreach ($publishers as $publisher) {
        if($publisher['email'] == $correo){
            if($publisher['c_admin'] == 1){
                include_once("peliculas.php");
            }
            else{
                $bandera = 1;
            }
            
        }

    }
    if($bandera == 1){
        echo "<script>alert('Usted no puede acceder a la pagina porque no es un Administrador');</script>";
        $bandera = 0;        
        include_once("principal.php");
    }
}

?>