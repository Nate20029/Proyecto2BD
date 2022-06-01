<?php 
$id=$_POST['id'];
$nombre_anuncio=$_POST['nombre_anuncio'];
$link=$_POST['link'];
$usuario=$_COOKIE['correoCK'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql= "INSERT INTO Anuncios (nombre_anuncio,link) VALUES ('$nombre_anuncio','$link');
	 
	 CREATE OR REPLACE FUNCTION crear_anuncio()
	 RETURNS TRIGGER AS
	 $$
	 BEGIN
		 INSERT INTO bitacora(usuario, cambio) 
		 VALUES ('$usuario', 'Creo Anuncio');
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