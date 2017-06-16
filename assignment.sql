-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2017 at 08:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(50) UNSIGNED NOT NULL,
  `stu_sess_id` char(50) NOT NULL,
  `stu_id` int(3) DEFAULT NULL,
  `stu_name` varchar(50) DEFAULT NULL,
  `apply_date` date DEFAULT NULL,
  `apply_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `internship_id` int(50) DEFAULT NULL,
  `emp_id` int(3) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `stu_sess_id`, `stu_id`, `stu_name`, `apply_date`, `apply_time`, `internship_id`, `emp_id`, `emp_name`) VALUES
(1, 'cqjdceuhfc021qnpclt8kgvoe5', 2, 'Jau Hind', NULL, '2017-06-16 04:36:41', 2, NULL, NULL),
(2, 'cqjdceuhfc021qnpclt8kgvoe5', 2, 'Jau Hind', NULL, '2017-06-16 04:37:02', 5, NULL, NULL),
(3, 'cqjdceuhfc021qnpclt8kgvoe5', 1, 'Pancham', NULL, '2017-06-16 04:37:25', 7, NULL, NULL),
(4, 'cqjdceuhfc021qnpclt8kgvoe5', 1, 'Pancham', NULL, '2017-06-16 04:37:30', 5, NULL, NULL),
(5, '5nte2qknmiehl8ajq72a8si884', 2, 'Jau Hind', NULL, '2017-06-16 05:54:41', 7, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(3) UNSIGNED NOT NULL,
  `org_name` varchar(50) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `emp_sess_id` char(50) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `org_name`, `name`, `email`, `password`, `phone`, `emp_sess_id`, `logo`, `created`) VALUES
(1, 'Pancham', 'Pancham', 'talk@gmail.com', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', 2147483647, NULL, NULL, '2017-06-16 04:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(50) UNSIGNED NOT NULL,
  `emp_id` int(3) NOT NULL,
  `org_name` varchar(50) DEFAULT NULL,
  `emp_sess_id` char(50) DEFAULT NULL,
  `title` varchar(140) DEFAULT NULL,
  `description` text,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `emp_id`, `org_name`, `emp_sess_id`, `title`, `description`, `posted`, `start_date`, `end_date`, `logo`) VALUES
(2, 0, 'Microsoft Corp', NULL, 'ASPX DEVELOPER', 'blah blah blah blah', '2017-06-16 02:40:04', '2017-06-16', '2017-06-21', NULL),
(3, 0, 'asdasdasdasd', NULL, 'asdfasdfaf', 'sdfsdfsvsdvwsfwffgv', '2017-06-16 02:46:27', '2017-06-16', '2017-06-22', NULL),
(4, 0, 'Apple Inc.', NULL, 'iOS Developer', 'We want a great iOS developer who can create something awesome!', '2017-06-16 04:05:57', '2017-06-16', '2017-06-22', NULL),
(5, 0, 'Facebook Inc.', NULL, 'Android Developer', 'We want a great Android developer who can create something awesome!', '2017-06-16 04:10:59', '2017-06-16', '2017-06-22', NULL),
(6, 0, 'Uber', NULL, 'Driver', 'We want a great Driver who can create something awesome!', '2017-06-16 04:26:21', '2017-06-16', '2017-06-22', NULL),
(7, 0, 'Microsoft Corp', NULL, '.NET Developer', 'We want a great .NET Developer who can create something awesome!', '2017-06-16 04:34:41', '2017-06-16', '2017-06-22', NULL),
(8, 0, 'Pancham', NULL, 'Web Developer', 'We want a great web developer for our billion dollar company.', '2017-06-16 05:25:52', '2017-06-16', '2017-06-21', NULL),
(9, 1, 'Pancham', NULL, 'Web Developer', 'We want a great web developer for our billion dollar company.', '2017-06-16 05:26:06', '2017-06-16', '2017-06-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `stu_sess_id` char(50) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `phone`, `stu_sess_id`, `photo`, `created`) VALUES
(1, 'Pancham', 'pancham@outlook.com', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', 321654987, NULL, NULL, '2017-06-16 02:44:28'),
(2, 'Jau Hind', 'demo@gmail.com', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', 2147483647, NULL, NULL, '2017-06-16 03:18:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
