-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 01:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysqlguvidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `regid` bigint(20) UNSIGNED NOT NULL,
  `regdate` date DEFAULT curdate(),
  `name` varchar(80) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `passkey` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`regid`, `regdate`, `name`, `emailid`, `mobileno`, `passkey`, `username`) VALUES
(6, '2023-03-01', 'Ramesh Prasad', 'ramesh.prasad@nic.in', '9450873690', 'd76f3d05cc9ac98f1f9160274a39fe33', 'rameshnic'),
(7, '2023-03-01', 'ABHISHEK KUMAR', 'abhishek@nic.in', '9450873690', 'b6792d5007b47449e3481cb18b045fbc', 'abhishek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD UNIQUE KEY `regid` (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `regid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
