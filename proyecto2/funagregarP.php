<?php 
$nombre_perfil=$_POST['nombre_perfil'];
$correo = $_COOKIE["correoCK"];
$usuario=$_COOKIE['correoCK'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql="INSERT INTO perfiles (nombre_perfil, correo) VALUES ('$nombre_perfil','$correo');
	 
	 CREATE OR REPLACE FUNCTION crear_perfiles()
	 RETURNS TRIGGER AS
	 $$
	 BEGIN
		 INSERT INTO bitacora(usuario, cambio) 
		 VALUES ('$usuario', 'Creo Perfil');
		 RETURN NEW;
	 END;
	 $$
	 LANGUAGE 'plpgsql';";
	
	$conn->exec($sql);
	include_once ("Perfiles.php"); 
	//echo "New record created successfully";
	} catch(PDOException $e) {
	//echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
	
?>

 