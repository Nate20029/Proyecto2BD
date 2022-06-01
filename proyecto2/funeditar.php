<?php 
$id_sp=$_POST['id_sp'];
$nombre_serie_pelicula=$_POST['nombre_serie_pelicula'];
$imagen=$_POST['imagen'];
$links=$_POST['links'];
$director=$_POST['director'];
$estreno=$_POST['estreno'];
$duracion=$_POST['duracion'];
$usuario=$_COOKIE['correoCK'];

try{
include_once ("conexion.php");
$conn = CConexion::ConexionBD();

 $sql="UPDATE serie_pelicula SET nombre_serie_pelicula='$nombre_serie_pelicula', imagen='$imagen', links='$links', director='$director', estreno='$estreno', duracion='$duracion'  WHERE id_sp='$id_sp'; 

 CREATE OR REPLACE FUNCTION editar_pelicula_serie()
 RETURNS TRIGGER AS
 $$
 BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Edito Pelicula o Serie');
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