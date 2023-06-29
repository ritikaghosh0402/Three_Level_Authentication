-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 03:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `three_level_authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`ID`, `Email`, `Color`) VALUES
(6, 'anuiya@gmail.com', '#d5cf10'),
(8, 'pmahalder2019@gmail.com', '#1e00ff'),
(16, 'ritikaghoshriti@gmail.com', '#273c91'),
(17, 'priyamaity869@gmail.com', '#fafafa'),
(18, 'trishamukherjee0098@gmail.com', '#ff0505');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`ID`, `Email`, `Image`) VALUES
(6, 'anuiya@gmail.com', 'a.jpg'),
(8, 'pmahalder2019@gmail.com', 'p.jpg'),
(16, 'ritikaghoshriti@gmail.com', 'alexis-minchella-wTSXKJBtznA-unsplash.jpg'),
(17, 'priyamaity869@gmail.com', 'cshong-SVoJPEjWRTU-unsplash.jpg'),
(18, 'trishamukherjee0098@gmail.com', 'v2osk-PaNxe-QJwhE-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `OTP` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`ID`, `Email`, `OTP`, `Status`) VALUES
(1, 'priyamaity869@gmail.com', '201323', '0'),
(2, 'priyamaity869@gmail.com', '527942', '0'),
(3, 'priyamaity869@gmail.com', '499309', '1');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`ID`, `Name`, `Email`, `Password`) VALUES
(6, 'Anuriya Biswas', 'anuiya@gmail.com', 'ab6574'),
(8, 'Protyusha Mahalder', 'pmahalder2019@gmail.com', 'pm1234'),
(17, 'Ritika Ghosh', 'ritikaghoshriti@gmail.com', 'rg2004'),
(18, 'Priya Maity', 'priyamaity869@gmail.com', 'pm8690'),
(19, 'Trisha Mukherjee', 'trishamukherjee0098@gmail.com', 'tm@0098');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
