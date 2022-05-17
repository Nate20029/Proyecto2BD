<?php


include_once ("conexion.php");
$conn = CConexion::ConexionBD();

$correo = $_COOKIE["correoCK"];

$sql = 'SELECT email, tipo_cuenta 
        FROM cuentas';

$sql2 = "SELECT COUNT(*)FROM perfiles WHERE correo = '$correo'";

$statement = $conn->query($sql);

$statement2 = $conn->query($sql2);

// get all publishers
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

$publishers2 = $statement2->fetchAll(PDO::FETCH_ASSOC);



$bandera = 0;

if ($publishers) {
    // show the publishers
    foreach ($publishers as $publisher) {
        if($publisher['email'] == $correo){
            if($publisher['tipo_cuenta'] == 'basica')
            {
                foreach($publishers2 as $publisher2)
                {
                    if($publisher2['count'] < 1){
                        include_once("funagregarP.php");
                        //echo $publisher2['count'];
                    }
                    else{
                        $bandera = 1;
                    }
                    
                }
                
            }
            else if($publisher['tipo_cuenta'] == 'estandar')
            {
                foreach($publishers2 as $publisher2)
                {
                    if($publisher2['count'] < 4){
                        include_once("funagregarP.php");
                        //echo $publisher2['count'];
                    }
                    else{
                        $bandera = 1;
                    }
                    
                }
            }
            else if($publisher['tipo_cuenta'] == 'avanzada')
            {
                foreach($publishers2 as $publisher2)
                {
                    if($publisher2['count'] < 8){
                        include_once("funagregarP.php");
                        //echo $publisher2['count'];
                    }
                    else{
                        $bandera = 1;
                    }
                    
                }
            }
            
            //echo $publisher['nombre_com'] . '<br>';
        }/*
		else{
			//echo "<script>alert('Ha llegado al maximo de perfiles permitido ');</script>";
            echo $publisher['tipo_cuenta']. '<br>' .$publisher['email'].$correo;
			$bandera = 1;
			break;
			
		}*/
    }

	if($bandera == 1){
        echo "<script>alert('Ha llegado al maximo de perfiles permitido ');</script>";
        $bandera = 0;
		include_once("Perfiles.php");
        
	}
	
}
 
 ?>

?>