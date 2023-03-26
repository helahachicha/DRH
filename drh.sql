-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 26 mars 2023 à 21:54
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
(6, 11, 15, 11, 16, 16, 16, '2023-03-22 08:56:34', '2023-03-22 08:56:34'),
(9, 13, 17, 12, 14, 18, 27, '2023-03-22 08:57:34', '2023-03-22 08:57:34');

-- --------------------------------------------------------

--
-- Structure de la table `detailprofilpostes`
--

CREATE TABLE `detailprofilpostes` (
  `id` int(11) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `superhierar` varchar(255) NOT NULL,
  `supervision` varchar(255) NOT NULL,
  `interim` varchar(255) NOT NULL,
  `competence` varchar(255) NOT NULL,
  `souscompetence` varchar(255) NOT NULL,
  `niveauvise` varchar(255) NOT NULL,
  `indicateursuivi` text NOT NULL,
  `fonctionelaboration` varchar(255) NOT NULL,
  `fonctionverification` varchar(255) NOT NULL,
  `fonctionabrobation` varchar(255) NOT NULL,
  `nomprenomelab` varchar(255) NOT NULL,
  `nomprenomverif` varchar(255) NOT NULL,
  `nomprenomabrob` varchar(255) NOT NULL,
  `profilposte_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `detailprofilpostes`
--

INSERT INTO `detailprofilpostes` (`id`, `fonction`, `categorie`, `superhierar`, `supervision`, `interim`, `competence`, `souscompetence`, `niveauvise`, `indicateursuivi`, `fonctionelaboration`, `fonctionverification`, `fonctionabrobation`, `nomprenomelab`, `nomprenomverif`, `nomprenomabrob`, `profilposte_id`, `created`, `modified`) VALUES
(1, 'Ingénieur Recherche & Développement', 'Développeur Junior', 'Gérant', 'Développeur confirmé', 'Développeur confirmé', 'COMPÉTENCES TECHNIQUES', '', '', 'Compétence algorithmique niveau élevé   	 Connaissance de l’architecture de développement Orientée Objet  	  Une bonne maîtrise du SQL   ', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jaweher KHMIRI', 'Hayet  BEN SALEM', 'Rochdi ABID', 1, '2023-03-26 19:44:30', '2023-03-26 19:44:30'),
(2, 'Ingénieur Recherche & Développement', 'Développeur Confirmé', 'Gérant', 'Développeur Senior', 'Développeur Senior', 'COMPÉTENCES TECHNIQUES', '', '', '	      Maîtrise fonctionnel (Certification dans l’une des trois dernières versions) 	      Compétence technique (produit odoo) ', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', 2, '2023-03-26 19:51:01', '2023-03-26 19:51:01'),
(3, 'Ingénieur Recherche & Développement', 'Développeur Sénior', 'Gérant', 'Référant technique', 'Référant technique', 'COMPÉTENCES TECHNIQUES', '', '', '	Maîtrise fonctionnel (2 Certifications parmi les 3 derniers versions) 	Maîtrise technique  	Maîtrise une autre technologie (Plus qu’Odoo) ', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', 3, '2023-03-26 19:52:24', '2023-03-26 19:52:24'),
(4, 'Ingénieur Recherche & Développement', 'Référant Technique', 'Gérant', 'Référant technique', 'Référant technique', 'COMPÉTENCES TECHNIQUES', '', '', '	Maîtrise fonctionnel (3 Certifications) 	Maîtrise technique  	Maîtrise une autre technologie (Plus Odoo)  	Gestion de projet', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', 4, '2023-03-26 19:53:39', '2023-03-26 19:53:39');

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
(6, 'zdqscwx', 'QVCSD', 'dqSW', 7, 'Dq', 'dQCW', 'dQX<', 'Qdx', 'dqx<', '6', 5, 5, '2023-03-23 00:00:00', '14:55', 'dq', 'dQ<', '2023-03-22 09:55:39', '2023-03-22 09:55:39'),
(7, 'competence technique ', 'test', 'test', 44, 'test', 'test', 'test', 'test', 'test', '3', 4, 3, '2023-03-24 00:00:00', '10:15', 'test', 'test', '2023-03-23 09:14:57', '2023-03-23 09:14:57');

-- --------------------------------------------------------

--
-- Structure de la table `formainternes`
--

CREATE TABLE `formainternes` (
  `id` int(11) NOT NULL,
  `tycomp` varchar(255) NOT NULL,
  `themeforma` varchar(255) NOT NULL,
  `animateur` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `hentrer` time NOT NULL,
  `hsortie` time NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formainternes`
--

INSERT INTO `formainternes` (`id`, `tycomp`, `themeforma`, `animateur`, `poste`, `date`, `hentrer`, `hsortie`, `created`, `modified`) VALUES
(6, 'tyghbj', 'tyghbj', 'tyghbj', 'tyghbj', '2023-03-16', '11:23:00', '16:21:00', '2023-03-22 10:21:28', '2023-03-22 10:27:18');

-- --------------------------------------------------------

--
-- Structure de la table `profilpostes`
--

CREATE TABLE `profilpostes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profilpostes`
--

INSERT INTO `profilpostes` (`id`, `nom`, `created`, `modified`) VALUES
(1, 'Profil de poste développeur', '2023-03-26 19:44:30', '2023-03-26 19:44:30'),
(2, '', '2023-03-26 19:51:01', '2023-03-26 19:51:01'),
(3, '', '2023-03-26 19:52:24', '2023-03-26 19:52:24'),
(4, '', '2023-03-26 19:53:39', '2023-03-26 19:53:39');

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
-- Index pour la table `detailprofilpostes`
--
ALTER TABLE `detailprofilpostes`
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
-- Index pour la table `profilpostes`
--
ALTER TABLE `profilpostes`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `detailprofilpostes`
--
ALTER TABLE `detailprofilpostes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `formaexternes`
--
ALTER TABLE `formaexternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `formainternes`
--
ALTER TABLE `formainternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `profilpostes`
--
ALTER TABLE `profilpostes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
