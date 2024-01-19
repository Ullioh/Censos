-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2024 a las 14:12:48
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `censos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carnet_patria`
--

CREATE TABLE `carnet_patria` (
  `id` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `tipo_persona` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `es_manzanero` varchar(3) DEFAULT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `serial1` varchar(20) DEFAULT NULL,
  `num_integrantes_familia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carnet_patria`
--

INSERT INTO `carnet_patria` (`id`, `fecha_nacimiento`, `telefono`, `tipo_persona`, `correo_electronico`, `es_manzanero`, `codigo`, `serial1`, `num_integrantes_familia`) VALUES
(59, '2024-01-26', '04848484', 'Miembro', 'ejemplo@gmail.com', 'No', '3001', '3001', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_clap`
--

CREATE TABLE `datos_clap` (
  `id` int(11) NOT NULL,
  `manzana` int(11) DEFAULT NULL,
  `grupo_familiar` varchar(100) DEFAULT NULL,
  `nacionalidad` varchar(100) DEFAULT NULL,
  `cedula_identidad` varchar(20) DEFAULT NULL,
  `nombre_apellido` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_clap`
--

INSERT INTO `datos_clap` (`id`, `manzana`, `grupo_familiar`, `nacionalidad`, `cedula_identidad`, `nombre_apellido`, `edad`, `sexo`) VALUES
(16, 1, '2', 'venezolano', '27255003', 'Ejemplo01', 1, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'censos', 'contro1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carnet_patria`
--
ALTER TABLE `carnet_patria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_clap`
--
ALTER TABLE `datos_clap`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carnet_patria`
--
ALTER TABLE `carnet_patria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `datos_clap`
--
ALTER TABLE `datos_clap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
