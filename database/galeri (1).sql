-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 04:59 PM
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
-- Database: `galeri`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `albumid` int(11) NOT NULL,
  `namaalbum` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggalbuat` date NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`albumid`, `namaalbum`, `deskripsi`, `tanggalbuat`, `userid`) VALUES
(35, 'Hewan Peliharaan', 'dsini adalah album untuk menyimpan foto hewan peliharaan', '2024-03-23', 5),
(36, 'Bunga', 'beberapa macam foto bunga yang indah', '2024-03-23', 5),
(37, 'Pemandangan Alam', 'dsini berisi foto pemandangan alam yang asri', '2024-03-23', 5),
(40, 'Hewan Liar', 'ini adalah album untuk hewan liar yang saya sukai\r\n', '2024-03-24', 7),
(41, 'Arsitektur', 'berikut adalah kumpulan foto gambaran arsitektur', '2024-03-24', 9);

-- --------------------------------------------------------

--
-- Table structure for table `foto1`
--

CREATE TABLE `foto1` (
  `fotoid` int(11) NOT NULL,
  `judulfoto` varchar(255) NOT NULL,
  `deskripsifoto` text NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `tanggalunggah` date NOT NULL,
  `lokasifile` varchar(255) NOT NULL,
  `namaalbum` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto1`
--

INSERT INTO `foto1` (`fotoid`, `judulfoto`, `deskripsifoto`, `namalengkap`, `tanggalunggah`, `lokasifile`, `namaalbum`, `userid`) VALUES
(8, 'curig', 'pemandangan yang sangat bagus nan asri', 'difa widyarti', '2024-03-21', 'foto1711051688.jpg', 'TBATE', 5),
(9, 'kucing anggora putih', 'kucing ini adalah hewan favoritku dari semasa kecil', 'difa widyarti', '2024-03-22', 'foto1711143130.jpg', 'Kucing', 5),
(12, 'ayam', 'ayam ini saya rawat dari zaman teletubies', 'difa widyarti', '2024-03-24', 'foto1711293129.jpg', 'Hewan Peliharaan', 5),
(13, 'Harimau', 'Harimau (Panthera tigris) adalah spesies kucing terbesar yang masih hidup dari genus Panthera. Harimau memiliki ciri loreng yang khas pada bulunya, berupa garis-garis vertikal gelap pada bulu oranye, dengan bulu bagian bawah berwarna putih', 'Hafiz Rizq', '2024-03-24', 'foto1711294438.jpg', '-Pilih Album Foto-', 7),
(14, 'rancangan bangunan', 'rancangan bangunann yang telah dirancang oleh arsitek hebat', 'dimas anugrah', '2024-03-24', 'foto1711294765.jpg', 'Arsitektur', 9),
(15, 'Bunga Tulip', 'Bunga tulip adalah bunga yang berasal dari Turki dan memiliki berbagai makna, seperti kesempurnaan, cinta, dan penghargaan. Bunga tulip juga memiliki berbagai warna dan jenis, serta taman-taman yang menarik di Belanda dan Turki', 'rustiw', '2024-03-24', 'foto1711295192.jpg', 'Bunga', 8),
(16, 'Bunga Mawar', 'Mawar atau ros (Rosa) adalah tumbuhan perdu, pohonnya berduri, bunganya berbau wangi dan berwarna indah, terdiri atas daun bunga yang bersusun; meliputi ratusan jenis, tumbuh tegak atau memanjat, batangnya berduri, bunganya beraneka warna, seperti merah, putih, merah jambu, merah tua, dan berbau harum.', 'rustiw', '2024-03-24', 'foto1711295264.jpg', 'Bunga', 8),
(17, 'Sikulikap', 'Disini adalah foto saat perjalan ke sikulikap', 'rustiw', '2024-03-24', 'foto1711295337.jpg', 'Pemandangan Alam', 8);

-- --------------------------------------------------------

--
-- Table structure for table `komentarfoto`
--

CREATE TABLE `komentarfoto` (
  `komentarid` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `isikomentar` text NOT NULL,
  `tanggalkomentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentarfoto`
--

INSERT INTO `komentarfoto` (`komentarid`, `fotoid`, `userid`, `isikomentar`, `tanggalkomentar`) VALUES
(56, 8, 5, 'bagus banget pemandangannya', '2024-03-24'),
(57, 8, 7, 'share location dong', '2024-03-24'),
(58, 13, 9, 'serem kaya usernya', '2024-03-24'),
(59, 17, 8, 'semanagat yo yang mau tracking', '2024-03-24'),
(60, 16, 8, 'BAGUSS BANGET', '2024-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `likefoto1`
--

CREATE TABLE `likefoto1` (
  `likeid` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `suka` smallint(1) NOT NULL,
  `tanggallike` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likefoto1`
--

INSERT INTO `likefoto1` (`likeid`, `fotoid`, `userid`, `suka`, `tanggallike`) VALUES
(31, 10, 6, 1, '2024-03-24'),
(33, 8, 5, 1, '2024-03-24'),
(34, 8, 7, 1, '2024-03-24'),
(36, 13, 9, 1, '2024-03-24'),
(37, 17, 8, 1, '2024-03-24'),
(38, 16, 8, 1, '2024-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `email`, `namalengkap`, `alamat`) VALUES
(5, 'Difa Widyarti', '2512', 'difawidyartini@gmail.com', 'difa widyarti', 'Jl Budiluhur No 30'),
(7, 'Apis', 'apisaja', 'apis@gmail.com', 'Hafiz Rizq', 'Komplek Bumi Asri'),
(8, 'Uti', 'uti1', 'rustianjelitaputri@gmail.com', 'Rusti Anjelita Putri', 'Budiluhur Gg Family'),
(9, 'Dimas', '2522', 'dimasanugrah@gmail.com', 'dimas anugrah', 'Jl Budiluhur Gg Bunga Tanjung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`albumid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `userid_2` (`userid`);

--
-- Indexes for table `foto1`
--
ALTER TABLE `foto1`
  ADD PRIMARY KEY (`fotoid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD PRIMARY KEY (`komentarid`),
  ADD KEY `fotoid` (`fotoid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `likefoto1`
--
ALTER TABLE `likefoto1`
  ADD PRIMARY KEY (`likeid`),
  ADD KEY `fotoid` (`fotoid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `foto1`
--
ALTER TABLE `foto1`
  MODIFY `fotoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  MODIFY `komentarid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `likefoto1`
--
ALTER TABLE `likefoto1`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
