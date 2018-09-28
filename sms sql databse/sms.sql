-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 07:02 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
-- Table structure for table `number_link`
--

CREATE TABLE `number_link` (
  `offer_id` int(100) UNSIGNED NOT NULL,
  `phone` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `short_link` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `number_link`
--

INSERT INTO `number_link` (`offer_id`, `phone`, `link`, `short_link`, `message`, `status`) VALUES
(66, '4455663344', 'https://www.google.com/', 'http://[::1]/project/home/sms/66', 'please click this link.http://[::1]/project/home/sms/66', 1),
(72, '9616003385', 'http://[::1]/project/index.php/welcome', 'http://[::1]/project/home/sms/72', 'your link is http://[::1]/project/home/sms/72 . Please click above link.', 1),
(82, '3355884411', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/82', 'please click this link http://[::1]/project/home/sms/82 to get to the orignal url.', 0),
(84, '4465879632', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/84', 'please click this link http://[::1]/project/home/sms/84 to get to the orignal url.', 0),
(85, '7896541236', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/85', 'please click this link http://[::1]/project/home/sms/85 to get to the orignal url.', 0),
(86, '3355884411', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/86', 'please click this link http://[::1]/project/home/sms/86 to get to the orignal url.', 0),
(87, '7788994465', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/87', 'please click this link http://[::1]/project/home/sms/87 to get to the orignal url.', 0),
(88, '4465879632', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/88', 'please click this link http://[::1]/project/home/sms/88 to get to the orignal url.', 0),
(89, '7896541236', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/89', 'please click this link http://[::1]/project/home/sms/89 to get to the orignal url.', 0),
(91, '7788994465', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/91', 'please click this link http://[::1]/project/home/sms/91 to get to the orignal url.', 0),
(92, '4465879632', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/92', 'please click this link http://[::1]/project/home/sms/92 to get to the orignal url.', 0),
(93, '7896541236', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/93', 'please click this link http://[::1]/project/home/sms/93 to get to the orignal url.', 0),
(94, '3355884411', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/94', 'please click this link http://[::1]/project/home/sms/94 to get to the orignal url.', 0),
(95, '7788994465', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/95', 'please click this link http://[::1]/project/home/sms/95 to get to the orignal url.', 0),
(96, '4465879632', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/96', 'please click this link http://[::1]/project/home/sms/96 to get to the orignal url.', 0),
(97, '7896541236', 'https://www.formget.com/php-rest-api/', 'http://[::1]/project/home/sms/97', 'please click this link http://[::1]/project/home/sms/97 to get to the orignal url.', 0),
(106, '9889050601', 'https://code.tutsplus.com/tutorials/working-with-restful-services-in-codeigniter--net-8814', 'http://[::1]/project/home/sms/106', 'please, click this link http://[::1]/project/home/sms/106', 1),
(107, '8784452110', 'https://code.tutsplus.com/tutorials/working-with-restful-services-in-codeigniter--net-8814', 'http://[::1]/project/home/sms/107', 'please, click this link http://[::1]/project/home/sms/107', 0),
(108, '8700988904', 'https://www.w3schools.com/python/python_lists.asp', 'http://localhost/project/home/sms/108', 'please cick this link http://localhost/project/home/sms/108 ', 1),
(109, '4455667788', 'https://www.w3schools.com/python/python_lists.asp', 'http://localhost/project/home/sms/109', 'please cick this link http://localhost/project/home/sms/109 ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `number_link`
--
ALTER TABLE `number_link`
  ADD PRIMARY KEY (`offer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `number_link`
--
ALTER TABLE `number_link`
  MODIFY `offer_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
