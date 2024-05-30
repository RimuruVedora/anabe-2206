-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 06:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db3`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `Applicant_No` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact_No` int(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Education_Background` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`Applicant_No`, `Name`, `Email`, `Contact_No`, `Position`, `Education_Background`, `Gender`) VALUES
(4, 'Carl Martinez', 'maginghotdogpano@gmail.com', 2147483647, 'Software Engineer', 'college graduate', 'Male'),
(5, 'celherson a guzman', 'maginghotdogpano@gmail.com', 313131313, 'Developer', 'college graduate', 'Male'),
(6, 'Almira M. Macadindang', 'user456@gmail.com', 2147483647, 'HR', 'college graduate', 'Female'),
(7, 'Brylle Christian Cillio', 'Beslink123@gmail.com', 2147483647, 'Software Engineer', 'college graduate', 'Male'),
(8, 'Christle M. Cater', 'cater981@gmail.com', 945168728, 'potato frier', 'college graduate', 'Female'),
(9, 'Jonalyn Serrano', 'serrano98@gmail.com', 2147483647, 'Chef', 'senior highschool graduate', 'Female'),
(10, 'Darel S. Nantin', 'darelnantin12@gmail.com', 2147483647, 'HR', 'college graduate', 'Male'),
(11, 'Yvan Abong', 'yvan123@gmail.com', 2147483647, 'HR', 'college graduate', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`Applicant_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `Applicant_No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
