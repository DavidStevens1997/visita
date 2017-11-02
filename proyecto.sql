-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2017 a las 04:44:16
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `area_id` int(11) NOT NULL,
  `descripcion` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`area_id`, `descripcion`) VALUES
(1, 'Exito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `cedula` int(13) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `clase` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `cilindraje` varchar(20) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `aseguradora` varchar(20) NOT NULL,
  `nivel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`cedula`, `nombres`, `apellidos`, `marca`, `clase`, `color`, `cilindraje`, `placa`, `aseguradora`, `nivel`) VALUES
(1088024835, 'jhonathan', 'alvarez', 'suzuki', 'moto', 'negra', '125', 'sux85', 'sura', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesa`
--

CREATE TABLE `procesa` (
  `cedula` varchar(12) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `procesa`
--

INSERT INTO `procesa` (`cedula`, `nombres`, `apellidos`) VALUES
('1231234', 'dsds', 'dsds'),
('134', 'jjkjh', 'jkgkgk'),
('244', 'dff', 'wee'),
('34435345', 'cfv', 'vfvf'),
('54354', 'frrrf', 'fewrw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `cedula` int(14) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `clase` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `cilindraje` varchar(20) NOT NULL,
  `aseguradora` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombres`, `apellidos`, `cedula`, `marca`, `clase`, `color`, `cilindraje`, `aseguradora`) VALUES
('Jhonathan', 'Alvarez López', 1088024835, 'suzuki', 'moto', 'negra', '125', 'sura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user` varchar(128) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user`, `clave`) VALUES
('admin', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `procesa`
--
ALTER TABLE `procesa`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
