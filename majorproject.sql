-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 03:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majorproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactuss`
--

CREATE TABLE `contactuss` (
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactuss`
--

INSERT INTO `contactuss` (`name`, `email`, `pnumber`, `feedback`) VALUES
('Dev Oberio', 'dev13@gmail.com', '1234567890', 'This is alpha testing.'),
('Dev Oberio', 'devshrimodi09049@gma', '08104815887', 'testing'),
('Dev Oberio', 'devshrimodi09049@gma', '08104815887', 'testing.'),
('Dev Oberio', 'devshri.co0424@tpoly', '7654390231', 'Testing.'),
('', '', '', ''),
('Divyesh Mistry', 'divyeshrmistry@gmail', '1234567890', 'Testing.'),
('', '', '', ''),
('Dev Oberio', 'devshri.co0424@tpoly', '1234567890', 'Testing.'),
('Devshri Modi', 'devshri.co0424@tpoly', '08104815887', 'Testing.'),
('Divyesh Mistry', 'divyeshrmistry@gmail', '8104815887', 'Testing.'),
('Divyesh Mistry', 'divyeshrmistry@gmail', '1234567890', 'Testing.'),
('Devshri Modi', 'devshrimodi09049@gma', '8104815887', 'Testing.');

-- --------------------------------------------------------

--
-- Table structure for table `seller_registration`
--

CREATE TABLE `seller_registration` (
  `name` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdesc` varchar(500) NOT NULL,
  `insta` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `taxid` varchar(20) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `prdesc` varchar(500) NOT NULL,
  `proimg` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_registration`
--

INSERT INTO `seller_registration` (`name`, `address`, `pnumber`, `email`, `sdesc`, `insta`, `fb`, `taxid`, `logo`, `category`, `prdesc`, `proimg`) VALUES
('Chumbak', 'Chumbak Design Pvt. Ltd., 520, CMH Road, Indiranagar, 1st Stage, Near ICICI Bank, Bangalore - 560038', '1800420120', 'help@chumbak.in', '', 'https://www.instagram.com/chumbak/', 'https://www.facebook.com/Chumbak', '62652326', 'logo.jpg', 'Arts & Decor', 'Our mission is to uplift your everyday with our joyful lifestyle range. Explore our globally inspired & vibrant home décor, fashion & accessories.', '[\"8907605105647_plus7.jpg\",\"8907605100963_plus1.jpg\",\"8907605104442_plus4.jpg\",\"8907605104510_plus5.jpg\",\"8907605105517_top.jpg\",\"8907605105579_top5.jpg\"]'),
('Gorjana', '190 Beach St. Laguna Beach, CA 92651', '9497158166', 'support@gorjana.com', '', 'https://www.instagram.com/gorjana/', 'https://www.facebook.com/gorjanabrand', '84626', 'logo1.jpg', 'Jewelry', 'Looking for gold layering necklaces, engravable gifts, intention bracelets, hoop earrings, coin necklaces, or thin stacking rings?', '[\"gorjana_product_image.jpg\"]'),
('Little Food-Co', 'SY10 8JN Oswestry, United Kingdom', '4416916680', 'littlefoodco@gmail.com', '', 'https://www.instagram.com/littlefooddaily/', 'https://www.facebook.com/little.foodco/', '614615424', 'little_food.png', 'Food', 'EVENT CATERING. The ideal choice if you want a personalized plan that is tailored to your party & event.', '[\"11722061_10155756797860103_6523167784368187216_o.jpg\",\"IMG_2791.png\",\"IMG_2792.png\",\"JP5A9678-Edit.jpg\",\"JP5A9690-Edit.jpg\",\"JP5A9728-Edit.jpg\"]'),
('Royalty', '101/A, Street 21, London', '3409126751', 'royalty56@gmail.com', '', 'royalty', 'royalty', '865959', 'logo.png', 'clothing', 'Clothes that are fashionable, comfortable and up to date for every women. Even free size available.', '[\"c3-.jpg\",\"c4.jpg\",\"c5.jpg\",\"c6-.jpg\",\"c7.jpg\"]'),
('FitForAll', '101/B, Park Street, New York', '1234567890', 'fitforall@gmail.com', '', 'fitforall', 'fitforall', '23498', 'download.png', 'clothing', 'Sports Clothes for all available.', '[\"Hot-Design-High-Waist-Seamless-Girls-Yoga-Set-Fitness-Yoga-Comfortable-Gym-Sports-Clothes.jpg\",\"download (1).jpg\",\"download.jpg\"]'),
('Dev Oberio', '5, Chandratej, Dattapada road, near ram mandir, Borivali(east)', '8104815887', 'royal@gmail.com', '', 'royal', 'royal', '12345', 'bg.jpg', 'clothing', 'All types of clothes available here.', '[\"c6-.jpg\",\"c7.jpg\",\"c8.jpg\",\"c9.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Gender` text NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`FName`, `LName`, `Username`, `Gender`, `Phone`, `Email`, `confirm_password`) VALUES
('', '', '', '', '', '', ''),
('Devshri', 'Modi', 'dev123', 'Female', '8104815887', 'devshri.co0424@gmail.com', 'Dev#1234'),
('', '', '', '', '', '', ''),
('Devshri', 'Modi', 'dev123', 'Female', '9167404044', 'devshri.co0424@gmail.com', 'Dev#1234'),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('Devshri', 'Modi', 'dev123', 'Female', '9167404044', 'devshri.co0424@gmail.com', 'Dev#1234'),
('Devshri', 'Modi', 'dev123', 'Female', '9167404044', 'devshri.co0424@gmail.com', 'Dev#1234'),
('Devshri', 'Modi', 'dev123', 'Female', '9167404044', 'devshri.co0424@gmail.com', 'Dev#1234'),
('Devshri', 'Modi', 'dev123', 'Female', '9167404044', 'devshri.co0424@gmail.com', 'Dev#1234'),
('Devshri', 'Modi', 'dev123', 'Female', '9167404044', 'devshri.co0424@gmail.com', 'Dev#1234'),
('Dev', 'Oberio', 'dev123', 'Male', '1234567890', 'dev123@gmail.com', 'Dev#1234'),
('Dev', 'Oberio', 'dev123', 'Male', '9167404044', 'dev123@gmail.com', 'Dev#1234'),
('Dev', 'Oberio', 'dev123', 'Male', '9167404044', 'dev123@gmail.com', 'Dev#1234'),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
