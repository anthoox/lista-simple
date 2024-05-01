-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-05-2024 a las 12:28:11
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lista_simple`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `list_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float(100,2) DEFAULT '0.00',
  `numer` int DEFAULT '1',
  `notification_date` datetime DEFAULT NULL,
  `notes` text,
  `completed` int DEFAULT '0',
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_items_users` (`user_id`),
  KEY `fk_items_lists` (`list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `user_id`, `list_id`, `name`, `price`, `numer`, `notification_date`, `notes`, `completed`, `creation_date`) VALUES
(17, 11, 46, 'leche', 20.20, 12, '2024-05-11 16:42:00', '', 1, '2024-04-26 16:34:00'),
(19, 11, 46, 'peras', 2.00, 1, '2024-05-10 16:41:00', '', 1, '2024-04-26 16:37:10'),
(24, 11, 46, 'arroz', 20.00, 1, '0000-00-00 00:00:00', '', 1, '2024-04-26 16:44:28'),
(26, 11, 46, 'Patats', 0.00, 1, '0000-00-00 00:00:00', '', 1, '2024-04-28 14:20:54'),
(27, 11, 46, 'Manzanas', 2.00, 5, '0000-00-00 00:00:00', '', 1, '2024-04-29 15:26:56'),
(28, 11, 46, 'Palta', 0.00, 1, '0000-00-00 00:00:00', '', 1, '2024-04-29 15:30:16'),
(29, 11, 48, 'Programar', 0.00, 1, '0000-00-00 00:00:00', '', 1, '2024-04-29 15:40:09'),
(30, 11, 48, 'Estudiar', 0.00, 1, '0000-00-00 00:00:00', '', 1, '2024-04-29 15:40:13'),
(31, 11, 46, 'Cebolla', 0.00, 1, '0000-00-00 00:00:00', '', 1, '2024-04-30 13:21:59'),
(32, 11, 48, 'asdads', 0.00, 1, '0000-00-00 00:00:00', '', 0, '2024-04-30 15:50:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lists`
--

DROP TABLE IF EXISTS `lists`;
CREATE TABLE IF NOT EXISTS `lists` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` date DEFAULT NULL,
  `notification` datetime DEFAULT NULL,
  `description` text,
  `paper_bin` int NOT NULL DEFAULT '0',
  `completed` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_lists_users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `lists`
--

INSERT INTO `lists` (`id`, `user_id`, `name`, `creation_date`, `modification_date`, `notification`, `description`, `paper_bin`, `completed`) VALUES
(5, 9, 'sesd', '2024-04-15 00:00:00', '2024-04-15', '0000-00-00 00:00:00', '', 0, 1),
(42, 9, 're', '2024-04-21 00:00:00', '2024-04-21', '0000-00-00 00:00:00', '', 0, 0),
(43, 9, 'rererer', '2024-04-21 00:00:00', '2024-04-21', '0000-00-00 00:00:00', '', 0, 0),
(46, 11, 'Mercadona', '2024-04-26 16:33:31', '2024-04-30', '2024-05-10 13:18:00', '', 0, 1),
(48, 11, 'tareas', '2024-04-26 16:39:37', '2024-04-29', '2024-05-09 15:40:00', '', 0, 0),
(51, 11, 'Juegos', '2024-04-30 13:06:45', '2024-04-30', '0000-00-00 00:00:00', '', 0, 0),
(52, 11, 'completa', '2024-04-30 14:25:35', '2024-04-30', '0000-00-00 00:00:00', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` date DEFAULT NULL,
  `rol` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `up_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `registration_date`, `rol`, `image`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$04$10YsRzYYDqH0vE.97pGOzesitkyaIJraMX7im6fyfmWICtpFKz/bO', '2024-04-09', 1, NULL),
(9, 'test', 'test@test.com', '$2y$04$vjEKOpKlQ5.3/lFAark3V.Q1j4HyJA21GKZN.eP9M2xtG78w9R7Q6', '2024-04-15', 2, NULL),
(11, 'prueba', 'prueba@prueba.com', '$2y$04$3NiGPNYJ6Oy0Wq3wAbZcreLG4IHyUg2SxssLCNCRA3oZNQi7VazOS', '2024-04-26', 2, 'fotologo.jpeg');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `fk_items_lists` FOREIGN KEY (`list_id`) REFERENCES `lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_items_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `lists`
--
ALTER TABLE `lists`
  ADD CONSTRAINT `fk_lists_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
