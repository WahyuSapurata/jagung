-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2022 at 11:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jagung`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_jagung` int(11) NOT NULL,
  `id_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `total` varchar(125) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `nomor` varchar(125) NOT NULL,
  `jenis_kelamin` varchar(125) NOT NULL,
  `koordinat` varchar(125) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `alamat_lengkap` varchar(125) NOT NULL,
  `id_jagung` int(11) NOT NULL,
  `qty` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL,
  `id_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gambar1`
--

CREATE TABLE `gambar1` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar1`
--

INSERT INTO `gambar1` (`id_gambar`, `gambar`) VALUES
(1, '1652976687_5d05e6ca4005a14d49f7.jpg'),
(2, '1652976709_beb3e029ff5106240a5c.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gambar2`
--

CREATE TABLE `gambar2` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar2`
--

INSERT INTO `gambar2` (`id_gambar`, `gambar`) VALUES
(1, '1652976720_e8dcd5710f24b958642e.jpg'),
(2, '1652976733_b7476b2541f4fac735e5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `jagung`
--

CREATE TABLE `jagung` (
  `id_jagung` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` varchar(125) NOT NULL,
  `tersedia` varchar(125) NOT NULL,
  `foto_jagung` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis_kategori` varchar(125) NOT NULL,
  `foto` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `otp` varchar(125) NOT NULL,
  `kondisi` varchar(125) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `nama`, `email`, `username`, `password`, `otp`, `kondisi`) VALUES
(1, 'admin', 'www.admin@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '1111', '1'),
(2, 'wahyu', 'wh260200@gmail.com', 'wahyu123', '81dc9bdb52d04dc20036dbd8313ed055', '53071', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `id_lawan` int(11) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL,
  `kondisi` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_login`, `id_lawan`, `isi`, `waktu`, `kondisi`) VALUES
(32, 1, 2, 'p', '2022-05-21 15:00:15', 2),
(34, 2, 1, 'sffs', '2022-05-21 15:32:10', 1),
(36, 1, 2, 'r3r3', '2022-05-21 16:05:00', 2),
(37, 1, 2, 'qwd', '2022-05-21 17:02:18', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_jagung` (`id_jagung`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`),
  ADD KEY `id_jagung` (`id_jagung`);

--
-- Indexes for table `gambar1`
--
ALTER TABLE `gambar1`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `gambar2`
--
ALTER TABLE `gambar2`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `jagung`
--
ALTER TABLE `jagung`
  ADD PRIMARY KEY (`id_jagung`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_login` (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar1`
--
ALTER TABLE `gambar1`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gambar2`
--
ALTER TABLE `gambar2`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jagung`
--
ALTER TABLE `jagung`
  MODIFY `id_jagung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_jagung`) REFERENCES `jagung` (`id_jagung`) ON DELETE CASCADE;

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_jagung`) REFERENCES `jagung` (`id_jagung`) ON DELETE CASCADE;

--
-- Constraints for table `jagung`
--
ALTER TABLE `jagung`
  ADD CONSTRAINT `jagung_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
