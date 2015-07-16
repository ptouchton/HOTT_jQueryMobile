-- phpMyAdmin SQL
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2012 at 03:46 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajax_db`
--

DROP DATABASE IF EXISTS ajax_db; 

CREATE DATABASE `ajax_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ajax_db`;

-- --------------------------------------------------------

--
-- Table structure for table `autocomplete`
--

CREATE TABLE IF NOT EXISTS `autocomplete` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `value` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=243 ;

--
-- Inserting data for table `autocomplete`
--

INSERT INTO `autocomplete` (`id`, `value`) VALUES
(1, 'New Hampshire'),
(2, 'Maine'),
(3, 'Massachusetts'),
(4, 'Vermont'),
(5, 'Rhode Island'),
(6, 'Connecticut'),
(7, 'Boston'),
(8, 'Concord'),
(9, 'Providence'),
(10, 'Montpelier'),
(11, 'Augusta'),
(12, 'Hartford'),
(13, 'Worcester'),
(14, 'Manchester'),
(15, 'Portland'),
(16, 'Burlington'),
(17, 'New Haven');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Inserting data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Bob Smith', 'bobsmith81@bobsmith.com', '800-555-5555'),
(2, 'Carol Dubois', 'caroldubois88caroldubois.com', '800-555-5221'),
(3, 'Ted Walker', 'tedwalker55@tedwalker.com', '800-555-5222'),
(4, 'Mary Powell', 'marypowell65@marypowell.com', '800-555-5551'),
(5, 'Tom O''Reilly', 'tomoreilly@tomoreilly.net', '800-555-5517');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `employeeID` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(40) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `position` varchar(40) NOT NULL,
  `employeeImage` varchar(40) NOT NULL,
  PRIMARY KEY (`employeeID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Inserting data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `lastName`, `firstName`, `position`, `employeeImage`) VALUES
(1, 'Smith', 'Bob', 'Head Travel Agent', 'b_smith.jpg'),
(2, 'Harris', 'Michael', 'Junior Travel Agent', 'm_harris.jpg'),
(3, 'Winchester', 'Joan', 'Cruise Coordinator', 'j_winchester.jpg'),
(4, 'Willis', 'Barbara', 'International Travel Counselor', 'b_willis.jpg'),
(5, 'Drake', 'Chris', 'Sales', 'c_drake.jpg'),
(6, 'Addams', 'Ellen', 'CEO', 'e_addams.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `tourName` varchar(250) NOT NULL DEFAULT '',
  `season` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=243 ;

--
-- Inserting data for table `tours`
--

INSERT INTO `tours` (`id`, `tourName`, `season`) VALUES
(1, '5-day Maine Coast', 'summer'),
(2, '5-day New England in Autumn', 'fall'),
(3, '5-day Boston, Portmsouth, Portland', 'summer'),
(4, '5-day Vermont Countryside', 'fall'),
(5, '5-day White Mountains', 'winter'),
(6, '4-day Bed and Breakfast Mystic', 'spring'),
(7, '4-day A Taste of New Enland', 'summer'),
(8, '4-day Marthas Vineyard', 'summer'),
(9, '4-day Maine Cabins & Cottages', 'summer'),
(10, '4-day Old Orchard Beach, Maine', 'spring'),
(11, '3-day North Conway in Autumn', 'fall'),
(12, '3-day York Beach', 'summer'),
(13, '3-day Autumn Foliage', 'fall'),
(14, '3-day Smugglers Notch Resort Skiing', 'winter'),
(15, '3-day Boston Museums', 'fall'),
(16, '2-day Maine Lobsterfest', 'fall'),
(17, '2-day Maine Lighthouses', 'summer'),
(18, '2-day Seafood Festival', 'spring'),
(19, '2-day Renaissance Fairs', 'summer'),
(20, '2-day Deep Sea Fishing NH', 'summer'),
(21, '1-day Chocolate Tour MA', 'winter'),
(22, '1-day Best of NH Wineries', 'spring'),
(23, '1-day Salem MA Halloween', 'fall'),
(24, '1-day Antique Alley NH', 'spring'),
(25, '1-day Tilton Outlets North Conway', 'fall');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Inserting data for table `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(1, 'bobby'),
(2, 'wendy'),
(3, 'chris'),
(4, 'john');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
