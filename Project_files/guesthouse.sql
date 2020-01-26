-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 12:30 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guesthouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `serialNo` int(6) NOT NULL,
  `guesthouseId` int(6) NOT NULL,
  `security` tinyint(1) NOT NULL,
  `airconditioning` tinyint(1) NOT NULL,
  `garden` tinyint(1) NOT NULL,
  `terrace` tinyint(1) NOT NULL,
  `swimmingPool` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`serialNo`, `guesthouseId`, `security`, `airconditioning`, `garden`, `terrace`, `swimmingPool`) VALUES
(1, 1, 1, 1, 0, 0, 0),
(2, 2, 0, 0, 1, 1, 0),
(3, 3, 1, 1, 0, 0, 1),
(4, 4, 1, 1, 0, 1, 0),
(5, 5, 1, 1, 1, 1, 1),
(6, 8, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guestdetails`
--

CREATE TABLE `guestdetails` (
  `serialNo` int(6) NOT NULL,
  `userId` int(6) NOT NULL,
  `noOfGuests` int(2) NOT NULL,
  `adults` int(2) NOT NULL,
  `children` int(2) NOT NULL,
  `guestName` varchar(40) NOT NULL,
  `guestContact` varchar(11) NOT NULL,
  `guestEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestdetails`
--

INSERT INTO `guestdetails` (`serialNo`, `userId`, `noOfGuests`, `adults`, `children`, `guestName`, `guestContact`, `guestEmail`) VALUES
(2, 5, 1, 1, 0, 'someone', '3275719507', 'some@me.com'),
(3, 8, 4, 3, 1, 'mehwish', '3145574639', 'me@me.com'),
(4, 9, 4, 2, 2, 'tah', '4846244869', 'th@me.com'),
(5, 10, 4, 2, 2, 'tah', '4846244869', 'th@me.com'),
(6, 11, 4, 2, 2, 'tah', '4846244869', 'th@me.com'),
(7, 12, 4, 2, 2, 'tah', '4846244869', 'th@me.com'),
(8, 13, 1, 1, 1, 'someone', '3275719507', 'th@me.com'),
(9, 14, 1, 1, 1, 'someone', '3275719507', 'th@me.com'),
(10, 15, 1, 1, 1, 'someone', '3275719507', 'th@me.com'),
(11, 16, 1, 1, 0, 'someone', '3275719507', 'th@me.com'),
(12, 17, 1, 1, 0, 'someone', '3275719507', 'th@me.com'),
(13, 18, 1, 1, 0, 'someone', '3275719507', 'some@me.com'),
(14, 19, 1, 1, 0, 'someone', '3275719507', 'some@me.com'),
(15, 20, 1, 1, 0, 'someone', '3275719507', 'some@me.com'),
(16, 21, 2, 2, 0, 'Meher', '2139876543', 'meher@yahoo.com'),
(17, 22, 4, 2, 2, 'maheen', '2139876543', 'm@gmail.com'),
(18, 23, 4, 2, 2, 'maheen', '2139876543', 'm@gmail.com'),
(19, 24, 4, 2, 2, 'maheen', '2139876543', 'm@gmail.com'),
(20, 25, 4, 2, 2, 'maheen', '2139876543', 'm@gmail.com'),
(21, 26, 4, 2, 2, 'maheen', '2139876543', 'm@gmail.com'),
(22, 27, 4, 2, 2, 'maheen', '2139876543', 'm@gmail.com'),
(23, 28, 4, 2, 2, 'maheen', '2139876543', 'm@gmail.com'),
(24, 29, 4, 2, 2, 'maheen', '2139876543', 'm@gmail.com'),
(25, 30, 2, 1, 1, 'Sarah', '2223321233', 'sarah@hotmail.com'),
(26, 31, 2, 1, 1, 'Sarah', '2223321233', 'sarah@hotmail.com'),
(27, 32, 2, 1, 1, 'Sarah', '2223321233', 'sarah@hotmail.com'),
(28, 33, 2, 2, 0, 'Farhan', '2223321233', 'f@gmail.com'),
(29, 34, 2, 2, 0, 'Farhan', '3342314527', 'f@gmail.com'),
(30, 35, 2, 2, 0, 'Farhan', '2139876543', 'f@gmail.com'),
(31, 36, 2, 2, 0, 'Farhan', '2139876543', 'f@gmail.com'),
(32, 37, 2, 2, 0, 'Farhan', '2139876543', 'f@gmail.com'),
(33, 38, 2, 2, 0, 'Farhan', '3342314527', 'f@gmail.com'),
(34, 39, 2, 2, 0, 'Shaiza', '3342314527', 'shaiza@hotmail.com'),
(35, 40, 4, 2, 2, 'maheen', '3342314527', 'm@gmail.com'),
(36, 41, 2, 2, 0, 'Maheen', '2139876543', 'm@gmail.com'),
(37, 42, 2, 2, 0, 'Meher', '2139876543', 'sarah@hotmail.com'),
(38, 43, 2, 2, 0, 'Mehwish Tariq', '3123456789', 'mt@gmail.com'),
(39, 44, 3, 2, 1, 'bb', '3349582540', 'bb@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guesthouse`
--

CREATE TABLE `guesthouse` (
  `guesthouseId` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `rent` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guesthouse`
--

INSERT INTO `guesthouse` (`guesthouseId`, `name`, `area`, `street`, `city`, `rent`) VALUES
(1, 'XYZ guesthouse', 'clifton', 'abc-123,xyz', 'karachi', 2000),
(2, 'ABC guesthouse', 'defence', 'xyz-9990,34980', 'karachi', 1000),
(3, 'MYL House', 'Clifton', 'wendey, numbet', 'karachi', 2500),
(4, 'lakeview', 'Defence', '986street', 'karachi', 3000),
(5, 'summerhouse', 'Askari', 'kl432', 'karachi', 3500),
(8, 'seabreeze', 'Askari', '556 streetview', 'karachi', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageId` int(6) NOT NULL,
  `guesthouseId` int(6) NOT NULL,
  `imageUrl` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageId`, `guesthouseId`, `imageUrl`) VALUES
(1, 1, 'GuestHouse\\1c.jpg'),
(2, 1, 'GuestHouse\\1b.jpg'),
(3, 1, 'GuestHouse\\1a.jpg'),
(4, 1, 'GuestHouse\\1.jpg'),
(5, 2, 'GuestHouse\\2c.jpg'),
(6, 2, 'GuestHouse\\2b.jpg'),
(7, 2, 'GuestHouse\\2a.jpg'),
(8, 2, 'GuestHouse\\2.jpg'),
(10, 3, 'GuestHouse\\3c.jpg'),
(11, 3, 'GuestHouse\\3b.jpg'),
(12, 3, 'GuestHouse\\3a.jpg'),
(13, 3, 'GuestHouse\\3.jpg'),
(14, 4, 'GuestHouse\\4.jpg'),
(15, 4, 'GuestHouse\\4a.jpg'),
(16, 4, 'GuestHouse\\4b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `serialNo` int(6) NOT NULL,
  `guesthouseId` int(6) NOT NULL,
  `checkinHrs` time NOT NULL,
  `checkoutHrs` time NOT NULL,
  `nic` tinyint(1) NOT NULL,
  `pet` tinyint(1) NOT NULL,
  `paymentMethod` varchar(40) NOT NULL,
  `advance` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`serialNo`, `guesthouseId`, `checkinHrs`, `checkoutHrs`, `nic`, `pet`, `paymentMethod`, `advance`) VALUES
(1, 1, '06:15:00', '15:00:00', 0, 1, 'easypaisa', 500),
(2, 2, '18:06:00', '15:00:00', 0, 1, '', 0),
(3, 3, '09:00:00', '13:00:00', 1, 1, 'On-cash/Credit/Debit', 0),
(4, 4, '10:00:00', '12:00:00', 1, 1, 'On-cash', 1000),
(5, 5, '11:00:00', '15:00:00', 1, 1, 'Credit/Debit', 0),
(6, 8, '08:00:00', '12:00:00', 1, 1, 'On-cash', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationId` int(6) NOT NULL,
  `guesthouseId` int(6) NOT NULL,
  `checkinDate` date NOT NULL,
  `checkoutDate` date NOT NULL,
  `userId` int(6) NOT NULL,
  `paymentMethod` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationId`, `guesthouseId`, `checkinDate`, `checkoutDate`, `userId`, `paymentMethod`) VALUES
(1, 1, '2019-03-12', '2019-03-20', 5, 'Credit/Debit'),
(4, 2, '2019-03-12', '2019-03-20', 6, 'Cash'),
(5, 3, '2019-03-12', '2019-03-20', 7, 'Cash'),
(6, 3, '2019-03-12', '2019-03-20', 8, 'Cash'),
(7, 1, '2019-03-12', '2019-03-20', 9, 'Cash'),
(8, 1, '2019-03-12', '2019-03-20', 10, 'Cash'),
(9, 1, '2019-07-04', '2019-07-07', 11, 'Cash'),
(11, 3, '0000-00-00', '0000-00-00', 13, 'Credit/Debit'),
(12, 3, '0000-00-00', '0000-00-00', 14, 'Credit/Debit'),
(13, 3, '0000-00-00', '0000-00-00', 15, 'Credit/Debit'),
(14, 3, '0000-00-00', '0000-00-00', 16, 'Credit/Debit'),
(15, 3, '0000-00-00', '0000-00-00', 17, 'Credit/Debit'),
(16, 2, '0000-00-00', '0000-00-00', 18, 'Cash'),
(17, 3, '0000-00-00', '0000-00-00', 19, 'Credit/Debit'),
(18, 3, '0000-00-00', '0000-00-00', 20, 'Credit/Debit'),
(19, 4, '2019-07-09', '2019-07-12', 6, 'On-cash'),
(20, 4, '2019-07-17', '2019-07-20', 6, 'On-cash'),
(21, 5, '2019-08-13', '2019-07-15', 12, 'Credit/Debit'),
(22, 8, '2019-08-20', '2019-07-27', 14, 'On-cash'),
(23, 3, '0000-00-00', '0000-00-00', 21, 'Cash'),
(24, 1, '0000-00-00', '0000-00-00', 22, 'Credit/Debit'),
(25, 1, '0000-00-00', '0000-00-00', 23, 'Credit/Debit'),
(26, 1, '0000-00-00', '0000-00-00', 24, 'Credit/Debit'),
(27, 1, '0000-00-00', '0000-00-00', 25, 'Credit/Debit'),
(28, 1, '0000-00-00', '0000-00-00', 26, 'Credit/Debit'),
(29, 1, '0000-00-00', '0000-00-00', 27, 'Credit/Debit'),
(30, 1, '0000-00-00', '0000-00-00', 28, 'Credit/Debit'),
(31, 1, '0000-00-00', '0000-00-00', 29, 'Credit/Debit'),
(32, 3, '0000-00-00', '0000-00-00', 30, 'Credit/Debit'),
(33, 3, '0000-00-00', '0000-00-00', 31, 'Credit/Debit'),
(34, 3, '0000-00-00', '0000-00-00', 32, 'Credit/Debit'),
(35, 3, '0000-00-00', '0000-00-00', 33, 'Cash'),
(36, 1, '0000-00-00', '0000-00-00', 34, 'Cash'),
(37, 1, '0000-00-00', '0000-00-00', 35, 'Cash'),
(38, 1, '0000-00-00', '0000-00-00', 36, 'Cash'),
(39, 1, '0000-00-00', '0000-00-00', 37, 'Cash'),
(40, 1, '0000-00-00', '0000-00-00', 38, 'Credit/Debit'),
(41, 1, '0000-00-00', '0000-00-00', 39, 'Cash'),
(42, 1, '0000-00-00', '0000-00-00', 40, 'Credit/Debit'),
(43, 1, '0000-00-00', '0000-00-00', 41, 'Cash'),
(44, 1, '0000-00-00', '0000-00-00', 42, 'Cash'),
(45, 4, '0000-00-00', '0000-00-00', 43, 'Credit/Debit'),
(46, 3, '0000-00-00', '0000-00-00', 44, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `roomdetails`
--

CREATE TABLE `roomdetails` (
  `serialNo` int(6) NOT NULL,
  `guesthouseId` int(6) NOT NULL,
  `totalRooms` int(2) NOT NULL,
  `totalBedroom` int(2) NOT NULL,
  `livingRoom` int(2) NOT NULL,
  `kitchen` int(2) NOT NULL,
  `bedroomWithBath` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomdetails`
--

INSERT INTO `roomdetails` (`serialNo`, `guesthouseId`, `totalRooms`, `totalBedroom`, `livingRoom`, `kitchen`, `bedroomWithBath`) VALUES
(1, 1, 5, 3, 2, 1, 1),
(2, 2, 4, 2, 1, 2, 2),
(3, 3, 6, 4, 2, 1, 3),
(4, 4, 3, 2, 0, 1, 1),
(5, 5, 4, 3, 1, 1, 2),
(6, 8, 6, 3, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `cnic`, `contact`, `email`) VALUES
(5, 'nimrah', '12453-1325739-1', '03142749368', 'abc@me.com'),
(6, 'mehwish', '12453-1325739-1', '03142749368', 'abc@me.com'),
(7, 'aliza', '12345-1234567-9', '03654982558', 'aliza@me.com'),
(8, 'aliza', '12345-1234567-9', '03654982558', 'aliza@me.com'),
(9, 'arooba', '23753-2356233-3', '03912758967', 'ar@me.com'),
(10, 'arooba', '23753-2356233-3', '03912758967', 'ar@me.com'),
(11, 'arooba', '23753-2356233-3', '03912758967', 'ar@me.com'),
(12, 'arooba', '23753-2356233-3', '03912758967', 'ar@me.com'),
(13, 'aliza', '23753-2356233-3', '03142749368', 'aliza@me.com'),
(14, 'aliza', '23753-2356233-3', '03142749368', 'aliza@me.com'),
(15, 'aliza', '23753-2356233-3', '03142749368', 'aliza@me.com'),
(16, 'arooba', '12453-1325739-1', '03142749368', 'abc@me.com'),
(17, 'arooba', '12453-1325739-1', '03142749368', 'abc@me.com'),
(18, 'mehwish', '12453-1325739-1', '03142749368', 'abc@me.com'),
(19, 'nimrah', '12453-1325739-1', '03142749368', 'abc@me.com'),
(20, 'mehwish', '12453-1325739-1', '03142749368', 'abc@me.com'),
(21, 'Aliza', '42110-3456789-8', '03331234567', 'aliza28@gmail.com'),
(22, 'al', '42201-8941439-8', '03334567283', 'faiza@yahoo.com'),
(23, 'al', '42201-8941439-8', '03334567283', 'faiza@yahoo.com'),
(24, 'al', '42201-8941439-8', '03334567283', 'faiza@yahoo.com'),
(25, 'al', '42201-8941439-8', '03334567283', 'faiza@yahoo.com'),
(26, 'al', '42201-8941439-8', '03334567283', 'faiza@yahoo.com'),
(27, 'al', '42201-8941439-8', '03334567283', 'faiza@yahoo.com'),
(28, 'al', '42201-8941439-8', '03334567283', 'faiza@yahoo.com'),
(29, 'al', '42201-8941439-8', '03334567283', 'faiza@yahoo.com'),
(30, 'Laiba', '42101-8746329-8', '02134567892', 'laiba1@yahoo.com'),
(31, 'Laiba', '42101-8746329-8', '02134567892', 'laiba1@yahoo.com'),
(32, 'Laiba', '42101-8746329-8', '02134567892', 'laiba1@yahoo.com'),
(33, 'Hakim', '42110-3092439-1', '03331234567', 'h@gmail.com'),
(34, 'Hakim', '42201-8918249-1', '02134567892', 'h@gmail.com'),
(35, 'Hakim', '42201-8918249-1', '03331234567', 'h@gmail.com'),
(36, 'Hakim', '42110-3092439-1', '03334567283', 'h@gmail.com'),
(37, 'Hakim', '42201-8918249-1', '03334567283', 'h@gmail.com'),
(38, 'Hakim', '42110-3092439-1', '03124587260', 'h@gmail.com'),
(39, 'Maham', '42110-3456789-8', '03124587260', 'maham@gmail.com'),
(40, 'Kajol', '42201-8941439-8', '03331234567', 'kajol20@gmail.com'),
(41, 'Aliza', '42201-8918249-8', '03124587260', 'aliza28@gmail.com'),
(42, 'Hakim', '42201-8918249-1', '02134567892', 'aliza28@gmail.com'),
(43, 'Aliza Faryal', '42101-0123456-8', '03339876543', 'af@gmail.com'),
(44, 'gg', '42110-3034539-1', '02134569874', 'gg@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`serialNo`),
  ADD KEY `serialNo` (`serialNo`),
  ADD KEY `guesthouseId` (`guesthouseId`),
  ADD KEY `serialNo_2` (`serialNo`);

--
-- Indexes for table `guestdetails`
--
ALTER TABLE `guestdetails`
  ADD PRIMARY KEY (`serialNo`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `guesthouse`
--
ALTER TABLE `guesthouse`
  ADD PRIMARY KEY (`guesthouseId`),
  ADD KEY `guesthouseId` (`guesthouseId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageId`),
  ADD KEY `guesthouseId` (`guesthouseId`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`serialNo`),
  ADD KEY `guesthouseId` (`guesthouseId`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationId`),
  ADD KEY `guesthouseId` (`guesthouseId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD PRIMARY KEY (`serialNo`),
  ADD KEY `guesthouseId` (`guesthouseId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `serialNo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guestdetails`
--
ALTER TABLE `guestdetails`
  MODIFY `serialNo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `guesthouse`
--
ALTER TABLE `guesthouse`
  MODIFY `guesthouseId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `serialNo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `roomdetails`
--
ALTER TABLE `roomdetails`
  MODIFY `serialNo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_ibfk_1` FOREIGN KEY (`guesthouseId`) REFERENCES `guesthouse` (`guesthouseId`);

--
-- Constraints for table `guestdetails`
--
ALTER TABLE `guestdetails`
  ADD CONSTRAINT `guestdetails_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`guesthouseId`) REFERENCES `guesthouse` (`guesthouseId`);

--
-- Constraints for table `policies`
--
ALTER TABLE `policies`
  ADD CONSTRAINT `policies_ibfk_1` FOREIGN KEY (`guesthouseId`) REFERENCES `guesthouse` (`guesthouseId`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `resXgh` FOREIGN KEY (`guesthouseId`) REFERENCES `guesthouse` (`guesthouseId`),
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD CONSTRAINT `roomdetails_ibfk_1` FOREIGN KEY (`guesthouseId`) REFERENCES `guesthouse` (`guesthouseId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
