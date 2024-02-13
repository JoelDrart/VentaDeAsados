-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2024 a las 19:16:12
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventadeasados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallereserva`
--

CREATE TABLE `detallereserva` (
  `platoId` int(11) NOT NULL,
  `reservaId` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `imagenId` int(11) NOT NULL,
  `imagenBase64` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `platoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinion`
--

CREATE TABLE `opinion` (
  `opinionId` int(11) NOT NULL,
  `opinion` text NOT NULL,
  `userId` int(11) NOT NULL,
  `platoId` int(11) NOT NULL,
  `puntuacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

CREATE TABLE `plato` (
  `platoId` int(11) NOT NULL,
  `nombrePlato` varchar(50) NOT NULL,
  `imagenP` varchar(500) NOT NULL,
  `descripcionPlato` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `tipoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plato`
--

INSERT INTO `plato` (`platoId`, `nombrePlato`, `imagenP`, `descripcionPlato`, `precio`, `tipoId`) VALUES
(6, 'Plato1', '', 'sdasdasd', 12.00, 1),
(7, 'Plato2', '', 'sdasdasd', 12.00, 4),
(8, 'Plato2', '', 'sdasdasd', 12.00, 4),
(9, 'Plato2', '', 'sdasdasd', 12.00, 4),
(10, 'Plato2', '', 'sdasdasd', 12.00, 4),
(11, 'Plato2', '', 'sdasdasd', 12.00, 4),
(12, 'Plato2', '1649083760487.jpg', 'sdasdasd', 12.00, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `reservaId` int(11) NOT NULL,
  `fechaReserva` date NOT NULL,
  `horaReserva` time NOT NULL,
  `tipoReserva` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoplato`
--

CREATE TABLE `tipoplato` (
  `tipoId` int(11) NOT NULL,
  `nombreTipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipoplato`
--

INSERT INTO `tipoplato` (`tipoId`, `nombreTipo`) VALUES
(1, 'Sopas'),
(2, 'Light'),
(3, 'Tablitas'),
(4, 'Hamburguesas'),
(5, 'Niños'),
(6, 'Porciones'),
(7, 'Cortes PREMIUM'),
(8, 'Mar'),
(9, 'Churrascos'),
(10, 'Alitas'),
(11, 'Mexicana'),
(12, 'Menestras'),
(13, 'Picaditas'),
(14, 'Bebidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiporeserva`
--

CREATE TABLE `tiporeserva` (
  `tipoReserva` int(11) NOT NULL,
  `nombreReserva` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiporeserva`
--

INSERT INTO `tiporeserva` (`tipoReserva`, `nombreReserva`) VALUES
(1, 'Domicilio'),
(2, 'Restaurante'),
(3, 'Evento'),
(4, 'Catering'),
(5, 'Empresarial'),
(6, 'Familiar'),
(7, 'Amigos'),
(8, 'Cumpleaños'),
(9, 'Aniversario'),
(10, 'Boda'),
(11, 'Graduación'),
(12, 'Despedida de soltero'),
(13, 'Despedida de soltera'),
(14, 'Baby Shower'),
(15, 'Bautizo'),
(16, 'Primera Comunión'),
(17, 'Confirmación'),
(18, 'Quinceañera'),
(19, 'Bautizo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`userId`, `nombreUsuario`, `nombre`, `apellido`, `email`, `telefono`, `clave`, `tipoUsuario`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '0123456789', '1234', 1),
(2, 'erick', 'ERICK', 'MALAN', 'erickjpk1234@gmail.com', '0123456789', '1234', 1),
(3, 'pablo', 'PABLO', 'CARVAJAL', 'pablo.carvajal@espoch.edu.ec', '0123456789', '1234', 1),
(4, 'erickjoel', 'ERICK JOEL', 'SANCHEZ', 'joel.sanchez@espoch.edu.ec', '0123456789', '1234', 1),
(5, 'franklin', 'FRANKLIN', 'NOBOA', 'franklin.noboa@espoch.edu.ec', '0123456789', '1234', 1),
(6, 'andres', 'ANDRES', 'CHISAGUANO', 'andres.chisaguano@espoch.edu.ec', '0123456789', '1234', 1),
(7, 'danilo', 'DANILO', 'BAQUERO', 'danilo.baquero@espoch.edu.ec', '0123456789', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallereserva`
--
ALTER TABLE `detallereserva`
  ADD PRIMARY KEY (`platoId`,`reservaId`),
  ADD KEY `reservaId` (`reservaId`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`imagenId`),
  ADD KEY `platoId` (`platoId`);

--
-- Indices de la tabla `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`opinionId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `platoId` (`platoId`);

--
-- Indices de la tabla `plato`
--
ALTER TABLE `plato`
  ADD PRIMARY KEY (`platoId`),
  ADD KEY `tipoId` (`tipoId`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`reservaId`),
  ADD KEY `tipoReserva` (`tipoReserva`),
  ADD KEY `userId` (`userId`);

--
-- Indices de la tabla `tipoplato`
--
ALTER TABLE `tipoplato`
  ADD PRIMARY KEY (`tipoId`);

--
-- Indices de la tabla `tiporeserva`
--
ALTER TABLE `tiporeserva`
  ADD PRIMARY KEY (`tipoReserva`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `imagenId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `opinion`
--
ALTER TABLE `opinion`
  MODIFY `opinionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plato`
--
ALTER TABLE `plato`
  MODIFY `platoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `reservaId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoplato`
--
ALTER TABLE `tipoplato`
  MODIFY `tipoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tiporeserva`
--
ALTER TABLE `tiporeserva`
  MODIFY `tipoReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallereserva`
--
ALTER TABLE `detallereserva`
  ADD CONSTRAINT `detallereserva_ibfk_1` FOREIGN KEY (`platoId`) REFERENCES `plato` (`platoId`),
  ADD CONSTRAINT `detallereserva_ibfk_2` FOREIGN KEY (`reservaId`) REFERENCES `reserva` (`reservaId`);

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`platoId`) REFERENCES `plato` (`platoId`);

--
-- Filtros para la tabla `opinion`
--
ALTER TABLE `opinion`
  ADD CONSTRAINT `opinion_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `opinion_ibfk_2` FOREIGN KEY (`platoId`) REFERENCES `plato` (`platoId`);

--
-- Filtros para la tabla `plato`
--
ALTER TABLE `plato`
  ADD CONSTRAINT `plato_ibfk_1` FOREIGN KEY (`tipoId`) REFERENCES `tipoplato` (`tipoId`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`tipoReserva`) REFERENCES `tiporeserva` (`tipoReserva`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
