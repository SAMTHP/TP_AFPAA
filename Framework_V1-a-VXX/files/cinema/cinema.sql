-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 20 Mars 2019 à 15:49
-- Version du serveur: 5.5.59-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_acteur` varchar(20) NOT NULL,
  `prenom_acteur` varchar(20) NOT NULL,
  `nationalite_acteur` varchar(20) NOT NULL,
  `age_acteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `nom_acteur`, `prenom_acteur`, `nationalite_acteur`, `age_acteur`) VALUES
(2, 'Johansson', 'Scarlette', 'americaine', 55),
(14, 'Downey Jr', 'Robert', 'Americain', 53),
(23, 'Bosemun', 'Chadwick', 'Americain', 40),
(30, 'Kirigaya', 'Kazuto', 'Jap', 19);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre_film` varchar(30) DEFAULT NULL,
  `date_film` date DEFAULT NULL,
  `duree_film` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id_film`, `titre_film`, `date_film`, `duree_film`) VALUES
(1, 'Deadpool 3', '2016-09-04', 124),
(12, 'Le château sur le nuage', '1983-01-15', 111),
(13, 'Le voyage de Chihiro', '2002-04-10', 126),
(14, 'Princesse Mononoké', '2000-01-12', 135),
(21, 'avenger 3.5', '2019-05-19', 199),
(26, 'Captain Marvel', '2019-02-27', 189),
(27, 'X force', '2020-05-19', 188),
(39, 'Anthony et les minimois', '2028-11-05', 59),
(40, 'test de JiJou', '2018-11-25', 7),
(41, 'test de JiJou 2', '2028-11-05', 58),
(42, 'seulomonde', '1983-01-15', 745);

-- --------------------------------------------------------

--
-- Structure de la table `film__acteur`
--

CREATE TABLE IF NOT EXISTS `film__acteur` (
  `id_film` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  PRIMARY KEY (`id_film`,`id_acteur`),
  KEY `FK_film__acteur_id_acteur` (`id_acteur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `film__acteur`
--

INSERT INTO `film__acteur` (`id_film`, `id_acteur`) VALUES
(39, 23);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `film__acteur`
--
ALTER TABLE `film__acteur`
  ADD CONSTRAINT `FK_film__acteur_id_acteur` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  ADD CONSTRAINT `FK_film__acteur_id_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
