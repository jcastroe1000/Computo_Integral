-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2015 a las 02:38:25
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `computo_integral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cierre_reporte`
--

CREATE TABLE IF NOT EXISTS `cierre_reporte` (
`id_cierre` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `tec_asinado` varchar(60) NOT NULL,
  `nombre_cliente` varchar(45) DEFAULT NULL,
  `ap_cliente` varchar(25) DEFAULT NULL,
  `am_cliente` varchar(20) DEFAULT NULL,
  `conformidad` varchar(2) NOT NULL,
  `comentarios` varchar(255) NOT NULL,
  `satisfaccion` char(2) NOT NULL,
  `estatus` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion_empleado_ci`
--

CREATE TABLE IF NOT EXISTS `direccion_empleado_ci` (
  `calle` varchar(50) NOT NULL,
  `colonia` varchar(25) NOT NULL,
  `num_ext` varchar(8) NOT NULL,
  `num_int` varchar(8) DEFAULT NULL,
  `ent_fed` varchar(25) NOT NULL,
  `del_mun` varchar(25) NOT NULL,
  `cod_post` varchar(5) NOT NULL,
  `RFC` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `direccion_empleado_ci`
--

INSERT INTO `direccion_empleado_ci` (`calle`, `colonia`, `num_ext`, `num_int`, `ent_fed`, `del_mun`, `cod_post`, `RFC`) VALUES
('bosques de mozambique', 'bosques de aragon', '30', '', 'Estado De Mexico', 'Nezahualcoyotl', '57170', 'CAEA891208'),
('', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_ci`
--

CREATE TABLE IF NOT EXISTS `empleado_ci` (
  `RFC` varchar(13) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `ap_paterno` varchar(15) NOT NULL,
  `ap_materno` varchar(15) NOT NULL,
  `fecha_nac` date NOT NULL,
  `curp` varchar(18) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `tel_cel` varchar(10) DEFAULT NULL,
  `tel_casa` varchar(10) NOT NULL,
  `pass` longtext NOT NULL,
  `tipo_usuario` char(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado_ci`
--

INSERT INTO `empleado_ci` (`RFC`, `nombre`, `ap_paterno`, `ap_materno`, `fecha_nac`, `curp`, `user_name`, `tel_cel`, `tel_casa`, `pass`, `tipo_usuario`) VALUES
('', '', '', '', '0000-00-00', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
('CAEA891208', 'jose antonio', 'castro', 'esparza', '1989-12-08', 'CAEA8912HDFSSN08', 'desarrollos@computointegral.com', '5516915144', '57664459', 'febc7f22e20e5fec311fd1404e7633f0', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `rfc_empresa` varchar(13) NOT NULL,
  `nombre_empresa` varchar(45) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `colonia` varchar(45) NOT NULL,
  `num_ext` varchar(6) NOT NULL,
  `num_int` varchar(6) NOT NULL,
  `cod_post` int(5) NOT NULL,
  `localidad` varchar(25) NOT NULL,
  `del_mun` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_servicio`
--

CREATE TABLE IF NOT EXISTS `orden_servicio` (
`id_orden` int(11) NOT NULL,
  `elaboracion` datetime NOT NULL,
  `servicio` datetime DEFAULT NULL,
  `cierre` datetime DEFAULT NULL,
  `nombre_empresa` varchar(45) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido_paterno` varchar(25) DEFAULT NULL,
  `apellido_materno` varchar(25) DEFAULT NULL,
  `equipo` varchar(25) DEFAULT NULL,
  `area` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
`id` int(4) unsigned zerofill NOT NULL,
  `rfc` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id`, `rfc`) VALUES
(0001, 'adadassdadasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable_empresa`
--

CREATE TABLE IF NOT EXISTS `responsable_empresa` (
  `rfc_resp1` varchar(12) NOT NULL,
  `user_name_resp1` varchar(45) NOT NULL,
  `nombre_resp1` varchar(45) NOT NULL,
  `ap_pat_resp1` varchar(25) NOT NULL,
  `ap_mat_resp1` varchar(25) NOT NULL,
  `tel_cel_resp1` varchar(10) DEFAULT NULL,
  `tel_of_resp1` varchar(8) NOT NULL,
  `ext_resp1` varchar(5) NOT NULL,
  `pass_resp1` longtext NOT NULL,
  `rfc_empresa` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `satisfaccion_cliente`
--

CREATE TABLE IF NOT EXISTS `satisfaccion_cliente` (
  `rfc_empleado` varchar(13) NOT NULL,
  `conformidad` varchar(25) NOT NULL,
  `comentarios` varchar(255) NOT NULL,
  `nivel_satisfaccion` varchar(3) NOT NULL,
  `rfc_empresa` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_requerido`
--

CREATE TABLE IF NOT EXISTS `servicio_requerido` (
`id_servicio` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `fallas_encotradas` varchar(255) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `Sistema_operativo` varchar(25) NOT NULL,
  `tipo_falla` char(2) DEFAULT NULL,
  `tipo_servicio` char(2) NOT NULL,
  `falla_en` char(2) NOT NULL,
  `fallas_encontradas` char(255) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `num_serie` varchar(24) DEFAULT NULL,
  `act_realizadas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cierre_reporte`
--
ALTER TABLE `cierre_reporte`
 ADD PRIMARY KEY (`id_cierre`);

--
-- Indices de la tabla `direccion_empleado_ci`
--
ALTER TABLE `direccion_empleado_ci`
 ADD KEY `RFC` (`RFC`);

--
-- Indices de la tabla `empleado_ci`
--
ALTER TABLE `empleado_ci`
 ADD PRIMARY KEY (`RFC`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`rfc_empresa`);

--
-- Indices de la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
 ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
 ADD PRIMARY KEY (`id`,`rfc`), ADD KEY `id` (`id`);

--
-- Indices de la tabla `responsable_empresa`
--
ALTER TABLE `responsable_empresa`
 ADD PRIMARY KEY (`rfc_resp1`), ADD KEY `rfc_empresa` (`rfc_empresa`);

--
-- Indices de la tabla `servicio_requerido`
--
ALTER TABLE `servicio_requerido`
 ADD PRIMARY KEY (`id_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cierre_reporte`
--
ALTER TABLE `cierre_reporte`
MODIFY `id_cierre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
MODIFY `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `servicio_requerido`
--
ALTER TABLE `servicio_requerido`
MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `direccion_empleado_ci`
--
ALTER TABLE `direccion_empleado_ci`
ADD CONSTRAINT `direccion_empleado_ci_ibfk_1` FOREIGN KEY (`RFC`) REFERENCES `empleado_ci` (`RFC`);

--
-- Filtros para la tabla `responsable_empresa`
--
ALTER TABLE `responsable_empresa`
ADD CONSTRAINT `responsable_empresa_ibfk_1` FOREIGN KEY (`rfc_empresa`) REFERENCES `empresa` (`rfc_empresa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
