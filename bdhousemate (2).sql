-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2015 at 01:07 AM
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
-- Table structure for table `asesoria`
--

CREATE TABLE IF NOT EXISTS `asesoria` (
`IdAsesoria` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Tipo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `Satisfactoria` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comprador`
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
-- Table structure for table `convenio`
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
('0', '0', '12345678', 'House el Mate', 'Cerca de por ahi', '12345678902323', '23232323', 'Cosas de la vida', 'House Mate Logo 5.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `empresasolicitud`
--

CREATE TABLE IF NOT EXISTS `empresasolicitud` (
  `idsolicitud` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idempresa` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idusuario` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `aprovado` int(1) NOT NULL,
  `aprovado2` int(1) NOT NULL,
  `mensaje` varchar(260) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etiqueta`
--

CREATE TABLE IF NOT EXISTS `etiqueta` (
  `IdEtiqueta` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Idinmueble` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Netiqueta` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `etiqueta`
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
-- Table structure for table `idcontratofin`
--

CREATE TABLE IF NOT EXISTS `idcontratofin` (
`IdContrato` int(11) NOT NULL,
  `Convenio` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `DescDire` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `inmueble`
--

INSERT INTO `inmueble` (`IdInmueble`, `Dueno`, `Direccion`, `Descripcion`, `VentaRenta`, `Tipopropiedad`, `Precio`, `Imagen`, `DescDire`) VALUES
('0', '0', 'Santa Tecla, La Libertad, El Salvador', 'Test', 2, 1, '23000', 'img/Houses/2.jpg', NULL),
('1', '0', 'Lolotique, San Miguel, El Salvador', 'asd', 1, 1, '2323', 'img/Houses/3.jpg', 'asd');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `mensaje`
--

INSERT INTO `mensaje` (`idmensaje`, `remitente`, `destinatario`, `asunto`, `mensaje`, `fecha`, `estado`, `estado2`) VALUES
(1, '0', '2', 'Test', 'Hola!', '2015-06-12 00:00:00', '', ''),
(2, '0', '2', 'Test 2', 'sadhgaskdjashdaskdjksdasjdhajghdasgdhasgsdasd', '2015-06-12 00:00:00', '', ''),
(3, '1', '2', 'Test 3', 'esto es de otro usuario', '2015-06-12 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbusuario`
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
-- Dumping data for table `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nombre`, `apellido`, `fechanac`, `correo`, `usuario`, `contra`, `tipo`, `image`) VALUES
('2', 'Test', 'Test2 prueba', '1994-12-12', 'html@hotmail.com', 'Garcia', 'chaleco234', 2, NULL),
('1', 'Jose', 'Alexander', '1996-01-12', 'correo@hotmail.com', 'Visitante', 'chaleco234', 4, NULL),
('0', 'Fernando Antonio', 'Menjivar Rivera', '1993-12-12', 'Menjivarmenjivar@gmail.com', 'Fernando', '12345', 1, NULL),
('3', 'asd', 'asd', '1233-12-12', 'correo@correo', 'asd', 'asd', 2, NULL),
('4', 'Usuario prueba', 'Usuario prueba', '1995-12-12', 'cosasdelavida@gmail.com', 'TestDiferencial', '12345', 1, NULL);

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
('1', '1', 'sdasdasd', 'asdsdasd', '131231231', '2321313213', '12312321', '23232323', 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asesoria`
--
ALTER TABLE `asesoria`
 ADD PRIMARY KEY (`IdAsesoria`), ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indexes for table `comprador`
--
ALTER TABLE `comprador`
 ADD PRIMARY KEY (`IdComprador`), ADD KEY `IdUsuario` (`IdUsuario`,`IdInmueble`);

--
-- Indexes for table `convenio`
--
ALTER TABLE `convenio`
 ADD PRIMARY KEY (`IdConvenio`), ADD KEY `Arrendante` (`Arrendante`,`Comprador`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`IdEmpresa`), ADD UNIQUE KEY `Dueño` (`dueño`);

--
-- Indexes for table `empresasolicitud`
--
ALTER TABLE `empresasolicitud`
 ADD PRIMARY KEY (`idsolicitud`), ADD KEY `idempresa` (`idempresa`,`idusuario`), ADD KEY `idempresa_2` (`idempresa`), ADD KEY `idusuario` (`idusuario`);

--
-- Indexes for table `etiqueta`
--
ALTER TABLE `etiqueta`
 ADD PRIMARY KEY (`IdEtiqueta`), ADD KEY `Idinmueble` (`Idinmueble`);

--
-- Indexes for table `idcontratofin`
--
ALTER TABLE `idcontratofin`
 ADD PRIMARY KEY (`IdContrato`), ADD KEY `Convenio` (`Convenio`);

--
-- Indexes for table `inmueble`
--
ALTER TABLE `inmueble`
 ADD PRIMARY KEY (`IdInmueble`), ADD KEY `Dueno` (`Dueno`);

--
-- Indexes for table `mensaje`
--
ALTER TABLE `mensaje`
 ADD PRIMARY KEY (`idmensaje`), ADD KEY `remitente` (`remitente`,`destinatario`), ADD KEY `remitente_2` (`remitente`), ADD KEY `destinatario` (`destinatario`);

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
-- AUTO_INCREMENT for table `asesoria`
--
ALTER TABLE `asesoria`
MODIFY `IdAsesoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comprador`
--
ALTER TABLE `comprador`
MODIFY `IdComprador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `convenio`
--
ALTER TABLE `convenio`
MODIFY `IdConvenio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `idcontratofin`
--
ALTER TABLE `idcontratofin`
MODIFY `IdContrato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mensaje`
--
ALTER TABLE `mensaje`
MODIFY `idmensaje` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

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
-- Constraints for table `inmueble`
--
ALTER TABLE `inmueble`
ADD CONSTRAINT `inmueble_ibfk_1` FOREIGN KEY (`Dueno`) REFERENCES `usuario` (`IdUsuario`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
