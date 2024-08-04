-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 04:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipsmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesan`
--

CREATE TABLE `detail_pesan` (
  `id_detail` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_padi` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dt_admin`
--

CREATE TABLE `dt_admin` (
  `id` varchar(8) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `pass` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dt_admin`
--

INSERT INTO `dt_admin` (`id`, `nama`, `id_admin`, `pass`) VALUES
('admin', 'Iqbal', 4457, 'iqbal0967'),
('admin', 'A Dafa F', 4459, 'Daf12210991@'),
('admin', 'Eni R', 4462, 'restari08'),
('admin', 'Aurelia SA', 4463, 'aul0000'),
('admin', 'Ira Amyroh', 4464, 'ira12345');

-- --------------------------------------------------------

--
-- Table structure for table `padi`
--

CREATE TABLE `padi` (
  `id_padi` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `harga_beli` int(11) NOT NULL,
  `foto` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `padi`
--

INSERT INTO `padi` (`id_padi`, `tanggal`, `deskripsi`, `alamat`, `harga_beli`, `foto`) VALUES
(12, '2024-07-25', 'beras merah (10kg)', 'kerohok 2', 50000, 'download (1) mearah.jpg'),
(14, '2024-07-25', 'beras putih 5kg', 'Kerohok 2', 49999, 'download.jpg'),
(15, '2024-07-30', 'Beras Geulis 15kg', 'Pontianak', 70000, 'si geulis.jpeg'),
(16, '2024-07-31', 'Beras Wangi (berkualitas) 20kg', 'Pontianak Barat', 65000, 'wamgi.jpg'),
(17, '2024-07-30', 'AKAR TANI (Beras 19kg)', 'Jakarta', 80000, 'padi 1.jpeg'),
(18, '2024-07-30', 'Beras Merah 5kg', 'Singkawang', 73000, 'beras merah.jpg'),
(19, '2024-07-30', 'KOKOKU (beras putih berat 14kg)', 'Singkawang', 59999, 'images kokoku.jpg'),
(21, '2024-07-30', 'Beras Organik Kepala Super', 'Pontianak', 10000, 'Cuplikan layar 2023-05-29 005531.png');

-- --------------------------------------------------------

--
-- Table structure for table `panen`
--

CREATE TABLE `panen` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis_padi` varchar(60) DEFAULT NULL,
  `hasil_panen` int(11) DEFAULT NULL,
  `hari` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panen`
--

INSERT INTO `panen` (`id`, `tanggal`, `jenis_padi`, `hasil_panen`, `hari`, `berat`) VALUES
(19, '2024-05-15', 'padi ketan', 6, 93, 25),
(20, '2024-05-16', 'Padi Unggul', 7, 98, 28),
(21, '2024-04-08', 'Padi Hibrida', 5, 90, 38),
(24, '2024-06-11', 'Padi Lokal', 10, 94, 30),
(25, '2024-06-13', 'Padi Beras Merah', 7, 90, 28);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` varchar(30) DEFAULT NULL,
  `id_padi` varchar(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga_beli` int(20) NOT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `transaksi` varchar(30) DEFAULT NULL,
  `proses` varchar(20) DEFAULT NULL,
  `nomorhp` varchar(12) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `id_padi`, `tanggal`, `deskripsi`, `harga_beli`, `jumlah`, `transaksi`, `proses`, `nomorhp`, `alamat`) VALUES
(47, '12210991', '12', '2024-08-03', 'beras merah (10kg)', 92000, 1, 'QRIS', 'pending', '082157308640', 'Desa Jeruju Besar, Jl. Jeruju Besar (Rumah di kiri bukan sebrang parit), Sungai Kakap, Kab. Kubu Raya'),
(48, '12210991', '14', '2024-08-03', 'beras putih 5kg', 141998, 2, 'MANDIRI Virtual Account', 'pending', '082157308640', 'Desa Jeruju Besar, Jl. Jeruju Besar (Rumah di kiri bukan sebrang parit), Sungai Kakap, Kab. Kubu Raya'),
(49, '12210991', '14', '2024-08-03', 'beras putih 5kg', 91999, 1, 'QRIS', 'pending', '082157308640', 'Desa Jeruju Besar, Jl. Jeruju Besar (Rumah di kiri bukan sebrang parit), Sungai Kakap, Kab. Kubu Raya'),
(50, '12210991', '15', '2024-08-03', 'Beras Geulis 15kg', 112000, 1, 'BNI Virtual Account', 'pending', '082157308640', 'Desa Jeruju Besar, Jl. Jeruju Besar (Rumah di kiri bukan sebrang parit), Sungai Kakap, Kab. Kubu Raya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user`, `nama`, `pass`) VALUES
(1223, '12210991', 'Dafa', 'dafa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesan`
--
ALTER TABLE `detail_pesan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_pesan_fr` (`id_pesan`),
  ADD KEY `id_padi_fr` (`id_padi`);

--
-- Indexes for table `dt_admin`
--
ALTER TABLE `dt_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `padi`
--
ALTER TABLE `padi`
  ADD PRIMARY KEY (`id_padi`),
  ADD KEY `harga_beli_fr` (`harga_beli`);

--
-- Indexes for table `panen`
--
ALTER TABLE `panen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_user_fr` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_fr` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pesan`
--
ALTER TABLE `detail_pesan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dt_admin`
--
ALTER TABLE `dt_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4465;

--
-- AUTO_INCREMENT for table `padi`
--
ALTER TABLE `padi`
  MODIFY `id_padi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `panen`
--
ALTER TABLE `panen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesan`
--
ALTER TABLE `detail_pesan`
  ADD CONSTRAINT `detail_pesan_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id_pesan`),
  ADD CONSTRAINT `detail_pesan_ibfk_2` FOREIGN KEY (`id_padi`) REFERENCES `padi` (`id_padi`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
