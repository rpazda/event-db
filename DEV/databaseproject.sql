-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2016 at 12:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `uid` varchar(255) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userComment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`uid`, `eventName`, `createdOn`, `userComment`) VALUES
('Test.Student10@knights.ucf.edu', 'TestEvent01', '2016-07-28 02:04:54', 'This is a test comment!'),
('Test.Student13@knights.ucf.edu', 'TestEvent01', '2016-07-28 02:04:54', 'This is a test comment!'),
('Test.Student2@knights.ucf.edu', 'TestEvent01', '2016-07-28 02:04:54', 'This is a test comment!');

-- --------------------------------------------------------

--
-- Table structure for table `eventcategory`
--

CREATE TABLE `eventcategory` (
  `eventType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventcategory`
--

INSERT INTO `eventcategory` (`eventType`) VALUES
('Academic'),
('Arts Exhibit'),
('Career/Jobs'),
('Concert/Performance'),
('Entertainment'),
('Health'),
('Holiday'),
('Meeting'),
('Open Forum'),
('Recreation & Exercise'),
('Service/Volunteer'),
('Social Event'),
('Speaker/Lecture/Seminar'),
('Sports'),
('Tour/Open House/Information Session'),
('Uncategorized/Other'),
('Workshop/Conference');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventTime` varchar(255) NOT NULL,
  `universityName` varchar(255) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text,
  `contactName` varchar(255) DEFAULT NULL,
  `contactPhone` varchar(255) DEFAULT NULL,
  `contactEmail` varchar(255) DEFAULT NULL,
  `isPrivate` tinyint(1) DEFAULT '0',
  `isRSO` tinyint(1) DEFAULT '0',
  `isApproved` tinyint(1) DEFAULT '0',
  `rsoName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventTime`, `universityName`, `locationName`, `eventName`, `category`, `description`, `contactName`, `contactPhone`, `contactEmail`, `isPrivate`, `isRSO`, `isApproved`, `rsoName`) VALUES
('2016-08-03T07:00', 'University of Central Florida', 'UCF Main Campus', 'TestEvent01', 'Academic', NULL, 'Test Student02', '555-555-0001', 'Test.Student2@knights.ucf.edu', 0, 1, 1, 'TestRSO01'),
('2016-08-03T08:00', 'University of Central Florida', 'UCF Main Campus', 'TestEvent02', 'Academic', NULL, 'Test Student02', '555-555-0001', 'Test.Student2@knights.ucf.edu', 0, 1, 1, 'TestRSO01'),
('2016-08-03T09:00', 'University of Central Florida', 'UCF Main Campus', 'TestEvent03', 'Academic', NULL, 'Test Student02', '555-555-0001', 'Test.Student2@knights.ucf.edu', 0, 1, 1, 'TestRSO01');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `locationName` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`locationName`, `latitude`, `longitude`) VALUES
('FSU Main Campus', 30.443247, -84.302457),
('In the Clouds', 0, 0),
('UCF Main Campus', 28.587801, -81.199363),
('USF Main Campus', 28.062622, -82.413911);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `uid` varchar(255) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `eventTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rsomembers`
--

CREATE TABLE `rsomembers` (
  `rsoName` varchar(255) NOT NULL,
  `universityName` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsomembers`
--

INSERT INTO `rsomembers` (`rsoName`, `universityName`, `uid`) VALUES
('TestRSO01', 'University of Central Florida', 'Test.Student10@knights.ucf.edu'),
('TestRSO01', 'University of Central Florida', 'Test.Student11@knights.ucf.edu'),
('TestRSO01', 'University of Central Florida', 'Test.Student12@knights.ucf.edu'),
('TestRSO01', 'University of Central Florida', 'Test.Student13@knights.ucf.edu'),
('TestRSO01', 'University of Central Florida', 'Test.Student20@knights.ucf.edu'),
('TestRSO01', 'University of Central Florida', 'Test.Student7@knights.ucf.edu'),
('TestRSO02', 'University of South Florida', 'Test.Student14@cougars.sf.edu'),
('TestRSO02', 'University of South Florida', 'Test.Student15@cougars.sf.edu'),
('TestRSO02', 'University of South Florida', 'Test.Student1@cougars.sf.edu'),
('TestRSO02', 'University of South Florida', 'Test.Student3@cougars.sf.edu'),
('TestRSO02', 'University of South Florida', 'Test.Student5@cougars.sf.edu'),
('TestRSO02', 'University of South Florida', 'Test.Student8@cougars.sf.edu'),
('TestRSO03', 'University of Central Florida', 'Test.Student10@knights.ucf.edu'),
('TestRSO03', 'University of Central Florida', 'Test.Student11@knights.ucf.edu'),
('TestRSO03', 'University of Central Florida', 'Test.Student12@knights.ucf.edu'),
('TestRSO03', 'University of Central Florida', 'Test.Student13@knights.ucf.edu'),
('TestRSO03', 'University of Central Florida', 'Test.Student20@knights.ucf.edu'),
('TestRSO03', 'University of Central Florida', 'Test.Student7@knights.ucf.edu');

-- --------------------------------------------------------

--
-- Table structure for table `rsos`
--

CREATE TABLE `rsos` (
  `rsoName` varchar(255) NOT NULL,
  `universityName` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `description` text,
  `isApproved` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsos`
--

INSERT INTO `rsos` (`rsoName`, `universityName`, `uid`, `description`, `isApproved`) VALUES
('TestRSO01', 'University of Central Florida', 'Test.Student2@knights.ucf.edu', 'This is a Test RSO for the database!', 1),
('TestRSO02', 'University of South Florida', 'Test.Student1@cougars.sf.edu', 'This is a Test RSO for the database!', 1),
('TestRSO03', 'University of Central Florida', 'Test.Student2@knights.ucf.edu', 'This is a Test RSO for the database!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `universityName` varchar(255) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `description` text,
  `domain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`universityName`, `locationName`, `description`, `domain`) VALUES
('Cloud University of the Sky', 'In the Clouds', 'Welcome to the Sky.', '@cloud.edu'),
('Florida State University', 'FSU Main Campus', 'Welcome to Florida State University!', '@my.fsu.edu'),
('University of Central Florida', 'UCF Main Campus', 'Our 1,415-acre main campus in East Orlando provides modern facilities, most of which have wireless abilities, with 600 acres set aside for lakes, woodlands and an arboretum. We believe that a university campus should not only be a place to learn, but a pleasant place to live. We encourage you to visit and see for yourself.', '@kinghts.ucf.edu'),
('University of South Florida', 'USF Main Campus', 'Welcome to the University of South Florida.', '@cougars.sf.edu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `universityName` varchar(255) NOT NULL,
  `userType` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `userPassword`, `universityName`, `userType`, `userName`) VALUES
('Super.Admin@cloud.edu', 'password', 'Cloud University of the Sky', 0, 'Super Admin'),
('Test.Student10@knights.ucf.edu', 'password', 'University of Central Florida', 1, 'Test Student10'),
('Test.Student11@knights.ucf.edu', 'password', 'University of Central Florida', 1, 'Test Student11'),
('Test.Student12@knights.ucf.edu', 'password', 'University of Central Florida', 1, 'Test Student12'),
('Test.Student13@knights.ucf.edu', 'password', 'University of Central Florida', 1, 'Test Student13'),
('Test.Student14@cougars.sf.edu', 'password', 'University of South Florida', 1, 'Test Student14'),
('Test.Student15@cougars.sf.edu', 'password', 'University of South Florida', 1, 'Test Student15'),
('Test.Student16@knights.ucf.edu', 'password', 'University of Central Florida', 1, 'Test Student16'),
('Test.Student17@my.fsu.edu', 'password', 'Florida State University', 1, 'Test Student17'),
('Test.Student18@cougars.sf.edu', 'password', 'University of South Florida', 1, 'Test Student18'),
('Test.Student19@cougars.sf.edu', 'password', 'University of South Florida', 1, 'Test Student19'),
('Test.Student1@cougars.sf.edu', 'password', 'University of South Florida', 1, 'Test Student1'),
('Test.Student20@knights.ucf.edu', 'password', 'University of Central Florida', 1, 'Test Student20'),
('Test.Student2@knights.ucf.edu', 'password', 'University of Central Florida', 1, 'Test Student2'),
('Test.Student3@cougars.sf.edu', 'password', 'University of South Florida', 1, 'Test Student3'),
('Test.Student4@my.fsu.edu', 'password', 'Florida State University', 1, 'Test Student4'),
('Test.Student5@cougars.sf.edu', 'password', 'University of South Florida', 1, 'Test Student5'),
('Test.Student6@my.fsu.edu', 'password', 'Florida State University', 1, 'Test Student6'),
('Test.Student7@knights.ucf.edu', 'password', 'University of Central Florida', 1, 'Test Student7'),
('Test.Student8@cougars.sf.edu', 'password', 'University of South Florida', 1, 'Test Student8'),
('Test.Student9@my.fsu.edu', 'password', 'Florida State University', 1, 'Test Student9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`uid`,`eventName`,`createdOn`),
  ADD KEY `eventName` (`eventName`);

--
-- Indexes for table `eventcategory`
--
ALTER TABLE `eventcategory`
  ADD PRIMARY KEY (`eventType`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventTime`,`locationName`),
  ADD KEY `universityName` (`universityName`),
  ADD KEY `category` (`category`),
  ADD KEY `eventIndex` (`eventName`) USING BTREE;

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`latitude`,`longitude`),
  ADD UNIQUE KEY `locationName` (`locationName`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`uid`,`eventName`),
  ADD KEY `eventName` (`eventName`);

--
-- Indexes for table `rsomembers`
--
ALTER TABLE `rsomembers`
  ADD PRIMARY KEY (`rsoName`,`universityName`,`uid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `universityName` (`universityName`);

--
-- Indexes for table `rsos`
--
ALTER TABLE `rsos`
  ADD PRIMARY KEY (`rsoName`,`universityName`),
  ADD KEY `uid` (`uid`),
  ADD KEY `universityName` (`universityName`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`universityName`),
  ADD UNIQUE KEY `locationName` (`locationName`),
  ADD UNIQUE KEY `domain` (`domain`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `universityName` (`universityName`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`eventName`) REFERENCES `events` (`eventName`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`universityName`) REFERENCES `universities` (`universityName`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`category`) REFERENCES `eventcategory` (`eventType`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`eventName`) REFERENCES `events` (`eventName`);

--
-- Constraints for table `rsomembers`
--
ALTER TABLE `rsomembers`
  ADD CONSTRAINT `rsomembers_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `rsomembers_ibfk_2` FOREIGN KEY (`universityName`) REFERENCES `universities` (`universityName`),
  ADD CONSTRAINT `rsomembers_ibfk_3` FOREIGN KEY (`rsoName`) REFERENCES `rsos` (`rsoName`);

--
-- Constraints for table `rsos`
--
ALTER TABLE `rsos`
  ADD CONSTRAINT `rsos_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `rsos_ibfk_2` FOREIGN KEY (`universityName`) REFERENCES `universities` (`universityName`);

--
-- Constraints for table `universities`
--
ALTER TABLE `universities`
  ADD CONSTRAINT `universities_ibfk_1` FOREIGN KEY (`locationName`) REFERENCES `locations` (`locationName`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`universityName`) REFERENCES `universities` (`universityName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
