-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2024 at 08:24 PM
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
-- Database: `atestatraul2`
--
CREATE DATABASE IF NOT EXISTS `atestatraul2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `atestatraul2`;

-- --------------------------------------------------------

--
-- Table structure for table `anunturi`
--

DROP TABLE IF EXISTS `anunturi`;
CREATE TABLE `anunturi` (
  `ID_Anunt` int NOT NULL,
  `ID_Masina` int DEFAULT NULL,
  `Nume_Vanzator` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Telefon_Vanzator` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email_Vanzator` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Detalii` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anunturi`
--

INSERT INTO `anunturi` (`ID_Anunt`, `ID_Masina`, `Nume_Vanzator`, `Telefon_Vanzator`, `Email_Vanzator`, `Detalii`) VALUES
(1, 1, 'John Doe', '0745632876', 'john.doe@email.com', 'Mașina în stare perfectă, unic proprietar.'),
(2, 2, 'Jane Smith', '0738246438', 'jane.smith@gmail.com', 'Vând BMW X3, an 2022, stare impecabilă.'),
(3, 3, 'Alex Johnson', '0723764675', 'alex.j@email.com', 'Mașină de lux Mercedes E-Class, vând urgent.'),
(4, 4, 'Laura Johnson', '0725400631', 'laurajhs@gmail.com', 'BMW SERIA 3, perfect pentru mediul urban.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `comenzi_masini`
--

DROP TABLE IF EXISTS `comenzi_masini`;
CREATE TABLE `comenzi_masini` (
  `id` int NOT NULL,
  `tip_vehicul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tip_cutie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tip_transmisie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tip_combustibil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `producator` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `an_fabricatie_de_la` int NOT NULL,
  `an_fabricatie_pana_la` int NOT NULL,
  `buget_euro` decimal(10,2) NOT NULL,
  `nr_kilometri` int NOT NULL,
  `judet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `localitate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nume` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `detalii_suplimentare` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `data_creare` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_dealer`
--

DROP TABLE IF EXISTS `contact_dealer`;
CREATE TABLE `contact_dealer` (
  `ID_Contact_Dealer` int NOT NULL,
  `Nume_Dealer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Telefon_Dealer` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email_Dealer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_dealer`
--

INSERT INTO `contact_dealer` (`ID_Contact_Dealer`, `Nume_Dealer`, `Telefon_Dealer`, `Email_Dealer`) VALUES
(1, 'AutoDeal', '0372554332', 'contact.autodeal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE `contact_messages` (
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`name`, `email`, `message`) VALUES
('Raul TEST', 'urszulylaura02@gmail.com', 'TEST'),
('Raul TEST', 'urszulylaura02@gmail.com', 'TEST'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `masini`
--

DROP TABLE IF EXISTS `masini`;
CREATE TABLE `masini` (
  `ID_Masina` int NOT NULL,
  `Marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `An_Fabricatie` int DEFAULT NULL,
  `Pret` decimal(10,2) DEFAULT NULL,
  `Descriere` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `Imagine` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Contact_Nume` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Contact_Telefon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masini`
--

INSERT INTO `masini` (`ID_Masina`, `Marca`, `Model`, `An_Fabricatie`, `Pret`, `Descriere`, `Imagine`, `Contact_Nume`, `Contact_Telefon`) VALUES
(1, 'Audi', 'A4', 2020, 30000.00, 'Sedan elegant', 'fc1.png', 'John Doe', '0745632876'),
(2, 'BMW', 'X3', 2022, 50000.00, 'SUV de lux', 'fc2.png', 'Jane Smith', '0738246438'),
(3, 'Mercedes', 'E-Class', 2019, 40000.00, 'MASINA SUPERBA FARA PROBLEME', 'fc3.png', 'Alex Johnson', '0723764675'),
(4, 'BMW', 'Seria 3', 2022, 45000.00, 'Sedan elegant și practic, cu tehnologie avansată.', 'fc4.png', 'Laura Johnson', '0725400632'),
(5, 'Volkswagen', 'Golf', 2020, 25000.00, 'Hatchback practic pentru oraș', 'fc5.png', 'Andrei Popescu', '0788933432'),
(6, 'Ford', 'Explorer', 2021, 38000.00, 'SUV pentru aventuri în aer liber', 'fc6.png', 'Ana Maria', '0756850438');

-- --------------------------------------------------------

--
-- Table structure for table `poze_masini`
--

DROP TABLE IF EXISTS `poze_masini`;
CREATE TABLE `poze_masini` (
  `ID_Poza` int NOT NULL,
  `ID_Masina` int DEFAULT NULL,
  `Cale_Imagine` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poze_masini`
--

INSERT INTO `poze_masini` (`ID_Poza`, `ID_Masina`, `Cale_Imagine`) VALUES
(1, 4, 'https://img-eu-2.trovit.com/img2ro/1t1j2nL1g61_/1t1j2nL1g61_.2_12.jpg'),
(2, 4, 'https://img-eu-2.trovit.com/img2ro/1t1j2nL1g61_/1t1j2nL1g61_.4_12.jpg'),
(3, 4, 'https://img-eu-2.trovit.com/img2ro/1t1j2nL1g61_/1t1j2nL1g61_.3_12.jpg'),
(4, 4, 'https://img-eu-2.trovit.com/img2ro/1t1j2nL1g61_/1t1j2nL1g61_.1_12.jpg'),
(5, 1, 'https://frankfurt.apollo.olxcdn.com/v1/files/2lfnyye4x9cv2-RO/image;s=1000x700'),
(6, 1, 'https://frankfurt.apollo.olxcdn.com/v1/files/wvbok0uyctx62-RO/image;s=1000x700'),
(7, 1, 'https://frankfurt.apollo.olxcdn.com/v1/files/afe4baekjxp22-RO/image;s=1000x700'),
(8, 1, 'https://frankfurt.apollo.olxcdn.com/v1/files/2lfnyye4x9cv2-RO/image;s=1000x700'),
(11, 3, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6InMwY2NmN2syYXpuZDMtQVVUT1ZJVFJPIiwidyI6W3siZm4iOiJxN216NTNiaWZwemstQVVUT1ZJVFJPIiwicyI6IjE2IiwicCI6IjEwLC0xMCIsImEiOiIwIn1dfQ.1SAEC10j5Rp9Rknoi91KHY15TQieC4cyFuttmk7FFkU/image;s=0x450;q=70'),
(12, 3, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6InlpaXo4MXpsZXB5My1BVVRPVklUUk8iLCJ3IjpbeyJmbiI6InE3bXo1M2JpZnB6ay1BVVRPVklUUk8iLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.Dxo8fQs7eWawMHUJhclED8f3mxSs8sgwgnXuSBYWlzs/image;s=0x450;q=70'),
(13, 3, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6InhzYnA1MWNmMnBlaS1BVVRPVklUUk8iLCJ3IjpbeyJmbiI6InE3bXo1M2JpZnB6ay1BVVRPVklUUk8iLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.cnGWnfRhWi3jYTKGYZj1HTgdWTA4qTM5qygxhpZWQuI/image;s=0x450;q=70');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

DROP TABLE IF EXISTS `utilizatori`;
CREATE TABLE `utilizatori` (
  `ID_Utilizator` int NOT NULL,
  `Nume_Utilizator` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Parola` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`ID_Utilizator`, `Nume_Utilizator`, `Parola`) VALUES
(1, 'john_doe', 'JOHN123$'),
(2, 'jane_smith', 'smith2366'),
(3, 'alex_john', 'castravete5'),
(4, 'laura_johns', 'laurica55$');

-- --------------------------------------------------------

--
-- Table structure for table `vanzari_masini`
--

DROP TABLE IF EXISTS `vanzari_masini`;
CREATE TABLE `vanzari_masini` (
  `id` int NOT NULL,
  `marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `an_fabricatie` int NOT NULL,
  `kilometraj` int NOT NULL,
  `pret` decimal(10,2) NOT NULL,
  `descriere` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `data_postarii` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `imagine` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vanzari_masini`
--

INSERT INTO `vanzari_masini` (`id`, `marca`, `model`, `an_fabricatie`, `kilometraj`, `pret`, `descriere`, `data_postarii`, `imagine`) VALUES
(1, 'BMW', 'SERIA 3', 2022, 123456, 2200.00, 'MASINA BUNA', '2024-05-13 09:48:45', 'ncm1.png'),
(2, 'Mazda', '5', 2007, 250000, 3000.00, 'DPF infundat ', '2024-05-21 19:33:05', 'ncm2.png');

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
-- Indexes for table `comenzi_masini`
--
ALTER TABLE `comenzi_masini`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `poze_masini`
--
ALTER TABLE `poze_masini`
  ADD PRIMARY KEY (`ID_Poza`),
  ADD KEY `ID_Masina` (`ID_Masina`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`ID_Utilizator`),
  ADD UNIQUE KEY `Nume_Utilizator` (`Nume_Utilizator`);

--
-- Indexes for table `vanzari_masini`
--
ALTER TABLE `vanzari_masini`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comenzi_masini`
--
ALTER TABLE `comenzi_masini`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poze_masini`
--
ALTER TABLE `poze_masini`
  MODIFY `ID_Poza` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vanzari_masini`
--
ALTER TABLE `vanzari_masini`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anunturi`
--
ALTER TABLE `anunturi`
  ADD CONSTRAINT `anunturi_ibfk_1` FOREIGN KEY (`ID_Masina`) REFERENCES `masini` (`ID_Masina`);

--
-- Constraints for table `poze_masini`
--
ALTER TABLE `poze_masini`
  ADD CONSTRAINT `poze_masini_ibfk_1` FOREIGN KEY (`ID_Masina`) REFERENCES `masini` (`ID_Masina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
