-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 20 juin 2019 à 08:53
-- Version du serveur :  5.7.24
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
-- Base de données :  `tp_avion`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectevol`
--

CREATE TABLE `affectevol` (
  `pas_num` int(11) NOT NULL,
  `vol_num` int(11) NOT NULL,
  `date_vol` date NOT NULL,
  `num_place` int(11) DEFAULT NULL,
  `prix` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `affectevol`
--

INSERT INTO `affectevol` (`pas_num`, `vol_num`, `date_vol`, `num_place`, `prix`) VALUES
(1, 103, '2008-11-05', 12, 135),
(3, 103, '2008-11-05', 23, 135),
(5, 100, '2008-11-01', 55, 180),
(6, 100, '2008-11-01', 54, 180),
(7, 100, '2008-11-01', 66, 180);

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

CREATE TABLE `avion` (
  `av_num` int(11) NOT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `type_avion` varchar(50) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL,
  `localisation` varchar(50) DEFAULT NULL,
  `date_mise_en_service` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avion`
--

INSERT INTO `avion` (`av_num`, `marque`, `type_avion`, `capacite`, `localisation`, `date_mise_en_service`) VALUES
(100, 'Airbus', 'A320', 381, 'Nice', '1987-03-20'),
(101, 'Boeing', 'B707', 250, 'Paris', '1984-02-27'),
(102, 'Airbus', 'A320', 522, 'Toulouse', '1988-01-24'),
(103, 'Caravelle', 'Caravelle', 240, 'Toulouse', '1964-01-01'),
(104, 'Boeing', 'B747', 400, 'Paris', '1988-01-01'),
(105, 'Airbus', 'A320', 423, 'Grenoble', '1998-05-01'),
(106, 'ATR', 'ATR42', 50, 'Paris', '1990-01-01'),
(107, 'Boeing', 'B727', 300, 'Lyon', '1988-01-01'),
(108, 'Boeing', 'B727', 300, 'Nantes', '1988-01-01'),
(109, 'Airbus', 'A340', 350, 'Bastia', '1995-01-01'),
(120, 'Caravelle', 'Caravelle', 240, 'Grenoble', '1960-01-01'),
(150, 'Airbus', 'A340', 345, 'Brive', '2000-01-01'),
(151, 'Boeing', 'B707', 250, 'Bastia', '1986-02-02'),
(155, 'Airbus', 'A340', 600, 'Toulouse', '1998-06-03'),
(160, 'Airbus', 'A340', 600, 'Paris', '1988-02-06');

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

CREATE TABLE `passager` (
  `pas_num` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `passager`
--

INSERT INTO `passager` (`pas_num`, `nom`, `prenom`, `ville`) VALUES
(1, 'MAUSSE', 'Fabien', 'Toulouse'),
(2, 'MERLHIOT', 'Pascal', 'Paris'),
(3, 'JEAN', 'Patrick', 'Nice'),
(4, 'PEREIRA', 'Joao', 'Limoges'),
(5, 'FREEMAN', 'Cathy', 'Paris'),
(6, 'MINETTE', 'Sophie', 'Grenoble'),
(7, 'MALHERBE', 'Fred', 'Lyon'),
(8, 'FERDINAND', 'Gilles', 'Fort De France'),
(9, 'BOST', 'Vincent', 'Brive');

-- --------------------------------------------------------

--
-- Structure de la table `pilote`
--

CREATE TABLE `pilote` (
  `pil_num` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `code_postal` char(5) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `date_debut_activite` date DEFAULT NULL,
  `date_fin_activite` date DEFAULT NULL,
  `salaire_brut` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pilote`
--

INSERT INTO `pilote` (`pil_num`, `nom`, `code_postal`, `ville`, `date_naissance`, `date_debut_activite`, `date_fin_activite`, `salaire_brut`) VALUES
(1, 'Serge', '37000', 'Tours', '1955-01-13', '1980-01-01', NULL, 1829.4),
(2, 'Jean', '75010', 'Paris', '1955-11-07', '1978-02-01', NULL, 8766),
(3, 'Roger', '38000', 'Grenoble', '1960-03-01', '1990-04-01', NULL, 2439.14),
(4, 'Robert', '44000', 'Nantes', '1968-03-03', '1993-06-01', NULL, 5686.45),
(5, 'Michel', '75010', 'Paris', '1956-11-08', '2000-01-01', NULL, 2744),
(7, 'Bertrand', '69001', 'Lyon', '1962-01-01', '1988-01-01', NULL, 6791.67),
(8, 'Hervé', '20000', 'Bastia', '1960-01-01', '1987-01-01', NULL, 3811.11),
(9, 'Luc', '75018', 'Paris', '1956-11-07', '1985-01-01', NULL, 7581.4),
(19, 'Driss', '75006', 'Paris', '1956-05-16', '1990-12-01', NULL, 7502.9),
(20, 'Sylvain', '31000', 'Toulouse', '1975-11-08', '2000-01-01', NULL, 4709.39),
(21, 'Lucien', '31000', 'Toulouse', '1965-07-30', '1995-10-03', NULL, 5540.43);

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `vol_num` int(11) NOT NULL,
  `av_num` int(11) NOT NULL,
  `pil_num` int(11) NOT NULL,
  `ville_depart` varchar(50) DEFAULT NULL,
  `ville_arrivee` varchar(50) DEFAULT NULL,
  `heure_depart` float DEFAULT NULL,
  `heure_arrivee` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`vol_num`, `av_num`, `pil_num`, `ville_depart`, `ville_arrivee`, `heure_depart`, `heure_arrivee`) VALUES
(100, 100, 1, 'Nice', 'Paris', 7.2, 9.5),
(101, 100, 2, 'Paris', 'Toulouse', 11.2, 12),
(102, 101, 1, 'Paris', 'Nice', 12.35, 14.45),
(103, 105, 3, 'Grenoble', 'Toulouse', 9, 11),
(104, 105, 3, 'Toulouse', 'Grenoble', 17, 19),
(105, 107, 7, 'Lyon', 'Paris', 6, 7),
(106, 109, 8, 'Bastia', 'Paris', 10, 13),
(107, 106, 9, 'Paris', 'Brive', 7, 8),
(108, 106, 9, 'Brive', 'Paris', 19, 20),
(109, 107, 7, 'Paris', 'Lyon', 18, 19),
(110, 102, 2, 'Toulouse', 'Paris', 15, 16),
(111, 108, 5, 'Nice', 'Paris', 14, 16),
(112, 109, 2, 'Bastia', 'Paris', 10, 13),
(113, 105, 2, 'Toulouse', 'Grenoble', 17, 19),
(114, 150, 2, 'Paris', 'Marseille', 10, 12),
(115, 155, 2, 'Paris', 'Lille', 11, 12),
(116, 101, 4, 'Nice', 'Nantes', 17, 19),
(714, 104, 1, 'Moulinsart', 'Sydney', 1, 23);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectevol`
--
ALTER TABLE `affectevol`
  ADD PRIMARY KEY (`pas_num`,`vol_num`,`date_vol`),
  ADD KEY `vol_num` (`vol_num`);

--
-- Index pour la table `avion`
--
ALTER TABLE `avion`
  ADD PRIMARY KEY (`av_num`);

--
-- Index pour la table `passager`
--
ALTER TABLE `passager`
  ADD PRIMARY KEY (`pas_num`);

--
-- Index pour la table `pilote`
--
ALTER TABLE `pilote`
  ADD PRIMARY KEY (`pil_num`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`vol_num`),
  ADD KEY `num_avion_FK` (`av_num`),
  ADD KEY `num_pilote_FK` (`pil_num`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avion`
--
ALTER TABLE `avion`
  MODIFY `av_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT pour la table `passager`
--
ALTER TABLE `passager`
  MODIFY `pas_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `pilote`
--
ALTER TABLE `pilote`
  MODIFY `pil_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `vol`
--
ALTER TABLE `vol`
  MODIFY `vol_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affectevol`
--
ALTER TABLE `affectevol`
  ADD CONSTRAINT `affectevol_ibfk_1` FOREIGN KEY (`pas_num`) REFERENCES `passager` (`pas_num`),
  ADD CONSTRAINT `affectevol_ibfk_2` FOREIGN KEY (`vol_num`) REFERENCES `vol` (`vol_num`);

--
-- Contraintes pour la table `vol`
--
ALTER TABLE `vol`
  ADD CONSTRAINT `num_avion_FK` FOREIGN KEY (`av_num`) REFERENCES `avion` (`av_num`),
  ADD CONSTRAINT `num_pilote_FK` FOREIGN KEY (`pil_num`) REFERENCES `pilote` (`pil_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
