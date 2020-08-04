-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 11:36 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `refugee camp`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `Food_type` varchar(15) NOT NULL,
  `Amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`Food_type`, `Amount`) VALUES
('Rice', 40),
('Water', 20),
('Rice', 100),
('Rice', 30);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` varchar(10) NOT NULL,
  `donor_name` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_name`) VALUES
('D1001', 'Mr Ahsanul Kabi'),
('D1002', 'Mr Ehsan Khan'),
('D1003', 'Mr Sajeeb Haque'),
('D1004', 'BRAC'),
('D1003', 'JAAGO Foundation'),
('D1004', 'Bill & Melinda Gates Foundatio');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `House ID` char(4) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`House ID`, `Type`, `Amount`) VALUES
('A24', 'Rice', 40),
('A26', 'Lentil', 25),
('A25', 'Peddy', 30),
('A27', 'Rice', 10),
('A28', 'Rice', 20),
('A29', 'Salt', 5),
('A31', 'Water', 20),
('A32', 'Flour', 10),
('B11', 'Flour', 20),
('B12', 'Flour', 25),
('A24', 'Water', 2),
('A26', 'Flour', 20);

-- --------------------------------------------------------

--
-- Table structure for table `refugee`
--

CREATE TABLE `refugee` (
  `Id` char(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `House ID` char(4) NOT NULL,
  `Parent` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refugee`
--

INSERT INTO `refugee` (`Id`, `Name`, `Age`, `Gender`, `House ID`, `Parent`) VALUES
('1601000001', 'Abul Kalam', 60, 'male', 'A24', 'null'),
('1601000002', 'Azad', 40, 'male', 'A25', 'Abdul Mozid'),
('1601000003', 'Abdul Mozid', 65, 'male', 'A25', 'null'),
('1601000004', 'Omar Hasan', 23, 'male', 'A26', 'Omar Faruque'),
('1601000005', 'Omar Faruque', 50, 'male', 'A26', 'null'),
('1601000006', 'Laila Begum', 45, 'female', 'A27', 'null'),
('1601000007', 'Adnanul Anwar', 23, 'male', 'A28', 'Anwarul Alam'),
('1601000008', 'Anwarul Alam', 50, 'male', 'A29', 'null'),
('1601000009', 'Shammo Sikder', 22, 'male', 'A30', 'Abdul Hakim'),
('1601000010', 'Abdul Hakim', 52, 'male', 'A30', 'null'),
('1601000011', 'Salima', 32, 'female', 'A31', 'Morsed Alam'),
('1601000012', 'Morsed Alam', 53, 'male', 'A31', 'Khorsed Alam'),
('1601000013', 'Khorsed Alam', 90, 'male', 'A31', 'null'),
('1601000014', 'Nasir Alam', 35, 'male', 'A32', 'Basir Alam'),
('1601000015', 'Basir Alam', 85, 'male', 'A32', 'null'),
('1601000018', 'Akbar ali', 35, 'male', 'B11', 'Babar Ali'),
('1601000019', 'Babar Ali', 65, 'male', 'B11', 'Nur Ali'),
('1601000020', 'Nur Alam', 36, 'male', 'B12', 'Johir Alam'),
('1601000021', 'Johir Alam', 65, 'male', 'B12', 'null'),
('1602000016', 'Bakul Hossain', 35, 'male', 'B10', 'Mukul Hossain'),
('1602000017', 'Mukul Hossain', 88, 'male', 'B10', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `refugee`
--
ALTER TABLE `refugee`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
