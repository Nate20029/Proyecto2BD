<?php 
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

 $sql="INSERT INTO serie_pelicula ( nombre_serie_pelicula,imagen,links,director,estreno,duracion) VALUES ('$nombre_serie_pelicula','$imagen','$links','$director','$estreno','$duracion');
 
 CREATE OR REPLACE FUNCTION crear_pelicula_serie()
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