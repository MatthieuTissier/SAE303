-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 07 jan. 2024 à 20:24
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae303`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(50) NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `mdp`) VALUES
('jfcmeaux', 'dad256207b8b1652475f652bacc0f362bdf4bced02124b413641804257feefdd');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` varchar(45) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `civilite` varchar(10) NOT NULL,
  `naissance` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `nbenfant` tinyint(4) NOT NULL,
  `nbadulte` tinyint(4) NOT NULL,
  `handicap` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `charge` tinyint(4) NOT NULL,
  `familiale` varchar(30) NOT NULL,
  `date` date DEFAULT NULL,
  `traitementP` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `prenom`, `civilite`, `naissance`, `email`, `nbenfant`, `nbadulte`, `handicap`, `type`, `adresse`, `telephone`, `charge`, `familiale`, `date`, `traitementP`) VALUES
('1704655277Copé', 'Copé', 'Jean-François', 'Mr', '1964-05-05', 'jean@copé.com', 1, 1, '', 'brevet', '21 passage des petits trous Meaux 77100', '0810291221', 10, 'jfc', '2024-01-18', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
