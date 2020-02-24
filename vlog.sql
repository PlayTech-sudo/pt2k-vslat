-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 06:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mno` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qrcodes`
--

CREATE TABLE `qrcodes` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `qrImg` varchar(250) NOT NULL,
  `qrlink` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrcodes`
--

INSERT INTO `qrcodes` (`id`, `name`, `email`, `qrImg`, `qrlink`) VALUES
(49, 'koush', 'koush123@gmail.com ...Developed', 'meravi415552606.png', 'localhost/qrcodemeravi415552606.png'),
(48, 'koush', 'koush123@gmail.com ...Developed', 'meravi1867521637.png', 'localhost/qrcodemeravi1867521637.png'),
(47, 'koush', 'koush123@gmail.com ...Developed', 'meravi1715585837.png', 'localhost/qrcodemeravi1715585837.png'),
(50, 'koush', 'koush123@gmail.com ...Developed', 'meravi189031469.png', 'localhost/qrcodemeravi189031469.png'),
(51, 'navi', 'nav@gmail.com ...Developed', 'meravi427068452.png', 'localhost/qrcodemeravi427068452.png'),
(52, 'snehal', 'snehal@gmail.com ...Developed', 'meravi1144536732.png', 'localhost/qrcodemeravi1144536732.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mno` int(12) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `uname`, `password`, `email`, `dob`, `gender`, `mno`, `addr`, `image`) VALUES
(4, 'naveli', 'navi', 'naviu', 'nav@gmail.com', '21-02-1998', 'Female', 23456789, 'bgm', ''),
(5, 'koush m k', 'koush', 'koush', 'koush123@gmail.com', '31-10-1998', 'Female', 2147483647, 'bgm', ''),
(0, 'pihu', 'pihu', 'pihu', 'pihu@gmail.com', '', '', 2147483647, 'ihdjkfds', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE `registration1` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mno` int(12) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`id`, `fname`, `uname`, `password`, `email`, `dob`, `gender`, `mno`, `addr`, `image`) VALUES
(0, 'aishu', 'aish', 'aish', 'aishu@gmail.com', '02-12-1990', 'Female', 2147483647, 'bgjksX', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
