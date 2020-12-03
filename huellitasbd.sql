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
('claudis123', 'cccc'),
('arma89', 'aaaa'),
('fercho74', 'ffff'),
('robert102', 'rrrr'),
('mario52', 'mmmm'),
('ivan85', 'iiii');

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
('MS0001', '2020-11-01', 'Toby', 'Canino', 'Poodle', 'Macho', 'cafe', 'NN', 'bogota', 'Sin especificacion', 'Encontrado', '42553845'),
('MS0002', '2020-11-01', 'Zeus', 'Felino', 'Persa', 'Hembra', 'negro', 'cali', 'NN', 'Sin especificacion', 'Perdido', '42553845'),
('MS0003', '2020-11-01', 'Wanda', 'Canino', 'Labrador', 'Hembra', 'blanco', 'medellin', 'NN', 'Sin especificacion', 'Perdido', '25418444'),
('MS0004', '2020-11-01', 'Coco', 'Felino', 'Siames', 'Macho', 'cafe', 'NN', 'bogota', 'Sin especificacion', 'Encontrado', '25418444'),
('MS0005', '2020-11-01', 'Rocky', 'Canino', 'Beagle', 'Macho', 'cafe', 'cartagena', 'cartagena', 'Sin especificacion', 'Entregado', '25418444'),
('MS0006', '2020-11-01', 'Chispa', 'Felino', 'Ragdoll', 'Hembra', 'blanco', 'medellin', 'medellin', 'Sin especificacion', 'Entregado', '78965426'),
('MS0007', '2020-11-01', 'Firulais', 'Canino', 'Bulldog', 'Macho', 'cafe', 'NN', 'bogota', 'Sin especificacion', 'Encontrado', '78965426'),
('MS0008', '2020-11-01', 'Paco', 'Felino', 'Abisinio', 'Macho', 'cafe', 'bogota', 'bogota', 'Sin especificacion', 'Entregado', '14356985'),
('MS0009', '2020-11-01', 'Lucas', 'Canino', 'Beagle', 'Macho', 'negro', 'medellin', 'NN', 'Sin especificacion', 'Perdido', '14356985'),
('MS0010', '2020-11-01', 'Gorda', 'Felino', 'Maine', 'Hembra', 'cafe', 'cali', 'NN', 'Sin especificacion', 'Perdido', '14356985'),
('MS0011', '2020-11-01', 'Bruno', 'Canino', 'Poodle', 'Macho', 'cafe', 'NN', 'medellin', 'Sin especificacion', 'Encontrado', '89650231'),
('MS0012', '2020-11-01', 'Minino', 'Felino', 'Siberiano', 'Macho', 'blanco', 'cartagena', 'cartagena', 'Sin especificacion', 'Entregado', '89650231'),
('MS0013', '2020-11-01', 'Achanty', 'Canino', 'Labrador', 'Hembra', 'cafe', 'cali', 'cali', 'Sin especificacion', 'Entregado', '88246590'),
('MS0014', '2020-11-01', 'Paque', 'Felino', 'Manx', 'Macho', 'cafe', 'bogota', 'bogota', 'Sin especificacion', 'Entregado', '88246590'),
('MS0015', '2020-11-01', 'Chiky', 'Canino', 'Bulldog', 'Macho', 'negro', 'NN', 'bogota', 'Sin especificacion', 'Encontrado', '88246590'),
('MS0016', '2020-11-01', 'Coco', 'Felino', 'Balines', 'Hembra', 'cafe', 'medellin', 'NN', 'Sin especificacion', 'Perdido', '88246590');

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
('2020-11-18', '42553845', 'Claudia', 'Rojas', '3118643125', 'claudis@hotmail.com', 'claudis123'),
('2020-11-18', '25418444', 'Armando', 'Gonzalez', '3204638966', 'arm741@gmail.com', 'arma89'),
('2020-11-18', '78965426', 'Federico', 'Albarracin', '3014725102', 'albarracin789@hotmail.com', 'fercho74'),
('2020-11-18', '14356985', 'Roberto', 'Mora', '3006325869', 'rmora41@gmail.com', 'robert102'),
('2020-11-18', '89650231', 'Mario', 'Martinez', '3104223366', 'mm74@hotmail.com', 'mario52'),
('2020-11-22', '88246590', 'Ivan', 'Cardenas', '3182855503', 'ivcardenas2@poligran.edu.co', 'ivan85');

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
