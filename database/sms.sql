-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 08:32 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdata`
--

CREATE TABLE `contactdata` (
  `id` int(250) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `pnum` varchar(255) NOT NULL,
  `userid` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactdata`
--

INSERT INTO `contactdata` (`id`, `fname`, `lname`, `gender`, `pnum`, `userid`) VALUES
(1, 'timonology', 'kennedy', 'Male', '07030657607', 26),
(2, 'ibe', 'ademuyiwa', 'Female', '07030657607', 26),
(3, 'John', 'Do', 'Male', '08122232323', 29),
(4, 'ibe', 'kennedy', 'Male', '060949494949', 29),
(5, 'WISDOM', 'KENNY', 'Male', '070955889599', 29),
(6, 'SAMUEL', 'uzoma', 'Male', '06085858858', 29),
(7, 'abayo', 'yomi', 'Male', '050949499838', 29),
(15, 'timonology', 'kenny', 'Male', '04098478387', 5),
(16, 'timi', 'kennedy', 'Male', '0609859954', 5),
(22, 'josh', 'oregbe', 'Male', '07095959844', 30),
(23, 'sam', 'chiga', 'Male', '08170153286', 31),
(24, 'wisdom', 'ola', 'Male', '08076493502', 31);

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pnum` varchar(20) NOT NULL,
  `checkbox` varchar(250) NOT NULL,
  `userid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `fname`, `lname`, `gender`, `pnum`, `checkbox`, `userid`) VALUES
(1, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(2, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(3, 'joam', 'behkam', 'Male', '0609595494', '13', '5'),
(4, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(5, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(6, 'timi', 'kennedy', 'Male', '0609859954', '16', '5'),
(7, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(8, 'joam', 'behkam', 'Male', '0609595494', '13', '5'),
(9, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(10, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(11, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(12, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(13, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(14, 'timi', 'kennedy', 'Male', '0609859954', '16', '5'),
(15, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(16, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(17, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(18, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(19, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(20, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(21, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(22, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(23, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(24, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(25, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(26, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(27, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(28, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(29, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(30, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(31, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(32, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(33, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(34, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(35, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(36, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(37, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(38, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(39, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(40, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(41, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(42, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(43, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(44, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(45, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(46, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(47, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(48, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(49, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(50, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(51, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(52, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(53, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(54, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(55, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(56, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(57, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(58, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(59, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(60, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(61, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(62, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(63, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(64, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(65, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(66, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(67, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(68, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(69, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(70, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(71, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(72, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(73, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(74, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(75, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(76, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(77, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(78, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(79, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(80, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(81, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(82, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(83, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(84, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(85, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(86, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(87, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(88, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(89, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(90, 'timi', 'kennedy', 'Male', '0609859954', '16', '5'),
(91, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(92, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(93, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(94, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(95, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(96, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(97, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(98, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(99, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(100, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(101, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(102, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(103, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(104, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(105, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(106, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(107, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(108, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(109, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(110, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(111, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(112, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(113, 'timi', 'kennedy', 'Male', '0609859954', '16', '5'),
(114, 'joam', 'behkam', 'Male', '0609595494', '12', '5'),
(115, 'timi', 'kennedy', 'Male', '0609859954', '16', '5'),
(116, 'matthew', 'john', 'Male', '07095984883', '11', '5'),
(117, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(118, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(119, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(120, 'joam', 'behkam', 'Male', '0609595494', '14', '5'),
(121, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(122, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(123, 'sam', 'chiga', 'Male', '08170153286', '23', '31'),
(124, 'wisdom', 'ola', 'Male', '08076493502', '24', '31'),
(125, 'sam', 'chiga', 'Male', '08170153286', '23', '31'),
(126, 'sam', 'chiga', 'Male', '08170153286', '23', '31'),
(127, 'wisdom', 'ola', 'Male', '08076493502', '24', '31'),
(128, 'sam', 'chiga', 'Male', '08170153286', '23', '31'),
(129, 'sam', 'chiga', 'Male', '08170153286', '23', '31'),
(130, 'timonology', 'kenny', 'Male', '04098478387', '15', '5'),
(131, 'timonology', 'kenny', 'Male', '04098478387', '15', '5');

-- --------------------------------------------------------

--
-- Table structure for table `msglog`
--

CREATE TABLE `msglog` (
  `id` int(11) NOT NULL,
  `senderid` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `message` varchar(100) NOT NULL,
  `time` date NOT NULL,
  `date` time NOT NULL,
  `userid` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msglog`
--

INSERT INTO `msglog` (`id`, `senderid`, `recipient`, `message`, `time`, `date`, `userid`) VALUES
(1, 'kennedy', '', 'this is to test if this is working perfectly well...    \r\n  ', '2019-09-24', '00:00:00', 0),
(2, 'adejare', '07095997996  ', 'testing two..i believe nothing is stopping you from not working...    \r\n  ', '2019-09-24', '00:00:00', 0),
(3, 'adejare', '  0709659858', 'etsting three ,,,it worked though but we keep testing for future error...    \r\n  ', '2019-09-24', '00:00:00', 28),
(4, 'kenper', '07609699598 ', 'this another form of testing    \r\n  ', '2019-09-24', '00:00:00', 28),
(5, 'kenper', '090786756', '    \r\n  jgvgjjkikhikjkljkikbyhibgiik', '2019-09-24', '00:00:00', 28),
(6, 'kennedy', '07030657607  ', 'this is to check if the time is working,....    \r\n  ', '2019-09-24', '00:00:00', 30),
(7, 'kennedy', '  07030657607', 'we testing the date to see if its working already,,we cant wait...    \r\n  ', '2019-09-24', '00:00:00', 30),
(8, 'kennedy', '  07030657607', 'we testing the date to see if its working already,,we cant wait...    \r\n  ', '2019-09-24', '00:00:00', 30),
(9, 'kennedy', '  07030657607', 'we testing the date to see if its working already,,we cant wait...    \r\n  ', '2019-09-24', '00:00:00', 30),
(10, 'kennedy', '  07030657607', 'we testing the date to see if its working already,,we cant wait...    \r\n  ', '2019-09-24', '00:00:00', 30),
(11, 'kennedy', '  07030657607', 'we testing the date to see if its working already,,we cant wait...    \r\n  ', '2019-09-24', '00:00:00', 30),
(12, 'wisdom', '  07030657607', 'we testing the date to see if its working already,,we cant wait...    \r\n  ', '2019-09-24', '00:00:00', 30),
(13, 'wisdomy', '  07030657607', 'we testing the date to see if its working already,,we cant wait...    \r\n  ', '2019-09-24', '00:00:00', 30),
(25, 'samuel', '0690595985  ', 'this has to work..see ya working    \r\n  ', '0000-00-00', '00:00:00', 30),
(36, 'wisdom', '  08057858847', 'testing day two...lets see what you gat    \r\n  ', '0000-00-00', '00:20:19', 5),
(38, 'samuel', '  00897696995', '    lets give this user something to save at the sms log\r\n  ', '2019-09-26', '09:27:09', 5),
(39, 'kenper', '  090876866668', '    \r\n  lets try this again...', '2019-09-26', '08:17:19', 5),
(40, 'samuel', '  0709589584', '    \r\n  testing number three....', '2019-09-26', '11:20:37', 5),
(41, 'Jboy', '04098478387  ', 'Hitimonology', '2019-09-28', '12:55:29', 5),
(43, 'fgffgf', '0609859954  ', 'HiÂ timi', '2019-09-28', '01:57:33', 5),
(44, 'programmer', '08182888927', 'HiÂ matthew\r\ni love u more than u think', '2019-10-03', '10:28:25', 5),
(45, 'programmerslounge', '08182888927,07030657607', 'HiÂ Programmer\r\nLet take over the world together.', '2019-10-04', '01:08:13', 5);

-- --------------------------------------------------------

--
-- Table structure for table `smsdata`
--

CREATE TABLE `smsdata` (
  `id` int(250) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pnum` varchar(50) NOT NULL,
  `pwd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smsdata`
--

INSERT INTO `smsdata` (`id`, `fname`, `lname`, `email`, `gender`, `pnum`, `pwd`) VALUES
(5, 'adejare', 'ademuyiwa', 'ade@you.me', 'Male', '07030657607', 'loveme'),
(6, 'adejare', 'ademuyiwa', 'ade@you.me', 'Male', '07030657607', '$2y$10$LnXS'),
(25, 'mahama', 'kennedy', 'samue@you.me', 'Male', '393939399393', '123123'),
(26, 'sam', 'chiga', 'samueluzoma07@gmail.com', 'Male', '08170163286', 'sam'),
(27, 'blessing', 'ngozi', 'oluwseunfunmimaryb@gmail.com', 'Female', '08093912131', 'bulksms'),
(28, 'kenny', 'kennyperez', 'okwudiilidavid317@gmail.com', 'Male', '2147483647', '234234'),
(29, 'Timothy', 'Babalola', 'timonology@gmail.com', 'Male', '08176117887', 'timonology'),
(30, 'yomi', 'abayo', 'yomicasual@you.com', 'Male', '06099497473', 'yomicasual'),
(31, 'sam', 'chiga', 'samuelchiga@yahoo.com', 'Male', '08170163286', 'jesus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdata`
--
ALTER TABLE `contactdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msglog`
--
ALTER TABLE `msglog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smsdata`
--
ALTER TABLE `smsdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactdata`
--
ALTER TABLE `contactdata`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `msglog`
--
ALTER TABLE `msglog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `smsdata`
--
ALTER TABLE `smsdata`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
