CREATE DATABASE `BD_APP`;
USE `bd_app`;
CREATE TABLE `usuarios`(
id_usu int(3) NOT NULL PRIMARY KEY auto_increment,
nom_usu varchar(20) NULL,
correo_usu varchar(40) NULL,
password_usu varchar(20)  NULL,
img_usu varchar(20) NULL
);

CREATE TABLE `img` ( 
    `id` INT NOT NULL AUTO_INCREMENT,
    `img` LONGBLOB NOT NULL ,
    `des` VARCHAR(20) NOT NULL ,
    PRIMARY KEY  (`id`)) ENGINE = InnoDB;
