-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 09:02 AM
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
-- Database: `lost`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `ID` int(255) NOT NULL,
  `entity` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `imagename` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `time` varchar(600) NOT NULL,
  `companydetails` varchar(600) NOT NULL,
  `status` text NOT NULL,
  `advertentity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `userID` int(255) NOT NULL,
  `ID` int(255) NOT NULL,
  `body` varchar(1200) NOT NULL,
  `title` varchar(500) NOT NULL,
  `entity` varchar(500) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `comentID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`userID`, `ID`, `body`, `title`, `entity`, `comment`, `comentID`) VALUES
(0, 3, '', 'ZAMBIAN', 'STATE', 'try', 43),
(0, 3, '', 'ZAMBIAN', 'STATE', 'this looks about correct', 44),
(0, 3, '', 'ZAMBIAN', 'STATE', 'Can we get a translated one in nyanja?', 45),
(0, 5, '', 'Beautiful melodies', 'Buchi', 'hello buchi', 46),
(0, 7, '', 't', 'justinkktyet', 'hi', 47),
(0, 7, '', 't', 'justinkktyet', 'please call me at 15hours', 48),
(0, 13, '', 'clothes', 'variable', 'hello world', 49),
(0, 20, '', 'NRC', 'jeremiah Phiri', 'call me', 50),
(0, 22, '', 'Electronic item', 'limbani', 'i know the owner 097732345', 51);

-- --------------------------------------------------------

--
-- Table structure for table `contributeadmin`
--

CREATE TABLE `contributeadmin` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Bio` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `privilege` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contributeadmin`
--

INSERT INTO `contributeadmin` (`ID`, `username`, `email`, `phoneNumber`, `address`, `imagename`, `pass`, `Bio`, `time`, `privilege`) VALUES
(1, 'jeremiah phiri', 'jeremiahphiri8@gmail.com', '0976448420', 'lusaka', '15178303_1881940628703368_1611715203461260930_n.jpg', '10101', '																						', NULL, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `generalitems`
--

CREATE TABLE `generalitems` (
  `ID` int(233) NOT NULL,
  `category` varchar(200) NOT NULL,
  `entity` varchar(90) NOT NULL,
  `feature` varchar(200) NOT NULL,
  `body` varchar(8000) NOT NULL,
  `itemtype` varchar(255) DEFAULT NULL,
  `album` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `audio` int(255) NOT NULL,
  `comment` int(100) NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `claims` varchar(25) NOT NULL,
  `claimer` varchar(255) NOT NULL,
  `claimercontacts` varchar(255) NOT NULL,
  `collected` int(4) NOT NULL,
  `giver` varchar(250) NOT NULL,
  `givercontacts` varchar(255) NOT NULL,
  `itemlocation` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalitems`
--

INSERT INTO `generalitems` (`ID`, `category`, `entity`, `feature`, `body`, `itemtype`, `album`, `image`, `year`, `audio`, `comment`, `uploader`, `claims`, `claimer`, `claimercontacts`, `collected`, `giver`, `givercontacts`, `itemlocation`) VALUES
(20, 'aproved', 'jeremiah Phiri', '  kawaza chief\r\n', 'mandevu', 'NRC', 'locker', 'myNRC.JPG', '323379/10/1', 0, 0, '1', '', '', '', 1, 'jeremiah', '0976448420', ''),
(21, 'aproved', 'unknown', '  yellow dove\r\n chaina clinic', 'lusaka', 'unclaimedBody', '', 'IMG-20181102-WA0007.jpg', '', 0, 0, '1', '', '', '', 1, 'jeremiah', '0976448420', ''),
(22, 'aproved', 'limbani', '  white phone, broken screen , sim slot lost', 'chaisa', 'Electronic item', 'Airtel', 'defaultlyricimage.jpg', '121234', 0, 0, '1', '', '', '', 0, '', '', ''),
(23, 'aproved', 'limbani', '  white phone, broken screen , sim slot lost', 'chaisa', 'Electronic item', 'Airtel', 'defaultlyricimage.jpg', '121234', 0, 0, '1', '', '', '', 0, '', '', ''),
(24, 'aproved', 'sinkala', '  PHONE LIK', 'CUZ', 'Electronic item', 'SAMSUNG', 'Capture.JPG', '2345567', 0, 0, '1', 'yes', 'HENRY', '9874654536', 1, 'jeremiah', '0976448420', ''),
(25, 'aproved', 'saira', '  disk kolor if u know u are', 'lusaka bauleni', 'Assorted Items', '23466', 'DSC_1551.jpg', '0976448425000', 0, 0, '1', '', '', '', 0, '', '', 'MANDA-HILL POLICE');

-- --------------------------------------------------------

--
-- Table structure for table `mainadmin`
--

CREATE TABLE `mainadmin` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `Bio` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `privilege` varchar(255) NOT NULL,
  `location` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainadmin`
--

INSERT INTO `mainadmin` (`ID`, `username`, `email`, `phoneNumber`, `address`, `imagename`, `Bio`, `time`, `privilege`, `location`) VALUES
(1, 'jeremiah', NULL, '0976448420', '', '', NULL, NULL, '101012', 'MANDAHILL LUSAKA'),
(2, 'Blessmore', 'b@gmail.com', '0976448420', 'lusaka', 'DSC_1554.jpg', 'probaser', '', '121212', 'KABWATA POLICE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `Bio` varchar(255) DEFAULT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comentID`);

--
-- Indexes for table `contributeadmin`
--
ALTER TABLE `contributeadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `generalitems`
--
ALTER TABLE `generalitems`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mainadmin`
--
ALTER TABLE `mainadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `contributeadmin`
--
ALTER TABLE `contributeadmin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `generalitems`
--
ALTER TABLE `generalitems`
  MODIFY `ID` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `mainadmin`
--
ALTER TABLE `mainadmin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
