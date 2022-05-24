-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2021 a las 03:10:44
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
-- Base de datos: `generador_curp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_curp`
--

CREATE TABLE `info_curp` (
  `id` int(65) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `primer_apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `mes` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ano` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Entidad_Federativa` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CURP` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `info_curp`
--

INSERT INTO `info_curp` (`id`, `nombre`, `primer_apellido`, `segundo_apellido`, `genero`, `dia`, `mes`, `ano`, `Entidad_Federativa`, `correo`, `CURP`) VALUES
(3, 'ruben', 'martin del campo', 'valadez', 'H', '14', 'Febrero', '1999', 'Aguascalientes', 'sos-ruiz@hotmail.com', 'MAVR990214HASRLB02'),
(4, 'jose de jesus', 'garcia', 'macias', 'H', '13', 'Agosto', '2000', 'Aguascalientes', 'sos-ruiz@hotmail.com', 'GAMJ000813HASRCS08'),
(5, 'Angel Eduardo', 'Diaz', 'Marin', 'H', '23', 'Septiembre', '2001', 'Aguascalientes', 'angel_diaz2015@outlook.es', 'DIMA010923HASZRN06'),
(14, 'Eduardo', 'Garcia', 'Santos', 'H', '11', 'Febrero', '1992', 'Aguascalientes', 'sos-ruiz@hotmail.com', 'GASE920211HASRND08'),
(15, 'Agostina', 'bello', 'lacuesta', 'M', '26', 'Agosto', '1992', 'Aguascalientes', 'lunazul_721@hotmail.com', 'BELA920826MASLCG07'),
(16, 'sonia esmeralda', 'morquecho', 'hernandez', 'M', '22', 'Marzo', '1993', 'Aguascalientes', 'sos-ruiz@hotmail.com', 'MOHS930322MASRRN02'),
(17, 'Agostina', 'morquecho', 'hernandez', 'M', '20', 'Octubre', '2007', 'Durango', 'sos-ruiz@hotmail.com', 'MOHA071020MDGRRG08'),
(28, 'jose de jesus', 'morquecho', 'perez', 'H', '20', 'Septiembre', '2005', 'Guerrero', 'sos-ruiz@hotmail.com', 'MOPJ050920HGRRRS00'),
(29, 'sonia esmeralda', 'martin del campo', 'hernandez', 'M', '7', 'Junio', '2012', 'Morelos', 'sos-ruiz@hotmail.com', 'MAHS12067MMSRRN06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info_curp`
--
ALTER TABLE `info_curp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info_curp`
--
ALTER TABLE `info_curp`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
