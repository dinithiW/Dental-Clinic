-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 01:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `patient_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `appt_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `first_name`, `last_name`, `email`, `address`, `contact_no`, `age`) VALUES
(3, 'vishmnthi', 'fernando', 'fernandovishmanthi@yahoo.com', 'Seeduwa', '0771555180', 23),
(4, 'vishmnthi', 'fernando', 'fernandovishmanthi@yahoo.com', 'Seeduwa', '0771555180', 23),
(5, 'vishmnthi', 'fernando', 'fernandovishmanthi@yahoo.com', 'Seeduwa', '0771555180', 23),
(6, 'sara', 'fernando', 'fernandovishmanthi@yahoo.com', 'Seeduwa', '0771555180', 23),
(7, 'Dinithi', 'Wickramaratne', 'dinithi@gmail.com', '23/4,Rev.S.Mahinda Mawatha,Ratmalana', '0712345678', 22),
(8, 'Dinithi', 'Wickramaratne', 'dinithi@gmail.com', '23/4,Rev.S.Mahinda Mawatha,Ratmalana', '0712345678', 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `type`) VALUES
(4, 'vish', '$2y$10$k/sDNOscrQAS/.zGiNOjU.A8.n1U.dmWpH/CZ2bwMKzjkj3x4.MoK', 'Patient'),
(5, 'vish', '$2y$10$s.kamk7p4UM6SqZnF0tYP.iocx3m/ZKRC3g/KijK.qBJ/AIZaR0JO', 'Patient'),
(6, 'sara', '$2y$10$vgtKxL7YiQBfupsN0u6hp.wxw7DRYBg7RdYS90FVPdmnK4UV6EFI2', 'Patient'),
(8, 'din', '$2y$10$8o0wkGH/KcD7fgLfNYv4I.Dbdg6tEPsn/C6lw/Mlz7uZAP5xo9gJW', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
