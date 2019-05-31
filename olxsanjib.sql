-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2019 at 06:55 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olxsanjib`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `apid` int(10) DEFAULT NULL,
  `author` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`apid`, `author`) VALUES
(58, '1'),
(59, '1'),
(72, 'uu'),
(72, 'biubio'),
(74, 'gayle'),
(74, 'mcdowell'),
(74, 'lake');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bpid` int(10) NOT NULL,
  `bcondition` enum('good','average','bad') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bpid`, `bcondition`) VALUES
(72, 'average'),
(74, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `ppid` int(10) NOT NULL,
  `usid` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `lpid` int(10) NOT NULL,
  `lmodel` varchar(20) NOT NULL,
  `lyop` year(4) NOT NULL,
  `backup` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`lpid`, `lmodel`, `lyop`, `backup`) VALUES
(53, '1', 2016, 1),
(54, 'inspiron 56', 2016, 1),
(55, '1', 2016, 1),
(56, 'mackbook 5', 2016, 1),
(70, 'uhuui', 2016, 1),
(73, 'vostro', 2018, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `model` varchar(30) NOT NULL,
  `mfg` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`model`, `mfg`) VALUES
('1', '1'),
('4', '5'),
('cfc', 'cff'),
('desire 302', 'htc'),
('e', 'g'),
('f3', 'oppo'),
('fyyt', 'tfytf'),
('g500s', 'lenovo'),
('galaxy j3', 'samsung'),
('galaxy j3 pro', 'samsung'),
('inspiron 500', 'dell'),
('inspiron 56', 'dell'),
('iphone 5s', 'apple'),
('iphone 6s', 'apple'),
('lumia 800', 'nokia'),
('m2 5', 'infocous'),
('mackbook 5', 'apple'),
('trrtd', 'drdtr'),
('uhuui', 'nnn'),
('vostro', 'dell'),
('vostro 500', 'dell'),
('vostro x5', 'dell'),
('vtvytv', 'ttctycy'),
('vvvvv', 'vvyvv'),
('x5', 'vivo');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sid` int(10) DEFAULT NULL,
  `rid` int(10) DEFAULT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sid`, `rid`, `msg`) VALUES
(1, 2, 'hi'),
(1, 3, 'good mrng'),
(3, 4, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `mmodel` varchar(30) NOT NULL,
  `myop` year(4) NOT NULL,
  `mpid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`mmodel`, `myop`, `mpid`) VALUES
('galaxy j3 pro', 2016, 44),
('iphone 6s', 2017, 45),
('f3', 2015, 61),
('fyyt', 2016, 63),
('vtvytv', 2016, 64),
('cfc', 2016, 67),
('trrtd', 2016, 68),
('vvvvv', 2016, 69);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(10) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `doi` date NOT NULL,
  `ptype` enum('mobile','laptop','book') NOT NULL,
  `status` enum('available','sold','expired') DEFAULT NULL,
  `uuid` int(12) DEFAULT NULL,
  `img1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `price`, `doi`, `ptype`, `status`, `uuid`, `img1`) VALUES
(44, 'galaxy j3 pro', 4000, '2018-10-23', 'mobile', 'available', 11, '1.jpeg'),
(45, 'iphone 6s', 67000, '2018-10-23', 'mobile', 'available', 11, '4.jpeg'),
(46, 'b', 7, '2018-09-09', 'mobile', 'available', 3, '5.jpg'),
(47, 'dell vostro x5', 5555, '2018-10-23', 'mobile', 'available', 11, '2.jpg'),
(48, '1', 1, '2018-10-23', 'mobile', 'available', 11, '2.jpg'),
(49, '1', 1, '2018-10-23', 'mobile', 'available', 11, '2.jpg'),
(50, '1', 1, '2018-10-23', 'mobile', 'available', 11, '2.jpg'),
(51, '1', 1, '2018-10-23', 'mobile', 'available', 11, '2.jpg'),
(52, '1', 1, '2018-10-23', 'mobile', 'available', 11, '2.jpg'),
(53, '1', 1, '2018-10-23', 'mobile', 'available', 11, '2.jpg'),
(54, 'dell inspiron 56', 8888, '2018-10-23', 'mobile', 'available', 11, '2.jpg'),
(55, '1', 1, '2018-10-23', 'laptop', 'available', 11, '2.jpg'),
(56, 'applie macbook 5', 5555, '2018-10-23', 'laptop', 'available', 11, '2.jpg'),
(57, '1', 1, '2018-10-23', 'book', 'available', 11, '3.jpg'),
(58, '1', 1, '2018-10-23', 'book', 'available', 11, '3.jpg'),
(59, '1', 1, '2018-10-23', 'book', 'available', 11, '3.jpg'),
(61, 'oppo f3', 25000, '2019-05-18', 'mobile', 'available', 7, '5.jpeg'),
(63, 'trdtcd', 11122, '2019-05-18', 'mobile', 'available', 7, '5.jpeg'),
(64, 'vvyvytc', 224, '2019-05-18', 'mobile', 'available', 7, '5.jpeg'),
(67, 'tftyy', 12132, '2019-05-18', 'mobile', 'available', 7, '3.jpeg'),
(68, 'ybbb', 465456456, '2019-05-18', 'mobile', 'available', 7, 'm8.jpg'),
(69, 't7yu7u', 43335, '2019-05-18', 'mobile', 'available', 7, '1.jpeg'),
(70, 'ytvyv', 5576, '2019-05-18', 'laptop', 'available', 7, 'l3.png'),
(72, 'vyuvuyvuyv', 567, '2019-05-18', 'book', 'available', 5, 'b2.jpeg'),
(73, 'inspion', 656757, '2019-05-21', 'laptop', 'available', 11, 'l1.jpg'),
(74, 'ctci', 30000, '2019-05-22', 'book', 'available', 12, 'b3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(12) NOT NULL,
  `nitc_id` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `utype` enum('student','faculty','staff') NOT NULL,
  `mob` bigint(10) DEFAULT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `nitc_id`, `uname`, `utype`, `mob`, `pwd`) VALUES
(1, 'lokesh@gmail.com', 'lokesh kuma', 'student', 7777777774, ''),
(2, 'mithun@gmail.com', 'mithun kumar', 'student', 8999977994, ''),
(3, 'pandiyanathan@gmail.com', 's pandiyanathan', 'faculty', 4444444444, ''),
(4, 'praveen@gmail.com', 'praveen kumar', 'student', 3333333333, ''),
(5, 'rupesh@gmail.com', 'rupesh kumar', 'student', 1111111114, '12345'),
(6, 'sagar@gmail.com', 'sagar jana', 'staff', 9999999999, ''),
(7, 'sanjibgiri55@gmail.com', 'sanjib kumar giri', 'student', 9853591944, '12345'),
(8, 'soumyadip@gmail.com', 'soumyadip basu', 'student', 2111111114, ''),
(9, 'a', 'a', 'faculty', 5, 'a'),
(10, 'kakali@nitc.com', 'kakali giri', 'faculty', 8111111111, 'asdf'),
(11, 'harish@nitc.com', 'Harish Chandra Giri', 'faculty', 9333333333, 'asdf'),
(12, 'sumitra@gmail.com', 'Sumitra Giri', 'staff', 7894565656, '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD KEY `apid` (`apid`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bpid`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`ppid`),
  ADD KEY `usid` (`usid`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`lpid`),
  ADD KEY `lmodel` (`lmodel`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`model`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD KEY `sid` (`sid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`mpid`),
  ADD KEY `mmodel` (`mmodel`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uuid` (`uuid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `nitc_id` (`nitc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`apid`) REFERENCES `product` (`pid`) ON DELETE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`bpid`) REFERENCES `product` (`pid`) ON DELETE CASCADE;

--
-- Constraints for table `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`usid`) REFERENCES `user` (`uid`) ON DELETE CASCADE,
  ADD CONSTRAINT `buy_ibfk_2` FOREIGN KEY (`ppid`) REFERENCES `product` (`pid`) ON DELETE CASCADE;

--
-- Constraints for table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`lpid`) REFERENCES `product` (`pid`) ON DELETE CASCADE,
  ADD CONSTRAINT `laptop_ibfk_2` FOREIGN KEY (`lmodel`) REFERENCES `manufacturer` (`model`) ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `user` (`uid`) ON DELETE CASCADE,
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `user` (`uid`) ON DELETE CASCADE;

--
-- Constraints for table `mobile`
--
ALTER TABLE `mobile`
  ADD CONSTRAINT `mobile_ibfk_1` FOREIGN KEY (`mpid`) REFERENCES `product` (`pid`) ON DELETE CASCADE,
  ADD CONSTRAINT `mobile_ibfk_2` FOREIGN KEY (`mmodel`) REFERENCES `manufacturer` (`model`) ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`uuid`) REFERENCES `user` (`uid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
