-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 02:50 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `name`, `address`, `phone`, `bloodgroup`, `unit`, `date`) VALUES
(1, 'gowtham', 'vaniyambadi', '9999999999', 'B', '2Unit', '2019-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `inpatient`
--

CREATE TABLE `inpatient` (
  `id` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `rno` varchar(20) NOT NULL,
  `testdetails` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inpatient`
--

INSERT INTO `inpatient` (`id`, `pname`, `address`, `rno`, `testdetails`, `amount`) VALUES
(1, 'gowtham', 'vaniyambadi', '12', 'urinal', '20');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `attendance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `nid`, `name`, `date`, `attendance`) VALUES
(6, '1', 'test', '2019-03-23', 'present'),
(7, '1', 'sajhdjka', '2019-03-25', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `id` int(11) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`id`, `pid`, `pname`, `date`, `time`, `dname`, `type`) VALUES
(0, '1', 'gowtham', '2019-03-25', '', 'dr.naveen', 'hand'),
(0, '1', 'gowtham', '2019-03-25', '13:00', 'dr.gowtham', 'hand');

-- --------------------------------------------------------

--
-- Table structure for table `outpatient`
--

CREATE TABLE `outpatient` (
  `id` int(11) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outpatient`
--

INSERT INTO `outpatient` (`id`, `pid`, `pname`, `tid`, `phone`, `dname`, `date`) VALUES
(5, '1', 'gowtham', '1', '9999999999', 'dr.naveen', '2019-03-23'),
(6, '1', 'vaniyambadi', '1', '9999999999', 'dr.gowtham', '2019-03-23'),
(8, '1', 'naren', '1', '0987654321', 'dr.pandi', '2019-03-23'),
(9, '4', 'gowtham', '2', '1234567890', 'dr.gowtham', '2019-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `address`, `phone`, `password`) VALUES
(1, 'gowtham', 'vaniyambadi', '9999999999', '1144');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inpatient`
--
ALTER TABLE `inpatient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outpatient`
--
ALTER TABLE `outpatient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inpatient`
--
ALTER TABLE `inpatient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `outpatient`
--
ALTER TABLE `outpatient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
