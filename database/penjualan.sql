-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 04:06 PM
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
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga_modal` int(20) NOT NULL,
  `harga_jual` int(20) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_kategori`, `id_supplier`, `stok`, `harga_modal`, `harga_jual`, `tanggal_masuk`) VALUES
(14, 'Kipas Angin', 3, 1, 968, 120000, 140000, '2022-07-21'),
(15, 'AK-47', 7, 1, 19, 100000000, 120000000, '2022-07-22'),
(16, 'Roti', 1, 1, 951, 2000, 3000, '2022-07-24'),
(17, 'Coca Cola', 2, 1, 185, 3000, 5000, '2022-07-24'),
(25, 'Kerupuk', 1, 1, 19, 1000, 2000, '2022-07-24'),
(31, 'Laptop', 3, 3, 20, 5000000, 10000000, '2022-07-25'),
(36, 'Pisau', 5, 1, 35, 3000, 5000, '2022-07-25'),
(39, 'Semen', 8, 3, 29, 60000, 65000, '2022-07-26'),
(40, 'Batu Bata', 8, 3, 1000, 500, 1000, '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(11) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_telp` char(13) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `id_perusahaan`, `alamat`, `nomor_telp`, `email`) VALUES
(1, 'Indomaret rumbai', 1, 'jl.paus', '0834234232342', 'indmrtrumbai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(100) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nomor_telp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `id_cabang`, `alamat`, `jenis_kelamin`, `nomor_telp`) VALUES
(1, 'aldous', 1, 'jl.kartika', 'Laki-Laki', '0812343245'),
(2, 'raja', 1, 'jl.rusak', 'Laki-Laki', '087363343243');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Alat Elektronik'),
(5, 'Alat Dapur'),
(7, 'Senjata Api'),
(8, 'Bahan Material');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `nomor_telp` char(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `nomor_telp`, `alamat`, `jenis_kelamin`) VALUES
(1, 'nana', '0832537267324', 'jl.bawahtanah', 'Perempuan'),
(2, 'rudi', '0832873483746', 'jl.harapan', 'Laki-Laki'),
(3, 'budi', '0823123423432', 'jl.bagus', 'Laki-Laki'),
(6, 'Non Member', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode_pembayaran` int(11) NOT NULL,
  `nama_metode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_metode_pembayaran`, `nama_metode`) VALUES
(2, 'Bayar Tunai'),
(3, 'Paypal'),
(4, 'Dana');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_telp` char(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_berdiri` date NOT NULL,
  `npwp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `nomor_telp`, `email`, `tanggal_berdiri`, `npwp`) VALUES
(1, 'Indomaret', 'jl.riau', '0823452134543', 'indomaret@gmail.com', '1996-06-18', '212');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `nomor_telp` char(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_rekening` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `nomor_telp`, `alamat`, `nomor_rekening`) VALUES
(1, 'akbar', '0811223344556', 'jl.kebenaran', '1212345678'),
(2, 'zaki', '0832873483746', 'jl.sudirman', '1234567432'),
(3, 'sova', '0812321234543', 'jl.langit', '8934209284');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_inv` varchar(30) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_metode_pembayaran` int(11) NOT NULL,
  `waktu_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama_pembeli` varchar(100) NOT NULL,
  `ppn` varchar(10) NOT NULL,
  `diskon` varchar(10) NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `status` enum('selesai','proses','.') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_inv`, `id_kasir`, `id_member`, `id_metode_pembayaran`, `waktu_transaksi`, `nama_pembeli`, `ppn`, `diskon`, `total_bayar`, `status`) VALUES
(17, '18/2/2/6/VII/VIII/XXII', 2, 6, 2, '2022-08-07 06:14:05', 'Jane', '2', '0', '571200', 'selesai'),
(20, '20/1/4/6/VII/VIII/XXII', 1, 6, 4, '2022-08-07 12:21:07', 'Mark', '2', '0', '20837580', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga_jual` varchar(20) NOT NULL,
  `total_harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi`, `id_barang`, `jumlah`, `harga_jual`, `total_harga`) VALUES
(28, 16, 14, '2', '140000', '280000'),
(31, 14, 16, '2', '3000', '6000'),
(36, 14, 15, '2', '120000000', '240000000'),
(38, 17, 14, '4', '140000', '560000'),
(39, 20, 16, '3', '3000', '9000'),
(40, 20, 31, '2', '10000000', '20000000'),
(41, 20, 14, '3', '140000', '420000');

--
-- Triggers `transaksi_detail`
--
DELIMITER $$
CREATE TRIGGER `kurang_stok` AFTER INSERT ON `transaksi_detail` FOR EACH ROW BEGIN

UPDATE barang SET stok = stok - NEW.jumlah

WHERE id_barang = NEW.id_barang;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$4BoY9HFXYLSe9Jqt/B20beq.qJMXwZx3bkCsEIWK.Vzhtyw8sA.r.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`,`id_supplier`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`),
  ADD KEY `id_cabang` (`id_cabang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metode_pembayaran`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_kasir` (`id_kasir`,`id_member`,`id_metode_pembayaran`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`,`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id_metode_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
