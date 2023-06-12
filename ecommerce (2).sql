-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 10:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_create`
--

CREATE TABLE `account_create` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_create`
--

INSERT INTO `account_create` (`id`, `name`, `email`, `pass`) VALUES
(1, 'fiz', 'mustafizur01739@gmail.com', '1234'),
(2, 'mamun', 'mamun@gmail.com', '1234'),
(3, 'sakib', 'sakib@gmail.com', '1234'),
(4, 'rony', 'rony@gmail.com', 'rony');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `current_price` int(11) NOT NULL,
  `before_price` int(11) NOT NULL,
  `buying_price` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `name`, `description`, `current_price`, `before_price`, `buying_price`, `title`, `img`) VALUES
(20, 'Sumsung phone', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit ex modi obcaecati nisi possimus?', 2000, 1800, 1500, 'Sumsung-18', 'sumsung phone.webp'),
(21, 'T-shirt', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit ex modi obcaecati nisi possimus?', 200, 300, 150, 'Man-Tshirt', 'T-shirt.webp'),
(22, 'Batchlet', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit ex modi obcaecati nisi possimus?', 100, 110, 80, 'male /Female', 'batchlet.webp'),
(23, 'cable', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit ex modi obcaecati nisi possimus?', 90, 100, 50, 'Charger cable', 'cable.jpg'),
(24, 'Shoes', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit ex modi obcaecati nisi possimus?', 1200, 1000, 500, 'Man Shoes', 'shoes.jpg'),
(25, 'Shoes All', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit ex modi obcaecati nisi possimus?', 1500, 1900, 1200, 'ALl Shoes', 'shoes2.jpg'),
(26, 'Shirt', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit ex modi obcaecati nisi possimus?', 600, 790, 500, 'Male Shirt', 'shirt.jpg'),
(27, 'watch', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit ex modi obcaecati nisi possimus?', 200, 300, 150, 'male watch', 'watch.jpg'),
(28, 'Sumsung phone', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit ex modi obcaecati nisi possimus?', 2000, 1800, 1500, 'Sumsung-18', 'sumsung phone.webp');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `phone`, `pass`) VALUES
(1, 'admin@gmail.com', '01718465130', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order`
--

CREATE TABLE `confirm_order` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirm_order`
--

INSERT INTO `confirm_order` (`user_id`, `id`) VALUES
(7, 1),
(8, 2),
(9, 3),
(10, 4),
(7, 5),
(7, 6),
(7, 7),
(8, 8),
(8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `msg`) VALUES
(2, 'fiz', 'very good');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `PaymentSystem` varchar(100) NOT NULL,
  `paymobileBank` varchar(100) NOT NULL,
  `user_order` varchar(200) NOT NULL,
  `total_taka` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(110) NOT NULL,
  `month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `name`, `email`, `phone`, `city`, `payment`, `PaymentSystem`, `paymobileBank`, `user_order`, `total_taka`, `user_id`, `date`, `month`) VALUES
(7, 'MAMNUR RASHID', 'mamun621@gmail.com', '01713120621', 'Rajshahi', 'Mobile_bank', '01718465130', 'Nagad', 'Shoes All(3),watch(3),Sumsung phone(4)', '13100', 1, '29-03-23', 1),
(8, 'mafi', 'mafi@gmail.com', '01718465130', 'dhaka', 'cash', 'maruf', '', 'Sumsung phone(2),Shoes All(5)', '11500', 2, '29-03-23', 1),
(9, 'sakib', 'sakib@gmail.com', '01718465130', 'dhaka', 'bank', '918281u1', '', 'Shoes All(2),watch(2),Sumsung phone(3)', '9400', 3, '29-03-23', 2),
(10, 'rony', 'rony@gmail.com', '01718465130', 'dhaka', 'cash', 'maruf', '', 'Sumsung phone(4),Batchlet(3),watch(5)', '9300', 4, '29-03-23', 3);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `isp` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip`, `isp`, `country`, `city`) VALUES
(1, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(2, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(3, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(4, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(5, '59.152.3.225', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(6, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(7, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(8, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(9, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(10, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(11, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(12, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(13, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(14, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(15, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(16, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(17, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(18, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(19, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(20, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(21, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(22, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(23, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(24, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(25, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(26, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(27, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(28, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(29, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(30, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(31, '59.152.3.227', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(32, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(33, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(34, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(35, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(36, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(37, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(38, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(39, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(40, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division'),
(41, '59.152.3.226', 'ZipNet Limited', 'Bangladesh', 'Dhaka Division');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_create`
--
ALTER TABLE `account_create`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order`
--
ALTER TABLE `confirm_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_create`
--
ALTER TABLE `account_create`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `confirm_order`
--
ALTER TABLE `confirm_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
