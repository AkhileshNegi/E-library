-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 09:00 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `book_name` varchar(50) NOT NULL,
  `no_of_copies` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Available` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`book_name`, `no_of_copies`, `location`, `Author`, `Available`) VALUES
('Advance Java', 50, 'CSE Almira Second Shelf', 'Gajendra Gupta', 46),
('Computer Networks', 28, 'CSE Almira Third Shelf', 'Behrouz A. Forouzan', 24);

-- --------------------------------------------------------

--
-- Table structure for table `details_stu`
--

CREATE TABLE `details_stu` (
  `name` varchar(100) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `details_stu`
--

INSERT INTO `details_stu` (`name`, `ID`, `branch`, `password`) VALUES
('Rajat', 'CSE19', 'CSE', 'Rajat123'),
('Diksha', 'CSE10', 'CSE', 'Diksha123'),
('akhilesh', 'cse09', 'CSE', 'akhilesh'),
('Akash', 'CSE39', 'CSE', 'Parth123'),
('Aman Rawat', 'ECE04', 'ECE', 'Aman123'),
('Mohit', 'ECE04', 'ECE', 'Mohit123'),
('Rohit Dhingra', 'CSE27', 'CSE', 'Rohit123'),
('Abhishek', 'CSE39', 'CSE', 'Abhi123');

-- --------------------------------------------------------

--
-- Table structure for table `order_books`
--

CREATE TABLE `order_books` (
  `book_name` varchar(100) NOT NULL,
  `Author_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `order_books`
--

INSERT INTO `order_books` (`book_name`, `Author_name`) VALUES
('Engineering Mathematics', 'H.K. Dass'),
('DAA', 'Rama Verma');

-- --------------------------------------------------------

--
-- Table structure for table `record_stu`
--

CREATE TABLE `record_stu` (
  `id` varchar(10) NOT NULL,
  `book1` varchar(100) NOT NULL,
  `book2` varchar(100) NOT NULL,
  `book3` varchar(100) NOT NULL,
  `book4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `record_stu`
--

INSERT INTO `record_stu` (`id`, `book1`, `book2`, `book3`, `book4`) VALUES
('CSE10', 'Advance Java', '', '', ''),
('cse09', '', '', '', ''),
('CSE39', '', 'Computer networks', '', ''),
('ECE04', '', 'Advance Java', '', ''),
('CSE27', '', '', '', ''),
('CSE39', '', 'Computer networks', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `name` varchar(50) NOT NULL,
  `ID` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `ID`, `password`) VALUES
('Akhilesh', 'CSE03', 'Akki120220'),
('Akhilesh', 'CSE03', 'Akki120220');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
