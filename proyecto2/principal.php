<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilosp.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<title>MOVIBASE</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">MOVIBASE</h2>
			<nav>
				<a href="principal.php" class="activo">Home</a>
				<a href="#">Mis favoritos</a>
				<a href="#">Mis recomendaciones</a>
				<a href="#">Mi historial</a>
				<a href="Perfiles.php">Cambiar Perfil</a>.
				<a href="planLogeado.php">Cambiar de Plan</a>
				<a href="inicio.php">Cerrar Sesion</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Interestellar</h3>
				<p class="descripcion">
					Narra las aventuras de un grupo de exploradores que hacen uso de un agujero de gusano recientemente descubierto para superar las limitaciones de los viajes espaciales tripulados y vencer las inmensas distancias que tiene un viaje interestelar.
				</p>
				<button role="button" class="boton" > </a> <i class="fas fa-play"> </i>Reproducir</button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
			</div>
		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Populares en MOVIEBASE</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=NWMRx4G9zjo"><img src="https://www.philhobden.co.uk/wp-content/uploads/2019/03/maxresdefault.jpg"></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="images/4.png" alt=""></a>
						</div>
					</div>
				</div>
                <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>


            </div>
        </div>

        <div class="peliculas-recomendadas2 contenedor">
            <div class="contenedor-titulo-controles2">
                <h3>TENDENCIA</h3>
                <div class="indicadores2"></div>
            </div>
            <div class="contenedor-principal2">
                <button role="button" id="flecha-izquierda2" class="flecha-izquierda2"><i class="fas fa-angle-left"></i></button>
    
                <div class="contenedor-carousel2">
                    <div class="carousel2">
                        <div class="pelicula">
                            <a href="https://www.youtube.com/watch?v=NWMRx4G9zjo"><img src="images/1.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="images/1.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="images/2.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="images/3.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="images/4.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="images/5.png" alt=""></a>
                        </div>
                        <div class="pelicula">
                            <a href="#"><img src="images/6.png" alt=""></a>
                        </div>
                    </div>   
                </div>
			    <button role="button" id="flecha-derecha2" class="flecha-derecha2"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>