CREATE DATABASE `BD_APP`;
USE `BD_APP`;
CREATE TABLE `usuarios`(
id_usu int(3) NOT NULL PRIMARY KEY auto_increment,
nom_usu varchar(20) NULL,
correo_usu varchar(40) NULL,
password_usu varchar(20)  NULL
);

INSERT INTO usuarios (nom_usu, correo_usu, password_usu) VALUE ("juan","juan@gmail.com",1234);