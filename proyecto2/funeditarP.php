<?php 
$id=$_POST['id'];
$nombre_perfil=$_POST['nombre_perfil'];
$usuario=$_COOKIE['correoCK'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql="UPDATE perfiles SET nombre_perfil='$nombre_perfil'  WHERE id='$id'; 
	
	 CREATE OR REPLACE FUNCTION editar_perfiles()
	 RETURNS TRIGGER AS
	 $$
	 BEGIN
		INSERT INTO bitacora(usuario, cambio) 
		VALUES ('$usuario', 'Edito Perfil');
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
