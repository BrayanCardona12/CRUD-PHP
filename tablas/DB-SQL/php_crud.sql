-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 14:00:41
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `aprendizID` int(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `programa` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`aprendizID`, `nombre`, `programa`, `email`) VALUES
(15, 'Brayan Cardona', 'ADSO', 'brayan@gmail.com'),
(18, 'Juan', 'ADSI', 'mnmn@gmail.com'),
(19, 'Carlos', 'RHH', 'Carlos777@gmail.com'),
(20, 'Juan', 'ADSI', 'mnmn@gmail.com'),
(22, 'Juan', 'ADSI', 'mnmn@gmail.com'),
(24, 'Juan', 'ADSI', 'mnmn@gmail.com'),
(29, 'Camilo', 'AD', 'jjjjj@gmail.com'),
(30, 'Juan', 'ADSI', 'jjjjj@gmail.com'),
(31, 'Juan', 'ADSI', 'jjjjj@gmail.com'),
(32, 'Juan', 'ADSI', 'jjjjj@gmail.comfgg'),
(33, 'Brayan2', 'RHH', 'jjjjj@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `coordinadorID` int(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`coordinadorID`, `nombre`, `apellido`, `email`) VALUES
(1, 'Juan', 'Justino', 'carloshust@gmail.com'),
(2, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(3, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(4, 'Pedrohh', 'Gonzales', 'pepe123@gmail.com'),
(7, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(8, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(9, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(10, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(12, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(13, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(16, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(17, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(18, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(19, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(20, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(21, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(22, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(25, 'Pedro', 'Gonzales', 'pepe123@gmail.com'),
(29, 'CARLOS', 'aaa', 'ppepep@gmail.com'),
(30, 'CARLOS', 'aaa', 'ppepep@gmail.com'),
(31, 'CARLOS', 'aaa', 'ppepep@gmail.com'),
(33, 'CARLOS', 'TORRES', 'ppepep@gmail.com'),
(34, 'CARLOS', 'TORRES', 'ppepep@gmail.com'),
(35, 'CARLOS', 'TORRES', 'ppepep@gmail.com'),
(37, 'CARLOS', 'aaa', 'ppepep@gmail.com'),
(38, 'CARLOS', 'aaa', 'ppepep@gmail.comhjj'),
(39, 'CARLOS SIUUUUUU', 'TORRES', 'ppepep@gmail.comhjj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `novedadID` int(20) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `descipcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `novedad`
--

INSERT INTO `novedad` (`novedadID`, `tipo`, `descipcion`) VALUES
(3, 'Solicitud', 'Tengo Hambre'),
(4, 'Pregunta', '¿se puede salir a descanso a las 6 am??'),
(5, 'Pregunta', '¿se puede salir a descanso a las 6 am??'),
(6, 'Pregunta', '¿se puede salir a descanso a las 6 am??'),
(7, 'Pregunta', '¿se puede salir a descanso a las 6 am??'),
(8, 'Pregunta', '¿se puede salir a descanso a las 6 am??'),
(9, 'Pregunta', 'quiere ganarme el baloto'),
(10, 'Pregunta', '¿se puede salir a descanso a las 6 am??'),
(11, 'Pregunta', '¿se puede salir a descanso a las 6 am??'),
(14, 'Reclamo', 'aSDJsj'),
(16, 'Pregunta', 'wwjeefhkj');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`aprendizID`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`coordinadorID`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`novedadID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `aprendizID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `coordinadorID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `novedadID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
