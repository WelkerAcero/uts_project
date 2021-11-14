-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 11:18 PM
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
-- Table structure for table `proyeccion`
--

CREATE TABLE `proyeccion` (
  `ID` int(11) NOT NULL,
  `Texto` varchar(1000) NOT NULL,
  `Foto` varchar(1000) NOT NULL,
  `Fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proyeccion`
--

INSERT INTO `proyeccion` (`ID`, `Texto`, `Foto`, `Fecha`) VALUES
(69, 'Ejecutar proyectos sociales que contribuy Ejecutar proyectos sociales que contribuyan a la solución de necesidades del entorno mediante la interacción con la comunidad. Intervenir en los Proyectos Sociales de Nivel Territorial. Participar activamente en la formulación de soluciones a las necesidades del sector productivo y de la comunidad con sentido social y solidario. Ejecutar proyectos sociales que contribuyan a la solución de necesidades del entorno mediante la interacción con la comunidad. Intervenir en los Proyectos Sociales de Nivel Territorial. Participar activamente en la formulación de soluciones a las necesidades del sector productivo y de la comunidad con sentido social y solidario. Ejecutar proyectos sociales que contribuyan a la solución de necesidades del entorno mediante la interacción con la comunidad. Intervenir en los Proyectos Sociales de Nivel Territorial. Participar activamente en la formulación de soluciones a las necesidades del sector productivo y de la', '1632519710_final-fantasy-x-walls_403733.jpg', '2021-09-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proyeccion`
--
ALTER TABLE `proyeccion`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proyeccion`
--
ALTER TABLE `proyeccion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
