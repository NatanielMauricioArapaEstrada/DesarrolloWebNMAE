-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 25-05-2025 a las 00:21:32
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_comp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `id_remitente` int(11) NOT NULL,
  `id_destinatario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `asunto`, `descripcion`, `estado`, `id_remitente`, `id_destinatario`) VALUES
(40, 'desde panel admin', '11111', 'no_leido', 1, 3),
(41, 'desde panel admin', '11111', 'no_leido', 1, 8),
(42, 'desde panel admin', '11111', 'no_leido', 1, 9),
(43, 'desde panel admin', '11111', 'no_leido', 1, 10),
(44, 'MENSAJE QUE ESE BORARA', 'AL BORAR USUARIO', 'no_leido', 11, 9),
(45, 'BBBB', 'BBBBB', 'enviado', 11, 1),
(46, 'dfsadfsa', 'dasdsadsa', 'borrador', 11, 1),
(47, 'gfgds', 'fdsfdsdfsfdes', 'borrador', 1, 3),
(48, 'dsadas', 'dsadsa', 'enviado', 12, 1),
(49, 'dsadsad', 'dsadasdsa', 'enviado', 12, 1),
(50, 'dsadsa', 'dsadas', 'enviado', 12, 1),
(51, 'dsadsa', 'dsadas', 'enviado', 12, 1),
(52, 'dsadsa', 'dsadas', 'enviado', 12, 1),
(53, 'dsadsa', 'dsadas', 'enviado', 12, 1),
(54, 'dsadsa', 'dsadas', 'no_leido', 12, 1),
(55, 'dsadsa', 'dsadas', 'no_leido', 12, 1),
(56, 'dsadsa', 'dsadas', 'no_leido', 12, 1),
(57, 'dsadsa', 'dsadasdsa', 'no_leido', 12, 1),
(58, 'dsadsa', 'dsadasdsa', 'no_leido', 12, 1),
(59, 'dsadsa', 'dsadasdsa', 'enviado', 12, 1),
(60, 'dsadsa', 'dsadasdsa', 'enviado', 12, 1),
(61, 'dsadsa', 'dsadasdsa', 'enviado', 12, 1),
(62, 'dsadsa', 'dsadasdsa', 'enviado', 12, 1),
(63, 'dsadsa', 'dsadasdsa', 'enviado', 12, 1),
(64, 'dsadsa', 'dsadsa', 'borrador', 1, 3),
(65, 'dsadsa', 'dsadsa', 'borrador', 1, 10),
(66, 'dsa', 'dsadsa', 'borrador', 1, 10),
(67, 'borrador', 'mio', 'no_leido', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `nivel` int(1) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `password`, `nombre`, `nivel`, `estado`) VALUES
(1, 'clase@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'laboratorio', 0, 1),
(3, 'prueba@gmai', '8929b61a0e6b985943edc6d13c9992dc661e4f09', 'h', 0, 1),
(8, 'aa@a', '9adcb29710e807607b683f62e555c22dc5659713', 'fetch', 1, 1),
(9, 'b@b', '9adcb29710e807607b683f62e555c22dc5659713', 'sin query', 1, 1),
(10, 'con@select', '9adcb29710e807607b683f62e555c22dc5659713', 'admin', 1, 1),
(11, 'BORAR@GM', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'A BORAR ', 0, 1),
(12, 'cris@c', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'cris', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
