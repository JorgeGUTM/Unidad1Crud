-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2023 a las 00:16:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `champi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `champ`
--

CREATE TABLE `champ` (
  `Rango` int(5) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Clase` varchar(80) NOT NULL,
  `Rol` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `champ`
--

INSERT INTO `champ` (`Rango`, `Nombre`, `Clase`, `Rol`) VALUES
(1, 'Pepe', 'Espadachín', 'Hero'),
(2, 'Pepe', 'Espadachín', 'Hero'),
(9, 'Berni', 'Ladrón', 'Asesino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `champ`
--
ALTER TABLE `champ`
  ADD PRIMARY KEY (`Rango`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `champ`
--
ALTER TABLE `champ`
  MODIFY `Rango` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
