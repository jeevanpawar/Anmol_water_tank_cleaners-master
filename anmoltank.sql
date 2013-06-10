-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2013 at 03:29 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `amc`
--

INSERT INTO `amc` (`a_id`, `c_name`, `a_date`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`) VALUES
(16, 'jeevan pawar', '05-06-2013', 'ladder', '', '', '', '', '', '', '5', '0', '0', '0', '0', '0', '0'),
(18, 'sager pande', '05-06-2013', 'd', 'dd', 'dd', '', '', '', '', '3', '3', '3', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE IF NOT EXISTS `checklist` (
  `ck_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `c_date` varchar(25) NOT NULL,
  `elec` varchar(10) NOT NULL,
  `h2o` varchar(10) NOT NULL,
  `ot` varchar(10) NOT NULL,
  `ut` varchar(10) NOT NULL,
  `pipesize` varchar(10) NOT NULL,
  `tanksizeut` varchar(10) NOT NULL,
  `tanksizeot` varchar(10) NOT NULL,
  `loads` varchar(10) NOT NULL,
  `schedule` varchar(10) NOT NULL,
  `lift` varchar(10) NOT NULL,
  `floors` varchar(10) NOT NULL,
  `site` varchar(10) NOT NULL,
  `note` text NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`ck_id`, `c_id`, `c_date`, `elec`, `h2o`, `ot`, `ut`, `pipesize`, `tanksizeut`, `tanksizeot`, `loads`, `schedule`, `lift`, `floors`, `site`, `note`, `representative`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`) VALUES
(45, 0, '08-06-2013', 'Yes', 'Yes', '', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', '', 'b', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 11, '08-06-2013', 'Yes', 'Yes', '', '', '', '', 'Yes', '', '', '', 'Yes', '', '', 'a', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 12, '08-06-2013', 'Yes', '', 'Yes', '', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', 'sfadkajllkwjlkeflfwljwefk', 'a', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_id` int(11) NOT NULL,
  `c_first` varchar(25) NOT NULL,
  `c_last` varchar(25) NOT NULL,
  `c_add` text NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `e_id`, `c_first`, `c_last`, `c_add`, `c_city`, `c_pin`, `c_ph`, `c_mo`, `c_email`, `c_amc`, `c_site`, `c_ot`, `c_ut`) VALUES
(11, 0, 'jeevan', 'pawar', 'lahavit', 'nasik', 400212, 25, 2, 'jeevan', 0, 'Residential', 0, 0),
(12, 0, 'sager', 'pande', 'sdfas', 'fdsa', 1123, 221312, 1323, 'sdfs', 0, 'Domestic', 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`e_id`, `e_name`, `e_add`, `e_contact`, `e_desig`) VALUES
(6, 'a', 'laha', 2655, 'staff'),
(7, 'b', 'l juunnjnjnjknknnjhkjkjhk', 235, 'staff');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`i_id`, `q_date`, `q_name`, `q_address`, `q_attn`, `q_mo`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `total`) VALUES
(18, '05-06-2013', 'jeevan pawar', 'lahavit', 'a', 9049402749, 'ladder', '', '', '', '', '', '', 200, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 25),
(19, '05-06-2013', 'jeevan pawar', 'sfdf', 'a', 45, 'f', 'f', 'd', '', '', '', '', 2, 2, 2, 0, 0, 0, 0, 5, 5, 5, 0, 0, 0, 0, 4, 8, 2, 0, 0, 0, 0, 2, 4, 5, 0, 0, 0, 0, 8, 32, 10, 0, 0, 0, 0, 50),
(20, '05-06-2013', 'sager pande', '1213', 'a', 646, 'd', 'dd', 'dd', '', '', '', '', 1, 2, 3, 0, 0, 0, 0, 2, 3, 3, 0, 0, 0, 0, 2, 2, 3, 0, 0, 0, 0, 3, 3, 3, 0, 0, 0, 0, 6, 6, 9, 0, 0, 0, 0, 21);

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

--
-- Dumping data for table `quotation`
--


-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE IF NOT EXISTS `reminder` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(25) NOT NULL,
  `r_des` varchar(100) NOT NULL,
  `r1` varchar(25) NOT NULL,
  `r2` varchar(25) NOT NULL,
  `r3` varchar(25) NOT NULL,
  `r4` varchar(25) NOT NULL,
  `r5` varchar(25) NOT NULL,
  `r6` varchar(25) NOT NULL,
  `r7` varchar(25) NOT NULL,
  `r8` varchar(25) NOT NULL,
  `r9` varchar(25) NOT NULL,
  `r10` varchar(25) NOT NULL,
  `r11` varchar(25) NOT NULL,
  `r12` varchar(25) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`r_id`, `r_name`, `r_des`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`) VALUES
(57, 'jeevan pawar', 'ladder', '12-06-2013', '12-06-2013', '08-01-2014', '21-03-2014', '01-06-2014', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`s_id`, `s_date`, `e_name`, `s_add`) VALUES
(24, '08-06-2013', 'a', 'lahavit');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_term` varchar(200) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`t_id`, `t_term`) VALUES
(1, 'After Completion of work, Issue the Cheque immediately.'),
(2, 'For AMC you have to pay 100% in advance by cheque only.'),
(3, 'For our Machines, Electricity and Water is provided by you.'),
(4, 'i want to delete data from');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(25) NOT NULL,
  `u_pass` varchar(25) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_pass`) VALUES
(1, 'anmol', 'anmol');
