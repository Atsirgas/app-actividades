-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2022 a las 02:37:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_img`
--

CREATE TABLE `tbl_img` (
  `id_act` int(11) NOT NULL,
  `nom_act` text NOT NULL,
  `titol_act` text NOT NULL,
  `desc_act` text NOT NULL,
  `img_act` text NOT NULL,
  `dueño_Act` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(4) NOT NULL,
  `nom_usu` varchar(20) DEFAULT NULL,
  `correo_usu` varchar(40) DEFAULT NULL,
  `password_usu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nom_usu`, `correo_usu`, `password_usu`) VALUES
(17, 'Danny', 'Dannylarrea@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_img`
--
ALTER TABLE `tbl_img`
  ADD PRIMARY KEY (`id_act`),
  ADD KEY `dueño_act_fk` (`dueño_Act`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_img`
--
ALTER TABLE `tbl_img`
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_img`
--
ALTER TABLE `tbl_img`
  ADD CONSTRAINT `dueño_act_fk` FOREIGN KEY (`dueño_Act`) REFERENCES `usuarios` (`id_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
