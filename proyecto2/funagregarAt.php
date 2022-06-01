<?php 
$nombre_anunciante=$_POST['nombre_anunciante'];
$correo_anunciante=$_POST['correo_anunciante'];
$telefono=$_POST['telefono'];
$usuario=$_COOKIE['correoCK'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql="INSERT INTO Anunciante(nombre_anunciante,correo_anunciante,telefono) VALUES ('$nombre_anunciante','$correo_anunciante','$telefono');
	 
	CREATE OR REPLACE FUNCTION crear_anunciante()
	RETURNS TRIGGER AS
	$$
	BEGIN
		 INSERT INTO bitacora(usuario, cambio) 
		 VALUES ('$usuario', 'Creo Anunciante');
		 RETURN NEW;
	END;
	$$
	LANGUAGE 'plpgsql';";
	
	$conn->exec($sql);
	include_once ("Anunciantes.php"); 
	//echo "New record created successfully";
	} catch(PDOException $e) {
	//echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
	
?>

 