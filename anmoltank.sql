-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2013 at 06:18 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anmoltank`
--

-- --------------------------------------------------------

--
-- Table structure for table `amc`
--

CREATE TABLE IF NOT EXISTS `amc` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(25) NOT NULL,
  `a_date` varchar(25) NOT NULL,
  `d1` varchar(25) NOT NULL,
  `d2` varchar(25) NOT NULL,
  `d3` varchar(25) NOT NULL,
  `d4` varchar(25) NOT NULL,
  `d5` varchar(25) NOT NULL,
  `d6` varchar(25) NOT NULL,
  `d7` varchar(25) NOT NULL,
  `s1` varchar(25) NOT NULL,
  `s2` varchar(25) NOT NULL,
  `s3` varchar(25) NOT NULL,
  `s4` varchar(25) NOT NULL,
  `s5` varchar(25) NOT NULL,
  `s6` varchar(25) NOT NULL,
  `s7` varchar(25) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `amc`
--

INSERT INTO `amc` (`a_id`, `c_name`, `a_date`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`) VALUES
(5, 'patil', '09-05-2013', 'new', 'new2', 'NEW3', '', '', '', '', '3', '4', '5', '0', '0', '0', '0'),
(6, 'gaikwad', '10-05-2013', 'nee', 'vvv', 'vvb', 'hkhj', 'jffhfh', 'jhghjg', 'vnvvb', '3', '2', '5', '2', '2', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE IF NOT EXISTS `checklist` (
  `ck_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(25) NOT NULL,
  `elec` int(10) NOT NULL,
  `h2o` int(10) NOT NULL,
  `ot` int(10) NOT NULL,
  `ut` int(10) NOT NULL,
  `pipesize` int(10) NOT NULL,
  `tanksizeut` int(10) NOT NULL,
  `tanksizeot` int(10) NOT NULL,
  `loads` int(10) NOT NULL,
  `schedule` int(10) NOT NULL,
  `lift` int(10) NOT NULL,
  `floors` int(10) NOT NULL,
  `site` int(10) NOT NULL,
  `note` varchar(100) NOT NULL,
  `representative` varchar(100) NOT NULL,
  `r1` varchar(100) NOT NULL,
  `r2` varchar(100) NOT NULL,
  `r3` varchar(100) NOT NULL,
  `r4` varchar(100) NOT NULL,
  `r5` varchar(100) NOT NULL,
  `r6` varchar(100) NOT NULL,
  `r7` varchar(100) NOT NULL,
  `r8` varchar(100) NOT NULL,
  `r9` varchar(100) NOT NULL,
  `r10` varchar(100) NOT NULL,
  `r11` varchar(100) NOT NULL,
  `r12` varchar(100) NOT NULL,
  PRIMARY KEY (`ck_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`ck_id`, `c_name`, `elec`, `h2o`, `ot`, `ut`, `pipesize`, `tanksizeut`, `tanksizeot`, `loads`, `schedule`, `lift`, `floors`, `site`, `note`, `representative`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`) VALUES
(19, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_id` int(11) NOT NULL,
  `c_first` varchar(25) NOT NULL,
  `c_last` varchar(25) NOT NULL,
  `c_add` varchar(100) NOT NULL,
  `c_city` varchar(25) NOT NULL,
  `c_pin` int(11) NOT NULL,
  `c_ph` bigint(11) NOT NULL,
  `c_mo` bigint(11) NOT NULL,
  `c_email` varchar(25) NOT NULL,
  `c_amc` bigint(11) NOT NULL,
  `c_site` varchar(25) NOT NULL,
  `c_ot` int(11) NOT NULL,
  `c_ut` int(11) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `e_id`, `c_first`, `c_last`, `c_add`, `c_city`, `c_pin`, `c_ph`, `c_mo`, `c_email`, `c_amc`, `c_site`, `c_ot`, `c_ut`) VALUES
(3, 0, 'jeevan', 'pawar', 'at post lahavit', 'nasik', 400212, 49, 9049402749, 'jee', 5, 'Residential', 1, 0),
(4, 0, 'kishore', 'patil', 'nasik', 'nasik', 422255, 2222, 9999999, 'g', 3, 'Residential', 1, 2),
(5, 0, 'vijay', 'gaikwad', 'lahavit', 'nasik', 42222, 2222222, 2222, 'vik', 8, 'Residential', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(100) NOT NULL,
  `e_add` varchar(100) NOT NULL,
  `e_contact` bigint(11) NOT NULL,
  `e_desig` varchar(11) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`e_id`, `e_name`, `e_add`, `e_contact`, `e_desig`) VALUES
(3, 'jeevan', 'lahavit', 9049402749, 'emp'),
(4, 'kishore', 'nasik', 5555555, 'manager'),
(5, 'vijay', 'lahavit', 9049402749, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_date` varchar(25) NOT NULL,
  `q_name` varchar(25) NOT NULL,
  `q_address` varchar(100) NOT NULL,
  `q_attn` varchar(25) NOT NULL,
  `q_mo` bigint(11) NOT NULL,
  `d1` varchar(100) NOT NULL,
  `d2` varchar(100) NOT NULL,
  `d3` varchar(100) NOT NULL,
  `d4` varchar(100) NOT NULL,
  `d5` varchar(100) NOT NULL,
  `d6` varchar(100) NOT NULL,
  `d7` varchar(100) NOT NULL,
  `c1` float NOT NULL,
  `c2` float NOT NULL,
  `c3` float NOT NULL,
  `c4` float NOT NULL,
  `c5` float NOT NULL,
  `c6` float NOT NULL,
  `c7` float NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `r1` float NOT NULL,
  `r2` float NOT NULL,
  `r3` float NOT NULL,
  `r4` float NOT NULL,
  `r5` float NOT NULL,
  `r6` float NOT NULL,
  `r7` float NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `s4` int(11) NOT NULL,
  `s5` int(11) NOT NULL,
  `s6` int(11) NOT NULL,
  `s7` int(11) NOT NULL,
  `a1` float NOT NULL,
  `a2` float NOT NULL,
  `a3` float NOT NULL,
  `a4` float NOT NULL,
  `a5` float NOT NULL,
  `a6` float NOT NULL,
  `a7` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`i_id`, `q_date`, `q_name`, `q_address`, `q_attn`, `q_mo`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `total`) VALUES
(8, '10-05-2013', 'gaikwad', '', 'jeevan', 0, 'nee', 'vvv', 'vvb', 'hkhj', 'jffhfh', 'jhghjg', 'vnvvb', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2, 5, 2, 2, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE IF NOT EXISTS `quotation` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_date` varchar(100) NOT NULL,
  `q_name` varchar(100) NOT NULL,
  `q_address` varchar(100) NOT NULL,
  `q_attn` varchar(100) NOT NULL,
  `q_mo` bigint(11) NOT NULL,
  `d1` varchar(100) NOT NULL,
  `d2` varchar(100) NOT NULL,
  `d3` varchar(100) NOT NULL,
  `d4` varchar(100) NOT NULL,
  `d5` varchar(100) NOT NULL,
  `d6` varchar(100) NOT NULL,
  `d7` varchar(100) NOT NULL,
  `c1` int(10) NOT NULL,
  `c2` int(10) NOT NULL,
  `c3` int(10) NOT NULL,
  `c4` int(10) NOT NULL,
  `c5` int(10) NOT NULL,
  `c6` int(10) NOT NULL,
  `c7` int(10) NOT NULL,
  `q1` int(10) NOT NULL,
  `q2` int(10) NOT NULL,
  `q3` int(10) NOT NULL,
  `q4` int(10) NOT NULL,
  `q5` int(10) NOT NULL,
  `q6` int(10) NOT NULL,
  `q7` int(10) NOT NULL,
  `r1` double NOT NULL,
  `r2` double NOT NULL,
  `r3` double NOT NULL,
  `r4` double NOT NULL,
  `r5` double NOT NULL,
  `r6` double NOT NULL,
  `r7` double NOT NULL,
  `s1` int(10) NOT NULL,
  `s2` int(10) NOT NULL,
  `s3` int(10) NOT NULL,
  `s4` int(10) NOT NULL,
  `s5` int(10) NOT NULL,
  `s6` int(10) NOT NULL,
  `s7` int(10) NOT NULL,
  `a1` double NOT NULL,
  `a2` double NOT NULL,
  `a3` double NOT NULL,
  `a4` double NOT NULL,
  `a5` double NOT NULL,
  `a6` double NOT NULL,
  `a7` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE IF NOT EXISTS `reminder` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_date` date NOT NULL,
  `r_des` varchar(100) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`r_id`, `r_date`, `r_des`) VALUES
(1, '2013-05-09', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_date` varchar(25) NOT NULL,
  `e_name` varchar(25) NOT NULL,
  `s_add` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`s_id`, `s_date`, `e_name`, `s_add`) VALUES
(1, '04-05-2013', 'jeevan', 'at post lahavit'),
(2, '06-05-2013', 'kishore', 'nasik'),
(3, '06-05-2013', 'vijay', 'nasik'),
(4, '09-05-2013', 'jeevan', 'at post lahavit');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_term` varchar(200) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`t_id`, `t_term`) VALUES
(1, 'After Completion of work, Issue the Cheque immediately.'),
(2, 'For AMC you have to pay 100% in advance by cheque only.'),
(3, 'For our Machines, Electricity and Water is provided by you.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
