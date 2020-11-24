-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 07:49:02
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `huellitasbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `contrasena`) VALUES
('claudis', '777777777'),
('ivan', '447515');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idmascota` varchar(8) NOT NULL,
  `fecha` date NOT NULL,
  `nombrem` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `raza` varchar(20) NOT NULL,
  `genero` varchar(6) NOT NULL,
  `color` varchar(20) NOT NULL,
  `lugarp` varchar(50) NOT NULL,
  `lugare` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `documentoidentidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idmascota`, `fecha`, `nombrem`, `tipo`, `raza`, `genero`, `color`, `lugarp`, `lugare`, `descripcion`, `estado`, `documentoidentidad`) VALUES
('3e4235', '2020-11-01', 'paque', 'perro', 'chan', 'macho', 'cafe', 'bogota', 'soacha', 'bucwuhowvovin', 'encontrado', '88246590');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `fecharegistropersona` date NOT NULL,
  `documentoidentidad` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`fecharegistropersona`, `documentoidentidad`, `nombre`, `apellido`, `celular`, `correo`, `usuario`) VALUES
('2020-11-18', '5425254224', 'Claudia', 'Patricia', '554645645', 'claudis@hotmail.com', 'claudis'),
('2020-11-22', '88246590', 'Ivan', 'Cardenas', '3182855503', 'ivcardenas2@poligran.edu.co', 'ivan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idmascota`),
  ADD KEY `documentoidentidad` (`documentoidentidad`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`documentoidentidad`),
  ADD KEY `usuario` (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`documentoidentidad`) REFERENCES `persona` (`documentoidentidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `login` (`usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
