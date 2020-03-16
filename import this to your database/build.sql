-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2019 at 09:53 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `build`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisment`
--

DROP TABLE IF EXISTS `advertisment`;
CREATE TABLE IF NOT EXISTS `advertisment` (
  `title` varchar(500) NOT NULL,
  `body` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisment`
--

INSERT INTO `advertisment` (`title`, `body`) VALUES
('we have new materials', 'we have new materials like chodrs,sweeper ,matnela,and gredch'),
('sorry sunday is closed', 'sorry our company is closed on mandy and sunday because our manager have marrage'),
('dears our custemer we made address change', 'we made address change to kedamay weyane in foront of wegagen bank for additional information pleas call by 0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

DROP TABLE IF EXISTS `managers`;
CREATE TABLE IF NOT EXISTS `managers` (
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(15) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`username`, `password`, `email`, `country`, `sex`, `phone`) VALUES
('tswa', '123456789', 'tswa@gmail.com', 'ethiopia', 'f', 987654532),
('tsegay', 'wvhjdb zhox56', 'tsegay@.com', 'eretria', 'm', 975302750);

-- --------------------------------------------------------

--
-- Table structure for table `manage_material`
--

DROP TABLE IF EXISTS `manage_material`;
CREATE TABLE IF NOT EXISTS `manage_material` (
  `material_id` int(9) NOT NULL,
  `material_name` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `catagoryname` varchar(40) NOT NULL,
  `suupliername` varchar(30) NOT NULL,
  PRIMARY KEY (`material_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_material`
--

INSERT INTO `manage_material` (`material_id`, `material_name`, `price`, `catagoryname`, `suupliername`) VALUES
(3456, 'gobas', 78, 'midum quality', 'tswa'),
(23, 'setend', 876, 'midum quality', 'tswa'),
(987, 'grti', 89, 'midum quality', 'tswa'),
(456, 'grita', 456, 'midum quality', 'tswa'),
(674, 'yandu', 89, 'midum quality', 'tswa'),
(5674, 'your', 24356, 'high quality', 'tswa'),
(890, 'kodans', 38, 'high quality', 'tswa'),
(45, 'pumh', 7685, 'midum quality', 'tswa'),
(9867, 'hitent', 23456, 'midum quality', 'tswa'),
(75658, 'chrnas', 3456, 'low quality', 'tswa'),
(8675, 'sinored', 5678, 'high quality', 'tswa'),
(873, 'chores', 897, 'midum quality', 'tswa'),
(6534, 'enart', 7890, 'midum quality', 'tswa'),
(6574, 'berdin', 234, 'low quality', 'tswa'),
(4532, 'cherdas', 980, 'midum quality', 'tswa');

-- --------------------------------------------------------

--
-- Stand-in structure for view `mare`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `mare`;
CREATE TABLE IF NOT EXISTS `mare` (
);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `phone` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `usertype`, `phone`, `country`, `email`, `sex`) VALUES
('yemane', '09090909', 'user', 914236789, 'ethiopia', 'adu@gmail.com', 'm'),
('yrga', '4567890', 'supplier', 914236789, 'ethiopia', 'yrga@gmail.com', 'm'),
('uni', 'asdfg', 'supplier', 98765432, 'china', 'uni@gmail', 'f'),
('tatino', 'tatino', 'user', 956784321, 'egpt', 'tatino@gmail.com', 'm'),
('lemlem', '6738fhygyre', 'supplier', 912213456, 'germen', 'lemlem@gmail.com', 'f'),
('hagos', 'jfehtyg57673', 'supplier', 987654323, 'sudan', 'hogos@gmail.com', 'm'),
('nguse', 'sgfytg46538', 'tax preparer', 134567890, 'italy', 'nuguse@gmail.com', 'm'),
('gebrehiwot', 'hfyehg8745y73', 'tax preparer', 908208483, 'ethiopia', 'gere@gmail.com', 'm'),
('zewde', 'wuhg53egvd', 'supplier', 945456789, 'ethiopia', 'zewde@gmail.com', 'm'),
('abrha', 'fdfhurerbvht', 'supplier', 922334455, 'eretria', 'abrish@gmail.com', 'm'),
('tesfu', 'fhfryrw', 'user', 567890432, 'sudan', 'tesfu@gmail.com', 'm'),
('tswa', '123456789', 'admin', 956432389, 'ethiopia', 'tswa@gmail.com', 'f'),
('shewit', 'ghuhge6473574', 'supplier', 87654322, 'sudan', 'shew@gmail.com', 'f'),
('wldu', '1234', 'user', 987654321, 'italy', 'wldu@gmail.com', 'm'),
('meseret', 'skfgre7538', 'user', 56789432, 'esrael', 'meseret@gmail.com', 'f'),
('eminum', 'ajfgr63832', 'user', 987654231, 'libya', 'eminum@gmail.com', 'm'),
('tsegay', 'feuhrg75', 'user', 975302750, 'egpt', '5gy5@gmail.com', 'f'),
('teteb', '627647ry', 'user', 98745637, 'libya', 'teteb@gmail.com', 'f'),
('abubu', 'wefgbnhj67', 'user', 345678234, 'egpt', 'abubu@gmail.com', 'm'),
('senait', 'plkbr6758kj', 'user', 98756453, 'libya', 'senait@gmail.com', 'f'),
('abay ', 'ehg38t', 'supplier', 4323456, 'italy', 'abay@gmail.com', 'm'),
('merry', '264rwhrue', 'user', 54356789, 'eretria', 'mer@gmail.com', 'f'),
('fish', 'eyerfg3gfwifhw', 'user', 975467213, 'libya', 'fish@gmail.com', 'm'),
('abebu', 'hfrue578ty3', 'user', 98560035, 'esrael', 'abebu@gmail.com', 'f'),
('seseb', 'dfvnut74ty', 'user', 8977755, 'egpt', 'seseb@gmail.com', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `selled_materials`
--

DROP TABLE IF EXISTS `selled_materials`;
CREATE TABLE IF NOT EXISTS `selled_materials` (
  `material_id` int(10) NOT NULL,
  `material_name` varchar(40) NOT NULL,
  `price` int(30) NOT NULL,
  `catagoryname` varchar(50) NOT NULL,
  `suupliername` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selled_materials`
--

INSERT INTO `selled_materials` (`material_id`, `material_name`, `price`, `catagoryname`, `suupliername`) VALUES
(777, 'silcon', 500, 'high quality', 'tsegay'),
(777, 'silcon', 500, 'high quality', 'tsegay'),
(777, 'silcon', 500, 'high quality', 'tsegay'),
(67, 'gobas', 456, 'high quality', 'tsegay'),
(67, 'gobas', 456, 'high quality', 'tsegay'),
(9, 'cement', 890, 'high quality', 'tsegay'),
(9, 'cement', 890, 'high quality', 'tsegay'),
(9, 'cement', 890, 'high quality', 'tsegay'),
(3, 'got', 890, 'low', 'abay'),
(9, 'cement', 890, 'high quality', 'tsegay'),
(777, 'silcon', 500, 'high quality', 'tsegay'),
(2, 'towon', 1150, 'high', 'abay'),
(67, 'gobas', 456, 'high quality', 'tsegay'),
(333, 'tiror', 12800, 'high quality', 'tsegay'),
(3, 'Gloves', 20, 'midum quality', 'fyrg845'),
(1, 'Plumb Bob', 1000, 'low quality', 'fyrg845'),
(0, 'cement', 1200, 'midum quality', 'fyrg845'),
(15, 'cement', 60, 'low quality', 'tswa'),
(77777, 'addert', 450, 'high quality', 'tswa'),
(3490, 'grer', 34, 'low quality', 'tswa'),
(190, 'Plumb Bob', 43, 'midum quality', 'tswa'),
(35, 'silcon', 67, 'low quality', 'tswa'),
(9576, 'tentant', 342637, 'midum quality', 'tswa'),
(876, 'Gloves', 500, 'midum quality', 'tswa'),
(204, 'tiror', 78, 'high quality', 'tswa'),
(202, 'boded', 89, 'midum quality', 'tswa');

-- --------------------------------------------------------

--
-- Table structure for table `sumess`
--

DROP TABLE IF EXISTS `sumess`;
CREATE TABLE IF NOT EXISTS `sumess` (
  `username` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `date` varchar(70) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumess`
--

INSERT INTO `sumess` (`username`, `email`, `date`, `message`) VALUES
('yemane', 'adu@gmail.com', '23/05/2011', 'oh! i want to buy the material slick but you don\'t have it.'),
('tswa', 'tswa@gmail.com', '25/05/2011', 'pleas could you help me by decreasing some materials by 20%.'),
('yemane', 'yemane@gmail.com', '2019-02-04', 'hallow do you need cement that is better than the previous and have nice cost. pleas call me by 0987652433 or through may email yemane@gmail.com send your answer'),
('teshale', 'teshale@gmail.com', '2019-01-01', 'hi do you want grounding hu? how many do you need?');

-- --------------------------------------------------------

--
-- Table structure for table `usermess`
--

DROP TABLE IF EXISTS `usermess`;
CREATE TABLE IF NOT EXISTS `usermess` (
  `username` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(70) NOT NULL,
  `message` varchar(10000) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermess`
--

INSERT INTO `usermess` (`username`, `email`, `date`, `message`) VALUES
('abrhish', 'abrish@email.com', '27/05/2011', 'hi how are you yesterday i asked you is it available'),
('teklekidan', 'teklekidan@gmail.com', '27/05/2011', 'hi bro!!!!!!!!!!'),
('teklu', 'teklu@gmail.com', '21/03/2010', 'do you have cement pleas. if you have\r\npleas tell me the price by calling 0978654323 '),
('tsegay', 'tsegay@gmail.com', '2019-01-01', 'wow i was not'),
('senay', 'senay@gmail.com', '2018-07-16', 'pleas could you lend me some cement!! i will give next month .if you agreed my reqest pleas tell me through my email.'),
('yemane', 'yemane@gmail.com', '2020-01-05', 'hallow do you need cement that is better than the previous \r\nand have nice cost. pleas call me by 0987652433 or through  may email yemane@gmail.com send your answer');

-- --------------------------------------------------------

--
-- Stand-in structure for view `usernameview`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `usernameview`;
CREATE TABLE IF NOT EXISTS `usernameview` (
`username` varchar(40)
);

-- --------------------------------------------------------

--
-- Structure for view `mare`
--
DROP TABLE IF EXISTS `mare`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mare`  AS  select `material`.`material_id` AS `material_id`,`material`.`material_name` AS `material_name`,`material`.`material price` AS `material price`,`register`.`username` AS `username`,`register`.`password` AS `password`,`register`.`usertype` AS `usertype`,`register`.`phone` AS `phone`,`register`.`country` AS `country`,`register`.`email` AS `email`,`register`.`sex` AS `sex` from (`material` join `register`) ;

-- --------------------------------------------------------

--
-- Structure for view `usernameview`
--
DROP TABLE IF EXISTS `usernameview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usernameview`  AS  select `register`.`username` AS `username` from `register` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
