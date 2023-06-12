-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 02:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id` int(11) NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `noisbn` varchar(64) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `pengarang` varchar(64) NOT NULL,
  `tahunterbit` varchar(16) NOT NULL,
  `penerbit` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id`, `kategori`, `noisbn`, `judul`, `pengarang`, `tahunterbit`, `penerbit`) VALUES
(1, 'Novel', '999', 'aku tak membenci hujan', 'green', '2020', 'swing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'puni', 'puni@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
