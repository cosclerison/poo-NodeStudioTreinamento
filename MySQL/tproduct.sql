-- Adminer 4.8.1 MySQL 8.0.34-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `pdo_node_studio`;
CREATE DATABASE `pdo_node_studio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pdo_node_studio`;

DROP TABLE IF EXISTS `tproduct`;
CREATE TABLE `tproduct` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tproduct` (`id`, `name`, `description`) VALUES
(2,	'Notebook DELL',	'CPU i5, 8GB Memoria, 480GB SSD'),
(3,	'MOUSE',	'GAMER'),
(4,	'TECLADO',	'SEM FIO'),
(5,	'MONITOR',	'AOC'),
(7,	'GABINETE',	'NINJA');

-- 2024-06-03 12:25:01
