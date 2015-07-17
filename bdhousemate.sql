-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2015 a las 22:42:31
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
  `idasocio` int(5) NOT NULL AUTO_INCREMENT,
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
(22, '0', '2', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
  `idfinal` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idusuario` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `aprovado1` int(1) NOT NULL,
  `aprovado2` int(1) NOT NULL,
  PRIMARY KEY (`idfinal`),
  UNIQUE KEY `idinmueble` (`idinmueble`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE IF NOT EXISTS `convenio` (
  `idconvenio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idusuario` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL,
  `aprovado1` int(1) NOT NULL,
  `aprovado2` int(1) NOT NULL,
  PRIMARY KEY (`idconvenio`),
  UNIQUE KEY `idinmueble` (`idinmueble`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `ratings` int(1) DEFAULT NULL,
  PRIMARY KEY (`IdEmpresa`),
  UNIQUE KEY `Dueño` (`dueño`)
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
  `fecha` date NOT NULL,
  PRIMARY KEY (`idmensaje`),
  KEY `idempresa` (`idempresa`)
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
  `mensaje` varchar(260) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idsolicitud`),
  KEY `idempresa` (`idempresa`,`idusuario`),
  KEY `idempresa_2` (`idempresa`),
  KEY `idusuario` (`idusuario`),
  KEY `idempresa_3` (`idempresa`),
  KEY `idusuario_2` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresasolicitud`
--

INSERT INTO `empresasolicitud` (`idsolicitud`, `idempresa`, `idusuario`, `aprovado`, `aprovado2`, `mensaje`) VALUES
('0', '0', '2', 1, 2, 'Unete a la pandilla'),
('1', '0', '1', 1, 0, 'Metete'),
('2', '0', '3', 1, 0, 'Venga papa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta`
--

CREATE TABLE IF NOT EXISTS `etiqueta` (
  `IdEtiqueta` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Netiqueta` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdEtiqueta`),
  KEY `Idinmueble` (`Idinmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `etiqueta`
--

INSERT INTO `etiqueta` (`IdEtiqueta`, `Idinmueble`, `Netiqueta`, `Valor`) VALUES
('1', '0', '1', '1'),
('10', '1', '6', '1'),
('11', '1', '10', '1'),
('12', '2', '2', '1'),
('13', '2', '6', '12332'),
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
  PRIMARY KEY (`IdInmueble`),
  KEY `Dueno` (`Dueno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inmueble`
--

INSERT INTO `inmueble` (`IdInmueble`, `Dueno`, `Direccion`, `Descripcion`, `VentaRenta`, `Tipopropiedad`, `Precio`, `Imagen`, `DescDire`, `estado`, `areadeterreno`, `areadeconstruc`, `aprovado`, `age`, `valuo1`, `valuo2`, `total`) VALUES
('0', '0', 'Santa Tecla, La Libertad, El Salvador', 'Test', 2, 1, '23000', 'img/Houses/2.jpg', NULL, '', '2000', '2000', '', '', '', '', ''),
('1', '0', 'Lolotique, San Miguel, El Salvador', 'asd', 1, 1, '2323', 'img/Houses/3.jpg', 'asd', '', '1500', '1500', '', '', '', '', ''),
('2', '0', 'Cinquera, Cabañas, El Salvador', 'Trying', 1, 2, '12322', 'img/Houses/b.jpg', 'Prueba', '1', '1230', '1230', '0', '15', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `idmensaje` int(5) NOT NULL AUTO_INCREMENT,
  `remitente` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `destinatario` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(260) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `estado2` char(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idmensaje`),
  KEY `remitente` (`remitente`,`destinatario`),
  KEY `remitente_2` (`remitente`),
  KEY `destinatario` (`destinatario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

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
-- Estructura de tabla para la tabla `peritaje`
--

CREATE TABLE IF NOT EXISTS `peritaje` (
  `id_peri` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `idioma` char(1) NOT NULL,
  `valor1` int(5) NOT NULL,
  `valor2` int(5) NOT NULL,
  `valor3` int(5) NOT NULL,
  `categoria` char(1) NOT NULL,
  `creador` varchar(5) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`id_peri`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peritaje`
--

INSERT INTO `peritaje` (`id_peri`, `nombre`, `idioma`, `valor1`, `valor2`, `valor3`, `categoria`, `creador`, `estado`) VALUES
('en1', 'Marble', '2', 7, 7, 7, '1', '3', '1'),
('en2', 'Woodstock', '2', 5, 5, 5, '1', '3', '1'),
('es1', 'Marmol', '1', 7, 0, 0, '1', '3', '2'),
('es2', 'Madera', '1', 5, 5, 5, '1', '3', '1'),
('es3', 'Repelladas', '1', 4, 4, 4, '1', '3', '1'),
('es4', 'Marmol', '1', 10, 10, 10, '1', '3', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadoconevio`
--

CREATE TABLE IF NOT EXISTS `resultadoconevio` (
  `idresultado` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idconvenio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `resultado` int(1) NOT NULL,
  `satisfaccion` int(1) NOT NULL,
  PRIMARY KEY (`idresultado`),
  UNIQUE KEY `idconvenio` (`idconvenio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `image` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `usuario_2` (`usuario`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nombre`, `apellido`, `fechanac`, `correo`, `usuario`, `contra`, `tipo`, `image`) VALUES
('2', 'Test', 'Test2 prueba', '1994-12-12', 'html@hotmail.com', 'Garcia', 'chaleco234', 4, NULL),
('1', 'Jose', 'Alexander', '1996-01-12', 'correo@hotmail.com', 'Visitante', 'chaleco234', 3, NULL),
('0', 'Fernando Antonio', 'Menjivar River', '1993-12-12', 'Menjivarmenjivar@gmail.com', 'Fernando', '12345', 1, 'img/Usuarios/Beatles.jpg'),
('3', 'asd', 'asd', '1233-12-12', 'correo@correo', 'asd', 'asd', 3, NULL),
('4', 'Fer', 'Men', '1990-05-21', 'fern@gmail.com', 'fern', '123', 4, NULL),
('5', 'Fernanddo', 'menji', '1990-05-20', 'fer@g.com', 'asdfdsa', '12345', 4, NULL),
('6', 'addas', 'asdd', '1990-05-20', 'asda@adasdas.asd', 'asddsad', 'asda', 4, NULL),
('7', 'Fernan', 'adadas', '1990-05-20', 'aaaa@aa.a', 'aaaaaa', 'aaaaaa', 4, NULL),
('8', 'ffffffffff', 'ffffffffff', '1990-05-20', 'ffffffffffffff@ffff.ff', 'fffffffffffffffff', 'ffffff', 4, NULL);

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
  `Empresa` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`),
  UNIQUE KEY `TempId` (`TempId`),
  UNIQUE KEY `TempId_2` (`TempId`),
  KEY `Empresa` (`Empresa`)
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
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`idinmueble`) REFERENCES `inmueble` (`IdInmueble`) ON UPDATE CASCADE,
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`IdUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `convenio`
--
ALTER TABLE `convenio`
  ADD CONSTRAINT `convenio_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`IdUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `convenio_ibfk_2` FOREIGN KEY (`idinmueble`) REFERENCES `inmueble` (`IdInmueble`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `inmueble_ibfk_1` FOREIGN KEY (`IdInmueble`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `resultadoconevio`
--
ALTER TABLE `resultadoconevio`
  ADD CONSTRAINT `resultadoconevio_ibfk_1` FOREIGN KEY (`idconvenio`) REFERENCES `convenio` (`idconvenio`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
