-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 03, 2019 lúc 01:34 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `example`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `createat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `createat`) VALUES
(2, 'dsf', 'Hải đường', 'image/anhkhudat.jpg', '2019-06-27'),
(10, 'àd', 'dsaf', 'image/bandovietnam.jpg', '2019-07-12'),
(16, 'lỳ lùi', 'bé nguyên', 'image/123.effectsResult.jpg', '2019-07-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Price` decimal(10,0) NOT NULL DEFAULT '0',
  `Descript` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Image` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `CreateAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `ProductName`, `Price`, `Descript`, `Image`, `CreateAt`) VALUES
(5, 'HÃ  Ná»™i', '1000000', 'thá»§ Ä‘Ã´ hÃ  ná»™i', 'image/Gioi-thieu-doi-net-ve-Ho-Hoan-Kiem-Ho-Guom-o-Ha-Noi-3.jpg', '2019-06-20'),
(6, 'Ä‘Ã  náºµng', '1000000', 'dsgsg', 'image/doc-let-1.jpg', '2019-06-20'),
(7, 'ÄÃ  Láº¡t', '2000', 'bÃ¡nh bÃ¨o, bÃ¡nh xÃ¨o, bÃ¡nh tiÃªu', 'image/ghe-tham-cho-phien-sapa-4.jpg', '2019-06-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Avatar` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `tel`, `Avatar`) VALUES
(3, 'TrinhDat', '25d55ad283aa400af464c76d713c07ad', 'Trịnh Văn Đạt', 'dat123@gmail.com', '123456789', 'image/Hydrangeas.jpg'),
(5, 'duong', '25d55ad283aa400af464c76d713c07ad', 'Nguyễn Hải Đường', 'duong123@gmail.com', '0987654321', 'image/Penguins.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
