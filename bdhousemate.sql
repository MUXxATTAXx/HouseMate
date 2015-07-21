-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2015 a las 00:06:49
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
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE IF NOT EXISTS `asociados` (
  `idasocio` int(5) NOT NULL,
  `socio1` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `socio2` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `solicitud` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`idasocio`, `socio1`, `socio2`, `solicitud`) VALUES
(22, '0', '2', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE IF NOT EXISTS `convenio` (
  `idconvenio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idusuario` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `oferta` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `aprovado1` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `aprovado2` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_aprobacion` date NOT NULL,
  `fecha_final` date NOT NULL,
  `adelanto` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `convenio`
--

INSERT INTO `convenio` (`idconvenio`, `idinmueble`, `idusuario`, `oferta`, `aprovado1`, `aprovado2`, `fecha_aprobacion`, `fecha_final`, `adelanto`) VALUES
('1', '2', '1', '123', '1', '0', '2015-07-31', '2015-08-12', '123'),
('2', '1', '1', '12', '1', '1', '2015-07-21', '2015-08-12', '12'),
('3', '3', '1', '23000', '1', '0', '2015-07-31', '2016-03-19', '23232');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `IdEmpresa` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `dueño` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `telefono2` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ratings` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`IdEmpresa`, `dueño`, `telefono`, `nombre`, `direccion`, `nit`, `telefono2`, `descrip`, `imagen`, `ratings`) VALUES
('0', '0', '11111123', 'House Mate', 'Agua Caliente, Chalatenango, El Salvador', '12345678901112', '23232323', 'Cosas de la vida', 'House Mate Logo 5.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresamen`
--

CREATE TABLE IF NOT EXISTS `empresamen` (
  `idmensaje` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idempresa` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `texto` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresamen`
--

INSERT INTO `empresamen` (`idmensaje`, `idempresa`, `titulo`, `texto`, `fecha`) VALUES
('0', '0', 'Empresa op', 'Bienvenidos a House Mate dentro de esta sección se maneja todo lo referente a empresa.', '2015-07-11'),
('1', '0', 'Terminado', 'Falta poco para terminar todo el modulo de empresa', '2015-07-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresasolicitud`
--

CREATE TABLE IF NOT EXISTS `empresasolicitud` (
  `idsolicitud` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idempresa` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idusuario` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `aprovado` int(1) NOT NULL,
  `aprovado2` int(1) NOT NULL,
  `mensaje` varchar(260) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresasolicitud`
--

INSERT INTO `empresasolicitud` (`idsolicitud`, `idempresa`, `idusuario`, `aprovado`, `aprovado2`, `mensaje`) VALUES
('1', '0', '1', 1, 0, 'Metete'),
('2', '0', '3', 1, 1, 'Venga papa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta`
--

CREATE TABLE IF NOT EXISTS `etiqueta` (
  `IdEtiqueta` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Netiqueta` int(5) NOT NULL,
  `Valor` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `etiqueta`
--

INSERT INTO `etiqueta` (`IdEtiqueta`, `Idinmueble`, `Netiqueta`, `Valor`) VALUES
('1', '0', 1, '1'),
('10', '1', 6, '0'),
('11', '1', 7, '0'),
('12', '1', 8, '0'),
('13', '1', 9, '0'),
('14', '1', 10, '0'),
('15', '2', 1, '13-0-0-0-0'),
('16', '2', 6, '120'),
('17', '2', 7, '0'),
('18', '2', 8, '0'),
('19', '2', 9, '0'),
('2', '0', 2, '1'),
('20', '2', 10, '0'),
('21', '3', 6, '7'),
('22', '3', 7, '2'),
('23', '3', 8, '1'),
('24', '3', 9, '0'),
('25', '3', 10, '0'),
('3', '0', 4, '2'),
('4', '0', 5, '1'),
('5', '0', 7, '1'),
('6', '0', 8, '2'),
('7', '0', 9, '11'),
('8', '0', 10, '2'),
('9', '1', 1, '13-0-0-0-0');

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
  `DescDire` text COLLATE utf8_spanish_ci,
  `estado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `areadeterreno` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `areadeconstruc` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `aprovado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `age` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `valuo1` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `valuo2` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `total` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `remaining` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inmueble`
--

INSERT INTO `inmueble` (`IdInmueble`, `Dueno`, `Direccion`, `Descripcion`, `VentaRenta`, `Tipopropiedad`, `Precio`, `Imagen`, `DescDire`, `estado`, `areadeterreno`, `areadeconstruc`, `aprovado`, `age`, `valuo1`, `valuo2`, `total`, `remaining`) VALUES
('0', '0', 'Santa Tecla, La Libertad, El Salvador', 'Test', 2, 1, '23000', 'img/Houses/2.jpg', NULL, '', '', '', '', '', '', '', '', ''),
('1', '0', 'Apaneca, Ahuachapán, El Salvador', 'asd', 1, 1, '1230', 'img/Houses/b.jpg', 'asd', '1', '120', '120', '0', '10', '0', '0', '0', '0'),
('2', '0', 'Agua Caliente, Chalatenango, El Salvador', '1230', 1, 0, '1230', 'img/Houses/3.jpg', '1230', '3', '120', '120', '0', '10', '0', '0', '0', '0'),
('3', '0', 'Apaneca, Ahuachapán, El Salvador', 'Manual', 2, 1, '1245', 'img/Houses/4.jpg', 'Jose', '2', '186', '122', '0', '10', '0', '0', '0', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`idmensaje`, `remitente`, `destinatario`, `asunto`, `mensaje`, `fecha`, `estado`, `estado2`) VALUES
(1, '0', '2', 'Test', 'Hola!', '2015-06-12 00:00:00', '', ''),
(2, '0', '2', 'Test 2', 'sadhgaskdjashdaskdjksdasjdhajghdasgdhasgsdasd', '2015-06-12 00:00:00', '', ''),
(3, '1', '2', 'Test 3', 'esto es de otro usuario', '2015-06-12 00:00:00', '', ''),
(4, '0', '3', 'asd', 'cristopher esta aca', '2015-06-25 11:04:24', '2', '1'),
(5, '2', '0', 'no', 'j', '2015-06-26 14:11:48', '2', '1'),
(6, '0', '2', 'soy gay', 'ño', '2015-06-26 14:20:38', '1', '2'),
(7, '0', '3', '', '', '2015-06-26 14:21:02', '1', '3');

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
  `contra` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nombre`, `apellido`, `fechanac`, `correo`, `usuario`, `contra`, `tipo`, `image`) VALUES
('2', 'Test', 'Test2 prueba', '1994-12-12', 'html@hotmail.com', 'Garcia', 'chaleco234', 4, NULL),
('1', 'Jose', 'Alexander', '1996-01-12', 'correo@hotmail.com', 'Visitante', 'chaleco234', 4, NULL),
('0', 'Fernando Antonio', 'Menjivar Rivera', '1993-12-12', 'Menjivarmenjivar@gmail.com', 'Fernando', '12345', 1, NULL),
('3', 'asd', 'asd', '1233-12-12', 'correo@correo', 'Perito', 'chaleco234', 3, NULL),
('4', 'Jose Alexander', 'Garcia Valladares', '1995-12-12', 'nome@hotmail.com', 'alexan', 'chaleco234', 4, NULL);

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
  `Rating` int(1) DEFAULT NULL,
  `Empresa` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `TempId`, `Credenciales`, `Direccion`, `DUI`, `NIT`, `telefono1`, `telefono2`, `Rating`, `Empresa`) VALUES
('0', '0', 'Profesional experto', 'San Salvador', '233333333', '2312321312', '22222222', '22222222', 0, '0'),
('1', '1', 'sdasdasd', 'asdsdasd', '131231231', '2321313213', '12312321', '23232323', 0, ''),
('2', '3', 'Credencial goes here', 'Dirrecion goes here', '123213213', '1232132131', '23232323', '23232323', 0, ''),
('3', '2', 'New at the company mates', 'sasdasasjdlkasjdkl', '123123232', '1223213213', '23232332', '23232323', 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`idasocio`), ADD KEY `socio1` (`socio1`,`socio2`);

--
-- Indices de la tabla `convenio`
--
ALTER TABLE `convenio`
  ADD PRIMARY KEY (`idconvenio`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`IdEmpresa`), ADD UNIQUE KEY `Dueño` (`dueño`);

--
-- Indices de la tabla `empresamen`
--
ALTER TABLE `empresamen`
  ADD PRIMARY KEY (`idmensaje`), ADD KEY `idempresa` (`idempresa`);

--
-- Indices de la tabla `empresasolicitud`
--
ALTER TABLE `empresasolicitud`
  ADD PRIMARY KEY (`idsolicitud`), ADD KEY `idempresa` (`idempresa`,`idusuario`), ADD KEY `idempresa_2` (`idempresa`), ADD KEY `idusuario` (`idusuario`), ADD KEY `idempresa_3` (`idempresa`), ADD KEY `idusuario_2` (`idusuario`);

--
-- Indices de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  ADD PRIMARY KEY (`IdEtiqueta`), ADD KEY `Idinmueble` (`Idinmueble`);

--
-- Indices de la tabla `inmueble`
--
ALTER TABLE `inmueble`
  ADD PRIMARY KEY (`IdInmueble`), ADD KEY `Dueno` (`Dueno`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`idmensaje`), ADD KEY `remitente` (`remitente`,`destinatario`), ADD KEY `remitente_2` (`remitente`), ADD KEY `destinatario` (`destinatario`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`), ADD UNIQUE KEY `usuario` (`usuario`), ADD UNIQUE KEY `usuario_2` (`usuario`), ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`), ADD UNIQUE KEY `TempId` (`TempId`), ADD UNIQUE KEY `TempId_2` (`TempId`), ADD KEY `Empresa` (`Empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asociados`
--
ALTER TABLE `asociados`
  MODIFY `idasocio` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `idmensaje` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`dueño`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `empresamen`
--
ALTER TABLE `empresamen`
ADD CONSTRAINT `empresamen_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`IdEmpresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresasolicitud`
--
ALTER TABLE `empresasolicitud`
ADD CONSTRAINT `empresasolicitud_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`IdEmpresa`),
ADD CONSTRAINT `empresasolicitud_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
ADD CONSTRAINT `etiqueta_ibfk_1` FOREIGN KEY (`Idinmueble`) REFERENCES `inmueble` (`IdInmueble`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inmueble`
--
ALTER TABLE `inmueble`
ADD CONSTRAINT `inmueble_ibfk_1` FOREIGN KEY (`Dueno`) REFERENCES `usuario` (`IdUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
