-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2015 at 08:44 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------
CREATE Database OTymSieNieMowi3;
--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `OTymSieNieMowi3` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Imie` varchar(255) DEFAULT NULL,
  `Nazwisko` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `TelKom` varchar(255) DEFAULT NULL,
  `AdresZamieszkania` varchar(255) DEFAULT NULL,
  `KodPocztowy` varchar(255) DEFAULT NULL,
  `Miasto` varchar(255) DEFAULT NULL,
`UczestnikBierny` varchar(255) DEFAULT NULL,
`UczestnikCzynny` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `OTymSieNieMowi3` 
(`Imie`, `Nazwisko`,`Email`,`TelKom`,`AdresZamieszkania`,`KodPocztowy`,`Miasto`,`UczestnikBierny`,`UczestnikCzynny`) 
VALUES
('Jan', 'Kowalski','a@a.pl','4851234','ul.Przykladowa','56-5020','Zgadnij','true','true');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
