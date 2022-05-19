<?php   include_once ("conexion.php");  $db=CConexion::ConexionBD();
$filas=$db->query("SELECT * FROM Anunciante ")->fetchAll(PDO::FETCH_OBJ)?>

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
    <title>MOVIBASE ADMIN</title>
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
        <div class="col-sm-8">
            <CENTER><h3 class="jumbotron">FORMULARIO AGREGAR</h3></CENTER>
            <form action="funagregarAt.php" method="post" class="form-horizontal">
                <div class="form-group">
                <label class="col-sm-2 control-label">NOMBRE DE ANUNCIANTE</label>
                <div class="col-sm-10">
                    <input name='nombre_anunciante' type="text" class="form-control" placeholder="Escriba el nombre en MAYUSCULA">
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">CORREO DE ANUNCIANTE</label>
                <div class="col-sm-10">
                    <input name="correo_anunciante" type="text" class="form-control" placeholder="Escriba el correo">
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">TELEFONO</label>
                <div class="col-sm-10">
                    <input name="telefono" type="text" class="form-control" placeholder="Escriba el telefono">
                </div>
               
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">ACEPTAR</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>