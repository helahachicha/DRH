-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 avr. 2023 à 13:50
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
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `profilposte_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `label`, `profilposte_id`, `created`, `modified`) VALUES
(1, 'Développeur junior', 1, '2023-03-27 12:59:46', '2023-03-27 12:59:46'),
(2, 'Développeur confirmé', 1, '2023-03-27 12:59:46', '2023-03-27 12:59:46'),
(3, 'Développeur senior', 1, '2023-03-27 13:01:08', '2023-03-27 13:01:08'),
(4, 'Développeur tecklead', 1, '2023-03-27 13:01:08', '2023-03-27 13:01:08');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `label`, `created`, `modified`) VALUES
(1, 'COMPÉTENCES TECHNIQUES', '2023-03-27 14:58:13', '2023-03-27 14:58:13'),
(2, 'COMPÉTENCES ORGANISATIONNELLES', '2023-03-27 14:58:13', '2023-03-27 14:58:13'),
(3, 'COMPÉTENCES COMPORTEMENTALES ', '2023-03-27 14:59:00', '2023-03-27 14:59:00');

-- --------------------------------------------------------

--
-- Structure de la table `comptechniques`
--

CREATE TABLE `comptechniques` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `testtechnique_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comptechniques`
--

INSERT INTO `comptechniques` (`id`, `label`, `testtechnique_id`, `created`, `modified`) VALUES
(1, 'A. Orientée Objet', 1, '2023-03-28 00:28:08', '2023-03-28 00:28:08'),
(2, 'B. Algorithme', 1, '2023-03-28 00:28:08', '2023-03-28 00:28:08'),
(3, 'C. SQL', 1, '2023-03-28 00:29:04', '2023-03-28 00:29:04');

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
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `label`, `created`, `modified`) VALUES
(1, 'Recherche & Développement', '2023-03-27 12:28:46', '2023-03-27 12:28:46'),
(2, 'Consultance fonctionnelle', '2023-03-27 12:28:46', '2023-03-27 12:28:46'),
(3, 'Administration', '2023-03-27 12:29:22', '2023-03-27 12:29:22');

-- --------------------------------------------------------

--
-- Structure de la table `detailprofilpostes`
--

CREATE TABLE `detailprofilpostes` (
  `id` int(11) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `profilposte_id` int(11) NOT NULL,
  `superhierar` varchar(255) NOT NULL,
  `supervision` varchar(255) NOT NULL,
  `interim` varchar(255) NOT NULL,
  `fonctionelaboration` varchar(255) NOT NULL,
  `fonctionverification` varchar(255) NOT NULL,
  `fonctionabrobation` varchar(255) NOT NULL,
  `nomprenomelab` varchar(255) NOT NULL,
  `nomprenomverif` varchar(255) NOT NULL,
  `nomprenomabrob` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `detailprofilpostes`
--

INSERT INTO `detailprofilpostes` (`id`, `fonction`, `categorie_id`, `profilposte_id`, `superhierar`, `supervision`, `interim`, `fonctionelaboration`, `fonctionverification`, `fonctionabrobation`, `nomprenomelab`, `nomprenomverif`, `nomprenomabrob`, `created`, `modified`) VALUES
(1, 'Ingénieur Recherche & Développement', 1, 1, 'Gérant', 'Développeur confirmé', 'Développeur confirmé', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jaweher KHMIRI', 'Hayet  BEN SALEM', 'Rochdi ABID', '2023-04-05 23:24:36', '2023-04-05 23:24:36'),
(2, 'Ingénieur Recherche & Développement', 2, 1, 'Gérant', 'Développeur Senior', 'Développeur Senior', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', '2023-04-05 23:27:20', '2023-04-05 23:27:20'),
(3, 'Ingénieur Recherche & Développement', 3, 1, 'Gérant', 'Référant technique', 'Référant technique', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', '2023-04-05 23:27:20', '2023-04-05 23:27:20'),
(4, 'Ingénieur Recherche & Développement', 4, 1, 'Gérant', 'Référant technique', 'Référant technique', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', '2023-04-05 23:30:22', '2023-04-05 23:30:22');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `nomprenom` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `nomprenom`, `categorie_id`, `created`, `modified`) VALUES
(1, 'bilel', 1, '2023-04-07 09:59:14', '2023-04-07 09:59:14'),
(2, 'chourouk', 1, '2023-04-07 09:59:14', '2023-04-07 09:59:14'),
(3, 'hela', 2, '2023-04-07 09:59:32', '2023-04-07 09:59:32');

-- --------------------------------------------------------

--
-- Structure de la table `formaexternes`
--

CREATE TABLE `formaexternes` (
  `id` int(11) NOT NULL,
  `typecomp` varchar(255) NOT NULL,
  `themeformation_id` int(11) NOT NULL,
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

INSERT INTO `formaexternes` (`id`, `typecomp`, `themeformation_id`, `participant`, `nbparticipant`, `raisonforma`, `organismeforma`, `formalite`, `formateur`, `raisonchoix`, `dureeforma`, `nbjour`, `nbhjour`, `date`, `horaireforma`, `pause`, `lieuforma`, `created`, `modified`) VALUES
(6, 'zdqscwx', 1, 'dqSW', 7, 'Dq', 'dQCW', 'dQX<', 'Qdx', 'dqx<', '6', 5, 5, '2023-03-23 00:00:00', '14:55', 'dq', 'dQ<', '2023-03-22 09:55:39', '2023-03-22 09:55:39'),
(7, 'competence technique ', 2, 'test', 44, 'test', 'test', 'test', 'test', 'test', '3', 4, 3, '2023-03-24 00:00:00', '10:15', 'test', 'test', '2023-03-23 09:14:57', '2023-03-23 09:14:57');

-- --------------------------------------------------------

--
-- Structure de la table `formainternes`
--

CREATE TABLE `formainternes` (
  `id` int(11) NOT NULL,
  `tycomp` varchar(255) NOT NULL,
  `themeformation_id` int(11) NOT NULL,
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

INSERT INTO `formainternes` (`id`, `tycomp`, `themeformation_id`, `animateur`, `poste`, `date`, `hentrer`, `hsortie`, `created`, `modified`) VALUES
(1, 'hhhhhhh', 1, 'hhh', 'hhhhhh', '2023-03-22', '00:00:15', '00:00:17', '2023-03-27 16:57:51', '2023-03-27 16:57:51'),
(2, 'bolbol', 2, 'hhh', 'hhh', '2023-03-22', '00:00:15', '00:00:17', '2023-03-27 17:00:13', '2023-03-27 17:00:13');

-- --------------------------------------------------------

--
-- Structure de la table `formcompetences`
--

CREATE TABLE `formcompetences` (
  `id` int(11) NOT NULL,
  `competence_id` int(11) NOT NULL,
  `soucompetence` varchar(255) NOT NULL,
  `niveauvise_id` int(11) NOT NULL,
  `detailprofilposte_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `formcompetences`
--

INSERT INTO `formcompetences` (`id`, `competence_id`, `soucompetence`, `niveauvise_id`, `detailprofilposte_id`, `created`, `modified`) VALUES
(1, 1, '', 1, 1, '2023-04-05 23:44:40', '2023-04-05 23:44:40'),
(2, 2, 'GESTION DE TEMPS & PRIORITÉS', 1, 1, '2023-04-05 23:44:40', '2023-04-05 23:44:40'),
(3, 3, 'GEEK', 1, 1, '2023-04-05 23:44:40', '2023-04-05 23:44:40'),
(4, 3, 'AUTODÉTERMINATION ', 1, 1, '2023-04-05 23:44:40', '2023-04-05 23:44:40'),
(5, 3, 'POSITIVITÉ', 1, 1, '2023-04-05 23:44:40', '2023-04-05 23:44:40'),
(6, 3, 'COMMUNICATION INTERACTIVE EFFICACE', 1, 1, '2023-04-05 23:44:40', '2023-04-05 23:44:40'),
(7, 3, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 1, 1, '2023-04-05 23:44:40', '2023-04-05 23:44:40'),
(8, 3, 'RÉSOLUTION DE PROBLÈMES', 1, 1, '2023-04-05 23:44:40', '2023-04-05 23:44:40'),
(9, 3, 'SERVICES D’EXCELLENCE  ', 1, 1, '2023-04-05 23:44:40', '2023-04-05 23:44:40'),
(10, 1, '', 2, 2, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(11, 2, 'GESTION DE TEMPS & PRIORITÉS', 2, 2, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(12, 3, 'Autonomie', 2, 2, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(13, 3, 'COMMUNICATION INTERACTIVE EFFICACE', 2, 2, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(14, 3, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 2, 2, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(15, 3, 'RÉSOLUTION DES PROBLÈMES', 2, 2, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(16, 3, 'SERVICE D’EXCELLENCE ', 2, 2, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(17, 3, 'RAISONNEMENT CONCEPTUEL ', 2, 2, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(18, 1, '', 3, 3, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(19, 2, 'GESTION DE TEMPS & PRIORITÉS', 3, 3, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(20, 3, 'COMMUNICATION INTERACTIVE EFFICACE', 3, 3, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(21, 3, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 3, 3, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(22, 3, 'RÉSOLUTION DES PROBLÈMES', 3, 3, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(23, 3, 'SERVICE D’EXCELLENCE ', 3, 3, '2023-04-05 23:48:37', '2023-04-05 23:48:37'),
(24, 3, 'RAISONNEMENT CONCEPTUEL ', 3, 3, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(25, 3, 'LEADERSHIP', 3, 3, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(26, 1, '', 4, 4, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(27, 2, 'GESTION DE TEMPS & PRIORITÉS', 4, 4, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(28, 3, 'COMMUNICATION INTERACTIVE EFFICACE', 4, 4, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(29, 3, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 4, 4, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(30, 3, 'RÉSOLUTION DES PROBLÈMES', 4, 4, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(31, 3, 'RAISONNEMENT ANALYTIQUE ', 4, 4, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(32, 3, 'LEADERSHIP', 4, 4, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(33, 3, 'SOUTIEN AU DÉVELOPPEMENT DES AUTRES', 4, 4, '2023-04-05 23:52:04', '2023-04-05 23:52:04');

-- --------------------------------------------------------

--
-- Structure de la table `indicateursuivis`
--

CREATE TABLE `indicateursuivis` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `formcompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `indicateursuivis`
--

INSERT INTO `indicateursuivis` (`id`, `label`, `formcompetence_id`, `created`, `modified`) VALUES
(1, '- Compétence algorithmique niveau élevé  ', 1, '2023-03-27 15:06:29', '2023-03-27 15:06:29'),
(2, '- Connaissance de l’architecture de développement Orientée Objet ', 1, '2023-03-27 15:15:17', '2023-03-27 15:15:17'),
(3, '- Une bonne maîtrise du SQL   ', 1, '2023-03-27 15:17:53', '2023-03-27 15:17:53'),
(4, '- Planifier & compléter les tâches/projets à temps efficacement', 2, '2023-03-27 15:18:27', '2023-03-27 15:18:27'),
(5, '- Informer de la progression des tâches ou du projet ', 2, '2023-03-27 15:19:04', '2023-03-27 15:19:04'),
(6, '- Déclarer en cas de difficulté technique : c’est à dire après dépasser 50 % du temps prévu de réalisation d’une tâche au maximum à l’essai de résolution d’une difficulté technique ', 2, '2023-03-27 15:19:22', '2023-03-27 15:19:22'),
(7, '- Écouter activement afin de bien comprendre le message', 6, '2023-03-27 15:20:14', '2023-03-27 15:20:14'),
(8, '- Essayer de partager l’information liée à l’exécution de travail et la communiquer clairement (quelque soit de la part développeur junior et de son vis-à-vis)', 6, '2023-03-27 15:20:14', '2023-03-27 15:20:14'),
(9, '- Répondre de manière appropriée en donnant l’information et les faits de façon logique, claire et cohérente', 6, '2023-03-27 15:20:57', '2023-03-27 15:20:57'),
(10, '- Transmet et reçoit le besoin facile à comprendre : c’est à dire transmet, reçoit et vérifie la bonne compréhension de la part de l’émetteur et récepteur', 6, '2023-03-27 15:20:57', '2023-03-27 15:20:57'),
(11, '- Tenir compte de l’objectif de toute l’équipe  ', 7, '2023-03-27 15:21:46', '2023-03-27 15:21:46'),
(12, '- Réussite collective ou échec collective ! : c’est toute l’équipe est responsable soit en cas de la réussite ou en cas d’échec', 7, '2023-03-27 15:21:46', '2023-03-27 15:21:46'),
(13, '- Répartition des tâches d’une manière équitable', 7, '2023-03-27 15:22:10', '2023-03-27 15:22:10'),
(14, '- Appuyer les décisions ou les activités de l’équipe et aider à réaliser l’objectif principal', 7, '2023-03-27 15:22:10', '2023-03-27 15:22:10'),
(15, '- Poser les questions adéquates et distinguer entre les renseignements pertinents et ceux qui ne le sont pas', 8, '2023-03-27 15:22:49', '2023-03-27 15:22:49'),
(16, '- Identifier la cause principale du problème affronté', 8, '2023-03-27 15:22:49', '2023-03-27 15:22:49'),
(17, '- Fournir une réponse claire & logique aux questions ou préoccupations', 9, '2023-03-27 15:23:11', '2023-03-27 15:23:11'),
(18, '- Fournir un service, y compris des renseignements utiles ou une aide, conforme aux normes de service et aux lignes directrices pertinentes', 9, '2023-03-27 15:23:11', '2023-03-27 15:23:11'),
(19, 'Maîtrise fonctionnel (Certification dans l’une des trois dernières versions)', 10, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(20, 'Compétence technique (produit odoo) ', 10, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(21, 'Déterminer l’importance des tâches/activités, et passer rapidement et efficacement d’une tâche à l’autre', 11, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(22, 'Veiller à accomplir le travail en utilisant des solutions efficaces', 11, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(23, 'Valider la compréhension du message par l’autre partie ', 13, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(24, 'Reconnaître les signes non verbaux et les utilise pour identifier les pensées ou les préoccupations non exprimées afin de répondre de façon appropriée', 13, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(25, 'Utiliser des techniques de communication appropriées (poser des questions clairement, l’écoute, la ré formulation du message...) afin de clarifier son message et d’en faciliter la compréhension.', 13, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(26, 'Prendre l’initiative ', 14, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(27, 'Faire part des connaissances,  expérience ou expertise pertinente et utile en vue d’aider les membres du groupe à réaliser leurs objectifs de façon plus efficace ou efficiente', 14, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(28, 'S’efforcer de faire quelque chose de plus pour aider les membres du groupe (Exp : Assister les membres du groupe à acquérir les habiletés nécessaires afin d’atteindre les objectifs de travail)', 14, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(29, 'Recueillir des faits et des renseignements additionnels pour acquérir une meilleure compréhension de la situation', 15, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(30, 'Reconnaître les situations où les procédures habituelles peuvent ne pas s’appliquer et où une solution différente est requise', 15, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(31, 'S’assurer que le besoin est traité; cela peut nécessiter l’intervention d’un tiers', 16, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(32, 'Assurer un suivi auprès du client lorsque nécessaire ou prend d’autres mesures', 16, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(33, 'Prendre l’initiative et gérer les difficultés ', 17, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(34, 'Appliquer des règles simples, jugement et expériences passées pour cerner les problèmes', 17, '2023-03-31 12:36:12', '2023-03-31 12:36:12'),
(35, 'Remarquer qu\'une situation présente est similaire à une situation passée ou est différente d\'une situation passée et déterminer les similitudes et (ou) les différences', 17, '2023-03-31 12:41:43', '2023-03-31 12:41:43'),
(36, 'Identifier l’information pertinente ainsi que les tendances, les constantes ou les éléments manquants', 17, '2023-03-31 12:41:43', '2023-03-31 12:41:43'),
(37, 'Maîtrise fonctionnel (2 Certifications parmi les 3 derniers versions)', 18, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(38, 'Maîtrise technique ', 18, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(39, 'Maîtrise une autre technologie (Plus qu’Odoo) ', 18, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(40, 'Avoir une visibilité sur le planning de l’équipe de développement', 19, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(41, 'Organiser les horaires, le travail et le milieu pour maximiser l’efficacité', 19, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(42, 'Anticiper et se préparer à gérer les problèmes  efficacement', 19, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(43, 'Avoir un équilibre psychique et une bonne gestion de stress', 20, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(44, 'Personnaliser son langage et son style de communication en fonction de la situation et de l’interlocuteur ou de l’auditoire, tout en livrant le même message', 20, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(45, 'Adapter la façon de transmettre le message lorsque des difficultés de compréhension surviennent', 20, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(46, 'Tirer profit des forces, des habiletés et des capacités des membres de l’équipe en vue d’atteindre l’objectif commun', 21, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(47, 'Encourager les membres de l’équipe à exprimer leurs points de vue ainsi que leurs opinions tout en tentant d’obtenir le consensus', 21, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(48, 'Traiter un problème ou une situation qui laisse place à l’interprétation.', 22, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(49, 'Évaluer les risques et les avantages d’autres solutions', 22, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(50, 'Déterminer le besoin sous-jacent du client et fournit une aide ou des renseignements supplémentaires au-delà de l’attente du client ou de la norme de service applicable', 23, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(51, 'Fait appel à son expérience et à ses connaissances pour fournir un service additionnel à valeur ajoutée pour le client, ou pour améliorer d’une certaine manière sa situation', 23, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(52, 'Utiliser ses connaissances ou situations passées pour examiner les situations présentes', 24, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(53, 'Appliquer et modifier des méthodes de manière appropriée à la situation  ', 24, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(54, 'Veiller aux besoins de l’équipe pour lui permettre de donner son plein potentiel et d’atteindre les objectifs (Remarque : la satisfaction des besoins est une source de motivation)', 25, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(55, 'Favoriser la collaboration, le travail en équipe et la confiance entre les membres de l’équipe', 25, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(56, 'Reconnaître et optimiser les forces et la diversité des membres de l’équipe', 25, '2023-03-31 12:51:07', '2023-03-31 12:51:07'),
(57, 'Développer une équipe talentueux en reconnaissant le potentiel d’accomplissement des membres de l’équipe et en fournissant des occasions d’apprentissage continu', 25, '2023-03-31 12:56:33', '2023-03-31 12:56:33'),
(58, 'Maîtrise fonctionnel (3 Certifications)', 26, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(59, 'Maîtrise technique ', 26, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(60, 'Maîtrise une autre technologie (Plus Odoo) ', 26, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(61, 'Gestion de projet', 26, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(62, 'Développer et mettre en œuvre des plans de travail efficace pour des projets complexes impliquant plusieurs personnes', 27, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(63, 'Démontrer une compréhension des relations entre les personnes intéressés à l’interne à afin de coordonner leur implication dans les projets de grande envergue', 27, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(64, 'Gérer habilement les questions spontanées difficiles (p. ex posées par des responsables)', 28, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(65, 'Encadrer les autres ', 28, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(66, 'Inciter à prendre part au processus d’échange des connaissances', 28, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(67, 'Supervise, oriente, conseille et encadrer les autres dans l’accomplissement efficace des activités & tâches ', 29, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(68, '- Apprécier, reconnaître et récompenser les succès d’équipe par des initiatives entreprises (Boite de proposition)', 29, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(69, 'Gérer les conflits d’équipe de manière efficace', 29, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(70, 'Tirer les conclusions ou élaborer des explications possibles aux autres', 30, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(71, 'Élaborer une solution fiable à un problème ou une situation qui compte plusieurs éléments inter-reliés', 30, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(72, 'Prévoir et cerner les nouveaux enjeux et élaborer des stratégies pour permettre à l’entreprise de gérer les nouvelles tendances', 31, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(73, 'Établir un accord avant la prise de décisions, si possible et au besoin', 31, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(74, 'Encourager les autres à promouvoir la vision et les objectifs de l’entreprise', 32, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(75, 'Entretient un environnement propice au changement, à l’innovation, à l’amélioration et à la prise de risques responsables', 32, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(76, 'Cerner les besoins et élaborer des initiatives et des plans d’action en apprentissage ', 33, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(77, 'Mettre en œuvre des stratégies pour renforcer, appuyer et maintenir une culture d’apprentissage ', 33, '2023-03-31 13:00:54', '2023-03-31 13:00:54'),
(78, 'Encourager la recherche et l’examen des données probantes pour évaluer l’incidence et l’efficacité des efforts d’apprentissage', 33, '2023-03-31 13:06:15', '2023-03-31 13:06:15');

-- --------------------------------------------------------

--
-- Structure de la table `infoficheevaluations`
--

CREATE TABLE `infoficheevaluations` (
  `id` int(11) NOT NULL,
  `objetevaluation` varchar(255) NOT NULL,
  `dateevaluation` varchar(255) NOT NULL,
  `decisiondirection` varchar(255) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infoficheevaluations`
--

INSERT INTO `infoficheevaluations` (`id`, `objetevaluation`, `dateevaluation`, `decisiondirection`, `employe_id`, `created`, `modified`) VALUES
(1, 'test', 'test', 'test', 1, '2023-03-30 22:20:26', '2023-03-30 22:20:26'),
(2, 'test', 'test', 'test', 1, '2023-04-03 10:59:45', '2023-04-03 10:59:45');

-- --------------------------------------------------------

--
-- Structure de la table `niveauvises`
--

CREATE TABLE `niveauvises` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `niveauvises`
--

INSERT INTO `niveauvises` (`id`, `label`, `categorie_id`, `created`, `modified`) VALUES
(1, 'Pré-actif ', 1, '2023-03-27 13:36:38', '2023-03-27 13:36:38'),
(2, 'Actif', 2, '2023-03-27 13:37:01', '2023-03-27 13:37:01'),
(3, 'Pro-actif', 3, '2023-03-27 13:37:01', '2023-03-27 13:37:01'),
(4, 'Expert', 4, '2023-03-27 13:37:16', '2023-03-27 13:37:16');

-- --------------------------------------------------------

--
-- Structure de la table `noteevaluations`
--

CREATE TABLE `noteevaluations` (
  `id` int(11) NOT NULL,
  `point_id` int(11) NOT NULL,
  `indicateursuivi_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `noteevaluations`
--

INSERT INTO `noteevaluations` (`id`, `point_id`, `indicateursuivi_id`, `created`, `modified`) VALUES
(1, 2, 1, '2023-03-30 13:06:42', '2023-03-30 13:06:42'),
(2, 1, 2, '2023-03-30 13:06:42', '2023-03-30 13:06:42'),
(3, 2, 3, '2023-03-30 13:07:56', '2023-03-30 13:07:56'),
(4, 1, 4, '2023-04-06 11:34:50', '2023-04-06 11:34:50'),
(5, 1, 5, '2023-04-06 11:34:50', '2023-04-06 11:34:50'),
(6, 2, 6, '2023-04-06 11:34:50', '2023-04-06 11:34:50');

-- --------------------------------------------------------

--
-- Structure de la table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `label` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `points`
--

INSERT INTO `points` (`id`, `label`, `created`, `modified`) VALUES
(1, 0, '2023-04-07 12:14:02', '2023-04-07 12:14:02'),
(2, 1, '2023-04-07 12:14:02', '2023-04-07 12:14:02');

-- --------------------------------------------------------

--
-- Structure de la table `postes`
--

CREATE TABLE `postes` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `departement_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `postes`
--

INSERT INTO `postes` (`id`, `label`, `departement_id`, `created`, `modified`) VALUES
(1, 'Développement', 1, '2023-03-27 12:30:24', '2023-03-27 12:30:24'),
(2, 'Responsable marketing ', 2, '2023-03-27 12:30:24', '2023-03-27 12:30:24'),
(3, 'Responsable ressource humaine ', 2, '2023-03-27 12:31:16', '2023-03-27 12:31:16');

-- --------------------------------------------------------

--
-- Structure de la table `profilpostes`
--

CREATE TABLE `profilpostes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poste_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profilpostes`
--

INSERT INTO `profilpostes` (`id`, `nom`, `poste_id`, `created`, `modified`) VALUES
(1, 'Profil de poste développeur ', 1, '2023-04-05 23:22:59', '2023-04-05 23:22:59'),
(2, 'Profil poste responsable marketing ', 0, '2023-04-05 23:23:33', '2023-04-05 23:23:33');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `label` text NOT NULL,
  `comptechnique_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `label`, `comptechnique_id`, `created`, `modified`) VALUES
(1, 'A.1. Quelle est l’assertion qui correspond le mieux à la définition d’une méthode?', 1, '2023-03-28 00:35:56', '2023-03-28 00:35:56'),
(2, 'A.2. Quelle assertion se rapproche le plus du concept d’héritage?', 1, '2023-03-28 00:35:56', '2023-03-28 00:35:56'),
(3, 'A.3. En Python, si une classe est dérivée de deux classes différentes, on appelle ça ?', 1, '2023-03-28 00:36:33', '2023-03-28 00:36:33'),
(4, 'A.4. Laquelle des affirmations suivantes est vraie?', 1, '2023-03-28 00:36:33', '2023-03-28 00:36:33'),
(5, 'A.5. En Python, lorsqu’une fonction est définie dans une classe, on l’appelle ?', 1, '2023-03-28 00:36:56', '2023-03-28 00:36:56'),
(6, 'B.1. Nous souhaitons inverser un entier (positif ou négatif).\nC’est-à-dire notre fonction prend en entrée un entier 6523 par exemple et retourne en sortie l’entier inversé 3256.\n', 2, '2023-03-28 00:37:26', '2023-03-28 00:37:26'),
(7, 'B.2.  Nous souhaitons retrouver dans une liste d’entiers, tous les triplets pythagoriciens possibles qui y sont. \nPour rappel, un triplet pythagoricien respecte le théorème suivant : a2 + b2 = c2.\nPrenons l’exemple suivant : nous avons la liste [0, 3, 6, ', 2, '2023-03-28 00:37:26', '2023-03-28 00:37:26'),
(8, 'B.3. Nous avons un mot et nous voulons savoir quel est le premier caractère unique de ce mot, c’est-à-dire la lettre qui ne se répète pas dans le mot et la première. Prenons un exemple simple, le mot \'coronavirus\' ; le premier caractère unique est la lettre \'c\' et se trouve à l’index 0.', 2, '2023-03-28 00:37:43', '2023-03-28 00:37:43'),
(9, 'B.4. Nous souhaitons retourner la liste des nombres premiers strictement inférieurs à un nombre donné.\r\nUn nombre premier est un entier naturel qui admet exactement deux diviseurs distincts entiers et positifs.\r\n', 2, '2023-03-28 00:37:43', '2023-03-28 00:37:43'),
(10, 'B.5. Nous souhaitons inverser une chaîne de caractères sans modifier la position des caractères spéciaux : !@#$%^&*()-_=+~ etc. \nPrenons un exemple, c’est plus simple.\nNous avons notre string suivant \"Alo*etui@l)ios82?\" et notre algorithme doit permettre d’inverser tous les caractères sans faire bouger les caractères spéciaux comme ceci : \"28s*oili@u)teolA?\".\nPrenons un exemple, c’est plus simple.\nNous avons notre string suivant \"Alo*etui@l)ios82?\" et notre algorithme doit permettre d’inverser tous les caractères sans faire bouger les caractères spéciaux comme ceci : \"28s*oili@u)teolA?\".\n', 2, '2023-03-28 00:38:56', '2023-03-28 00:38:56'),
(11, 'C.1. Nom et adresse des employés qui travaillent au département ‘R&D’.', 3, '2023-03-28 00:39:21', '2023-03-28 00:39:21'),
(12, 'C.2. Nom des employés qui travaillent plus de 10 heures sur un projet à ‘Sfax’.', 3, '2023-03-28 00:39:21', '2023-03-28 00:39:21'),
(13, 'C.3. Nom et Prénom des employés dont le supérieur est un ‘Tech Leader’.', 3, '2023-03-28 00:39:45', '2023-03-28 00:39:45'),
(14, 'C.4. Nom des employés qui ne travaillent pas sur un projet à ‘Sfax’.', 3, '2023-03-28 00:39:45', '2023-03-28 00:39:45'),
(15, 'C.5. Numéro des projets qui ont au moins un participant de chaque département.', 3, '2023-03-28 00:40:06', '2023-03-28 00:40:06');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id`, `label`, `question_id`, `created`, `modified`) VALUES
(1, ' Une méthode est une classe ne contenant aucune variable.', 1, '2023-03-28 00:42:07', '2023-03-28 00:42:07'),
(2, ' Une méthode est une suite d’invocations d’opérations sur un objet.', 1, '2023-03-28 00:42:35', '2023-03-28 00:42:35'),
(3, ' Une méthode est un traitement réalisé par un objet.', 1, '2023-03-28 00:42:35', '2023-03-28 00:42:35'),
(4, ' Une méthode est l’ensemble des données d’un objet.', 1, '2023-03-28 00:42:56', '2023-03-28 00:42:56'),
(5, ' Un synonyme du concept « instanciation ».', 2, '2023-03-28 00:42:56', '2023-03-28 00:42:56'),
(6, ' Une relation de spécialisation entre une classe et ses classes filles.', 2, '2023-03-28 00:43:24', '2023-03-28 00:43:24'),
(7, ' Un mécanisme qui permet de changer le type des objets.', 2, '2023-03-28 00:43:24', '2023-03-28 00:43:24'),
(8, ' Cela permet à un objet de connaître la valeur d’un attribut d’un autre objet.', 2, '2023-03-28 00:43:53', '2023-03-28 00:43:53'),
(9, ' Héritage multilevel', 3, '2023-03-28 00:43:53', '2023-03-28 00:43:53'),
(10, ' Héritage multiple', 3, '2023-03-28 00:44:24', '2023-03-28 00:44:24'),
(11, ' Héritage hiérarchique', 3, '2023-03-28 00:44:24', '2023-03-28 00:44:24'),
(12, ' Héritage Python', 3, '2023-03-28 00:44:49', '2023-03-28 00:44:49'),
(13, ' Un objet est construit à partir d’une classe.', 4, '2023-03-28 00:44:49', '2023-03-28 00:44:49'),
(14, ' Vous ne pouvez créer qu’un seul objet à partir d’une classe donnée.', 4, '2023-03-28 00:45:18', '2023-03-28 00:45:18'),
(15, ' Les deux (a) et (b) sont vrais.', 4, '2023-03-28 00:45:18', '2023-03-28 00:45:18'),
(16, ' Module', 5, '2023-03-28 00:45:44', '2023-03-28 00:45:44'),
(17, ' Classe', 5, '2023-03-28 00:45:44', '2023-03-28 00:45:44'),
(18, ' Méthode', 5, '2023-03-28 00:46:10', '2023-03-28 00:46:10'),
(19, ' Une autre fonction', 5, '2023-03-28 00:46:10', '2023-03-28 00:46:10');

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
-- Structure de la table `testtechniques`
--

CREATE TABLE `testtechniques` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `testtechniques`
--

INSERT INTO `testtechniques` (`id`, `label`, `categorie_id`, `created`, `modified`) VALUES
(1, 'Test technique développeur junior', 1, '2023-03-28 00:32:24', '2023-03-28 00:32:24'),
(2, 'Test technique développeur confirmé', 2, '2023-03-29 11:24:42', '2023-03-29 11:24:42'),
(3, 'Test technique développeur senior', 3, '2023-03-29 11:24:42', '2023-03-29 11:24:42'),
(4, 'Test technique développeur tecklead', 4, '2023-03-29 11:28:34', '2023-03-29 11:28:34');

-- --------------------------------------------------------

--
-- Structure de la table `themeformations`
--

CREATE TABLE `themeformations` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `themeformations`
--

INSERT INTO `themeformations` (`id`, `label`, `created`, `modified`) VALUES
(1, 'SQL', '2023-03-27 10:43:26', '2023-03-27 10:43:26'),
(2, 'PYTHON', '2023-03-27 10:43:26', '2023-03-27 10:43:26'),
(3, 'JAVA', '2023-03-27 10:44:32', '2023-03-27 10:44:32'),
(4, 'ANGULAR', '2023-03-27 10:44:32', '2023-03-27 10:44:32');

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
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comptechniques`
--
ALTER TABLE `comptechniques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `coutformaexternes`
--
ALTER TABLE `coutformaexternes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `detailprofilpostes`
--
ALTER TABLE `detailprofilpostes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
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
-- Index pour la table `formcompetences`
--
ALTER TABLE `formcompetences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `indicateursuivis`
--
ALTER TABLE `indicateursuivis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infoficheevaluations`
--
ALTER TABLE `infoficheevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveauvises`
--
ALTER TABLE `niveauvises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `noteevaluations`
--
ALTER TABLE `noteevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `postes`
--
ALTER TABLE `postes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profilpostes`
--
ALTER TABLE `profilpostes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `testtechniques`
--
ALTER TABLE `testtechniques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `themeformations`
--
ALTER TABLE `themeformations`
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
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `comptechniques`
--
ALTER TABLE `comptechniques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `coutformaexternes`
--
ALTER TABLE `coutformaexternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `detailprofilpostes`
--
ALTER TABLE `detailprofilpostes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `formaexternes`
--
ALTER TABLE `formaexternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `formainternes`
--
ALTER TABLE `formainternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formcompetences`
--
ALTER TABLE `formcompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `indicateursuivis`
--
ALTER TABLE `indicateursuivis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT pour la table `infoficheevaluations`
--
ALTER TABLE `infoficheevaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `niveauvises`
--
ALTER TABLE `niveauvises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `noteevaluations`
--
ALTER TABLE `noteevaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `postes`
--
ALTER TABLE `postes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `profilpostes`
--
ALTER TABLE `profilpostes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `testtechniques`
--
ALTER TABLE `testtechniques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `themeformations`
--
ALTER TABLE `themeformations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
