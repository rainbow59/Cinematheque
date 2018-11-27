-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 27 Novembre 2018 à 11:48
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Cinematheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

CREATE TABLE `annee` (
  `ID` int(11) NOT NULL,
  `annee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annee`
--

INSERT INTO `annee` (`ID`, `annee`) VALUES
(26, 2005),
(27, 2006),
(28, 2007),
(29, 2008),
(30, 2009),
(31, 2010),
(32, 2011),
(33, 2012),
(34, 2013),
(35, 2014),
(36, 2015),
(37, 2016),
(38, 2017),
(39, 2018),
(40, 2019),
(41, 1965),
(42, 1966),
(43, 1967),
(44, 1968),
(45, 1969),
(46, 1970),
(47, 1971),
(48, 1972),
(49, 1973),
(50, 1974),
(51, 1975),
(52, 1976),
(53, 1977),
(54, 1978),
(55, 1979),
(56, 1980),
(57, 1981),
(58, 1982),
(59, 1983),
(60, 1984),
(61, 1985),
(62, 1986),
(63, 1987),
(64, 1988),
(65, 1989),
(66, 1990),
(67, 1991),
(68, 1992),
(69, 1993),
(70, 1994),
(71, 1995),
(72, 1996),
(73, 1997),
(74, 1998),
(75, 1999),
(76, 2000),
(77, 2001),
(78, 2002),
(79, 2003),
(80, 2004),
(81, 2005),
(82, 2006),
(83, 2007),
(84, 2008),
(85, 2009),
(86, 2010),
(87, 2011),
(88, 2012),
(89, 2013),
(90, 2014),
(91, 2015),
(92, 2016),
(93, 2017),
(94, 2018),
(95, 2019),
(96, 2020);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `ID` int(11) NOT NULL,
  `nom` text NOT NULL,
  `description` text NOT NULL,
  `realisateur` text NOT NULL,
  `ID_Genre` int(11) NOT NULL,
  `ID_Annee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `ID` int(11) NOT NULL,
  `genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`ID`, `genre`) VALUES
(1, 'Film fantastique'),
(2, 'Film policier'),
(3, 'Disney'),
(4, 'Science-Fiction'),
(5, 'Thriller'),
(6, 'Documentaire');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annee`
--
ALTER TABLE `annee`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annee`
--
ALTER TABLE `annee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
