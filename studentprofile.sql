-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2016 at 12:21 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `merocollegeguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentprofile`
--

CREATE TABLE IF NOT EXISTS `studentprofile` (
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `StreetAddress` varchar(30) NOT NULL,
  `VDCMunicipality` varchar(30) NOT NULL,
  `WardNo` int(3) NOT NULL,
  `District` varchar(30) NOT NULL,
  `StateZone` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `PermanentStreetAddress` varchar(30) NOT NULL,
  `PermanentMunicipalityVDC` varchar(30) NOT NULL,
  `PermanentWardNo` varchar(30) NOT NULL,
  `PermanentDistrict` varchar(30) NOT NULL,
  `PermanentStateZone` varchar(30) NOT NULL,
  `PermanentCountry` varchar(30) NOT NULL,
  `DateOFBirth` date NOT NULL,
  `Telephone` int(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ProfileImage` varchar(10) NOT NULL,
  `Citizenship` varchar(10) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `MotherName` varchar(50) NOT NULL,
  `FatherMobNo` int(10) NOT NULL,
  `MotherMobNo` int(10) NOT NULL,
  `FatherEmail` varchar(30) NOT NULL,
  `MotherEmail` varchar(30) NOT NULL,
  `FatherOccupation` varchar(30) NOT NULL,
  `MotherOccupation` varchar(30) NOT NULL,
  `FatherNationality` varchar(20) NOT NULL,
  `MotherNationality` varchar(20) NOT NULL,
  `GuardianName` varchar(50) NOT NULL,
  `GuardianAddress` varchar(50) NOT NULL,
  `GuardianMobNo` int(11) NOT NULL,
  `GuardianRelation` varchar(30) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `SLCYear` varchar(10) NOT NULL,
  `SLCSchool` varchar(50) NOT NULL,
  `SLCBoard` varchar(50) NOT NULL,
  `SLCPercentage` varchar(50) NOT NULL,
  `InterProgram` varchar(50) NOT NULL,
  `InterYear` varchar(10) NOT NULL,
  `InterCollege` varchar(50) NOT NULL,
  `InterUniversity` varchar(50) NOT NULL,
  `InterPercentage` varchar(10) NOT NULL,
  `BachProgram` varchar(50) NOT NULL,
  `BachYear` varchar(10) NOT NULL,
  `BachCollege` varchar(50) NOT NULL,
  `BachUniversity` varchar(50) NOT NULL,
  `BachPercentage` varchar(10) NOT NULL,
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentprofile`
--

INSERT INTO `studentprofile` (`FirstName`, `MiddleName`, `LastName`, `StreetAddress`, `VDCMunicipality`, `WardNo`, `District`, `StateZone`, `Country`, `PermanentStreetAddress`, `PermanentMunicipalityVDC`, `PermanentWardNo`, `PermanentDistrict`, `PermanentStateZone`, `PermanentCountry`, `DateOFBirth`, `Telephone`, `Email`, `ProfileImage`, `Citizenship`, `Gender`, `Nationality`, `FatherName`, `MotherName`, `FatherMobNo`, `MotherMobNo`, `FatherEmail`, `MotherEmail`, `FatherOccupation`, `MotherOccupation`, `FatherNationality`, `MotherNationality`, `GuardianName`, `GuardianAddress`, `GuardianMobNo`, `GuardianRelation`, `Level`, `SLCYear`, `SLCSchool`, `SLCBoard`, `SLCPercentage`, `InterProgram`, `InterYear`, `InterCollege`, `InterUniversity`, `InterPercentage`, `BachProgram`, `BachYear`, `BachCollege`, `BachUniversity`, `BachPercentage`) VALUES
('jelly', 'jjjhkj', 'jhj', 'rfytryh', 'hjkh', 0, 'kjkhkjhk', 'lljhjkhlkjj', 'Nepal', ',mm', 'n,m,m,m', 'trfghfghj', 'jhggbhjkj', 'jkhjkhhhhhhh', 'United States', '2016-08-08', 0, 'jelly@gmail.com', 'Desert.jpg', 'Desert.jpg', 'Male', 'gvbhnjm', 'fghbnjmk,l', 'fghnjmk', 0, 0, 'ss@gmail.com', 'sss@gmail.com', 'kjlklk', 'lklklk', 'klklkl', 'klklkl', 'lklkl', 'kllkl', 0, 'klklkl', '0', 'lklkl', 'klkl', 'lklklk', 'klklkl', '', '', '', '', '', '', '', '', '', ''),
('rabin', '', 'Shrestha', 'hjghjg', 'gjh', 0, 'hj', 'gj', 'Nepal', 'hjg', 'jhjk', 'hjkh', 'jh', 'jkh', 'Australia', '2016-07-06', 34567890, 'rabin@gmail.com', 'Hydrangeas', 'Desert.jpg', 'Male', 'nepali', 'kjgkjhghg', 'jhghjkhgjkl', 0, 0, 'ss@gmail.com', 'sss@gmail.com', 'jhkjhKJHJK', 'jkhkjh', 'kjhkjhkj', 'kjhkjhk', 'jnbgjkb', 'nm,n,mn', 0, 'hghjgjhg', '2', 'hjgjhgkj', 'hgjhkghjg', 'hjkghjgkj', 'hghkjghj', 'gjhghkjgj', 'gkjhgjkg', 'jhghjkg', 'jhgjh', 'gjhg', 'jhgjkhghj', 'gjkhgjhg', 'jhgjhgj', 'hjgkhghjg', 'hjgjhghkj'),
('rabin', 'saf', 'asdf', 'dgf', 'fdgd', 0, 'dfg', 'dfg', 'France', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', 'India', '2016-07-06', 12313123, 'rabinrs2050@gmail.com', 'Hydrangeas', 'Hydrangeas', 'Male', 'nepali', 'ry', 'fdg', 6767, 0, 'jhl@gmail.com', 'sss@gmail.com', 'jhjhkjhkj', 'kjhjk', 'kjh', 'hjkhh', 'hjhjkh', 'jh', 9999, 'jmhjkk', '1', '32323', 'fgds', 'df', '55', 'sss', '2343', 'dfs', 'sdf', '55', '', '', '', '', ''),
('hjk', 'hjkh', 'jh', 'sfdf', 'dffdf', 0, 'dff', 'dfdf', 'Nepal', 'fdf', 'dfdf', 'df', 'dfd', 'dff', 'Australia', '2016-08-09', 0, 'ram@gmail.com', 'Desert.jpg', 'Jellyfish.', 'Male', 'fggf', 'gfgf', 'gfgfg', 0, 0, 'ss@gmail.com', 'sss@gmail.com', 'dgg', 'ggfdg', 'fgfg', 'fgg', 'fgfgf', 'fggfggf', 0, 'gfgf', '0', 'gffgf', 'gfgfg', 'gfgfg', '70', '', '', '', '', '', '', '', '', '', ''),
('fdg', 'dfg', 'dfg', 'dfg', 'dfg', 0, 'dfg', 'dfg', 'Nepal', 'dfg', 'dfg', 'dg', 'dfg', 'dfg', 'Nepal', '2016-08-17', 0, 'sumi@gmail.com', 'logo.png', 'logo.png', 'Female', 'sdfsdf', 'kjh', 'kjh', 0, 0, 'lkjklj@gmail.com', 'hk@gmail.com', 'jh', 'h', 'kjhj', 'hjkh', 'kjh', 'sdfsd', 0, 'hjh', '0', '6545', 'sdfsd', 'sdf', '44', '', '', '', '', '', '', '', '', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentprofile`
--
ALTER TABLE `studentprofile`
  ADD CONSTRAINT `studentprofile_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `stud_sign` (`Email`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
