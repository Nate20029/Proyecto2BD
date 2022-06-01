<?php 
/* USUARIO */
$userc=$_POST['_replyto'];
include_once ("conexion.php"); 
$db=CConexion::ConexionBD();
$usuario=$db->query("SELECT userc FROM cuentas WHERE email = $userc")->fetchAll(PDO::FETCH_OBJ);

/* EVENTO */
$botonP1="";
$botonP2="";
$botonP3="";

$botonA1="";
$botonA2="";
$botonA3="";

$botonAn1="";
$botonAn2="";
$botonAn3="";

$botonU1="";
$botonU2="";
$botonU3="";

if(isset($_POST['boton1']))$botonP1=$_POST['boton1'];
if(isset($_POST['boton2']))$botonP2=$_POST['boton2'];
if(isset($_POST['boton3']))$botonP3=$_POST['boton3'];

if(isset($_POST['boton4']))$botonA1=$_POST['boton4'];
if(isset($_POST['boton5']))$botonA2=$_POST['boton5'];
if(isset($_POST['boton6']))$botonA3=$_POST['boton6'];

if(isset($_POST['boton7']))$botonAn1=$_POST['boton7'];
if(isset($_POST['boton8']))$botonAn2=$_POST['boton8'];
if(isset($_POST['boton9']))$botonAn3=$_POST['boton9'];

if(isset($_POST['boton10']))$botonU1=$_POST['boton10'];
if(isset($_POST['boton11']))$botonU2=$_POST['boton11'];
if(isset($_POST['boton12']))$botonU3=$_POST['boton12'];

if($botonP1){
    $evento= 'Agrego';
    $cambio=$db->query("SELECT nombre_serie_pelicula FROM serie_pelicula WHERE id_sp = 1")->fetchAll(PDO::FETCH_OBJ);

}
if($botonP2){
    $evento= 'Elimino';
    $cambio=$db->query("SELECT nombre_serie_pelicula FROM serie_pelicula WHERE id_sp = 1")->fetchAll(PDO::FETCH_OBJ);

}
if($botonP3){
    $evento= 'Modifico';
    $cambio=$db->query("SELECT nombre_serie_pelicula FROM serie_pelicula WHERE id_sp = 1")->fetchAll(PDO::FETCH_OBJ);

}
if($botonA1){
    $evento= 'Agrego';
    $cambio=$db->query("SELECT nombre_anunciante FROM anunciantes WHERE id= 1")->fetchAll(PDO::FETCH_OBJ);
}
if($botonA2){
    $evento= 'Elimino';
    $cambio=$db->query("SELECT nombre_anunciante FROM anunciantes WHERE id= 1")->fetchAll(PDO::FETCH_OBJ);
}
if($botonA3){
    $evento= 'Modifico';
    $cambio=$db->query("SELECT nombre_anunciante FROM anunciantes WHERE id= 1")->fetchAll(PDO::FETCH_OBJ);
}
if($botonAn1){
    $evento= 'Agrego';
    $cambio=$db->query("SELECT nombre_anuncio FROM anuncios WHERE id= 1")->fetchAll(PDO::FETCH_OBJ);
}
if($botonAn2){
    $evento= 'Elimino';
    $cambio=$db->query("SELECT nombre_anuncio FROM anuncios WHERE id= 1")->fetchAll(PDO::FETCH_OBJ);
}
if($botonAn3){
    $evento= 'Modifico';
    $cambio=$db->query("SELECT nombre_anuncio FROM anuncios WHERE id= 1")->fetchAll(PDO::FETCH_OBJ);
}
if($botonU1){
    $evento= 'Agrego';
    $cambio=$db->query("SELECT userc FROM cuentas WHERE id= 1")->fetchAll(PDO::FETCH_OBJ);
}
if($botonU2){
    $evento= 'Elimino';
    $cambio=$db->query("SELECT userc FROM cuentas WHERE id= 1")->fetchAll(PDO::FETCH_OBJ);
}
if($botonU3){
    $evento= 'Modifico';
    $cambio=$db->query("SELECT userc FROM cuentas WHERE id= 1")->fetchAll(PDO::FETCH_OBJ);
}

$fecha=$db->query("SELECT CURRENT_DATE")->fetchAll(PDO::FETCH_OBJ);
$hora=$db->query("SELECT CURRENT_TIME")->fetchAll(PDO::FETCH_OBJ);

 if ($db->query("INSERT INTO bitacora (userc,evento,cambio,fecha,hora) VALUES ('$usuario','$evento','$cambio','$fecha','$hora')")) {
 	header("location:bitacora.php");
 } else {
 	echo 'Error al agregar los datos';
 }
 ?>