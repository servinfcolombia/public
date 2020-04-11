CREATE OR REPLACE TABLE niñas_9_años (
  id BIGINT(40) AUTO_INCREMENT,
  codigo_dane BIGINT(40),
  institucion VARCHAR(100),
  sede VARCHAR(100),
  direccion_sede VARCHAR(100),
  sector VARCHAR(100),
  comuna VARCHAR(100),
  zona VARCHAR(100),
  numero_documento VARCHAR(100),
  apellido1 VARCHAR(100),
  apellido2	VARCHAR(100),
  nombre1 VARCHAR(100),
  nombre2 VARCHAR(100),
  direccion_residencia VARCHAR(100),
  telefono VARCHAR(100),
  fecha_nacimiento DATE,
  edad VARCHAR(100),
  genero VARCHAR(100),
  grado VARCHAR(40),
  ese VARCHAR(40),
  PRIMARY KEY(id)
);

CREATE OR REPLACE TABLE niñas_9_años (
  id BIGINT(40) AUTO_INCREMENT,
  campo1 BIGINT(40),
  campo2 VARCHAR(100),
  campo3 VARCHAR(100),
  campo4 VARCHAR(100),
  campo5 VARCHAR(100),
  campo6 VARCHAR(100),
  campo2 VARCHAR(100),
  campo2 VARCHAR(100),
  campo2 VARCHAR(100),
  campo2 VARCHAR(100),
  campo2 VARCHAR(100),
  campo2 VARCHAR(100),
  campo2 VARCHAR(100),
  campo2 VARCHAR(100),
  campo2 DATE,
  campo2 VARCHAR(100),
  campo2 VARCHAR(100),
  campo2 VARCHAR(40),
  campo2 VARCHAR(40),
  PRIMARY KEY(id)
);

select ese , count(*) as edad from niñas_9_años where edad = '9' group by ese /*PARA MOSTRAR EL NUMERO DE NIÑAS DE 9 AÑOS POR ESE*/

INSERT INTO `niñas_9_años` (`codigo_dane`, `institucion`, `sede`, `direccion_sede`, `sector`, `comuna`, `zona`, `numero_documento`, `apellido1`, `apellido2`, `nombre1`, `nombre2`, `direccion_residencia`, `telefono`, `fecha_nacimiento`, `edad`, `genero`, `grado`, `ese`) VALUES ('376001010221', 'ACADE MILITAR JOAQUÍN DE CAYZEDO Y CUERO', 'ACADE MILITAR JOAQUÍN DE CAYZEDO Y CUERO', 'IND KM 14 VIA A JAMUNDÍ', 'NO OFICIAL - PRIVADO', '52', 'URBANA', '1110372951', 'FERNANDEZ', 'MARIN', 'SOFIA', '', 'KR 85 54 27', '3391811', '2011-06-25', '8', 'F', '2', 'ESE LADERA')/*INSERCION DE DATOS YA ESTA PROBADO*/

UPDATE nombre de tabla SET campo = "nuevo dato" WHERE campo = "antiguo dato"/*ACTUALIZAR DATOS DE UNA TABLA*/

DELETE FROM `niñas_9_años` WHERE `niñas_9_años`.`id` = 39337/*para eliminar un registro de la base de datos*/

/*CODIGODANE
institucion
sede
direccion_sede
sector
comuna
zona
nro_documento
apellido1
apellido2	
nombre1
nombre2
direccion_residencia
telelfono
fecha_nacimiento
edad
genero
grado
*/
