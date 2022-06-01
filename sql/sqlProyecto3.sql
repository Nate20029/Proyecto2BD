/*Tablas nuevas*/

CREATE TABLE reproducciones(
	id SERIAL PRIMARY KEY,
	email VARCHAR(50),
	perfil VARCHAR(60),
	terminosp int,
	serie_pelicula VARCHAR(60),
	fecha DATE,
	hora_inicial TIME,
	hora_final TIME
);

CREATE TABLE busqueda (buscador VARCHAR (50));

CREATE TABLE bitacora(
id_bi SERIAL PRIMARY KEY,
usuario VARCHAR(30),
cambio VARCHAR(30),
fecha_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/*Bitacora Funciones*/

CREATE OR REPLACE FUNCTION crear_pelicula_serie()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Creo Pelicula o Serie');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION editar_pelicula_serie()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Edito Pelicula o Serie');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION eliminar_pelicula_serie()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Eliminar Pelicula o Serie');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION crear_anuncio()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Creo Anuncio');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION editar_anuncio()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Edito Anuncio');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION eliminar_anuncio()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Elimino Anuncio');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION crear_anunciante()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Crear Anunciante');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION editar_anunciante()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Edito Anunciante');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION eliminar_anunciante()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Elimino Anunciante');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION crear_usuario()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Creo Usuario');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION editar_usuario()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Edito Usuario');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION eliminar_usuario()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Elimino Usuario');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';


CREATE OR REPLACE FUNCTION crear_perfiles()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Creo Usuario');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION editar_perfiles()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Edito Usuario');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';

CREATE OR REPLACE FUNCTION eliminar_perfiles()
RETURNS TRIGGER AS
$$
BEGIN
	INSERT INTO bitacora(usuario, cambio) 
	VALUES ('$usuario', 'Elimino Usuario');
	RETURN NEW;
END;
$$
LANGUAGE 'plpgsql';


/*Bitacora triggers*/

CREATE TRIGGER pelicula_serie_crear
AFTER INSERT ON serie_pelicula
FOR EACH ROW
EXECUTE PROCEDURE crear_pelicula_serie();

CREATE TRIGGER pelicula_serie_editar
AFTER UPDATE ON serie_pelicula
FOR EACH ROW
EXECUTE PROCEDURE editar_pelicula_serie();

CREATE TRIGGER pelicula_serie_eliminar
AFTER DELETE ON serie_pelicula
FOR EACH ROW
EXECUTE PROCEDURE eliminar_pelicula_serie();

CREATE TRIGGER anuncio_crear
AFTER INSERT ON anuncios
FOR EACH ROW
EXECUTE PROCEDURE crear_anuncio();

CREATE TRIGGER anuncio_editar
AFTER UPDATE ON anuncios
FOR EACH ROW
EXECUTE PROCEDURE editar_anuncio();

CREATE TRIGGER anuncio_eliminar
AFTER DELETE ON anuncios
FOR EACH ROW
EXECUTE PROCEDURE eliminar_anuncio();

CREATE TRIGGER anunciante_crear
AFTER INSERT ON Anunciante
FOR EACH ROW
EXECUTE PROCEDURE crear_anunciante();

CREATE TRIGGER anunciante_editar
AFTER UPDATE ON Anunciante
FOR EACH ROW
EXECUTE PROCEDURE editar_anunciante();

CREATE TRIGGER anunciante_eliminar
AFTER DELETE ON Anunciante
FOR EACH ROW
EXECUTE PROCEDURE eliminar_anunciante();

CREATE TRIGGER usuario_crear
AFTER INSERT ON cuentas
FOR EACH ROW
EXECUTE PROCEDURE crear_usuario();

CREATE TRIGGER usuario_editar
AFTER UPDATE ON cuentas
FOR EACH ROW
EXECUTE PROCEDURE editar_usuario();

CREATE TRIGGER usuario_eliminar
AFTER DELETE ON cuentas
FOR EACH ROW
EXECUTE PROCEDURE eliminar_usuario();

CREATE TRIGGER perfiles_crear
AFTER INSERT ON perfiles
FOR EACH ROW
EXECUTE PROCEDURE crear_perfiles();

CREATE TRIGGER perfiles_editar
AFTER UPDATE ON perfiles
FOR EACH ROW
EXECUTE PROCEDURE editar_perfiles();

CREATE TRIGGER perfiles_eliminar
AFTER DELETE ON perfiles
FOR EACH ROW
EXECUTE PROCEDURE eliminar_perfiles();



/*indexs*/

CREATE index fecha on reproducciones(fecha);

CREATE INDEX buscador on busqueda(buscador);

CREATE INDEX usuario on bitacora(usuario);
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
SELECT usuario, COUNT (usuario) as users
FROM bitacora
GROUP BY usuario ORDER BY users DESC LIMIT 5;

--4
SELECT serie_pelicula, COUNT(serie_pelicula) as cantidad from reproducciones
where fecha BETWEEN '2000-01-01' AND '2002-02-02'
AND(hora_final IS NULL)
group by serie_pelicula order by cantidad desc limit 20;
