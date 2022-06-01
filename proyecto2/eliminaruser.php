<?php 
$usuario=$_COOKIE['correoCK'];
$id=$_GET['id'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql="DELETE FROM cuentas WHERE id='$id';
	 
	 CREATE OR REPLACE FUNCTION eliminar_usuario()
	 RETURNS TRIGGER AS
	 $$
	 BEGIN
		 INSERT INTO bitacora(usuario, cambio) 
		 VALUES ('$usuario', 'Elimino User');
		 RETURN NEW;
	 END;
	 $$
	 LANGUAGE 'plpgsql';";
	
	$conn->exec($sql);
	include_once ("usuarios.php"); 
	//echo "New record created successfully";
	} catch(PDOException $e) {
	//echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
?>
 