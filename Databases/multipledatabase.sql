-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 11:29 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multipledatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_login`
--

CREATE TABLE IF NOT EXISTS `tbl_user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `db_host` varchar(250) NOT NULL DEFAULT 'localhost',
  `db_name` varchar(250) NOT NULL,
  `db_username` varchar(250) NOT NULL,
  `db_password` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_login`
--

INSERT INTO `tbl_user_login` (`id`, `username`, `name`, `password`, `db_host`, `db_name`, `db_username`, `db_password`) VALUES
(1, 'vishal7501', 'V!$H@L', 'e10adc3949ba59abbe56e057f20f883e', 'localhost', 'multipledatabase_1', 'root', ''),
(2, 'soumik123', 'Soumik', 'e10adc3949ba59abbe56e057f20f883e', 'localhost', 'multipledatabase_2', 'root', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_login`
--
ALTER TABLE `tbl_user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user_login`
--
ALTER TABLE `tbl_user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
