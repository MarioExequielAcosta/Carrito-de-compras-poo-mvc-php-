--
SET NAMES 'utf8';

USE test;

DROP TABLE IF EXISTS productos;

USE test;
SELECT * FROM test.productos;
USE test;

--
-- Create table `productos`
--
CREATE TABLE productos (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) DEFAULT NULL,
  descripcion VARCHAR(255) DEFAULT NULL,
  precio INT(11) DEFAULT NULL,
  stock INT(11) DEFAULT NULL,
  imagen VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id));
-- insertar productos:
use test;
INSERT INTO productos VALUES

(26,'Ruedas darkstar 54mm', 'Ruedas darkstar violeta-blanco', 2200, 100, 'ruedas-4.jpg'),
(21,'Ruedas darkstar 51mm', 'Ruedas darkstar multi color', 2300, 100, 'ruedas-2.jpg'), 
(22,'Ruedas darkstar 50mm', 'Ruedas darkstar turquesa', 2500, 100, 'ruedas-3.jpg'), 
(23,'Skate darkstar 8pulgadas', 'Skate darkstar maple color negro', 4000, 100, 'skate-1.jpg'), 
(24,'Skate darkstar 8.5pulgadas', 'Skate darkstar maple color azul', 4300, 100, 'skate-2.jpg'), 
(25,'Skate darkstar 7.5pulgadas', 'Skate darkstar maple color verde', 4500, 100, 'skate-3.jpg');


-- creacion de tabal de usuarios
CREATE TABLE usuarios (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL DEFAULT '',
  email VARCHAR(50) NOT NULL DEFAULT'',
  password VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)

usuario administrador : admin@admin  password:1234
        codigo hash:$2y$10$IH.HV96tfH13jTbDcEf/ruUhLZT3ArVm/sGAEpCgaVMLdV0WTinoO
