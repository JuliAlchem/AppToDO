-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-03-2022 a las 19:39:07
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `start_date` datetime DEFAULT current_timestamp(),
  `end_date` datetime DEFAULT NULL,
  `status` enum('pending','progress','finished','') DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `start_date`, `end_date`, `status`, `user`, `description`) VALUES
(4, '2015-12-21 00:00:00', NULL, 'pending', 'lore', 'backup'),
(33, '2022-03-05 00:00:00', NULL, 'pending', 'lorenzo', 'fdvfd'),
(52, '2022-03-03 00:00:00', NULL, 'progress', 'pedro', '32d2d'),
(59, '2022-12-02 00:00:00', NULL, 'pending', 'pedro', 'backup'),
(61, '2022-01-01 00:00:00', NULL, 'pending', 'lore', 'tes te t'),
(62, '2022-01-01 00:00:00', NULL, 'pending', 'lore', 'tes te t'),
(63, '2022-01-01 00:00:00', NULL, 'pending', 'lore', 'tes te t'),
(64, '2022-01-01 00:00:00', NULL, 'pending', 'lore', 'tes te t'),
(65, '2022-01-01 00:00:00', NULL, 'pending', 'lore', 'tes te t'),
(66, '2022-03-03 00:00:00', NULL, 'pending', 'lore', 'sql fix'),
(67, '2022-03-03 00:00:00', NULL, 'pending', 'lorenzo', 'test sql 2'),
(70, '2022-01-01 00:00:00', NULL, 'pending', 'lorenzo', 'test sql'),
(71, '2022-03-03 00:00:00', NULL, 'pending', 'julia', 'new mvc'),
(73, '2022-03-03 00:00:00', NULL, 'pending', 'lorenzo', 'test mcv');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
