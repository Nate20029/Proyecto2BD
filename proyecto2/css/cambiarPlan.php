
<?php

try {
  include_once ("conexion.php");
  $conn = CConexion::ConexionBD();

  $tipoc = '';
  if(isset($_POST['plan1'])){
        $tipoc = 'estandar';
    }
    else if(isset($_POST['plan2'])){
        $tipoc = 'avanzada';
    }
    else if(isset($_POST['free'])){
        $tipoc = 'basica';
    }

    $email = $_COOKIE["correoCK"];

    $sql = "UPDATE Cuentas SET tipo_cuenta = '$tipoc'
    WHERE email = '$email'";
  // use exec() because no results are returned
  $conn->exec($sql);
  //echo "New record created successfully";
} catch(PDOException $e) {
  //echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


include_once ("inicio.php");
?>