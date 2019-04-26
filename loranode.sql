-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2019 lúc 12:39 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `loranode`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `temp` float NOT NULL,
  `humi` float NOT NULL,
  `co` float NOT NULL,
  `no2` float NOT NULL,
  `so2` float NOT NULL,
  `o3` float NOT NULL,
  `pm25` float NOT NULL,
  `pm10` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `record`
--

INSERT INTO `record` (`id`, `temp`, `humi`, `co`, `no2`, `so2`, `o3`, `pm25`, `pm10`) VALUES
(0, 30, 89.55, 7.85338, 0.091055, 0.039727, 0.030564, 15.5644, 22.2132);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
