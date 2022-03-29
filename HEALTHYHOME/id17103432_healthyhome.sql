-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-03-2022 a las 22:00:10
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id17103432_healthyhome`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Evento Azul', '#0071c5', '2017-08-01 00:00:00', '2017-08-02 00:00:00'),
(2, 'Eventos 2', '#40E0D0', '2017-08-02 00:00:00', '2017-08-03 00:00:00'),
(3, 'Doble click para editar evento', '#008000', '2017-08-03 00:00:00', '2017-08-07 00:00:00'),
(20, 'Coliflor', '#FFD700', '2021-07-09 00:00:00', '2021-07-10 00:00:00'),
(21, 'Estofado', '#FF8C00', '2021-07-10 00:00:00', '2021-07-11 00:00:00'),
(26, 'lentejas', '#FF8C00', '2021-07-14 00:00:00', '2021-07-15 00:00:00'),
(30, 'cau cau', '#FFD700', '2021-07-15 00:00:00', '2021-07-16 00:00:00'),
(32, 'tallarín', '#008000', '2021-07-16 00:00:00', '2021-07-17 00:00:00'),
(33, 'tallarín', '#FF0000', '2021-07-17 00:00:00', '2021-07-18 00:00:00'),
(34, 'pizza', '#FF0000', '2021-07-18 00:00:00', '2021-07-19 00:00:00'),
(35, 'Seco', '#008000', '2021-07-05 00:00:00', '2021-07-06 00:00:00'),
(36, 'Ceviche', '#000', '2021-07-13 00:00:00', '2021-07-14 00:00:00'),
(37, 'Ceviche', '#0071c5', '2021-07-27 00:00:00', '2021-07-28 00:00:00'),
(39, 'lit', '', '2021-07-01 00:00:00', '2021-07-02 00:00:00'),
(40, 'arroz con pollo', '#008000', '2021-07-28 00:00:00', '2021-07-29 00:00:00'),
(41, 'CEVICHE', '#FFD700', '2021-07-29 00:00:00', '2021-07-30 00:00:00'),
(43, 'Ensalada de Quinoa ', '#FF0000', '2021-08-15 00:00:00', '2021-08-16 00:00:00'),
(44, 'puré', '', '2021-09-06 00:00:00', '2021-09-07 00:00:00'),
(45, 'fsdfsf', '#0071c5', '2021-10-13 00:00:00', '2021-10-14 00:00:00'),
(46, '', '', '2021-11-04 00:00:00', '2021-11-05 00:00:00'),
(47, '', '', '2021-11-06 00:00:00', '2021-11-07 00:00:00'),
(48, '', '', '2021-11-05 00:00:00', '2021-11-06 00:00:00'),
(49, 'F', '', '2021-11-04 00:00:00', '2021-11-05 00:00:00'),
(50, 'lentejas', '#0071c5', '2022-03-09 00:00:00', '2022-03-10 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `codigo` varchar(10) NOT NULL,
  `articulo` varchar(15) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `seccion` varchar(20) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`codigo`, `articulo`, `cantidad`, `seccion`, `precio`) VALUES
('123', '123', 123, 'Cereales', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventariop`
--

CREATE TABLE `inventariop` (
  `SECCION` varchar(20) NOT NULL,
  `PRODUCTO` varchar(20) NOT NULL,
  `FECHA` varchar(20) NOT NULL,
  `ORIGEN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `nombre_usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`nombre_usuario`, `password`) VALUES
('123', '123'),
('1234', '1234'),
('789', '789'),
('a', 'g'),
('admin', 'admin'),
('Arcangellmar', 'Patatas123'),
('asd', 'asd'),
('awdawd', 'awdawd'),
('dfv', 'dfv'),
('Fany', '123456'),
('lucero.huaman', 'uwu'),
('prueba', '123'),
('prueba2', 'prueba2'),
('rodrigo1857', '123456'),
('usuarui12313', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
