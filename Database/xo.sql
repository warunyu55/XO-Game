-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 09:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gameplay`
--

CREATE TABLE `tb_gameplay` (
  `id` int(11) NOT NULL,
  `r_point` varchar(255) NOT NULL,
  `r_table` int(11) NOT NULL,
  `r_win` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gameplay`
--

INSERT INTO `tb_gameplay` (`id`, `r_point`, `r_table`, `r_win`) VALUES
(2, '[\"32\",\"31\",\"22\",\"21\",\"12\"]', 3, 1),
(3, '[\"42\",\"31\",\"41\",\"32\",\"43\",\"33\",\"44\"]', 4, 1),
(4, '[\"21\",\"11\",\"22\",\"12\",\"23\",\"13\",\"24\",\"14\",\"25\"]', 5, 1),
(5, '[\"51\",\"41\",\"43\",\"52\",\"42\",\"33\",\"31\",\"21\",\"22\",\"32\",\"23\",\"24\",\"25\",\"34\",\"44\",\"35\",\"55\",\"45\",\"54\",\"53\",\"14\",\"13\",\"11\",\"12\",\"15\"]', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gameplay`
--
ALTER TABLE `tb_gameplay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gameplay`
--
ALTER TABLE `tb_gameplay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
