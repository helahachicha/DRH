-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 avr. 2023 à 11:38
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
-- Database: `drh`
--

-- --------------------------------------------------------

--
-- Table structure for table `activiteloisirs`
--

CREATE TABLE `activiteloisirs` (
  `id` int(11) NOT NULL,
  `activitesportive` varchar(255) NOT NULL,
  `lequelsport` varchar(255) NOT NULL,
  `activitecreative` varchar(255) NOT NULL,
  `lequelcreative` varchar(255) NOT NULL,
  `activiteinventivite` varchar(255) NOT NULL,
  `jeureflexion` varchar(255) NOT NULL,
  `exerceractivite` varchar(255) NOT NULL,
  `pourquoi` varchar(255) NOT NULL,
  `salle de sport` varchar(255) NOT NULL,
  `joursdispo` varchar(255) NOT NULL,
  `critereenfance` varchar(255) NOT NULL,
  `beaumoment` text NOT NULL,
  `mauvaismoment` text NOT NULL,
  `activitebenevolat` varchar(255) NOT NULL,
  `joursdisp` varchar(255) NOT NULL,
  `lieuact` varchar(255) NOT NULL,
  `exercezactivite` varchar(255) NOT NULL,
  `infoprofessionnelle_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activiteloisirs`
--

INSERT INTO `activiteloisirs` (`id`, `activitesportive`, `lequelsport`, `activitecreative`, `lequelcreative`, `activiteinventivite`, `jeureflexion`, `exerceractivite`, `pourquoi`, `salle de sport`, `joursdispo`, `critereenfance`, `beaumoment`, `mauvaismoment`, `activitebenevolat`, `joursdisp`, `lieuact`, `exercezactivite`, `infoprofessionnelle_id`, `created`, `modified`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'testtest', 'test', 'test', 'test', 'test', 'test', 'test', 'testtest', 'test', 'test', 'test', 'test', 1, '2023-03-29 14:16:00', '2023-03-29 14:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `casmariages`
--

CREATE TABLE `casmariages` (
  `id` int(11) NOT NULL,
  `nomprenomep` varchar(255) NOT NULL,
  `datenep` date NOT NULL,
  `niveauetudeep` varchar(255) NOT NULL,
  `fonctionep` varchar(255) NOT NULL,
  `salaireep` int(11) NOT NULL,
  `etatep` varchar(255) NOT NULL,
  `infoprofessionnelle_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casmariages`
--

INSERT INTO `casmariages` (`id`, `nomprenomep`, `datenep`, `niveauetudeep`, `fonctionep`, `salaireep`, `etatep`, `infoprofessionnelle_id`, `created`, `modified`) VALUES
(1, 'test', '2023-03-15', 'test', 'test', 500, 'test', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `profilposte_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `label`, `profilposte_id`, `created`, `modified`) VALUES
(1, 'Développeur junior', 1, '2023-03-27 12:59:46', '2023-03-27 12:59:46'),
(2, 'Développeur confirmé', 1, '2023-03-27 12:59:46', '2023-03-27 12:59:46'),
(3, 'Développeur senior', 1, '2023-03-27 13:01:08', '2023-03-27 13:01:08'),
(4, 'Développeur tecklead', 1, '2023-03-27 13:01:08', '2023-03-27 13:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `competences`
--

INSERT INTO `competences` (`id`, `label`, `categorie_id`, `created`, `modified`) VALUES
(1, 'COMPÉTENCES TECHNIQUES', 1, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(2, 'COMPÉTENCES ORGANISATIONNELLES', 1, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(3, 'COMPÉTENCES COMPORTEMENTALES ', 1, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(4, 'COMPÉTENCES TECHNIQUES', 2, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(5, 'COMPÉTENCES ORGANISATIONNELLES', 2, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(6, 'COMPÉTENCES COMPORTEMENTALES ', 2, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(7, 'COMPÉTENCES TECHNIQUES', 3, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(8, 'COMPÉTENCES ORGANISATIONNELLES', 3, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(9, 'COMPÉTENCES COMPORTEMENTALES ', 3, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(10, 'COMPÉTENCES TECHNIQUES', 4, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(11, 'COMPÉTENCES ORGANISATIONNELLES', 4, '2023-04-05 10:38:12', '2023-04-05 10:38:12'),
(12, 'COMPÉTENCES COMPORTEMENTALES ', 4, '2023-04-05 10:38:12', '2023-04-05 10:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `comptechniques`
--

CREATE TABLE `comptechniques` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `testtechnique_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comptechniques`
--

INSERT INTO `comptechniques` (`id`, `label`, `testtechnique_id`, `created`, `modified`) VALUES
(1, 'A. Orientée Objet', 1, '2023-03-28 00:28:08', '2023-03-28 00:28:08'),
(2, 'B. Algorithme', 1, '2023-03-28 00:28:08', '2023-03-28 00:28:08'),
(3, 'C. SQL', 1, '2023-03-28 00:29:04', '2023-03-28 00:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `coutformaexternes`
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
-- Dumping data for table `coutformaexternes`
--

INSERT INTO `coutformaexternes` (`id`, `coutformahd`, `tocoformadt`, `locaespace`, `comax`, `tocout`, `chargeto`, `created`, `modified`) VALUES
(6, 11, 15, 11, 16, 16, 16, '2023-03-22 08:56:34', '2023-03-22 08:56:34'),
(9, 13, 17, 12, 14, 18, 27, '2023-03-22 08:57:34', '2023-03-22 08:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `label`, `created`, `modified`) VALUES
(1, 'Recherche & Développement', '2023-03-27 12:28:46', '2023-03-27 12:28:46'),
(2, 'Consultance fonctionnelle', '2023-03-27 12:28:46', '2023-03-27 12:28:46'),
(3, 'Administration', '2023-03-27 12:29:22', '2023-03-27 12:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `detailprofilpostes`
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
-- Dumping data for table `detailprofilpostes`
--

INSERT INTO `detailprofilpostes` (`id`, `fonction`, `categorie_id`, `profilposte_id`, `superhierar`, `supervision`, `interim`, `fonctionelaboration`, `fonctionverification`, `fonctionabrobation`, `nomprenomelab`, `nomprenomverif`, `nomprenomabrob`, `created`, `modified`) VALUES
(2, 'Développeur web', 1, 1, 'senior', 'gerant', 'gerant', 'Gerant', 'Gerant', 'Gerant', 'Hela hachicha', 'Hela hachicha', 'Hela hachicha', '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(3, 'Ingénieur dev', 2, 27, 'Ingénieur dev', 'Ingénieur dev', 'Ingénieur dev', 'Ingénieur dev', 'Ingénieur dev', 'Ingénieur dev', 'test', 'test', 'test', '2023-04-05 12:55:05', '2023-04-05 12:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `formaexternes`
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
-- Dumping data for table `formaexternes`
--

INSERT INTO `formaexternes` (`id`, `typecomp`, `themeformation_id`, `participant`, `nbparticipant`, `raisonforma`, `organismeforma`, `formalite`, `formateur`, `raisonchoix`, `dureeforma`, `nbjour`, `nbhjour`, `date`, `horaireforma`, `pause`, `lieuforma`, `created`, `modified`) VALUES
(6, 'zdqscwx', 1, 'dqSW', 7, 'Dq', 'dQCW', 'dQX<', 'Qdx', 'dqx<', '6', 5, 5, '2023-03-23 00:00:00', '14:55', 'dq', 'dQ<', '2023-03-22 09:55:39', '2023-03-22 09:55:39'),
(7, 'competence technique ', 2, 'test', 44, 'test', 'test', 'test', 'test', 'test', '3', 4, 3, '2023-03-24 00:00:00', '10:15', 'test', 'test', '2023-03-23 09:14:57', '2023-03-23 09:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `formainternes`
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
-- Dumping data for table `formainternes`
--

INSERT INTO `formainternes` (`id`, `tycomp`, `themeformation_id`, `animateur`, `poste`, `date`, `hentrer`, `hsortie`, `created`, `modified`) VALUES
(1, 'hhhhhhh', 1, 'hhh', 'hhhhhh', '2023-03-22', '00:00:15', '00:00:17', '2023-03-27 16:57:51', '2023-03-27 16:57:51'),
(2, 'bolbol', 2, 'hhh', 'hhh', '2023-03-22', '00:00:15', '00:00:17', '2023-03-27 17:00:13', '2023-03-27 17:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `formcompetences`
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
-- Dumping data for table `formcompetences`
--

INSERT INTO `formcompetences` (`id`, `competence_id`, `soucompetence`, `niveauvise_id`, `detailprofilposte_id`, `created`, `modified`) VALUES
(1, 1, '', 1, 2, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(2, 2, 'sou1', 2, 2, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(3, 2, 'sou2', 2, 2, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(4, 2, '', 3, 2, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(5, 1, '', 2, 3, '2023-04-05 12:55:05', '2023-04-05 12:55:05'),
(6, 2, 'Ingénieur dev', 2, 3, '2023-04-05 12:55:05', '2023-04-05 12:55:05'),
(7, 1, 'Ingénieur dev', 2, 3, '2023-04-05 12:55:05', '2023-04-05 12:55:05'),
(8, 3, '', 2, 3, '2023-04-05 12:55:05', '2023-04-05 12:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `indicateursuivis`
--

CREATE TABLE `indicateursuivis` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `souscompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indicateursuivis`
--

INSERT INTO `indicateursuivis` (`id`, `label`, `souscompetence_id`, `created`, `modified`) VALUES
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
-- Table structure for table `infoficheevaluations`
--

CREATE TABLE `infoficheevaluations` (
  `id` int(11) NOT NULL,
  `nomprenom` varchar(255) NOT NULL,
  `objetevaluation` varchar(255) NOT NULL,
  `dateevaluation` varchar(255) NOT NULL,
  `decisiondirection` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infoficheevaluations`
--

INSERT INTO `infoficheevaluations` (`id`, `nomprenom`, `objetevaluation`, `dateevaluation`, `decisiondirection`, `categorie_id`, `created`, `modified`) VALUES
(1, 'Ghaddhab Bilel', 'test', 'test', 'test', 4, '2023-03-30 22:20:26', '2023-03-30 22:20:26'),
(2, 'chourouk', 'test', 'test', 'test', 1, '2023-04-03 10:59:45', '2023-04-03 10:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `infopersonnelles`
--

CREATE TABLE `infopersonnelles` (
  `id` int(11) NOT NULL,
  `daten` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `ncin` int(11) NOT NULL,
  `delivree` varchar(255) NOT NULL,
  `le` date NOT NULL,
  `permis` varchar(255) NOT NULL,
  `quandp` date NOT NULL,
  `logement` varchar(255) NOT NULL,
  `moyentransport` varchar(255) NOT NULL,
  `tempsdt` int(11) NOT NULL,
  `situationfamiliale` varchar(255) NOT NULL,
  `quandmd` date NOT NULL,
  `infoprofessionnelle_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infopersonnelles`
--

INSERT INTO `infopersonnelles` (`id`, `daten`, `lieu`, `nationalite`, `ncin`, `delivree`, `le`, `permis`, `quandp`, `logement`, `moyentransport`, `tempsdt`, `situationfamiliale`, `quandmd`, `infoprofessionnelle_id`, `created`, `modified`) VALUES
(1, '2023-03-01', 'test', 'test', 14029111, 'test', '2023-03-08', 'test', '2023-03-08', 'test', 'test', 23, 'test', '2023-03-01', 1, '2023-03-29 14:02:16', '2023-03-29 14:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `infoprofessionnelles`
--

CREATE TABLE `infoprofessionnelles` (
  `id` int(11) NOT NULL,
  `nomprenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telprofessionnel` int(11) NOT NULL,
  `telpersonnel` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `mailprofessionnel` varchar(255) NOT NULL,
  `mailpersonnel` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infoprofessionnelles`
--

INSERT INTO `infoprofessionnelles` (`id`, `nomprenom`, `adresse`, `telprofessionnel`, `telpersonnel`, `contact`, `mailprofessionnel`, `mailpersonnel`, `service`, `poste`, `created`, `modified`) VALUES
(1, 'bilel ghaddhab', 'test', 23145651, 23586485, 29635524, 'testtest', 'test', 'test', 'test', '2023-03-29 14:01:26', '2023-03-29 14:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `niveauvises`
--

CREATE TABLE `niveauvises` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `niveauvises`
--

INSERT INTO `niveauvises` (`id`, `label`, `categorie_id`, `created`, `modified`) VALUES
(1, 'Pré-actif ', 1, '2023-03-27 13:36:38', '2023-03-27 13:36:38'),
(2, 'Actif', 2, '2023-03-27 13:37:01', '2023-03-27 13:37:01'),
(3, 'Pro-actif', 3, '2023-03-27 13:37:01', '2023-03-27 13:37:01'),
(4, 'Expert', 4, '2023-03-27 13:37:16', '2023-03-27 13:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `noteevaluations`
--

CREATE TABLE `noteevaluations` (
  `id` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `indicateursuivi_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noteevaluations`
--

INSERT INTO `noteevaluations` (`id`, `point`, `indicateursuivi_id`, `created`, `modified`) VALUES
(1, 0, 1, '2023-03-30 13:06:42', '2023-03-30 13:06:42'),
(2, 1, 2, '2023-03-30 13:06:42', '2023-03-30 13:06:42'),
(3, 0, 3, '2023-03-30 13:07:56', '2023-03-30 13:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `postes`
--

CREATE TABLE `postes` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `departement_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postes`
--

INSERT INTO `postes` (`id`, `label`, `departement_id`, `created`, `modified`) VALUES
(1, 'Développement', 1, '2023-03-27 12:30:24', '2023-03-27 12:30:24'),
(2, 'Responsable marketing ', 2, '2023-03-27 12:30:24', '2023-03-27 12:30:24'),
(3, 'Responsable ressource humaine ', 2, '2023-03-27 12:31:16', '2023-03-27 12:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `profilpostes`
--

CREATE TABLE `profilpostes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poste_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profilpostes`
--

INSERT INTO `profilpostes` (`id`, `nom`, `poste_id`, `created`, `modified`) VALUES
(1, 'Profil de poste développeur ', 1, '2023-03-27 12:32:33', '2023-03-27 12:32:33'),
(2, 'Profil de poste responsable marketing ', 0, '2023-03-27 12:32:33', '2023-03-27 12:32:33'),
(3, 't', 0, '2023-04-04 09:59:12', '2023-04-04 09:59:12'),
(4, 'developpeuse web', 0, '2023-04-04 10:41:29', '2023-04-04 10:41:29'),
(5, 'developpeur web', 0, '2023-04-04 11:05:02', '2023-04-04 11:05:02'),
(6, 'developpeur web', 0, '2023-04-04 11:07:15', '2023-04-04 11:07:15'),
(7, 'developpeur web', 0, '2023-04-04 11:10:15', '2023-04-04 11:10:15'),
(8, 'developpeur web', 0, '2023-04-04 11:11:42', '2023-04-04 11:11:42'),
(9, 'developpeur web', 0, '2023-04-04 11:11:59', '2023-04-04 11:11:59'),
(10, 'ingénieur dev', 0, '2023-04-04 11:19:53', '2023-04-04 11:19:53'),
(11, 'deved', 0, '2023-04-04 11:22:56', '2023-04-04 11:22:56'),
(12, 'developpeur web', 0, '2023-04-05 10:04:22', '2023-04-05 10:04:22'),
(13, 'test', 0, '2023-04-05 10:40:56', '2023-04-05 10:40:56'),
(14, 'test', 0, '2023-04-05 10:42:05', '2023-04-05 10:42:05'),
(15, 'test', 0, '2023-04-05 10:42:46', '2023-04-05 10:42:46'),
(16, 'test', 0, '2023-04-05 10:43:07', '2023-04-05 10:43:07'),
(17, 'a', 0, '2023-04-05 10:50:50', '2023-04-05 10:50:50'),
(18, 'a', 0, '2023-04-05 10:52:21', '2023-04-05 10:52:21'),
(19, 'a', 0, '2023-04-05 10:53:04', '2023-04-05 10:53:04'),
(20, 'a', 0, '2023-04-05 10:54:18', '2023-04-05 10:54:18'),
(21, 'Profil de poste Développeur web', 0, '2023-04-05 11:00:02', '2023-04-05 11:00:02'),
(22, 'Profil de poste Développeur web', 0, '2023-04-05 11:00:57', '2023-04-05 11:00:57'),
(23, 'Profil de poste Développeur web', 0, '2023-04-05 11:02:50', '2023-04-05 11:02:50'),
(24, 'Profil de poste Développeur web', 0, '2023-04-05 11:03:02', '2023-04-05 11:03:02'),
(25, 'Profil développeur', 0, '2023-04-05 11:08:07', '2023-04-05 11:08:07'),
(26, 'Profil développeur', 0, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(27, 'Ingénieur dev', 0, '2023-04-05 12:55:05', '2023-04-05 12:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `label` text NOT NULL,
  `comptechnique_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
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
-- Table structure for table `reponses`
--

CREATE TABLE `reponses` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reponses`
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `label`, `created`, `modified`) VALUES
(1, 'Drh', '2023-03-10 14:01:56', '2023-03-10 14:01:56'),
(2, 'Admin', '2023-03-10 14:01:56', '2023-03-10 14:01:56');

-- --------------------------------------------------------

--
-- Structure de la table `souscompetences`
--

CREATE TABLE `souscompetences` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `competence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `souscompetences`
--

INSERT INTO `souscompetences` (`id`, `label`, `competence_id`, `created`, `modified`) VALUES
(1, 'CT', 1, '2023-04-05 10:43:26', '2023-04-05 10:43:26'),
(2, 'GESTION DE TEMPS & PRIORITÉS', 2, '2023-04-05 10:43:26', '2023-04-05 10:43:26'),
(3, 'GEEK', 3, '2023-04-05 10:43:26', '2023-04-05 10:43:26'),
(4, 'AUTODÉTERMINATION ', 3, '2023-04-05 10:43:26', '2023-04-05 10:43:26'),
(5, 'POSITIVITÉ', 3, '2023-04-05 10:43:26', '2023-04-05 10:43:26'),
(6, 'COMMUNICATION INTERACTIVE EFFICACE', 3, '2023-04-05 10:43:26', '2023-04-05 10:43:26'),
(7, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 3, '2023-04-05 10:43:26', '2023-04-05 10:43:26'),
(8, 'RÉSOLUTION DE PROBLÈMES', 3, '2023-04-05 10:43:26', '2023-04-05 10:43:26'),
(9, 'SERVICES D’EXCELLENCE  ', 3, '2023-04-05 10:43:26', '2023-04-05 10:43:26'),
(10, 'CT', 4, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(11, 'GESTION DE TEMPS & PRIORITÉS', 5, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(12, 'Autonomie', 6, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(13, 'COMMUNICATION INTERACTIVE EFFICACE', 6, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(14, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 6, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(15, 'RÉSOLUTION DES PROBLÈMES', 6, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(16, 'SERVICE D’EXCELLENCE ', 6, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(17, 'RAISONNEMENT CONCEPTUEL ', 6, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(18, 'CT', 7, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(19, 'GESTION DE TEMPS & PRIORITÉS', 8, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(20, 'COMMUNICATION INTERACTIVE EFFICACE', 9, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(21, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 9, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(22, 'RÉSOLUTION DES PROBLÈMES', 9, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(23, 'SERVICE D’EXCELLENCE ', 9, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(24, 'RAISONNEMENT CONCEPTUEL ', 9, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(25, 'LEADERSHIP', 9, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(26, 'CT', 10, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(27, 'GESTION DE TEMPS & PRIORITÉS', 11, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(28, 'COMMUNICATION INTERACTIVE EFFICACE', 12, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(29, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 12, '2023-04-05 10:48:07', '2023-04-05 10:48:07'),
(30, 'RÉSOLUTION DES PROBLÈMES', 12, '2023-04-05 10:54:54', '2023-04-05 10:54:54'),
(31, 'RAISONNEMENT ANALYTIQUE ', 12, '2023-04-05 10:54:54', '2023-04-05 10:54:54'),
(32, 'LEADERSHIP', 12, '2023-04-05 10:54:54', '2023-04-05 10:54:54'),
(33, 'SOUTIEN AU DÉVELOPPEMENT DES AUTRES', 12, '2023-04-05 10:54:54', '2023-04-05 10:54:54');

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
-- Dumping data for table `testtechniques`
--

INSERT INTO `testtechniques` (`id`, `label`, `categorie_id`, `created`, `modified`) VALUES
(1, 'Test technique développeur junior', 1, '2023-03-28 00:32:24', '2023-03-28 00:32:24'),
(2, 'Test technique développeur confirmé', 2, '2023-03-29 11:24:42', '2023-03-29 11:24:42'),
(3, 'Test technique développeur senior', 3, '2023-03-29 11:24:42', '2023-03-29 11:24:42'),
(4, 'Test technique développeur tecklead', 4, '2023-03-29 11:28:34', '2023-03-29 11:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `themeformations`
--

CREATE TABLE `themeformations` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `themeformations`
--

INSERT INTO `themeformations` (`id`, `label`, `created`, `modified`) VALUES
(1, 'SQL', '2023-03-27 10:43:26', '2023-03-27 10:43:26'),
(2, 'PYTHON', '2023-03-27 10:43:26', '2023-03-27 10:43:26'),
(3, 'JAVA', '2023-03-27 10:44:32', '2023-03-27 10:44:32'),
(4, 'ANGULAR', '2023-03-27 10:44:32', '2023-03-27 10:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `token`, `role_id`, `created`, `modified`) VALUES
(1, 'helatest@gmail.com', '$2y$10$X2xZ9SDDJUvw4KQjE/3/heD.F4vykCn.j9ZEZuWrVH8UObiI6qJk2', '', 1, '2023-03-10 14:37:00', '2023-03-10 14:37:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activiteloisirs`
--
ALTER TABLE `activiteloisirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casmariages`
--
ALTER TABLE `casmariages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comptechniques`
--
ALTER TABLE `comptechniques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coutformaexternes`
--
ALTER TABLE `coutformaexternes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailprofilpostes`
--
ALTER TABLE `detailprofilpostes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formaexternes`
--
ALTER TABLE `formaexternes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formainternes`
--
ALTER TABLE `formainternes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formcompetences`
--
ALTER TABLE `formcompetences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indicateursuivis`
--
ALTER TABLE `indicateursuivis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infoficheevaluations`
--
ALTER TABLE `infoficheevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infopersonnelles`
--
ALTER TABLE `infopersonnelles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infoprofessionnelles`
--
ALTER TABLE `infoprofessionnelles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niveauvises`
--
ALTER TABLE `niveauvises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noteevaluations`
--
ALTER TABLE `noteevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postes`
--
ALTER TABLE `postes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilpostes`
--
ALTER TABLE `profilpostes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- Indexes for table `themeformations`
--
ALTER TABLE `themeformations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activiteloisirs`
--
ALTER TABLE `activiteloisirs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `casmariages`
--
ALTER TABLE `casmariages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comptechniques`
--
ALTER TABLE `comptechniques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coutformaexternes`
--
ALTER TABLE `coutformaexternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detailprofilpostes`
--
ALTER TABLE `detailprofilpostes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `formaexternes`
--
ALTER TABLE `formaexternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `formainternes`
--
ALTER TABLE `formainternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formcompetences`
--
ALTER TABLE `formcompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `indicateursuivis`
--
ALTER TABLE `indicateursuivis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `infoficheevaluations`
--
ALTER TABLE `infoficheevaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `infopersonnelles`
--
ALTER TABLE `infopersonnelles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infoprofessionnelles`
--
ALTER TABLE `infoprofessionnelles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `niveauvises`
--
ALTER TABLE `niveauvises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `noteevaluations`
--
ALTER TABLE `noteevaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `postes`
--
ALTER TABLE `postes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profilpostes`
--
ALTER TABLE `profilpostes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `souscompetences`
--
ALTER TABLE `souscompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `testtechniques`
--
ALTER TABLE `testtechniques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `themeformations`
--
ALTER TABLE `themeformations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
