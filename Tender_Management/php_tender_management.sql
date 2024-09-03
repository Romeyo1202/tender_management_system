-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2020 at 06:36 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_tender_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(100) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `workduration` varchar(100) NOT NULL,
  `prequalification` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `ctype`, `budget`, `material`, `time`, `delivery`, `workduration`, `prequalification`, `location`, `status`, `report`) VALUES
(1, 'building', '500000', 'construction materials', '10', '12-12-2020', '10 months', 'BE', 'trichy', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contract_apply`
--

CREATE TABLE `contract_apply` (
  `id` int(100) NOT NULL,
  `contractor` varchar(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract_apply`
--

INSERT INTO `contract_apply` (`id`, `contractor`, `cid`, `fname`, `amount`, `ctype`, `status`, `report`) VALUES
(1, 'kaathuma', '1', 'arun.txt', '450000', 'building', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `manager_details`
--

CREATE TABLE `manager_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_details`
--

INSERT INTO `manager_details` (`id`, `name`, `contact`, `email`, `address`, `username`, `password`) VALUES
(1, 'arun', '7339333830', 'arun@gmail.com', 'trichy', 'arun', '123'),
(2, 'kannan', '3527767657', 'kannan@gmail.com', 'trichy', 'kannan', '123'),
(3, 'latha', '8736483787', 'latha@gmail.com', 'trichy', 'latha', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `contact`, `email`, `address`, `username`, `password`) VALUES
(1, 'rose', '7339333830', 'rose@gmail.com', 'trichy', 'rose', '123'),
(2, 'kaathuma', '87687687', 'kaathuma@gmail.com', 'trichy', 'kaathuma', '123');
