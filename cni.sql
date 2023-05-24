-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 19 juin 2022 à 12:34
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cni`
--

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `sexe` char(1) NOT NULL,
  `taille` varchar(10) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `pere` varchar(50) NOT NULL,
  `mere` varchar(50) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `date_delivrance` date NOT NULL DEFAULT '2022-06-19',
  `date_exp` date NOT NULL DEFAULT '2032-06-16',
  `numero` varchar(20) NOT NULL DEFAULT '20250618'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `information`
--

INSERT INTO `information` (`id`, `nom`, `prenom`, `date_naiss`, `lieu`, `sexe`, `taille`, `profession`, `pere`, `mere`, `adresse`, `telephone`, `photo`, `date_delivrance`, `date_exp`, `numero`) VALUES
(1, 'ddf', '', '2001-01-11', 'fff', 'M', '145', 'yuy', 'yu', 'rh', 'kg', '46', 'image/donne.png', '2022-06-19', '2032-06-16', '20250618'),
(2, 'ddf', '', '2001-01-11', 'fff', 'M', '145', 'yuy', 'yu', 'rh', 'kg', '46', 'image/donne.png', '2022-06-19', '2032-06-16', '20250618'),
(3, 'ffd', 'zdz', '2022-06-15', 'rrrgr', 'M', 'bfz', 'zff', 'égf', 'he', 'éér', 'gé', 'image/connexion.PNG', '2022-06-19', '2032-06-16', '20250618'),
(4, 'NJIFEGUEN PEMI', 'SAMIR HADI', '1997-01-31', 'MFOU', 'M', '1,80', 'ENSEIGNANT', 'PEMI SALIF', 'PEMI AJARA', 'YAOUNDE', '659262338', 'image/photo_2022-02-28_00-21-24.jpg', '2022-06-19', '2032-06-16', '20250618'),
(5, 'MANFOUO', 'MENDEZ', '1997-03-15', 'MBANKOMO', 'M', '1,77', 'ENS', 'PAPA AR', 'MAMAN AAE', 'YAOUNDE', '698569523', 'image/WICTE5824.JPG', '2022-06-19', '2032-06-19', '20220619');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
