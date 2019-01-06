-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 07:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaplikasitebakgambar`
--

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi_gambar`
--

CREATE TABLE `deskripsi_gambar` (
  `id_deskripsi` int(11) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `deskripsi` varchar(20) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi_gambar`
--

INSERT INTO `deskripsi_gambar` (`id_deskripsi`, `no_soal`, `deskripsi`, `kategori`) VALUES
(1, 1, 'tempat', 2),
(2, 2, 'makan', 2),
(3, 3, 'corak', 2),
(4, 4, 'aku', 2),
(5, 1, 'melintas', 4),
(6, 2, 'berhenti', 4),
(7, 3, 'pengendara', 4),
(8, 4, 'aku', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gambar_jawaban`
--

CREATE TABLE `gambar_jawaban` (
  `id_gambar` int(11) NOT NULL,
  `deskripsi` varchar(20) NOT NULL,
  `kategori` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_jawaban`
--

INSERT INTO `gambar_jawaban` (`id_gambar`, `deskripsi`, `kategori`, `path`, `nama`) VALUES
(1, 'tempat', 2, 'https://img.icons8.com/color/480/000000/creek.png', 'sungai'),
(2, 'tempat', 2, 'https://img.icons8.com/color/480/000000/cave.png', 'gua'),
(3, 'tempat', 2, 'https://img.icons8.com/color/480/000000/nature.png', 'hutan'),
(4, 'tempat', 2, 'https://img.icons8.com/color/480/000000/forest.png', 'pohon'),
(5, 'makan', 2, 'https://img.icons8.com/color/480/000000/thanksgiving.png', 'daging'),
(6, 'makan', 2, 'https://img.icons8.com/color/480/000000/ladybird.png', 'serangga'),
(7, 'makan', 2, 'https://img.icons8.com/color/480/000000/fish-food.png', 'ikan'),
(8, 'makan', 2, 'https://img.icons8.com/color/480/000000/natural-food.png', 'daun'),
(9, 'corak', 2, 'source/image/corak-jerapah.jpg', 'corak jerapah'),
(10, 'corak', 2, 'source/image/corak-harimau.jpg', 'corak harimau'),
(11, 'corak', 2, 'source/image/corak-zebra.jpg', 'corak zebra'),
(12, 'corak', 2, 'source/image/corak-macan.jpg', 'corak macan'),
(13, 'aku', 2, 'source/image/zebra.jpg', 'zebra'),
(14, 'aku', 2, 'source/image/jerapah.jpg', 'jerapah'),
(15, 'aku', 2, 'source/image/keledai.jpg', 'keledai'),
(16, 'aku', 2, 'source/image/kuda.jpg', 'kuda'),
(17, 'melintas', 4, 'source/image/rel_kereta.png', 'rel kereta'),
(18, 'melintas', 4, 'source/image/langit.png', 'udara'),
(19, 'melintas', 4, 'source/image/laut.png', 'air'),
(20, 'melintas', 4, 'source/image/darat.jpg', 'jalan raya'),
(21, 'berhenti', 4, 'source/image/halte.jpeg', 'halte'),
(22, 'berhenti', 4, 'source/image/stasiun.jpeg', 'stasiun'),
(23, 'berhenti', 4, 'source/image/bandara.jpeg', 'bandara'),
(24, 'berhenti', 4, 'source/image/parkiran.jpeg', 'parkiran'),
(25, 'pengendara', 4, 'source/image/pilot.jpg', 'pilot'),
(26, 'pengendara', 4, 'source/image/polisi.jpg', 'polisi'),
(27, 'pengendara', 4, 'source/image/tentara.jpg', 'tentara'),
(28, 'pengendara', 4, 'source/image/nahkoda.jpg', 'nahkoda'),
(29, 'aku', 4, 'source/image/kapal.jpg', 'kapal'),
(30, 'aku', 4, 'source/image/kereta.jpg', 'kereta'),
(31, 'aku', 4, 'source/image/bis.jpg', 'bis'),
(32, 'aku', 4, 'source/image/pesawat.jpg', 'pesawat');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'makanan'),
(2, 'hewan'),
(3, 'tumbuhan'),
(4, 'kendaraan');

-- --------------------------------------------------------

--
-- Table structure for table `tbsoal`
--

CREATE TABLE `tbsoal` (
  `id_soal` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `jawaban` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsoal`
--

INSERT INTO `tbsoal` (`id_soal`, `deskripsi`, `jawaban`, `kategori`, `jenis`, `no_soal`, `nama_jenis`) VALUES
(1, 'Dimanakah Aku Tinggal?', 'hutan', 2, 1, 1, 'jerapah'),
(2, 'Apakah Makanan Aku?', 'daun', 2, 1, 2, 'jerapah'),
(3, 'Apa Corak Tubuh Aku?', 'corak jerapah', 2, 1, 3, 'jerapah'),
(4, 'Manakah Aku?', 'jerapah', 2, 1, 4, 'jerapah'),
(5, 'Aku Punya Video Buat Kamu', 'https://www.youtube.com/embed/Q1gSh-mGYCk?rel=0', 2, 1, 5, 'jerapah'),
(7, 'Dimanakah Aku Melintas?', 'udara', 4, 1, 1, 'pesawat'),
(8, 'Dimana Aku Biasa Berhenti?', 'bandara', 4, 1, 2, 'pesawat'),
(9, 'Yang Manakah Aku?', 'pesawat', 4, 1, 4, 'pesawat'),
(10, 'Aku Dikendarai Oleh Seorang?', 'pilot', 4, 1, 3, 'pesawat'),
(11, 'Aku Punya Video Buat Kamu', 'https://www.youtube.com/embed/Fa4tbTgcrM4', 4, 1, 5, 'pesawat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deskripsi_gambar`
--
ALTER TABLE `deskripsi_gambar`
  ADD PRIMARY KEY (`id_deskripsi`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `gambar_jawaban`
--
ALTER TABLE `gambar_jawaban`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbsoal`
--
ALTER TABLE `tbsoal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `kategori` (`kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deskripsi_gambar`
--
ALTER TABLE `deskripsi_gambar`
  MODIFY `id_deskripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gambar_jawaban`
--
ALTER TABLE `gambar_jawaban`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbsoal`
--
ALTER TABLE `tbsoal`
  MODIFY `id_soal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deskripsi_gambar`
--
ALTER TABLE `deskripsi_gambar`
  ADD CONSTRAINT `deskripsi_gambar_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `gambar_jawaban`
--
ALTER TABLE `gambar_jawaban`
  ADD CONSTRAINT `gambar_jawaban_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `tbsoal`
--
ALTER TABLE `tbsoal`
  ADD CONSTRAINT `tbsoal_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
