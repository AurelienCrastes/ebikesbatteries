-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 05 Décembre 2016 à 19:01
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ebikesbatteries`
--

-- --------------------------------------------------------

--
-- Structure de la table `batterie`
--

CREATE TABLE `batterie` (
  `id` int(11) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `volt` int(11) NOT NULL,
  `capacite` double NOT NULL,
  `puissance` double NOT NULL,
  `poids` double NOT NULL,
  `taille` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `disponibilite` tinyint(1) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `photo_grande_01` varchar(255) NOT NULL,
  `photo_grande_02` varchar(255) NOT NULL,
  `photo_grande_03` varchar(255) NOT NULL,
  `photo_grande_04` varchar(255) NOT NULL,
  `photo_grande_05` varchar(255) NOT NULL,
  `photo_petite_01` varchar(255) NOT NULL,
  `photo_petite_02` varchar(255) NOT NULL,
  `photo_petite_03` varchar(255) NOT NULL,
  `photo_petite_04` varchar(255) NOT NULL,
  `photo_petite_05` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `paypal_value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `batterie`
--

INSERT INTO `batterie` (`id`, `marque`, `volt`, `capacite`, `puissance`, `poids`, `taille`, `prix`, `disponibilite`, `photo`, `type`, `photo_grande_01`, `photo_grande_02`, `photo_grande_03`, `photo_grande_04`, `photo_grande_05`, `photo_petite_01`, `photo_petite_02`, `photo_petite_03`, `photo_petite_04`, `photo_petite_05`, `position`, `paypal_value`) VALUES
(2, 'Panasonic', 26, 20.8, 524.16, 4.1, '273,22x153,26x106,40mm', 369, 0, 'batteriePAN26V20AH.png', NULL, 'PAN01big01', 'PAN01big02', 'PAN01big03', 'PAN01big04', 'PAN01big05', 'PAN01little01.png', 'PAN01little02.png', 'PAN01little03.png', 'PAN01little04.png', 'PAN01little05.png', NULL, '2TURD59V57U28'),
(3, 'Panasonic', 26, 13.2, 332.64, 3.5, '273,22x153,26x106,40mm', 244, 0, 'batteriePAN26V13AH.png', NULL, 'PAN02big01', 'PAN02big02', 'PAN02big03', 'PAN02big04', 'PAN02big05', 'PAN02little01.png', 'PAN02little02.png', 'PAN02little03.png', 'PAN02little04.png', 'PAN02little05.png', NULL, 'NJLP2282573HU'),
(4, 'Impulse', 36, 13, 468, 2.5, ' 283,91x113,89x104,35mm', 284, 1, 'batteriePAN36V.png', NULL, 'PAN03big01', 'PAN03big02', 'PAN03big03', 'PAN03big04', 'PAN03big05', 'PAN03little01.png', 'PAN03little02.png', 'PAN03little03.png', 'PAN03little04.png', 'PAN03little05.png', NULL, 'C6Q4CQKGKAD26'),
(5, 'Bosch', 36, 10.4, 374.4, 2.46, '295,72x107,9x86,40mm', 224, 0, 'batterieBOSCHA.png', 'A', 'BOS01big01', 'BOS01big02', 'BOS01big03', 'BOS01big04', 'BOS01big05', 'BOS01little01.png', 'BOS01little02.png', 'BOS01little03.png', 'BOS01little04.png', 'BOS01little05.png', 'Cadre', 'TN7QGW6G9RCFS'),
(6, 'Bosch', 36, 10.4, 374.4, 2.46, '295,72x107,9x86,40mm', 234, 1, 'batterieBOSCHB.png', 'B', 'BOS02big01', 'BOS02big02', 'BOS02big03', 'BOS02big04', 'BOS02big05', 'BOS02little01.png', 'BOS02little02.png', 'BOS02little03.png', 'BOS02little04.png', 'BOS02little05.png', 'Porte-bagages', 'AFAP4FBS9E3BC');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `batterie`
--
ALTER TABLE `batterie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `batterie`
--
ALTER TABLE `batterie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
