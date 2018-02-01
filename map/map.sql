-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Février 2017 à 23:05
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mapsoverwatch`
--

-- --------------------------------------------------------

--
-- Structure de la table `map`
--

CREATE TABLE `map` (
  `id_map` int(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `emplacement` varchar(100) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `objectifs` tinyint(5) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `map`
--

INSERT INTO `map` (`id_map`, `nom`, `emplacement`, `mode`, `objectifs`, `type`) VALUES
(1, 'Hanamura', 'Japon', 'Assaut', 2, 'Zone residentielle'),
(2, 'Temple of Anubis', 'Egypte', 'Assaut', 2, 'Temple'),
(3, 'Volskaya Industries', 'Russie', 'Assaut', 2, 'Zone de construction de machine'),
(4, 'Dorado', 'Mexique', 'Escorte', 3, 'Rue de la ville'),
(5, 'Route 66', 'Etats-Unis', 'Escorte', 3, 'Route deserte'),
(6, 'Watchpoint: Gibraltar', 'Gibraltar', 'Escorte', 3, 'Etablissement de recherche'),
(7, 'Hollywood', 'Etats-Unis', 'Hybride', 3, 'Plusieurs studios de films'),
(8, 'King\'s Row', 'Angleterre', 'Hybride', 3, 'Rues étroites'),
(9, 'Numbani', 'Afrique de l\'Ouest', 'Hybride', 3, 'Urbain'),
(10, 'Eichenwalde', 'Allemagne', 'Hybride', 3, 'Ruine d\'un chateau'),
(11, 'Illios', 'Grèce', 'Contrôle', 1, 'Ville'),
(12, 'Lijiang Tower', 'Chine', 'Contrôle', 1, 'Centre-ville'),
(13, 'Nepal', 'Nepal', 'Contrôle', 1, 'Monastère'),
(14, 'Oasis', 'Irak', 'Contrôle', 1, 'Centre-ville'),
(15, 'Ecopoint: Antarctica', 'Antarctique', 'Arena', 0, 'Station de recherche');

--
-- Index pour les tables exportées
--

--
-- 