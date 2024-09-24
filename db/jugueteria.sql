-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2024 a las 19:56:47
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
-- Base de datos: `jugueteria`
--
CREATE DATABASE IF NOT EXISTS `jugueteria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jugueteria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edad`
--

CREATE TABLE `edad` (
  `id` int(11) NOT NULL,
  `rango_edad` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `edad`
--

INSERT INTO `edad` (`id`, `rango_edad`) VALUES
(1, '3 a 6 años'),
(2, '6 a 9 años'),
(3, '9 a 12 años');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `figuras`
--

CREATE TABLE `figuras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(11,3) NOT NULL,
  `imagen` varchar(70) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `id_edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `figuras`
--

INSERT INTO `figuras` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `destacado`, `id_edad`) VALUES
(1, ' Superman 30 Cm Deluxe', 'DC Figura articulada Personaje: Superman Medida: 30 cm Tiene 11 articulaciones.\r\n', 26.900, 'superman.webp\r\n', 1, 3),
(2, 'Batman Muñeco 50cm', 'Figura con excelentes texturas en el cuerpo con articulación en brazos y piernas. Medidas: 50cm alto x 20cm ancho Producto Dc 100% Original. Producto testeado no tóxico.\r\n', 49.500, 'batman.png\r\n', 0, 3),
(3, 'Star Wars Peluche  25cm', 'Star Wars peluche suave, relleno con vellón siliconado. Mide 25 cm de alto aproximadamente.\r\n', 20.000, 'star-wars.webp\r\n', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegosmesa`
--

CREATE TABLE `juegosmesa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(11,3) NOT NULL,
  `imagen` varchar(70) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `id_edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegosmesa`
--

INSERT INTO `juegosmesa` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `destacado`, `id_edad`) VALUES
(1, 'Clasico Ajedrez Original', 'Juego De Mesa Ajedrez El ajedrez que ya conocés en una edición de piezas plásticas de alta calidad. JUGADORES: 2 EDAD: + 6 MEDIDAS APROXIMADAS: 375 x 270 x 55 mm. CONTENIDO: 1 tablero, 32 fichas plásticas, 1 reglamento internacional.\r\n', 9.900, 'ajedrez.webp\r\n', 1, 1),
(2, 'Cubic Fun Rompecabeza 3d', '¡Llega Cubic Fun! Un Puzzle 3D con amplia variedad y un nivel en detalle superior. Recrea edificios icónicos y pone a prueba capacidad. Juego de entretenimiento que proporciona gran diversión, en familia o de forma individual.\r\n', 23.100, 'rompecabezas.webp\r\n', 0, 3),
(3, 'Juego de la vida', 'Viaja por la vida y decide cómo harás tu fortuna! Seguirás el camino de la escuela o irás directo a empezar tu profesión? Tomarás el camino peligroso y apostarás toda tu fortuna o te quedarás en la ruta segura?.\r\n', 39.900, 'juego-vida.webp\r\n', 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monopatin`
--

CREATE TABLE `monopatin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(11,3) NOT NULL,
  `imagen` varchar(70) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `id_edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `monopatin`
--

INSERT INTO `monopatin` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `destacado`, `id_edad`) VALUES
(1, 'Monopatin Spiderman', 'Es ideal para trasladarte con facilidad y llegar a todos lados, convirtiéndolo en una excelente alternativa de transporte\r\n', 22.000, 'm-spiderman.webp\r\n', 1, 2),
(2, 'Monopatin Unicornio', 'Con el Monopatín Reforzado con Luces Plegable 3 Ruedas Unicornio vas a disfrutar de momentos únicos.\r\n', 21.500, 'm-unicornio.webp\r\n', 0, 1),
(3, 'Monopatin  Con Luces', '¡Transforma cada paseo en una aventura mágica con el monopatín con Luces! Con un encantador diseño este monopatín mide 75 x 51 cm, ofreciendo el tamaño perfecto para un control ágil y una conducción estable.\r\n', 28.500, 'm-luces.webp\r\n', 0, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `edad`
--
ALTER TABLE `edad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `figuras`
--
ALTER TABLE `figuras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_edad_figuras` (`id_edad`);

--
-- Indices de la tabla `juegosmesa`
--
ALTER TABLE `juegosmesa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_edad_juegosmesa` (`id_edad`);

--
-- Indices de la tabla `monopatin`
--
ALTER TABLE `monopatin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_edad_monopatin` (`id_edad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `figuras`
--
ALTER TABLE `figuras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `juegosmesa`
--
ALTER TABLE `juegosmesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `monopatin`
--
ALTER TABLE `monopatin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `figuras`
--
ALTER TABLE `figuras`
  ADD CONSTRAINT `fk_edad_figuras` FOREIGN KEY (`id_edad`) REFERENCES `edad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `juegosmesa`
--
ALTER TABLE `juegosmesa`
  ADD CONSTRAINT `fk_edad_juegosmesa` FOREIGN KEY (`id_edad`) REFERENCES `edad` (`id`);

--
-- Filtros para la tabla `monopatin`
--
ALTER TABLE `monopatin`
  ADD CONSTRAINT `fk_edad_monopatin` FOREIGN KEY (`id_edad`) REFERENCES `edad` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
