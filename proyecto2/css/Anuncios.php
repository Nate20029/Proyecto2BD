<?php   include_once ("conexion.php");  $db=CConexion::ConexionBD();
$filas=$db->query("SELECT * FROM Anuncios ORDER BY id ASC ")->fetchAll(PDO::FETCH_OBJ)?>

<IDOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.e">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href ="css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">MOVIEBASE</h2>
            </div>
            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="principal.html" class="nav__links">Inicio</a>
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
    
    <div class="row">
        <div class="col-sm-4"><img src="https://images7.memedroid.com/images/UPLOADED703/61be8f97ad02a.jpeg" height="300" width="300"></div>
        <div class="col-sm-8">
            <h3>Listado</h3>
            <table class="table table-hover">
                <thead><th>ID ANUNCIO</th><th>NOMBRE ANUNCIO</th><th>LINK</th><th>EDITAR</th><th>ELIMINAR</th>
                </thead>
                <tbody>
                    <?php foreach ($filas as $fila): ?>
                        <tr>
                            <td><?php echo $fila->id; ?></td>
                            <td><?php echo $fila->nombre_anuncio; ?></td>
                            <td><?php echo $fila->link; ?></td>
                            <td><a class="btn btn-info glyphicon glyphicon-pencil" href="formeditarA.php?id=<?php echo $fila->id;?>"></a></td>
                            <td><a class="btn btn-danger glyphicon glyphicon-trash" href="eliminarA.php?id=<?php echo $fila->id; ?>"></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a class="btn btn-success" href="formagregarA.php">Agregar</a>
        </div>
        
    </div>
    
    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">MOVIEBASE</h2>
                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
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
                </ul>
            </nav>
            <form class="footer__form" action="https://formspree.io/f/mayvpyqp" method="POST">
                <h2 class="footer__newsletter">Inicia Sesion</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                    <input type="submit" value="Iniciar Sesion" class="footer__submit">
                </div>
            </form>
        </section>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>