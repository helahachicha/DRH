-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 mars 2023 à 22:25
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `drh`
--

-- --------------------------------------------------------

--
-- Structure de la table `coutformaexternes`
--

CREATE TABLE `coutformaexternes` (
  `id` int(11) NOT NULL,
  `coutformahd` float NOT NULL,
  `tocoformadt` float NOT NULL,
  `locaespace` float NOT NULL,
  `comax` float NOT NULL,
  `tocout` float NOT NULL,
  `chargeto` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `coutformaexternes`
--

INSERT INTO `coutformaexternes` (`id`, `coutformahd`, `tocoformadt`, `locaespace`, `comax`, `tocout`, `chargeto`, `created`, `modified`) VALUES
(1, 42, 42, 7, 0, 0, 0, '2023-03-13 17:26:37', '2023-03-13 17:26:37');

-- --------------------------------------------------------

--
-- Structure de la table `formaexternes`
--

CREATE TABLE `formaexternes` (
  `id` int(11) NOT NULL,
  `typecomp` varchar(255) NOT NULL,
  `themforma` varchar(255) NOT NULL,
  `participant` varchar(255) NOT NULL,
  `nbparticipant` int(11) NOT NULL,
  `raisonforma` varchar(255) NOT NULL,
  `organismeforma` varchar(255) NOT NULL,
  `formalite` varchar(255) NOT NULL,
  `formateur` varchar(255) NOT NULL,
  `raisonchoix` varchar(255) NOT NULL,
  `dureeforma` varchar(255) NOT NULL,
  `nbjour` int(11) NOT NULL,
  `nbhjour` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `horaireforma` varchar(255) NOT NULL,
  `pause` varchar(255) NOT NULL,
  `lieuforma` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `formaexternes`
--

INSERT INTO `formaexternes` (`id`, `typecomp`, `themforma`, `participant`, `nbparticipant`, `raisonforma`, `organismeforma`, `formalite`, `formateur`, `raisonchoix`, `dureeforma`, `nbjour`, `nbhjour`, `date`, `horaireforma`, `pause`, `lieuforma`, `created`, `modified`) VALUES
(1, '', '', '', 0, '', '', '', '', '', '', 0, 0, '0000-00-00 00:00:00', '', '', '', '2023-03-12 20:17:51', '2023-03-13 15:34:25'),
(2, 'test', 'test', 'test', 22, 'test', 'test', 'test', 'test', 'test', 'test', 6, 8, '2023-03-13 13:46:20', 'test', 'test', 'test', '2023-03-13 13:46:20', '2023-03-13 13:46:20');

-- --------------------------------------------------------

--
-- Structure de la table `formainternes`
--

CREATE TABLE `formainternes` (
  `id` int(11) NOT NULL,
  `tycomp` varchar(255) NOT NULL,
  `themforma` varchar(255) NOT NULL,
  `animateur` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `hentrer` varchar(255) NOT NULL,
  `hsortie` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `label`, `created`, `modified`) VALUES
(1, 'Drh', '2023-03-10 14:01:56', '2023-03-10 14:01:56'),
(2, 'Admin', '2023-03-10 14:01:56', '2023-03-10 14:01:56');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(400) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `token`, `role_id`, `created`, `modified`) VALUES
(1, 'helatest@gmail.com', '$2y$10$X2xZ9SDDJUvw4KQjE/3/heD.F4vykCn.j9ZEZuWrVH8UObiI6qJk2', '', 1, '2023-03-10 14:37:00', '2023-03-10 14:37:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `coutformaexternes`
--
ALTER TABLE `coutformaexternes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formaexternes`
--
ALTER TABLE `formaexternes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formainternes`
--
ALTER TABLE `formainternes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `coutformaexternes`
--
ALTER TABLE `coutformaexternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `formaexternes`
--
ALTER TABLE `formaexternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `formainternes`
--
ALTER TABLE `formainternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
