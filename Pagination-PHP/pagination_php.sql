-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 mai 2024 à 07:07
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pagination_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `created_at`) VALUES
(1, '« Trop vieux pour être jeunes et trop jeunes pour être vieux » : qui sont les « nold » ?', '2024-05-06 09:17:22'),
(2, 'Dans les Alpes, la grenouille rousse ne grimpe pas assez vite pour survivre', '2024-05-06 09:17:22'),
(3, '« Trop vieux pour être jeunes et trop jeunes pour être vieux » : qui sont les « nold » ?', '2024-05-06 09:17:22'),
(4, 'Dans les Alpes, la grenouille rousse ne grimpe pas assez vite pour survivre', '2024-05-06 09:17:22'),
(5, '\"C\'est un truc qui fait toujours kiffer !\" : la version animée de \"One Piece\" fête ses 25 ans ', '2024-05-06 09:26:32'),
(6, '\"C\'est un truc qui fait toujours kiffer !\" : la version animée de \"One Piece\" fête ses 25 ans ', '2024-05-06 09:26:32'),
(7, '\"C\'est un truc qui fait toujours kiffer !\" : la version animée de \"One Piece\" fête ses 25 ans ', '2024-05-06 09:26:32'),
(8, '\"C\'est un truc qui fait toujours kiffer !\" : la version animée de \"One Piece\" fête ses 25 ans ', '2024-05-06 09:26:32'),
(9, 'Le relais de la flamme olympique est-il une invention des nazis ?', '2024-05-06 09:27:20'),
(10, 'Qui était Bayard, le chevalier « sans peur et sans reproche » mort il y a 500 ans ?', '2024-05-06 09:27:20'),
(11, 'Le relais de la flamme olympique est-il une invention des nazis ?', '2024-05-06 09:27:20'),
(12, 'Qui était Bayard, le chevalier « sans peur et sans reproche » mort il y a 500 ans ?', '2024-05-06 09:27:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
