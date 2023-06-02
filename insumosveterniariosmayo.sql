-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3310
-- Tiempo de generación: 18-05-2023 a las 03:34:36
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibasededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumosveterniariosmayo`
--

CREATE TABLE `insumosveterniariosmayo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stock` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `insumosveterniariosmayo`
--

INSERT INTO `insumosveterniariosmayo` (`id`, `nombre`, `stock`, `precio`) VALUES
(1, 'Jeringas', '50', '3.00'),
(3, 'Gazas', '35', '5.00'),
(4, 'Insumos desechables', '45', '4.50'),
(5, 'Batas', '36', '2.50'),
(6, 'Guantes quirurjicos', '60', '1.50'),
(7, 'mascarillas', '26', '6.00'),
(8, 'vaselina', '100', '2.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `insumosveterniariosmayo`
--
ALTER TABLE `insumosveterniariosmayo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `insumosveterniariosmayo`
--
ALTER TABLE `insumosveterniariosmayo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
