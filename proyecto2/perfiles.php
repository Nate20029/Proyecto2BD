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
                    <a href="inicio.html" class="nav__links">Inicio</a>
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
    <div class="container pb-5">
        <div class="row justify-content-center text-center pt-5 mt-5">
             <div class="col-md-6">
                <h3>¿Quién esta ingresando ahora?</ha>
                 <div class="form-group">
                 <h4 id="nohay" class="text-info">No hay perfiles registrados, para comenzar registre uno</h4>
                 </div>
            </div>
        </div>
        <div class="row justify-content-center text center">
            <div class="col-md-4 col-sm-4 col-xl-4 col-lg-2 pb-2 text-center perfiles">
                <button class="btn bg-primary" data-toggle="modal" data-target="#accesousuario"> 
                    <img src="images/8.png" width="150px" alt="" srcset="">
                </button>
                <h4>USUARIO 1 </h4>
                <!-- Inicio Modal -->
                <div class="modal fade" id="accesousuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">INGRESO AL PERFIL</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                        <div class="modal-body">
                            <h4>Bienvenido(a) USUARIO 1</h4>
                            <div class ="form-group mx-sm-5">
                                <input type="password" required class="form-control" name="" id="" placeholder="Ingrese su Contraseña">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Continuar </button>
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>

    <div class="container">
        <div class= "row justify-content-center text-center pt-1 mt-1">
            <div class="col-md-6 pt-4">
                <div class="form-group">
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal"> AÑADIR PERFIL</button>
                </div>
                <div class="form-group">
                    <h5 id="perfildis">Perfiles Disponibles: <span id="perdispo" class="text-primary">4</span></hs>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Crear Perfil</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group text-left mx-sm-5">
                                <label for="">Usuario:</label>
                                <input type="text" class="form-control" name="" id="" placeholder="Ingrese su Usuario">                 
                                </div>
                                <div class="form-group text-left mx-sm-5">
                                <label for="">Contraseña:</label>
                                <input type="text" class="form-control" name="" id="" placeholder="Ingrese su Contraseña">                                            
                                </div>
                                <div class="form-group text-left mx-sm-5">
                                <label for="">Color de Fondo:</label>
                                <select class="form-control" name="" id="">
                                    <option value="" selected>Seleccionar</option>
                                    <option class="bg-danger text-white" value="bg-danger">Rojo</option>
                                    <option class="bg-primary text-white" value="bg-primary">Azul</option>
                                    <option class="bg-warning text-white" value="bg-warning">Amarillo</option>
                                    <option class="bg-info text-white" value="bg-info">Celeste</option>
                                    <option class="bg-dark text-white" value="bg-dark">Negro</option>
                                </select>
                                </div>
                                <div class="form-group text-left mx-sm-5">
                                <label for="">Foto de Perfil</label>
                                <select class="form-control" name="" id="">
                                    <option value="" selected>Seleccionar</option>
                                    <option value="8.png">IMAGEN 1</option>
                                    <option value="9.png">IMAGEN 2</option>
                                    <option value="10.png">IMAGEN 3</option>
                                    <option value="11.png">IMAGEN 4</option>
                                    <option value="12.png">IMAGEN 5</option>
                                </select> 
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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