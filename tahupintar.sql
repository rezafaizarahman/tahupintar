-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2014 at 10:05 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tahupintar`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id_gbr` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(18) NOT NULL,
  `nm_gbr` varchar(50) NOT NULL,
  `src_gbr` varchar(50) NOT NULL,
  `src_tulisan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_gbr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gbr`, `kategori`, `nm_gbr`, `src_gbr`, `src_tulisan`) VALUES
(1, 'transportasi', 'sepeda motor', 'transportasi.sepedamotor.gambar.png', 'transportasi.sepedamotor.tulisan.png'),
(2, 'transportasi', 'kapal', 'transportasi.kapal.gambar.png', 'transportasi.kapal.tulisan.png'),
(3, 'transportasi', 'kereta api', 'transportasi.keretaapi.gambar.png', 'transportasi.keretaapi.tulisan.png'),
(4, 'transportasi', 'mobil', 'transportasi.mobil.gambar.png', 'transportasi.mobil.tulisan.png'),
(5, 'transportasi', 'pesawat', 'transportasi.pesawat.gambar.png', 'transportasi.pesawat.tulisan.png'),
(6, 'transportasi', 'motor', 'transportasi.sepeda.gambar.png', 'transportasi.sepeda.tulisan.png');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `id_gbr` int(11) NOT NULL,
  `id_x` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_gbr`, `id_x`, `left`, `right`) VALUES
(1, 1, 1, 1, 4),
(2, 1, 2, 3, 1),
(3, 1, 3, 1, 3),
(4, 1, 4, 1, 2),
(5, 1, 5, 1, 5),
(6, 1, 6, 6, 1),
(7, 2, 1, 1, 2),
(8, 2, 2, 3, 2),
(9, 2, 3, 2, 4),
(10, 2, 4, 4, 2),
(11, 2, 5, 2, 5),
(12, 2, 6, 6, 2),
(13, 3, 1, 1, 3),
(14, 3, 2, 3, 2),
(15, 3, 3, 4, 3),
(16, 3, 4, 3, 5),
(17, 3, 5, 6, 3),
(18, 3, 6, 3, 6),
(19, 4, 1, 4, 1),
(20, 4, 2, 4, 2),
(21, 4, 3, 2, 4),
(22, 4, 4, 3, 4),
(23, 4, 5, 4, 5),
(24, 4, 6, 4, 6),
(25, 5, 1, 1, 5),
(26, 5, 2, 5, 2),
(27, 5, 3, 5, 3),
(28, 5, 4, 4, 5),
(29, 5, 5, 5, 4),
(30, 5, 6, 5, 6),
(31, 6, 1, 1, 6),
(32, 6, 2, 2, 6),
(33, 6, 3, 6, 2),
(34, 6, 4, 3, 6),
(35, 6, 5, 6, 4),
(36, 6, 6, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_usr` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_usr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_usr`, `nama`, `nilai`) VALUES
(1, 'dann', 90),
(2, 'user1', 60),
(3, 'user1', 40),
(4, 'user1', 50),
(5, 'user1', 60),
(6, 'user1', 70),
(7, 'user1', 80),
(8, 'user1', 90),
(9, 'user1', 100),
(10, 'user1', 110),
(11, 'user1', 120),
(12, 'wildanil', 50),
(13, 'danker', 30),
(14, 'wildanil_g', 50),
(15, 'dedanker', 50),
(16, 'reza', 50);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
