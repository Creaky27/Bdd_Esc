-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 03:32:27
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
  `Telefono` varchar(15) NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Licenciatura` char(20) DEFAULT NULL,
  `Cuatrimestre` varchar(20) DEFAULT NULL,
  `Estatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `Nombre`, `Apellido`, `Telefono`, `Email`, `Licenciatura`, `Cuatrimestre`, `Estatus`) VALUES
(1, 'Gerardo', 'Casanova', '9985266331', 'gerardocc@unid.com', 'Ing. en Sistemas', 'sexto', 'Activo'),
(2, 'Karen', 'Guillen', '9985264410', 'karengg@unid.com', 'Ing. en Sistemas', 'sexto', 'Activo'),
(3, 'Augusto', 'Zamudio', '9985004189', 'augustozp@unid.com', 'Ing. en Sistemas', 'sexto', 'Activo'),
(4, 'Antonio', 'Luna', '9987465034', 'antoniola@unid.com', 'Ing. en Sistemas', 'sexto', 'Activo'),
(6, 'Juan', 'Manuel', '9987465501', 'juanmep@unid.com', 'Ing. en Sistemas', 'primero', 'sexto'),
(8, 'Moana', 'Rivera', '9984200835', 'moanarp@unid.com', 'Ing. en Sistemas', 'sexto', 'Activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID` int(11) NOT NULL,
  `Materia` char(40) NOT NULL,
  `Cuatrimestre` varchar(10) NOT NULL,
  `Licenciatura` char(20) NOT NULL,
  `ESTATUS` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID`, `Materia`, `Cuatrimestre`, `Licenciatura`, `ESTATUS`) VALUES
(10, 'Diseño y Administración en Base de Datos', '6to', 'Ing. en Sistema', '0'),
(15, 'Diseño estructurado de algortimos', '1er', 'Ing. en Sistema', '0'),
(21, 'Ortografia', 'cuarto', 'Ing. en Sistemas', ''),
(36, 'Programación estructurada', '5to', 'Ing. en Sistema', '0'),
(54, 'Seminario de Valores en lo común', '3er', 'Ing. en Sistema', '0'),
(80, 'Programación Orientada a Objetos', '6to', 'Ing. en Sistema', '0'),
(95, 'Comprensión lectora', 'cuarto', 'Ing. en Sistemas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `ESTATUS` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`ID`, `Nombre`, `Apellidos`, `Telefono`, `Email`, `ESTATUS`) VALUES
(1, 'Moises', 'Ortega Zetina', 1231231231, 'moises01@unid.com', '1'),
(2, 'Abraham', 'Pech Pech', 2147483647, 'abraham02@unid.com', '0'),
(3, 'Pablo', 'Hipólito González ', 1594782365, 'pablo03@unid.com', '1'),
(4, 'Carlos', 'Carballo Ojeda', 2133410093, 'carlos04@unid.com', '0'),
(5, 'Alexander', 'Castillo Cervantes', 1254789633, 'alexander05@unid.com', '1'),
(6, 'Cristina', 'Castillejos Gómez ', 987342175, 'cristina06@unid.com', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
