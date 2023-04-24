-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 12:47 PM
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
(1, 'Ingénieur Recherche & Développement', 1, 1, 'Gérant', 'Développeur confirmé', 'Développeur confirmé', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jaweher KHMIRI', 'Hayet  BEN SALEM', 'Rochdi ABID', '2023-04-05 23:24:36', '2023-04-05 23:24:36'),
(2, 'Ingénieur Recherche & Développement', 2, 1, 'Gérant', 'Développeur Senior', 'Développeur Senior', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', '2023-04-05 23:27:20', '2023-04-05 23:27:20'),
(3, 'Ingénieur Recherche & Développement', 3, 1, 'Gérant', 'Référant technique', 'Référant technique', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', '2023-04-05 23:27:20', '2023-04-05 23:27:20'),
(4, 'Ingénieur Recherche & Développement', 4, 1, 'Gérant', 'Référant technique', 'Référant technique', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jawaher KHMIRI', 'Hayet BEN SALEM', 'Rochdi ABID', '2023-04-05 23:30:22', '2023-04-05 23:30:22'),
(5, 'test', 1, 3, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:19:36', '2023-04-15 08:19:36'),
(6, 'test', 1, 4, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:24:14', '2023-04-15 08:24:14'),
(7, 'test', 1, 5, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:25:52', '2023-04-15 08:25:52'),
(8, 'test', 1, 6, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:26:27', '2023-04-15 08:26:27'),
(9, 'test', 1, 7, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:26:53', '2023-04-15 08:26:53'),
(10, 'test', 1, 8, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:27:14', '2023-04-15 08:27:14'),
(11, 'test', 1, 9, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:29:00', '2023-04-15 08:29:00'),
(12, 'test', 1, 10, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:29:32', '2023-04-15 08:29:32'),
(13, 'test', 1, 11, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:30:33', '2023-04-15 08:30:33'),
(14, 'test', 1, 12, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:31:11', '2023-04-15 08:31:11'),
(15, 'test', 1, 13, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:31:43', '2023-04-15 08:31:43'),
(16, 'test', 1, 14, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:33:25', '2023-04-15 08:33:25'),
(17, 'test', 1, 15, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:33:55', '2023-04-15 08:33:55'),
(18, 'test', 1, 16, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:34:58', '2023-04-15 08:34:58'),
(19, 'test', 1, 17, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:35:40', '2023-04-15 08:35:40'),
(20, 'test', 1, 18, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:35:52', '2023-04-15 08:35:52'),
(21, 'test', 1, 19, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:37:05', '2023-04-15 08:37:05'),
(22, 'test', 1, 20, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:37:17', '2023-04-15 08:37:17'),
(23, 'test', 1, 21, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-15 08:38:27', '2023-04-15 08:38:27'),
(24, 'test', 2, 22, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:18:00', '2023-04-17 13:18:00'),
(25, 'test', 2, 23, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:22:34', '2023-04-17 13:22:34'),
(26, 'test', 2, 24, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:23:49', '2023-04-17 13:23:49'),
(27, 'test', 2, 25, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:24:20', '2023-04-17 13:24:20'),
(28, 'test', 2, 26, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:24:41', '2023-04-17 13:24:41'),
(29, 'test', 2, 27, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:25:15', '2023-04-17 13:25:15'),
(30, 'test', 2, 28, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:25:26', '2023-04-17 13:25:26'),
(31, 'test', 2, 29, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:26:09', '2023-04-17 13:26:09'),
(32, 'test', 2, 30, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:26:52', '2023-04-17 13:26:52'),
(33, 'test', 2, 31, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:27:03', '2023-04-17 13:27:03'),
(34, 'test', 2, 32, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:27:25', '2023-04-17 13:27:25'),
(35, 'test', 2, 33, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:27:59', '2023-04-17 13:27:59'),
(36, 'test', 2, 34, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:29:01', '2023-04-17 13:29:01'),
(37, 'test', 2, 35, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-04-17 13:30:03', '2023-04-17 13:30:03'),
(38, 'ttttttttt', 2, 36, 'tttt', 'ttt', 'ttt', 't', 't', 't', 't', 't', 't', '2023-04-17 13:31:56', '2023-04-17 13:31:56'),
(39, 'ttttttttt', 2, 37, 'tttt', 'ttt', 'ttt', 't', 't', 't', 't', 't', 't', '2023-04-17 13:38:53', '2023-04-17 13:38:53'),
(40, 'ttttttttt', 2, 38, 'tttt', 'ttt', 'ttt', 't', 't', 't', 't', 't', 't', '2023-04-17 13:40:20', '2023-04-17 13:40:20'),
(41, 'test', 1, 39, 'test', 'test', 'test', 't', 't', 't', 't', 't', 't', '2023-04-18 09:06:03', '2023-04-18 09:06:03'),
(42, 'test', 1, 40, 'test', 'test', 'test', 't', 't', 't', 't', 't', 't', '2023-04-18 09:06:10', '2023-04-18 09:06:10'),
(43, 'test', 1, 41, 'test', 'test', 'test', 't', 't', 't', 't', 't', 't', '2023-04-18 09:06:58', '2023-04-18 09:06:58'),
(44, 'test', 1, 42, 'test', 'test', 'test', 't', 't', 't', 't', 't', 't', '2023-04-18 09:07:37', '2023-04-18 09:07:37'),
(45, 'test', 1, 43, 'test', 'test', 'test', 't', 't', 't', 't', 't', 't', '2023-04-18 09:08:07', '2023-04-18 09:08:07'),
(46, 'test', 1, 44, 'test', 'test', 'test', 't', 't', 't', 't', 't', 't', '2023-04-18 09:08:35', '2023-04-18 09:08:35'),
(47, 'test', 1, 45, 'test', 'test', 'test', 't', 't', 't', 't', 't', 't', '2023-04-18 09:14:52', '2023-04-18 09:14:52'),
(48, 'test', 1, 46, 'test', 'test', 'test', 't', 't', 't', 't', 't', 't', '2023-04-18 09:15:13', '2023-04-18 09:15:13'),
(49, 'test', 1, 47, 'test', 'test', 'test', 't', 't', 't', 't', 't', 't', '2023-04-18 09:16:34', '2023-04-18 09:16:34'),
(50, 'Ingénieur Recherche & Développement', 1, 1, 'Gérant', 'Développeur confirmé', 'Développeur confirmé', 'Responsable développement RH', 'Responsable Qualité', 'Gérant', 'Jaweher KHMIRI', 'Hayet  BEN SALEM', 'Rochdi ABID', '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(51, 'sdf', 2, 2, 'fd', 'sfdsf', 'fdsf', 'gfg', 'fgfg', 'fgfg', 'ffgf', 'fggf', 'fgfgfg', '2023-04-18 09:59:13', '2023-04-18 09:59:13'),
(52, 'sdf', 2, 3, 'fd', 'sfdsf', 'fdsf', 'gfg', 'fgfg', 'fgfg', 'ffgf', 'fggf', 'fgfgfg', '2023-04-18 09:59:29', '2023-04-18 09:59:29'),
(53, 'sdf', 2, 4, 'fd', 'sfdsf', 'fdsf', 'gfg', 'fgfg', 'fgfg', 'ffgf', 'fggf', 'fgfgfg', '2023-04-18 09:59:44', '2023-04-18 09:59:44'),
(54, 'sdf', 2, 5, 'fd', 'sfdsf', 'fdsf', 'gfg', 'fgfg', 'fgfg', 'ffgf', 'fggf', 'fgfgfg', '2023-04-18 10:00:36', '2023-04-18 10:00:36'),
(55, 'tttttt', 3, 6, 'ttttttttttttttttttttt', 'ttttttttttttttttttt', 'ttttttttttttttt', 'tttttttttttttttttttttttt', 'nhgd,njxfgh,nj', 'jh,jh', 'tttttttttttttttttttttttt', 'nsnhsftnj', 'ghj,', '2023-04-18 10:06:58', '2023-04-18 10:06:58');

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
  `categorie_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `nomprenom`, `categorie_id`, `created`, `modified`) VALUES
(1, 'bilel', 1, '2023-04-07 09:59:14', '2023-04-07 09:59:14'),
(2, 'chourouk', 1, '2023-04-07 09:59:14', '2023-04-07 09:59:14'),
(3, 'hela', 2, '2023-04-07 09:59:32', '2023-04-07 09:59:32');

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
(33, 3, 'SOUTIEN AU DÉVELOPPEMENT DES AUTRES', 4, 4, '2023-04-05 23:52:04', '2023-04-05 23:52:04'),
(34, 1, '', 1, 5, '2023-04-15 08:19:36', '2023-04-15 08:19:36'),
(35, 1, '', 1, 6, '2023-04-15 08:24:14', '2023-04-15 08:24:14'),
(36, 2, '', 1, 6, '2023-04-15 08:24:14', '2023-04-15 08:24:14'),
(37, 3, '', 1, 6, '2023-04-15 08:24:14', '2023-04-15 08:24:14'),
(38, 1, '', 1, 7, '2023-04-15 08:25:52', '2023-04-15 08:25:52'),
(39, 2, '', 1, 7, '2023-04-15 08:25:52', '2023-04-15 08:25:52'),
(40, 3, '', 1, 7, '2023-04-15 08:25:52', '2023-04-15 08:25:52'),
(41, 1, '', 1, 8, '2023-04-15 08:26:27', '2023-04-15 08:26:27'),
(42, 1, '', 1, 9, '2023-04-15 08:26:53', '2023-04-15 08:26:53'),
(43, 1, '', 1, 10, '2023-04-15 08:27:14', '2023-04-15 08:27:14');

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
(1, 'Fournir une réponse claire & logique aux questions ou préoccupations.', 7, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(2, 'Fournir un service, y compris des renseignements utiles ou une aide, conforme aux normes de service et aux lignes directrices pertinentes.', 7, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(3, '', 8, '2023-04-18 09:59:45', '2023-04-18 09:59:45'),
(4, '', 9, '2023-04-18 10:00:36', '2023-04-18 10:00:36'),
(5, '', 10, '2023-04-18 10:06:58', '2023-04-18 10:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `indicateursuivis`
--

CREATE TABLE `indicateursuivis` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `competence_id` int(11) NOT NULL,
  `niveauvise_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indicateursuivis`
--

INSERT INTO `indicateursuivis` (`id`, `label`, `competence_id`, `niveauvise_id`, `created`, `modified`) VALUES
(1, 'Compétence algorithmique niveau élevé  ', 1, 1, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(2, 'Connaissance de l’architecture de développement Orientée Objet ', 1, 1, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(3, 'Une bonne maîtrise du SQL  ', 1, 1, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(4, '', 3, 1, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(5, 'ffgf', 3, 2, '2023-04-18 09:59:44', '2023-04-18 09:59:44'),
(6, 'fgf', 3, 2, '2023-04-18 09:59:44', '2023-04-18 09:59:44'),
(7, 'fgff', 3, 2, '2023-04-18 09:59:44', '2023-04-18 09:59:44'),
(8, 'ffgf', 3, 2, '2023-04-18 10:00:36', '2023-04-18 10:00:36'),
(9, 'fgf', 3, 2, '2023-04-18 10:00:36', '2023-04-18 10:00:36'),
(10, 'fgff', 3, 2, '2023-04-18 10:00:36', '2023-04-18 10:00:36'),
(11, 'ttttttttttttttttttttt', 1, 1, '2023-04-18 10:06:58', '2023-04-18 10:06:58'),
(12, 'tttttttttttttttttttttttttttttttt', 1, 1, '2023-04-18 10:06:58', '2023-04-18 10:06:58'),
(13, 'tttttttttttttttttttttttttttttttttttttt', 3, 1, '2023-04-18 10:06:58', '2023-04-18 10:06:58'),
(14, 'tttttttttttttttttttttt', 3, 1, '2023-04-18 10:06:58', '2023-04-18 10:06:58'),
(15, 'ttttttttttttttttttttttttttt', 3, 1, '2023-04-18 10:06:58', '2023-04-18 10:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `infoficheevaluations`
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
-- Dumping data for table `infoficheevaluations`
--

INSERT INTO `infoficheevaluations` (`id`, `objetevaluation`, `dateevaluation`, `decisiondirection`, `employe_id`, `created`, `modified`) VALUES
(1, 'test', 'test', 'test', 1, '2023-03-30 22:20:26', '2023-03-30 22:20:26'),
(2, 'test', 'test', 'test', 1, '2023-04-03 10:59:45', '2023-04-03 10:59:45');

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
(19, 'Connaissance de l’architecture de développement orienté objet \r\n', 'OO\r\n', '2023-04-08 17:51:32', '2023-04-08 17:51:32'),
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
(38, 'Certification système de management qualité ISO 20000 Technologies de l’information dernière version\r\n ', '', '2023-04-08 17:55:56', '2023-04-08 17:55:56'),
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
(50, 'Conseiller à propos l’évolution des normes et des pratiques comptables\r\n', '', '2023-04-08 17:58:19', '2023-04-08 17:58:19');

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
(1, 'A+', 1, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(2, 'A+', 2, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(3, 'B', 3, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(4, 'A+', 4, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(5, 'B', 5, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(6, 'B', 6, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(7, 'B', 7, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(8, 'D', 8, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(9, 'A+', 9, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(10, 'B', 10, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(11, 'B', 11, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(12, 'B', 12, 1, '2023-04-10 10:16:24', '2023-04-10 10:16:24'),
(13, 'A+', 1, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(14, 'A+', 2, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(15, 'A+', 3, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(16, 'A+', 4, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(17, 'A+', 5, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(18, 'A', 6, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(19, 'B', 7, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(20, 'B', 8, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(21, 'B', 9, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(22, 'B', 10, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(23, 'D', 11, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(24, 'C', 12, 2, '2023-04-10 12:22:30', '2023-04-10 12:22:30'),
(25, 'A+', 1, 3, '2023-04-10 15:42:47', '2023-04-10 15:42:47'),
(26, 'A+', 1, 4, '2023-04-10 15:42:47', '2023-04-10 15:42:47'),
(27, 'B', 1, 5, '2023-04-10 15:42:47', '2023-04-10 15:42:47'),
(28, 'A+', 1, 6, '2023-04-10 15:42:47', '2023-04-10 15:42:47'),
(29, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(30, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(31, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(32, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(33, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(34, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(35, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(36, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(37, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(38, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(39, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(40, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(41, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(42, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(43, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(44, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(45, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(46, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(47, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(48, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(49, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(50, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(51, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(52, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(53, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(54, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(55, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(56, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(57, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(58, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(59, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(60, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(61, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(62, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(63, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(64, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(65, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(66, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(67, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(68, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(69, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(70, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(71, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(72, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(73, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(74, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(75, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(76, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(77, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(78, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(79, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(80, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(81, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(82, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(83, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(84, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(85, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(86, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(87, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(88, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(89, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(90, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(91, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(92, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(93, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(94, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(95, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(96, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(97, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(98, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(99, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(100, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(101, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(102, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(103, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(104, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(105, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(106, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(107, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(108, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(109, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(110, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(111, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(112, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(113, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(114, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(115, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(116, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(117, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(118, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(119, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(120, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(121, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(122, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(123, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(124, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(125, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(126, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(127, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(128, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(129, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(130, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(131, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(132, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(133, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(134, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(135, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(136, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(137, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(138, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(139, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(140, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(141, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(142, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(143, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(144, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(145, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(146, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(147, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(148, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(149, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(150, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(151, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(152, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(153, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(154, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(155, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(156, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(157, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(158, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(159, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(160, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(161, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(162, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(163, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(164, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(165, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(166, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(167, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(168, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(169, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(170, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(171, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(172, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(173, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(174, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(175, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(176, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(177, '', 0, 0, '2023-04-15 10:31:27', '2023-04-15 10:31:27'),
(178, '', 0, 0, '2023-04-15 10:31:28', '2023-04-15 10:31:28'),
(179, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(180, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(181, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(182, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(183, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(184, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(185, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(186, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(187, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(188, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(189, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(190, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(191, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(192, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(193, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(194, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(195, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(196, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(197, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(198, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(199, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(200, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(201, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(202, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(203, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(204, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(205, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(206, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(207, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(208, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(209, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(210, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(211, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(212, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(213, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(214, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(215, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(216, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(217, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(218, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(219, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(220, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(221, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(222, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(223, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(224, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(225, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(226, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(227, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(228, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(229, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(230, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(231, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(232, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(233, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(234, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(235, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(236, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(237, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(238, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(239, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(240, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(241, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(242, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(243, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(244, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(245, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(246, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(247, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(248, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(249, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(250, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(251, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(252, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(253, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(254, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(255, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(256, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(257, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(258, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(259, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(260, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(261, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(262, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(263, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(264, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(265, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(266, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(267, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(268, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(269, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(270, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(271, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(272, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(273, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(274, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(275, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(276, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(277, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(278, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(279, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(280, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(281, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(282, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(283, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(284, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(285, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(286, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(287, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(288, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(289, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(290, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(291, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(292, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(293, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(294, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(295, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(296, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(297, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(298, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(299, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(300, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(301, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(302, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(303, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(304, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(305, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(306, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(307, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(308, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(309, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(310, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(311, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(312, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(313, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(314, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(315, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(316, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(317, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(318, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(319, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(320, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(321, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(322, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(323, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(324, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(325, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(326, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(327, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05'),
(328, '', 0, 0, '2023-04-17 13:08:05', '2023-04-17 13:08:05');

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
  `point_id` int(11) NOT NULL,
  `indicateursuivi_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noteevaluations`
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
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `label` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `label`, `created`, `modified`) VALUES
(1, 0, '2023-04-07 12:14:02', '2023-04-07 12:14:02'),
(2, 1, '2023-04-07 12:14:02', '2023-04-07 12:14:02');

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
(1, 91.6667, 1, '2023-04-11 07:29:14', '2023-04-11 07:29:14');

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
(1, 63.3333, 1, '2023-04-10 13:26:19', '2023-04-11 00:15:51'),
(2, 67.5, 2, '2023-04-10 13:30:17', '2023-04-10 13:30:17');

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
(1, 'Dévloppeur', 0, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(2, 'ffzsq', 0, '2023-04-18 09:59:13', '2023-04-18 09:59:13'),
(3, 'ffzsq', 0, '2023-04-18 09:59:29', '2023-04-18 09:59:29'),
(4, 'ffzsq', 0, '2023-04-18 09:59:44', '2023-04-18 09:59:44'),
(5, 'ffzsq', 0, '2023-04-18 10:00:36', '2023-04-18 10:00:36'),
(6, 'tttttttttttttt', 0, '2023-04-18 10:06:58', '2023-04-18 10:06:58');

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
  `competence_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `souscompetences`
--

INSERT INTO `souscompetences` (`id`, `label`, `competence_id`, `created`, `modified`) VALUES
(1, 'GEEK', 3, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(2, 'AUTODÉTERMINATION ', 3, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(3, 'POSITIVITÉ', 3, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(4, 'COMMUNICATION INTERACTIVE EFFICACE', 3, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(5, 'TRAVAIL EN ÉQUIPE & COLLABORATION ', 3, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(6, 'RÉSOLUTION DE PROBLÈMES', 3, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(7, 'SERVICES D’EXCELLENCE  ', 3, '2023-04-18 09:43:46', '2023-04-18 09:43:46'),
(8, '', 3, '2023-04-18 09:59:44', '2023-04-18 09:59:44'),
(9, '', 3, '2023-04-18 10:00:36', '2023-04-18 10:00:36'),
(10, '', 3, '2023-04-18 10:06:58', '2023-04-18 10:06:58');

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
(1, 91.6667, '2023-04-11 07:27:47', '2023-04-11 07:29:35');

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
(1, 65.4167, '2023-04-11 00:11:23', '2023-04-11 00:11:23');

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
-- Indexes for table `infoficheevaluations`
--
ALTER TABLE `infoficheevaluations`
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
-- Indexes for table `noteevaluations`
--
ALTER TABLE `noteevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `echelleevaluations`
--
ALTER TABLE `echelleevaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `indicasoucompas`
--
ALTER TABLE `indicasoucompas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `indicateursuivis`
--
ALTER TABLE `indicateursuivis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `infoficheevaluations`
--
ALTER TABLE `infoficheevaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matricecompetences`
--
ALTER TABLE `matricecompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `matrices`
--
ALTER TABLE `matrices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `niveauvises`
--
ALTER TABLE `niveauvises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `noteevaluations`
--
ALTER TABLE `noteevaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `polycompetences`
--
ALTER TABLE `polycompetences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `polyvalences`
--
ALTER TABLE `polyvalences`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
