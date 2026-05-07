-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2026 at 02:02 AM
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
-- Database: `movieku`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(5) NOT NULL,
  `judul_film` varchar(100) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `jam_tayang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `genre`, `rate`, `harga`, `durasi`, `jam_tayang`, `deskripsi`, `gambar`) VALUES
(1, 'Enola Holmes', 'Action', '8.6', 70000, '129 menit', '20.00', 'Aksi cerdik adik remaja Sherlock Holmes dalam petualangan mencari ibunya yang hilang dan memecahkan konspirasi besar.', 'posterfilm_1.jpg'),
(2, 'Wednesday', 'Fiction', '8.2', 100000, '60 menit', '21.00', 'Gadis remaja misterius dengan kemampuan psikis yang mencoba mengungkap misteri pembunuhan berantai di Akademi Nevermore.', 'posterfilm_2.jpg'),
(3, 'Queen\'s Gambit', 'Drama', '8.7', 50000, '60 menit', '17.00', 'Perjalanan seorang yatim piatu jenius catur yang berjuang melawan trauma dan kecanduan demi menjadi pemain terbaik di dunia', 'posterfilm_3.jpg'),
(4, 'Mencuri Raden Saleh', 'History', '8.0', 50000, '154 menit', '14.00', 'Sekelompok anak muda amatir merencanakan pencurian terbesar abad ini mencuri lukisan bersejarah karya Raden Saleh di Istana Negara.', 'posterfilm_4.jpg'),
(5, 'Home Sweet Loan', 'Drama', '8.1', 50000, '105 menit', '18.00', 'Perjuangan seorang pekerja kelas menengah yang terjebak dalam dilema sandwich generation demi mewujudkan impian memiliki rumah sendiri.', 'posterfilm_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(5) NOT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `id_film` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `jumlah`, `tanggal`, `nama_pemesan`, `email`, `id_user`, `id_film`) VALUES
(1, 12, NULL, 'Audrey', 'senjayaaudrey@gmail.com', NULL, NULL),
(7, 112, '2026-05-07', 'Audrey', 'senjayaaudrey@gmail.com', 1, 3),
(8, 12, '2026-05-07', 'AUDREY FRI SHEILA THIFA SENJAYA', 'senjayaaudrey@gmail.com', 1, 2),
(9, 1, '2026-05-07', 'efdgc', 'senjayaaudrey@gmail.com', 1, 5),
(11, 5, '2026-05-07', 'hani', 'hani@gmail.com', 4, 5),
(12, 1, '2026-05-07', 'upin', 'upin@gmail.com', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `id_user`) VALUES
('audrey', '1', 1),
('audrey1', '12', 2),
('upin', '123', 3),
('opo', 'iyo', 4),
('ipin', 'upun', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fkiduser` (`id_user`),
  ADD KEY `fkidfilm` (`id_film`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fkidfilm` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `fkiduser` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
