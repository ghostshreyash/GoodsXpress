-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 06:53 PM
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
-- Database: `acme23_june`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `userId`, `pid`, `date_created`) VALUES
(33, 16, 27, '2023-09-08 15:49:01'),
(34, 16, 5, '2023-09-08 15:49:05'),
(35, 14, 18, '2023-09-08 15:49:27'),
(36, 14, 28, '2023-09-08 15:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `userId`, `pid`, `address`, `date_created`) VALUES
(14, 13, 5, 'Bangalore', '2023-09-02 16:45:58'),
(15, 13, 14, 'Bangalore', '2023-09-02 16:46:21'),
(21, 10, 4, 'Shanti nagar,durg ,chattisgarh', '2023-09-03 12:07:57'),
(23, 13, 5, 'Bangalore', '2023-09-03 14:26:16'),
(27, 10, 19, 'Ward No. 18, Near Dmart,Bhilai-3', '2023-09-08 15:45:45'),
(29, 13, 32, 'Hyderabad', '2023-09-08 15:47:57'),
(30, 13, 21, 'Hyderabad', '2023-09-08 15:47:57'),
(31, 10, 15, 'j-63/64, raipur', '2023-09-08 16:26:24'),
(32, 10, 18, 'j-63/64, raipur', '2023-09-08 16:26:24'),
(33, 10, 23, 'j-63/64, raipur', '2023-09-08 16:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `details` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `active` varchar(10) NOT NULL,
  `imgPath` varchar(100) NOT NULL,
  `uploadedBy` int(11) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `price`, `details`, `category`, `code`, `active`, `imgPath`, `uploadedBy`, `dateCreated`) VALUES
(4, 'Top ', 550, 'White Top', 'Fashion', 'Tp-F-001', 'Yes', '../shared/images/top.jpg', 11, '2023-08-25 18:39:40'),
(5, 'Redmi', 24999, 'MI Redmi Note 11 Pro 5G ', 'Electronics', 'Mob-001', 'Yes', '../shared/images/mob-in.jpeg', 11, '2023-08-25 18:44:21'),
(13, 'Shirt', 600, 'shirt', 'Fashion', 'Sht-001', 'Yes', '../shared/images/top-in.jpeg', 12, '2023-08-25 21:32:44'),
(14, 'tv', 70000, 'tv', 'Electronics', 'TV-001', 'Yes', '../shared/images/tv-front.jpeg', 11, '2023-08-25 21:35:44'),
(15, 'Women dress', 1699, 'Navy Blue Floral Dress', 'Fashion', 'Op-101', 'Yes', '../shared/images/dress1.jpeg', 12, '2023-09-08 14:39:12'),
(17, 'One-piece dress', 1899, 'White based floral one-piece', 'Fashion', 'Op-102', 'Yes', '../shared/images/dress2.jpeg', 12, '2023-09-08 14:42:45'),
(18, 'Luxuary Sofa', 14999, 'Salmon-pink-sofa', 'Fashion', 'Sfa-001', 'Yes', '../shared/images/pink-sofa.jpg', 12, '2023-09-08 14:54:13'),
(19, 'Women top', 999, 'Black frock top', 'Fashion', 'T-301', 'Yes', '../shared/images/top4.jpg', 12, '2023-09-08 14:57:49'),
(20, 'Men Shirt', 1159, 'Solid blue mens shirt', 'Fashion', 'Ms-201', 'Yes', '../shared/images/shirt1.jpeg', 12, '2023-09-08 15:00:52'),
(21, 'Mustard Yellow Shirt', 1499, 'Casual wear Mustard Yellow Shirt', 'Fashion', 'Ms-202', 'Yes', '../shared/images/shirt4.jpg', 12, '2023-09-08 15:04:36'),
(22, 'Dining Table', 11999, '6-seater dining table', 'Furniture', 'Dt-111', 'Yes', '../shared/images/dine-front.jpeg', 12, '2023-09-08 15:07:57'),
(23, 'Womens watch', 899, 'Black watch', 'Fashion', 'W-222', 'Yes', '../shared/images/black-watch.jpg', 12, '2023-09-08 15:09:03'),
(24, 'Ruffle sleeves dress', 1799, 'Women party wear', 'Fashion', 'Op-103', 'Yes', '../shared/images/dress3.jpg', 11, '2023-09-08 15:13:13'),
(25, 'Party wear dress', 1999, 'Rose red party wear', 'Fashion', 'Op-104', 'Yes', '../shared/images/dress4.jpg', 11, '2023-09-08 15:15:39'),
(26, 'Checks Top', 599, 'Women t-shirt', 'Fashion', 'T-302', 'Yes', '../shared/images/top3.jpg', 11, '2023-09-08 15:17:41'),
(27, 'Stripes Shirt ', 1499, 'Mens wear casual shirt', 'Fashion', 'Ms-202', 'Yes', '../shared/images/shirt3.jpeg', 11, '2023-09-08 15:20:50'),
(28, 'Xaomi Redmi 11', 18999, 'Pink-128GB ROM-6GM RAM', 'Electronics', 'Mob-501', 'Yes', '../shared/images/mob-front.jpeg', 11, '2023-09-08 15:23:56'),
(29, 'Velvet blue sofa', 16999, '3-seater luxuary sofa', 'Furniture', 'Sfa-002', 'Yes', '../shared/images/sofa-in.jpeg', 11, '2023-09-08 15:27:09'),
(30, 'Wooden Table', 13899, '6-seater dining table', 'Furniture', 'Dt-112', 'Yes', '../shared/images/dine-in.jpeg', 11, '2023-09-08 15:28:52'),
(31, 'Bravia TV', 12999, 'Bravia Curved Screen-42inch', 'Electronics', 'TV-200', 'Yes', '../shared/images/tv-in.jpeg', 11, '2023-09-08 15:32:57'),
(32, 'Rolex-watch', 8999, 'Rolex-watch-mens', 'Electronics', 'W-223', 'Yes', '../shared/images/Rolex -watch.jpg', 11, '2023-09-08 15:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `password`, `userType`, `date_created`) VALUES
(10, 'antara', 'cff1f0f0eff214cf9011d2e73d6e0b40', 'Customer', '2023-08-23 13:37:57'),
(11, 'ankita', 'de5b5bf65ba66517f9b70b1443d2102d', 'Vendor', '2023-08-25 16:53:50'),
(12, 'Sonal', '2e4c54a60ae5156c6082797a6816e067', 'Vendor', '2023-08-25 19:17:23'),
(13, 'soham', 'e4dc20af52acd07a1e1ec3de921ea719', 'Customer', '2023-09-01 12:15:35'),
(14, 'sourav', '231f009004ef61cee94304a5b0f4f052', 'Customer', '2023-09-02 15:13:16'),
(16, 'Gaurav', '29be54a52396750258d886abc5417fda', 'Customer', '2023-09-02 15:16:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
