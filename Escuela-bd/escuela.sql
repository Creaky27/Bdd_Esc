-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 07:12:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Teléfono` varchar(15) NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Licenciatura` char(20) DEFAULT NULL,
  `Cuatrimestre` varchar(20) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `Nombre`, `Apellido`, `Teléfono`, `Email`, `Licenciatura`, `Cuatrimestre`, `STATUS`) VALUES
(1, 'Karen', 'Guillen', '9984572651', 'karengg@unid.com', 'Ing. en Software', '6to', 'Activo'),
(2, 'Gerardo', 'Casanova', '9984751289', 'gerardocc@unid.com', 'Ing. en Software', '6to', 'Activo'),
(3, 'Augusto', 'Zamudio', '9984784587', 'augustozp@unid.com', 'Ing. en Software', '6to', 'Activo'),
(4, 'Antonio', 'Luna', '9984755820', 'antoniola@unid.com', 'Ing. en Software', '6to', 'Activo'),
(5, 'David', 'Villalobos', '9980017528', 'davidvs@unid.com', 'Ing. en Software', '6to', 'Activo'),
(6, 'Manuel', 'Euan', '9986472514', 'manuelep@unid.com', 'Ing. en Software', '6to', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID` int(11) NOT NULL,
  `Nombre_Materia` char(40) NOT NULL,
  `Cuatrimestre` varchar(10) NOT NULL,
  `Licenciatura` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID`, `Nombre_Materia`, `Cuatrimestre`, `Licenciatura`) VALUES
(10, 'Diseño y Administración en Base de Datos', '6to', 'Ing. en Sistema'),
(15, 'Diseño estructurado de algortimos', '1er', 'Ing. en Sistema'),
(36, 'Programación estructurada', '5to', 'Ing. en Sistema'),
(44, 'Gestión de Servidores', '6to', 'Ing. en Sistema'),
(54, 'Seminario de Valores en lo común', '3er', 'Ing. en Sistema'),
(80, 'Programación Orientada a Objetos', '6to', 'Ing. en Sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `ID_prof` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `Teléfono` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`ID_prof`, `Nombre`, `Apellidos`, `Teléfono`, `Email`, `STATUS`) VALUES
(0, 'Moises', 'Ortega Zetina', 1231231231, 'moises01@unid.com', 1),
(1, 'Abraham', 'Pech Pech', 2147483647, 'abraham02@unid.com', 0),
(2, 'Pablo', 'Hipólito González ', 1594782365, 'pablo03@unid.com', 1),
(3, 'Carlos', 'Carballo Ojeda', 2133410093, 'carlos04@unid.com', 0),
(4, 'Alexander', 'Castillo Cervantes', 1254789633, 'alexander05@unid.com', 1),
(5, 'Cristina', 'Castillejos Gómez ', 987342175, 'cristina06@unid.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`ID_prof`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
