<?php 
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
$id=$_GET['id'];
$usuario=$_COOKIE['correoCK'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql="DELETE FROM Anuncios WHERE id='$id';
	 
	 CREATE OR REPLACE FUNCTION eliminar_anuncio()
	 RETURNS TRIGGER AS
	 $$
	 BEGIN
		 INSERT INTO bitacora(usuario, cambio) 
		 VALUES ('$usuario', 'Creo Pelicula o Serie');
		 RETURN NEW;
	 END;
	 $$
	 LANGUAGE 'plpgsql';";
	
	$conn->exec($sql);
	include_once ("Anuncios.php"); 
	//echo "New record created successfully";
	} catch(PDOException $e) {
	//echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
?>

