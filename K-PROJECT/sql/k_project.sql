-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 19 Décembre 2019 à 00:46
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31
CREATE DATABASE k_project;
USE k_project;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `k_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
`id` int(11) NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_publication` date DEFAULT NULL,
  `vues` int(11) DEFAULT NULL,
  `descriptions` text COLLATE utf8_unicode_ci,
  `chemin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `utilisateur_pk` varchar(75) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `titre`, `date_publication`, `vues`, `descriptions`, `chemin`, `utilisateur_pk`) VALUES
(34, 'Mugiwara captain', '2019-12-18', NULL, 'Monkey D. Luffy, surnommé d''une manière récurrente Luffy au chapeau de paille', 'luffy.gif', 'Niconini18'),
(32, 'Nezuko', '2019-12-18', NULL, 'hmmm hmmm ', 'nezuko.jpg', 'yuyurob'),
(31, 'Massy', '2019-12-18', NULL, 'massy fait wouf wouf', 'chien.jpg', 'yuyurob'),
(38, 'Captain Falcon', '2019-12-18', NULL, 'Personnage qui apparait souvent dans Smash Bros', 'falcon.png', 'redDragonEmpror65'),
(35, 'Kratos', '2019-12-18', NULL, '"Boy"', 'kratos.jpg', 'VincLeKing123'),
(36, 'Final fantasy 7', '2019-12-18', NULL, 'Cloud from ff7 video game', 'Cloud-FFVIIArt.png', 'VincLeKing123'),
(37, 'L''empreur dragon rouge ', '2019-12-18', NULL, 'Anime mecha big robot. ', 'redDragon.jpg', 'redDragonEmpror65');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pseudonyme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mot_passe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `courriel` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `prenom`, `pseudonyme`, `mot_passe`, `courriel`) VALUES
('rt', 'Yuhan', 'yuyurob', 'nezuko', 'yuyurob@hotmail.com'),
('Haddad', 'Massy', 'massysy', '1234', 'massy@gmail.com'),
('Trudel', 'Vincent', 'VincLeKing123', 'vincent23XXkiller', 'vincent.trudel@lepisc'),
('therrien', 'Nicolas', 'Niconini18', 'nicolas25allo', 'nicolas@lepisc.com'),
('Hisei', 'Hyodo', 'redDragonEmpror65', 'Abc123$qwerty', 'hydodo@lepisc.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `utilisateur_image_chemin` (`titre`,`chemin`,`utilisateur_pk`), ADD KEY `utilisateur_pk` (`utilisateur_pk`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`pseudonyme`), ADD UNIQUE KEY `courriel` (`courriel`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
