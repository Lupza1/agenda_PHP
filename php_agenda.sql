-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2020 a las 00:29:36
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `fecha_finalizacion` date DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `dia_completo` tinyint(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id`, `titulo`, `fecha_inicio`, `hora_inicio`, `fecha_finalizacion`, `hora_final`, `dia_completo`, `id_usuario`) VALUES
(1, 'Cumple 22', '2020-07-19', '00:00:00', NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `pass`, `fecha_nacimiento`) VALUES
(1, 'juan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1998-07-19'),
(2, 'maria@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '1990-01-30'),
(3, 'sebas@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1995-02-14'),
(4, 'jose@gmail.com', '7815696ecbf1c96e6894b779456d330e', '1996-05-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
