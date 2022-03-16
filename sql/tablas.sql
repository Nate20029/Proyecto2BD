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
	Nombre_especifico VARCHAR(64),
	Parametro_especial INT,
	Categoria_de_Entretenimiento VARCHAR(64),
	Actor_Estrella VARCHAR(64),
	Director VARCHAR(64),
	Genero VARCHAR(64),
	Premios_Ganados VARCHAR(64),
	Fecha_de_estreno DATE
);
CREATE TABLE SERIES(
	id_serie int NOT NULL PRIMARY KEY,
	Nombre_especifico VARCHAR(64),
	Parametro_especial INT,
	Caregoria_de_Entretenimiento VARCHAR(64),
	Actor_Estrella VARCHAR(64),
	Director VARCHAR(64),
	Genero VARCHAR(64),
	Premios_Ganados VARCHAR(64),
	Fecha_de_estreno DATE
);
CREATE TABLE Cuenta(
	id_cuenta int NOT NULL PRIMARY KEY,
	Tipo_Cuenta VARCHAR(1),
	id_usuario int
);
CREATE TABLE Perfiles(
	Nombre_perfil VARCHAR(64) ,
	id_cuenta int NOT NULL PRIMARY KEY,
	id_usuario int
);

CREATE TABLE Reproduccion(
	Tiempo_restante TIME
)

ALTER TABLE cuenta
ADD FOREIGN KEY (id_cuenta) REFERENCES perfiles(id_cuenta);

INSERT INTO usuario
VALUES(1234,'jessicaortiz15b@gmail.com', 'bts1234');

INSERT INTO administrador
VALUES('jefe12@gmail.com', 'admin000');

INSERT INTO peliculas
VALUES(10101,'Mulan', 1, 'Infantil', 'Eva Díe', 'Tony Bancroft y Barry Cook', 'Aimación aventura infantil', 'Premio ocar por mejor BSO', '1998/06/19');

INSERT INTO series
VALUES(010103, 'Flash', 0, 'Accion', 'Grant Gustin', 'Greg Berlanti', 'Ciencia ficción', 'Teen choice awards al mejor programa de acción', '2014/10/07');

INSERT INTO perfiles
VALUES('jessica',1,1234);

INSERT INTO cuenta
VALUES(1,'P', 1234);

