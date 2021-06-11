-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 03:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csrf`
--

-- --------------------------------------------------------

--
-- Table structure for table `csrf0`
--

CREATE TABLE `csrf0` (
  `ID` int(10) NOT NULL,
  `Username` text NOT NULL,
  `Score` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csrf0`
--

INSERT INTO `csrf0` (`ID`, `Username`, `Score`) VALUES
(7, '', 0),
(8, '', 0),
(9, '', 0),
(10, '', 0),
(11, '', 0),
(12, '', 0),
(13, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `csrf1`
--

CREATE TABLE `csrf1` (
  `ID` int(10) NOT NULL,
  `Username` text NOT NULL,
  `Score` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csrf1`
--

INSERT INTO `csrf1` (`ID`, `Username`, `Score`) VALUES
(1, 'player1', 300),
(2, 'player2', 150),
(3, 'player3', 50);

-- --------------------------------------------------------

--
-- Table structure for table `csrf2`
--

CREATE TABLE `csrf2` (
  `ID` int(10) NOT NULL,
  `Username` text NOT NULL,
  `Score` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csrf0`
--
ALTER TABLE `csrf0`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `csrf1`
--
ALTER TABLE `csrf1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `csrf2`
--
ALTER TABLE `csrf2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `csrf0`
--
ALTER TABLE `csrf0`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `csrf1`
--
ALTER TABLE `csrf1`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `csrf2`
--
ALTER TABLE `csrf2`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
