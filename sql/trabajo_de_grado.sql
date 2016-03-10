-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-03-2016 a las 04:54:37
-- Versión del servidor: 5.5.47-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `trabajo_de_grado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `autor1` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `autor2` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `autor3` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nombreAsesor` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `fechaIngreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `notaRecivida` double NOT NULL,
  `lineaInvestigacion` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='En esta tabla se encuentra la descripcion de los proyectos de grados' AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `identificador`, `nombre`, `autor1`, `autor2`, `autor3`, `nombreAsesor`, `fechaIngreso`, `notaRecivida`, `lineaInvestigacion`) VALUES
(2, 12345, 'tratamiento de fobia a cucarachas con realidad aumentada								', 'Carlos florez', 'anllelith hernandez', '', 'jorge gomez', '2010-01-01 05:40:24', 5, 'tecnologias'),
(3, 23456, 'realidad aumentada', 'Carlos florez', '', '', 'pedro guevara', '2016-03-07 04:17:35', 4.5, 'tecnologia'),
(7, 56789, 'geolocalizacion', 'julia torres', 'samir llorente', 'luisa', 'carlos florez', '2016-03-08 18:47:08', 3, 'descriptiva'),
(10, 19655, 'aplicacion web de participacion ciudadana', 'cristian ledesma', 'stefania castro', '', 'daniel salas', '2016-03-09 10:51:11', 5, 'desarrollo web'),
(11, 345678888, 'sistema de gestiÃ³n de inventario', 'carlos florez', '', '', 'anllelith', '2016-03-09 06:14:29', 5, 'desarrollo de software');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
