-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 01:34 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_center`
--

CREATE TABLE `contact_center` (
  `contact_id` int(11) UNSIGNED NOT NULL,
  `contact_name` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contact_email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contact_cellphone` bigint(20) NOT NULL,
  `recorded_date` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `contact_center`
--

INSERT INTO `contact_center` (`contact_id`, `contact_name`, `contact_email`, `contact_cellphone`, `recorded_date`) VALUES
(61, 'Welker Jose Perez Acero', 'welkerperez97@gmail.com', 3213655354, '2021-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `ID` int(11) NOT NULL,
  `course_title` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Texto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `course_time` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `course_dateStarts` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `course_observation` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`ID`, `course_title`, `Texto`, `Foto`, `course_time`, `course_dateStarts`, `course_observation`, `Fecha`) VALUES
(15, 'Clases Anggie\'s CSS 22', 'Únete a miles de graduados que viven como programadores, trabajan en grandes empresas y forman parte', '1639075552_CSS_IMAGE.jpeg', '3 Meses', '2022-01-19', 'El curso puede tener un costo de $20.000 - $30.000', '2021-12-09'),
(16, 'PHP - CURSO - 1', 'Únete a miles de graduados que viven como programadores, trabajan en grandes empresas y forman parte', '1639075654_PHP_IMAGE.jpg', '4 Meses', '2022-01-19', 'Costo del curso: $50.000', '2021-12-10'),
(18, 'Clases de programación 2', 'Únete a miles de graduados que viven como programadores, trabajan en grandes empresas y forman parte', '1639087814_ImagenProgramacion_2.jpg', '1 año', '2022-01-20', 'El curso puede tener un costo de $20.000 - $100.000', '2021-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `proyeccion`
--

CREATE TABLE `proyeccion` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Texto` varchar(1000) NOT NULL,
  `Foto` varchar(1000) NOT NULL,
  `Fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proyeccion`
--

INSERT INTO `proyeccion` (`ID`, `Texto`, `Foto`, `Fecha`) VALUES
(57, 'UN GATO OP', '1638505960_dissidia-final-fantasy-game-hd-wallpaper-1920x1080-4789.jpg', '2021-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `telefono`, `email`, `password`) VALUES
(1, 'Anggie Liseth', 'Castellanos Camacho', '3118245945', 'castellanos.anggie17@gmail.com', '$2y$10$AEqNWZh44DBzT2mdfUqSSe3YR/o8yvo4kOncyU5Z1mIqzKnjUjnu.'),
(2, 'Welker Jose', 'Perez Acero', '3213655354', 'welkerperez97@gmail.com', '$2y$10$Q1sQ3aOalnYIHBiSz3WXpedUBJlJMkMd0nx/yJHDUTxbUV0Dsh5b6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_center`
--
ALTER TABLE `contact_center`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `proyeccion`
--
ALTER TABLE `proyeccion`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_center`
--
ALTER TABLE `contact_center`
  MODIFY `contact_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `proyeccion`
--
ALTER TABLE `proyeccion`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;