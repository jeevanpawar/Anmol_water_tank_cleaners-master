-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 07:20 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`ck_id`, `c_id`, `c_date`, `elec`, `h2o`, `ot`, `ut`, `pipesize`, `tanksizeut`, `tanksizeot`, `loads`, `schedule`, `lift`, `floors`, `site`, `note`, `representative`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r66`, `r666`, `r7`, `r77`, `r777`, `r8`, `r9`, `r10`, `r11`, `r12`) VALUES
(45, 0, '08-06-2013', 'Yes', 'Yes', '', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', '', 'b', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 11, '08-06-2013', 'Yes', 'Yes', '', '', '', '', 'Yes', '', '', '', 'Yes', '', '', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 12, '08-06-2013', 'Yes', '', 'Yes', '', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', 'sfadkajllkwjlkeflfwljwefk', 'a', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk', '', '', 'jljjk', '', '', 'jljjk', 'jljjk', 'jljjk', 'jljjk', 'jljjk'),
(48, 14, '13-06-2013', '', '', '', '', '', '', '', '', '', '', '', '', '', 'jeevan pawar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 13, '13-06-2013', 'Yes', 'Yes', '', '', '', '', 'Yes', '', '', '', '', '', 'dfsdfssdf', 'jeevan pawar', '', '', '', 's', 'sdfsfsf', '', '', '', '', '', '', '', '', '', '', ''),
(50, 11, '13-06-2013', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', 'jeevan pawar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 15, '13-06-2013', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'hi', 'jeevan pawar', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi', 'hi');

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
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `c_date`, `c_first`, `c_last`, `c_add`, `c_city`, `c_pin`, `c_ph`, `c_mo`, `c_email`, `c_site`) VALUES
(17, '18-06-2013', 'jeevan', 'pawar', 'at post lahavit', 'nasik', 422501, 2532805139, 9049402749, 'jeevan@gamil.com', 'Residential'),
(18, '18-06-2013', 'kishore', 'patil', 'nasik', 'nasik', 420000, 126546, 13546464, 'kishore', 'Residential'),
(19, '18-06-2013', 'milind', 'pawar', 'lahavit', 'nasik', 123456, 13234, 1316546, 'dada', 'Residential');

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
(6, 'jeevan pawar', 'lahavit', 9049402749, 'staff'),
(7, 'vijay gaikwad', 'Lahavit', 9049402749, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_date` varchar(25) NOT NULL,
  `c_id` int(11) NOT NULL,
  `q_name` varchar(25) NOT NULL,
  `q_address` varchar(100) NOT NULL,
  `q_attn` varchar(25) NOT NULL,
  `q_mo` bigint(11) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`i_id`, `q_date`, `c_id`, `q_name`, `q_address`, `q_attn`, `q_mo`) VALUES
(89, '18-06-2013', 17, 'jeevan pawar', 'at post lahavit', 'vijay gaikwad', 9049402749),
(90, '18-06-2013', 18, 'kishore patil', 'nasik', 'vijay gaikwad', 13546464),
(91, '18-06-2013', 19, 'milind pawar', 'lahavit', 'jeevan pawar', 1316546),
(92, '18-06-2013', 19, 'milind pawar', 'lahavit', 'jeevan pawar', 1316546),
(93, '18-06-2013', 19, 'milind pawar', 'lahavit', 'jeevan pawar', 1316546);

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
  `p_date` varchar(25) NOT NULL,
  `i_amt` double NOT NULL,
  `p_amt` double NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `partial_payment`
--

INSERT INTO `partial_payment` (`p_id`, `i_id`, `c_id`, `c_name`, `p_mode`, `c_no`, `p_date`, `i_amt`, `p_amt`) VALUES
(20, 20, 12, 'sager pande', 'By Cash', '', '10-06-2013', 21, 20),
(21, 20, 12, 'sager pande', 'By Cash', '', '10-06-2013', 21, 10),
(22, 20, 12, 'sager pande', 'By Cash', '', '10-06-2013', 21, 10),
(23, 18, 11, 'jeevan pawar', 'By Cash', '', '10-06-2013', 100, 20),
(24, 18, 11, 'jeevan pawar', 'By Cash', '', '10-06-2013', 100, 20),
(25, 20, 12, 'sager pande', 'By Check', '', '11-06-2013', 21, 10),
(26, 58, 13, 'sandeep sandeeo', 'By Cash', '', '12-06-2013', 0, 100),
(29, 69, 13, 'sandeep sandeeo', 'By Cash', '', '12-06-2013', 11960, 100),
(30, 69, 13, 'sandeep sandeeo', 'By Cash', '', '12-06-2013', 11960, 1000),
(31, 69, 13, 'sandeep sandeeo', 'By Check', '', '12-06-2013', 11960, 1000),
(32, 80, 14, 'sachin kale', 'By Cash', '', '13-06-2013', 525, 100),
(33, 80, 14, 'sachin kale', 'By Check', '', '13-06-2013', 525, 100),
(34, 80, 14, 'sachin kale', 'By Check', '', '13-06-2013', 525, 325),
(35, 92, 19, 'milind pawar', 'By Check', '', '18-06-2013', 29000, 20000);

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
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`q_id`, `c_id`, `q_date`, `q_name`, `q_address`, `q_attn`, `q_mo`) VALUES
(3, 11, '12-06-2013', 'jeevan pawar', 'lahavit', 'jeevan pawar', 2),
(4, 11, '12-06-2013', 'jeevan pawar', 'lahavit', 'jeevan pawar', 2),
(5, 13, '12-06-2013', 'sandeep sandeeo', 'asdf', 'jeevan pawar', 21331),
(6, 11, '12-06-2013', 'jeevan pawar', 'lahavit', 'jeevan pawar', 2),
(7, 19, '18-06-2013', 'milind pawar', 'lahavit', 'jeevan pawar', 1316546),
(8, 19, '20-06-2013', 'milind pawar', 'lahavit', 'jeevan pawar', 1316546);

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
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `reciept`
--

INSERT INTO `reciept` (`r_id`, `i_id`, `d_id`, `r_name`, `r_des`, `r_date`) VALUES
(1, 90, 0, 'kishore patil', 'three', '2013-06-20'),
(2, 89, 0, 'jeevan pawar', 'one', '2013-06-20'),
(3, 89, 846, 'jeevan pawar', 'one', '2013-06-20'),
(4, 92, 884, 'milind pawar', 'ut', '2013-06-20'),
(5, 89, 846, 'jeevan pawar', 'one', '2013-06-20'),
(6, 89, 847, 'jeevan pawar', 'one', '2013-06-20'),
(7, 89, 848, 'jeevan pawar', 'one', '2013-06-20'),
(8, 89, 849, 'jeevan pawar', 'one', '2013-06-20'),
(9, 89, 850, 'jeevan pawar', 'two', '2013-06-20'),
(10, 89, 851, 'jeevan pawar', 'two', '2013-06-20'),
(11, 89, 852, 'jeevan pawar', 'two', '2013-06-20'),
(12, 89, 853, 'jeevan pawar', 'two', '2013-06-20'),
(13, 89, 854, 'jeevan pawar', 'two', '2013-06-20'),
(14, 89, 855, 'jeevan pawar', 'two', '2013-06-20'),
(15, 91, 871, 'milind pawar', 'one ut tank', '2013-06-20'),
(16, 91, 872, 'milind pawar', 'one ut tank', '2013-06-20');

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
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=902 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`r_id`, `i_id`, `r_name`, `r_des`, `r_date`, `r_r`) VALUES
(846, 89, 'jeevan pawar', 'one', '2013-06-19', '*'),
(847, 89, 'jeevan pawar', 'one', '2013-12-17', '*'),
(848, 89, 'jeevan pawar', 'one', '2014-03-18', '*'),
(849, 89, 'jeevan pawar', 'one', '2014-06-17', '*'),
(850, 89, 'jeevan pawar', 'two', '2013-08-18', '*'),
(851, 89, 'jeevan pawar', 'two', '2013-10-18', '*'),
(852, 89, 'jeevan pawar', 'two', '2013-12-18', '*'),
(853, 89, 'jeevan pawar', 'two', '2013-02-17', '*'),
(854, 89, 'jeevan pawar', 'two', '2014-04-19', '*'),
(855, 89, 'jeevan pawar', 'two', '2014-06-19', '*'),
(856, 90, 'kishore patil', 'one', '2013-12-16', ''),
(857, 90, 'kishore patil', 'one', '2014-06-15', ''),
(858, 90, 'kishore patil', 'two', '2013-10-17', ''),
(859, 90, 'kishore patil', 'two', '2014-02-15', ''),
(860, 90, 'kishore patil', 'two', '2014-06-16', ''),
(861, 90, 'kishore patil', 'three', '2013-08-18', ''),
(862, 90, 'kishore patil', 'three', '2013-10-18', ''),
(863, 90, 'kishore patil', 'three', '2013-12-18', ''),
(864, 90, 'kishore patil', 'three', '2014-02-17', ''),
(865, 90, 'kishore patil', 'three', '2014-04-19', ''),
(866, 90, 'kishore patil', 'three', '2014-06-19', ''),
(867, 90, 'kishore patil', 'four', '2013-09-17', ''),
(868, 90, 'kishore patil', 'four', '2013-12-17', ''),
(869, 90, 'kishore patil', 'four', '2014-03-18', ''),
(870, 90, 'kishore patil', 'four', '2014-06-17', ''),
(871, 91, 'milind pawar', 'one ut tank', '1970-01-01', '*'),
(872, 91, 'milind pawar', 'one ut tank', '1970-01-01', '*'),
(873, 91, 'milind pawar', 'one ut tank', '1970-01-01', ''),
(874, 91, 'milind pawar', 'one ut tank', '1970-01-01', ''),
(875, 91, 'milind pawar', 'one ut tank', '1970-01-01', ''),
(876, 91, 'milind pawar', 'one ut tank', '1970-01-01', ''),
(877, 91, 'milind pawar', 'one ut tank', '2014-06-20', ''),
(878, 91, 'milind pawar', 'two ot tank', '2013-08-18', ''),
(879, 91, 'milind pawar', 'two ot tank', '2013-10-18', ''),
(880, 91, 'milind pawar', 'two ot tank', '2013-12-18', ''),
(881, 91, 'milind pawar', 'two ot tank', '2014-02-17', ''),
(882, 91, 'milind pawar', 'two ot tank', '2014-04-19', ''),
(883, 91, 'milind pawar', 'two ot tank', '2014-06-19', ''),
(884, 92, 'milind pawar', 'ut', '2013-08-09', ''),
(885, 92, 'milind pawar', 'ut', '2013-09-30', ''),
(886, 92, 'milind pawar', 'ut', '2013-11-21', ''),
(887, 92, 'milind pawar', 'ut', '2014-01-12', ''),
(888, 92, 'milind pawar', 'ut', '2014-03-05', ''),
(889, 92, 'milind pawar', 'ut', '2014-04-26', ''),
(890, 92, 'milind pawar', 'ut', '2014-06-17', ''),
(891, 92, 'milind pawar', 'ot', '2013-07-22', ''),
(892, 92, 'milind pawar', 'ot', '2013-08-25', ''),
(893, 92, 'milind pawar', 'ot', '2013-09-28', ''),
(894, 92, 'milind pawar', 'ot', '2013-11-01', ''),
(895, 92, 'milind pawar', 'ot', '2013-12-05', ''),
(896, 92, 'milind pawar', 'ot', '2014-01-08', ''),
(897, 92, 'milind pawar', 'ot', '2014-02-11', ''),
(898, 92, 'milind pawar', 'ot', '2014-03-17', ''),
(899, 92, 'milind pawar', 'ot', '2014-04-20', ''),
(900, 92, 'milind pawar', 'ot', '2014-05-24', ''),
(901, 92, 'milind pawar', 'ot', '2014-06-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_date` varchar(25) NOT NULL,
  `e1` varchar(25) NOT NULL,
  `e2` varchar(25) NOT NULL,
  `e3` varchar(25) NOT NULL,
  `e4` varchar(25) NOT NULL,
  `e5` varchar(25) NOT NULL,
  `s_add` varchar(100) NOT NULL,
  `i_id` int(25) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`s_id`, `s_date`, `e1`, `e2`, `e3`, `e4`, `e5`, `s_add`, `i_id`) VALUES
(32, '12-06-2013', 'jeevan pawar', 'jeevan pawar', 'jeevan pawar', '', '', 'sager pande', 0),
(33, '12-06-2013', 'jeevan pawar', 'jeevan pawar', 'jeevan pawar', '', '', 'jeevan pawar', 92),
(34, '20-06-2013', 'jeevan pawar', '', '', '', '', 'kishore patil', 92);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=433 ;

--
-- Dumping data for table `sub_invoice`
--

INSERT INTO `sub_invoice` (`s_id`, `i_id`, `des`, `capacity`, `quantity`, `rate`, `service`, `total`) VALUES
(423, 89, 'one', 1500, 1, 400, 4, 1600),
(424, 89, 'two', 2000, 2, 800, 6, 9600),
(425, 90, 'one', 1500, 2, 200, 2, 800),
(426, 90, 'two', 2000, 1, 500, 3, 1500),
(427, 90, 'three', 3000, 2, 100, 6, 1200),
(428, 90, 'four', 5000, 1, 200, 4, 800),
(429, 91, 'one ut tank', 5000, 2, 1500, 7, 21000),
(430, 91, 'two ot tank', 5000, 2, 2000, 6, 24000),
(431, 92, 'ut', 5000, 2, 500, 7, 7000),
(432, 92, 'ot', 10000, 2, 1000, 11, 22000);

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
  `total` float NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sub_quotation`
--

INSERT INTO `sub_quotation` (`s_id`, `q_id`, `des`, `capacity`, `quantity`, `rate`, `service`, `total`) VALUES
(1, 4, 'gjghj', 100, 2, 2, 5, 20),
(2, 5, '', 0, 0, 0, 0, 0),
(3, 6, '', 0, 0, 0, 0, 0),
(4, 8, 'ghjg', 12200, 25, 25, 2, 1250);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_term` varchar(200) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`t_id`, `t_term`) VALUES
(1, 'After Completion of work, Issue the Cheque immediately.'),
(2, 'For AMC you have to pay 100% in advance by cheque only.'),
(3, 'For our Machines, Electricity and Water is provided by you.'),
(4, 'hi'),
(5, 'new'),
(6, 'add');

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
