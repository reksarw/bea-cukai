-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Nov 2016 pada 19.42
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bea_cukai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `kode_keluar` varchar(30) NOT NULL,
  `reg_keluar` varchar(30) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `petugasa` varchar(50) NOT NULL,
  `petugasb` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `kode_keluar`, `reg_keluar`, `id_barang`, `petugasa`, `petugasb`, `tgl_keluar`) VALUES
(3, 'BK0001', 'RGKEPABEAAN0005', 2, 'AdministratorRRR', 'Petugas', '2016-09-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
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
  `nama_petugasb` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `kode_masuk`, `nomor_surat`, `juru_sita`, `lokasi`, `tgl_sita`, `no_disposisi`, `disposisi_tugas`, `disposisi_akhir`, `jenis_barang`, `kondisi_barang`, `asal`, `tujuan`, `no_dok`, `no_petikemas`, `jumlah`, `pengemasan`, `invoice`, `surat_keputusan`, `no_register`, `no_peti`, `nama_pemilik`, `npwp`, `alamat`, `tpb`, `reg_sita`, `lama`, `rak`, `tanggal_masuk`, `kadaluarsa`, `nama_petugasa`, `nama_petugasb`) VALUES
(2, 'BM0003', 'A-003', 'Ade Riza', 'Malang', '2016-10-29', '1', 'Awal', 'Akhir', 'B', 'Baru', 'Malang', 'Jakarta', '1231123', 'A1', 5, 'Pack', 'A-001', 'SK-01', 'NR-01', 'NP-01', 'Budi', 'NPWP-01', 'Bandung', '008080', 'RST-01', '5 Hari', 'Papua', '2015-10-31', '.', 'A', 'B'),
(3, 'BM0008', 'Reksa Rangga Wardhana', 'Syaihul Ilmy', 'a', '2014-10-29', 'aa', 'x', 'x', 'B', 'a', 'Malang', 'Malang', 'aa', 'Reksa Rangga Wardhana', 0, 'a', 'a', 'a', 'Reksa Rangga Wardhana', 'Reksa Rangga Wardhana', 'Reksa Rangga Wardhana', 'a', 'Bandnug', 'a', 'aa', 'a', 'Papua', '2016-12-31', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id` int(11) NOT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id`, `jenis_barang`) VALUES
(10, 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusita`
--

CREATE TABLE `jurusita` (
  `id` int(11) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `lelang` (
  `id` int(11) NOT NULL,
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
  `tgl_lelang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lelang`
--

INSERT INTO `lelang` (`id`, `kode_lelang`, `reg_lelang`, `tujuan`, `jumlah`, `petugasa`, `petugasb`, `petugasc`, `petugasd`, `jurusitaa`, `jurusitab`, `juru_sita`, `id_barang`, `tgl_lelang`) VALUES
(2, 'KPBEANSU-MSU-0002', 'r', 'habis massa', 2, 'as', 'ac', 'ad', 'af', 'q', 'w', 'e', 2, '2015-01-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(15) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'admin_11', '6b47eb626ba6a929686e23134c7c21ab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan_barang`
--

CREATE TABLE `satuan_barang` (
  `id` int(11) NOT NULL,
  `satuan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `satuan_barang`
--

INSERT INTO `satuan_barang` (`id`, `satuan`) VALUES
(1, 'PACK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusita`
--
ALTER TABLE `jurusita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lelang`
--
ALTER TABLE `lelang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan_barang`
--
ALTER TABLE `satuan_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jurusita`
--
ALTER TABLE `jurusita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lelang`
--
ALTER TABLE `lelang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `satuan_barang`
--
ALTER TABLE `satuan_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
