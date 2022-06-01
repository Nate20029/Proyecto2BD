
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
                        <a href="inicio.php" class="nav__links">Cerrar sesion</a>
                    </li>
                <img src="./images/close.svg" class="nav__close">
                </ul>
                <div class="nav__menu">
                    <img src="./images/menu.svg" class="nav__img">
                </div>
            </nav>
        </header>

        <div >
        <br><br><br>
            <form method="post" action="funbusqueda.php">
            <label> Search </label>
            <input type="text" name="search">
            <input type="submit" name="submit" >
        </div>

       

    </body>
</html>


<?php   include_once ("conexion.php");  $db=CConexion::ConexionBD();
if (isset($_POST["submit"])){
    $str = $_POST['search'];
    $sth = $db ->query("SELECT id_sp, nombre_serie_pelicula, director,duracion FROM serie_pelicula WHERE (nombre_serie_pelicula = '$str') OR (director = '$str')");
    $sth -> setFetchMode(PDO :: FETCH_OBJ);
    $sth -> execute();


    if ($row = $sth ->fetch()){
        ?>
        <br><br><br>
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Director</th>
                <th>Duracion</th>
            </thead>
            <tr>
                <td><?php echo $row ->id_sp; ?></td>
                <td><?php echo $row ->nombre_serie_pelicula; ?></td>
                <td><?php echo $row ->director; ?></td>
                <td><?php echo $row ->duracion; ?></td>
            </tr>
        </table>
        <?php             
    }
       
    else{
        echo "Name Does not exist";
    }
}

?>


    

