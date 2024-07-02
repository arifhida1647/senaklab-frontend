-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 02:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Operator','Owner') NOT NULL DEFAULT 'Admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'arif', 'admin', 'Admin', '2024-06-20 11:58:19'),
(3, 'operator', 'operator', 'Operator', '2024-06-22 17:22:37'),
(7, 'owner', '12345678', 'Owner', '2024-06-23 05:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `log_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`log_id`, `admin_id`, `action`, `created_at`) VALUES
(1, 1, 'Save table items with id ', '2024-06-22 16:24:38'),
(2, 1, 'Edit table items with id 27', '2024-06-22 16:25:24'),
(3, 1, 'Save table items with id 27', '2024-06-22 16:25:27'),
(4, 1, 'Delete table items with id 27', '2024-06-22 16:25:42'),
(5, 1, 'Save table items with id ', '2024-06-22 16:31:52'),
(6, 1, 'Delete table items with New ID', '2024-06-22 16:33:16'),
(7, 1, 'Save table items with id ', '2024-06-22 16:33:29'),
(8, 1, 'Delete table items with New ID', '2024-06-22 16:33:41'),
(9, 1, 'Save save new item', '2024-06-22 16:39:24'),
(10, 1, 'Delete table items with id 30', '2024-06-22 16:40:04'),
(11, 1, 'Save new item', '2024-06-22 16:40:17'),
(12, 1, 'Delete table items with id 31', '2024-06-22 16:40:47'),
(13, 1, 'Edit table items with id 25', '2024-06-22 16:57:55'),
(14, 1, 'Edit table orders with id 23', '2024-06-22 16:59:55'),
(15, 1, 'Edit table orders with id 24', '2024-06-22 16:59:56'),
(16, 1, 'Edit table orders with id 24', '2024-06-22 16:59:58'),
(17, 1, 'Edit table orders with id 24', '2024-06-22 17:00:00'),
(18, 1, 'Edit table orders with id 24', '2024-06-22 17:00:02'),
(19, 1, 'Save edit Orders with id 24', '2024-06-22 17:00:05'),
(20, 1, 'Save edit Orders with id 24', '2024-06-22 17:01:11'),
(21, 1, 'Save edit Users with id 2', '2024-06-22 17:06:12'),
(22, 3, 'Save New Admin', '2024-06-22 17:46:36'),
(23, 3, 'Save edit Admin with id 6', '2024-06-22 17:46:52'),
(24, 3, 'Save edit Admin with id 6', '2024-06-22 17:47:34'),
(25, 3, 'Delete table Admin with id 6', '2024-06-22 17:48:30'),
(26, 3, 'Save New Admin', '2024-06-23 05:05:49'),
(27, 3, 'Save edit Admin with id 7', '2024-06-23 05:05:59'),
(28, 7, 'Save New Users', '2024-06-28 10:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `inbox_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `subject` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`inbox_id`, `email`, `name`, `pesan`, `subject`, `created_at`) VALUES
(1, 'aff@gmail.com', 'aa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'adadadad', '2024-06-22 09:13:15'),
(2, 'aff@gmail.com', 'Arif', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'adadadad', '2024-06-22 09:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `laundry_items`
--

CREATE TABLE `laundry_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `timeCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laundry_items`
--

INSERT INTO `laundry_items` (`item_id`, `item_name`, `waktu`, `category`, `description`, `price`, `timeCreated`) VALUES
(20, 'Fast Cleaning', '24 Jam', 'Cleaning', 'cuci bagian luar & dalam, tali, refreshener dan anti bakteri', 65000.00, '2024-06-18 18:40:20'),
(21, 'Treatment For Kids', '2 - 3 hari', 'Cleaning', 'under size 36. Cuci bagian luar & dalam, tali, refreshener, dan anti bakteri', 30000.00, '2024-06-18 18:41:34'),
(22, 'Bag Size Small', '2 - 3 Hari', 'Cleaning', 'waist bag, pouch, tote bag', 40000.00, '2024-06-18 18:42:13'),
(23, 'Reglue', '2 - 3 hari', 'Repair', 'Menempel kembali sol yang lepas menggunakan lem', 30000.00, '2024-06-18 18:43:04'),
(24, 'Jahit', '2 -3 hari', 'Repair', 'menjahit kembali bagian sepatu yang lepas', 50000.00, '2024-06-18 18:43:57'),
(25, 'Shoes Repaint', '3 - 7 Hari', 'Repaint', 'mewarnai kembali sepatu yang pudar', 135000.00, '2024-06-18 18:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_address` varchar(30) DEFAULT NULL,
  `status` enum('Pending','In Progress','Completed','Cancelled') DEFAULT 'Pending',
  `total_amount` decimal(10,2) DEFAULT NULL,
  `payment_proof_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `item_id`, `order_date`, `order_address`, `status`, `total_amount`, `payment_proof_path`) VALUES
(23, 2, 22, '2024-06-20 06:50:10', NULL, 'In Progress', 40000.00, 'https://i.ibb.co.com/vw6f8GR/message-Image-1718858957549.jpg'),
(25, 2, 21, '2024-06-29 14:17:51', NULL, 'In Progress', 30000.00, 'https://i.ibb.co.com/mJSC64z/online-marketing-h-Igeo-Qj-S-i-E-unsplash.jpg'),
(27, 2, 21, '2024-07-01 00:08:00', 'jl kesatrian', 'Pending', 30000.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `role` enum('user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`, `phone_number`, `address`, `street`, `state`, `city`, `zip_code`, `role`, `created_at`) VALUES
(2, 'testing123', '$2y$10$8TjxxA6sYGJcofxExV0e8uL3F.ZowTW04E8AxxRnOpZ.clberGF6O', 'testing user', 'testing@gmail.com', '85695091825', 'test satdvafjvad', 'jl rempoa ciputat', 'Indonesia', 'tangerang ', 15412, 'user', '2024-06-20 06:46:24'),
(4, 'testing1234', '$2y$10$0pC6MGrIndyHM3ZpDk0bYOpUSFPLF9MBKJ9L6Vzd0aKQ/HsMkB9.S', 'testing1234', 'testing1234@gmail.com', '1234567890', 'asfjksgfuksfgukgfksfkjfvkasvfkafva', NULL, NULL, NULL, NULL, 'user', '2024-06-28 10:47:23'),
(6, 'testing12345', '$2y$10$0lzzUIW/iKAZQRMHAO/45.KK8fco1K85JWzN2eixn/g6qQwEggLBi', 'testing12345', 'testing12345@gmail.com', '85695091825', NULL, 'jl rempoa ciputat', 'Indonesia', 'tangerang ', 15412, 'user', '2024-06-29 15:09:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `laundry_items`
--
ALTER TABLE `laundry_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fk_item_id` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laundry_items`
--
ALTER TABLE `laundry_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD CONSTRAINT `admin_log_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_item_id` FOREIGN KEY (`item_id`) REFERENCES `laundry_items` (`item_id`),
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
