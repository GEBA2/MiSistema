-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2015 a las 17:00:24
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `stvt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(11) NOT NULL,
  `tipo_cargo` varchar(25) NOT NULL,
  `year_electoral` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `tipo_cargo`, `year_electoral`) VALUES
(0, 'Presidenciales<', '2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `CodigoDepartamento` int(10) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Dreccion` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcioncandidatos`
--

CREATE TABLE IF NOT EXISTS `inscripcioncandidatos` (
`id` int(11) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Apellido` varchar(35) NOT NULL,
  `Direccion` varchar(35) NOT NULL,
  `id_depa` varchar(35) NOT NULL,
  `id_muni` varchar(35) NOT NULL,
  `DUI` varchar(10) NOT NULL,
  `Candidatura` varchar(30) NOT NULL,
  `Partido` varchar(35) NOT NULL,
  `Coalicion` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcioncandidatos`
--

INSERT INTO `inscripcioncandidatos` (`id`, `genero`, `Nombre`, `Apellido`, `Direccion`, `id_depa`, `id_muni`, `DUI`, `Candidatura`, `Partido`, `Coalicion`) VALUES
(3, 'Masculino', 'carlos', 'henrriques', 'col', 'Nada', 'Nada', '00000000-1', 'Independiente', 'ARENA', 'on');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscri_partido`
--

CREATE TABLE IF NOT EXISTS `inscri_partido` (
`id` int(11) NOT NULL,
  `nombre_partido` varchar(50) NOT NULL,
  `bandera` varchar(100) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `representante` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscri_partido`
--

INSERT INTO `inscri_partido` (`id`, `nombre_partido`, `bandera`, `dui`, `representante`) VALUES
(53, 'Gana', 'imagenes/image.png', '00000000-0', 'ismael');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `CodigoMunicipio` int(10) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Direccion` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrovotante`
--

CREATE TABLE IF NOT EXISTS `registrovotante` (
`id` int(11) NOT NULL,
  `Dui` varchar(10) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Direccion` varchar(35) NOT NULL,
  `id_depa` varchar(35) NOT NULL,
  `id_muni` varchar(35) NOT NULL,
  `fechavenci` varchar(10) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrovotante`
--

INSERT INTO `registrovotante` (`id`, `Dui`, `genero`, `Nombre`, `Apellido`, `Direccion`, `id_depa`, `id_muni`, `fechavenci`, `estado`) VALUES
(72, '05204089-4', 'Masculino', 'Emerson Alexander', 'Rodriguez Hernandez', '', 'La Paz', 'Zacatecoluca', '2015-06-02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pw`) VALUES
(1, 'sistemageba', '12345'),
(0, 'alex', '1234'),
(1, 'alex', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto`
--

CREATE TABLE IF NOT EXISTS `voto` (
`id` int(11) NOT NULL,
  `nombre_partido` varchar(50) NOT NULL,
  `candidatura` varchar(50) NOT NULL,
  `codigo_depa` int(11) NOT NULL,
  `codigo_muni` int(11) NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `voto`
--

INSERT INTO `voto` (`id`, `nombre_partido`, `candidatura`, `codigo_depa`, `codigo_muni`, `voto`) VALUES
(39, 'Gana', 'Presidentes', 0, 0, 1),
(40, 'Gana', 'Alcaldes', 0, 0, 1),
(41, 'Gana', 'Diputados', 0, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripcioncandidatos`
--
ALTER TABLE `inscripcioncandidatos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscri_partido`
--
ALTER TABLE `inscri_partido`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrovotante`
--
ALTER TABLE `registrovotante`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `voto`
--
ALTER TABLE `voto`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscripcioncandidatos`
--
ALTER TABLE `inscripcioncandidatos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `inscri_partido`
--
ALTER TABLE `inscri_partido`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `registrovotante`
--
ALTER TABLE `registrovotante`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT de la tabla `voto`
--
ALTER TABLE `voto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
