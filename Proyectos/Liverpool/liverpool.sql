-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2021 a las 05:53:11
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liverpool`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE `tarjetas` (
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saldo_actual` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `credito_disponible` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pago_minimo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pago_no_intereses` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_limite_de_pago` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `saldo_disponible` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tarjetas`
--

INSERT INTO `tarjetas` (`usuario`, `saldo_actual`, `credito_disponible`, `pago_minimo`, `pago_no_intereses`, `fecha_limite_de_pago`, `saldo_disponible`) VALUES
('Pepe01', '15000', '20000', '5000', '7000', '20-08-2021', '2550'),
('Mary', '18000', '4780', '2000', '600', '22-08-2022', '4000'),
('Esmeralda', '7000', '12000', '1500', '400', '15-10-2021', '20000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `primer_apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_de_nacimiento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `nombre`, `primer_apellido`, `segundo_apellido`, `genero`, `fecha_de_nacimiento`, `correo`, `contrasena`) VALUES
('Esmeralda', 'Sonia Esmeralda', 'Morquecho', 'Hernandez', 'Mujer', '28-12-1988', 'sonia-morquecho@hotmail.com', 'Sonia972'),
('Mary', 'Maria de Jesus', 'Macias', 'Flores', 'Mujer', '13-07-1965', 'mary-macias.flores@hotmail.com', 'Mary123.'),
('Pepe01', 'jose de jesus', 'Garcia', 'Macias', 'Hombre', '13-08-2000', 'jose.macias@tua.edu.mx', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD KEY `pk_primaria` (`usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD CONSTRAINT `tarjetas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
