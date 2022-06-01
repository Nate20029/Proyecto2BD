<?php   include_once ("conexion.php");  $db=CConexion::ConexionBD();
$filas=$db->query("SELECT * FROM serie_pelicula ORDER BY id_sp ASC ")->fetchAll(PDO::FETCH_OBJ)?>

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
                    <a href="peliculas.php" class="nav__links">Peliculas/Series</a>
                </li>
                <li class="nav__items">
                    <a href="Anunciantes.php" class="nav__links">Anunciantes</a>
                </li>
                <li class="nav__items">
                    <a href="Anuncios.php" class="nav__links">Anuncios</a>
                </li>
                <li class="nav__items">
                    <a href="usuarios.php" class="nav__links">Usuarios</a>
                </li>
                <li class="nav__items">

                    <a href="bitacora.php" class="nav__links">Bitacora</a>
                </li>
                <li class="nav__items">
                    <a href="simulacion.php" class="nav__links">Simulacion</a>
                </li>
                <li class="nav__items">
                    <a href="reporteria.php" class="nav__links">Reporteria</a>

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
            <h3>Listado de SERIES Y PELICULAS</h3>
            <table class="table table-hover">
                <thead><th>ID SERIE/PELICULA</th><th>NOMBRE SERIE/PELICULA</th><th>IMAGEN</th><th>LINK</th><th>DIRECTOR</th><th>ESTRENO</th><th>DURACIÓN</th><th>EDITAR</th><th>ELIMINAR</th>
                </thead>
                <tbody>
                    <?php foreach ($filas as $fila): ?>
                        <tr>
                            <td><?php echo $fila->id_sp; ?></td>
                            <td><?php echo $fila->nombre_serie_pelicula; ?></td>
                            <td><?php echo $fila->imagen; ?></td>
                            <td><?php echo $fila->links; ?></td>
                            <td><?php echo $fila->director; ?></td>
                            <td><?php echo $fila->estreno; ?></td>
                            <td><?php echo $fila->duracion; ?></td>
                            <td><a class="btn btn-info glyphicon glyphicon-pencil" href="formeditar.php?id_sp=<?php echo $fila->id_sp;?>" name="boton3"></a></td>
                            <td><a class="btn btn-danger glyphicon glyphicon-trash" href="eliminar.php?id_sp=<?php echo $fila->id_sp; ?>" name="boton2"></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a class="btn btn-success" href="formagregar.php" name= "boton1">Agregar</a>
        </div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>