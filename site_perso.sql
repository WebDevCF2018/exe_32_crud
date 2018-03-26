-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 09 mars 2018 à 15:20
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_perso`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcategorie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(60) NOT NULL,
  `titre` varchar(60) NOT NULL,
  `description` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`idcategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `slug`, `titre`, `description`) VALUES
(1, 'acceuil', 'Acceuil', NULL),
(2, 'galerie', 'Galerie', NULL),
(3, 'tutos', 'Tutos', NULL),
(4, 'contact', 'Contact', NULL),
(5, 'cv', 'CV', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

DROP TABLE IF EXISTS `contenu`;
CREATE TABLE IF NOT EXISTS `contenu` (
  `idcont` int(11) NOT NULL AUTO_INCREMENT,
  `texte` text NOT NULL,
  PRIMARY KEY (`idcont`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenu_has_categorie`
--

DROP TABLE IF EXISTS `contenu_has_categorie`;
CREATE TABLE IF NOT EXISTS `contenu_has_categorie` (
  `contenu_idcont` int(11) NOT NULL,
  `categorie_idcategorie` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`contenu_idcont`,`categorie_idcategorie`),
  KEY `fk_contenu_has_categorie_categorie1_idx` (`categorie_idcategorie`),
  KEY `fk_contenu_has_categorie_contenu_idx` (`contenu_idcont`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contenu_has_categorie`
--
ALTER TABLE `contenu_has_categorie`
  ADD CONSTRAINT `fk_contenu_has_categorie_categorie1` FOREIGN KEY (`categorie_idcategorie`) REFERENCES `categorie` (`idcategorie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contenu_has_categorie_contenu` FOREIGN KEY (`contenu_idcont`) REFERENCES `contenu` (`idcont`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
