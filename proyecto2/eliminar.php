<?php
$usuario=$_COOKIE['correoCK'];
$id_sp=$_GET['id_sp'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql="DELETE FROM serie_pelicula WHERE id_sp='$id_sp';
	 
	 CREATE OR REPLACE FUNCTION eliminar_pelicula_serie()
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
	include_once ("peliculas.php"); 
	//echo "New record created successfully";
	} catch(PDOException $e) {
	//echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
?>