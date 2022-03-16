CREATE TABLE USUARIO(
	id_usuario int NOT NULL PRIMARY KEY,
	Correo VARCHAR(64),
	Contraseña VARCHAR(32)
);
CREATE TABLE ADMINISTRADOR(
	Correo VARCHAR(64) NOT NULL PRIMARY KEY,
	Contraseña VARCHAR(32)
);
CREATE TABLE PELICULAS(
	id_pelicula int NOT NULL PRIMARY KEY,
	Nombre_especifico VARCHAR(20),
	Parametro_especial INT,
	Caregoria_de_Entretenimiento VARCHAR(20),
	Actor_Estrella VARCHAR(20),
	Director VARCHAR(20),
	Genero VARCHAR(20),
	Premios_Ganados VARCHAR(20),
	Fecha_de_estreno DATE
);
CREATE TABLE SERIES(
	id_serie int NOT NULL PRIMARY KEY,
	Nombre_especifico VARCHAR(20),
	Parametro_especial INT,
	Caregoria_de_Entretenimiento VARCHAR(20),
	Actor_Estrella VARCHAR(20),
	Director VARCHAR(20),
	Genero VARCHAR(20),
	Premios_Ganados VARCHAR(20),
	Fecha_de_estreno DATE
);
