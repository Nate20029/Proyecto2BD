<?php

try {
  include_once ("conexion.php");
  $conn = CConexion::ConexionBD();


  $fecha = $_POST['fecha'];
  $visualizacion = $_POST['visualizacion'];


  $sql = "CREATE OR REPLACE PROCEDURE repro(fechaI date, cantidad numeric)
  AS 
  $$
  
  DECLARE aleatorio int;
  DECLARE perfilA VARCHAR(60);
  DECLARE usuarioC VARCHAR(80);
  DECLARE sop VARCHAR(60);
  DECLARE duracionSP TIME;
  DECLARE hInicial TIME;
  DECLARE hFinal TIME;
  DECLARE fechaInicial timestamp;
  DECLARE fechaFinal timestamp;
  
  DECLARE cuenta numeric;
  
  BEGIN
	  cuenta = 0;
	  LOOP
		  /*termino o no la serie o pelicula*/
		  SELECT FLOOR(random()*2+1)::int INTO aleatorio;
  
		  /*datos de usuario aleatorio*/
		  SELECT nombre_perfil, correo INTO perfilA, usuarioC FROM perfiles WHERE correo IS NOT NULL ORDER BY RANDOM() limit 1;
  
		  /*hora inicial random*/
		  Select (
				  Select 
					  time '08:00:00' + 
					  random() * (time '00:00:01' - time '23:59:59')
					  )::time INTO hInicial;
					  
		  /*definir la hora final sumandole la duracion de la pelicula*/
		  SELECT hInicial::time + duracionSp::interval INTO hFinal;
		  
		  /*verifica si lo termino o no*/	
		  IF (aleatorio = 1) THEN
		  /*hora final aleatoria*/
			Select (
				  Select 
					  time '08:00:00' + 
					  random() * (time '00:00:01' - time '23:59:59')
					  )::time INTO hFinal;
			  Raise Notice 'entro al if';
  
		  ELSE
			  /*dejarlo en null para que simule que no han terminado la serie*/
			  hFinal = NULL;
			  Raise Notice 'entro al else';
  
		  END IF;
		  /*seleccionar de la base de datos series_peliculas una al azar para insertar*/
		  SELECT nombre_serie_pelicula, duracion INTO sop, duracionSP FROM serie_pelicula ORDER BY RANDOM() limit 1;
  
		  
  
		  /*insertarlo a reproducciones*/
		  INSERT INTO reproducciones(email, perfil, terminoSP, serie_pelicula, fecha, hora_inicial, hora_final) VALUES(usuarioC, perfilA, aleatorio, sop, fechaI, hInicial, hFinal);
		  
		  cuenta = cuenta + 1;
		  exit when cuenta >= cantidad;
	  END LOOP;
  END;
  $$
  LANGUAGE plpgsql;
  
/*llamar la funcion*/
  call repro('$fecha','$visualizacion');";
  // use exec() because no results are returned
  $conn->exec($sql);
  //echo "New record created successfully";
  include_once ("simulacion.php");
} catch(PDOException $e) {
  //echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>