-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-01-2024 a las 20:49:24
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

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
(56, '2024-01-05', '7', 'Masculino', '87@p.com', 'No', '87', '878', 87),
(57, '2024-02-01', '54', 'Masculino', '654@protnmial.com', 'Si', '654', '654', 654),
(58, '2024-01-11', '123123', 'Masculino', '123132@gmail.com', 'Si', '123123', '123123', 123123);

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
(5, 87, '87', '87', '87', '87', 87, 'Femenino'),
(6, 587, '87', '87', '87', '87', 87, 'Femenino'),
(13, 654, '654', '654', '654', '6546', 654, 'Masculino'),
(14, 87, '87', '87', '87', '87', 87, 'Masculino'),
(15, 321, '32321', '321321', '321321', '321321', 321321, 'Masculino');

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
(1, 'p', 'p'),
(2, 'poi', 'poi');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `datos_clap`
--
ALTER TABLE `datos_clap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
