-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 01:47:42
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendais`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `color` varchar(10) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `placa` varchar(6) NOT NULL,
  `ingreso` varchar(20) NOT NULL,
  `salida` varchar(20) NOT NULL,
  `posicion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `marca`, `descripcion`, `color`, `foto`, `placa`, `ingreso`, `salida`, `posicion`) VALUES
(4, 'Ferrari', 'Ferrari 2019', 'Modelo 2019\r\nColor Rojo\r\nPrecio: 240.000.000', 'rojo', 'https://i.pinimg.com/564x/15/81/5d/15815d851c4a5ae2fa86be7bfed6bd0d.jpg', '', '', '', '0'),
(5, 'Lamborgini', 'Deportivo', 'Modelo 2017\r\nColor Negro\r\nPrecio: 270.000.000', 'negro', 'https://i.pinimg.com/564x/e9/f0/33/e9f033bea0894d42776f689408f19149.jpg', '', '', '', '0'),
(6, 'Tessla', 'Series', 'Modelo 2018\r\nColor Blanco\r\nPrecio: 130.000.000', 'blanco', 'https://i.pinimg.com/564x/7a/d8/38/7ad8382bc352eba292cf17102b24b140.jpg', '', '', '', '0'),
(8, 'Delorean', '', 'Modelo 1990\r\nColor Gris\r\nPrecio: 40.000.000', '', 'https://i.pinimg.com/564x/f1/e5/c4/f1e5c475ea75bec948c242fa7c3968c2.jpg', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
