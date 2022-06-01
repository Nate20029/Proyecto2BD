/*Tablas nuevas*/

CREATE TABLE reproducciones(
	id SERIAL PRIMARY KEY,
	email VARCHAR(50),
	perfil VARCHAR(60),
	serie_pelicula VARCHAR(60),
	fecha DATE,
	hora_inicio TIME,
	hora_final TIME
);

CREATE TABLE busqueda (buscador VARCHAR (50));

CREATE TABLE bitacora(
id_bi SERIAL PRIMARY KEY,
usuario VARCHAR(30),
cambio VARCHAR(30),
fecha_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/*Bitacora triggers*/




/*indexs*/

create index fecha on reproducciones(fecha);

CREATE INDEX buscador on busqueda(buscador);


/*Reporteria*/

--1
SELECT serie_pelicula, COUNT(serie_pelicula) as cantidad from reproducciones
where extract (month from fecha ) = 01
and extract (hour from hora_inicial) not between 1 and 8 
group by serie_pelicula order by cantidad desc limit 5;

--2
SELECT buscador, COUNT (buscador) as busquedas
FROM busqueda
GROUP BY buscador ORDER BY busquedas DESC LIMIT 10;

--3




--4
SELECT serie_pelicula, COUNT(serie_pelicula) as cantidad from reproducciones
where fecha BETWEEN '2000-01-01' AND '2002-02-02'
AND(hora_final IS NULL)
group by serie_pelicula order by cantidad desc limit 20;
