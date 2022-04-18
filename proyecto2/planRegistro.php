<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIBASE</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="Aprende CSS desde cero">
    <meta name="description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">


    <meta property="og:type" content="website">
    <meta property="og:url" content="https://alexcgdesign.github.io">
    <meta property="og:title" content="Aprende CSS desde cero">
    <meta property="og:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="og:image" content="https://alexcgdesign.github.io/images/css.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.jordanalex.com/">
    <meta property="twitter:title" content="Aprende CSS desde cero">
    <meta property="twitter:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="twitter:image" content="https://alexcgdesign.github.io/images/css.jpg">
</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">MOVIEBASE</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="inicio.php" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Blog</a>
                </li>

               <img src="./images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        
        </nav>

    </header>

    <main>


        <section class="price container">
            <h2 class="subtitle">Obten el plan perfecto para ti</h2>

            <div class="price__table">
                <div class="price__element">
                    <p class="price__name">Cuenta Basica</p>
                    <h3 class="price__price">GRATIS</h3>

                    <div class="price__items">
                        <p class="price__features">Acceso a todas las peliculas</p>
                        <p class="price__features">1 perfil</p>
                        <p class="price__features">Full HD</p>
                    </div>

                    <a href="inicio.php" class="price__cta">Empieza ahora</a>
                </div>

                <form action = "updateplan1.php" class="formulario__register" method = "post">
                    <div class="price__element price__element--best">
                        <p class="price__name">Cuenta Estandar</p>
                        <h3 class="price__price">$30/mes</h3>

                        <div class="price__items">
                            <p class="price__features">Acceso a todas las peliculas</p>
                            <p class="price__features">4 perfiles</p>
                            <p class="price__features">4K</p>
                        </div>
                        <!--<a type = "submit "href="updateplan1.php" name = "btplan1" class="price__cta">Empieza ahora</a>-->
                        <input type="submit" name = "btplan1" class="price__cta" value="Empieza ahora">
                    </div>
                </form>

                <form action = "updateplan1.php" class="formulario__register" method = "post">
                    <div class="price__element">
                        <p class="price__name">Cuenta Avanzada</p>
                        <h3 class="price__price">$40/mes</h3>

                        <div class="price__items">
                            <p class="price__features">Acceso a todas las peliculas</p>
                            <p class="price__features">8 perfiles</p>
                            <p class="price__features">4K</p>
                        </div>

                        <input type="submit" name = "btplan2" class="price__cta" value="Empieza ahora">
                    </div>
                </form>

            </div>
        </section>

    </main>


    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

<?php

//en este php inserta los usuarios registrados, y los guarda con cuenta basica, ya si el usuario hace click en otro plan, se le cambia

try {
  include_once ("conexion.php");
  $conn = CConexion::ConexionBD();

  if(isset($_POST['btenviar'])){
    $NC = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contrasena'];
    }

  
    //contraseña hash
  $pass_hash = md5($contra);


  $sql = "INSERT INTO Cuentas (nombre_com, userc, email, pass_hash, tipo_cuenta, c_admin)
  VALUES ('$NC','$usuario','$correo','$pass_hash', 'basica', 0)";
  // use exec() because no results are returned
  $conn->exec($sql);
  //echo "New record created successfully";
} catch(PDOException $e) {
  //echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


</html>