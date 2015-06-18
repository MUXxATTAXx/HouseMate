-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2015 a las 16:15:19
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
CREATE DATABASE IF NOT EXISTS `bdhousemate` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bdhousemate`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesoria`
--

CREATE TABLE IF NOT EXISTS `asesoria` (
`IdAsesoria` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Tipo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `Satisfactoria` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprador`
--

CREATE TABLE IF NOT EXISTS `comprador` (
`IdComprador` int(11) NOT NULL,
  `Telefono` char(8) COLLATE utf8_spanish_ci NOT NULL,
  `DUI` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `NIT` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdInmueble` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE IF NOT EXISTS `convenio` (
`IdConvenio` int(11) NOT NULL,
  `Arrendante` int(11) NOT NULL,
  `Comprador` int(11) NOT NULL,
  `Oferta` int(11) NOT NULL,
  `Acuerdo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
`IdEmpresa` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `NIT` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Ratings` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta`
--

CREATE TABLE IF NOT EXISTS `etiqueta` (
  `IdEtiqueta` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Netiqueta` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `etiqueta`
--

INSERT INTO `etiqueta` (`IdEtiqueta`, `Idinmueble`, `Netiqueta`, `Valor`) VALUES
('1', '0', '1', '1'),
('10', '1', '6', '1'),
('11', '1', '10', '1'),
('2', '0', '2', '1'),
('3', '0', '4', '2'),
('4', '0', '5', '1'),
('5', '0', '7', '1'),
('6', '0', '8', '2'),
('7', '0', '9', '11'),
('8', '0', '10', '2'),
('9', '1', '2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idcontratofin`
--

CREATE TABLE IF NOT EXISTS `idcontratofin` (
`IdContrato` int(11) NOT NULL,
  `Convenio` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmueble`
--

CREATE TABLE IF NOT EXISTS `inmueble` (
  `IdInmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Dueno` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Direccion` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `VentaRenta` int(1) NOT NULL,
  `Tipopropiedad` int(1) NOT NULL,
  `Precio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `DescDire` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inmueble`
--

INSERT INTO `inmueble` (`IdInmueble`, `Dueno`, `Direccion`, `Descripcion`, `VentaRenta`, `Tipopropiedad`, `Precio`, `Imagen`, `DescDire`) VALUES
('0', '0', 'Santa Tecla, La Libertad, El Salvador', 'Test', 2, 1, '23000', 'img/Houses/2.jpg', NULL),
('1', '0', 'Lolotique, San Miguel, El Salvador', 'asd', 1, 1, '2323', 'img/Houses/3.jpg', 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
`idmensaje` int(5) NOT NULL,
  `remitente` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `destinatario` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(260) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `estado2` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`idmensaje`, `remitente`, `destinatario`, `asunto`, `mensaje`, `fecha`, `estado`, `estado2`) VALUES
(1, '0', '2', 'Test', 'Hola!', '2015-06-12 00:00:00', '1', '1'),
(2, '0', '2', 'Test 2', 'sadhgaskdjashdaskdjksdasjdhajghdasgdhasgsdasd', '2015-06-12 00:00:00', '1', '1'),
(3, '1', '2', 'Test 3', 'esto es de otro usuario', '2015-06-12 00:00:00', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE IF NOT EXISTS `tbusuario` (
  `idUsuario` varchar(5) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechanac` date NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contra` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `image` blob
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nombre`, `apellido`, `fechanac`, `correo`, `usuario`, `contra`, `tipo`, `image`) VALUES
('2', 'Test', 'Test2 prueba', '1994-12-12', 'html@hotmail.com', 'Garcia', 'chaleco234', 2, NULL),
('1', 'Jose', 'Alexander', '1996-01-12', 'correo@hotmail.com', 'Visitante', 'chaleco234', 4, NULL),
('0', 'Fernando Antonio', 'Menjivar Rivera', '1993-12-12', 'Menjivarmenjivar@gmail.com', 'Fernando', '12345', 1, NULL),
('3', 'asd', 'asd', '1233-12-12', 'correo@correo', 'asd', 'asd', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `TempId` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Credenciales` text COLLATE utf8_spanish_ci,
  `Direccion` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `DUI` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `NIT` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono1` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `telefono2` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Rating` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `TempId`, `Credenciales`, `Direccion`, `DUI`, `NIT`, `telefono1`, `telefono2`, `Rating`) VALUES
('0', '0', 'Profesional experto', 'San Salvador', '233333333', '2312321312', '22222222', '22222222', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesoria`
--
ALTER TABLE `asesoria`
 ADD PRIMARY KEY (`IdAsesoria`), ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `comprador`
--
ALTER TABLE `comprador`
 ADD PRIMARY KEY (`IdComprador`), ADD KEY `IdUsuario` (`IdUsuario`,`IdInmueble`);

--
-- Indices de la tabla `convenio`
--
ALTER TABLE `convenio`
 ADD PRIMARY KEY (`IdConvenio`), ADD KEY `Arrendante` (`Arrendante`,`Comprador`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`IdEmpresa`);

--
-- Indices de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
 ADD PRIMARY KEY (`IdEtiqueta`), ADD KEY `Idinmueble` (`Idinmueble`);

--
-- Indices de la tabla `idcontratofin`
--
ALTER TABLE `idcontratofin`
 ADD PRIMARY KEY (`IdContrato`), ADD KEY `Convenio` (`Convenio`);

--
-- Indices de la tabla `inmueble`
--
ALTER TABLE `inmueble`
 ADD PRIMARY KEY (`IdInmueble`), ADD KEY `Dueno` (`Dueno`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
 ADD PRIMARY KEY (`idmensaje`), ADD KEY `remitente` (`remitente`,`destinatario`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
 ADD PRIMARY KEY (`idUsuario`), ADD UNIQUE KEY `usuario` (`usuario`), ADD UNIQUE KEY `usuario_2` (`usuario`), ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`IdUsuario`), ADD UNIQUE KEY `TempId` (`TempId`), ADD UNIQUE KEY `TempId_2` (`TempId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesoria`
--
ALTER TABLE `asesoria`
MODIFY `IdAsesoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comprador`
--
ALTER TABLE `comprador`
MODIFY `IdComprador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `convenio`
--
ALTER TABLE `convenio`
MODIFY `IdConvenio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
MODIFY `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `idcontratofin`
--
ALTER TABLE `idcontratofin`
MODIFY `IdContrato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
MODIFY `idmensaje` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
ADD CONSTRAINT `etiqueta_ibfk_1` FOREIGN KEY (`Idinmueble`) REFERENCES `inmueble` (`IdInmueble`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inmueble`
--
ALTER TABLE `inmueble`
ADD CONSTRAINT `inmueble_ibfk_1` FOREIGN KEY (`Dueno`) REFERENCES `usuario` (`IdUsuario`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
