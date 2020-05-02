-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 09:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_silab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset`
--

CREATE TABLE `tb_aset` (
  `kode_aset` int(20) NOT NULL,
  `id_lokasi` int(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `spesifikasi` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aset`
--

INSERT INTO `tb_aset` (`kode_aset`, `id_lokasi`, `nama_barang`, `spesifikasi`, `jumlah`, `satuan`, `keterangan`, `foto`) VALUES
(1, 1, 'Komputer', 'Lenovo IdeaCenter All In One', 24, 'Buah', 'Baik', 'lenovo.jpg'),
(3, 1, 'Projector', 'Projector warna putih', 1, 'Buah', 'Baik', 'projector.png'),
(4, 1, 'rak', 'rak aluminium', 1, 'Buah', 'Baik', 'rakbesi.jpg'),
(5, 1, 'Stavolt', 'Stabiliser listrik', 3, 'Buah', 'Baik', 'stabiliser.jpg'),
(6, 1, 'papan tulis', 'papan tulis putih', 1, 'Buah', 'Baik', 'papan.jpg'),
(7, 1, 'Ac', 'Ac Panassonic', 4, 'Buah', 'Baik', 'ac.jpg'),
(8, 4, 'Meja', 'Meja Bundar', 5, 'Buah', 'Baik', 'mejabundar.jpg'),
(9, 5, 'Piring', 'Piring bundar Putih', 50, 'Buah', 'Baik', 'piring.jpg'),
(10, 3, 'Patung', 'Patung Busana', 5, 'Buah', 'Baik', 'manekin.jpg'),
(11, 1, 'Kursi', 'Kursi berwarna biru', 31, 'Buah', 'Baik', 'kursi biru.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(20) NOT NULL,
  `id_prodi` int(20) NOT NULL,
  `nama_lab` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `id_prodi`, `nama_lab`) VALUES
(1, 1, 'Lab 2 MI'),
(2, 4, 'Lab LCI'),
(3, 7, 'Lab Tata Busana'),
(4, 7, 'Lab Tata Boga'),
(5, 7, 'Lab Tata Hidang'),
(6, 1, 'Lab 1 MI'),
(7, 1, 'Lab Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelaporan`
--

CREATE TABLE `tb_pelaporan` (
  `id_laporan` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `tgl_lapor` date NOT NULL,
  `kode_aset` int(20) NOT NULL,
  `deskripsi_laporan` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggapan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(20) NOT NULL,
  `nama_prodi` varchar(200) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `fakultas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`, `jurusan`, `fakultas`) VALUES
(1, 'Manajemen Informatika', 'Teknik Informatika', 'Teknik dan Kejuruan'),
(2, 'Sistem Informasi', 'Teknik Informatika', 'Teknik dan Kejuruan'),
(3, 'Ilmu komputer', 'Teknik Informatika', 'Teknik dan Kejuruan'),
(4, 'Pendidikan Teknik Informatika', 'Teknik Informatika', 'Teknik dan kejuruan'),
(5, 'Pendidikan Teknik Mesin', 'Teknologi Industri', 'Teknik Informatika'),
(6, 'Pendidikan Teknik Elektro', 'Teknologi Industri', 'Teknik Informatika'),
(7, 'Pendidikan Kesejahteraan Keluarga', 'Teknologi Industri', 'Teknik dan Kejuruan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `password`, `jabatan`) VALUES
(4, 'swastini@undiksha.ac.id', 'a1d823ef9b950e3ce25f4f1914ddd4ee', 'Kalaboran'),
(7, 'Luh Sintarini', '3a5645278aba79d828b2b921b29c5f07', 'Kalaboran'),
(8, 'Luh Kinasih', 'b80b49d535bacc215983fc6b3c40b096', 'Kalaboran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aset`
--
ALTER TABLE `tb_aset`
  ADD PRIMARY KEY (`kode_aset`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_pelaporan`
--
ALTER TABLE `tb_pelaporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aset`
--
ALTER TABLE `tb_aset`
  MODIFY `kode_aset` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pelaporan`
--
ALTER TABLE `tb_pelaporan`
  MODIFY `id_laporan` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
