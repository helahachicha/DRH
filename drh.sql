-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 mars 2023 à 10:17
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
-- Structure de la table `enfantsfrs`
--

CREATE TABLE `enfantsfrs` (
  `id` int(11) NOT NULL,
  `ordreen` int(11) NOT NULL,
  `prenomen` varchar(255) NOT NULL,
  `datenaien` date NOT NULL,
  `niveauetudeen` varchar(255) NOT NULL,
  `centreintereten` varchar(255) NOT NULL,
  `etatsanteen` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `enfantsfrs`
--

INSERT INTO `enfantsfrs` (`id`, `ordreen`, `prenomen`, `datenaien`, `niveauetudeen`, `centreintereten`, `etatsanteen`, `created`, `modified`) VALUES
(1, 1, 'test', '2023-03-09', 'test', 'test', 'test', '2023-03-16 14:26:56', '2023-03-16 14:26:56');

-- --------------------------------------------------------

--
-- Structure de la table `expproffrs`
--

CREATE TABLE `expproffrs` (
  `id` int(11) NOT NULL,
  `societeex` varchar(255) NOT NULL,
  `duauex` varchar(255) NOT NULL,
  `fonctionex` varchar(255) NOT NULL,
  `inidiffex` varchar(255) NOT NULL,
  `salaireex` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `expproffrs`
--

INSERT INTO `expproffrs` (`id`, `societeex`, `duauex`, `fonctionex`, `inidiffex`, `salaireex`, `created`, `modified`) VALUES
(1, 'test', '2018-2022', 'test', 'test', '500dt', '2023-03-16 14:44:44', '2023-03-16 14:44:44');

-- --------------------------------------------------------

--
-- Structure de la table `fecomminteras`
--

CREATE TABLE `fecomminteras` (
  `id` int(11) NOT NULL,
  `numeroci` int(11) NOT NULL,
  `indimesureci` varchar(255) NOT NULL,
  `pointsci` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fecomminteras`
--

INSERT INTO `fecomminteras` (`id`, `numeroci`, `indimesureci`, `pointsci`, `created`, `modified`) VALUES
(1, 5, 'test', 6, '2023-03-20 13:51:36', '2023-03-20 13:51:36');

-- --------------------------------------------------------

--
-- Structure de la table `fecomporganisations`
--

CREATE TABLE `fecomporganisations` (
  `id` int(11) NOT NULL,
  `numeroco` int(11) NOT NULL,
  `indimesureco` varchar(255) NOT NULL,
  `pointsco` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fecomporganisations`
--

INSERT INTO `fecomporganisations` (`id`, `numeroco`, `indimesureco`, `pointsco`, `created`, `modified`) VALUES
(1, 1, 'test', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `ficherenseignements`
--

CREATE TABLE `ficherenseignements` (
  `id` int(11) NOT NULL,
  `datefr` date NOT NULL,
  `npagefr` int(11) NOT NULL,
  `nomprenomfr` varchar(255) NOT NULL,
  `adressefr` varchar(255) NOT NULL,
  `telprofefr` int(11) NOT NULL,
  `telpersofr` int(11) NOT NULL,
  `cantactcasurgfr` int(11) NOT NULL,
  `mailprofefr` varchar(255) NOT NULL,
  `mailpersfr` varchar(255) NOT NULL,
  `servicetrafr` varchar(255) NOT NULL,
  `postefr` varchar(255) NOT NULL,
  `datenaifr` date NOT NULL,
  `lieufr` varchar(255) NOT NULL,
  `nationalitefr` varchar(255) NOT NULL,
  `ncinfr` int(11) NOT NULL,
  `ncindelivreefr` varchar(255) NOT NULL,
  `ncinlefr` date NOT NULL,
  `ouipermisfr` varchar(255) NOT NULL,
  `tempsdotramfr` int(11) NOT NULL,
  `tempsdotrahfr` int(11) NOT NULL,
  `ouimdquandfr` varchar(255) NOT NULL,
  `ouisallesportfr` varchar(255) NOT NULL,
  `critereenfancefr` varchar(255) NOT NULL,
  `beaumomentfr` varchar(255) NOT NULL,
  `mauvaismometfr` varchar(255) NOT NULL,
  `pointforcefr` varchar(255) NOT NULL,
  `pointameliorefr` varchar(255) NOT NULL,
  `npepouxfr` varchar(255) NOT NULL,
  `datnaiepfr` date NOT NULL,
  `niveauetudepfr` varchar(255) NOT NULL,
  `fonctionepfr` varchar(255) NOT NULL,
  `salaireepfr` float NOT NULL,
  `etatepouxfr` varchar(255) NOT NULL,
  `specialitefr1` varchar(255) NOT NULL,
  `specialitefr2` varchar(255) NOT NULL,
  `specialitefr3` varchar(255) NOT NULL,
  `specialitefr4` varchar(255) NOT NULL,
  `anneefr1` year(4) NOT NULL,
  `anneefr2` year(4) NOT NULL,
  `anneefr3` year(4) NOT NULL,
  `anneefr4` year(4) NOT NULL,
  `etablissfr1` varchar(255) NOT NULL,
  `etablissfr2` varchar(255) NOT NULL,
  `etablissfr3` varchar(255) NOT NULL,
  `etablissfr4` varchar(255) NOT NULL,
  `ouiactbenefr` varchar(255) NOT NULL,
  `lieuactbenefr` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ficherenseignements`
--

INSERT INTO `ficherenseignements` (`id`, `datefr`, `npagefr`, `nomprenomfr`, `adressefr`, `telprofefr`, `telpersofr`, `cantactcasurgfr`, `mailprofefr`, `mailpersfr`, `servicetrafr`, `postefr`, `datenaifr`, `lieufr`, `nationalitefr`, `ncinfr`, `ncindelivreefr`, `ncinlefr`, `ouipermisfr`, `tempsdotramfr`, `tempsdotrahfr`, `ouimdquandfr`, `ouisallesportfr`, `critereenfancefr`, `beaumomentfr`, `mauvaismometfr`, `pointforcefr`, `pointameliorefr`, `npepouxfr`, `datnaiepfr`, `niveauetudepfr`, `fonctionepfr`, `salaireepfr`, `etatepouxfr`, `specialitefr1`, `specialitefr2`, `specialitefr3`, `specialitefr4`, `anneefr1`, `anneefr2`, `anneefr3`, `anneefr4`, `etablissfr1`, `etablissfr2`, `etablissfr3`, `etablissfr4`, `ouiactbenefr`, `lieuactbenefr`, `created`, `modified`) VALUES
(1, '2023-03-08', 3, 'bolbol', 'test', 23145654, 26352652, 25648563, 'test', 'test', 'test', 'test', '2023-03-01', 'test', 'test', 14029111, 'test', '2023-03-08', 'test', 2, 4, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-03-08', 'test', 'test', 500, 'test', 'test', 'test', 'test', 'test', 2022, 2023, 2024, 2025, 'test', 'test', 'test', 'test', 'test', 'test', '2023-03-17 09:15:28', '2023-03-17 09:15:28');

-- --------------------------------------------------------

--
-- Structure de la table `formacomplfrs`
--

CREATE TABLE `formacomplfrs` (
  `id` int(11) NOT NULL,
  `formationf` varchar(255) NOT NULL,
  `attestationf` varchar(255) NOT NULL,
  `anneef` year(4) NOT NULL,
  `etablissementf` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formacomplfrs`
--

INSERT INTO `formacomplfrs` (`id`, `formationf`, `attestationf`, `anneef`, `etablissementf`, `created`, `modified`) VALUES
(1, 'test', 'test', 2022, 'test', '2023-03-16 15:05:11', '2023-03-16 15:05:11');

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
(2, 'test', 'test', 'test', 22, 'test', 'test', 'test', 'bolbol', 'test', 'test', 25, 8, '2023-03-13 13:46:20', 'test', 'test', 'test', '2023-03-13 13:46:20', '2023-03-17 19:40:51');

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
  `datee` datetime NOT NULL,
  `hentrer` time NOT NULL,
  `hsortie` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formainternes`
--

INSERT INTO `formainternes` (`id`, `tycomp`, `themeforma`, `animateur`, `poste`, `datee`, `hentrer`, `hsortie`, `created`, `modified`) VALUES
(1, 'test', 'test', 'test', 'test', '2023-03-13 22:41:34', '00:00:14', '16h', '2023-03-13 22:41:34', '2023-03-13 22:41:34'),
(2, 'hhhhhh', 'hhhhhhh', 'hhhhh', 'hhhh', '2023-03-13 22:42:15', '00:00:12', '17h', '2023-03-13 22:42:15', '2023-03-13 22:42:15');

-- --------------------------------------------------------

--
-- Structure de la table `infogenconfimes`
--

CREATE TABLE `infogenconfimes` (
  `id` int(11) NOT NULL,
  `majndc` int(11) NOT NULL,
  `dudc` date NOT NULL,
  `Fonctiondc` varchar(255) NOT NULL,
  `categoriedc` varchar(255) NOT NULL,
  `Suphierdc` varchar(255) NOT NULL,
  `Superdc` varchar(255) NOT NULL,
  `interidc` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infogenconfimes`
--

INSERT INTO `infogenconfimes` (`id`, `majndc`, `dudc`, `Fonctiondc`, `categoriedc`, `Suphierdc`, `Superdc`, `interidc`, `created`, `modified`) VALUES
(1, 2, '2022-02-07', 'Ingénieur Recherche et Développement', 'Développeur Confirmé', 'Gérant', 'Développeur Senior', 'Développeur Senior', '2023-03-15 14:24:46', '2023-03-15 14:24:46');

-- --------------------------------------------------------

--
-- Structure de la table `infogenfpsychiques`
--

CREATE TABLE `infogenfpsychiques` (
  `id` int(11) NOT NULL,
  `nomprenom` varchar(255) NOT NULL,
  `dateevaluation` date NOT NULL,
  `objetevaluation` varchar(255) NOT NULL,
  `decisiondirection` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infogenfpsychiques`
--

INSERT INTO `infogenfpsychiques` (`id`, `nomprenom`, `dateevaluation`, `objetevaluation`, `decisiondirection`, `created`, `modified`) VALUES
(1, 'bolbol', '2023-03-01', 'bolbol', 'bolbol', '2023-03-17 16:01:37', '2023-03-17 16:01:37'),
(2, 'hamza', '2023-03-08', 'hamza', 'hamza', '2023-03-17 16:02:07', '2023-03-17 16:02:07');

-- --------------------------------------------------------

--
-- Structure de la table `infogenjuniors`
--

CREATE TABLE `infogenjuniors` (
  `id` int(11) NOT NULL,
  `majn` int(11) NOT NULL,
  `du` date NOT NULL,
  `Fonction` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Suphier` varchar(255) NOT NULL,
  `Super` varchar(255) NOT NULL,
  `Interim` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infogenjuniors`
--

INSERT INTO `infogenjuniors` (`id`, `majn`, `du`, `Fonction`, `Categorie`, `Suphier`, `Super`, `Interim`, `created`, `modified`) VALUES
(1, 1, '2022-02-07', 'Ingénieur Recherche & Développement', 'Développeur Junior', 'Gérant', 'Développeur confirmé', 'Développeur confirmé', '2023-03-15 10:07:55', '2023-03-15 10:56:04');

-- --------------------------------------------------------

--
-- Structure de la table `infogenseniors`
--

CREATE TABLE `infogenseniors` (
  `id` int(11) NOT NULL,
  `majnds` int(11) NOT NULL,
  `duds` date NOT NULL,
  `Fonctionds` varchar(255) NOT NULL,
  `Categorieds` varchar(255) NOT NULL,
  `Suphierds` varchar(255) NOT NULL,
  `Superds` varchar(255) NOT NULL,
  `Interimds` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infogenseniors`
--

INSERT INTO `infogenseniors` (`id`, `majnds`, `duds`, `Fonctionds`, `Categorieds`, `Suphierds`, `Superds`, `Interimds`, `created`, `modified`) VALUES
(1, 2, '2022-02-09', 'Ingénieur Recherche et Développement', 'Développeur Sénior', 'Gérant', 'Référant technique', 'Référant technique', '2023-03-15 16:00:54', '2023-03-15 16:00:54');

-- --------------------------------------------------------

--
-- Structure de la table `infogenteckleads`
--

CREATE TABLE `infogenteckleads` (
  `id` int(11) NOT NULL,
  `refdt` varchar(255) NOT NULL,
  `majndt` int(11) NOT NULL,
  `dudt` date NOT NULL,
  `Fonctiondt` varchar(255) NOT NULL,
  `Categoriedt` varchar(255) NOT NULL,
  `Suphierdt` varchar(255) NOT NULL,
  `Superdt` varchar(255) NOT NULL,
  `Interimdt` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infogenteckleads`
--

INSERT INTO `infogenteckleads` (`id`, `refdt`, `majndt`, `dudt`, `Fonctiondt`, `Categoriedt`, `Suphierdt`, `Superdt`, `Interimdt`, `created`, `modified`) VALUES
(1, '', 2, '2022-02-22', 'Ingénieur Recherche et Développement', 'Référant Technique', 'Gérant', 'Référant technique', 'Référant technique', '2023-03-16 10:02:22', '2023-03-16 10:02:22');

-- --------------------------------------------------------

--
-- Structure de la table `profilposteconfirmes`
--

CREATE TABLE `profilposteconfirmes` (
  `id` int(11) NOT NULL,
  `comptechdc` varchar(255) NOT NULL,
  `contenucomptechdc` varchar(255) NOT NULL,
  `comporgandc` varchar(255) NOT NULL,
  `gestempsdc` varchar(255) NOT NULL,
  `nvisegestempdc` varchar(255) NOT NULL,
  `isuivigestempdc` varchar(255) NOT NULL,
  `compcompordc` varchar(255) NOT NULL,
  `autonomiedc` varchar(255) NOT NULL,
  `comminteradc` varchar(255) NOT NULL,
  `nvisecomminteradc` varchar(255) NOT NULL,
  `isuivicomminteradc` varchar(255) NOT NULL,
  `tracolldc` varchar(255) NOT NULL,
  `nvisetracolldc` varchar(255) NOT NULL,
  `isuivitracolldc` varchar(255) NOT NULL,
  `resprobdc` varchar(255) NOT NULL,
  `nviseresprobdc` varchar(255) NOT NULL,
  `isuiviresprobdc` varchar(255) NOT NULL,
  `servexcelldc` varchar(255) NOT NULL,
  `nviseservexcelldc` varchar(255) NOT NULL,
  `isuiviservexcelldc` varchar(255) NOT NULL,
  `raisconcepdc` varchar(255) NOT NULL,
  `nviseraisconcepdc` varchar(255) NOT NULL,
  `isuiviraisconcepdc` varchar(255) NOT NULL,
  `droitdc` varchar(255) NOT NULL,
  `contenudroitdc` varchar(255) NOT NULL,
  `devoirdc` varchar(255) NOT NULL,
  `contenudevoirdc` varchar(255) NOT NULL,
  `validationdc` varchar(255) NOT NULL,
  `contenuvaliddc` varchar(255) NOT NULL,
  `fonctiondc` varchar(255) NOT NULL,
  `nompredc` varchar(255) NOT NULL,
  `fonctiondc1` varchar(255) NOT NULL,
  `nompredc1` varchar(255) NOT NULL,
  `fonctiondc2` varchar(255) NOT NULL,
  `nompredc2` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profilposteconfirmes`
--

INSERT INTO `profilposteconfirmes` (`id`, `comptechdc`, `contenucomptechdc`, `comporgandc`, `gestempsdc`, `nvisegestempdc`, `isuivigestempdc`, `compcompordc`, `autonomiedc`, `comminteradc`, `nvisecomminteradc`, `isuivicomminteradc`, `tracolldc`, `nvisetracolldc`, `isuivitracolldc`, `resprobdc`, `nviseresprobdc`, `isuiviresprobdc`, `servexcelldc`, `nviseservexcelldc`, `isuiviservexcelldc`, `raisconcepdc`, `nviseraisconcepdc`, `isuiviraisconcepdc`, `droitdc`, `contenudroitdc`, `devoirdc`, `contenudevoirdc`, `validationdc`, `contenuvaliddc`, `fonctiondc`, `nompredc`, `fonctiondc1`, `nompredc1`, `fonctiondc2`, `nompredc2`, `created`, `modified`) VALUES
(1, 'COMPÉTENCES TECHNIQUES', '- Maîtrise fonctionnel (Certification dans l’une des trois dernières versions)\r\n- Compétence technique (produit odoo) \r\n', 'COMPÉTENCES ORGANISATIONNELLES', 'GESTION DE TEMPS & PRIORITÉS', 'Niveau 2 – Actif : Gérer des priorités multiples ', '- Déterminer l’importance des tâches/activités, et passer rapidement et efficacement d’une tâche à l’autre\r\n- Veiller à accomplir le travail en utilisant des solutions efficaces\r\n', 'COMPÉTENCES COMPORTEMENTALES  ', '1. Autonomie', '2. COMMUNICATION INTERACTIVE EFFICACE', 'Niveau 2 – Actif: Vérifier la compréhension du message', '- Valider la compréhension du message par l’autre partie \r\n- Reconnaître les signes non verbaux et les utilise pour identifier les pensées ou les préoccupations non exprimées afin de répondre de façon appropriée\r\n- Utiliser des techniques de communication', '3. TRAVAIL EN ÉQUIPE & COLLABORATION ', 'Niveau 2 – Actif: Aide le groupe', '- Prendre l’initiative \r\n- Faire part des connaissances,  expérience ou expertise pertinente et utile en vue d’aider les membres du groupe à réaliser leurs objectifs de façon plus efficace ou efficiente.\r\n- S’efforcer de faire quelque chose de plus pour a', '4. RÉSOLUTION DES PROBLÈMES', 'Niveau 2 – Actif: Trouver une solution à un problème ou une situation', '- Recueillir des faits et des renseignements additionnels pour acquérir une meilleure compréhension de la situation.\r\n- Reconnaître les situations où les procédures habituelles peuvent ne pas s’appliquer et où une solution différente est requise.\r\n', '5. SERVICE D’EXCELLENCE ', 'Niveau 2 – Actif: Prendre la responsabilité de traiter le besoin ou de satisfaire aux exigences de service', '- S’assurer que le besoin est traité; cela peut nécessiter l’intervention d’un tiers.\r\n- Assurer un suivi auprès du client lorsque nécessaire ou prend d’autres mesures.\r\n', '6. RAISONNEMENT CONCEPTUEL ', 'Niveau 2 – Actif: Appliquer les règles de base et reconnaître des constantes en se basant sur son vécu', '- Prendre l’initiative et gérer les difficultés \r\n- Appliquer des règles simples, jugement et expériences passées pour cerner les problèmes\r\n- Remarquer qu\'une situation présente est similaire à une situation passée ou est différente d\'une situation passé', 'DROITS', '• Prime mensuelle catégorie développeur confirmé (selon grille de salaire)\r\n• Mission en cas de besoin (accompagner par un développeur senior)\r\n• Prêt 2 Salaires sous validation  de la direction \r\n', 'DEVOIRS ', '• Veille technique\r\n• Amélioration continu\r\n• Proposer des modules à publier dans odoo Apps\r\n• Partage de l’information\r\n• Collaboration avec l’équipe de travail\r\n• Encadrement des stagiaires d’été (pendant 1 mois au minimum)\r\n• Respecter les règles RH et', 'VALIDATION', '• La validation d’un développeur confirmé doit être après avoir passer 18 mois dans le niveau précédent . ', 'Responsable développement RH', 'Jawaher KHMIRI', 'Responsable Qualité', 'Hayet BEN SALEM', 'Gérant', 'Rochdi ABID', '2023-03-15 15:02:35', '2023-03-15 15:02:35');

-- --------------------------------------------------------

--
-- Structure de la table `profilpostejuniors`
--

CREATE TABLE `profilpostejuniors` (
  `id` int(11) NOT NULL,
  `comptech` varchar(255) NOT NULL,
  `contenucomptech` varchar(255) NOT NULL,
  `comporgan` varchar(255) NOT NULL,
  `gestemps` varchar(255) NOT NULL,
  `nvisegestemp` varchar(255) NOT NULL,
  `isuivigestemp` varchar(255) NOT NULL,
  `compcompor` varchar(255) NOT NULL,
  `geek` varchar(255) NOT NULL,
  `autod` varchar(255) NOT NULL,
  `positivite` varchar(255) NOT NULL,
  `commintera` varchar(255) NOT NULL,
  `nvisecommintera` varchar(255) NOT NULL,
  `isuivicommintera` varchar(255) NOT NULL,
  `tracoll` varchar(255) NOT NULL,
  `nvisetracoll` varchar(255) NOT NULL,
  `isuivitracoll` varchar(255) NOT NULL,
  `resprob` varchar(255) NOT NULL,
  `nviseresprob` varchar(255) NOT NULL,
  `isuiviresprob` varchar(255) NOT NULL,
  `servexcell` varchar(255) NOT NULL,
  `nviseservexcell` varchar(255) NOT NULL,
  `isuiviservexcell` varchar(255) NOT NULL,
  `droit` varchar(255) NOT NULL,
  `contenudroit` varchar(255) NOT NULL,
  `devoir` varchar(255) NOT NULL,
  `contenudevoir` varchar(255) NOT NULL,
  `validation` varchar(255) NOT NULL,
  `contenuvalid` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `nompre` varchar(255) NOT NULL,
  `fonction1` varchar(255) NOT NULL,
  `nompre1` varchar(255) NOT NULL,
  `fonction2` varchar(255) NOT NULL,
  `nompre2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profilpostejuniors`
--

INSERT INTO `profilpostejuniors` (`id`, `comptech`, `contenucomptech`, `comporgan`, `gestemps`, `nvisegestemp`, `isuivigestemp`, `compcompor`, `geek`, `autod`, `positivite`, `commintera`, `nvisecommintera`, `isuivicommintera`, `tracoll`, `nvisetracoll`, `isuivitracoll`, `resprob`, `nviseresprob`, `isuiviresprob`, `servexcell`, `nviseservexcell`, `isuiviservexcell`, `droit`, `contenudroit`, `devoir`, `contenudevoir`, `validation`, `contenuvalid`, `fonction`, `nompre`, `fonction1`, `nompre1`, `fonction2`, `nompre2`) VALUES
(1, 'COMPÉTENCES TECHNIQUES', '- Compétence algorithmique niveau élevé  \r\n- Connaissance de l’architecture de développement Orientée Objet \r\n- Une bonne maîtrise du SQL   \r\n', 'COMPÉTENCES ORGANISATIONNELLES', 'GESTION DE TEMPS & PRIORITÉS', 'Niveau 1 – Pré-actif:  Planifier ses propres activités', '- Planifier & compléter les tâches/projets à temps efficacement\r\n- Informer de la progression des tâches ou du projet \r\n- Déclarer en cas de difficulté technique : c’est à dire après dépasser 50 % du temps prévu de réalisation d’une tâche au maximum à l’e', 'COMPÉTENCES COMPORTEMENTALES ', '1.  GEEK', '2.  AUTODÉTERMINATION \r\n', '3.  POSITIVITÉ', '4.  COMMUNICATION INTERACTIVE EFFICACE', 'Niveau 1 – Pré-actif : Porter attention à la communication des autres', '- Écouter activement afin de bien comprendre le message.\r\n- Essayer de partager l’information liée à l’exécution de travail et la communiquer clairement (quelque soit de la part développeur junior et de son vis-à-vis)\r\n- Répondre de manière appropriée en ', '5. TRAVAIL EN ÉQUIPE & COLLABORATION ', 'Niveau 1 – Pré-actif : Participer aux processus du groupe', '- Tenir compte de l’objectif de toute l’équipe  \r\n- Réussite collective ou échec collective ! : c’est toute l’équipe est responsable soit en cas de la réussite ou en cas d’échec\r\n- Répartition des tâches d’une manière équitable\r\n- Appuyer les décisions ou', '6. RÉSOLUTION DE PROBLÈMES', 'Niveau 1 – Pré-actif : Reconnaît un problème ou une situation de base et choisit une solution appropriée', '- Poser les questions adéquates et distinguer entre les renseignements pertinents et ceux qui ne le sont pas.\r\n- Identifier la cause principale du problème affronté\r\n', '7. SERVICES D’EXCELLENCE  ', 'Niveau 1 – Pré-actif : Répond à une demande ou aux exigences de service de base', '-Fournir une réponse claire & logique aux questions ou préoccupations.\r\n- Fournir un service, y compris des renseignements utiles ou une aide, conforme aux normes de service et aux lignes directrices pertinentes.\r\n', 'DROITS ', '• être encadré(e)\r\n• être intégré(e) au sein de l’équipe de travail\r\n• Fournir un environnement favorable de travail (matériel, poste de travail…)\r\n• Participation à une ou des session (s) de formation(s) complémentaire(s) liée(s) au poste de travail\r\n• I', 'DEVOIRS', '• Remonter l’information (donner un feed-back sur les tâches travaillés)\r\n• être engagé(e) & impliqué(e) dans l’exécution du processus de travail\r\n• Respecter les règles RH et qualité au sein de l’entreprise\r\n', 'VALIDATION', '•La validation d’un développeur Junior doit être après passation 6 mois de l’entrée en fonction.', 'Responsable développement RH', 'Jaweher KHMIRI', 'Responsable Qualité', 'Hayet  BEN SALEM', 'Gérant', 'Rochdi ABID');

-- --------------------------------------------------------

--
-- Structure de la table `profilposteseniors`
--

CREATE TABLE `profilposteseniors` (
  `id` int(11) NOT NULL,
  `comptechds` varchar(255) NOT NULL,
  `contenucomptechds` varchar(255) NOT NULL,
  `comporgands` varchar(255) NOT NULL,
  `gestempsds` varchar(255) NOT NULL,
  `nvisegestempds` varchar(255) NOT NULL,
  `isuivigestempds` varchar(255) NOT NULL,
  `compcompords` varchar(255) NOT NULL,
  `comminterads` varchar(255) NOT NULL,
  `nvisecomminterads` varchar(255) NOT NULL,
  `isuivicomminterads` varchar(255) NOT NULL,
  `tracollds` varchar(255) NOT NULL,
  `nvisetracollds` varchar(255) NOT NULL,
  `isuivitracollds` varchar(255) NOT NULL,
  `resprobds` varchar(255) NOT NULL,
  `nviseresprobds` varchar(255) NOT NULL,
  `isuiviresprobds` varchar(255) NOT NULL,
  `servexcellds` varchar(255) NOT NULL,
  `nviseservexcellds` varchar(255) NOT NULL,
  `isuiviservexcellds` varchar(255) NOT NULL,
  `raisconcepds` varchar(255) NOT NULL,
  `nviseraisconcepds` varchar(255) NOT NULL,
  `isuiviraisconcepds` varchar(255) NOT NULL,
  `leadershipds` varchar(255) NOT NULL,
  `nviseleadershipds` varchar(255) NOT NULL,
  `isuivileadershipds` varchar(255) NOT NULL,
  `droitds` varchar(255) NOT NULL,
  `contenudroitds` varchar(255) NOT NULL,
  `devoirds` varchar(255) NOT NULL,
  `contenudevoirds` varchar(255) NOT NULL,
  `validationds` varchar(255) NOT NULL,
  `contenuvalidds` varchar(255) NOT NULL,
  `fonctionds` varchar(255) NOT NULL,
  `nompreds` varchar(255) NOT NULL,
  `fonctionds1` varchar(255) NOT NULL,
  `nompreds1` varchar(255) NOT NULL,
  `fonctionds2` varchar(255) NOT NULL,
  `nompreds2` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profilposteseniors`
--

INSERT INTO `profilposteseniors` (`id`, `comptechds`, `contenucomptechds`, `comporgands`, `gestempsds`, `nvisegestempds`, `isuivigestempds`, `compcompords`, `comminterads`, `nvisecomminterads`, `isuivicomminterads`, `tracollds`, `nvisetracollds`, `isuivitracollds`, `resprobds`, `nviseresprobds`, `isuiviresprobds`, `servexcellds`, `nviseservexcellds`, `isuiviservexcellds`, `raisconcepds`, `nviseraisconcepds`, `isuiviraisconcepds`, `leadershipds`, `nviseleadershipds`, `isuivileadershipds`, `droitds`, `contenudroitds`, `devoirds`, `contenudevoirds`, `validationds`, `contenuvalidds`, `fonctionds`, `nompreds`, `fonctionds1`, `nompreds1`, `fonctionds2`, `nompreds2`, `created`, `modified`) VALUES
(1, 'COMPÉTENCES TECHNIQUES', '- Maîtrise fonctionnel (2 Certifications parmi les 3 derniers versions)\r\n- Maîtrise technique \r\n- Maîtrise une autre technologie (Plus qu’Odoo) \r\n', 'COMPÉTENCES ORGANISATIONNELLES', 'GESTION DE TEMPS et PRIORITÉS', 'Niveau 3 – Pro-actif : ', '• Avoir une visibilité sur le planning de l’équipe de développement\r\n• Organiser les horaires, le travail et le milieu pour maximiser l’efficacité\r\n• Anticiper et se préparer à gérer les problèmes  efficacement', 'COMPÉTENCES COMPORTEMENTALES  ', '1. COMMUNICATION INTERACTIVE EFFICACE', 'Niveau 3 – Pro-actif : Adapte sa communication', '• Avoir un équilibre psychique et une bonne gestion de stress\r\n• Personnaliser son langage et son style de communication en fonction de la situation et de l’interlocuteur ou de l’auditoire, tout en livrant le même message.\r\n• Adapter la façon de transmett', '2. TRAVAIL EN ÉQUIPE & COLLABORATION ', 'Niveau 3 – Pro-actif: Encourager les autres membres du groupe à en aider un autre ', '- Tirer profit des forces, des habiletés et des capacités des membres de l’équipe en vue d’atteindre l’objectif commun.\r\n\r\n- Encourager les membres de l’équipe à exprimer leurs points de vue ainsi que leurs opinions tout en tentant d’obtenir le consensus.', '3. RÉSOLUTION DES PROBLÈMES', 'Niveau 3– Pro-actif: Interprète et combine des renseignements de diverses sources pour résoudre un problème ou une situation complexe', '- Traiter un problème ou une situation qui laisse place à l’interprétation.\r\n\r\n- Évaluer les risques et les avantages d’autres solutions.\r\n', '4. SERVICE D’EXCELLENCE ', 'Niveau 3 – Pro-actif : Dépasser l’attente du client ou les exigences de service', '• Déterminer le besoin sous-jacent du client et fournit une aide ou des renseignements supplémentaires au-delà de l’attente du client ou de la norme de service applicable.\r\n\r\n• Fait appel à son expérience et à ses connaissances pour fournir un service add', '5. RAISONNEMENT CONCEPTUEL ', 'Niveau 3–Pro-actif: Appliquer des concepts complexes appris', '- Utiliser ses connaissances ou situations passées pour examiner les situations présentes\r\n- Appliquer et modifier des méthodes de manière appropriée à la situation  \r\n', '6. LEADERSHIP', 'Niveau 3–Pro-actif: Renforcer l’efficacité et l’efficience de l’équipe', '• Veiller aux besoins de l’équipe pour lui permettre de donner son plein potentiel et d’atteindre les objectifs (Remarque : la satisfaction des besoins est une source de motivation)\r\n\r\n• Favoriser la collaboration, le travail en équipe et la confiance ent', 'DROITS', '- Prime mensuelle catégorie développeur SENIOR (selon grille de salaire)\r\n- Télétravail 1 jour / semaine non cumulables\r\n- Prêt 3 Salaires sous validation de la direction \r\n', 'DEVOIRS', '• Obligation de proposer des actions d’amélioration continu du système de l’entreprise\r\n• Encadrement des stage PFE\r\n• Participer à réaliser des entretiens techniques\r\n', 'VALIDATION', '• La validation d’un développeur senior doit être après avoir passer 2 ans dans le niveau précédent (ou une année et demi à titre exceptionnelle) ', 'Responsable développement RH', 'Jawaher KHMIRI', 'Responsable Qualité', 'Hayet BEN SALEM', 'Gérant', 'Rochdi ABID', '2023-03-15 16:41:35', '2023-03-15 16:41:35');

-- --------------------------------------------------------

--
-- Structure de la table `profilposteteckleads`
--

CREATE TABLE `profilposteteckleads` (
  `id` int(11) NOT NULL,
  `comptechdt` varchar(255) NOT NULL,
  `contenucomptechdt` varchar(255) NOT NULL,
  `comporgandt` varchar(255) NOT NULL,
  `gestempsdt` varchar(255) NOT NULL,
  `nvisegestempdt` varchar(255) NOT NULL,
  `isuivigestempdt` varchar(255) NOT NULL,
  `compcompordt` varchar(255) NOT NULL,
  `comminteradt` varchar(255) NOT NULL,
  `nvisecomminteradt` varchar(255) NOT NULL,
  `isuivicomminteradt` varchar(255) NOT NULL,
  `tracolldt` varchar(255) NOT NULL,
  `nvisetracolldt` varchar(255) NOT NULL,
  `isuivitracolldt` varchar(255) NOT NULL,
  `resprobdt` varchar(255) NOT NULL,
  `nviseresprobdt` varchar(255) NOT NULL,
  `isuiviresprobdt` varchar(255) NOT NULL,
  `raisanaldt` varchar(255) NOT NULL,
  `nviseraisanaldt` varchar(255) NOT NULL,
  `isuiviraisanaldt` varchar(255) NOT NULL,
  `leadershipdt` varchar(255) NOT NULL,
  `nviseleadershipdt` varchar(255) NOT NULL,
  `isuivileadershipdt` varchar(255) NOT NULL,
  `soudevdt` varchar(255) NOT NULL,
  `nvisesoudevdt` varchar(2555) NOT NULL,
  `isuivisoudevdt` varchar(255) NOT NULL,
  `droitdt` varchar(255) NOT NULL,
  `contenudroitdt` varchar(255) NOT NULL,
  `devoirdt` varchar(255) NOT NULL,
  `contenudevoirdt` varchar(255) NOT NULL,
  `validationdt` varchar(255) NOT NULL,
  `contenuvaliddt` varchar(255) NOT NULL,
  `fonctiondt` varchar(255) NOT NULL,
  `nompredt` varchar(255) NOT NULL,
  `fonctiondt1` varchar(255) NOT NULL,
  `nompredt1` varchar(255) NOT NULL,
  `fonctiondt2` varchar(255) NOT NULL,
  `nompredt2` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profilposteteckleads`
--

INSERT INTO `profilposteteckleads` (`id`, `comptechdt`, `contenucomptechdt`, `comporgandt`, `gestempsdt`, `nvisegestempdt`, `isuivigestempdt`, `compcompordt`, `comminteradt`, `nvisecomminteradt`, `isuivicomminteradt`, `tracolldt`, `nvisetracolldt`, `isuivitracolldt`, `resprobdt`, `nviseresprobdt`, `isuiviresprobdt`, `raisanaldt`, `nviseraisanaldt`, `isuiviraisanaldt`, `leadershipdt`, `nviseleadershipdt`, `isuivileadershipdt`, `soudevdt`, `nvisesoudevdt`, `isuivisoudevdt`, `droitdt`, `contenudroitdt`, `devoirdt`, `contenudevoirdt`, `validationdt`, `contenuvaliddt`, `fonctiondt`, `nompredt`, `fonctiondt1`, `nompredt1`, `fonctiondt2`, `nompredt2`, `created`, `modified`) VALUES
(1, 'COMPÉTENCES TECHNIQUES', '- Maîtrise fonctionnel (3 Certifications)\r\n- Maîtrise technique \r\n- Maîtrise une autre technologie (Plus Odoo) \r\n- Gestion de projet\r\n', 'COMPÉTENCES ORGANISATIONNELLES', 'GESTION DE TEMPS & PRIORITÉS', 'GESTION DE TEMPS et PRIORITÉS', '• Développer et mettre en œuvre des plans de travail efficace pour des projets complexes impliquant plusieurs personnes\r\n• Démontrer une compréhension des relations entre les personnes intéressés à l’interne à afin de coordonner leur implication dans les ', 'COMPÉTENCES COMPORTEMENTALES  ', '1. COMMUNICATION INTERACTIVE EFFICACE', 'Niveau 4 – Avancé ', '• Gérer habilement les questions spontanées difficiles (p. ex posées par des responsables)\r\n• Encadrer les autres \r\n• Inciter à prendre part au processus d’échange des connaissances\r\n', '2. TRAVAIL EN ÉQUIPE et COLLABORATION ', 'Niveau 4 – Avancé ', '- Supervise, oriente, conseille et encadrer les autres dans l’accomplissement efficace des activités & tâches \r\n- Apprécier, reconnaître et récompenser les succès d’équipe par des initiatives entreprises (Boite de proposition)\r\n- Gérer les conflits d’équi', '3. RÉSOLUTION DES PROBLÈMES', 'Niveau 4 – Avancé ', '- Tirer les conclusions ou élaborer des explications possibles aux autres\r\n- Élaborer une solution fiable à un problème ou une situation qui compte plusieurs éléments inter-reliés.\r\n', '4. RAISONNEMENT ANALYTIQUE ', 'Niveau 4 – Avancé ', '- Prévoir et cerner les nouveaux enjeux et élaborer des stratégies pour permettre à l’entreprise de gérer les nouvelles tendances\r\n- Établir un accord avant la prise de décisions, si possible et au besoin\r\n', '5. LEADERSHIP', 'Niveau 4 – Avancé ', '• Encourager les autres à promouvoir la vision et les objectifs de l’entreprise\r\n• Entretient un environnement propice au changement, à l’innovation, à l’amélioration et à la prise de risques responsables\r\n', '6. SOUTIEN AU DÉVELOPPEMENT DES AUTRES', 'Niveau 4 – Avancé', '• Cerner les besoins et élaborer des initiatives et des plans d’action en apprentissage \r\n• Mettre en œuvre des stratégies pour renforcer, appuyer et maintenir une culture d’apprentissage \r\n• Encourager la recherche et l’examen des données probantes pour ', 'DROITS', '- Prime de rendement mensuelle catégorie développeur Teck Lead (selon grille de salaire)\r\n- Télétravail 1 jour / semaine non cumulable\r\n- Prêt 4 Salaires sous validation de la direction \r\n', 'DEVOIRS', '• Proposer des actions d’amélioration continu du système de l’entreprise en général\r\n• Accompagner les développeurs\r\n• Faire monter les compétences de l’équipe de développement\r\n• être le référant technique et fonctionnel \r\n• Vérifier les actions menées p', 'VALIDATION', '• La validation d’un développeur senior doit être après avoir passer 2 ans dans le niveau précédent (ou une année et demi à titre exceptionnelle) ', 'Responsable développement RH', 'Jawaher KHMIRI', 'Responsable Qualité', 'Hayet BEN SALEM', 'Gérant', 'Rochdi ABID', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
-- Index pour la table `enfantsfrs`
--
ALTER TABLE `enfantsfrs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `expproffrs`
--
ALTER TABLE `expproffrs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fecomminteras`
--
ALTER TABLE `fecomminteras`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fecomporganisations`
--
ALTER TABLE `fecomporganisations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ficherenseignements`
--
ALTER TABLE `ficherenseignements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formacomplfrs`
--
ALTER TABLE `formacomplfrs`
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
-- Index pour la table `infogenconfimes`
--
ALTER TABLE `infogenconfimes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infogenfpsychiques`
--
ALTER TABLE `infogenfpsychiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infogenjuniors`
--
ALTER TABLE `infogenjuniors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infogenseniors`
--
ALTER TABLE `infogenseniors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infogenteckleads`
--
ALTER TABLE `infogenteckleads`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profilposteconfirmes`
--
ALTER TABLE `profilposteconfirmes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profilpostejuniors`
--
ALTER TABLE `profilpostejuniors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profilposteseniors`
--
ALTER TABLE `profilposteseniors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profilposteteckleads`
--
ALTER TABLE `profilposteteckleads`
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
-- AUTO_INCREMENT pour la table `enfantsfrs`
--
ALTER TABLE `enfantsfrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `expproffrs`
--
ALTER TABLE `expproffrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fecomminteras`
--
ALTER TABLE `fecomminteras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fecomporganisations`
--
ALTER TABLE `fecomporganisations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ficherenseignements`
--
ALTER TABLE `ficherenseignements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formacomplfrs`
--
ALTER TABLE `formacomplfrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formaexternes`
--
ALTER TABLE `formaexternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `formainternes`
--
ALTER TABLE `formainternes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `infogenconfimes`
--
ALTER TABLE `infogenconfimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `infogenfpsychiques`
--
ALTER TABLE `infogenfpsychiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `infogenjuniors`
--
ALTER TABLE `infogenjuniors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `infogenseniors`
--
ALTER TABLE `infogenseniors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `infogenteckleads`
--
ALTER TABLE `infogenteckleads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `profilposteconfirmes`
--
ALTER TABLE `profilposteconfirmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `profilpostejuniors`
--
ALTER TABLE `profilpostejuniors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `profilposteseniors`
--
ALTER TABLE `profilposteseniors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `profilposteteckleads`
--
ALTER TABLE `profilposteteckleads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enfantsfrs`
--
ALTER TABLE `enfantsfrs`
  ADD CONSTRAINT `enfantsfrs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `ficherenseignements` (`id`);

--
-- Contraintes pour la table `expproffrs`
--
ALTER TABLE `expproffrs`
  ADD CONSTRAINT `expproffrs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `ficherenseignements` (`id`);

--
-- Contraintes pour la table `fecomminteras`
--
ALTER TABLE `fecomminteras`
  ADD CONSTRAINT `fecomminteras_ibfk_1` FOREIGN KEY (`id`) REFERENCES `fecomporganisations` (`id`);

--
-- Contraintes pour la table `formacomplfrs`
--
ALTER TABLE `formacomplfrs`
  ADD CONSTRAINT `formacomplfrs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `ficherenseignements` (`id`);

--
-- Contraintes pour la table `profilposteconfirmes`
--
ALTER TABLE `profilposteconfirmes`
  ADD CONSTRAINT `profilposteconfirmes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `infogenconfimes` (`id`);

--
-- Contraintes pour la table `profilpostejuniors`
--
ALTER TABLE `profilpostejuniors`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `infogenjuniors` (`id`);

--
-- Contraintes pour la table `profilposteseniors`
--
ALTER TABLE `profilposteseniors`
  ADD CONSTRAINT `profilposteseniors_ibfk_1` FOREIGN KEY (`id`) REFERENCES `infogenseniors` (`id`);

--
-- Contraintes pour la table `profilposteteckleads`
--
ALTER TABLE `profilposteteckleads`
  ADD CONSTRAINT `profilposteteckleads_ibfk_1` FOREIGN KEY (`id`) REFERENCES `infogenteckleads` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
