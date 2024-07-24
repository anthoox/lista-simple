-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-05-2024 a las 11:25:59
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.13

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
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_tokens`
--

CREATE TABLE IF NOT EXISTS `auth_tokens` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `token` CHAR(64) NOT NULL,
    `expires_at` DATETIME,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `registration_date`, `rol`, `image`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$04$Ndtn9LXqojgpR7LuIVhYXeAI8N8msRnsToDPFYSQXgCnr2q6nKAtC', '2024-04-09', 1, NULL),
(9, 'Test', 'test@test.com', '$2y$04$vjEKOpKlQ5.3/lFAark3V.Q1j4HyJA21GKZN.eP9M2xtG78w9R7Q6', '2024-04-15', 2, NULL),
(17, 'Prueba', 'prueba@prueba.com', '$2y$04$I6zVQEuZdid4c5lCld7wP.1haSiZL4MkodUigjfrzU/OhYvGDzVE2', '2024-05-05', 2, NULL);

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
