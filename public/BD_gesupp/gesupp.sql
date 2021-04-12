-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 12 avr. 2021 à 08:54
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gesupp`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210406173938', '2021-04-06 17:40:42', 671),
('DoctrineMigrations\\Version20210406174412', '2021-04-06 17:44:30', 683),
('DoctrineMigrations\\Version20210406181442', '2021-04-06 18:15:04', 714),
('DoctrineMigrations\\Version20210406182107', '2021-04-06 18:21:25', 151),
('DoctrineMigrations\\Version20210410143803', '2021-04-10 14:39:03', 657);

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

DROP TABLE IF EXISTS `fonction`;
CREATE TABLE IF NOT EXISTS `fonction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id`, `libelle`) VALUES
(1, 'LM'),
(2, 'RH'),
(3, 'DU'),
(4, 'CD');

-- --------------------------------------------------------

--
-- Structure de la table `fonction_utilisateur`
--

DROP TABLE IF EXISTS `fonction_utilisateur`;
CREATE TABLE IF NOT EXISTS `fonction_utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `id_fonction` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fonction_utilisateur`
--

INSERT INTO `fonction_utilisateur` (`id`, `id_utilisateur`, `id_fonction`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 3, 3),
(5, 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `ghs_demande`
--

DROP TABLE IF EXISTS `ghs_demande`;
CREATE TABLE IF NOT EXISTS `ghs_demande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_demandeur` int(11) NOT NULL,
  `id_collaborateur` int(11) NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `duree` int(11) NOT NULL,
  `tache` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cd1` int(11) DEFAULT NULL,
  `id_rh1` int(11) DEFAULT NULL,
  `id_du1` int(11) DEFAULT NULL,
  `id_cd2` int(11) DEFAULT NULL,
  `id_rh2` int(11) DEFAULT NULL,
  `id_du2` int(11) DEFAULT NULL,
  `statut_cd1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut_rh1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut_du1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut_cd2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut_rh2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut_du2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_reelle` int(11) DEFAULT NULL,
  `payee` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `niveau` int(11) NOT NULL,
  `quota_actuel` int(11) NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D1C63B312B2DC9C` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `matricule`, `roles`, `password`, `email`, `telephone`, `nom`, `prenom`, `niveau`, `quota_actuel`, `sexe`, `site`, `fonction`, `departement`, `is_verified`) VALUES
(1, 'mat1', '[]', '$argon2id$v=19$m=65536,t=4,p=1$QlYxWUxZNFZmaHBYc0hqUA$tbo+Nt1PPbcpv9r4KpMoLEFFsJE6lV645kZ+aHyjyWw', 'mat1@yahoo.com', NULL, 'User1', NULL, 0, 0, 'Male', NULL, NULL, NULL, 0),
(2, 'mat2', '[]', '$argon2id$v=19$m=65536,t=4,p=1$VTdxRWx0YUN5ZVNULzhmUg$qAWLRsZUvJSkeMfiFrRWEHLiYJA7B5IIxla3kENOMpU', 'mat2@yahoo.com', NULL, 'User2', NULL, 0, 0, 'Male', NULL, NULL, NULL, 0),
(3, 'mat3', '[]', '$argon2id$v=19$m=65536,t=4,p=1$NzdhSHZqRUppQlhFbEF0dg$ov70qCXe8StKT2sv+GSWdAmxjyHzDKjyJuwYoUp2LgA', 'mat3@yahoo.com', NULL, 'User3', NULL, 0, 0, 'Female', NULL, NULL, NULL, 0),
(4, 'mat4', '[]', '$argon2id$v=19$m=65536,t=4,p=1$bTEvTzBOek9tMEpIc292Wg$nVK3izhZD0jITVbdisKnd99xktyk6tM/pZGHHZWv3dE', 'mat4@yahoo.com', NULL, 'User4', NULL, 0, 0, 'Female', NULL, NULL, NULL, 0),
(5, 'mat5', '[]', '$argon2id$v=19$m=65536,t=4,p=1$WTRqTU9DRWUvOEFNckc0Rw$3LlcQAMPrlbPgSQf0GP54bi1qKbCHAuHKlr7KTyVZT0', 'mat5@yahoo.com', NULL, 'User5', NULL, 0, 0, 'Male', NULL, NULL, NULL, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
