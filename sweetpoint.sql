-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 02:35 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweetpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `add_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `building` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`add_id`, `userid`, `city`, `street`, `building`) VALUES
(7, 33, 'ss', 'ss', 'ss'),
(6, 33, 'saida', 'qayaa', 'salah-don floor 2');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Cakes'),
(2, 'French');

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `size` varchar(10) NOT NULL,
  `flavor` varchar(12) NOT NULL,
  `filling` varchar(20) NOT NULL,
  `icing` varchar(20) NOT NULL,
  `message` text,
  `instructions` text,
  `image` varchar(100) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`id`, `name`, `phone`, `size`, `flavor`, `filling`, `icing`, `message`, `instructions`, `image`, `date`) VALUES
(1, 'mostafa nawam', '81602936', 'size1', 'Chocolate', 'Chocolate Cream', 'Fruits', 'happy birthday mostafa', 'dark chocolate', 'IMG-20210913-WA0244.jpg', '2021-10-18 09:40:45'),
(2, 'ss', '81602936', 'size2', 'White', 'Vanilla', 'Chocolate Cream', 'happy', '123', 'IMG-20210913-WA0232.jpg', '2021-10-18 09:45:14'),
(3, '123', '12345678', 'size1', 'Chocolate', 'Chocolate Cream', 'Fruits', NULL, NULL, NULL, '2021-10-18 10:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderid` int(11) NOT NULL,
  `prodid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderid`, `prodid`, `qty`) VALUES
(46, 3, 1),
(46, 2, 1),
(45, 7, 1),
(45, 6, 1),
(45, 1, 1),
(44, 3, 1),
(44, 1, 1),
(44, 2, 1),
(43, 3, 1),
(43, 1, 1),
(43, 2, 1),
(42, 2, 1),
(42, 5, 1),
(42, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `address` int(11) DEFAULT NULL,
  `pickup` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `note` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `address`, `pickup`, `date`, `note`) VALUES
(42, 33, NULL, 'takeaway', '2021-10-12 09:58:14', NULL),
(43, 33, 6, 'delivery', '2021-10-12 10:01:24', NULL),
(44, 33, NULL, 'takeaway', '2021-10-12 10:01:43', NULL),
(45, 33, 7, 'delivery', '2021-10-12 10:02:05', 'ss'),
(46, 33, NULL, 'takeaway', '2021-10-12 10:39:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertotal`
--

CREATE TABLE `ordertotal` (
  `orderid` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertotal`
--

INSERT INTO `ordertotal` (`orderid`, `total`) VALUES
(46, 525000),
(45, 670000),
(44, 675000),
(43, 695000),
(42, 675000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `name`, `description`, `price`, `image`, `rank`, `cat_id`) VALUES
(1, 'Cortina', 'Chocolate cake with cortina on top', 150000, 'IMG-20210913-WA0308(1).jpg', 0, 1),
(2, 'Vanilla', 'vanilla cake with fruits on top', 350000, 'IMG-20210913-WA0350(2).jpg', 1, 1),
(3, 'Lotus', 'Lotus cake with lotus biscuits on top filled with cream', 175000, 'IMG-20210913-WA0246(3).jpg', 2, 2),
(5, 'Strawberry', 'Strawberry cake with white chips on top', 150000, 'IMG-20210913-WA0269(4).jpg', 0, 1),
(6, 'Eclair', 'Eclaire with strawberry pieces on top', 250000, 'IMG-20210913-WA0272(6).jpg', 0, 2),
(7, 'Petit fours', 'Petit fours 1kg', 130000, 'petit(7).jpg', 2, 2),
(8, 'Mini Eclair', 'Mini Eclair cream puff shells filled with an amazing cream filling and fruits on top', 250000, 'mini tarts(8).jpg', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `prod_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`prod_id`, `quantity`) VALUES
(1, 2),
(2, 2),
(3, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(8) DEFAULT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `phone`, `type`) VALUES
(32, 'mostafanawam44@gmail.com', '$2y$10$ljZeQyMxLyjPLXewTgsNiO/Gd5KZXWgXy7Nnym832DYfsCyTGZADG', 'mostafa', 'nawam', NULL, 'Admin'),
(33, 'mostafanawam244@gmail.com', '$2y$10$Dg9twk5mM0VUCWsvM1s0ReAWnXFfd2H5zbC8Erdm3lgu/cI5E1hli', 'samir', 'nawam', '81602936', 'Customer'),
(34, NULL, NULL, 'ss', 'ss', '11111111', 'tempCustomer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`add_id`,`userid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderid`,`prodid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `ordertotal`
--
ALTER TABLE `ordertotal`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
