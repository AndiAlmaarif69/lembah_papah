-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 05:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(11) NOT NULL,
  `cp_1` varchar(200) NOT NULL,
  `cp_2` varchar(200) NOT NULL,
  `cp_3` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id_banner`, `cp_1`, `cp_2`, `cp_3`, `foto`) VALUES
(31, 'Out Bound', 'Lembah Papah', 'Sentolo, Kulon Progo, Special Region of Yogyakarta', 'darurat1.png'),
(32, 'River tubing', 'Lembah Papah', 'Sentolo, Kulon Progo, Special Region of Yogyakarta', 'darurat2.png'),
(40, 'Enjoy every moments', 'LEMBAH PAPAH', 'Sentolo, Kulonprogo, Yogyakarta City, Indonesia, Special Region of Yogyakarta', 'enjoy.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fitur`
--

CREATE TABLE `tb_fitur` (
  `id_fitur` int(20) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `button` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fitur`
--

INSERT INTO `tb_fitur` (`id_fitur`, `rating`, `title`, `button`, `foto`) VALUES
(14, 'Paket River Tubing 10 orang', '750.000', 'Paket River Tubing untuk 10 orang cukup Rp. 750.000, anda akan merasakan sensasi yang seru dan asyik di Lembah Papah.\r\nFree wedang uwuh dan makan siang untuk 10 orang.', '1.jpeg'),
(15, 'Paket Wisata Tani untuk 10 orang', '400.000', 'Paket untuk 10 orang, Anda akan diajak untuk melihat dan merasakan langsung serta mencoba kegiatan masyarakat seperti bertani, membajak sawah, memanen hasil pertanian, melihat peternakan warga.\r\nFree wedang uwuh dan makan siang untuk 10 orang.', '2.jpg'),
(22, 'Paket Outbound dan River Tubing untuk 20 orang', '1.500.000', ' Paket wisata outbond dan diakhir dengan susur sungai hanya dengan 1.500.000 untuk 20 orang, anda akan dijamu dengan permainan yang asyik dan seru penuh tantangan.\r\nFree wedang uwuh dan makan untuk 20 orang.', '3.jpg'),
(23, 'Paket Outbond untuk 20 orang', '1.000.000,-', ' Paket Outbond untuk 20 orang dengan berbagai permainan yang mengasyikkan dan pastinya seru, dipandu oleh profesional di bidang outbond.\r\nFree wedang uwuh dan makan siang untuk 20 orang.', 'Every_Moments_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_listing`
--

CREATE TABLE `tb_listing` (
  `id_listing` int(12) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `teks` text NOT NULL,
  `admin` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_listing`
--

INSERT INTO `tb_listing` (`id_listing`, `judul`, `teks`, `admin`, `tanggal`, `foto`) VALUES
(1, 'Spot Foto', 'Kamu bisa foto-foto disini. Ada spo-spot foto unik yang kami sediakan..... Enjoy every moments....', 'Admin_aja', '2022-09-11', '1.jpg'),
(2, 'Outbond', 'Kamu bisa barengan keluarga atau temen-temen kantor atau temen-temen kuliah tuk outbond di Lembah Papah, pasti seru deh.... enjoy every moments....', 'Admin_aja', '2022-09-11', '21.jpg'),
(7, 'Oubond Asyik', 'Yuks agendakan outbond bersama temen-temen, tetangga, saudara di Lembah Papah, pasti seru, pasti rame..... Enjoy every moments....', 'developer', '2022-09-02', 'outbund.png'),
(8, 'Gubug Lembah Papah', 'Di lembah Papah disediakan gubug-gubung nyaman tuk beristrirahat setelah aktivitas river tubing atau outbond, semilir angin sepoi-sepoi dijamin membuatmu ingat yang indah-indah....... Enjoy every moments....', 'developer', '2022-09-09', 'gubuk_ku.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengelola`
--

CREATE TABLE `tb_pengelola` (
  `id_pengelola` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `url_ig` varchar(250) NOT NULL,
  `url_fb` varchar(260) NOT NULL,
  `url_twt` varchar(250) NOT NULL,
  `url_wa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_showcase`
--

CREATE TABLE `tb_showcase` (
  `id_showcase` int(12) NOT NULL,
  `foto_showcase` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_showcase`
--

INSERT INTO `tb_showcase` (`id_showcase`, `foto_showcase`) VALUES
(41, '2.jpg'),
(42, '1.jpg'),
(43, '3.jpg'),
(44, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `password`) VALUES
(1, 'developer', 'jra94741@gmail.com', 'admin'),
(3, 'Admin_aja', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tb_fitur`
--
ALTER TABLE `tb_fitur`
  ADD PRIMARY KEY (`id_fitur`);

--
-- Indexes for table `tb_listing`
--
ALTER TABLE `tb_listing`
  ADD PRIMARY KEY (`id_listing`);

--
-- Indexes for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  ADD PRIMARY KEY (`id_pengelola`);

--
-- Indexes for table `tb_showcase`
--
ALTER TABLE `tb_showcase`
  ADD PRIMARY KEY (`id_showcase`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_fitur`
--
ALTER TABLE `tb_fitur`
  MODIFY `id_fitur` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_listing`
--
ALTER TABLE `tb_listing`
  MODIFY `id_listing` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_showcase`
--
ALTER TABLE `tb_showcase`
  MODIFY `id_showcase` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
