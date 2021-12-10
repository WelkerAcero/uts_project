-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 03:56:02
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uts_project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID` int(11) NOT NULL,
  `course_title` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `Texto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `course_time` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `course_dateStarts` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `course_observation` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `course_link` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`ID`, `course_title`, `Texto`, `Foto`, `course_time`, `course_dateStarts`, `course_observation`, `course_link`, `Fecha`) VALUES
(15, 'Clases Anggie\'s CSS 22', 'Únete a miles de graduados que viven como programadores, trabajan en grandes empresas y forman parte', '1639075552_CSS_IMAGE.jpeg', '3 Meses', '2022-01-19', 'El curso puede tener un costo de $20.000 - $30.000', 'https://www.udemy.com/course/master-en-javascript-aprender-js-jquery-angular-nodejs-y-mas/', '2021-12-10'),
(16, 'PHP - CURSO - 1', 'Únete a miles de graduados que viven como programadores, trabajan en grandes empresas y forman parte', '1639075654_PHP_IMAGE.jpg', '4 Meses', '2022-01-19', 'Costo del curso: $50.000', '', '2021-12-10'),
(18, 'Clases de programación 2', 'Únete a miles de graduados que viven como programadores, trabajan en grandes empresas y forman parte', '1639087814_ImagenProgramacion_2.jpg', '1 año', '2022-01-20', 'El curso puede tener un costo de $20.000 - $100.000 awiqjeiqwÚnete a miles de graduados que viven co', '', '2021-12-10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
