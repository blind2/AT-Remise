-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 21 fév. 2020 à 01:29
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
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `code` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saison_id` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `professeur` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `code`, `titre`, `saison_id`, `annee`, `professeur`) VALUES
(1, '420-2A4', 'Développement', 2, 1, 'Christiane Lagacé'),
(2, '420-2D4', 'Support Technique', 2, 1, 'Joel Sandé'),
(3, '420-2C4', 'Réseautique', 2, 1, 'Shany-Jonathan Carle'),
(4, '420-2A6', 'Programmation', 2, 1, 'Simon Tousignant'),
(5, '420-2B4', 'Bases de données', 2, 1, 'Frédérik Talbek');

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

CREATE TABLE `horaires` (
  `id` int(11) NOT NULL,
  `jour_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `cours_id` int(11) DEFAULT NULL,
  `local` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`id`, `jour_id`, `periode_id`, `cours_id`, `local`) VALUES
(1, 2, 3, 1, 'C209'),
(2, 2, 6, 2, 'C209'),
(3, 3, 6, 4, 'C205'),
(4, 4, 6, 5, 'D304'),
(5, 5, 1, 1, 'C209'),
(6, 5, 3, 2, 'C209'),
(7, 5, 6, 3, 'C205'),
(8, 6, 1, 4, 'C205'),
(9, 6, 7, 5, 'E210'),
(10, 2, 1, NULL, ''),
(11, 2, 2, NULL, ''),
(12, 2, 4, 1, 'C209'),
(13, 2, 5, NULL, ''),
(14, 2, 7, 2, 'C209'),
(15, 2, 8, NULL, ''),
(16, 2, 9, NULL, ''),
(49, 3, 1, NULL, ''),
(50, 3, 2, NULL, ''),
(51, 3, 4, 3, 'C205'),
(52, 3, 5, NULL, ''),
(53, 3, 7, 4, 'C205'),
(54, 3, 8, 4, 'C205'),
(55, 3, 9, 4, 'C205'),
(57, 4, 1, NULL, ''),
(58, 4, 2, NULL, ''),
(59, 4, 3, NULL, ''),
(60, 4, 4, NULL, ''),
(61, 4, 5, NULL, ''),
(62, 4, 7, 5, 'D304'),
(63, 4, 8, NULL, ''),
(64, 4, 9, NULL, ''),
(66, 5, 2, 1, 'C209'),
(67, 5, 3, 2, 'C209'),
(68, 5, 4, 2, 'C209'),
(69, 5, 5, NULL, ''),
(70, 5, 7, 3, 'C205'),
(71, 2, 8, NULL, ''),
(72, 5, 9, NULL, ''),
(121, 6, 1, 4, 'C205'),
(122, 6, 2, NULL, 'C205'),
(123, 6, 3, 4, 'C205'),
(124, 6, 4, NULL, ''),
(125, 6, 5, NULL, ''),
(126, 6, 6, NULL, ''),
(127, 6, 8, 5, 'E210'),
(128, 6, 9, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `jours`
--

CREATE TABLE `jours` (
  `id` int(11) NOT NULL,
  `nom` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `abreviation` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `jours`
--

INSERT INTO `jours` (`id`, `nom`, `abreviation`, `ordre`) VALUES
(1, 'dimanche', 'DIM', 10),
(2, 'lundi', 'LUN', 20),
(3, 'mardi', 'MAR', 30),
(4, 'mercredi', 'MER', 40),
(5, 'jeudi', 'JEU', 50),
(6, 'vendredi', 'VEN', 60),
(7, 'samedi', 'SAM', 70);

-- --------------------------------------------------------

--
-- Structure de la table `periodes`
--

CREATE TABLE `periodes` (
  `id` int(11) NOT NULL,
  `heuredebut` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `heurefin` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `periodes`
--

INSERT INTO `periodes` (`id`, `heuredebut`, `heurefin`, `ordre`) VALUES
(1, '8h15', '9h05', 10),
(2, '9h15', '10h05', 20),
(3, '10h15', '11h05', 30),
(4, '11h15', '12h05', 40),
(5, '12h15', '13h05', 50),
(6, '13h15', '14h05', 60),
(7, '14h15', '15h05', 70),
(8, '15h15', '16h05', 80),
(9, '16h15', '17h05', 90),
(10, '17h15', '18h05', 100);

-- --------------------------------------------------------

--
-- Structure de la table `saisons`
--

CREATE TABLE `saisons` (
  `id` int(11) NOT NULL,
  `nom` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `abreviation` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `saisons`
--

INSERT INTO `saisons` (`id`, `nom`, `abreviation`, `ordre`) VALUES
(1, 'automne', 'A', 30),
(2, 'hiver', 'H', 10),
(3, 'Ã©tÃ©', 'E', 20);

-- --------------------------------------------------------

--
-- Structure de la table `travaux`
--

CREATE TABLE `travaux` (
  `id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `titre` int(11) NOT NULL,
  `tempsestime` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `avancement` decimal(5,2) DEFAULT NULL,
  `dateremise` datetime NOT NULL,
  `sommatif` tinyint(1) NOT NULL,
  `corrigesur` decimal(5,2) NOT NULL,
  `note` decimal(5,2) DEFAULT NULL,
  `ponderation` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cours_saisons` (`saison_id`);

--
-- Index pour la table `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_horaires_jours` (`jour_id`),
  ADD KEY `fk_horaires_cours` (`cours_id`),
  ADD KEY `fk_horaires_periodes` (`periode_id`);

--
-- Index pour la table `jours`
--
ALTER TABLE `jours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `periodes`
--
ALTER TABLE `periodes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `saisons`
--
ALTER TABLE `saisons`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `horaires`
--
ALTER TABLE `horaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT pour la table `jours`
--
ALTER TABLE `jours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `saisons`
--
ALTER TABLE `saisons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `travaux`
--
ALTER TABLE `travaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `fk_cours_saisons` FOREIGN KEY (`saison_id`) REFERENCES `saisons` (`id`);

--
-- Contraintes pour la table `horaires`
--
ALTER TABLE `horaires`
  ADD CONSTRAINT `fk_horaires_cours` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `fk_horaires_jours` FOREIGN KEY (`jour_id`) REFERENCES `jours` (`id`),
  ADD CONSTRAINT `fk_horaires_periodes` FOREIGN KEY (`periode_id`) REFERENCES `periodes` (`id`);

--
-- Contraintes pour la table `travaux`
--
ALTER TABLE `travaux`
  ADD CONSTRAINT `fk_travaux_cours` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
