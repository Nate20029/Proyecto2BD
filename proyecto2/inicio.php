<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/login.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="login.php" class="formulario__login" method = "post">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name = "correoI">
                        <input type="password" placeholder="Contraseña" name = "contra">
                        <input type="submit" name = "btentrar" class = "bt" value="Entrar">
                    </form>

                    <!--Register-->
                    <form action="index.php" class="formulario__register" method = "post">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name = "nombre_completo"> 
                        <input type="text" placeholder="Correo Electronico" name = "correo">
                        <input type="text" placeholder="Usuario" name = "usuario">
                        <input type="password" placeholder="Contraseña" name = "contrasena">
                        <!--<a href="index.php">-->
                        <input type="submit" name = "btenviar" class = "bt" value="Registrarse">
                        <!--</a>-->
                    </form>
                </div>
            </div>

        </main>

        <script src="js/script.js"></script>
</body>
<?php
//elimiar cookie correo y perfil para cerrar la sesion
    setcookie("correoCK", "correo", time() - 30*24*60*60);
    setcookie("perfilCK", "perfil", time() - 30*24*60*60);

?>

</html>