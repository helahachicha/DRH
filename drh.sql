-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 03:03 PM
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
  `formcompetence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indicateursuivis`
--

INSERT INTO `indicateursuivis` (`id`, `label`, `formcompetence_id`, `created`, `modified`) VALUES
(1, 'indi1', 1, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(2, 'indi2', 1, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(3, 'indi3', 2, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(4, 'indi4', 3, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(5, 'indi5', 4, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(6, 'indi6', 4, '2023-04-05 11:08:42', '2023-04-05 11:08:42'),
(7, 'Ingénieur dev', 5, '2023-04-05 12:55:05', '2023-04-05 12:55:05'),
(8, 'Ingénieur dev', 5, '2023-04-05 12:55:05', '2023-04-05 12:55:05'),
(9, 'Ingénieur dev', 6, '2023-04-05 12:55:05', '2023-04-05 12:55:05'),
(10, 'Ingénieur dev', 7, '2023-04-05 12:55:05', '2023-04-05 12:55:05'),
(11, 'Ingénieur dev', 8, '2023-04-05 12:55:05', '2023-04-05 12:55:05');

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
(1, 'Ghaddhab Bilel', 'test', 'test', 'test', 1, '2023-03-30 22:20:26', '2023-03-30 22:20:26'),
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
-- Table structure for table `souscompetences`
--

CREATE TABLE `souscompetences` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `competence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `souscompetences`
--

INSERT INTO `souscompetences` (`id`, `label`, `competence_id`, `created`, `modified`) VALUES
(1, 'GESTION DE TEMPS & PRIORITÉS', 2, '2023-03-31 12:28:51', '2023-03-31 12:28:51'),
(2, 'GEEK', 3, '2023-03-31 12:28:51', '2023-03-31 12:28:51'),
(3, 'AUTODÉTERMINATION ', 3, '2023-03-31 12:28:51', '2023-03-31 12:28:51'),
(4, 'POSITIVITÉ', 3, '2023-03-31 12:28:51', '2023-03-31 12:28:51'),
(5, 'COMMUNICATION INTERACTIVE EFFICACE', 3, '2023-03-31 12:28:51', '2023-03-31 12:28:51'),
(6, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 3, '2023-03-31 12:28:51', '2023-03-31 12:28:51'),
(7, 'RÉSOLUTION DE PROBLÈMES', 3, '2023-03-31 12:28:51', '2023-03-31 12:28:51'),
(8, 'SERVICES D’EXCELLENCE  ', 3, '2023-03-31 12:28:51', '2023-03-31 12:28:51'),
(9, 'CT', 1, '2023-03-31 12:28:51', '2023-03-31 12:28:51'),
(10, 'CT', 4, '2023-03-31 12:32:28', '2023-03-31 12:32:28'),
(11, 'GESTION DE TEMPS & PRIORITÉS', 5, '2023-03-31 12:32:28', '2023-03-31 12:32:28'),
(12, 'Autonomie', 6, '2023-03-31 12:32:28', '2023-03-31 12:32:28'),
(13, 'COMMUNICATION INTERACTIVE EFFICACE', 6, '2023-03-31 12:32:28', '2023-03-31 12:32:28'),
(14, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 6, '2023-03-31 12:32:28', '2023-03-31 12:32:28'),
(15, 'RÉSOLUTION DES PROBLÈMES', 6, '2023-03-31 12:32:28', '2023-03-31 12:32:28'),
(16, 'SERVICE D’EXCELLENCE ', 6, '2023-03-31 12:32:28', '2023-03-31 12:32:28'),
(17, 'RAISONNEMENT CONCEPTUEL ', 6, '2023-03-31 12:32:28', '2023-03-31 12:32:28'),
(18, 'CT', 7, '2023-03-31 12:47:08', '2023-03-31 12:47:08'),
(19, 'GESTION DE TEMPS & PRIORITÉS', 8, '2023-03-31 12:47:08', '2023-03-31 12:47:08'),
(20, 'COMMUNICATION INTERACTIVE EFFICACE', 9, '2023-03-31 12:47:08', '2023-03-31 12:47:08'),
(21, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 9, '2023-03-31 12:47:08', '2023-03-31 12:47:08'),
(22, 'RÉSOLUTION DES PROBLÈMES', 9, '2023-03-31 12:47:08', '2023-03-31 12:47:08'),
(23, 'SERVICE D’EXCELLENCE ', 9, '2023-03-31 12:47:08', '2023-03-31 12:47:08'),
(24, 'RAISONNEMENT CONCEPTUEL ', 9, '2023-03-31 12:47:08', '2023-03-31 12:47:08'),
(25, 'LEADERSHIP', 9, '2023-03-31 12:47:08', '2023-03-31 12:47:08'),
(26, 'CT', 10, '2023-03-31 12:58:30', '2023-03-31 12:58:30'),
(27, 'GESTION DE TEMPS & PRIORITÉS', 11, '2023-03-31 12:58:30', '2023-03-31 12:58:30'),
(28, 'COMMUNICATION INTERACTIVE EFFICACE', 12, '2023-03-31 12:58:30', '2023-03-31 12:58:30'),
(29, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 12, '2023-03-31 12:58:30', '2023-03-31 12:58:30'),
(30, 'RÉSOLUTION DES PROBLÈMES', 12, '2023-03-31 12:58:30', '2023-03-31 12:58:30'),
(31, 'RAISONNEMENT ANALYTIQUE ', 12, '2023-03-31 12:58:30', '2023-03-31 12:58:30'),
(32, 'LEADERSHIP', 12, '2023-03-31 12:58:30', '2023-03-31 12:58:30'),
(33, 'SOUTIEN AU DÉVELOPPEMENT DES AUTRES', 12, '2023-03-31 12:58:30', '2023-03-31 12:58:30');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `souscompetences`
--
ALTER TABLE `souscompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
