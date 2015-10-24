-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-10-2015 a las 00:17:55
-- Versión del servidor: 5.5.36-cll-lve
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `basc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_economica`
--

CREATE TABLE IF NOT EXISTS `actividad_economica` (
  `actEco_id` int(11) NOT NULL,
  `actEco_Detalle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`actEco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividad_economica`
--

INSERT INTO `actividad_economica` (`actEco_id`, `actEco_Detalle`) VALUES
(1, 'Agricultura'),
(2, 'Ganaderia'),
(3, 'Industria'),
(4, 'Comercio'),
(5, 'Comunicaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_hijo`
--

CREATE TABLE IF NOT EXISTS `actividad_hijo` (
  `actHij_id` int(11) NOT NULL AUTO_INCREMENT,
  `actHij_nombre` varchar(255) DEFAULT NULL,
  `actHij_fechaInicio` date DEFAULT NULL,
  `actHij_fechaFinalizacion` date DEFAULT NULL,
  `actHij_peso` varchar(255) DEFAULT NULL,
  `actHij_riesgoSancion` varchar(255) DEFAULT NULL,
  `tip_id` int(11) DEFAULT NULL,
  `actHij_presupuestoTotal` varchar(255) DEFAULT NULL,
  `actHij_costoReal` varchar(255) DEFAULT NULL,
  `actHij_descripcion` text,
  `actHij_modoVerificacion` text,
  `pla_id` int(11) DEFAULT NULL,
  `actHij_padreid` varchar(255) DEFAULT NULL,
  `actHij_fechaCreacion` datetime DEFAULT NULL,
  `actHij_fechaModificacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`actHij_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `actividad_hijo`
--

INSERT INTO `actividad_hijo` (`actHij_id`, `actHij_nombre`, `actHij_fechaInicio`, `actHij_fechaFinalizacion`, `actHij_peso`, `actHij_riesgoSancion`, `tip_id`, `actHij_presupuestoTotal`, `actHij_costoReal`, `actHij_descripcion`, `actHij_modoVerificacion`, `pla_id`, `actHij_padreid`, `actHij_fechaCreacion`, `actHij_fechaModificacion`) VALUES
(1, 'act hijo', '2015-10-14', '2015-10-30', '233', '2332', 1, '2345', '2345', 'descripcion prueba', 'modo verificación ', 7, '12', NULL, NULL),
(2, 'act hijo', '2015-10-14', '2015-10-30', '233', '2332', 1, '2345', '2345', 'descripcion prueba', 'modo verificación ', 7, '12', '2015-10-12 05:17:24', NULL),
(3, 'xxxxx', '2015-10-07', '2015-10-17', '22', '22', 1, '22', '22', 'xyz2222', '2222', 7, '12', '2015-10-12 05:22:17', NULL),
(4, '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', 8, '', '2015-10-16 15:23:07', NULL),
(5, 'sdf', '2015-10-09', '0000-00-00', '', '', 0, '', '', 'sdf', 'sdf', 7, 'sdf', '2015-10-16 18:11:46', NULL),
(6, 'sdf', '2015-10-01', '2015-10-09', '22', '22', 0, '23', '23', 'sdf', 'asdf', 7, 'df', '2015-10-16 18:13:06', NULL),
(7, 'sfd', '2015-10-10', '2015-10-23', '22', '22', 0, '123', '123', 'asdf', 'asdf', 7, 'sdf', '2015-10-16 18:14:11', NULL),
(8, 'asdfasdfasdfa', '2015-10-03', '2015-10-03', '12', '12', 0, '12', '12', 'asfdasdfasdfasdf', 'asdfasdf', 7, '121212', '2015-10-16 18:17:51', NULL),
(9, 'sdf', '2015-10-24', '2015-10-01', '12', '12', 0, '12', '12', 'asdf', 'asdasfd', 7, 'sdf', '2015-10-16 18:21:24', NULL),
(10, 'sfd', '2015-10-16', '2015-10-09', '212', '12', 0, '12', '12', 'fd', 'asfd', 7, 'asd', '2015-10-16 18:25:08', NULL),
(11, '23', '2015-10-09', '2015-09-16', '1212', '12', 0, '12', '12', 'asdf', 'asfd', 7, '23', '2015-10-16 18:35:23', NULL),
(12, 'f', '2015-10-16', '2015-10-16', '32', '23', 0, '23', '23', 'sfd', 'sdf', 7, 'sdf', '2015-10-16 18:40:04', NULL),
(13, 'd', '2015-10-16', '2015-10-16', 'df', 'sdf', 0, '123', '12', 'sfd', 'asdf', 7, 'sd', '2015-10-16 19:16:14', NULL),
(14, 'sdf', '2015-10-16', '2015-10-15', '', '', 0, '', '', 'sfdga', '', 7, 'asfd', '2015-10-16 19:21:54', NULL),
(15, 'sdf', '2015-10-16', '2015-10-16', '', '', 0, '', '', 'sdf', 'sfd', 7, 'sdf', '2015-10-16 19:23:41', NULL),
(16, 'valorar riesgos fisicos', '2015-10-01', '2015-12-31', '10', '', 0, '', '', 'valoración de riesgos físicos de todos los empleados', '', 12, '9  ', '2015-10-22 21:56:28', NULL),
(17, 'capacitar en riesgos', '2015-10-01', '2015-10-31', '', '', 0, '', '', '', '', 13, '8  ', '2015-10-23 03:13:46', NULL),
(18, 'gerson javier', '2015-10-01', '2015-10-29', '12', '12', 0, '12', '12', 'dfsdfsdfsdf', 'sdfsdfsdfs', 7, '3  ', '2015-10-23 06:49:27', NULL),
(19, '1111', '2015-10-01', '2015-10-31', '11', '11', 0, '11', '11', 'prueba gerson', 'prueba gerson', 7, '3  ', '2015-10-23 06:54:19', NULL),
(20, 'xxx', '2015-10-07', '2015-10-30', '11', '11', 0, '11', '11', 'xxx', 'xx', 7, '3  ', '2015-10-23 06:55:42', NULL),
(21, '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', 7, '', '2015-10-23 07:01:20', NULL),
(22, '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', 7, '3  ', '2015-10-23 07:03:14', NULL),
(23, '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', 7, '3  ', '2015-10-23 07:09:23', NULL),
(24, 'prueba Nn gg', '0000-00-00', '0000-00-00', '', '', 0, '', '', 'prueba Nn gg', '', 7, '3  ', '2015-10-23 07:11:27', NULL),
(25, 'qqqqq', '0000-00-00', '0000-00-00', '', '', 0, '', '', 'qqqqq', '', 7, '3  ', '2015-10-23 07:12:51', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_padre`
--

CREATE TABLE IF NOT EXISTS `actividad_padre` (
  `actPad_id` int(11) NOT NULL AUTO_INCREMENT,
  `actPad_nombre` varchar(255) DEFAULT NULL,
  `actPad_codigo` varchar(255) DEFAULT 'S',
  `pla_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`actPad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `actividad_padre`
--

INSERT INTO `actividad_padre` (`actPad_id`, `actPad_nombre`, `actPad_codigo`, `pla_id`) VALUES
(1, 'prueba', 'S', 6),
(2, 'sfdsafdsdfadf', '23ssdf', 6),
(3, 'prueba gerson', '23ssdf', 7),
(31, 'yyy', 'yyyyy', 7),
(32, 'prueba', 'gerson', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminformularios`
--

CREATE TABLE IF NOT EXISTS `adminformularios` (
  `form_id` int(11) NOT NULL AUTO_INCREMENT,
  `form_formulario` varchar(255) DEFAULT NULL COMMENT '1 empresa, 2 usuario 3 vehiculos 0 otra',
  `form_campo` varchar(255) DEFAULT NULL,
  `form_nombre` varchar(255) DEFAULT NULL,
  `form_valor` int(2) DEFAULT '0' COMMENT '0 activo 1 inactivo 2 eliminado',
  `form_accion` int(2) DEFAULT '0' COMMENT '0 activo 1 inactivo 2 eliminado',
  `form_nombreForm` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `adminformularios`
--

INSERT INTO `adminformularios` (`form_id`, `form_formulario`, `form_campo`, `form_nombre`, `form_valor`, `form_accion`, `form_nombreForm`) VALUES
(4, '0', 'OTRO', 'OTRO', 0, 0, 'OTRO'),
(5, '1', ' Tipo de Empresa', 'pública', 1, 0, 'Empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseguradoras`
--

CREATE TABLE IF NOT EXISTS `aseguradoras` (
  `ase_id` int(11) NOT NULL AUTO_INCREMENT,
  `ase_nombre` varchar(255) DEFAULT NULL,
  `activo` varchar(1) DEFAULT 'S',
  `tipAse_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `aseguradoras`
--

INSERT INTO `aseguradoras` (`ase_id`, `ase_nombre`, `activo`, `tipAse_id`) VALUES
(1, 'pru1', 'S', 1),
(2, 'prue2', 'S', 2),
(3, 'prue3', 'S', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avance_notificacion`
--

CREATE TABLE IF NOT EXISTS `avance_notificacion` (
  `avaNot_id` int(11) NOT NULL AUTO_INCREMENT,
  `not_id` int(11) DEFAULT NULL,
  `avaTar_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`avaNot_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `avance_notificacion`
--

INSERT INTO `avance_notificacion` (`avaNot_id`, `not_id`, `avaTar_id`) VALUES
(1, 2, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 3),
(6, 1, 4),
(7, 2, 4),
(8, 1, 5),
(9, 2, 5),
(10, 1, 6),
(11, 2, 6),
(12, 1, 10),
(13, 2, 10),
(14, 1, 11),
(15, 1, 13),
(16, 2, 13),
(17, 1, 15),
(18, 1, 16),
(19, 1, 17),
(20, 1, 18),
(21, 2, 18),
(22, 1, 20),
(23, 2, 20),
(24, 1, 24),
(25, 1, 26),
(26, 1, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avance_tarea`
--

CREATE TABLE IF NOT EXISTS `avance_tarea` (
  `avaTar_id` int(11) NOT NULL AUTO_INCREMENT,
  `tar_id` int(11) DEFAULT NULL,
  `avaTar_fecha` date DEFAULT NULL,
  `avaTar_progreso` int(11) DEFAULT NULL,
  `avaTar_horasTrabajadas` varchar(255) DEFAULT NULL,
  `avaTar_costo` varchar(255) DEFAULT NULL,
  `avaTar_comentarios` text,
  `avaTar_fechaCreacion` datetime DEFAULT NULL,
  `usu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`avaTar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `avance_tarea`
--

INSERT INTO `avance_tarea` (`avaTar_id`, `tar_id`, `avaTar_fecha`, `avaTar_progreso`, `avaTar_horasTrabajadas`, `avaTar_costo`, `avaTar_comentarios`, `avaTar_fechaCreacion`, `usu_id`) VALUES
(1, 1, '2015-10-01', 3, '12', '123', 'sdfsdfsafd', '2015-10-07 04:00:45', 1),
(2, 2, '2015-10-02', 34, '12', '234234', 'fdsdf', '2015-10-07 04:00:45', 3),
(3, 1, '2015-10-02', 3, '12', '234234', 'fdsdf', '2015-10-07 04:00:45', 1),
(4, 2, '2015-10-01', 3, '12', '1222', 'sdfsdf', '2015-10-07 04:00:45', 3),
(5, 1, '2015-10-29', 7, '56', '12345', 'xyz', '2015-10-07 04:00:45', 1),
(6, 2, '2015-10-02', 2, '23', '122312', '1231', '2015-10-07 04:00:45', 3),
(7, 1, '2015-10-02', 5, '12', '12', 'sfsfsdfsdfsdfsdf', '2015-10-07 04:00:45', 1),
(8, 2, '2015-10-10', 27, '12', '12', 'sdfsdfsdfsdfsdfsdfsdfasdf', '2015-10-07 04:00:45', 3),
(9, 1, '2015-10-10', 12, '12', '76543', 'fgsdfsdfasdfsa', '2015-10-07 04:00:45', 1),
(10, 2, '2015-10-01', 55, '44', '23', 'dsfasdfasdfa', '2015-10-07 04:08:13', 3),
(11, 1, '2015-10-29', 3, '2', 'asdfasf', 'sdfasdfasd', '2015-10-09 07:29:39', 1),
(12, 2, '2015-10-02', 5, '1', '1', 'prueba gerson javier', '2015-10-09 07:30:04', 3),
(13, 1, '2015-10-01', 3, '12', '200000', 'sfasdfsa', '2015-10-10 18:15:35', 1),
(14, 1, '2015-10-01', 3, '12', '200000', 'prueba gerson javier', '2015-10-10 18:15:35', 1),
(15, 1, '0000-00-00', 4, '12', '32', '2332', '2015-10-11 06:09:14', 1),
(16, 1, '0000-00-00', 5, '342', '2342', 'adfadsf', '2015-10-11 06:14:11', 1),
(17, 1, '0000-00-00', 6, '23', '23324', 'dfadsfas', '2015-10-11 06:19:26', 1),
(18, 1, '0000-00-00', 14, '12', '212222', 'xfasdfasdfasdfa', '2015-10-11 22:42:58', 1),
(19, 1, '0000-00-00', 75, '75', '75', 'prueba gerson', '2015-10-11 22:43:41', 1),
(20, 1, '2015-10-07', 1, '22', '22', 'df', '2015-10-16 18:10:51', 1),
(21, 1, '2015-10-08', 60, '4', '300000', '', '2015-10-20 18:39:25', 1),
(22, 1, '2015-10-08', 96, '4', '300000', 'jhgyhjfhgfhgf', '2015-10-20 18:42:07', 1),
(23, 1, '2015-10-20', 90, '5', '600000', 'ngdngfddsdcax', '2015-10-21 02:44:54', 1),
(24, 1, '2015-10-01', 2, '12', '2000000', 'sdasdfsdf', '2015-10-21 19:26:57', 1),
(25, 1, '2015-10-03', 1, '111', '111', '1111', '2015-10-21 19:27:39', 1),
(26, 1, '2015-10-13', 3, '22', '222', '222', '2015-10-21 19:31:45', 1),
(27, 1, '0000-00-00', 0, '', '', '', '2015-10-21 19:32:31', 1),
(28, 1, '2015-10-26', 5, '2323', '2323', '434343', '2015-10-21 19:32:46', 1),
(29, 7, '2015-10-16', 3, '12', '12', 'sdf', '2015-10-21 20:52:42', 1),
(30, 7, '2015-10-22', 100, '4', '70000', '', '2015-10-22 18:18:42', 1),
(31, 7, '2015-10-22', 100, '4', '600000', 'jc,vncnx,mcnb,mnbn', '2015-10-22 21:31:19', 1),
(32, 7, '2015-10-22', 98, '5', '7777777', '', '2015-10-22 21:54:30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campo`
--

CREATE TABLE IF NOT EXISTS `campo` (
  `cam_id` int(11) NOT NULL AUTO_INCREMENT,
  `cam_nombre` varchar(255) DEFAULT NULL,
  `cam_nombreFormulario` varchar(255) DEFAULT NULL,
  `cam_tipo` int(11) DEFAULT NULL,
  `cam_fechaDesde` date DEFAULT NULL,
  `cam_listaValores` varchar(255) DEFAULT NULL,
  `cam_fechaHasta` date DEFAULT NULL,
  `cam_orden` int(11) DEFAULT NULL,
  `cam_Obligatorio` bit(1) DEFAULT NULL,
  PRIMARY KEY (`cam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_nombre` varchar(100) NOT NULL,
  `car_jefe` int(11) DEFAULT NULL,
  `car_porcentajearl` float(10,0) NOT NULL,
  `activo` varchar(50) NOT NULL DEFAULT 'S',
  `est_id` int(10) DEFAULT '1' COMMENT '1',
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`car_id`, `car_nombre`, `car_jefe`, `car_porcentajearl`, `activo`, `est_id`) VALUES
(40, 'visepresidencia', 0, 15, 'S', 1),
(41, 'Gerencia', 40, 10, 'S', 1),
(42, 'data', 40, 1234, 'S', 3),
(43, 'auxiliar', 42, 1234, 'S', 3),
(44, 'Contabilidad', 42, 22, 'S', 3),
(45, 'Auxiliar de sistemas', 44, 33, 'S', 3),
(46, 'Jefe proyectos', 41, 12, 'S', 1),
(47, 'Jefe proyectos', 40, 12, 'S', 3),
(48, 'Programador', 46, 12, 'S', 1),
(49, 'dfsd', 40, 332, 'S', 3),
(50, 'Programador Junior', 46, 14, 'S', 1),
(51, 'Contador', 41, 10, 'S', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_categoria`) VALUES
(1, 'ss'),
(2, 'caregoria'),
(3, ''),
(4, 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciiu`
--

CREATE TABLE IF NOT EXISTS `ciiu` (
  `ciiu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ciiu_grupo` varchar(255) DEFAULT NULL,
  `ciiu_clase` varchar(255) DEFAULT NULL,
  `ciiu_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ciiu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=609 ;

--
-- Volcado de datos para la tabla `ciiu`
--

INSERT INTO `ciiu` (`ciiu_id`, `ciiu_grupo`, `ciiu_clase`, `ciiu_description`) VALUES
(1, '11', '', 'Cultivos agrícolas transitorios '),
(2, '', '111', 'Cultivo de cereales (excepto arroz), legumbres y semillas oleaginosas '),
(3, '', '112', 'Cultivo de arroz '),
(4, '', '113', 'Cultivo de hortalizas, raíces y tubérculos '),
(5, '', '114', 'Cultivo de tabaco '),
(6, '', '115', 'Cultivo de plantas textiles '),
(7, '', '119', 'Otros cultivos transitorios n.c.p.'),
(8, '12', '', 'Cultivos agrícolas permanentes '),
(9, '', '121', 'Cultivo de frutas tropicales y subtropicales'),
(10, '', '122', 'Cultivo de plátano y banano'),
(11, '', '123', 'Cultivo de café'),
(12, '', '124', 'Cultivo de caña de azúcar'),
(13, '', '125', 'Cultivo de flor de corte'),
(14, '', '126', 'Cultivo de palma para aceite (palma africana) y otros frutos oleaginosos'),
(15, '', '127', 'Cultivo de plantas con las que se preparan bebidas'),
(16, '', '128', 'Cultivo de especias y de plantas aromáticas y medicinales '),
(17, '', '129', 'Otros cultivos permanentes n.c.p.'),
(18, '13', '130', 'Propagación de plantas (actividades de los viveros, excepto viveros forestales) '),
(19, '14', '', 'Ganadería '),
(20, '', '141', 'Cría de ganado bovino y bufalino'),
(21, '', '142', 'Cría de caballos y otros equinos '),
(22, '', '143', 'Cría de ovejas y cabras '),
(23, '', '144', 'Cría de ganado porcino'),
(24, '', '145', 'Cría de aves de corral'),
(25, '', '149', 'Cría de otros animales n.c.p.'),
(26, '15', '150', 'Explotación mixta (agrícola y pecuaria) '),
(27, '16', '', 'Actividades de apoyo a la agricultura y la ganadería, y actividades posteriores a la cosecha '),
(28, '', '161', 'Actividades de apoyo a la agricultura '),
(29, '', '162', 'Actividades de apoyo a la ganadería'),
(30, '', '163', 'Actividades posteriores a la cosecha '),
(31, '', '164', 'Tratamiento de semillas para propagación '),
(32, '17', '170', 'Caza ordinaria y mediante trampas y actividades de servicios conexas '),
(33, '', '', 'Silvicultura y extracción de madera'),
(34, '21', '210', 'Silvicultura y otras actividades forestales'),
(35, '22', '220', 'Extracción de madera '),
(36, '23', '230', 'Recolección de productos forestales diferentes a la madera'),
(37, '24', '240', 'Servicios de apoyo a la silvicultura '),
(38, '', '', 'Pesca y acuicultura'),
(39, '31', '', 'Pesca '),
(40, '', '311', 'Pesca marítima '),
(41, '', '312', 'Pesca de agua dulce '),
(42, '32', '', 'Acuicultura '),
(43, '', '321', 'Acuicultura marítima '),
(44, '', '322', 'Acuicultura de agua dulce'),
(45, '51', '510', 'Extracción de hulla (carbón de piedra)'),
(46, '52', '520', 'Extracción de carbón lignito'),
(47, '61', '610', 'Extracción de petróleo crudo'),
(48, '62', '620', 'Extracción de gas natural'),
(49, '71', '710', 'Extracción de minerales de hierro'),
(50, '72', '', 'Extracción de minerales metalíferos no ferrosos'),
(51, '', '721', 'Extracción de minerales de uranio y de torio'),
(52, '', '722', 'Extracción de oro y otros metales preciosos'),
(53, '', '723', 'Extracción de minerales de níquel'),
(54, '', '729', 'Extracción de otros minerales metalíferos no ferrosos n.c.p.'),
(55, '81', '', 'Extracción de piedra, arena, arcillas, cal, yeso, caolín, bentonitas y similares'),
(56, '', '811', 'Extracción de piedra, arena, arcillas comunes, yeso y anhidrita'),
(57, '', '812', 'Extracción de arcillas de uso industrial, caliza, caolín y bentonitas'),
(58, '82', '820', 'Extracción de esmeraldas, piedras preciosas y semipreciosas'),
(59, '89', '', 'Extracción de otros minerales no metálicos n.c.p.'),
(60, '', '891', 'Extracción de minerales para la fabricación de abonos y productos químicos'),
(61, '', '892', 'Extracción de halita (sal)'),
(62, '', '899', 'Extracción de otros minerales no metálicos n.c.p.'),
(63, '91', '910', 'Actividades de apoyo para la extracción de petróleo y de gas natural'),
(64, '99', '990', 'Actividades de apoyo para otras actividades de explotación de minas y canteras'),
(65, '101', '', 'Procesamiento y conservación de carne, pescado, crustáceos y moluscos '),
(66, '', '1011', 'Procesamiento y conservación de carne y productos cárnicos'),
(67, '', '1012', 'Procesamiento y conservación de pescados, crustáceos y moluscos'),
(68, '102', '1020', 'Procesamiento y conservación de frutas, legumbres, hortalizas y tubérculos'),
(69, '103', '1030', 'Elaboración de aceites y grasas de origen vegetal y animal'),
(70, '104', '1040', 'Elaboración de productos lácteos'),
(71, '105', '', 'Elaboración de productos de molinería, almidones y productos derivados del almidón'),
(72, '', '1051', 'Elaboración de productos de molinería'),
(73, '', '1052', 'Elaboración de almidones y productos derivados del almidón'),
(74, '106', '', 'Elaboración de productos de café'),
(75, '', '1061', 'Trilla de café'),
(76, '', '1062', 'Descafeinado, tostión y molienda del café'),
(77, '', '1063', 'Otros derivados del café'),
(78, '107', '', 'Elaboración de azúcar y panela'),
(79, '', '1071', 'Elaboración y refinación de azúcar'),
(80, '', '1072', 'Elaboración de panela'),
(81, '108', '', 'Elaboración de otros productos alimenticios'),
(82, '', '1081', 'Elaboración de productos de panadería'),
(83, '', '1082', 'Elaboración de cacao, chocolate y productos de confitería'),
(84, '', '1083', 'Elaboración de macarrones, fideos, alcuzcuz y productos farináceos similares'),
(85, '', '1084', 'Elaboración de comidas y platos preparados'),
(86, '', '1089', 'Elaboración de otros productos alimenticios n.c.p.'),
(87, '109', '1090', 'Elaboración de alimentos preparados para animales'),
(88, '110', '', 'Elaboración de bebidas'),
(89, '', '1101', 'Destilación, rectificación y mezcla de bebidas alcohólicas'),
(90, '', '1102', 'Elaboración de bebidas fermentadas no destiladas'),
(91, '', '1103', 'Producción de malta, elaboración de cervezas y otras bebidas malteadas'),
(92, '', '1104', 'Elaboración de bebidas no alcohólicas, producción de aguas minerales y de otras aguas embotelladas'),
(93, '120', '1200', 'Elaboración de productos de tabaco'),
(94, '131', '', 'Preparación, hilatura, tejeduría y acabado de productos textiles'),
(95, '', '1311', 'Preparación e hilatura de fibras textiles'),
(96, '', '1312', 'Tejeduría de productos textiles'),
(97, '', '1313', 'Acabado de productos textiles'),
(98, '139', '', 'Fabricación de otros productos textiles'),
(99, '', '1391', 'Fabricación de tejidos de punto y ganchillo'),
(100, '', '1392', 'Confección de artículos con materiales textiles, excepto prendas de vestir'),
(101, '', '1393', 'Fabricación de tapetes y alfombras para pisos'),
(102, '', '1394', 'Fabricación de cuerdas, cordeles, cables, bramantes y redes'),
(103, '', '1399', 'Fabricación de otros artículos textiles n.c.p.'),
(104, '141', '1410', 'Confección de prendas de vestir, excepto prendas de piel'),
(105, '142', '1420', 'Fabricación de artículos de piel'),
(106, '143', '1430', 'Fabricación de artículos de punto y ganchillo'),
(107, '151', '', 'Curtido y recurtido de cueros; fabricación de artículos de viaje, bolsos de mano y artículos similares, y fabricación de artículos de talabartería y guarnicionería, adobo y teñido de pieles'),
(108, '', '1511', 'Curtido y recurtido de cueros; recurtido y teñido de pieles'),
(109, '', '1512', 'Fabricación de artículos de viaje, bolsos de mano y artículos similares elaborados en cuero, y fabricación de artículos de talabartería y guarnicionería'),
(110, '', '1513', 'Fabricación de artículos de viaje, bolsos de mano y artículos similares; artículos de talabartería y guarnicionería elaborados en otros materiales'),
(111, '152', '', 'Fabricación de calzado'),
(112, '', '1521', 'Fabricación de calzado de cuero y piel, con cualquier tipo de suela'),
(113, '', '1522', 'Fabricación de otros tipos de calzado, excepto calzado de cuero y piel'),
(114, '', '1523', 'Fabricación de partes del calzado'),
(115, '161', '1610', 'Aserrado, acepillado e impregnación de la madera'),
(116, '162', '1620', 'Fabricación de hojas de madera para enchapado; fabricación de tableros contrachapados, tableros laminados, tableros de partículas y otros tableros y paneles'),
(117, '163', '1630', 'Fabricación de partes y piezas de madera, de carpintería y ebanistería para la construcción'),
(118, '164', '1640', 'Fabricación de recipientes de madera'),
(119, '169', '1690', 'Fabricación de otros productos de madera; fabricación de artículos de corcho, cestería y espartería'),
(120, '170', '', 'Fabricación de papel, cartón y productos de papel y cartón'),
(121, '', '1701', 'Fabricación de pulpas (pastas) celulósicas; papel y cartón'),
(122, '', '1702', 'Fabricación de papel y cartón ondulado (corrugado); fabricación de envases, empaques y de embalajes de papel y cartón.'),
(123, '', '1709', 'Fabricación de otros artículos de papel y cartón'),
(124, '181', '', 'Actividades de impresión y actividades de servicios relacionados con la impresión'),
(125, '', '1811', 'Actividades de impresión'),
(126, '', '1812', 'Actividades de servicios relacionados con la impresión'),
(127, '182', '1820', 'Producción de copias a partir de grabaciones originales '),
(128, '191', '1910', 'Fabricación de productos de hornos de coque'),
(129, '192', '', 'Fabricación de productos de la refinación del petróleo'),
(130, '', '1921', 'Fabricación de productos de la refinación del petróleo'),
(131, '', '1922', 'Actividad de mezcla de combustibles'),
(132, '201', '', 'Fabricación de sustancias químicas básicas, abonos y compuestos inorgánicos nitrogenados, plásticos y caucho sintético en formas primarias'),
(133, '', '2011', 'Fabricación de sustancias y productos químicos básicos'),
(134, '', '2012', 'Fabricación de abonos y compuestos inorgánicos nitrogenados'),
(135, '', '2013', 'Fabricación de plásticos en formas primarias'),
(136, '', '2014', 'Fabricación de caucho sintético en formas primarias'),
(137, '202', '', 'Fabricación de otros productos químicos'),
(138, '', '2021', 'Fabricación de plaguicidas y otros productos químicos de uso agropecuario'),
(139, '', '2022', 'Fabricación de pinturas, barnices y revestimientos similares, tintas para impresión y masillas'),
(140, '', '2023', 'Fabricación de jabones y detergentes, preparados para limpiar y pulir; perfumes y preparados de tocador'),
(141, '', '2029', 'Fabricación de otros productos químicos n.c.p.'),
(142, '203', '2030', 'Fabricación de fibras sintéticas y artificiales'),
(143, '210', '2100', 'Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos de uso farmacéutico'),
(144, '221', '', 'Fabricación de productos de caucho'),
(145, '', '2211', 'Fabricación de llantas y neumáticos de caucho'),
(146, '', '2212', 'Reencauche de llantas usadas'),
(147, '', '2219', 'Fabricación de formas básicas de caucho y otros productos de caucho n.c.p.'),
(148, '222', '', 'Fabricación de productos de plástico'),
(149, '', '2221', 'Fabricación de formas básicas de plástico'),
(150, '', '2229', 'Fabricación de artículos de plástico n.c.p.'),
(151, '231', '2310', 'Fabricación de vidrio y productos de vidrio'),
(152, '239', '', 'Fabricación de productos minerales no metálicos n.c.p.'),
(153, '', '2391', 'Fabricación de productos refractarios'),
(154, '', '2392', 'Fabricación de materiales de arcilla para la construcción'),
(155, '', '2393', 'Fabricación de otros productos de cerámica y porcelana'),
(156, '', '2394', 'Fabricación de cemento, cal y yeso'),
(157, '', '2395', 'Fabricación de artículos de hormigón, cemento y yeso'),
(158, '', '2396', 'Corte, tallado y acabado de la piedra'),
(159, '', '2399', 'Fabricación de otros productos minerales no metálicos n.c.p.'),
(160, '241', '2410', 'Industrias básicas de hierro y de acero'),
(161, '242', '', 'Industrias básicas de metales preciosos y de metales no ferrosos'),
(162, '', '2421', 'Industrias básicas de metales preciosos'),
(163, '', '2429', 'Industrias básicas de otros metales no ferrosos'),
(164, '243', '', 'Fundición de metales'),
(165, '', '2431', 'Fundición de hierro y de acero'),
(166, '', '2432', 'Fundición de metales no ferrosos '),
(167, '251', '', 'Fabricación de productos metálicos para uso estructural, tanques, depósitos y generadores de vapor'),
(168, '', '2511', 'Fabricación de productos metálicos para uso estructural'),
(169, '', '2512', 'Fabricación de tanques, depósitos y recipientes de metal, excepto los utilizados para el envase o transporte de mercancías'),
(170, '', '2513', 'Fabricación de generadores de vapor, excepto calderas de agua caliente para calefacción central'),
(171, '252', '2520', 'Fabricación de armas y municiones'),
(172, '259', '', 'Fabricación de otros productos elaborados de metal y actividades de servicios relacionadas con el trabajo de metales'),
(173, '', '2591', 'Forja, prensado, estampado y laminado de metal; pulvimetalurgia'),
(174, '', '2592', 'Tratamiento y revestimiento de metales; mecanizado'),
(175, '', '2593', 'Fabricación de artículos de cuchillería, herramientas de mano y artículos de ferretería'),
(176, '', '2599', 'Fabricación de otros productos elaborados de metal n.c.p.'),
(177, '261', '2610', 'Fabricación de componentes y tableros electrónicos'),
(178, '262', '2620', 'Fabricación de computadoras y de equipo periférico'),
(179, '263', '2630', 'Fabricación de equipos de comunicación'),
(180, '264', '2640', 'Fabricación de aparatos electrónicos de consumo'),
(181, '265', '', 'Fabricación de equipo de medición, prueba, navegación y control; fabricación de relojes'),
(182, '', '2651', 'Fabricación de equipo de medición, prueba, navegación y control'),
(183, '', '2652', 'Fabricación de relojes'),
(184, '266', '2660', 'Fabricación de equipo de irradiación y equipo electrónico de uso médico y terapéutico'),
(185, '267', '2670', 'Fabricación de instrumentos ópticos y equipo fotográfico'),
(186, '268', '2680', 'Fabricación de medios magnéticos y ópticos para almacenamiento de datos'),
(187, '271', '', 'Fabricación de motores, generadores y transformadores eléctricos y de aparatos de distribución y control de la energía eléctrica'),
(188, '', '2711', 'Fabricación de motores, generadores y transformadores eléctricos'),
(189, '', '2712', 'Fabricación de aparatos de distribución y control de la energía eléctrica'),
(190, '272', '2720', 'Fabricación de pilas, baterías y acumuladores eléctricos'),
(191, '273', '', 'Fabricación de hilos y cables aislados y sus dispositivos'),
(192, '', '2731', 'Fabricación de hilos y cables eléctricos y de fibra óptica'),
(193, '', '2732', 'Fabricación de dispositivos de cableado'),
(194, '274', '2740', 'Fabricación de equipos eléctricos de iluminación'),
(195, '275', '2750', 'Fabricación de aparatos de uso doméstico'),
(196, '279', '2790', 'Fabricación de otros tipos de equipo eléctrico n.c.p.'),
(197, '281', '', 'Fabricación de maquinaria y equipo de uso general'),
(198, '', '2811', 'Fabricación de motores, turbinas, y partes para motores de combustión interna'),
(199, '', '2812', 'Fabricación de equipos de potencia hidráulica y neumática'),
(200, '', '2813', 'Fabricación de otras bombas, compresores, grifos y válvulas'),
(201, '', '2814', 'Fabricación de cojinetes, engranajes, trenes de engranajes y piezas de transmisión'),
(202, '', '2815', 'Fabricación de hornos, hogares y quemadores industriales'),
(203, '', '2816', 'Fabricación de equipo de elevación y manipulación'),
(204, '', '2817', 'Fabricación de maquinaria y equipo de oficina (excepto computadoras y equipo periférico)'),
(205, '', '2818', 'Fabricación de herramientas manuales con motor'),
(206, '', '2819', 'Fabricación de otros tipos de maquinaria y equipo de uso general n.c.p.'),
(207, '282', '', 'Fabricación de maquinaria y equipo de uso especial'),
(208, '', '2821', 'Fabricación de maquinaria agropecuaria y forestal'),
(209, '', '2822', 'Fabricación de máquinas formadoras de metal y de máquinas herramienta'),
(210, '', '2823', 'Fabricación de maquinaria para la metalurgia'),
(211, '', '2824', 'Fabricación de maquinaria para explotación de minas y canteras y para obras de construcción'),
(212, '', '2825', 'Fabricación de maquinaria para la elaboración de alimentos, bebidas y tabaco'),
(213, '', '2826', 'Fabricación de maquinaria para la elaboración de productos textiles, prendas de vestir y cueros'),
(214, '', '2829', 'Fabricación de otros tipos de maquinaria y equipo de uso especial n.c.p.'),
(215, '291', '2910', 'Fabricación de vehículos automotores y sus motores'),
(216, '292', '2920', 'Fabricación de carrocerías para vehículos automotores; fabricación de remolques y semirremolques '),
(217, '293', '2930', 'Fabricación de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores'),
(218, '301', '', 'Construcción de barcos y otras embarcaciones'),
(219, '', '3011', 'Construcción de barcos y de estructuras flotantes'),
(220, '', '3012', 'Construcción de embarcaciones de recreo y deporte'),
(221, '302', '3020', 'Fabricación de locomotoras y de material rodante para ferrocarriles'),
(222, '303', '3030', 'Fabricación de aeronaves, naves espaciales y de maquinaria conexa'),
(223, '304', '3040', 'Fabricación de vehículos militares de combate'),
(224, '309', '', 'Fabricación de otros tipos de equipo de transporte n.c.p.'),
(225, '', '3091', 'Fabricación de motocicletas'),
(226, '', '3092', 'Fabricación de bicicletas y de sillas de ruedas para personas con discapacidad'),
(227, '', '3099', 'Fabricación de otros tipos de equipo de transporte n.c.p.'),
(228, '311', '3110', 'Fabricación de muebles '),
(229, '312', '3120', 'Fabricación de colchones y somieres'),
(230, '321', '3210', 'Fabricación de joyas, bisutería y artículos conexos'),
(231, '322', '3220', 'Fabricación de instrumentos musicales'),
(232, '323', '3230', 'Fabricación de artículos y equipo para la práctica del deporte'),
(233, '324', '3240', 'Fabricación de juegos, juguetes y rompecabezas'),
(234, '325', '3250', 'Fabricación de instrumentos, aparatos y materiales médicos y odontológicos (incluido mobiliario)'),
(235, '329', '3290', 'Otras industrias manufactureras n.c.p.'),
(236, '331', '', 'Mantenimiento y reparación especializado de productos elaborados en metal y de maquinaria y equipo'),
(237, '', '3311', 'Mantenimiento y reparación especializado de productos elaborados en metal'),
(238, '', '3312', 'Mantenimiento y reparación especializado de maquinaria y equipo'),
(239, '', '3313', 'Mantenimiento y reparación especializado de equipo electrónico y óptico'),
(240, '', '3314', 'Mantenimiento y reparación especializado de equipo eléctrico'),
(241, '', '3315', 'Mantenimiento y reparación especializado de equipo de transporte, excepto los vehículos automotores, motocicletas y bicicletas'),
(242, '', '3319', 'Mantenimiento y reparación de otros tipos de equipos y sus componentes n.c.p.'),
(243, '332', '3320', 'Instalación especializada de maquinaria y equipo industrial '),
(244, '351', '', 'Generación, transmisión, distribución y comercialización de energía eléctrica'),
(245, '', '3511', 'Generación de energía eléctrica'),
(246, '', '3512', 'Transmisión de energía eléctrica'),
(247, '', '3513', 'Distribución de energía eléctrica'),
(248, '', '3514', 'Comercialización de energía eléctrica'),
(249, '352', '3520', 'Producción de gas; distribución de combustibles gaseosos por tuberías'),
(250, '353', '3530', 'Suministro de vapor y aire acondicionado'),
(251, '360', '3600', 'Captación, tratamiento y distribución de agua'),
(252, '370', '3700', 'Evacuación y tratamiento de aguas residuales'),
(253, '381', '', 'Recolección de desechos'),
(254, '', '3811', 'Recolección de desechos no peligrosos'),
(255, '', '3812', 'Recolección de desechos peligrosos'),
(256, '382', '', 'Tratamiento y disposición de desechos'),
(257, '', '3821', 'Tratamiento y disposición de desechos no peligrosos'),
(258, '', '3822', 'Tratamiento y disposición de desechos peligrosos'),
(259, '383', '3830', 'Recuperación de materiales'),
(260, '390', '3900', 'Actividades de saneamiento ambiental y otros servicios de gestión de desechos'),
(261, '411', '', 'Construcción de edificios'),
(262, '', '4111', 'Construcción de edificios residenciales'),
(263, '', '4112', 'Construcción de edificios no residenciales'),
(264, '421', '4210', 'Construcción de carreteras y vías de ferrocarril'),
(265, '422', '4220', 'Construcción de proyectos de servicio público'),
(266, '429', '4290', 'Construcción de otras obras de ingeniería civil'),
(267, '431', '', 'Demolición y preparación del terreno'),
(268, '', '4311', 'Demolición'),
(269, '', '4312', 'Preparación del terreno'),
(270, '432', '', 'Instalaciones eléctricas, de fontanería y otras instalaciones especializadas'),
(271, '', '4321', 'Instalaciones eléctricas'),
(272, '', '4322', 'Instalaciones de fontanería, calefacción y aire acondicionado'),
(273, '', '4329', 'Otras instalaciones especializadas'),
(274, '433', '4330', 'Terminación y acabado de edificios y obras de ingeniería civil'),
(275, '439', '4390', 'Otras actividades especializadas para la construcción de edificios y obras de ingeniería civil'),
(276, '451', '', 'Comercio de vehículos automotores'),
(277, '', '4511', 'Comercio de vehículos automotores nuevos'),
(278, '', '4512', 'Comercio de vehículos automotores usados'),
(279, '452', '4520', 'Mantenimiento y reparación de vehículos automotores'),
(280, '453', '4530', 'Comercio de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores'),
(281, '454', '', 'Comercio, mantenimiento y reparación de motocicletas y de sus partes, piezas y accesorios'),
(282, '', '4541', 'Comercio de motocicletas y de sus partes, piezas y accesorios'),
(283, '', '4542', 'Mantenimiento y reparación de motocicletas y de sus partes y piezas'),
(284, '461', '4610', 'Comercio al por mayor a cambio de una retribución o por contrata'),
(285, '462', '4620', 'Comercio al por mayor de materias primas agropecuarias; animales vivos'),
(286, '463', '', 'Comercio al por mayor de alimentos, bebidas y tabaco'),
(287, '', '4631', 'Comercio al por mayor de productos alimenticios'),
(288, '', '4632', 'Comercio al por mayor de bebidas y tabaco'),
(289, '464', '', 'Comercio al por mayor de artículos y enseres domésticos (incluidas prendas de vestir)'),
(290, '', '4641', 'Comercio al por mayor de productos textiles, productos confeccionados para uso doméstico'),
(291, '', '4642', 'Comercio al por mayor de prendas de vestir'),
(292, '', '4643', 'Comercio al por mayor de calzado'),
(293, '', '4644', 'Comercio al por mayor de aparatos y equipo de uso doméstico'),
(294, '', '4645', 'Comercio al por mayor de productos farmacéuticos, medicinales, cosméticos y de tocador'),
(295, '', '4649', 'Comercio al por mayor de otros utensilios domésticos n.c.p.'),
(296, '465', '', 'Comercio al por mayor de maquinaria y equipo '),
(297, '', '4651', 'Comercio al por mayor de computadores, equipo periférico y programas de informática'),
(298, '', '4652', 'Comercio al por mayor de equipo, partes y piezas electrónicos y de telecomunicaciones'),
(299, '', '4653', 'Comercio al por mayor de maquinaria y equipo agropecuarios'),
(300, '', '4659', 'Comercio al por mayor de otros tipos de maquinaria y equipo n.c.p.'),
(301, '466', '', 'Comercio al por mayor especializado de otros productos'),
(302, '', '4661', 'Comercio al por mayor de combustibles sólidos, líquidos, gaseosos y productos conexos'),
(303, '', '4662', 'Comercio al por mayor de metales y productos metalíferos'),
(304, '', '4663', 'Comercio al por mayor de materiales de construcción, artículos de ferretería, pinturas, productos de vidrio, equipo y materiales de fontanería y calefacción'),
(305, '', '4664', 'Comercio al por mayor de productos químicos básicos, cauchos y plásticos en formas primarias y productos químicos de uso agropecuario'),
(306, '', '4665', 'Comercio al por mayor de desperdicios, desechos y chatarra'),
(307, '', '4669', 'Comercio al por mayor de otros productos n.c.p.'),
(308, '469', '4690', 'Comercio al por mayor no especializado'),
(309, '471', '', 'Comercio al por menor en establecimientos no especializados'),
(310, '', '4711', 'Comercio al por menor en establecimientos no especializados con surtido compuesto principalmente por alimentos, bebidas o tabaco'),
(311, '', '4719', 'Comercio al por menor en establecimientos no especializados, con surtido compuesto principalmente por productos diferentes de alimentos (víveres en general), bebidas y tabaco'),
(312, '472', '', 'Comercio al por menor de alimentos (víveres en general), bebidas y tabaco, en establecimientos especializados'),
(313, '', '4721', 'Comercio al por menor de productos agrícolas para el consumo en establecimientos especializados'),
(314, '', '4722', 'Comercio al por menor de leche, productos lácteos y huevos, en establecimientos especializados'),
(315, '', '4723', 'Comercio al por menor de carnes (incluye aves de corral), productos cárnicos, pescados y productos de mar, en establecimientos especializados'),
(316, '', '4724', 'Comercio al por menor de bebidas y productos del tabaco, en establecimientos especializados'),
(317, '', '4729', 'Comercio al por menor de otros productos alimenticios n.c.p., en establecimientos especializados'),
(318, '473', '', 'Comercio al por menor de combustible, lubricantes, aditivos y productos de limpieza para automotores, en establecimientos especializados'),
(319, '', '4731', 'Comercio al por menor de combustible para automotores'),
(320, '', '4732', 'Comercio al por menor de lubricantes (aceites, grasas), aditivos y productos de limpieza para vehículos automotores'),
(321, '474', '', 'Comercio al por menor de equipos de informática y de comunicaciones, en establecimientos especializados'),
(322, '', '4741', 'Comercio al por menor de computadores, equipos periféricos, programas de informática y equipos de telecomunicaciones en establecimientos especializados'),
(323, '', '4742', 'Comercio al por menor de equipos y aparatos de sonido y de video, en establecimientos especializados'),
(324, '475', '', 'Comercio al por menor de otros enseres domésticos en establecimientos especializados'),
(325, '', '4751', 'Comercio al por menor de productos textiles en establecimientos especializados'),
(326, '', '4752', 'Comercio al por menor de artículos de ferretería, pinturas y productos de vidrio en establecimientos especializados'),
(327, '', '4753', 'Comercio al por menor de tapices, alfombras y cubrimientos para paredes y pisos en establecimientos especializados'),
(328, '', '4754', 'Comercio al por menor de electrodomésticos y gasodomésticos de uso doméstico, muebles y equipos de iluminación'),
(329, '', '4755', 'Comercio al por menor de artículos y utensilios de uso doméstico'),
(330, '', '4759', 'Comercio al por menor de otros artículos domésticos en establecimientos especializados'),
(331, '476', '', 'Comercio al por menor de artículos culturales y de entretenimiento, en establecimientos especializados'),
(332, '', '4761', 'Comercio al por menor de libros, periódicos, materiales y artículos de papelería y escritorio, en establecimientos especializados'),
(333, '', '4762', 'Comercio al por menor de artículos deportivos, en establecimientos especializados '),
(334, '', '4769', 'Comercio al por menor de otros artículos culturales y de entretenimiento n.c.p. en establecimientos especializados'),
(335, '477', '', 'Comercio al por menor de otros productos en establecimientos especializados'),
(336, '', '4771', 'Comercio al por menor de prendas de vestir y sus accesorios (incluye artículos de piel) en establecimientos especializados'),
(337, '', '4772', 'Comercio al por menor de todo tipo de calzado y artículos de cuero y sucedáneos del cuero en establecimientos especializados.'),
(338, '', '4773', 'Comercio al por menor de productos farmacéuticos y medicinales, cosméticos y artículos de tocador en establecimientos especializados'),
(339, '', '4774', 'Comercio al por menor de otros productos nuevos en establecimientos especializados'),
(340, '', '4775', 'Comercio al por menor de artículos de segunda mano'),
(341, '478', '', 'Comercio al por menor en puestos de venta móviles'),
(342, '', '4781', 'Comercio al por menor de alimentos, bebidas y tabaco, en puestos de venta móviles'),
(343, '', '4782', 'Comercio al por menor de productos textiles, prendas de vestir y calzado, en puestos de venta móviles'),
(344, '', '4789', 'Comercio al por menor de otros productos en puestos de venta móviles'),
(345, '479', '', 'Comercio al por menor no realizado en establecimientos, puestos de venta o mercados'),
(346, '', '4791', 'Comercio al por menor realizado a través de Internet'),
(347, '', '4792', 'Comercio al por menor realizado a través de casas de venta o por correo'),
(348, '', '4799', 'Otros tipos de comercio al por menor no realizado en establecimientos, puestos de venta o mercados.'),
(349, '491', '', 'Transporte férreo'),
(350, '', '4911', 'Transporte férreo de pasajeros'),
(351, '', '4912', 'Transporte férreo de carga '),
(352, '492', '', 'Transporte terrestre público automotor'),
(353, '', '4921', 'Transporte de pasajeros'),
(354, '', '4922', 'Transporte mixto'),
(355, '', '4923', 'Transporte de carga por carretera'),
(356, '493', '4930', 'Transporte por tuberías'),
(357, '501', '', 'Transporte marítimo y de cabotaje'),
(358, '', '5011', 'Transporte de pasajeros marítimo y de cabotaje '),
(359, '', '5012', 'Transporte de carga marítimo y de cabotaje '),
(360, '502', '', 'Transporte fluvial'),
(361, '', '5021', 'Transporte fluvial de pasajeros'),
(362, '', '5022', 'Transporte fluvial de carga'),
(363, '511', '', 'Transporte aéreo de pasajeros '),
(364, '', '5111', 'Transporte aéreo nacional de pasajeros '),
(365, '', '5112', 'Transporte aéreo internacional de pasajeros '),
(366, '512', '', 'Transporte aéreo de carga '),
(367, '', '5121', 'Transporte aéreo nacional de carga '),
(368, '', '5122', 'Transporte aéreo internacional de carga '),
(369, '521', '5210', 'Almacenamiento y depósito'),
(370, '522', '', 'Actividades de las estaciones, vías y servicios complementarios para el transporte'),
(371, '', '5221', 'Actividades de estaciones, vías y servicios complementarios para el transporte terrestre'),
(372, '', '5222', 'Actividades de puertos y servicios complementarios para el transporte acuático'),
(373, '', '5223', 'Actividades de aeropuertos, servicios de navegación aérea y demás actividades conexas al transporte aéreo'),
(374, '', '5224', 'Manipulación de carga'),
(375, '', '5229', 'Otras actividades complementarias al transporte'),
(376, '531', '5310', 'Actividades postales nacionales'),
(377, '532', '5320', 'Actividades de mensajería'),
(378, '551', '', 'Actividades de alojamiento de estancias cortas'),
(379, '', '5511', 'Alojamiento en hoteles '),
(380, '', '5512', 'Alojamiento en apartahoteles'),
(381, '', '5513', 'Alojamiento en centros vacacionales '),
(382, '', '5514', 'Alojamiento rural'),
(383, '', '5519', 'Otros tipos de alojamientos para visitantes'),
(384, '552', '5520', 'Actividades de zonas de camping y parques para vehículos recreacionales'),
(385, '553', '5530', 'Servicio por horas '),
(386, '559', '5590', 'Otros tipos de alojamiento n.c.p.'),
(387, '561', '', 'Actividades de restaurantes, cafeterías y servicio móvil de comidas'),
(388, '', '5611', 'Expendio a la mesa de comidas preparadas'),
(389, '', '5612', 'Expendio por autoservicio de comidas preparadas'),
(390, '', '5613', 'Expendio de comidas preparadas en cafeterías'),
(391, '', '5619', 'Otros tipos de expendio de comidas preparadas n.c.p.'),
(392, '562', '', 'Actividades de catering para eventos y otros servicios de comidas'),
(393, '', '5621', 'Catering para eventos'),
(394, '', '5629', 'Actividades de otros servicios de comidas'),
(395, '563', '5630', 'Expendio de bebidas alcohólicas para el consumo dentro del establecimiento'),
(396, '581', '', 'Edición de libros, publicaciones periódicas y otras actividades de edición'),
(397, '', '5811', 'Edición de libros'),
(398, '', '5812', 'Edición de directorios y listas de correo'),
(399, '', '5813', 'Edición de periódicos, revistas y otras publicaciones periódicas'),
(400, '', '5819', 'Otros trabajos de edición'),
(401, '582', '5820', 'Edición de programas de informática (software)'),
(402, '591', '', 'Actividades de producción de películas cinematográficas, video y producción de programas, anuncios y comerciales de televisión'),
(403, '', '5911', 'Actividades de producción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión'),
(404, '', '5912', 'Actividades de posproducción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión'),
(405, '', '5913', 'Actividades de distribución de películas cinematográficas, videos, programas, anuncios y comerciales de televisión'),
(406, '', '5914', 'Actividades de exhibición de películas cinematográficas y videos'),
(407, '592', '5920', 'Actividades de grabación de sonido y edición de musica'),
(408, '601', '6010', 'Actividades de programación y transmisión en el servicio de radiodifusión sonora'),
(409, '602', '6020', 'Actividades de programación y transmisión de televisión'),
(410, '611', '6110', 'Actividades de telecomunicaciones alámbricas'),
(411, '612', '6120', 'Actividades de telecomunicaciones inalámbricas'),
(412, '613', '6130', 'Actividades de telecomunicación satelital'),
(413, '619', '6190', 'Otras actividades de telecomunicaciones'),
(414, '620', '', 'Desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas), consultoría informática y actividades relacionadas'),
(415, '', '6201', 'Actividades de desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas)'),
(416, '', '6202', 'Actividades de consultoría informática y actividades de administración de instalaciones informáticas'),
(417, '', '6209', 'Otras actividades de tecnologías de información y actividades de servicios informáticos'),
(418, '631', '', 'Procesamiento de datos, alojamiento (hosting) y actividades relacionadas; portales web'),
(419, '', '6311', 'Procesamiento de datos, alojamiento (hosting) y actividades relacionadas'),
(420, '', '6312', 'Portales web'),
(421, '639', '', 'Otras actividades de servicio de información'),
(422, '', '6391', 'Actividades de agencias de noticias'),
(423, '', '6399', 'Otras actividades de servicio de información n.c.p.'),
(424, '641', '', 'Intermediación monetaria'),
(425, '', '6411', 'Banco Central'),
(426, '', '6412', 'Bancos comerciales'),
(427, '642', '', 'Otros tipos de intermediación monetaria'),
(428, '', '6421', 'Actividades de las corporaciones financieras'),
(429, '', '6422', 'Actividades de las compañías de financiamiento'),
(430, '', '6423', 'Banca de segundo piso'),
(431, '', '6424', 'Actividades de las cooperativas financieras'),
(432, '643', '', 'Fideicomisos, fondos (incluye fondos de cesantías) y entidades financieras similares'),
(433, '', '6431', 'Fideicomisos, fondos y entidades financieras similares'),
(434, '', '6432', 'Fondos de cesantías'),
(435, '649', '', 'Otras actividades de servicio financiero, excepto las de seguros y pensiones'),
(436, '', '6491', 'Leasing financiero (arrendamiento financiero)'),
(437, '', '6492', 'Actividades financieras de fondos de empleados y otras formas asociativas del sector solidario'),
(438, '', '6493', 'Actividades de compra de cartera o factoring'),
(439, '', '6494', 'Otras actividades de distribución de fondos'),
(440, '', '6495', 'Instituciones especiales oficiales'),
(441, '', '6499', 'Otras actividades de servicio financiero, excepto las de seguros y pensiones n.c.p.'),
(442, '', '6511', 'Seguros generales '),
(443, '', '6512', 'Seguros de vida'),
(444, '', '6513', 'Reaseguros'),
(445, '', '6514', 'Capitalización'),
(446, '652', '', 'Servicios de seguros sociales de salud y riesgos profesionales'),
(447, '', '6521', 'Servicios de seguros sociales de salud'),
(448, '', '6522', 'Servicios de seguros sociales de riesgos profesionales'),
(449, '653', '', 'Servicios de seguros sociales de pensiones'),
(450, '', '6531', 'Régimen de prima media con prestación definida (RPM)'),
(451, '', '6532', 'Régimen de ahorro individual (RAI)'),
(452, '661', '', 'Actividades auxiliares de las actividades de servicios financieros, excepto las de seguros y pensiones'),
(453, '', '6611', 'Administración de mercados financieros'),
(454, '', '6612', 'Corretaje de valores y de contratos de productos básicos'),
(455, '', '6613', 'Otras actividades relacionadas con el mercado de valores'),
(456, '', '6614', 'Actividades de las casas de cambio'),
(457, '', '6615', 'Actividades de los profesionales de compra y venta de divisas'),
(458, '', '6619', 'Otras actividades auxiliares de las actividades de servicios financieros n.c.p.'),
(459, '662', '', 'Actividades de servicios auxiliares de los servicios de seguros y pensiones'),
(460, '', '6621', 'Actividades de agentes y corredores de seguros'),
(461, '', '6629', 'Evaluación de riesgos y daños, y otras actividades de servicios auxiliares'),
(462, '663', '6630', 'Actividades de administración de fondos'),
(463, '681', '6810', 'Actividades inmobiliarias realizadas con bienes propios o arrendados'),
(464, '682', '6820', 'Actividades inmobiliarias realizadas a cambio de una retribución o por contrata '),
(465, '691', '6910', 'Actividades jurídicas'),
(466, '692', '6920', 'Actividades de contabilidad, teneduría de libros, auditoría financiera y asesoría tributaria'),
(467, '701', '7010', 'Actividades de administración empresarial'),
(468, '702', '7020', 'Actividades de consultaría de gestión'),
(469, '711', '7110', 'Actividades de arquitectura e ingeniería y otras actividades conexas de consultoría técnica'),
(470, '712', '7120', 'Ensayos y análisis técnicos'),
(471, '721', '7210', 'Investigaciones y desarrollo experimental en el campo de las ciencias naturales y la ingeniería '),
(472, '722', '7220', 'Investigaciones y desarrollo experimental en el campo de las ciencias sociales y las humanidades'),
(473, '731', '7310', 'Publicidad'),
(474, '732', '7320', 'Estudios de mercado y realización de encuestas de opinión pública'),
(475, '741', '7410', 'Actividades especializadas de diseño '),
(476, '742', '7420', 'Actividades de fotografía'),
(477, '749', '7490', 'Otras actividades profesionales, científicas y técnicas n.c.p.'),
(478, '', '', 'Actividades veterinarias'),
(479, '750', '7500', 'Actividades veterinarias'),
(480, '771', '7710', 'Alquiler y arrendamiento de vehículos automotores'),
(481, '772', '', 'Alquiler y arrendamiento de efectos personales y enseres domésticos'),
(482, '', '7721', 'Alquiler y arrendamiento de equipo recreativo y deportivo'),
(483, '', '7722', 'Alquiler de videos y discos '),
(484, '', '7729', 'Alquiler y arrendamiento de otros efectos personales y enseres domésticos n.c.p.'),
(485, '773', '7730', 'Alquiler y arrendamiento de otros tipos de maquinaria, equipo y bienes tangibles n.c.p.'),
(486, '774', '7740', 'Arrendamiento de propiedad intelectual y productos similares, excepto obras protegidas por derechos de autor'),
(487, '781', '7810', 'Actividades de agencias de empleo'),
(488, '782', '7820', 'Actividades de agencias de empleo temporal'),
(489, '783', '7830', 'Otras actividades de suministro de recurso humano'),
(490, '791', '', 'Actividades de las agencias de viajes y operadores turísticos'),
(491, '', '7911', 'Actividades de las agencias de viaje'),
(492, '', '7912', 'Actividades de operadores turísticos'),
(493, '799', '7990', 'Otros servicios de reserva y actividades relacionadas'),
(494, '801', '8010', 'Actividades de seguridad privada'),
(495, '802', '8020', 'Actividades de servicios de sistemas de seguridad'),
(496, '803', '8030', 'Actividades de detectives e investigadores privados'),
(497, '811', '8110', 'Actividades combinadas de apoyo a instalaciones'),
(498, '812', '', 'Actividades de limpieza'),
(499, '', '8121', 'Limpieza general interior de edificios'),
(500, '', '8129', 'Otras actividades de limpieza de edificios e instalaciones industriales'),
(501, '813', '8130', 'Actividades de paisajismo y servicios de mantenimiento conexos'),
(502, '821', '', 'Actividades administrativas y de apoyo de oficina'),
(503, '', '8211', 'Actividades combinadas de servicios administrativos de oficina'),
(504, '', '8219', 'Fotocopiado, preparación de documentos y otras actividades especializadas de apoyo a oficina'),
(505, '822', '8220', 'Actividades de centros de llamadas (Call center)'),
(506, '823', '8230', 'Organización de convenciones y eventos comerciales'),
(507, '829', '', 'Actividades de servicios de apoyo a las empresas n.c.p.'),
(508, '', '8291', 'Actividades de agencias de cobranza y oficinas de calificación crediticia'),
(509, '', '8292', 'Actividades de envase y empaque'),
(510, '', '8299', 'Otras actividades de servicio de apoyo a las empresas n.c.p.'),
(511, '841', '', 'Administración del Estado y aplicación de la política económica y social de la comunidad'),
(512, '', '8411', 'Actividades legislativas de la administración pública'),
(513, '', '8412', 'Actividades ejecutivas de la administración pública'),
(514, '', '8413', 'Regulación de las actividades de organismos que prestan servicios de salud, educativos, culturales y otros servicios sociales, excepto servicios de seguridad social '),
(515, '', '8414', 'Actividades reguladoras y facilitadoras de la actividad económica'),
(516, '', '8415', 'Actividades de los otros órganos de control'),
(517, '842', '', 'Prestación de servicios a la comunidad en general'),
(518, '', '8421', 'Relaciones exteriores '),
(519, '', '8422', 'Actividades de defensa'),
(520, '', '8423', 'Orden público y actividades de seguridad'),
(521, '', '8424', 'Administración de justicia'),
(522, '843', '8430', 'Actividades de planes de seguridad social de afiliación obligatoria'),
(523, '851', '', 'Educación de la primera infancia, preescolar y básica primaria'),
(524, '', '8511', 'Educación de la primera infancia'),
(525, '', '8512', 'Educación preescolar'),
(526, '', '8513', 'Educación básica primaria'),
(527, '852', '', 'Educación secundaria y de formación laboral'),
(528, '', '8521', 'Educación básica secundaria '),
(529, '', '8522', 'Educación media académica'),
(530, '', '8523', 'Educación media técnica y de formación laboral'),
(531, '853', '8530', 'Establecimientos que combinan diferentes niveles de educación '),
(532, '854', '', 'Educación superior'),
(533, '', '8541', 'Educación técnica profesional'),
(534, '', '8542', 'Educación tecnológica'),
(535, '', '8543', 'Educación de instituciones universitarias o de escuelas tecnológicas'),
(536, '', '8544', 'Educación de universidades'),
(537, '855', '', 'Otros tipos de educación'),
(538, '', '8551', 'Formación académica no formal '),
(539, '', '8552', 'Enseñanza deportiva y recreativa'),
(540, '', '8553', 'Enseñanza cultural'),
(541, '', '8559', 'Otros tipos de educación n.c.p.'),
(542, '856', '8560', 'Actividades de apoyo a la educación'),
(543, '', '', 'Actividades de atención de la salud humana'),
(544, '861', '8610', 'Actividades de hospitales y clínicas, con internación'),
(545, '862', '', 'Actividades de práctica médica y odontológica, sin internación '),
(546, '', '8621', 'Actividades de la práctica médica, sin internación'),
(547, '', '8622', 'Actividades de la práctica odontológica'),
(548, '869', '', 'Otras actividades de atención relacionadas con la salud humana'),
(549, '', '8691', 'Actividades de apoyo diagnóstico'),
(550, '', '8692', 'Actividades de apoyo terapéutico'),
(551, '', '8699', 'Otras actividades de atención de la salud humana'),
(552, '871', '8710', 'Actividades de atención residencial medicalizada de tipo general'),
(553, '872', '8720', 'Actividades de atención residencial, para el cuidado de pacientes con retardo mental, enfermedad mental y consumo de sustancias psicoactivas'),
(554, '873', '8730', 'Actividades de atención en instituciones para el cuidado de personas mayores y/o discapacitadas'),
(555, '879', '8790', 'Otras actividades de atención en instituciones con alojamiento'),
(556, '881', '8810', 'Actividades de asistencia social sin alojamiento para personas mayores y discapacitadas'),
(557, '889', '8890', 'Otras actividades de asistencia social sin alojamiento'),
(558, '900', '', 'Actividades creativas, artísticas y de entretenimiento '),
(559, '', '9001', 'Creación literaria'),
(560, '', '9002', 'Creación musical'),
(561, '', '9003', 'Creación teatral'),
(562, '', '9004', 'Creación audiovisual'),
(563, '', '9005', 'Artes plásticas y visuales'),
(564, '', '9006', 'Actividades teatrales'),
(565, '', '9007', 'Actividades de espectáculos musicales en vivo'),
(566, '', '9008', 'Otras actividades de espectáculos en vivo'),
(567, '910', '', 'Actividades de bibliotecas, archivos, museos y otras actividades culturales'),
(568, '', '9101', 'Actividades de bibliotecas y archivos'),
(569, '', '9102', 'Actividades y funcionamiento de museos, conservación de edificios y sitios históricos'),
(570, '', '9103', 'Actividades de jardines botánicos, zoológicos y reservas naturales'),
(571, '920', '9200', 'Actividades de juegos de azar y apuestas'),
(572, '931', '', 'Actividades deportivas'),
(573, '', '9311', 'Gestión de instalaciones deportivas'),
(574, '', '9312', 'Actividades de clubes deportivos'),
(575, '', '9319', 'Otras actividades deportivas'),
(576, '932', '', 'Otras actividades recreativas y de esparcimiento'),
(577, '', '9321', 'Actividades de parques de atracciones y parques temáticos'),
(578, '', '9329', 'Otras actividades recreativas y de esparcimiento n.c.p.'),
(579, '941', '', 'Actividades de asociaciones empresariales y de empleadores, '),
(580, '', '', 'y asociaciones profesionales '),
(581, '', '9411', 'Actividades de asociaciones empresariales y de empleadores'),
(582, '', '9412', 'Actividades de asociaciones profesionales'),
(583, '942', '9420', 'Actividades de sindicatos de empleados'),
(584, '949', '', 'Actividades de otras asociaciones'),
(585, '', '9491', 'Actividades de asociaciones religiosas'),
(586, '', '9492', 'Actividades de asociaciones políticas'),
(587, '', '9499', 'Actividades de otras asociaciones n.c.p.'),
(588, '951', '', 'Mantenimiento y reparación de computadores y equipo de comunicaciones'),
(589, '', '9511', 'Mantenimiento y reparación de computadores y de equipo periférico'),
(590, '', '9512', 'Mantenimiento y reparación de equipos de comunicación'),
(591, '952', '', 'Mantenimiento y reparación de efectos personales y enseres domésticos'),
(592, '', '9521', 'Mantenimiento y reparación de aparatos electrónicos de consumo'),
(593, '', '9522', 'Mantenimiento y reparación de aparatos y equipos domésticos y de jardinería '),
(594, '', '9524', 'Reparación de muebles y accesorios para el hogar'),
(595, '', '9529', 'Mantenimiento y reparación de otros efectos personales y enseres domésticos'),
(596, '960', '', 'Otras actividades de servicios personales'),
(597, '', '9601', 'Lavado y limpieza, incluso la limpieza en seco, de productos textiles y de piel'),
(598, '', '9602', 'Peluquería y otros tratamientos de belleza'),
(599, '', '9603', 'Pompas fúnebres y actividades relacionadas'),
(600, '', '9609', 'Otras actividades de servicios personales n.c.p.'),
(601, '970', '9700', 'Actividades de los hogares individuales como empleadores de personal doméstico'),
(602, '981', '9810', 'Actividades no diferenciadas de los hogares individuales como productores de bienes para uso propio'),
(603, '982', '9820', 'Actividades no diferenciadas de los hogares individuales como productores de servicios para uso propio'),
(604, '990', '9900', 'Actividades de organizaciones y entidades extraterritoriales'),
(605, '', '0010   ', 'Asalariados'),
(606, '', '0081   ', 'Personas naturales sin actividad económica'),
(607, '', '0082   ', 'Personas naturales subsidiadas por terceros'),
(608, '', '0090   ', 'Rentistas de capital, solo para personas naturales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `ciu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ciu_nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ciu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ciu_id`, `ciu_nombre`) VALUES
(1, 'Bogotá'),
(2, 'Medellín'),
(3, 'Cali'),
(4, 'Barranquilla'),
(5, 'Cartagena de Indias'),
(6, 'Cúcula'),
(7, 'Soledad'),
(8, 'Ibagué'),
(9, 'Bucaramanga'),
(10, 'Soacha'),
(11, 'Santa Marta'),
(12, 'Villavicencio'),
(13, 'Bello'),
(14, 'Pereira'),
(15, 'Valledupar'),
(16, 'Manizales'),
(17, 'Buenaventura'),
(18, 'Pasto'),
(19, 'Montería'),
(20, 'Neiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `col_color` varchar(255) DEFAULT NULL,
  `estAce_id` int(11) NOT NULL,
  `col_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`col_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`col_color`, `estAce_id`, `col_id`) VALUES
('xya', 4, 1),
('xyadss', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `contacto_id` int(11) NOT NULL AUTO_INCREMENT,
  `contacto_documento` varchar(255) DEFAULT NULL,
  `contacto_nombre` varchar(255) DEFAULT NULL,
  `contacto_fecha_creacion` datetime DEFAULT NULL,
  `contacto_direccion` varchar(255) DEFAULT NULL,
  `contacto_telefono_fijo` varchar(255) DEFAULT NULL,
  `contacto_celular` varchar(255) DEFAULT NULL,
  `contacto_email` varchar(255) DEFAULT NULL,
  `contacto_parentesco` varchar(255) DEFAULT NULL,
  `contacto_llaves` varchar(255) DEFAULT NULL,
  `contacto_cuidador` varchar(255) DEFAULT NULL,
  `contacto_borrador` varchar(255) DEFAULT NULL,
  `activo` varchar(1) DEFAULT 'S',
  PRIMARY KEY (`contacto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`contacto_id`, `contacto_documento`, `contacto_nombre`, `contacto_fecha_creacion`, `contacto_direccion`, `contacto_telefono_fijo`, `contacto_celular`, `contacto_email`, `contacto_parentesco`, `contacto_llaves`, `contacto_cuidador`, `contacto_borrador`, `activo`) VALUES
(1, '234', '345', NULL, '345', '345', '345', '345', '345', NULL, NULL, NULL, 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimension`
--

CREATE TABLE IF NOT EXISTS `dimension` (
  `dim_id` int(11) NOT NULL AUTO_INCREMENT,
  `dim_codigo` varchar(10) NOT NULL,
  `dim_descripcion` varchar(1000) NOT NULL,
  `est_id` int(2) DEFAULT '1',
  PRIMARY KEY (`dim_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `dimension`
--

INSERT INTO `dimension` (`dim_id`, `dim_codigo`, `dim_descripcion`, `est_id`) VALUES
(9, '234', 'pruebasss', 3),
(11, 'xyz', 'xyaz', 3),
(12, '', 'pruebagerson', 3),
(13, '', 'segundaprueba', 3),
(14, '', 'GJ', 3),
(15, '', 'HOLA', 3),
(16, '', 'xdsdasdad', 3),
(17, '', 'xyz', 3),
(18, '', 'xyz', 3),
(19, '', '222', 3),
(20, '', 'xyz', 3),
(21, '', 'xyz233', 3),
(22, '', 'HOLA', 3),
(23, '', 'Bogota', 1),
(24, '', 'Bogota', 3),
(25, '', 'Cali', 1),
(26, '', 'Barranquilla', 1),
(27, '', 'bogota', 3),
(28, '', 'bogota', 3),
(29, '', 'Bogota', 3),
(30, '', 'Bogota', 3),
(31, '', 'Bogota', 3),
(32, '', 'xy', 3),
(33, '', 'oo', 3),
(34, '', 'yy', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimension2`
--

CREATE TABLE IF NOT EXISTS `dimension2` (
  `dim_id` int(11) NOT NULL AUTO_INCREMENT,
  `dim_codigo` varchar(10) NOT NULL,
  `dim_descripcion` varchar(1000) NOT NULL,
  `est_id` int(2) DEFAULT '1',
  PRIMARY KEY (`dim_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `dimension2`
--

INSERT INTO `dimension2` (`dim_id`, `dim_codigo`, `dim_descripcion`, `est_id`) VALUES
(9, '234', 'pruebasss', 3),
(11, 'xyz', 'xyaz', 3),
(12, '', 'pruebagerson', 3),
(13, '', 'segundaprueba', 3),
(14, '', 'PRUEBA', 3),
(15, '', 'ELIMINACION', 3),
(16, '', 'terceraprueba', 3),
(17, '', 'ss', 3),
(18, '', 'Modificado', 3),
(19, '', 'xy234234', 3),
(20, '', 'Area comercial', 1),
(21, '', 'Area Técnica', 1),
(22, '', 'Gerencia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `Emp_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Emp_Cedula` varchar(100) NOT NULL,
  `Emp_Nombre` varchar(100) NOT NULL,
  `Emp_Apellidos` varchar(100) NOT NULL,
  `sex_Id` int(11) NOT NULL,
  `Emp_FechaNacimiento` date NOT NULL,
  `Emp_Estatura` varchar(100) DEFAULT NULL,
  `Emp_Peso` varchar(100) DEFAULT NULL,
  `Emp_Telefono` int(11) NOT NULL,
  `Emp_Direccion` varchar(100) NOT NULL,
  `Emp_TelefonoContacto` int(11) DEFAULT NULL,
  `Emp_Email` varchar(100) NOT NULL,
  `EstCiv_id` int(11) DEFAULT NULL,
  `TipCon_Id` int(11) DEFAULT NULL,
  `Emp_FechaInicioContrato` date DEFAULT NULL,
  `Emp_FechaFinContrato` date DEFAULT NULL,
  `Emp_PlanObligatorioSalud` bit(1) NOT NULL,
  `Emp_FechaAfiliacionArl` date NOT NULL,
  `TipAse_Id` int(11) DEFAULT NULL,
  `Ase_Id` int(11) DEFAULT NULL,
  `Dim_id` int(11) DEFAULT NULL,
  `Dim_IdDos` int(11) DEFAULT NULL,
  `Car_id` int(11) NOT NULL,
  `Emp_codigo` varchar(10) DEFAULT NULL,
  `TipDoc_id` int(11) DEFAULT NULL,
  `Est_id` int(11) DEFAULT '1',
  `emp_fondo` varchar(100) DEFAULT NULL,
  `Emp_contacto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Emp_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Emp_Id`, `Emp_Cedula`, `Emp_Nombre`, `Emp_Apellidos`, `sex_Id`, `Emp_FechaNacimiento`, `Emp_Estatura`, `Emp_Peso`, `Emp_Telefono`, `Emp_Direccion`, `Emp_TelefonoContacto`, `Emp_Email`, `EstCiv_id`, `TipCon_Id`, `Emp_FechaInicioContrato`, `Emp_FechaFinContrato`, `Emp_PlanObligatorioSalud`, `Emp_FechaAfiliacionArl`, `TipAse_Id`, `Ase_Id`, `Dim_id`, `Dim_IdDos`, `Car_id`, `Emp_codigo`, `TipDoc_id`, `Est_id`, `emp_fondo`, `Emp_contacto`) VALUES
(1, '3542345', 'xyz', '', 0, '0000-00-00', '0', '0', 0, '', 0, '', 0, 1, '2015-08-05', '2015-09-18', b'0', '2015-08-05', 0, 0, 0, 0, 0, NULL, NULL, 1, NULL, NULL),
(3, '4643224', 'gerson javier', 'Barbosa Romero', 1, '0000-00-00', '34', '50', 1234567, 'calle 60 60 60', 1234567, 'javierbr12@hotmail.com', 0, 1, '2015-09-10', '2015-09-10', b'1', '2015-09-10', 0, 0, 9, 3, 40, '', NULL, 1, NULL, NULL),
(7, '123123', 'sdfg', 'sdfg', 1, '0000-00-00', '34', '34', 342, '23423', 12345, 'x@z.com', 1, 2, '0000-00-00', '0000-00-00', b'1', '0000-00-00', 1, 1, 14, 12, 40, NULL, NULL, NULL, 'porvenir', NULL),
(8, '3333', 'gerson', 'asdf', 1, '2015-09-18', '23', '23', 123, 'sdfd', 234234, 'sdf', 1, 1, '2015-09-01', '2015-09-18', b'1', '2015-09-01', 1, 1, 0, 0, 41, NULL, NULL, NULL, 'porvenir', NULL),
(9, '123456', 'adsf', 'asdf', 1, '2015-09-01', '12', '12', 123132, 'as', 234, 'asd', 1, 2, '2015-09-02', '2015-09-08', b'1', '2015-09-01', 1, 1, 14, 12, 40, NULL, NULL, NULL, 'ad', NULL),
(10, '12345', '1234', '12', 1, '2015-09-01', '12', '12', 1234, '1234', 123, 'asdf', 2, 1, '2014-08-06', '2014-03-04', b'1', '2015-09-01', 1, 1, 14, 9, 40, NULL, NULL, NULL, 'porvenir', '321'),
(11, '12345', '1234', '12', 1, '2015-09-01', '12', '12', 1234, '1234', 123, 'asdf', 2, 2, '2014-08-06', '2014-03-04', b'1', '2015-09-01', 1, 1, 14, 9, 40, NULL, NULL, NULL, 'porvenir', '321'),
(12, '123', 'asdf', 'asdf', 1, '2015-09-20', '12', '12', 234234, 'sdf', 123123, 'asfda', 2, 1, '2015-09-01', '2015-09-30', b'1', '2015-09-01', 1, 1, 14, 9, 40, NULL, NULL, NULL, '123', 'asdfa'),
(13, '123', 'geron jbr', 'barbosa', 1, '2015-09-01', '23', '12', 12345, 'asdfa', 123, 'jj@jj.com', 2, 2, '2015-09-01', '2015-09-17', b'1', '2015-09-01', 1, 1, 14, 9, 40, NULL, NULL, NULL, '1234', '123'),
(19, '79648473', 'Camilo', 'Perez', 2, '2011-01-25', '1.75', '80', 82627292, 'Calle 127  20-45 Bogotá', 618236289, 'compras@comercializadoradaza.co', 1, 2, '2014-10-01', '0000-00-00', b'1', '2015-08-05', NULL, NULL, 23, 20, 44, NULL, NULL, 1, 'colpensiones', 'maria'),
(23, '52865386', 'Gina ', 'Beltrán', 2, '1982-06-29', '1.62', '58', 67282922, 'Calle 147 #45-68', 0, 'gramirez@sgm.com.co', 2, 7, '2012-01-10', '0000-00-00', b'1', '2014-01-01', NULL, NULL, 23, 21, 46, NULL, NULL, 1, 'porvenir', 'Maria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_carpeta`
--

CREATE TABLE IF NOT EXISTS `empleado_carpeta` (
  `empCar_id` int(11) NOT NULL AUTO_INCREMENT,
  `empCar_nombre` varchar(255) DEFAULT NULL,
  `empCar_descripcion` text,
  `emp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`empCar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `empleado_carpeta`
--

INSERT INTO `empleado_carpeta` (`empCar_id`, `empCar_nombre`, `empCar_descripcion`, `emp_id`) VALUES
(2, 'prueba gg', 'prueba gg', NULL),
(3, 'prueba gg', 'prueba ggddd', NULL),
(4, 'prueba con usuario', 'usuario', 2),
(5, 'exámenes anuales', '', 18),
(6, 'capacitaciones', 'Capacitaciones', 18),
(7, 'capacitaciones anuales', 'capacitaciones anuales', 18),
(8, 'Capacitaciones semanales', '', 23),
(9, 'Capacitaciones semanales', '', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_registro`
--

CREATE TABLE IF NOT EXISTS `empleado_registro` (
  `empReg_id` int(11) NOT NULL AUTO_INCREMENT,
  `empReg_carpeta` varchar(255) DEFAULT NULL,
  `empReg_version` varchar(255) DEFAULT NULL,
  `empReg_descripcion` text,
  `empReg_archivo` varchar(500) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`empReg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `empleado_registro`
--

INSERT INTO `empleado_registro` (`empReg_id`, `empReg_carpeta`, `empReg_version`, `empReg_descripcion`, `empReg_archivo`, `emp_id`) VALUES
(1, 'examen', '1.0', 'Examenes anuales', 'certificado calibración.jpg', 18),
(2, '3', 'df', 'dfsdfsfsd', 'Cisa3.jpg', 2),
(3, '4', 'gerson', 'gerson', 'Cisa3.jpg', 2),
(4, '5', '1.0', 'examen ojos', 'glucometro.jpg', 18),
(5, '7', '1.0', 'prueba', 'Cambio solicitado MOD.docx', 23),
(6, '', '', '', NULL, 23),
(7, '4', '1.0', '', 'Hoja_Membreteada.jpg', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_tipo_aseguradora`
--

CREATE TABLE IF NOT EXISTS `empleado_tipo_aseguradora` (
  `empTipAse_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `tipAse_id` int(11) DEFAULT NULL,
  `ase_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`empTipAse_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `empleado_tipo_aseguradora`
--

INSERT INTO `empleado_tipo_aseguradora` (`empTipAse_id`, `emp_id`, `tipAse_id`, `ase_id`) VALUES
(1, 15, 2, '2'),
(2, NULL, 2, '3'),
(3, NULL, 1, '1'),
(4, NULL, 2, '2'),
(5, NULL, 2, '3'),
(6, 15, 1, '1'),
(7, 15, 2, '2'),
(8, 15, 2, '3'),
(9, 16, 1, '1'),
(10, 16, 2, '2'),
(11, 16, 2, '3'),
(14, 17, 2, '2'),
(15, 17, 1, '1'),
(18, 18, 4, 'EMEVI'),
(19, 18, 6, 'medplus'),
(20, 18, 6, 'compensar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_razonSocial` varchar(100) DEFAULT NULL,
  `emp_nit` varchar(15) DEFAULT NULL,
  `emp_direccion` varchar(100) DEFAULT NULL,
  `ciu_id` int(11) DEFAULT NULL,
  `tam_id` varchar(11) DEFAULT NULL,
  `numEmp_id` int(11) DEFAULT NULL,
  `actEco_id` int(11) DEFAULT NULL,
  `Dim_id` varchar(255) DEFAULT NULL,
  `Dimdos_id` varchar(255) DEFAULT NULL,
  `emp_representante` varchar(100) DEFAULT NULL,
  `emp_logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`emp_id`, `emp_razonSocial`, `emp_nit`, `emp_direccion`, `ciu_id`, `tam_id`, `numEmp_id`, `actEco_id`, `Dim_id`, `Dimdos_id`, `emp_representante`, `emp_logo`) VALUES
(2, 'Consultora SGM', '1033785880', 'Carrera 49A 88-42', 1, 'MI', 10, 5, 'Sucursales', 'Centros de costos', 'Natalia Girarldo', 'Logo SGM_Desarrollo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text,
  `fecha_creacion` timestamp NULL DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `fabricante` varchar(255) DEFAULT NULL,
  `fecha_fabricacion` datetime DEFAULT NULL,
  `tipo_equipo_cod` int(11) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `responsable` int(11) DEFAULT NULL,
  `observaciones` text,
  `borrado` varchar(50) DEFAULT NULL,
  `activo` varchar(1) DEFAULT 'S',
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `est_id` int(11) NOT NULL DEFAULT '0',
  `est_nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`est_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`est_id`, `est_nombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Eliminado'),
(4, 'Finalizados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_aceptacion`
--

CREATE TABLE IF NOT EXISTS `estado_aceptacion` (
  `estAce_id` int(11) NOT NULL AUTO_INCREMENT,
  `estAce_estado` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`estAce_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `estado_aceptacion`
--

INSERT INTO `estado_aceptacion` (`estAce_id`, `estAce_estado`) VALUES
(3, 'estado ggs'),
(4, 'estado ggdsd'),
(5, 'estado ggss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

CREATE TABLE IF NOT EXISTS `estado_civil` (
  `EstCiv_id` int(11) NOT NULL AUTO_INCREMENT,
  `EstCiv_Estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`EstCiv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `estado_civil`
--

INSERT INTO `estado_civil` (`EstCiv_id`, `EstCiv_Estado`) VALUES
(1, 'Soltero (a)'),
(2, 'Casado (a)'),
(3, 'Divorciado (a)'),
(4, 'Viudo (a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes`
--

CREATE TABLE IF NOT EXISTS `examenes` (
  `examen_cod` int(11) NOT NULL AUTO_INCREMENT,
  `examen_nombre` varchar(255) DEFAULT NULL,
  `examen_fecha_creacion` timestamp NULL DEFAULT NULL,
  `examen_borrado` varchar(255) DEFAULT NULL,
  `activo` varchar(1) DEFAULT 'S',
  PRIMARY KEY (`examen_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `examenes`
--

INSERT INTO `examenes` (`examen_cod`, `examen_nombre`, `examen_fecha_creacion`, `examen_borrado`, `activo`) VALUES
(1, 'prueba1', NULL, NULL, NULL),
(2, 'prueba1', NULL, NULL, NULL),
(3, 'prueba', NULL, NULL, NULL),
(4, 'prueba', NULL, NULL, 'S'),
(5, 'prueba2', NULL, NULL, 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `gen_id` int(11) NOT NULL AUTO_INCREMENT,
  `gen_genero` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`gen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`gen_id`, `gen_genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `nombre`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospitales`
--

CREATE TABLE IF NOT EXISTS `hospitales` (
  `hospital_cod` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_nombre` varchar(255) DEFAULT NULL,
  `hospital_fecha_creacion` timestamp NULL DEFAULT NULL,
  `hospital_direccion` varchar(255) DEFAULT NULL,
  `hospital_telefono_fijo` varchar(255) DEFAULT NULL,
  `hospital_celular` varchar(255) DEFAULT NULL,
  `hospital_email` varchar(255) DEFAULT NULL,
  `hospital_borrado` int(11) DEFAULT NULL,
  `activo` varchar(1) DEFAULT 'S',
  PRIMARY KEY (`hospital_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `hospitales`
--

INSERT INTO `hospitales` (`hospital_cod`, `hospital_nombre`, `hospital_fecha_creacion`, `hospital_direccion`, `hospital_telefono_fijo`, `hospital_celular`, `hospital_email`, `hospital_borrado`, `activo`) VALUES
(1, 'sdf', NULL, 'sdf', '234', '324', 'dsf', NULL, 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicador`
--

CREATE TABLE IF NOT EXISTS `indicador` (
  `ind_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) DEFAULT NULL,
  `dim_id` int(11) DEFAULT NULL,
  `dimdos_id` int(11) DEFAULT NULL,
  `est_id` int(11) DEFAULT NULL,
  `ind_frecuencia` varchar(255) DEFAULT NULL,
  `ind_indicador` varchar(255) DEFAULT NULL,
  `ind_maximo` varchar(255) DEFAULT NULL,
  `ind_mide` varchar(255) DEFAULT NULL,
  `ind_minimo` varchar(255) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `ind_objetivo` text,
  `ind_observaciones` text,
  `tip_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ind_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `indicador`
--

INSERT INTO `indicador` (`ind_id`, `car_id`, `dim_id`, `dimdos_id`, `est_id`, `ind_frecuencia`, `ind_indicador`, `ind_maximo`, `ind_mide`, `ind_minimo`, `emp_id`, `ind_objetivo`, `ind_observaciones`, `tip_id`) VALUES
(1, 41, 25, 20, 1, '22', 'xyz', '123', 'ddfsdfsf', '123', 16, 'objetivo', 'observacion', 1),
(2, 41, 25, 20, 1, '22', 'xyz', '123', 'ddfsdfsf', '123', 16, 'objetivo', 'observacion', 1),
(3, 41, 25, 20, 1, '22', 'xyz', '123', 'ddfsdfsf', '123', 16, 'objetivo', 'observacion', 1),
(4, 41, 25, 20, 1, '22', 'xyz', '123', '', '123', 16, 'objetivo', 'observacion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE IF NOT EXISTS `ingreso` (
  `ing_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_id` int(11) NOT NULL,
  `ing_fechaIngreso` datetime NOT NULL,
  PRIMARY KEY (`ing_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`ing_id`, `usu_id`, `ing_fechaIngreso`) VALUES
(1, 1, '2015-08-23 08:24:56'),
(2, 1, '2015-08-23 08:25:59'),
(3, 1, '2015-08-23 08:26:09'),
(4, 1, '2015-08-23 08:26:55'),
(5, 1, '2015-08-23 08:32:15'),
(6, 1, '2015-08-23 18:12:20'),
(7, 1, '2015-08-23 18:26:53'),
(8, 1, '2015-08-23 20:33:35'),
(9, 1, '2015-08-25 05:34:50'),
(10, 1, '2015-08-25 20:10:45'),
(11, 1, '2015-08-25 20:19:24'),
(12, 1, '2015-08-25 20:28:17'),
(13, 1, '2015-08-25 21:31:45'),
(14, 1, '2015-08-25 21:51:27'),
(15, 1, '2015-08-25 22:09:32'),
(16, 1, '2015-08-25 22:22:31'),
(17, 1, '2015-08-25 22:43:32'),
(18, 1, '2015-08-25 22:50:13'),
(19, 1, '2015-08-25 23:45:54'),
(20, 1, '2015-08-26 00:07:16'),
(21, 1, '2015-08-26 23:10:38'),
(22, 1, '2015-08-30 01:47:58'),
(23, 1, '2015-08-30 17:18:38'),
(24, 1, '2015-08-31 03:42:18'),
(25, 11, '2015-08-31 05:44:09'),
(26, 1, '2015-08-31 05:44:59'),
(27, 1, '2015-09-01 05:17:06'),
(28, 11, '2015-09-01 06:38:39'),
(29, 1, '2015-09-01 06:41:09'),
(30, 11, '2015-09-01 06:42:35'),
(31, 1, '2015-09-01 06:46:17'),
(32, 1, '2015-09-01 07:19:20'),
(33, 1, '2015-09-01 07:23:42'),
(34, 11, '2015-09-03 05:43:02'),
(35, 1, '2015-09-03 05:43:29'),
(36, 11, '2015-09-03 05:46:57'),
(37, 1, '2015-09-03 05:47:21'),
(38, 1, '2015-09-03 06:16:26'),
(39, 11, '2015-09-03 06:17:35'),
(40, 1, '2015-09-03 06:18:34'),
(41, 11, '2015-09-03 06:23:10'),
(42, 1, '2015-09-03 06:24:46'),
(43, 1, '2015-09-03 06:55:28'),
(44, 11, '2015-09-04 04:13:28'),
(45, 1, '2015-09-04 04:21:10'),
(46, 1, '2015-09-04 17:40:31'),
(47, 1, '2015-09-12 21:52:23'),
(48, 1, '2015-09-13 15:10:28'),
(49, 1, '2015-09-14 03:38:16'),
(50, 1, '2015-09-15 01:37:16'),
(51, 1, '2015-09-17 06:00:59'),
(52, 1, '2015-09-18 05:16:49'),
(53, 1, '2015-09-20 02:12:28'),
(54, 1, '2015-09-20 17:01:38'),
(55, 1, '2015-09-20 23:48:44'),
(56, 1, '2015-09-21 10:26:51'),
(57, 1, '2015-09-26 16:59:20'),
(58, 1, '2015-09-26 23:36:06'),
(59, 1, '2015-09-27 19:20:37'),
(60, 1, '2015-09-28 01:49:26'),
(61, 1, '2015-09-29 06:03:14'),
(62, 1, '2015-10-04 06:47:41'),
(63, 1, '2015-10-04 20:31:48'),
(64, 1, '2015-10-04 23:12:05'),
(65, 1, '2015-10-05 00:08:23'),
(66, 1, '2015-10-07 01:54:47'),
(67, 1, '2015-10-08 01:56:36'),
(68, 1, '2015-10-08 06:43:32'),
(69, 1, '2015-10-08 06:43:44'),
(70, 1, '2015-10-08 06:47:36'),
(71, 1, '2015-10-08 19:41:35'),
(72, 1, '2015-10-09 05:47:21'),
(73, 1, '2015-10-10 17:46:21'),
(74, 1, '2015-10-11 05:27:57'),
(75, 1, '2015-10-11 22:39:25'),
(76, 1, '2015-10-12 01:24:18'),
(77, 1, '2015-10-12 17:22:40'),
(78, 1, '2015-10-13 03:16:03'),
(79, 1, '2015-10-13 02:05:27'),
(80, 1, '2015-10-13 05:46:46'),
(81, 1, '2015-10-13 16:59:25'),
(82, 1, '2015-10-13 18:09:06'),
(83, 1, '2015-10-13 19:28:39'),
(84, 1, '2015-10-14 00:25:40'),
(85, 1, '2015-10-14 19:11:48'),
(86, 1, '2015-10-14 19:56:04'),
(87, 1, '2015-10-14 20:13:06'),
(88, 1, '2015-10-14 21:45:33'),
(89, 1, '2015-10-15 00:49:49'),
(90, 1, '2015-10-15 01:25:51'),
(91, 1, '2015-10-15 01:59:11'),
(92, 1, '2015-10-15 02:18:35'),
(93, 1, '2015-10-15 13:08:33'),
(94, 1, '2015-10-15 15:17:05'),
(95, 1, '2015-10-15 15:23:46'),
(96, 1, '2015-10-16 01:26:09'),
(97, 1, '2015-10-16 14:05:57'),
(98, 1, '2015-10-16 14:21:34'),
(99, 1, '2015-10-16 23:26:02'),
(100, 1, '2015-10-17 21:45:17'),
(101, 1, '2015-10-17 21:50:15'),
(102, 1, '2015-10-18 05:37:21'),
(103, 1, '2015-10-18 19:12:27'),
(104, 1, '2015-10-18 22:57:46'),
(105, 1, '2015-10-20 02:14:00'),
(106, 1, '2015-10-20 01:51:02'),
(107, 6, '2015-10-20 03:32:40'),
(108, 1, '2015-10-20 03:33:15'),
(109, 6, '2015-10-20 04:15:37'),
(110, 1, '2015-10-20 04:17:02'),
(111, 6, '2015-10-20 04:21:02'),
(112, 1, '2015-10-20 04:21:25'),
(113, 1, '2015-10-20 15:42:12'),
(114, 1, '2015-10-20 18:09:28'),
(115, 1, '2015-10-21 02:10:33'),
(116, 1, '2015-10-21 02:20:39'),
(117, 1, '2015-10-21 19:22:11'),
(118, 1, '2015-10-21 20:46:18'),
(119, 1, '2015-10-22 12:47:34'),
(120, 1, '2015-10-22 14:23:21'),
(121, 1, '2015-10-22 16:25:59'),
(122, 1, '2015-10-22 17:41:51'),
(123, 1, '2015-10-22 18:15:52'),
(124, 1, '2015-10-22 18:20:48'),
(125, 1, '2015-10-22 20:03:06'),
(126, 1, '2015-10-22 20:57:59'),
(127, 1, '2015-10-22 21:58:21'),
(128, 1, '2015-10-22 22:36:12'),
(129, 1, '2015-10-23 03:10:52'),
(130, 1, '2015-10-23 06:32:26'),
(131, 1, '2015-10-23 06:08:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE IF NOT EXISTS `inicio` (
  `ini_id` int(11) NOT NULL AUTO_INCREMENT,
  `ini_politicas` longblob,
  `ini_p_inicio` longblob,
  PRIMARY KEY (`ini_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`ini_id`, `ini_politicas`, `ini_p_inicio`) VALUES
(1, 0x3c70207374796c653d22746578742d616c69676e3a2063656e7465723b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e504f4cc38d54494341204445205052495641434944414420e2809c50534154e2809d3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e312e20494e54524f4455434349c3934e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22666f6e742d7765696768743a20626f6c643b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b223e436f6e2066756e64616d656e746f20656e206c61204c65792045737461747574617269612031353831206465203230313220e2809c506f72206c61206375616c2073652064696374616e20646973706f736963696f6e65732067656e6572616c65732070617261206c612070723c7370616e207374796c653d226261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e6f3c2f7370616e3e7465636369c3b36e206465206461746f7320706572736f6e616c6573e2809d207920656c204465637265746f203133373720646520323031332c20e2809c506f7220656c206375616c207365207265676c616d656e7461207061726369616c6d656e7465206c61204c657920313538312064652032303132e2809d2e203c2f7370616e3e3c7370616e207374796c653d22666f6e742d7374796c653a206974616c69633b20636f6c6f723a20726762283235352c20302c2030293b223e50524f4d4f544f524120444520534552564943494f532041534f434941444f5320414c205452414e53504f5254452c3c2f7370616e3e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b223e20656e206164656c616e746520e2809c50534154e2809d20266e6273703b636f6e20646f6d6963696c696f20656e206c612063697564616420646520426f676f74c3a120442e432c20636f6d6f20726573706f6e7361626c652064656c2074726174616d69656e746f206465206461746f7320706572736f6e616c6573206465206f74726f732c2061646f707461206d656469616e746520656c2070726573656e746520646f63756d656e746f206c617320706f6cc3ad746963617320792070726f636564696d69656e746f73207061726120676172616e74697a617220656c206465726563686f20717565207469656e656e206c617320706572736f6e617320646520636f6e6f6365722c2061637475616c697a617220792072656374696669636172206c617320696e666f726d6163696f6e65732071756520736520686179616e207265676973747261646f20736f62726520656c6c617320656e206261736573206465206461746f7320792f6f206172636869766f732e204c612070726573656e746520506f6cc3ad746963612073652061706c696361206120746f646120696e666f726d616369c3b36e20706572736f6e616c206465206c6f7320636c69656e7465732c2070726f73706563746f732c20636f6e7472617469737461732c2070726f766565646f7265732c20656d706c6561646f732c206f206465206375616c7175696572206f74726120706572736f6e612071756520706f7220616c67c3ba6e206d6f7469766f2073756d696e697374726520696e666f726d616369c3b36e206120e2809c50534154e2809d2e20e2809c50534154e2809d20706f6472c3a12061637475616c697a6172206573746120706f6cc3ad7469636120656e206375616c7175696572206d6f6d656e746f2c207961207365612070617261206174656e6369c3b36e206465206e6f76656461646573206c656769736c6174697661732c20726567756c61746f72696173206f206a7572697370727564656e6369616c65732c20706f6cc3ad746963617320696e7465726e61732c206f20706f72206375616c7175696572206f7472612072617ac3b36e206f2063697263756e7374616e6369612c206c6f206375616c20736520696e666f726d6172c3a1207920736520646172c3a1206120636f6e6f636572206f706f7274756e616d656e74652c206d656469616e746520646f63756d656e746f206573637269746f2c207075626c6963616369c3b36e20656e20656c20736974696f207765622c20636f6d756e6963616369c3b36e2076657262616c206f206d656469616e7465206375616c7175696572206f747261207465636e6f6c6f67c3ad612c20706f722065737465206d6f7469766f207365207265636f6d69656e646120616c20746974756c6172206465206c6f73206461746f7320706572736f6e616c65732c20726576697361726c6120636f6e20726567756c6172696461642070617261206173656775726172736520646520717565206861206c65c3ad646f206c61207665727369c3b36e206dc3a1732061637475616c697a6164612e20446520636f6e666f726d6964616420636f6e206c61206c656769736c616369c3b36e20766967656e746520736f627265206c61206d6174657269612c2073652065737461626c6563656e206c6173207369677569656e74657320646566696e6963696f6e65732c206c6173206375616c657320736572c3a16e2061706c696361646173206520696d706c656d656e74616461732061636f6769656e646f206c6f7320637269746572696f7320646520696e74657270726574616369c3b36e2071756520676172616e746963656e20756e612061706c6963616369c3b36e2073697374656dc3a174696361206520696e74656772616c2c207920656e20636f6e736f6e616e63696120636f6e206c6f73206176616e636573207465636e6f6cc3b36769636f732c206c61206e65757472616c69646164207465636e6f6cc3b3676963613b2079206c6f732064656dc3a173207072696e636970696f73207920706f7374756c61646f732071756520726967656e206c6f73206465726563686f732066756e64616d656e74616c6573207175652063697263756e64616e2c206f72626974616e207920726f6465616e20656c206465726563686f20646520686162656173206461746120792070726f7465636369c3b36e206465206461746f7320706572736f6e616c65732e3c2f7370616e3e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e4175746f72697a616369c3b36e3a20436f6e73656e74696d69656e746f2070726576696f2c206578707265736f206520696e666f726d61646f2064656c20746974756c61722070617261206c6c657661722061206361626f20656c2074726174616d69656e746f206465206461746f7320706572736f6e616c65732e2042617365206465206461746f733a20436f6e6a756e746f206f7267616e697a61646f206465206461746f7320706572736f6e616c65732071756520736561206f626a65746f2064652054726174616d69656e746f2e204461746f20706572736f6e616c3a204375616c717569657220696e666f726d616369c3b36e2076696e63756c616461206f207175652070756564612061736f636961727365206120756e61206f207661726961733c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e706572736f6e6173206e61747572616c65732064657465726d696e61646173206f2064657465726d696e61626c65732e20456e6361726761646f2064656c2074726174616d69656e746f3a20506572736f6e61206e61747572616c206f206a7572c3ad646963612c2070c3ba626c696361206f20707269766164612c2071756520706f722073c3ad206d69736d61206f20656e2061736f63696f20636f6e206f74726f732c207265616c69636520656c2074726174616d69656e746f206465206461746f7320706572736f6e616c657320706f72206375656e74612064656c20726573706f6e7361626c652064656c2074726174616d69656e746f2e20526573706f6e7361626c652064656c2074726174616d69656e746f3a20506572736f6e61206e61747572616c206f206a7572c3ad646963612c2070c3ba626c696361206f20707269766164612c2071756520706f722073c3ad206d69736d61206f20656e2061736f63696f20636f6e206f74726f732c2064656369646120736f627265206c612062617365206465206461746f7320792f6f20656c2074726174616d69656e746f206465206c6f73206461746f732e20546974756c61723a20506572736f6e61206e61747572616c206375796f73206461746f7320706572736f6e616c6573207365616e206f626a65746f2064652074726174616d69656e746f2e2054726174616d69656e746f3a204375616c7175696572206f706572616369c3b36e206f20636f6e6a756e746f206465206f7065726163696f6e657320736f627265206461746f7320706572736f6e616c65732c2074616c657320636f6d6f206c61207265636f6c65636369c3b36e2c20616c6d6163656e616d69656e746f2c2075736f2c2063697263756c616369c3b36e206f2073757072657369c3b36e2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e322e20524553504f4e5341424c452044454c2054524154414d49454e544f204445204441544f5320504552534f4e414c45533c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e456c20726573706f6e7361626c652064656c2074726174616d69656e746f20646520737573206461746f7320706572736f6e616c657320657320e2809c50534154e2809d20266e6273703b206964656e746966696361646120636f6e204e69743a203833302e3030392e3731372d342c20636f6e2073656465207072696e636970616c20656e206c612043616c6c6520313339204e6f2e37332d323020646520426f676f74c3a120442e432c20506f7274616c205765623a207777772e707361742e636f6d2e636f2c2050425820353728312920363133363534353c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e332e2046494e414c49444144204445204c4f53204441544f5320504552534f4e414c45533c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee2809c50534154e2809d207469656e6520756e612062617365206465206461746f7320636f6e20696e666f726d616369c3b36e20636f6d65726369616c2079207465636e6f6cc3b367696361207175652068612076656e69646f207574696c697a616e646f20706172612066696e657320636f6d65726369616c65732c20612074726176c3a97320646520696e7669746163696f6e65732061206576656e746f732070726573656e6369616c65732c207669727475616c657320792070726f6d6f6369c3b36e20646520736f6c7563696f6e6573207465636e6f6cc3b367696361732e2044656e74726f2064656c20c3a16d6269746f206465206c6f73206465726563686f732061206c6120696e74696d696461642c20616c206275656e206e6f6d6272652c206c6120696d6167656e20792064656dc3a17320676172616e74c3ad617320436f6e737469747563696f6e616c65732c20e2809c50534154e2809d207574696c697a61206c6f73206461746f7320706572736f6e616c65732071756520656c20746974756c6172206465206461746f732072656769737472c3b320656e206c61206173697374656e6369612061206e75657374726f73206576656e746f73206f206d656469616e7465206c6120696e766974616369c3b36e2061206576656e746f73206f2061637469766964616465732072656c6174697661732061206e75657374726f206f626a65746f20636f6d65726369616c2c207369656d7072652064656e74726f2064656c206d6172636f206465206c61206d697369c3b36e207920656c206f626a65746f206d69736d6f20646520e2809c50534154e2809d204c6f73206461746f7320717565207574696c697a6120e2809c50534154e2809d2070617261206c61206e6f726d616c20636f6d756e6963616369c3b36e20636f6e207375732070726f73706563746f73207920636c69656e7465732c207469656e65207175652076657220636f6e20737573206461746f73206465206964656e7469666963616369c3b36e2c206573746f2065732c206e6f6d627265732079206170656c6c69646f732c2067c3a96e65726f2c2070726f66657369c3b36e2075206f666963696f20792070657266696c20656e206c617320726564657320736f6369616c65732e2041646963696f6e616c6d656e7465207574696c697a61206461746f7320646520636f6e746163746f206465206c6120636f6d7061c3b1c3ad613a2074656cc3a9666f6e6f7320286f666963696e612079206dc3b376696c292c20636f7272656f20656c65637472c3b36e69636f2c20636172676f2c206e6f6d6272652065206964656e7469666963616369c3b36e206465206c6120656d70726573612c206ec3ba6d65726f20646520656d706c6561646f732c20706c617461666f726d6173207465636e6f6cc3b367696361732c2064697265636369c3b36e207920677275706f20656d70726573617269616c2e20496775616c6d656e74652c20e2809c50534154e2809d20686163652075736f206465206c6f73206461746f732070726f706f7263696f6e61646f732061206c6f206c6172676f206465206c6120747261796563746f726961206465207375732072656c6163696f6e657320636f6e206c6f7320636c69656e7465732c2074616c657320636f6d6f20616c6d6163656e616d69656e746f20646520646f63756d656e746f732071756520667565726f6e20726164696361646f7320656e206e75657374726173206f666963696e617320792071756520636f6e7469656e656e206669726d61206520696e666f726d616369c3b36e20706572736f6e616c20646520c3a973746f73206375616e646f20736520747261746120646520706572736f6e6173206e61747572616c65732c206f206465206c6f7320736f63696f732c20656d706c6561646f732c20636f6e747261746973746173206f20646570656e6469656e74657320656e20656c206361736f20646520706572736f6e6173206a7572c3ad64696361732e204c61207265636f6c65636369c3b36e206465206461746f7320706572736f6e616c657320792073752074726174616d69656e746f206175746f6d6174697a61646f207469656e656e20636f6d6f2066696e616c6964616420666163696c69746172206c61206765737469c3b36e2c2061646d696e69737472616369c3b36e2c206d656a6f7261207920616d706c69616369c3b36e206465206c6f732064697374696e746f7320736572766963696f732c206c6120656c61626f72616369c3b36e206465206573746164c3ad7374696361732c206c61206765737469c3b36e206f2073656775696d69656e746f20646520696e636964656e636961732c206173c3ad20636f6d6f20656c20656e76c3ad6f20646520636f6d756e69636163696f6e65732c2079206375616c7175696572206f74726f2066696e2071756520656e20656c20656a6572636963696f206465207375206f626a65746f20736f6369616c20e2809c50534154e2809d2072657175696572612e204173c3ad206c617320636f7361732c206c6f73206461746f7320706572736f6e616c657320736f6e207574696c697a61646f73206578636c75736976616d656e746520706f72206c617320c3a172656173206465206d6572636164656f2c20636f6d65726369616c2c2061646d696e697374726174697661207920736572766963696f20616c20636c69656e74652070617261206c6173207369677569656e7465732066696e616c6964616465733a3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e437265616369c3b36e207920636f6e73657276616369c3b36e206465206c6f7320646f63756d656e746f73206c6567616c6d656e7465206578696769646f7320706f72206c6173206e6f726d617320636f6e7461626c65732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e54726174616d69656e746f20646520737573206461746f7320706572736f6e616c657320656e206e75657374726173206163746976696461646573206465206d6572636164656f2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e4d656a6f726172206e75657374726f20636f6e6f63696d69656e746f2064656c206d65726361646f20656e20656c2075736f2064652061706c69636163696f6e6573207465636e6f6cc3b367696361732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e4164617074616369c3b36e206465206e75657374726f732070726f647563746f73207920736572766963696f73207061726120726573706f6e646572206d656a6f7220612073757320696e746572657365732c2063616d7061c3b161732064652061637475616c697a616369c3b36e206465206461746f732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e456e76696172206361727461732c207265766973746173207920636f6d756e69636163696f6e657320656e2067656e6572616c2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e4d656a6f726172206c6f7320736572766963696f7320717565206f667265636520e2809c50534154e2809d20266e6273703b3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e5265616c697a616369c3b36e206465206573747564696f73207920616ec3a16c69736973206465206c617320656e63756573746173207920636f6d656e746172696f73206465206c6f7320736f63696f73206520696e76697461646f732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e4765737469c3b36e206465206c6173207065746963696f6e65732c207175656a61732079207265636c616d6f732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e342e20454a4552434943494f204445204c4f53204445524543484f532044454c20544954554c4152204445204c4f53204441544f5320504552534f4e414c4553205041524120434f4e4f4345522c2041435455414c495a41522c205245435449464943415220592053555052494d495220535520494e464f524d414349c3934e2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e456c207573756172696f20706f6472c3a120656a6572636572207375206465726563686f206120636f6e6f6365722c2061637475616c697a61722c207265637469666963617220792073757072696d6972206c6f73206461746f7320706572736f6e616c65732071756520686179612073756d696e6973747261646f206120e2809c50534154e2809d2c207261646963616e646f20756e6120636f6d756e6963616369c3b36e2c20612074726176c3a973206465206c6f73207369677569656e746573206d6564696f733a3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e436f7272656f20656c65637472c3b36e69636f3a206861626561736461746140707361742e636f6d2e636f3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e436f7272656f206469726563746f20646972696769646f206120e2809c50534154e2809d2061206c612041562063616c6c65203234204e6f2e203832202d20353820426f676f74c3a12c20436f6c6f6d6269612e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e446520636f6e666f726d6964616420636f6e206c6f2064697370756573746f20656e20656c20417274c3ad63756c6f2032302064656c204465637265746f203133373720646520323031332c206c6f73206465726563686f73206465206c6f7320746974756c617265732065737461626c656369646f7320656e206c61204c65792c20706f6472c3a16e20656a6572636572736520706f723a3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e456c20546974756c61722c20717569656e206465626572c3a120616372656469746172207375206964656e746964616420656e20666f726d6120737566696369656e746520706f72206c6f732064697374696e746f73206d6564696f7320717565206c6520706f6e6761206120646973706f73696369c3b36e20656c20726573706f6e7361626c652e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e506f722073757320636175736168616269656e7465732c20717569656e6573206465626572c3a16e206163726564697461722074616c2063616c696461642e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e506f7220656c20726570726573656e74616e746520792f6f2061706f64657261646f2064656c20546974756c61722c207072657669612061637265646974616369c3b36e206465206c6120726570726573656e74616369c3b36e206f2061706f646572616d69656e746f2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e506f72206573746970756c616369c3b36e2061206661766f72206465206f74726f206f2070617261206f74726f2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e4c6120706574696369c3b36e206f206465726563686f2071756520656a65726369746120656c20746974756c6172206465206c6f73206461746f7320706572736f6e616c65732c206465626520636f6e74656e65722c206e6f6d6272652079206170656c6c69646f732064656c207573756172696f2079206c6f73206461746f7320646520636f6e746163746f20706172612072656369626972206e6f74696669636163696f6e65732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e45737465206465726563686f20736520706f6472c3a120656a65726365722c20656e747265206f74726f732c206672656e74652061206461746f73207061726369616c65732c20696e65786163746f732c20696e636f6d706c65746f732c206672616363696f6e61646f732c2071756520696e64757a63616e2061206572726f722c206f20617175656c6c6f73206375796f2074726174616d69656e746f20657374c3a920657870726573616d656e74652070726f68696269646f206f206e6f2068617961207369646f206175746f72697a61646f20706f7220737520746974756c61722e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e456c20746974756c6172206465206c6f73206461746f7320706572736f6e616c657320706f6472c3a120736f6c696369746172206120e2809c50534154e2809d20636f706961206465206c6f73206461746f732071756520706f73656520736f62726520656c206d69736d6f2c204173696d69736d6f2c20e2809c50534154e2809d2061637475616c697a6172c3a12c2072656374696669636172c3a1206f20656c696d696e6172c3a1206c6f73206461746f73206375616e646f20c3a973746f7320726573756c74656e20696e65786163746f732c20696e636f6d706c65746f73206f20686179616e2064656a61646f20646520736572206e656365736172696f73206f2070657274696e656e7465732070617261206c612066696e616c6964616420696e696369616c2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e456c20746974756c617220706f6472c3a120636f6e73756c74617220646520666f726d6120677261747569746120737573206461746f7320706572736f6e616c657320756e612076657a2063616461206d65732063616c656e646172696f207920636164612076657a20717565206578697374616e206d6f64696669636163696f6e65732073757374616e6369616c6573206465206c617320706f6cc3ad74696361732064652074726174616d69656e746f206465206461746f7320646520e2809c50534154e2809d2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e456e2063756d706c696d69656e746f206465206c6f20616e746572696f722c2073652065737461626c65636520656c207369677569656e74652070726f636564696d69656e746f3a3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e342e312e205452c3814d495445204445204c415320434f4e53554c5441532059205245434c414d4f5320464f524d554c41444f533c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e436f6e73756c7461733a3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e4c6f7320546974756c61726573206f2073757320636175736168616269656e74657320706f6472c3a16e20636f6e73756c746172206c6120696e666f726d616369c3b36e20706572736f6e616c2064656c20546974756c617220717565207265706f736520656e206375616c71756965722062617365206465206461746f7320646520e2809c50534154e2809d2e20e2809c50534154e2809d2073756d696e697374726172c3a12061206573746f7320746f6461206c6120696e666f726d616369c3b36e20636f6e74656e69646120656e20656c20726567697374726f20696e646976696475616c206f2071756520657374c3a92076696e63756c61646120636f6e206c61206964656e7469666963616369c3b36e2064656c20546974756c61722e204c6120636f6e73756c746120736520666f726d756c6172c3a120706f72206573637269746f2c20656e206c617320c3a1726561732071756520736520696e64696361726f6e20656e20656c206e756d6572616c20342c207369656d7072652079206375616e646f2073656120656c20746974756c6172206465206c6f73206461746f732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e4c6120636f6e73756c746120736572c3a1206174656e6469646120656e20756e2074c3a9726d696e6f206465206469657a20283130292064c3ad61732068c3a162696c657320636f6e7461646f73206120706172746972206465206c612066656368612064652072656369626f206465206c61206d69736d612e204375616e646f206e6f20667565726520706f7369626c65206174656e646572206c6120636f6e73756c74612064656e74726f20646520646963686f2074c3a9726d696e6f2c20736520696e666f726d6172c3a120616c20696e746572657361646f2c20657870726573616e646f206c6f73206d6f7469766f73206465206c612064656d6f72612079207365c3b1616c616e646f206c6120666563686120656e20717565207365206174656e646572c3a120737520636f6e73756c74612c206c61206375616c20656e206e696e67c3ba6e206361736f20706f6472c3a12073757065726172206c6f732063696e636f202835292064c3ad61732068c3a162696c6573207369677569656e74657320616c2076656e63696d69656e746f2064656c207072696d65722074c3a9726d696e6f2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e5265636c616d6f733a3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e456c20546974756c6172206f2073757320636175736168616269656e7465732071756520636f6e7369646572656e20717565206c6120696e666f726d616369c3b36e20636f6e74656e69646120656e20756e612062617365206465206461746f7320646520e2809c50534154e2809d20266e6273703b6465626520736572206f626a65746f20646520636f727265636369c3b36e2c2061637475616c697a616369c3b36e206f2073757072657369c3b36e2c20706f6472c3a16e2070726573656e74617220756e207265636c616d6f20616e746520e2809c50534154e2809d20266e6273703b656c206375616c20736572c3a1207472616d697461646f2062616a6f206c6173207369677569656e746573207265676c61733a20456c207265636c616d6f20736520666f726d756c6172c3a1206d656469616e746520736f6c696369747564206469726967696461206120e2809c50534154e2809d2c20636f6e206c61207369677569656e746520696e666f726d616369c3b36e3a3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e4964656e7469666963616369c3b36e2064656c20546974756c61723c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e4c6120646573637269706369c3b36e206465206c6f7320686563686f73207175652064616e206c7567617220616c207265636c616d6f3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee280a23c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e4c612064697265636369c3b36e2c20792061636f6d7061c3b1616e646f206c6f7320646f63756d656e746f7320717565207365207175696572612068616365722076616c65723c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e536920656c207265636c616d6f20726573756c746120696e636f6d706c65746f2c207365207265717565726972c3a120616c20696e746572657361646f2064656e74726f206465206c6f732063696e636f202835292064c3ad6173207369677569656e7465732061206c612072656365706369c3b36e2064656c207265636c616d6f2070617261207175652073756273616e65206c61732066616c6c61732e205472616e736375727269646f7320646f7320283229206d65736573206465736465206c612066656368612064656c20726571756572696d69656e746f2c2073696e2071756520656c20736f6c69636974616e74652070726573656e7465206c6120696e666f726d616369c3b36e207265717565726964612c20736520656e74656e646572c3a1207175652068612064657369737469646f2064656c207265636c616d6f2e20456e206361736f2064652071756520717569656e2072656369626120656c207265636c616d6f206e6f2073656120636f6d706574656e74652070617261207265736f6c7665726c6f2c20646172c3a120747261736c61646f206120717569656e20636f72726573706f6e646120656e20756e2074c3a9726d696e6f206dc3a178696d6f20646520646f73202832292064c3ad61732068c3a162696c6573206520696e666f726d6172c3a1206465206c612073697475616369c3b36e20616c20696e746572657361646f2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e556e612076657a20726563696269646f20656c207265636c616d6f20636f6d706c65746f2c20656c206d69736d6f2073652067657374696f6e6172c3a120656e20756e2074c3a9726d696e6f206e6f206d61796f722061207175696e636520283135292064c3ad61732068c3a162696c657320636f6e7461646f732061207061727469722064656c2064c3ad61207369677569656e74652061206c612066656368612064652073752072656369626f2e204375616e646f206e6f20667565726520706f7369626c65206174656e64657220656c207265636c616d6f2064656e74726f20646520646963686f2074c3a9726d696e6f2c20736520696e666f726d6172c3a120616c20696e746572657361646f206c6f73206d6f7469766f7320706f72206c6f73206375616c657320e2809c50534154e2809d20266e6273703b206e6f20686120706f6469646f2063756c6d696e617220656c207472c3a16d6974652079206c6120666563686120656e20717565207365206174656e646572c3a1207375207265636c616d6f2c206c61206375616c20656e206e696e67c3ba6e206361736f20706f6472c3a12073757065726172206c6f73206f63686f202838292064c3ad61732068c3a162696c6573207369677569656e74657320616c2076656e63696d69656e746f2064656c207072696d65722074c3a9726d696e6f2e205265766f6361746f726961206465206c61206175746f72697a616369c3b36e20792f6f2073757072657369c3b36e2064656c206461746f3a204c6f7320746974756c6172657320706f6472c3a16e20656e20746f646f206d6f6d656e746f20736f6c696369746172206120e2809c50534154e2809d20266e6273703b636f6d6f20726573706f6e7361626c652064656c2074726174616d69656e746f206c612073757072657369c3b36e20646520737573206461746f7320706572736f6e616c657320792f6f207265766f636172206c61206175746f72697a616369c3b36e206f746f7267616461207061726120656c2054726174616d69656e746f206465206c6f73206d69736d6f7320e2809c50534154e2809d2c20636f6d6f20726573706f6e7361626c652064656c2074726174616d69656e746f206c6c65766172c3a120756e20636f6e74726f6c2064656c2072656369626f20646520736f6c6963697475642064652073757072657369c3b36e206465206461746f73206f207265766f6361746f726961206465206175746f72697a616369c3b36e2c20696e636c7579656e646f2073752066656368612064652072656365706369c3b36e2e20456c2074c3a9726d696e6f206dc3a178696d6f2070617261206174656e646572206c61207265766f6361746f72696120792f6f2073757072657369c3b36e206465206461746f7320736572c3a1206465207175696e636520283135292064c3ad61732068c3a162696c657320636f6e7461646f732061207061727469722064656c2064c3ad61207369677569656e74652061206c612066656368612064652073752072656369626f2e204375616e646f206e6f20667565726520706f7369626c65206174656e64657220656c207265636c616d6f2064656e74726f20646520646963686f2074c3a9726d696e6f2c20736520696e666f726d6172c3a120616c20696e746572657361646f206c6f73206d6f7469766f7320706f72206c6f73206375616c657320e2809c50534154e2809d2c206e6f20686120706f6469646f2063756c6d696e617220656c207472c3a16d6974652079206c6120666563686120656e20717565207365206174656e646572c3a1207375207265636c616d6f2c206c61206375616c20656e206e696e67c3ba6e206361736f20706f6472c3a12073757065726172206c6f73206f63686f202838292064c3ad61732068c3a162696c6573207369677569656e74657320616c2076656e63696d69656e746f2064656c207072696d65722074c3a9726d696e6f2e2053692076656e6369646f20656c2074c3a9726d696e6f206c6567616c207265737065637469766f2c20e2809c50534154e2809d2c206e6f206875626965736520656c696d696e61646f206c6f73206461746f7320706572736f6e616c65732c20656c20746974756c61722074656e6472c3a1206465726563686f206120736f6c6963697461722061206c61205375706572696e74656e64656e63696120646520496e64757374726961207920436f6d657263696f20717565206f7264656e65206c61207265766f6361746f726961206465206c61206175746f72697a616369c3b36e20792f6f206c612073757072657369c3b36e206465206c6f73206461746f7320706572736f6e616c65732c206465206163756572646f20616c2070726f636564696d69656e746f20646573637269746f20656e20656c20617274c3ad63756c6f203232206465206c61204c65792031353831646520323031322e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22666f6e742d7374796c653a206974616c69633b20636f6c6f723a20726762283235352c20302c2030293b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e352e204441544f53205245434f4c45435441444f532053494e204155544f52495a414349c3934e20455850524553412044454c20544954554c415220414e5445532044454c204445435245544f203133373720444520323031333c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee2809c50534154e2809d2c2068612070726f6d6f7669646f206c61207574696c697a616369c3b36e20646520746f646f73206c6f73206d6563616e69736d6f732071756520686120636f6e736964657261646f2070657274696e656e746573207061726120736f6c696369746172206c61206175746f72697a616369c3b36e206465206c6f7320746974756c61726573207061726120636f6e74696e75617220636f6e20656c2074726174616d69656e746f206465206c6f73206461746f7320706572736f6e616c6573207265636f6c65637461646f7320706f7220e2809c50534154e2809d2c2070617261206c6f73207369677569656e7465732066696e65733a20456c20656e76c3ad6f206465206c6173207265766973746173207920636f6d756e69636163696f6e657320646520e2809c50534154e2809d2079206c6f73207175652073652064657363726962656e206465206d616e65726120646574616c6c61646120656e20656c20636170c3ad74756c6f20332064656c2070726573656e746520646f63756d656e746f2e20456e74726520646963686f73206d6563616e69736d6f7320736520656e6375656e747261206c61207075626c6963616369c3b36e2064656c20617669736f206465207072697661636964616420656e206c612070c3a167696e6120576562207777772e707361742e636f6d2e636f3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee2809c50534154e2809d20636f6e73696465726120717565206c6f7320616e746572696f72657320736f6e206d6563616e69736d6f73206566696369656e74657320646520636f6d756e6963616369c3b36e2e204174656e6469656e646f2061206c6f73206d6563616e69736d6f732061646f707461646f73207920646573637269746f7320616e746572696f726d656e74652c20656e20617175656c6c6f73206361736f7320656e2071756520656c20746974756c6172206e6f20686120636f6e7461637461646f206120e2809c50534154e2809d2c207061726120736f6c696369746172206c612073757072657369c3b36e20646520737573206461746f7320706572736f6e616c65732c20e2809c50534154e2809d2c20636f6e636c75796520646520666f726d612072617a6f6e61626c65207175652c20646520636f6e666f726d6964616420636f6e206c6f2064697370756573746f20656e20656c20617274c3ad63756c6f20372064656c204465637265746f203133373720646520323031332c2065786973746520756e6120636f6e647563746120696e657175c3ad766f63612064656c20746974756c61722c206f746f7267616e646f206c61206175746f72697a616369c3b36e207061726120656c2074726174616d69656e746f206465206c6f73206461746f7320717565207265706f73616e20656e206c6173206261736573206465206461746f732070617261206c612066696e616c6964616420696e64696361646120656e206c612070726573656e746520706f6cc3ad746963612064652074726174616d69656e746f206465206461746f732c2073696e207065726a756963696f206465206c6120666163756c74616420717565207469656e6520656c20746974756c617220646520656a657263657220656e206375616c7175696572206d6f6d656e746f207375206465726563686f2079207065646972206c6120656c696d696e616369c3b36e2064656c206461746f2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e362e204445424552455320434f4d4f20454e4341524741444f2044454c2054524154414d49454e544f3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee2809c50534154e2809d2c20736520656e636172676120646972656374616d656e74652064656c2074726174616d69656e746f207920637573746f646961206465206c6f73204461746f7320506572736f6e616c6573206361707461646f73207920616c6d6163656e61646f733b2073696e20656d626172676f2c207365207265736572766120656c206465726563686f20612064656c6567617220656e20756e207465726365726f2074616c2074726174616d69656e746f2c2070617261206c6f206375616c20657869676972c3a120616c20656e6361726761646f206c61206174656e6369c3b36e206520696d706c656d656e74616369c3b36e206465206c617320706f6cc3ad746963617320792070726f636564696d69656e746f73206964c3b36e656f732070617261206c612070726f7465636369c3b36e206465206c6f73206461746f7320706572736f6e616c65732079206c6120657374726963746120636f6e666964656e6369616c69646164206465206c6f73206d69736d6f732c206465206163756572646f20636f6e206c6f2064697370756573746f20656e20656c20617274c3ad63756c6f203138206465206c61204c6579203135383120646520323031322e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e372e204441544f532053454e5349424c45533c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e506172612065666563746f73206465206c61204c65792064652070726f7465636369c3b36e206465206461746f7320706572736f6e616c65732079206465206c61732070726573656e74657320706f6cc3ad74696361732064652074726174616d69656e746f206465206461746f7320706572736f6e616c65732c20736520656e7469656e646520706f72206461746f732073656e7369626c657320617175656c6c6f732072656c6163696f6e61646f7320636f6e206c6120696e74696d696461642064656c20746974756c61722c2074616c657320636f6d6f20617175656c6c6f732071756520726576656c656e20656c206f726967656e2072616369616c206f20c3a9746e69636f2c206c61206f7269656e74616369c3b36e20706f6cc3ad746963612c206c617320636f6e76696363696f6e65732072656c6967696f736173206f2066696c6f73c3b366696361732c206c612070657274656e656e63696120612073696e64696361746f732c206f7267616e697a6163696f6e657320736f6369616c65732c206465206465726563686f732068756d616e6f73206f207175652070726f6d7565766120696e74657265736573206465206375616c7175696572207061727469646f20706f6cc3ad7469636f206f2071756520676172616e746963656e206c6f73206465726563686f73207920676172616e74c3ad6173206465207061727469646f7320706f6cc3ad7469636f73206465206f706f73696369c3b36e206173c3ad20636f6d6f206c6f73206461746f732072656c617469766f732061206c612073616c75642c2061206c6120766964612073657875616c2079206c6f73206461746f732062696f6dc3a9747269636f732e20e2809c50534154e2809d2c207265697465726120737520636172c3a1637465722061706f6cc3ad7469636f2c206173c3ad20636f6d6f2071756520736520747261746120646520756e6120656e74696461642073696e206f7269656e746163696f6e65732072656c6967696f736173206f20c3a9746e69636173206578636c7579656e7465732e2053696e20656d626172676f2c20656c20746974756c6172206465206c6120696e666f726d616369c3b36e20706572736f6e616c2c206e6f20657374c3a1206f626c696761646f20612073756d696e697374726172206461746f732073656e7369626c65732c20706f72206c6f2074616e746f206375616c717569657220736f6c696369747564206465206c6f73206d69736d6f73207265717565726972c3a1206175746f72697a616369c3b36e20657870726573612e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e382e204441544f5320504552534f4e414c4553204445204c4f53204d454e4f52455320444520454441443c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e4c6f73206461746f7320706572736f6e616c657320717565207265706f73656e20656e206c6173206261736573206465206461746f7320646520e2809c50534154e2809d20266e6273703b20266e6273703b736f627265206e69c3b16f732c206e69c3b1617320792061646f6c657363656e746573207920717565207365616e206e656365736172696f732070617261206c61207072657374616369c3b36e206465206c6f7320736572766963696f7320646520e2809c50534154e2809d20266e6273703b736572c3a16e207574696c697a61646f7320c3ba6e6963612079206578636c75736976616d656e7465206465206d616e65726120656e756e6369617469766120656e20656c20726567697374726f207920746f6d61206465206573746164c3ad7374696361732e20e2809c50534154e2809d20266e6273703b617365677572612073752070726f7465636369c3b36e20646520636f6e666f726d6964616420636f6e206c6120436f6e73746974756369c3b36e20506f6cc3ad746963612079206c61204c65792e20456e20746f646f206361736f2c206375616c71756965722075736f206465206c6f73206461746f73206465206c6f73206d656e6f72657320646520656461642071756520736520656e6375656e7472656e207265676973747261646f7320656e206c6173206261736573206465206461746f7320646520e2809c50534154e2809d20266e6273703b6f2071756520736520736f6c69636974656e206465626572c3a16e20736572206175746f72697a61646f7320657870726573616d656e746520706f7220656c20726570726573656e74616e7465206c6567616c2064656c206e69c3b16f2c206e69c3b161206f2061646f6c657363656e74652c2070726576696f20656a6572636963696f2064656c206d656e6f72206465207375206465726563686f2061207365722065736375636861646f2c206f70696e69c3b36e2071756520736572c3a12076616c6f726164612074656e69656e646f20656e206375656e7461206c61206d61647572657a2c206175746f6e6f6dc3ad6120792063617061636964616420646520656e74656e64657220656c206173756e746f2e20446520696775616c206d616e65726120e2809c50534154e2809d20266e6273703b666163696c69746172c3a12061206c6f7320726570726573656e74616e746573206c6567616c6573206465206c6f73206d656e6f7265732c206c6120706f736962696c69646164206465207175652070756564616e20656a6572636572206c6f73206465726563686f732064652061636365736f2c2063616e63656c616369c3b36e2c207265637469666963616369c3b36e2079206f706f73696369c3b36e206465206c6f73206461746f732064652073757320747574656c61646f732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e392e205445524345524f533c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e4c6173206261736573206465206461746f73206f206172636869766f73206e6f20736572c3a16e2073756d696e6973747261646f732061207465726365726f732c2073616c766f2065787072657361206175746f72697a616369c3b36e2064656c20746974756c61722c206f20656e206c6f73206361736f7320707265766973746f7320656e206c61204c65792e204c61207472616e73666572656e63696120792f6f2075736f20636f6d7061727469646f206465206461746f73206465206c6f732070726f73706563746f732c20636c69656e7465732c20736f63696f73207920656d706c6561646f7320646520e2809c50534154e2809d2c20636f6e207465726365726f732c207365207265666965726520c3ba6e6963612079206578636c75736976616d656e74652061206c6f732066696e657320636f72726573706f6e6469656e74657320616c20656e76c3ad6f20646520636f72726573706f6e64656e636961207920636f6d756e69636163696f6e657320646520e2809c50534154e2809d266e6273703b3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e31302e3c2f7370616e3e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e204d454449444153204445205345475552494441442041444f50544144415320434f4e2052454c414349c3934e20414c2054524154414d49454e544f204445204441544f5320504552534f4e414c45533c2f7370616e3e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223ee2809c50534154e2809d20266e6273703b696e666f726d612061206c6f7320746974756c61726573206465206c6f73206461746f7320706572736f6e616c65732071756520266e6273703b61646f70746f206c6173206d6564696461732074c3a9636e696361732c2068756d616e617320792061646d696e69737472617469766173206e656365736172696173207061726120676172616e74697a6172206c6120736567757269646164207920636f6e666964656e6369616c69646164206465206c6f73206461746f73207920706172612065766974617220737520616c746572616369c3b36e2c2070c3a972646964612c20636f6e73756c74612c2075736f206f2061636365736f206e6f206175746f72697a61646f2e204c6f73206461746f7320706572736f6e616c65732071756520656c20746974756c6172206465206c6120696e666f726d616369c3b36e2073756d696e6973747265206120e2809c50534154e2809d20266e6273703b2062616a6f206375616c7175696572206d6564696f2c2074616c657320636f6d6f20656c206e6f6d6272652c206964656e7469666963616369c3b36e2c20656461642c2067c3a96e65726f2c2064697265636369c3b36e2c2074656cc3a9666f6e6f207920636f7272656f20656c65637472c3b36e69636f2c20736572c3a16e2061646d696e6973747261646f7320646520666f726d6120636f6e666964656e6369616c2c20636f6e206c6173206465626964617320676172616e74c3ad617320636f6e737469747563696f6e616c65732c206c6567616c657320792064656dc3a173206e6f726d61732061706c696361626c65732061206c612070726f7465636369c3b36e206465206461746f732070657273c3b36e616c65732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e4c6120696e666f726d616369c3b36e20736572c3a120696e636f72706f7261646120656e206c6173206469666572656e746573206261736573206465206461746f7320717565206d616e656a6120e2809c50534154e2809d2c2079206375796120726573706f6e736162696c696461642079206d616e656a6f20657374c3a1206120636172676f20646520e2809c50534154e2809d2c206375656e746120636f6e2070726f746f636f6c6f732064652073656775726964616420792061636365736f2061206e75657374726f732073697374656d617320646520696e666f726d616369c3b36e2c20656c2061636365736f2061206c6173206469666572656e746573206261736573206465206461746f7320736520656e6375656e747261207265737472696e6769646f20696e636c75736f2070617261206e75657374726f7320656d706c6561646f73207920636f6c61626f7261646f7265732e204e75657374726f732066756e63696f6e6172696f7320736520656e6375656e7472616e20636f6d70726f6d657469646f7320636f6e206c6120636f6e666964656e6369616c696461642079206d616e6970756c616369c3b36e206164656375616461206465206c6173206261736573206465206461746f73206174656e6469656e646f2061206c617320706f6cc3ad746963617320736f6272652074726174616d69656e746f206465206c6120696e666f726d616369c3b36e2065737461626c656369646120656e206c61204c65792e20456c2073697374656d6120656e20646f6e6465207265706f73616e206c6173206261736573206465206461746f73202873616c6573666f7263652e636f6d29206375656e746120636f6e2064697374696e7461732063657274696669636163696f6e6573206465207365677572696461642c20657374c3a12070726f74656769646f2066c3ad736963616d656e746520656e20756e206c756761722073656775726f207920657320737570657276697361646f20706f7220656e7465732061756469746f7265732061206e6976656c20696e7465726e6163696f6e616c2e2053c3b36c6f20706572736f6e616c206175746f72697a61646f2070756564652061636365646572206120c3a96c207920706f722074616e746f2061206c6f73206461746f7320706572736f6e616c6573206465206e75657374726f7320636c69656e74657320792f6f2070726f73706563746f732062616a6f20756e2073697374656d612070726f74656769646f20636f6e20636f6e7472617365c3b161732e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e506f72206c6f20616e746572696f722c20e2809c50534154e2809d2c206f746f72676172c3a1206c617320676172616e74c3ad61732079206173756d6972c3a1206c6173206f626c69676163696f6e6573206f20726573706f6e736162696c69646164657320706f722070c3a97264696461206f20737573747261636369c3b36e20646520696e666f726d616369c3b36e2064652073752073697374656d6120696e666f726dc3a17469636f20c3ba6e6963616d656e7465206375616e646f20706f72206e65676c6967656e636961206f20646f6c6f2c20756e207465726365726f206e6f206175746f72697a61646f206163636564612061206c6120696e666f726d616369c3b36e2c20792070726f6375726172c3a1206465206d616e6572612064696c6967656e746520792070727564656e7465206c6120736567757269646164206465206c6120696e666f726d616369c3b36e20656e206d6564696f206469676974616c206f2066c3ad7369636f2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e31312e204143455054414349c3934e204445204c41532050524553454e54455320504f4cc38d54494341533c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e456c20746974756c6172206465206c6f73206461746f7320706572736f6e616c6573206465636c61726120717565206861206c65c3ad646f207920616365707461206c612070726573656e746520506f6cc3ad746963612064652054726174616d69656e746f206465206461746f7320506572736f6e616c657320646520e2809c50534154e2809d2c2054656e69656e646f20656e206375656e7461207175652065786973746520756e612072656c616369c3b36e20726563757272656e746520656e747265206c6f7320746974756c61726573206465206c6f73206461746f7320706572736f6e616c6573207920e2809c50534154e2809d2c20792071756520e2809c50534154e2809d20686120736f6c6963697461646f206465206d616e657261206578706cc3ad6369746120612073757320636c69656e7465732c2070726f73706563746f732c20636f6c61626f7261646f726573207920636f6e747261746973746173206c6173206175746f72697a6163696f6e6573207061726120636f6e74696e75617220636f6e20656c2074726174616d69656e746f206465206461746f7320706572736f6e616c6573207961207265636f6c65637461646f732c20646520636f6e666f726d6964616420636f6e206c6f2064697370756573746f20656e20656c20617274c3ad63756c6f2031302064656c204465637265746f203133373720646520323031333b20e2809c50534154e2809d2c20636f6e74696e756172c3a1207573616e646f206c6f73206461746f7320616c6d6163656e61646f73206e656365736172696f732070617261206f667265636572206c6f7320736572766963696f73207061726120656c206e6f726d616c2066756e63696f6e616d69656e746f2c206d69656e7472617320656c20546974756c6172206e6f20636f6e746163746520616c20526573706f6e7361626c65207061726120736f6c696369746172206c612073757072657369c3b36e20646520737573206461746f7320706572736f6e616c657320656e206c6f732074c3a9726d696e6f73206c6567616c65732c2073696e207065726a756963696f206465206c6120666163756c74616420717565207469656e6520656c20746974756c617220646520656a657263657220656e206375616c7175696572206d6f6d656e746f20737573206465726563686f732079207065646972206c6120656c696d696e616369c3b36e2064656c206461746f2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e31322e20564947454e434941204445204c415320504f4cc38d54494341532044452054524154414d49454e544f204445204441544f5320504552534f4e414c45532e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e4c612070726573656e746520706f6cc3ad746963612064652074726174616d69656e746f206465206461746f7320706572736f6e616c6573206573746172c3a120766967656e7465206120706172746972206465207375207075626c6963616369c3b36e207920647572616e746520656c207469656d706f20656e2071756520e2809c50534154e2809d2c20656a65727a61206c61732061637469766964616465732070726f70696173206465207375206f626a65746f20736f6369616c2e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283235352c20302c2030293b20666f6e742d7374796c653a206974616c69633b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b20666f6e742d7765696768743a20626f6c643b223e31332e20434f4e544143544f20434f4e20454c20524553504f4e5341424c453c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e50617261206375616c717569657220696e666f726d616369c3b36e2072656c61746976612061206573746120506f6cc3ad746963612064652070726f7465636369c3b36e206465206461746f732c20707565646520616365726361727365206f20656e7669617220636f6d756e6963616369c3b36e206120e2809c50534154e2809d2e20436f7272656f20656c65637472c3b36e69636f3a206861626561736461746140707361742e636f6d20456c2070726573656e7465206d616e75616c2072696765206120706172746972206465207375207075626c6963616369c3b36e20656e20656c20736974696f2077656220646520e2809c50534154e2809d20266e6273703b266e6273703b3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7374796c653a206974616c69633b20666f6e742d7765696768743a20626f6c643b223e3c62723e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a206a7573746966793b223e3c7370616e207374796c653d22636f6c6f723a20726762283130372c203137332c20323232293b20666f6e742d7765696768743a20626f6c643b223e3c62723e3c2f7370616e3e3c2f703e3c70207374796c653d22746578742d616c69676e3a2063656e7465723b20223e3c62723e3c2f703e, 0x3c696d67207374796c653d2277696474683a2039373970783b22207372633d22646174613a696d6167652f6a7065673b6261736536342c2f396a2f34414151536b5a4a5267414241514541594142674141442f327742444141674742676347425167484277634a4351674b4442514e4441734c44426b534577385548526f6648683061484277674a43346e49434973497877634b4463704c4441784e44513048796335505467795043347a4e444c2f3277424441516b4a4351774c4442674e44526779495277684d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a49794d6a4c2f7741415243414a3841394d444153494141684542417845422f38514148774141415155424151454241514541414141414141414141414543417751464267634943516f4c2f3851417452414141674544417749454177554642415141414146394151494441415152425249684d5545474531466842794a7846444b426b61454949304b78775256533066416b4d324a7967676b4b4668635947526f6c4a69636f4b536f304e5459334f446b3651305246526b644953557054564656575631685a576d4e6b5a575a6e61476c7163335231646e643465587144684957476834694a69704b546c4a57576c35695a6d714b6a704b576d7036697071724b7a744c57327437693575734c44784d584778386a4a79744c54314e585731396a5a32754869342b546c3575666f3665727838765030396662332b506e362f38514148774541417745424151454241514542415141414141414141414543417751464267634943516f4c2f385141745245414167454342415144424163464241514141514a3341414543417845454253457842684a425551646863524d694d6f454946454b526f62484243534d7a55764156596e4c524368596b4e4f456c3852635947526f6d4a7967704b6a55324e7a67354f6b4e4552555a4853456c4b55315256566c64595756706a5a47566d5a326870616e4e3064585a3365486c36676f4f456859614869496d4b6b704f556c5a61586d4a6d616f714f6b7061616e714b6d7173724f3074626133754c6d367773504578636248794d6e4b3074505531646258324e6e613475506b3565626e364f6e7138765030396662332b506e362f396f4144414d424141495241784541507744332b69696967416f6f6f6f414b4b4b4b414369696967434e7676476b70572b386153764f6e38544b4369696970474646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251416c46637a722f6a7652764464386c6e667975737a7275436843655077724e487859384d6e4f5a3551502b754c6634564e6a5655616a5630744475525258436a347365476932504f6d2f77432f4c663455702b4b33686f66387470632f39636d2f77706c6656717638724f35346f7268662b467365476638416e764c6e30387076384b502b46736547662b6538762f667076384b412b7256663557643152584448347365474d635845702f375a4e2f68522f77414c57384e382f765a75502b6d4c663455575863507139622b566e63305677332f43325044575039644c7a36524e2f6855396c385450442b6f58735672627979744c4c39776557777a2b6c4d6c304b7133697a73714b416367476967794369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b41436a46464763436a31414b4b4d35716c716d7257576a574c336d6f5472424176566d5066306f5775694175306d6561383175766946346976627250682f77314a63576747664f6e6279772f754d31536e2b496e6a477a634e64654634676735625a4f436365324b763262534b6a546e5034566339596f726839442b4b4769616b7951587a2f414e6e33626638414c4b62492f55313236757267454559505433714f5637684f4d6f506c6b724d584e465957722b4d644230535577586c2f4574774f504a5535625059594663586566464738764c7557793066546c3835467a2b2f626154394163556e3775374847457062487142344e4c586762612f713837506436727131395a536f65456a5668475072573970586a7a57374b346749387257644f6b77476c6942563468366b5a4a4e4b4d6b396d615377383471375058714b7a394c317178316948665a7a72495239356338723952576856614741555555554146464646414253723934556c4b76336856772b4a434a4b4b4b4b39416b4b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967434e7676476b70572b386153764f6e38544b43696969704746464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555655314455594e4d746d7562702f4c67546c6e506175596634712b446b5971645658492f32442f68576b4b63704b364663374b69754c2f7743467365444f6e39716a2f766876384b622f414d4c6138462f394255663938482f436e3743703243364f326f7269662b467465432f2b6771502b2b442f68522f77746e7759334131555a2f7742772f774346503246547346306474525847512f46547768504b734d57714175357775555057757373376862753153644744492f4949364556457155347137514539464646514d4b445252306f4138352b4b76686a2b30644c47725738612f614c5263736535582f4f613856456e4374305679426b6e705831624c476b3854785344636a6a44443272353138622b487a34633852585558497372706930586647656f2f5768713675657a6c6d4a646e53624e61312b45327458304b584e72716475595a426c5344512f776e316c4a76496257624a5a735a455a626e4872577a384a50452f6b752f6879356b4f526c37646d376a307a2b64533674704e7863654c4e58656654376d585535422f6f633862346a5750614f4f76584f6136616443456f334d612b4f7856436f344e6e4f2f774443727453646c55613570355a6a676650314e536a345136345a54457571325a64526b6f44794251326b7531726f41476e33727a77444475477869546a33365a7266384c325069437a38646168714771574d6f68764c6352524f47427751414f526d722b72552b786c2f616d4a376e5044345536724a4a356365733244484f4d42756331592f345537346977522f6156767a3379656c4e304343373053334c58756e33306c326d6f4e4a49716b4568434d416a6e70586f2f6a547856446f76684e376c484b584e78466942534f636e2f3841585364436d6c646c517a5046546b6f785a345272476c79614c716b326d6d36536153456a6379486a4e6433384b66446258562f4a726c7a486d4651556856683050722f4f7547307254627a5839596974454261357557337a4e6e6f4365542b746653576b616244704f6e5132567575496f31775063317832563944727832496c436d71626433314c314646464d38514b4b4b4b414369696a4e476742525253556d77466f6f6f3655317141555a7831714e6d783631352f34753857335633645365482f4472675853344e31644d506b695875416658702b644b365773746b4f4d584a3871334f397437363075326b5733754970576a4f48434d447450765539654e576d6d4e34626b6a763841772f4a495a562b6135696b6250326a315050667258706e6837583758784470717a32374658586953492f655275344e545372553671356f4d3171304a5576694e6d696b487161584f61705075596852525254414b4b4b4b414369696967416f6f6f6f414b4b4b4b41436b4f414d6b34487253315331657a6255644a75724a4a576961654e6b45693956794b4e4f6f4437725572477967616535756f59343147647a4f4258692f694c785a62654d6646634e724b576a304b33472f4d7643547550542f50616f64542b443273524c35747a72516c73345476435353483573633436567a4d2f78597462323358544e57304b3265786962622b365568686a6a673572726a536a6233537155314361636c64487044362f4a354f7a7a4371676649696e437176595667332b70764d534137354a3637717874516130734c48543733534c6957537a7654686265626c6c36647839616d445a47633775674948384a727a4d584f7042325a396e6c30735055697030305672327867314b324b3347424933335a4d664d68396331364438507647706a303235307657356962757855736a73655a59774f6f39656c635365687832726e4e626d6c69316a547034474b796c7a457a66374a342f7253777464796c797656474f63594f4e536e375732707154694339314a74666c51794e4a645358472b546b2b576a594148345971384c4f4b383856784c4c646932615a664f69764f324d594331526d6e746258543754375249664c6c45304a783359745472777a6e5262517732706e31573266494150792b583171323035712f55384a5253685a467837362b73376935733961746d4b527355615678386a6a2b397a36315653306945715336547141743433507a4b6a386a384b37652b3065332b4a6d686164724e75374e4c614b4263576d646f6468676b47755238652b436b38504e61613561775062576379684a343162506c746a742b74644538456c3730475a5178622b475a61306d4b2b734e534e375a613471544c315841486d6656656c656c6156342b745a31386e55596d744a3147435750444831466650746c644a63536935754937687976416c6a494742394b7472726c6a61754a5575376961345134684569667a347242526e472f55716349547430506f785047476873535074385149363559566f3247723247714b545a335563324f7578733472352f30327a765045476f3274724f7174396f594d5448775642373137703466384d3664346374764a736f697050336e4a795361644f546c75724850577052707579647a5a6f6f714735756f4c4b423537695659343047537a4874576931324d43616c58377735727a37552f696861757a323267576b312f6339412b3362482b5a78584c65486646486953372b4b6d68576571616c41386479626a7a4c5341635237595859416e3667642b31613034726d576f2b563275653355555556334759555555554146464646414252525251415555555541464646464142525252514155555555414646464641456266654e4a53743934306c656450346d5546464646534d4b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967447a2f34786c6c2b483938564a4841366655563448344f384833506a4f396c744c4a34346e6769444573756432667872337634782f7744496758772f33663569764f506741515046642b4d2f3875362f30723038502f43755a74616a52384264637966394c692f37342f3841723066384b453173396275456638412f2b7658306235695a787658503170504e6a2f35364c2b645770734c487a6e2f776f5457762b6675482f76332f415058705238424e61422f342f49762b2f6638413965766f7a7a492f37362f6e53376836696a6e5957506a4c785834656d384b58302b6d334a5635746f5a58555950577671543466456e77466f354a795462722f414372774834334d502b45376b49344967412f5531373738507638416b5164482f774376646635566c696d2f5a334b52303146413655563571324b436969696741726d76473368754878466f4530544c2b2f6955764577484f3746644c54572b6249494f4b6357564754684a535238716f39355933486d527330643361766e505135395079723641384b2b4c59396538472f32736970396f69526c6b5450516a31727a37346f65474630725531316d335572617a454c49716a674e366d735877547269614672623231326361646471566c5254777049363170536e7979737a326356465975677173643064625966466d3466546c6e7562533333535371714d7679714d6e42483146586e2b4a6c37623668643231335a77784d516f736b4a795a53773635394b36492b4150446c3170747061477a51323849334a744f4d6b2f785a48656f6b2b47326a47356d754a6c6557526f2f4c695a324a4d51397561372b68344262384b65493231725270726e55496f594a34484b79686675394d396138543862654a54346d312b5335492f3057313352516f76527666363132486a7536742f4366687450444f6b7a4558557a62705a4132574b353739363433775a34666b38516549375346562f3057336b447a484751636367483871356138374b79505a77464651673852507073656b2f436a7775644f30353959756b497562785274446a6c462f7744723856365455634d53517872484741714b4146556468556c637132504f713148556d354d4b4b687572753373726470376d5a496f6b4757647a6743754a314834696b4e4b6d6c3665317771384356323271337550576a6d556479464679324f387a5661377672657973354c756439735559797872794c2f685a3274776167715845614a6e6e795a4d4b43505934705045667848673166772f633246315a793262504a47566d694f3459336335365536647076636270795851395a303356374c567252626d7a6e57534d2b6e554830785630486e70783631354a705732776c612b74356e534e59424b323173527467634830796570726f4c50346f615a4939756c7a59583974356f794a5a4938526e386331704b6c314a656d68336e61696f4c573874373632533474706b6c69635a566c4f51616e79414f617a747259417068633434586e48536e6b3856357a3472385758476f336a2b48764438684568474c712f5135574431582f65344e4a75327055597554736833696e78586361686479364434665a664e48793374313145433938482b392f6857506277324767615549326e53437a55354d737a444d6a65705065707450302b4777675743484a4c45655a4966765348757a48766d764b50694863337574654d4a4e497435486a746f5647454a2b584f4d35727a564e3436713661646f4939534e465961436c61386d656d57766962516275645972585649476b4a34556a475437564e5046653662666632786f7748326c655a376444784f76723966386138486d384e584e6e4531786233655869354f4f442b46657765416456754e55384c5153544f77754c6337504d5056787a7766796f72595a595265336f79756c756a546d6e5666733630624e37487250687a784a5a654a4e504678624d466b48456b52345a44364556733535786976495a72653630375542712b69733056796f2f665144685a683950582f414172306277393468745045476e69356762624975466c69592f4e4733634556323061304b38464f4a356c65684b6a4b7a4e6d696a496f7259774369696967416f6f6f6f414b4b4b4b4143696969674170446e4977507870614430346f41345878786678336266324e63544e5957374b582b317544744a2f75352f47766e48787a6f4d326e6175386957346a5667435246796e3142487258306638414662517872586757377a4e354c32696d34552b7041504665642b4166687272656f324676724f6f367847594a4549454d796562386f3664666575326b2f64755363393450306d64744467307a5572573674354c3579594a334f4652514164324d644b74576559704a4c63546564354d725265594f6a41484761303956314734747257357437712f6137764a6d4e7461794b6752596b4833746f4848513167516872654d494356525274334559334831726c7836356b6b66515a4770775570763454614c434e444b374256365a726c7458626471326d77636b6d5465774859486f617658576f3236594e784d676a78753876647a58532b4366447a61703462313758727933456b306b5253786a59664f4d416b4666726d7562433464707552364761597943706369657273636f4c5933576b7a524d4337576c325a6950524d6e4a72667472673239736d7077487a4769776a7176526b5066387a5744627664575573636f527542693669596665486347744f797559644c7651385238327a4934422b3767396a2b4e5256626535354549324e6133757451384b366d32726143346e74726e4c50422f426e364436315a6931323638532b456457545870343175764d333231755478753577765061715346394f6c4a744373746a4a7938424f535064545545384f6b33425234702f733870624f48353539785630735a4f6d74645552577730617275744450763841777834363143534736744e416974523559582f523341556a317836315874664233696d61386a6d6d7362672b516346476a504a2b746130393572555232772b494a734467624849412f4375362b472f6a5a626e3754706d7461694265704c74673838685449766248725771714b72384b4f65634a30556a6438436546526f39716236366a43333977767a726a37673942585a303165702f583370575a555573784367645354696851355659355a53636e6469723172353338632f38414351612f385162375449703375494c50393673537438696a412b384b396538552b4f644b384f614a63587875593570454243496a416b74587a665a3376697a566459314c574e4e744e5259587a457359596964796e746d7434516c374e6846726d314f39302f54376a5772434b6561376542472b51576c6e3871634872576c3456307864522b4c576d33656d7768625052597049726c774f72744536667a49716a5a36623432665237614c54644e5854597a6b45734330675071636976532f683134566b384c3649795855676c766271517a54536479534f39632b486f7a6a5635357630587164574972526c4251696a73364b4b4b395534416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b4149322b3861536c623778704b383666784d734b4b4b4b6b416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b415050666a486e2f414951432b78364c2f4d5635723842382f7744435236707362442f5a4151783763563656385a422f7851463939462f6d4b38352b4151442b4a395355394774514b3944442f7741496c6d7671656f3659596c756c3858787264504c683431494a555a78307a567156764373637362522b4d5951446e63413450503530377842384c4c58517269532b3076546674776e66447249333351547a697379372f5a344538736b747465694e582b5a565a76752b33537236694c72334868364d78527034796a5a587a6b676a6a363831756543764645617a516d37314c375130386867686a414753427a752f537553663451532b46375647537754565a4a766c624c6349665874585632487778767266564e4c31464a59554e7164786a4a50475165422b6441486c6e78757a2f77414a314a6e6f5941656e7561392b2b48682f346f44522f77447233582b5665412f47336e7878495053415a2f4d3137373850762b524230626a2f414a64312f6c55597032706f614f6e6f7168716573324f6a32333269396d434a3048475354394b35452b4e37334d4e2b397149644e4e78354c427838357951415237633177714c61754e7657783374464e6a6b57574a5a453556686b66536e5646686852525251426d3639704d4f743650505954343253447152304e664e757436564e6f477033576d545a4c776e494f507641394d5639526b4131357238562f444975394f5857725663336475527539312f79615a364758346830366e4c4c5a6d68384c66452f39736149316a637550745670684d45386c636356324771366c42704f6d3346354f345649304c636e476661766d3377357245756865494c54556263346a5a774855393139363633346d654d6f746657313079776b4a695839354d514d5a3436563152724c6b5a6458417557497448345763527247707a363771732b727935456b37624934757055644b39332b48766867654874435179594d397741376e474d63563576384144547779646231372b304c69504e6a625a432f37543137756f415541644230726b65723568342b7479705549374958474f61445161686c75496f67555a31446b48414a3630307561584b65576558654b64566658504552746f4849302f547a6d64442f79316650414830494659756f586b64724330386a6244676b494f3537436f7246397639725479674169396b4f43656d4b5877787044654c664651615850325330506d4e6739546e6756773873735258396d396b656c427870552b59357961573731574d74635756786e50796e792b3155685a74623556566c67562b4738356544583074504e61326b426b6c454d554b6a68696f36566c576d716148347053347334465764464f4744523751666f6356364377584c737a6c654a753955654836614a70706f744e6e74577639503273336b787551516339794f787230587778704e3163323970646146655151615347496d734a41484b486b5933486d73445834764458686a787a5a694b3461474c6635647843784f4275786a4865757a6a306d32384933523154544559616463454365454e75485038532b2f53756d6e654d62534d7169356e637465466250384134522f574e5430715751655863536d36743978783937716f48746975755942734535774b35487862484a617a57486957484d67303446705537744733584139635a726e39652b496435642b48344c7653725234374b2b6b386b586a7278474f684a4858492b6c5a3159573935454c56324e4c7864346f6e6c756d385061424a692f6b584d7431316a6758766b2b7638416a575070756e32326c326932747370327166336b6a66787633616c734e4d74394a7450735673356c7a2b3865526a6c6e593938314f33525136386478587a654d786a71503263566f6a334d486846443335626a31345a526e4f473472782f78426352772f456a5568497747394141543942587279353834656d52586b75736547626e7852385537367a69495241417a75546a41774b764b6e46564a4f543666716a5847536348475331314b6c314a446132307275514d6f514f6574646c384d4347384c534d44775a50366d73625876685642487045317870742f4a504c4248755a4862726a726a69746634586f30586861534e7868672b4350784e646d4d7130716d456270752b714d4931616c5376465356724861636b6a6a72564f5a37725374522f747a5475536934757252527a634b4f3439786b3164366e424a2b6c414f3174366b49515161386568576e536e644858694b43725274314f33305057375058744d68757256767641626f79666d6a506f525773416363396138694564376f6d6f50726d694b664d63377451674a2b575242315a52362f343136566f4775325869485334372b786b33785078794d45456451612b676f315956467a52506e36744b564e325a7155555556716a494b4b4b4b59425252525141555555554146426f6f6f413572782b4850676a565653467057614267465563394b3550773138517644746c344c74524e63737069556f397267655a6e36563667514742566743443142724f68304453725765533468735952492f4a4a55484a72616c55536a5954506e58584c7531647037714c52722b343059735a5675575172354c4871506674584c2f322f707054625a325678504f4d6c575062384b3637787472756f617a34746e304858626c4e4f73465969434f4144613350424f4d2b6770326a7070486848544a625746566c3161354f31706d4735524565342f537568387656476278627033687a4e6666597776447345757257383176625779777a544b566e755a6a38716a4f6344394b763266687258375759584557736f6b6c6d517476676e61795a7857757571776c54616162626d5238376a7447464a2f476d7644725532306834626443637944766a327242317462487a31584d73544b6437714b38796b2f6837576f726837684e566775506d3879524478754a3549465a37335a74566433306d646252754869584c632b7561364362523753346d53536534754a3255666442774366777178426251576250396e337157344d6238715070575435573954656a6e754a6f7257536c3872484b323272334d454f6256316e747a2f654f4446374772304d304633677635616a71784c634d6659315831585335494c7333646f714f6a4445304a4f413439717053586c6b456a7437474f5672786a74466f3479454a39434f3334316e4f67702f4166545a666a343479484e66587361514e74464978674a636e6a41364438617161765a586c36397464326241334e6b336d624231492f794b333758773566697a413157564974787a3563585543712f6944554530445135497255415846794e6b523638652f3531654877306f53356d7a324868756167357a3052365a7048784e7332384b616463434f6134314172354c575559335076484754364469726b31707157766f382f694337537a30316875657852756d4f6d57344972795434592b4e496643387437596549536957306b506d527545793237726745657561336f7076452f785676446132614777384e4b3243782b566e782b74656b6f7854757a3575584d3561624447746272346f2b496f7247787478612b48394d6679336b49794a51443250345637665a576474704f6e775730496a6a6869514944774f4257424c656146384f504461524d516b4d53414b693879536e702b74636d316c722f41493958375272637a57476a4d664d74376141346b5a65322f774443764f782b4b6f3049633961566f3975724e616357396a72376e346765484c58564939506b314b4865375933626874552b3572703765654b34565a494a466b6a626b4d70794b344d65456442386931672b784b49725669306139643342484a3639366634633047393050784c626a5337734852707937584e764b63736e79747432666a69764a775764345845566f3031644e76547a374773364d3471375051614b4b4b2b6e4f634b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967434e7676476b70572b386153764f6e38544c4369696970414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967447a3734786b6a7742652f774441663569764e2f6743662b4b73314166394f3631364e385a542f774155426566682f4d56344a345138563333672b376c7662434e4a476e6a436e5061765377366270454d2b776a6738484270612b62472b4f506955592f30524d3439522f68534434342b4a3838327966546a2f414172546b6b42394b4541395253415934376574664e5a2b4f506966502f48736f2f4c2f414170662b4635654a743266737159394d6a2f436a3263757747543862546e78334c37514476376d76612f4457733275696644585270726951435272645246474f736a5934417235323851613550346f31314e53315646774d42306a484a54505436313733344a3052745130363231532b694b323652714e507470522f71515034736576417161306278744945376c4174504a71423150576376716a38705a4e7a48457662386539575a4a50746d7057304d7a70736d59534f724d41465665647746644e714c54573633467a4a595133624b41455656473969654d394b386e3854586c6e4a7245646a424b7a7977676d356e696641542f706b43507848343179314a4a514e34552b5a32505239562b49326c36616874744e5837644c48386d492b672f47764f395538552b4a7457314a6268377732454b2f646867596e50317761784a62794733473244454b4e794150543350656e3274326c784956326c654d686a2f46586d75744e3335566f64304d4e474f3530567438532f452b6c58712b64424471466e6762696d565944387a58715767654e4e4738514c484862586b58326f6f4765417438796e754b38526463444b354765754b6f4736476e616a4465576b666b584e75346435592b4e362b68717164666d306b52567771746448303651434d5a714f61474f3469614b574d4f6a44424271767056386d6f366442644c2f77417445427137577a5277616f2b622f4766687558777a34686c67494a7462736d5346736664352b364b7737617a6d753775477a746b5a35626877677831487658304a3435384d782b4939446c514b7632714e53304c4563673179587776384533576e584e78716d7278723533334956493558423631504b65335378365748642f6952336e686a516f66447568775745492b364d7363636b6d746d69696d654c4b546b32325a48694c57503747303253345346703567684b5272337858684e6e7164353431754c6e55372b57377467574b72354d6856526a3072326e7871304d57677a7a5473775552736f4363456b397331355a4b49394c734962614f4952784c487543442b38546e7257574a7171465033647a6f7730484b5254744e4e74573037556a633363717851685643357938684a7875723050345a2b475a6644326d5433457a6d52376f426c4a36374f636670586c6b4c58463972467042617550744d386f6a4364735a354a46657836487138756c6a2b7874562b57574537566e2f685948705858684c4f436474536179744b79324a6463304a3769655855313358307941434b30632f752f79717434623066566f4e5775745376484676413668557445474648582f414272725232594d756662706973575478484662336c314463576c776951636956687735507058567a4e4977737236484a2f4566776e70467a5a584f73795736666245415a6a783877417154374a715068765359395630323757383070384e4a6258502f41437a474f784a3966616d654b466d3178744f302b306551793330755a49322f67687a79542b5972743953304332314c77374a6f724b55675a416749343548536d6c6458594f566d637648343730713730687673442f624c32644d4a616253534737672b31573030687266775962615332517a58594a61466c3451746b3844327a584b324f71532b43723232307939384e777a587a4d566876593043686c48636e4857753430516178713132622f556848466166387359464f6365354e556b5135585a774c61507233677550796a627671756d45377650482b736a7a32373843726c706432326f512b665933437a7867346341354b6e304e6572537842304932673536673944586d336972776244706c706436336f424e6e4e41444e4a4176334a63636e6a70586c59334b3431766570364d39444334365650335a3745536e3938414d59794b383558784861654866697a716a587a624c65614d526c2f54675633326d33523143777372777145615a415855646a3656347a3434737a666645545549324f31563273632f515635575634654d367336632b7a58346f377366563561555a7275656c612f77434d3942307a5262683766556f376d6153497246476e754f39556668704c352f687157556a4265517478376b3135566361546179514e35414b4f6f344c643639542b466f322b4533556a6b506a36386d756a46594f6e68384931543674484c684d544b76694533304f304977543730625178413579654269687342775779657741724f7662756462794453744f7a4e7164317773696a4974783674586a30614571736c474a363953716f5135354472752b6d687531734e4b6a2b31616e4d664c614e655243702f69617539384965475976432b6b473053557953534f5a5a5749786c6a54504333685732385032356c6245326f7a442f4145693550567a2f41495630574b2b676f555930567978506e3852586c566c64693055555630484f4646464641425252525141564762694542695a55415437787a30724b313537695659374b316e57423566767945344b714f754b38394f6e7a654c50454d316a6233313161615a59416965554f66394950664a7a39613168526c4a5841394e4774615778774e517469662b75677131464e464f75364b52584871707a58792f346a302b30762f467431622b4862326530303630692f65544e4d57566e396a6e33714c772f72486a5853376b485472693775726549626d4c354b6b44337264344f546a644571523951337435427039704a63334d6978787871574a593968586d506948787a726d722b4674516651644e654e6f6e322b6553514376714b356a537646326f654e6271653231794734687437574d3345717163435656344b6a70317a5862616a71326c583852384e774b4c53797559424c625855625951734f646d5233344e4b6e526a48634c6e685868667746712f6a71346c75567578765751724b306a6775702b684f613657773031644a76626a772f713171667474736378794f6548582f4f4b6663654f374c53726930764c445376737437433752796d42734c4f77376b446a46636665654c745676384158354e583142486435574f426a37692b6c58555630636d4d704b725361363944304e72694b45716b666c714f36714d553172754c72356d543379633177747a3475685a3169744c5a77352f696331705233657045414e5968324b67373150417a2b46636b6f53573538354c41316f726d6d374e6e53472f557352476d42394b7058477243474e7a4e4e46476f395735726976454f7161765a4d49704a566a5677666c6a37566b3658706570654974535379676b655232354a596b6743746f3062725537734c6b2f505a79653531552f69654f535132746c47626d356c2b564344334e64333456384f7865483751333132556d31473554633563663672324655394e3845365234634d632b446358714145484841616f3963385677364b5374327279737750797230466177696f6248322b563556537755506131644458766268703543724f6f58713072486f4b38793857617a623633716c7459774e7474726469476c484f6655316e3633347a76645777695a67674852564f436164345476376178653465347446754866415575506c556436717a766331784f506a58616f77646f6d68646546706450736f4e62676c2b32776f775a6c6b4838497232552f46537767384a32543648625254366e4d4e6773596a397a334f4b38363061337666694272552b6d5764304c50546264415a455563456478785851336e77687574486d62556644656f6f6b36446848484f4d6334363177346a4e4d50517165786e4a4b5834486e3469454850393074455a3974714d747671687662363366574e5a6d6263466b4f5972622f4147526e302b74643134533858336d76586c35486661654c534b324156584833575074586e7348694f787466446c3763584945576f516b7850435141785072584f3656385574533079336133454b74486b6b5a417a6b6e6a504665526938425578384a4f555065364e7638414c6f51707868737a364c61345150356148652f554155756c36317070385132326e4337674e362b37454b734333436b6e39416138643037782f6661356f55646a70636274346875584b376c47517131314877334e6a592b4b625777314c534a376658766e2f77424a6e42506d6b4932347154375a7267774f51564b4e574e576f6e37736c743550642b5263363663576b65315555555639756351555555554146464646414252525251415555555541464646464142525252514155555555414646464641456266654e4a53743934306c656450346d574646464653415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555567436969696d4155555555414646464641425252526d6c6441464646464d416f6f6f7041464646525433454e72433031784b6b55613957633441706763463859786e7746666651667a7235313058526276573049737a47504a41334751385a505156394466467535677566683565797753724a4579715664446b486e7361384838492b4a523462302b394332385678633347307872494d684d41382f586d765477326c496954494a7644577157396c4e667a5736726277544343556875517847522b484970393734593171777358754a6f345856414763416e4b6974332f684d3755327961646452473473586a2f306d666f37536273672f68774b757a66454778766f62713076724e525a73694c475978686e326e507a56306337596d63764234543132346d74344262784b5a347650695a6d34326364667a46515365487456477278365773456374784b4359696a664b33342f6858595266454454377852446457663256466765316a4d5150434e6a6b2f6b4b7032666a4b7830476532476e7747374e6770387161582f6c6f53546b4830366d6a6d64774d7277547061587678443033544c6c4e766b796c703150646c352f7058304e723369485572425947306e544e396e432b3236647839794d6453764e654f65474e53665676696a59366a6f326e714a6e584e78482f414171546e4a72336538306e564a37573741766f6b6134694b68476a79464f507258505562624b6a5a4844617272393734693061656251456b67307749664e766d487a4848554b5072375635313461384d2f3239702b705846697a53437951536a6e6d567a6e4f667972317634614f31766f732f685855346844714e6f58456b665546574f51772f4f737277643463667735346d3176514c4b354d746c63494a586d526747674a4c636670575571615a6171744f364d62515068354e64367a4a42714e764a487038316d736b4a4a354568414c4438796167386465486272535a4e4b743747465768746b4a636a7679613754534a66454e76726b756e7978585174344743706379747645716e76586158734d4d79375a4552386a424246524b6e467070493168566b354a732b6342714f35513644354f68507161676c5a44497762477956647046612b742b454e523076784850446132306f307561624b334448355979542f4c70584f36784265574f6f33476a4f6d3636554171367431423648396138313464786e707364797271555765322f4279356e755041364361587a664c6c5a56506f4d394b3943726c5068356f6e3967654472573163625a477937354f65545856676739445851375830504d6c75423655677a2b464c52534a43696969675a7a6e6a66547272555044553473796f6d692f6571473648413656347663616c63363964576b576d326a7a54334a78383341563148492b6d42583055514370424751527950577561303377706157327454616d5946694a557878524b414652543149392b744a303454747a4c59307031584459344c34582b444a313853586d74366849586533637852595048665038363252714e72662b4f4e557339524779336b5551517351655750485874586f454546747074735569525934314735734448346d7559384f325674713875715475734d39744a4f54452f423542494e644e4c336d72497a626534794b44583945595132725258756e6763427a6c782b56574a2f456467317035577257306c75694d75396d48796735342f576d61336157396a654a46427161616138692f49476b4371543659724a766f31385261552b6c36695a62613874705565524166396367494f346576513175346559347954334f633033785065332f414d514e656c3850574c58627247735676493477736647443178314972665758346d3662614e4c634c5a3368646838712f6551567a7332763350687a58377932307532426c734657567736344e7841526b6b6e31586743765766446e69437838533650487146684b4a496e34502b7965344e614a57524464326372642b44745838556f7165496277665a6a676d474c676a327a6975313033543766534e4e677362594d4959564372754f5456677970324f346a307242316278646f2b6c463472322f69696b36434e5733534838427a52366b6d354c4c67684549334870586e2f414935385a576c6c70742f7074714a4c75396b684b75496c7973536e6a4a503530373762722f69394a4c4f77744a644930346e6d3866496b63656748424664506f2f6833543946744462323975704c66367952774330683953617871316c42614663716535357a34666a45506836774350356942643566313952586c66784245756c654f3537756444354e77674959656d4d663072324c78446f56333456314b6256744b6a6536734c6c76394a746363516a75362f7256535733307657394f51795277586c6f33334a5755486e307a325074586777627765496457577358315057626a69714b707032615042726e5662587943494e37534559555972317a3464574d396a345252376c64766e6e644836395456797a3849614261542b636d6e495842796f634135503556667664526e696d6a3033534c6358476f54664a3561444b32796e2b4931574b7855635a4255714b4a77324565456c7a7a48585639504863786158595269545635526c492b716f76715458622b46664330486836315a67776c7670734e63537363356276696c384c6545376677375a6e644962692b6b356b755a4238787a327a365678643342712f692f787265615662367250706c6c5971432f326469476b4a4a352f53757642344f4d467970366e4e694d51366a386a3166417a52586e762f437362306a2f6b6364612f372f6d734456744b3072517047545550694671776b5867787833425a682b417275654853366e50474d70753056646e72377573616c6d4f4641795436566c3658346c307257726d3474374736456b7475323252647047442b4e654c7471666870695666786c34674950422f664e7a2b6c614f6a65472f446d70546b615a343431424a6e4934615861782f7871505978665575564774485678663348747448624e65656a345a58324e762f435a61316a7150333572446d2f7466774c34767337473531713631485472794e356d4d7a466e5479787534702f566a4c6d5058714258506142347a3048784767476e6168473878487a517364726a38447a5851394b35355263574f397a6776694666526164623344757a4c6454776554614665376e6a2b6f726a76456d745465466641576e6144597570316e554541754f354149355031357273664831696c337233683656335846764f5a47556e714151663656356532793438573637346b75306b614c7a544470367350396249446742522b46656c68624e653973544a4d79786f6c334c63782b4537506141495450644f78373965542b564f6738586d3030533369745970627139745235556246634b754f4f656d613334394e74394f734a594e586c6c695450326a554c39443878622b4741482f414c354e637663573262612f7655756b73645575435a5974506b4844786469443042363856326530553379792b4647657867616e346a316b3361336c7a49305632636a35414e754432785657336e31432b4357586d54505a52457541654370373450343172364b6b4e3146766b694c547079532f497a3656634e334751356767615263384642675a7133516f3733304b564f704e5852783934787437694b64572f774257634254566d77693158563570704c52456663506d33454441726f5a556134684a2f736d4a75505545316933656e745a786936734a5a4932632f7649316247327561765469763459355953704f507537692f7744434d617639716a686132576554486d595667506c46647670326d447842643666415a47307a547041694d6e4a655676596a49483431792b6c367930725236664a63434756446c4c724f442f756e3272706250566464306943653357304b32377962313868766d396770374375463146765063785746627437653131386b656b7a6642507769306b426c2b306c6b494c5a66372f736177664830486862776c465a54365a4749745167474262495332354f6570482b4e5a643138552f463168596e7a724b7a2b7a4241434a472f65466363392b74634d672f747557572f745463656263486d336a796365785036315471637176304f33445135354a556d726f334a2f48396863325732336a6d612b644e69446277445844654a4970306d6961346e4d6b736f3375763841644e6568366234596a6d6a696b6c747a6133536e6149786a38366b316e5130696e5363573633686a4732565748516574634b7a4b6d36764b6a324b32477856656e616232504b744630703959314b4b306a64565a386e4c6e41414172587364436c6b3152744e755a4461776c476c44482b4c41342f6c563356394269303235533774795462534d476a64654d4e2f64725a7674597339653079393153366d6a69314b4a524242617176477764382f6a585455727962356f616f38333672556a4c6c6b7454512b47476f523648717073354a4669687569513072442f57454841412b75613976383052756f6b594c2f64417235373050556c315455644c6c4d4d616659506d59644163642f307231505164666d3150537261386d45556b6b6b6a426950344d5a7858795765344a314b6e746c387a664430705239316b6e696e3463614a346f65535a6b4e76666b634f68774750765869766962345a363734645a6e64466d67424a44526e4a322b707233794c5841384e794a4d435647326f42337161473664706d4c72477a435064794f666f6177775762593343653750336f396d565041702b544d48344f61486f467434656a764c4b5a47314e69664d6151345a50594131366c486167336b457278497a7867375a43506d5849493472793239304f44586f44396d675454726b4863627532586132523272513845654f4e536d313230384e6176617573337a7046636e4a456f56474a4f662b4131395a677331686974493650716a6971594f6345322b68366c5252525871484d464646464142525252514155555555414646464641425252525141555555554146464646414252525251424733336a53557266654e4a586e542b4a6c42525252556a4369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b445253645451774646465a757336377032685762584f6f58635543446a356e414f61345056666a6a34613032555252783346323558634767415a66784f61714e4f545148703146654c7a66482b42384379304b6551392f4d6262544a2f6a54667448765854493467656d4a63342f536830326a53464b553955653130593936384850786a3159784d714b6a4d526c546b5a2f6c564358343365493478476e396e4c7548424f37373336565561625933526d6c632b68794b4f6e61766e6d583432654a576c526b3030496f3672757a6e394b326f766a5871304e736a79364a424d534f3177632f77417162707445716c4e765248746c46654d512f48573679546465475a55547359354333394b3172623431365a396e535337306255346478775838724b6a3863314c7073505a7a54745939526f726a4c58346f6546376d34386f333651385a335373414b323476466d6754573332695056374e6f7334334355597a535558324a61614e6969713176714e6e656638414874645254635a2b5267616b6d6e697434576d6d6b56496b4757646a6741564d764d5173383064764338737a68493047575a6a67415635567247717a654e39574d554d7270345969487a534c6b666148485964386634552f57746175664774363970617953576d6932306d4a4a676366612f38415a48743171614f4f33686938754256677434564a574e65415077727a38586a465439794735364746776a6c3738746a6d4e6473623232304338306d417954365263674647626b57324f3338713869754c56374b3661467874645267636452362f6a5854613738554e516c314757437954797246574b79524e672b5a672f70566d3773303852654837625531694565374b686c3532482f6150705870344f745877384637665a6d5665464f71337948475a4f446e41556452696b355a384870394b364a504166696157304470706373366c734230423546413842654b38592f734f35342f32572f77723275654b325a774e4e614d35345a795157417837556d376a3733796b386a4664482f77675869736638774f342f77432b542f68515041586973482f6b42542f3938482f436c375350634e54562b4573576f79664547316c303563776f50394a5048484272366a6b54656d4b2b6450687059367834543863572f774461656e5432304e37386d5343426b412b763172364d64734b543644745745704a7975686e43366a432b6e2f456d31766f78735337746a446e7075635a492f6c5756345431654f30316d37733775336c693175376e627a56654d2f4f67364548706a72573338513448766443567243346a6a314f316b57614264334a3745666b54574f6464307a785870797a6f793656346a74634b6f755473594f4f337570365646675051734d41417a46514f324b6975464248484a4e635a344e31573831585562786452314d2f61494d4b396d51416f503935543342362f6a5853617271396a7039713074316477775272335a38452b77714a4c51326739544b3135544e6169786b4c53724934636f7139676334727976564e4b766f2f486958657061664a48596c31643573634c45754f7550617657394b757a7156737430734c51377a2b37387a37785831715333746c315856356e6d416130686a4d4a4438724a6e722f4b734952356a536f314859766e58744674724f4752722b336a67634479324c41412f536f46385761495a436f75384166783754732f5070584d614a34473075383852583130366d6254595732573975376c6c513442794230396137722b784e4d2b7a2b523968673872474e757759702f566b63397947333133537274776c767146744b7836424a41545767446b56796d72664437534c714a6e73496a5a586f584555734c465170375a4136316732766a585739436762544c2f7739714e374e614861313146475373673952554f673172634c6e704e465a57672b494c4c78467079586c6f344754686f32507a4966516974513578574d6b304e432f536d737752537a4d416f484a5061676e486175493857366c646170714365464e4a6e4d64394b766d54584339496b392f72302f476c434c6d30424c64367850346e7531307a52474c3259597065586939467831556575656e46637072383133384b4e656876724a5a4a74447644736c674c5a456266337635313276672b2b7472574b58526d736b73727133507a4c6a486e66375939633471333431304b3338522b467279326c6a444f736250456339474134723036635647795a467a6b6271587774385364636968532f56356f34637167597156623148353179666953487858344275397a53796168627575494c393142386a74686965335472586e4f6c5856337039314864575a2b7a616c62755638336f47413748384b2b672f436e6a4c522f486d69745961696b617a3445633176506a39346364514b36716c4230577062706765582b424775746338536133466658583279367574506b426d50384854676531592f77414f50475631344e315756626c354730706d6457694753466250584834566f6549376162774838533570644d44783267554d7144674d6d4153756135762b7a626a5564493144784a62784748546f70666d5139796364507a726477684c33756a32456a3350547a346f385a494c727a7a70476d75637169594c534c363548497270375477646f646f7979765978334e794d5a6d6e2f654d5436354e65612f427a78724a497a654862396e61544f3633646a30584854394b396e3656346d496c4f452b563943304b4146474277505369696975647534794b614e5a454b4d41565042424855656c65572b49394475504357702f624e4e746d6c304f51356e7449786e7932503841474f2f3556367351443170736b5563714d6b69426c595949493669706c46536a797371456e463352354a63366e424c6270446f387133392f6367655435597a737a3350706a3372755043506865505172507a35735071633433584578354a5070567252764347696142635458476e57537853544e7559357a6a365a365675446973714f486a5366756d3162457971717a4476586e5868496638584a38512b753150783561765265396556324e384e4e3853654d723848613045436c54364e6c7137734f374e6e4e79755453524838532f4855397336614e6f4e3252654d2b795978386c6659653963566361416e687254625457664539704c655846354f497a453748634165684a72622b466d6a5236397275702b496454693878597a356b59636346757552394d567766784c31375776454f706e56535a6f744a4d7769746f7954744444754f33584e6251546c37306a767231667133376d6e76315a3941322f7736384a334670477730704e726f4479546e6b567858697a34544379567452384f37315a506d4543453775505131712f43625839596b746d306e585a54506342466b686b2f7742676a6766705866617872326d614841736d6f58555549647471686d414a5070562b7a69396a6d6869617358766338302b48486a36342b316a5139666e6237534d37486c3450307166346b696476472b68437a5866634731756469675a79646e46592f7741574e436a734a4c6278547069655667727532444834316f7a616c2f616e6a50774865376a756b743543787a3332564d4a4f4e302b68726959776c465661656c397a6774483853364f62683744784459663262716b4f55467a626777766b6e7164754d31312b6a2b4a746230473556624b2b5069485346584a2b596562486e3148336a58652b4a7668373466384146454d6a58466a4648646e4a57345162574464696364613861385165463961384479724a47307542774c3241454b772f327857304b744774377452575a77327364583433317978385757794453626c2f37516774335952444b794b63636a4855394b34587764712b745864364c4758547a6353525237594134482b696b2f656c4939633838306c72716356316469652b747a3971326c556d696279693252324936316a61484a724d6576616e6236546674626956534a35572b62436478755065742f716a707839783354467a647a735045757157306c6b557472705a744a675942564a793039782f6550633963656e464e316e54344e4138484c62366d693348694c56734e4758475867546a67656736317a2f39727761764659322b6c5755613631614f63735642536344503848544e594771367a713270654b4a6272556e6b533656696753547046376531556e4679564e2f4d5431314e65524674493758533758357032494d72716552366e396176496f7430435234454f655237316b615a65724c4c497952743970414b753358654f2b4b766d56514e716e63525870526f51714a7a57327776724536617357636b714d4b7747654748465a326f5357734b2b5a4d776a4262423936796645562f643273735377334a5647586c416568716a6f326a6172346f76567434504d6b2f764d3264712b39636d4c7846476b33665a473943725664755562747359377435507449654a686b63633572722f41413633694c564958746f494a746a4e68627031345666546d7574304c3465614a6f30416138686a7672776458596b4b4b367442356359696a52594965796f4d43766a63646e56463356474e32657252793663374f7163785a2b45624b31574e7235473143344a2b63794f53462f44705679433269744c3263616261525249522f416f474b3265467830417a31396167325177626d334653334a727735593272552b4e6e72556146476b72526a5971793273726555304c6c6e552f4d3357713879536779444f586362545557726549375454346d506e526f427a674d4d6d764f3957386433326f7a74427049654938686e366b2f345632595041596a454e4e4b795a46624d4b644a505575654f6a6136646257734b7a356e44626e67567367446e6d754a4e336271373754392b7156334e637a33472b366b6553586f533579617678515772524b7052647a6a4f3764393056396251776a68486b6232506e71324e6c4b626c334757576f665a684a746371534f4d487258572f446a784846593673747071563335566b3254383534427268626f5243355951343244676330496973724669647734417855563848437443554a645346695a4b783942617065433075725738733369764e4c647773733854412b567a314f507257366a5432397a4a4d464c7753782f75704f7a4169766e725462585770744a76507374784c48625171486c69446b5a4872697437773334783855326b6c7661495a7452746776797742647a42613848455a464b564b314a336364376e52444853763778373770556533544d416a6532535233713734663038526168615353777130735a66612b336c4d7152584a3664726c6c655143654338534366626837575a3973696e3656304f6c58757176346e306d4b4a5162467849626f6e717038746976363472353742346174547830464c53386b2f755a74557271564f5675703331464646666f783551555555554146464646414252525251415555555541464646464142525252514155555555414646464641456266654e4a53743934306c656450346d5546464646534d4b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b41436969673450427065674347755838612b4d626677687038637a6a7a5a3557327045765836302f7868347a30377768592b5a637547756e556d474875324f746559654676436c2f3434313658784472526c57776b667a596f35447544445051443072616e5476717738796c70506850555069647134385261372b353035354347564749334163414b4b394e5434612b4434302b54526b3641484c6e50383636614b4f4f327430696768534f464f466a566343676e3573593235373133786a70597a636b6368715867667764702b6e584e3563365a457476625274492f7a746b594831727a4834632b4772547864346a766459754c43502b786b4a5659777a444463414472366331326678733147533038473239726275556135754e6a343479764f61336668317071614e34467349456a4739775a48775076484e484c65566972796a543575357a507841384e2b4766442f4149516e6c744e49564a6e4f794d377a77636a3339366a2b4866676e7733712f677931764c2f54424e634d374b37655977376e337133385a5a556a305378685a31337953466776726a42725a2b466c764c4434457432635938795232432b3234314f6e744c49313557384d7050712f304d54787234552b483368665259727938306d59436155526f6b4d7033452f6961382f6e486769314471746a7245444842774852682f4f765876694e446f33396a326b3274576b6c77444e736a574a63746e42506f616a53303846614c344e693132343061424c554b7535705963734d38633856456c7a496945724f35345863584253523230653575597264446c784f467a7339713172765670744a31424774645558554e4e2b7a69564732444b6b6e4744774f3962487859314452372f77414e615271586836326853794d78456b6b6365336e7350667658423662615458326e686f30436d396e574a5655635947442f4145724e77746f643147764e4e7954657a5056644d2b476d7261747063463771657278714c68424971786f4f41663841674e6333347a2b47634868613830362b6b755a4a644a754a68486374753554506341666a58304259323474744f74626359506b77716e54304659336a62546266565042757151584f4e73634c53527333384c416461326a4657756a686c566e4c527535347861525876776d2b494544784d3935595863414f537862354366353133577236354e343875767339724938486836467358444562576d596334487430726d4e446876384178446f566861616f50394273382f3661772f6554484a2b5836632f7058594e416b6c75316b465733676444476f6a47416f786a4e654a6a38656b2b5350336e6f5962434e726e614f656a38622b473131566448535a6f3269627955777679676a6a38363667426f5a674e753749326e2f414767612b6264527434645038577a774e4d58686875546d526570414e6535366a347730625476447365735133615335514a46466e6e6437317934334c2b5677564737356a66443475366c4770736a786e78377056707058696d3467736e4c49784c484a36456b385632667732385961656d6e2f4150434f5838615270494375346a68386e7039656138763147396c31472f6d7535574c53537557353936365451744c74745a384f336278797832312f703438315353415a427966384b3975745255734f6f565076504c6855635a3352376c7047717a2b4237714f43346b615877327a62596e626d53467a3250742f6a587163557154784c4a47775a47475151656f72353238442b504c6257466730625634304c6c437253796e506d656772754e473157353849586632656156376e5235582f317a6b6e374d54322b6e5376507031616b4a65797236506f2b3530564b4b6d75656e71657163306471697462694b37745935344a466b69635a56314f51525574644c566a6b4f6438573238663247432b623731724b724c2b597255754c3870704d6479674c50496732414475525550694c5457316651726d79513464774e763146596d6e367a716d6c5745566e6661524a4a354b6846654d5a79423372726f545674535769312f776a6257304c584d53666162353345686156766c48624658645a384f364e7163496655724e4834415a686b48394b5a423478307032534f65567265566a6a62497047507a7257573467765966334c704e477735326e4e62707037435a684477586f59746f68617750454547465a484f6365354e597437344c307255744f4470433733466e4a755270483462362f6e585478334b3664654343567474764964735a6231394b3433346a7933656d36626372424d5949626b4165597647302f58384b62566e715854764c51303766553238516c72445467775a51493771584742454f345839613651777736446f526968425a596b4f4d386b6e314e6547654674513854586c74464859584968737255376a633753504e49374e7a7a302f5776524964653158557a44597951675375796e656f4f4376656f566f733165486d646234647342593659426b356b5975632b39613963732b70586c7446476f49506b6e443448552b6c513348692b4c54744e335873697833682b62795431786e464e79366b4f6a4a48586539497967676a31726d625078456c784875573569626546505837756531636a346d3864616b4c325853644d325a51346b75546b594248616f6e566a434e3546527738354f79482b4c49744330545864326e616a4e7032723349334552636f5236734d48485474574d666952346730636564504e613670624c39356f46494948343472424d734e72764d724e64584c6e4a6554356e782f6855456d6f77684359306956656d56483836344a3474505649366c675862566e716e684c346e614a34746b6133684d6c7664527275644a526a38716d38496262377848726d7157757837575762617370487a4d516f36653346654a58566842504a4663417462534b34627a592b43773944587358673778524271756a6f756d57715738715362487478786a6a722f41467265685670743357356a557773343639446f76454f692f616d69314b302b58556255457848733371445270757632393970704d6e37756345785378742f432f497147383153366963704779455259447365674f65613831756d6c3856654f4a59624f344e74613278456a7949646f6d5966346331314f614d7671387258504d7455684d4f75366c433477717a5a48745664586353724a356853654d356a6b694f43445770723073647a7231354e6b594c62536578496f306a524c6e58395668303233694b764e6a4d6d4f69656f723261654968476b756255755748615679617a7474662b492b71576d6e334630737957672f6554593237492b4d35507258572f456e53622f524e45743947302b7a326547375542355a515157647a2b754f613736323050532f4366685a644f68456170747864584a414278334a4e5937797a58556f62544c4f572f676548597258442f4a6a504c485070586c7a785837784e644346526475593857384e586b746e34763071386a6661567541702f7742306d76726d435153774a4a2f65554869766a792b524c4c5872364f4759536947362b5752656e4464712b736644552f326a77317073753764757430352f436f7a4857536e62637a6961744646474b3833555955555555414c535555554e674172785457784a76386143506b3749386a323347766178586c6d6e575231507858347773414f5a344656665935624662304663756d3754544e483453375a664143526f6f336e65725936386b3135523854394e6d38502b464e4b3069364f4a34706d63414849494c4d632f72585666432f5754345a385461686f57707a434b4e3232494850335842782b7563314438614c43485766466470614762613657766d685233414a726f704f3862476d4f56713870644764313450306c7266774a42714f6d524136744c5a727361553846736356382b2b4d6d38594e3476694f75687674786d486b6a6a5a6e746a7458314634494f6642476a6b6a424e716e38717361313464307a583459343951746b6b38747436735647564e614a574f526e6b6d72532b4c52384f4e512f3453785930424b2b54747830347830724974727935302b4c77746567596b743753356c697a36434c4972582b4b2b764a71747a612b46394b667a6d566c3362446e384b6b385661503841597452384d614f724257476d33455735754f54486a6d7356724e7339435464504378684c6475356338462f484453395832576573736257364941456d3335574e656d332b706162466f387439645378765971755759386a466647327665464e57384f6c48764c5a6c675a735233436e4b4e39434b5350785a717961424a6f6875704773584f53705938555370586430634e7a5431533866784c3479614c51597a464538784675766f4d39545776726c3475683273666832776348554a6d786653396373657750346d714769335678346538507933734676464e4a6341717371387446782b6e577571767668314166686c46346e696e6c75645266384166794d7659636b3572766a4e5559712f556871374d537967683061336b6b746e3871357478356e326738345074585658656d44552f6842666139712b6e4b6c2b30694d6c7970356453526c7134474b37625550446b78546d55414b77376e6e4e652f795157327366424a6f5946796f3038454b672f69433578547a4355597544577a4a703364376e6d506854534966463267506f5676694c56644d41754c57546f5a46504f442b6c59576f575770614671583248584c553273354735534f56492b74542b447645343848333057755457356b5a37647262797763454d4d597a2b565a2f695434696139346d736268622b7a5132636a595639682b512b786f68577159656f31485a366c63716c75636a71743031316579793534424948307233443466327a57506775316261456159467477366e6d764372437a6c314c55494c534d6b764b345556394961625a4e702b6a574f6e746a4d4559446657766d75494b39344b4365736d65726c564738323761457a4178687969626971376c6a2f764776504c6a7852713846354c655778575332516b54784d4f55783178586f547473517475507944687138723864487a745674557443734a7577556b324872396138764a36556174527735626e70343654707735726d6b2f78497347744a47695a2f7447334d635a586a64584e48582f46657062774346562b324d594655594e4d6767444e76565a6251376d56795033673971366a534c7254745952705a4e5369736f347838322f373334563970684d6e77744a7632683446664831366d7a324f645451346e4a6b765a354a5a6570415046586f4e4e67736c45317645592b4f58593971314c7256624f466c67307131387a64317570786a386761352f554e61564a39726733456f4f41472b3644374376586a4b68526a6f6a7a317a79334d7a7843396b374b3053737333385752317250735972712f75426157554a6b6c6d49554b4f7072705538462b4b39627432315536524f38413644474f5059563258776a384a617250347874395857786b744c4b30425351794c6a656347764872316c4b546b6d64455936575a61384c2f4141456e7662464c6e57357a417a674552787479763134712f72337747746250535a35394e7570586d6a473556596a6e394b397476645273394d684d313763523238576342704777436653713968722b6b616f6a6d79763765634a39344b344f4b3831565a3375585a4879476e397257457a3345646e503869474751466543656c6652767772384c6162592b474c4c564259694f2f6e6a4a6b64733577546e70572f44346e384b336c774c4f4b3973705a586b3265554d456c7670573544506174493174444a47586947476a556a4b2f68577457707a6174416c5935587844384e504476694f356136754c646f626f342f665173516550307076686e7745326736756c382b7233647835653762473547306771527a78373132644b76336857454a586b6b2b343736456c464646656751464646464142525252514155555555414646464641425252525141555555554146464646414252525251424733336a53557266654e4a586e7a2b4a6c42525252554443696a494179656c636c72766a2f41453352372b50546f59707232396b48456475415176314a3470704e6a5362324f742f6c52586e317838535a394e6a57532b30473843484f646a49542f4f6f624834312b46627135454e77626d7a5939356f2b4d2f6852474c6c7168796934376f39486f714732764c653767696e7435424a48494e79734f3471616c7353464646464142525252514155555555414656623355724c546f764d7662754733542b39497755565a50313631346c2b304b386b634f684f4932654953503569383754303634717163656556675055783476384f482f6d4e3247502b7577717071766a76772f70656c793333396f3231775534574f4b51466d506f4b2b56303851615543465068793059394d3733352f77444871303559725731684f704a5a7061796e4749556663694b54677479547a585437474d537163484e3637486f576b61567150784a385472714f70535a302b46795833446846502f4c4d66312b74657a5157384e6c615132397045736474454e6b616a734258466142343138466162706c6a707476716b5350355335473175546a726e46644b66454f6c4e61746348557266796f787579443046623034573349717a764c3355615a66412b39752b6e616b7970414a494a394d3179696645487731635073734c7037326264677878664c2f3646696b317a785865324e696279433374624b434d67764a6575472f4949536132356b746a6d747a4f35352f38574c39645a385a365a6f4d594a4d444257585047353845663172756276787a5961544b4e4d3037534c75376c7456574d7647503358544a35727a71617862562f456b2f696954577247652b2b57654743414d4659714d4b506d4664546f30563162364c61704c4e42356a376d6c62657553354a2f705844694b377071364f364335306f766f6335385364566e38547a324678427064346b467241356b796e434d52587048773231585437767756703976623364764a63774a2b39693877626c2b6f726d646231524e43304f346165554365654d7877786f5135625042504831726e66422b6e6545704c655765376a76725463755a4c6c39776152753441586a47614d4e556452633748576e79515544306e7876715676706332693356374538747444634632564275444859777857522f777337776672326d4a70397a7031773654454a396b387364633863566b61704459665a4952346638557a2f614c57627a596f62714c4b5a787a31585053745851506950344c7530612b756266374a71556549705130476552334742307a6d7432306c6f63385863506946345a306d372b487232317447756e32397150744555653347577754742b764e65642b42594c47313862616461616a5046446132554a6b6b4572595575656e364775792b4b32744856625053394b3036554f4c6c7674457a722f44474f6d66774e65646146346930335339637530314b4133666d4a35526648474f4f61786c4a70713270317853564676766f66524138536144356f4231717956786c676f6d423446634e71757258586a50554a596f6e6531304b33636773442f78394832397574636a34633150773948703139627a5856715565567a44455132384952307a363161304c78436c6e2f6f6c77686a306e7a4e746f2b5157516b39386471354d625771756d34775669735054677169356d6465717769495278782b58456e43784467666c5766346a3175333048524a3736646c5759786c596f69334c4873663172537949354e3748636f2f6972694e6338466a554c752b316a5737783562614b4a336867513867414569766e634647457176373532742b4a362b4b636f55763361504635706d763952655a75476d6b4a50507161374c5376435358586a43333054554c3051326a4a3571677477654b346d6152504f637767716d34375165754b3744773334543851363765576c2b6f4b7746746f6e5a76753472362f457451673235637173665077546b3748502b496261477931362b7462644e73634d724975665939616f577254377a48627449586c2b58616e56733971362f785862322b702b506f395067474d794c4249772f69624f43616976644e486844787a617749573277796f5357354859314d61793546337465772b5433764930664248674f39767452576655424e5a5178664d43796b4d5458733869527a7774445047487433473131506366343036347543386e6d5a3348415a654f4f6c4e5a77496d6c5a3973636135647a305556387269386456784e52536174625249392b68686f30716671566449317134384533615258456a334768334d6d794c6e503255352f6939713955686d6a7549566c6964586a595a566c504272797a544e476d38625371306974483466696663485044584c412f77417574656f77524a44456b635367496f7742364376616f637a70726e335046784369702b3654555a6f4e46613361324d436c643650703136434c697a69636e755647667a716a4c3466534a5364506d653066746869562f4b747270544a70343449576d6c594c476f7957506168546b74515050746675396630617a6d6c315343432f7449675a4935512b786b492b67727976785a3434314c7831396a7359496e7437563356664b4a79785072394b31506946347a7650464f715336665a7346306d3259344b3847556a6735397574633334523153333033787870747a6352744c416d5134433577655144587659656879306e55713974444f2f592b6862547776613664345367302b326955504769736344473967426d726d6b43425a4544516f6b6d33432b6f3952577441356c554e3155674d70397177745374337462347a6f53462f774261423659363179575464324e79666333477362646732596c4f34355075617a7457384f6166716e377957326a6164514656794f514b30624f365338746b6e6935563673557244356e334f58316652744c734e4a75726e374f49764a694c5a546a4a41727943326d566f356269584c6d5669774c486e486176556669646679326e68686f34315a6c6d5a5566614f635a4665516170714e7270304b32727377754a6b43514e6a4b676b635a72687869636e474b5230305a7458625a3066676d43776b3147373132396a382b326a4269696a786b73654f51507a72526b3847576d6f61704871756e32586b3277592b665979736379412f784164713662775a34575068767764445966614239716c4a667a4d5a77547a78785547692b417859654a54726478647a47664a2f64492f79756655672f577568556f714b526b366b334b357947732f4439394d755a726f616b4261543832396d342b596b2f774149716a384a6c754c62346858646c64724c484e48455738747867647631723058787234614f7658576d794a6470626d3363744737507948794d59396135754b4c78446165503961476e32634d397a35536d336d6d494367345545746a3861493059786e7a496371736d755735307576532f3268716b656761656f3879344f2b376d586b52726e6f6663344e632f38544e4b737445384d32386d6d6c37665545796b586b634e4c787a6e48586d726e6833585950444d4f7148784646396e3151755a704e6f794a522f73666a6d744c77374264654b39532f743755375552324b38324d62634e6a3159666854616650735a387a577a5049394b384133393534556e312f55344a6f7953504c746744762b384d736631723042667366686a57744c314b445447754c4335746b673836446e374d34377439636976555a5655783751426739736356357a343931705042336869534c5355564c7539632b58764751446b5a504e644376503362673673323957592f6a50784c6f557478354e3571724e614b517a326c7542756b342b36787a586c393534683165376d6e6654377934736450593759725a5849495830724f5a336556354a4833544f2b36527366654a354e48427953783942375636564841516a7249726e66637a7067714b354179526b396553612b7050686c63693638416159323446684867383578587a48497531686a386331366838443965756f396275394663377263782b59672f756e502f414e65734d777058676d6c735473653830555a79654b4b2b65547339426852525254414b4b4b4b4873416f727a6e776e2f77416c4c3851482f5a542b625636446358456472413838726255515a4a727a66774e5039712b4947757a6a6b4f714666595a617572447251544a506946384f6a72456f316a534e734f6f526e6649422f7741744d645078727a6162784173674b654a4e4f7545315a59764a533566494b726e307233487862346d48687130746846415a7271386d45454b647478365a397135765764643057396e303677313753763841544c7453576834334a6a504a49505469744a306e666d69645648457855665a3156644650512f696a3464306677375a324261615237614655344135775072574a7266785a31485846617838505755364f2b5633714e78776550777174752b48663230526a5162677a6563306367446e436b647a7a3072704e4f38572b476448733576374e3071534e3764536468414c5948664f656c4a4b6f39477a52564d4a46586a46746966447a3462795746777575613169533959457247325356392b61742b4d59556e2b4b5868574b52513062787a71796e754e7464583452316d393133525576727546496d6b4a32686653755938585a2f34577434522b6b332f6f4e6178696f36484856717971766d6b48696277517830396859787264574b4865396a506c754f2b776e4f44394b386630333465366272667841466a5a4f366158464835747876482b72782f44317232373469654b626e52624f31303354506d31545533386941597a747a78752f57764f39626a6277646f6b58684452576154584c392f4e75356879514479546e7430706d5a77336a545564486c3853786150346356624b794238695a696371546e4736766f50776a34597472447746446f37584176494a5943432b654733656e3531386f2b4b4e446d3048566d74355a566c3877655973696e4f34477665506754347a6d316254706443757a75657a5147493436722f6e465a59684f555537374453504b7a6f6b766876787071476c5349576a554544413447526b56374c384d5045646f5068336476646f424670785a4a6766346742584c2f41425774726a5450466c78504447766b335553797535366873376635437555384b58643571462f632b426f7046697464546e5a354a763467427a782b5664453756734e467664454c53544d59616c426636766454777870396d62556430534f506c43737850344376523953307943534d3666664454496249674f593447424f636651563570663662443461312f55744453667a5547554a373537666a56754361426f7264644f6c656134322f66593950726d746172356f786239436f753179487731594c622f45324346497a354b54456f434f773656375a4d77382b546e37785065764c6668316253587669652b765a6958653342475436344e656e4b43793537395458784f65545573516b7569506f4d7367315263753554315335467261794d546845584a39363858735562564c323476705a5749535274674a36665376537647567750374a75792b516f514448707a5841325768336d6a7a72623367525463774c5046687543707a673137664446434e2b5a6e4c6e4d33645252504c7056744a7064777a787330345173484c487257666f33685a4e52617a7a65525730567847784d73764144676e6a394b336e4d6476597a46355931496a4f636e4e59634e3257305259724a684a4462544362624c77647834376475612b6c7a433130347338536c64626b6570336d35343765786a6c445252596d3877597952334874576c384d7064426c3855715045397530776b4946757a634b487a337154784e344d38515756704e72757043466849415a4245542b3656756e466255397a704e2f344730714f4f493231745a6a634a786a7a4a5a7662327a6e72586e4e75636457616e75666944786a6f486843306a53376d6a5145414c4368476348766a3072785478703859377761684c612b47706862324254475555413776582b56656565494c6a57396441316e55795a5967664952323436446a6975644844636465315a51704a626a756456346a2b495776654a744c7462472f7532614b334f636a2b492b70724173746231505457633264375041584747324f526b565632466d326f72483141476176572f682f5662704e38566c4b5650636a46576b6b68436154724e3170477251616c41784d38543777547a7a5775336a7678422f626b32704c71567847397734615459354149394b773539507672596c5a7261566476596f6172634164787a7950536d306d4239455748782b30794734743757617a6e654549413878504f373656374e706c2f4471646a426532354a696d514f70506f5258776879426b563752384966694a3467314878726f6668796535553663556c5178685279466864687a39564659756772707848632b6c4b4b4b4b3245464646464142525252514155555555414646464641425252525141555555554146464646414252525251424733336a53557266654e4a586e542b4a6c42525251616b5a792f7842317162517642313364577a4b747778574f50634d676b6e422f544e655954504470656e7757646f554256515a584338797365704a7271506a4c65787270656c32385a5357364632484674752b5a6c326e6e48705844546676535a43783341354b35344a4e5a34715468474b5232344f43627578476e6b664138396c77543037315375784537724a4e4645345559334f756356624879376765654f4d6e7656433864646f4262626a6c6d4a365678786b2b65794f2b584c7936713533337754765a41757236624e4b7a434f5553524b787a685436666c58726c654f664244392f6361374d5147627a4643502f414c504e6578313663303159385356755a32436969696f454646464649416f7a6b3148506351323175383838697878494d73376e41412b7465642b4b5069765a61656868304a463143347a677941346a54304f376f333071347076304b6a47556e614b75656979534a466c704a4652514d6b73634156355434332b4b57676c4830753330325057636b724b6b6777714d4f6e556331772b72366872336965386b652f314b5a626551444d4d524b522f39386b303633303647326a56593431594950765935714a563455337075653168736b71564c537161493551654845764c747278343174765063737351584b49436567465831384e516659764a327157364b35484a4e644873795236644b554b64754f6e50544e6338735456625064703556686f52745935714c777779412b5a44434d634d6476492b6c546e514d4b7546585944774d66652b74622f4763397837306e6373414f65704e53385656665571475859614f38546b626a77533839773038647a354a4a2b36677742567558776d426f383170444b317a4f7a417337645635375630662f4166316f3648726d6834757175706e2f5a57463139303434654462324f414974334b46497756567356425a364c4e706478396f6458756b586a79337a6975354f53657550536e4d32324d76766250594130767239545a6b764b634b336532707935654763784e396c65336d3363474835534239614c496549722b37756f49646376496f34434e6d39696369756d4c62455a326372454f537a486766345658613965596f4c43497a72304d6a384b76763731705478556a6d784755346562546b68302f69545839467345613469737237615149326c697938682b75616769764e527439596c315250446f437a78415451724d4147626e4a36653957594e4e534943376d6d4d3739504d6d5079702f7535706a33686b6e534f7a426c596b687073384a2f6a566657704a327363623465776262757258304f646e316166564e613153367437527255764349476a4c5a45613477546e384b355336745776645167736264473877445963484f34357a6b6668586f317a59525070747a624357534979456d5a30366e50663665315a6b336871613230363366536272793779467368674d4d32652b666f6136614f4c676e6557686c694d70715170714650565258366d544a3466384a6164636d433838515379796f414845635a546133636668566561507776415a477374547574364b57526d4f5178394d5674772b424c55755a395276354c6d5a2f6d6b436a423348727a566866422b694b6639564f4d644e7a6a6e394b755759305637706a547958457956336f6158676678664b746a4246714148324d75565363386c5739443756326d756a794e453153516745706175514f787944586d31356f6b4e6a624a4e5a537970624e49424e627332562b74622f6c7063576f3058554e57756c7348346a755659673450384465332b4e655258773947645256594d364853784e4b44684a48432b4766444b6176345a316e564a457a4a436d55774f4163482f4141723048345458766d654372694973643174497a595054474b317254773361366634646c304b78756e68676c487a54353559482f774458554d66684333732f4468305777764a4c5a5862644a637163462f593073566a61654954705365386c39787a55734e4f44553764447a547758617471337845653959626b696d615668313961364c3478574b4f746a71386365316d59712b4236645035563150686a77665a2b4648754a4c613561356b6d3673616b385365476b38557048464e714d6c746278444c715075676570707978734a59754534763356702b4263634a4a596433335a61384c33693672346273377a65416d7a6c767078574864617050346a31615054374b4e5673347065512f417543447a6b394d56726548764444367070736568614c4c4c4834666a4f5a4e5242773872643158327276744e3843615470384a686c4d74374630574f35495a55486f4f4b316f34536c47724b744c7139446e7134755849716659356950574c5851356f376237624e484d3432693348377946665a514f6c64376f6d5a4c55545035674c6441357a7855746a6f326d6161685779735949465055496747617641416442587054717861736b65636b37334130486755566a2b4a6645646c3459306b3339382b314d3745483935736343736f77636e79726371356476622b4377733375376d565934554753545868486a4c346833506961527261794c516161704b2f4b546d622f36315a4869587864717669692f383236627937594443577174386a6535465a656e57457573367262615261466d6d7557326875706a587566797233384a6c384b4566625675686d3558646b4d54534c3356644931433874474d4e745970756d492f693436443871394c2b45766857433738485436684c4746653633424e3635494139507846522f4565796a30665166443368505457564a626d5a456c4559775a4d63456e3635723133544c435054744d7437534a6471526f4267635678596e46796e4858762b4253696b6331344c315a39567370725a706d573630397a4134622b49446f61314e526e76593759744c6272494932366a2b49656c5976696e53727a534e5358784e6f6b5a5a346c786432716a416d54312b6f7961364c772f72396a346830786269326b556e622b396950336f7a364556464f6f704b7772454868656549517977655a68393562796a2f443756304e633172326971786b76724d534a4f344375304c625342362f57714f6d5436765a5754697a6d2f744d41384356734f54395456704164586532634e396179515449724b366c65526e4665457a2b474c57793150584e45314a67486478505a5845677a2b412f4d56362f5a2b4b37475862466568374b352b363863796c5275376745384836697133692f77745a654d64454d51634c4f674c7754703156736363314d6f3331476d61656e526c644e7455334354434165596561352b2f7744472b6e366672783069654a7a65454578707a68782b565950676678544c706c6a4c6f50694743573075374d6e4c6e4c62313747757848396a362b695864744c625474486a5a6352594c4c3755724633304f5173372f4145507842346f74374342626957367369317738447438735279446e7056332b305964503172563964592b64476846736b612f786e414e597572616c5a65454731545562704462586c39494976505937325a426b5a41484b3971325068786f3170633270313249547062334445783238725a554870767832504643693979626d6870756c6e78566577367a71316d6b59747a2f6f7352476344314e646c6c55693477416f3641554570456834436756517672794732744a4c755677714970502b39375661585568734e5276344c4f776c75377559525779444a6276587a663438385a7434793169497778424e507339797845483732652f387139656861313851326b2f695456626b697769526f31737932597837735057766e5752764d7562686f51504b387874673759375631594a715654596152594463444f4b4d2f4c545547454170316578304b4779726c666331702b44645666525047466864527673575751525365344a465547494b31536d4a56764d566972526e63684859697566455135344f5063545073785475554d4f347a53317a76676a56303176776c5a58697a65615375316d3978585264712b556e446c6b346c4252525255674646464649447a2f347861752b6c65425a4669665a4c63537047434f6f357a2f53736a34586268346d3144504a4e74466b2b337a56792f7839317776714e6a6f366e436f79794e7a3379613662346333454e6c726d715845736f53464c4f45794f7877462b39586652566f6b733672346b70704230533366566e6b69437a6a795a596a686c666e47445846584533684f653673773575627157574c61626c6e79306167357a6e48745855654b4a6644666a694343792f74794b49576367753541702f68582f41505856435477356f756f5843584f6a3676625731704e46354d6b41586c73484a493534504661694b576e57766737554e58756243474a773771576155455a494765656c53513350673234686e7435496d6868677a622f614d664d2b66586a326f3072512f43326a61336158385069464449417949753463676a4850767a554d6d6b364664366c66682f464e6e766a4a6c524541415676562b666d7851423233676532302b79306332756d336b317a424535775a547a7a7a584c655072744e502b492f6832396b356a743765346c59656f435a7263384b58756a364e346361386d317133756c6558613979506c586430417832724338634c6258507849384d69344961306b676e336e73564b632f7051426957326f797777582f6a2f414659423375464b6164624e39324e6578476535774b335042476a7444705631347831334c616c65527343726445546f414d316a326c7150694a347768735568387677396f544479796f2b5359676a41492f4131336669714b44575a4c62777a4463474270635353434d63694d66384131785142347a3478384b722f414d494e633373796733554d6e326945676638414c4a794d443644427269766868346766517647396e494f456e5a5958414f4f4352583056342f304a4a764439346b546245577a4b42514f447442785879665a7a50702b723238673561435945652b44536b7271774831563853394b69764c6578755750336e4b45656f326b31344859337830667876704f6f2f64574356566c50746e6b3139422b4d626534317234667858646f724e6477424a6f315564543050365a727766537262543966386351575275447375784b6a41726a79334b3863483371734e4f5073705159704a33544a7669487043616434355455596958744e545954524d523667482b74646c384e4c627733425953324637617753617130636b7354794a6e4b31672b4a4c753176384177672b6b58563148467166682b5978786c322b615a526b444835437332303856615a4234487a4247662b45675a764941494a4b786b354a4271334a6369476c6552315077357368626152714e36593151334677647648384e645335327135375934724e38505461612b6932567059584379504847444e47546877324f526a76567a555a5667747a764a484854474342366d76674d59353173564a32335a39566848474e4a4847654b344a39566c73644774386564644e75334d656747542f536f624434655848693234456236704d37525365515a32475654483849486f4b72716a2b4a7647554556697a4730512b534a6f7a7a6e71635637787056765a614c716f303146534b474f32517835787965636e363139646c394b5647676f765138484854553672615a77306637505768705a685a645376476d78387a67385a39685844654b2f413933384d784c647073314854626b4349744b7633577a6e2b6c657233337856737674563161326c7330336b4f5933666474775277653163787150692f526646506d364f386253454b584d636e7a41484830727462356c5934374768717570365442384f4c50573769667a6e466d49576850335a6a6a6f52375a723537747454672f745175317356674d6d3851713242312b37394b313765346b75494a72622b304e77745a573869786b424b762f5474584f584e30444d346532525a41534743394d306f3641646c3468754631695347386b326d634c745378685835514d667a7170344d384372346d6a753771387655744c53304a4d704f4332427a67552f7768726b396a617470756e326b44616e644537627152686d4e4f34422f43726c706161625a36386b4e6d48766c4c414e4d7877766d6b386b2b716a72564d44757643486879533944572f682f5272614f795867616e64783733666e734f4d56334d5877337668486d3438517a46756f4561375648304663446161783436756454754e4d38507a51334e6e487433334b71555350417751707a6a2f774456577333673378544d324a5048317a484b783362554a4948743170416450506f6d76326c6933324b53793161486b4e4463572f7a4e375a4a72695a2f416e68627831504f6b61746f2b765271664f744555434d4d4f4f4f4f61324c6e56506946344b68463030454f736158474e303067346341656e4a7264744a74412b4b4f6a4a64574578744e5567784957684f32534a76516e307a514238762b494e4275764475725461626549566d6a3648314664523845762b537661462f774276482f70504a587176696a7777766a3352726d307649457476452b6e2f414e3348377852337a334744586c2f7763676b74666a506f3045716c5a4932754659483145456c414831315252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641456266654e4a53743934306c656450346d55676f786e673055687742556a5043506a4135486a2b774d54625a594c5066763951535267666e584e36524b5073366f3878655567463839696139512b4b33677464617350376174564a315330554b6f3359444a6e6b6672586a656e787745535864744d4a4e324177377133664e50454a546863363849306e627164426353694941735231347133344338502f415043553374786561686352473267566e577962686e782f4566624e59534e4c63335457647241383130714443723242376b6e69765237596156384e504255714c695857626f66366f486553574f4d4448616a42554c4e796b697358553153544e48344e78524e6f7571336177694f6153396457326a4334474d416531656c56796e773938507a6548664445647663734463544e35306742364d514f4b367571714f386a69436969697377444e6333347038593662345974444e4f786e6c7946574345677354394b672b4950697150776a34586d766554635335697477426e35794f4b2b644a4e567559666d31625437707a492b4c7959637353526b4164674f6c62776f7471374c70714c6c6154736a742f456e696a562f4645795738307257396d334a746f6a6b4d44326339717a6f7243327477496771374f6f51443556782f4f733632385836435952464b6c7a626f7643426b2f6d6132575947474b594864627944636a593756352b4a566450566148313258787769584c53616244656654723755426d5654312b6c4264534d6a39614d71773235427a7858476d3265772b5a414779547751635a78526b6e742b6c5a463371743148717030327a74565a38726d51353656744f5651343434394b756358434b62366d4e4f7447704c6c6a66516a35782f38415770526e2f77437453376751542b56475648626b316b6d6d6261793153414b54782f536b493267487366536c33702f65492f41306764424b7044454e7a314835306d6d335a43627368526c69514f54307836557961346a7446782f7270422f797a515a4e5632767a4e4d3846697747332f57794d4f462b6c612b6b654873326a61684d336c576d44766e632f4f2f734257394b686557787a5671367078332b5a6c4c5a3364363643637536453545456135482f417130626757326b6f676d496b596a43323850592b3943617930305451615847494e50584b7449772b647665716c76617061764a4d7033764b66764e796175556f78305a464f4570726d42347072685239722b564238795172302f4770414e6a42596b4561747a685634707971586c32716f387a47574c4867436f6f626d33756a4931744d486550714236316735546d6e4b3268764c6c67314757374868417973435474666734484e56744a387862435347566958676c4b416e7152312f725674572b555074417a3170676845547355345675756657685473755753754a7863704b536577384b41643253516563436767484f34372f52615847636366536d5342452b5a6e515939366d3363327537334b32724c2f414d537534794d6664786a74794b6f6170714b5132706c6d64664958373666332f7037696b317a57724f4a4a625a6e7a4b36676b4148706d7551315855427237744b484d64726152345849354a3756365746777a6c612b7834755a3436464a4f4d576d7a306277663476676c733069764a5139767532524f324e306650416175346b3432714d48504941354246654a783644652b485a39436d3165306a577a766c33715559356b55345050353136423465314337303751374f665679546f6c7a75454e306f4a654a74787744376356686d4758617570535047776d4f736b706e586c515650496a41475333594371656e574631347876477472526e74644b676245382b332f6a36486456507031706d6e576b336a4f392b7932544f6d68784e69366c49775a6a364c37663431366c70396862615a5978576470474934496c32716f394b7a776d43555066714c556e46347936396e426932566a6261625a78326c70436b554559777361444146576356484e4e48627847535677694c314a716a2f41473970665038417073584876586f36733875364e4b6973372b33744c2f352f59767a705037653073394c324c3836584b77356b61566561664733615043466b7a2f644638684f526e73613942744e53744c2f634c57346a6b4b3845413148716d6b575773326f74645167453051594e74507257314b627054553244563944355344584538346a74726165346476757248487a587448776e384858576d6966563957743153346b77747570584452722f414a4e656a57656b32466769726257736142526759586d727663563134724d4a313438765153696b6557654d466a6e2b4b766831504c444e47537834393172315047527a586b2b7353786e3431575561766c6c543568366664723169734d52644b4b66596f615679437035556a47445847617034596d3072554a6462385075494a4d62726932412b5759645478363132744d4f7869796e30776177684a77656747586f4f76513635706b6479694e48356f4f55596371516345566b584d7a614e346a4b51786b776556356755644f7543503631682b494a745938426966554c4f474766524e775a6f7a3935474a786d72452f6953473553303145324d686e515a326a756842392f65752b4d755a584a5a32386c70593670416b38734563364d75564c4b43523944584a363965327668685a627532763556454b373374562b6267633435504659576b2b4f7049374f57777459586134655a68454848455937413152316147653038433637716b6a3737323979737850494141493471347137735459736545627958346b4e716d73626f3758352f4c68516f474b6741646655486d7171365262336e6943505339477658306d396a62646465524954484c39467a676444584c66437278416d696168643655573243396a4a674a3662794231724c306e54372b772b4a396c616661542f6153334a5a70533379737565522f4f7568596538704a3942335a316e786e74494e4a305053724b4e336c757269584d6b7368797a41646576547258612f43667844427176673643494d6f754c556d4f5349486e7231782b4e65532f456a78424e725869323469594b79325a4d51394d39795079724538492b4a626a776834676a314f4a6438424253654d6678443171765a66756b423952366e71746e703971393165334d634e7648393475774761382b4f714e726c774e6175626e6670416c4d646e5a516e4a6b624f4d742b5836302f526450682b4a39344e5a3146572f7369334f7932747334334875572f5370764275695746723478313564505446706246524847784a434e33786e33726c7661344a4b356c6645765435724c346253766175756d677968705949327a35675061764572632f4a476567774f4b39712b4f5630592f4331765a6738764f474a396574654c784c6a597674585a6c38625162366c7652324c416f70422f576c7231535266773571724b70444138592b6c575233706b7778486b656c5339675a363738444e62325158586835354e7a5245797039446a2f4776614f31664b2f7741504e5262536648566a6470674a4b44432b665847612b7077637144366a4e664d59326e795657304e43396154634143547742334e4a6b4146733843764e2f4648696537313637665139416b43524c2f7839586848796f4f36672b7653754279355938306c59754d584a3252633166346b775765722f414761797335377932674f4c716545626c6a7273395031473131537968764c575658696c5849495054324e6562574e7462365a5a6d79736f776b5147474c632b59653561716c7450656545623174543031544e7073687a655735354b65724b507a726b6f59364653626a61335937616d426e47484d65662f4142303366384c4354504132706a38363766776a6252337431724f6d54794a627958566e4435666d48472f42626d75662b4f4b576571576d6d2b4a4c443935424c69507a5236383859716c344f75624c783170633065732b596c37703061694f614274704d51362f6b4161392b4e2b5538356e62327667445545612f467863616172794b766b764751506c5559324e78305048355665683849616e61713137464e5966616e6d334e416b6e794b6d7a623876485876307157792b45576858656e785478616e71526a6d514d44357659314d6667316f324e79366e715841342f6531516a4d5834637957656f5756316258466c4b734f4e364f77354a36306966444649377938764265324c76634669496341434d6e707a33726e48384a36594c4c554a6e7564544c36624c736d6944386d49483777396539624d5877363048556644736d73366671656f5378434579787035767a5a41364555415762723465366866364b316a4e715668627249346b6147484154634f6847507056487830736c76724768577254704c6551615a637137526e50506c6e42726739497676444e786258636d72584771327a516b6a3548366e747857766f45554d396779785154432f31567a6232306b352b5a5966346d39766c4a6f4139613846785748686a346357743373326b322f6e536b2f6564694d6e36383162384a616250637a7a654964536a4b33743177694d4f596f2b772f545034317a554e337039784e70576b58547a663262597373454c714f4a354634353968673136485a617459586c717331746349304a4f3154394f4b414d62787136706f3978755941665a3542672f53766a5737774e526b4935506d6e483531395866464c5749625053706263726c7a417a5a397356386f524b62335649784744756c6c474239545142396c6542326e6e384736656273376e6150445a48555635313854664241747459737462306a5369734d4b735a785a417249543250466571364662765936465a32386e33316a476356664d366239684236656c65637038736e324c58632b57456a384e54366b4c713868756b6e36756c3244387a65354a72573833516b62616b756e6f66345a414649412b74652f36706f656b61316250426557556267676a37755035563878654b2f42413850366a4e704d6b4c724e356d2b436250795349653266576859654e53317050377a6f6a694f5864493349477339516b6b62544c675258696638414c654141416655436f4e5a69312b485235486d314d334d5764736a5977797233726c35394f3147336c6534304b7a75495937654d65655351666d48552f536f744e314c582f4564366d697733415a7268676833414432356f2b6f796a4e4f4c756b612f58497969377255396130545437473030367758534e73445279656573782f69794d45477568385879584530567472746a4e673261374c684165537659342f4f755767305078546f396e48703873746d664b34474770397a716d70615a43475a494a3349436d506439386e714b394a765a486e727179754c36326c517978324d4c4e4a387a534b6570504f534b7a722b654330737037396f3449534632683431414a4e596e694c57557443333242445a585833356f6d3558507457543461305337385957643343756f4b4c71504d7157376e4166464d64797659574146735a5a5a53737a686d574a493879746b6452337857504e34653168413177326e336e6c4d53513752486d74332f4149536336644f73304b6e376642474557566c4879456359785864532f47515876686d797466744274372b4d597547387054356e30347152474c3464384d5774353452736243474f4e6466314f632b544d584b74436f427a6b6667667a72627648742f683170393170327261614c2f56586a323230694a745459654d3537745675383154534830797831614b325348566f6d784e63785a2f637163394165704f5232373171654a5a457562433157354b3330666b4364705a434e39714430626a72303663394b414c2f676561336b384c513274724c736d6a486d7a784562484734353539514b36694a744a734c68447156396177626a38734c4f41782f4776504e51384d654c64535779314b7874376553424941706546747075595342393448766765316333706c6e7055766971342f742b4b2f745952435674354a65664c63665438614150706152625a374572746a65426c7874504b734b3851312b326c2b48486a71303133537949644b315359527a776f4d4265526e3239617365452f486d6f572f68324b31764c4f5739565a7a44484a454f71444743616e2b4a647a50642f44745a4c717a2b7a675849386a6431505767447176474d73656833466a3476746f6936677246644b76386362634439534b387738503657326d2f744b57424b68456e65356d52522f64614358466176695734386266384b2b32584e76625361595248756b4a2b6344634d564e477766342b65444a4d6a632b6d75572b766b53304165353055555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251424733336a535644665874765951506358553063555344637a4f324f425764346538523666346d3078623754354e305a5971564f4e796b48754b344b6b5864794c527231484b36526f306b6a6845586c6d4a77414b5a63336b466e6276635855717777786a4c534f634b42376d75456b7662767833645451776953303047427347594567336e2b376a7431357a57646f3876504a32534138372b4a6e6a4855504558696e2b77394176444a4445514646712b544b324f655232352f537548385265484e633849535733327548796e75312f64736a667864776665766f7a54504376683753486a6c302f536f6f4a3042784b5679792f696138792b4e636c7a6561766f4e6c4156387841306935363534355035564f467a53474978456350536a703347344f43357931344b3844575771364e44714d4f7633717663414336696a6644426878672b33577344574a312b475878446a614b4a39594574747532585a334d687a325034567a2f68337846346f384e7466573974635232776c6663586d4177657633636a33717264334e7a653337582b7058457435657370416c62684548317274773258597834715570532f643945524b72467133552b6f664366694f793854364442714e6d3645736f38314650334878794b33613844384236374a3459306a54622b32744a473071646a48666c4f524777412b632b6e58394b39307372323331437a69757253565a595a426c575135474b356d6b323552376a525970724f6b614d37734656526b7354774b643072794434702b4c745773664546743463737a4a44625855426157574e647859484f5648356672536a472f794b696e4a7049785048506a54773772336a717a677562672f5964494c5075487a4c4e4a6b59584835316f654866472f686c4e586b665539577470626378596457694f476b7a7733344c782b466562336e6858534a6b33785836517554387a4d632f4e372b3956472b484d766c6562466565596a6448435a5838363649346d696c762b5a322f32586947375253667a582b5a3674342b31723466617a344e7634374734737864716d592f4c514269613444772f7744453637302f77376236586361526233554d4b3755646b354f666573435834665861722b37753457492f436f4a504375757852375932444976514c6d7164616c5557344c42346e4479356e426e62522f454c5470734a63614771482f5963442b6c536e787234654f5164506d55643853662f41467138312f737658497a673255306839516d614442724b486e5470682f327a724832564c794f714f4b722f414e356649394954787034574c4d4462334562592b38446b2f7741716376696e776f36375239717831372f3456356c4a4c714b664b3169792f574b6f66746437486b6945722f7743716c68366375677672754a673771542b3439565878503455336a393563676a6f4d486e394b673166785a6f396e59716d697758452b6f547474587a41654d2b6e46655a7833354c6953534e6849765168616b4f717a322b6f57312f4849586c676b456971794441493971714f48676e7352557a47764b487848714d57696645794f336a63615046497263674d526e2b6454584d666a2b44536234586e686d3338746f57426b424759786a6b6a6d75645834352b4d454b357546782f64387466384b30592f6a747264315a7932643161787965616a49575967446b66537466593039374843385658656e4d793548346838512b47394173587566426c713175796f717a62636d5134344a783631646c38583258784530482b7a555132462f43336d47336a5079754232724275666a4c657951366661334f6e517932316f794578676768746f783663567a647634706874504737654a4c47796a744c5a6e7762526563416a426f6c5369343257673657496e43616c5056646a7578494d4c6a41474d424f7778534d37647335504132316b61703437305353356464463047346b4c6e496433504448304659542b49664553487a704c66374e4275786c34774d443871385a5a66553574576656724f4b484a7a4a50376a55386158733172704973375179475a6353544d6e565536632b6e4e6337344f69755976456c73704d6b586d4b575648422f65416a72572f70757532317a5065616a724c7747776e54392f4168486d79415941556532344131447234316e544e5330547846716977783274334874746b6858615569394d59484f445871526f4b4e4277523839567872713431565739453139783038397a61527a4c4338784d35596859495276625030465a567072456c33346b6d73495557466c547064507441507544697257695458384b6662724765326a686479365379774b306847656d3438314a4a7064704c4e4a633345506d335578334e496570727a75584455766939356e7571654f7279397930493947584a4c62544a6f332b312b4a437a6a6a79624b496a6e307a7a5357397a5936617970706d695065534c39363476584278373942544934496f526c59596f4930487a4d79674436357170646135613236455269613763667777726c542b4e43784c6675306f574a6e6749323573565663726631304d625872627a4a70645276465753366e34525547414d6467506f4b3572773045752f46396e6262663948754c324e586a374562685854766354336c3539767555534b4b4f4d2b58434f53703663317a50687430733965307539594651743653582b68427230634d35637676505538584d34553474657a566b65362f467254625456496644576c327a4a47546572416a41636f4f687858704d4769574d576a7861593976484a62496f47786c4744586c39396451654a66455868615731793457356b6d622f4149433447613968716138376e6d4968743753437a6853473269534b4e42674b67774b53397637585462523771386d534746426b7335774b693150566258534e506d766274784846454d6e4a786e3656382f38416a48786c652b4d62706c566e68306d4a7a736842356b2b745a5256745762304b453630725252643862654f352f46647731705a73304f6b4b654a465967796b6630726a54437542387a2f38416666576e6e4f52744156434d415934464277564733673437696f63334a3648305644445270785555524746654d732f3450532b5375344547542f767570653354743655304d2b3349484854414653704d3135452b68613076557237514e5269315054705838794a737643582b5755656c665166684878685a654b394d536146315737566633304765554e664f6f4177336f76504855565070657036686f65704455744b6d4d636f775a3048535652322b7461786d6d6e466e6e347a424b6365616e756655716e50485565744f3769756438492b4b374878587055643362485a4a306546694e796b6531644352536b6e46585a34566d6e5a6e686d755454576e78325753355268464930617745443733544e6535673541724d764e4130322f314b3331433574556535742b59334935482b635670416331705771382f4b41744a3379667a706179504575702f32586f73387974695a6c4b524431596a697372585948462b4b72772b49745a4f6d6e6e534c496835704635383254736e3035422f43714637647832554d63686a4d532f644137494b6b7449507356716c75574d6d35764d6b50646d4e4c64515258634451536a64477879632b74656a47504b7245474866616748336d335646566c797a714d484e58355450662f41416f314a6e354156694d6532613572563175644b615230694d31766a6b4156364e5936655a50672f63424939736b31713737667143617550784944353967596d4747534e7472723931787752556b6c786479336133556c3149626e2b4754507a4c2b4e56374c35724e51772b5663676a766e4e54486e4857766f48464e33376c57754e634573354c4d386a5a4c757879574e564741556b657458543334344e565a552b62696f6e464e437365732f4354787661614a34616d3036364a61364e7a2b346847537a673446647434436c6134314478424f39764a435a4a6777456749506631727754777a654c61366c396d45434335764d5277584c74742b7a742f657a2b4e65356164346d67305332743949525a4e5a31485a2f70467a62727753505569764472726c6b304c5a6e4766484f345133326e576e6d62704141786a50707a7a586c3859373936322f4876694f587854347265366c746a617262723559516e4a72456a4f6531656c67346373455733646b31464c32464a586168423631484d547441786d705072545a4d4253635a4f4b48734a736f794d30536956574b764736746b48474f657466583267583064393464302b37563979795736747550307235446d74355a6c614e4979306a6a436f764a61766174503853586c2f345a307a77337042655079375a59377938483355774f5658333631344f614b4d597154667156434c6b37524f673854654a4c6a57627154524e466c3257365a463365442b456431552b76583871356a574e62307a77626f6b534349685333797864335071545731625773466a5a783273436b524c314a367533636b3168654d4e42734e6530567062363546714c6235764f505436667258794d38564845313430352f41657853777a6f3058555339347565487466737645326e4e6432685a4e6e79795235373171413753765a65345038513944586a76676e7872483464573430753273567547754a67456b5a7356365a6f76694b48576269577a6d743273622b4c6b78546342782f736e765534764154707a626772523647324778734a7855616a314d5478743461754c6e525a6c30777331737a68354c4e6634442f6555563576344c75786f6e6a473057357a396b75436265583573446177326b6e365a72337857654b636b4b56494744754855656c65652b4e76426354712b70616246736a494c53784b764b6e2b385053757a4c6379536673717239446c7875442b3341397538485879765a5361614d35736a7455357a6d4d2f634f667069756c7a7a69764666416e6a4d6a53376564495a5a4a624a4244656a626a7a452f68636575414f66725873647064323937624a6332306953524f4d686c4f612b687565516370346f384f587a616e46726d6a763841766f6b496d744d595735486f663172697474756c334c644e50652b484c786a6d5744597a5174394d414376614d31577562433076526935746f70682f7471445142383365495044397664654a6258554e4674626e5758636733434349704733356a3656364a6f586850584e62656136316d316a3078587848484648677448454f796b644363344e656d3231686157597862573055512f3246417179654b414b466c6f396c59325556724641676a69586176796a5075617a762b45543071336c382b4e44456945763561384b5077726650484e635a347731314a456d306d30314262535655387965354f437361656e315054386141504c50696e346d4e337046334a4d79784e4b3568744648563042356238516138362b47576779654950476c6a456e334c64316d666a73434b712b4e5045332f4352367572524959374f3258796f45503930487258732f774738485336665a532b494c6f594e306d324a537543426e725531486149493970436851414f77785338556d636d6c46656265377557465a2b7136487032743270743951746f356c5051736f4a483072516f7070326477504d64512b45306b4d647a2f59657533567173794550437879726533617557303734423364756f7650376365472f424c416f754f66726d7664364b3039744a624259384431763454654c35354338477153545a484a4c594a5035317a70384c3635615332362b4b4e4c7534374b32504e3162746b72376e47612b6e715a4c464863524e464d697647777779734d67317048454e41664f51384970343475303033526f707673554a3374714d69344c6a3035782f6b5633766776344e3258687557533675357a64584743454258474b394b744e50744c4350797253434f43504f64736137526d724e544b733242385a2f455037536e6932376775624f4b304b534e74574d594258505775564136486430365a72337a342f2b484c4f4f4b333169474268634d4372734278312f2b7658675142786b67313130337a524a5a366c6f4f70366b3168706d74336668364f3630757a597853795266786a6e377735365a7a576e346a737450754c6d303852654762795337734969507438424f524143654d6a30362f6c574e384b66474d476d3355326736732b644c76564977782b564837452f6c58635833685666746b656c5258634f6c58636b65315a497869472b6a50546432336466587256434a2f77433176466d6d61614e537472663756596c4138486b483553754f6d4f324f6c564c7a346b3332712b4870495a5044596b755a4832434f574d6e50766e464e30732b4f5068356379326478707236787058384d63514c4b6f36384846575a5069763465676c5558666857376775463543464b414b66676e512f48566871365457326e6d44546c6345777953416731662b49477154654e7646576c65464c434179665a5a316b764e683454706e3873316f663841435a2b4a76474d41735044576a33476d52536a44586b344943672b6e4870552f68435453664273757266626f5866564c64637a33736e33726c6a7a684d304162766a704271476e32666843304b2f614c746b4d6748574f4e656433356a466561364a7158322f38416151307949594b3259754c5a63646773457464507166694f4877356258666a58566c7a714e3348354670614534614f4d2f774431386d764b7668446579366838624e4b75356d4c53545063753550636d4353674436326f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b41436969696744785478354463367a342f6d672b305374623663305a4b53635270756a56734c6a6b6b3965654b35765550454f6f654276454336337038662b687a414a63776e6f783951506f42586f4869346a2f684a376b467563706766384157764e5069446158623664627a77787338555579733639526e33466546547855366d4e6348384b6252376b384c546a67564f3272737a6438562b4a50466e6976536b756f39455a504334784a50356e4453714f656348503556364634623157793144777a5a33466e48354e75495169775a787478786a6d7362545047632f77426b6774623247336449725a5a7269534167517878456443447954776567726a62487762653639626137726e396f334e723466627a5a6253474679752f424f4474394b374d66675869365370516c79366e6a77664b377337665550454d742f7256743462736d78644f2f6d58444a794934775058317a69764f66484e396236763841455757357435474b3664622b524b4433595a427856333459617861364e3451314856626d4757615347345a5a4a4267767477414d3537644b3437545865386c3153395a53677670435931372b785035314f53594432654e736f2f4231376b317033674f7462654757306a755a497935615673426a3047614e515a59374b58354151562b373271577959665a46523242387069724b54337a7a576671747a624f6b30414d6a6b344745483365612b7a3970434d58716361563548743377303075474c774248617a4a356b64304e7a6f3363454469724d576961373459566f7643747a6279576a457362533979516e66434566314e59326b584f736547504446744e72756e334678617752493064785a455956443044416e4f667772613148786c706b7667713531577a6e4a33784d6b584f485638647765612f4e56396577324b613562776d376e7065354b506d57644f2b4b6d6753756254564a577374526a4f3253466b4a4150726b5a474b5478783463752f455674702b756146496a61685a677957366e3773796e48422f43736a77725961426f5067673348694757796d6c6d7a39707553413748636542362b6c57504450693231384f4e5034653171566f4245444a703872664d4a6263446735486641723647564f79356f376d577a504b705046757265454c3639302f556445743165575553544a4f684942504a326b66576f6250576c57366c76644b31534b7a457a356130494c4b715935366738357231547858347738482b494e47617a6e745a62364b3542534b614b484a563859794d3867313458596142615472635762537a57756f51736558345570327a337a55636b56467a746238547377736e4f725a4b373962486f643165334d364b625132556d376e39396e6e38715a6252336b70506e5136666b396f3263667a4e63315a2b464462786835706274706c356a6c743541426a337a55462f70477478792b625a527a7a6f426b6d6151485036317957705365736b2f6b6538366d4a704b2f4a4c2f774143622f5137714f316b48796a5335337833696c5848366d6f35696b57664e74622b454471573245443871344b30316657624a646c7a597546395536306b6e694b6445597132704978375a34725259536c4c5a4c377a46356c565439376d582f6270324c366e70542f4a2f614156756845734c663046526948545a6a694f3674337a2f77424d3248394b346b655064567447327169794a3679726b316358346a4541463763622b344338556e684a725a66695773317062546c2f354c2f775473426f64764d76336265516533465248776e624d78483261456c7639717566742f69425a73344c7751676e727554675676572f6969314d596c593661735a48793551357158517170627637787248345753646f782b6152522f736254586a6c755964486e6e685537544d6e545070317073656c614e635861576257545254534c6c493567527539656156372b7a44734c44786f746845506d4e7647585651666f42566d3353356e314b79314f34385132642b6c73473271355939526a754b74554b756d72743673345934794b6e724746766c2f6b4d506854526f7558736b584a7741484a352f4f6f47304451725a66504b5171696e6b6e63635631397459366c664b306c6d4e4759454674726e46553962697666446d6e6a5574535777534173465a62566757583378554f6a576a72642f69643331724376524b43666f6d5a3056764f31754a6247326a69732b6f6c6e487a483355442b746376346f6e6562374a484c495a535a4d655830444375715336572f736e754c4f667a336b3469642b692f583372437549424a346930614734486d544c4c6c3149334b7a5a2f6c5377387561725a332b6535654e616867323475392b32777a5174426938522b4b72485362324a626534452b30527839466a433775763172317234316548725734384677582b30655a707a7173514854356941613873384361774e42385948566236336e6d5977756b4563474357626352672b31656d664566567275382b45756f2f626f784265426f6d4d612f7767734f50725872573648795333756564615471646c62364c4248637a6244475468514d6b6b6e70553074374d442b346a533267626e3934637531633570316f30466f74325743695a41537850497853727138556b686a744932754a774d3773636672586c504471556d3472552b74574e644b6e48326b724931627372664f725453797a464163493543714b7a4c7a5849346c53433356705a68774552666c57716136666533736a5358626c694f566a422b555670772b474e5a6e695358546f33696b4177536e415a653472706852696b755a6e6c3138306b372b7a587a4d78395275786552326b386356754a523830693549483171787048686255627a51745176374f4a4c714f786d4c625762424f336c6942313656324e31706336576f6754777863683435566d556b4a686d4141495050544850317248314877703469315478644a7150687177314332573459733461525549592f6541353659726f69345232504b71567031645a7535306677643159613534344b70626d4b3173374e7469595079757842623961392b424247613437346365455434553850716c31476e3970546b766353446b6b3579415433504e646a584c586b6e4c516848682f7741516d3166784c3439673043336b545971626b6a5934425050583871704e384b2f47475354485a484134777872656e424878357463386e79542b4833716a385a2b4e4e62306a782f485a57736a47447a55486c6a50494f4b3135494e65386570683631574549787057576c7a7a725572433630532b617a314b46594a3047654d6b455674743445385344527637574564714c517865666e4a79423172762f41497136502f617347697443674635506349684871754354586247577a754c6166514562393874734155394151522f53706a516a646d74544d4b6a70786b743376386a357a307654377a5837324f3130344962676a49333844337270552b46766938486947793977574e532b416266374c38534a4c54627a4130696e322b5959712f384145447870346730667877316c595374355371704344504e4b464f435778745872316c55554b54747063342b2b3044567449316144544c2b33574b36756a74685a546c5366657430664372785779426c69732b656547504e647a34322f307a5476447435634a7375764e6a624863456b5a70337843385236396f634f6b6a5349664d3831535a507778564b6a43374d6c6a3638755652736d7a7a325452664533773631434878444f4945335343466c516b68776661766f47326b615731696c63414d36426942587a6434673857362f727476425a617845496c4d79756f47636e6d766f3679474e50742f7744726d7638414b73366c7261484469347a5530366c72746443774b4f6c4647617a36616e4948657650764646794e543177514d5162657849626a7535366631727176456d6f6a546445754a464a453772736841366c7a775031726762574637657a524a7957756d4f2b63357a387835726f6f3037367354484138664e314e4f4a475062316f4b4d702b596e4a4f534d31576563526270574a4b6a6a4664534a4b6575536f4c59713448514d5232326976546644567a5a616c3453746a612f4e415964684830474458692b7258614742707269545948506c7834366e504665732b4572502b794c4378695443577330415a56483934347a2b644e41664f65755779576669625572574a646b53535a564456486e505057757a2b4c73535266457068454e725357345a7356786f783047613932684c6e70706c52447253504748366450536c5074535946614e61445a5164536c764975334242794144365639512f4479477862774c593356724169504a422b3849354a59446d766d695a46352f7534357a32723254344a3635464e7064356f5a636961465330595939516339507a727963777057697043504839644a486944554468572f66642b745251484f656334394b37615434572b4939577674546e747062667a556e4f465a6a6c713537552f444775654732483971366538616e72496e492f5374734c566879785678573746456b5a397151416e48485870545935566c66456242683177777855757869465542526a30723059745052444741386a48464a4952747775544978326f7639343053545249344f39534231474d3173614c614e64326b39306c764a7352674a4a74762b7158314659596a454b68427a593478636e5a4633777634596b75376c6f31444c4c6a4678506e694e65753166657652374f30677372466265326a3277526e4178332b767655747262326c725951775761714c6241594d6e385239616b4f57502b794b2f4e38777a477269716a65795851393743595a553470376c4455396374744a6b686a6e74376965535945496b4b3578574c71522f345339726252593753367462484f2b346b6c774d6a6e6a6a337858564351714d67347a55636c776b55447a584d7757434d626e4a726d6f313154615549586b625661556d6e7a503354353738562b48376a7778726b6c75796c5974322b336366336338563674346558542f476e6732305735646d7672466347614c686b50596e3148466566654a3955314c783172346a7334704867516c495678674833702f676e554c72776e346f46766571384d557a434b5148706e4e6652316f314b754854646c55577034744c6c68562f7573396e30354c714f776a6976726e37566371636561426a4937565a45685437764a37716568724a3150784e6f65687a59764c7a6649655248454d357a557569363359362f62537a57506d447979417953444246664d564b4e657a71536a5939794e576c3843647a45315452727a534c313964385044635475652b746a39304c334b69745877563477744c53423330364f5358547970655778583738545a355a6339562f4774554d63674c7743323163647a3342397138723861334e7070486969613430693565305a49775a46684f3379355051593745667a7233387378303673665a79577835574f777359506d54507058526465303758725158476e33416b544f43447751665167317031387761463852394b75595647724e5070642b6a5a4631596a614a666554756137335350696c47386d784e5a7370346c4742765639782f4d56375a355a37465556786352577344537a534b694b4d6b6b31354e662f452b3774346a4a4c71576c32384c634173474a2f515679562f38522f443862726458576f336571334341376264636d426a323341346f413952315478734c757775354e4c6b5743327477544e65546a435948554b4f70503456382f77446a48787a42714e6d2b69614c764e69372b5a4e63536a39354d2f77426653735078543431314c785263375a6e4d566f702f6432385a77716a74785676775438504e58385a58696d336838757a42784a4d787742536253563242622b4733674f36385a3638724f763841784c375a676268733434394258316862573976704f6c78323849325739744741763041716c346238503258687252346450736f6c55496f44734267736364545336693636684c2f5a73557044446d5848487931783161726d39436b673065347562714b61396e663979374578706a6f4255326a366a4a716345737a78474e566b4b706e2b4a6578717672434e4a5a6a53374e2f4c754a414d456362564855317157304b57397448436d4d496f48465a4b4e6b4d6c6f6f6f70414646424f426b6e464a6b4564615677466f6f6f7067464646464147583468306d4c577444753747574a5a504e6a49554e2f653756385a2b496447757445317537737269466f325351714f4f50774e66627a446e504e65542f4733534c58562f44384a533569697562615464745963766b644f4b336f54356447484c66592b5a506d516365763556364c6f587849542b7a59394a3853524739733143684a45474a49674f6d445644532f683771476f3662352f6d70464a49635262386a65665373545664416d307a7a493269495750355a704735416364514b3666614a734a55354a58506f3777623467315455497a2f41475666326d6f36517144796c6d346e542f5a505147746966585a72655576652b454c6c352b696c424751522b64664a4e72714e397073766d5764314e62506a67784d526d743244346b654b3445436e576275543365556d724932507071665850455432582f457630574f7a636a3557756d554b6e3177613835314878646f4f6736672b6f6139646e5676454335416974782b35686274365a376574654f58336937784471696c4c7a56727553493846544b6356697638414d2f566a6b395361414e76785634707666466574767146354965526856484155665375682b43662f414356375176384174342f394553567751474f335061765866676234503153667864706e69644655366662504d6b687a79435958556366566852634436666f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967447a447861542f414d4a506563394e68487438693169464e775a68386f505849344e6266693342385433674858354d2f77446643317a6c314d5555787136716f355a6d50412f47766936366e4c457a55642b5a2f6d6659304c4c447762327376794f55313352595a724e32303230695735696263796766653536483272302f773772734f7666444738455a574f3774624e345a6f6f786749514d63666c586d7153616a3470314c2b797441526f59474f323531416a3542373572662b462b6833656d366e34703073335a6d74664b32433450334762423572366a41777151704a5647664e342b644f6454393272486b476e366a646943545356637777584c6e7a6e7a314150663871364637356b6d2b7978574c73596c3271492b564b2b745a6c68354f6d33392f484b6b567745334b484a2b566954327135595737474d7a52584573436f757745386c7a362f537666776c4b55467a5136376e6d56486663655a5a326b4c76706476487838377a6a4f463963566d543353685131724b7274464b4a41417531575832466178736f32446d346d6d6e597267737a45416973704c4a46315557573041684355665041584853756d72423876714b447366544f6d654d744676744a74484e394138725149306b55587a37546a6b4543754f3143383054784871647a70326d65474c5355506b5333684156317a2f41424244795458432b41726947577768733766515a377537615167334f34777870395758722b4e647865654776464678496673577261587069376470387051582f77432b735a7277586f3747365a35423433384a3332676167495463655a617351714e39786d7a334b6b3572734e4a305753434f78767271387574634e67704d466e46417a6867526a6158475142375632756e2b433771336752377637427156384d6733563363744a6e2f674a4246613651654b644c6852644e73394e6b673650486276733539654670383139426d4c4246346a3165426b6730757a384b3263673362774130702f41454556357a3438384661686f4f71572b705136706358567663345761386637322f30493634786976595a35764653675358656e6166742f366158427950384178327372564c795455744f6b7374513036786e68662b464c6b3848324f4b6a3372366f6437616f387057313165333868624b385738447a65546955465344786a676e33706272556645476c764c397130795a556a6c4554534a6e615436443871303338472b4a34316e545472794437504b77666178335349633862546a49717150436e6a717961557a327435664c392b4d62325a566673324f394571464b577269644e504859696e744e6a6f664530785a51597031556e436b786b354f4f6c4f62786661416c4a4a453877634644476177377a773534367637777a7a324632726c732f753479696734366744675672615634436d4f4a626d43346134503369385a3450657565654470626f36345a766946756b2f754239663043662f41463046737a6637555643366c34584f4e317259382f374171394c344a682f6a5137765479717250344e7456346544412f774279733168596447792f37577166617078496674486864322f343962506e30494657596834642f7743576470625037454134716e4a3451303848356a46482f7645696f31384c32697352486552442f646c4e4a345350646d697a652f384179375833476f305767767442302b322b586b4656417a56643744514a4d73626259536546513446516638496b37444d567758486f6b684e4d2f7743455176756970646e307754542b724a6253596632736e6f36534c5032505246794674706364766e2f2b74564f6578304f5934614b627079766d6a6a384d5572654574534150377538343963316e616c3458314332735a4a493075524d4f546b484a465643685a36535a6c504d716230396b6a51302b2b734e43686e743761384579536e4942353876327252384f584d313534707462335472656134574a47615a67336c7142787953656f39717a3947317254625744544c4b343068466b6a4a65346b654d45796344676b394f6c614d5773574e7662576c33623343577a51337861573052736562457a453450727869743656474d5a632f5535712b5071564b61704a5769554e446e6d3033785459584d596b6861564a466c50624f356a6a2b56646c3430316d307550682f4a5a2b62693676706b524165724d72416b2f72564c555270356c764e48696956673069336c72645153626d6a556744622b656177394630712f38612b4f3754545a34746c705975524936354b6c68314f666646625361766334644c464c536642477236736b5143334e78434f6d33685269765239412b457338364437614261703642526d76584e4c306d31306977697462654e517359786b447256374761347031476e5a46747476566e4d3656344530505377437473737a41415a6b5547756869743459497848464569494f67566343706355566e7a4d513359704f64712f6c527355644142394254714d557273413436305555555776754235424d4d664865322b376b78482f77426d7270504566692f77746f3276764666576b636c35474e7866796978483434726b4e59314331306e3431775874374971573651387578786a72584e2b4e395574645838587a3374693679776c52383638673843756d56546c696570686350376155464c5a4c2f4d3744512f4555336a6a346c32306e6b474f7773347a49693965656d542b6464725a654862324478726361784a6349304d6b595149423247666633727a503463367a7058682b7931472f76353168764a647952727535786759342b7459756b2b4d646667313231756276574a54612b63476c52756d334e4a56565a4e6c56734c4a796c374c524a66656466613661326e66472b346371566a754533716364656d61367135385536582f777352644175644d684d786a33433563445030365667617a3474304366786670577151336365324e4757566777376b66345678586a48584c65382b4953617a70306f6b6952523836745665306a48596d4e4770576676365769644c38524c322f5078463047796e2b53784d6974486a6f546e2f77445658582b4f50473858672b48547a4a5972632b65434f546a626a4663683476384145576861374a6f562f4664524e64576b6973774c444947526d756b3148785a344731694b41616d39764f305977413542326d71356b32374d7a354a4b4d4f6544736a7972786234746a385736725a586b6471747349697165574f633839612b6a374c6d78742f3841726d763871385138627a2b454a744974762b4566696757362b314b44355a4763563764592f7744495074382f3838312f6c58504e575772755a3479635a54584b724a4c5a6c696b5968564a4a7742795453353578584d654f4e546b7364453869333343347547434b56504948656f5375374847633971642f2f6257734e6571784e7461356a67587337647a2f41437173334a78334a7931437870424244627845494931417a6e7165357057487a41413774333851373136464f4b55534c6a5a434d484f6364633437567a327233735a79576b4d5543444c53646a37665774485537676854627874744c66785a365654384e614a2f776c586948624d774f68575a33545a3654796a746e303548355656674d2b48536e76645330784c6d7863336c334b446252486b525263486552376a503556376b747373467662774d4e7868554257783178586d73477352616438534c32534f49545738554b71574a79796a4c634a58704931434337736c756c6b56626370764c453477505130316f42382f2f41426a4948784a693436327779667872692f5841774f3162337846316b6137342b6c753069654f33696a45635a666a643731673961396e4353546f71775844396153696975692f51593251417151656836385537534e586c38506131616170626b373457486d4b4f4e7930754d67315475666c52384c3142465a566f7163476d4d2b6b50687272482f435236646636776962556d6e77452f4156316c796937475356556c6a5055534c6d754a2b436e6b70384f7259526c532f6d4e356d4479446d75337643434e6d4f54587a74566372304e4b535465707750692f77786f7435486251783658464663336b3670766a5541686537565638572f433352725877334e5061764f6b3051586b455950497a58573665736d6f654c704449674e7670384f314d393262427a2b474b333957746b764e4b75595878745a44317250323030315a6b7a7464324f51385065412f444e7670747271433664464d386b516645696735795070562f565a4962485237744c617a743054627343424d44424865722f41496479766865786a62724843457a3634465a6d756a2f69565847426b7334474b75724e765273307078584b32637264365850344b6a696b6a56726e5135634d376b5a61466a2f5372595a586a456953426f6e47364e687a6b5636497470425070695730304b79524d674449347944586d65723652632b444c31376c466536304f5638736f7a6d323537653165466938484762356f626e5a684d57344f307469793569695653376f4333514f63666c584d2f454b4a3576424e317a734d624b3379395747514b342f346870725678726b467a597a54795745774274576779514f42776356314e7a4a4c616644754f4c58456b754c365a646d31657658497a5745634971487336764e6433324f6c346a32796c4378304768576474703368335456744949315a375a5a476b4b3835496f3158536244586450653176625a4d74794a5655626c507255756d7850446f756e4a497833783236376c2f4470552f555a7752363177315a7a3973354a6e5a546f77644e52614f66305477547047696c5a4370764c6e714a4a686b437439596c4570386933534f527a3879714d5a3936586178344179443055566d796662504546386446305a7972394c6d2f586b516a756f392b745854397469716e764f356c5564504452764645476f61733933656632547063714e744f322b75534f4956376765702f77716e725867587762725670484262366e6357397a4648685a47487979484f63747831723043322b48576e327470464244495274583934334f5a572f76453072664436305a63656366797233714d466831616b6a7871745a31645a487a48716e675857394f6c6b3875314e7843436350487a6b6576465955756e333171333736316d6a3969704666573438416852387432794164414d34706b6e773674707639644a464966566f77613631694a3955632f4b6a3548454e314b32424449336f4d45316f326668665772772f7574506c7765374c67667258302b66686e62526e4d4174315072355970782b48302b4d4c6642665944416f654a6c30516371376e6a2f685077486f31697933336953344c4f4d4662574d5a353944317a58724e763436306a53725262617830394c614d64465835522f4b6d4e384e7268584c4c64526e366971382f77336e6d5845374c496f36594a46597971546c7558614a50632f464656746d4d4d455a6b375a6571512b4a46756b4c6f7177704c4b684c75483542714276686f30616e797259663843636d6f472b486c776777756e786e3836796370496155544a683855784c635358552b747a4756766c41457651564b50466b594a32367a655a37447a5361742f38494863492b47306d496e73517654394b5276426434692f4c70306174362b582f774457704f544837705458786c7a78713136546e2b2b54567954346753546f6966617052743645413831435043326f786b34736c422f3635554e3464314749427a59394f43664b36554b3744335357352b494539335a2b5337543766564177593148483436764551526f6277786f4f506c624a71613938503331686577572b794f59544a756a614e667a464d4f68367543536264786738595768383064796c474a4e5a2b4f64537549326343614d4c2f664246584638626172476f77776250504f61796e305856446e64617a6e50625961446f4f7148474c615538646c4e4a74765642614a716e7833717750514850317152504875703953716e383679453850366f535039466c7a2f756d7078345731592f3875372f6b616d38753472524c6c3738523956677458573374306b7535506c676a4f637378726e705a4a3472714b393161614f377647426b75595a66753272486f4d487166515537554e4d754e4831426455766755476e77744c456a66787959342f5543744c5245542b7a3761356b7337616538314e7864586331374a74556e2b4656474479416136364d584a58596d2b58597265482f4432753676716f737271356d697334795a586c63457543656935394d484f4b75654c2f68316332326b7a7957756f66614c56554265306b583532556665594831413971394e6d7572657873704c7662474274444f6f3442627031724c307a78456d76536d436254354c5a6751464d6f794855396347746c4658754b56535430506d6a78643465302b7930757876394a65563765584b794d2f38414333702f4f754d5a5367326b45483346653353574e76644e714670504370747a714d6e6c78396c7735726675506737623672634c637a5178776b6f4146514847505768566c48526a7130316f7a35794d5a474d354149366d7447323044553779302b3157396e4a4a4430334b4b2b6a706667355a584d4d5563305547496868536f77535065726476384e4c69796846766154787857343652676d6b3854706f6a4a525855385530487750625461617a61783531744f782b546a714b39612b4843526158726c6c70746a4c4d7471786374477834596847352f53746366446d365a68357434726764416531617567654347306a5737652b4e79484557373563646371522f5775654e577055714b2b3179375153304f326f6f6f72307a454b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967447944783772454f6d654a4e522b32447931434b304c64664d416a58492f4f754b69307539385536576457315334476d65486c355945346b6b776577354e582f6948424e706678567674616c657875725a68454667754a6c506b6b52494d374d3537452f6a56744674626d2f67316c593737583767483562565957697451754f674242484663744c4230366335564c6174334f79706a4b6b34527072524a574b62363748716d6c48544e446a65313065416257746c5445317a6a33394f50555664306530313756394754375a6457756c654834795149556245687763664e3150725731625776697a586a63517836565a6548376334784c436f65584831423471434877723455384f584476724f716d356e62356e53366b44626d366e4566584e6275566b636c6a796656725854725878584e615755707537535035342b434e33485070576d6b30647a4835735437343841446a47302b6872726669442f592b6f614b687364446533686877594c324e664a646e2f7537534d6b6436382f734c71524c6f52336f46744c4a474645616a496c50596e3372303842695650525052474652476d6362653455413572466e6e533031704c75634e354478464e7739613278387551534d39434d5653764c46626d44374f7a41497879723436487258717a764b4875376d55487271657366433564623076775968653268635450356b5149476468417858585336747267584d656d5735623049482b4e635a344a3863576c316f347339566533734c697855494979332b74554467714f3964562f61567a6457386478704f6d7a58534f63426e2f64343938487258355269735a6d384d564b6e475058717444315978704f4e376c722f684a4c75316a51336d6c4850566847427750784e56543853644868315331302b57307534707270776b5a324167354f4d354653786546395331545a4c724f6f50486a724462446170487631715a4e51384d36584a4661524e48637a777473555270356a5274307753507531374f48654a354f6246322b526b37583930334c33536250556c4b3355586d4447507645667972476677523459747875657a564d633879742f6a5650554e643852585537322b6d366646616f725961346d4f374b2b773471705a3641747463473476722b347635696638416c713256487342584a696333777547576b755a2b52634b4d705059327248777a3462774a725742634138487a542f6a57754c613269545a484e73553859446a2b7459446166614663694c5a676446344656704e49736e51466f32794f6e7a567777346c6f74326357763639432f71306a62764e42687667416236644d644e684652326e68694f786b57534b397543796e6f2b43442b6c596a3647724d4769767279456764566270584f6d463276306a736646477033307779524642495755343746687744586f59624f714749646f63312f5273796c536c48633766554e4d31325573624b2b67515a2b5865672f77414b6670476e617841682f744f653275543749503841437158687554784244356c3572306b5674595178747457512f4d422f655a73314c65654e625a6f5a426f6b4a315734512f6469346a5030667058717971754d655a7973764d693179316536466133696e7a644e686b6238717950384168444c42354372364846733951352f7870553858612b4959326677797864767641546a3561317266583732574e576c30746f326271766d4134726e575a55477634736676512f5a74644446667742704c6664306f786e315351352f6e55482f43754c424744522f626766515344417271357465744c6149764f73796b64516b5a622b5655345047656a3355766c784e633542414a4e7334412f4846615278635a71385a4a7231524c586379495042556b4d75364f65345566375a4272503144547452744c7245656f79456e685435616e2b6c6431596176703270795478324e35466350416353434e7337543647703570344945387964306a514847352b426d7446566c324379504d7076444770547875317a6632786a59664f476977542b5171746265416644392f4b466e6867757046427971466c2f7772316b78527a494d717271523664615a48593230546c6b746f31593953467131577475677432504d6f7667373466615a6d4e6c637738634d6b33366461374477376f6b5068757a2b783256696b55514f5332374c4e376b35726f4441687a3876576f6e736f70434e774e51367162733768597a37727842486175796d7a6e626233556a2f476f5976465555682f34384c6f6639386e2b7458707448745a304b75474950465630385051515234747070597a3667306c4b6e665641506b3852574d454454584a6b6752655475556e2b5651326e692f524c31396b4635756230324d50365642632b474a376d3452323153343244724765566236314b4e496d67444343437a4441664b7869355036302b574739774e714b654f5a41364f43702f436e62302f76722b6463345939616a7447616531745a334278736a58626b666e565678644e49492f774377584b6e71336d6968556f5071467a71326d69556379786a36734b77745538596164702b6f526164475875622b555a534b455a343953656c5a383269324e784537616a7030304d53383551377a6e36415654734954624b746a34583077716879723339796d476a4a366a427754562b79676c6534584d5034676143645a7334622b2f4d567271613553474a65664d7a3042786d764b764b6546354c5a304d567844784c473347445830686f33686944545953626d643736354a795a702f6d49507436567a6678422b48734f7651485564505152366a45433246556676654f68724f70797930697a75774f4c6c516d6c4c345478426b4c664f345850765568326b48655331415230593231314559627444695346312b5a666636554544722f5375666c61506f597a5534387932474c46466b675238487253714569473155504e502f4142352b6c49526b63742b51707658516164335a6a4241705945524450725447696a4335614d4b6f504a39666170484d6363594c6b676e6744484c6e3046656c2f4433346550657446724774776c5968383176624f76546e7161714d64626e4e6963537145625831492f6837384f32764c7550584e56683871416377775a354a39545873797145514b6f3441774251714b674156514142675948536e5535626e7a7453724b724c6d6e754870785848654d387733566c4d65553362636667613747754e2b494b4d4c47306d554843544450487456306d6c5055795a7a3036417850474d687a305070574661616c505a334574764f4356512f4b613643544d68634870325072584c36715a4531444c6f422f64774f7631723056626f534a4a635179336b386d6f3362326473713854415a417a785632317476442b6a61424170314b2f6d307165584d55614c38386b682f444f4b713662704b2b4950454e6a705578593268506d5459485848592b32635636446665453736665557697470496f4c4d4165564971665046676475663835724364546c5a534a68345230715454595a594c593274305533497a507943523335726c74537439527672367a384f36664d7274356d64516b6a50486c353966586d75706a3844427958764e587672686a774d763046644270756b32656c51684c614651324d47516a356d2b70724b5664574766505878646846703438696732685945746c574d41567945623767657646656866484a6f6c3857324f516f506b6a4c456535727a654e6e586c31326a3150537662793974306947574d4864536471546357414b34626e394b636f424753446a50554776525977364876556377796f4a36643665784b414d7743727a6b73634372326d614c7247754e73306254354c6a2b394b77776e3445314652714b31592f49375834486173316e34697539464c2f414c6952444b6750727858726575616c2f5a746e63587244636b4979462f764e2f43763531352f384d764131767044747231334c4b6456544d636b54634974644a726c797738556547394f6d622f5237796153535247364d56414b2f72587a324a6c475653364c696e474c5a30666857326c6a30644c7535586263335a4d7a6a2b37754f5150777a567a584a54446f74793436374d566f3478394b356678394e4e4634586b5741674d38694b54375a46634562755a4c4c2b68786d487778597151642f6b44507363566e61736861316951386c706857366b596773496f564879724741507972447678686259347a2b2f48345676565770745430677a703047493148734b6263573856314138457942347041565a54334650483352394b577562726378504c64583075373845336b6c31624b5a39446c507a52594447412b6f3975745053525a31573642535657473548484972307561474f654b534f574e585278686c595a4246655661336f6c33344d76505073345a4c6e5135446d534d636d456e754b382f47345256467a553371656867385679506c6e73573377564c4e777835346f416439696e715438762b315459586a75496b6d744a566e69666c4754703944364773357037335774522f73545163732b635831333267553951703966384b38716a68716c5362683935366c5776476e54356b506d572b31712f62514e4849576272643366384b4c2f414851665870587057676142592b48644e577a736f3844713745354c74334a7076682f77395a65484e4c537873314f306373376665636e7153613167414278583056476c476c446c6965425672537153757778525252566454494b4b4b4b6671415555555561414646426f6f414b4b6158566570417072544b4d594262506f4d30626753554565314d7a495778356648725173556a63753250595531546b2b675848594863436771704743422b564f3873426658464d5267363546564b456f6269756374663278744a354c654843334c457a5738685041506366705770703274326c31614a766c56706b776b704338422b395674637446754c31586c436d46495733467a68527833726c37792b686730365333744c6d436142342f4c6e533134386c5350766a31785730596330626a4f3454566257535461755375376147787754563553724449412f4b754938473354366839696e41506b665a3247434d416b4d526e487269753458474f4b776b724f31774677505155596f6f716441504b666956707433715869335155647361613877535656366b35466452662b43744157356255626d335a326a69436c6e636856565232412b6c51613770636a654d4e4e31424c6f4c476a5965326b47512f7550656d654f6646423064467335744c6e75725735794a5a6c556c493139574146646c4b334b4e3744375454375078543465654b2f594e61584d755668523970326a67652f6172756b2b474c505170596b73444b73414158797047794d6a2b4c4a35726c6266785634642b33576b747342665451484b437874327767786a35735a3961373257386945416c6e4352707445684c6e415564636e365554566e596365353456707363392f347a764e4e6a6c447564565a6a47765659393533452f705830537162455652305559727a2f414d4657476e707145743959775279797a797a764a6537507641767742576c3432385370704672465a51794d4c7134594b434f4d44363971776b6c7a57484a75566b62393572656e6165534c6d36524341574936384371532b4d744365424a6b76305a584f4678317a586b4d736c6c66584678622b6149376c376b5737695139467a38784a2b68724575644430744e54316179744c33796e564d323742757055632f6d614645667330396a364f747279337659524c424b48513978566c667643766e6e773134786e304b625374566e6c33573930686a75344f634137696f63666b4258304843346c574f526556635a422f436b6f745458715a744539464646643541555555554146464646414252525251415555555541464646464142525252514155555555414646464641486e2f69625466436474723931714f7177366639716e5664375844677332465544436e3241724958785959776c6c6f33683239754e7877736854796f415055455630312f6f476c6a7856646175625254657942566557516b673456514d413864414b6e4c625679462b5564674d56386c6a2b493152715370556f586c4674612b5436572f55366f554c704e6e4b51364e347076726b7936767236573971587a396b74426a356651754d47735878644e346138494c3533324c37667173782f642b65356c5a434f6a45746e3272305174685349777849504f426d7648666976466332586947323142575659726d497873534163644f506175504c6366587a4c463875496d31486579304b7177564f4f686a53616e715772794a646178634e4c4c6e4b526737593047505163666a574e647766615939795a2b307876757432484f506174585973454b50474a6a614d7555754a52776656632b7455744e6a625637794b3030754757535757594b374563525a50336a36562b70555668715643304c572f723854792f666369537a7646764c6266783970546956633837752f48617032554e386758676a4a793242573934303044516644455668506f7a5233462b763776555568637578395878322f2b765741386b51587a495a6749324f63742f46396665744d4c6949566f33576a51716c4f7a754e305734683037785259616a64524a50424649456d53534d48355477434d3137362f6975615231744e46306556734b47575766393344744937455a7a5869476b65467456317131754c6d4943787349674a4339774e706c59636a626e714b3637773334673862367a59334e76617757466e447034324334754156387744303764712b647a6e323071696c67306e33762b68303075564c336a75597266564a3765534c5639566562632b344c422b37326a30794f54553172706c6a594b3574625a49355a446c33786c6d5071543372473847654a4a5045756d53334679694c645153474b5578443932784864613646547444343363486d767a504d612b4d56563071386e646663656c54684278356b504753435354307766656d71522f45425546336532746c457374316378704554387535766d4c656c55394d757456316d384c32326e745a57616e4474644956646a6a717662465959584c63546966676a7033484b72474a6f5845384e72433031314d6b4d616a4f36527341566b79617265586c7774726f2b6d79584c4f4e7775706372426a3144633571356361446f656c542f327a7246354a653355502b726564774e6f2f756852776678465151612f724f723347624330537730302f4b586e51724c39554853766f4b655334584378397069703338746c2f6d597972796b3752524b64474670703548696a7841484a6c796a49336b34342b3738703571756c36746c4a4a59654764425733666e64637a445975543059484233564a446f567462366964516e6b6d76622f626a7a376a706a30774f50307254632f5067717a633542485261566250715648334d484454766251493047395a4d6f4c703031355a52513635655066536a6476326b786f326578413449717a5a326c74703849697359497261496638414c4f4e6343702b4d5a6f42556a356c4e664f346a48596a454f395754614f694e4f456452664d4a50475142327a515766356a6e61414d39617a4e54316d5054514645636c336374397933747875596a3178556e396c584771365958317136466a617375396f596a744c496571766e6b6668585867736e7234704b536a6150646b5472786a734a6436314442766a6833336379484478514463792f5564685553574e7a74653931323774644c7348546162564736352f694c6345486e7056657a31694f426d306a776a706d496f7552657a4b576863643850314a7155614c44507153366a66535458313468776a7a66645165674134492b74653271574279744e54664e49357665714f354459334b574a75644d384b614d62646d584c3339774e7150364d447a7650506572693653317848417572336b74396449506e594d5552762b416a6974495a334e77516366773944534d43414d4e6743764b787565346a4565374433596d304b4b573552476a5777626362713847447746756e782f4f7271524a476f45633177434f41576d59304d4641334d4342574d3270335635714457576952704930662b746e6e4238706655416a762f414956474572356a6970636c4b5459536853687157645676377933747736362b6c67684f31576b514e75506f4d316c614c716e696c4e562b303674716978614c43635453586b49685a6a2f736a754f6e4e4d7678427032726d43794a316a784555777374787a464176584442634144333638316f6e51786553515875737a79587433434e3677672f7534473737514f6f2b75612b6a6869466c73503970713830753339497763585566756f757a2b4c372b36757049744530633345555133476534637870494f3277674864542f7744684b64587467426561497062722f6f386863443942552b346256787770474d446a426f4a43376d4b76356847446a76586b7a346b724f5875515358346d33316457496f2f4845636b77694f693671704a2b3859666c2f504e61612b49626663504d68754930786b7649754655653572433150574c54524c5258636d5279634a625248644a49336f6f724c763458314c5178662b4a4a337462634d576a7349446835765247423533593743765777474e786d4c584d366155652b7635474d34786a6f64375a36705a616a62766357567a484c4370775a466235632f577130666958524a62673236617261744d44744b43515a7a584777783333695453444666784e70756c5345434f306a585a4977485a2f2f414b31617936585951326b56724861522b54476f52654f6344333630597a4f734c5171636d736e356242436a4b5770316254514f6f2f66523450384174696e5268426b7846546e3050577650726e77506f46362f6d33466b7a6335774a33422f6e5670724f79304853484e6e6654324d612f644562426d2f38657a53705a39684b736c424b583466356a6c516c45377670327043666176505044317a724e774a4e563158577236313036492f4a446449694e495055386450705675487848346b3153386e6c3032327449394e4232774e636768333954395053765572313664475050556c5a655a696b336f694c787a384f342f456367314454544862616d4d4179486f34394458476a34502b4963592f744b327a394b37787453385a427549394b492f34466e2b6444654e62335434474e396f313550496f425032574c49724b6a6d47477275304b69623748564776586f78736e6f63482f414d4b643851442f414a6964726b2b31496667353468787871647144394b394b384b2b4e4c5478564e655251574e336176614565594c6c4e765772733369765172615a6b6d315332546163456c787766537579336b50362f5866327677527776685434537459366d742f7230385634304a7a444776335672314e565645434941464177414f3155626657744d75797632612b686b4c644e725a7a56774f704f4d3571584b2b687a7a6e4b62764966525252534943755a38646f3765475a5369354b73702f57756d724d38513766374375742f3364745854587649544f42333569694a424f3551617964666a48324933436f57615071523656724966394767786e6d4d476d5843724e627368424b734d4e394b39474a4a6c2b45726a5a34703071356859624a6d4d50583733796b3137527a337235747572756651333869467a484a6233437932374833494248366d766f793263765a774f7879576a556b2b2b4b343852377570534a7142514b4d567a61376f5a7a486a44775670506936794b3330493835426c4a5231474b386a682b44567a714f6d7664615a71324a49334b694f595a427858304579376b5a66554556796e67355768477157556833474f34596a3647757a44564a78325957315046482b467669794356597a4462456b2f4e49474f3348355644346438436137346c743769545468614b7345686959764963456a3034723648757335414c634450466339384c4959597643736a513479397937506a317a58553866575557793577745a6e6e6e6772345a322b6f616e6352654a706d6134745a43507368425658583148714b39636930793230657a5333302b424c6133586f71726971586969774676635165493443346e73667668663430373866544e624d64776d6f365a46646f4d787978695252334752574d71737173655a73564f3350715945632f325478484c6237647476637837786e70752f794b35373467774933396c4270484e31477a74464b68775973343572704e5a686166536938612f36544151362b746339724e796d6f366e626558496a4d625251362f3363357a57564e4e79304e4b396f7251722b482f6946636152434e5031324f65374348435863517a6b48312b67725438592b494c6255394930696654536275336e76416b69512f4d33414a366668584b586d6e47426930625a47637176595939617a744a74707a34303065613056763959544a4350756734504f4b30644a63317a6d766f65787672397273436554636559426a594635724c75726d653474476c467162574f4f514e756e2b556b56325378783442324c75376e46637a3471592f325665622f75676a412f43716c424e4e6c38396c59364b4a67384b4d4343436f36553831425a45477868782f63465431775063424b624c424850453055794b364d4d46534f4454364b6c575734486d476f664476574c54555868385061696c72706432784e78473357503354302f5375343044772f616548745053317459317a6a39354c6a357047376b6d7465696a5464464f5461737737556c4b4b4b62563953516f6f6f6f414b4b4b4b41454c41645454532f3841644761787466314637474463763934444e6256724a357472444a6a3779676d746164506e423644535a4e75654239545451464144764f754433336356583851574d6d706146653255546d4e353457514f4f32613475543463577a36645a324e7a72477033466e4134654f4257487974366b675a363572654e424c6368794f6976664633687a54357034626d2f6845304b35614d76796677724275766951626a513176384177336f743171446564356252426345446e6e6a50484664464434593032317650746c765a5247346446575353586e4946624556717354664a6845492b346967437456464c596e566e426a5876475776326b48396e61622f5a647936487a467566756f63396a6a6d756c384a326d73574f6e504272656f4c66585a66643571726741487456322b3166546450744a357037754a4937635a6b2b635a5776507237787659775855586963367954597852416e545979766d486478794f744f3553697a3150714d5655684f7833692f756e6971476b65497262584e42683165324472424b685a5562372f4874526f2b725136316252337475724c452b56324d4d45454876574e64586a6f4e614d67315262556174626661677a4c4d706a436c6a736232493664363462574e4d31647238615a5a6154445a6c7930625863492f64724154794478313656364e7164755a72526e41416b694f39472b6e4e517671426d306754526e63386946414d6362717a6f793933557271564e4a746f375855496f4c516872614b3332626b48793773383130466370344238392f44346e7577766e6d52676476706d75734848664e5956466433414b4d65394656627655724f78546663334d635942774e7a6461495263744567497457732f744e717a784b76326950356f334b354b6e32725063577574366139704a4f6a546f754847376b506a2b4a663656676174343775576c654c544c5578787151723345792f4c79635a42724c384b36644872757261733939455565426c6547356a59683259352b62485131314b6c4f6b30704c652f344354757a61304c77314e3457535a35356f4c6b7563686f62524973412b754f744a716570773668636e516f486a754c6d39566b7847647977726a6b73653252327032716546686670396d314c584e527537592f4d5958327172653256414e633734696a4f68582b6878364b7a574e7344736c4b674d593932426c6963382b6e765579733233637657316a7472644c5477746f30634376435a416f6a566368464c416670586d666a7a58346458302b4f5862476c374264434d7778746b756363454871527a562f784c706c7050703137614a41397751504d457a756437766a727763666c584965466a424a72756d5458736342303941576b6a694a503256686b664d54307a372b745930347563726c714c68717a5954514e503850423564646c6a7564566b63584a4d6b70692b5a757741366a337270376e515043466e6f30757658734d614e4e466c6e6a6c4a33746a3771563353574e6c637a6935455563727576797534422b587469754a38562b4966734a6967306d4632657976555363474d4d6b69766b6b4c37385630704a69353549345762516262562f424a766448594d327751434758355769587a4e32534f332f3136394c2b486e69426236536654504d622f41454d43457137626a3569673773487550657133784b74375565446275356a74676a756b596662386f494c446a6a33726e506779545a3670714e6c4a684d586b67525635516b4b63344a354e52617a5871477330376e746c4646466452674646464641425252525141555555554146464646414252525251415555555541464646464142525252514267616a482f70387a484155344a4a4f4f6746637665654c644e6a314d616661724c65337036517734782b5a342f57764d666a66652b493750786265424c6d36693075587931685643517266756b3366586e4e655652616c71756d71593437693674772f4a41596a4e664d2f367455366d496e587279766554646c35752b703066574879704a483074724637346b2b7a53587279322b6b3652416f4d374568353865324d697545587852384d377637526233773143346c6e4244337477653536454163443871386a2f747a56664b6b742f774330626b7853384f6e6d456836727953717473495768324d4f2f6576657775436f59654e71555645786c4f54335055504365753642486372704e7a63544332745a533846374175546a30594e3235783072702f46747634633054785a625864773777614a713051653445522b2b347963746a6b64523072775732755a4c5734575742797272304936316f61684e71312b51626c4c6778686979526b48616d665164713171513531793831722f65536e3150706a524e57384a53572b37537037595248433559484a4859486458423371574f672f464f5336697452654757487a4c534349677076787a6b66544e654d523274386559345a7a32776f4e61796166346c3056726255317437793349624d54746b484e655667387370344f73366b4b6a626663316c506d5672487374306b666a4c773750714e3964576b397862766a7978766a6a6758304147435456552f622f4761526148706f556166595242486c5937635a48636a7233782b74634a712b76654a4e555a64567574476b674141527a4447556a63657048632b3961476a66456153336c74644f3150545874624a57412f30552b577a5a504a666a357139437637575562556d7276384141684a70366e734f6d58576c6144444234643069336b75706f6c336554414f76716478342f57745354526464767274556c6c6873394a6b58644b696e39396e304a36556b577661665a6152464a346230745a2f4e5864474658597050664a49347175663752314333646458767a455a634d49725a7470693969656331387a55705a6667583753712b656266717a6f5371543053304a6f7233777a34596c4f6e57554c5846314b6369495a63733331504136302b38756462314366437a4a70746b79354f775a6e42394f3634706257327337434952323055556174393579427566335076566e7a45365a47666672586c597a5036736c793046796f3168682b73696c6161525a574d7279525262704a4f5865526978592b754f6771396a71324254576441775864676e3961505069434d7a534b717239346b394b384763717457584e4f37624f685255566f684732747a6e6e726e327152772f494368636a6a4a724e6257495a6f6d66536b4e2b33335173664933653537564264326979325a62784672497356666156677433324d687a39306e6e5070587034504a3852695664726c6a356d6336764c356b683171332f744c2b7a72654e37753741795934687742334f54785333656e336d2b5a3959314b4f30306f444b78516666623262503841536f57314f61303261646f476e78773234584458737778312f697878752f43704270567464586133642f63472b6c4334437948393047395176593137446a6c3257326c38632f764d62316175342b78315a4a744b6b5477745971436e454e786441374366662b4b6f3464464531326d6f36744f3131664c312b59694f4d39776f4855665772397a4d493469557875413451635536336d526f314a774849797935365635574d7a6e463130327449767362517779697276556b7a68506c436a2f5a55594170586261752f6b6e4848745545317732304345627a6e4842714b58555949797951483752636f6f5978786e4a5850514830727971654872565a6537467535704c3356715855547a464f463478757a6d732b50574c53665654707470444c6433694c765a597838716a706b6b3856556e4a6e74512f6944556c30794f584953326866456750624c64382f53686236396b6e467259576b576c3657716638414877522b386b506f427752363572364b686b7448447839746a5a644c32527a5371546b375152567644486258715265493773334e32386d626654374c4f306a746b396a2b4f4b7558466c7147744f385636525936576f47793167346b6364784966384455756e36625a61514a5a4562644c4d785a70706a6d52767871793130346c5256544f38664d6335414652697335664c374c427835596f634d4e4b547649665a5755476e323677515271716a6f427a7839547a557755413558726e4a50383661317843462b6556554147535363566d336d715354496e396c782b615877505062694e4165355066485846655051773162463162523162336651326c4a5531617866753775477874337562715259346c484765754f2b42574e64583135714f6c7266325567302b797a7461357550766c66384159482b497148796c55435a49787231367a454a49654955594847514430783961752f3262484b384c6174644a647a71762b713652413963376655657465374443594c4c6b70316e7a314f3351352b617056646f6c58546f7a48597376687931386e7a6d335358313538786650566b48592f68562f54744874624756377235376d376d503779346d4f5378396364422b5654324e304c77545a51723562625677617468515143535333706d764e783261346a455870793932505a473061455937376a58514d5476475333553035634d324d6a4f53425665652b6774576a686e6b786353666367586c6d72504e7663366a617a7a36334e2f5a4f6e4b78434972346552422f4554322b6c5a34484b362b4b656d6b653454724b4f68592f744e62362b6e307a53597a63586b492b64794d52786e746b392f77414b7a4c503748704f7267366a2f414d544c7854497079734f664b52657747654d667256784a3562694b485464446a2b78365a4775587539767a53672f33656e4a3961746162704e74704e6c3545445353636c6e6e6b6264493550716139797058776556552b54442b3955372f312b5268474d36723937597078615650643336366872306b6478656f782b7a7047543563532f547566725734636251647651394670716363446a50536f726d3468744957754c6d6352526a377a7365415061766d6354694b324c6d70564864396a6f6a546a54524c6a615335594b716a4c456e6f4b776f4a6d3855724c48594e35576a527975742f4e4953444a36685062317161537a6c31704a32314751325768726771354f3170656e4a7a3048616e744b64546c577a736f307474456758594643342b30657739756e50664e665259444c365743702f57385676305839645443704e3148796f535337625572464e50384e626261786962795a726868387a494f447450632f577264725957316e456c76446252434666757179376966633571654f46496f56534b4d4a47677773613842616d524354675a39327a586b59374d71324e6c62375052476b4b5370713469775279414b5959384430474b7632656d32797475455a486637787031764553773434725252646f7232736e77636f652f497872535851554461416f365574464666535875633456692b4c59576e384d336949634571446e38613271613643534e6b62474742427a546a7567504b7257574b58543751784f475479674d38396539536734583551434478696f34625837464e65324a5966364e4d575164506c4a2f2b745576746e723731364d58377042796e697a523131477938754c4832694a684a4733726735494e65732b4374666938526547726536546830486c534b526a4248466566616e386a52757642552b765775672b476d456d3156414d41545a774f6e3352574f495875616a543150524b4b4b4b346c73554663646f384d756d654d745574356e425737416c51647879613747755276623754375434677770637972484f39756f517365765774364c39344c324e4f3459764f464f41416343736234656161326a77367a707a4e75386d394a586e7356422f725733657a78524f7a797952716848424a2f6c5850324d36516645743434356a354e315a6273413846382f34437161615452745661635564724e43747845384d677a47344959567950684c55566538315452674d4a59532f494431326b6b31325665655133486b654b3962316933742b594e71543448336c78312b7646474831304d5737616e595845496a59796f4d6a485432727a5336743762532f465973694d6d366a387933635a7977357970394b37535878464a6677782f3250597958556b6e49647751712b755361725876686d5a394d645a584c366a492f6e78796e2f6c6d7735326a323756744744544b6c4e4e616e506d4a575677515232492f70574465787936586451583848797046494354333534726453566e694a6c514c636f355764522f4333722b4e456c73747a473045677a477779426a6d74544539547470556e7459706b4f566441774e6331347554476b58687a31492f6c5637776e66433830534e4f4e3048376f2f6855506978502b4a524f543349704e2b36786d725966386545482b344b7331446167433068783032442b565456356a335a5955555555774369696967416f6f6f6f414b4b4b4b41436b70615370594850654b62667a624a77427a3936726e686137613730574e6e2b386e79315a3153487a7252674f746370345731714377757276545a41346b424c4a6e2b4c485775716a4b32675059377738307a61755478673177756e654f395131445778616e52326a736e5a6b6a75642b5178427830704c665539565856437435716c752b386b573972457033796a2b393134482b46627156335a4970303348646e625846334459326b6c78637345696a475759396858452b4e4e593136533074354e426e6874644f4d5a6c754c36516734542f5a482f414e617445334539377055747066474b5363444c6f562f646c66526a30727a6978307a5862585872793576624533576d6c475743426e2f30654a6637774854465643373349696b3253364e704e726f73483973336b73317850672b644b70335233536e6f63486f5163656e536d6172623662724f7032657058535179586475674b6841566a6b583341394b7465456647756e33506c2b4843495a6478636c35426847485079726e33726e70373635734e6173723178622f5a72575978544b4f4930527541704874574f4b684a4e4a50513377303037335230317471647465323736747039334a71656f57437573646b6f435257347a31787753426a33727274413171316e6e74376663735770534a756c6756534641397138376a304233386252336668784c69796d574a37676c56506b334a7943715a34474458622b45344c6e554e516c315456394e61303131464b4f41506b4b3537662f414b364a2f445a4d7a63567a79756430352f6374783237316b6166464e48614662677179764b536758734d6d744b355974703878485859663556543033634e47694f63747a2f4f73615639524c637165474c5750546c764e505135386d59383539526e2b74627047426743756274726732766a4e3467684d463746356e6d6b63627878742f4956703637716a366459537462494a626f4c6c45505165355059557552796c5a4b346e6f55504566694272454454724543545570314f78653059377333734d3135665a612f48666549704e507458655333686a4a6b6d6c487a6d54766a7469724d506d50716b73786e6b4e78637942726958646b50384137432f374936652b4b786248596e6a54584c6d4b4e6344436741664b4f4258765950434f696f4e3773786c4b36304e6d3754375a625352534f5147516f57394432706c6e724d586838577753647248564658796a4a4d7061473458746e47636476537045624449457a6b4442796542546a454c745869794a555872754756723073626749596d7a62616132612f706b51714e4851367834747662485230764e6c74444b754e38306a626f6744334142335a2f437562304379302b2f4e35645470657a7a523341753470626f345755736543414f77497a6973576132743470354774724f48375635654538336c462b67396176614e713053576c725a74665848396f4e39323375383769652b303863656c664f347642564d4c4456383370742f7735323464786e4b7a4f69314b356e574764315547375a53305339693370394b54776a70635869447756714c4c4f4a6457754a44397249554c74635977754d644d415667587571336b6c372f5a326c5277334e3830627449486b413872487144333572712f68356551616645644a763138725770574d6a4d54784f505a75682b6e74584a6836553146793648526946654b4a394231572b766642393759695a6250577242436e7a6a6950413450754b7a6d317a78622f5a46726157746b6b3270536e456c354945386e48393844373252394b76654d627157793857614a4a70734b79616a4954356b50646f2b2b66777a5676566646566a7073623373576954747147664c2f414e5379386e6f4e324f6c624a32307563625855782f466347715866675379306d355a4c37577232355641597a7444594f346e427878675646344a53336a2b4974376257304d7355554d7a73524a336c4b4d4749397174366b735868323050696a78444b30757054454b71784137594165675872742b76765658774871743372666a69652f7742304a513553626a6f517259525433494a35506571396d354c54314c673372364d39636f6f6f7251784369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f41346656394473745238543355756f527664717577785179726d4f4d374230717271486876777a654d6776644f73742f514461425865756f4a4f515079716c4c704e6c4f776153414d52373138766a6373713171307071764a613766307a6f6a55696c716a67312b482f684f4a684b6d6a7773796e49776331597566426e687537472b3430573348474d68635630467a344e3079356d4570615a43446e4375635644503464314a5a6f2f736d70756c757035526744782b56656455796a48705870316d2f567446717244736337443442384b5153724e486f734f35546b622b6c584c762f68483761326433734c61354374744b5151717848745633555043463571313735563571556e396d46526d4a4d4269333178572f70756957476a774e485a32345548726e6b6b2f6a577548796a4553536c694b7a3945324b565750325563647075697936744b73734f6a576d6e32674a794a49527563646a6a4658354e473065797467645575593775356942614d534867442f6336566f61724c71313561744861794e594d736d504d77447558323631533033514e4c74486261377a33424f576b6c7954586f314b6c4c43512f6478636d524857563263322b725436335a787757466a484261772f3678353477412f7542696f5976446d6c3331336358397a5a777a7a496738732b574656546a73423172744638505777575653666c6b2b3841616c7439456874596a4845434938597754586a596a47347572666c7646646a30464f696b6367386a694259344838754f49444b786a617658304658677075344c75595a585967436e3372626a384f5761517645674f4a446b3831496d6c573168624f6f666246676c69547a586e536f564a6643745456346d6e62545135667a704c69474d4b35486b72387872527370456164727965525669413272764f426d7239746f6b4530627261786e79705164306a48726e3072502f414f455373494d53613764533363776245514277414f77347276705a5255724a3833756f7a7134756d317978526e617471553933716b4f6e365a4449317953514a6d474931393831484a5a78575a7552712b6f656338535a6b68696241647677726f74533075393142495937526c733051625152393472533258685054374f325a41725353506e7a4a484f5354586571654777634f576e486d66637a565a4e4a4d356532314b6554624270466a2f5a6c706e4c4d52745a7a36314c5a6150446533736875326137644779586c354250734f316453766832315655414c5a5535484e54322b6a51577a4d3052494c484c5a4e63474a78574c72335330586b614b705269744e7a6d444f682b3065615749682b5245394b6a563549394f686e4a624379633130762f434f57686d61584c62333638306b2b6b5763466b595a32506c656e556b3178724431623255545259716d6a6e793754323178634863526e6176722b4652584f6f57326c2b544d38785a74677a476e4c6b2b6d4b333539416c75744c467661794e5a786e487a6346694b5a613644704e73717857317635397a487938726b396657752f4435564b533571373556324d6e6a4962574f66697339537572574f3576726e2b7a4c5361544b7845346b48312b744e746d387a5662693030434e6f5955634c6333456e4c4f416551442f6e7258512f3849774c322f697674567548755a6f78694e4163496f2b6c61454f6a5739764e4a4a46387279484a78307a585656784c6f52645042782b5a6e43717065394934303662472b71584a7543626e7978755670527541394f443078363149444e4c70697a4e492b512b4275357271786f56736b7372354f5a52682b657451334f6b325546736b446c696f4f51716e6e4e65544b4749717939354e733649346d6d6b59724753377554435979634a675a4f414b725874364c423449376353586379673553486b5a393631395538504e6447475235327472664837324e543830692b6c4d66773149305563476d4d62433062355a656373364872796338313234664b374a547275336c3149654b693337707a4e31455470677639516d61366e6b4f775755443477633579535061726f73373238766265476154794c5572764e7244387137657762486575677450444f6b3255705732664148336c33354a507257674e4768533445774c4273594a4a7034724531655630384e446c69544770433935616c4733686830367a386933554a476f4a4370787a33724f303159726d326b6e6d356c5669426b383130413064444e35704a3659417a564f545172477a6c336c7043547a73553135565043566e65366433314c6858707854525230646b5343346b61524931456e333250417069333137712b6f43783065426c6952737a587367776d4f2b33314e572f7744684662655364626938756361656e7a69335675436655392f5372737378316254577474496c57473042387470417544676345444e653168636f70552f332b4a313876387a6b72566e4f5875374754504a5a654751474d62617872524f456b4335494a2f6c67564d2b6e53332b796657584538696f42354950794139795233717a70656e616470736a615861534579714e3737386c6966584e615832484159627570366d734d66693854566a375044726c6775784e4f45567249707169784b4930414341414b414d4141656c41794677546b65777177747445565a764f58614f4d687542537977694967444c534e39314258687241596c76534c5a767a78695a743765783246755a587953416351727930703946717574696b326e4456504551417431587a49724c706a754152335074567253724b306b76357453764c6b335530446c596c78675265774865703539496c314c5658766236587a4949384e6251644168376b31394e677342547746503274533070396a6e71546c4e325778513832627846612f36624530566b37626b74534d456f4f6d66546d72366f4645616f71716944616941634b4b76665a687a756b4f665846565a35625733696553573652516d636b48505376437876317a4756484b612b5274446c6972494f6477582b56586265416e4278546253434761464a556b3352756f645739516176323569414f325247492f756e4e6475585a52506d357168465373746b54527868514b656154714b4151546a754f74665752676f7130546b627675414e4c54586449314c75775652334e566272557261783266615a516e6d48354d416e4e433033486135636f4a7856653276594c79425a344a41385a597143423342785537486a6971456561616c637264654c39514352474e59595147342b38636e6d6f5163375750483456305775364d427270314b5238577a51694e6b587178352f78716c4c70647462506170504b5976503469587161363663306f366b704e7651357656426d443342343472642b484d697265366a4363627932382f6b4b6d752f432f6d776c764d644555386b557a776270535776696937764c65373332387347504a6237776249352f5369744f4d6f325131466e6f4e4649434f74524c64514e4c35516c55762f647a584a626f4f7a4a61344c586261432b2b4a46725a336473486a6c74766b6c7a676f526e7058656e6a70317245314453306e3853616471475347694441343738567052664c4b3745303373524c34517473357570356268464f55566d4f426a386179576855654f4e4a5747494a73694c4e6a7142794b365335317a5459336e7458754172786b4c494344775430724b3032434b66786c5066517a2b59736474354c4c6a6f32632f774171365a796a59646d3171645258482b48493148696278445a796a4a6c4b74676a676a422f7872734b7762545478622b4c72752b593438364d41443659724369375345773850534e5958552b6a79496f4d5a4c6f774741516133626d4c7a49574866714b79745a7353626948556f5a664c6c67507a487356394b304c533969764c555478746c5747666575726e524e6a793778524465364434712f744b43503752593336596e7478315572675a48363148615871367265665a6445637a3342475335365244754458646549394a612b573075495a52484a6253655a7a304b3977617739517450374738542f62394b43527958467668307838704f65763655653058554c47766f56754e4131424e4f596d52376c64374d4f676276576a346b694c6152644847344b68596a307857666254773667396a6654735937714e69705564475065742f55496863324d384445685a4979703971484e4e41567448755675394b74356c3646617631793368712f577a696a3075556c7470496a6648427270704a46696a5a334943714d6b2b31656531715871506f714331756f37754c7a6f4833786e6f6359706b576f323039303974464a756d515a5a63486967433152545157464b574367466a31704a674c5256573931473230364a5a627154596a4e744277547a2b46543777565677666c4e565942394648343146506352323054537a4d4651645453416c6f714f43614f346853614a7430626a63703952556c4a67527a6f48695947764e726d427450384147747066455a7434306b4d79442b49597230776a494972676646316c4f383849745743544d36674d656e586d727075306b4d7057756736786361374c724e74714553615a47664d747264527874504c416a31713771467834667364646a667a34567672715039327a506a59765137543963313031703464674d63547a4d3238772b573671666c50544e51586e6750772f66793230747a5a37354c59596a626363675a7a2f414672766b3579666c596a5332707a56692b70614c637a615464792f326a6233584d633061663674422f43787170346f7439537472614b5853726c6a4a63495966374e6b4a47597a31492f543836394d67734c613279596f6743527a33706a365a61535871586a77677a6f4d4b7837436b314b3764796f7449385838502f4368744c746a636179586c6b622f41464d64766e66446b39632f6e5865576e676e5474533032573031545431456259446253515a414f6a483372747946366e4656353779317446335379716f2b744f53356e65516337745a486e33772f302f587450313356724f3856786f31753279783831666d433534414a3669765343696e4a78795231726e3776786c70467532337a476b49503843315348693661396d4d566c617341656a754b6d55347849366d394b63616663445033555050345642705a3361544366722f4f705946754c6a543357344b6d523078785662535a564668354b7153304c736a65334e6338476e63305475376d4e34747570394f304335767261457464326a69534642373866317268374c784933695347357434355a34627546523971686e4f31355737716f394258706571574d6570577374724e6e79355343784858673548387138362b492f682b5349447854704b434c55744f514e496f4f424b6d6654383636384e576a53714a734b744f56726c4735615347776b6c74766b6e74314c6f703673522f434257565933316e642b494e52657a52686258434c4d7565753441416a3877617551366844716d6d576d726279493567474f42306b3767666a6d6e512b473776534e556976706f46677472346c646d636e4f4d2f683072364f645348744954622b5279704f3169366b545462565134376b3471575554736767733138734437372b745659706d6a4c4d78786b38436966554a484154474d3844466472314a324b5770514c624e746a6350494f574f6636316b58566d62765662613455764a714f42396c6c364c45563579783743744f355152737a79446b666570624b327a716b61334c4f326c5738586e366b385a4833656469657655487058446a576c52664d56546b2b6443364a66364f4c2b34535732614c556f67546333344f556c4a504f4b377677747067764c7765494c714d786251525a7853444452494279782b707a2b645161566f4365495a59626d61775331304e4757577a6748456b6848526e397662337255386336684a5a364539765a7474757271515738574230347966304272352b5656744b6c453948326b716b5642484c324d757061743469752f4579734765306b4d4e7641773564423648334271316638416a7a2b324675394d73644475356239562f657177346850596b316e78586d74615a6f36364f4e4d4c58794879376139556a797847654e7a63357a315053684c4f3838503364726657344678644f705855446e6d6454335833466275684757794e4852552f685232554b5750692f77414c724a634b6b6c706378474a6c4a364f4f684a2b6f72452b4764745a323033324f3374764c6d735a6e69754f5363793753432f304e542f44695649376256644f6b744874566975643864757879555567482b5a7266476a5838586a53793157786d6a6a744a45644c2b5076496f52764c493939784761356f79396e4a784f626d634c2f63645a525252544d516f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b4149322b3861536e4d447550464a672b68727a3570387a4b516c4a6a6b6e4a70324436476a423944556372374447675948576c6f41506f615842394b4f523232416267656c4e614b4e733552636e7669704d4830704f6637702f4b6c5a706167562f736b4f667531446361614a38626269614944736a597139796634542b564c672b6871505a526c653648637a587337704532775467397379444e4c42706152522f76486565516e4a5a7a2b6e3072517766536c776653694e4350386f584d676d2b75544a47304a745955507973725a4c442b6c416b68563978527778366c6b503836317348304e4979686751557950705556634f366d3759314b786d2f6159647755546f5750384a595649633845416e3242715a72433264736d3254642f65323830663266454267622f2b2b6a584a2f5a383765347975636978686553615a4a4c4845763778796f5051647a394b6b7562435a34536c744f595750526975374835306b476c6f724a4a4f576d6c582b4a756e35564d4d76713339345061466458755a2f6c68694b776e72493342483455794b5331682b57496d356e412b2b65522f333130715336532b45386a73474e7432534a63736153793274467469737034464a365045527a3631764f4d614b74434c624638573469785846784b4a703543675849574a654649392f577243714641554b4641394b6d38707766754e6a36556e6c502f64623871382b6272314837795a53355552394a667736557957574f4941797546423663386d6d544e4f5a7a4242627968794f4a575537667a714f53336d56306a61463535386353736e794c2f515670537764536175316f446b4c4e63534b6f624377776e67534f65542b4652703568347459384977795a35427966777178396a6c6c324336587a534f636263714b6e614b546239786965324278577a6c794c6c7051642b346c72755152327972744c4d5a475559334e7a5333424b323070485859546e384b6e3874782f41332f664e4930546c534447784863626574636a56655431757934325235483466532f53336831574b466c6767387a64636c382b61636b597831347a2b6c532f3278644a46647a78616e635047746b306b6a534d5142495165422b4e656c745a78324e6b74764459623432592f75306a2b555a39514f6c525733687131614d2f61375746793338416a7767582b365233727470553556486478736a702b74515364346e6e6775372b32305853626d35314f366a462b6937354759394d64415055313076676936653438505474504a4c4e6353534d716559325741783350617567756450697648577a476d6f496262473170492f6c487073342f6c5539747038567172433274664c4a505079597a57733755586545626d5536385a7874617835686147356e766a595379532b585a744a4e4b752f355278774436394b657576584f6e756b766e4f30576f713055435a2b554f44675946656b78365a622b624c494c494b306d566b4a6a356365394932695752386c54595246595475692f646636732b6f726d645355745a525a74395970332b453836317255723754527163634e784a3530666c714a43334959376550794e64524a444a6f6e686537755a37756165566f6d6c506d507875493644304662306d6b3230786b382b7953526e494c45785a3348746d6e58646d383853327a5137306667686b796f4654797a6b3179784d35566f3661486a4354586c7a6133656c78534f737165586476382f52434d6e2b64626b326f33673165437957386d69644c634d6a4e4e74332f41494872586f30756b3256696d364453306b6e6d41695a31697963652f7456532b384d706577687848476c384632726347454d55486f4d394b374a78564f7a53647a54363343623169656348563771627a5575623137595a646c6c443479774841422b746255463171577358476e3251753559473872664d36747933544761366a532f4346745a36634c6536676a764a4e2b38764c434f7671423272586a3036434b58636c6f7175563237316a7878365679314a536e6f6b2f754b71346d6d333771497261574a34484563346b45616c57624f65635635624339724c704f744a4c6357706e655756597748416b36665776566248536f624f463167685a504d596c7732546d6d7234613063532b634e4b745249636b7435497a6b31706871445632305a557352476e652f5535665747756254346636596c754a43766c52704d36645654627961773953316d7a73744f657a385053717369464d584b535a336b6b5a4249373831367162534d77655359314d57336273323859394d565469384f36524170534c533756454a3346566941425072586f716b33716b5a55713846666d52353572317a6336535a6256745a76524b4c667a5547386b75354851656734714734316e56703755704866794b317659724e4b51787a7577434d3136666361565a584d6f6c6e73345a5a4175304d79416b436d6a5237444c2f774367776a7a4632503841757838796a7361584a4b35554d5253573864546c504738377866445757517a6e635245544947352b384d383146723274577257656d66594c75433433454c6847445a786a50537531754e5074726d314e7250625279573547504b5a4d722b5656626651644c68565244706b4551526956416941776655554f44617354537277673164647a7a6254745275376445466c666952684c4b3039736a35386c4e334c4830706c7671643946345a74722b353165627a627032512f7665493079656630727572367a687370706f394e3052524c4d4e736b7951634d44366b446d73576253544e702f325639446b444c77754953564850706a46506c5a627855503565707a3168716c314a59336c314e63795869774676494c4849494134724d73645a6e2f414c5674377953346c756e6a676b6b455a62684f51634375785452726d42664c585470676d4d4649344346392b31506a30434f4f4e74756b7a6875664c4b774548337a783072546b6c62514959756c475773536e345031756536754a64527562374d4d6b5248325670512b317339617a4c2f5631732f454f7147473446757237564d34422b5470785731446f4d6c71376d4453355979787932793349422f5372566a6f5a6c316d52726a5333387553506b79776e6154373548576b3663756f4c4555315562746f48676655354c6933314e7269346d6b69696b4b786d5a3835556436797450755a4c5a64593162796f325465776a664757586b3831326476707768566b743751524b2f4c4479384130306163697876436c6b5669624f35664c34617055444e59694d57374c63383448694f3574307658693153346d695745465a4a474f4e785964425564317175757833556150664f47614e484c422b6d543046656a6632445a344d636d6d526d4d2f655659654433394b71573171736d70744a63364c4b5534566332357742323755765a7473332b743056396b345336314b61347662694b356d4c5a764c5646592b70553571366d76534e6276474c6c3449704c30723538575157776e54394b394b6652644f647478302b493549662f5644377736483669735453394456624b534b62546c446959756f654c356672307257564a69654b6f75587736476234653150556233776664755a4a476e334f45643235414134726c763841684c62767a3743346535664d652b3364636e35704d6741666f61394e6873664954795972566b556e6f715957736d2b30654f33756f70596446575a565975564547666d39656e576f5548596d474a7052636e796e49617a6661745a46394c61356d6b754c734352497932536939632f70566531312b2b74395047747876496c6a625370464c79647077666d503631324633703271446465505969656151625649694a6b6a4870307a697279614b703046724672416258554d30666b34557432794d6574506b6e6372363343316e464846572b726176666133635755567738734e3950484b67796372626b5a592b335555766962555a6f6454744c6531766f6d674448626365594d597763676d75766e74626c55745673744d4d4e77492f4a656351455948543036566d7a66446c6e38695753644a504b597435486b2f4b547a54634a457778464c6d753436486e36366e64326f685765387551676b6b6b6964574f5734474f6653756b6c312f554c3753744c746f4e5163533341637a4e754f344b44576f2b68544f7942744a6d4a6a77464a747a74412f4b706c3053564a6759394c6c557239776941344836556f303564537034716a62534a7771366c4f4c79494c6633434e3570692b3863446a72576e5a2b4b4e556c57537a6d75484b326e6d65624a754f64754f4d2b7653756f47674f7a5a62536d7a6e4a506b4872366a696d726f45384d724d4e4e64784a78495049507a443334704f6e597034756b31384a6c52654a7072564c517858544e397674326a696a425079795a4158382b616b31692b7637433231474732753542634a4e4848356d65636b4b534d2f6a576b756a7973364b64486b51785a4d546551634a394f4f7461647670397a6274766c3034334b5374756b563479547539656c5336624d7672564e4f3669633172373678706c39486232757033442f414f6a4e4e4c76667674364438714e503172574c614e726d61346b6d5a725066354a6270774f6661765333734c5736506d7932694632546153366334394b594e4c73315a73576366334e6e334f712b6c4c32556b7878784e4e4a58696561326d6f3330326e32307632727a784c646c67766e43546268443870492b6c494e6531434b34533568766e6d4531744c4a6478627369314b71534f4f334e64672f67364a6459746269335a4c657968597638415a596f516f4c5949795350725778466f6d6e784e4d593747426650424533377366506e31396161693039676e58704e61524f61384a33456b576c5161767157714d546571424646492b464a5051445063316953366f6453545562753876336a75596e4d5332416b326a626a7274723052394c736e7434596a5a78474f4267305365574d495230774f31526e51744d6535613466546f476d59664e4959686b3153692b786e4776474d334b777a77386e6c2b484e50547269426635567030324f4e593056455461716a414148417032443647706162643747446433634b35627864626b326a534b5343426b45563157443647732f564c4d3363446f464a4a58307a5455576e657769447778644e4a3466676b6e4a5567454574375661754e64307931584d74374639413254584c53614671624949316e75466878397851616b742f42714d3236524d6e75584272723972746f515837767874597863577150634e364145566e53654c7457755352613665452f7742343572617476446472426a4d536b2f5374435054594976757841657648576f6c566c30525373635179612f7144487a4c69534e57374b3242557358684753567431784e4e4965767a4e6b5633417430553849422b46504359364373584b6f2b6739446d7258777662784145786a505135466138476c5730417745475070562f6166536a6161567039673047716f5470584c7758446154346f756f4c6e354c6538414e757850336d376a32354e645132564941566a3767566b6549744347755763614b375133454c695347554437724372703354745941756279474b463570704934346b2b2f497a414b76314e633363435478514c71773039576132754954444a654f703271434439332b393952576c50345a7564547775727942374d5933577349346b507153503556306c746252326b45647642437363534b465656474142546e707259747a62566a68504350772f4f6a335366626d6a6c746252646c724474343364335076782b745750694662794333302b35586751545a5a736469435036313357797147735759764e4c6e694d506d6b7238716b5a3572576c57714b7447645457786d397444786f4969794f7a7963686a77546d7068496a4b63416344697047384e3678386f6c3036385a38664d557432786e3871656d6861736f4b72705639374532372f3456396f71304a4b397a6b615a6b794d725342487932666d492f7058532f43717a7474513054566271377478356a616d355a434f4f4d45412f5373756651645a533352313071396166666e4b327a39507971376f4532702b4566375368754e4231753567764a42634c396b736e637135507a41386653764d7a50337158757659317061533150527269354372355554646a77423048394b3873757645566a71487853745966744f644c68684d6153744a38676c354f6636566231625850465776574e7862365434623162536f796353547a5773676c6b5475717156344a396a574a3462384b3362654b6f726537384e333661624a616b5a6d746e5655624f655749344f6138756868354b4471546c31304f714e52715335547632756e336235674955556256516e37315a7438686e2f65347a7a6c514f6c62463161584b78777866326263797341427538706a6a394b5a6332563438666c5236666342736375496d782b4846646b5a4a5063396546534f6d7067654762695344346977626d62794c797a494c4538475548706e31774b3954685652497546476570396138757650443271334e7549596f4c32326d696b33775478774e6d4e38666539786a69756c384f362f7136367061364c724f6833363352556733385544746248436b355a38414b546a47505569754776443372706e6d34684c6e6252323146464651636755555555414646464641425252525141555555554146464646414252525251415556777669473438523635347947672b473966476978324e6b4c6d3975507363647a7661527352707466706749357a6b64523137562f43766944576450746645302f696a5772612f77424a306d514a42713657766c2b6151755a636f6d515172454a38764f5177354e41486f5646636e64654c39473846364e5a78654b7645305574345977576d65485a4c4e6b2f65386d4d45714f66547439613033385761436d69572b7466326e41326d334569785258455a4c717a7332304467486e64776654427a6a426f4132614b35757a386665467451743955754c5057594c694c53347a4c6476454759526f426b734d44356867486c63317158577561645a57396c5050636255767045697467455a6d6c5a786c5146417a3035504841424a774251426f55567a65752f454477703462764573395731753274376c694638726c32585054634642326a334f4255312f77434e5044656d43336138316931685334746a64777946736f38514b6a634748484a5a6363354f654d3041623146596350692f51727277744a346b7439536a625359343264726e597843676463726a646e50624761703358696a532f425767575238562b4934354c686b35754a49504c6b75446e6c6843674a414752304848656744714b4b34585176456c76722f696a57646568315966384933706c7248617876352b32423543504e6c6c506235564d6135505435756e4f64625266482f685878467173756d615472567664586b5933474e5177334431556b414e373753635541644a5256652f763758533747612b7670307437574664386b726e43715055316865482f482f68627854657957656936784464584d594a4d57783059676453417747346339526d674470614b7a66454773512b482f44326f61764f4e30646e62764d56485673444941397963443861356530385661583444384b6154443479313472716330486e544e4d586c6b64324f577746424f304534484741414b414f366f716a704773366472326d7836687056334664326b6d6473735a34794f4350592b7871707248697a516441756b747457314f437a6c65467031457049477853464a7a30484c41416454327a51427330567a4138653644642b444e5138543658657265324e6c48497a46564b6e656f7a734b73415154786a4f4f6f39617a4c547856706667507770704d506a4c586975707a5165644d30786557523359356241554537515467635941416f41377169754638562f4537526446384566322f70312f62585458524d566964724d6a79393977484943386b39446759484a46574950696e344e6b304c2b313231324c3749736e6b4e4b6265564e3067554d5656537534384548674872514232564663395a2b4f6644576f65486272583754566f70744e74464c547971725a6a774d344b3433412b324d3135336f6e6a545176464d6a2b493957386336687079576430736730754b55323045615a506c7879485a6d5a6d4346694178376a6f4b41505a614b784e4338583642346c307962556449314f4b3574594d2b6134444b59385a507a4b774248414a354655562b492f6842346d6b54573458564c4d337a6845637448434e767a4d417556507a4c6748424f654161414f706f726d34506942345375622b35736f7466736a50617847615946384b69447153782b5849376a4f52337158542f47336876566448764e57737458743562437a5972635438714979505849427836486f653141472f52584e65482f482f414957385533736c6e6f75735133567a47435446736447494855674d42754850555a725a315456624c526245336d6f54655462695249392b786d2b5a3243714d4145387377464146796971567a71316a5a366a5a36664e506937764e336b524b6a4d57436a4c4534427742787963444a41366b5669323369537774344c3357377658785070567a65726132692f5a5369774f443552514544632b5a417833486a30344761414f6e6f727a4c572f6a563457734e66302b77744e59744a6259795039767552444c4b6b61424d71454b44444d7a45636a63414132656356322b6b654a644931325479394e752f5066374e46644565553634696b7a735937674d5a326b34362b314147745257484c347730434451704e626d314b4b5054556d654133447179715856696841794d6e356c4934363434714c516648506872785062584e786f2b7252584b5779373568745a4752656553724148484235785142304e46637434416d766451384e66327a66547a752b717a7958735563726c764a68632f756b556441416758676479547a6e4e575045486a6e777834577559626257745974375365596a6245637332446e424955457176422b593448765142304e46596b58692f515a39486831614855466b734a376b576b4d795275524a4b5838734b6f786b35626a49343735787a56393956736f395968306c702f394f6d68653453454b546d4e5341574a7867637342796565314146796975573144346b6544744b315a644c766645466e46646c697054635756434f7a734156542f41494552585567676a493546414252584665473962575a2f45666966553953386a535776446257676e6d327778525166753263444f41576b446e5055386651616e682f787a345a3856585539726f75727758633847533859444b32415143774441626c7952794d6a6e725142304e46554e5931765466442b6e50714772586b6470616f51444a4a3079656734366d7366532f69483455316e53373755745031694b653273496a4e636b5275476a51416b73554b687363486f4b414f6e6f724f75746330367a67735a70376a617439496b5673416a4d30724d4d67425143656e4a3434414a4f414b64623631703130326f694735446632644959726f3753424734554d526b6a427772416e4761414c3946596433347838503248683233312b3831534b333079356a456b45306f5a5449434e77326f52754a493577426e32726e4c4878625a654c764764704e6f7572732b683656597665586a784f55535353516c593163634835565752734e6a71446a30414f2f6f726c644a2b4a586737584e58476c6164727476506573634c4874645135786e43735141333445315a75664858686d30766e735a39586853375736577a386a617864706d32345656417933333179526b44504a4641485130567747732b4f7643477558692b475538575257307330776975566952775a567951596c6c345643546745354a786b444249596431613274765a576b56726177787732384b4249346f314371696a674141644251424c52584a4c385476426236304e485858376237615838734a746662757a6a627678747a6e746d75746f414b4b7a495045476c58476d336d6f783369437a73704a59376956314b434e6f69512b63676443447a30394b7a347463747454316d4b577931706f72577a73767456355a745a6c5336536a4d54733767464d42484f30594a7a7a786967446f364b356d782b4958685055745373744f73396274356279396a456b454944426d4247345a79506c4a427a687348327162582f472f686e77764b6b4f74617a62576b7a674552456c6e77546748616f4a4139385934507051423046465a73486944537271387337533376456c6d7662593364754542595043436f3335417742387934796563385654314c7862706c6a6f32753668484e3533396a42317555436b596b434274674a77435475586f653941473952586e31683432305477546f576c365a347538526638547034566c75664f38795639386e7a484f416471676b6764414142585558506933514c4f7a734c7934315733533131444a7470693255634243354f376f4146424a4a774b414e6d69755375766964344d73744d6931476658376462615973496946646d6b3273554a56414e785863434e77474f4f74615238582b4856304350585731693058533543516c79306d4659676b454450553542474f764641473352574a346338583642347474355a3943314f4b3857496753425179736d63347972414d4d344f4d6a6e466164396632656d57636c356633554e746252444c797a4f465652376b3041574b4b357652504833685878464a64523656725676635061717a7a4c686c49566572414d426c526b664d4d6a6d6d32507843384a366c71566c70316e7264764c655873596b676841594d774933444f523870494f634e672b3141485455555679326f66456a77647057724c70643734677334727373564b6269796f52326467437166384141694b414f706f726b703779353150346d57756e32317a4e485a61565a4e6458615279454c4c4a4d646b5373423141565a4777654f56505062663162576450304b7a5737314f355733676156495137416e4c7564716a6748756677366e6967433952584f61543439384c613766586c6c706d7457317a505a782b624d457a67494f7242694d4d42786b71546a504e51615438537642327561754e4b30375862656539593457506136687a6a4f4659674276774a6f41367169756231373467654650444e346c6e712b74323176637351504b2b5a32585051734642326a334f425575712b4e76445769615a62616a714f733273467264522b6262735733475a4d413552526c6d47434f6737696744666f72503058584e4d3852615a4871576b586b64336153634c496d527a3645486b4832504e555045666a6277353452386f6137716b646f306f79694647646d47635a437143635541623946556449316e547465303250554e4b75347275306b7a746c6a50475277523748324e564e59385761446f46306c747132707757637277744f6f6c4a41324b51704f65673559414471653261414e6d6973485466476e687a562f44303276575771777961584157453177775a4247526a49594d41523148556478363142346638662b4676464e374a5a364c72454e316378676b7862485269423149444162687a314761414f6c6f726c64542b4a506733523956476d583369433069753978566b4735676848554d7967685439534b667250784538493642667259366e72747242644667706947585a43655276326737426a6e4c596f413665696d5253787a77704c4536764736686b64546b4d447943445744346738632b476643317a4462613172467661547a4562496a6c6d7763344a43676c5634507a48413936414f686f726950432b767858692b4950466c39716f6a305757364d466b5a7038517044434e68646563664f2b3835366b62665944543058782f345638525064783654724e7663795771733879414d684372315942674d714d6a35686b633961414f6b6f726c7641453137714868722b3262366564333157655339696a6c6374354d4c6e3930696a6f414543384475536563357269766952347738552f7744437774463848654474516a733732346961536435496b64435779567a7556694e716f7834483858656744313669764339483861655076446e7851732f43336972564e50314f4b65507a4a6d68695543464e6a746b46555167674c6b354234487655767779385854366871506966787434693136357439442b302f5a375343357557386d49736432304a6e626b4c7341787a7961415062364b35767735342b384c654c5a3374394531654b366e51466a4555654e384447534663416b636a6b565350785538454b4c2f647238436659483875666648497547795268637238352b56767535365541646a52566577763758564c43432b735a306e745a304478536f654755393638792b4d2f6a7256664379614c7075673330646c7146394f57656552597969524435634e764241425a6763342f674e4148717446654f65454c33787a65654a4c63366a385376432b70616241444e65572b6e7a51764959774f7645517775536f4a794d413132317438542f4256357245656b322f6947316c764a57437871675971374534414434326b6b6e706e4e4148573056354434352b4d79654866484e6c6f4f6e79575832614e3158564c6d35676c6679636b5a436243435346796568475342324e64724c3853504345477258656d54363344446432616237685a6b64466a487939574b68632f4d6f786e4f546a725142314e4663544c38586641634a74784a34696842754147514347513442786a6468666b366a37324b317645486a445364413849792b4935626c4a624c7967384452664f4a6d596649713439546a6e7036346f41364369764d66686e3855683471304455722f784264615a5a7a5755674d69784a4a464846455238705a6e4a584a4962414237564d32752b44506950346c74644e587848426657317157663841736777736958556f79517a4d77416c565143516f794f357a785142365252584b367a385276422f687a5555307a5574637472653679464d4b717a2b583077483267684f6f2b396a69716c3138527644562f7743433952316e547645517462574d6d31476f47796b66795a6d41326b52736f4c6b626763597836304164725258486152346b736442384932656f654a504745462b7434504f67767037646251796f77796f574963395062504e58644c2b4948685457644c7564537364637458744c55417a7953457865566e4f4e7763416a4f446a6a6e4641485355567a65672b5076433369652b6b737448316d43367559383569415a4749485571474133443347525852737756537a4542514d6b6e745141744665592b4d76692f345a7466432b74706f6d75775847725177655841734f667676386f5a47493276747a754f4363597050414f7651654650686c702b71654d76455568754e513358537666584c79755550335651484c48355144685231616744302b69735477353475304478626253543646715556346b52416b43686c5a4d35787556674747634847527a69747567416f6f6f6f414b4b4b4b4143696969674170475949705a69416f47535432464c545a49306c6a614f5246654e77565a574751775055455541654861646166444c78596d6f654a764674397030326f6168647979527848554753574f4254736958796b634864735148474d3562384b307261307657384e2b4750437373552f6c586c394a664c6254676d534c54344738794b4e73386735386c63486e6b6a74783656592b466644756c334975645030445337536344416c74374f4f4e67507141443246614a73375533713370746f54647247596c6e4b4465454a424b6875754351446a326f413848384d3331315070636d722f384c64307252377a554a476e764c53665472637a52796b344b457950764958473064734159347271744b384f51485866446668695334585537585449357463764a704c5952724c4e4b374348354f6938744b7758747448537652446f4f6a4855447142306d774e365267334a746b387a487075786d725357647246647a58636474436c7a4d71724c4d71415049467a74444e314947546a50544a6f413875314e52716d6a66457a784346486c477a6c30793249474d70424577632b2b5a4763663842465457647871467a3450752f47346766665a615179614a624f4d374645667a546c522f453541782f7341644e7872305a644c30394e506b30394c433157796b446837595171493244456c73726a427953632b75545670555655434b6f43675943676341656c4148684f69524f6d675157316a385a744b534737544a7476374b746e6d6b61546b68675738786e4a4a7a7547346b2b74644a3450744e50304f48587645647869617a304b32476c5764773859336554616f664e59642f6d6c4c3950376f72304f33304852374f386b764c6253624743366b77586e6974305632783079774754556e396b615a2f5a7236642f5a317039686b3362376279463870747833484b3477636b6b6e6a716141504d625853356a346538482b46726c4d58577233683166553043384b697435377237447a47695476782b64542b4866475868797a2f34535078447247713259316c72793454374d3867382b4b4345737363614a6e6342685378774f53784e656d665937553369336e32614837556b5a695766797876564351536f62726a494278303471724a346630575753376b6b3069776437304158544e6249544f4230446e487a666a6d6744796d45576d6b72344c303378546332396e61583575645a762f744c42497072736c58574e79547477706b7a6739305838657045746c34782b49576a33326b74466361666f4d55306b6c2f434130636b73693746695278773242755a736344354b374f2f3076543956747673326f32467265572b51664b7549566b584936634d434b735251785738537851787048476f7771496f414139674b414f4b38582b4e4730727846616548726655744d306d61653161376b314456442b36525177554b6f4c4b47636e63636268674c304f61787642456439726e784431485637335834746274394d7446747261346774466769447a5964777543533443716833456b665078586f313570576e61684a444a653246726379514e7569616146584d5a39564a48422b6c5357396e61326a544e6257304d4c547965624b5930436d523841626d78314f41426b2b676f41355078762f414d545856504476686865567662775864304d5a2f7742487438534850316679682b4a726b726a346a585774365465366e5a2b4d4e47304743507a2f41436249327775623072475747356b5a78676b4c7578744f416563313630624f314e3674366261453361786d4a5a796733684351536f6272676b413439717148772f6f7243364461525945586e2f487944624a2b2f7744392f6a35756e656744482b48576b7a3652344730364f3879623235553364305341443573704c734d446759335934394b3566535046586865547831346f3133564e5730364b35744a5630757a6a6d64524d4934686c79696e356d33534f772b58727446656b583633523032355777386f58666c4d49504e4a56412b506c795143514d34364131692b472f42326d36486f326c775457566e6361685a514247764443706b6151387577596a64387a456e72336f4134534c533769376b302f544c71324e7650346d3174395a753755714d77326b4f316c527577596c595165764c4e2b44626a346a585774365465366e5a2b4d4e47304743507a2f41436249327775623072475747356b5a78676b4c7578744f416563313630624f314e3674366261453361786d4a5a796733684351536f6272676b413439717148772f6f7243364461525945586e2f487944624a2b2f7744392f6a35756e6567447954523572445264523846364e3469314b327370497261627844654e64756b4b7663796b7169354f4642426554676633425739656550706457316a564c4b77385561486f454e6864473058375a4835317a6373417557534d757679354a41774733597a586f4e396f2b6c366d304c582b6d3264323044426f6a504173686a4937726b634836556830625332764a4c7736625a6d366c5479354a6a41753931366253324d6b63394b415049744f6976706668704e353934393171766a5455786269354d43786c34474f7776735868663345625038413843373176616672666879782b4957764e72757032466c4c704b5157576d77586379782b56443561757a494750336d4c594a484f4655563645756c36656773776c6a61714c495974514956486b4462742b546a35666c3434787878544c6e52744c766232473975394e73353771482f565479774b7a782f3772455a483455416556616c484a715676722b6f57734c32783859337476704e6b7069324f397567496b6e49503935504e59452f77684f4f613666786270316e6353654776424e706177783256316369653567534d624261322b48494936594c2b5576766b313230746e6133453845383174444a4e627357686b644157694a4743564a3542494a484861673264716231623032304a75316a4d537a6c42764345676c51335842494278375541635842613275732f46473775354949546165484c4a4c61456d4d595765583533492f7742324d494f4f6d3831782b6b2b4d4874623659773668706d6b5848694f53625676742b7144624648624b34686852564c4b47646c586467734d636e4850487355656e325553334b78326b434c644d5875417359486e4d5141532f487a4567415a505956424a6f576b5378326b636d6c574c78325941746c613351694141594777592b586a6a6967447a3377524866613538513952316539312b4c573766544c5262613275494c52594967383248634c676b7541716f64784a487a385674664671356a732f6837633355784969687537535279426b34467847542f414372734c657a746252706d74726147467035504e6c4d614254492b414e7a59366e414179665155747a6132393544354e3162785478626c665a4b6759626c494b6e423767674565684641484133747866615434583176786a65784f6d75616843494c433266356a624978327751344838525a677a2b35786e43696f5974417457385165465042786953657738503250322b365630444b3875504b697a6e6a4a4a6c66366756364a63326472657247743162517a72484973714356417756314f56595a3645486b4874516c6e61785863313348625170637a4b71797a4b674479426337517a6453426b347a307961414f42384c61396f326f2f4566784e504c71566e4866787a7070467061504b71536d4f45466e4b71546b67794d2f546a3561774e4b3863615a4234563855613361366862792b496457764a6a6257515037355343494c64576a2b386f3451354f507664713957476a365775706e557870746d4e514b3754644342664e49394e2b4d342f476c66534e4e6b2b2f70396f3337315a766d68552f76464f5666703934486b48714b41504e4638514477334c483449734e643062516b30577874784e65616f4d744f374b535247685a4165674a4f5479324d56677770714f706166723839787178314b3938513668463465744c73576977426f464a4d7a42423041426c475353666b4665315336567031786678333031686179586b513278334477715a45486f4749794b62466f2b6d51665a2f4a3036306a2b7a4f386b477942523554506e63793448796b354f534f7554363041534d49394e3077694750393162512f4a476f374b7641483556354c6f336a4c527244345a584f6f572b71574e35347231614a355a49566b447a5064536e61694d7564775653565541344141466578317965706544626534317652354c4779303630302b337647763735496f676a3345775569504956634e686a754a4a367176587341637265506f33686e7846344a384c366c7146745a574f6a574c3337535854694e4a5a6c58796b7778774363744b32427a7750786f36397130397a6f2f6a5078665a334c32384d7373476a5731347354466f4c5a48437a5367444466666b6b395075697658706253326e6c6a6c6d7434704a492f754f36416c666f5430707346685a32746f62573374494962596c6959593477715a596b74774f4f53535436356f41385a6830567455307948777a44385839497572433655573636665a615661376e5448335145597370783337597a32723033786a71722b486642642f6332677a637043494c524d5a33544f516b592f37365a61307248524e4a30755352395030757974486b5973375739756b5a596e715467444a717a63326472657247743162517a72484973714356417756314f56595a3645486b487451423474725669644b38536144345a50693630384e572b6a6154484c6154336c70484c4863544d5757522f33684342686759372f41444e6a71613676775670556c39346c6b312b363863322f6969573174327445613273346f5569337372484c526b686a386f34375a3936376a55644a30335634524471576e326c3745446b4a6377724976354d4456694333677459684662777877787230534e516f4834436744675045586a6d525046563934667464643062516673454d556b31337167334756704153466951736749414179636e6c7359726d4c53327662377766385276454f6f36702f616b6b74705059573933396c573344785252746e43446f4e374d755353547372312b5853744f754c2b4f2b6d734c5753386947324f3465465449673941784752574c7250686c74526a737449746f37533038502b5930742f42457578702b64776a43714141724d53584f636e706a356961414d487779386c7870432b4e645874706f594c4c54694e4f74484757696857504c796c526e3533787831776f483934697559737459734c3734573265673666716c74646135346c6e4176467433447445317935655973423933624876413366336539653068464362416f3259787478786a30716f756c61636b6b456936666171397578654668436f4d6245594a5534344a484249375541656636587266683631386661374a724f705756724e70586b3664706c7263537172527862465a6d6a556e4a4c4d635a55644655566c32586978744873593957575779744c7a7868715538304e35714755677472614e64736250794d6b6f7159556b5a4c6e3078587163756a6158506674665336625a79586a522b53317738436d51702f644c597a7439756c4a4e6f756c584e6844597a365a5a7932634730525737774b30636533377531534d4448624853674479622b30376d39385a77616c7158697530317a536441735a74566c4e6a5a4c4844473444496744686d4c6b2f4f6341344254317259744e512f774346652f44697831533574725a645a316d3652726d61596249316e75484c733072446f69416e716634514d38357230475452644b6d57345758544c4e31755931696e44514b524b6935327133487a415a4f41656d616e75374b307637523757387459626d3263596147614d4f6a443342344e41486b4e354e715869767850346630642f47656d61315a533366326d3774744d736b45534a4469544a6c3375633774693442422b666d765166472f696b65457444697641734a6c754c714b30696134597244477a6e37386a446f6967456e3659794d31737736587039744e464e4259327355735552686a654f46565a497951536f49484335414f4f6e4653586c6c6136686176613374744463323867773855305964474875447761415049627962557646666966772f6f372b4d394d3171796c752f744e3362615a5a49496b5348456d544c766335336246774344382f4e65793155683076543761614b614378745970596f6a444738634b7179526b676c51514f46794163644f4b74304165512b45495a50456c7871326b534936614c702b75336c787144747774784a3578614f483355634f332f41527a6b3031354a74533845583131486c62337878713332654537655674536467507469336a5a7565376668587245566a5a773238747646617752777973375352704741726c6953784936456b6b6b2b756159756c36656773776c6a61714c495974514956486b4462742b546a35666c34347878785142786d6f326c732f6a6e516447734c574f4f7a385032636d705046456755426944464367782f77427444676633522b4e5434616549664464786f4e724e4c72476e7a2b4964596b6161386a3831544f3872456e5a737a75327141464136425672304e4c4f3169753572754f326853356d56566c6d5641486b433532686d366b444a786e706b314262364e70646e657a58747470746e42647a2f414f746e696756586b2f336d417966786f413835302f7864346530377862347731652f314331676d734e756e57746d53466c386d42433762492f76454632666b4447464831716863784e59654476446d6b36696a4766555a356466316c55544a3875504e7a494d442f624d5341636e2b64657258476b366264724f747a7039704d7477753259535171776b486f3252794f4f39537459326a5861336257734275566a4d496d4d593368435153753772744a414f4f6e4641486a4f73654f645a316a77692b6f32506a48524c57357534464d4f6a574e7374316341755656596e5a6e344a4c42535367414a726f76445768576e2f435751326369527a575068485449724b4a355542483271514235484250634971636a7076503464314634663057434c796f6449734934784d4a39695779416559446b5067443777504f657561745157647261744f317662517847346b4d73786a6a432b593541425a73645467415a506f4b41504a4e5438527670657336687276672f77415461447255327154516b61512f3779356334564e6b5a52747747426e444441354a3731573161346c756669547242506a6a54764363326d724842613239335a5179426f3355534e496a537346425a793264764a32726e6f4b3963744e44306d77764a62757a30757974726d622f41466b304e75694f2f774257417961572f774246307256586a6655644d7372783469476a61346757516f5230493341346f413558774270425736314c78424e347169385354336f6a742f746b4e6f6b4559575064774e6849626c7a6b2b324f316333342b75707276346b5764684e34747450444d566a596936744a62793053614f6152325a58493877684179674b42332b5a73645458725563615252684930564558674b6f7742565855644a30335634524471576e326c3745446b4a6377724976354d445142347871566863616b4449336a7533385433326f376443686530736f6f6c68535a6730784c526b6869496f3350505450754d3978643246726366454877376f566c627877324f6857723668496b614256566d486c51722f414f6a47782f736a3865775853395052725a6c734c554e616b74626b51726d496b625356342b5849343437564b6c6e61785863313348625170637a4b71797a4b674479426337517a6453426b347a307961414f572b4a2b70584f6c2f442f555a37573465315a7a48444a64496a4d62654e3356486b41586e49556b6a486576506f39484f6f36544634626a2b4d476b584f6e3343434157466e706472755a4d636742474c4c783337597a327232353057524752314449777756595a4246554c54514e4773424d4c50534c4333452b664e386d3252504d7a313359484f666567446e506876443970306d2b38514d70446131655063525a47434c646352776a2f766841662b42477333786a724f687a664566772f6f327433396a62576468444a71736f7658564565582f56776a4c635a4736527364666c4272304b33743462533269747261474f47434a516b635561685652514d41414467414474584d36623451696b3148584c2f583757777635745176524a4572782b6173554d6168596c2b636452686d4f4267466a31366b41345858664673592b494e6a724f6e7a574674615846752b6d574f703378323278782b386c6c4c5a473552694e464756334d7a6334464f74623266566648316c64367034777364583066524c575455357062537a534b43422f6d6a5839344759766e4c6e673447797656377653744f314332533276624331755945495a49706f566456493645416a4178537070746a464c4e4c485a57795354497363724c456f4d69726e617248484947546748706b3041655636627246316f33694b437a384f362f6f58695379316656476b754c574c4433555563684c4f374f6a456255486468307750537276684c7852345973727a7842716d736172703974712f396f54576f74355a46575747434a746b6355614835735947634b4f5759313648702b6a615870506d66326270746e5a6561323654374e417365382b7032675a4e423062537a716639706e54624d332b336239713868664e783662385a782b4e414850384177393075617930692f774252754c55326375733338756f2f5a575459304b506749724c3262616f4c65354e63626366456136317653623355375078686f326777522b66354e6b6259584e36566a4c4463794d347753463359326e41504f613967724f50682f52574630473069774976502b506b473254392f2f763841487a644f39414750384f744a6e306a774e703064356b3374797075376f6b41487a5a535859594841787578783656792b6b654b7643386e6a72785272757161747030567a61537270646e484d3669595278444c6c46507a4e756b6468387658614b39497631756a70747974683551752f4b5951656153714238664c6b6745675a7830427246384e2b44744e305052744c676d73724f3431437967434e65474654493068356467784737356d4a505876514235395a65494c76772f7155316c4a63365a6f462f7743494a4a745a6c6e3158694f32694c4c48464546334b476c4b72754933634850584e533642666566347831627844722f69793276744f307530537a74395153325332686a6b754e704955676b734141683345342b6576564c7a53744f314353475339734c57356b6762644530304b75597a3671534f44394b50374b303779726d4c3742612b5863755a4a30386c63537351415759592b5934414754364367447869507844716e6866523574463066564e4238546156623662647a504e615237704c6259685a476d4b73794e75624135775479657872666a316e777a622f44636144346575374c576456314331386c62654a316d6c6e6e6c47476c6d41354142597378626f41613949734e4b303753725932326e5746725a32357a6d4b3368574e66795541553277306653394c6156745030327a74476d59744962654259793550556e4147545142573071785877333454733742533077303679574948484c3745782b754b38303058786a6f2b6e2f41417a75645274745573727a78587173545479524a49727a4e63796e61694d6f4f3556557369674841414172324773325077396f6b49595261507036423578637346746b475a51636951386665423533646141504974617354705869545166444a3858576e6871333062535935625365387449355937695a697979502b3849514d4d444866356d78314e52366c5958477041794e3437742f453939714f33516f58744c4b4b4a59556d594e4d53305a4959694b4e7a7a307a376a50732b6f3654707572776948557450744c324948495335685752667959476c5853395052725a6c734c554e616b74626b51726d496b625356342b58493434375541545252513264716b555945634d4b4256485a5641782f495638332b47664465726646587876346b385661663467754e45524c6e79344c71336a6265366b454b7644715268465450317236546b6a53574e6f354556343342566c595a444139515256585464493033527264726653394f744c47466d3374486177724570624147534641476341632b31414869336a7277767058777a3841367666706433576f363972574c45333138336d5346582b2b4236445972636e4a7a6a6e6f4b79644438565858684f54773934417358303754626b524c64332b70616c4876454530735a6c32714d675a4373716735354a78396666645430585374616a6a6a3158544c4f2f534d376b57366757554b6655426763556b2b68365463337776726a53374b573745666c436553335270416e393363526e484a34393641506d2f7764716c7a41336a6a346933743662716532747a61576c3230416a453830684371785265687745795039723861787237524c585376684a6f5541302b4758582f4142466647614a3369426c5342666c5656622b454d53683638376a2b48314576686277386d6d76707936447061324c79656139734c4f4d524d2f54635678676e67633437552b5477356f6372326279614e707a7659685674476131516d33433871492b506c786759786a474b41447735704565676547394e30694d376c7337644964782f6949484a2f45354e664f2f6954572f436e69543435333876693636326144703862576b5943532f7647546a61664c473737374f325267634438667075734754775234536c6b61535477766f6a75354c4d7a616645535365704a323041655658326a2f444735384a5432586866563766516a72694d713331314a4d7363717775685a435a6d4741537736646348726a464e2b436d6f363571463763654862324778762f442b696c6842665178664b4a3163624e6a3862675275624f4d34786e47634832462f444f67767073656e506f6d6d7459786b6c4c59326b5a69556b354f4678676338394f7461454676446177724462777877784c393149314371506f425142382b66447a784470757166456e7872343531433669483253326b6c746f69634f3849794e7755386b68493142782f6639785662774a61365a6265426646587849385536506161704c4e634d3045567a43726f7a6c7345674548416153514b5432323137352f776a4f673737702f3745303364646a62636e374a486d59646350783833343150466f2b6c776155644c6830327a6a303471796d30534252455132537732415977636e50484f6141506d48785a3476316a7852344a3071335455644d5264557533526443302b3055474c612b464c755353725a323448475132656c6474385a356b384966436a51664346753254507369636b5a334a43464c4850596c79682f4f76587834573850427256686f4f6c687251673278466e486d45673542546a356565654b74616a704f6e617662694455395074623245486349376d465a464239634d434b41506e58783544462f6250676e77654e5a74724c773342597853783669794c4e424a4c38774d6835434f4d6744726a357a6e673172334f6c7877613166654d6b386557336962567445307957574e624f786a534f50354757506330626c6543354f4d5a2b5539414b39787539473072554c4a4c4b3930327a756252414173453043756967644d4b526764425764712b6c6168613644396b3849773654597a7177416a75494d514d6742797056427744774f4f676f412b65644c3133534e422b422b727a4a714e7463654a74666e654764476b447a7247577732345a33414651375a5055754f745436376f736f306234662f4465454d747a654d756f58347838794e4b53416339506c55796639386976535966685866613771576e58506931394569736246326c5853644674576974354a4363376e4c63746e485048715058506f7a614a704c36716d717470646b326f6f4e71585a74304d796a4247412b4d6a676b6465686f41384c38493668704576786c312b2f3857336c6e597470494e727073463636784a476973565862753768522f7743506b30337839714f6b2b4a5069763459677537694732384e58434a647933457838754b35327449417a46766c4949554b43657a6e3172335738304c534e51753437753930717875626d4c2f567a5457364f366652694d696c3148524e4a3165474f4855394c7372324b4d35524c6d335352565054674d44696744794c777661532b4e766a6864654c37524e7567365368747257345664717a73454b595831487a4f636a747472552f6142317538307677444661576a74474e517552424d366b672b57464c46636a31494150714d6a7658717355556345537878527248476f77716f4d4166515644663664593672614e61366a5a573935624d51544463524c49684936634d434b41506e62786c46705771772b4266687a345a7537653674697979334d3171797543352b55767548476365617848307176595354366e3857746275623378625a65467276536d4e72594e65327363697243704b4b71435568564958427a314f343436313945522b487445697634622b50523950533868585a46634c62494a493177526857786b444249774f78706237772f6f7570334d647a71476b5746336352484d637478624a497966516b5a4851666c51427776776d384b574f6a76726573326e69442b33473147347739326c734959325a5378597141784247357a794d446a697653366248476b5559534e4652463443714d41553667416f6f6f6f414b4b4b4b4143676b415a50416f72463857324e787133686255394b7362714f33766232326b68675a33322f4d5650707a3963644b414f51313734352b43394376487452506461684c4732312f734d515a56502b387a4b442b424e6470346338526166347130574856394c6552375359734561534d6f53564a4234507544587a337075766550666770594a5961706f566e4c70457477324759715449534f697949654f6d5275556e727836626d7166456a5566455869655852644473396674644173304b33593850325165374d707a6b62756b59335a35484a494a357a7741652b305638386152343738582b4350436e6947393175505635497a504862364b757552734a537a47516b73534d73416742504f4d6741455a716e343062785a6f506876514c6d62786672386e696658324265306a75764c686a54436b4b71726a613254474d676a507a65394148306e525868743571477333767864384f2b44725458645346706f7470472b707a4a644f706e5a5644755a446e3577666b48503934302f34652b4b3951316e784234303861366871643833682b775354374e62475a2f4a436a4c4169504f4e7752463764584e4148743959555869587a76466375676a51396155524c754f6f7661376252766c42777368504a3578774f6f50706d76465042362b4d2f45486772586646642f77434e372f544e4f5a354a485656615a764c51466d454a4c2f75686c6942744763715078794e4338663841696e5276426b312f2f614e39666131346776546136616c314f307151496d4e38694b784979576b436748303767594942372f343238567765432f436c33726b384275504a32716b4166595a475a67414d344f4f7554776541616e384a363350346b384c3666724e7859697861386a383159424c356d3153666c4f37614f6f77656e657642504833682f564a504558686a775263654a4e5631613831435662712b57356b44787775784b376f754d716f587a5474795267446975313864654b64433233576d324869487848482f41475662624a62627735487843564f4d7953347741754f5147474144394b41505836352f787434726738462b464c76584a3444636554745649412b77794d7a41415a776364636e6738413134586f33785138576158384d345565366b76745a31612b61313079573477377047717172506b2f654f39676f3364386e6b4446486a37772f716b6e694c777834497550456d7136746561684b7431664c637942343458596c6430584756554c3570323549774278514237333454317566784a3458302f57626978466931354835717743587a4e716b2f4b643230645267394f39592b672f456e527645506a50557643317062583658326e6d55537953786f49323874776a6253474a366e6a494846646242424862573855454b68596f6b43496f3741444146664b6476347450677a34722b4f4e52686a4d6c374c4c6657316f6d33494d7a5841326b2b777754373478336f4139383144346d61545a2b4b376e7733626166716d703668613237547a4c595170494643726b7279344a626f4d41645741726f50442b744858394c4638644c314c5463755645476f77434b586a767479634139712b666464302f565068373446302b326775626d4c786c346f76424e6454524f556d5251632b5748556a423375756565535737563133696e7848706476705a306850466e697134753948736c6a7650374479372b61764453545445656f352b5959776670514237525844654576694c2f776c336a48584e47744e4b38757930706d5272343347664d594d5647453238413757494f376f50666a687642506a5858374834496137346931752f6c7558695a3464506c75506e6374745646796572446565703534504e644838422f44353062346452586b71465a39546c61354f656f5437716668676276384167564148703946497a42464c4d51464179536577727955573270363734473172785866654c746130797a7557754c36306973354247496f463469424a4262424342734b567a765047545142363352586c313772715833685453644d3150562f456b65754a61525066703465674c7a68326a427849796f77516e4f635a4235394b784e4a3172586272774e6657566e71657369545664595853394a6e31544276494677504f5a797042796f5758766b4666576744327969764f746157303056726d7a76764633696935314f386a5268447079695357474e53334b52704764674f53437a5a4a326a3575445662345858642f6361357231757437346a6e306d304555534a34687839705763376d62334337646877636665484641487031466350342f3171393032353036313833553748535a316b613831485462627a705979754e7166646261446c695777656c632b574e74344c675477373478316e56313852584d4e6c595846334e766c743873336e4f72375659454948362f644b6967443169697552767271357650694a70476a57747a5048613664615066586f5279504d4c6675345563352b596636787348756f4e542b4f2f464533686251566e73375357383147366d5732744c654b4a70575a79435364673562617173324d6a4f4d5a476330416450525868385772612f632b494e5075374166455a4c7837714a6267617259787861654964344d6d354647452b584f443139367461684a726d6f6644375666466e2f41416b3273576a58313230326c57646f3451625764593764446b46734e6857494255664f63696744326169764f62323031797938632b4534333853366863336c7a356a5874716f564c5479593478765949426e4a636f41575a6a3878785261326570654d64573853333538533670706d6a527a2f41474332537864597a6945455353426d445979374d4d7141666b484f4b415052714b3863384a3376695078496e6876536b312b2b6946726133462f6333754d797a517449305673477a775356335038414d472b3670497a565334385233375461686f73422b49463570567063535172714f6c57697a54334d6d342b59544f51417171784b71714b4d4263353577414432366976486450317a7856703367397a4d6e6956624b54566649533676724d53616862326e6c416c7967423348666b426944314a394b7461567157673231686358747038515046476f5258786c746c746e426e75556d42557359342f4b334b5642484733614e3439714150574b4b386b38435864362f7741524a62477a314878644e7030566b3039326e694d4145737a4b497a4543417742772f5944355458726441486c733378686c692b306638553657386e58786f6e46353935766d2b6366752f77445a2b37373961302f47587865385065423962585364527474526e75444373784e72476a4b6f4a49414f35314f654d394f6846626b3367667779797a744c7071625a4e51477179487a58482b6b6a2f6c7039376a76774f4f76466542654776466d73585078533176786e706e684f2f774266467849397662746271364a43704b68437a6247776469714f6364545142374c34522b4c6e6866786c637a32746d39316133454d6254474f3869436b78726a63774b6c68786e706e504234726d762b476a76422f2f41454464632f3738512f384178327549385436527248682f525045666a62784a4646593678722b6450744c434d6868456b6e3379784847664c516763392b6554676442344c3845664658524e4373496244784a70576d61564a74754a494447725378712b47624a61452f4d422f74593436346f4139427676697234583076772f703272366a635457673143455432396f385961646b50516c564a414248636e484e554e432b4e506866784262616a4a6151366b6b6c686153336b734d7343686d696a584c4653474b2b7779527a5845654c2f432f6a335276695664654f6644317462617262794c756a4a5a5832522b5742676f5344324a42545054337857336f6e6a6958782f384143627866715637706346726657756d334e753830492b5751474173635a3548626a4a376330416431344e386436563433305735316254347271337472615a6f5a507461716842436869666c596a47474866317241583478364c6461447132713666702b6f5478324d6f746f53364b71336b37484352786c537a4850422b3777446e4861764466426d73616e715067302b414e425676742b73366b7a584d6d4f4937627930427966513462507370486356394a614e3443304852744f3061306a74544b644a4447336b5a32483778686870436f4f307566556a497a786967436834613862366c346938517a61582f774149384c654f7a685533397a39733372627a734d2b51506b473967434d6b4541632b326531716870476a61666f4f6e7259366262694333444d3547356e4c4d7879575a6d4a4c456e75535456713575594c4b316c7572715a4962654643386b736a425652514d6b6b6e6f414b414a614b38503862363873336e36726f6d7365505463794f4573684241597450456a4861674f394644495467636b6e6d75755a4e5938522b4d7236325858377a5472445237434f32756e7339716d57356b416b636a63436f326f4535326e473834496f41372b575249596e6c6b594c47696c6d59394142314e516162714e7271326d32326f324d686c74626d4d537775554b376c4979446867434f5055563548496453316a3450615a70633272616a4c636137715174625364355033306c713072484d6a64534443724d63396541665172715433506748566c3850364e662b4e4e5a382b32575336654e6674386c6c45437978724568415243784279787a67494d446e4941505a614b384e7364613856616250714e7a6f397634356d7376737061556549724d4f3653744c474e30494135326f5a4732446a6a70585765435937445664626d31445450472f6950554a6256674c375439534956515755686633526a585a7a7a6c65754b4150527178746531372b78726a5362574b312b30334f705871327363666d624e7137537a794534504371704f4f35774f4f745a6d753668714771654a497643326b336a324a467439727637364e51306b4d5a6261694a754258633544636b484155385a4949345a662b4b523852613571306d7061787230486832305331733031435554537665584a556d4e57433550486c446f63627a394b41505a614b3846315058664532705169387434506958447271722b346a6a3078494c41534564476a354a5450646978485776624e51314b4c52394475645331427473567062744e4f56476546584a7750776f417655567745486833582f41424a70734774617034713162534c6d5a52635257576e76476b4e717047516a35556d5567486b6b344a7a674159714b317374542b49476b50724d2f695456644630756373624744545a46686279564a4379794f564c45746a64674541416764636d6744305369764950444f71654a5046332f434d3665327433567339765a7a33393765517868586e6a5a326974736735584c4c756642424879676b552f5437625533384e2b4c353772786e7269614a5958633474376f4d763270684576377a393456507937397741554b666c344f445142363552586b56333430312f544e46385061453974726435716b756e4a64617063365a5a4336754941774951414835517849624c484f4e765135794d6d7a3851362f6f78316137737834304e6b316a494558785041415465794f695143496a4847574f564741425142376e52586d4b3656726569654c5042746933697256722b366b5351586b4d726a7947686a6a4739794d5a4c467967797a4d6373635537784a34566e31727846644a70506937785444654f776564626655764c744c4a63446a61462b39675a43413550556b64614150544b4b3856385336747061615373396c346c2b49463342703975712f61644b556d43516f4d4752355367446a504c4863523656767a5866694b39304c77526f4c616c4e6261337141533776376c52387951784b48634861523159786f66584a36383041656c30566c364a6f386d6b5258416d31625564546c6e6c38317062325253562b5544616971717171385a7742314a727a5737315961333469657738512b4a66456e687539612f6133302b3274454d45456742496a506d2b5752495747446773426b34785142363952586a4770654c395376376936306859764730326d324a2b786a554e423039576b753555473256326c4977767a41674242327a6e6b41532b443955385561785063654630764e6373596b63334a767458675558384e706856524d4545463363532f4d636b4b68506359415059714b387730637a2b486645336953367550456574616a6f76682b782b635838346b7a4f3438312f75714e3231416d4d6734336b4430715735754e627450686e6f39684e6633513851362f63527847627a474d6b44544d5a4a4e707a386f6a6a336763386252514236565258425452366e34693864366a6157577533756d36586f396e4861797462344c53547959646a6c38726c5543444a556b627a6767317966696256744a5853786357506954346758567670397546467a70594c517555474449387851422f566a75783655416530305635665954654a4e6376504375697a6178645756336136562f614f725477714e374e494e6b53482b456e37376368686c41635654302b32314e2f4466692b6536385a36346d695746334f4c6536444c397159524c2b382f65465438752f634146436e356544673041657555563546642b4e4e66307a5266443268506261336561704c7079585771584f6d5751757269414d434541422b554d534779787a6a62304f636a4a732f454f76364d645775374d654e445a4e59794246385477414533736a6f6b41694978786c6a6c5267415541653531546b3157796931694453586d7866547776504845464a7a4770415a69514d446c674f547a6e69765056307257394538576544624676465772583931496b6776495a58486b4e4448474e376b5979574c6c426c6d59355934726d39623078627966786834336b3137784c43494c762b7a395069303238387070796d31504c47464a326d5a6d4141487165657441487556466542366a725869612f746b75726148346d51363469596752644e534778456d414d4d6879537565376c6a33723366644b6c72755a513879706b71764757783048343041533056346b4e6568314e5464363934793855614472384e764e636e546f347649675149705a6c5254486958414864695431717465654a3963312b315336766244346c574e31392b474452394f574f335138375153666d6c48544a4f4166376f365541653755566c654748314b547772704c367a752f744e72534d3357355170387a614e32514f4163396134363173395338593674346c767a346c3154544e476a6e2b775779574c72476351676953514d776247585a686c5144386735785142364e52586a6e684f3938522b4a45384e36556d763330517462573476376d39786d57614670476974673265435375352f6d446664556b5a7158575045642f704f707a2b4672412b4d7452744c506d383150543752627536616151372f4c3373416b617172446f70366744626a6b4139656f72785477787266695961784a3463734a6645734d576f4266737478346d6742754c56464447655666372b4d784b6f626a4c44734344304e6c704e397033784c744e505478567231396157316f2b6f36676c35634b55334e2b376958355658436e393432337038675031415053714b3831746645576f572f77414e746238564e50504c63367063535070634d684a434b37434b3256567a77443872487079784a785259324772367034696d3070504532703274686f4f6d7732643163525362704c693563423363732b51534643636c5352764f434b415052355a4568696557526773614b575a6a30414855314270756f327572616262616a59794757317559784c4335517275556a494f474149343952586b6368314c57506739706d6c7a6174714d74787275704331744a336b2f66535772537363794e31494d4b73787a313442394472584f6c6154344e745a74482f77434576385a584e316378786d4f4343593364784245755143697247524770365a492f68774477614150554b4b385330507848716d6c615a34766d744c3378486357746e44466132556669414133503236516b4b4230626238305a7763634e58555432532b46724330585866476e6943353143577a4e72444261664f3773416d365249776a4d376a48336e4c593348706b554164627146397168316931302f544c56516e45313364334562474b4f504a47784d45627047776568776f3562716f6259727954774a6433722f4142456c73625055664630326e52575454336165497741537a4d6f6a4d5149444148443967506c4e656e61767131706f6d6d546168664f56686a774d4b705a6e596e4371716a6b7353514142314a6f414c2f5566734d746c474c4b377554645841677a62783768446b453735446b6255474d5a395342673572473172783170576a3363316a4642714771333841426c744e4b7457755a49736a49333765467a3244455669654a74583172524e463148786e6653477869744e4f614b303076655a414a704755493832333553774f3163444947572b593534367277316f5550683751344c4a506e6d78356c7a4f523830387a63764978376b6e4a6f4169384d654c4e4d3857576b3031674c694b57336679726d32756f54464c412b4d375755392f706b646561334b38626c6d6d754c72785271326a584d304d33696e563762534c436545344f7946646b737945644d425a734e3671507836767846725a732f46317043627534683033524e4f6d315855764c647633677755695276373263534e6a6e4a5555416470645843326c724e634f6b72724568637246475a4849417a68565545736659636d714f695461746332545847727751573073726c6f7261504a6147503841685752736b4d2f633763415a774d3479664862337852726e6943325737766244346c5746312f7249594e4830355937614d38375153666d6c48544a4f4166376f36563670706d7158576c2f442b31315878497a4a6457326e4c6358784b59594d715a6649486672774f3941485130563456652b4b4e633851577933643759664571777576395a44426f2b6e4c4862526e6e61435438306f365a4a77442f644853726478346776703459624878317233694c773271573971717a324542685761526f314c744a4d714e744f386c634171426a336f4139716f72503065796b306e5234726135314b3431426f67784e33636c6437726b6b5a49414841774d2b316551332f6a58555046617a5450596645473130313544396950683754776979525a2b57517974387a46735a774e6f414f4f6570415056664647764477356f62333632787570326c69676774772b777979794f455663344f4f577954673841384774675a774d6741393856355034586c316a78447248686a5439634632306d6c4a636172503841625968484e793778576f6b4134443743374565772f487576477573533646345031473974786d373876797256635a33544f516b59782f764d4b414f666b2b4c4e67747863434c7731346f75624f4364345776376654764d747a7363717a6877334b3542375a3973385663314c346c36545a7761564c596166712b7466326e6274637770705672357a72477055466d556b45444c5936645163347248384d772b4f5966433170346469384e576567783239754c6358317a714b334c44356346784847754353636e4259444a724538506152347467317a55727a775775676632585a716d6a577a6174353238706235336c664c3747526e7954317830376b413766545069465a33734e3363582b6961376f64746249724e5071396e35434f574f4171664d537a4539675035696e615a342f744e53316950547637443851326e6e4e746875627a544869686c4f4365475054676678415653315451764757736148705539316336496d75366466384132775177724c396b6d414442564a4a33412f4e6e4f4f443237316f654776464770616a72656f614672656a70702b6f325555632b36433445305573623541594841494f565042486167445238502b4a4c5078476455466e4663522f3262667936664d5a6c41335352343346634535586b597a672b31554a6648656d7877336330566c716c326c76644e614a396b74476d4e77366a4c6d4d4a6b6c5650796c6a6762675258442b48726d386a73646430625362674c713276654a4c2b514f462f34394946634a4c4c313742634c2f744f6f374775356d764c6677716d6a65467445302f7a726957463174596d666248464645427565522b542f41424c30424a4a2b706f416d384b2b4d7450384146693369327476653264335a4f7158566e665165564e43577956334c6b395143527a5851316a654839432f7367586c3163537263616e71456f6e764a30545972754643674b755468514141426b6e31504e624e414252525251415678766a7a77442f776d6f734a59396376744b7572417531764a6248674d7741334563456b59787752315072585a55554165616150384834493736317666452f695056504573317132364b4f396b597771326544735a6d5036343971635068586436583470767462384c654b3772527637516b4c33634274493767506c747832372b46354c5979446a4e656b305541654c2f41424e306a7778446f56706f58696a785471634634307a5871616e4e61744f48636772745a59314141774f46474f4239616f654766445773654d2f6964612b494e516e3143353048526c55577478715675734c5844714d6a5a47465541427a757a676e35526b353665373055416555616838456f377a784a72657477654b4e5374626a55764d4b69506a7979354f344d56594630484746342b364d35465872663454665976686250344c744e61386c3771627a62692f5731356b2b5948477a66364b712f65504139363943757232317355523775356874306552596b6157514947646a68564765704a34413731505142773137384f764e2b466b5067697831543747697870484c647262354d6d47334f64675959334e6e504a366b63316a366c38474c65363072777662574f74535746336f41477934533256784b32344f573246754358476570484f434458714e4641486e326a2f444b53782b49306e6a485574666c315734386b7878527a57796f305a32686432355474366275416f487a477565742f6756505a6156726d6e326e6a4737534c566e51796c7252574a52574c414f6432356a79636b4651636e4950475059714b41504c74532b444676646156345874724857704c43373041445a634a624b346c6263484c624333424c6a50556a6e424272513066345a53575078476b3859366c7238757133486b6d4f4b4f613256476a4f304c75334b647654647746412b5931364452514156356470587758736250346a586669322b314958776c75356279477a613232434b52334c4b5332383774755432484f44327858714e464148446133384f7637652b4a476c654b3776564e31767071714974504e766b466c33454e76336348635166752f7767567931763841417165793072584e507450474e326b57724f686c4c57697353697357416337747a486b35494b67354f51654d657855554165626135384a7637552b48656a2b4437545776734e76594d486c6c573133666148414f5356336a475759746a4a35783656425965443566452f69753275745473356258777a34665557756b36665047554d386959426d5a5467686541414431414234485831436967446c506948657a5165464a4c433063726661764b6d6d3278424f566155375377787a3871626d2f344432716a705877397562574332302f5676456c3171756932586c69313036533269695252486a594a47555a6b7751434d344841794458633055416352443444314f79316e567272542f46313961574f70584458636c6f6c764578457241412f7647426262674162527449413449716652664163656b542b486d612b4d38656a5773794b6869775a6269556a664f54754f43666e3435507a6e6d75776f6f41343239384536672f6a433831375450464635706958386363643342466278536c2f4c4746324e4947326454774279546d74627774346448687654726942377472793575627157366e75585861306a4f3347655430554b76582b48743072636f6f413550552f44586953373171533673664731355961664b6379576132554d68586744354a47424b394d3944337147392b486c71626251597448314b37306c74456152726553454c4a754d6777374f4842444d636b35492f695072585a55554163393463384d4e6f563971743963616c4e714e337145714d5a353041645930514b7148484235334e7746487a4841464f38566547453854576c6f7133397a7039355a58417562573674694e306267456367384545456767396133364b414f4a2f345137784a63365065326d702b4f627537754c69326b67535262474b474f50654d62746959596b416e4757786e6e734b314c37776e4264512b4872534f595136666f383863777468486b532b5768574d5a794d425351335138714f6e5775696f6f41347a7850475044633274654e5a4a2f744538656d725a32567273787362635467484a7958646b484148335231724b30443461616e59614e4270476f654c4c323430597835754e4f467647766d4f354c5368706362796a4d78347a6e42786b31365252514268364a34626a306256645831447a6c6b6b763549396972487345454d61424569484a34487a4874797834724158774672476e616a63746f506a4f39307a546271356b755a7249326b552b31334f57387433424b444f546a423631336446414849616834563852795357726158343576724a5934316a6e45316e44634762424a4c664d42745935374441774f4f4b7a44384c3373746267316e512f456c3570326f6d4e307662686f4935327539373732596868745669514f51754d4b426a4172304b6967446e7644666864744276745676626a557074527539516c516d65644148574e45437168787765647a634252387877425851305555415a327636624e7248682f554e4d7437773263743341384975416d34783768676b444935776655566b654150426348675477756d6a7858497570504e6557573445586c2b597a486737636e4746436a723272714b4b415050766958384e4a7669492b6e722f414736645067737735386f57766d683262487a48353136415936647a363155304c345861335953336936743851646131533175624f5731454a5a303873754d6278756b635a417a6a6a71633971394d6f6f4138697466676c66573461795078423134614e74324c59784f7959586a6a4f38715231343256334b6543744d73764131393456306c425a57747a617a572f6d626435445349564c74794e78357a3137593472704b4b415050766876384b7248346647377544654455622b342b51584a67387279342b506b41334e314979546e6e6a30723047696967447a672b484c7a787a34382f746a584c616144514e486378366259334346546354412f4e4f796e424335414142366741384472312f696e772f463470384d333269543345747648646f454d73522b5a63454566555a4849376a4972576b6b534b4e704a48564930425a6d59344367645354544c613567764c614f35745a6f35344a56447879784d4756315051676a676967446a6f7641327158452b6b53363334737574565777755675576865306a68696b5a564f7a43706a474749624c4676756a474f7457347642303048685457394a693155726661764c63537a5834684f5661556e6b4c757a38715955664e2f434f6e5375726f6f413433784434456c31474851446f6d7453364c633647724a5a756c75733059566b43486447324153464241506263616a3154774e71747871454f7236563474764e4f316b5769326c78644731696c6a7556556b686d694943687554676a474d2f6e3231464148465850684478533053506166454c555972305a33797a574e764a457734344551565150726e504e6258682f7733486f625864314c647a582b703370567275396e437138753059555955425655446f414f35505531743055416368717667792f7576467031375376457431704a6e74317437794b4b326a6c4d7971535632733449516a6365782f436f6b2b4864764a345176384151377a55726d5765397647765a4e516a2f6479695865475268796556436f76582b48743237536967446b3948384d2b493753395358562f47313771554554376b7430736f62634d4f77646c425a7677497a573772656b7761396f6439704e797a70426551504337526b426c444447526e76562b6967446c504433686257644c7a487133697937316531524769687432746f345656434d446356473532417a79546a6e70575470337731767258547a6f6c353476314737384e68504b545468424845786a78796a7a41623255394f4e764846656730554159476b2b4752704e3972643746636f5a39525a424552446862614b4f4d4a4847427535436e636533336a774b7a7a34456a2f414f4542737643677679494932694e334d59736d36416b456b67493363655963354a4a2b386574646652514279486944775a66582b752f32356f50694f353050556d746c745a4757424a34704544456a64472f47526b3450624e4b66426c376379615932716549377255685a33793373697a776f6f6c5a4659496f43625655426d3339474a49486f4d64645251427a4f6f2b4637753731765539587474572b7a587478707932466e4a396e332f5978754c4f344262444669563950756a725850364e38505045756e57703032363864506361524a484c48506252615646444a4c35697343786d424c623874754c484a4a484a357a586f314641486e63587730314e764473476858336a433775744e68614a467476736355635a74305a54356262634d784b7274795749354a326d75716830414a3477755045457478356a4e5a705a3238506c34454368697a6e4f6564784b39683930646132714b414b326f57306c357039786251335574724a4c475557654c472b4d6b666547654d697557302f775671636c35627a654a2f464678727364704f4c69317432733472654e4855664b7a62426c324753526b347a6734347273714b414f4558774672476e616a63746f506a4f39307a546271356b755a7249326b552b31334f57387433424b444f546a423631796d6f33326c32586a69564e4a386361304e626a743174645173344e4b4e7a506446435370566d6a4b49637631413234497869765a714b414f44303777484a65664469393050576275614f2f31683375622b654a38754a48594e747a2f4674415644324948594846583748775a64512b49644e31625576454e33716873495a55696a7549593043753443377873436759554d4f515438782b627458573055416335706e684e4c4c514e57303265386b6d6c315761356d7562714e664c636d584934354a473164716a6e2b45644f6c633946384e4e54627737426f56393477753772545957695262623748464847626447552b573233444d537137636c694f53647072305369674443303777382b6e366e7232704338456c33716b696c484d574242476b595645787535414f357532537834465a703843522f3849445a654642666b51527445627559785a4e3042494a4a4152753438773579535439343961362b6967446b50454867792b7639642f747a516645647a6f65704e624c61794d734354785349474a47364e2b4d6a4a77653261552b444c32356b307874553852335770437a766c765a466e6852524b794b7752514532716f444e76364d535150515936366f4a723231743534494a376d474b6134597244473867567053426b685165704147654b414d324c514e766a473538517a58506d73396d6c6e42447378354b68697a6e4f6553784b396839306461342b7a2b465631446f6c316f4e7a3475314366526d627a4c57465949306c7435664d387a7a444d506d5a74335059636e3278365452514279656a2b476645647065704c712f6a6139314b434a3979573657554e754748594f7967733334455a7263317177753953307557317374546d30323459677064516f724d68427a3062676734775236566f55554163516e77396c314b422f2b4574312b353136352b7a7a57384d6e32654f3253425a5632757949672b3856347953652f7161585450426e694f78614f33755048327058476d5168566a74786151704c74485a3573466d7a366a423936376169674447385761332f776a766858557456433735594954354d66392b552f4b696a3673515078726b4e412b476d7032476a5161527148697939754e474d65626a5468627872356a7553306f615847386f7a4d654d3577635a4e656b5555415965696547343947315856395138355a4a4c2b53505971783742424447675249687965423878376373654b7874523844366f5045463771336833785a64364d312b36506551665a59376d4e7971686371482b3478414850505375316f6f413865385454615a7050696a5449483866367062654a37574e31642f7743797a647663517959596f714c4873552f4b4d5942786735424e64523455384d5863756b613764617a63586e3233586479475355684c694b3343464977646f415638466e774141432b4f31647a525142776c6a384f70375a4e4374726e784c653374687045795378576b3045616f52477045592b51412f4b5347793237376f786a72576846344f6d67384b6133704d57716c62375635626957612f454a7972536b38686432666c54436a357634523036563164464148472b4966416b756f773641644531715852626e51315a4c4e3074316d6a43736751376f327743516f494237626a5541384236744634696d316531385a5839764a65515252582b3230675a707a4775465a53796c592b704a43726a4a7a586330554163545a2f443457384f6e783347714e632b5471386d72585450436431314964336c676e6363424d70317a6e594f6e617a34673848587571654b4c5058394c3852584f6b33634e736253545a62787a423469323467423868577a6a357348674375746f6f413537773334586251623756623234314b62556276554a554a6e6e5142316a5241716f6363486e63334155664d6341553778683459486976526b736c763572433467754937713275596875387556446c535650444450592b3370572f525142787738455875702b48395130727856346b757461573968386f734c614b33534c6e495a5555666542436e4c45386a334e634871317871586872786842346338572b4c39596d384d58466b44424a445937586d6c4c3752626d534a4337486143535151546b446a7637625251427932756543347455665135644e31476652704e474c47302b79526f55554d6d776a59774b384c774f4f4d6e31714b7a38435172612b496f6454314734314a746241696c6e6b4157525968487343354848424c4e77414d74393056313146414845365a344d3852324c52323978342b314b343079454b7364754c53464a646f37504e67733266555950765855367670647672656a586d6c3359623750647774444a744f4468686734507256326967446839503846654a625256745a7669427163756e524b7152524c5a774c4b464178687053705a7672776152504165723370613038512b4d4c7a5639474c4b66734432634d586d42546b4c4a496f334f4d675a786a4f4f6574647a5251413134306b69614e6c796a4c7449397134505466682f72756a5278366670766a7a55626652596c4b78576873344a4a59786e4f424d774a774f67474f4b373669674444305077344e4831545639516b7533757039516b6a773772686f346f3043496d53547535334d54786b73654b6672756766323564364f38747a737474507642655042737a35374b724241546b5941596875683555644f74624e4641444a6c64344a466963527946534663726b4b6363484865764e744b2b486e6a62524e4e69302f54766954354e7246754b702f59634c484c457353575a695353535353546e6d76544b4b414f4e3148776834676b3169652f306678766636636c79364e506279576b56776e7971712f49474879456863392b6531626d683642446f715476396f754c7939755744334e356373444a4b514d4470674b414f6967414438545774554e336432316861795856356352573976454e306b737a68455165704a344641484f65456642467234557574587652634e6433757033636c784a4d7962646973785952714d6e67466966636b6e6974324b327656316135755a622f414d7979654e4668744243463870686e63786671323749343441322b3957775179686c494950494937307441485038416b616a716e696f584479334e7270576e4172484572744839726d49355a68786d4e527742304a4a4f4f4258515555554146464646414256652b7662665462433476727556597265336a615352324f4171675a4a7178586c4d6e6a4c52463866617262654c52654a65576c7835576b3663316e4c4d6a7842516650565556677a735132475049414147506d6f413134745a764a6261783076773563585a3154576c6256486c31632b61326e327a6e4f53674f4f70326f6d514f447a776335486a585364623846614c4c3472302f78647231396557736b496b73377552486775466156564b434e5541556e6431485070543566464674344f2b4a4f76366e346e5736744e4e31477a732f734630625633534e555674385446464f473373546a6e2b56624a75482b496c35706b6c70445046345a745a6b7658754a346d6a4e2b36387871696e446557477778596a4277414d386b41485457657657743772756f6152456b766e3666484539784a6765577253416b4a6e4f64774179526a6f52363152742f47326a7a2b483474624c7a78327338727857796d50644a636c57595a6a524d6c77647049787a6a6e69764f4c4c78613174344e3851474f31314b48784e724f6f5449466d74485151795376354d414d68477a35553263416b38486738314634743037544e4238546158613633712f694451394430335234344e5076394b4c4b6f6b3345534b3771724d4377456631782b594232756a2b49644738542b4d30467a5961335a366e61514f396e6136725a6d424e6f4f486d6942484c48634679787942304179325a2f69563472752f4333687450374e74727562564c2b5557746d6261447a536b68476432303845685178433835497830795251384136447042314b5858624c57504647724f6b52746f70396364796f566947627977364b6634567963592f57712f6a54784a70326b66457677346d75473574394e7462615735686d57336b6b535736632b57694459704a594c3568782f7444326f41304c58346d574c3245686b304c784b742f46676632664a70684e31494d5a332b577049565363674d78554567676444567950346936492f684c5566455569587476447072624c71317549504b6e6a6b7775497972454463647967633479657465584b2b6a2f4150435261773369507854347a304c57727a554a575732302f7741324f4f356a4278453059534e743249396f354f654b366131304b7a532b384f36425a5847725855656f586a6135714532717675754a4934517178683867454176355741514f464f66536744734e4f3865615871586949614b74727156764f384454785333566f30555571723937597a6665786b6334787a77545762662f414258304b786a6c7546734e627572424151742f6261653757386a353268456b4f4178596e415033543638697554386658456d6f333369625538544854644d533230655a3468754b78794f736c327741352b3455512b6e50537475363137537647757365474e42305154747071796a555a3261326b67526f4941504c436831425a5449306649342b5872326f41366e585047656e61484b7473397471463971445265643967302b3161346e432b72426546353447534d344f4f687178345938556164347330747237542f4f51527974444e426352374a594a467875523137455a46634a3458385a36566f6d7165494c4c5649645150696136314f655672574f786c6553654d4e736832454c743242416f424a41366e766d75773845365064365a704e7a64616c474974533153376b763771494d47454c506a4565527764716856794f70424e41476c64613562576e69485439466b5359334e39464e4c4579676241493975376363357a383478674876564f54786a704d4839717954764a4661615936785458624c2b3765556a2f5670676c6e635a55454164574147546b446c7648626175337844384c322b686f687670724f39694d7a6e693152764b426d49373437446a4a774d315738544e70486766576643433668485046346230394c69567078433071693649554a4a4b56424f343735446e757a45397541446f394b2b496d6c367034686a305753773166547271645761316255624a6f4675676f79336c37755467656f46644671757132576936644c6636684f49626549444c45456b6b6e414141354c45344141354a4f42584b576a76347938593662725556746377364c7045556a3230747845305275703542734a434d417756557a79527958397170654f7461737448386465465a646338354e496945387362704138716d3777466a4243416e63465a384448552b33414270616238534e50314c586258522f7743787465744c75376b6459426532426856305653786c42592f6334413963734f4b324c58785270313162617a6441795232756b5453513345386741526a476f5a79707a79467a67357879434f31636e7075726e586646486944785462576c314c62364c596659724f33654970493870587a7063496345456a796c77634836567a646a71554f6f2f447a52504346716c2f3841326a7256776b656f797a57736b4942646a4e64664d36674d646f63664c6e475230346f41394a6c385a365a426f326e36684c4665724a66774365337355747a4c644f7041502b725463654e77796567794d6d6b384d654d724878524a6457384e6e714e6865326f5670725055625977796f725a32746a6b4548616568727a4878494e4c7476694872456e69587842346f38505a386933303254537936517a77424151674b49784c42793577665775393841614470316a446436745a332b7633386c37746a4e78726a735a696b65634251797177584c4e31485030785142304631726c7461654964503057524a6a633330553073544b4273416a323774787a6e507a6a47416539566a347330745a6454383135497262545a46686d753355655530726638414c4e4f637334796f49413673414d6e49484a2b4f354e5658346865466f644769335831786158304b544d4d706268764b7a4b337146484f4f35774f39592f6a33527248512f77446846724336753962303777335a72504c4e71476d5a4d73647a67625a5a474373777a756c79514d6b7361414f793037346836626636394470456d6d61335953334a4b3273312f70377752584a436c69454a357a67487142546b2b494f6c7a366e6461665a575771583178625877735a50736c6f5a55442f4c7559754474565633636c6950757467484663527053654737534334385732336950786672734f6932306c334364576c6b4e75584b465273387846334d5153426a31353756364834493069585250422b6e576c30643134305a6e75325056703543586b5038413330786f41314e5631577830545470622f556268594c6149446335424a4a4a7741414f53536541427954774b77744e3865366271467864527a324772615a46625174634735314f79613369654e635a594d3359626831776178664832733265682b4c2f44462f726f6e5451725558457a544c41306b63647a68566a4c3751534d426e78376e323468386465494c4f2b30485174546b67766d384f6a5655652f5a724f51457852686d566d516a63492f4d565353514d34392b514456682b4a32697936765a574d6c6a724e7442664f73567266335667384e744e49333355566d77636e74786a33706d6f66464c5174502f414c545032545662704e4d755462584d6c70614756454b68537a4667634b7137734863516367344278574c346e3855576e6962547262564e5068755a5044326a6b36746333736b4c77724f38533568686a44685332357943534f4274417a7a5266615650592f446e5150434d7245366a7239796b643634504a336b7a3354663938687878366a7051423662424d6c7a62787a78484d636968315071434d697564317a7876702b697a533238566a716d7258634a416c74394b73327547697a6734636a35564f4344676b48466445367448624d73436a6371455272327942774b2b6650443636454c524c58566647486a375450454d706561393079304d792f7669783375714a455267746b357a336f41395a507849304e394a6776724b4c55722b5764585a4c4b7a736e6b75666b5971323541506c7777497932426e76574a34702b4a636b58677a37566f2b6b363344717435632f594c65476254794a595a696f596b6f3344454c6b6744494a474f6d534f524d3268615a49317234543852654a72507850466250434c4f6254326d6c756d387835415a413865336c35472b6249487a563057752b4a4270486a4c77656e6a46704c6357756e7463764e42627953517933376752684632416b6b447a43422f7444326f413647312b4931682f5a715333756b362f61586275596f624b3630346936756471677336524a6b3765526c75426e69744477313478736646734e39465a525874686632684354326c2f622b584e4157424b6c6b7a304f4d6a6d755367385861546f487849385179612f3841624972363738694c54635755736e6d3279786874736531542f477a6b2b2f5870786567696e67732f45486948564c6d5851723778424c485a57572b4979535779344d554755582b4d737866486264676e6967437263364e71326c2b4f4e456a30767868724f6f336a7a683953744c756448686a744d4573356a565643456b425650584a34364776546177346266537642586875575a763364766252623769624261535a674f5759386c33592f556b6d7453787557766247433561326d746a4b6766795a7742496d657a41456a50346d6743646d56464c4d5171675a4a4a77414b383431625852646544372f5664447674542b302b4972784e5073507445324245786279664d67565438713756655545636e47546a7442346e385636546166454a744d38584e63322b6b77775274703048326553574b2f6d624f396945423337666c554b654d6b6e4764707158566248545069503473734e49764c4f5a74453036772b327a57386d2b416d57567473494942444c68556b62427839345a486f4155645a384f332f6847343031394838636549723356376d37696869734e527652634a4f68594754354376414342695737416465613653352b4a656e575771725a3375696549625733615a5942667a366136572b396d3267626a7a79652b4b7a5045646a7048777638414333327a77316f38466930747846627a33795147647261456e35355779537a425144786b386b634775624d647472336933772f47766958784a71646c477a366c642f32676874375a6f6f517241695079304c6676436e4a4248423730416567366c342f307254745931445356744e5476723678696a6b6b68734c517a737863456851463542774d6b7467664d4f65617261313852374c514c71534f3830487848396e68475a37325054574e76454d64532b6552376a497247307655395130623457367a347974374a3772564e556554556f345375346858495745454447517359516b447344584c617138586a43485362473038582b4a64544f72586b634d674d4a73374e6f384670686a79314c67497263416e42786d6744334b47614f34676a6e69626448496f6447783142475161342f5666695a6f756c5863306632505637793274697933562f5a574c7932317356366835427878304f334f4343446a4661766a476139735041327353615447357649724b54374f734b355a57326b41714f354858384b38386678466f577665434e4338472b462f7454516169384e69306e3261534e466958357078765a514762596a673763386e714f7441486f55506932796d2f345239667331346b3275495a4c654230555047675465576b47373551426748476557417163654a744f2f7454567246336149615644484c64334d6856595939344c425332656f55626a7877435057755075746374644d2b4b74374a71567071435132476d52322b6e694b7a6b6b6a6665533872426c42433443787153784147303971356656625734767668395a6176656a5534374c5874614770616e4a70363770346263672b526a673443685953634134783350554136335766475767617a64326d6b616c59654949744c754c694e6674556d6e76485a335446734c4537734e7855735165674278676b676b483049414b6f41414367634164414b3866384d61523458385336725a7459654d504732757751537263374c3261553268614e6777336c3431422b594467484f66787276504832707a3658344e766a5a6b692f7574746c615950506e544d4930503446732f6851427a6e687a784670397332722b4b62777a5458477433627259573172453838306c72422b36516f69676e615475664f4150336e586e4a366277783479736646456c31627732656f3246376168576d733952746a444b69746e61324f515164703647764a62375474473044785a655765762b49664650682b4f336874724c5335644c4c704663514c474d4c7552474c4e76336b67393272306e77426f4f6e574d4e3371316e66362f66795875324d3347754f786d4b52357746444b724263733355632f5446414776722f69757838506c5970494c362b765851794a5a6166624e504d796a7674586f4d385a4a417a5754632b4d7450316277795330477536624a66584b36576b52672b7a336b633067484b68754156446274777a6a61547a69755138556139705633346e767076447576363359654c55747a6169786730317052636247625a6b504756326c69666d3341594f61333435727a552f47656a51367930516b3850615639763145786e39324c7556536778394657592f384141682b41427158666a6e5364477637765130743958314739303233694c78326c75317a49355a5356586a4a3359584a4c59487a446e6d7231743477307966772f714774534c50623274684e4e424d4a56472f664778556851704f636b59486335465550687a464a5034646c3132345569353179356b314267335659324f496c2f434e55466370344c30322b31793831555846767430725339637670345566706558586d73554a3762492f31592f774378514231326f655037477767585a704f74583136455670724777736a504e626c6744746b326b6f6a59494f433261327442313278385361524671656e4f375738685a6353526c47566c597179737035424242466546654831304957695775712b4d5048326d65495a53383137706c6f5a6c2f66466a76645553496a42624a7a6e7658742f6866524c58772f34657464507447756d6a5864497a336a37706d64324c7358506473736330415165492f46536548504b423054584e5465515a43365a597450675a376e674436453161384f2b49624878507043616c702f6e43497530624a4e4755644855345a57423645477649376e786f3275615271393771666944784a706c3561656676306e533751772f5a6b557473447a474d674d52744a4f38636e41485376542f416d695365482f42576d57467757613738727a62703259737a544f64376b6b386b376d504e4143617a3430307a524e626a3069614739754c325331613745566e626d647467594b506c584c5a4a4a78786a35546b6a4659352b4c50682f2b775037586a7339596c6952325335686973576153304b6e4465646a3555786e504c5a78307a56585339596a7462587870343875415868456a77576f794f594c59464142322b61587a442b49716e653656505966446e772f34526b596e556465755569765842354f386d6536622f766b4f7648714f6c414857363771566a656a534e492b31616a444c72456765435377667935416b5945724d7a6456516742546a6e3538643632745131477a3071796538767268494c644d4175337154674144715353514142795363437556305a463162346b3676667150394530573354533759446f4a47416b6d492f44796c2f412f6a68664663526e562f447a367465367a702b67772b664c4c666155447674357746434d784373564730794449486567446f394f2b49656d332b765136524a706d74324574795374724e66366538455679517059684365633442366756583144346f36487034314e76736d7133536162636d32755a4c53304d714956436c6d4c4134565633594f3467354277446975533070504464704263654c6262784834763132485262615337684f72537947334c6c436f32655969376d494a417836383971307237537269772b484f6765455a4859366a7239796b643634504a336b7a33546639386831343952306f4136565069486f7375746162707355576f534a7150467465693063577a735633425249634269522f64794f446b6971742f3854394873763755454f6e617a714230793461336e2b7732526d554d6f4259376764716863344f346738486734725038414665717757336933375136357366436d6c53616a4a47434d4e5049436b4b2f554b736d50393466686a2b4774666a7650682b6e68625152647a2b4a626d466c766d6d744a4931745a3573744c4a497a4b462b557578414763344148426f41376538386661465a5775683344535479783630706530454d5264796f5465574b4435756d4267416e4a4178554d76784230364b784578307657337647444d756d783665375865774d79687a474f55567470326c3975617a6643656d776e786e65433379624477355977364c615a4f66336856586c623634386f6667667834456e53492f45757444784c3470385a3646726431714d324c62547a496b64784770784730596a6a6263424746475363385541656e57767849304b36307333596a31464c675447334f6e4e5a4f6273536851785879674354674d43534f4f6574574e4a38623232726166665858396936395a7957534b386c72643663367a4d477a6a596f7a757a67394d31356b4738493658655152323369667864702f69415353797854336c6c4c506333586d49674f564d52444445616363455935725575664676695054345044326a2b4b39527539486b764c4e35726a554c537738325757547a4d52777171713452396e7a4e68547a67436744744e43386632477561312f5a44365672576c337252744c464871646b59504f52635a5a6554787a3378574e385164487659374f35314f447866726474714c4e6a544e50744a306a6a6c6d78386b65774c756b7a6a4a795433504146556641646e484c3479313758357455316d39744e4f675730696c31682f6e6a646c456b3245327149786752385942363572712f444e6a7038646e50346d652f38413751612f4c3361583838526a4d6475337a4969687555525678365a354a484e41473970695863656c5761616849736c36734343346442674e4a7447346764686e4e57717a3946316150584e4b68314747327559494a3874454c68416a4d6d6547786b344248497a6734504946635438516645316c7050695453624478464c63326668715346357072694f4e3253346e4247794269674c62635a596a6f33414f526b5541617838533654464a722f695a723355546161575073456b625344374d38694863544567507a4f576352376a79534e6f3656565068627846346d7376744f752b4a74553069575835307364466c57466264656f566e4b6c6e59647a6b443041724f3861586e396f65436449314851744f756a70566c72467263584e736c6d30627932306235625a455644593362543048436b394b30592f695a707669434f617a38487063617271754e757732306b555675783444544f36674b6f4f65426b6e4241426f4170654266475633673646726374786636697573586d6d3239797361677a527744635a58484746475175526e6b6a766d757462785270796168724e6f356b55615062705065546b447930444b7a6263357a75437275497830493961383730527258776234346d744e555455706d302f54566a7437684c4f53526271615a7a4e637a5a55454c6c746f2b5967414b6563444e4e565a7453384432734c62317676484f7265624a7a387957724863523942627868654f37666a514232566a3469307a5274427437325762574c695856533139425a7a6f317864346368746978706e6169376c47427776417a6d736530386265476b4f752b4b623632316931763841543764424e61366e62434b613368593456496c4f4677374450556b6b6a4a774641355878494e4c7476694872456e69587842346f38505a386933303254537936517a77424151674b49784c42793577665772656e6144703978346a30577973622f77415161674c2b63583935507262735a577437544a6a55426c5667686d6b5871426e61653355413737545048656d6170346a585134375455344c6953417a777933566f3055637971634e735a767659794f514d6338453142712f7845307653356e534377316a5645696370504e706c6938385542424962632f432f4c6735414a49394b777457625564583137786c71756b7137334f6a3657326d6166737754396f5a504e6b4b6a3135694831483538566f747434536c302b485462507870385249376d4b4a566b307133615947416b66634b694c616f2f4848765142366c656645625234625343665472545664616561464a78447056693837716a6746532f514a6b484f47495074572f6f327251363570554f6f57384e7a44484c75416a755954464970424b6b4654794f5161385a74377579696c65332b476d7636796d73483750484a704e7870374e46386972486d5a6e6a416a2b5265547537636331376663504c465a79795270356b79786b71672f69594467666e51427a6d742b504e4e306655477359724456745675596d55584361585a4e63665a67526e4d6848413435786b74676734357244384b61377036327572654e622b52305857377778324d596a5a355a494967556a564541334574746438416678452b70726d64473861325674384b354e4e307333736e6953364c5739797a576b69374c2b64397246335a5175344d2b63416b344854696d654c644f307a516645326c32757436763467305051394e30654f4454372f41456f7371695463524972757173774c41522f58483567486661643852394a76626939743771793158535a7257336b75696d715762572f6d51706a6449756577794f7544375679336776787a70326b324669326f325771693538525872584d31384c4e2f73736373357a48475a57786e43374547334947337342584f617a6136466261556c7a623633347431542b307055303033477243575170616b6957344d53474d4f523563654351443934652b4f346e3147483468543654446f454d306d68574d777670727553426f556c6b6a47595955446746766d49596b63414a6a504e414739726e6a665439466d6c74347248564e57753453424c6236565a74634e466e42773548797163454842494f4b724e3853664477733949755561376c47715353785152523237475657694233376f2f76634562634145354978317a586b2f68396443466f6c7271766a447839706e694755764e65365a61475a66337859373356456949775779633537313358676653724b783853616e6352535852302f5172583748484c65794270544e4b66744679376b6678664e474439442b49423248686e785a592b4b593730327474653273746c50354538463741595a46624751537037454545642f59557669725562577830686261346d76596e314b56645068617849453465583551794539436f79326577556e74575a384f49704a76446b7575547156754e6375704e52594e31574e7a694a66776a564b67314f5a4e542b4a6c6e4449324c4c77395976667a6b6e35524e4c6c49382f52466c50384177496667415458336a7a536443753733523174395831473630753369615a625733613563376c4a414a427a757775535777506d48504e517438552f4433325454627947505570374f2f5a454631445a75304d444d646f456a2f6442336345416b673971774c652b75374c3456366e7230595a64583854334c5357774a47355775474556755054355939682f413961307462736257317550434867364537624379583766643550486b57716a627537387946442f774530416247702f454453394e3166554e4b577931532f7662474b4f53574c5437517a6b6c7753462b586f6344507a59487a446d7376582f474547762f4141315737304e356f3539626b476d32717967704c484c49786a664948526b416475442f4141357a6a6d756638452b504c4a744c31475332747232363855617664533371324a745a423872486242756b3237466a4561703832656d6570714337305455374e493943307952376d2f384144326a58476f7953526766764e5175643455715055667669422f744c78364148587a654e6445384c3255476d6166707572366c61324b7262504a706c6738305675454730376e47462b58627941535236566f33766a3351374b3330536666635843613070657a46764358646b436279327a373354417741546b675972796651625077706457647470566a34302b496364327361527670554479715943772b34514974696a3863653964373461737253487866714d734a4b36563459734974497453375a77323053544e6e31322b554366592f6941576f66696c6f73396c667a523666726258566a49593574505854334e7976475178516664556a6f5749393856706e787a6f763841596c68716b62334d363338586d3274744262764c635372786e4561676e6a49796567794f6561343632767275792b4665703639474758562f453979306c734352755672686846626a302b564e682f41396135692b30375274413857586c6e722f41496838552b48343765473273744c6c3073756b5678417359777535455973322f65534433616744306548346f614932696174714e33616170703736584773747a5a583172354d34446b684d4b546737694d446e307a6972326d654f394d31547847756878326d707758456b426e686c7572526f6f356c553462597a6665786b63675935344a7267644f304854376a78486f746c59332f69445542667a692f764a3962646a4b3176615a4d61674d7173454d306939514d37543236395039736b7566476e696a784248424c63782b483741324e7444474e7a535446664f6c436764536633532f554838514450306e346c58742f3431314b3358515045647870517545734c5a6f4e4f4452527971785757535354494b386b444754674c6b344a4972617566695870316c71713264376f6e69473174326d574158382b6d756c76765a746f473438386e7669754a306a7837613652384b72622b783535354e516a75493131653665786b5957556b7a6c35355742554279704c6344504a586a464959376258764676682b4e664576695455374b4e6e314b372f74424462327a525168574245666c6f572f65464f53434f44336f413942314c782f70576e617871476b7261616e6658316a46484a4a445957686e5a69344a43674c7944675a4a62412b5963383168572f6944543038596133346e314b5231743755706f6d6e78496a537953534439354d4552636c6d334d464f33503841717a6b34484576686e55686f337736316278706649336d36695a39575a53527532456675553950395773592b70726d4e497537507746346d306b2b4c47755979644a553239794c61535647764a35576534414b4b54764a326a474f67375a354150516644766a765466455772584f6c4c5a616e70326f77522b64396d314b314d456b6b576365596f4a35585048592b31595878423065396a73376e553450462b7432326f73324e4d302b306e534f4f576248795237417536544f4d6e4a50633841566f364d7375712b4b6233786a653238316c59515758324f775735556f37525a3879535a6c504b676b4141486e435a347a562f7770706c6b384d6e69426277366e5071627463773373735449795150796b61427556554c6759347a31787a5142656d31475851504344616c724a6165617873664f7644416f7937496d5832676e484a42774d306c31346b744c56644a4168754a70395564567434496c42664258637a4e6b674256586b6e5030795342564c34684d462b484869517351422f5a7334352f3344564c774c704e374a61772b494e6367574c557072574f4343337a752b79573441776d66377a45626d4f422f43503461414f79726e745276624f2b385636666f6133576f5233647370314a786153424979692f49456d4f636c574c5a4339396e5053716678473175383048776d39335a693452586e6a69756271424e37576b444e2b386c4139517563634842494f4b7a3949315452646238496174616542424d3070737052466550625349727a4653716c704a46426b6264315050546d674239764e712f6a32533475624c56353949384f4a49304e744e596866744636563461554f774953504f516f4179635a7a6a41702b6a32382f677a587262523776784271327452617153746a4665465a5a5943675a35586554676c4d4642374567593572473846664554516450384c365034666d68314b50573753796a686c3031644f6d4d753556436b3432347754334a48586e4653536549347262346f585635724e6871554174644b6969736f3174486c556d512b5a4d647941714d595253574941326e6e484e414862512b494c5334316e564e4d686a754a4a644e696a6b7548524e79356346676777636c38444f4d64475831726b6e3858614c3467385436565961706f2f694f78416e4a73313148547a4462584534475650504a5a6345674841424f635a436b6332504564356f6e68765464576d6e6e3036507858714d313565616d6c735a32744953763768416f422b5971496c4842412b62716561676a75494950466c78723736783468315378385036584a667375724879314d7a376b6932526245326b714a4f57484f56787851423366682f7744346e666a2f41462f584438304667463069304f636a4b2f504d77375a3373716e482f505038427536313469302f51566a46305a356269554577327472433030306f474d6c5555456b4449796567794f6561712b434e496c30547766703170644864654e475a37746a316165516c35442f333078727a44784f326d7866456257702f4648694c78546f447559494e4f6d3073756b567844734232416f6a4573484c6e423961414f2b302f346c6148655774334a63322b7036626332705153574e395a756c77532b646756426b7557326e41584a343578567a5150476476722b705332413062584e4f6d52476b55366c594e4173694167626c4a39794f44672b3165587a4c344b3031306b752f452f6a4b33314761614b6130314c5562656153566d51534b71706d4c6b66764834492f6972307677424c72382b677a53612f6353584261366b2b7854543234676d6b742b4e6a5349414e70504a786748474d38304164565252525141555555554155645a30794c57394576394b6e6430687662643764326a49334b7271564a47652f4e5a50673377357166686a544470393934676b315733695649724e47745934526278494d4263727978786a4a4a374467633536536967416f6f6f6f414b4b4b4b41436969696744443853365872327151514a6f5869503841735352474a6b6b2b777833506d444854446e6a36696e61463465476b537a336c3166334770616e63717154587477717178566337555656415656424a4f414f704a4f6132714b4143696969674447306a5154702b70366a716c336466624e5176587835766c3742464375646b536a4a776f7953656553536651445a6f6f6f414b446e4848576969674447384c36442f776a6d69697961352b3154764e4c635433486c37504e6b6b63757832354f4f5467636e67446d746d696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414b576f615862616e4a616d364450486253695a59546a597a6a3770595935326e6b653442374372744646414252525251415555555541464646464142574e4c6f486e2b4d6262583572726374725a76625157336c2f635a32426554646e6b6b4b6f78675935363534326170616263333131464f31397034736d57346b534a504f45686b69427773687877705963376563657441463269696967416f6f6f6f414b4b4b4b414369696967416f6f6f3655414646632f7743456463757645656d584f70797877706153586b79574a6a427938434e7456324a504a59677478675949363954637574556e736279386537733168306931732f74443667303638734332354e6e55414b41647850664641477052584d2b4774613137564e4e3053367674496952622b435334755a59356467745163474a4e6a5a5a324b6e6b38414654366756663855613276687a7778714f7246424939744357696a4a78356b683452502b424d564834304161394656744f613862544c5674514551765445706e45536b494878383230456b347a6e7154566d67416f726e373358626c6647326d61425a4a433676625333643837676c6f6f6868597775447757636e6b396b5048703046414252525251426a654a4e412f77434569744c537a6536386d32697649626d64504c33656373626278483147415743355050417833794e6d696967416f6f724d7464637462335839513065424a576d7349346e6e6b77504c5579416b4a6e4f6432426b6a48526836304161644655744e75623636696e612b303857544c63534a456e6e4351795241345751343455734f64764f5057704e516d75626254726d657a744465585563544e44624351522b61344843376a777554786b394b414c4e557455307933316978617975397a577a73444c474d596c55484f78754f565063647878307a566d33615637614a353468464d794176474733424778794d385a7765395355414941464141414148414170614b4b4143754e2f3451692b7476486431346b307a78486357554f6f5043326f575832574f5154694a64717148626c426a4f63416e6b3449347830756d334e39645254746661654c4a6c754a4569547a68495a4967634c4963634b57484f336e4872565172724e31346a33622f414c48704671754e6f434d393635485539646b6135396d4c5a364b4275414e696969755a38522b4964653075566f3946384a584f73624544764c3972697434783667466a755967656934357851423031465a48686a7842622b4b6644646c726472444c4444646f57574f59595a634567352f45486e754f613136414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b4143736e78506f306e6948773366615048654730463548354c7a43506551684933674449354b354765326334505374616967426b4d53573845634d536859343143716f364141594170394646414252525251415555555541464646464142525252514155555555414646464641474e7257676e584c33542f744e312f784c7257587a356250793869346b58426a334e6e37716e3574754f53427a7867374e464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641484e655074546e3076776266477a4a462f6462624b307765664f6d59526f66774c5a2f43754c7566413968706e6a487764704f6c33656f78333176424a4a63585975324c43316a52553268535371376e5a4238716a6f5431723062564e4474645876744c75726c35662b4a62634735696a556a59306d786c4262497963426952676a6d694851375748784a643637766c65377562654f3249636a624847685a6746347a79574a4f53656736554165567a78522b484c76787a503466613551532f5a744974784c64504d5a622b5541463875574f56456b6638413379654b3961306654494e46305778307532474962534249552b6967445036566a57336762544c6237422b2b75705073656f7a616d504d5a443573386d2f4c5068526e473834786a6f4d35726f356f2f4e676b6a44736d395375394d5a5849366a5065674479696178307a584c48786c3479317a3762636159476b67677449626c6f6c6c67746c5a655368556b4e4a356877546a6b635667334769654c5045466a464e726e7736753953764e752b473458784d6b45634a3671596f6c4f314175526a4f54787953636d76594c48777a706c6a345469384e43497a61616c74396c5a4a53435a45786737694d636e6b6b6a484a72417366686670566952474e5a385279324b674c46595361724b49496c4852565653446a324a4e41484336705a7a366470797038537446316e56644a747261316a57357462786d68694952424930697049724d336d626a754f654d5972663062776c7075732b4b395367382f55446f75687744546f4546374972504a49664f6d7a4943487741596c7875364c6974662f68582b6c364e466358383139346831654331587a34644d757232533468444a387968596839343541774475354178576634612b4755456d6b32393971312f72554e3766377276553747472b654b336d6e6c4f356738612b6d6476586b446e4e41474234556a6c6a432b46394175726d793062567454753769336d53556c347243494b726555354a49387951384d4d2f4b53335535725a50687653764333784e30683941653574336132754c72577439334a4b72774b6d31476b3373787a76507939507574365631586948774c705869464c412b6666615a6357436c4c573530796377535249635a5545416a424367645070536a774c7043364471656c527664716454684d4e3365764f5a626d5653434f5a483345384567446f4d6e416f413830314c51594e552b476c37346b767a65796174346776526357455032703431696b6d6b564c66355649444655455a2b62646a427858512b4f4c653869757775756150712b732b467266546c337270317a73506d6a506d504b6f64576362635935774f654b376d39384f574e394c6f7a53475259394a6d4531764368415173454b4c7542476541784977527a574a4c384e394d754e536e75626a5674666d744c686d61585458314a2f7372466a6c736f4f53446b2f4c6e4744306f41342b4732384b61743466476b65477644477465494e4c566c6e614e4e52654747426e6a51694d7538716b345571537649556b3936712b47726d38306234572b494c717874704e504f6f5835734e4a734465473546744978574435585055435463654d384c337275562b47656978616e66586474656176617858726d5757797472353472627a44316679317743547877636a6a70697072723464365264654839463055334f6f51326d6a6b50626d4363527558434651374d6f42334463572b584850747851427833694877546f3368796277684859543368317133753468486353586a7355746f56335474737a74564e69344f4647537742363031566d314c775061777476572b3863367435736e507a4a617364784830467647463437742b4e646a46384f744a54534c2b796c7664557572692b746d744a74527537727a7272796d2b3871753449554830417857724e345973706455737451456b38636c6a5a79576473694664735376744259416a4f374341446e474f3141486e38577033637433714f6f36573468764e66315a6446303259674d4c65317477776552523036724d5231354b3534346f316277503465302f774163614261326933517548647453315336754c3657517977323447337a417a45484d6a4a322f684e645a652f4476534c7677767057684a633668614a705730326c356154694f346a5944426263426a4a424f654f2f6170724877466f396c507155725065335a31477a466c503841624c6c706959766d794e7a664e38323835795430474d596f4138393864584f6c6549644b6e38546e774e716d70576355416c6831436656445a7862414f4a456a387a5066492b544a7256384e615064654b37542f41495237583775366b307a5262534331756f55754852727536654d4f2f6d4f70444645566c55444979636b35774b33495068566f734e68425979616c726c7a62515452795252584e2b306b614b6a426c6a4345624176796763444f4f4d31627576683370567a7239377179366872467362304133467261337a52515353414143516f4f725941344a4b6e754b414d72345836485957557576616e7030556b646a4e65477a73556b6d65585a62775a543553784a436d547a446a5063565a2b4a463961365a632b457236396e6a67746f4e6156354a5a477771675153393636725139487466442b6832576b57572f77437a576b53784958494c4d42334f41426b3954774f746339712b6c4e3476385632747265324d69364e6f73713352656149675856795649554c6e716942695365685967646a5142503458735a3951765a76466571524e4864336965585a774f434461577563717042364f2f444e2b412f68724d31327858785a3852724c535a4a72694f7830577a613875507338706a4c54545a6a6a5863767a44434351384548356858656b34476138793050774966454c33766962564c7658744a3144553774354a4c6531756e74533175704b5178794b4f66754148736373656e53674376345a62522f4265742b4c3736794e79756843367437534b465a486e4d3936636951523769537a466e56547a31427a77746339712b69622f4142646f636c6c344e314c52645231445545433670633679586b4371664d6b486c43522b4e697436416356366c712f6766526458384f5732686d4f6130747257565a726153306b387553435263346457352b626b386e50576f6248774670746871634f704c66367263586b4e744c62704e6433686e59655a74792b587951324641474d4c79654f61414f633033514e4e385a586669627846726374302b6d54334457634d4358547852746232344b457359794351583830344a49366356786738426547302b476a654a6d30636e57395775432b6d41334d67387070356357347875326e6147566a6b484f44317232657a384d61625a654545384d4b6a7961614c5132624232777a6f564b746b726a6b354f534d636d734c5366686a70656b334f6e794c712b7558634f6e7a2b6661327435652b6244455168525656437541464448474d48314a3655415a2b6e614a4672756f5848686c70376d4877373464686773767339764f384c5855356a444d585a53474b717055415a475353546e4171445566442b6b364c7165672b45394d45734f6d666158316d386a6c75476b574f473356647167735351706b4d5a7830346174375550683170642f7743494a395a6a31485762436135494e33445958377752334a436851584338384164694b6f654e50444a4e76644854497275573831714f32305a7971373074625863786b595948796a617a354c456a4f3336454135647644756a3672384e64583857654a7674737236715a64526a7478644f697276774c6441696b4b7a62524541477a796176532b5872586866542f414131652b486456385333756c3238554e2b594c30323053542b577535486b4d69623241497a31783335727174482b48576a364e645179726436726551327842744c573976586d6774634441387444774d647335783270682b47326b4456395176347237574c64622b56703537533376336a74326c6237306852635a4a34794779446a7051423537344862554a6f49764439674c6a526250574c36346b386d4f394d37576470627173636952536e2b4a3554674d4f6742494f6347757138512b47644a3844364471657065483437754c5674516a476e7846377957587a4a706d5645636832493341344f6651477461382b475769334f6a36505951336570324d756b516d473076624b36387164564f4e3257417764324f655058474b306c384861636f306b4e5066536a5462707278505075444b307370566c44534d2b574f417878676a4848626967446d744f30534c5864527550444c7a334d586833773744425a4333743533684e314f59777a4632556869717156774d6a4a4a4a7a67567944615848617a3635344f38507a334d57683674716476706c75676d3877516c556153384d5a624a7746473039666d4a7230625576683170656f65494a39596a314857724361367762754b777633676a755346436a65427a774232497253746643476b324f71616465326b4c514454726557433274307835612b59796c33365a4c6e62796338354f636b356f41355853644173724434774f644c65362f30585364326f53545854792b61386a3469556869514d42484f42674449774b364336625750454771366a70534c4e70656c5778534e377349664e753979686d455249777167486157354f633477526d7454544e4474644c31445662364a355a4c6a553578504f3068427751696f71726744355146347a6b386e6d70394c302f2b7a4c4d3235764c75374a6b65517933636d392f6d59746a4f41416f7a674144674155415332566e626164597757566e436b4e7441676a696a5159437142674156505252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141566a6e78623462462b31676645476c43385751784e622f414732507a41344f4370584f63676a705533694856347441384f366a713877796c6e62764e74485669426b4165354f422b4e654d614e44345138562b4257305852394e74746138565856762f414b5a666e547944627a536e4c79764d364441556c6941446b376341554165383056357a71586a6548524d2b474e46314c5130764e4c686a676c75746431455149474344417879386a59775365427a6a63546e45656c66453236754e4666375442706478717638416151307943537a764d3264784a35596b336951673756414a34354f514231504142365652586e57702b4a66486e682f536279373154542f4439773875324c5452703830726235354a46534f4e772b33492b596b6b45634c32717a4c346f38563656347530693031757730654c53645338324e57747035486d695a49326b4c4d5741586268656742782f65395144764b4b3839766646666a4c554e4866582f446d6a36554e476a517a786e555a35466e7534564764794b6f41546342387535756d43514d34717a4e3432314f2f667776466f476d517a3347735762583830647a4a7345454952635a59644d75364449446341385541647a56505664567364453079625564526e4546704341586b4b6c735a49414141424a4a4a414141795361346a54664832727046714e6c71756d32632b7452616e2f5a316e6236664b336c3345686a456e4c4f4d714655355a694f33544f42576671452f69765650464f6a2b482f453865695257526d6256706a70383068327751594b704a76555a2f654e47636a414f303855416570413541497a7a366a464c586c642f385537692b682b326548745238497757616b73453166564e6c784f6f7a39324e663957546a6a63633838714f6732503841684f6456314266437365693654424c6436765a74663345453832315949516778382f555a6430476470347a785142336c46655a33587845314b32613630695339384a57327532726b58456c35714c5157735a4f53694b47486d534d4632376a6856796341357942465966457257623754494c653373394c764e616b31684e4f567247343879316d515269575356474a4241435a376e427831365541656f305677466c346e3861542b4a4e58304b545274476537746f49726947534b386b454d537553417372466478623553527451644f33576f74463866367671576a575675756c32747a346a757072694e59595a57533232517962486d4c6b45716d65414f53536344755141656955563537622b4e7464304c574e52735047646c70794c4270306d715133476c4f3771596b594b5549664233636a6e41427135702b72654f3952764c532b697366446e39697a6c433053586b6b6c77694d65573342516849586e614f2f65674474714b79764566694378384c364a5071756f7674686a776f41494264324f4655456b415a4a366b67447153414361382f6b2b4a32715161765a534736384833576e584e7a46626d7a736457382b38547a4843372b41464947636b41666a5142367252586e3172346d38616549726144562f445668346562534a4157534737753550744d71396a387137597a37484e5938783864363338536458314c516834644d476a6a2b7a596674356d4b677571534f52733674393048504177414f354942367a52586d47712b4e2f466d6861745a7265763452754c6534755972595756706579473863753458636f59414847526b594f50577476552f457576616a72476f61503453683059334f6e7369584532717a756f33736f62617361446352676a3569514d2b754b414f306f71686f306d71533656432b7332397462332f7a43574f326b4c786a424942424942354744375a726e7834302b795866697336696b59746448754959594243704d6b78654a47433479647a466d32674144714b414f766f724e306d3431442b7734626e58526251585a51797a70446b4a434f75334a4a7956484250516b4534466366652b4b2f47576f614f2b762b484e48306f614e47686e6a4f6f7a794c506477714d376b5651416d344435647a644d45675a785142364652586b336972566466385a76345173664430576d6f6c2f6272725573562b7a34416a4b4d6976733532376e5870314b39686e4f7a612b492f473761344e436254394475395274374c3752665377797952573862764952436f59376e2b34724d666c4f546a6f4f614150514b4b382f774445586944786c6f746e424b627a7758626d4f4247757a65336330652b54487a4c474f4d4450436b6b35394b5a612b506458313679303631304f7830324c576272546f372b55616a63736b4d53766b4b41465573354f43634447426a6e6d6744304f69736a77374a34676b734848695333302b47395354614459534d30556934487a44634d6a6e4977665375656d38522b4b7455312f586450384e366670556c7470786a743175722b5a30557a6c4e376a435a4c41426b474d4c33356f41376969764f4c583467617a642b4574427559644d746e313355745261784e757266757352752f6e4f75574277466a596a6b344a4858766331487874714868774c626549426f63477033736a4e59774c66474f474f465647576d6d6b413533456a43726b3859427753414475364b3872303734703364727173396e725576682f556b614270725a2f447432626869336d4a476b4c4b3338624e494144775059444a476a642b4a50486c6872476b573135706e682b475056727449496f6f376957576142514338724e38717132455534786a4278314641486f644663357076694b612f7744454869474a6c685453744a4d63506e594f3570746d2b544a7a6a616f5a42307a6e4e63355a654f6645577052654734374853374b573931654f34766e69647a47734e6d7645525a736b686a766a7951472f69774b415052714b3837693862612f443454385958756f32756c78366a6f4d6b6b614e41377462794d4544676334596b62674f3254365642344b303378393465304a6f745150686b7747475334566a4a4f737233456a37795a6d4932675a5a7337523241484641487064466558325078473166547462764c4c78472f68363767743747652b6b6b304b346556726459397679794b336337686a705731702b72654f3952764c532b697366446e39697a6c433053586b6b6c77694d65573342516849586e614f2f65674474714b5a4d7a70424930657a65464a586532467a6a6a4a3743764f4c547874346c747647576d3650716a2b4672714c554a6a45734f6c586b6a334541434d32397777355835547a675541656c55566d2b494e596938502b486452316559626b73376435697638416549475150784f422b4e635733693378765958336871505574433073727175495a4c653375473838532b58765a7348355652634849334f636438385541656a555677756e654d395673745a38513233697144546257313071306a76544e59797953684562643872466c425a766b4a3441376347756431623473616a42616e5672433538486e54346b4d7261664e7241652b6c584763414a6c4662322b62306f413963724f4776615839733147314e3747736d6d78724c656c38716b43737059466e50796a35515431344743635a466372632b4b664532734a50642b466248536c3079306b5a4a377656707046457854496b45616f44674b5152764a7753446745636e43306655353450434e6865336c705a7a6168347931497a33454e32504d6953315a537833446a4b7262786744746b6a5065674431574b574f65464a6f5a466b696b554d6a6f63717750494949366971756e36745936713132746c4f4a7673647731744f517041575663626c795267347a67347a7a6b6451613450552f476669684e416b3854614c70656a772b47626142706b46394e496c78637841664b30617175314166345132535152307a567579746466384c2b414e4d67302b5852553153525450657a61764f38635a6d6b79376e35526b6e63783434346f4137366975503841414869712f774445397071513142644e6b6c734c6b572f327253356a4a62542f41434b32554a3534334476566e58664547702f326f2b686547624f317574575345547a53586b6a4a6232714e6b49584b676c6d59673455646753534f4d6748543056353570666a6258594e503856586e694b3130784939416a45624e594d374c504f4533734158786759614d41486e4a504e61313934683169773076777a424a426148584e577549595a5977726556474e7065596762732f4b7173427a31786d674472614b3832316a346c74635846316265484e54384b327a57737a517650726d706556765a5468746b532f4d526e493345726e47526b594a366e775634696c38552b47494e566d6768686c6553574a68424c356b6246485a4e794e335537636967446f4b4b346a786e34673853614c4d30756d3366684f32736f31444f6458764a49355839514141414d3941636d6c6a38615831786f6e677a55467334595472747a484650472b5738744769643871636a6e35526a4f65445142323146637350454770366c6636742f593661656450303954414a37746d525a726f4835674847634967344a77637353426a6161786644506a4c583772786f50443273503463757a4a627958486d614c63764962634b564157554e334f345936554165683056356a71506a7a78562f594775362f706d6d61542f4147547039334b734d31334d346161474968574b7175636b7348414a4b67636347756a3144784e7163743746704767366242633675625a4c6d362b3154474f43305273376437425357596b48436764415363635a414f726f726762727878716668797a6773764536364844727430372f4147635233336b327252716f4a6b6435426c426b3764754378374447534d6d782b4b4e2f613357707836764e346331434b33302b66554935744376544d45455a55434f514e2f45537777654d2b6c4148716c466563743474386232463934616a314c51744c4b367269475333743768765045766c373262422b56555842794e7a6e48665046535265504e573072563962732f4574685a443748486276624a70636a797449387a46493453584335636b64634b4d65334e41486f56466565336e696a78746f6d7061586336316f2b6a4a6f392f6478575a6974626c354c6d42354777724d7a4256594138454b507871642f452f696a58376935506843323045326c70645062794e7156784a356b70516c58326f692f494d6a6773666646414864305656745a357870634e7871535257397749513977715075534e735a5942753448504e6561332f7854754c3648375a34653148776a425a71537754563955325845366a503359312f315a4f4f4e787a7a796f36414139556f727a32773863362f346876624744514e49736d387a5234722b364e334f7970424a4d663361626c424a4746632f63352b58705739344731362f38522b475576745467743472745a356f482b7a456d4a7a473551736d65634571657441485355567833696e783561364a715930613275644b54557a434a6d625537356257434a5363444c484a5a6a672f4b6f504179534d6a504a6e346936786565487645476e5453364c633674484842623264356f6c795a59486c7558614e4238325347556a4a485041365541656f615471316a726d6e5236687073346e744a437753554b51473273564a47514d6a495050513952785632714f6a6158426f6d6932576c3277784461514a436e3055597a584476347338616170706d74616c6f476d614d4c47307570343757652b6d6b426c6a692b566946544f346c6c66424a54747761415052714b344c2f4149546a567451547770486f2b6c5154586d72325458397a444e4c74574349494d664e31475864526e613347654d305165497647656f6d37307a546450304f58564c4b526b764c71536556624f467a3879524c38752b5267685573634b41546a36414865305635317050784331692b696b30647447743566466356334c61766278546c6259434949586d4c344a56503369344743784a4139534c552f692f572f43316e4a4a34796830574f57655a5964502b7858544a484b78334568326c41434251415378344f65426e41494233644665547038564c37547458513672632b467237545a6b6c66626f6d6f6d34754c63527850495334494159485a6a6744725852616671336a7655627930766f724877352f5973355174456c354a4a63496a486c74775549534635326a76336f41376169754975664566696e5866745465444e5030707253336c61455875717a53425a35454f484561494d6c515152754a414a4278774d6e5a38472b495a504650686130316161312b797a5347534f5748654743756a736a5949366a4b6d674465716c6236745933657158756d775469533773684762694d4b66336538457143635979514d347a6e47505556796437346e38533671626d35384a32656b6632585a5450484e6536724e496f6e4d5a496b45536f446741676a6565435165434f547a2b672b4c346441384f322b706167316d6d752b4b5a706452574f37753167686a6a3445652b526877716f49774141535365423149415057616a6e6e687462655734754a593459496b4c7953534d465646417953536541414f633177506848787a716d712b4b323054555a2f446438736c744a6452584768586a544c45717371374a4165353364654f6e5374377866716a5779615870554e7261336332735871326868756b33786d484261557375526e434b33346b5a346f4136474b574f65464a6f5a466b696b554d6a6f6371775049494936696e31775633346e38537a366c34687450446d6e6153624c52315346626d396c614e424b49393867776d53516f4b444746372f4e56422f486e6974764466682f583030545459624b2f6b7434356f7072686a50495a57436a796c55594135444173784f4f6f464148706c5133563142593263393364537246627752744c4c4978774556526b6b2b7741726a5a7645666972564e663133542f414133702b6c5357326e474f33573676356e52544f5533754d4a6b73414751597776666d734b2f385433666976346461565a3373635670653633664e70393049582f647246453747346453655170534a783762757665674430367976494e52734c653974575a3765346a57574e6d5171537244494f4741493450635650586c4e3538554a726d315334384e332f68433273497675783674716d79346d52632f646a582f566b67444734353956485162582f436361747149384b78364c7056764a6436785a746633454e784b56574345494d664f4f655864426e61654d385541643552586e466a3473386258746e346774313072517871476b3344524e644e63794331774544344177585a67434d35326a6e714f6c4e58347078796150705367365461617a65324b586b69366a666932743446663775574f57596e6b68564234366b5a475144306d69764a3766346e3679756b6131464c486f57706176614332537a6c3065354d317463537a7579496879515151526b6a64307a3072704e5038414558695666486c766f65723666706b56726457556c7a4562575a354a59396a4b704d6d5142795748417a6a314e4148615556354c34562f34547a562f464f702b4a72582f4149527a2b7a3771392b784d30356e4d693230456a4a2b363238632f4f636e717837444146335766472f696a517462746c7557384a33466e6358636476485a573137493136776477753441674134794d6a48464148707451584e3761325a68463163777747655551784357514c356b6879517135367363486763384775526e38522b4a39636b75573848366670623256764d304a7664546e6b565a3352734f49305253534151563345674567344241356a757645346a317a5a72646c5952322b693657757036684b563835726134664956596d39646f6b35786b35474f706f41374f3875376654374f613875356b68746f454d6b736a6e436f6f475354554f6c61682f616d6d77337632533674566c4735597270416b6d3373536f4a786b633450497a7941654b382b3853654a7647466e6f762f41416b4635346130582f684834475365617875706d6538324267556647504c56314f47786c69434f446b5a72517650466e69613931507844443465302f544773394b5649786458387249766e6558356b6749544a62415a426a4338352b61674476614b79504375727a612f345530765637693357435738746b6d614e546b4c754765506276577651426c366c346c30485272686266564e623032786e5a4136783356306b5446636b5a4159673479434d2b787158544e62306e576b6b625374557372395969424962573453554954307a744a78586b4b612f704f70654b2f4547713676344331767846484a64665a62476548523175345568687968324d78787a4a35684f505566516458487244615a646146706e6844776e61324d327178793374315a334543326a5178496f5547514a39316937494f6a4847654d30416568555679766776583959316c39617464627472474b363032394e735873585a6f6e2b56587743334f514741505436436e2b4c50476c6c34596b74624e70624d616865426a417435644c6277717139576552756779514d41456b6e6763456741366571567671316a643670653662424f4a4c7579455a754977702f643777536f4a786a4a417a6a4f63593952584465462f482b6f5833695762537457756644643544396b6c764575744476576d5746455a52746b7a332b624f654f6e53746634637853542b4870646575464975646375583142743356593234695838493151554164665258435833696e7850643672346a742f4439687062326d6b6849686458387a49766e624e38672b584a59414d67786865632f4e57632f6a7a7857336876772f7236614a70734e6c667957386330553177786e6b4d7242523553714d4163686757596e4855436744307969754338522f454f4f31314f38306252373751494c2b307773302b7461674c654a48497946565238376b44476359417a6a4f63675a64683853745a76744d67743765793075393170395858546c617875504d745a6b45596c6b6c52695151416d6535776364656c4148714e5574573157303058545a622b3864684648674255557337735468555652797a456b414164536135725150453275532b4a74623072784261616262705957305630736c6c4d38696f6a37766c6373426c766b4a794142697155336971386d2b48466c346d754e4e73704e5575706c4f6c5153526b68486d63787745354f64327877574b6b63467355416431617a4e63576b557a323874753869426a444c74336f54326261534d6a324a4646505464735865515878387855594766616967446d2f474f6b3375757270476d777737374239516a6d314279796a6246466d514c676e4a334f714467486a5054725658554e45314b302b4a656d2b49644d742f4e744c713165783152524b4632714475696b326b2f4d51636a6a6e422b746468525142354646345231665374557637656234652b4876456356316654334d657033453055626f6a7358416c446f7a45676b6a35662f7231726172706572322b6e57756b7766446a514e533032554353573367756f37654f336d4a4f54745a506d41473335674d6e6e6a74586f39464148683850682f5774413176544e4a3062544c6655583036346d3136363074626f7877774e494446424446493437664f3349475343654d69757531507770726e697a5474547639586a74724c5535644e6d736450736b6d38794f323877664f7a7942526c6d776f4f426741635a7961375732306d78733953766452676732336439732b30536c6d5976734746484a344147654267636b39536175304165647732666a50784a6f49384f36706f746e6f4e687357327572694f3945377a776a415a596b56634948584b3559354150544f4b313946306138732f45327636784e5a424645554e6a706b4b73764e76456d376a6e6a6337734f63666448466462525142354e5a654766466d67542b47395a74744774395576776c30326f327a3361514747653564586477324742433432385a4f42786d74552b467465312b5078686336784662324e2f71566b4e4d7368484a356b6151684353647735494c794e6e494277765156364a525142355070506872556e386d7876766856345368614a55535455476b68614f54737a4c4749792f76686950723372734e423057366838583635724633617262784d6b4e6870364b56774c614e643251464a786c336267343455635631464641486b5558684856394b31532f74357668373465385278585639506378366e6354525275694f786343554f6a4d534353506c2f38417231306d672b474c71333858323939636150702b6d57566870355333687346555247346d664d70414744777152726b7175636e384f356f6f41346577307a583744772f347131534f7942385136706354793238426b54674b504c67426264743456565938397a3036566a3233687a784a344a3171787550442b69573274576e396b322b6d7572337132386b4c497a4d7a35594546535779635a4f6533723668525142774678705069577a2b33612f4a6f2b6e363371392b45743564502b30434b4f4730554845534f3634636c324c457341446e4859557a7750344d6c30337846636549706446746644766e32677476374b73376a7a564a33626a4a49514175346341425236386e4e6568555541636438517644742f72396a70636d6e3264686676595879334c32462f77443671355459796c546b45412f4e6b5a474d316757576b367a47693668616643727774706c334164795274637847596b482b466f34734b636438313668525142356c345a3847584d2f69367938533348686979384b7461724b4874724f37457a335263592f65624145436a6c75354a783078574a486f6e78456a384b334f68743465745333396f4739764c6d485531542b30316555795045677744486b454b575939426a48504874464641486c326d2b4337702f465769587a2b446446304f3173566c75543969644a48616261466a5233437166346d624142487967357a785658562f4365742b4e37746f64583846365a6f3130486a4c6139446669535843734354457171477a675947386a47652b4d563633525141674731514d6e676454586d336866516d317a7835726e696953346554525465712b6e7734776b73306353784e4e367341517972327a6c68324e656833746e4471466a505a33416377546f5935416b6a4953704744686c49492f41307470615739685a77326c72436b4e7641676a696a5159564641774142394b414d337858706478726e684856394b744a455334764c5357474e6e4a43376d55675a49375679634e6e347a3853614350447571614c5a3644596246747271346a76524f3838497747574a46584342317975574f5144307a6976524b4b4150506c302f78506f2f784b756232793850326c396f39316257316c6233417656684e6c44474357444b515332575934432b673546614f68614e724e74707669572f6b534f31317a56726d6557487a434757494b766c32346261534341717178352f695054705859555541654a447748726c2f3455476e5866676a534964526c4d6476646174506478334e314a6c6c456b344c4c387032376d487a6c68774150545938526547395a38537953364e642b4164484d4b524e62326d737958342f6378394549514c356d344442786b4449363136725251426a6237667768344f4433567a4c4e427056694e3838707938676a547166556e48363177586847323866512b4866374b6652624f776b76326b7535395a4e34474b504f78647351376337314441636e47514f5458704f7136545a61357073756e616a423539704c7438794c6579687345454134494a47514d6a6f6568347137306f413476522f436236643475736a486265566f326936554c54547957556c355a477a4b78357a6b4245484947537836397372786834613152764754612f622b46644a3855326b74696c73624b39654e4a495856324f35476b425842446e50666a382f53614b41504a3951384b363341756c613170586762514c5338734c395a323079786d6a6a655a4e6a4c6c706469726b46386759375a3536567365485a645338546550726a567454744c6133683061324e6e4174764f5a6b382b556870634f565863565659776344414c45633434337645506754773134727662613831765331764a375962596d61575251426e4f434659416a507144573159324670706c6c465a324e744662573051776b554b42565565774641486c3058683378796e67792f384e79615a70774f6f33637632752f6875387536547a45794f4979414268475038525041345062724e45305738737645757661784e5a6246574747783079454d755774346b33636338626e5a757550756a675631744641486c313934543853522f444c54374f3273626536316154556f395431577a6b6d5650505979475a3431666c63373969354a7867486b30757661643475312f56644776395238495756377034746e5362527074555879344a792b524b376264736d4641414155344a4e656f555541655661663461313751626e573956732f42656979535854525769365a627a78775250624b684c4d726263457337592b634c6b494f4278576e344838475336623469755045557569327668337a37515733396c57647835716b3774786b6b494158634f41416f3965546d7651714b414f492b496d6c6135716730662b7a644e693162543462686e763841544a4c6b5143354258435a593846564a4c4653446e4134716c345838487a326e6a687459755044656b364c6232316a3556764870327867386b6a5a6373775653785656556371423835786e72586f6c4641484d2b4d644a76646458534e4e68683332443668484e71446c6c47324b4c4d6758424f5475645548415047656e5767365465336e7848585672714862702b6e3666354e6b785a54766c6c624d725942794d4b69446b44716574644e525142356e666543395a316a776e346a4d734e7448724771616f4c7751585244784e4644496f696a66615343436b594a353673656e5a6d6d2b4737792f6d3871342b462f6866524170492b316c345a6d474277364b6b5937394d7343507772302b696744795330306a78303377365477653368327a736f56524e506c7530763164704957594c4a4b7159414132466a79323750384e612f696e7766716d7658326f7732734d6346706136453968706a4f7732744c4c784a304a49415245586b4437783631364a5251423571396a3476385361626f656b3670346274644b30784c7146723145766b6e667934666e41494141415a6b5159557363486e474b717a2b47646675664665745436723452306a5859357267795756396633616c49594d414c45734a5675526a4a2b364357366976564b4b414f592b482b67532b472f42746e5a584e764662336b686134756f6f676f564a5a474c4d6f323859584f305934776f726d72753438542b44646538563671756a57567a70563052664855706233792f4b52496c58797a47464c7351463441774f65764e656d5653315853624c584e4e6c303755595050744a64766d526232554e6767674842424979426b644430504641486e6a65464e656e2b462b6d5731746232303270334e2f467175703239772f6c6959744c357a7837686e423362526e6e68653962566c7058694456764768316258624b3373596250546d67736c74352f4f416b6c6239346432464a495645483356487a484765746474306f6f4138623050776672476b5756766f3133384d76433270766278375037586b6d69565a674477575578732b3748552f77443671395261776d732f44556c6a704d646e5a335357724a6272464673686a6c326e42436a6f75376e466164464148695138423635662b46427031333449306948555a544862335772543363647a64535a5a524a4f43792f4b647535683835596341443037667831346231625662507735612b486d5732617931424861664b2f364e43496e517341657047345947447a6a746d75326f6f41387938522b4574546731625137585466443172726668717a7447672f73363576424371546c732b644a7544655a774d64436373783730756a2b46395930534c785a71316c346630367831536533573130327a73504c574968557a767a387563794f636c7470495163446976544b4b414f467676434e796e686a777434567334664d3032337549447145705a522b3768486d6443636b7649713941657036646172693238596142347a317934307a772f5a61705a61784f6b793354366749446237596c5461344b6b6b664c78744272304b6967447a547858345a316876466731395043756a2b4b595a62434f326b7372703052345a465a6a756a6151466470336e493638666d312f43463766523666626638414349614a6f6c76507145556c384e4f4d624d4c654c4d67563243707533534c474d4b446a4250666a30326967446d54704e37656645646457756f64756e3666702f6b3254466c4f2b57567379746748497771494f514f703631794e35345638544654346967303243343167612b2b7050595454716e6d514a47304d4b68786c51775461777965437836644b39556f6f413456395038552b494a7258563956307978736e3031586e73644a2b3165647675697531586c6c4367414b437741554837326338437357333849616a346a3854574f726168345173504446785a587133557437625879797a3357332b454246414373635a4c484f41526a6e4e65715555415a50696a53706464384b3672704d45717853336c704a416a7430425a534f66626d7650644a384e616b2f6b324e39384b7643554c524b69536167306b4c5279646d5a5978475839384d523965396573555541634a706d6a36337058687278526632326e497575366a4e4d3972617130594349712b5662726b4e7441434b7036397a303656302f687a52342f443368725464496935577a7430697a2f6549484a2f4535503431715555416557617834573157303859367671493845614a3471744e546d696b6a6b7570596f35725845616f515449725a5835515146352f706f5750684f386258394265547737704f6b5746704a4e665845656d684e686e432b58437049436c6941386a5a323448417a362b6830554159486a54574a6444384936686557773358686a386d3054476430386843526a2f414c36595679476a614434727576436474344c76394974644a307143424c5736766f6234545064526744654930436a5a7635424c48497963646a586f4f6f365459367362583764423577744c68626d45466d415752633757494277635a7a67354763487142563267446c7441304f35742f4675743674645779775246494c44546b425534746f317a6e676e4758647544673455635667614a62654f6644747a71576b576e682f5472693275623634753474576b7639694153794668766a436c797742375948474d313652525142355a5a2b4750452f676e7847756f615070567434684635614a4265545358533273676e4d727953536e4949326c6e7a675a5051647176654d504475753672643646726261426f2b745332634530643170467a494447544a74494d627575336343674753422b47655052614b41504d49644b31717a747a6632587772384c323070516f396e4864524c4f364d4347587a424545486f526b67357131344f38457a324f74586d764e704672346261357376736f30797975504e586357336559354143376877414648727a7a586f744641486d5068757938663666345969384a726f2b6e6161747242396e545768656956534d4835306843354c442f614b6a4e6433702b6977364e34626830625450334d5676622b544378357763594448314f6554576e525142354a61615234366234644a34506277375a32554b6f6d6e793361583675306b4c4d466b6c564d41416243783562646e2b477233696e776e714548696c4e58736643576b2b4a72442b7a34724e624338654f4f53416f7a4546476b425847473548586a382f54614b414f593849364e39675765366d384c614a6f55386d4657505467724d56362f4f366f756565774862727a773266544e5175666941327354577536793033545446594465755a5a70577a4a6a6e49777149764f5076487232366d6967447a6f654639635434564e6f7177442b324e586c4c616b7764503358326954644f3263344f31575944425051646176654b37567250554e4876706f42483464385032382b6f53766c655a556a325249467a6e674d35344855446e7458623153315853624c584e4e6c303755595050744a64766d526232554e6767674842424979426b644430504641486d336847323866512b4866374b6652624f776b76326b7535395a4e34474b504f78647351376337314441636e47514f54567a5550683963586233476c576b5974644c7364416654644d6c646732366162506d4d63486430524163675a334e3172307270525142355070506872556e386d7876766856345368614a55535455476b68614f54737a4c4749792f76686950723372724e483065397476464869445770374a59783555566c70734b46426d3369586478673458644937444278674b4f425857555541656444777672696643707446574166327871387062556d44702b362b30536270327a6e4232717a41594a36447257627150672f55644c3855616c6451654274453855574638384a6761356b696a6c74417361786c535a46624b44614d42656636657230554165655750684f386258394265547737704f6b5746704a4e665845656d684e686e432b58437049436c6941386a5a323448417a36364b614e72556d742b4c645a574f4f432b6e746c7364494d724172735243776474704a414d72746e7668527836396c52514235464870486a70766874612b486f2f4463466d644f65336a6b6954564633616c43687a496f5a51424676494855394377497131592b4237713438533650645034513062514c577a6a6d754339693653536564744352713768564a78755a7341455a55664e6e697655364b41505076416b506a4c524e507350446c2f346473494c4b7752596d314a4c384d4a6c47546c4967753750727549363539717158336844586453384c612f4d6265424e61314c56307652627a79445930554d69434b4e6d5849356a6a422b72647533706c4641484253326e69727868625736612f6f6c7470476e323871334531696c34747a4c654e476479495741436f75384b78354a4f414f4f61726a777672696643707446574166327871387062556d44702b362b30536270327a6e4232717a41594a364472586f74464147522f784d375857394f734c4b7a6858524937562f506d596a637272744561494e325278754a4a556a6763697066454c366b6e683355546f38486e366c396e6357735a594b44495268636b6b444765657461564641486d66684f2f3862614a70656b6145666831354e6e624a486276644e726344625634445346514d6e7532425852365a706d6f4a34743852362f6557767a756b5670703859646376424770624f633862704862726a6f4f425855305541633534473065363058777262786169675855376c354c753941494f4a35574c754d6a494f4363645430366d755a38596547745562786b3276322f68585366464e704c597062477976586a53534631646a75527041567751357a33342f50306d6967447a6136384c616a503452314b307376435769364a65616d59374e313034786c6b746e5943566e6661674f464c595541386a763072304952697a73424661773768444674696955675a774f4647654f324b6e6f6f41383648686658452b4654614b73412f746a56355332704d48543931396f6b3354746e4f4474566d4177543048577476564e4475623378523461696a746775696153736c797a626c78357755527849426e50415a327a6a4841357271714b4150496f76434f723656716c2f627a6644337739346a6975723665356a314f346d696a6445646934456f6447596b456b664c2f3965756b3048777864572f692b3376726a523950307979734e504b57384e6771694933457a356c4941776546534e636c567a6b2f68334e4641486e4e7a3457312b2b38462b4d4173634e76726d76584575456d5946566747496b556c53526b784c363846756653724d476c65493957385165484271326b57656e365470516535456476644366393871655845704a56534d426e6241556759487a647137326967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b6f33657336585958554e7265616c5a32397a4d43596f5a5a3152354d6464716b35503456583855617a2f414d4939345631545677676b617a746e6c564363426d4134422b7078586e50695477786f39743442686a75625777314c7854726868747866334d53795453547a454270464a475145557351467741464134785142326e6733576276566644302b75366e644b747264334d73316d485659784661377473655437676269547a383362705737702b716166713174397030322b747232444f504e74706c6b5850706c5352586b312f702b76612f3472766445304f44777a63615634656968736f394e316b79736f506c71336d2b55677763353267746e473034786b353658346565464e51305456645a314c55492f4431733930734d497474425230675570754a4c42756a486550772b7441486258326f324f6d5735754c2b3874375345645a4c6956593148346b3470624b2f733954746c756243376775376476757977534352542b494f4b345857395466785a63366861616234653044553754534c6c7265653731795165556b7755466769684750475143546a6b4556782f687a3756612b4649516a32576d4e3473313779432b6d4b5959597264464b735963386a65496d4150482b73424861674432615056394e6c31427243505562523731426c72645a6c4d674871567a6e73614a4e583032472f53776c31473053386b475574326d55534e39467a6b395258432b4c6448384f2b4476446a332b67365270566871304c783231746470436976624e4d336c65597a597963426d507a5a7a69724f722b4776436e68507776643672466f6468646168707475313948504d69746353797038776b61512f4d53577753633936414f77763841574e4c30746f6c314455724f30615a677359754a316a4c6b39414d6b5a4e4c66367470326c5777756452314331733444306c754a6c6a5838324946654e572f68447866714769432b7662623464366f4c754c7a47314f2f4538307367595a33655a6a41363842634b4f7741464f753945757642656d78366a724767364c3473306d4733744c61475353554e4c436f52497973534f704441766c67415154756f41396e2b3332663250375a3972672b79347a35336d445a6a3133644b6259616c596172616936303639747279334a494574764b7369456a72797049727a2f5239443050577646477361666332466f4e4630426b68744e4b6456386c4a48587a5a4a6d6a36456b7674476367414e6a7161742f443354624350784434703158524c654732304f356e697437574f3347324b5234564b7979496f34414c4572774d485a6e765142732b4e395876644d30693274744c6d454f71616c65525764744955442b58754f586642342b574e585050484136394b334c4c5562472f6761577a76626536696a596f386b4d7175417736676b63416a754b3433554e50732f462f784c4e706651706336626f466c6d534a79536a58452f5a68304f49313648502b732f506e2f44477032576a574e302b6b3654625379654b645675463076546b4b77774e42456d3075654d4243454c48436e4f384442363041656c326d76364e66337232566e71396863585366666768755564312b716735465759622b7a75494a5a34627543534b466d5353524a4156526c4f4742493645594f51656c655261646f4e784c3856644773356445384b36594e506a6b3143582b78497a357134426a565a4832714143584241782f43616c384c6c2f452f3973654659664d57786a3175396c3165594b5144475a6d4b77416e71582f69786e43676a676b5541657432317a42655730647a617a527a775371486a6c69594d72716568424842464e6a7662575a376849726d4633746d327a7173674a694f41634e2f644f43447a324e4a6458467470656d7a584d705347317459576b6338425552526b2f514143764c49727161332b456f614f5a46317a7866634630437638414d48756e786b647a3563524830326471415054313162545768745a6c3143304d563263577a695a647333426235446e3575415478324270396e714e6a71454c7a57563762334d534d5564345a566456596451534477523656775a304c5464643864322b6a53323063326a65474e4e575079477a355a6d6d4741724c304f324a4f687a2f72507a795044477032576a574e302b6b3654625379654b645675463076546b4b77774e42456d3075654d4243454c48436e4f384442363041656c326d76364e66337232566e71396863585366666768755564312b7167354661444d465573784155444a4a37563433703267334576785630617a6c305477727067302b4f54554a6637456a506d7267474e566b66616f414a63454448384a7275506950714c3258672b613074356c69764e566c6a30793259747449655a746d523768537a66685142754a722b6a5354576b4d657232445333693772564675554c546a47636f4d2f4d4d656c546168716d6e6154622f614e5376375779687a6a7a4c6d5a59317a395749466562654a504358687979765044656a614c7046716d6f323931446479334d55594d304e74414e785a355076664e6855414a354a342b37574270476c2b4c2f41426870332f4354505a2b41395568767930306236754a726837644365496867625532347868514f5153636b6b304165326d377468612f616a635243333237764e336a5a6a317a3078584e362f77444544516447384c33477477616c5958364a386b43513369596d6c4a77454444494850553967435477445846512b43745973764475695738554f673633625744584d313570627a6c4c55764b2f6d495533416a4371634463503473315430717a384c2b4d7462384b5232336858544e4d382b47585662363145455a334a4557686a5867414d6a4f374e6e48495563656742366e622b4b74416e303172396463306f32305a32797a4a657874476a5979564c357856704e5a30796253354e546731477a6b73555573317973366d4941444a4a6348414876586e317a4859616f3270615a345a384865465a644f307137614b356e314a5569675734437276326f7362636745417363644d6471355851644e625566444d476c5044593235385736307a797761597252514c5a572b504d614d5a79466279385a342f31672b6c41487039766361732b76545730506948544c705a725a586b74636f4a624e6a2f4847464758512b6a39786e63527857786365494e467372784c4b373169776875333457475735525a475073704f61383776443464384c65504e563132437774374f78385061562f7062577361713839784f774b6f7834334e745564546e4d6736566a6550644d3154554c5242503456384832567a72567848624a49325a37386d5134334b51696a636f2b596e63514144316f413976716a64367a706468645132743571566e62334d774a69686c6e56486b78313271546b2f68564c583953587770344c76722b4e504d2f73367a5a6f31592f654b72386f4a397a69765076456e686a52376277444448633274687158696e58444462692f75596c6b6d6b6e6d4944534b534d67497059674c67414b427869674474504275733365712b48703964314f3656625737755a5a724d4f7178694b31336259386e334133456e6e357533537433543955302f56726237547074396258734763656262544c497566544b6b69764a722f543965312f785865364a6f6348686d343072773946445a523662724a6c5a51664c56764e38704267357a7442624f4e70786a4a7a30767738384b61686f6d71367a71576f522b48725a37705959526261436a704170546353574464474f3866683961414f73317537757265306969302b35303648554c695a4934426675516a3835634141677332774f514233485047616b6e317a5362587a667447715755586b794347547a4c68463253454168546b384d515267486e6b56796c2f6551586678486e764c6d52527033686254576d6c636e685a3567536339675669512b2b4a4f33666a72377735597a2f44466237554e4d747076456e696937426965345465384d6c793449326275563252595047503841563971415054764676696d7738492b48353955765a5977514e7345545342544e496675714d2f7165777954774457486f57713356737638416233694478376f747a706b385778494c5a496f62614f584979524d585a6e7879754d3936712b4b7450302f562f4650687677376357734e315a3658424a7164307371422f33614c3563614548737a4d547a31387638737277766f3367356668372f77414a5a3467307a535a457549354c6c6739756a5232735a5a6d57434a63595847635955416c6954314e41487145312f5a3239736c7a50647752514f7971737279425659735146414a344a4a4941396331442f41477a70586e6d442b3037507a684c35426a383964336d6264327a4766766265636463633135586f656779334e70344c3847366847367832795336316532336d746d464e3765524553446e68704f352f355a486a303255384d6144716e78446254494e4973597448304b303879573268694352535856774d664f71345669496b37353463554164304e6330687243612b5856624532634c465a6267584365576848554d3263416a337165532f7334724d586b6c33416c715644435a70414577656833644d563544593654346374764176697278584e6f6c684e5a33567a4e4a70746d30514d4f3166334d4a524d62517a734d35555a2b6364654b3137565a49744774764156686f756c3631636150593237366764566b4332385473704b6a6274596c75436567414248504e41486f656e617670757351744e706d6f326c374570775874706c6b55483671545248712b6d793667316848714e6f39366779317573796d5144314b357a324e654761544864783676662b57756a365375723670446f5a6c304e544641736361744c4b794d635a6367695063414d484a4849723062577449384a2b436442753962303351744d677638415449476132614b46566c3878314b4970594463537862627a6e4f61414f697374536b65585572753676744c62536f35516c744a424c6b6f46474a424b784f336348334441364163383155736e2f747a562f774332597462676e30653242573169302b363352794e6a35354a6d5868694f5145354178754f535146346e77623462736451764c72534e6457433974664473554e75746e6359654e72683038326134645477535763674673344162314e5a727857396e5a654c376a777a464661574f76336c766f756d4a625a534e35655935706b556341444c2f414852672b55546e76514236334472656b334d31764642716c6c4c4a63782b62416958434d5a552f764b41666d48754b7631356e4c3455304b792b49506858536449303232676c303243532b756268452f66474e5638714a57667163735365542f7741737a2b486f73463561334d73385676637779795737374a6b6a6b44474e735a7777485134494f443630415261727156766f2b6b586d70335462626530686561516a2b366f4a503871776442385172596547644c6b3857363159322b713363596c6b53346c6a68777a2f4144424658492b364346376b34366d7148784d764948734e4e304f65565567314335387938596e37747041504f6d4a39734b716e74382f3456794869362f753957384c79654b783451384a4331754c5a58747064572f665863714d427356565650766e49776f66676d6744325a48575246644744497779724b63676a3146567237564e5030754e5a4e51767257305269465672695a597753654d416b69733777787068384d2b43394e3036566937574e6d6979456432433562483435726c76434768364a3471385077654a2f45566e59616e7147724579623774466c57424378325152377546436a41347753636b386d67447652665768754962635855486e7a495a496f2f4d473652426a4c4b4f7041794f523669686451736d4e79467537636d316262634153443930634134626e3554676738396a58426146633656622b4a764575746d533374394c3043435052725942774669574e664d6c7836664d5658482f544f733351722b5a6446747446585272545539653852787a6133655774394945686a696b6359387a4b735467464541322f774870696744306a543963306a566e6b54546455737231346a69526261345351703964704f4b79504447713332743676346775336e7a70554635396a73597767484d51784b2b635a4f5a4377394d4a78366e7a477a615851664533694458704e4c384f57523048537a4848466f635a564a6269636a7934336241334f43754d42654e34723172776a6f762f43506545394e30746a756c6768486e503365552f4d3748334c466a2b4e41463355645930765234784a71657057646c47656a584d3678672f6978465062553950577a6a764776725957736a4b71546d56646a466a6851477a676b6b34487161383031765632385761545034677376446e685735306d31457151616a7237683977526d444d71716877704b6e4133416e32724b384d36474e517366422f6871376856496e3833784671467446756a574d4d7838695061446b4c75666f542f797a4e41487346767164686479584564746657307a3278327a72484b724749347a68674438764872584f2b486669466f58694c5562327a74395130395869753274725652656f306c3246554575716464756477474d354335365679455436503461623467654a724454374b3130327968585459594959316a696d6c52666d79414d484d6b697030503354394b726135345a7476434867767731706d6a57656a577669472b6c69736a71303859695a574d624e49664e55627758775542427a682b43446967443159617a705a31502b7a4271566d622f4147377673766e72357550585a6e4f5077704c7257394a7362794b7a753955737265366c2f774258444c63496a7638415253636d764a6d38412b49446636594e5273506839706b634e37445039707349706b756d4b4f4777724e39346e474f5433716253644569736464307a777834753847364c714e31714b7a4d6459695a5a70705751626d65514d75396335417a6e414a4146414873585773665676464f69364e48642f6139537446754c5732653565323835664e324b4353516d64336230716a34383169353050776c504c5979724465584573566e6279746a4554797545442f3841415153325061755138566544504443506f48686d303071786c3148554c3547756271534a58755444482b386c6b64794e784c6251704a504f2f7744436744745044756f336472344c736452385533304556314a4435397a4c4d5568534c646c746e59414b43427a7a787954573161586c727146716c315a584d4e7a6279444b53777548526837456347764852612b4b66472b746176716c70612b443951734c61386b73344c58572f4e6d4e6f4969562f31616a59706237325343337a446e4141486266446a7733642b48644b3146727a2b79566c767231726a796449444332694731557767626b636f632b3941472f716437637858326e32746e646162484938706b754937707a356a573667377a456f504c42696e4a34414a7a3271574857394a755a72654b44564c4b5753356a3832424575455979702f6555412f4d5063563568346a765a74533148785066576a2f414c2b346b68384c6157774a794863356e646663466a6e482f50486b3863614d76685451724834672b46644b306a546257435454594a4c2b367555543936593158796f6c5a2b7042596b386e2f6c6d6677414f366c7537702f454e765a32747a7078743434576b765958636d3547634349716f4f417049664a505847423371655056394e6c31427243505562523731426c72645a6c4d674871567a6e73613871462f4e665179366a4664473150692f58525a5233615074614f7868444b4e6a6469346a6642474d65626b63386e714e61306a776e344a30473731765464433079432f3079426d746d6968565a664d6453694b5741334573573238357a6d6744646831794f4639527664533158526f394a5362793757564a3846646f78494a5759376477634d4d446f427a7a576e5a366a59366861433773727933756259394a6f5a5664502b2b676356355a706b44336668784e41302f514e4131574851574e76653332755344792f7465304e4d565859352b383579784935794f617a4e4453357376686871317842485932742f77434b64532b785763576d6f306343686949643853396362566b6b7a78787a785142374842712b6d33556b456476714e704d3978455a6f566a6d566a4c474d5a5a5144797649354848497161367537617874704c6d3775497265336a4735355a6e434b6f395354774b793944384a61443464574d365a706472424f6b49672b30694d475a6b4141775a44387848796a676e734b35754f33735047486a48585831784c6535307651336a7462657a754d4e454a536765535a315042507a42526e4f417078314e41476c2f776b4d6d722b4f4e4d303752622b47585459724e37362b6c6732794c4b474f7946412f5055683234352b556334363777316e537a7166396d4455724d332b3364396c3839664e7836374d35782b46654d6776592b48627537384d783664704d766933585073646e4c6e375044486252686c5842515a486d6557324375442b3979446e4271786465436462744a624f363169773841615861574e776c394e646164444d6c337369506d4e745a687953464f636e314e4148646e785371654e7456573831573273644330753369676b4e7779527139334a38352b64763771624f41635a6339653357766351783235754a4a6f3168413347526d415848726e70697649303062513450686c6365494e65306930767463317a7a4c6d474f34547a4a476e75442b36696a335a4b6b417872786a473350617332313066785271756f2f384939596a7731665776687530747246374c576d6c64576b3870576162793034494a4f30467334436e474d6e49423750702b716166713174397030322b747232444f504e74706c6b5850706c5352574c3432316139303753725731307162797456314b386973375754594832466a6c337765506c6a567a7a786b44723072462b486e6854554e45315857645331435077396250644c44434c6251556449464b62695377626f78336a38507256627850713554786471657170474a346643576b535843706e6872755a53514436455270396353666d416431653678706d6c47464e52314f3074576c594a4839706e534d794d656747534d6e36564e6433317059577258563564515739736f7930303067524150556b38563474622b4550462b6f61494c36397476683371677534764d62553738547a537942686e64356d4d44727746776f3741415654384e364234733175796351522b447456744e4b622b7a49344e613836623750354138736b52714e713769432b53433247417a6741414139775856394d65776a76313147304e6e4b797248634364664c6373514641624f4353534150584e545739376158636b38647464517a50412b795a593541786a6247634d42304f4344672b74654e364a34546d6258374877357150396c474761396c3136397474475a30746f6c6a5659596b586f526d514d7848716d4f334872646c706d6c2b4837435750544e4f74624b33475a586a7459566a4445447151414d6e4148507451424c666170702b6c78724a7146396132694d51717463544c4743547867456b55743171566a5a57663279377662613374635a3836575655544872754a78584365454e443054785634666738542b49724f773150554e574a6b3333614c4b7343466a73676a33634b46474278676b354a354e512b4764493850363946716d723631615745396c70397a4c59574e72644b7277324674436467415675417a4664784a3577564763415541656744564e50625454715333317162414a356875684d766c624f7537666e4750664e454f70366663586a57634e3962535853494a4767535a533671656a465163345072586a746870735633346274394173346a62366234723132533667746b5a6c3876546b77374544716f6349764847504e417271744a305053552b4c6c784a704f6e5774704670476e434f3465336a436d5765647477446b666549524d3835507a6a38514430496b4b435351414f5354576661612f6f312f65765a576572324678644a392b4347355233583671446b566e654b50454b3653316870634e6b6c2f7157724f384e726153534245634b685a32636b4843676463416e6b44484e656178366131703852744f4e396f2f68545362665237616256626c74476a506d6f694b5643797674554145746b444838426f41372b312b49656733506976554e446255644f6946703563617a5358714b5a706d7a6d4e45505862386f4a42504a7831427266754e5a307530766f724735314b7a6875357638415651535471736a2f414f36704f542b4665527270326e614c384978347158536448545864536d573767765a37654d697a65346d425267355537524748422b71394b677676687a347176644a61787662443465703971555274714a533465374a4f42764572354c503954796141505a4c6e56394d736d6e57363147306761434d537a435764564d614849444e6b384134504a3944566c626946376358437a527441563369514d437058317a3078586b5332756a33586848785234343166543766556d757048545431756c3878576a69486b776251325143375a49494766336e47617636566f63567a71756a2b4274555a5a744f3058526f626d34745750793363374d56425a65364a745934365a595a36436744304b5058644a6e73726938673153776c7437594e353079334b46493864647a4134584866505371734f734453744274626e785071656b57743079417979704e35567557503841634d687a6a6b6461343778626f3267326b4e686f6569616259326f3179375437614c4b4a55443274766d575449584150545a2f77506e30714c524c54777a714867682f472f692b33734c2b61386a65356c6c7534316d4676486b6c494977516362527868526b746b39545142324f6c492b6d77546172726d73524e5065756e4175534c57454534534f49484150554464674d35506268527257326f324e374e504461337476504c6274746d534b5657614d39634d4165443961386d3050515a626d3038462b4464526a635257795336316532786c624d5362323869456e4f6342704f352f355a486a3036507752704f6d782b4e50464f7061545932746c595250467073535773516a5233694736567341415a3350742f344161414f2f6f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f41687537533376374f61307534556d74356b4d636b546a4b75704743434b3533536668313453304b57306d30335259626557306b4d7355676479323467726c6d4a4a62686d78757a6a50474b36696967446d74652b482f6854784e664c6536786f73467a644b51664e79794d324f6759715275487363697472544e4c734e47735573644e7334625331544a574b4641716a4a79654256756967446d5a2f683534537574616e316966517257532f6e356b6d594535622b38426e41622f414767416665724e35344e385061683463742f44393370634d326c32794b6b4d446c6a355955625156624f344842504f63386e6d74326967444174504248686d79304358517266526252644d6d775a59436d3453455977574a79535267636b35346f304c77543462384e57633970704f6b57397644634b556d427a495a56352b566d596b734f5477543372666f6f413543312b466e67657a766e76496644646c357a454835777a71434f6d31474a5666774171625376687634503054566a716d6e61446177336d3763736e7a4e73507167596b4a2f774142417271614b414f5a316634652b457464316864573150513761357668316c62634e2f4742765548443441412b5948474b364f47474b33685347434e496f6b554b69496f565641364141644254364b414b46766f756e327261693045425274526b4d7430336d4d544978554a6e4f63723871674144414861737a5550416e686e566445734e4876744a696d734c42565731695a327a4741414141774f37734d355050664e64465251427a456e683631384d574e37646545744274787163305351527849346a6a41424f306b45344367757a48614d747a314e61486876514950446d6a705a78755a5a6e6470726d3459414e504d35334f3578366b6e6a734d4374656967426b304d5678424a424e47736b55696c4852686b4d704743435053756673504158685853377532757244513757326e7470444c4538494b6b4d564b354f443832417a597a6e47546a42726f364b414b46766f756e327261693045425274526b4d7430336d4d544978554a6e4f63723871674144414861737a5550416e686e566445734e4876744a696d734c42565731695a327a4741414141774f37734d355050664e64465251426b615234573050514c6d616653644e6873336d6a534a784343463271574941586f4f57596e41354a7963316a6549764444654b76466d6e776172594a50346573725757566c6b63625a626c7945556251632f4b6d3835344757474d6b6364685251426a2b482f4332682b4672527262524e4e687334327758325a4c506a7075596b6b2f696179482b4676676554553231422f44646b317732636768764c504f632b586e5a6e33785858305541637471507733384836767136367266364462545867786c79574374675947355164726341446b48705532756541764333695365316d3162527265346b74565649572b5a4e716735432f4b526c526b2f4b636a6e70585230554163764c384f66434532727936724a6f466f39374b506d6b4950582b38426e41622f6141423936307248777a70476d7a574574705a2b572b6e3268733758393435456352326b714154676b37562b593838646131714b414d6d54777a6f307474716c764c59704c44716b6e6d3371534d7a6956734b75655478674b75414d4159347250307634652b4539466c744a644e305343336c744a444a46496a4e7533625375574a4f58345a736273347a785854555541513364706233396e4e6158634b54573879474f534a786c58556a424246633770507736384a61464c615461626f734e764c615347574b514f3562635156797a456b74777a59335a786e6a4664525251427a577666442f7770346d766c76645930574335756c49506d355a476248514d56493344324f525731706d6c32476a574b574f6d32634e7061706b7246436756526b35504171335251426b54654639486e733957745a62517444717a6c37346563344d704b6865756367625641774342566d3530657775376a5435353766644a70376d53312b5a6749324b6c4d344277666c4a48494f4d3856656f6f41705261545a51367463366f6b4f4c32356953475755757879695a3267416e41487a486f426e504e59656e66446677647057724e716c6c346673347277734744375377516a6f55556b716e2f41514b366d6967436e4670566c4271317a7173634f4c32356a534b5755757879695a4b67416e4178755051444f65615a62364c703971326f7442415562555a444c644e356a45794d56435a7a6e4b2f4b6f4141774232712f5251426b6e777a7044614c5a614f62502f41496c396b30545738496b66436d4967706b35793243416563353735716e716e6750777472657370712b70364a613364387168664d6c424959447075584f31767842726f714b414f656e38446547727251446f6478704d4d756e6561387769646d4a575269537a427337676373334950476344696c7450412f68717730694c5372545359594c4b4f654f354563624d4e306b5a42566d4f6376677150764535787a6d75676f6f41356e562f6837345331335746316255394474726d2b485756747733385947395163506741443567635972576d3054545a35644f6b6530514854584c32696f5371784d564b5a436767483553514d6a6a504661464641475863615373567a66366e70735553367664514a4435307a7356776d647648494147356a67415a372b7450305052626251644b6a736259732b43586c6d66472b61526a6c3547493673787954576a5251426e3357696162653669742f6332717a584332386c714337457235546b46313235323837527a6a5061734f7a2b4758677a547750737567573054435a5a77345a74323557446a35733532376744747a74344846645a525141454167676a495061755a30763465654564463168745730375162533376536369525153454f4d6649704f45344a2b3642585455554163316666442f776e71567a65584e336f4e6f3978654268504d464b75323768694742424249366b45486b2b745461333449384e6549353753625639497437755330473245766b62562f756e42475237484972666f6f417759764266683243316b7459644d6a6974354c714f38614b4e3256544c48743248414f416f324c68667538644b33714b4b414f525077763841424f2b38662f68487255506542684b774c412f4d4d4861632f4a6b663363645436313046766f396861616e50714d4676737535346f344a4a4e7a4835457a7455416e414133486f426e504e58714b414d6a2f684674452f734b665248302b4f54547268336b6c676c4c4f485a6e336c69574a4f64787a313434783046554c5434652b45374c514a4e4468304f322f733253547a58686b33535a66384176626d4a6250624f654b36616967446a375834576542374f796b74497644646d597042745979627048497a6e373745734f666574507735344e384f2b456f335451394b68737a494d4f344a64324763344c73537848746d74326967436a72476a6164722b6c54365a7174716c315a7a6a456b54354765344949354242376a6b566d364e3448384e654872714335306e535962536147466f45654d746e6178556e4f54387a4861767a484a34363130464641484b366c384e6642757361742f616c2f6f46724e65466937506c6c447365705a51514750314272704c53307437473069744c53434f433368554a4846476f5655556441414f6c5455554159317634563057312b7865565a6b6659726d5737677a4b37625a5a4e32397a6b2f4d547662726e47654d56612f7358542f414f304c322f384149503271396857336e6b38787374477537616f352b58377a644d646176305541595635344e385061683463742f44393370634d326c32794b6b4d446c6a355955625156624f344842504f63386e6d6d576e6766773159615246705670704d4d466c48504863694f4e6d4736534d67717a484f5877564833696334357a5851555541637a5038505043563172552b73543646617958382f4d6b7a416e4c6633674d3444663751415076576846345a306943485349593750624670482f48696e6d50694937436d65767a4861534d746e726e725774525141567a563938502f436d7061374a7256376f6c744e714d6942476d62647a6a6f647563626867596247345936313074464147504e3456304b35385051614263615a424e7064756970466279677345436a43344a357942337a6d7375782b4758673354624335737254516f496f726d4a6f5a6d44755a475275712b5957336748324e645a5251427a6d6a2b4176437567616e4a714f6c364a61323132355037785154747a78386f4a776f396c785464652b482f6854784e664c6536786f73467a644b51664e79794d324f675971527548736369756c6f6f4171615a7064686f31696c6a70746e446157715a4b78516f46555a4f54774b6a7439453036314f6f6d4f31552f326a495a62734f53346c5971454f51785047304159484874562b6967446b724834596543744f314c2b304c587737614c63376736733235315268304b71784b722b414650314c34612b44645931622b314c2f514c5761384c4632664c4b485939537967674d66714458565555415a756e2b48394b3071386b757243796a743558676a747a734a43694f504f7856584f464133486f426e504e6152414949497944326f6f6f41356e532f68353452305857473162547442744c65394a794a46424951347838696b3454676e376f464d6c2b48486736665858317162772f5a79583773586432424b73784f5378544f30746e6e4f4d31314e4641464a394a73583165445657677a6577514e627853626d77694d515741584f4f536f35786e696c73644b73744f754c3265316832533373336e3344463259752b304c6e6b6e4843675947427856796967444838512b466444385632304e76726d6e52336b634c373477355a53703969704235774d6a7655646a344f384f36594c74624c534c61474f3874786254784b7637743468752b585a39304137327a676335357a57355251427a4f6c2f4433776e6f396e66326c6a6f64736c76662f7744487a472b365153416367664d546741386744675646705877313848614c63506361666f4e76444f78592b6275646e54634d4859574a4b63452f64786975726f6f417954345a306874467374484e6e2f784c374a6f6d743452492b464d5242544a7a6c73454138357a337a565478423447384d2b4b62754336317252344c75346778736b59737259424a436b715275584a5042794f656c64445251426d516548744a7462793075344c4b4f4b577a746d746263495345696959676c51674f306664586e47654b79644f2b472f673753745762564c4c772f5a785868594d48326c676848516f704a56502b416756314e4641464f4c53724b4456726e5659346358747a476b557370646a6c45795641424f426a63656747633830615870566c6f316d6257776838714579504b51585a695864697a456c6953636b6b31636f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b7a33315a4939556e73354c5736534b43324679393638654c66424a47774e6e6c674679526a6745633830416146466564327678683065574b3375727a5176456d6d3664507432616a6536667374734e6a615334596a427a313656364a51415555555541464646464142525252514155566a61567233397261377256684661376266544a593444636d54506d797367646c43343443686c4763386b6e6a6a6e5a6f414b4b4b4b414369696967416f6f72477674652b792b4b644b304b4731382b5739696d6e6c6b387a6149496f7742754977636b7379714278334f654d454132614b4b4b414369696967416f6f6f6f414b4b516e61704a7a676338444e564e4b3141367070647666477a75374c7a3033665a37794d4a4c48374d6f4a7766624e41467969696967416f6f724831432b31513678613666706c716f546961377537694e6a4648486b6a596d434e306a5950513455637431554d4162464659306576656434786e304347313372625753585678632b5a67497a73565350626a6b6b4b787a6b594148585042346f313465484e44652f57324e314f3073554546754832475757527769726e427879325363486748673041624e46557250555464333139616d79753466736a6f6e6e537837593569796869597a6e4c415a77546763353631646f414b4b4b4b414369696967416f716e4a71746c467245476b764e692b6e6865654f494b546d4e53417a456759484c41636e6e5046584b4143696973615058764f38597a36424461373174724a4c713475664d77455a324b704874787953465935794d4144726e674132614b70366e71746c6f397448635838336c52795452774964705974493742565541416e6b6b556c2f7150324757796a466c64334a757267515a74343977687943643868794e7144474d2b70417763304158614b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f72477674652b792b4b644b304b4731382b5739696d6e6c6b387a6149496f7742754977636b7379714278334f654d48594a437157596741636b6e74514174466366642f45433274644c757461476e33467a6f3653783239704e6245504e6653733454454d5a7875584a3462634e32446745594a6a3072346c366471477257326d336d6a612f6f3178644e7374763756734443737a594a3271774a47654f2b4b414f306f6f6f6f414b4b70336d7132566864324e72637a624a373655773236425378646770596a676359436b354f4256776e417a514155566b614a6536707154584e35655771326c6937415763456b624c6346422f484a6b2f4c7536684d4167646553514e6567416f6f72413856654c4c5877706232627a574f6f583839354e354d46727038496c6d6368537849556b5a41433834395251427630567966682f346736647232716a53704e4f316a5364525a476b6a747455737a4130714c6a4a586b67347a363572724b414369696967416f716c71756f2f3258594e64437975377768305151576b652b52747a4263347942675a795354774154563267416f6f6f6f414b4b4b4b41436969716d70367059614c7038742f7156334661326b5179387372625648596669547742336f417430567853664537536a716476615461543467746f4c6c30696876726a544a49344a485a67717143666d79535232785861304146464646414252574e72327666324e63615461785776326d35314b3957316a6a387a5a7458615765516e423456564a78334f427831725a6f414b4b4b70366e71746c6f397448635838336c52795452774964705974493742565541416e6b6b5541584b4b4b4b41436971326f547a32326e584d39726272635478784d38634c5073456a415a4337734847656d6347734f4c78705974344d3033784939764f59722f374f736476466870504d6c5a55436a4a414f43334a3434422b6c414853305555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641434568564c4d51414f53543272796a7842716d703668384e37313755545856393471763274395074544d4d4333623551454a2b5641304d62506b38426e4a5070586f2b76616450712b67582b6d323134624b6136676546626c554c474c634d626741527a672b6f7250486853426462304f386a6c4357656a576b6b46725a6950674d7756512b63396b5571426a2b49383041636a704e3566654f7a506f657136566136465936466377666262443756396f6d6b324150477551717173655170794d35326b636461774c2f7872714869745a706e7350694461366138682b784877397034525a49732f4c495a572b5a69324d34473041484850552b6d487771712b4e707645554e34556a753745576c355a2b586b5446546c48335a794341534f6834394b77394e2b482b75364e4848702b6d2b504e527439466955724661477a676b6c6a476334457a416e41364159346f417976446d72654b646173744f384e53336c37595835686c764c322b75594657366974764f5a5945324562524b34484a494f41703479516174363770576f2b47644666544c4c7850725639656137655132567139354d486b74697a4670585231436b596a4445656d3059394b3174583845366863612f46724f69654b4c7a53626f323864726335743437675478495352772f522f6d507a632f5370395938467a61722f4147484d6e6944554c652f30686e654f37437875306a4f7531697973757a4f4d3434347963554159666a6a78544e6f6e694330533265366b67306d7961396e743458624e314e495244625173526b74755975534d48376f5031347a5539643854616c434c7933672b4a634f75717637694f50544567734249523061506b6c4d39324c456461394366346251336468726b476f36786533567a716b304d6f7668684a6f5245463873416a6a49594d334155664d634156633066777a346a744c314a6458386258757051525075533353796874777737423255466d2f416a4e41475a4b4e5738522b4f4e516767313237307a547449736f3765344e6f422b38754a4d534f52757976796f4547537078764f43445750623274357248676a2f4149534f393856362f70326a324d4c545753327477424e4e444544746d6e6371576b6554473762774d45444761377251764453615270656f57733979627162554c716535755a776d77735a4365414d6e473164716a6e2b45644f6c637242384d645358772f486f4e333478764c6e53597059316a74445a786f763264584465557858356d4a413237696359503361414f4f3076784671326c3662446f4357666965567848397231612b305454316e6e61386e2f657447575962453271363549424a7a6a6a4850592f4443585748764e576a75502b456e2f73694e496673763841776b7351573538776c2f4d7733566c787436394b3074513844366f7576336d726548664664316f7258376f393542396c6a7559334b7146796f66376a45416338394b3666534c436654624551584f6f334f6f5446697a33467874444d5432776f43674430416f41347a7835343076644d316932304853374c574a3548674d393750704e6a39706d676a4a4b6f46422b554669472b5935774636484f5278746e3468312f526a7131335a6a786f624a7247514976696541416d396b6445674552474f4d7363714d4143765250455067792b314458663764304c784863364a7162573632307272416c78464b6759734e3062385a4754672b394b66426c376379615932716549377255685a33793373697a776f6f6c5a4659496f43625655426d3339474a49486f4d41485072705774364a34733847324c654b7457763771524a4265517975504961474f4d623349786b73584b444c4d7879787858612b4b39665477783461764e576142376834564377774944756d6c596855515942504c45447052466f4733786a632b495a726e7a57657a537a67683259386c51785a7a6e504a596c65772b364f744f38542b48726678526f4d2b6c584d383975736a4936543237625a496e56677973703951514b4150484e543133784e715549764c6544346c773636712f754934394d534377456848526f2b53557a3359735231723058776676316678523469385254594945696156624d426762494d2b59523747566e482f415255326d2b462f4539764e76314c78316558794953596f6c7359595636664c764b6a632b44676e42584f4b3266444768522b477644646a704563786e4e7648683569753079755353376b5a504c4d536570363961414f553865654e4c33544e5974744230757931696552344450657a3654592f615a6f497953714251666c425968766d4f634265687a6b6364593631347130326655626e523766787a4e5a665a53306f3852575964306c61574d626f51427a7451794e734848485376512f455067792b314458663764304c784863364a7162573632307272416c78464b6759734e3062385a4754672b39513350684478533053506166454c555972305a33797a574e764a457734344551565150726e504e414744346676744a523954385232336a6a7848667270555453366c59616a38716765577841386f787155365a4733715269733756394b385457667779673132383858613346725a4d6478446151534b735a6e6d6b4257456a425a67433458426261414f6d42576a346f384c4c396e742f4450396f334e317133696d3655616a714c68566c4e76417535734b6f43716f4156414d59792f4f633839507058672b396a7672653838526549626a585a4c53517957615357306345634c63674e7451664d3442493348314f414b414f65385a61337032706b323857722b4c7a4e5a71557545384c7773564d672b38476b4345626751526a634d64366f2b44396238526549744a30335134645675345a4a6f5a622b6655706b52726d4f304d7057424f68587a48414a4c484f415055676a577466686e71316a6f562f6f6c72343231434c5470684b4c654557736559764d4a4c46332b2b2f4c452f65582f4737652b414c714c56625455504466694f34304e3472534b786c6a53316a6e535347504f3042584746626e727a394b414d2f58644b3148777a6f72365a5a654a396176727a58627947797458764a67386c735759744b364f6f556a4559596a30326a487056794f505576484e7a715351613571476b3648597a7659784e703771733931496e456a6d526c4a56513256474d45344a7a3078744c3458647463306255627255357273615862796f697a494e306b306d415a53526741685177414338626a6a48537361332b482b71574e2f654a59654d7452744e467535354c6837434f33694c71386a466d327a45466c586b38415a3936414c4877336e314754536455747237554a3952677374546d744c4f38755038415754524a675a592f78454e754737766a4e56726d50565046486a2f5572577a31792b3033544e4a7455747066736d41306c784a6952755742584b6f4547647049336e424664544644706e685077313563456132326d366262456863384969444a79543136486b39613444776e344f385133576c72717a654b3737546f74636474527672434b326a4c427063454b737244636d4532722b48474b414d2b79763841576262776a715769572b74366a655333766941365470642f504b577542466b65612b2f672f4b466d7733714f4f4d43757a314338754c6e3468615470467664547857656d32636c2f66625a43424a752f647849357a38772f316a5950645161647176674f33756f394258536451754e474f69462f736e325a4564514758616371344b6b347a795165703961696938445845576d2b4a597637656e6c314457304558322b61494753474d5237414d4b5143526c3234326a4c6341596f41342b4853726e56764233694c786e63654a6455306948555a4a7451694667566862795931327737327758507949707743763371755336726454532b475731396d4c61426f783133564379382b64355a534d484838584d70774f344662756e2f4432356a6a743748562f456c31716d693262526d31303172614b4646456543676b4b414751417144673448417944552b6f2b417637544f746d6655736e563779336c6e2f63644c6148626933487a644468736e7038352b5767444630613638525831707050686f616e6357327033466d645531612f62456b6c7573726b70444747796f4a4a5a523132716e544a427178505a3674346231473238506158346b31532f766461646d576655325763324555594a6c6c58355143535752565538416b63594246616d7565444e517666457136376f6669573530613665424c6135564c614f644a596c596b41422f7574387835352b6c4a726e676d2f3142744b76644f3854336c6872476e52504574383845632f6e4b3555767651674b6675385977423663436744496a3037566644587847304b32742f45327361724671615844583174714569794b69526f4d534a744369503532555941357a3756752b5037363668304b4454644f754a594e513165376973594a596951385959356b634564437361756339694256375176444b6152647a366a6458317a716572584561785458747a744446464a495256554255584a4a774279547a6d6f66452f68522f454e39704e3962367664616265615a4a4a4a444a41714f447658616371344b6b347a676b635a5072514253314b3875376e3467615870466c506343333032796b763778456b493834742b37686a59397754356a594f655642726a644b765434723153307439553859654a3944385479713770707152665a3764534f71717252346c41413773536574646a6265434c3230683171534c784c65445539536c696464524d5347574a49314156434438704764784f416f2b636741564e6f766843397439527474553852612f4e72326f32676462575237614f336a6733384d565242393467597953654d34786d6744685a504431767257712b4c2f476437346e385236665a5755306c74444a59586e6c4577774b504d412b5535587a4e2b414d63676e6b6e4e5a7431346c317a58624f4f35764c48346c324e306f337777365270345333547274444d666e6c48544a59674e2f64485375353050346233576c3654714768586e69653776394175595a596f374a37654e48547a43537a4755664d7a5a4a5059633944566a5450426e694f78614f33755048327058476d5168566a74786151704c74485a3573466d7a366a423936414d547738766944782f3466563956317a55744774624e4674705830396c676e75626846486e4f7a3754745658797546786e6178364541612f77727370502b4565757462754c6d3475707458756e7546754c6e486d5041763775486467446e596750542b4b71332f43743957687339593036793861587472706c36307277577132735a386c7053532b365437376a4c456741723735727537437967303354726178746b435157305378527142674256474150794641486e336a4c516a347a2b496d6b364f4e5631537974394e7333763532735a2f4c4b534d77534567344f48346b35357742786a504f48714775332f67375662793130363931765776374f6a545472614b346b65356c756279636d5a325a526a7a504c695663446a726a497a6b647050344c314a50484e78346a307a78506332555637354976624d3273636f6c574e634b7173333342314a77436373656c515466446c4a394a386f3678637736714e566b31564e527430434d4a574a4147306b67714549544250495830346f4134654c567466756645476e33646750694d6c3439314574774e567359347450454f38475463696a43664c6e42362b395774526b317a5550682f717669332f41495362563752723637616253724f3059494d4e4973647568794332477772454171506e4f6137442f684476456c7a6f393761616e343575377534754c6153424a4673596f593439347875324a68695143635a624765657772557676436346314434657449356844702b6a7a787a43324565524c35614659786e4977464a446444796f366461414f4e38542b4e645458576e3850323170346b6d67736f493176723351645045387258444b4732426d2b564146494a49424a33592b58484e3334595336773935713064782f776b2f38415a4561512f5a662b456c694333506d4576356d473673754e765870576c7150676656423467766457384f2b4c4c76526d763352377944374c4863787556554c6c512f3347494135353656302b6b57452b6d3249677564527564516d4c466e754c6a6147596e7468514641486f4251426736686558562f3841456a53744a746269614b32734c57532f766847785553467633634b4e6a714d2b593250396b5667585869532f6973504776694f47346d654e4a6870576b572b54734d792f753977584f4d744d3547654f4548595a726476504256784a346f3144584c447848714667392f4648485044476b6271336c6768634667536f354a495567386e6b453570747234446a743947384e61576234766236506343376e426935764a674749592f4e782b3862667a7535412b74414743756c61336f6e697a77625974347131612f7570456b4635444b3438686f59347876636a475378636f4d737a484c4846656861747155476a615065366e636e45467041383068396c424a2f6c564b4c514e766a473538517a58506d73396d6c6e42447378354b68697a6e4f6553784b396839306461504647672f384a4c6f703074726e79494a5a6f6d6e2b546435736175476150714d62674d4538384538476744683761505766442f6771793855613772757133642f477632684e4c6a6c45634d7338354953462b475a67476b56514e32306251636356483477306678486f3368772b493238593671327551764835566e4473577a6b6b6b64564551694179772b62414c4d54334e6435346f384f772b4a39416c307553356d744e7a7879527a77593352756a426c497a7831417248735042656f6d53337576455069573431753973795873326b746f3449595a4d46524a3561666559426a39356a33786967426e68486472486976784a346a6b475545713658616e4750336347664d492b73724f502b41697050473030326f584f6b2b464c6156346d3165566a64794a6b464c534d427063456443325654502b3254327261384d6146483461384e324f6b527a4763323865486d4b37544b354a4c75526b3873784a366e723172413152786166462f514a7032327858656d585672435430383050473547665571442b5641475234307574542f345448773970666837772b4e5858526f7a7145316d6c776c73715a566f6f666d666a6a3934646f4765423046565047577165493761333076576457306d474f36677574756d61525a4672795753355a47486d4f51467945547a44734855342b595633326b36422f5a757436317173747a396f754e546d5273374e766c5249675649787963344f34353435593856443471384d4a346d744c525676376e543779797542633274316245626f33414935423449494a424236304165564e72757444574c50556f482b4964764d4c694d336236785a527761636c7676426c4c714268414533664e313436314a343331355a76503158524e5938656d356b634a5a4343417861654a474f314164364b47516e41354a504e64706465414e59317251627a545045586a58554e515735694d66376d3169746b553542424b6f4d743078677467354e545265427455754a39496c3176785a646171746863726374433970484446497971646d4654474d4d5132574c6664474d6461414f6576504445766a4c34683330393134683171796a304f7967747a4e70397949647479366c356470326e413237436364636a6e6a4174614a6f32702b4d5043385637503473313354744c32466245577477715479516f53466d6e6c4b376d643862694274414241396132644d3844366870586958557236447850636e536452755a4c7534303137614e69306a6a422f656e35676f414141474f6735716c70337731767258547a6f6c353476314737384e68504b545468424845786a78796a7a41623255394f4e764846414744345a3154784a34752f7743455a3039746275725a37657a6e76373238686a437650477a7446625a422b584c4b476642424879676b56314877352b33625045437a367266616c597736704a425a7a337a6835434541443867446a66754134413434347259306e77794e4a7674627659726c4450714c49496949634c62525278684934774e334955376a322b386542575448346476744d384f365234513079367549304337722f5649387876737a75636f334f4a4a484a3735414c484f635a414f3172792f576455312b342b4b6a584f682b472f3762673057312b78735465783279777a7a6258633559457438675163446a4a723039464349716a4f4647426b6b6e387a317248384e36422f594670646f397a3971756279386d764a35396d7a637a746b4447547771375648505265335367446b64566153485549745838563370302f555a4c61533130327830594e6333455159715a48553743585934515a32595566577561304c563961732f456d71706f552f69375559375453707271533138524c7a4c4b53504a386f4542674351335966644f4b372f7842344f76645538555765763658346975644a75346259326b6d79336a6d447846747841443543746e487a59504146557834443157332f744b35736646393542716c35634a4a397565326a6b6279306a324c47366e355747537a6342526c75414d554163396f4637702b71367439756d3866654a4c66564c4b4662752b7362355262514349484c2f756d6a4368653234456b44765754343331355a76503158524e5938656d356b634a5a4343417861654a474f314164364b47516e41354a504e64726466445961746f2b6f513635727433714771333171746f326f2b556b52696a44683971496741436c686b67354a3645347250317653686f454769616a3479386258563762326c386a724331677170504b46627931574f455a794777334f2f376f366461414531696565772b49747466335775616f4c54536446652f3157326a6e497469514371596a58414c4d5249334f66757230726c72337852726e6943325737766244346c5746312f7249594e4830355937614d38375153666d6c48544a4f4166376f36563365672b487a3467307a784c66363162545166384a473752694a77556c697446587934675165564a475878324c386a72556d6d6544504564693064766365507453754e4d68437248626930685358614f7a7a594c4e6e3147443730415965684e346c3854366f736439726c3770613656704e764271427431565865376c5553535a33416f475651677a744f4e375978557569614e71666a44777646657a2b4c4e64303753396857784672634b6b386b4b45685a70355375356e66473467625141515057757838502b484630585437364361342b31545831334e64584d327a5a764d6a486a47547771375648505265335375613037346133317270353053383858366a642b47776e6c4a7077676a69597834355235674e374b656e47336a696744592b484f6f616c716e6750544c33565a7a63584d7175524f7962444c474859493548596c51702f4773304c71586a7939314d5161336636526f6c6e63505a5248546d564a726d524f4a484d6a4b537168737141754d344a7a30783345555563454b5178497152787146524647416f4841417268376634663670593339346c6834793147303057376e6b754873493765497572794d5762624d515756655477426e336f417366446566555a4e4a3153327674516e31474379314f6130733779342f316b30535947575038414551323462752b4d3146756838542f464f35733767695331384d775179724152776275594d51353964735947505173543136646270656d576569365862616270384968744c614d527852676b34556535354a397a31726c7462384458747a3469754e66384f2b49353943314b3669534b355a62574f346a6d43634b57527634674f4d353641554162586976576f2f4433687536314a3763584d6b65305151482f414a617a4d77574e66624c6c65653358745843654d4e483852364e346350694e76474f7174726b4c782b565a77374673354a4a4856524549674d73506d77437a45397a5854333367582b302f44313170312f723270584e336350464c3976636f486a654e677962455651716a4936593539615a59654339524d6c76646549664574787264375a6b765a744a625277517779594b695479302b38774448377a48766a4641484f33556d6f6137463477313666784c71656c364c5a377261424c42676850326444356a676b4e6a4d68595a55416e594f6175615a7148694c564c4851664448396f54577570485334373356745143713073537477694c6b466437454e6c6a6e4151385a4949324434456a2f34514779384b432f49676a61493363786979626f43515353416a647835687a6b6b6e377836306172344d76376e78616464306e784c6461543539757476655178573063766d71684a58617a6768434e783748384b414f573069786a304478667275703365743674716d6d2b474e504b724c71556f6d644a70563879554b77554534525978332b396972317a63613361664450523743612f75683468312b346a694d336d4d5a49476d59795362546e355248487641353432697464666837444a344a3162773764366e6353796170504a50633379445a497a4d3459647a6e4371713965514f3263564e592b444c71487844707572616c34687539554e68444b6b55647844476756334158654e6755444368687943666d507a6471414b4352366a34357574525333317a554e4a304f786e657869617764566e757045346b63794d704b7147796f787963453535474d4c572f436375742b4c6446384f584869665857693065796c76376d386a75466a6c44744a74674f344c6a654235677a6a4f46375a4f65697350416d7161567131773168347676344e47754c68376c394f5732694c4233666377457042594b636e67414833715337384436672f6a53373137542f45397a5a516167735358316c396d6a6c4571527274565564755978795363416e4c486b55416337345a384f616c346c384a4c64542b4d2f456c70706a744931695575774c683467354b797a536c64784c446b4b4e6f433448584a4d576e617a3469312f7774344d306f61704c4671657058456c7a4e664a47565a374f42695135414978762f414851786e6b4d654f74624f6e6644572b7464504f69586e692f55627677324538704e4f454563544750484b504d42765a5430343238635630747234626a7476466375742b637055574d646a613236783752627871785a7348504f34376577345164614149667336654566443272332b6f617a714f6f4b715064545458727178514b6e3355564656565835656748556d755038414275684e4261654364416c69327270466b327233534667536b3875355931492b736b352b715676587a6e78787173656e326a452b48724b63506658412b376553496372416837717241463248475643382f4e6a714c473276594c69396537762f414c54484e4e7674347843454676487441325a484c63676e6366584742696743355252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252564c56626d2b744c4270644f303858397a765256674d7769424259426d4c484f41716b74304a4f4d6436414c744655722b3576726557795779303858617933415334637a434d5152594a4d6e4f537879414e6f39656f78525063337961746157384f6e6957796b53527269374d775879534d62464364574c5a506f426a336f417530566c654a646369384e2b47372f5635592f4e2b7a52466b683362544b353452416348425a6942305058705748622b4f3933773475504664357070745a34424d6a57486e37795a6b6c614a597734586b737741794166766436414f786f714f336557533269656549525373674c786874775273636a4f426e423734715367416f6f6f6f414b4b7a4e4a317931317166555937524a646c68644e61504b7747783546414c624344794154744f6363676a74576e514155555555414646464641425252525141555555554146464646414252525251415556533032357672714b64723754785a4d7478496b5365634a444a4544685a446a68537735323834396175304146464651586c3342595755393563794c48627752744c4937484156564753542b416f416e6f7235323846614a34302b4a305771612b50484773364a61766575495949355a5a46352b596863534b417137674267666c69765576426e672f56504230743965613334307638415734336a4158376137716b41424a5a766d6b5963386338597837304164765258416176385950423972707571745961356133563961573750484343514a58322f4b71735274624a7839306e4663663841434b353076774e384f702f466e6957392b7a48574c7a696556486433417946474143784a496b627030356f4139766f72433158786a6f476965483766586454762f73326e584f7a795a486866632b385a55624e75374f4d6e474f4d63317a666a76346d322f687652744f2f736941332b723677716e5472646f325849624748645468674d6b414c7753654f4d45674139426f72782b35384166453356624d616a646645476131314e564d69574e73686a674464516a4d6a414563415a4b742b4e6458705775616a34552b46305773654e626c704c2b3367615734797171355973646b65426746755658363041647252587a56344b38552b4c39582b4d6d6a5072476f366a425a366f5a4c754b792b307435506b6d4f516f41674f4d664c786b5a4f4d393831374238562f456a65462f6833716433444d597279645261327a4c4a73634f2f475649357971376d4750377662725142327446664f6c7a3457385a365a384e313859336e7849316d336b467174304c4b57615871324e71626a4a314f527874366e4664626f48784e6b304c3451576573654b7237667131326c7762424a4979487569684f7a4f3165423047346a4743443335415058714b38692b442f414d532f2b45687442702b76363862335837695a3269743173696e6c784b76646b514a324a79543341727339582b4a50673751722f774377366a723972466337396a5270756b4b4e364e7442322f6a69674471714b68744c75337637534737744a6f3537655a41386373625a5631505167316d36767276396d36746f326d785733326934314b34615062356d33796f6b5173386e5135412b5559343563632b6f427355566a7a363735666936303043473238317062535337754a664d783543426c56506c787a754a59446b66635058735775752f625046656f364e46625a69734c654b536135387a704c4a75496a3234366851725a7a2f454f4f3941477852525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142525252514155555555414646464641425252525141555555554146464646414252525251415555555541464646464142584c5854445676694a5a57594b74446f31713137494f636965584d63587477676d2f3736483464545762706d6957326c333271586b54797954366c6343346d6151673449525556567742386f436a47636e6b3830415a476d734e5838666172665a566f644a6858546f534d385376746c6d39756e6b4438442b4a3455596170716d752b494d7179584e313969746d476638415557354b66724b5a6a7832492f4455306e514c6252744b754c43316e6e506e7a5454795475564d686b6c59737a5a4141794333484851447255326961526261426f646c704e6e762b7a32634b77786c79437841474d6e414179657034484a6f41357a78642f7741546678543461384f4c6b784e4f327033594234387144477748367974482f7742386d755473502b4a6c7274723450446830742f455639714e34716e6751787943614e5439586e69504848427230754851375748784a643637766c65377562654f3249636a624847685a6746347a79574a4f5365673656543076776a70756b2b4b64593852514e4f3137716f6a45776b594655434447454141497a786e4a5051644b414f5a30765634375732386165504c6b466f6c6b6b6774526b637732774b4144743830766d483852584f4f336962543750536643576b365263366e4e485a6632687259743951537a6b6b6c6e5a6a74383175514e32386e614166756a49475165786a2b4658683247305330686b314e4c4f4f35533453312b3275304b6c5a424a7445625a55416b633447635a354754562f7741522b41394d3852616b6d706d383150544e545348794265365a6447435578357a744a3542476655554165613250686a7868706b2b6f336d686545727277386b6c71566c746b3130585458556a53786c6d5573547463526951426a3349712f70616544724266454f7478364a72656c61786f74735a4c364739764a533834654a676d54356a427338344f5151635631317a384d394f6e695479746438533274307563336b4f72532b63774f4d676c69526a6a70697230766748515a2f444e396f4d3856784e6258355637716157345a35356e5571565a70435353527458486241786a4641486e682b486d69654366682f5a36724270755046306b4564724263656649635855343876495574742b55756634663463396131376a776a5a36507266687a773970567a6652337339704a4650714458546d53477a6a56413652444f794e6e627978755651514e787a6e6d756f735041566e5a7070697a3676724f6f6e543773336b546168642b63576b324d677a6b634251787746787a79633159385565433950384146556c70635433656f57463761626842656164636d475641324e777a794d4841366967446c497643756d2b486669706f6965477a64517a7977547a36757258636b776b684337597a4a764c4863585079394f6a656c64463472764c7537316e535043396a637932683145537a58647a4364736b647647427543482b466d5a6c4765773345594f4b317444384e36643466535532697a5358452b445064584d7a545454597a6a6337456b347963446f4d6d7158696a7758702f69715730754a37765562432b74417767764e4f7554444b6762473441386a42774f6f6f41356e562f44656e2b446269302f774345592b31576d736135634c702f326957366b6e5651527665597249784264556a4f302b7048474b703639344d307a5166456e686966513572386549726e5549316b6e6c76704a6e6d746b7930786b44735156786a6f42387a4c3631316d6f2b416449315051594e4b6d754e534274352f744d4e364c317a63704c676a654a474a4a4f4433794f6e48417166522f42756e614b736b6b64786633656f53516d46745276726b7a33415539677a5a436a49427741426b4469674467377977307658644c38612b4d646361376d30374d6c7662573856793053764462426b4833434e3236517945416b6a6b63564671486845327567654272533875372b66784a4a64573063637a336a34743155475358434168634241793578754f526b3136416642576c6e776e702f686f50634454374a6f4741444c756c38706734442f4c6767736f4a77426e746971336a53776c67676c385232454e316436785a57553172595730536231456b785562396f47636768636e4941584f665767446d3750524e4938577a654b66452f694365342f7371536437574a42647644454c61324251737851676b462f4e4f43534d5934724930545462725566446e676e776c4c4e64775254537936744b433438324b30696374416879446a356e692b6d306a504664566f66776f306652376130743376395875625742457a703874383574476b484a6679756879325467385a375631554768577348694f363177504b3133635730647268694e6b6361466d4155415a4753784a7954304853674468644d384c61667133696258744a69652b683053786c6a467a4774394e357439647447437a53536c7935525532414c6b444f546a67567937615848617a3635344f38507a334d57683674716476706c75676d3877516c556153384d5a624a7746473039666d4a7230625576683170656f65494a39596a314857724361367762754b777633676a755346436a65427a774232497253746643476b324f71616465326b4c514454726557433274307835612b59796c33365a4c6e62796338354f636b356f4134754c776c5950385670626654726e556f4972665373366e49743949576e4d726b5252354a4a51414b37664a7478786a765764706a6638492f344538573347686d614f48556456657830654a356d6b496b5a68427642596b3879623237384376544c4c772f6257467a72467a444e6366614e566c383261566975354345434b4534344143385a7a795456474877527063476d3642703653585032625132333236626c2f654f455a417a2f4143386e356d50474f542b4641486e506944533750516c6d732f4748682f56372f77414b574d6476425a533256797767686943717061534e4a465974767953787a32785852615a6f4e74726d71332f6831626d2f5477336f5a5745514c64794c4a637a79447a4733794274355256645146794f63357a6756725748773130717a75316c6e3154584e52746b64586973622f55486c7434697079754550584277666d7a79425439532b48576c366834676e316950556461734a727242753472432f65434f3549554b4e3448504148596967444d2b48576b322b6a2b4950464e6e6f7a54447737627a78515773547a4752456e436b7a4243636e414c4b447a39344e3656552b4f336941364c384f5a37574a79732b70797261727478776e336e2f41714e762f41414b7651394e30327930697769736450746f376532697a746a5163636e4a5075535353536553546d755738632f445453504838396c4a713135714d50324e58574a4c575246487a455a4a33493350796a3871414f463066396e587739506f746a4c716c2f713658386b434e634a444e474556794157417a475467486a6b31532b4b4a6a62572f43487774734c683750536d454175484d6755756d3759674a376b42574f434f574b3936364b772f5a3838493666714e7465706536784b31764b6b6f6a6c6d694b4d56494f47416a42776363383130666a6234572b4876486c334264366d62754336685479784e61534b724d6d535170334b77497953656d6141504d506a4c6f50682f534c4c77373454384f614e7038477058747771695649553833614d496f6438622f6d5a77633939707158346b574d4e2f77434c66412f77307447323256716b526e426241492b3731363767694f662b423133756c66426a77706f6e6957773175775738696c73522b37674d7174477a5949334e6c64784f577a3937734f777856767856384b5044506a485834645931564c767a3430456270444e745356523033635a347a2f435251427758785a646646667846384b2b4137566762644845313069455941505563636772476a6e2f6751714779756257392f61687546314b5259307359664a734935434641595244436a312b3837443631364a34662b466e687a777834736d38513659747848504a47596b7479796554454467664b416f4f6344475354314e486a4834562b4750473131397331474765433932685463327367523241365a7943447878794f6c414853587576616259616c5a36624e64522f627278396b467372417950675a4a783641636b31344c38542f414256652b4e664636614a6f2b6a366a72576836504d4776594c42585032695450494c497246514d4651636633765931366c6f58776c384d654737616361556c3342657a514e4164513837644f67497753755274552b34577466775a344a306a774c7044366470506e736b6b706c6b6c754844534f33546b67415941414141412f4d6d6744772f514e647576456e37526569334e316f6332697a777774436247596e6447467435434f7171526b45454448537437347a66615047486a2f77414e2b41374b6679742b5a35337875565332656364535652584f4f4d3771394548773330636645622f684f5074562b64542f414f65526b547966395635585462752b372f746466797161792b482b6b32586a323838596934764a7454756b4b464a5851786f4d4b506c415545594367636b384530416543366a6f74336f76785a306677723431317a554e613051797874483538386d7877366c554f30733230422b44673941665775302b502f3252724c7733346373724f315739755a39734d686a556554474d4b45445979716c6d58702f63727638417874384e4e46386558566a63366c63583174505a717978765a794968494a42354c4b33516a6a474f70706e6a4434572b482f4735745a6457613846336252434662714352566b5a516334624b6b486b6b394f356f413554346b322b6c66444c34626f3267365a61576d71584370707158384543704d41564a646a494147795168357a6e4a42726a64502b462f694855766878625177322f67654731756f55755037536b4d763274515348775a64705566335342786a503172324e50686e34585877597668575379616254566b3834655a49664d456d667668686767386b6364754f6c594f6c664162775870576f7265374c2b375a4a466b6a6a754c676245494f52674b716b6a70314a36665767447276424f674e3458384761566f736b697953327341575230597370636b7332306e6e475363644f4d63436f37577a6d76664874377164784379775746716c6c61466c5a647a4f524a4d777a7752784575526e6c5748725852315173644c4e6a70736c6e2f6146394f306a53503841614c6955504b70646965446a414335776f7867414367444c3850326b306d7561397264334338623345347462634f6a4b777434515144676a76493072416a7143706f3847325538576d585770586b4c5258757133636c354b6a717973696e35596c49626b45527247434f787a563974453365477637464771616b762b6a694437634a2f394b3659332b595239382b75507972535251694b674a49555979787954395451413669696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b414369696967416f6f6f6f414b4b4b4b41502f2f5a223e3c62723e3c62723e3c7461626c65207374796c653d22746578742d616c69676e3a2063656e7465723b2077696474683a2036323770743b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b2220626f726465723d2230222063656c6c70616464696e673d2230222063656c6c73706163696e673d2230222077696474683d22383336223e3c74626f64793e3c7472207374796c653d226865696768743a36332e30707422206865696768743d223834223e3c746420636c6173733d22786c363522207374796c653d226865696768743a36332e3070743b77696474683a363237707422206865696768743d223834222077696474683d22383336223e3c62723e3c2f74643e3c2f74723e3c2f74626f64793e3c2f7461626c653e3c62723e);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) DEFAULT NULL,
  `login` varchar(100) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE IF NOT EXISTS `modulo` (
  `menu_id` int(5) NOT NULL AUTO_INCREMENT,
  `menu_idpadre` int(5) NOT NULL,
  `menu_nombrepadre` varchar(50) NOT NULL,
  `menu_idhijo` int(5) NOT NULL,
  `menu_controlador` varchar(100) DEFAULT NULL,
  `menu_accion` varchar(100) DEFAULT NULL,
  `menu_estado` int(1) DEFAULT '1' COMMENT 'se le coloca un estado 1 porque esta activo',
  `tipMet_id` int(11) DEFAULT NULL,
  `mod_icons` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`menu_id`, `menu_idpadre`, `menu_nombrepadre`, `menu_idhijo`, `menu_controlador`, `menu_accion`, `menu_estado`, `tipMet_id`, `mod_icons`) VALUES
(95, 0, 'ORGANIZACIÓN', 95, NULL, NULL, 1, 1, 'icon-users'),
(96, 0, 'PLAN DE TRABAJO', 96, '', '', 1, 1, 'icon-book-open'),
(97, 0, 'NUEVA TAREA', 97, NULL, '', 1, 1, 'icon-notebook'),
(98, 0, 'DOCUMENTOS', 98, NULL, NULL, 1, 1, 'icon-calculator'),
(99, 0, 'RIESGOS', 99, NULL, NULL, 1, 1, 'icon-target'),
(101, 0, 'REGISTROS', 0, 'tareas', 'registro', 1, 1, NULL),
(102, 95, 'CARACTERIZAR EMPRESA', 0, 'administrativo', 'empresa', 1, 1, NULL),
(103, 95, 'CARGOS', 0, 'administrativo', 'cargos', 1, 1, NULL),
(104, 95, 'DIMENSIÓN 1', 0, 'administrativo', 'dimension', 1, 1, NULL),
(105, 95, 'DIMENSIÓN 2', 0, 'administrativo', 'dimension2', 1, 1, NULL),
(106, 95, 'EMPLEADOS', 106, 'administrativo', 'creacionempleados', 1, 1, NULL),
(107, 95, 'USUARIOS', 107, 'administrativo', 'creacionusuarios', 1, 1, NULL),
(108, 95, 'CONTRATOS', 0, NULL, NULL, 1, 1, NULL),
(114, 107, 'CREACIÓN USUARIO', 0, 'administrativo', 'creacionusuarios', 1, 1, NULL),
(115, 107, 'LISTADO USUARIOS', 0, 'administrativo', 'listadousuarios', 1, 1, NULL),
(116, 106, 'CREACIÓN EMPLEADO', 0, 'administrativo', 'creacionempleados', 1, 1, NULL),
(117, 106, 'LISTADO EMPLEADOS', 0, 'administrativo', 'listadoempleados', 1, 1, NULL),
(118, 95, 'TIPO ASEGURADORAS', 118, '', '', 1, 1, NULL),
(119, 118, 'CREACIÓN TIPOS DE ASEGURADORA', 0, 'tipo_aseguradora', 'index', 1, 1, NULL),
(120, 118, 'LISTADO TIPOS DE ASEGURADORA', 0, 'tipo_aseguradora', 'consult_tipo_aseguradora', 1, 1, NULL),
(121, 97, 'CREACIÓN TAREAS', 0, 'tareas', 'nuevatarea', 1, 1, NULL),
(122, 97, 'LISTADO TAREAS', 0, 'tareas', 'listadotareas', 1, 1, NULL),
(123, 96, 'LISTADO PLANES', 0, 'tareas', 'listadoplanes', 1, 1, NULL),
(124, 96, 'CREACIÓN PLAN DE TRABAJO', 0, 'tareas', 'planes', 1, 1, NULL),
(125, 96, 'ACTIVIDADES', 0, 'tareas', 'listadoactividades', 1, 1, NULL),
(126, 95, 'ROL', 0, 'presentacion', 'roles', 1, 1, NULL),
(130, 99, 'NUEVO RIESGO', 0, 'riesgo', 'nuevoriesgo', 1, NULL, NULL),
(131, 99, 'LISTADO RIESGOS', 0, 'riesgo', 'listadoriesgo', 1, NULL, NULL),
(132, 99, 'CLASIFICACIÓN RIESGOS', 0, 'riesgo', 'clasificacionriesgo', 1, NULL, NULL),
(133, 99, 'ESTADOS DE ACEPTACIÓN', 0, 'riesgo', 'estadosaceptacion', 1, NULL, NULL),
(134, 0, 'INDICADORES', 134, NULL, NULL, 1, NULL, 'icon-crop'),
(135, 134, 'TIPOS DE INDICADORES', 0, NULL, NULL, 1, NULL, NULL),
(136, 134, 'NUEVO INDICADOR', 0, 'indicador', 'nuevoindicador', 1, NULL, NULL),
(137, 134, 'LISTADO INDICADORES', 0, 'indicador', 'verindicadores', 1, NULL, NULL),
(139, 98, 'TIPOS DE DOCUMENTOS', 0, 'Tipo_documento', 'index', 1, NULL, NULL),
(140, 95, 'TIPO DE CONTRATO', 0, 'Tipo_contrato', 'index', 1, NULL, NULL),
(141, 98, 'DOCUMENTO', 0, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `norma`
--

CREATE TABLE IF NOT EXISTS `norma` (
  `nor_id` int(11) NOT NULL AUTO_INCREMENT,
  `nor_norma` varchar(255) DEFAULT NULL,
  `nor_descripcion` text,
  PRIMARY KEY (`nor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `norma`
--

INSERT INTO `norma` (`nor_id`, `nor_norma`, `nor_descripcion`) VALUES
(1, 'norma 1452', 'a'),
(2, 'norma 8015', 'b'),
(3, 'norma 2020', 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `norma_tarea`
--

CREATE TABLE IF NOT EXISTS `norma_tarea` (
  `norTar` int(11) NOT NULL AUTO_INCREMENT,
  `tar_id` int(11) DEFAULT NULL,
  `nor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`norTar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `norma_tarea`
--

INSERT INTO `norma_tarea` (`norTar`, `tar_id`, `nor_id`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 4, 1),
(4, 4, 2),
(5, 5, 1),
(6, 5, 2),
(7, 6, 1),
(8, 6, 2),
(9, 7, 1),
(10, 8, 1),
(11, 9, 2),
(12, 4, 1),
(13, 4, 2),
(14, 12, 1),
(15, 12, 2),
(16, 13, 1),
(17, 13, 2),
(18, 14, 1),
(19, 14, 2),
(20, 15, 1),
(21, 15, 2),
(22, 1, 1),
(23, 1, 2),
(24, 1, 3),
(25, 2, 1),
(26, 3, 1),
(27, 4, 1),
(28, 6, 1),
(29, 7, 2),
(30, 8, 1),
(31, 8, 2),
(32, 9, 2),
(33, 10, 1),
(34, 11, 1),
(35, 11, 2),
(36, 12, 1),
(37, 13, 1),
(38, 14, 2),
(39, 15, 2),
(40, 16, 1),
(41, 16, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE IF NOT EXISTS `notificacion` (
  `not_id` int(11) NOT NULL AUTO_INCREMENT,
  `not_notificacion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`not_id`, `not_notificacion`) VALUES
(1, 'Creo la tarea'),
(2, 'Recursos asignados a la tarea'),
(3, 'Responsable del plan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numero_empleados`
--

CREATE TABLE IF NOT EXISTS `numero_empleados` (
  `numEmp_id` int(11) NOT NULL AUTO_INCREMENT,
  `numEmp_descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`numEmp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `numero_empleados`
--

INSERT INTO `numero_empleados` (`numEmp_id`, `numEmp_descripcion`) VALUES
(1, 'Hasta 10 trabajadores'),
(2, 'De 11 a 50 trabajadores'),
(3, 'De 51 a 200 trabajadores'),
(4, 'De 201 o más trabajadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `pai_id` int(11) NOT NULL AUTO_INCREMENT,
  `pai_nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pai_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`pai_id`, `pai_nombre`) VALUES
(1, 'Colombia'),
(2, 'Venezuela'),
(3, 'Brazil'),
(4, 'CHILE'),
(5, 'dos'),
(6, NULL),
(7, 'dos'),
(8, NULL),
(9, 'tres'),
(10, 'gerson'),
(11, 'papa'),
(12, 'papamama'),
(13, 'PEpe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_id` int(11) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `crear` bit(1) DEFAULT NULL,
  `editar` bit(1) DEFAULT NULL,
  `eliminar` bit(1) DEFAULT NULL,
  `actualizar` bit(1) DEFAULT NULL,
  PRIMARY KEY (`per_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`per_id`, `usu_id`, `rol_id`, `crear`, `editar`, `eliminar`, `actualizar`) VALUES
(41, 4, 58, NULL, NULL, NULL, NULL),
(42, 5, 58, NULL, NULL, NULL, NULL),
(50, 6, 59, NULL, NULL, NULL, NULL),
(54, 1, 58, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_rol`
--

CREATE TABLE IF NOT EXISTS `permisos_rol` (
  `perRol_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`perRol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1507 ;

--
-- Volcado de datos para la tabla `permisos_rol`
--

INSERT INTO `permisos_rol` (`perRol_id`, `menu_id`, `rol_id`) VALUES
(20, 14, 37),
(21, 15, 37),
(22, 1, 38),
(23, 14, 38),
(24, 15, 38),
(25, 2, 38),
(26, 5, 38),
(27, 6, 38),
(28, 7, 38),
(29, 1, 39),
(30, 14, 39),
(31, 9, 40),
(32, 11, 40),
(33, 12, 40),
(34, 13, 40),
(35, 38, 41),
(36, 52, 41),
(37, 53, 41),
(38, 57, 41),
(39, 38, 42),
(40, 52, 42),
(43, 58, 42),
(44, 38, 43),
(45, 52, 43),
(46, 53, 43),
(47, 57, 43),
(48, 58, 43),
(49, 9, 44),
(50, 38, 44),
(118, 1, 37),
(1351, 102, 0),
(1387, 95, 58),
(1388, 102, 58),
(1389, 103, 58),
(1390, 104, 58),
(1391, 105, 58),
(1392, 106, 58),
(1393, 116, 58),
(1394, 117, 58),
(1395, 107, 58),
(1396, 114, 58),
(1397, 115, 58),
(1398, 108, 58),
(1399, 118, 58),
(1400, 119, 58),
(1401, 120, 58),
(1402, 126, 58),
(1403, 140, 58),
(1404, 96, 58),
(1405, 123, 58),
(1406, 124, 58),
(1407, 125, 58),
(1408, 97, 58),
(1409, 121, 58),
(1410, 122, 58),
(1411, 98, 58),
(1412, 139, 58),
(1413, 99, 58),
(1414, 130, 58),
(1415, 131, 58),
(1416, 132, 58),
(1417, 133, 58),
(1418, 101, 58),
(1419, 134, 58),
(1420, 135, 58),
(1421, 136, 58),
(1422, 137, 58),
(1497, 96, 59),
(1498, 123, 59),
(1499, 124, 59),
(1500, 125, 59),
(1501, 97, 59),
(1502, 121, 59),
(1503, 122, 59),
(1504, 98, 59),
(1505, 139, 59),
(1506, 130, 59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE IF NOT EXISTS `planes` (
  `pla_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_id` int(11) DEFAULT NULL,
  `pla_nombre` varchar(255) DEFAULT NULL,
  `pla_descripcion` text,
  `pla_fechaInicio` date DEFAULT NULL,
  `pla_fechaFin` date DEFAULT NULL,
  `pla_avanceProgramado` varchar(100) DEFAULT NULL,
  `pla_presupuesto` varchar(100) DEFAULT NULL,
  `pla_avanceReal` varchar(100) DEFAULT NULL,
  `pla_costoReal` varchar(100) DEFAULT NULL,
  `pla_eficiencia` varchar(100) DEFAULT NULL,
  `emp_id` int(10) DEFAULT NULL,
  `car_id` int(10) DEFAULT NULL,
  `nor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pla_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`pla_id`, `est_id`, `pla_nombre`, `pla_descripcion`, `pla_fechaInicio`, `pla_fechaFin`, `pla_avanceProgramado`, `pla_presupuesto`, `pla_avanceReal`, `pla_costoReal`, `pla_eficiencia`, `emp_id`, `car_id`, `nor_id`) VALUES
(7, 1, 'prueba ', '  esto es la descripcion', '2015-08-12', '2015-08-15', '123', '23456', '23', '23456', NULL, 16, 41, 1),
(8, 1, 'sdafsadf', ' sdfsfd', '2015-10-02', '2015-10-03', '12', '23', '12', '234', '8', 3, 40, NULL),
(9, 1, 'prueba gerson javier', ' asdfasdfa', '2015-10-24', '2015-10-22', '12', '2323', '12', '2323', '3', 4, 40, 3),
(10, 1, 'xxxxxxxxxxxxxxxxxxxxxxxx', ' dfasfdsadfa', '2015-10-31', '2015-10-09', '232', '12', '2323', '322', '4', 8, 41, 3),
(11, 1, 'xyz', ' sadfsadf', '2015-10-10', '0000-00-00', '12', '22', '12', '', '6', 7, 40, 3),
(12, 1, 'Plan maestro', ' plan general anual', '2015-01-01', '0000-00-00', '', '', '', '', '', 18, 46, 1),
(13, 1, 'capacitación anual', ' capacitación anual para todos los empleados', '2015-01-01', '0000-00-00', '', '', '', '', '', 19, 44, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE IF NOT EXISTS `politicas` (
  `pol_id` int(11) NOT NULL AUTO_INCREMENT,
  `pol_politica` blob,
  `emp_id` int(10) NOT NULL,
  PRIMARY KEY (`pol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `politicas`
--

INSERT INTO `politicas` (`pol_id`, `pol_politica`, `emp_id`) VALUES
(1, NULL, 1),
(2, NULL, 134);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `tar_id` int(11) DEFAULT NULL,
  `regCar_id` int(11) DEFAULT NULL,
  `reg_version` varchar(255) DEFAULT NULL,
  `reg_descripcion` text,
  `reg_ruta` varchar(550) DEFAULT NULL,
  `pla_id` int(11) DEFAULT NULL,
  `reg_fechaCreacion` datetime DEFAULT NULL,
  `reg_fechaModificacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `userCreator` int(11) DEFAULT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`reg_id`, `tar_id`, `regCar_id`, `reg_version`, `reg_descripcion`, `reg_ruta`, `pla_id`, `reg_fechaCreacion`, `reg_fechaModificacion`, `userCreator`) VALUES
(1, 11, 1, '1', 'asdasd', './uploads/empleado/xyz', 1, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, './uploads/empleado/xyz', NULL, NULL, NULL, NULL),
(3, 1, 1, '1', '1', './uploads/empleado/xyz', 1, NULL, NULL, NULL),
(4, 1, 1, '1', '1', './uploads/registro/', 1, '2015-10-12 19:40:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_carpeta`
--

CREATE TABLE IF NOT EXISTS `registro_carpeta` (
  `regCar_id` int(11) NOT NULL AUTO_INCREMENT,
  `regCar_nombre` varchar(255) DEFAULT NULL,
  `regCar_descripcion` text,
  `regCar_fechaCreacion` datetime DEFAULT NULL,
  `regCar_fechaModificacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `pla_id` int(11) NOT NULL,
  PRIMARY KEY (`regCar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `registro_carpeta`
--

INSERT INTO `registro_carpeta` (`regCar_id`, `regCar_nombre`, `regCar_descripcion`, `regCar_fechaCreacion`, `regCar_fechaModificacion`, `pla_id`) VALUES
(1, 'xyz', 'xxxzcvzxc', NULL, NULL, 0),
(2, 'uyyyyyyyyyy', 'yyyyyyyyy', '2015-10-22 21:47:40', NULL, 7),
(3, 'prueba', 'pruebs st', '2015-10-22 21:59:46', NULL, 7),
(4, 'ooooooo', 'ooooooo', '2015-10-23 06:36:43', NULL, 7),
(5, 'uuuuuuu', 'uuuu', '2015-10-23 06:41:37', NULL, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `rep_id` int(11) NOT NULL AUTO_INCREMENT,
  `rep_idpadre` int(10) DEFAULT NULL,
  `rep_nombrepadre` varchar(100) DEFAULT NULL,
  `rep_idhijo` int(10) DEFAULT NULL,
  `rep_estado` int(10) DEFAULT '1',
  `rep_query` varchar(5000) DEFAULT NULL,
  `rep_host` varchar(255) DEFAULT NULL,
  `rep_user` varchar(255) DEFAULT NULL,
  `rep_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`rep_id`, `rep_idpadre`, `rep_nombrepadre`, `rep_idhijo`, `rep_estado`, `rep_query`, `rep_host`, `rep_user`, `rep_password`) VALUES
(3, 0, 'COMPRAS', 3, NULL, '<query> select * from user</query> \r\n<date> \r\n<creacion>creac</creacion> \r\n<terminacion>term</terminacion> \r\n</date>\r\n<calculate>\r\n<id>udusuario</id>\r\n<active>activacion</active>\r\n</calculate>', 'R1', 'R1', 'R1'),
(4, 0, 'VENTAS', NULL, 1, NULL, NULL, NULL, NULL),
(5, 0, 'GERENCIA', NULL, 1, NULL, NULL, NULL, NULL),
(6, 0, 'SISTEMAS', NULL, 1, NULL, NULL, NULL, NULL),
(7, 3, 'PROVEEDORES', 7, 1, NULL, NULL, NULL, NULL),
(8, 3, 'PRECIOS', NULL, 1, NULL, NULL, NULL, NULL),
(9, 7, 'NOMBRES', NULL, 1, NULL, NULL, NULL, NULL),
(10, 7, 'PRODUCTOS', NULL, 1, NULL, NULL, NULL, NULL),
(11, 7, 'R1', NULL, 1, NULL, NULL, NULL, NULL),
(12, 7, 'R2', NULL, 1, NULL, NULL, NULL, NULL),
(13, 7, 'R3', NULL, 1, NULL, NULL, NULL, NULL),
(14, 7, 'R3', NULL, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE IF NOT EXISTS `reportes` (
  `rep_id` int(11) NOT NULL AUTO_INCREMENT,
  `rep_nombre` varchar(100) NOT NULL,
  `rep_estado` int(10) NOT NULL DEFAULT '1',
  `rep_query` varchar(5000) DEFAULT NULL,
  `rep_host` varchar(255) DEFAULT NULL,
  `rep_user` varchar(255) DEFAULT NULL,
  `rep_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`rep_id`, `rep_nombre`, `rep_estado`, `rep_query`, `rep_host`, `rep_user`, `rep_password`) VALUES
(1, 'gerson', 1, '<xml>\r\n</xml>', 'gerson', 'gerson', 'gerson'),
(2, 'Anderson4', 1, NULL, NULL, NULL, NULL),
(3, 'gdf', 1, 'sfsdf', 'sfds', 'sdfs', 'sdfsd'),
(4, 'ANderson6', 1, NULL, NULL, NULL, NULL),
(5, 'Anderson7', 1, NULL, NULL, NULL, NULL),
(6, 'HolaMundo', 1, NULL, NULL, NULL, NULL),
(7, 'HolaMundo2', 1, NULL, NULL, NULL, NULL),
(8, '11111111', 1, NULL, NULL, NULL, NULL),
(9, 'Gerson', 1, NULL, NULL, NULL, NULL),
(10, 'SI ^^', 1, NULL, NULL, NULL, NULL),
(11, 'Otro Coso', 1, NULL, NULL, NULL, NULL),
(12, '^^', 1, NULL, NULL, NULL, NULL),
(13, '', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo`
--

CREATE TABLE IF NOT EXISTS `riesgo` (
  `rie_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) DEFAULT NULL,
  `act_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `col_id` varchar(11) DEFAULT NULL,
  `rie_descripcion` text,
  `dim1_id` int(11) DEFAULT NULL,
  `dim2_id` int(11) DEFAULT NULL,
  `est_id` int(11) DEFAULT NULL,
  `rie_fecha` date DEFAULT NULL,
  `rie_observaciones` text,
  `rie_requisito` text,
  `tip_id` int(11) DEFAULT NULL,
  `rie_zona` varchar(255) DEFAULT NULL,
  `cla_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`rie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `riesgo`
--

INSERT INTO `riesgo` (`rie_id`, `car_id`, `act_id`, `cat_id`, `col_id`, `rie_descripcion`, `dim1_id`, `dim2_id`, `est_id`, `rie_fecha`, `rie_observaciones`, `rie_requisito`, `tip_id`, `rie_zona`, `cla_id`) VALUES
(1, 40, 0, 0, '0', 'xyz', 14, 9, 0, '0000-00-00', 'adsfasdfasdfa', 'sd', 1, 'xast', NULL),
(2, 40, 0, 0, '0', 'xyz', 14, 9, 0, '2015-09-17', 'adsfasdfasdfa', 'sd', 1, 'xast', NULL),
(3, 43, 0, 1, 'blue', 'dasd', 14, 12, 1, '2015-09-21', 'sdf', 'xd', 1, 'xd', NULL),
(4, NULL, 0, 4, 'yellow', 'xddddd', 14, 9, 1, '2015-09-28', 'xya', 'dd', 1, 'dd', NULL),
(5, NULL, 0, 4, 'yellow', 'xdddddss', 14, 9, 1, '2015-09-28', 'xya', 'dd', 1, 'dd', NULL),
(6, NULL, 0, 4, 'yellow', 'xdddddssww', 14, 9, 1, '2015-09-28', 'xya', 'dd', 1, 'dd', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo_cargo`
--

CREATE TABLE IF NOT EXISTS `riesgo_cargo` (
  `rieCar_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) DEFAULT NULL,
  `rie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`rieCar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `riesgo_cargo`
--

INSERT INTO `riesgo_cargo` (`rieCar_id`, `car_id`, `rie_id`) VALUES
(1, 44, 6),
(2, 45, 6),
(3, 46, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo_clasificacion`
--

CREATE TABLE IF NOT EXISTS `riesgo_clasificacion` (
  `rieCla_id` int(11) NOT NULL AUTO_INCREMENT,
  `rieCla_categoria` varchar(255) NOT NULL,
  `rieCla_tipo` varchar(255) NOT NULL,
  PRIMARY KEY (`rieCla_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `riesgo_clasificacion`
--

INSERT INTO `riesgo_clasificacion` (`rieCla_id`, `rieCla_categoria`, `rieCla_tipo`) VALUES
(1, 'dsfs', ''),
(2, 'oprdf', ''),
(3, 'PRUEBA', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo_clasificacion_tipo`
--

CREATE TABLE IF NOT EXISTS `riesgo_clasificacion_tipo` (
  `rieClaTip_id` int(11) NOT NULL AUTO_INCREMENT,
  `rieClaTip_tipo` varchar(255) NOT NULL,
  `rieCla_id` int(11) NOT NULL,
  PRIMARY KEY (`rieClaTip_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `riesgo_clasificacion_tipo`
--

INSERT INTO `riesgo_clasificacion_tipo` (`rieClaTip_id`, `rieClaTip_tipo`, `rieCla_id`) VALUES
(1, 'sdfsdf', 1),
(2, 'XYZ', 3),
(3, 'XYZDS', 3),
(4, '1111', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_nombre` varchar(255) DEFAULT NULL,
  `rol_estado` int(5) DEFAULT '1',
  `rol_fechaModificacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `rol_fechaCreacion` date NOT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `rol_nombre`, `rol_estado`, `rol_fechaModificacion`, `rol_fechaCreacion`) VALUES
(58, 'BASC', 1, NULL, '0000-00-00'),
(59, 'Auditor', 1, NULL, '2015-10-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `SESSION_ID` int(10) NOT NULL AUTO_INCREMENT,
  `USUARIO_ID` int(10) DEFAULT NULL,
  `SESSION_IP` varchar(20) DEFAULT NULL,
  `SESSION_ACTIVA` int(20) DEFAULT NULL,
  PRIMARY KEY (`SESSION_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE IF NOT EXISTS `sexo` (
  `Sex_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sex_Sexo` varchar(100) NOT NULL,
  PRIMARY KEY (`Sex_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`Sex_id`, `Sex_Sexo`) VALUES
(1, 'MASCULINO'),
(2, 'FEMENINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamano_empresa`
--

CREATE TABLE IF NOT EXISTS `tamano_empresa` (
  `TamEmp_tamano` varchar(3) DEFAULT NULL,
  `TamEmp_descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tamano_empresa`
--

INSERT INTO `tamano_empresa` (`TamEmp_tamano`, `TamEmp_descripcion`) VALUES
('MI', 'Microempresa'),
('PE', 'Pequeña empresa'),
('ME', 'Mediana empresa'),
('GR', 'Gran empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE IF NOT EXISTS `tarea` (
  `tar_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_id` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `claRie_id` int(11) DEFAULT NULL,
  `tar_costopresupuestado` varchar(255) DEFAULT NULL,
  `tar_descripcion` text,
  `dim_id` int(11) DEFAULT NULL,
  `dim2_id` int(11) DEFAULT NULL,
  `est_id` int(11) DEFAULT NULL,
  `tar_fechaInicio` date DEFAULT NULL,
  `tar_fechaCreacion` datetime DEFAULT NULL,
  `tar_fechaFinalizacion` date DEFAULT NULL,
  `tar_fechaUltimaMod` timestamp NULL DEFAULT NULL,
  `tar_nombre` varchar(255) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `tar_peso` varchar(255) DEFAULT NULL,
  `pla_id` int(11) DEFAULT NULL,
  `tip_id` int(11) DEFAULT NULL,
  `tipRie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`tar_id`, `act_id`, `car_id`, `claRie_id`, `tar_costopresupuestado`, `tar_descripcion`, `dim_id`, `dim2_id`, `est_id`, `tar_fechaInicio`, `tar_fechaCreacion`, `tar_fechaFinalizacion`, `tar_fechaUltimaMod`, `tar_nombre`, `emp_id`, `tar_peso`, `pla_id`, `tip_id`, `tipRie_id`) VALUES
(1, 1, 40, 0, '20', 'asdfasdfasdfas', 9, 14, 1, '0000-00-00', '2015-10-11 18:42:47', '0000-00-00', NULL, 'prueba 11/10', 3, '12', 6, 1, 0),
(2, 1, 40, 0, '12', 'zdfsdfadfasdfasd', 9, 14, 1, '0000-00-00', '2015-10-11 19:28:13', '0000-00-00', NULL, 'prueba dos', 3, '12', 6, 1, 0),
(3, 1, 40, 0, '21', 'adsfasdfasdfad', 9, 9, 1, '0000-00-00', '2015-10-12 04:09:01', '0000-00-00', NULL, 'ppppp', 2, '12', 6, 1, 0),
(4, 0, 46, 0, '', 'identificar todos los riesgos de la oficina', 21, 23, 1, '2015-10-01', '2015-10-13 19:25:45', '2015-12-01', NULL, 'identificacion de riesgs', 18, '', 12, 1, 0),
(5, 0, 46, 0, '', 'analizar riesgos', 21, 23, 1, '2015-10-01', '2015-10-13 19:41:08', '2015-10-31', NULL, 'analizar riesgos', 18, '', 12, 1, 0),
(6, 0, 46, 0, '', 'saksjhksdjfkjdsnmg,snghjh', 0, 23, 1, '2015-10-01', '2015-10-21 02:23:52', '2015-10-31', NULL, 'primeros auxilios', 18, '', 13, 1, 0),
(7, 0, 40, 1, '12', 'sdfsdfsdfsf', 20, 25, 1, '2015-10-13', '2015-10-21 19:47:06', '2015-10-29', NULL, 'www', 2, '12', 7, 1, 1),
(8, 0, 40, 1, '12', '', 21, 0, 1, '2015-10-27', '2015-10-21 19:51:11', '2015-10-30', NULL, 'qweqwe', 2, '12', 7, 1, 1),
(9, 0, 40, 1, '12', '12121221', 20, 23, 1, '2015-10-20', '2015-10-21 19:52:24', '2015-10-30', NULL, '111', 2, '12', 7, 1, 1),
(10, 0, 40, 1, '12', '', 20, 23, 1, '2015-10-27', '2015-10-21 19:53:26', '2015-10-28', NULL, '123', 2, '12', 7, 1, 1),
(11, 0, 40, 1, '122', '', 21, 23, 2, '2015-10-27', '2015-10-21 19:54:31', '2015-10-31', NULL, '12', 2, '12', 8, 1, 1),
(12, 0, 41, 1, '12', '', 21, 23, 2, '2015-10-19', '2015-10-21 19:55:07', '2015-10-29', NULL, '222', 8, '12', 7, 2, 1),
(13, 0, 41, 1, '12', '1212121', 21, 26, 1, '2015-10-27', '2015-10-21 19:57:01', '2015-10-29', NULL, '12', 8, '12', 7, 2, 1),
(14, 0, 41, 1, '12', '1212', 20, 25, 1, '2015-10-26', '2015-10-21 19:58:03', '2015-10-21', NULL, '1212', 8, '12', 7, 1, 1),
(15, 0, 41, 2, '12', '12', 21, 23, 1, '2015-10-20', '2015-10-21 20:03:04', '2015-10-22', NULL, '121212', 8, '12', 7, 1, 0),
(16, 0, 40, 1, '12', '12', 20, 23, 1, '2015-10-21', '2015-10-21 20:05:55', '2015-10-31', NULL, '435345', 2, '112', 7, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `tip_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_tipo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tip_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`tip_id`, `tip_tipo`) VALUES
(1, 'PLANEAR (P)'),
(2, 'HACER'),
(3, 'VERIFICAR'),
(4, 'ACTUAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_aseguradora`
--

CREATE TABLE IF NOT EXISTS `tipo_aseguradora` (
  `TipAse_Id` int(11) NOT NULL AUTO_INCREMENT,
  `TipAse_Nombre` varchar(100) DEFAULT NULL,
  `activo` varchar(1) DEFAULT 'S',
  PRIMARY KEY (`TipAse_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipo_aseguradora`
--

INSERT INTO `tipo_aseguradora` (`TipAse_Id`, `TipAse_Nombre`, `activo`) VALUES
(1, 'prueba', 'N'),
(2, 'xyz', 'N'),
(3, 'prepagada', 'N'),
(4, 'Red de ambulancias', 'S'),
(5, 'prepagada', 'N'),
(6, 'Prepagada', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

CREATE TABLE IF NOT EXISTS `tipo_contrato` (
  `TipCon_Id` int(11) NOT NULL AUTO_INCREMENT,
  `TipCon_Descripcion` varchar(100) DEFAULT NULL,
  `activo` varchar(1) DEFAULT 'S',
  PRIMARY KEY (`TipCon_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tipo_contrato`
--

INSERT INTO `tipo_contrato` (`TipCon_Id`, `TipCon_Descripcion`, `activo`) VALUES
(1, 'prueba', 'N'),
(2, 'indefinido', 'N'),
(3, 'Nuevo', 'N'),
(4, 'prestación de servicios', 'S'),
(5, 'nuevo', 'N'),
(6, 'indefinido', 'N'),
(7, 'indefinido', 'S'),
(8, 'xyz', 'N'),
(9, 'xyz', 'N'),
(10, 'temporal', 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `tipDoc_tipo` varchar(4) NOT NULL DEFAULT '',
  `tipDoc_Descripcion` varchar(100) DEFAULT NULL,
  `ACTIVO` varchar(1) DEFAULT 'S',
  PRIMARY KEY (`tipDoc_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`tipDoc_tipo`, `tipDoc_Descripcion`, `ACTIVO`) VALUES
('CC', 'CEDULA DE CIUDADANIA', 'S'),
('CE', 'CEDULA EXTRANJERIA', 'S'),
('TI', 'TARJETA IDENTIDAD', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipo`
--

CREATE TABLE IF NOT EXISTS `tipo_equipo` (
  `tipo_equipo_cod` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT NULL,
  `borrado` varchar(50) DEFAULT NULL,
  `activo` varchar(1) DEFAULT 'S',
  PRIMARY KEY (`tipo_equipo_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_equipo`
--

INSERT INTO `tipo_equipo` (`tipo_equipo_cod`, `referencia`, `fecha_creacion`, `borrado`, `activo`) VALUES
(1, 'nelson', NULL, NULL, 'S'),
(2, 'ya quedo', NULL, NULL, 'S'),
(3, 'eded', NULL, NULL, 'S'),
(4, 'dddd', NULL, NULL, 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_inputs`
--

CREATE TABLE IF NOT EXISTS `tipo_inputs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `description` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tipo_inputs`
--

INSERT INTO `tipo_inputs` (`id`, `name`, `description`) VALUES
(1, 'text', NULL),
(2, 'password', NULL),
(3, 'checkbox', NULL),
(4, 'radio', NULL),
(5, 'submit', NULL),
(6, 'reset', NULL),
(7, 'file', NULL),
(8, 'hidden', NULL),
(9, 'image', NULL),
(10, 'button ', NULL),
(11, 'email', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_metodo`
--

CREATE TABLE IF NOT EXISTS `tipo_metodo` (
  `tipMet_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipMet_Methodo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tipMet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_metodo`
--

INSERT INTO `tipo_metodo` (`tipMet_id`, `tipMet_Methodo`) VALUES
(1, 'Accion'),
(2, 'Ajax');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_contrasena` varchar(1000) DEFAULT NULL,
  `est_id` int(5) DEFAULT '1',
  `usu_politicas` int(1) DEFAULT '0',
  `usu_cedula` varchar(15) DEFAULT NULL,
  `usu_nombre` varchar(100) DEFAULT NULL,
  `usu_apellido` varchar(100) DEFAULT NULL,
  `usu_usuario` varchar(100) DEFAULT NULL,
  `usu_email` varchar(100) DEFAULT NULL,
  `sex_id` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `usu_fechaActualizacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `usu_fechaCreacion` datetime DEFAULT NULL,
  `Ing_id` int(11) DEFAULT NULL,
  `usu_cambiocontrasena` bit(1) DEFAULT b'0',
  `rol_id` int(11) DEFAULT NULL COMMENT 'Rol por defecto',
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`usu_id`, `usu_contrasena`, `est_id`, `usu_politicas`, `usu_cedula`, `usu_nombre`, `usu_apellido`, `usu_usuario`, `usu_email`, `sex_id`, `car_id`, `emp_id`, `usu_fechaActualizacion`, `usu_fechaCreacion`, `Ing_id`, `usu_cambiocontrasena`, `rol_id`) VALUES
(1, '12345', 1, 1, '12345', 'gersonjbr12', 'apellidoprueba', 'admin', 'javierbr12@hotmail.com', 1, 40, 0, '2015-10-09 05:53:40', '2015-08-27 03:01:02', NULL, b'0', 58),
(3, 'sdf', 2, 0, '6789', 'geryon', 'sdf', 'sdf', 'zsd', 1, 40, 4, '2015-09-17 06:53:32', '2015-09-13 15:43:26', NULL, b'1', NULL),
(4, '123', 3, 0, '987654321', 'Maria', 'Tijuana', 'maria_tijuana', 'maria@tijuana.com', 2, 42, 17, '2015-10-13 09:18:41', '2015-10-13 08:29:22', NULL, b'1', 58),
(5, 'grairez', 1, 0, '52865386', 'gina', 'paola', 'gramirez', 'gramirez@sgm.com.co', 2, 46, 18, NULL, '2015-10-13 19:09:31', NULL, b'1', 58),
(6, 'cperez1', 1, 1, '79648473', 'Camilo', 'perez', 'Cperez', 'compras@comercializadoradaza.co', 1, 44, 19, '2015-10-20 04:16:50', '2015-10-20 02:27:35', NULL, b'0', 59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usermodule`
--

CREATE TABLE IF NOT EXISTS `usermodule` (
  `user_id` int(10) DEFAULT NULL,
  `modulo_menuid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usermodule`
--

INSERT INTO `usermodule` (`user_id`, `modulo_menuid`) VALUES
(1, 24),
(1, 54),
(1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
