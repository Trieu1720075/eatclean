-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2020 lúc 12:47 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eatclean`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `phoneno` text,
  `address` text,
  `type` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `discount` int(11) DEFAULT '0',
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `currency_id` varchar(3) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT 'USD',
  `description` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT 'Vietnamese Food'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `discount`, `date`, `image`, `currency_id`, `description`) VALUES
(1, 'Orange Juice', 'Drink', 10, 0, '2020-12-20 23:58:08', 'images/drink1.jpg', 'USD', 'Vietnamese Food'),
(2, 'Milk Coffee', 'Drink', 20, 0, '2020-12-20 23:58:08', 'images/drink2.jpg', 'USD', 'Vietnamese Food'),
(3, 'Chicken deep-fry', 'Dish', 30, 0, '2020-12-21 01:39:32', 'images/blog-img-02.jpg', 'USD', 'Vietnamese Food'),
(4, 'Pizza', 'Dish', 50, 0, '2020-12-21 01:39:32', 'images/blog-img-05.jpg', 'USD', 'Vietnamese Food'),
(5, 'Lunch', 'Combo', 100, 0, '2020-12-21 01:46:03', 'images/combo3.jpg', 'USD', 'Vietnamese Food'),
(6, 'Two people', 'Reservation', 100, 0, '2020-12-21 01:48:42', 'images/img-06.jpg', 'USD', 'Reservation'),
(7, 'Korean Combo', 'Combo', 70, 0, '2020-12-21 01:53:17', 'images/img-08.jpg', 'USD', 'Korean Food');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `schedule` datetime NOT NULL,
  `totalamount` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `bymember` int(11) DEFAULT NULL,
  `idfood` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
