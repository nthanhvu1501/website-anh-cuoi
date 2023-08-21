-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 09:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_anh_cuoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `thumbnail`, `name`, `description`, `create_at`, `update_at`) VALUES
(1, '20230811164228.jpg', 'Album 1', 'ALBUM ẢNH CƯỚI ĐẸP HÀ NỘI: NAM & VŨ', '2023-08-19 08:32:33', '2023-08-19 08:32:33'),
(5, '20230821102149.jpg', 'Album2', '123', '2023-08-21 10:21:49', '2023-08-21 10:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_album` int(11) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `id_album`, `create_at`) VALUES
(4, '20230811164228.jpg', 1, '2023-08-21 09:19:49'),
(5, '20230811164231.jpg', 1, '2023-08-21 09:19:49'),
(6, '20230811164235.jpg', 1, '2023-08-21 09:19:49'),
(7, '20230811164244.jpg', 1, '2023-08-21 09:19:49'),
(8, '20230811164248.jpg', 1, '2023-08-21 09:19:49'),
(9, '20230811164253.jpg', 1, '2023-08-21 09:19:49'),
(10, '20230811164256.jpg', 1, '2023-08-21 09:19:49'),
(11, '20230818210628.jpg', 1, '2023-08-21 09:19:49'),
(13, '20230821092511.jpg', 1, '2023-08-21 09:25:11'),
(14, '20230821092555.jpg', 1, '2023-08-21 09:25:55'),
(15, '20230821092555.jpg', 1, '2023-08-21 09:25:55'),
(16, '20230821092555.jpg', 1, '2023-08-21 09:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `imageselected`
--

CREATE TABLE `imageselected` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imageselected`
--

INSERT INTO `imageselected` (`id`, `image`, `id_user`) VALUES
(13, '20230811164244.jpg', 0),
(14, '20230811164231.jpg', 0),
(15, '20230811164248.jpg', 0),
(16, '20230811164235.jpg', 0),
(17, '20230811164256.jpg', 0),
(18, '20230811164253.jpg', 0),
(19, '20230811164231.jpg', 0),
(20, '20230811164248.jpg', 0),
(21, '20230811164235.jpg', 0),
(22, '20230811164256.jpg', 0),
(23, '20230811164253.jpg', 0),
(24, '20230811164248.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `imagetemp`
--

CREATE TABLE `imagetemp` (
  `id_image` int(11) NOT NULL,
  `image` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `imageselected`
--
ALTER TABLE `imageselected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagetemp`
--
ALTER TABLE `imagetemp`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `imageselected`
--
ALTER TABLE `imageselected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `imagetemp`
--
ALTER TABLE `imagetemp`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
