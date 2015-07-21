-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2015 at 04:48 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdhousemate`
--

-- --------------------------------------------------------

--
-- Table structure for table `asociados`
--

CREATE TABLE IF NOT EXISTS `asociados` (
`idasocio` int(5) NOT NULL,
  `socio1` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `socio2` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `solicitud` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `asociados`
--

INSERT INTO `asociados` (`idasocio`, `socio1`, `socio2`, `solicitud`) VALUES
(22, '0', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
  `idfinal` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idusuario` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `aprovado1` int(1) NOT NULL,
  `aprovado2` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `convenio`
--

CREATE TABLE IF NOT EXISTS `convenio` (
  `idconvenio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idusuario` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL,
  `aprovado1` int(1) NOT NULL,
  `aprovado2` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
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
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`IdEmpresa`, `dueño`, `telefono`, `nombre`, `direccion`, `nit`, `telefono2`, `descrip`, `imagen`, `ratings`) VALUES
('0', '0', '11111123', 'House Mate', 'Agua Caliente, Chalatenango, El Salvador', '12345678901112', '23232323', 'Cosas de la vida', 'House Mate Logo 5.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `empresamen`
--

CREATE TABLE IF NOT EXISTS `empresamen` (
  `idmensaje` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idempresa` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `texto` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `empresamen`
--

INSERT INTO `empresamen` (`idmensaje`, `idempresa`, `titulo`, `texto`, `fecha`) VALUES
('0', '0', 'Empresa op', 'Bienvenidos a House Mate dentro de esta sección se maneja todo lo referente a empresa.', '2015-07-11'),
('1', '0', 'Terminado', 'Falta poco para terminar todo el modulo de empresa', '2015-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `empresasolicitud`
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
-- Dumping data for table `empresasolicitud`
--

INSERT INTO `empresasolicitud` (`idsolicitud`, `idempresa`, `idusuario`, `aprovado`, `aprovado2`, `mensaje`) VALUES
('1', '0', '1', 1, 0, 'Metete'),
('2', '0', '3', 1, 1, 'Venga papa');

-- --------------------------------------------------------

--
-- Table structure for table `etiqueta`
--

CREATE TABLE IF NOT EXISTS `etiqueta` (
  `IdEtiqueta` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Netiqueta` int(5) NOT NULL,
  `Valor` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `etiqueta`
--

INSERT INTO `etiqueta` (`IdEtiqueta`, `Idinmueble`, `Netiqueta`, `Valor`) VALUES
('0', '0', 1, '0'),
('1', '0', 1, '0'),
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
('2', '0', 2, '0'),
('20', '2', 10, '0'),
('22', '4', 1, '12-0-0-0-0'),
('23', '4', 6, '0'),
('24', '4', 7, '0'),
('25', '4', 8, '0'),
('26', '4', 9, '0'),
('27', '4', 10, '0'),
('28', '5', 6, '0'),
('29', '5', 7, '0'),
('3', '0', 4, '0'),
('30', '5', 8, '0'),
('31', '5', 9, '0'),
('32', '5', 10, '0'),
('33', '6', 1, '23-0-0-0-0'),
('34', '6', 2, '123-123-123-123-0'),
('35', '6', 6, '0'),
('36', '6', 7, '0'),
('37', '6', 8, '0'),
('38', '6', 9, '0'),
('39', '6', 10, '0'),
('4', '0', 5, '0'),
('40', '7', 1, '123-0-0-0-0'),
('41', '7', 6, '0'),
('42', '7', 7, '0'),
('43', '7', 8, '0'),
('44', '7', 9, '0'),
('45', '7', 10, '0'),
('5', '0', 7, '0'),
('6', '0', 8, '0'),
('7', '0', 9, '0'),
('8', '0', 10, '0'),
('9', '1', 1, '13-0-0-0-0');

-- --------------------------------------------------------

--
-- Table structure for table `inmueble`
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
  `remaining` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `perito` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `inmueble`
--

INSERT INTO `inmueble` (`IdInmueble`, `Dueno`, `Direccion`, `Descripcion`, `VentaRenta`, `Tipopropiedad`, `Precio`, `Imagen`, `DescDire`, `estado`, `areadeterreno`, `areadeconstruc`, `aprovado`, `age`, `valuo1`, `valuo2`, `total`, `remaining`, `perito`) VALUES
('0', '0', 'Santa Tecla, La Libertad, El Salvador', 'Test', 2, 1, '23000', 'img/Houses/2.jpg', NULL, '', '', '', '', '', '', '', '', '', ''),
('1', '0', 'Apaneca, Ahuachapán, El Salvador', 'asd', 1, 1, '1230', 'img/Houses/b.jpg', 'asd', '1', '120', '120', '0', '10', '0', '0', '0', '0', ''),
('2', '0', 'Agua Caliente, Chalatenango, El Salvador', '1230', 1, 0, '1230', 'img/Houses/3.jpg', '1230', '3', '120', '120', '0', '10', '0', '0', '0', '0', ''),
('3', '0', 'El Refugio, Ahuachapán, El Salvador', 'asd', 2, 2, '1234', 'img/Houses/4.jpg', 'asd', '2', '123', '123', '0', '12', '0', '0', '0', '0', ''),
('4', '0', 'Agua Caliente, Chalatenango, El Salvador', 'asd', 2, 2, '1234', 'img/Houses/f.jpg', 'asd', '2', '123', '123', '0', '11', '0', '0', '0', '0', ''),
('5', '0', 'Agua Caliente, Chalatenango, El Salvador', 'asd', 2, 2, '1234', 'img/Houses/e.jpg', 'asd', '1', '123', '123', '1', '12', '8002.47', '1476.00', '9478.47', '60', '3'),
('6', '0', 'Cinquera, Cabañas, El Salvador', '123', 1, 1, '1231232', 'img/Houses/1.jpg', '123', '1', '123', '123', '0', '12', '0', '0', '0', '0', ''),
('7', '0', 'Arambala, Morazán, El Salvador', 'as', 2, 1, '1230', 'img/Houses/c.jpg', 'asdasd', '2', '123', '12', '0', '12', '0', '0', '0', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `mensaje`
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
-- Dumping data for table `mensaje`
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
-- Table structure for table `peritaje`
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
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peritaje`
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
-- Table structure for table `resultadoconevio`
--

CREATE TABLE IF NOT EXISTS `resultadoconevio` (
  `idresultado` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idconvenio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `resultado` int(1) NOT NULL,
  `satisfaccion` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbusuario`
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
-- Dumping data for table `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nombre`, `apellido`, `fechanac`, `correo`, `usuario`, `contra`, `tipo`, `image`) VALUES
('2', 'Test', 'Test2 prueba', '1994-12-12', 'html@hotmail.com', 'Garcia', 'chaleco234', 4, NULL),
('1', 'Jose', 'Alexander', '1996-01-12', 'correo@hotmail.com', 'Visitante', 'chaleco234', 3, NULL),
('0', 'Fernando Antonio', 'Menjivar Rivera', '1993-12-12', 'Menjivarmenjivar@gmail.com', 'Fernando', '12345', 1, NULL),
('3', 'asd', 'asd', '1233-12-12', 'correo@correo', 'asd', 'asd', 3, NULL),
('4', 'Jose Alexander', 'Garcia Valladares', '1995-12-12', 'nome@hotmail.com', 'alexan', 'chaleco234', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
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
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `TempId`, `Credenciales`, `Direccion`, `DUI`, `NIT`, `telefono1`, `telefono2`, `Rating`, `Empresa`) VALUES
('0', '0', 'Profesional experto', 'San Salvador', '233333333', '2312321312', '22222222', '22222222', 0, '0'),
('1', '1', 'sdasdasd', 'asdsdasd', '131231231', '2321313213', '12312321', '23232323', 0, ''),
('2', '3', 'Credencial goes here', 'Dirrecion goes here', '123213213', '1232132131', '23232323', '23232323', 0, ''),
('3', '2', 'New at the company mates', 'sasdasasjdlkasjdkl', '123123232', '1223213213', '23232332', '23232323', 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asociados`
--
ALTER TABLE `asociados`
 ADD PRIMARY KEY (`idasocio`), ADD KEY `socio1` (`socio1`,`socio2`);

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
 ADD PRIMARY KEY (`idfinal`), ADD UNIQUE KEY `idinmueble` (`idinmueble`), ADD KEY `idusuario` (`idusuario`);

--
-- Indexes for table `convenio`
--
ALTER TABLE `convenio`
 ADD PRIMARY KEY (`idconvenio`), ADD UNIQUE KEY `idinmueble` (`idinmueble`), ADD KEY `idusuario` (`idusuario`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`IdEmpresa`), ADD UNIQUE KEY `Dueño` (`dueño`);

--
-- Indexes for table `empresamen`
--
ALTER TABLE `empresamen`
 ADD PRIMARY KEY (`idmensaje`), ADD KEY `idempresa` (`idempresa`);

--
-- Indexes for table `empresasolicitud`
--
ALTER TABLE `empresasolicitud`
 ADD PRIMARY KEY (`idsolicitud`), ADD KEY `idempresa` (`idempresa`,`idusuario`), ADD KEY `idempresa_2` (`idempresa`), ADD KEY `idusuario` (`idusuario`), ADD KEY `idempresa_3` (`idempresa`), ADD KEY `idusuario_2` (`idusuario`);

--
-- Indexes for table `etiqueta`
--
ALTER TABLE `etiqueta`
 ADD PRIMARY KEY (`IdEtiqueta`), ADD KEY `Idinmueble` (`Idinmueble`);

--
-- Indexes for table `inmueble`
--
ALTER TABLE `inmueble`
 ADD PRIMARY KEY (`IdInmueble`), ADD KEY `Dueno` (`Dueno`), ADD KEY `Dueno_2` (`Dueno`), ADD KEY `Dueno_3` (`Dueno`);

--
-- Indexes for table `mensaje`
--
ALTER TABLE `mensaje`
 ADD PRIMARY KEY (`idmensaje`), ADD KEY `remitente` (`remitente`,`destinatario`), ADD KEY `remitente_2` (`remitente`), ADD KEY `destinatario` (`destinatario`);

--
-- Indexes for table `peritaje`
--
ALTER TABLE `peritaje`
 ADD PRIMARY KEY (`id_peri`), ADD KEY `categoria` (`categoria`);

--
-- Indexes for table `resultadoconevio`
--
ALTER TABLE `resultadoconevio`
 ADD PRIMARY KEY (`idresultado`), ADD UNIQUE KEY `idconvenio` (`idconvenio`);

--
-- Indexes for table `tbusuario`
--
ALTER TABLE `tbusuario`
 ADD PRIMARY KEY (`idUsuario`), ADD UNIQUE KEY `usuario` (`usuario`), ADD UNIQUE KEY `usuario_2` (`usuario`), ADD UNIQUE KEY `correo` (`correo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`IdUsuario`), ADD UNIQUE KEY `TempId` (`TempId`), ADD UNIQUE KEY `TempId_2` (`TempId`), ADD KEY `Empresa` (`Empresa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asociados`
--
ALTER TABLE `asociados`
MODIFY `idasocio` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `mensaje`
--
ALTER TABLE `mensaje`
MODIFY `idmensaje` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contrato`
--
ALTER TABLE `contrato`
ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`idinmueble`) REFERENCES `inmueble` (`IdInmueble`) ON UPDATE CASCADE,
ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`IdUsuario`) ON UPDATE CASCADE;

--
-- Constraints for table `convenio`
--
ALTER TABLE `convenio`
ADD CONSTRAINT `convenio_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`IdUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `convenio_ibfk_2` FOREIGN KEY (`idinmueble`) REFERENCES `inmueble` (`IdInmueble`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `empresa`
--
ALTER TABLE `empresa`
ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`dueño`) REFERENCES `usuario` (`IdUsuario`);

--
-- Constraints for table `empresamen`
--
ALTER TABLE `empresamen`
ADD CONSTRAINT `empresamen_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`IdEmpresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `empresasolicitud`
--
ALTER TABLE `empresasolicitud`
ADD CONSTRAINT `empresasolicitud_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`IdEmpresa`),
ADD CONSTRAINT `empresasolicitud_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`IdUsuario`);

--
-- Constraints for table `etiqueta`
--
ALTER TABLE `etiqueta`
ADD CONSTRAINT `etiqueta_ibfk_1` FOREIGN KEY (`Idinmueble`) REFERENCES `inmueble` (`IdInmueble`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resultadoconevio`
--
ALTER TABLE `resultadoconevio`
ADD CONSTRAINT `resultadoconevio_ibfk_1` FOREIGN KEY (`idconvenio`) REFERENCES `convenio` (`idconvenio`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
