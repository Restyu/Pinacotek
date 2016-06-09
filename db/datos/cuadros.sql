-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-06-2016 a las 10:21:46
-- Versión del servidor: 5.6.29
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pinacotek`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadros`
--

CREATE TABLE `cuadros` (
  `id` int(11) NOT NULL,
  `id_pintor` int(11) DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `dimensiones` varchar(255) NOT NULL,
  `soporte` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `estilo` varchar(255) NOT NULL,
  `siglo` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `editado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuadros`
--

INSERT INTO `cuadros` (`id`, `id_pintor`, `nombre`, `year`, `dimensiones`, `soporte`, `tema`, `estilo`, `siglo`, `foto`, `creado`, `editado`) VALUES
(10, 12, 'Francisco Pacheco', 1620, 'Alto: 41 cm. Ancho: 36 cm.', 'lienzo', 'Retrato', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Francisco Pacheco.jpg', '2016-06-09 16:16:42', NULL),
(11, 12, 'Vista del jardín de la Villa Medici en Roma', 1630, 'Alto: 48,5 cm.; Ancho: 43 cm.', 'lienzo', 'Paisaje', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Vista del jardín de la Villa Medici en Roma.jpg', '2016-06-09 16:18:18', NULL),
(12, 12, 'Adoración de los Reyes Magos', 1619, 'Alto: 203 cm.; Ancho: 125 cm.', 'lienzo', 'Retrato', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Adoración de los Reyes Magos.jpg', '2016-06-09 16:20:34', NULL),
(13, 12, 'Vista del jardín de la Villa Medici de Roma con la estatua de Ariadna', 1630, 'Alto: 44 cm.; Ancho: 38 cm.', 'lienzo', 'Paisaje', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Vista del jardín de la Villa Medici de Roma con la estatua de Ariadna.jpg', '2016-06-09 16:21:57', NULL),
(14, 12, 'El bufón llamado don Juan de Austria', 1632, 'Alto: 210 cm.; Ancho: 123 cm.', 'lienzo', 'Retrato', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/El bufón llamado don Juan de Austria.jpg', '2016-06-09 16:23:09', NULL),
(15, 12, 'Las lanzas o La rendición de Breda', 1635, 'Alto: 307 cm.; Ancho: 367 cm', 'lienzo', 'Guerra', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Las lanzas o La rendición de Breda.jpg', '2016-06-09 16:30:21', NULL),
(16, 14, 'La Creación', 1400, 'Alto: 188 cm.; Ancho: 77 cm.', 'tabla de madera de roble', 'Fantasia', 'Óleo', 'XV', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/La Creación.jpg', '2016-06-09 16:35:56', NULL),
(17, 14, 'Fantasía moral (Visio tondali)', 1482, 'Alto: 29 cm.; Ancho: 24 cm.', 'tabla de madera de roble', 'Fantasia', 'Óleo', 'XV', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Fantasía moral (Visio tondali).jpg', '2016-06-09 16:38:21', NULL),
(18, 14, 'Las tentaciones de San Antonio Abad', 1501, 'Alto: 90 cm.; Ancho: 37 cm.', 'tabla de madera de roble', 'Fantasia', 'Óleo', 'XVI', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Las tentaciones de San Antonio Abad.jpg', '2016-06-09 16:41:44', NULL),
(19, 15, 'La huida a Egipto', 1570, 'Alto: 15,9 cm.; Ancho: 21,6 cm.', 'Tabla de madera de pino', 'Escena', 'Óleo', 'XVI', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/La huida a Egipto.jpg', '2016-06-09 16:45:53', NULL),
(20, 15, 'La Anunciación', 1597, 'Alto: 315 cm.; Ancho: 174 cm.', 'lienzo', 'Angeles', 'Óleo', 'XVI', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/La Anunciación.jpg', '2016-06-09 16:47:46', NULL),
(21, 16, 'La violencia de Tarquino', 1500, 'Alto: 188 cm.; Ancho: 271 cm.', 'lienzo', 'Escena', 'Óleo', 'XVI', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/La violencia de Tarquino.jpg', '2016-06-09 16:51:26', NULL),
(22, 17, 'La oración del Huerto', 1519, 'Alto: 110 cm.; Ancho: 84 cm.', 'Tabla de madera de pino', 'Escena', 'Óleo', 'XVI', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/La oración del Huerto.jpg', '2016-06-09 16:55:28', NULL),
(23, 18, 'Autorretrato', 1498, 'Alto: 52 cm.; Ancho: 41 cm.', 'tabla ', 'Retrato', 'Óleo', 'XV', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Autorretrato.jpg', '2016-06-09 16:58:48', NULL),
(24, 18, 'Retrato de hombre', 1521, 'Alto: 50 cm.; Ancho: 36 cm.', 'tabla ', 'Retrato', 'Óleo', 'XVI', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Retrato de hombre.jpg', '2016-06-09 17:00:58', NULL),
(25, 19, 'Imposición de la casulla a San Ildefonso', 1601, 'Alto: 33 cm.; Ancho: 55 cm.', 'Lámina de cobre', 'Escena', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Imposición de la casulla a San Ildefonso.jpg', '2016-06-09 17:04:19', NULL),
(26, 19, 'Retrato ecuestre del duque de Lerma', 1603, 'Alto: 290,5 cm.; Ancho: 207,5 cm.', 'lienzo', 'Retrato', 'Óleo', 'XV', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Retrato ecuestre del duque de Lerma.jpg', '2016-06-09 17:06:03', NULL),
(27, 19, 'Paisaje con Psique y Júpiter', 1610, 'Alto: 95 cm.; Ancho: 129 cm.', 'lienzo', 'Paisaje', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Paisaje con Psique y Júpiter.jpg', '2016-06-09 17:07:54', NULL),
(28, 20, 'Caza con reclamo', 1775, 'Alto: 112 cm.; Ancho: 179 cm.', 'lienzo', 'Paisaje', 'Óleo', 'XVIII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/Caza con reclamo.jpg', '2016-06-09 17:11:34', NULL),
(29, 21, 'La familia del pintor', 1622, 'Alto: 181 cm.; Ancho: 187 cm.', 'lienzo', 'Retrato', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/La familia del pintor.jpg', '2016-06-09 17:15:14', NULL),
(30, 21, 'El amor de Cupido y Psique', 1630, 'Alto: 131 cm.; Ancho: 127 cm.', 'Lienzo sobre tabla', 'Escena', 'Óleo', 'XVII', 'http://localhost:8080/pinacotek/admin/imagenes/cuadros/El amor de Cupido y Psique.jpg', '2016-06-09 17:19:04', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pintor` (`id_pintor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuadros`
--
ALTER TABLE `cuadros`
  ADD CONSTRAINT `cuadros_ibfk_1` FOREIGN KEY (`id_pintor`) REFERENCES `pintores` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
