<?php 
$id=$_POST['id'];
$nombre_com=$_POST['nombre_com'];
$userc=$_POST['userc'];
$email=$_POST['email'];
$tipo_cuenta=$_POST['tipo_cuenta'];
$c_admin=$_POST['c_admin'];
$usuario=$_COOKIE['correoCK'];

try{
	include_once ("conexion.php");
	$conn = CConexion::ConexionBD();
	
	$sql="UPDATE cuentas SET nombre_com='$nombre_com', userc='$userc', email='$email', tipo_cuenta='$tipo_cuenta', c_admin='$c_admin'  WHERE id='$id'; 
	
	 CREATE OR REPLACE FUNCTION editar_usuario()
	 RETURNS TRIGGER AS
	 $$
	 BEGIN
		INSERT INTO bitacora(usuario, cambio) 
		VALUES ('$usuario', 'Edito Usuario');
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


 