-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2025 a las 18:44:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gpth`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `ID_formulario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`ID_formulario`, `nombre`, `correo`, `telefono`, `asunto`, `mensaje`) VALUES
(1, 'Samuel David Yánez Machado', 'sdavid.yanez@gmail.com', '3054461587', 'Capacitación de habilidades aplicadas', 'Cordial saludo, esta es una invitación para la capacitación inicial de sus funciones empresariales y encontrar la aplicabilidad de las habilidades de los empleados al mismo contexto'),
(3, 'Julio Cesar Yánez', 'manchax6@gmail.com', '+57 305 404 0522', 'Permiso', 'Solicito un permiso para llegar tardíamente el día de la capacitación');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`ID_formulario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `ID_formulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
