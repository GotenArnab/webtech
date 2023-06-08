-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 11:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Age` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `MobileNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Email`, `Age`, `Gender`, `MobileNo`) VALUES
('Anik', 'anik@gmail.com', '23', 'Male', '01830233695'),
('Akash', 'aka23@gmail.com', '20', 'Male', '01715972683'),
('Ridwan', 'rd12@gmail.com', '19', 'Male', '01670726253');

-- --------------------------------------------------------

--
-- Table structure for table `stuff_member`
--

CREATE TABLE `stuff_member` (
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Age` varchar(3) NOT NULL,
  `DateofBirth` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `MobileNo` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuff_member`
--

INSERT INTO `stuff_member` (`FirstName`, `LastName`, `Email`, `Password`, `Age`, `DateofBirth`, `Gender`, `MobileNo`) VALUES
('Salman', 'Habib', 'salman@gmail.com', '12345678', '22', '2021-10-14', 'Male', '01830233695'),
('Anik', 'Rahman', 'anik@gmail.com', 'anik12345678', '25', '2021-10-01', 'Male', '01712819765'),
('Sakib', 'Hasan', 'sakib75@gmail.com', 'sakib75@!', '30', '1990-10-13', 'Male', '01830233660'),
('Ellyse ', 'Perry', 'perry@gmail.com', 'perryperry', '28', '2009-06-25', 'Female', '01830233123'),
('Tamim', 'Khan', 'tamim@gmail.com', '12345678', '33', '2021-10-12', 'Male', '01715972560'),
('Tauhid', 'Ahmed', 'tauhid@yahoo.com', 'tauhid123', '22', '1998-10-06', 'Male', '01830233456'),
('Virat', 'Kohli', 'virat@gmail.com', 'virat18!@', '33', '2021-10-19', 'Male', '01937655435'),
('Glenn', 'Maxwell', 'maxwell@yahoo.com', 'max12345678', '27', '2021-10-11', 'Male', '01830233128'),
('Brad', 'Haddin', 'haddin@outlook.com', 'haddin1971', '61', '2021-10-20', 'Male', '01830233690'),
('Rohit', 'Sharma', 'sharma45@gmail.com', 'sharma666666', '35', '2021-10-06', 'Male', '01830233555'),
('Salman', 'Habib', 'tamim@gmail.com', '123456789000', '22', '2021-10-19', 'Male', '01830233695');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobileno` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`username`, `password`, `fname`, `email`, `gender`, `mobileno`, `dob`, `address`) VALUES
('tamim29', '12345', 'Tamim Iqbal', 'tamim@gmail.com', 'Male', '01830233123', '01-10-1990', 'Dhaka'),
('sakib75', 'sakib75hasan', 'Sakib Hasan', 'sakib@gmail.com', 'Male', '01712819767', '08-08-2000', 'USA'),
('taskin74', '747474', 'Taskin Ahmed', 'taskin@yahoo.com', 'Male', '01715972811', '01-03-1996', 'Mirpur'),
('mushfiqur', 'mushi34', 'Mushfiqur Rahim', 'rahim@gmail.com', 'Male', '01715678754', '01-09-1980', 'Mirpur');
COMMIT;



CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
