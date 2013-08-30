-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2013 at 08:58 AM
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
  `r66` varchar(100) NOT NULL,
  `r666` varchar(100) NOT NULL,
  `r7` varchar(100) NOT NULL,
  `r77` varchar(100) NOT NULL,
  `r777` varchar(100) NOT NULL,
  `r8` varchar(100) NOT NULL,
  `r9` varchar(100) NOT NULL,
  `r10` varchar(100) NOT NULL,
  `r11` varchar(100) NOT NULL,
  `r12` varchar(100) NOT NULL,
  PRIMARY KEY (`ck_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_date` varchar(25) NOT NULL,
  `c_first` varchar(25) NOT NULL,
  `c_last` varchar(25) NOT NULL,
  `c_add` text NOT NULL,
  `c_city` varchar(25) NOT NULL,
  `c_pin` int(11) NOT NULL,
  `c_ph` bigint(11) NOT NULL,
  `c_mo` bigint(11) NOT NULL,
  `c_email` varchar(25) NOT NULL,
  `c_site` varchar(25) NOT NULL,
  `c_comp` varchar(100) NOT NULL,
  `c_mo2` bigint(11) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_date` date NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_mode` varchar(25) NOT NULL,
  `e_ch` varchar(25) NOT NULL,
  `e_amt` double NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_date` varchar(25) NOT NULL,
  `c_id` int(11) NOT NULL,
  `q_name` varchar(100) NOT NULL,
  `q_address` text NOT NULL,
  `q_attn` varchar(100) NOT NULL,
  `q_mo` bigint(11) NOT NULL,
  `po_wo` int(11) NOT NULL,
  `q_name1` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `q_mo1` bigint(11) NOT NULL,
  `ph` bigint(11) NOT NULL,
  `assign` int(10) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

-- --------------------------------------------------------

--
-- Table structure for table `ot`
--

CREATE TABLE IF NOT EXISTS `ot` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `ot` varchar(100) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `partial_payment`
--

CREATE TABLE IF NOT EXISTS `partial_payment` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `p_mode` varchar(25) NOT NULL,
  `c_no` varchar(25) NOT NULL,
  `p_date` date NOT NULL,
  `i_amt` double NOT NULL,
  `p_amt` double NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE IF NOT EXISTS `quotation` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `q_date` varchar(100) NOT NULL,
  `q_name` varchar(100) NOT NULL,
  `q_address` varchar(100) NOT NULL,
  `q_attn` varchar(100) NOT NULL,
  `q_mo` bigint(11) NOT NULL,
  `q_name2` varchar(200) NOT NULL,
  `q_mob2` bigint(11) NOT NULL,
  `c_name` varchar(150) NOT NULL,
  `ph` bigint(11) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `reciept`
--

CREATE TABLE IF NOT EXISTS `reciept` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(11) NOT NULL,
  `d_id` int(25) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_des` text NOT NULL,
  `r_date` date NOT NULL,
  `r_address` text NOT NULL,
  `re_date` date NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE IF NOT EXISTS `reminder` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(11) NOT NULL,
  `r_name` varchar(25) NOT NULL,
  `r_des` varchar(100) NOT NULL,
  `r_date` date NOT NULL,
  `r_r` varchar(11) NOT NULL,
  `r_name2` varchar(200) NOT NULL,
  `r_comp` varchar(200) NOT NULL,
  `r_mo` bigint(11) NOT NULL,
  `r_mo2` bigint(11) NOT NULL,
  `r_ph` bigint(11) NOT NULL,
  `r_count` int(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=278 ;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_date` varchar(25) NOT NULL,
  `e1` varchar(100) NOT NULL,
  `e2` varchar(100) NOT NULL,
  `e3` varchar(100) NOT NULL,
  `e4` varchar(100) NOT NULL,
  `e5` varchar(100) NOT NULL,
  `s_add` varchar(100) NOT NULL,
  `i_id` int(25) NOT NULL,
  `s_add2` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `cnt` int(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_invoice`
--

CREATE TABLE IF NOT EXISTS `sub_invoice` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(11) NOT NULL,
  `des` text NOT NULL,
  `capacity` int(25) NOT NULL,
  `quantity` int(25) NOT NULL,
  `rate` int(25) NOT NULL,
  `service` int(25) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_quotation`
--

CREATE TABLE IF NOT EXISTS `sub_quotation` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL,
  `des` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_term` varchar(200) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
(1, 'anmol', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `ut`
--

CREATE TABLE IF NOT EXISTS `ut` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `ut` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
