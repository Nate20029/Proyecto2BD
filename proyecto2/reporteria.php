

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
            <h3>Reporteria</h3><br><br>

            <h4>●El top 5 de contenido visto en cada hora, de 9:00 a.m a 1:00 a.m para un mes dado</h4><br><br>
            
            <!-- Datos de simulacion -->

            <form action="reporteria.php" method="post" class="form-horizontal">
            <h5>De que mes desea consultar:</h5>
            <input name="fechaR" type="text" class="form-control" placeholder="Ejemplo: 01"></input><br><br>
            
            <button  name = "btenviarR" type="submit" class="btn btn-success">Ejecutar</button>

            </form>

            <?php   
            try{
            if(isset($_POST['btenviarR']))
            {
                $mes = $_POST['fechaR'];
                      

            include_once ("conexion.php");  $db=CConexion::ConexionBD();
            $filas=$db->query("SELECT serie_pelicula, COUNT(serie_pelicula)  as cantidad from reproducciones
            where extract (month from fecha ) = $mes
            and extract (hour from hora_inicial) not between 1 and 8 
            group by serie_pelicula order by cantidad desc limit 5;")->fetchAll(PDO::FETCH_OBJ);
            }
            else{
                include_once ("conexion.php");  $db=CConexion::ConexionBD();
                $filas=$db->query("SELECT serie_pelicula, COUNT(serie_pelicula)  as cantidad from reproducciones
                where extract (month from fecha ) = 01
                and extract (hour from hora_inicial) not between 1 and 8 
                group by serie_pelicula order by cantidad desc limit 5;")->fetchAll(PDO::FETCH_OBJ);
            }
            }
            catch(PDOException $e){
               
            }
            
            
            ?>

            <table class="table table-hover">
                <br>
                <h4>Si no ha ingresado un mes a consultar el que le muestra predeterminadamente es del mes 01</h4>
                <thead><th>SERIE_PELICULA</th><th>COUNT</th>
                </thead>
                <tbody>
                    <?php foreach ($filas as $fila): ?>
                        <tr>
                            <td><?php echo $fila->serie_pelicula; ?></td>
                            <td><?php echo $fila->cantidad; ?></td>


                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>


        <div class="col-sm-8">
            <br><br>
        <h4>●El top 10 de los términos que los usuarios buscan (no necesariamente debe estar el contenido, actores, etc., en la plataforma)</h4><br>
            
            <!-- Datos de simulacion -->

            <?php   
            try{
                
            include_once ("conexion.php");  $db=CConexion::ConexionBD();
            $filas2=$db->query("SELECT * FROM busqueda")->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e){
               
            }
            
            ?>

            <table class="table table-hover">
                <thead><th>BUSCADOR</th><th>COUNT</th>
                </thead>
                <tbody>
                    <?php foreach ($filas2 as $fila): ?>
                        <tr>
                            <td><?php echo $fila->buscador; ?></td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>