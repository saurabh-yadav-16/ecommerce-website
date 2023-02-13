-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2023 at 02:44 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19684790_rgitshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_image4` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_special_offer` int(2) NOT NULL,
  `product_color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_image2`, `product_image3`, `product_image4`, `product_price`, `product_special_offer`, `product_color`) VALUES
(1, 'White Shoes', 'Shoes', 'Shoes for men', 'white-shoes-1.jpg', 'white-shoes-2.jpg', 'white-shoes-3.jpg', 'white-shoes-4.jpg', 1200.00, 0, 'White'),
(3, 'Blue Tshirt', 'Tshirt', 'Programmer Tshirt for men', 'blue-tshirt-1.jpg', 'blue-tshirt-2.jpg', 'blue-tshirt-1.jpg', 'blue-tshirt-2.jpg', 800.00, 0, 'Blue'),
(4, 'Black Tshirt', 'Tshirt', 'Programmer Tshirt for men', 'tshirt-offline-black-1.jpg', 'tshirt-offline-black-2.jpg', 'tshirt-offline-black-1.jpg', 'tshirt-offline-black-2.jpg', 800.00, 0, 'Black'),
(5, 'Black Shoes', 'Shoes', 'Black Shoes for men', 'black-shoes-1.jpg', 'black-shoes-2.jpg', 'black-shoes-3.jpg', 'black-shoes-4.jpg', 1500.00, 0, 'Black'),
(6, 'Smart Watch', 'Watches', 'Fitness smart watch  ', 'black-watch-1.jpg', 'black-watch-2.jpg', 'black-watch-3.jpg', 'black-watch-4.jpg', 1115.00, 0, 'Blue'),
(8, 'Sun Glasses', 'Glasses', 'Sun Glasses for men', 'glasses-1.jpg', 'glasses-2.jpg', 'glasses-3.jpg', 'glasses-4.jpg', 800.00, 0, 'Blue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
