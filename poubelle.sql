-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 11 avr. 2023 à 11:30
-- Version du serveur :  8.0.32-0ubuntu0.20.04.2
-- Version de PHP : 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `poubelle`
--

-- --------------------------------------------------------

--
-- Structure de la table `Formulaire test`
--

CREATE TABLE `Formulaire test` (
  `submission_sub` varchar(50) NOT NULL,
  `nombre_poubelle` int NOT NULL,
  `bleu` int NOT NULL,
  `rouge` int NOT NULL,
  `jaune` int NOT NULL,
  `verte` int NOT NULL,
  `adresse` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Référence`
--

CREATE TABLE `Référence` (
  `id` int DEFAULT NULL,
  `Couleur` text,
  `id_site` int DEFAULT NULL,
  `Volume` float(140,0) DEFAULT NULL,
  `Fonctionnel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Référence`
--

INSERT INTO `Référence` (`id`, `Couleur`, `id_site`, `Volume`, `Fonctionnel`) VALUES
(NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Site`
--

CREATE TABLE `Site` (
  `id_site` int NOT NULL,
  `NombrePoubelle` int NOT NULL,
  `Adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Site`
--

INSERT INTO `Site` (`id_site`, `NombrePoubelle`, `Adresse`) VALUES
(4, 2, 'Rue-Saint-Pierre-Avignon'),
(5, 3, 'Rue-Saint-Pierre-Avignon'),
(6, 4, 'Rue-Saint-Pierre-Avignon');

-- --------------------------------------------------------

--
-- Structure de la table `stokage`
--

CREATE TABLE `stokage` (
  `id` int NOT NULL,
  `date` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `frequence` float DEFAULT NULL,
  `espace` float DEFAULT NULL,
  `pourcentage` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stokage`
--

INSERT INTO `stokage` (`id`, `date`, `heure`, `frequence`, `espace`, `pourcentage`) VALUES
(1, '2021-09-08', '08:00:00', 35.23, 144.5, '55'),
(2, '2021-09-07', '08:01:00', 35.1, 45.6, '62'),
(3, '2021-09-06', '08:02:00', 34.45, 99.1, '37'),
(13, '2021-09-08', NULL, NULL, NULL, '85'),
(14, '2021-02-07', NULL, NULL, NULL, '85'),
(15, '2021-06-05', NULL, NULL, NULL, '85');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Site`
--
ALTER TABLE `Site`
  ADD PRIMARY KEY (`id_site`);

--
-- Index pour la table `stokage`
--
ALTER TABLE `stokage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Site`
--
ALTER TABLE `Site`
  MODIFY `id_site` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `stokage`
--
ALTER TABLE `stokage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
