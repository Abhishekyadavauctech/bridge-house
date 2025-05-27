-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2025 at 11:44 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u622085619_bridgehouse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_banner`
--

CREATE TABLE `add_banner` (
  `id` int(11) NOT NULL,
  `type` varchar(500) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_banner`
--

INSERT INTO `add_banner` (`id`, `type`, `title`, `details`, `image_path`) VALUES
(16, 'Banner', 'Marketing That Grows Your Business Fast', 'With a robust selection of popular properties on hand, as well as                                   ', 'banner_uploads/banner-1.jpg'),
(17, 'Banner', 'Get More Leads, Close More Deals', 'With a robust selection of popular properties on hand, as well as                                   ', 'banner_uploads/banner-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `register` varchar(255) DEFAULT NULL,
  `suggestion` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL,
  `task_wallet` int(100) DEFAULT 0,
  `game_wallet` int(100) DEFAULT 0,
  `BANK_NAME` varchar(100) NOT NULL,
  `IFSC_CODE` varchar(100) NOT NULL,
  `ACC_HOLDER_NM` varchar(100) NOT NULL,
  `ACC_NUMBERS` int(100) NOT NULL,
  `ACC_TYPE` varchar(100) NOT NULL,
  `LAST_LOGIN` varchar(100) NOT NULL,
  `ACC_STATUS` varchar(100) NOT NULL DEFAULT 'active',
  `TYPE` varchar(50) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`s_no`, `user_id`, `firstname`, `lastname`, `username`, `email`, `register`, `suggestion`, `mobile_no`, `password`, `confirm_password`, `resettoken`, `resettokenexpire`, `task_wallet`, `game_wallet`, `BANK_NAME`, `IFSC_CODE`, `ACC_HOLDER_NM`, `ACC_NUMBERS`, `ACC_TYPE`, `LAST_LOGIN`, `ACC_STATUS`, `TYPE`) VALUES
(1, '9067706', 'Super', 'Admin', 'shahbaz@123', 'testadmin@demo.com', 'advertiser', '', '7355742333', '123456', '123456', NULL, NULL, 0, 400, '', '', '', 0, '', '', 'active', 'ADMIN'),
(2, '786', 'Zaid', 'Rizvi', 'zaid', 'admin@gmail.com', 'test', '', '9335438189', '1234', '1234', NULL, NULL, 0, 999, '', '', '', 0, '', '', 'active', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `added_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(50) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_path`) VALUES
(1, 'gallery_uploads/img_6801f12f61b55.jpg'),
(2, 'gallery_uploads/img_6801f12f633ce.jpg'),
(3, 'gallery_uploads/img_6801f12f63cf0.jpg'),
(4, 'gallery_uploads/img_6801f12f64f39.jpg'),
(5, 'gallery_uploads/img_6801f12f65e47.jpg'),
(6, 'gallery_uploads/img_6801f12f66658.jpg'),
(7, 'gallery_uploads/img_6801f12f6743a.jpg'),
(8, 'gallery_uploads/img_6801f12f67b5c.jpg'),
(9, 'gallery_uploads/img_6801f12f684de.jpg'),
(11, 'gallery_uploads/img_6801f12f69477.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_banner`
--
ALTER TABLE `add_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_banner`
--
ALTER TABLE `add_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
