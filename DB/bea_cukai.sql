-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.5119
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for bea_cukai
CREATE DATABASE IF NOT EXISTS `bea_cukai` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bea_cukai`;

-- Dumping structure for table bea_cukai.barang_keluar
CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_keluar` varchar(30) NOT NULL,
  `reg_keluar` varchar(30) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `petugasa` varchar(50) NOT NULL,
  `petugasb` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table bea_cukai.barang_keluar: ~2 rows (approximately)
DELETE FROM `barang_keluar`;
/*!40000 ALTER TABLE `barang_keluar` DISABLE KEYS */;
INSERT INTO `barang_keluar` (`id`, `kode_keluar`, `reg_keluar`, `id_barang`, `petugasa`, `petugasb`, `tgl_keluar`) VALUES
	(1, 'BK0001', 'RGKEPABEAAM0001', 4, 'ada', 'ada', '2015-09-24'),
	(2, 'BK0002', 'RGKEPABEAAM0002', 4, 'as', 'ac', '2015-10-01');
/*!40000 ALTER TABLE `barang_keluar` ENABLE KEYS */;

-- Dumping structure for table bea_cukai.barang_masuk
CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_masuk` varchar(30) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `juru_sita` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `tgl_sita` date DEFAULT NULL,
  `no_disposisi` varchar(30) DEFAULT NULL,
  `disposisi_tugas` varchar(50) DEFAULT NULL,
  `disposisi_akhir` varchar(50) DEFAULT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL,
  `kondisi_barang` varchar(50) DEFAULT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `tujuan` varchar(50) DEFAULT NULL,
  `no_dok` varchar(30) DEFAULT NULL,
  `no_petikemas` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `pengemasan` varchar(50) DEFAULT NULL,
  `invoice` varchar(50) DEFAULT NULL,
  `surat_keputusan` varchar(50) DEFAULT NULL,
  `no_register` varchar(30) DEFAULT NULL,
  `no_peti` varchar(30) DEFAULT NULL,
  `nama_pemilik` varchar(50) DEFAULT NULL,
  `npwp` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tpb` varchar(50) DEFAULT NULL,
  `reg_sita` varchar(50) DEFAULT NULL,
  `lama` varchar(50) DEFAULT NULL,
  `rak` varchar(50) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `kadaluarsa` varchar(50) DEFAULT NULL,
  `nama_petugasa` varchar(50) DEFAULT NULL,
  `nama_petugasb` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table bea_cukai.barang_masuk: ~1 rows (approximately)
DELETE FROM `barang_masuk`;
/*!40000 ALTER TABLE `barang_masuk` DISABLE KEYS */;
INSERT INTO `barang_masuk` (`id`, `kode_masuk`, `nomor_surat`, `juru_sita`, `lokasi`, `tgl_sita`, `no_disposisi`, `disposisi_tugas`, `disposisi_akhir`, `jenis_barang`, `kondisi_barang`, `asal`, `tujuan`, `no_dok`, `no_petikemas`, `jumlah`, `pengemasan`, `invoice`, `surat_keputusan`, `no_register`, `no_peti`, `nama_pemilik`, `npwp`, `alamat`, `tpb`, `reg_sita`, `lama`, `rak`, `tanggal_masuk`, `kadaluarsa`, `nama_petugasa`, `nama_petugasb`) VALUES
	(1, 'BM0001', 'a', '1', 'a', '2016-11-13', 'a', 'a', 'a', '2', 'a', 'a', 'a', 'a', 'a', 2, 'PETI', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2016-11-13', 'a', 'a', 'a');
/*!40000 ALTER TABLE `barang_masuk` ENABLE KEYS */;

-- Dumping structure for table bea_cukai.jenis_barang
CREATE TABLE IF NOT EXISTS `jenis_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table bea_cukai.jenis_barang: ~3 rows (approximately)
DELETE FROM `jenis_barang`;
/*!40000 ALTER TABLE `jenis_barang` DISABLE KEYS */;
INSERT INTO `jenis_barang` (`id`, `jenis_barang`) VALUES
	(1, 'ROKOK'),
	(2, 'MATERIAL'),
	(3, 'ELEKTRONIK');
/*!40000 ALTER TABLE `jenis_barang` ENABLE KEYS */;

-- Dumping structure for table bea_cukai.jurusita
CREATE TABLE IF NOT EXISTS `jurusita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table bea_cukai.jurusita: ~1 rows (approximately)
DELETE FROM `jurusita`;
/*!40000 ALTER TABLE `jurusita` DISABLE KEYS */;
INSERT INTO `jurusita` (`id`, `nip`, `nama`) VALUES
	(1, '20150110678', 'Ade Riza'),
	(2, '20150110679', 'Syaihul Ilmy');
/*!40000 ALTER TABLE `jurusita` ENABLE KEYS */;

-- Dumping structure for table bea_cukai.lelang
CREATE TABLE IF NOT EXISTS `lelang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_lelang` varchar(30) DEFAULT NULL,
  `reg_lelang` varchar(50) DEFAULT NULL,
  `tujuan` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `petugasa` varchar(50) DEFAULT NULL,
  `petugasb` varchar(50) DEFAULT NULL,
  `petugasc` varchar(50) DEFAULT NULL,
  `petugasd` varchar(50) DEFAULT NULL,
  `jurusitaa` varchar(50) DEFAULT NULL,
  `jurusitab` varchar(50) DEFAULT NULL,
  `juru_sita` varchar(50) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `tgl_lelang` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table bea_cukai.lelang: ~2 rows (approximately)
DELETE FROM `lelang`;
/*!40000 ALTER TABLE `lelang` DISABLE KEYS */;
INSERT INTO `lelang` (`id`, `kode_lelang`, `reg_lelang`, `tujuan`, `jumlah`, `petugasa`, `petugasb`, `petugasc`, `petugasd`, `jurusitaa`, `jurusitab`, `juru_sita`, `id_barang`, `tgl_lelang`) VALUES
	(1, 'KPBEANSU-MSU-0001', 'aaa', 'aaa', 2, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 4, '2015-09-21'),
	(2, 'KPBEANSU-MSU-0002', 'r', 'habis massa', 2, 'as', 'ac', 'ad', 'af', 'q', 'w', 'e', 4, '2015-01-10');
/*!40000 ALTER TABLE `lelang` ENABLE KEYS */;

-- Dumping structure for table bea_cukai.login
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table bea_cukai.login: ~1 rows (approximately)
DELETE FROM `login`;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`id`, `user`, `pass`) VALUES
	(1, 'admin_11', '6b47eb626ba6a929686e23134c7c21ab');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table bea_cukai.satuan_barang
CREATE TABLE IF NOT EXISTS `satuan_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `satuan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table bea_cukai.satuan_barang: ~1 rows (approximately)
DELETE FROM `satuan_barang`;
/*!40000 ALTER TABLE `satuan_barang` DISABLE KEYS */;
INSERT INTO `satuan_barang` (`id`, `satuan`) VALUES
	(1, 'PACK');
/*!40000 ALTER TABLE `satuan_barang` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
