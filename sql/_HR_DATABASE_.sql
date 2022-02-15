-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 10:10 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graphiceradb`
--
CREATE DATABASE IF NOT EXISTS `graphiceradb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `graphiceradb`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--
-- Creation: Feb 15, 2022 at 08:26 AM
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE `attendance` (
  `s_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sa_1` varchar(255) NOT NULL,
  `sa_2` varchar(255) NOT NULL,
  `sa_3` varchar(255) NOT NULL,
  `sa_4` varchar(255) NOT NULL,
  `sa_5` varchar(255) NOT NULL,
  `sa_6` varchar(255) NOT NULL,
  `sa_7` varchar(255) NOT NULL,
  `sa_8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `attendance`:
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--
-- Creation: Feb 15, 2022 at 08:32 AM
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE `result` (
  `s_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `s8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `result`:
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--
-- Creation: Feb 15, 2022 at 08:30 AM
-- Last update: Feb 15, 2022 at 08:38 AM
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `s_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `fp_num` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `student`:
--

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `name`, `f_name`, `m_name`, `fp_num`, `sem`, `course`, `branch`, `specification`, `address`, `email`, `gender`, `city`) VALUES
(2015116, 'vishesh', 'v', 'e', '7355288989', '6 ', 'betech', 'cse', 'SE', '1688', 'visheshsaxena7777@gmail.com', 'male', 'Jhansi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table attendance
--

--
-- Metadata for table result
--

--
-- Metadata for table student
--

--
-- Metadata for database graphiceradb
--
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
