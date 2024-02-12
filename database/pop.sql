-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2024 at 07:58 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pop`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur_id` bigint UNSIGNED NOT NULL,
  `date_publication` timestamp NULL DEFAULT NULL,
  `categorie_id` bigint UNSIGNED NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_auteur_id_foreign` (`auteur_id`),
  KEY `articles_categorie_id_foreign` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `resume`, `auteur_id`, `date_publication`, `categorie_id`, `tags`, `image`, `video_link`, `statut`, `created_at`, `updated_at`) VALUES
(3, 'Les Léopards de la RDC : Un renouveau prometteur sous l\'ère Hector Cúper', '<p class=\"MsoNormal\" style=\"line-height: normal; background: white; margin: .25in 0in .25in 0in;\"><span style=\"font-size: 12.0pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #1f1f1f;\">L\'&eacute;quipe nationale de football de la R&eacute;publique D&eacute;mocratique du Congo (RDC), surnomm&eacute;e les L&eacute;opards, est en pleine phase de reconstruction. Apr&egrave;s une CAN 2023 d&eacute;cevante o&ugrave; ils ont &eacute;t&eacute; &eacute;limin&eacute;s en quarts de finale, les Congolais se tournent vers l\'avenir avec un nouveau s&eacute;lectionneur, Hector C&uacute;per, et une s&eacute;lection rajeunie.</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; background: white; margin: .25in 0in .25in 0in;\"><span style=\"font-size: 12.0pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #1f1f1f;\">L\'Argentin Hector C&uacute;per, connu pour son style d&eacute;fensif rigoureux, a pris les r&ecirc;nes de la s&eacute;lection en ao&ucirc;t 2023. Son exp&eacute;rience, acquise notamment sur les bancs de Valence, l\'Inter Milan et l\'&eacute;quipe nationale d\'&Eacute;gypte, est un atout majeur pour les L&eacute;opards. C&uacute;per a pour mission de qualifier la RDC pour la Coupe du Monde 2026, une premi&egrave;re depuis 1974.</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; background: white; margin: .25in 0in .25in 0in;\"><span style=\"font-size: 12.0pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #1f1f1f;\">Le nouveau s&eacute;lectionneur a inject&eacute; du sang neuf dans la s&eacute;lection, en convoquant plusieurs jeunes joueurs prometteurs &eacute;voluant en Europe. Parmi les nouveaux visages, on peut citer le d&eacute;fenseur central Arthur Masuaku (West Ham), le milieu de terrain Ga&euml;l Kakuta (Lens) et l\'attaquant Yoane Wissa (Brentford).</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; background: white; margin: .25in 0in .25in 0in;\"><span style=\"font-size: 12.0pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #1f1f1f;\">Depuis son arriv&eacute;e, C&uacute;per a dirig&eacute; les L&eacute;opards en quatre matchs, pour un bilan de deux victoires, un nul et une d&eacute;faite. La RDC a notamment battu l\'&Eacute;gypte (1-0) et la Guin&eacute;e (2-1) lors de la CAN 2023.</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; background: white; margin: .25in 0in .25in 0in;\"><span style=\"font-size: 12.0pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #1f1f1f;\">Malgr&eacute; les progr&egrave;s encourageants, l\'&eacute;quipe de RDC reste confront&eacute;e &agrave; plusieurs d&eacute;fis. Le manque de r&eacute;gularit&eacute; des joueurs, la faiblesse du championnat national et les probl&egrave;mes d\'infrastructures sont autant d\'obstacles &agrave; surmonter.</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; background: white; margin: .25in 0in .25in 0in;\"><span style=\"font-size: 12.0pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #1f1f1f;\">N&eacute;anmoins, l\'avenir des L&eacute;opards semble radieux. La combinaison de l\'exp&eacute;rience de C&uacute;per et du talent de la jeune g&eacute;n&eacute;ration peut permettre &agrave; la RDC de retrouver son lustre d\'antan et de briller sur la sc&egrave;ne continentale et internationale.</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; background: white; margin: .25in 0in .25in 0in;\"><span style=\"font-size: 12.0pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #1f1f1f;\">En conclusion, l\'&eacute;quipe de football de la RDC est en pleine phase de transition. Le nouveau s&eacute;lectionneur Hector C&uacute;per a apport&eacute; un souffle nouveau et les r&eacute;sultats sont encourageants. Si les d&eacute;fis ne manquent pas, l\'avenir des L&eacute;opards s\'annonce prometteur.</span></p>', 'L\'équipe nationale de football de la République Démocratique du Congo (RDC), surnommée les Léopards, est en pleine phase de reconstruction. Après une CAN 2023 décevante où ils ont été éliminés en quarts de finale, les Congolais se tournent vers l\'avenir avec un nouveau sélectionneur, Hector Cúper, et une sélection rajeunie.', 16, '2024-02-01 20:47:00', 4, 'football ,CAN,2024,Léopards,Hector Cúper,interview', 'articles/P10q1nEyj8bG4IBpIihYfgk7LsaP6LBdLAtcjFAo.jpg', 'https://youtu.be/2tttHlUNpNU', '1', '2024-02-01 15:40:36', '2024-02-01 20:47:22'),
(4, 'Nouveau bureau d\'âge pour l\'Assemblée nationale : vers une nouvelle ère', '<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"3:1-3:24\"><strong style=\"scrollbar-color: rgb(218, 220, 224) transparent; font-weight: 500;\">Kinshasa, 01 f&eacute;vrier 2024</strong><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> - L\'Assembl&eacute;e nationale de la R&eacute;publique D&eacute;mocratique du Congo (RDC) a mis en place son nouveau bureau d\'&acirc;ge ce lundi 29 janvier 2024,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> conform&eacute;ment &agrave; l\'article 114 de la Constitution.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Ce bureau provisoire est pr&eacute;sid&eacute; par </span><strong style=\"scrollbar-color: rgb(218, 220, 224) transparent; font-weight: 500;\">Christophe Mboso Nkodia</strong><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> doyen d\'&acirc;ge des d&eacute;put&eacute;s,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> et assist&eacute; de deux secr&eacute;taires :</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> </span><strong style=\"scrollbar-color: rgb(218, 220, 224) transparent; font-weight: 500;\">Serge Bahati</strong><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> et </span><strong style=\"scrollbar-color: rgb(218, 220, 224) transparent; font-weight: 500;\">Aje Matembo Toto Ag&eacute;e</strong><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"7:1-7:365\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">Le bureau d\'&acirc;ge a pour mission de diriger les travaux de la session inaugurale de la 4&egrave;me l&eacute;gislature jusqu\'&agrave; l\'&eacute;lection du bureau d&eacute;finitif.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Cela inclut la v&eacute;rification des mandats des d&eacute;put&eacute;s,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> l\'&eacute;laboration et l\'adoption du r&egrave;glement int&eacute;rieur,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> et l\'organisation des &eacute;lections du pr&eacute;sident,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> du vice-pr&eacute;sident,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> des questeurs et des secr&eacute;taires du bureau d&eacute;finitif.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"11:1-11:114\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">La formation de ce nouveau bureau d\'&acirc;ge intervient dans un contexte politique particulier,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> marqu&eacute; par les tensions entre les diff&eacute;rentes plateformes politiques et les ambitions pour le contr&ocirc;le de l\'Assembl&eacute;e nationale.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Le bureau d\'&acirc;ge devra faire preuve de neutralit&eacute; et d\'impartialit&eacute; pour garantir la transparence et la cr&eacute;dibilit&eacute; du processus de validation des mandats et des &eacute;lections du bureau d&eacute;finitif.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"15:1-15:379\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">L\'installation du bureau d\'&acirc;ge suscite des espoirs d\'un nouveau d&eacute;part pour l\'Assembl&eacute;e nationale.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> La population congolaise attend de ses d&eacute;put&eacute;s un travail s&eacute;rieux et responsable pour r&eacute;pondre aux nombreux d&eacute;fis auxquels le pays est confront&eacute;.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Le bureau d\'&acirc;ge a un r&ocirc;le crucial &agrave; jouer pour garantir le bon fonctionnement de l\'institution et le respect des r&egrave;gles d&eacute;mocratiques.</span></p>', 'Kinshasa, 01 février 2024 - L\'Assemblée nationale de la République Démocratique du Congo (RDC) a mis en place son nouveau bureau d\'âge ce lundi 29 janvier 2024, conformément à l\'article 114 de la Constitution. Ce bureau provisoire est présidé par Christophe Mboso Nkodia, doyen d\'âge des députés, et assisté de deux secrétaires : Serge Bahati et Aje Matembo Toto Agée.', 16, '2024-02-01 20:17:00', 9, 'politique,Kinshasa,Serge Bahati , Christophe Mboso Nkodia,Reportages', 'articles/PDqdYr773z8ElERdXLUrlbtmSLuKk2RihnNbUiDH.jpg', 'HngdIP_TnM0', '1', '2024-02-01 16:33:31', '2024-02-01 20:17:39'),
(5, 'Le Dr Muyembe : Découverte d\'un remède contre le paludisme et non un vaccin', '<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"3:1-3:291\"><strong style=\"scrollbar-color: rgb(218, 220, 224) transparent; font-weight: 500;\">Kinshasa, 01 f&eacute;vrier 2024</strong><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> - Le Dr Jean-Jacques Muyembe Tamfum,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> coordonnateur de la riposte contre la Covid-19 en RDC et directeur g&eacute;n&eacute;ral de l\'Institut National de Recherche Biom&eacute;dicale (INRB),</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> a annonc&eacute; le 30 janvier 2024 une d&eacute;couverte majeure :</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> un rem&egrave;de curatif contre le paludisme.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"7:1-7:22\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">Le rem&egrave;de,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> baptis&eacute; </span><strong style=\"scrollbar-color: rgb(218, 220, 224) transparent; font-weight: 500;\">\"Muyembe-C\"</strong><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> se pr&eacute;sente sous forme de comprim&eacute;s et est compos&eacute; d\'une combinaison de plantes m&eacute;dicinales congolaises.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Selon les r&eacute;sultats des essais cliniques,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> le traitement a montr&eacute; un taux de r&eacute;ussite de 95% dans la gu&eacute;rison du paludisme,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> y compris les cas graves et r&eacute;sistants aux antipalud&eacute;ens classiques.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"11:1-11:178\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">Le paludisme est une maladie parasitaire qui affecte plus de 200 millions de personnes chaque ann&eacute;e et cause plus de 400 000 d&eacute;c&egrave;s,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> principalement en Afrique.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> La d&eacute;couverte du Dr Muyembe pourrait donc constituer une avanc&eacute;e majeure dans la lutte contre cette maladie meurtri&egrave;re.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"15:1-15:233\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">Il est important de souligner que le Muyembe-C n\'est pas un vaccin,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> mais un rem&egrave;de curatif.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Un vaccin permet de pr&eacute;venir une maladie en stimulant le syst&egrave;me immunitaire,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> tandis qu\'un rem&egrave;de permet de gu&eacute;rir une maladie d&eacute;j&agrave; d&eacute;clar&eacute;e.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"19:1-19:294\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">Le Dr Muyembe a d&eacute;clar&eacute; que le Muyembe-C est en cours d\'homologation par les autorit&eacute;s sanitaires congolaises et internationales.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Il a &eacute;galement indiqu&eacute; que des discussions sont en cours avec des laboratoires pharmaceutiques pour la production et la distribution du m&eacute;dicament &agrave; grande &eacute;chelle.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"23:1-23:272\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">La d&eacute;couverte du Dr Muyembe a &eacute;t&eacute; salu&eacute;e par les experts de la sant&eacute; publique,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> qui la consid&egrave;rent comme une avanc&eacute;e majeure dans la lutte contre le paludisme.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Si le Muyembe-C est accessible et abordable,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> il pourrait sauver des millions de vies en Afrique et dans le monde.</span></p>', 'Kinshasa, 01 février 2024 - Le Dr Jean-Jacques Muyembe Tamfum, coordonnateur de la riposte contre la Covid-19 en RDC et directeur général de l\'Institut National de Recherche Biomédicale (INRB), a annoncé le 30 janvier 2024 une découverte majeure : un remède curatif contre le paludisme.', 16, '2024-02-07 07:16:00', 5, 'santé,ebola,vaccin ,corrona,Muyembe', 'articles/Ewl7sp4ivHf5NdyS6J4WKmvxNYQW4cn0oG9V7wZf.jpg', NULL, '1', '2024-02-01 16:53:15', '2024-02-07 07:16:02'),
(6, 'Les élections présidentielles de 2023 en RDC : un bilan mitigé', '<p>Le 28 novembre 2023, les Congolais ont &eacute;t&eacute; appel&eacute;s aux urnes pour &eacute;lire leur pr&eacute;sident de la R&eacute;publique. Il s\'agissait de la troisi&egrave;me &eacute;lection pr&eacute;sidentielle depuis la fin de la guerre civile en 2003, et la premi&egrave;re depuis le d&eacute;part du pouvoir de Joseph Kabila en 2019. Le scrutin a &eacute;t&eacute; marqu&eacute; par une forte participation, mais aussi par de nombreuses irr&eacute;gularit&eacute;s et contestations.</p>\r\n<p>Selon les r&eacute;sultats provisoires annonc&eacute;s par la Commission &eacute;lectorale nationale ind&eacute;pendante (CENI), le candidat du Front commun pour le Congo (FCC), Emmanuel Ramazani Shadary, a remport&eacute; l\'&eacute;lection avec 51,8% des voix, devan&ccedil;ant le candidat de l\'Union pour la d&eacute;mocratie et le progr&egrave;s social (UDPS), F&eacute;lix Tshisekedi, qui a obtenu 34,7% des suffrages. Le troisi&egrave;me candidat, Martin Fayulu, de la coalition Lamuka, a r&eacute;colt&eacute; 13,5% des voix.</p>\r\n<p>Ces r&eacute;sultats ont &eacute;t&eacute; imm&eacute;diatement contest&eacute;s par l\'opposition, qui a d&eacute;nonc&eacute; des fraudes massives et des violations des droits de l\'homme. Selon Fayulu, qui s\'est proclam&eacute; \"pr&eacute;sident &eacute;lu\", il aurait obtenu 61% des voix, tandis que Shadary n\'en aurait eu que 18%. Il a appel&eacute; &agrave; un recomptage des voix et &agrave; la publication des proc&egrave;s-verbaux des bureaux de vote. Il a &eacute;galement saisi la Cour constitutionnelle pour demander l\'annulation du scrutin.</p>\r\n<p>La communaut&eacute; internationale s\'est &eacute;galement montr&eacute;e sceptique face aux r&eacute;sultats annonc&eacute;s par la CENI. Plusieurs pays, dont les &Eacute;tats-Unis, la France, le Royaume-Uni et l\'Union europ&eacute;enne, ont exprim&eacute; leurs doutes sur la cr&eacute;dibilit&eacute; du processus &eacute;lectoral et ont appel&eacute; au respect de la volont&eacute; du peuple congolais. La Mission d\'observation &eacute;lectorale de l\'Union africaine (MOEUA) a estim&eacute; que les r&eacute;sultats provisoires &eacute;taient \"en contradiction flagrante\" avec les donn&eacute;es collect&eacute;es par ses observateurs. La Conf&eacute;rence &eacute;piscopale nationale du Congo (CENCO), qui avait d&eacute;ploy&eacute; plus de 40 000 observateurs sur le terrain, a affirm&eacute; que les r&eacute;sultats ne correspondaient pas &agrave; ceux issus de ses compilations.</p>\r\n<p>Face &agrave; cette situation, le pr&eacute;sident sortant, F&eacute;lix Tshisekedi, qui avait succ&eacute;d&eacute; &agrave; Kabila apr&egrave;s une transition controvers&eacute;e en 2019, a appel&eacute; au calme et au dialogue. Il a affirm&eacute; qu\'il respecterait le verdict de la Cour constitutionnelle, qui doit se prononcer dans les dix jours suivant la proclamation des r&eacute;sultats provisoires. Il a &eacute;galement tendu la main &agrave; l\'opposition et &agrave; la soci&eacute;t&eacute; civile, en proposant la formation d\'un gouvernement d\'union nationale.</p>\r\n<p>Le bilan des &eacute;lections pr&eacute;sidentielles de 2023 en RDC est donc mitig&eacute;. D\'un c&ocirc;t&eacute;, on peut saluer la mobilisation des &eacute;lecteurs, qui ont exprim&eacute; leur soif de changement et de d&eacute;mocratie dans un pays marqu&eacute; par des d&eacute;cennies de conflits et de crises. De l\'autre c&ocirc;t&eacute;, on peut regretter les nombreuses irr&eacute;gularit&eacute;s et violences qui ont entach&eacute; le scrutin et qui risquent de plonger le pays dans une nouvelle crise politique. Il reste &agrave; esp&eacute;rer que les acteurs politiques sauront privil&eacute;gier l\'int&eacute;r&ecirc;t sup&eacute;rieur de la nation et trouver une issue pacifique et consensuelle &agrave; cette situation.</p>', 'Félix Tshisekedi a été réélu président de la RDC le 20 décembre 2023 avec 73,34% des voix, selon les résultats provisoires de la Commission électorale nationale indépendante (CENI). Cette victoire a été contestée par l\'opposition, qui a dénoncé des fraudes et des irrégularités.', 16, '2024-02-01 19:28:00', 1, 'politique,Kinshasa, élections,CENI,Félix Tshisekedi, Congo', 'articles/tOJah4PPNERpyuxRUf1yIka6kFRo1U14jLLVzkKI.jpg', NULL, '1', '2024-02-01 19:28:10', '2024-02-01 19:28:10'),
(7, 'CAN2023: Les Léopards arrachent la qualification aux Pharaons', '<h2 class=\"\" style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 4px 0px; font-size: 1rem; font-weight: 500; line-height: 1.5rem; font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; letter-spacing: normal; color: rgb(31, 31, 31); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"1:1-1:83\">CAN2023: Les L&eacute;opards arrachent la qualification aux Pharaons</h2>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"3:1-3:14\"><strong style=\"scrollbar-color: rgb(218, 220, 224) transparent; font-weight: 500;\">C\'est fait !</strong><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Les L&eacute;opards de la R&eacute;publique D&eacute;mocratique du Congo ont d&eacute;croch&eacute; leur billet pour la Coupe d\'Afrique des Nations 2023 en battant les Pharaons d\'&Eacute;gypte sur le score de 2-1 lors de la derni&egrave;re journ&eacute;e des &eacute;liminatoires.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Un exploit retentissant pour les Congolais qui ont su renverser la vapeur apr&egrave;s avoir &eacute;t&eacute; men&eacute;s au score d&egrave;s la 10&egrave;me minute de jeu.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"7:1-7:403\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">Les L&eacute;opards n\'ont pas eu le temps de s\'installer dans le match que les Pharaons ont ouvert le score gr&acirc;ce &agrave; une frappe puissante de Mohamed Salah qui a tromp&eacute; le gardien congolais.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Les &Eacute;gyptiens ont ensuite pris le contr&ocirc;le du jeu,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> multipliant les passes et les occasions.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Les L&eacute;opards semblaient d&eacute;pass&eacute;s par la vitesse et la technique des Pharaons qui ont failli doubler la mise &agrave; plusieurs reprises.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"11:1-11:62\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">Les L&eacute;opards ont n&eacute;anmoins r&eacute;agi avant la pause en profitant d\'une erreur de la d&eacute;fense &eacute;gyptienne.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Sur un corner mal d&eacute;gag&eacute;,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> le ballon est revenu dans les pieds de C&eacute;dric Bakambu qui a ajust&eacute; le gardien adverse d\'une frappe crois&eacute;e.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> L\'&eacute;galisation a redonn&eacute; confiance aux Congolais qui ont hauss&eacute; le rythme en seconde p&eacute;riode.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Les L&eacute;opards ont alors pris l\'ascendant sur les Pharaons en se montrant plus agressifs et plus tranchants.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"15:1-15:450\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">&Agrave; la 75&egrave;me minute,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> les L&eacute;opards ont fini par trouver la faille sur un coup franc magistral de Neeskens Kebano qui a envoy&eacute; le ballon dans la lucarne.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Le stade de Kinshasa a explos&eacute; de joie tandis que les joueurs congolais se sont ru&eacute;s vers leur buteur.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Les Pharaons ont tent&eacute; de r&eacute;agir mais n\'ont pas r&eacute;ussi &agrave; &eacute;galiser.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Le coup de sifflet final a scell&eacute; la victoire et la qualification des L&eacute;opards qui ont c&eacute;l&eacute;br&eacute; leur exploit avec leurs supporters.</span></p>\r\n<p style=\"scrollbar-color: rgb(218, 220, 224) transparent; margin: 24px 0px; white-space: pre-wrap; word-break: break-word; color: rgb(31, 31, 31); font-family: \'Google Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" data-sourcepos=\"19:1-19:99\"><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\">Les L&eacute;opards ont ainsi valid&eacute; leur ticket pour la CAN 2023 qu\'ils n\'avaient plus disput&eacute;e depuis 2017.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Ils ont &eacute;galement r&eacute;alis&eacute; un exploit historique en battant pour la premi&egrave;re fois les Pharaons en match officiel.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Les Congolais peuvent &ecirc;tre fiers de leur parcours qui les a vus terminer premiers de leur groupe devant l\'&Eacute;gypte,</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> le Gabon et l\'Angola.</span><span style=\"scrollbar-color: rgb(218, 220, 224) transparent;\"> Ils peuvent d&eacute;sormais se pr&eacute;parer &agrave; affronter les meilleures &eacute;quipes du continent lors de la phase finale de la CAN 2023 qui se d&eacute;roulera en C&ocirc;te d\'Ivoire.</span></p>', 'Les Léopards de la RDC ont arraché une qualification historique pour la CAN 2023 en battant les Pharaons d\'Égypte 2-1 après avoir été menés au score. Ils terminent premiers de leur groupe et affronteront les meilleures équipes d\'Afrique en Côte d\'Ivoire.', 16, '2024-02-01 19:38:00', 1, 'football ,CAN,2024,Léopards,finale, Pharaons', 'articles/OEFXQMVy1Uw05VbRydnFKk8x4OPr8YNoHxc0YkAp.jpg', NULL, '1', '2024-02-01 19:38:26', '2024-02-01 19:38:26'),
(8, 'CDF en chute libre : le pouvoir d\'achat des Congolais s\'effondre', '<p>La situation &eacute;conomique en R&eacute;publique D&eacute;mocratique du Congo (RDC) est de plus en plus pr&eacute;occupante. Le taux de change du franc congolais (CDF) face au dollar am&eacute;ricain (USD) continue de grimper, atteignant des niveaux historiques. Selon les derni&egrave;res donn&eacute;es de la Banque Centrale du Congo (BCC), le taux de change officiel est de 2 800 CDF pour un USD, tandis que sur le march&eacute; parall&egrave;le, il d&eacute;passe les 3 000 CDF.</p>\r\n<p>Cette d&eacute;pr&eacute;ciation de la monnaie nationale a des cons&eacute;quences n&eacute;fastes sur le pouvoir d\'achat des Congolais, qui voient leurs revenus diminuer et le co&ucirc;t de la vie augmenter. Les produits import&eacute;s, comme les produits alimentaires, les m&eacute;dicaments ou les carburants, deviennent de plus en plus chers et inaccessibles pour une grande partie de la population. La hausse des prix entra&icirc;ne &eacute;galement une inflation galopante, qui r&eacute;duit la valeur r&eacute;elle du CDF et cr&eacute;e un cercle vicieux.</p>\r\n<p>Quelles sont les causes de cette d&eacute;gradation mon&eacute;taire ? Plusieurs facteurs sont en jeu, notamment la faiblesse de la production nationale, le d&eacute;ficit budg&eacute;taire chronique, la crise politique et s&eacute;curitaire, et la perte de confiance des agents &eacute;conomiques dans la stabilit&eacute; du CDF. La pand&eacute;mie de Covid-19 a &eacute;galement aggrav&eacute; la situation, en r&eacute;duisant les recettes fiscales, les exportations et les investissements &eacute;trangers.</p>\r\n<p>Face &agrave; ce d&eacute;fi majeur, quelles sont les solutions possibles ? Les autorit&eacute;s congolaises doivent mettre en &oelig;uvre des r&eacute;formes structurelles pour renforcer la comp&eacute;titivit&eacute; de l\'&eacute;conomie, diversifier les sources de revenus, r&eacute;duire les d&eacute;penses publiques et lutter contre la corruption. Elles doivent &eacute;galement assurer une meilleure coordination entre la politique mon&eacute;taire et la politique budg&eacute;taire, afin de maintenir l\'&eacute;quilibre macro&eacute;conomique et de restaurer la confiance dans le CDF. Enfin, elles doivent favoriser le dialogue et la paix sociale, pour cr&eacute;er un climat propice au d&eacute;veloppement et &agrave; la croissance.</p>', 'La situation économique en République Démocratique du Congo (RDC) est de plus en plus préoccupante. Le taux de change du franc congolais (CDF) face au dollar américain (USD) continue de grimper, atteignant des niveaux historiques.', 16, '2024-02-06 15:16:00', 3, 'Pouvoir d\'achat ,Pauvreté, Chômage, taux ,économie', 'articles/7U4z7C6wdyTyUjjhOeE6pOuqlNC0kM5MYFMONIvJ.jpg', NULL, '1', '2024-02-01 20:36:35', '2024-02-06 15:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Politique', NULL, NULL, NULL),
(2, 'Sécurité', NULL, NULL, NULL),
(3, 'Économie', NULL, NULL, NULL),
(4, 'Sport', NULL, NULL, NULL),
(5, 'santé', NULL, NULL, NULL),
(6, 'Culture', NULL, NULL, NULL),
(7, 'Justice', NULL, NULL, NULL),
(8, 'Société', NULL, NULL, NULL),
(9, 'Journal', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `article_id` bigint UNSIGNED NOT NULL,
  `auteur_id` bigint UNSIGNED NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` timestamp NOT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_30_124857_create_categories_table', 1),
(6, '2024_01_30_125020_create_tags_table', 2),
(8, '2024_01_30_124606_create_articles_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$6Z2cZ2ny.oaI7KoWWMXGD.5hg0h9/PZfQDlPvvs15vKyHBSKBl6oe',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `photo`, `role`) VALUES
(14, 'glody', 'rempel.ila@example.net', NULL, '$2y$10$AAfjyQ19e1bYCzUvhoqtz.86uvrxQAsyeuviOm/hepVWs2NbogIC.', NULL, '2024-02-01 14:07:45', '2024-02-01 14:07:45', 'avatars/wAONhWQV2HFjHHbz1EHif8yZPbCPwme8mrSx7qbU.png', 1),
(16, 'alva', 'alvantyomihigo@gmail.com', NULL, '$2y$10$HgStJzsknpDavd6y3/1yrODX7SZIg9JWDPA1ENGvjP4ITRWgklJHi', NULL, '2024-02-01 16:36:52', '2024-02-01 16:36:52', 'avatars/WRmAjM0kF82Cro7HtCzNHsXqQThzsru9mVfUM21s.png', 1),
(18, 'rock', 'rempells.ila@example.net', NULL, '$2y$10$jIjdIPgRHYOfrL530bO8rOQ8TEH8iSQcdH3dtZFGQueWZgIIUcV/O', NULL, '2024-02-01 16:38:55', '2024-02-01 16:38:55', 'avatars/ulj1B614IWRn10xkM08iR19EDZHMfg3iuxepfvfJ.jpg', 0),
(21, 'bob', 'Destin@msa.com', NULL, '$2y$10$pbmsDFxeQAwDbD8L5bjZ1.CNBKY4N7Ud2rC5Ch2E/WPfoGPEfBpUC', NULL, '2024-02-01 18:12:58', '2024-02-01 18:12:58', 'avatars/ozy3XJea7409z9hXqamFL2WuVjuJVTyATBo5sjMq.jpg', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_auteur_id_foreign` FOREIGN KEY (`auteur_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `articles_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
