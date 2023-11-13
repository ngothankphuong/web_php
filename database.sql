-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th10 13, 2023 lúc 06:16 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `productID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productImg` varchar(100) NOT NULL,
  `productPrice` double NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`cartID`, `userID`, `userName`, `productID`, `productName`, `productImg`, `productPrice`, `Quantity`) VALUES
(43, 13, '13', 0, 'Macbook Pro M1', 'macbook_pro_m1_16inch.jpg', 20000000, 5),
(44, 13, '13', 0, 'iphone X', 'ipX.png', 9000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `itemImg` varchar(100) NOT NULL,
  `itemPrice` double NOT NULL,
  `itemDetail` varchar(200) NOT NULL,
  `itemStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `items`
--

INSERT INTO `items` (`ID`, `itemName`, `itemImg`, `itemPrice`, `itemDetail`, `itemStatus`) VALUES
(22, 'iphone 13', 'ip13.jpg', 24000000, 'no detail', 'active'),
(23, 'Ipad Pro M1', 'ipad_pro_m1.jpg', 23000000, 'No detail', 'active'),
(24, 'Macbook Pro M1', 'macbook_pro_m1_16inch.jpg', 56000000, 'no detail', 'active'),
(25, 'Macbook Air', 'macbook_air.jpg', 23000000, 'no detail', 'active'),
(26, 'Iphone 13 Mini', 'ip13_mini.png', 28000000, 'no detail', 'active'),
(27, 'Iphone X', 'ipX.png', 12000000, 'no detail', 'non');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userID`, `userName`, `userEmail`, `userPassword`) VALUES
(12, 'Ngo Thanh Phuong', 'p@gmail.com', '$2y$10$NgfvEQM4rJcPyPVjkFr8a.DLRRQ1iKJpP6iVU3bi1ziXoO9fuzKSO'),
(13, 'lol', 'lol@gmail.com', '$2y$10$RYBbg6fOcbd2oMQn1v48/ui2jTN8JVLHWdpExbBWuZz7Tx4Wmy1GO');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cartID`);

--
-- Chỉ mục cho bảng `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
