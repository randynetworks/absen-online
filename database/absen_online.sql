-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2020 at 06:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_access_menu`
--

CREATE TABLE `admin_access_menu` (
  `id` int(11) NOT NULL,
  `role` int(1) NOT NULL,
  `menu_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_access_menu`
--

INSERT INTO `admin_access_menu` (`id`, `role`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 8),
(5, 2, 9),
(6, 2, 10),
(7, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `menu`) VALUES
(1, 'Dashboard Super Admin'),
(2, 'Admin Management'),
(3, 'Report'),
(8, 'Dashboard Admin'),
(9, 'Member Management'),
(10, 'Absent Management'),
(11, 'menu');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sub_menu`
--

CREATE TABLE `admin_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_sub_menu`
--

INSERT INTO `admin_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard Administrator', '/superadmin/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(2, 8, 'Dashboard Admin', '/admin/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(3, 2, 'Manage Administrator', '/superadmin/administrator', 'fas fa-fw fa-user', 1),
(4, 2, 'Manage Admin Ormawa', '/superadmin/admin-ormawa', 'fas fa-fw fa-users-cog', 1),
(5, 3, 'Manage Report Absen', '/superadmin/report-absen', 'fas fa-fw fa-file', 1),
(6, 9, 'Admin Profile', '/admin/profile', 'fas fa-fw fa-user', 1),
(7, 9, 'Data Member', '/admin/member', 'fas fa-users', 1),
(8, 10, 'Input Absent', '/admin/absent-input', 'fas fa-hand-paper', 1),
(9, 10, 'Recent Absent', '/admin/recent-absent', 'fas fa-history', 1),
(10, 11, 'Menu Management', '/superadmin/menu', 'fas fa-fw fa-folder', 1),
(11, 11, 'Sub Menu Management', '/superadmin/sub-menu', 'fas fa-folder-open', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_access_menu`
--
ALTER TABLE `admin_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_access_menu`
--
ALTER TABLE `admin_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
