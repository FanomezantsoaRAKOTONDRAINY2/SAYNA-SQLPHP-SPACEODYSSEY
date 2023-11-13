-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 12 nov. 2023 à 16:02
-- Version du serveur : 8.1.0
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spaceodyssey`
--
CREATE DATABASE IF NOT EXISTS `spaceodyssey` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `spaceodyssey`;

-- --------------------------------------------------------

--
-- Structure de la table `astronautes`
--

DROP TABLE IF EXISTS `astronautes`;
CREATE TABLE IF NOT EXISTS `astronautes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `etat_sante` varchar(20) NOT NULL,
  `taille` float DEFAULT NULL,
  `poids` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `astronautes`
--

INSERT INTO `astronautes` (`id`, `nom`, `etat_sante`, `taille`, `poids`) VALUES
(1, '7', 'Bon', 7, 8),
(2, '40', 'Bon', 50, 10);

-- --------------------------------------------------------

--
-- Structure de la table `planetes`
--

DROP TABLE IF EXISTS `planetes`;
CREATE TABLE IF NOT EXISTS `planetes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `circonference` float DEFAULT NULL,
  `distance_terre` float DEFAULT NULL,
  `documentation` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `planetes`
--

INSERT INTO `planetes` (`id`, `nom`, `circonference`, `distance_terre`, `documentation`) VALUES
(20, 'Esoalahy Student Josefa', 5453, 5453, 'fa,');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
