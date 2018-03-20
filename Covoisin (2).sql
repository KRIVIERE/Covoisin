-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2018 at 09:13 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Covoisin`
--

-- --------------------------------------------------------

--
-- Table structure for table `Commentaire_demande`
--

CREATE TABLE `Commentaire_demande` (
  `ID` int(3) NOT NULL,
  `demandeID` int(3) NOT NULL,
  `userID` int(3) NOT NULL,
  `message` varchar(255) NOT NULL,
  `statut` int(3) NOT NULL,
  `message_statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Commentaire_offre`
--

CREATE TABLE `Commentaire_offre` (
  `ID` int(3) NOT NULL,
  `offreID` int(3) NOT NULL,
  `userID` int(3) NOT NULL,
  `message` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `message_statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Demandes`
--

CREATE TABLE `Demandes` (
  `ID` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Titre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Categorie` varchar(255) CHARACTER SET latin1 NOT NULL,
  `userID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Offres`
--

CREATE TABLE `Offres` (
  `ID` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Titre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Categorie` varchar(255) CHARACTER SET latin1 NOT NULL,
  `userID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Nombre de points` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Commentaire_demande`
--
ALTER TABLE `Commentaire_demande`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Commentaire_offre`
--
ALTER TABLE `Commentaire_offre`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Demandes`
--
ALTER TABLE `Demandes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Offres`
--
ALTER TABLE `Offres`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Commentaire_demande`
--
ALTER TABLE `Commentaire_demande`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Commentaire_offre`
--
ALTER TABLE `Commentaire_offre`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Demandes`
--
ALTER TABLE `Demandes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Offres`
--
ALTER TABLE `Offres`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
