-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 03:33 PM
-- Server version: 10.4.10-MariaDB
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
-- Database: `wpcalculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_alternatives`
--

CREATE TABLE `wp_alternatives` (
  `id_alternative` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wp_alternatives`
--

INSERT INTO `wp_alternatives` (`id_alternative`, `name`) VALUES
(1, 'Kost Satu'),
(2, 'Kost Wisma'),
(3, 'Kost Beverly'),
(4, 'Kost Panghegar');

-- --------------------------------------------------------

--
-- Table structure for table `wp_criterias`
--

CREATE TABLE `wp_criterias` (
  `id_criteria` tinyint(3) UNSIGNED NOT NULL,
  `criteria` varchar(100) NOT NULL,
  `weight` float NOT NULL,
  `attribute` set('benefit','cost') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wp_criterias`
--

INSERT INTO `wp_criterias` (`id_criteria`, `criteria`, `weight`, `attribute`) VALUES
(1, 'Jarak ke kampus (KM)', 3, 'cost'),
(2, 'Luas kamar (M2)', 4, 'benefit'),
(3, 'Harga per bulan (Rp)', 5, 'cost');

-- --------------------------------------------------------

--
-- Table structure for table `wp_evaluations`
--

CREATE TABLE `wp_evaluations` (
  `id_alternative` smallint(5) UNSIGNED NOT NULL,
  `id_criteria` tinyint(3) UNSIGNED NOT NULL,
  `value` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wp_evaluations`
--

INSERT INTO `wp_evaluations` (`id_alternative`, `id_criteria`, `value`) VALUES
(1, 1, 3),
(1, 2, 12),
(1, 3, 450000),
(2, 1, 1),
(2, 2, 12),
(2, 3, 1000000),
(3, 1, 5),
(3, 2, 16),
(3, 3, 1000000),
(4, 1, 3),
(4, 2, 6.25),
(4, 3, 350000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_alternatives`
--
ALTER TABLE `wp_alternatives`
  ADD PRIMARY KEY (`id_alternative`);

--
-- Indexes for table `wp_criterias`
--
ALTER TABLE `wp_criterias`
  ADD PRIMARY KEY (`id_criteria`);

--
-- Indexes for table `wp_evaluations`
--
ALTER TABLE `wp_evaluations`
  ADD PRIMARY KEY (`id_alternative`,`id_criteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_alternatives`
--
ALTER TABLE `wp_alternatives`
  MODIFY `id_alternative` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
