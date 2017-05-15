-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 07:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `tel_code` int(3) NOT NULL,
  `tel_number` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(300) NOT NULL,
  `rev_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`first_name`, `last_name`, `tel_code`, `tel_number`, `email`, `feedback`, `rev_contact`) VALUES
('', '', 0, 0, '', '', 0),
('Lokesh', 'Karanam', 91, 21, 'sunnylokesh3@gmail.com', 'i am lokesh', 0),
('Lokesh', 'Karanam', 91, 2147483647, 'sunnylokesh3@gmail.com', 'i am in iiitm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dropdown`
--

CREATE TABLE `dropdown` (
  `name` varchar(50) NOT NULL,
  `problem` varchar(150) NOT NULL,
  `problem_id` int(9) NOT NULL,
  `problem_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gatepass`
--

CREATE TABLE `gatepass` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cd` date NOT NULL,
  `fromdate` date NOT NULL,
  `returndate` date NOT NULL,
  `luggage` int(5) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `hostel` varchar(6) NOT NULL,
  `roll` varchar(18) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gatepass`
--

INSERT INTO `gatepass` (`name`, `email`, `cd`, `fromdate`, `returndate`, `luggage`, `purpose`, `hostel`, `roll`, `phone`, `code`) VALUES
('Lokesh Karanam', 'sunnylokesh3@gmail.com', '2017-05-14', '2017-05-17', '2017-05-30', 1, 'home', 'BH-3', 'IPG2015-039', '8500431037', '8AE18A67DC');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `track_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `roll_no`, `email`, `password`) VALUES
(1, 'Lokesh', 0, 'sunnylokesh3@gmail.com', '5f0e353b1c01e95c08233f477bf4f945'),
(2, 'pawan', 0, 'pavan.praneeth1997@gmail.com', '10526ea4f233e8a39b218fc7c29c2a9d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`tel_number`);

--
-- Indexes for table `dropdown`
--
ALTER TABLE `dropdown`
  ADD PRIMARY KEY (`problem_id`);

--
-- Indexes for table `gatepass`
--
ALTER TABLE `gatepass`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
