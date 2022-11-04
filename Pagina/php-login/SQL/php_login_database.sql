-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2022 a las 03:46:10
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `nacionalidad` varchar(200) NOT NULL,
  `dni` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `nacionalidad`, `dni`, `email`, `usuario`, `imagen`, `password`, `rol`) VALUES
(37, 'Administrador', 'El jefe', 'Argentina', '4545454', 'administrador1234@gmail.com', 'Administrador', '', '$2y$10$iY2gfQb4Pb3VRQVd/ablIeNr9Rfgot7Ho7oQg.vT.c0q.oCVeHZLS', 'administrador'),
(45, 'Brian', 'NI idea', 'España', '0000000000', 'briann00@gmail.com', '00', 'fotosperfil/45.jpg', '$2y$10$NFwiFfcqOoCry104fy/AV.pThSTullbbzz6UJD40czoR/1i4.YLGq', ''),
(46, 'Rosa', 'Correa', 'Holadna', '9999999999', 'Correa44@gmail.com', 'JuaquinCorrea', 'fotosperfil/46.jpg', '$2y$10$0ZwXLg2Htuwk9xn9aG9GpeN/.PREcMX2K2Xqgi6mt3mlUI0OiL4v6', ''),
(47, 'Braian', 'Carranza ', 'Argentina', '321321312312', 'braian@gmail.com', 'brayanADB1', '', '$2y$10$qzzNO3rc0f.gzoYzjEb9ru3O95LIIcJRwlbIjxA7mQGhP1SybFhb.', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
