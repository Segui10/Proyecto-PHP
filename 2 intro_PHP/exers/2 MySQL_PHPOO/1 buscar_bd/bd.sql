CREATE DATABASE bd1;
use bd1;
CREATE TABLE tabla1(
codigo CHAR(7) NOT NULL,
nombre VARCHAR(50) NOT NULL,
tipo VARCHAR(10) NOT NULL,
existencias INT,
PRIMARY KEY (codigo));
use bd1;
INSERT INTO tabla1(codigo,nombre,tipo,existencias) 
VALUES ('1234ABC','Articulo Generico','General',0);
