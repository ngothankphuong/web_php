-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th10 09, 2023 lúc 03:22 PM
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
  `productPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, '123', 'canon.jpg', 345, '567', 'active'),
(3, 'product 2', 'img2.jpeg', 1000, 'Detail 2', 'active'),
(4, 'porject 3', 'img3.jpeg', 99999, 'aklsjdlkasdjlkajsd', 'active'),
(5, 'product 4', 'img4.jpeg', 45.3, 'detail 4', 'active'),
(6, 'hello', 'img1.jpeg', 984.123, 'jahjshdjad', 'active'),
(7, 'qwe', 'img2.jpeg', 10000, 'qwe', 'active');

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
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
