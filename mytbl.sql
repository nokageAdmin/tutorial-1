-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 09:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytbl`
--

CREATE TABLE `mytbl` (
  `id` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mytbl`
--

INSERT INTO `mytbl` (`id`, `fName`, `mName`, `lName`, `section`, `address`, `email`, `contact`) VALUES
(23, 'Hanna', 'Kate', 'alcaraz', 'INF-222', 'Laguna', 'gmail@gmail.com', '09456258452'),
(26, 'Jv', 'Nokage', 'Quisto', 'INF-222', 'Mataas na lupa', 'jv@gmail.com', '09546258423'),
(27, 'Lieroy', 'Robers', 'Robles', 'INF-222', 'Cuenca', 'lieroy@gmail.com', '09548751654'),
(28, 'Jhoana', 'Safron', 'Robles', 'INF-222', 'Los Angeles, Lakers', 'jhoana@gmail.com', '09154862574'),
(29, 'Asle', 'Narito', 'Mitra', 'INF-222', 'Lipa', 'asle@gmail.com', '09542687413'),
(31, 'mikha', 'Clear ', 'Lim', 'INF-222', 'Mataas na kahoy', 'mikha@gmail.com', '09258456974'),
(33, 'Kevin', 'Vincent', 'Olarte', 'INF-222', 'Brgy.iniwan', 'gmail@gmail.com', '09884455123'),
(34, 'Nils', 'Mikkel', 'Martija', 'INF-222', 'Brgy. dimatagpuan', 'gmail@gmail.com', '09992233441'),
(35, 'Mae', 'Mae', 'Pureza', 'INF-222', 'Brgy. dimakita', 'gmail@gmail.com', '09992233441');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytbl`
--
ALTER TABLE `mytbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mytbl`
--
ALTER TABLE `mytbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
