-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 02:38 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `kd_anggota` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`kd_anggota`, `nama_lengkap`, `jenis_kelamin`, `kelas`, `jabatan`, `no_telp`, `email`, `alamat`) VALUES
(1, 'yoga maruf ramadan', 'Laki-laki', 'XII RPL 1', 'Ketua', '085876410768', 'ramadan@gmail.com', 'kasongan bangunjiwo kasihan bantul');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_kunjungan`
--

CREATE TABLE `tb_buku_kunjungan` (
  `id_bk` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku_kunjungan`
--

INSERT INTO `tb_buku_kunjungan` (`id_bk`, `nama_lengkap`, `kelas`, `keterangan`) VALUES
(1, 'yoga maruf ', 'XII RPL 1', 'luka lecet'),
(2, 'Feranda', 'XII AK 4', 'pusing'),
(3, 'ptravahomebase', 'XII PS', 'pingsan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `nama_alat` varchar(40) NOT NULL,
  `kegunaan` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `jenis_alat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`id_inventaris`, `nama_alat`, `kegunaan`, `jumlah`, `jenis_alat`) VALUES
(1, 'Termometer', 'untuk mengukur suhu tubuh pasien', 4, 'Alat medis'),
(2, 'Tempat tidur', 'memeriksa dan istirahat pasien yang sakit', 3, 'Alat non medis'),
(3, 'Timbangan Badan', 'alat untuk mengukur berat badan siswa', 2, 'Alat non medis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `kd_obat` int(11) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `fungsi` varchar(50) NOT NULL,
  `jenis_obat` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`kd_obat`, `nama_obat`, `fungsi`, `jenis_obat`, `jumlah`) VALUES
(1, 'Antimo', 'Mabuk kendaraan', 'Cair', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id_pengurus`, `nama_lengkap`, `jabatan`) VALUES
(1, 'yoga maruf ', 'Ketua'),
(2, 'Rava prasetyo', 'Wakil ketua');

-- --------------------------------------------------------

--
-- Table structure for table `tb_proker`
--

CREATE TABLE `tb_proker` (
  `id_proker` int(11) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_proker`
--

INSERT INTO `tb_proker` (`id_proker`, `tanggal`, `kegiatan`, `keterangan`) VALUES
(1, '2018-12-12', 'Keakraban', 'Terlaksana'),
(2, '2018-12-29', 'Rapat', 'Ditunda'),
(3, '2018-12-02', 'Piket', 'Terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `level` enum('admin','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `no_telp`, `foto`, `level`) VALUES
(1, 'febri', 'b77c982140e73c700aa7a70143ce4b89', 'ptravahomebase', 'ptravahomebase@gmail.com', '085725891209', '141.jpg', 'admin'),
(2, 'siswa', 'bcd724d15cde8c47650fda962968f102', 'siswa', 'siswa@gmail.com', '081234567980', 'user711.jpg', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`kd_anggota`);

--
-- Indexes for table `tb_buku_kunjungan`
--
ALTER TABLE `tb_buku_kunjungan`
  ADD PRIMARY KEY (`id_bk`);

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `tb_proker`
--
ALTER TABLE `tb_proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `kd_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_buku_kunjungan`
--
ALTER TABLE `tb_buku_kunjungan`
  MODIFY `id_bk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `kd_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_proker`
--
ALTER TABLE `tb_proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
