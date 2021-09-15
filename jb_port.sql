-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 09:12 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jb_port`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied jobs`
--

CREATE TABLE `applied jobs` (
  `aj_id` int(11) NOT NULL,
  `aj_title` varchar(40) NOT NULL,
  `aj_desc` varchar(40) NOT NULL,
  `ap_email` varchar(40) NOT NULL,
  `co_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied jobs`
--

INSERT INTO `applied jobs` (`aj_id`, `aj_title`, `aj_desc`, `ap_email`, `co_email`) VALUES
(1, 'HR Manager', 'hello', 'va@gmail.com', 'v@gmail.com'),
(3, 'HR manager 2', 'kjhdjkshjfk', 'v@gmail.com', 'va@gmail.com'),
(4, 'HR manager', 'you have to manage employeesmmmm', 'v@gmail.com', 'v@gmail.com'),
(5, 'HR manager', 'you have to manage employeesmmmm', 'v@gmail.com', 'v@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jid` int(12) NOT NULL,
  `jname` varchar(40) NOT NULL,
  `jdesc` varchar(40) NOT NULL,
  `co_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jid`, `jname`, `jdesc`, `co_email`) VALUES
(1, 'HR manager', 'you have to manage employeesmmmm', 'v@gmail.com'),
(5, 'HR manager 3', 'zdscddxc', 'v@gmail.com'),
(7, 'HR manager 2', 'kjhdjkshjfk', 'va@gmail.com'),
(8, 'hello', 'jffggfgn', '');

-- --------------------------------------------------------

--
-- Table structure for table `tadmin_login`
--

CREATE TABLE `tadmin_login` (
  `a_id` int(15) NOT NULL,
  `a_username` varchar(60) NOT NULL,
  `a_email` varchar(60) NOT NULL,
  `a_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tadmin_login`
--

INSERT INTO `tadmin_login` (`a_id`, `a_username`, `a_email`, `a_pass`) VALUES
(1, 'v7', 'v@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tcomp_login`
--

CREATE TABLE `tcomp_login` (
  `co_id` int(11) NOT NULL,
  `co_name` varchar(60) NOT NULL,
  `co_email` varchar(60) NOT NULL,
  `co_pass` varchar(60) NOT NULL,
  `cdesc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tcomp_login`
--

INSERT INTO `tcomp_login` (`co_id`, `co_name`, `co_email`, `co_pass`, `cdesc`) VALUES
(1, 'hp', 'v@gmail.com', '1', 'hello'),
(2, 'intel', '', '', 'makes motherboard'),
(3, 'hp', 'co@gmail.com', '12', 'hello im noone'),
(4, 'varun', 'mb@gmail.com', '56', 'uhjkhkjhkj');

-- --------------------------------------------------------

--
-- Table structure for table `tuser_login`
--

CREATE TABLE `tuser_login` (
  `ap_id` int(20) NOT NULL,
  `ap_fname` varchar(60) NOT NULL,
  `ap_lname` varchar(60) NOT NULL,
  `ap_username` varchar(60) NOT NULL,
  `ap_email` varchar(60) NOT NULL,
  `ap_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuser_login`
--

INSERT INTO `tuser_login` (`ap_id`, `ap_fname`, `ap_lname`, `ap_username`, `ap_email`, `ap_pass`) VALUES
(1, 'varun', 'kushwah', 'v7', 'v@gmail.com', '1'),
(3, 'jatin', 'k', 'kjdhfjks', 'asd@gmail.com', '4'),
(4, 'Varun', 'Kushwah', 'Varun07', 'Varun@gmail.com', '123'),
(5, 'varuni', 'kus', 'banoo', 'var@gmail.com', 'V@123'),
(7, 'varun2', 'kushwah', 'v23', 'v232gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied jobs`
--
ALTER TABLE `applied jobs`
  ADD PRIMARY KEY (`aj_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `tadmin_login`
--
ALTER TABLE `tadmin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tcomp_login`
--
ALTER TABLE `tcomp_login`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `tuser_login`
--
ALTER TABLE `tuser_login`
  ADD PRIMARY KEY (`ap_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied jobs`
--
ALTER TABLE `applied jobs`
  MODIFY `aj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tadmin_login`
--
ALTER TABLE `tadmin_login`
  MODIFY `a_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tcomp_login`
--
ALTER TABLE `tcomp_login`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tuser_login`
--
ALTER TABLE `tuser_login`
  MODIFY `ap_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
