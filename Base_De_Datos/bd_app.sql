CREATE DATABASE `BBDD_APP`;
USE `BBDD_APP`;
CREATE TABLE `usuarios`(
id_usu int(3) NOT NULL PRIMARY KEY auto_increment,
nom_usu varchar(20) NULL,
correo_usu varchar(40) NULL,
contra_usu varchar(10) NULL
);