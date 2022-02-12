-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2022 at 05:19 PM
-- Server version: 10.5.11-MariaDB-log
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ustadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(60) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Murodjon', 'delux8333@gmail.com', 'nexia999');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `app_date` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `passport` varchar(100) NOT NULL,
  `dev_type` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `gender`, `birthday`, `app_date`, `address`, `phone`, `passport`, `dev_type`, `password`) VALUES
(5, 'dsaf', 'esefsd', 'erkak', '3541-05-04', '2341-04-23', 'dsfsdfsd', '324', '2345', 'qwedfg', 'qwdfgh'),
(6, 'Suyunbek', 'Saydazimov', 'erkak', '2018-02-13', '2022-01-27', 'Buloqboshi', '123456', '555', 'frontend', '123'),
(8, 'Humoyin', 'Nazarov', 'erkak', '2008-02-15', '2022-01-15', 'Buloqboshi', '9981234567', 'AA123456', 'Frontend & Backend', 'asd123'),
(12, 'dsaf', 'esefsd', 'erkak', '3541-05-04', '2341-04-23', 'dsfsdfsd', '324', '23452345', 'qwedfg', 'qwdfgh'),
(13, 'Suyunbek', 'Saydazimov', 'erkak', '2018-02-13', '2022-01-27', 'Buloqboshi', '123456', '5552345', 'frontend', '123'),
(14, 'Humoyin', 'Nazarov', 'erkak', '2008-02-15', '2022-01-15', 'Buloqboshi', '9981234567', 'AA1234562345', 'Frontend & Backend', 'asd123'),
(15, 'dsaf', 'esefsd', 'erkak', '3541-05-04', '2341-04-23', 'dsfsdfsd', '324', '2345324', 'qwedfg', 'qwdfgh'),
(16, 'Suyunbek', 'Saydazimov', 'erkak', '2018-02-13', '2022-01-27', 'Buloqboshi', '123456', '555324', 'frontend', '123'),
(17, 'Humoyin', 'Nazarov', 'erkak', '2008-02-15', '2022-01-15', 'Buloqboshi', '9981234567', 'AA123456324', 'Frontend & Backend', 'asd123'),
(18, 'dsaf', 'esefsd', 'erkak', '3541-05-04', '2341-04-23', 'dsfsdfsd', '324', '23452345324', 'qwedfg', 'qwdfgh'),
(19, 'Suyunbek', 'Saydazimov', 'erkak', '2018-02-13', '2022-01-27', 'Buloqboshi', '123456', '5552345324', 'frontend', '123'),
(20, 'Humoyin', 'Nazarov', 'erkak', '2008-02-15', '2022-01-15', 'Buloqboshi', '9981234567', 'AA1234562345324', 'Frontend & Backend', 'asd123');

-- --------------------------------------------------------

--
-- Table structure for table `ustalar`
--

CREATE TABLE `ustalar` (
  `us_id` int(11) NOT NULL,
  `us_name` varchar(60) NOT NULL,
  `us_email` varchar(60) NOT NULL,
  `us_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ustalar`
--

INSERT INTO `ustalar` (`us_id`, `us_name`, `us_email`, `us_pass`) VALUES
(26, 'qwe', 'q@gmail.com', '123'),
(29, 'Mahliyo', 'mahliyo@gmail.com', '12345'),
(30, 'Nurmuhamad', 'nurmuhammad@gmail.com', 'nurmuhammad123'),
(31, 'suyunbek', 'uzcoin@gmail.com', 'uzcoin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passport` (`passport`);

--
-- Indexes for table `ustalar`
--
ALTER TABLE `ustalar`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ustalar`
--
ALTER TABLE `ustalar`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
