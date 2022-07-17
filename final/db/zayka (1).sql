-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 11:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zayka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `mid_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `birth_date` date NOT NULL,
  `hospital_name` varchar(40) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `hospital_number` bigint(10) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `specialist_subject` varchar(40) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `joining_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `first_name`, `mid_name`, `last_name`, `mobile`, `email`, `address`, `birth_date`, `hospital_name`, `gender`, `hospital_number`, `qualification`, `specialist_subject`, `blood_group`, `joining_date`) VALUES
(16, 'neer', 'fcea920f7412b5da7be0cf42b8c93759', 'yufl', 'sfsd', 'dfsd', 90909090, 'srsd@gmail.com', 'cbnc', '2022-07-08', 'sdf', 1, 9090909, 'vbncm', 'sdtttth', 'mn', '2022-07-16 14:51:40'),
(25, 'zeel', 'e10adc3949ba59abbe56e057f20f883e', 'yufl', 'm', 'dfsd', 90909090, 'srsd@gmail.com', 'cbnc', '2022-07-02', 'sdf', 0, 909090909, 'vbncm', 'sdtttth', 'mn', '2022-07-16 15:33:01'),
(26, 'zeel', 'e10adc3949ba59abbe56e057f20f883e', 'yufl', 'm', 'dfsd', 90909090, 'srsd@gmail.com', 'cbnc', '2022-07-02', 'sdf', 0, 909090909, 'vbncm', 'sdtttth', 'mn', '2022-07-16 15:34:15'),
(27, 'zeel', 'e10adc3949ba59abbe56e057f20f883e', 'yufl', 'm', 'dfsd', 90909090, 'srsd@gmail.com', 'cbnc', '2022-07-02', 'sdf', 0, 909090909, 'vbncm', 'sdtttth', 'mn', '2022-07-16 15:34:31'),
(28, 'zeel', 'e10adc3949ba59abbe56e057f20f883e', 'yufl', 'm', 'dfsd', 90909090, 'srsd@gmail.com', 'cbnc', '2022-07-02', 'sdf', 0, 909090909, 'vbncm', 'sdtttth', 'mn', '2022-07-16 15:34:40'),
(29, 'zeel', 'e10adc3949ba59abbe56e057f20f883e', 'yufl', 'm', 'dfsd', 90909090, 'srsd@gmail.com', 'cbnc', '2022-07-02', 'sdf', 0, 909090909, 'vbncm', 'sdtttth', 'mn', '2022-07-16 15:35:19'),
(30, 'QETR', '123456', 'zeel', 'n', 'sangani', 7434941732, 'meet.sangani@gmail.com', 'MCKLSIDMDD', '2022-07-01', 'meddy', 1, 7979797979, 'md', 'brain', 'ab', '2022-07-17 10:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(4, 'Pizzaa', 'Food_Category_790.jpg', 'Yes', 'Yes'),
(5, 'Burger', 'Food_Category_344.jpg', 'Yes', 'Yes'),
(9, 'Wraps', 'Food_Category_374.jpg', 'Yes', 'Yes'),
(10, 'Pasta', 'Food_Category_948.jpg', 'Yes', 'Yes'),
(11, 'Sandwich', 'Food_Category_536.jpg', 'Yes', 'Yes'),
(17, 'chinese', 'Food_Category_848.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(5, 'Smoky BBQ Pizza 1   ', 'Best Firewood Pizza in Town.', '90.00', 'Food-Name-8298.jpg', 4, 'Yes', 'Yes'),
(9, 'Chicken Wrap new', 'Crispy flour tortilla loaded with juicy chicken, bacon, lettuce, avocado and cheese drizzled with a delicious spicy Ranch dressing.', '70.00', 'Food-Name-3461.jpg', 9, 'Yes', 'Yes'),
(10, 'Cheeseburger', 'A cheeseburger is a hamburger topped with cheese. Traditionally, the slice of cheese is placed on top of the meat patty.', '40.00', 'Food-Name-433.jpeg', 5, 'Yes', 'Yes'),
(34, 'manchrian', '...', '52.00', 'Food-Name-5994.jpg', 17, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(11, 'Grilled Cheese Sandwich', '3.00', 4, '12.00', '2022-06-08 08:18:43', 'Cancelled', 'okkl', '9712464200', 'patelkunj2021@gmail.com', 'B/3\r\nShaktinagar society\r\nDana road'),
(12, 'Ham Burger', '4.00', 1, '4.00', '2022-06-09 05:52:07', 'On Delivery', 'kunj', '4164632121', 'kunj1234@gmail.com', 'DDIT,nadiad hii  '),
(13, 'Chicken Wrap new', '70.00', 4, '280.00', '2022-06-09 09:12:50', 'Ordered', 'kunj', '1234567890', 'new@gmail.com', 'naidad'),
(14, 'Cheeseburger', '40.00', 1, '40.00', '2022-06-09 09:13:32', 'Ordered', 'kunj', '4164632121', 'patelkunj2021@gmail.com', 'B/3\r\nShaktinagar society\r\nDana road'),
(15, 'Cheeseburger', '40.00', 1, '40.00', '2022-06-09 09:18:21', 'Cancelled', 'fghdh', 'fgjfgjjd', 'kunj1234@gmail.com', 'fdj'),
(16, 'Smoky BBQ Pizza 1   ', '90.00', 1, '90.00', '2022-06-09 12:25:26', 'Delivered', 'random', '1234567809', 'patelkunj2021@gmail.com', 'B/3\r\nShaktinagar society\r\nDana road'),
(17, 'manchurian', '50.00', 1, '50.00', '2022-06-09 03:45:39', 'On Delivery', 'kunj patel', '9712464200', 'patelkunj2021@gmail.com', 'B/3\r\nShaktinagar society\r\nDana road'),
(18, 'Chicken Wrap new', '70.00', 1, '70.00', '2022-06-09 04:11:48', 'Delivered', 'kunj', '9712464200', 'patelkunj2021@gmail.com', 'B/3\r\nShaktinagar society\r\nDana road');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `first_name` varchar(30) NOT NULL,
  `mid_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `bod` date NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `blood_group` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `first_name`, `mid_name`, `last_name`, `bod`, `mobile`, `address`, `email`, `gender`, `blood_group`) VALUES
(6, 'u1', '123', '2022-07-16 11:49:39', 'meet', 'n', 'sangani', '2022-07-07', 7434941717, 'mnmnm', 'meet.sangani@gmail.com', 0, 'ab'),
(7, 'zeel', '$2y$10$MZW8RRyNhKhWGfCReK/M8.r/ac8yu9rMs1T18Aybgwf4rqgTT.jZ2', '2022-07-16 12:01:13', '', 'm', 'v', '2022-07-02', 9090909090, '', 'srsd@gmail.com', 1, '+b');

-- --------------------------------------------------------

--
-- Table structure for table `vists`
--

CREATE TABLE `vists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `diseseas` varchar(60) NOT NULL,
  `details` varchar(90) NOT NULL,
  `tme_of_visit` datetime NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vists`
--

INSERT INTO `vists` (`id`, `name`, `diseseas`, `details`, `tme_of_visit`, `doctor_id`) VALUES
(107, 'kdjdk', 'iejd', 'mcn ', '2022-07-17 13:39:33', 0),
(78, 'mmn', 'nmm', 'ok ', '2022-07-17 13:46:34', 0),
(829, 'neel', 'dengue', 'ver high fever ', '2022-07-17 13:47:07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vists`
--
ALTER TABLE `vists`
  ADD PRIMARY KEY (`tme_of_visit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
