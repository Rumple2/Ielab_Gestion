-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2022 at 03:02 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_es`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `Id_formulaire` int(11) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Montant` float DEFAULT NULL,
  `Date_formulaire` date DEFAULT NULL,
  `Nbr_article` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_formulaire`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identification`
--

DROP TABLE IF EXISTS `identification`;
CREATE TABLE IF NOT EXISTS `identification` (
  `Nom` varchar(10) NOT NULL,
  `Mot_passe` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Nom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
