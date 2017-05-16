-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 07:39 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(33) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id_admin`, `nama_admin`) VALUES
('admin', 'admin', 1, 'Si Mimin');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `isi_kegiatan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `isi_kegiatan`, `tanggal`, `lokasi`) VALUES
(1, 'Tes Kegiatan 1', '2017-03-30', 'Fakultas 1'),
(2, 'Tes Kegiatan 2', '2017-03-31', 'Fakultas 2'),
(3, 'Tes Kegiatan 3', '2017-04-03', 'UMY');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_berita` varchar(50) NOT NULL,
  `gambar_berita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `isi_berita`, `gambar_berita`) VALUES
(1, 'Tes Berita 1', '2017-03-30', 'ini adalah berita 1. ini adalah berita 1. ini ada', 'prewed.jpg'),
(2, 'Tes Berita 2', '2017-03-30', 'ini adalah berita 2. ini adalah berita 2. ', ''),
(3, 'Berita Barus', '2017-03-30', '<p>ini tes berita baru saja. ini tes berita baru s', 'pittsburghstudio-13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nik` varchar(22) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nik`, `nama`, `jabatan`, `alamat`, `no_hp`, `email`, `username`, `password`) VALUES
('12345', 'M. Alwi', 'Dosen Tetap', 'jl. Yogyakarta', '0876683847', 'alwi@gmail.com', 'alwi', 'alwi'),
('54321', 'Lita', 'Dosen Honor', 'jl. bantul', '0876788', 'lita@gmail.com', 'lita', 'lita');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_penelitian`
--

CREATE TABLE `hasil_penelitian` (
  `id_hasil_penelitian` int(11) NOT NULL,
  `nik` varchar(22) NOT NULL,
  `judul` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(12) NOT NULL,
  `file` varchar(100) NOT NULL,
  `isi_hasil_penelitian` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_penelitian`
--

INSERT INTO `hasil_penelitian` (`id_hasil_penelitian`, `nik`, `judul`, `tanggal`, `lokasi`, `file`, `isi_hasil_penelitian`) VALUES
(2, '12345', 'Penelitian 1', '2017-03-30', 'Sleman', 'cetak_semua_barcode.pdf', '<p>tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja tes <strong>penelitian </strong>1 saja</p>\r\n'),
(3, '12345', 'Penelitian 2', '2017-03-30', 'Yogyakarta', '', '<p>ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2. ini adalah penelitian ke dua atau 2.</p>\r\n'),
(5, '12345', 'Overclocking', '2017-03-30', 'Amplaz', 'blue_background.jpg', '<p>overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1 overclocking tingkat 1</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `nik` varchar(22) NOT NULL,
  `tanggal` date NOT NULL,
  `id_hasil_penelitian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `nik`, `tanggal`, `id_hasil_penelitian`) VALUES
(1, '12345', '2017-03-30', 5);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nik` varchar(22) NOT NULL,
  `tanggal` date NOT NULL,
  `id_hasil_penelitian` int(11) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nik`, `tanggal`, `id_hasil_penelitian`, `komentar`) VALUES
(2, '12345', '2017-03-30', 2, 'ok terimakasih'),
(3, '12345', '2017-03-30', 2, 'cek tes saja'),
(4, '54321', '2017-03-30', 3, 'bagus itu, lanjutkan pak'),
(5, '54321', '2017-03-30', 2, 'lanjut terus dan semangat pak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `hasil_penelitian`
--
ALTER TABLE `hasil_penelitian`
  ADD PRIMARY KEY (`id_hasil_penelitian`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_hasil_penelitian` (`id_hasil_penelitian`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_hasil_penelitian` (`id_hasil_penelitian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hasil_penelitian`
--
ALTER TABLE `hasil_penelitian`
  MODIFY `id_hasil_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_penelitian`
--
ALTER TABLE `hasil_penelitian`
  ADD CONSTRAINT `hasil_penelitian_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `dosen` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `dosen` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`id_hasil_penelitian`) REFERENCES `hasil_penelitian` (`id_hasil_penelitian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `dosen` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_hasil_penelitian`) REFERENCES `hasil_penelitian` (`id_hasil_penelitian`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
