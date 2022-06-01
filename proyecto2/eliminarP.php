<?php 
$usuario=$_COOKIE['correoCK'];
$id=$_GET['id'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql="DELETE FROM perfiles WHERE id='$id';
	 
	 CREATE OR REPLACE FUNCTION eliminar_perfiles()
	 RETURNS TRIGGER AS
	 $$
	 BEGIN
		 INSERT INTO bitacora(usuario, cambio) 
		 VALUES ('$usuario', 'Elimino Perfil');
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

 