-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2015 a las 02:13:11
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

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
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE IF NOT EXISTS `tbusuario` (
  `idUsuario` varchar(5) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechanac` date NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contra` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nombre`, `apellido`, `fechanac`, `correo`, `usuario`, `contra`, `tipo`, `image`) VALUES
('2', 'Test', 'Test2 prueba', '1994-12-12', 'html@hotmail.com', 'Garcia', '734c9f9c17e31655a415bd2bb0a36c012a3e8cda', 4, NULL),
('1', 'Jose', 'Montolla', '1996-01-12', 'correo@hotmail.com', 'Visitante', '734c9f9c17e31655a415bd2bb0a36c012a3e8cda', 3, NULL),
('0', 'Fernando Antonio', 'Menjivar Rivera', '1993-12-12', 'Menjivarmenjivar@gmail.com', 'Fernando', '8cb2237d0679ca88db6464eac60da96345513964', 1, NULL),
('3', 'asd', 'asd', '1233-12-12', 'correo@correo', 'asd', 'f10e2821bbbea527ea02200352313bc059445190', 3, NULL),
('4', 'Jose Alexander', 'Garcia Valladares', '1995-12-12', 'nome@hotmail.com', 'alexan', '5eb0f0f0ec5a736b6931', 4, NULL),
('5', 'Marvin', 'asdsadw', '2019-04-12', 'marvin@asd.es', 'marvin215', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`), ADD UNIQUE KEY `usuario` (`usuario`), ADD UNIQUE KEY `usuario_2` (`usuario`), ADD UNIQUE KEY `correo` (`correo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
