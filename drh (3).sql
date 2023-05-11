-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 12:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `competences`
--

INSERT INTO `competences` (`id`, `label`, `created`, `modified`) VALUES
(1, 'COMPÉTENCES TECHNIQUES', '2023-03-27 14:58:13', '2023-03-27 14:58:13'),
(2, 'COMPÉTENCES ORGANISATIONNELLES', '2023-03-27 14:58:13', '2023-03-27 14:58:13'),
(3, 'COMPÉTENCES COMPORTEMENTALES ', '2023-03-27 14:59:00', '2023-03-27 14:59:00');

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
(1, 'Recherche & Développement', '2023-03-27 12:28:46', '2023-03-27 12:28:46');

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
(1, 'ingenieur', 1, 2, 'ingenieur', 'ingenieur', 'ingenieur', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jaweher KHMIRI', 'Hayet  BEN SALEM', 'Rochdi ABID', '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(2, 't', 2, 3, 't', 't', 't', 't', 't', 't', 't', 't', 't', '2023-05-10 10:03:53', '2023-05-10 10:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `echelleevaluations`
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
-- Dumping data for table `echelleevaluations`
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
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `nomprenom` varchar(255) NOT NULL,
  `objetevaluation` varchar(255) NOT NULL,
  `dateevaluation` datetime DEFAULT NULL,
  `decisiondirection` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `moyen` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `nomprenom`, `objetevaluation`, `dateevaluation`, `decisiondirection`, `categorie_id`, `moyen`, `created`, `modified`) VALUES
(1, 'ALI HARBI', 'test', '2023-05-06 00:00:00', 'test', 1, 1, '2023-05-05 07:36:25', '2023-05-05 07:36:25'),
(2, 'ALI HARBI', 'test', '2023-05-06 00:00:00', 'test', 1, 1.33333, '2023-05-05 07:36:44', '2023-05-05 07:36:44'),
(3, 'ALI HARBI', 'test', '2023-05-06 00:00:00', 'test', 1, 1, '2023-05-05 07:37:08', '2023-05-05 07:37:08'),
(4, 'HAMA HARBI', 'test', '2023-05-20 00:00:00', 'test', 1, 0.333333, '2023-05-05 08:41:51', '2023-05-05 08:41:51'),
(5, 'HAMA HARBI', 'test', '2023-05-20 00:00:00', 'test', 1, 0.666667, '2023-05-05 08:42:00', '2023-05-05 08:42:00'),
(6, 'HAMA HARBI', 'test', '2023-05-20 00:00:00', 'test', 1, 1, '2023-05-05 08:42:09', '2023-05-05 08:42:09'),
(7, 'BILEL IFA', 'test', '0000-00-00 00:00:00', 'test', 2, 1, '2023-05-05 10:05:22', '2023-05-05 10:05:22'),
(8, 'BILEL IFA', 'test', '0000-00-00 00:00:00', 'test', 2, 0.5, '2023-05-05 10:05:59', '2023-05-05 10:05:59'),
(9, 'BILEL IFA', 'test', '0000-00-00 00:00:00', 'test', 2, 0.666667, '2023-05-05 10:06:22', '2023-05-05 10:06:22'),
(10, 'HAIKEL MGANEM', 'test', '2023-05-12 00:00:00', 'test', 3, 1, '2023-05-05 10:07:06', '2023-05-05 10:07:06'),
(11, 'HAIKEL MGANEM', 'test', '2023-05-12 00:00:00', 'test', 3, 0.333333, '2023-05-05 10:07:23', '2023-05-05 10:07:23');

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
(6, 'Compétence technique', 1, 'Développeurs', 21, 'Encadrement', 'Centre de formation', 'Test', 'Amine louz', 'coach', '32', 5, 5, '2023-03-23 00:00:00', '14:55', 'dq', 'dQ<', '2023-03-22 09:55:39', '2023-03-22 09:55:39'),
(7, 'Compétence technique ', 2, 'Développeurs', 44, 'test', 'test', 'test', 'test', 'test', '21', 4, 3, '2023-03-24 00:00:00', '10:15', 'test', 'test', '2023-03-23 09:14:57', '2023-03-23 09:14:57');

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
(1, 'Compétence organisationnelle', 1, 'Ali harbi', 'Développeur', '2023-03-22', '00:00:15', '00:00:17', '2023-03-27 16:57:51', '2023-03-27 16:57:51'),
(2, 'Compétence technique', 2, 'Hama harbi', 'Développeur', '2023-03-22', '00:00:15', '00:00:17', '2023-03-27 17:00:13', '2023-03-27 17:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `formcompetences`
--

CREATE TABLE `formcompetences` (
  `id` int(11) NOT NULL,
  `competence_id` int(11) NOT NULL,
  `detailprofilposte_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `formcompetences`
--

INSERT INTO `formcompetences` (`id`, `competence_id`, `detailprofilposte_id`, `created`, `modified`) VALUES
(1, 1, 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(2, 2, 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(3, 3, 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(4, 1, 2, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(5, 2, 2, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(6, 3, 2, '2023-05-10 10:03:53', '2023-05-10 10:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `indicasoucompas`
--

CREATE TABLE `indicasoucompas` (
  `id` int(11) NOT NULL,
  `label` varchar(400) DEFAULT '',
  `souscompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `indicasoucompas`
--

INSERT INTO `indicasoucompas` (`id`, `label`, `souscompetence_id`, `created`, `modified`) VALUES
(1, '', 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(2, 'indisouscomp2-1', 2, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(3, 'indisouscomp2-2', 2, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(4, 'indisouscomp2-3', 2, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(5, 'indisouscomp2-4', 2, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(6, '', 3, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(7, '', 4, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(8, '', 5, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(9, 'indicasoucomp4-1', 6, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(10, 'indicasoucomp4-2', 6, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(11, 'indicasoucomp4-3', 6, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(12, 'indicasoucomp5-1', 7, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(13, 'indicasoucomp5-2', 7, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(14, 'indicasoucomp6-1', 8, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(15, 'indicasoucomp6-2', 8, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(16, 'indicasoucomp7-1', 9, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(17, 'indicasoucomp7-2', 9, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(18, '', 10, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(19, 't', 11, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(20, 't', 11, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(21, 't', 12, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(22, 't', 13, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(23, 't', 14, '2023-05-10 10:03:53', '2023-05-10 10:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `indicateursuivis`
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
-- Dumping data for table `indicateursuivis`
--

INSERT INTO `indicateursuivis` (`id`, `label`, `formcompetence_id`, `niveauvise_id`, `created`, `modified`) VALUES
(1, 'comp1-1', 1, 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(2, 'comp1-1', 1, 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(3, 'comp1-3', 1, 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(4, '', 2, 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(5, '', 3, 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(6, 't', 4, 1, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(7, 't', 4, 1, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(8, 't', 4, 1, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(9, '', 5, 1, '2023-05-10 10:03:53', '2023-05-10 10:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `matricecompetences`
--

CREATE TABLE `matricecompetences` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `abreviation` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matricecompetences`
--

INSERT INTO `matricecompetences` (`id`, `label`, `abreviation`, `created`, `modified`) VALUES
(1, 'Gestion de temps & priorités', 'GTP', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(2, 'Communication interactive efficace', 'CIE', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(3, 'Travail en équipe & collaboration', 'TEC\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(4, 'Résolution de problème', 'RP\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(5, 'Service d’excellence', 'SE\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(6, 'Raisonnement conceptuel\r\n', 'RC\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(7, 'Leadership\r\n', 'LP\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(8, 'Capacité en coaching \r\n', 'CC', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(9, 'Esprit analytique\r\n', 'EA', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(10, 'Évaluer & gérer les risques \r\n', 'GER\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(11, 'Etat d’esprit axé sur la croissance\r\n', 'EEAC\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(12, 'souci de la qualité & de détail\r\n', 'SQ\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(13, 'Impact & influence\r\n', 'IM\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(14, 'Esprit de décision \r\n', 'ED', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(15, 'Adaptabilité & flexibilité\r\n', 'AF', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(16, 'Créativité & innovation\r\n', 'CI', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(17, 'Orientation stratégique\r\n', 'OS', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(18, 'Compétence algorithmique\r\n', 'CA', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(19, 'Connaissance de l’architecture de\n développement orienté objet \n', 'OO\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(20, 'Une bonne maîtrise du SQL\r\n', 'SQL\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(21, 'Maîtrise fonctionnel', 'MF', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(22, 'Maîtrise technique odoo\r\n', 'MT\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(23, 'Maîtrise une autre technologie\r\n', 'MTC\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(24, 'Esprit d’analyse\r\n', 'EA', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(25, 'Esprit de synthèse\r\n', 'ES', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(26, 'Esprit logique \r\n', 'EL', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(27, 'Connaissance métier consultance fonctionnelle\r\n', '', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(28, 'Compétence rédactionnelle (guide utilisateur)\r\n', '', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(29, 'Etabli cahier de charge client \r\n', '', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
(30, 'Rédaction des scénarios test \r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(31, 'Estimation mise en place standard\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(32, 'Architecture fonctionnelle\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(33, 'Analyse de la rentabilité projet \r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(34, 'Compréhension système management qualité \r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(35, 'Élaboration des documents qualité\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(36, 'Audit interne ISO 19001 Vs 2018\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(37, 'Pilotage système management qualité\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(38, 'Certification système de management qualité ISO\n 20000 Technologies de l’information dernière version\n ', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(39, 'Gérer les réseaux sociaux\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(40, 'Compréhension des outils de design \r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(41, 'Gestion de sponsoring\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(42, 'Rédaction des articles ', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(43, 'Compréhension des outils d’élaboration stratégie marketing\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(44, 'Analyse des données statistiques\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(45, 'Connaissance des outils de performance marketing\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(46, 'Création des sites web \r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(47, 'Une bonne maîtirse de la comptabilité générale \r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(48, 'Maitrise du bilan comptable jusqu’à la clôture\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(49, 'Gérer les complexités des comptes comptables\r\n', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
(50, 'Conseiller à propos l’évolution des normes et \ndes pratiques comptables\n', '', '2023-04-08 17:58:19', '2023-04-08 17:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `matrices`
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
-- Dumping data for table `matrices`
--

INSERT INTO `matrices` (`id`, `note`, `employe_id`, `matricecompetence_id`, `created`, `modified`) VALUES
(1, 'A+', 1, 1, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(2, 'B', 7, 1, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(3, 'C', 10, 1, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(4, 'A', 4, 1, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(5, 'A', 1, 2, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(6, 'Ne', 7, 2, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(7, 'A', 10, 2, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(8, 'D', 4, 2, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(9, 'B', 1, 3, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(10, 'A+', 7, 3, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(11, 'B', 10, 3, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(12, 'C', 4, 3, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(13, 'C', 1, 4, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(14, 'D', 7, 4, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(15, 'A', 10, 4, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(16, 'C', 4, 4, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(17, 'D', 1, 5, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(18, 'Ne', 7, 5, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(19, 'B', 10, 5, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(20, 'D', 4, 5, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(21, 'Ne', 1, 6, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(22, 'A+', 7, 6, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(23, 'C', 10, 6, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(24, 'Ne', 4, 6, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(25, 'D', 1, 7, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(26, 'C', 1, 8, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(27, 'A+', 1, 9, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(28, 'A+', 1, 10, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(29, 'D', 1, 11, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(30, 'A+', 1, 12, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(31, 'A+', 1, 13, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(32, 'A+', 1, 14, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(33, 'Ne', 1, 15, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(34, 'B', 1, 16, '2023-05-05 23:55:40', '2023-05-05 23:55:40'),
(35, 'A+', 7, 7, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(36, 'B', 7, 8, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(37, 'C', 7, 9, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(38, 'Ne', 7, 10, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(39, 'A+', 7, 11, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(40, 'Ne', 7, 12, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(41, 'C', 7, 13, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(42, 'B', 7, 14, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(43, 'A+', 7, 15, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(44, 'B', 7, 16, '2023-05-06 00:02:08', '2023-05-06 00:02:08'),
(45, 'A+', 10, 7, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(46, 'A+', 10, 8, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(47, 'A', 10, 9, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(48, 'A+', 10, 10, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(49, 'B', 10, 11, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(50, 'B', 10, 12, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(51, 'A+', 10, 13, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(52, 'B', 10, 14, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(53, 'A+', 10, 15, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(54, 'A', 10, 16, '2023-05-06 00:06:58', '2023-05-06 00:06:58'),
(55, 'Ne', 4, 7, '2023-05-06 00:09:18', '2023-05-06 00:09:18'),
(56, 'C', 4, 8, '2023-05-06 00:09:18', '2023-05-06 00:09:18'),
(57, 'D', 4, 9, '2023-05-06 00:09:18', '2023-05-06 00:09:18'),
(58, 'Ne', 4, 10, '2023-05-06 00:09:18', '2023-05-06 00:09:18'),
(59, 'D', 4, 11, '2023-05-06 00:09:18', '2023-05-06 00:09:18'),
(60, 'Ne', 4, 12, '2023-05-06 00:09:18', '2023-05-06 00:09:18'),
(61, 'B', 4, 13, '2023-05-06 00:09:18', '2023-05-06 00:09:18'),
(62, 'C', 4, 14, '2023-05-06 00:09:18', '2023-05-06 00:09:18'),
(63, 'Ne', 4, 15, '2023-05-06 00:09:18', '2023-05-06 00:09:18'),
(64, 'C', 4, 16, '2023-05-06 00:09:18', '2023-05-06 00:09:18');

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
-- Table structure for table `pointindicasous`
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
-- Dumping data for table `pointindicasous`
--

INSERT INTO `pointindicasous` (`id`, `label`, `indicasoucompa_id`, `employe_id`, `created`, `modified`) VALUES
(1, 1, 31, 2, '2023-05-05 07:36:44', '2023-05-05 07:36:44'),
(2, 2, 32, 2, '2023-05-05 07:36:44', '2023-05-05 07:36:44'),
(3, 1, 33, 2, '2023-05-05 07:36:44', '2023-05-05 07:36:44'),
(4, 1, 4, 3, '2023-05-05 07:37:08', '2023-05-05 07:37:08'),
(5, 1, 5, 3, '2023-05-05 07:37:08', '2023-05-05 07:37:08'),
(6, 1, 6, 3, '2023-05-05 07:37:08', '2023-05-05 07:37:08'),
(7, 1, 7, 3, '2023-05-05 07:37:08', '2023-05-05 07:37:08'),
(8, 0, 31, 5, '2023-05-05 08:42:00', '2023-05-05 08:42:00'),
(9, 1, 32, 5, '2023-05-05 08:42:00', '2023-05-05 08:42:00'),
(10, 1, 33, 5, '2023-05-05 08:42:00', '2023-05-05 08:42:00'),
(11, 1, 4, 6, '2023-05-05 08:42:09', '2023-05-05 08:42:09'),
(12, 1, 5, 6, '2023-05-05 08:42:09', '2023-05-05 08:42:09'),
(13, 1, 6, 6, '2023-05-05 08:42:09', '2023-05-05 08:42:09'),
(14, 1, 34, 8, '2023-05-05 10:05:59', '2023-05-05 10:05:59'),
(15, 0, 35, 8, '2023-05-05 10:05:59', '2023-05-05 10:05:59'),
(16, 0, 17, 9, '2023-05-05 10:06:22', '2023-05-05 10:06:22'),
(17, 1, 18, 9, '2023-05-05 10:06:22', '2023-05-05 10:06:22'),
(18, 1, 19, 9, '2023-05-05 10:06:22', '2023-05-05 10:06:22'),
(19, 0, 51, 11, '2023-05-05 10:07:23', '2023-05-05 10:07:23'),
(20, 0, 52, 11, '2023-05-05 10:07:23', '2023-05-05 10:07:23'),
(21, 1, 53, 11, '2023-05-05 10:07:23', '2023-05-05 10:07:23'),
(22, 2, 69, 13, '2023-05-05 21:07:23', '2023-05-05 21:07:23'),
(23, 1, 70, 13, '2023-05-05 21:07:23', '2023-05-05 21:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `pointindicateurs`
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
-- Dumping data for table `pointindicateurs`
--

INSERT INTO `pointindicateurs` (`id`, `label`, `indicateursuivi_id`, `employe_id`, `created`, `modified`) VALUES
(1, 1, 1, 1, '2023-05-05 07:36:25', '2023-05-05 07:36:25'),
(2, 1, 2, 1, '2023-05-05 07:36:25', '2023-05-05 07:36:25'),
(3, 1, 3, 1, '2023-05-05 07:36:25', '2023-05-05 07:36:25'),
(4, 1, 1, 4, '2023-05-05 08:41:51', '2023-05-05 08:41:51'),
(5, 0, 2, 4, '2023-05-05 08:41:51', '2023-05-05 08:41:51'),
(6, 0, 3, 4, '2023-05-05 08:41:51', '2023-05-05 08:41:51'),
(7, 1, 6, 7, '2023-05-05 10:05:22', '2023-05-05 10:05:22'),
(8, 1, 7, 7, '2023-05-05 10:05:22', '2023-05-05 10:05:22'),
(9, 1, 10, 10, '2023-05-05 10:07:06', '2023-05-05 10:07:06'),
(10, 1, 11, 10, '2023-05-05 10:07:06', '2023-05-05 10:07:06'),
(11, 1, 12, 10, '2023-05-05 10:07:06', '2023-05-05 10:07:06'),
(12, 1, 15, 12, '2023-05-05 21:06:47', '2023-05-05 21:06:47'),
(13, 2, 16, 12, '2023-05-05 21:06:47', '2023-05-05 21:06:47'),
(14, 1, 17, 12, '2023-05-05 21:06:47', '2023-05-05 21:06:47'),
(15, 2, 18, 12, '2023-05-05 21:06:47', '2023-05-05 21:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `polycompetences`
--

CREATE TABLE `polycompetences` (
  `id` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `employe_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polycompetences`
--

INSERT INTO `polycompetences` (`id`, `valeur`, `employe_id`, `created`, `modified`) VALUES
(1, 56.254, 1, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(2, 38.3463, 4, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(3, 43.333, 7, '2023-05-05 16:12:13', '2023-05-05 16:12:13'),
(4, 67.325, 10, '2023-05-05 16:12:13', '2023-05-05 16:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `polyvalences`
--

CREATE TABLE `polyvalences` (
  `id` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `matricecompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polyvalences`
--

INSERT INTO `polyvalences` (`id`, `valeur`, `matricecompetence_id`, `created`, `modified`) VALUES
(1, 62.5, 1, '2023-05-07 19:11:35', '2023-05-07 19:11:35'),
(2, 40, 2, '2023-05-07 19:12:18', '2023-05-07 19:12:18'),
(3, 56.25, 3, '2023-05-07 19:12:20', '2023-05-07 19:12:20'),
(4, 33.75, 4, '2023-05-07 19:12:21', '2023-05-07 19:12:21'),
(5, 17.5, 5, '2023-05-07 19:12:22', '2023-05-07 19:12:22'),
(6, 31.25, 6, '2023-05-07 19:12:24', '2023-05-07 19:12:24'),
(7, 52.5, 7, '2023-05-07 19:12:25', '2023-05-07 19:12:25'),
(8, 50, 8, '2023-05-07 19:12:26', '2023-05-07 19:12:26'),
(9, 52.5, 9, '2023-05-07 19:12:27', '2023-05-07 19:12:27'),
(10, 50, 10, '2023-05-07 19:12:29', '2023-05-07 19:12:29'),
(11, 42.5, 11, '2023-05-07 19:12:30', '2023-05-07 19:12:30'),
(12, 37.5, 12, '2023-05-07 19:12:34', '2023-05-07 19:12:34'),
(13, 68.75, 13, '2023-05-07 19:12:34', '2023-05-07 19:12:34'),
(14, 56.25, 14, '2023-05-07 19:12:35', '2023-05-07 19:12:35'),
(15, 50, 15, '2023-05-07 19:12:36', '2023-05-07 19:12:36'),
(16, 50, 16, '2023-05-07 19:12:48', '2023-05-07 19:12:48');

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
(2, 'Responsable marketing ', 0, '2023-03-27 12:30:24', '2023-03-27 12:30:24'),
(3, 'Responsable ressource humaine ', 0, '2023-03-27 12:31:16', '2023-03-27 12:31:16');

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
(1, 'ttte', 0, '2023-05-10 09:54:05', '2023-05-10 09:54:05'),
(2, 'ingenieur', 0, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(3, 't', 0, '2023-05-10 10:03:53', '2023-05-10 10:03:53');

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
-- Table structure for table `souscompetences`
--

CREATE TABLE `souscompetences` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `formcompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `souscompetences`
--

INSERT INTO `souscompetences` (`id`, `label`, `formcompetence_id`, `created`, `modified`) VALUES
(1, '', 1, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(2, 'souscomp2', 2, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(3, 'soucomp3-1', 3, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(4, 'soucomp3-2', 3, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(5, 'soucomp3-3', 3, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(6, 'soucomp3-4', 3, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(7, 'soucomp3-5', 3, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(8, 'soucomp3-6', 3, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(9, 'soucomp3-7', 3, '2023-05-10 10:02:04', '2023-05-10 10:02:04'),
(10, '', 4, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(11, 't', 5, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(12, 't', 6, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(13, 't', 6, '2023-05-10 10:03:53', '2023-05-10 10:03:53'),
(14, 't', 6, '2023-05-10 10:03:53', '2023-05-10 10:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `testtechniques`
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
-- Table structure for table `totalpolycompetences`
--

CREATE TABLE `totalpolycompetences` (
  `id` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `totalpolycompetences`
--

INSERT INTO `totalpolycompetences` (`id`, `valeur`, `created`, `modified`) VALUES
(1, 51.3146, '2023-05-07 20:06:40', '2023-05-07 22:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `totalpolyvalences`
--

CREATE TABLE `totalpolyvalences` (
  `id` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `totalpolyvalences`
--

INSERT INTO `totalpolyvalences` (`id`, `valeur`, `created`, `modified`) VALUES
(1, 46.9531, '2023-05-07 19:50:02', '2023-05-07 22:25:40');

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
-- Indexes for table `echelleevaluations`
--
ALTER TABLE `echelleevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
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
-- Indexes for table `indicasoucompas`
--
ALTER TABLE `indicasoucompas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indicateursuivis`
--
ALTER TABLE `indicateursuivis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matricecompetences`
--
ALTER TABLE `matricecompetences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrices`
--
ALTER TABLE `matrices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niveauvises`
--
ALTER TABLE `niveauvises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pointindicasous`
--
ALTER TABLE `pointindicasous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pointindicateurs`
--
ALTER TABLE `pointindicateurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polycompetences`
--
ALTER TABLE `polycompetences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polyvalences`
--
ALTER TABLE `polyvalences`
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
-- Indexes for table `souscompetences`
--
ALTER TABLE `souscompetences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testtechniques`
--
ALTER TABLE `testtechniques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themeformations`
--
ALTER TABLE `themeformations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totalpolycompetences`
--
ALTER TABLE `totalpolycompetences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totalpolyvalences`
--
ALTER TABLE `totalpolyvalences`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `echelleevaluations`
--
ALTER TABLE `echelleevaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `indicasoucompas`
--
ALTER TABLE `indicasoucompas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `indicateursuivis`
--
ALTER TABLE `indicateursuivis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `matricecompetences`
--
ALTER TABLE `matricecompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `matrices`
--
ALTER TABLE `matrices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `niveauvises`
--
ALTER TABLE `niveauvises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pointindicasous`
--
ALTER TABLE `pointindicasous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pointindicateurs`
--
ALTER TABLE `pointindicateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `polycompetences`
--
ALTER TABLE `polycompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `polyvalences`
--
ALTER TABLE `polyvalences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `postes`
--
ALTER TABLE `postes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profilpostes`
--
ALTER TABLE `profilpostes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `souscompetences`
--
ALTER TABLE `souscompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testtechniques`
--
ALTER TABLE `testtechniques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `themeformations`
--
ALTER TABLE `themeformations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `totalpolycompetences`
--
ALTER TABLE `totalpolycompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `totalpolyvalences`
--
ALTER TABLE `totalpolyvalences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
