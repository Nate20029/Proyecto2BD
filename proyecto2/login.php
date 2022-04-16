<?php

include_once ("conexion.php");
$conn = CConexion::ConexionBD();

$bandera = 0;

if(isset($_POST['btentrar'])){
    $correo = $_POST['correoI'];
    $contra = $_POST['contra'];
	
    }
  
    //contraseña hash
$pass_hash = md5($contra);

$sql = 'SELECT id, email, pass_hash
		FROM cuentas';

$statement = $conn->query($sql);

// get all publishers
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($publishers) {
	// show the publishers
	foreach ($publishers as $publisher) {
		if($publisher['pass_hash'] == $pass_hash AND $publisher['email'] == $correo){
			include_once ("principal.php");
			$bandera = 1;
		}

	}
	if($bandera != 1)
	{
		include_once ("inicio.php");
		$bandera = 0;
		echo "<script>alert('Correo o contraseña incorrecta');</script>";
	}
}

?>