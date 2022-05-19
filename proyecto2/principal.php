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
			<h2 class="logotipo">MOVIEBASE</h2>
			<nav>
				<a href="principal.php" class="activo">Home</a>
				<a href="#">Mis favoritos</a>
				<a href="#">Mis recomendaciones</a>
				<a href="#">Mi historial</a>
				<a href="Perfiles.php">Cambiar Perfil</a>.
				<a href="planLogeado.php">Cambiar de Plan</a>
				<a href="verificarAdmin.php">Administrador</a>
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
							<a href="https://www.youtube.com/watch?v=Wqtlf_A4cOc&t=33s&ab_channel=AD_edits"><img src="https://www.philhobden.co.uk/wp-content/uploads/2019/03/maxresdefault.jpg"></a>
						</div>
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=LYS2O1nl9iM"><img src="images/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=wTi8yLyHeb8"><img src="https://i.ytimg.com/vi/iW-QBcjakrc/maxresdefault.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=RZ4OSz_qwdg"><img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FB5AEC9D5C29364905AC44EBEB20EF3856AB1F33186B002455237B8F99D0E1CD/scale?width=1200&aspectRatio=1.78&format=jpeg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=YyoKXfBQgXw"><img src="images/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=FUP3P9_mqvA"><img src="images/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=KREBGtEeW9U"><img src="https://i0.wp.com/www.filmylibrary.com/wp-content/uploads/2021/05/doctor-strange-in-the-multiverse-of-madness-marvel-cinematic-universe-scaled.jpg?fit=2560%2C1440&ssl=1" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=upGoAejd7LM"><img src="https://es.web.img3.acsta.net/r_1280_720/newsv7/20/12/15/09/38/2411268.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=-AwLMRgcEoA"><img src="https://images-na.ssl-images-amazon.com/images/S/pv-target-images/fe5fb13cf94c30b88dbe92c858e6da9727a7cc8b689da2c807353796b54247d3._UR1920,1080_RI_.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="https://www.youtube.com/watch?v=t3DpuQrBivU"><img src="https://studiosol-a.akamaihd.net/uploadfile/letras/playlists/6/4/3/c/643c06d47cb949539e4ffa125c0057fe.jpg" alt=""></a>
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