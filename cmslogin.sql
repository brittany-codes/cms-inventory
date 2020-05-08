-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2020 at 08:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmslogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

DROP TABLE IF EXISTS `audits`;
CREATE TABLE IF NOT EXISTS `audits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `terminal` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audits`
--

INSERT INTO `audits` (`id`, `name`, `terminal`, `date`) VALUES
(1, 'Brittany Vasquez', 'TUS', '2020-04-18'),
(2, 'Jaime Meza', 'Pharr', '2020-05-03'),
(3, 'Maribel Garcia', 'TMX', '2020-05-15'),
(4, 'Lizeth Alonso', 'TMX', '2020-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `company` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `description`, `company`) VALUES
(2, 'Cell Phone Stipend', 'Apply stipend for employees that utilize their phone for company use', 'TMX'),
(3, 'Equipment Request', 'Use this form to request equipment inside the company', 'TUS');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment` varchar(100) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `serial` int(100) NOT NULL,
  `state` varchar(20) NOT NULL,
  `cost` int(8) NOT NULL,
  `date` date NOT NULL,
  `observations` varchar(255) NOT NULL,
  `employee` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL,
  `terminal` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `equipment`, `make`, `model`, `serial`, `state`, `cost`, `date`, `observations`, `employee`, `department`, `terminal`) VALUES
(3, 'Laptop', 'Lenovo', 'IdeaPad Flex', 1234567, 'New', 600, '2020-04-30', 'None', 'Brittany Vasquez', 'Information and Technology', 'Pharr'),
(4, 'Laptop', 'Dell', 'Dell', 245132, 'New', 400, '2020-03-14', 'None', 'Alicia Martinez', 'Administration', 'Rio Bravo'),
(5, 'Cell Phone', 'Apple', 'iPhone 11', 893102, 'New', 800, '2020-03-23', 'With Charger', 'Nancy Salinas', 'Human Resources', 'El Paso');

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

DROP TABLE IF EXISTS `policies`;
CREATE TABLE IF NOT EXISTS `policies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `company` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `name`, `description`, `company`) VALUES
(11, 'TMW System Use', 'Describes the use of TMW Systems regulations', 'TMX'),
(10, 'Network Policy', 'Outlines the processes and the responsibilities of the network domain', 'TMX'),
(9, 'Cell Phone Stipend', 'Apply stipend for employees that utilize their phone for company use', 'TUS'),
(7, 'Email and Internet', 'Policies on confidentiality through network security', 'TUS');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `name`, `date`) VALUES
(5, 'Total Mail Refresh Training', '2020-04-03'),
(2, 'Phishing and Malware Make-Up', '2020-04-23'),
(3, 'Master Users: Centro de Monitoreo', '2020-04-27'),
(4, 'Safety and SSRS Reports', '2020-04-12'),
(6, 'TMT Systems', '2020-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'brittany', '123@gmail.com', '$2y$10$lBoN/UO1aFVMn9P9e.ujVemtQN7KgW9iAUXFswqIZFEroAgsndNCO'),
(2, 'champlain', '1234@gmail.com', '$2y$10$HrSBx3tooQTj1mAQCaFrfuhvGD7SJgHd2jBPmpIy8b5/xZmEzZh6i');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
