-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-06-2016 a las 10:22:17
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
-- Estructura de tabla para la tabla `usuarios`
--

-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `pass`, `pais`, `F_alta`, `F_baja`, `avatar`) VALUES
(52, 'admin', 'admin@hotmail.com', 'cc955a9ded11f3ad8ef3bf0c50a9416a', NULL, '2016-06-09 15:25:26', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
