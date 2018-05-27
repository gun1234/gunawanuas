-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2017 at 01:50 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_crud_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `frm_data_ktp`
--

CREATE TABLE `frm_data_ktp` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `berlaku_hingga` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `thumb_foto` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `date_modify` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frm_data_ktp`
--

INSERT INTO `frm_data_ktp` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `golongan_darah`, `alamat`, `rt`, `rw`, `wilayah`, `kelurahan`, `kecamatan`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `berlaku_hingga`, `email`, `twitter`, `facebook`, `instagram`, `path`, `foto`, `thumb_foto`, `date_created`, `date_modify`) VALUES
(22, '12345678', 'Kinta Mahadji', 'Jakarta', '1987-03-14', 'Laki-laki', 'B', '', '', '', '', '', '', 'Islam', 'menikah', 'CTO', 'WNI', '2017-03-14', 'kintamahadji@gmail.com', '', '', '', '', '5200fda26a3769aaa34bd3842b382d78.png', '5200fda26a3769aaa34bd3842b382d78_thumb.png', '2017-03-04', '0000-00-00'),
(23, '87654321', 'yurika nawwal ulfa', 'Jakarta', '1990-07-10', 'Perempuan', 'B', '', '', '', '', '', '', 'Islam', 'menikah', 'CTO Wife', 'WNI', '2017-03-21', 'yurikanawwalulfa@gmail.com', '', '', '', '', '40e9700583dc3624b9a89a287523b18c.png', '40e9700583dc3624b9a89a287523b18c_thumb.png', '2017-03-04', '0000-00-00'),
(24, '2344321', 'Umar Fathih', 'Jakarta', '2012-07-13', 'Laki-laki', 'B', '', '', '', '', '', '', 'Islam', 'belum menikah', 'Son', 'WNI', '2017-03-30', 'umar@gmail.com', '', '', '', '', '616eb46194737dd044767d85ac917acd.jpg', '616eb46194737dd044767d85ac917acd_thumb.jpg', '2017-03-04', '0000-00-00'),
(25, '1234112113', 'Hamka ZF', 'Jakarta', '2015-05-03', 'Laki-laki', 'B', '', '', '', '', '', '', 'Islam', 'belum menikah', 'Son 2', 'WNI', '2017-03-22', 'hamka@gmail.com', '', '', '', '', 'd7027677d15d09dbfd17e1f3a14df1bb.jpg', 'd7027677d15d09dbfd17e1f3a14df1bb_thumb.jpg', '2017-03-04', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `frm_groups`
--

CREATE TABLE `frm_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frm_groups`
--

INSERT INTO `frm_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'editor', 'Editor CRUD');

-- --------------------------------------------------------

--
-- Table structure for table `frm_users`
--

CREATE TABLE `frm_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frm_users`
--

INSERT INTO `frm_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$Rz0YTDta8JJcw9YTGvUjSeNLMHBbHkusd/z2zGOyOJCEuEWGA0VHG', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1488715908, 1, 'Super', 'Admin', '', '081802798002'),
(2, '::1', 'member@gmail.com', '$2y$08$WmwGt9ZzG7epQ8JTr2hIROFQ8x4dTeiRqpu4457NGeffkiI8wEljC', NULL, 'member@gmail.com', NULL, NULL, NULL, NULL, 1488635218, 1488635503, 1, 'Member', '', '', '085717527494'),
(3, '::1', 'editor@gmail.com', '$2y$08$YVoywUBKdld3hPLSKJw3AuQT9RrOWXoAAX1ui/VaVPk/1USoNEr9S', NULL, 'editor@gmail.com', NULL, NULL, NULL, NULL, 1488635475, NULL, 1, 'Editor', '', '', '085719206091');

-- --------------------------------------------------------

--
-- Table structure for table `frm_users_groups`
--

CREATE TABLE `frm_users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frm_users_groups`
--

INSERT INTO `frm_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frm_data_ktp`
--
ALTER TABLE `frm_data_ktp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `frm_groups`
--
ALTER TABLE `frm_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frm_users`
--
ALTER TABLE `frm_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frm_users_groups`
--
ALTER TABLE `frm_users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frm_data_ktp`
--
ALTER TABLE `frm_data_ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `frm_groups`
--
ALTER TABLE `frm_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `frm_users`
--
ALTER TABLE `frm_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `frm_users_groups`
--
ALTER TABLE `frm_users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `frm_users_groups`
--
ALTER TABLE `frm_users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `frm_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `frm_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
