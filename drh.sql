-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 mai 2023 à 19:30
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
(1, 'Recherche & Développement', '2023-03-27 12:28:46', '2023-03-27 12:28:46');

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
(1, 'Ingénieur Recherche & Développement', 1, 1, 'Gérant', 'Développeur confirmé', 'Développeur confirmé', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jaweher KHMIRI', 'Hayet  BEN SALEM', 'Rochdi ABID', '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(2, 'Ingénieur Recherche & Développement', 2, 2, 'Gérant', 'Développeur Senior', 'Développeur Senior', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(3, 'Ingénieur Recherche & Développement', 3, 3, 'Gérant', 'Référant technique', 'Référant technique', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(4, 'Ingénieur Recherche & Développemen', 4, 4, 'Gérant', 'Référant technique', 'Référant technique', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', '2023-05-11 11:02:29', '2023-05-11 11:02:29');

-- --------------------------------------------------------

--
-- Structure de la table `echelleevaluations`
--

CREATE TABLE `echelleevaluations` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `abreviation` varchar(255) NOT NULL,
  `valeur` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `echelleevaluations`
--

INSERT INTO `echelleevaluations` (`id`, `label`, `abreviation`, `valeur`, `created`, `modified`) VALUES
(1, 'Non évalué', 'Ne', 0, '2023-04-08 17:32:46', '2023-04-08 17:32:46'),
(2, 'Non acquis', 'D', 10, '2023-04-08 17:32:46', '2023-04-08 17:32:46'),
(3, 'En cours d’acquisition', 'C', 25, '2023-04-08 17:32:46', '2023-04-08 17:32:46'),
(4, 'Presque acquis', 'B', 50, '2023-04-08 17:32:46', '2023-04-08 17:32:46'),
(5, 'Acquis ', 'A', 75, '2023-04-08 17:32:46', '2023-04-08 17:32:46'),
(6, 'Bien acquis', 'A+', 100, '2023-04-08 17:32:46', '2023-04-08 17:32:46');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `objetevaluation` varchar(255) NOT NULL,
  `dateevaluation` datetime DEFAULT NULL,
  `decisiondirection` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `infoemploye_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `objetevaluation`, `dateevaluation`, `decisiondirection`, `categorie_id`, `infoemploye_id`, `created`, `modified`) VALUES
(1, 'Test', '2023-05-07 00:00:00', 'Test', 1, 1, '2023-05-16 21:02:52', '2023-05-16 21:02:52'),
(2, 'Test', '2023-05-27 00:00:00', 'Test', 2, 2, '2023-05-16 21:27:40', '2023-05-16 21:27:40'),
(3, 'Test', '2023-05-13 00:00:00', 'Test', 3, 3, '2023-05-16 21:51:41', '2023-05-16 21:51:41'),
(4, 'Test', '2023-06-02 00:00:00', 'Test', 4, 4, '2023-05-16 22:02:18', '2023-05-16 22:02:18');

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
(6, 'Compétence technique', 1, 'Développeurs', 21, 'Encadrement', 'Centre de formation', 'Test', 'Amine louz', 'coach', '32', 5, 5, '2023-03-23 00:00:00', '14:55', 'dq', 'dQ<', '2023-03-22 09:55:39', '2023-03-22 09:55:39'),
(7, 'Compétence technique ', 2, 'Développeurs', 44, 'test', 'test', 'test', 'test', 'test', '21', 4, 3, '2023-03-24 00:00:00', '10:15', 'test', 'test', '2023-03-23 09:14:57', '2023-03-23 09:14:57');

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
(1, 'Compétence organisationnelle', 1, 'Ali harbi', 'Développeur', '2023-03-22', '00:00:15', '00:00:17', '2023-03-27 16:57:51', '2023-03-27 16:57:51'),
(2, 'Compétence technique', 2, 'Hama harbi', 'Développeur', '2023-03-22', '00:00:15', '00:00:17', '2023-03-27 17:00:13', '2023-03-27 17:00:13');

-- --------------------------------------------------------

--
-- Structure de la table `formcompetences`
--

CREATE TABLE `formcompetences` (
  `id` int(11) NOT NULL,
  `competence_id` int(11) NOT NULL,
  `detailprofilposte_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `formcompetences`
--

INSERT INTO `formcompetences` (`id`, `competence_id`, `detailprofilposte_id`, `created`, `modified`) VALUES
(1, 1, 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(2, 2, 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(3, 3, 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(4, 1, 2, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(5, 2, 2, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(6, 3, 2, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(7, 1, 3, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(8, 2, 3, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(9, 3, 3, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(10, 1, 4, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(11, 2, 4, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(12, 3, 4, '2023-05-11 11:02:29', '2023-05-11 11:02:29');

-- --------------------------------------------------------

--
-- Structure de la table `indicasoucompas`
--

CREATE TABLE `indicasoucompas` (
  `id` int(11) NOT NULL,
  `label` varchar(400) DEFAULT '',
  `souscompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `indicasoucompas`
--

INSERT INTO `indicasoucompas` (`id`, `label`, `souscompetence_id`, `created`, `modified`) VALUES
(1, '', 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(2, 'Planifier & compléter les tâches/projets à temps efficacement', 2, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(3, 'Informer de la progression des tâches ou du projet ', 2, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(4, 'Déclarer en cas de difficulté technique : c’est à dire après dépasser 50 % du temps prévu de réalisation d’une tâche au maximum à l’essai de résolution d’une difficulté technique ', 2, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(5, '', 3, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(6, '', 4, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(7, '', 5, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(8, 'Écouter activement afin de bien comprendre le message', 6, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(9, 'Essayer de partager l’information liée à l’exécution de travail et la communiquer clairement (quelque soit de la part développeur junior et de son vis-à-vis)', 6, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(10, 'Répondre de manière appropriée en donnant l’information et les faits de façon logique, claire et cohérente', 6, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(11, 'Transmet et reçoit le besoin facile à comprendre : c’est à dire transmet, reçoit et vérifie la bonne compréhension de la part de l’émetteur et récepteur', 6, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(12, 'Tenir compte de l’objectif de toute l’équipe  ', 7, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(13, 'Réussite collective ou échec collective ! : c’est toute l’équipe est responsable soit en cas de la réussite ou en cas d’échec', 7, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(14, 'Répartition des tâches d’une manière équitable', 7, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(15, 'Appuyer les décisions ou les activités de l’équipe et aider à réaliser l’objectif principal', 7, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(16, 'Poser les questions adéquates et distinguer entre les renseignements pertinents et ceux qui ne le sont pas', 8, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(17, 'Identifier la cause principale du problème affronté', 8, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(18, 'Fournir une réponse claire & logique aux questions ou préoccupations', 9, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(19, 'Fournir un service, y compris des renseignements utiles ou une aide, conforme aux normes de service et aux lignes directrices pertinentes', 9, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(20, '', 10, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(21, 'Déterminer l’importance des tâches/activités, et passer rapidement et efficacement d’une tâche à l’autre', 11, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(22, 'Veiller à accomplir le travail en utilisant des solutions efficaces', 11, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(23, '', 12, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(24, 'Valider la compréhension du message par l’autre partie ', 13, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(25, 'Reconnaître les signes non verbaux et les utilise pour identifier les pensées ou les préoccupations non exprimées afin de répondre de façon appropriée', 13, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(26, 'Utiliser des techniques de communication appropriées (poser des questions clairement, l’écoute, la ré formulation du message...) afin de clarifier son message et d’en faciliter la compréhension', 13, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(27, 'Prendre l’initiative ', 14, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(28, 'Faire part des connaissances,  expérience ou expertise pertinente et utile en vue d’aider les membres du groupe à réaliser leurs objectifs de façon plus efficace ou efficiente', 14, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(29, 'S’efforcer de faire quelque chose de plus pour aider les membres du groupe (Exp : Assister les membres du groupe à acquérir les habiletés nécessaires afin d’atteindre les objectifs de travail)', 14, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(30, 'Recueillir des faits et des renseignements additionnels pour acquérir une meilleure compréhension de la situation', 15, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(31, 'Reconnaître les situations où les procédures habituelles peuvent ne pas s’appliquer et où une solution différente est requise', 15, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(32, 'S’assurer que le besoin est traité; cela peut nécessiter l’intervention d’un tiers', 16, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(33, 'Assurer un suivi auprès du client lorsque nécessaire ou prend d’autres mesures', 16, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(34, 'Prendre l’initiative et gérer les difficultés ', 17, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(35, 'Appliquer des règles simples, jugement et expériences passées pour cerner les problèmes', 17, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(36, 'Remarquer qu\'une situation présente est similaire à une situation passée ou est différente d\'une situation passée et déterminer les similitudes et (ou) les différences', 17, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(37, 'Identifier l’information pertinente ainsi que les tendances, les constantes ou les éléments manquants', 17, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(38, '', 18, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(39, 'Avoir une visibilité sur le planning de l’équipe de développement', 19, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(40, 'Organiser les horaires, le travail et le milieu pour maximiser l’efficacité', 19, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(41, 'Anticiper et se préparer à gérer les problèmes  efficacement', 19, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(42, 'Avoir un équilibre psychique et une bonne gestion de stress', 20, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(43, 'Personnaliser son langage et son style de communication en fonction de la situation et de l’interlocuteur ou de l’auditoire, tout en livrant le même message', 20, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(44, 'Adapter la façon de transmettre le message lorsque des difficultés de compréhension surviennent', 20, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(45, 'Tirer profit des forces, des habiletés et des capacités des membres de l’équipe en vue d’atteindre l’objectif commun', 21, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(46, 'Encourager les membres de l’équipe à exprimer leurs points de vue ainsi que leurs opinions tout en tentant d’obtenir le consensus', 21, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(47, 'Traiter un problème ou une situation qui laisse place à l’interprétation.', 22, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(48, 'Évaluer les risques et les avantages d’autres solutions', 22, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(49, 'Déterminer le besoin sous-jacent du client et fournit une aide ou des renseignements supplémentaires au-delà de l’attente du client ou de la norme de service applicable', 23, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(50, 'Fait appel à son expérience et à ses connaissances pour fournir un service additionnel à valeur ajoutée pour le client, ou pour améliorer d’une certaine manière sa situation', 23, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(51, 'Utiliser ses connaissances ou situations passées pour examiner les situations présentes', 24, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(52, 'Appliquer et modifier des méthodes de manière appropriée à la situation  ', 24, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(53, 'Veiller aux besoins de l’équipe pour lui permettre de donner son plein potentiel et d’atteindre les objectifs (Remarque : la satisfaction des besoins est une source de motivation)', 25, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(54, 'Favoriser la collaboration, le travail en équipe et la confiance entre les membres de l’équipe', 25, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(55, 'Reconnaître et optimiser les forces et la diversité des membres de l’équipe', 25, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(56, 'Développer une équipe talentueux en reconnaissant le potentiel d’accomplissement des membres de l’équipe et en fournissant des occasions d’apprentissage continu', 25, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(57, '', 26, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(58, 'Développer et mettre en œuvre des plans de travail efficace pour des projets complexes impliquant plusieurs personnes', 27, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(59, 'Démontrer une compréhension des relations entre les personnes intéressés à l’interne à afin de coordonner leur implication dans les projets de grande envergue', 27, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(60, 'Gérer habilement les questions spontanées difficiles (p. ex posées par des responsables)', 28, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(61, 'Encadrer les autres ', 28, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(62, 'Inciter à prendre part au processus d’échange des connaissances', 28, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(63, 'Supervise, oriente, conseille et encadrer les autres dans l’accomplissement efficace des activités & tâches ', 29, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(64, 'Apprécier, reconnaître et récompenser les succès d’équipe par des initiatives entreprises (Boite de proposition)', 29, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(65, 'Gérer les conflits d’équipe de manière efficace', 29, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(66, 'Tirer les conclusions ou élaborer des explications possibles aux autres', 30, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(67, 'Élaborer une solution fiable à un problème ou une situation qui compte plusieurs éléments inter-reliés', 30, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(68, 'Prévoir et cerner les nouveaux enjeux et élaborer des stratégies pour permettre à l’entreprise de gérer les nouvelles tendances', 31, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(69, 'Établir un accord avant la prise de décisions, si possible et au besoin', 31, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(70, 'Encourager les autres à promouvoir la vision et les objectifs de l’entreprise', 32, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(71, 'Entretient un environnement propice au changement, à l’innovation, à l’amélioration et à la prise de risques responsables', 32, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(72, 'Cerner les besoins et élaborer des initiatives et des plans d’action en apprentissage', 33, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(73, 'Mettre en œuvre des stratégies pour renforcer, appuyer et maintenir une culture d’apprentissage ', 33, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(74, 'Encourager la recherche et l’examen des données probantes pour évaluer l’incidence et l’efficacité des efforts d’apprentissage', 33, '2023-05-11 11:02:29', '2023-05-11 11:02:29');

-- --------------------------------------------------------

--
-- Structure de la table `indicateursuivis`
--

CREATE TABLE `indicateursuivis` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `formcompetence_id` int(11) NOT NULL,
  `niveauvise_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `indicateursuivis`
--

INSERT INTO `indicateursuivis` (`id`, `label`, `formcompetence_id`, `niveauvise_id`, `created`, `modified`) VALUES
(1, 'Compétence algorithmique niveau élevé  ', 1, 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(2, 'Connaissance de l’architecture de développement Orientée Objet ', 1, 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(3, 'Une bonne maîtrise du SQL   ', 1, 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(4, '', 2, 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(5, '', 3, 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(6, 'Maîtrise fonctionnel (Certification dans l’une des trois dernières versions)', 4, 2, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(7, 'Compétence technique (produit odoo)', 4, 2, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(8, '', 5, 2, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(9, '', 6, 2, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(10, 'Maîtrise fonctionnel (2 Certifications parmi les 3 derniers versions)', 7, 3, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(11, 'Maîtrise technique ', 7, 3, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(12, 'Maîtrise une autre technologie (Plus qu’Odoo) ', 7, 3, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(13, '', 8, 3, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(14, '', 9, 3, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(15, 'Maîtrise fonctionnel (3 Certifications)', 10, 4, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(16, 'Maîtrise technique ', 10, 4, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(17, 'Maîtrise une autre technologie (Plus Odoo) ', 10, 4, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(18, 'Gestion de projet', 10, 4, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(19, '', 11, 4, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(20, '', 12, 4, '2023-05-11 11:02:29', '2023-05-11 11:02:29');

-- --------------------------------------------------------

--
-- Structure de la table `infoemployes`
--

CREATE TABLE `infoemployes` (
  `id` int(11) NOT NULL,
  `nomprenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telprof` int(11) NOT NULL,
  `telpersonnel` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `mailprof` varchar(255) NOT NULL,
  `mailpersonnel` varchar(255) NOT NULL,
  `servicetravail` varchar(255) NOT NULL,
  `poste_id` int(11) NOT NULL,
  `datenaissance` datetime NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `nationnalite` varchar(255) NOT NULL,
  `cin` int(11) NOT NULL,
  `delivreea` varchar(255) NOT NULL,
  `datedelivrance` datetime NOT NULL,
  `permis` varchar(255) NOT NULL,
  `datepermis` datetime NOT NULL,
  `logement` varchar(255) NOT NULL,
  `moytransport` varchar(255) NOT NULL,
  `estimatransport` time NOT NULL,
  `etatsociale` varchar(255) NOT NULL,
  `dateetatsociale` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `infoemployes`
--

INSERT INTO `infoemployes` (`id`, `nomprenom`, `adresse`, `telprof`, `telpersonnel`, `contact`, `mailprof`, `mailpersonnel`, `servicetravail`, `poste_id`, `datenaissance`, `lieu`, `nationnalite`, `cin`, `delivreea`, `datedelivrance`, `permis`, `datepermis`, `logement`, `moytransport`, `estimatransport`, `etatsociale`, `dateetatsociale`, `created`, `modified`) VALUES
(1, 'ALA MESFAR', 'Rue beb saadoun', 21456322, 25897654, 26548578, 'aliharbi@gmail.com', 'aliharbi@gmail.com', 'service dev', 1, '2023-05-07 00:00:00', 'tunis', 'tunisien', 12032123, 'tunis', '2023-05-02 00:00:00', 'Oui', '2023-05-09 00:00:00', 'Propre', 'moto', '22:28:00', 'Marié(e)', '15 ans ', '2023-05-16 20:54:52', '2023-05-16 20:54:52'),
(2, 'NOUR DAMMAK', 'Rue halfawin', 21456321, 23152423, 26542321, 'hamaharbi@gmail.com', 'hamaharbi@gmail.com', 'service dev', 1, '2023-05-06 00:00:00', 'tunis', 'tunisien', 12045215, 'tunis', '2023-05-03 00:00:00', 'Oui', '2023-05-17 00:00:00', 'Loyer', 'moto', '23:31:00', 'Marié(e)', '2 ans ', '2023-05-16 21:27:18', '2023-05-16 21:27:18'),
(3, 'SKANDER ELLOUCHE', 'Rue beb jdid', 25365214, 25412365, 28975645, 'aminebannour@gmail.com', 'aminebannour@gmail.com', 'service dev', 1, '2023-05-06 00:00:00', 'tunis', 'tunisien', 14029111, 'tunis', '2023-05-19 00:00:00', 'Non', '0000-00-00 00:00:00', 'Loyer', 'moto', '23:51:00', 'Célibataire', '', '2023-05-16 21:51:13', '2023-05-16 21:51:13'),
(4, 'AHMED TRABELSI', 'Rue rades ', 26543215, 23524561, 26542325, 'bilelifa@gamil.com', 'bilelifa@gamil.com', 'service dev', 1, '2023-05-27 00:00:00', 'tunis', 'tunisien', 12035465, 'tunis', '2023-05-31 00:00:00', 'Non', '0000-00-00 00:00:00', 'Loyer', 'moto', '00:03:00', 'Marié(e)', '9 ans ', '2023-05-16 22:01:49', '2023-05-16 22:01:49');

-- --------------------------------------------------------

--
-- Structure de la table `matricecompetences`
--

CREATE TABLE `matricecompetences` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `abreviation` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `matricecompetences`
--

INSERT INTO `matricecompetences` (`id`, `label`, `abreviation`, `created`, `modified`) VALUES
(1, 'Gestion de temps & priorités\r\n', 'GTP', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(2, 'Communication interactive efficace\r\n', 'CIE', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(3, 'Travail en équipe & collaboration\r\n', 'TEC', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(4, 'Résolution de problème\r\n', 'RP', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(5, 'Service d’excellence\r\n', 'SE', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(6, 'Raisonnement conceptuel\r\n', 'RC', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(7, 'Leadership\r\n', 'LP', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(8, 'Capacité en coaching \r\n', 'CC', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(9, 'Impact & influence\r\n', 'IM', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(10, 'Adaptabilité & flexibilité\r\n', 'AF', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(11, 'Créativité & innovation\r\n', 'CI', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(12, 'Compétence algorithmique\r\n', 'CA', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(13, 'Une bonne maîtrise du SQL\r\n', 'SQL', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(14, 'Esprit d’analyse\r\n', 'EA', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(15, 'Esprit de synthèse\r\n', 'ES', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(16, 'Esprit logique \r\n', 'EL', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(17, 'Gérer les réseaux sociaux\r\n', 'GRS', '2023-05-16 22:49:42', '2023-05-16 22:49:42'),
(18, 'Création des sites web \r\n', 'CSW', '2023-05-16 22:49:42', '2023-05-16 22:49:42');

-- --------------------------------------------------------

--
-- Structure de la table `matrices`
--

CREATE TABLE `matrices` (
  `id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `matricecompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `matrices`
--

INSERT INTO `matrices` (`id`, `note`, `employe_id`, `matricecompetence_id`, `created`, `modified`) VALUES
(1, 'A+', 1, 1, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(2, 'B', 1, 2, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(3, 'Ne', 1, 3, '2023-05-16 21:02:52', '2023-05-16 21:02:52'),
(4, 'D', 1, 4, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(5, 'D', 1, 5, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(6, 'B', 1, 6, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(7, 'C', 1, 7, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(8, 'A', 1, 8, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(9, 'Ne', 1, 9, '2023-05-16 21:02:52', '2023-05-16 21:02:52'),
(10, 'A', 1, 10, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(11, 'A', 1, 11, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(12, 'A+', 1, 12, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(13, 'A+', 1, 13, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(14, 'B', 1, 14, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(15, 'B', 1, 15, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(16, 'C', 1, 16, '2023-05-16 21:02:52', '2023-05-16 21:06:14'),
(17, 'Ne', 1, 17, '2023-05-16 21:02:52', '2023-05-16 21:02:52'),
(18, 'B', 1, 18, '2023-05-16 21:02:52', '2023-05-23 16:06:42'),
(19, 'B', 2, 1, '2023-05-16 21:27:40', '2023-05-16 21:29:06'),
(20, 'A', 2, 2, '2023-05-16 21:27:40', '2023-05-16 21:29:06'),
(21, 'A', 2, 3, '2023-05-16 21:27:40', '2023-05-16 21:29:06'),
(22, 'A+', 2, 4, '2023-05-16 21:27:40', '2023-05-16 21:29:06'),
(23, 'Ne', 2, 5, '2023-05-16 21:27:40', '2023-05-16 21:27:40'),
(24, 'B', 2, 6, '2023-05-16 21:27:40', '2023-05-16 21:29:06'),
(25, 'B', 2, 7, '2023-05-16 21:27:40', '2023-05-16 21:29:06'),
(26, 'A', 2, 8, '2023-05-16 21:27:40', '2023-05-16 21:29:06'),
(27, 'A+', 2, 9, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(28, 'A+', 2, 10, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(29, 'A', 2, 11, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(30, 'B', 2, 12, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(31, 'B', 2, 13, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(32, 'B', 2, 14, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(33, 'B', 2, 15, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(34, 'A', 2, 16, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(35, 'A', 2, 17, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(36, 'A+', 2, 18, '2023-05-16 21:27:40', '2023-05-16 21:29:07'),
(37, 'B', 3, 1, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(38, 'A', 3, 2, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(39, 'A', 3, 3, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(40, 'A+', 3, 4, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(41, 'A+', 3, 5, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(42, 'A+', 3, 6, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(43, 'Ne', 3, 7, '2023-05-16 21:51:41', '2023-05-16 21:51:41'),
(44, 'A', 3, 8, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(45, 'A', 3, 9, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(46, 'B', 3, 10, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(47, 'B', 3, 11, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(48, 'A+', 3, 12, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(49, 'A+', 3, 13, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(50, 'A+', 3, 14, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(51, 'A', 3, 15, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(52, 'A', 3, 16, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(53, 'B', 3, 17, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(54, 'B', 3, 18, '2023-05-16 21:51:41', '2023-05-16 21:53:24'),
(55, 'B', 4, 1, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(56, 'C', 4, 2, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(57, 'Ne', 4, 3, '2023-05-16 22:02:18', '2023-05-16 22:02:18'),
(58, 'Ne', 4, 4, '2023-05-16 22:02:18', '2023-05-16 22:02:18'),
(59, 'C', 4, 5, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(60, 'D', 4, 6, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(61, 'D', 4, 7, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(62, 'Ne', 4, 8, '2023-05-16 22:02:18', '2023-05-16 22:02:18'),
(63, 'B', 4, 9, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(64, 'Ne', 4, 10, '2023-05-16 22:02:18', '2023-05-16 22:02:18'),
(65, 'B', 4, 11, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(66, 'Ne', 4, 12, '2023-05-16 22:02:18', '2023-05-16 22:02:18'),
(67, 'C', 4, 13, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(68, 'A+', 4, 14, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(69, 'A+', 4, 15, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(70, 'A+', 4, 16, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(71, 'B', 4, 17, '2023-05-16 22:02:18', '2023-05-16 22:03:55'),
(72, 'B', 4, 18, '2023-05-16 22:02:18', '2023-05-16 22:03:55');

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
-- Structure de la table `pointindicasous`
--

CREATE TABLE `pointindicasous` (
  `id` int(11) NOT NULL,
  `label` int(11) NOT NULL,
  `indicasoucompa_id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pointindicasous`
--

INSERT INTO `pointindicasous` (`id`, `label`, `indicasoucompa_id`, `employe_id`, `created`, `modified`) VALUES
(1, 0, 2, 1, '2023-05-16 21:02:57', '2023-05-16 21:02:57'),
(2, 0, 3, 1, '2023-05-16 21:02:57', '2023-05-16 21:02:57'),
(3, 0, 4, 1, '2023-05-16 21:02:57', '2023-05-16 21:02:57'),
(4, 1, 8, 1, '2023-05-16 21:03:07', '2023-05-16 21:03:07'),
(5, 1, 9, 1, '2023-05-16 21:03:07', '2023-05-16 21:03:07'),
(6, 1, 10, 1, '2023-05-16 21:03:07', '2023-05-16 21:03:07'),
(7, 1, 11, 1, '2023-05-16 21:03:07', '2023-05-16 21:03:07'),
(8, 0, 12, 1, '2023-05-16 21:03:17', '2023-05-16 21:03:17'),
(9, 0, 13, 1, '2023-05-16 21:03:17', '2023-05-16 21:03:17'),
(10, 0, 14, 1, '2023-05-16 21:03:17', '2023-05-16 21:03:17'),
(11, 0, 15, 1, '2023-05-16 21:03:17', '2023-05-16 21:03:17'),
(12, 1, 16, 1, '2023-05-16 21:03:20', '2023-05-16 21:03:20'),
(13, 1, 17, 1, '2023-05-16 21:03:20', '2023-05-16 21:03:20'),
(14, 0, 18, 1, '2023-05-16 21:03:25', '2023-05-16 21:03:25'),
(15, 0, 19, 1, '2023-05-16 21:03:25', '2023-05-16 21:03:25'),
(16, 0, 21, 2, '2023-05-16 21:27:44', '2023-05-16 21:27:44'),
(17, 0, 22, 2, '2023-05-16 21:27:44', '2023-05-16 21:27:44'),
(18, 1, 24, 2, '2023-05-16 21:27:50', '2023-05-16 21:27:50'),
(19, 1, 25, 2, '2023-05-16 21:27:50', '2023-05-16 21:27:50'),
(20, 1, 26, 2, '2023-05-16 21:27:50', '2023-05-16 21:27:50'),
(21, 0, 27, 2, '2023-05-16 21:27:55', '2023-05-16 21:27:55'),
(22, 0, 28, 2, '2023-05-16 21:27:55', '2023-05-16 21:27:55'),
(23, 0, 29, 2, '2023-05-16 21:27:55', '2023-05-16 21:27:55'),
(24, 1, 30, 2, '2023-05-16 21:28:00', '2023-05-16 21:28:00'),
(25, 1, 31, 2, '2023-05-16 21:28:00', '2023-05-16 21:28:00'),
(26, 0, 32, 2, '2023-05-16 21:28:04', '2023-05-16 21:28:04'),
(27, 0, 33, 2, '2023-05-16 21:28:04', '2023-05-16 21:28:04'),
(28, 1, 34, 2, '2023-05-16 21:28:11', '2023-05-16 21:28:11'),
(29, 1, 35, 2, '2023-05-16 21:28:11', '2023-05-16 21:28:11'),
(30, 1, 36, 2, '2023-05-16 21:28:11', '2023-05-16 21:28:11'),
(31, 1, 37, 2, '2023-05-16 21:28:11', '2023-05-16 21:28:11'),
(32, 0, 39, 3, '2023-05-16 21:51:47', '2023-05-16 21:51:47'),
(33, 0, 40, 3, '2023-05-16 21:51:47', '2023-05-16 21:51:47'),
(34, 0, 41, 3, '2023-05-16 21:51:47', '2023-05-16 21:51:47'),
(35, 1, 42, 3, '2023-05-16 21:51:53', '2023-05-16 21:51:53'),
(36, 1, 43, 3, '2023-05-16 21:51:53', '2023-05-16 21:51:53'),
(37, 1, 44, 3, '2023-05-16 21:51:53', '2023-05-16 21:51:53'),
(38, 0, 45, 3, '2023-05-16 21:51:58', '2023-05-16 21:51:58'),
(39, 0, 46, 3, '2023-05-16 21:51:58', '2023-05-16 21:51:58'),
(40, 1, 47, 3, '2023-05-16 21:52:03', '2023-05-16 21:52:03'),
(41, 1, 48, 3, '2023-05-16 21:52:03', '2023-05-16 21:52:03'),
(42, 0, 49, 3, '2023-05-16 21:52:09', '2023-05-16 21:52:09'),
(43, 0, 50, 3, '2023-05-16 21:52:09', '2023-05-16 21:52:09'),
(44, 1, 51, 3, '2023-05-16 21:52:13', '2023-05-16 21:52:13'),
(45, 1, 52, 3, '2023-05-16 21:52:13', '2023-05-16 21:52:13'),
(46, 0, 53, 3, '2023-05-16 21:52:21', '2023-05-16 21:52:21'),
(47, 0, 54, 3, '2023-05-16 21:52:21', '2023-05-16 21:52:21'),
(48, 0, 55, 3, '2023-05-16 21:52:21', '2023-05-16 21:52:21'),
(49, 0, 56, 3, '2023-05-16 21:52:21', '2023-05-16 21:52:21'),
(50, 0, 58, 4, '2023-05-16 22:02:22', '2023-05-16 22:02:22'),
(51, 0, 59, 4, '2023-05-16 22:02:22', '2023-05-16 22:02:22'),
(52, 1, 60, 4, '2023-05-16 22:02:29', '2023-05-16 22:02:29'),
(53, 1, 61, 4, '2023-05-16 22:02:29', '2023-05-16 22:02:29'),
(54, 1, 62, 4, '2023-05-16 22:02:29', '2023-05-16 22:02:29'),
(55, 0, 63, 4, '2023-05-16 22:02:34', '2023-05-16 22:02:34'),
(56, 0, 64, 4, '2023-05-16 22:02:34', '2023-05-16 22:02:34'),
(57, 0, 65, 4, '2023-05-16 22:02:34', '2023-05-16 22:02:34'),
(58, 1, 66, 4, '2023-05-16 22:02:38', '2023-05-16 22:02:38'),
(59, 1, 67, 4, '2023-05-16 22:02:38', '2023-05-16 22:02:38'),
(60, 0, 68, 4, '2023-05-16 22:02:42', '2023-05-16 22:02:42'),
(61, 0, 69, 4, '2023-05-16 22:02:42', '2023-05-16 22:02:42'),
(62, 1, 70, 4, '2023-05-16 22:02:46', '2023-05-16 22:02:46'),
(63, 1, 71, 4, '2023-05-16 22:02:46', '2023-05-16 22:02:46'),
(64, 0, 72, 4, '2023-05-16 22:02:51', '2023-05-16 22:02:51'),
(65, 0, 73, 4, '2023-05-16 22:02:51', '2023-05-16 22:02:51'),
(66, 0, 74, 4, '2023-05-16 22:02:51', '2023-05-16 22:02:51');

-- --------------------------------------------------------

--
-- Structure de la table `pointindicateurs`
--

CREATE TABLE `pointindicateurs` (
  `id` int(11) NOT NULL,
  `label` int(11) NOT NULL,
  `indicateursuivi_id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pointindicateurs`
--

INSERT INTO `pointindicateurs` (`id`, `label`, `indicateursuivi_id`, `employe_id`, `created`, `modified`) VALUES
(1, 1, 1, 1, '2023-05-16 21:02:52', '2023-05-16 21:02:52'),
(2, 1, 2, 1, '2023-05-16 21:02:52', '2023-05-16 21:02:52'),
(3, 1, 3, 1, '2023-05-16 21:02:52', '2023-05-16 21:02:52'),
(4, 1, 6, 2, '2023-05-16 21:27:40', '2023-05-16 21:27:40'),
(5, 1, 7, 2, '2023-05-16 21:27:40', '2023-05-16 21:27:40'),
(6, 1, 10, 3, '2023-05-16 21:51:41', '2023-05-16 21:51:41'),
(7, 1, 11, 3, '2023-05-16 21:51:41', '2023-05-16 21:51:41'),
(8, 1, 12, 3, '2023-05-16 21:51:41', '2023-05-16 21:51:41'),
(9, 1, 15, 4, '2023-05-16 22:02:18', '2023-05-16 22:02:18'),
(10, 1, 16, 4, '2023-05-16 22:02:18', '2023-05-16 22:02:18'),
(11, 1, 17, 4, '2023-05-16 22:02:18', '2023-05-16 22:02:18'),
(12, 1, 18, 4, '2023-05-16 22:02:18', '2023-05-16 22:02:18');

-- --------------------------------------------------------

--
-- Structure de la table `polycompetences`
--

CREATE TABLE `polycompetences` (
  `id` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `employe_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `polycompetences`
--

INSERT INTO `polycompetences` (`id`, `valeur`, `employe_id`, `created`, `modified`) VALUES
(1, 46.9444, 1, '2023-05-16 21:05:02', '2023-05-23 16:07:56'),
(2, 66.6667, 2, '2023-05-16 21:29:10', '2023-05-23 16:07:58'),
(3, 72.2222, 3, '2023-05-16 21:53:27', '2023-05-16 21:53:27'),
(4, 35.8333, 4, '2023-05-16 22:03:58', '2023-05-16 22:03:58');

-- --------------------------------------------------------

--
-- Structure de la table `polyvalences`
--

CREATE TABLE `polyvalences` (
  `id` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `matricecompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `polyvalences`
--

INSERT INTO `polyvalences` (`id`, `valeur`, `matricecompetence_id`, `created`, `modified`) VALUES
(1, 62.5, 1, '2023-05-16 21:05:03', '2023-05-16 22:03:59'),
(2, 56.25, 2, '2023-05-16 21:05:04', '2023-05-16 22:04:00'),
(3, 37.5, 3, '2023-05-16 21:05:05', '2023-05-16 22:04:01'),
(4, 52.5, 4, '2023-05-16 21:05:05', '2023-05-16 22:04:02'),
(5, 33.75, 5, '2023-05-16 21:05:07', '2023-05-16 22:04:03'),
(6, 52.5, 6, '2023-05-16 21:05:08', '2023-05-16 22:04:04'),
(7, 21.25, 7, '2023-05-16 21:05:09', '2023-05-16 22:04:07'),
(8, 56.25, 8, '2023-05-16 21:05:12', '2023-05-16 22:04:08'),
(9, 56.25, 9, '2023-05-16 21:05:12', '2023-05-16 22:04:09'),
(10, 56.25, 10, '2023-05-16 21:05:13', '2023-05-16 22:04:10'),
(11, 62.5, 11, '2023-05-16 21:05:14', '2023-05-16 22:04:11'),
(12, 62.5, 12, '2023-05-16 21:05:16', '2023-05-16 22:04:12'),
(13, 68.75, 13, '2023-05-16 21:05:17', '2023-05-16 22:04:13'),
(14, 75, 14, '2023-05-16 21:05:17', '2023-05-16 22:04:15'),
(15, 68.75, 15, '2023-05-16 21:05:19', '2023-05-16 22:04:15'),
(16, 68.75, 16, '2023-05-16 21:05:20', '2023-05-16 22:04:17'),
(17, 43.75, 17, '2023-05-16 21:05:20', '2023-05-16 22:04:17'),
(18, 62.5, 18, '2023-05-16 21:05:22', '2023-05-23 16:06:58');

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
(2, 'Responsable marketing ', 0, '2023-03-27 12:30:24', '2023-03-27 12:30:24'),
(3, 'Responsable ressource humaine ', 0, '2023-03-27 12:31:16', '2023-03-27 12:31:16');

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
(1, 'Développeur', 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(2, 'Développeur', 0, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(3, 'Développeur', 0, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(4, 'Développeur', 0, '2023-05-11 11:02:29', '2023-05-11 11:02:29');

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
-- Structure de la table `scorecompetences`
--

CREATE TABLE `scorecompetences` (
  `id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `competence_id` int(11) NOT NULL,
  `score` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `scorecompetences`
--

INSERT INTO `scorecompetences` (`id`, `employe_id`, `competence_id`, `score`, `created`, `modified`) VALUES
(1, 1, 1, 1, '2023-05-16 21:02:52', '2023-05-16 21:02:52'),
(2, 2, 1, 1, '2023-05-16 21:27:40', '2023-05-16 21:27:40'),
(3, 3, 1, 1, '2023-05-16 21:51:41', '2023-05-16 21:51:41'),
(4, 4, 1, 1, '2023-05-16 22:02:18', '2023-05-16 22:02:18');

-- --------------------------------------------------------

--
-- Structure de la table `scoresouscomps`
--

CREATE TABLE `scoresouscomps` (
  `id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `souscompetence_id` int(11) NOT NULL,
  `score` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `scoresouscomps`
--

INSERT INTO `scoresouscomps` (`id`, `employe_id`, `souscompetence_id`, `score`, `created`, `modified`) VALUES
(1, 1, 2, 0, '2023-05-16 21:02:57', '2023-05-16 21:02:57'),
(2, 1, 6, 1, '2023-05-16 21:03:07', '2023-05-16 21:03:07'),
(3, 1, 7, 0, '2023-05-16 21:03:17', '2023-05-16 21:03:17'),
(4, 1, 8, 1, '2023-05-16 21:03:20', '2023-05-16 21:03:20'),
(5, 1, 9, 0, '2023-05-16 21:03:25', '2023-05-16 21:03:25'),
(6, 2, 11, 0, '2023-05-16 21:27:44', '2023-05-16 21:27:44'),
(7, 2, 13, 1, '2023-05-16 21:27:50', '2023-05-16 21:27:50'),
(8, 2, 14, 0, '2023-05-16 21:27:55', '2023-05-16 21:27:55'),
(9, 2, 15, 1, '2023-05-16 21:28:00', '2023-05-16 21:28:00'),
(10, 2, 16, 0, '2023-05-16 21:28:04', '2023-05-16 21:28:04'),
(11, 2, 17, 1, '2023-05-16 21:28:11', '2023-05-16 21:28:11'),
(12, 3, 19, 0, '2023-05-16 21:51:47', '2023-05-16 21:51:47'),
(13, 3, 20, 1, '2023-05-16 21:51:53', '2023-05-16 21:51:53'),
(14, 3, 21, 0, '2023-05-16 21:51:58', '2023-05-16 21:51:58'),
(15, 3, 22, 1, '2023-05-16 21:52:03', '2023-05-16 21:52:03'),
(16, 3, 23, 0, '2023-05-16 21:52:09', '2023-05-16 21:52:09'),
(17, 3, 24, 1, '2023-05-16 21:52:13', '2023-05-16 21:52:13'),
(18, 3, 25, 0, '2023-05-16 21:52:21', '2023-05-16 21:52:21'),
(19, 4, 27, 0, '2023-05-16 22:02:22', '2023-05-16 22:02:22'),
(20, 4, 28, 1, '2023-05-16 22:02:29', '2023-05-16 22:02:29'),
(21, 4, 29, 0, '2023-05-16 22:02:34', '2023-05-16 22:02:34'),
(22, 4, 30, 1, '2023-05-16 22:02:38', '2023-05-16 22:02:38'),
(23, 4, 31, 0, '2023-05-16 22:02:42', '2023-05-16 22:02:42'),
(24, 4, 32, 1, '2023-05-16 22:02:46', '2023-05-16 22:02:46'),
(25, 4, 33, 0, '2023-05-16 22:02:51', '2023-05-16 22:02:51');

-- --------------------------------------------------------

--
-- Structure de la table `souscompetences`
--

CREATE TABLE `souscompetences` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `formcompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `souscompetences`
--

INSERT INTO `souscompetences` (`id`, `label`, `formcompetence_id`, `created`, `modified`) VALUES
(1, '', 1, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(2, 'GESTION DE TEMPS & PRIORITÉS', 2, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(3, 'GEEK', 3, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(4, 'AUTODÉTERMINATION ', 3, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(5, 'POSITIVITÉ', 3, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(6, 'COMMUNICATION INTERACTIVE EFFICACE', 3, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(7, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 3, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(8, 'RÉSOLUTION DE PROBLÈMES', 3, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(9, 'SERVICES D’EXCELLENCE  ', 3, '2023-05-11 10:16:18', '2023-05-11 10:16:18'),
(10, '', 4, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(11, 'GESTION DE TEMPS & PRIORITÉS', 5, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(12, 'Autonomie', 6, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(13, 'COMMUNICATION INTERACTIVE EFFICACE', 6, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(14, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 6, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(15, 'RÉSOLUTION DES PROBLÈMES', 6, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(16, 'SERVICE D’EXCELLENCE ', 6, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(17, 'RAISONNEMENT CONCEPTUEL ', 6, '2023-05-11 10:31:38', '2023-05-11 10:31:38'),
(18, '', 7, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(19, 'GESTION DE TEMPS & PRIORITÉS', 8, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(20, 'COMMUNICATION INTERACTIVE EFFICACE', 9, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(21, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 9, '2023-05-11 10:50:47', '2023-05-11 10:50:47'),
(22, 'RÉSOLUTION DES PROBLÈMES', 9, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(23, 'SERVICE D’EXCELLENCE ', 9, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(24, 'RAISONNEMENT CONCEPTUEL ', 9, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(25, 'LEADERSHIP', 9, '2023-05-11 10:50:48', '2023-05-11 10:50:48'),
(26, '', 10, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(27, 'GESTION DE TEMPS & PRIORITÉS', 11, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(28, 'COMMUNICATION INTERACTIVE EFFICACE', 12, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(29, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 12, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(30, 'RÉSOLUTION DES PROBLÈMES', 12, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(31, 'RAISONNEMENT ANALYTIQUE ', 12, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(32, 'LEADERSHIP', 12, '2023-05-11 11:02:29', '2023-05-11 11:02:29'),
(33, 'SOUTIEN AU DÉVELOPPEMENT DES AUTRES', 12, '2023-05-11 11:02:29', '2023-05-11 11:02:29');

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
-- Structure de la table `totalpolycompetences`
--

CREATE TABLE `totalpolycompetences` (
  `id` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `totalpolycompetences`
--

INSERT INTO `totalpolycompetences` (`id`, `valeur`, `created`, `modified`) VALUES
(1, 55.4166, '2023-05-07 20:06:40', '2023-05-23 16:07:09');

-- --------------------------------------------------------

--
-- Structure de la table `totalpolyvalences`
--

CREATE TABLE `totalpolyvalences` (
  `id` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `totalpolyvalences`
--

INSERT INTO `totalpolyvalences` (`id`, `valeur`, `created`, `modified`) VALUES
(1, 54.7222, '2023-05-07 19:50:02', '2023-05-16 22:04:29');

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
(1, 'chourouktest@gmail.com', '$2y$10$X2xZ9SDDJUvw4KQjE/3/heD.F4vykCn.j9ZEZuWrVH8UObiI6qJk2', '', 1, '2023-03-10 14:37:00', '2023-03-10 14:37:00');

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
-- Index pour la table `echelleevaluations`
--
ALTER TABLE `echelleevaluations`
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
-- Index pour la table `indicasoucompas`
--
ALTER TABLE `indicasoucompas`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `indicateursuivis`
--
ALTER TABLE `indicateursuivis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infoemployes`
--
ALTER TABLE `infoemployes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matricecompetences`
--
ALTER TABLE `matricecompetences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matrices`
--
ALTER TABLE `matrices`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveauvises`
--
ALTER TABLE `niveauvises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pointindicasous`
--
ALTER TABLE `pointindicasous`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pointindicateurs`
--
ALTER TABLE `pointindicateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `polycompetences`
--
ALTER TABLE `polycompetences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `polyvalences`
--
ALTER TABLE `polyvalences`
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
-- Index pour la table `scorecompetences`
--
ALTER TABLE `scorecompetences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `scoresouscomps`
--
ALTER TABLE `scoresouscomps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `souscompetences`
--
ALTER TABLE `souscompetences`
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
-- Index pour la table `totalpolycompetences`
--
ALTER TABLE `totalpolycompetences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `totalpolyvalences`
--
ALTER TABLE `totalpolyvalences`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
-- AUTO_INCREMENT pour la table `echelleevaluations`
--
ALTER TABLE `echelleevaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formcompetences`
--
ALTER TABLE `formcompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `indicasoucompas`
--
ALTER TABLE `indicasoucompas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `indicateursuivis`
--
ALTER TABLE `indicateursuivis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `infoemployes`
--
ALTER TABLE `infoemployes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `matricecompetences`
--
ALTER TABLE `matricecompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `matrices`
--
ALTER TABLE `matrices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `niveauvises`
--
ALTER TABLE `niveauvises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `pointindicasous`
--
ALTER TABLE `pointindicasous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `pointindicateurs`
--
ALTER TABLE `pointindicateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `polycompetences`
--
ALTER TABLE `polycompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `polyvalences`
--
ALTER TABLE `polyvalences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `postes`
--
ALTER TABLE `postes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `profilpostes`
--
ALTER TABLE `profilpostes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `scorecompetences`
--
ALTER TABLE `scorecompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `scoresouscomps`
--
ALTER TABLE `scoresouscomps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `souscompetences`
--
ALTER TABLE `souscompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `testtechniques`
--
ALTER TABLE `testtechniques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `themeformations`
--
ALTER TABLE `themeformations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `totalpolycompetences`
--
ALTER TABLE `totalpolycompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `totalpolyvalences`
--
ALTER TABLE `totalpolyvalences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
