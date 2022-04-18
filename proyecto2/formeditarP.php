<?php   
$id_sp=$_GET['id_sp'];
include_once ("conexion.php");  $db=CConexion::ConexionBD();
$peliseries=$db->query("SELECT * FROM serie_pelicula WHERE id_sp=$id_sp")->fetchAll(PDO::FETCH_OBJ);
$peliserie=$peliseries[0];

?>
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
                    <a href="principal.php" class="nav__links">Home</a>
                </li>
                <li class="nav__items">
                    <a href="Anunciantes.php" class="nav__links">Anunciantes</a>
                </li>
                <li class="nav__items">
                    <a href="Anuncios.php" class="nav__links">Anuncios</a>
                </li>
                <li class="nav__items">
                    <a href="Usuarios.php" class="nav__links">Usuarios</a>
                </li>
                <li class="nav__items">
                    <a href="inicio.php" class="nav__links">Cerrar sesion</a>
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
            <CENTER><h3 class="jumbotron">FORMULARIO EDITAR</h3></CENTER>
            <form action="funeditarP.php" method="post" class="form-horizontal">
                <div class="form-group">
                <label class="col-sm-2 control-label">ID</label>
                <div class="col-sm-10">
                    <input value="<?php echo $peliserie->id_sp; ?>" name='id_sp' type="text" class="form-control" placeholder="Escriba el código" readonly>
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">NOMBRE SERIE/PELICULA</label>
                <div class="col-sm-10">
                    <input value="<?php echo $peliserie->nombre_serie_pelicula; ?>" name="nombre_serie_pelicula" type="text" class="form-control" placeholder="Escriba el nombre en MAYUSCULA">
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">IMAGEN</label>
                <div class="col-sm-10">
                    <input value="<?php echo $peliserie->imagen; ?>" name="imagen" type="text" class="form-control" placeholder="Pegue el link de la IMAGEN">
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">LINK</label>
                <div class="col-sm-10">
                    <input value="<?php echo $peliserie->links; ?>" name="links" type="text" class="form-control" placeholder="Pegue el link de la PELICULA/SERIE">
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">DIRECTOR</label>
                <div class="col-sm-10">
                    <input value="<?php echo $peliserie->director; ?>" name="director" type="text" class="form-control" placeholder="Escriba el nombre en MAYUSCULA">
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">ESTRENO</label>
                <div class="col-sm-10">
                    <input value="<?php echo $peliserie->estreno; ?>" name="estreno" type="text" class="form-control" placeholder="Escriba la fecha en este fomato: 2022-12-28">
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">DURACION</label>
                <div class="col-sm-10">
                    <input value="<?php echo $peliserie->duracion; ?>" name="duracion" type="text" class="form-control" placeholder="Escriba la duracion en este fomato: 00:00:00">
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Editar</button>
                </div>
                </div>
            </form>
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