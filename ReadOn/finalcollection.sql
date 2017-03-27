-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2015 at 01:47 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalcollection`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`a_id`, `name`, `email`, `password`, `phone`, `address`, `gender`) VALUES
(1, 'shakil', 'rssakils@gmailcom', 'r12345', '01936755674', 'dhaka', ''),
(2, 'shakil', 'rssakils@gmailcom', 'r12345', '01936755674', 'dhaka', ''),
(3, 'reyan', 'shakilreyan9397@gmail.com', '123456', '011', 'dhaka', 'Male'),
(4, 'rs', 'jcmoni143@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '029828', 'dhaka', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(255) NOT NULL,
  `bookdescription` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL,
  `authors_id` int(11) NOT NULL,
  `authos_name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=no,1=yes',
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `bookname`, `bookdescription`, `category`, `files`, `authors_id`, `authos_name`, `date`, `status`) VALUES
(1, 'sdsdsd', 'sdsds', '1', '', 0, '', '0000-00-00 00:00:00', 0),
(2, 'ffgf', 'fgfgfg', '3', 'E:xampp	mpphp54B2.tmp', 0, '', '0000-00-00 00:00:00', 0),
(3, 'addiction', 'rs softearre', '3', 'done.txt', 0, '', '0000-00-00 00:00:00', 0),
(4, 'delcarnige', 'hhhhhhhhhhh', '1', 'hhh.txt', 4, 'rs', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `cat_name`) VALUES
(1, 'Dramma'),
(2, 'Adventure'),
(3, 'Romance'),
(4, 'Documentary'),
(5, 'Sci-fi'),
(6, 'Fairy Tales');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
