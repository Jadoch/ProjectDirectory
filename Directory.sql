-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2013 at 03:30 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE IF NOT EXISTS `Admins` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Admins`
--

INSERT INTO `Admins` (`ID`, `User`, `Pass`) VALUES
(8, 'root', 'directory');

-- --------------------------------------------------------

--
-- Table structure for table `Banks`
--

CREATE TABLE IF NOT EXISTS `Banks` (
  `Bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `BankName` varchar(60) NOT NULL,
  `CEO` varchar(60) NOT NULL,
  `CR` varchar(60) NOT NULL,
  `Capital` varchar(60) NOT NULL,
  `DateFounded` varchar(60) NOT NULL,
  `State` varchar(60) NOT NULL,
  `District` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `Street` varchar(60) NOT NULL,
  `Building` varchar(60) NOT NULL,
  `Telephone` varchar(60) NOT NULL,
  `Fax` varchar(60) NOT NULL,
  `POBOX` varchar(60) NOT NULL,
  `Website` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Submit` varchar(4) NOT NULL,
  PRIMARY KEY (`Bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Banks`
--

INSERT INTO `Banks` (`Bank_id`, `BankName`, `CEO`, `CR`, `Capital`, `DateFounded`, `State`, `District`, `City`, `Street`, `Building`, `Telephone`, `Fax`, `POBOX`, `Website`, `Email`, `Submit`) VALUES
(1, 'Bank Audi', '43444', 'Audi Saradar', '40000000000', '1992', 'Beirut', 'Beirut', 'Hamra', 'Hamra', 'Audi', '01/343221', '01/343222', '1122 2234', '', '', 'no'),
(2, 'Al Mawarid Bank s.a.l', '42600', 'Mr. Marwan Kheireddine', '36000000000', '1980', 'Beirut', 'Beirut', 'Hamra', 'Abed El Aziz', 'Yared', '01/734040-744277', '01/734040-744277', '1103 2110 Hamra', 'www.almawarid.com', 'customer.service@almawarid.com', 'yes'),
(3, 'Bank Audi s.a.l- Audi Saradar Group', '11347', 'Raymond Audi', '460819215996', '', 'Beirut', 'Beirut', 'Beirut central District', 'Bab Idriss', 'Bank Audi Plaza', '01/994000', '01/990555', '11-2560 Beirut', 'www.banqueaudi.com', 'contactus@banqueaudi.com', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `Importers`
--

CREATE TABLE IF NOT EXISTS `Importers` (
  `Imp_id` int(11) NOT NULL AUTO_INCREMENT,
  `ImpName` varchar(60) NOT NULL,
  `Owner` varchar(60) NOT NULL,
  `CR` varchar(60) NOT NULL,
  `Activity` varchar(60) NOT NULL,
  `State` varchar(60) NOT NULL,
  `District` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `Street` varchar(60) NOT NULL,
  `Building` varchar(60) NOT NULL,
  `Telephone` varchar(60) NOT NULL,
  `Fax` varchar(60) NOT NULL,
  `POBOX` varchar(60) NOT NULL,
  `Website` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Submit` varchar(5) NOT NULL,
  PRIMARY KEY (`Imp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Importers`
--

INSERT INTO `Importers` (`Imp_id`, `ImpName`, `Owner`, `CR`, `Activity`, `State`, `District`, `City`, `Street`, `Building`, `Telephone`, `Fax`, `POBOX`, `Website`, `Email`, `Submit`) VALUES
(1, 'Dalco', 'Ali Ghanem', '344444', 'Importing Electonic Devices', 'Mount Lebanon', 'Baabda', 'Haret Hreik', 'Sayed Hadi Highway', 'Dalco', '01/442567', '01/442567', '', 'www.dalco-leb.com', 'info@dalco-leb.com', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `Industry`
--

CREATE TABLE IF NOT EXISTS `Industry` (
  `Comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `CompName` varchar(60) NOT NULL,
  `Owner` varchar(60) NOT NULL,
  `AuthSign` varchar(60) NOT NULL,
  `CR` varchar(60) NOT NULL,
  `Activity` varchar(60) NOT NULL,
  `CompanyType` varchar(60) NOT NULL,
  `State` varchar(60) NOT NULL,
  `District` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `Street` varchar(60) NOT NULL,
  `Building` varchar(60) NOT NULL,
  `Telephone` varchar(60) NOT NULL,
  `Fax` varchar(60) NOT NULL,
  `POBOX` varchar(60) NOT NULL,
  `Website` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Submit` varchar(4) NOT NULL,
  PRIMARY KEY (`Comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Industry`
--

INSERT INTO `Industry` (`Comp_id`, `CompName`, `Owner`, `AuthSign`, `CR`, `Activity`, `CompanyType`, `State`, `District`, `City`, `Street`, `Building`, `Telephone`, `Fax`, `POBOX`, `Website`, `Email`, `Submit`) VALUES
(1, 'Cafe Maatouk ', 'Hassan Maatouk', 'Hassan Maatouk', '234556', 'Roasted Cofee', 'Individual Company', 'Beirut', 'Beirut', 'Mazraa', 'Salim', 'Kamel', '01/345345', '01/345345', '2222 4444', '', '', 'no'),
(2, 'Hamdan Est.', 'Ali Hamdan', 'Ali Hamdan', '782991', 'Tissues', 'Individual Company', 'g6', '', 'Erzay', 'Khalte Safra', 'Factory', '07/360343', '', '', '', '', 'no'),
(3, 'Kanso Trade', 'Hussein Kanso', 'Hussein Kanso', '123344', 'Trading', 'Individual Company', '', '', 'Erzay', 'River', 'Co.', '03/321232', '', '', '', '', 'no'),
(4, 'hfis', 'ghrei', 'hreih', 'gheir', 'gheri', 'Limited Partnership', 'Nabatieh', 'Nabatieh', 'fdfsdfge', 'ghogho', 'fdkojoj', '65453264', '34534534', '5464544', 'fhdsf.com', 'tegte@grgd.com', 'no'),
(5, 'Publitex', 'Said Khalil Hmade', 'Said Khalil Hmade', '', 'Plastic', 'Limited Partnership', 'Mount Lebanon', 'Chouf', 'Baaklin', 'Al Marj', 'Abou Diab', '03/607678', '01/427146', '', 'www.publitexonline.com', 's.hamadeh@publitexonline.com', 'yes'),
(6, 'Abbas Miski Est', 'Abbas Miski', 'Abbas Miski', '36593', 'Manufacturing And Printing Nylon And Aluminium Foil Bags', 'Individual Company', 'Mount Lebanon', 'Baabda', 'Bir Hassan', 'Main', '', '01/851409-03/800636', '01/851409', '14-6305', '', 'abbasmiski@gmail.com', 'yes'),
(7, 'Abdo For Trading & Manufacturing Ets.', 'Ali Abdo', 'Ali Abdo', '15392', 'Machines For Packing Seeds And Cereals', 'Individual Company', 'South', 'Saida', 'Saida', 'Jbaa Road', 'Abdo Trading Center', '07/734422', '07/734422', '', '', 'abdouest@msn.com', ''),
(8, 'Abdel Rahim AlJindi & Co', 'Abdel Rahim AlJindi', 'Abdel Rahim AlJindi', '89/355', 'Machinery & electrical aplliances', 'General Partnership', 'North', 'Tripoli', 'Tripoli', 'Al Mahjar Al Sohe', 'Co.', '06/380049', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Insurance`
--

CREATE TABLE IF NOT EXISTS `Insurance` (
  `Ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `InsuranceName` varchar(60) NOT NULL,
  `CR` varchar(60) NOT NULL,
  `Capital` varchar(60) NOT NULL,
  `CEO` varchar(60) NOT NULL,
  `State` varchar(60) NOT NULL,
  `District` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `Street` varchar(60) NOT NULL,
  `Building` varchar(60) NOT NULL,
  `Telephone` varchar(60) NOT NULL,
  `Fax` varchar(60) NOT NULL,
  `POBOX` varchar(60) NOT NULL,
  `Website` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Submit` varchar(4) NOT NULL,
  PRIMARY KEY (`Ins_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Insurance`
--

INSERT INTO `Insurance` (`Ins_id`, `InsuranceName`, `CR`, `Capital`, `CEO`, `State`, `District`, `City`, `Street`, `Building`, `Telephone`, `Fax`, `POBOX`, `Website`, `Email`, `Submit`) VALUES
(1, 'ITN', '901234', '10000000000', 'Kamel Rahme', 'Beirut', 'Beirut', 'Ashrafieh', 'Sassine Square', 'Boutros', '01/233122', '01/233123', '1233', '', '', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
