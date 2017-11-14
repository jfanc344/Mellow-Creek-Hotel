-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 12:18 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp_prac`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(20) NOT NULL,
  `MemberID` int(20) NOT NULL,
  `DateIn` date NOT NULL,
  `DateOut` date NOT NULL,
  `NumPeople` int(2) NOT NULL,
  `RoomType` varchar(255) NOT NULL,
  `totalprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `MemberID`, `DateIn`, `DateOut`, `NumPeople`, `RoomType`, `totalprice`) VALUES
(111, 1, '2017-11-16', '2017-11-17', 3, 'single', '120'),
(130, 2, '2017-11-17', '2017-11-23', 2, 'single', '720');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktbl`
--

CREATE TABLE `feedbacktbl` (
  `feedbackid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktbl`
--

INSERT INTO `feedbacktbl` (`feedbackid`, `name`, `Email`, `feedback`, `date`) VALUES
(22, 'Michael ', 'Michael@live.com', 'My experience staying at your hotel was fantastic! Friendly staff, Service was great, etc.\n\nThere was only one problem.\n\nThe shower in the room B12 was broken. ', '2017/11/14'),
(23, 'Lisa', 'Lidajid@gmail.com', 'I was just wondering what time does the bar open till?\nThanks in advance ', '2017/11/14'),
(24, 'Seb', 'seb@test.com', 'hotel is great! 10/10. \n\nPool was too small for so many people.', '2017/11/14'),
(26, 'Anna', '', 'Just to let you guys know your hotel is one of the worsts hotels i have ever been to!', '2017/11/14');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceID` int(255) NOT NULL,
  `date` date NOT NULL,
  `MemberID` int(11) NOT NULL,
  `bookingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceID`, `date`, `MemberID`, `bookingID`) VALUES
(60, '2017-11-13', 1, 111),
(78, '2017-11-14', 2, 130);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerID` int(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Username_manager` varchar(255) NOT NULL,
  `Password_manager` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerID`, `FirstName`, `LastName`, `Username_manager`, `Password_manager`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$HdfFes9rmmAle56y2l5lYuqK.Y03eJij0Oz5oQSTCYEmPZX5eDWty'),
(2, 'admin2', 'admin2', 'admin2', '$2y$10$HqqKvufBqR93CR1tRBvYtOj435kb5YnaeWW3/Pig0XEECtU9JxpDK'),
(4, 'seb', 'Fancutt', 'seb', '$2y$10$4.GJtS5ETx7LqxXvubCKSOB4IXTlBBzU4jRoQ4Drhy8OKMZj80X7m'),
(5, 'Dan', 'Fancutt', 'dan', '$2y$10$czlvxusBFrCZECHmR6UBN.NBoIxMZS/qHoqVnkw1o8xHiPcH3B5Cu'),
(6, 'admin5', 'admin5', 'admin5', '$2y$10$HWPEoIqCCvLHHU0u5R20MuWzyZm51CAWUHlQV279ScYZDDVfhMONK'),
(7, 'eqweq', 'ewqeqw', 'eqwe', '$2y$10$kxs.AGXUPLGgQvPcBLh0aOeGehXTQ28L81a6nQUnjVgyJlsoI36Bi');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` int(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `FirstName`, `LastName`, `DOB`, `Email`, `Phone`, `Username`, `Password`, `image`) VALUES
(1, 'sebastian', 'fancutt', '0000-00-00', 'jfanc3@gmail.com', 449532216, 'kygo1', '$2y$10$1eQZ/hvWxxBTITnTYbvar.bv0SDk4wlGGshvsuT/79ChFnKo0N81e', ''),
(2, 'member', 'member', '1998-10-11', 'member', 123456, 'member', '$2y$10$9uRqEBOeQSDUl/GLTfnxE.oQjaESefCKNswMQpIs6jkjW6UoFSqQ.', 0x746573742e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `newtbl`
--

CREATE TABLE `newtbl` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `txt` varchar(500) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newtbl`
--

INSERT INTO `newtbl` (`id`, `title`, `txt`, `date`) VALUES
(1, 'Get one night Free', 'If you book a room before the 18th of November you can get a night free. (minumun 2 nights stay).\r\nIf you book a room before the 18th of November you can get a night free. (minumun 2 nights stay).\r\nIf you book a room before the 18th of November you can get a night free. (minumun 2 nights stay).', '2017-10-22'),
(4, 'Tomorrow we are Celebrating  the hotels 18 birthday!', 'come along and enjoy the fun', '2017-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceID` int(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Username_service` varchar(255) NOT NULL,
  `Password_service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceID`, `FirstName`, `LastName`, `Username_service`, `Password_service`) VALUES
(1, 'service', 'service', 'service', '$2y$10$cvavTSNuuipCag3S6p4.2.EGjHOocmr5y4OgMfg2TkRJBzmHd/Mbq'),
(3, 'service3', 'service3', 'service3', '$2y$10$501F4bBG4YOnYOGw5uxDeOHELpE4sXuJ5lInKraGd/G1/LOKGsyCK'),
(4, 'Alice', 'Smith', 'alice', '$2y$10$BunbUVWaq8a/rrGNsQFYDu0LkM6OZ/LA6kLI3/8OtVIvIeS.bRZn.'),
(5, 'Emily', 'Smith', 'emily', '$2y$10$nWtS/u7E5Pys2mUG75GsQeU1S2hg7gLy.2lZ5ZUt4HuB7/NjN.65K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`),
  ADD UNIQUE KEY `MemberID` (`MemberID`);

--
-- Indexes for table `feedbacktbl`
--
ALTER TABLE `feedbacktbl`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceID`),
  ADD UNIQUE KEY `MemberID` (`MemberID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `newtbl`
--
ALTER TABLE `newtbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `feedbacktbl`
--
ALTER TABLE `feedbacktbl`
  MODIFY `feedbackid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `newtbl`
--
ALTER TABLE `newtbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`bookingID`) REFERENCES `booking` (`BookingID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
