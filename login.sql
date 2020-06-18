-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2020 a las 13:05:30
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `contrasena` varchar(80) NOT NULL,
  `nombres` varchar(120) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `contrasena`, `nombres`, `fecha_registro`) VALUES
(7, 'sergioa04@gmail.com', 'Sergio_10', 'Sergio Aparicio', '2020-06-12 08:41:21'),
(32, 'hola@gmail.com', 'hola', 'Sergio', '2020-06-12 08:44:47'),
(33, 'hola@gmail.com', 'hola', 'Sergio', '2020-06-12 08:44:48'),
(34, 'prueba2@gmail.com', 'hugo', 'Sergio', '2020-06-12 08:45:19'),
(35, 'prueba@gmail.com', 'hola', 'prueba', '2020-06-12 08:45:45'),
(36, 'sergioa04@gmail.com', 'Sergio_10', 'Sergio', '2020-06-12 08:47:17'),
(37, 'sergioa05@gmail.com', 'Sergio_10', 'Sergio', '2020-06-12 12:30:57'),
(38, 'prueba3@gmail.com', 'hola', 'hola', '2020-06-12 12:32:13'),
(39, 'holaquetal@gmail.com', 'hola', 'Sergio', '2020-06-12 12:33:15'),
(40, 'aparicio@google.es', 'hola', 'Sergio', '2020-06-12 12:33:50'),
(41, 'sergioa044@gmail.com', '1234', 'Adolfo', '2020-06-12 12:34:54'),
(42, 'pep@hotmail.es', 'Sergio_10', 'Pepe', '2020-06-12 12:53:57'),
(43, 'motos@motos.com', 'motos', 'Pablo', '2020-06-16 07:41:44'),
(44, 'sergioa09@gmail.com', 'hola', 'Sergio', '2020-06-16 07:49:05'),
(45, 'sergioa10@gmail.com', 'hola', 'Sergio', '2020-06-16 07:58:48'),
(46, '28@gmail.com', '28', 'prueba28', '2020-06-16 09:17:54'),
(47, 'hola98@gmail.com', 'hola', 'hola', '2020-06-16 09:24:50'),
(48, 'sergioa04@gmail.es', 'hola', 'Sergio', '2020-06-16 09:26:16'),
(49, 'holamellamosergio@gmail.com', 'hola', 'Sergio', '2020-06-16 09:28:39'),
(50, 'hola.hola@gmail.com', 'hola', 'Sergio Aparicio', '2020-06-16 09:31:47'),
(51, 'holamellamosergio2@gmail.com', 'hola', 'Sergio Aparicio', '2020-06-16 09:32:49'),
(52, 'holahola@gmail.com', 'hola', 'Sergio Aparicio', '2020-06-16 09:33:03'),
(53, 'hola@gmail.es', 'hola', 'Sergio Aparicio', '2020-06-16 09:33:20'),
(54, 'hola2@gmail.es', 'hola', 'sergio', '2020-06-16 09:38:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
