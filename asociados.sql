-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2015 a las 01:06:58
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdhousemate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE IF NOT EXISTS `asociados` (
  `idasocio` int(11) NOT NULL AUTO_INCREMENT,
  `socio1` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `socio2` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `solicitud` char(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idasocio`),
  KEY `socio1` (`socio1`,`socio2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`idasocio`, `socio1`, `socio2`, `solicitud`) VALUES
(22, '0', '2', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
