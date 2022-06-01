<?php 
$id=$_POST['id'];
$nombre_anunciante=$_POST['nombre_anunciante'];
$correo_anunciante=$_POST['correo_anunciante'];
$telefono=$_POST['telefono'];
$usuario=$_COOKIE['correoCK'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql="UPDATE Anunciante SET nombre_anunciante='$nombre_anunciante', correo_anunciante='$correo_anunciante', telefono='$telefono' WHERE id='$id'; 
	
	 CREATE OR REPLACE FUNCTION editar_anunciante()
	 RETURNS TRIGGER AS
	 $$
	 BEGIN
		INSERT INTO bitacora(usuario, cambio) 
		VALUES ('$usuario', 'Edito Anunciantes');
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

 