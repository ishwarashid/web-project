-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 05:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `culinary_cove`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updatedAt`) VALUES
(1, 'ishwarashid933@gmail.com', '123456', '2023-12-02 17:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `username`, `password`) VALUES
(1, 'Ishwa Rashid', 'ishwarashid901@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `quantity`, `status`) VALUES
(2, 1, 0, 1, 'placed'),
(4, 1, 8, 1, 'placed'),
(5, 1, 1, 1, 'placed'),
(6, 1, 5, 2, 'placed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `description`, `category`) VALUES
(0, 'Salmon Riverland', 2000, 'Experience the superior taste of Salmon, perfect for elevating your culinary creations.', 'desserts'),
(1, 'Soft Shell Crab', 2000, 'Seasoned with an herb crust, served with au jus and hand-carved to order.', 'desserts'),
(2, 'Fish Pie', 1450, 'Our tender, juicy filet paired with a steamed tempora lobster tail.', 'seafood'),
(4, 'Meatball Tagliatelle', 560, 'Granny help you treat yourself with a empor scelerisque different meal everyday.', 'desserts'),
(5, 'Prime Cuts of Beef', 3050, 'Granny help you treat yourself with a empor scelerisque different meal everyday.', 'seafood'),
(6, 'Slow-Roasted Prime Rib', 4560, 'Seasoned with an herb crust, served with au jus and hand-carved to order, crust, served .', 'seafood'),
(7, 'Victoria\'s Filet Mignon', 1450, 'A culinary masterpiece known for its exquisite tenderness and exceptional taste.', 'drinks'),
(8, ' Midnight Mirage', 2000, 'A blend of dark rum, blackberries, and a hint of mint, captures the essence of evenings.', 'drinks'),
(9, 'Fried Potatoes', 250, 'Our tender, juicy filet paired with a steamed tempora lobster tail.', 'starter'),
(10, 'Crispy Tempura Bites', 1500, 'Delight in our Crispy Tempura Bites, seasoned and served with zesty dipping sauce.', 'starter'),
(11, 'Truffle-infused Mushroom Crostini', 2000, 'Savor the indulgent harmony of earthy mushrooms, truffle essence, and creamy cheese.', 'starter'),
(12, 'jhejehdjh', 123, 'deehfjkdhj', 'starter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_fk_1` (`product_id`),
  ADD KEY `orders_fk_2` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_fk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_fk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
