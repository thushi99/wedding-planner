-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2020 at 06:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(10) DEFAULT NULL,
  `adminUsername` varchar(20) NOT NULL,
  `adminPassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUsername`, `adminPassword`) VALUES
('1', 'admin', 'admin123'),
('4', 'akash', 'akash#1999'),
('5', 'dilshan', 'dilshan@#@#'),
('2', 'manager', 'manager123'),
('3', 'vendor', 'vendor123');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `feedbackID` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `answers` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `date` varchar(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `date`, `name`, `email`, `message`) VALUES
(500, '2020-10-21', 'Ned Stark', 'nedstark@gmail.com', 'How to Book a Venue?'),
(501, '2020-10-21', 'Arthur', 'arthurshelby@gmail.com', 'Can I make an online Payment?'),
(502, '2020-10-21', 'Elon Musk', 'elonmusk@gmail.com', 'Your services are very good.'),
(503, '2020-10-21', 'Steve Jobs', 'stevejobs@gmail.com', 'How long it will take to conform to our Booking?'),
(504, '2020-10-21', 'Tom Hardy', 'tomhardy@gmail.com', 'How to reset the account password?'),
(505, '2020-10-25', 'Saru', 'saru@gmail.com', 'I like your Service');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `eventDate` varchar(13) NOT NULL,
  `hotel` varchar(500) NOT NULL,
  `photography` varchar(500) NOT NULL,
  `catering` varchar(500) NOT NULL,
  `noofguests` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentID` int(11) NOT NULL,
  `nameOnCard` varchar(50) NOT NULL,
  `cardNumber` varchar(16) NOT NULL,
  `expiryDate` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipCode` int(11) NOT NULL,
  `cvvNumber` int(11) NOT NULL,
  `orderID` varchar(6) NOT NULL,
  `totalAmount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pID` varchar(20) NOT NULL,
  `pType` varchar(20) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `pPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pID`, `pType`, `pName`, `pPrice`) VALUES
('Ctr1', 'catering', 'Sponge Caters', 700),
('Ctr2', 'catering', 'Royal Catering', 800),
('Ctr3', 'catering', 'Raffles Catering', 640),
('Ctr4', 'catering', 'Mango Caters', 500),
('Ctr5', 'catering', 'P&S Catering', 550),
('Ctr6', 'catering', 'Tasty Caterers', 680),
('Pto1_G', 'photography', 'Danushka Sandeera - Golden', 250000),
('Pto1_P', 'photography', 'Danushka Sandeera - Platinum', 300000),
('Pto1_S', 'photography', 'Danushka Sandeera - Silver', 200000),
('Pto2_G', 'photography', 'Studio CaptureX - Golden', 150000),
('Pto2_P', 'photography', 'Studio CaptureX - Platinum', 200000),
('Pto2_S', 'photography', 'Studio CaptureX - Silver', 100000),
('Pto3_G', 'photography', 'Color Vision - Golden', 350000),
('Pto3_P', 'photography', 'Color Vision - Platinum', 400000),
('Pto3_S', 'photography', 'Color Vision - Silver', 300000),
('Pto4_G', 'photography', 'Naween Aluthge - Golden', 180000),
('Pto4_P', 'photography', 'Naween Aluthge - Platinum', 270000),
('Pto4_S', 'photography', 'Naween Aluthge - Silver', 130000),
('Pto5_G', 'photography', 'Sai Photography - Golden', 370000),
('Pto5_P', 'photography', 'Sai Photography - Platinum', 420000),
('Pto5_S', 'photography', 'Sai Photography - Silver', 320000),
('Pto6_G', 'photography', 'Studio Siyak - Golden', 200000),
('Pto6_P', 'photography', 'Studio Siyak - Platinum', 300000),
('Pto6_S', 'photography', 'Studio Siyak - Silver', 150000),
('Ven1', 'venue', 'Hilton Hotel', 300000),
('Ven2', 'venue', 'Marble Beach', 250000),
('Ven3', 'venue', 'Barracuda Resort', 200000),
('Ven4', 'venue', 'Cinnamon Hotel', 350000),
('Ven5', 'venue', 'Marine Beach', 230000),
('Ven6', 'venue', 'Avenra Resort', 280000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `dob`, `mobile`, `gender`) VALUES
(2005, 'Fernando', 'Lahiru', 'lahirufernando@gmail.com', 'fernando', '2020-10-15', 771234567, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminUsername`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1043;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3009;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2014;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
