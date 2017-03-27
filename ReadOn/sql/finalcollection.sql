-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2015 at 08:30 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalcollection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'ashik', 'wreevu@gmail.com', 'r12345678'),
(3, 'peyash', 'peyash69@gmail.com', '123');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`a_id`, `name`, `email`, `password`, `phone`, `address`, `gender`) VALUES
(5, 'Wreevu', 'wreevu@gmail.com', '61ac1b3d1016d146c00b9af530709128', '01675444097', 'mirpur2', 'Male'),
(6, 'Ashik', 'wreevu007@gamil.com', '61ac1b3d1016d146c00b9af530709128', '01712728434', 'mirpur1', 'Male'),
(8, 'ashikur rahman', 'wreevu007@gmail.com', '61ac1b3d1016d146c00b9af530709128', '01620851232', 'mirpur', 'Male'),
(9, 'shahnawaj', 'hossainshahnawaj@gmail.com', '202cb962ac59075b964b07152d234b70', '01010101', 'dhaka', 'Male'),
(10, 'shakilsss', 'rsreyan@gmail.com', '50f95398fdbee6e26f55579f852ed2e8', '56464', 'ghfg', 'Male');

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
  `like` varchar(255) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `bookname`, `bookdescription`, `category`, `files`, `authors_id`, `authos_name`, `date`, `status`, `like`) VALUES
(6, 'bebodhan', 'short story', '1', 'bebodhan-rabindranath_tagore.pdf', 5, 'Wreevu', '2015-08-01 03:30:36', 1, '6'),
(7, 'sdfsdfs', 'sdfsdfsd sdfsf sdfsf', '1', '12-ntrcacollege-level_-qs_2015.pdf', 10, 'shakilsss', '2015-08-06 08:11:17', 1, '4'),
(8, 'dfgdfg dfgdfg', 'dfgdg dfgdfgdf dfgdfgfdgd', '2', 'Pratipatti o bandhu labh By Dale Carnegie [fotpat99].pdf', 10, 'shakilsss', '2015-08-06 08:12:24', 1, '9');

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

-- --------------------------------------------------------

--
-- Table structure for table `postlike`
--

CREATE TABLE IF NOT EXISTS `postlike` (
  `like_id` int(11) NOT NULL AUTO_INCREMENT,
  `athor_id` int(11) NOT NULL,
  `books_id` int(11) NOT NULL,
  `category_ids` int(11) NOT NULL,
  `likes` varchar(255) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `postlike`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
