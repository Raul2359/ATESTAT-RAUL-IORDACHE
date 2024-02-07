-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2024 at 08:13 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atestatraul`
--
CREATE DATABASE IF NOT EXISTS `atestatraul` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `atestatraul`;

-- --------------------------------------------------------

--
-- Table structure for table `anunturi`
--

DROP TABLE IF EXISTS `anunturi`;
CREATE TABLE `anunturi` (
  `ID_Anunt` int NOT NULL,
  `ID_Masina` int DEFAULT NULL,
  `Nume_Vanzator` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Telefon_Vanzator` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email_Vanzator` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Detalii` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anunturi`
--

INSERT INTO `anunturi` (`ID_Anunt`, `ID_Masina`, `Nume_Vanzator`, `Telefon_Vanzator`, `Email_Vanzator`, `Detalii`) VALUES
(1, 1, 'John Doe', '0745632876', 'john.doe@email.com', 'Mașina în stare perfectă, unic proprietar.'),
(2, 2, 'Jane Smith', '0738246438', 'jane.smith@gmail.com', 'Vând BMW X3, an 2022, stare impecabilă.'),
(3, 3, 'Alex Johnson', '0723764675', 'alex.j@email.com', 'Mașină de lux Mercedes E-Class, vând urgent.'),
(4, 4, 'Laura Johnson', '0725400631', 'laurajhs@gmail.com', 'BMW SERIA 3, perfect pentru mediul urban.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_dealer`
--

DROP TABLE IF EXISTS `contact_dealer`;
CREATE TABLE `contact_dealer` (
  `ID_Contact_Dealer` int NOT NULL,
  `Nume_Dealer` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Telefon_Dealer` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email_Dealer` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_dealer`
--

INSERT INTO `contact_dealer` (`ID_Contact_Dealer`, `Nume_Dealer`, `Telefon_Dealer`, `Email_Dealer`) VALUES
(1, 'AutoDeal', '0372554332', 'contact.autodeal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `masini`
--

DROP TABLE IF EXISTS `masini`;
CREATE TABLE `masini` (
  `ID_Masina` int NOT NULL,
  `Marca` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Model` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `An_Fabricatie` int DEFAULT NULL,
  `Pret` decimal(10,2) DEFAULT NULL,
  `Descriere` text COLLATE utf8mb4_general_ci,
  `Imagine` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Contact_Nume` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Contact_Telefon` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masini`
--

INSERT INTO `masini` (`ID_Masina`, `Marca`, `Model`, `An_Fabricatie`, `Pret`, `Descriere`, `Imagine`, `Contact_Nume`, `Contact_Telefon`) VALUES
(1, 'Audi', 'A4', 2020, 30000.00, 'Sedan elegant', 'audi_a4.jpg', 'John Doe', '0745632876'),
(2, 'BMW', 'X3', 2022, 50000.00, 'SUV de lux', 'bmw_x3.jpg', 'Jane Smith', '0738246438'),
(3, 'Mercedes', 'E-Class', 2019, 40000.00, 'MASINA SUPERBA FARA PROBLEME', NULL, 'Alex Johnson', '0723764675'),
(4, 'BMW', 'Seria 3', 2022, 45000.00, 'Sedan elegant și practic, cu tehnologie avansată.', 'bmw_seria3.jpg', 'Laura Johnson', '0725400632'),
(5, 'Volkswagen', 'Golf', 2020, 25000.00, 'Hatchback practic pentru oraș', 'vw_golf.jpg', 'Andrei Popescu', '0788933432'),
(6, 'Ford', 'Explorer', 2021, 38000.00, 'SUV pentru aventuri în aer liber', 'ford_explorer.jpg', 'Ana Maria', '0756850438');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

DROP TABLE IF EXISTS `utilizatori`;
CREATE TABLE `utilizatori` (
  `ID_Utilizator` int NOT NULL,
  `Nume_Utilizator` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Parola` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`ID_Utilizator`, `Nume_Utilizator`, `Parola`) VALUES
(1, 'john_doe', 'JOHN123$'),
(2, 'jane_smith', 'smith2366'),
(3, 'alex_john', 'castravete5'),
(4, 'laura_johns', 'laurica55$');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anunturi`
--
ALTER TABLE `anunturi`
  ADD PRIMARY KEY (`ID_Anunt`),
  ADD KEY `ID_Masina` (`ID_Masina`);

--
-- Indexes for table `contact_dealer`
--
ALTER TABLE `contact_dealer`
  ADD PRIMARY KEY (`ID_Contact_Dealer`);

--
-- Indexes for table `masini`
--
ALTER TABLE `masini`
  ADD PRIMARY KEY (`ID_Masina`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`ID_Utilizator`),
  ADD UNIQUE KEY `Nume_Utilizator` (`Nume_Utilizator`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anunturi`
--
ALTER TABLE `anunturi`
  ADD CONSTRAINT `anunturi_ibfk_1` FOREIGN KEY (`ID_Masina`) REFERENCES `masini` (`ID_Masina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
