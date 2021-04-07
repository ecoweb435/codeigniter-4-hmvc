-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 03:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_web_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_controllers`
--

CREATE TABLE `tb_controllers` (
  `id` int(10) NOT NULL,
  `rand` varchar(40) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `n_slug` varchar(120) NOT NULL,
  `nama_controller` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `jenis` int(5) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_controllers`
--

INSERT INTO `tb_controllers` (`id`, `rand`, `nama`, `n_slug`, `nama_controller`, `url`, `jenis`, `status`, `created_at`, `updated_at`) VALUES
(1, '9600bc08e29ec6488ccea8fef353dfdfb2cdd447', 'Data Controller', 'data-controller', 'Data_controller', 'admin-data-controller', 1, 0, '2021-04-03 14:24:10', '2021-04-03 14:24:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_controllers`
--
ALTER TABLE `tb_controllers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_controllers`
--
ALTER TABLE `tb_controllers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
