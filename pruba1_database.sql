-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2023 a las 22:12:19
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
-- Base de datos: `pruba1_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(10, 'pru@msn.com', '79a628b2d968cfe1a7f9c5e398f6b9'),
(11, 'pru@msn.comds', '6c1c1c11215460dff9c6830817d0f4'),
(12, 'pru@msn.com', '$2y$10$Hw1yF5yG5do7Nw6s/MVkPOl'),
(13, 'AlanLopezR@msn.com', 'a0a3493f12aebc0cd6ca77d2af140d'),
(14, '18Julio2023@msn.com', '8333a0d124cb98dda5135da8f20057'),
(15, '19Julio2023@msn.co9', 'c4ca4238a0b923820dcc509a6f7584'),
(16, '1', 'c4ca4238a0b923820dcc509a6f7584'),
(17, '2', 'c81e728d9d4c2f636f067f89cc14862c'),
(18, 'alan', '202cb962ac59075b964b07152d234b70'),
(19, 'hoola@msn.com', '23e3cce2e584eea2b7d230d0a21cad1f'),
(20, 'prueba1@msn.com', '9133742ef1ade6b2d4cfe0e6093bcc6a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
