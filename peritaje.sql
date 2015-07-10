-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2015 a las 23:48:47
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

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
-- Estructura de tabla para la tabla `peritaje`
--

CREATE TABLE IF NOT EXISTS `peritaje` (
  `id_peri` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `idioma` char(1) NOT NULL,
  `valor1` int(5) NOT NULL,
  `valor2` int(5) NOT NULL,
  `valor3` int(5) NOT NULL,
  `categoria` char(1) NOT NULL,
  `creador` varchar(5) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peritaje`
--

INSERT INTO `peritaje` (`id_peri`, `nombre`, `idioma`, `valor1`, `valor2`, `valor3`, `categoria`, `creador`, `estado`) VALUES
('esDC1', 'fsedfsd', '1', 3, 0, 0, '4', '3', '1'),
('esDC2', 'dsfgsd', '1', 3, 0, 0, '4', '3', '1'),
('esDC3', 'dfgd', '1', 4, 0, 0, '4', '3', '1'),
('esDC4', 'gdfgdf', '1', 4, 0, 0, '4', '3', '1'),
('esDC5', 'adas', '1', 1, 0, 0, '4', '3', '1'),
('esTS1', 'sdfewf', '1', 3, 0, 0, '2', '3', '1'),
('esTS2', 'werwer', '1', 3, 0, 0, '2', '3', '1'),
('esTT1', 'fdgdfg', '1', 4, 0, 0, '3', '3', '1'),
('esTT2', 'fffff', '1', 3, 0, 0, '3', '3', '1'),
('esVP1', 'sdfsdf', '1', 3, 0, 0, '1', '3', '1'),
('esVP2', 'fsdfsd', '1', 3, 0, 0, '1', '3', '1'),
('esVP3', 'wr', '1', 3, 0, 0, '1', '3', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peritaje`
--
ALTER TABLE `peritaje`
 ADD PRIMARY KEY (`id_peri`), ADD KEY `categoria` (`categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
