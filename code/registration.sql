-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 05:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `USER ID` varchar(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `USER ID`, `EMAIL`, `PASSWORD`, `number`) VALUES
(1, 'naveen', 'sharmanaveen852001@gmail.com', 'mohan123', '9928885121'),
(521, 'suresh', 'xyz@gmail.com', 'admin123', '9928762221'),
(522, 'jinx', 'maheshgaur852001@gmail.com', 'mam123', '9928762221'),
(525, 'mahesh28', 'lover@gmail.com', 'mahesh123', '848394981'),
(526, 'jinx', 'weq123@gmail.com', 'nmnmmnmnm', '9928762221'),
(527, 'naveen', 'sohan123@gmail.com', 'jmnmnmnmnm', '9928762221'),
(528, 'jinx', 'mamta123@gmail.com', 'dsdnskdnsm', '9928762221'),
(529, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `EMAIL_2` (`EMAIL`),
  ADD UNIQUE KEY `EMAIL_3` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=530;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
