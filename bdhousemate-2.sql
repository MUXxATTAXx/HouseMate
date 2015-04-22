-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 03:44 AM
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
`IdEmpresa` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(140) COLLATE utf8_spanish_ci NOT NULL,
  `NIT` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Ratings` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
('10', '1', '3', '1'),
('11', '1', '5', '1'),
('12', '1', '6', '1'),
('13', '1', '7', '1'),
('14', '1', '8', '1'),
('15', '1', '9', '11'),
('16', '1', '10', '1'),
('17', '2', '1', '2'),
('18', '2', '2', '2'),
('19', '2', '3', '2'),
('2', '0', '2', '1'),
('20', '2', '4', '2'),
('21', '2', '5', '2'),
('22', '2', '6', '2'),
('23', '2', '7', '2'),
('24', '2', '8', '1'),
('25', '2', '9', '11'),
('26', '2', '10', '2'),
('27', '3', '1', '1'),
('28', '3', '3', '1'),
('29', '3', '4', '1'),
('3', '0', '4', '2'),
('30', '3', '5', '1'),
('31', '3', '6', '1'),
('32', '3', '8', '1'),
('33', '3', '9', '11'),
('34', '4', '1', '1'),
('35', '4', '2', '1'),
('36', '4', '3', '1'),
('37', '4', '4', '1'),
('38', '4', '5', '1'),
('39', '4', '9', '11'),
('4', '0', '5', '1'),
('40', '5', '1', '1'),
('41', '5', '2', '1'),
('42', '5', '3', '1'),
('43', '5', '4', '1'),
('44', '5', '5', '1'),
('45', '5', '6', '1'),
('46', '5', '7', '1'),
('47', '5', '8', '1'),
('48', '5', '9', '11'),
('49', '5', '10', '1'),
('5', '0', '7', '1'),
('6', '0', '8', '2'),
('7', '0', '9', '11'),
('8', '0', '10', '2'),
('9', '1', '1', '1');

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
  `Imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `inmueble`
--

INSERT INTO `inmueble` (`IdInmueble`, `Dueno`, `Direccion`, `Descripcion`, `VentaRenta`, `Tipopropiedad`, `Precio`, `Imagen`) VALUES
('0', '0', 'Test', 'Test', 2, 1, '23000', 'img/Houses/2.jpg'),
('1', '0', 'Santa Tecla', 'Casa nueva casi sin usar', 2, 1, '200', 'img/Houses/5.jpg'),
('2', '0', 'Santa Ana', 'Casa en Santa Ana', 1, 2, '21323', 'img/Houses/f.jpg'),
('3', '0', 'La Paz', 'Grande', 1, 1, '12323', 'img/Houses/3.jpg'),
('4', '0', 'Chalatenango', 'Casa linda', 2, 1, '150', 'img/Houses/1.jpg'),
('5', '0', 'La Libertad San José Villanueva La example', 'Casa bonita', 1, 1, '120000', 'img/Houses/d.jpg');

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
('2', 'José Alexander', 'García Valladares', '1997-02-05', 'muxxattaxx@hotmail.com', 'Enter', '12345', 1, NULL),
('1', 'Jose', 'Alexander', '1996-01-12', 'correo@hotmail.com', 'Visitante', 'chaleco234', 4, NULL),
('0', 'Fernando Antonio', 'Menjivar Rivera', '1993-12-12', 'Menjivarmenjivar@gmail.com', 'Fernando', '12345', 1, NULL);

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
  `Rating` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `TempId`, `Credenciales`, `Direccion`, `DUI`, `NIT`, `telefono1`, `telefono2`, `Rating`) VALUES
('0', '0', 'Profesional experto', 'San Salvador', '233333333', '2312321312', '22222222', '22222222', 0);

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
 ADD PRIMARY KEY (`IdEmpresa`);

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
-- Indexes for table `tbusuario`
--
ALTER TABLE `tbusuario`
 ADD PRIMARY KEY (`idUsuario`), ADD UNIQUE KEY `usuario` (`usuario`), ADD UNIQUE KEY `usuario_2` (`usuario`), ADD UNIQUE KEY `correo` (`correo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`IdUsuario`), ADD UNIQUE KEY `TempId` (`TempId`), ADD UNIQUE KEY `TempId_2` (`TempId`);

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
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
MODIFY `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `idcontratofin`
--
ALTER TABLE `idcontratofin`
MODIFY `IdContrato` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

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
