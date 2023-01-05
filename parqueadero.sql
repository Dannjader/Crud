-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2022 a las 15:00:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parqueadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carros`
--

CREATE TABLE `carros` (
  `cod_carro` int(11) UNSIGNED NOT NULL,
  `Marca` varchar(25) NOT NULL,
  `Modelo` varchar(25) NOT NULL,
  `Placa` varchar(25) NOT NULL,
  `Color` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carros`
--

INSERT INTO `carros` (`cod_carro`, `Marca`, `Modelo`, `Placa`, `Color`) VALUES
(1, 'Mazda', '323', 'HDF323', 'Blanco'),
(2, 'Chevrolet', 'Captiva', 'JHD214', 'Rojo'),
(3, 'Mazda', '3', 'LKJ564', 'Gris'),
(4, 'Toyota', 'Prado', 'SAD437', 'Plata'),
(5, 'Mazda', 'Cx-30', 'JHJ414', 'Negro'),
(6, 'Chevrolet', 'Beat', 'KJL632', 'Gris'),
(7, 'Toyota', 'Hilux', 'SDA245', 'Verde Oliva'),
(8, 'Foton', 'Bj-6', 'HGF723', 'Amarillo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`cod_carro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
