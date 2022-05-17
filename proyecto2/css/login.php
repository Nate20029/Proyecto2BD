<?php

include_once ("conexion.php");
$conn = CConexion::ConexionBD();

$bandera = 0;
$cont = 1;

if(isset($_POST['btentrar'])){
    $correo = $_POST['correoI'];
    $contra = $_POST['contra'];
	
	if( isset($_COOKIE["contadorCK"]) ){
		setcookie("contadorCK",$_COOKIE["contadorCK"] + 1 , time() + 30*24*60*60);
	}
	else{
		setcookie("contadorCK", 1, time() + 30*24*60*60);
	}
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
			setcookie("correoCK", $correo, time() + 30*24*60*60);
			$bandera = 1;
			setcookie("contadorCK", 1, time() - 30*24*60*60);
			$cont = 1;
			include_once ("Perfiles.php");
		}

	}
	if($bandera != 1)
	{
		setcookie("correoCK", "correo", time() - 30*24*60*60);
		$bandera = 0;
		$cont = $_COOKIE["contadorCK"]+1;
		echo "<script>alert('Correo o contraseña incorrecta, Intentos: $cont');</script>";
		if($cont >= 3){
			include_once ("maxIntentos.php");
		}
		else{
			include_once ("inicio.php");
		}
		
	}
}

?>