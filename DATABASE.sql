-- phpMyAdmin SQL Dump
-- version 3.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-08-2011 a las 11:11:44
-- Versión del servidor: 5.0.92
-- Versión de PHP: 5.2.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Estructura de tabla para la tabla `ciudades`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` smallint(4) unsigned NOT NULL auto_increment,
  `ciudad` varchar(100) collate utf8_spanish2_ci NOT NULL,
  `cpostalA` varchar(4) collate utf8_spanish2_ci NOT NULL,
  `provincia_id` smallint(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` smallint(6) unsigned NOT NULL auto_increment,
  `nfantasia` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `rsocial` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `fjuridica_id` smallint(2) NOT NULL,
  `tdocumento_id` smallint(2) NOT NULL,
  `ndocumento` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `observaciones` longtext collate utf8_spanish2_ci NOT NULL,
  `baja` tinyint(1) NOT NULL,
  `fbaja` date NOT NULL,
  `iva_id` smallint(2) NOT NULL,
  `iibb_id` smallint(2) NOT NULL,
  `niibb` varchar(20) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `denominacion_id` smallint(2) NOT NULL,
  `nombre` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `notas` longtext collate utf8_spanish2_ci NOT NULL,
  `cliente_id` smallint(6) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_grupos`
--
-- Creación: 12-08-2011 a las 20:38:31
-- Última actualización: 15-08-2011 a las 14:14:12
--

CREATE TABLE IF NOT EXISTS `contacto_grupos` (
  `id` smallint(4) unsigned NOT NULL auto_increment,
  `contacto_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denominaciones`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `denominaciones` (
  `id` smallint(2) unsigned NOT NULL auto_increment,
  `denominacion` varchar(45) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `direcciones` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `tcontacto_id` smallint(2) NOT NULL,
  `direccion` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `cpostalb` varchar(3) collate utf8_spanish2_ci NOT NULL,
  `ciudad_id` smallint(2) NOT NULL,
  `contacto_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emails`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` smallint(3) unsigned NOT NULL auto_increment,
  `tcontacto_id` smallint(2) NOT NULL,
  `email` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `contacto_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` smallint(1) unsigned NOT NULL auto_increment,
  `rsocial` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `cuit` varchar(13) collate utf8_spanish2_ci NOT NULL,
  `nfantasia` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `denominacion_id` smallint(2) NOT NULL,
  `presponsable` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `dni` varchar(10) collate utf8_spanish2_ci NOT NULL,
  `cargo` varchar(45) collate utf8_spanish2_ci NOT NULL,
  `logotipo` mediumblob NOT NULL,
  `iva_id` smallint(2) NOT NULL,
  `iibb_id` smallint(2) NOT NULL,
  `niibb` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `finicio` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fjuridicas`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `fjuridicas` (
  `id` smallint(2) unsigned NOT NULL auto_increment,
  `fjuridica` varchar(20) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--
-- Creación: 13-08-2011 a las 03:16:30
-- Última actualización: 13-08-2011 a las 03:16:30
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` smallint(2) unsigned NOT NULL auto_increment,
  `grupo` varchar(40) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iibb`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `iibb` (
  `id` smallint(2) unsigned NOT NULL auto_increment,
  `iibb` varchar(45) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iva`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `iva` (
  `id` smallint(2) unsigned NOT NULL auto_increment,
  `iva` varchar(45) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` smallint(2) NOT NULL auto_increment,
  `pais` varchar(100) collate utf8_spanish2_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `id` smallint(2) unsigned NOT NULL auto_increment,
  `provincia` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `prefijo_postal` varchar(1) collate utf8_spanish2_ci NOT NULL,
  `pais_id` smallint(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `swebs`
--
-- Creación: 12-08-2011 a las 15:20:28
-- Última actualización: 15-08-2011 a las 13:41:36
--

CREATE TABLE IF NOT EXISTS `swebs` (
  `id` smallint(3) unsigned NOT NULL auto_increment,
  `tcontacto_id` smallint(2) NOT NULL,
  `sweb` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `contacto_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcontactos`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `tcontactos` (
  `id` smallint(2) unsigned NOT NULL auto_increment,
  `tcontacto` varchar(45) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdocumentos`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `tdocumentos` (
  `id` smallint(2) unsigned NOT NULL auto_increment,
  `tdocumento` varchar(45) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--
-- Creación: 24-08-2011 a las 03:45:09
--

CREATE TABLE IF NOT EXISTS `telefonos` (
  `id` smallint(3) unsigned NOT NULL auto_increment,
  `telefono` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `tcontacto_id` int(11) NOT NULL,
  `contacto_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
