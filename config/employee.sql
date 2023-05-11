-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 09:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EMPLOYEE_ID` varchar(16) NOT NULL DEFAULT replace(convert(uuid() using utf8mb4),'-',''),
  `EMPLOYEE_TYPE` varchar(32) NOT NULL,
  `FIRST_NAME` varchar(64) NOT NULL,
  `LAST_NAME` varchar(64) NOT NULL,
  `CONTACT_NUMBER` varchar(16) NOT NULL,
  `EMAIL_ADDRESS` varchar(64) NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `EMPLOYMENT_DATE` date NOT NULL,
  `ADDRESS` varchar(128) NOT NULL,
  `PROVINCE` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EMPLOYEE_ID`, `EMPLOYEE_TYPE`, `FIRST_NAME`, `LAST_NAME`, `CONTACT_NUMBER`, `EMAIL_ADDRESS`, `BIRTHDAY`, `EMPLOYMENT_DATE`, `ADDRESS`, `PROVINCE`) VALUES
('809fb903efc311ed', 'Admin', 'ROMEO JR', 'BARDILLON', '09760657071', 'romsky.bardillon@gmail.com', '2001-07-30', '2019-10-30', 'SANTA ROSA ', 'LAGUNA'),
('a03371d6efc311ed', 'Salesman', 'JOHN KENNETH', 'VALLEJO', '09123456789', 'jk@gmail.com', '2001-09-20', '2021-12-31', 'SANTA ROSA', 'LAGUNA'),
('ac0dc4f1efca11ed', 'Intern', 'JUSTEIN KHRYSS', 'GARCIA', '09324324432', 'jgarcia@gmail.com', '1998-10-31', '2010-12-31', 'SANTA ROSA ', 'LAGUNA'),
('b3436202efc311ed', 'Installer', 'PAOLO', 'EVASCO', '09324324432', 'paolo@gmail.com', '2001-11-20', '2021-10-29', 'SANTA ROSA ', 'LAGUNA'),
('c9b41bb7efc311ed', 'Intern', 'JOSE', 'SEVILLA', '09123456789', 'jose@gmail.com', '2002-07-30', '2021-12-31', 'SANTA ROSA ', 'LAGUNA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USER_ID` varchar(16) NOT NULL DEFAULT replace(convert(uuid() using utf8mb4),'-',''),
  `FIRST_NAME` varchar(64) NOT NULL,
  `LAST_NAME` varchar(64) NOT NULL,
  `USERNAME` varchar(16) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  `ROLE` int(16) NOT NULL,
  `LOGIN_ATTEMPTS` int(16) NOT NULL,
  `IS_LOCKED` int(16) NOT NULL,
  `LAST_LOGIN` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `PASSWORD`, `ROLE`, `LOGIN_ATTEMPTS`, `IS_LOCKED`, `LAST_LOGIN`) VALUES
('58727a89cdf911ed', 'JOHN', 'DOE', 'owner', '$2y$10$NNjsc/qfqw0VhWXnVXwI4e7epUme3YfQlyWpaXcMdpHqjRvp721ze', 1, 0, 0, '2023-05-11 08:07:39'),
('d29462f6ed4411ed', 'JOSE', 'SEVILLA', 'adminjsevilla', '$2y$10$yweFv.DMgePVyI2ts/DMSeroqarwAOEs/oXEVgzBrG91TIYdlaTNO', 2, 0, 0, '2023-05-08 10:06:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
