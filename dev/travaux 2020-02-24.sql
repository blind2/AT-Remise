-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 24 fév. 2020 à 16:06
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `remise_trudellealexandre`
--

-- --------------------------------------------------------

--
-- Structure de la table `travaux`
--

CREATE TABLE `travaux` (
  `id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tempsestime` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `avancement` decimal(5,2) DEFAULT NULL,
  `dateremise` datetime NOT NULL,
  `sommatif` tinyint(1) NOT NULL,
  `corrigesur` decimal(5,2) NOT NULL,
  `note` decimal(5,2) DEFAULT NULL,
  `ponderation` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `travaux`
--

INSERT INTO `travaux` (`id`, `cours_id`, `titre`, `tempsestime`, `avancement`, `dateremise`, `sommatif`, `corrigesur`, `note`, `ponderation`) VALUES
(1, 1, 'Un petit exercice', '30', '0.00', '2020-02-25 23:55:00', 0, '10.00', NULL, '0.00'),
(2, 2, 'Une grosse évaluation', '180', '25.00', '2020-02-28 10:00:00', 1, '25.00', NULL, '25.00'),
(3, 1, 'Examen intra', NULL, NULL, '2020-02-17 08:15:00', 1, '25.00', NULL, '25.00'),
(4, 2, 'Intra', NULL, NULL, '2020-02-20 14:15:00', 1, '100.00', '70.00', '15.00'),
(5, 2, 'Élaboration du plan', '60', '50.00', '2020-02-26 23:55:00', 0, '0.00', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `travaux`
--
ALTER TABLE `travaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_travaux_cours` (`cours_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `travaux`
--
ALTER TABLE `travaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `travaux`
--
ALTER TABLE `travaux`
  ADD CONSTRAINT `fk_travaux_cours` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
