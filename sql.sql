-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 04:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project001`
--

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE `attend` (
  `indexNumber` varchar(100) NOT NULL,
  `maths` varchar(100) NOT NULL,
  `science` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attend`
--

INSERT INTO `attend` (`indexNumber`, `maths`, `science`) VALUES
('26700', 'yes', 'no'),
('26701', 'no', 'yes'),
('26702', 'yes', 'yes'),
('26703', 'yes', 'yes'),
('26704', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `gId` int(11) NOT NULL,
  `gName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `indexNumber` varchar(100) NOT NULL,
  `gOccupation` varchar(255) NOT NULL,
  `gRelation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`gId`, `gName`, `name`, `indexNumber`, `gOccupation`, `gRelation`) VALUES
(39, 'Shane', 'Rohith', '26700', 'Teacher', 'Son');

-- --------------------------------------------------------

--
-- Table structure for table `learn`
--

CREATE TABLE `learn` (
  `sbId` int(11) NOT NULL,
  `indexNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learn`
--

INSERT INTO `learn` (`sbId`, `indexNumber`) VALUES
(200, '26700'),
(200, '26702'),
(200, '26703'),
(200, '26704'),
(201, '26701'),
(201, '26702'),
(201, '26703'),
(201, '26704');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pytId` int(11) NOT NULL,
  `indexNumber` varchar(100) NOT NULL,
  `sbId` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `january` varchar(100) NOT NULL,
  `february` varchar(100) NOT NULL,
  `march` varchar(100) NOT NULL,
  `april` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pytId`, `indexNumber`, `sbId`, `amount`, `january`, `february`, `march`, `april`) VALUES
(52, '26700', 200, 800, 'pending', 'pending', 'pending', 'pending'),
(53, '26701', 201, 800, 'pending', 'pending', 'pending', 'pending'),
(54, '26702', 200, 800, 'pending', 'pending', 'pending', 'pending'),
(55, '26702', 201, 800, 'pending', 'pending', 'pending', 'pending'),
(58, '26703', 201, 800, 'pending', 'pending', 'pending', 'pending'),
(63, '26704', 200, 800, 'pending', 'pending', 'pending', 'pending'),
(64, '26704', 201, 800, 'pending', 'pending', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stId` int(11) NOT NULL,
  `stName` varchar(200) NOT NULL,
  `indexNumber` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dateJoined` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stId`, `stName`, `indexNumber`, `email`, `phone`, `dateJoined`) VALUES
(51, 'Rohith', '26700', 'rohith@gmail.com', '0711111112', '2022-11-01'),
(52, 'Virat', '26701', 'virat@gmail.com', '0778333333', '2022-11-16'),
(53, 'Watson', '26702', 'watson@gmail.com', '0778533333', '2022-11-15'),
(54, 'Kumar', '26703', 'kumar@gmail.com', '0778544444', '2022-11-08'),
(57, 'Ravi', '26704', 'ravi@gmail.com', '0778528526', '2022-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sbId` int(11) NOT NULL,
  `sbName` varchar(100) NOT NULL,
  `tId` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sbId`, `sbName`, `tId`, `day`, `time`) VALUES
(200, 'Maths', 802, 'Sunday', '8.00AM'),
(201, 'Science', 803, 'Thuesday', '2.00Pm');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tId` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `tp` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tId`, `name`, `tp`, `email`) VALUES
(802, 'Perera', '0714456200', 'perera@gmail.com'),
(803, 'John', '0714456236', 'john@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(3, 'admin1', '202cb962ac59075b964b07152d234b70', 'admin1'),
(4, 'admin2', '202cb962ac59075b964b07152d234b70', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attend`
--
ALTER TABLE `attend`
  ADD UNIQUE KEY `indexNumber` (`indexNumber`),
  ADD KEY `foreignkey` (`indexNumber`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`gId`),
  ADD KEY `foreignKeyStudent` (`indexNumber`);

--
-- Indexes for table `learn`
--
ALTER TABLE `learn`
  ADD PRIMARY KEY (`sbId`,`indexNumber`),
  ADD KEY `studentForeignKey` (`sbId`,`indexNumber`),
  ADD KEY `learn_ibfk_2` (`indexNumber`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pytId`),
  ADD KEY `foreign` (`sbId`),
  ADD KEY `indexNumber` (`indexNumber`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`indexNumber`),
  ADD UNIQUE KEY `unique` (`stId`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sbId`),
  ADD KEY `foreigkeytId` (`tId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `gId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pytId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sbId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=805;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attend`
--
ALTER TABLE `attend`
  ADD CONSTRAINT `attend_ibfk_1` FOREIGN KEY (`indexNumber`) REFERENCES `student` (`indexNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `foreignKeyStudent` FOREIGN KEY (`indexNumber`) REFERENCES `student` (`indexNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `learn`
--
ALTER TABLE `learn`
  ADD CONSTRAINT `learn_ibfk_1` FOREIGN KEY (`sbId`) REFERENCES `subject` (`sbId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `learn_ibfk_2` FOREIGN KEY (`indexNumber`) REFERENCES `student` (`indexNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`sbId`) REFERENCES `subject` (`sbId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`indexNumber`) REFERENCES `learn` (`indexNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`tId`) REFERENCES `teacher` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`tId`) REFERENCES `subject` (`tId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
