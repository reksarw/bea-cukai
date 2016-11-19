-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2016 pada 14.01
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bea_cukai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_keluar` varchar(30) NOT NULL,
  `reg_keluar` varchar(30) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `petugasa` varchar(50) NOT NULL,
  `petugasb` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE IF NOT EXISTS `jenis_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusita`
--

CREATE TABLE IF NOT EXISTS `jurusita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `jurusita`
--

INSERT INTO `jurusita` (`id`, `nip`, `nama`) VALUES
(1, '20150110678', 'Ade Riza'),
(2, '20150110679', 'Syaihul Ilmy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lelang`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'admin_11', '6b47eb626ba6a929686e23134c7c21ab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan_barang`
--

CREATE TABLE IF NOT EXISTS `satuan_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `satuan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `satuan_barang`
--

INSERT INTO `satuan_barang` (`id`, `satuan`) VALUES
(1, 'PACK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
