-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 01:22 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `institution_department`
--

CREATE TABLE `institution_department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `institution_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution_department`
--

INSERT INTO `institution_department` (`department_id`, `department_name`, `faculty_id`, `institution_id`) VALUES
(1, 'Department Of Sociology', 1, 2),
(2, 'Department Of Philosophy', 1, 2),
(3, 'Department Of Business Adminstration', 1, 2),
(4, 'Mathematics/computer Science/stat/informatics', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `institution_faculty`
--

CREATE TABLE `institution_faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(200) NOT NULL,
  `institution_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution_faculty`
--

INSERT INTO `institution_faculty` (`faculty_id`, `faculty_name`, `institution_id`) VALUES
(1, 'Faculty Of Management And Social Science', 2),
(2, 'Faculty Of Humanities', 2),
(3, 'Faculty Of Science', 1);

-- --------------------------------------------------------

--
-- Table structure for table `institution_verification_method`
--

CREATE TABLE `institution_verification_method` (
  `id` int(11) NOT NULL,
  `verification_method` varchar(40) NOT NULL,
  `institution_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nuc_admin`
--

CREATE TABLE `nuc_admin` (
  `nuc_admin_id` int(11) NOT NULL,
  `nuc_admin_fname` char(100) NOT NULL,
  `nuc_admin_email` varchar(200) NOT NULL,
  `nuc_admin_pass` varchar(350) NOT NULL,
  `nuc_admin_phone` varchar(20) NOT NULL,
  `nuc_admin_status` varchar(12) NOT NULL,
  `date_of_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nuc_admin`
--

INSERT INTO `nuc_admin` (`nuc_admin_id`, `nuc_admin_fname`, `nuc_admin_email`, `nuc_admin_pass`, `nuc_admin_phone`, `nuc_admin_status`, `date_of_reg`) VALUES
(1, 'chukwu chukwuemeka Anthony.', 'chukwuanthony544@yahoo.com', '$2y$10$L9HVv2tdluBhPr/5SeUBKujyHVkGxFULwVB8ls.9X4aL82FZ94QgW', '0909087645', 'main', '2019-05-26 19:56:56'),
(2, 'chukwu chukwuemeka Anthony.', 'myfoodiehome274@gmail.com', '$2y$10$MBBYhgyRx6hXB1bDBo24QONTrcj1M5FPPbezYF0yoMrD453ywGXFS', '0909087645', 'main', '2019-05-26 19:57:56'),
(3, 'chukwu chukwuemeka Anthony.', 'chukwuanthony544@gmail.com', '$2y$10$A5QsoIxbHHovQmVBjC5nAOKa2qhNQDqSBrbEdh/HP.cfBZ43LZgs2', '0909087645', 'main', '2019-05-26 19:59:34'),
(4, 'chukwu chukwuemeka Anthony.', 'chukwuanthony5774@gmail.com', '$2y$10$aX03Vbrfgm.ewPYVbLbnVu4ZMatz95N9HQtI5s8HIA5f93pnPyDz.', '0909087645', 'main', '2019-05-26 20:08:44'),
(5, 'chukwu chukwuemeka Anthony.', 'chukwuanthony543@yahoo.com', '$2y$10$5Rf89vM4qyUnt1xDvw5fwe4UVhIMw4zMqwqagVBf1Vx41wqDDdVU.', '0909087645', 'main', '2019-05-26 20:10:39'),
(6, 'chukwu chukwuemeka Anthony.', 'santos@gmail.com', '$2y$10$730mkMpwdMBa30WNU9lNq.0jOUmC6gz2ovQ.hDYjXbeUbU2Zmdojq', '0909087645', 'main', '2019-05-26 20:11:35'),
(7, 'chukwu chukwuemeka Anthony.', 'chukwuanthony594@gmail.com', '$2y$10$4ZKNTG6IuGw.toygBqKta.y4adNs.LQZKhF341hZf44UMALuC7M8O', '0909087645', 'main', '2019-05-26 20:13:06'),
(8, 'chukwu chukwuemeka Anthony.', 'chukwuanthony5654@gmail.com', '$2y$10$L8vYtMTqHXkEFUkXR/C1B.BkVwvy2QaUcA5bqVNe9y8K7SVx0zvYO', '0909087645', 'main', '2019-05-26 20:14:00'),
(9, 'chukwu chukwuemeka Anthony.', 'myfoodiehome246@gmail.com', '$2y$10$Sgh6K7.k2Elo3oyUDrU8OOJwdNncMIFaX3VLUlAvQYWqsDrmtNyUO', '0909087645', 'main', '2019-05-26 20:15:18'),
(10, 'chukwu chukwuemeka Anthony.', 'chukwuanthony644@gmail.com', '$2y$10$RN7B9wA2.SKV.K12KDiZqeDRb.5NqoqS4Ne0lkNqUSAf.fojn2aSq', '0909087645', 'main', '2019-05-26 20:17:21'),
(11, 'chukwu chukwuemeka Anthony.', 'chukwuanthony5454@yahoo.com', '$2y$10$ZfuHVaxf.nAqgQGLP4UO9OTzqBGsTyXh0GH6yBDU/tES0rjYj9292', '0909087645', 'main admin', '2019-05-26 19:25:32'),
(12, 'chukwu chukwuemeka Anthony.', 'chukwuanthony54344@gmail.com', '$2y$10$8MYx5Hns8AanLcF3pL.I2eRNWDQYLsCRKw0jHQVhPgj/8pARNv96a', '0909087645', 'main admin', '2019-05-26 19:47:42'),
(13, 'chukwu chukwuemeka Anthony.', 'chukwuanthony52244@gmail.com', '$2y$10$oOSVtHEpE/wlJ8qJjqXBEuyqWgB96IGiiOM7gwgBVp5ediEkrR.hK', '0909087645', 'main admin', '2019-05-26 19:50:16'),
(14, 'chukwu chukwuemeka Anthony.', 'santosff@gmail.com', '$2y$10$oAIe8LGdqFcdsqxIW8wak.PDwvOGYxGb3AXXXLKmPrGe3whN1o8Cu', '0909087645', 'main admin', '2019-05-26 19:51:09'),
(15, 'chukwu chukwuemeka Anthony.', 'santos89@gmail.com', '$2y$10$DaAM6V8mhrp0C0s.2d4sI.dbVySyDLlBrvzNfx.lWaap05aqCqH4G', '0909087645', 'main admin', '2019-05-26 19:36:42'),
(16, '', '', '$2y$10$ZMN/H.KvVqB8bn5WJhn7tu.kRZ7fVdR2pGB09r8/i1RI51ljU85pi', '', 'main admin', '2019-05-26 20:10:35'),
(17, 'chukwu chukwuemeka Anthony.', 'chukwuanthony54774@gmail.com', '$2y$10$njwI/08GXLByvI7.XHoBD.UmEkNJgh0EywXPBN0WIudNvmUWsRks.', '0909087645', 'main admin', '2019-05-26 20:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `reg_institutions`
--

CREATE TABLE `reg_institutions` (
  `institution_id` int(11) NOT NULL,
  `institution_name` varchar(100) NOT NULL,
  `institution_address` text NOT NULL,
  `institution_city` char(20) NOT NULL,
  `institution_country` char(9) NOT NULL,
  `institution_state` varchar(20) NOT NULL,
  `institution_zip_code` int(20) NOT NULL,
  `institution_phone` varchar(13) NOT NULL,
  `institution_email` varchar(100) NOT NULL,
  `institution_password` varchar(350) NOT NULL,
  `institution_logo` varchar(300) NOT NULL,
  `institution_verify_method` varchar(40) NOT NULL,
  `institution_reg_status` char(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_institutions`
--

INSERT INTO `reg_institutions` (`institution_id`, `institution_name`, `institution_address`, `institution_city`, `institution_country`, `institution_state`, `institution_zip_code`, `institution_phone`, `institution_email`, `institution_password`, `institution_logo`, `institution_verify_method`, `institution_reg_status`, `reg_date`) VALUES
(1, 'micheal okpara university of agriculture ', 'oboro', 'unuahia', 'nigeria', 'Abia', 440221, '09054599180', 'moau@gmail.com', '$2y$10$0.U6Sn7dRIy3AZtQr6ljg.TtfQ8qQd1xg1DsuJdGkIu6L6qZEhPG6', 'img-01.png', 'Reference Number', 'Fully Registered', '2019-06-28 23:33:18'),
(2, 'university of ibadan', 'oboro', 'unuahia', 'nigeria', 'Abia', 440221, '09054599180', 'uniibadan@gmail.com', '$2y$10$oqTG57HIEv60rdaPQAshw.fNsE/FNaAMH6ZE4dG3yogQbm6yqVT6e', 'lion-safari-afika-landscape-40756 (1).jpeg', 'Registeration Number', 'Fully Registered', '2019-06-28 23:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `student_certificate_info`
--

CREATE TABLE `student_certificate_info` (
  `id` int(11) NOT NULL,
  `student_fname` varchar(300) NOT NULL,
  `student_faculty_id` int(11) NOT NULL,
  `student_department_id` int(11) NOT NULL,
  `student_program` varchar(50) NOT NULL,
  `student_grade` varchar(20) NOT NULL,
  `student_degree` varchar(20) NOT NULL,
  `student_dof_admission` varchar(20) NOT NULL,
  `student_dof_graduation` varchar(20) NOT NULL,
  `verification_pin` varchar(50) NOT NULL,
  `student_passport` text NOT NULL,
  `date_of_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `institution_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_certificate_info`
--

INSERT INTO `student_certificate_info` (`id`, `student_fname`, `student_faculty_id`, `student_department_id`, `student_program`, `student_grade`, `student_degree`, `student_dof_admission`, `student_dof_graduation`, `verification_pin`, `student_passport`, `date_of_reg`, `institution_id`) VALUES
(1, 'chukwu emeka chisom', 1, 1, 'bussiness adminstration', 'first class', 'Bachelor Of Science', '2019-06-03', '2019-06-10', 'funai/bsc/15/1423', 'C:\\xampp\\tmp\\phpDF8C.tmp', '2019-06-26 12:55:49', 2),
(2, 'chukwu emeka  chisom', 1, 1, 'bussiness adminstration', 'first class', 'Bachelor Of Arts', '2019-06-20', '2019-06-10', 'funai/bsc/15/1424', 'img-04.jpg', '2019-06-26 13:01:15', 2),
(3, 'chukwu emeka chisom', 1, 1, 'bussiness adminstration', 'first class', 'Bachelor Of Arts', '2019-06-18', '2019-06-24', 'funai/bsc/15/1427', 'img-03.png', '2019-06-26 13:00:27', 2),
(4, 'chukwu emeka chisom', 1, 1, 'bussiness adminstration', 'first class', 'Bachelor Of Arts', '2019-06-10', '2019-06-10', 'funai/bsc/15/1422', 'img-02.png', '2019-06-26 13:06:51', 2),
(5, 'chukwu emeka chisom', 1, 1, 'bussiness adminstration', 'first class', 'Bachelor Of Arts', '2019-06-20', '2019-06-17', 'funai/bsc/15/1429', 'iv.jpg', '2019-06-26 13:23:03', 2),
(6, 'chukwu emake ', 3, 4, 'mathematics', 'second class', 'Bachelor Of Arts', '2019-06-04', '2019-06-21', 'funai/bsc/1445', '', '2019-06-28 22:53:39', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institution_department`
--
ALTER TABLE `institution_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `institution_faculty`
--
ALTER TABLE `institution_faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `institution_verification_method`
--
ALTER TABLE `institution_verification_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nuc_admin`
--
ALTER TABLE `nuc_admin`
  ADD PRIMARY KEY (`nuc_admin_id`);

--
-- Indexes for table `reg_institutions`
--
ALTER TABLE `reg_institutions`
  ADD PRIMARY KEY (`institution_id`);

--
-- Indexes for table `student_certificate_info`
--
ALTER TABLE `student_certificate_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `institution_department`
--
ALTER TABLE `institution_department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `institution_faculty`
--
ALTER TABLE `institution_faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `institution_verification_method`
--
ALTER TABLE `institution_verification_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nuc_admin`
--
ALTER TABLE `nuc_admin`
  MODIFY `nuc_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reg_institutions`
--
ALTER TABLE `reg_institutions`
  MODIFY `institution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_certificate_info`
--
ALTER TABLE `student_certificate_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
