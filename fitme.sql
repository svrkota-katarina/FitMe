-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 29, 2020 at 02:46 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitme`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`username`, `password`) VALUES
('kaca', 'sifra');

-- --------------------------------------------------------

--
-- Table structure for table `recept`
--

DROP TABLE IF EXISTS `recept`;
CREATE TABLE IF NOT EXISTS `recept` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(40) DEFAULT NULL,
  `vreme` int(11) DEFAULT NULL,
  `kcal` int(11) DEFAULT NULL,
  `priprema` text,
  `slika` varchar(100) NOT NULL,
  PRIMARY KEY (`idR`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recept`
--

INSERT INTO `recept` (`idR`, `naslov`, `vreme`, `kcal`, `priprema`, `slika`) VALUES
(1, 'Ovsena kasa', 10, 320, 'Pomesati sve sastojke u jednu serpu i staviti na sporet na srednju temperaturu. \r\nKada smesa prokljuca, skinuti serpu sa vatre i mesati 3 minuta.', '1'),
(2, 'Riba sa povrcem', 45, 410, 'Luk isecite na reznjeve, stavite ga u tepsiju ili vatrostalnu posudu, prelijte uljem i prekrite folijom. Pecite luk u vec zagrejanoj rerni na 220 stepeni oko 7 minuta pa mu dodajte svo iseckano povrce.\r\nPosolite, dodajte sitnu papriku, nalite vodom pa pecite prekriveno folijom oko 20 minuta.\r\nPotom odgore poredjajte osoljenu ribu, nakapajte limun i vratite u rernu da se pece.\r\nPosle 15 minuta sklonite foliju pa zapecite jos malo.\r\nPosluzite dok je toplo i uzivajte u ukusima.', '2'),
(3, 'Jabuka sa kikiriki puterom', 5, 200, 'Iseci jabuku na komade i servirati sa jednom kasikom kikiriki putera.', '3'),
(4, 'Paradajz corba', 30, 370, 'Nalijte ulje, tako da vam prekrije dno serpe, i dodajte brasno, koje treba malo da proprzite prakticno kao kad pravite zaprsku.\r\nPostepeno sipajte sok od paradajza uz neprestano mesanje, kako biste izbegli stvaranje grudvica, a zatim dodajte i vodu. Zaciniti sa secerom, soli i biberom po zelji.\r\nKuvajte je  20 minuta, a zatim je zakuvajte sa domacim rezancima ili flekicama.', '4');

-- --------------------------------------------------------

--
-- Table structure for table `sastojak`
--

DROP TABLE IF EXISTS `sastojak`;
CREATE TABLE IF NOT EXISTS `sastojak` (
  `idS` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) NOT NULL,
  `kcal` int(11) NOT NULL,
  PRIMARY KEY (`idS`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sastojak`
--

INSERT INTO `sastojak` (`idS`, `ime`, `kcal`) VALUES
(1, 'ovsene pahuljice', 379),
(2, 'borovnica', 57),
(3, 'bademovo mleko', 46),
(4, 'banana', 90),
(5, 'ekstrakt vanile', 15),
(6, 'oslic', 100),
(7, 'crni luk', 20),
(9, 'paprika', 45),
(10, 'sargarepa', 60),
(11, 'krompir', 220),
(12, 'celer', 80),
(26, 'jabuka', 98),
(14, 'persun', 30),
(15, 'beli luk', 35),
(16, 'maslinovo ulje', 330),
(17, 'so', 10),
(18, 'limun', 35),
(19, 'voda', 0),
(20, 'aleva paprika', 10),
(27, 'kikiriki puter', 470),
(28, 'brasno', 130),
(29, 'paradajz', 130),
(30, 'secer', 70),
(31, 'biber', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sast_u_red`
--

DROP TABLE IF EXISTS `sast_u_red`;
CREATE TABLE IF NOT EXISTS `sast_u_red` (
  `idR` int(11) DEFAULT NULL,
  `idS` int(11) DEFAULT NULL,
  `idSR` int(11) NOT NULL AUTO_INCREMENT,
  `kol` double DEFAULT NULL,
  `jed` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idSR`),
  KEY `idR` (`idR`),
  KEY `idS` (`idS`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sast_u_red`
--

INSERT INTO `sast_u_red` (`idR`, `idS`, `idSR`, `kol`, `jed`) VALUES
(1, 1, 1, 50, 'g'),
(1, 2, 2, 10, 'g'),
(1, 3, 3, 100, 'ml'),
(1, 4, 4, 1, ''),
(1, 5, 5, 1, 'kasicica'),
(2, 6, 6, 300, 'g'),
(2, 7, 7, 1, 'glavica'),
(2, 9, 8, 1, ''),
(2, 10, 9, 3, ''),
(2, 11, 10, 3, ''),
(2, 15, 11, 3, 'cena'),
(2, 16, 12, 4, 'kasike'),
(2, 17, 13, 1, 'kasicica'),
(2, 18, 14, 1, ''),
(2, 19, 15, 2, 'dl'),
(2, 20, 16, 1, 'kasicica'),
(3, 26, 17, 1, ''),
(3, 27, 18, 1, 'kasika'),
(4, 28, 19, 2, 'kasike'),
(4, 16, 20, 2, 'kasike'),
(4, 29, 21, 5, 'kom'),
(4, 19, 22, 450, 'ml'),
(4, 30, 23, 1, 'kasicica'),
(4, 17, 24, NULL, 'prstohvat'),
(4, 31, 25, NULL, 'prstohvat');

-- --------------------------------------------------------

--
-- Table structure for table `voli`
--

DROP TABLE IF EXISTS `voli`;
CREATE TABLE IF NOT EXISTS `voli` (
  `idR` int(11) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `idV` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idV`),
  KEY `idR` (`idR`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voli`
--

INSERT INTO `voli` (`idR`, `username`, `idV`) VALUES
(1, 'kaca', 27),
(4, 'kaca', 24);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
