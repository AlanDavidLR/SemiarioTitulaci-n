-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2023 a las 21:05:22
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
  `password` varchar(250) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nombre`, `edad`, `sexo`, `pais`) VALUES
(10, 'pru@msn.com', '79a628b2d968cfe1a7f9c5e398f6b9', '', 0, '0', '0'),
(11, 'pru@msn.comds', '6c1c1c11215460dff9c6830817d0f4', '', 0, '0', '0'),
(12, 'pru@msn.com', '$2y$10$Hw1yF5yG5do7Nw6s/MVkPOl', '', 0, '0', '0'),
(13, 'AlanLopezR@msn.com', 'a0a3493f12aebc0cd6ca77d2af140d', '', 0, '0', '0'),
(14, '18Julio2023@msn.com', '8333a0d124cb98dda5135da8f20057', '', 0, '0', '0'),
(15, '19Julio2023@msn.co9', 'c4ca4238a0b923820dcc509a6f7584', '', 0, '0', '0'),
(16, '1', 'c4ca4238a0b923820dcc509a6f7584', '', 0, '0', '0'),
(17, '2', 'c81e728d9d4c2f636f067f89cc14862c', '', 0, '0', '0'),
(18, 'alan', '202cb962ac59075b964b07152d234b70', '', 0, '0', '0'),
(19, 'hoola@msn.com', '23e3cce2e584eea2b7d230d0a21cad1f', '', 0, '0', '0'),
(20, 'prueba1@msn.com', '9133742ef1ade6b2d4cfe0e6093bcc6a', '', 0, '0', '0'),
(21, 'pruebas1@msn.com', '$2y$10$Ff8wdY4G/CHzijpw0Y0R6upZpx5tSAQhbMgCFTgI/638bDp8jCmcS', '', 0, '0', '0'),
(22, 'pruebas1@msn.com', '$2y$10$o93QI4WlMDmN.eiCFOxVXeTHodbfP/7MrYUVH1hZ1mMu/2bTh4oWu', '', 0, '0', '0'),
(23, 'pruebas2@msn.com', '$2y$10$t6tXGsz67UMiXpqQekjuAOH4WIQfqpGVHKniwIhd1CUKPwJlcgdEO', '', 0, '0', '0'),
(24, 'pruebas5@msn.com', '$2y$10$fewOmSv1UUEl0mYUhOlELerulOdUXdMc24lsGyykjtMMK0MhhkkAW', 'Miguel cornejo', 0, 'masculino', 'México'),
(25, 'pruebas6@msn.com', '$2y$10$wiLsXMKZP9N97H9qCWKng.c9b.lBvYezMywthEeZ7BLiQg7BiNCNe', 'Jimena López', 18, 'masculino', 'Ecuador'),
(26, 'pruebas6@msn.com', '$2y$10$YbPDICbwwGtnv6oA.m7G/ezOXPOpQDKyCuAlbR5Nl5eObNmmhMGLO', 'Jimena López', 18, 'masculino', 'Ecuador');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
