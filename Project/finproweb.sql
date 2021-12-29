-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 04:09 PM
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
-- Database: `finproweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_level` int(11) NOT NULL,
  `url_gambar` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `alamat`, `email`, `password`, `id_level`, `url_gambar`, `verified`, `telp`) VALUES
(666, 'Furuhasi Fumino', '1-1, Tsukiji 5-chome', 'furuhasi@gmail.com', 'furuhasi', 1, 'asset/img/user/asd.jpg', 1, '089527547723'),
(714, 'Ilham Nur Febrianto', 'Cambridge', 'ilhamfebrianto@gmail.com', 'watame24', 1, 'asset/img/user/3.png', 1, '089876253192'),
(716, 'Fajar Darussalam', 'Bandulan Gg 1F', 'fajardarussalam26@gmail.com', '24fajar24', 1, 'asset/img/user/IMG-20190122-WA0013.jpg', 1, '089697134531'),
(722, 'Admin', 'Rahasia', 'adminRahasia@gmail.com', 'admin', 2, '', 1, '089694567126'),
(724, 'Uruha Rushia', '331-1138, Shimonakai', 'uruharushia@gmail.com', 'uruharushia', 1, 'asset/img/user/Uruha Rushia.jpeg', 1, '87654182647'),
(725, 'Tokino Sora', '321-1294, Ikanikeisaiganaibaai', 'tokinosora@gmail.com', 'tokinosora', 1, 'asset/img/user/toki no sora.jpeg', 1, '87698234876'),
(726, 'Nekomata Okayu', ' 13-8, Ichiban-cho', 'nekomataokayu@gmail.com', 'nekomataokayu', 1, 'asset/img/user/Nekomata_Okayu_img.png', 1, '82768567182'),
(727, 'Sakura Miko', '182-1096, Heiwacho Horyu', 'sakuramiko@gmail.com', 'sakuramiko', 1, 'asset/img/user/miko.jpeg', 1, '27686236315'),
(728, 'Amelia Watson', '117-1014, Shinkocho', 'ameliawatson@gmail.com', 'ameliawatson', 1, 'asset/img/user/a.jpeg', 1, '876529837462'),
(729, 'Ookami Mio', '221-1190, Kamagaricho Tado', 'ookamimio@gmail.com', 'ookamimio', 1, 'asset/img/user/latest.png', 1, '82563847162'),
(730, 'Shirakami Fubuki', '393-1279, Makinohara', 'shirakamifubuki@gmail.com', 'shirakamifubuki', 1, 'asset/img/user/tenor.png', 1, '2467865087'),
(731, 'Minato Aqua', '237-1114, Kamoecho', 'minatoaqua@gmail.com', 'minatoaqua', 1, 'asset/img/user/gxps92uqqhp51.png', 1, '293478672462');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `url_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `nama`, `harga`, `code`, `url_gambar`) VALUES
(1, 'Ayam Geprek', 8000, 1, 'asset/img/menu/ayamgeprek.jpg'),
(2, 'Ayam Krispi', 6000, 1, 'asset/img/menu/ayamkrispi.jpg'),
(3, 'Onion Rings', 4000, 1, 'asset/img/menu/onionrings.jpg'),
(4, 'Sate Ayam', 9000, 1, 'asset/img/menu/sate.jpg'),
(5, 'Steak', 18000, 1, 'asset/img/menu/steak.jpg'),
(6, 'Dalgona', 12000, 2, 'asset/img/menu/dalgona.jpg'),
(7, 'STMJ', 8000, 2, 'asset/img/menu/stmj.jpg'),
(8, 'Soju', 90000, 2, 'asset/img/menu/soju.jpg'),
(9, 'Thai Tea', 15000, 2, 'asset/img/menu/thaitea.jpg'),
(10, 'Coca Cola', 5000, 2, 'asset/img/menu/cocacola.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `code` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`code`, `nama_kategori`) VALUES
(1, 'Makanan'),
(2, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` varchar(500) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `komentar`, `id_akun`) VALUES
(26, 'Good Job, \r\nfriendly service, healthy and safe food, proven hygienic', 666),
(27, 'Nice , Service is good job,\r\nI like the service here, they are very friendly', 714),
(28, '\r\nHealthy and safe food and friendly for the wallet :)', 716),
(30, 'Kon\'nichiwa, kono basho wa anata jishin to anata no saifu ni yoidesu.', 727),
(31, '	Sutekide furendorÄ«na basho, watashi wa koko ga sukidesu.		\r\n	', 726),
(32, '			\r\n	Yoidesu, soshite watashi wa koko no sÄbisu ni manzoku shite imasu.', 724),
(33, 'Soko ni iru subete no hito ni totte yasukute shitsu no takai monodesu.', 731),
(34, 'Subete no kizon no byoki kara no kaitekide anzen na basho', 729),
(35, 'Anata no tame no subete no sābisu to tabemono no tame ni kantan', 730),
(36, 'Tegorona kakaku de kohinshitsu no ryori ga o saifu ni saitekidesu', 728);

-- --------------------------------------------------------

--
-- Table structure for table `level_admin`
--

CREATE TABLE `level_admin` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_admin`
--

INSERT INTO `level_admin` (`id_level`, `nama_level`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `destination` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_akun`, `tanggal`, `destination`, `quantity`, `id_item`, `status`) VALUES
(21, 666, '2020-12-25 15:21:53', 'supriadi', 6, 1, 1),
(29, 716, '2020-12-27 19:11:47', 'Bandulan Gg 1F', 2, 1, 1),
(34, 666, '2020-12-27 20:10:22', 'bandulan', 2, 5, 0),
(36, 727, '2020-12-28 16:02:54', 'Malang', 2, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `code` (`code`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_akun` (`id_akun`) USING BTREE;

--
-- Indexes for table `level_admin`
--
ALTER TABLE `level_admin`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_item` (`id_item`),
  ADD KEY `id_akun` (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=732;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level_admin` (`id_level`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`code`) REFERENCES `kategori` (`code`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
