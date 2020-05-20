-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 10:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smoke n skulls`
--

-- --------------------------------------------------------

--
-- Table structure for table `komisije`
--

CREATE TABLE `komisije` (
  `komisija_id` int(11) NOT NULL,
  `ime` varchar(255) COLLATE utf8_bin NOT NULL,
  `prezime` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `adresa` varchar(255) COLLATE utf8_bin NOT NULL,
  `artist` varchar(255) COLLATE utf8_bin NOT NULL,
  `stil` varchar(255) COLLATE utf8_bin NOT NULL,
  `papir` varchar(255) COLLATE utf8_bin NOT NULL,
  `opis` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `komisije`
--

INSERT INTO `komisije` (`komisija_id`, `ime`, `prezime`, `mail`, `adresa`, `artist`, `stil`, `papir`, `opis`) VALUES
(1, 'Ivo', 'Ivic', 'Ivic@gmail.com', 'Ulica Ljudevita Gaja 3, Zagreb', 'rea', 'b&w', 'A6', ' Portret zene s kratkom crnom kosom'),
(2, 'Zdravko', 'Dren', 'zdrav.ko.dren@gmail.com', 'Trg mladosti 8, Zagreb', 'dino', 'lined', 'A4', 'Lubanja s krunom'),
(3, 'Ana', 'Anic', 'anci@gmail.com', 'Ulica Augusta Senoe 12, Split', 'rea', 'color', 'A5', 'Portret zene s mackom :)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komisije`
--
ALTER TABLE `komisije`
  ADD PRIMARY KEY (`komisija_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komisije`
--
ALTER TABLE `komisije`
  MODIFY `komisija_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
