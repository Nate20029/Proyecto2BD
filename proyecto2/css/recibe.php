<?php
    if(isset($_POST['btenviar'])){
        $NC = $_POST['nombre_completo'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contra = $_POST['contrasena'];
    }
?>

<form action = "recibe.php" method = "get">
    <input type = "text" name = "txtmensaje2" value = "<?php echo $NC . " ". $correo ." ". $usuario . " ". $contra?>">

</form>