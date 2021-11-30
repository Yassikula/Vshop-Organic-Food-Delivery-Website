-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 07:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegetables`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `lname` varchar(11) NOT NULL,
  `oname` varchar(25) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `zname` varchar(20) NOT NULL,
  `card` varchar(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`lname`, `oname`, `tname`, `message`, `zname`, `card`, `name`, `id`) VALUES
('kasu@gmail.', 'Kottawa', '0776542316', '', ' 3233', '', 'Kasun', 81),
('kasu@gmail.', 'Kottawa', '0776542316', '', ' 3233', '', 'Kasun', 82),
('sm@gmail.co', 'Colombo', '077635423', '', '4444', '', 'Saman', 83),
('hasi@gmail.', 'Colombo', '0778354672', 'Send with love', '4455', '', 'hashini', 84);

-- --------------------------------------------------------

--
-- Table structure for table `pconfirm`
--

CREATE TABLE `pconfirm` (
  `tests` varchar(100) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `acname` varchar(50) NOT NULL,
  `ename` varchar(20) NOT NULL,
  `cvname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pconfirm`
--

INSERT INTO `pconfirm` (`tests`, `cname`, `acname`, `ename`, `cvname`) VALUES
('', 'uyuuuuuuuuu', '43424424', '2020-04-05', 777),
('big', 'uyuuuuuuuuu', '43424424', '2020-04-05', 777),
('big', 'ffffffffffffffffffff', '4324324', '2020-09-08', 3333),
('master', '42424', '242442424', '2020-09-08', 2222),
('master', '42424', '242442424', '2020-09-08', 2222),
('master', '42424', '242442424', '2020-09-08', 2222),
('master', '42424', '242442424', '2020-09-08', 2222),
('visa', '44645654', '65645654654', '2020-04-05', 3333),
('visa', '5455', '54545', '2020-04-05', 555),
('visa', '5455', '54545', '2020-04-05', 555),
('visa', '5455', '54545', '2020-04-05', 555),
('visa', 'M.K.Saman', '2345678996543234567', '2020-09-08', 3333),
('visa', 'N.L.Kumara', '12347654987654657', '2020-05-06', 5555),
('visa', 'M.L.Perera', '13245475869475893', '2020-08-04', 3343);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `qt` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `code`, `name`, `type`, `image`, `price`, `qt`) VALUES
(76, 'AC44', 'Beet', 'vegetable', 'beet.jpg', '200.00', '10'),
(77, 'AC55', 'Cucumber', 'vegetable', 'cucumber.jpg', '130.00', '2'),
(78, 'AC33', 'Beans', 'vegetable', 'beans.jpg', '120.00', '10'),
(79, 'AC31', 'Cabbage', 'vegetable', 'cabbages.jpg', '110.00', '1'),
(75, 'J5', 'Apple Juice', 'fruitproduct', 'applejuice.jpg', '180.00', '1'),
(74, 'C2', 'Canned Corn', 'canproduct', 'cancorn.jpg', '160.00', '1'),
(73, 'J4', 'Cucumber Juice', 'vegeproduct', 'cucumberjuice.png', '250.00', '1'),
(72, 'J3', 'Mango Juice', 'fruitproduct', 'mangojuice.jpg', '150.00', '1'),
(71, 'C1', 'Canned Cucumber', 'canproduct', 'cancucumber.jpg', '250.00', '1'),
(70, 'J1', 'Orange Juice', 'fruitproduct', 'orangejuice.jpg', '160.00', '1'),
(69, 'J2', 'Carrot Juice', 'vegeproduct', 'carrot juice.jpg', '150.00', '1'),
(68, 'J2', 'Orange Juice', 'fruit', 'orangejuice.jpg', '150.00', '1'),
(63, 'AC3', 'Carrot', 'vegetable', 'carrot.jpg', '30.00', '80'),
(67, 'FC2', 'Mango', 'fruit', 'mango.jpg', '60.00', '120'),
(82, 'AC37', 'Tomato', 'vegetable', 'tomato.jpg', '160.00', '5'),
(81, 'AC36', 'Potato', 'vegetable', 'potato.jpg', '60.00', '10');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `type`) VALUES
(1, 'Mango', 'fruit'),
(3, 'Carrot Juice', 'vegeproduct'),
(4, 'Orange Juice', 'fruitproduct'),
(5, 'Cucumber', 'canproduct'),
(6, 'Mango Juice', 'fruitproduct'),
(7, 'Cucumber Juice', 'vegeproduct'),
(8, 'Corn', 'canproduct'),
(9, 'Apple Juice', 'fruitproduct'),
(10, 'Beet', 'vegetable'),
(11, 'Cucumber', 'vegetable'),
(12, 'Bean', 'vegetable'),
(13, 'Cabbage', 'vegetable'),
(14, 'Potato', 'vegetable'),
(15, 'Tomato', 'vegetable');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `re_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `password`, `re_password`) VALUES
(8, 'yasi', 'yasi', 'b2ca678b4c936f905fb82f2733f5297f', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
