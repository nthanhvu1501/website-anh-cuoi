-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 31, 2023 lúc 06:42 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_anh_cuoi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `is_active` varchar(1) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`album_id`, `thumbnail`, `name`, `description`, `is_active`, `create_at`, `update_at`) VALUES
(10, '20230831084749.jpg', 'Album ảnh cưới đẹp tại Hà Nội', 'Album ảnh cưới đẹp tại Hà Nội', '1', '2023-08-31 08:47:49', '2023-08-31 08:47:49'),
(11, '20230831084842.jpg', 'Album ảnh cưới Hàn Quốc tại phim trường độc quyền của TuArt: Việt Anh & Sam', 'Album ảnh cưới Hàn Quốc tại phim trường độc quyền của TuArt: Việt Anh & Sam', '1', '2023-08-31 08:48:42', '2023-08-31 08:48:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`image_id`, `image`, `album_id`, `create_at`) VALUES
(17, '202308310847580.jpg', 10, '2023-08-31 08:47:58'),
(18, '202308310847581.jpg', 10, '2023-08-31 08:47:58'),
(19, '202308310847582.jpg', 10, '2023-08-31 08:47:58'),
(20, '202308310847583.jpg', 10, '2023-08-31 08:47:58'),
(21, '202308310847584.jpg', 10, '2023-08-31 08:47:58'),
(22, '202308310847585.jpg', 10, '2023-08-31 08:47:58'),
(23, '202308310847586.jpg', 10, '2023-08-31 08:47:58'),
(24, '202308310847587.jpg', 10, '2023-08-31 08:47:58'),
(25, '202308310848510.jpg', 11, '2023-08-31 08:48:51'),
(26, '202308310848511.jpg', 11, '2023-08-31 08:48:51'),
(27, '202308310848512.jpg', 11, '2023-08-31 08:48:51'),
(28, '202308310848513.jpg', 11, '2023-08-31 08:48:51'),
(29, '202308310848514.jpg', 11, '2023-08-31 08:48:51'),
(30, '202308310848515.jpg', 11, '2023-08-31 08:48:51'),
(31, '202308310848516.jpg', 11, '2023-08-31 08:48:51'),
(32, '202308310848517.jpg', 11, '2023-08-31 08:48:51'),
(33, '202308310848518.jpg', 11, '2023-08-31 08:48:51'),
(34, '202308310848519.jpg', 11, '2023-08-31 08:48:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imageselected`
--

CREATE TABLE `imageselected` (
  `image_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `fullName`, `username`, `email`, `password`, `permission`) VALUES
(6, 'user1', 'user1', 'user1@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'user'),
(7, 'abc', 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `id_album` (`album_id`);

--
-- Chỉ mục cho bảng `imageselected`
--
ALTER TABLE `imageselected`
  ADD PRIMARY KEY (`image_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `imageselected`
--
ALTER TABLE `imageselected`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
