-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2015 at 03:26 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `kode` varchar(4) NOT NULL DEFAULT '',
  `po` varchar(20) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `jadwal` varchar(20) DEFAULT NULL,
  `fasilitas` varchar(100) DEFAULT NULL,
  `hargabeli` int(10) DEFAULT NULL,
  `hargajual` int(10) DEFAULT NULL,
  `stock` int(3) DEFAULT NULL,
  `detail` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`kode`, `po`, `jurusan`, `kelas`, `jadwal`, `fasilitas`, `hargabeli`, `hargajual`, `stock`, `detail`) VALUES
('A909', 'ALS', 'Jember-Palembang', 'Bisnis', '13-25', 'AC, Makan, Toilet', 470000, 500000, 68, 'langsung sumatera'),
('B114', 'Borobudur', 'Jember-Denpasar', 'Ekonomi', '06-30', 'TV', 200000, 30000, 40, ''),
('D120', 'Dahlia Indah', 'Jember-Denpasar', 'Ekonomi', '17-00', '-', 70000, 80000, 98, ''),
('E001', 'Efisiensi', 'Jember-Cilacap', 'Eksekutif', '07-00 WIB', 'wifi, toilet, servis makan, smoke area', 250000, 350000, 295, NULL),
('E332', 'Efi', 'Jember-Denpasar', 'bisnis', '12-00', 'tv', 400000, 400000, 20, ''),
('G001', 'Gunung Harta', 'Jember-Denpasar', 'Bisnis', '10-00', 'AC, Toilet, Music, TV', 180000, 200000, 87, NULL),
('H444', 'Harapan Baru', 'Jember-Malang', 'Ekonomi', '10-00', 'Tv', 40000, 50000, 98, ''),
('J004', 'Jember Indah', 'Jember-Surabaya', 'Bisnis ', '06-45', 'AC, Music, TV', 80000, 100000, 37, NULL),
('L012', 'Lorena', 'Jember-Jakarta', 'Eksekutif', '12-10', 'Tv, toilet, air suspension, dispenser', 380000, 400000, 98, 'seat 2-1'),
('L457', 'Ladju', 'Jember-Surabaya', 'Bisnis', '07-10', 'AC, Toilet', 50000, 60000, 98, ''),
('M174', 'Mila Sejahtera', 'Jember-Jogjakarta', 'Bisnis', '19-00', 'AC', 100000, 120000, 48, ''),
('N001', 'Nusantara', 'Jember-Kudus', 'Eksekutif', '08-20 WIB', 'wifi, toilet, servis makan, smoke area', 270000, 300000, 37, NULL),
('P412', 'Pahala Kencana', 'Jember-Jakarta', 'Eksekutif', '11-00', 'AC, makanan, toilet', 320000, 340000, 98, ''),
('R001', 'Rosalia Indah', 'Jember-Semarang', 'Eksekutif', '12-00', 'AC, Wifi', 250000, 300000, 67, 'Hino RK8'),
('R121', 'Ramayana', 'Jember-Jogjakarta', 'Eksekutif', '10-20', 'AC, Wifi', 130000, 150000, 98, 'Lewat Jalur selatan p.jawa'),
('R333', 'Restu Agung', 'Jember-Surabaya', 'Ekonomi', '08-00', '-', 30000, 40000, 198, ''),
('S001', 'Shantika', 'Jember-Surabaya', 'Eksekutif', '08-10 WIB', 'toilet, servis makan, smoke area', 180000, 200000, 87, NULL),
('S174', 'Sinar Jaya', 'Jember-Bandung', 'Bisnis', '10-00', 'AC, makanan, toilet', 270000, 290000, 68, ''),
('S440', 'Sandy Putra', 'Jember-Malang', 'Eksekutif', '14-30', 'AC, makanan, toilet', 80000, 90000, 48, ''),
('U123', 'Unmuh Jember', 'Jember-Blitar', 'Eksekutif', '08-20', 'AC, wifi', 180000, 200000, 50, ''),
('Z001', 'Trans Zentrum', 'Jember-Semarang', 'Eksekutif', '07-15 WIB', 'wifi, toilet, servis makan, smoke area', 300000, 300000, 117, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `bulanlaporan` date DEFAULT NULL,
  `pemasukan` int(11) DEFAULT NULL,
  `ppn` int(11) DEFAULT NULL,
  `asuransi` int(11) DEFAULT NULL,
  `penjualan` int(11) DEFAULT NULL,
  `pembelian` int(11) DEFAULT NULL,
  `labakotor` int(11) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL,
  `listrik` int(11) DEFAULT NULL,
  `lababersih` int(11) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`no`, `bulanlaporan`, `pemasukan`, `ppn`, `asuransi`, `penjualan`, `pembelian`, `labakotor`, `gaji`, `listrik`, `lababersih`) VALUES
(1, '2015-06-12', 2304000, 204000, 60000, 2040000, 196700000, -194660000, 1200000, 400000, -196260000);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `idmember` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `nohp` varchar(12) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `akses` varchar(10) DEFAULT 'guest',
  PRIMARY KEY (`idmember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `nama`, `alamat`, `jk`, `nohp`, `email`, `password`, `akses`) VALUES
(1, 'Agus Hariadi M', 'jember', 'Laki-laki', '089776554332', 'agush345@gmail.com', '1', 'admin'),
(3, 'Verdian arifin', 'Probolinggo', 'Laki-laki', '089889766555', 'verdi21@gmail.com', 'verdi21', 'guest'),
(4, 'firman yahya', 'jember', 'Perempuan', '089778776551', 'firman5@gmail.com', 'ghea45', 'guest'),
(5, 'ghea ariesta wijaya', 'jember', 'Perempuan', '087654655434', 'ghea45@gmail.com', 'ghea45', 'guest'),
(6, 'kikik dwi putra', 'Lengkong', 'Laki-laki', '089344444321', 'kikik@gmail.com', '123', 'admin'),
(7, 'saka indra', 'banyuwangi', 'Laki-laki', '087654323232', 'sakaindra@yahoo.co.i', 'sakaindra', 'guest'),
(8, 'samuel indra jaya', 'pasuruan', 'Laki-laki', '087656543456', 'sam123@gmail.com', 'sam123', 'guest'),
(9, 'dimas angga', 'jember', 'Laki-laki', '087656543332', 'dimas1@yahoo.com', 'dimas1', 'guest'),
(11, 'Muhammad ali', 'Jember', 'Laki-laki', '089765454322', 'muhammad44@gmail.com', 'e10adc3949ba59abbe56', 'guest'),
(12, 'Shindi Yuvia', 'Jember', 'Perempuan', '08877665544', 'Shindi12@gmail.com', 'fe79a2249db8aad4d4d5', 'guest'),
(13, 'bang ali', 'jember', 'Laki-laki', '087876765676', 'ali@gmail.com', '86318e52f5ed4801abe1', 'guest'),
(14, 'Rifaldi', 'lumajang', 'Laki-laki', '087787676565', 'rifaldi@yahoo.com', '123', 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `nopembelian` int(11) NOT NULL AUTO_INCREMENT,
  `tglpembelian` date DEFAULT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `jumlah` int(4) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  PRIMARY KEY (`nopembelian`),
  KEY `kode` (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`nopembelian`, `tglpembelian`, `kode`, `jumlah`, `harga`, `total`) VALUES
(5, '2015-06-02', 'B114', 3, 200000, 600000),
(6, '2015-06-10', 'R001', 50, 250000, 12500000),
(9, '2015-06-11', 'R121', 100, 130000, 13000000),
(10, '2015-06-11', 'M174', 50, 100000, 5000000),
(11, '2015-06-11', 'P412', 100, 320000, 32000000),
(12, '2015-06-11', 'A909', 70, 470000, 32900000),
(13, '2015-06-11', 'R333', 200, 30000, 6000000),
(14, '2015-06-11', 'L457', 100, 50000, 5000000),
(15, '2015-06-11', 'D120', 100, 70000, 7000000),
(16, '2015-06-11', 'H444', 100, 40000, 4000000),
(17, '2015-06-11', 'S440', 50, 80000, 4000000),
(18, '2015-06-11', 'L012', 100, 380000, 38000000),
(20, '2015-06-11', 'E332', 20, 400000, 8000000),
(21, '2015-06-11', 'S174', 70, 270000, 18900000),
(22, '2015-06-12', 'U123', 50, 180000, 9000000),
(23, '2015-06-12', 'E332', 2, 400000, 800000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `notransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgltransaksi` date DEFAULT NULL,
  `tglberangkat` date DEFAULT NULL,
  `idmember` int(11) DEFAULT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `ppn` int(11) DEFAULT NULL,
  `asuransi` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`notransaksi`),
  KEY `idmember` (`idmember`),
  KEY `kode` (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`notransaksi`, `tgltransaksi`, `tglberangkat`, `idmember`, `kode`, `jumlah`, `harga`, `ppn`, `asuransi`, `total`) VALUES
(41, '0000-00-00', '2015-05-19', 1, 'E001', 3, 350000, 35000, 5000, 390000),
(42, '0000-00-00', '2015-02-22', 1, 'B114', 1, 30000, 3000, 5000, 38000),
(43, '2015-06-03', '2015-06-05', 1, 'B114', 2, 30000, 3000, 10000, 43000),
(44, '2015-06-03', '2015-06-18', 1, 'R001', 3, 300000, 30000, 15000, 345000),
(45, '2015-06-03', '2015-06-08', 1, 'B114', 1, 30000, 3000, 5000, 38000),
(46, '2015-06-10', '2015-06-12', 6, 'R001', 2, 300000, 30000, 10000, 340000),
(47, '2015-06-12', '2015-06-14', 14, 'A909', 2, 1000000, 100000, 10000, 1110000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`kode`) REFERENCES `bus` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`idmember`) REFERENCES `member` (`idmember`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`kode`) REFERENCES `bus` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
