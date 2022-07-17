-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 06:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duhacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `filestoring`
--

CREATE TABLE `filestoring` (
  `sr` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `file_source` varchar(300) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filestoring`
--

INSERT INTO `filestoring` (`sr`, `time`, `file_source`, `patient_id`) VALUES
(1, '2022-07-17 14:03:59', '42784_david-van-dijk-3LTht2nxd34-unsplash.jpg', 0),
(2, '2022-07-17 14:03:59', '86166_wengang-zhai-BFB7ydn1-DI-unsplash.jpg', 0),
(3, '2022-07-17 14:03:59', '67960_kelly-sikkema-WIYtZU3PxsI-unsplash.jpg', 0),
(4, '2022-07-17 16:49:01', '24402_bc10.jpg', 329),
(5, '2022-07-17 16:49:01', '81639_bc11.jpg', 329),
(6, '2022-07-17 16:49:01', '31451_log-in.jpg', 329),
(7, '2022-07-17 16:49:01', '87119_track.jpg', 329),
(8, '2022-07-17 20:41:34', '40564_manav_prescription.jpg', 9),
(9, '2022-07-17 20:41:34', '87437_manav_general_report.png', 9),
(10, '2022-07-17 20:41:34', '39196_manav_X-ray.jpg', 9),
(11, '2022-07-17 21:03:24', '79660_manav_fracture-xray.jpg', 9),
(12, '2022-07-17 21:09:16', '87876_manav_mri.jpg', 9);

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
(29, 'zeel', 'e10adc3949ba59abbe56e057f20f883e', 'zeel', 'm', 'sangnani', 90909090, 'srsd@gmail.com', 'VRAJ ORTHOPEDICS samarth complex , near galaxy ,naroda,ahmedabad', '2022-07-02', 'VRAJ ORTHOPEDICS', 0, 909090909, 'M.D ', 'orthopedics', 'B+', '2022-07-16 15:35:19'),
(30, 'QETR', '123456', 'zeel', 'n', 'sangani', 7434941732, 'meet.sangani@gmail.com', 'MCKLSIDMDD', '2022-07-01', 'meddy', 1, 7979797979, 'md', 'brain', 'ab', '2022-07-17 10:41:47'),
(31, 'kunj123', 'e10adc3949ba59abbe56e057f20f883e', 'kunj', 'k', 'patel', 9999999999, 'aam@ddu.ac.in', 'DDU nadiad', '2022-07-17', 'DDU', 1, 198, 'MBBS', 'phycology', 'B+', '2022-07-17 16:24:59'),
(32, 'kunj123', 'e10adc3949ba59abbe56e057f20f883e', 'kunj', 'k', 'patel', 9999999999, 'aam@ddu.ac.in', 'DDU nadiad', '2022-07-17', 'DDU', 1, 198, 'MBBS', 'phycology', 'B+', '2022-07-17 16:25:31');

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
(7, 'zeel', '$2y$10$MZW8RRyNhKhWGfCReK/M8.r/ac8yu9rMs1T18Aybgwf4rqgTT.jZ2', '2022-07-16 12:01:13', '', 'm', 'v', '2022-07-02', 9090909090, '', 'srsd@gmail.com', 1, '+b'),
(8, 'kunj', '$2y$10$AGWe1u69cl.8ovNyOxEW..g25NMAuNli4l7qaNT9QcHYW2WwlHdG2', '2022-07-17 15:58:30', '', 'k', 'patel', '2022-07-17', 9999999999, 'DDU nadiad', 'aam@ddu.ac.in', 1, 'B+'),
(9, 'Manav', '$2y$10$e1tAEHs72H5hShSE.pqqmOE2mTQTSEb0N3S8kYxx.Zpg1edA6xv.6', '2022-07-17 20:30:30', '', 'Suhashbhai', 'Patel', '2003-02-19', 9712464200, 'subhash nagar,mill road, nadiad', 'manav2022@gmail.com', 1, 'O+');

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
(829, 'neel', 'fever', 'kjhkja', '2022-07-17 13:09:53', 1),
(12, 'rajat ', 'stomach ache with high intensity', 'very very bad habits to eat junk foods all the day and not following instructions given by', '2022-07-17 13:32:21', 31),
(107, 'kdjdk', 'iejd', 'mcn ', '2022-07-17 13:39:33', 0),
(78, 'mmn', 'nmm', 'ok ', '2022-07-17 13:46:34', 0),
(829, 'neel', 'dengue', 'ver high fever ', '2022-07-17 13:47:07', 1),
(9, 'manav', 'head ache,fever and cough', 'slightly affected by viral infection due to some unaware consequences\r\njust very slight pn', '2022-07-17 17:01:04', 31),
(9, 'manav', 'hand fracture', 'just small crack on ankle joint. just 2 moths bed rest and surgery it will fine to recover', '2022-07-17 17:26:21', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filestoring`
--
ALTER TABLE `filestoring`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
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
-- AUTO_INCREMENT for table `filestoring`
--
ALTER TABLE `filestoring`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
