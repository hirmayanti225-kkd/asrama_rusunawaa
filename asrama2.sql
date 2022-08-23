-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2022 pada 01.30
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asrama2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ansuran`
--

CREATE TABLE `ansuran` (
  `id_ansuran` int(11) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ansuran`
--

INSERT INTO `ansuran` (`id_ansuran`, `pembayaran`, `jumlah`) VALUES
(1, 'Ansuran 1', 750000),
(2, 'Ansuran 2 ', 1000000),
(4, 'Lunas', 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bayar_kamar`
--

CREATE TABLE `data_bayar_kamar` (
  `id_bayar_kamar` int(11) NOT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `status_bayar` varchar(100) DEFAULT NULL,
  `id_sisa` int(11) DEFAULT NULL,
  `id_ansuran` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `id_kamar` varchar(100) NOT NULL,
  `is_read` int(1) DEFAULT NULL,
  `tanggal_dibuat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bayar_kamar`
--

INSERT INTO `data_bayar_kamar` (`id_bayar_kamar`, `tanggal_bayar`, `status_bayar`, `id_sisa`, `id_ansuran`, `id_pengguna`, `nama`, `keterangan`, `photo`, `id_kamar`, `is_read`, `tanggal_dibuat`) VALUES
(1, '2022-08-23', 'Lunas', 2, 2, NULL, 'hr', NULL, NULL, '4D', NULL, NULL),
(7, '2022-08-20', 'Belum Lunas', NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL),
(8, '2022-09-03', 'Lunas', NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL),
(9, '2022-08-18', 'Belum Lunas', 2, 2, NULL, 'Siti hirmaa', '2333', 'slip-220822-720e38be0f.JPG', '4A', NULL, NULL),
(10, '2022-08-18', 'Belum Lunas', NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL),
(11, '2022-08-27', 'Lunas', NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL),
(20, '2022-08-27', 'Belum Lunas', 2, 1, NULL, '', NULL, NULL, '', NULL, NULL),
(25, '2022-08-20', 'Lunas', 2, 1, NULL, '', NULL, NULL, '', NULL, NULL),
(26, '2022-08-03', 'Lunas', 1, 4, NULL, '', NULL, NULL, '', NULL, NULL),
(27, '2022-09-09', 'Lunas', 1, 4, NULL, '', NULL, NULL, '', NULL, NULL),
(28, '2022-08-18', 'Lunas', 1, 4, NULL, '', NULL, NULL, '', NULL, NULL),
(29, '2022-08-19', 'Lunas', 1, 4, NULL, '', NULL, NULL, '', NULL, NULL),
(31, '2022-08-01', 'Belum Lunas', 2, 1, NULL, '', NULL, NULL, '', NULL, NULL),
(32, '2022-09-02', 'Belum Lunas', 1, 2, NULL, '', NULL, NULL, '', NULL, NULL),
(33, '2022-09-10', 'Lunas', 3, 2, NULL, '', NULL, NULL, '', NULL, NULL),
(35, '2022-09-09', 'Belum Lunas', 2, 1, NULL, '', NULL, NULL, '', NULL, NULL),
(38, '2022-10-21', 'Belum Lunas', 2, 1, NULL, '', NULL, NULL, '', NULL, NULL),
(39, '2022-12-22', 'Lunas', 1, 4, NULL, '', NULL, NULL, '', NULL, NULL),
(40, '2022-08-16', 'Belum Lunas', 1, 4, 25, '', NULL, NULL, '', NULL, NULL),
(41, '2022-08-10', 'Belum Lunas', 1, 4, 24, '', NULL, NULL, '', NULL, NULL),
(42, '2022-08-11', 'Belum Lunas', 1, 4, 26, '', NULL, NULL, '', NULL, NULL),
(43, '2022-08-18', 'Lunas', 1, 4, NULL, '2', NULL, NULL, '', NULL, NULL),
(44, '2022-08-16', 'Belum Lunas', 1, 4, NULL, '29', NULL, NULL, '', NULL, NULL),
(46, '2022-08-12', 'Belum Lunas', 1, 4, NULL, '2', NULL, NULL, '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_checkout`
--

CREATE TABLE `data_checkout` (
  `id_checkout` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_checkout`
--

INSERT INTO `data_checkout` (`id_checkout`, `id_pengguna`, `id_kamar`, `tanggal_keluar`) VALUES
(11, NULL, 6, '2022-08-27'),
(12, NULL, 8, '2022-08-12'),
(13, NULL, 6, '2022-09-03'),
(14, 2, 8, '2022-08-13'),
(15, 24, 5, '2022-08-06'),
(16, 25, 6, '2022-08-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kamar`
--

CREATE TABLE `data_kamar` (
  `id_kamar` int(11) NOT NULL,
  `kamar` varchar(100) NOT NULL,
  `is_read` int(1) DEFAULT NULL,
  `id_fasilitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kamar`
--

INSERT INTO `data_kamar` (`id_kamar`, `kamar`, `is_read`, `id_fasilitas`) VALUES
(1, '1A', 1, NULL),
(2, '1B', 1, NULL),
(3, '1C', 1, NULL),
(4, '1D', 1, NULL),
(5, '2A', 1, NULL),
(6, '2B', 1, NULL),
(7, '2C', 1, NULL),
(8, '2D', 1, NULL),
(9, '3A', 0, NULL),
(10, '3B', 1, NULL),
(11, '3C', NULL, NULL),
(13, '3D', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor_pokok` varchar(11) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `wa` int(12) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `hak_akses` int(11) DEFAULT NULL,
  `id_jlh` int(11) DEFAULT NULL,
  `id_pengumuman` int(11) DEFAULT NULL,
  `id_pesan` int(11) DEFAULT NULL,
  `id_checkout` int(11) DEFAULT NULL,
  `id_kamar` int(120) DEFAULT NULL,
  `id_pindahan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pengguna`
--

INSERT INTO `data_pengguna` (`id_pengguna`, `nama`, `nomor_pokok`, `alamat`, `pendidikan`, `username`, `password`, `jenis_kelamin`, `wa`, `photo`, `status`, `tanggal_masuk`, `hak_akses`, `id_jlh`, `id_pengumuman`, `id_pesan`, `id_checkout`, `id_kamar`, `id_pindahan`) VALUES
(1, 'yanti', NULL, 'a', 'a', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 0, 'member-220801-288b2325bf.JPG', NULL, '0000-00-00', 1, NULL, NULL, NULL, NULL, 1, NULL),
(2, 'hirmayanti', NULL, 'pringgabaya', 'UNHAS', 'hirma', 'f1f0dfd77bdd5a09eaa4429e4fb0ebc9', 'Perempuan', 2147483647, 'member-220801-288b2325bf.JPG', NULL, '0000-00-00', 3, NULL, NULL, NULL, NULL, 2, NULL),
(3, 'Siti Humaerok', '002', 'SUKAMULIA', 'UNHAS', 'humaerok', '2abf1e6afc95ecdbe1dd2995847ed08b', 'Perempuan', 2147483647, 'member-220802-65008c297f.JPG', 'Aktif', '2022-08-25', 3, NULL, NULL, NULL, 16, 3, 2),
(24, 'lov3', '003', 'lov yu', 'UNHAS', '1D', 'f149c23cf5b13e619e76d9f013ca0d5e', 'Perempuan', 4, 'member-220803-2c427c62f3.JPG', 'Aktif', '2022-08-18', 3, NULL, NULL, NULL, NULL, 4, NULL),
(25, 'ipin', NULL, 'SUKAMULIA', 'UNHAS', 'ipin', '0ea5718f5b4e3a55dc457b1e18e205f9', 'Perempuan', 9876, 'member-220809-224043d624.JPG', 'Aktif', '2022-08-31', 2, NULL, NULL, NULL, NULL, 4, NULL),
(26, 'manda', NULL, 'aikmel', 'UNHAS', NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'Perempuan', 43, 'member-220803-295dc00672.JPG', NULL, '2022-08-18', NULL, NULL, NULL, NULL, NULL, 9, NULL),
(29, 'ainikuu', NULL, 'aikmel', 'UNHAS', '3A', '657dae0913ee12be6fb2a6f687aae1c7', 'Perempuan', 5444, '', 'Aktif', '2022-08-05', 2, NULL, NULL, NULL, NULL, 9, NULL),
(30, 'annn', NULL, 'a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', 'Perempuan', 2147483647, 'member-220807-182e37ab59.JPG', 'Aktif', '2022-09-01', 2, NULL, NULL, NULL, NULL, 9, NULL),
(31, 'siti hirmaa', NULL, 'SUKAMULIA', 'UNHAS', '3D', '76aa96369abbba52e621bfa83da8e64f', 'Perempuan', 85688, 'member-220809-03d35a8d37.JPG', 'Aktif', '2022-08-31', 3, NULL, NULL, NULL, NULL, 13, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pindahan`
--

CREATE TABLE `data_pindahan` (
  `id_pindahan` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `asal_kamar` varchar(100) NOT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `tanggal_pindah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pindahan`
--

INSERT INTO `data_pindahan` (`id_pindahan`, `id_pengguna`, `asal_kamar`, `id_kamar`, `tanggal_pindah`) VALUES
(1, 2, '2A', 3, '0000-00-00'),
(2, 25, '3A', 3, '2022-08-05'),
(3, 0, '4A', 2, '2022-08-12'),
(4, 3, '1A', 4, '2022-08-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `id_kamar`, `fasilitas`, `jumlah`) VALUES
(1, 6, 'lemari', 4),
(2, 4, 'Springbed', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'Pengurus', 2),
(3, 'Member', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jlh_kamar`
--

CREATE TABLE `jlh_kamar` (
  `id_jlh` int(11) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `jumlah` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jlh_kamar`
--

INSERT INTO `jlh_kamar` (`id_jlh`, `no_kamar`, `jumlah`) VALUES
(1, 1, 3),
(2, 2, 4),
(3, 3, 4),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0),
(9, 9, 0),
(10, 10, 0),
(11, 11, 0),
(12, 12, 0),
(13, 13, 0),
(14, 14, 0),
(15, 15, 0),
(16, 16, 0),
(17, 17, 0),
(18, 18, 0),
(19, 19, 0),
(20, 20, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif_pengumuman`
--

CREATE TABLE `notif_pengumuman` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `is_read` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notif_pengumuman`
--

INSERT INTO `notif_pengumuman` (`id`, `keterangan`, `isi_pengumuman`, `is_read`) VALUES
(2, 'Pengumuman masuk', 'PengumumanYanti masuk pada Wed, 03-Aug-2022, 03:39.', 1),
(3, 'Pengumuman masuk', 'Pengumuman Aini masuk pada Wed, 03-Aug-2022, 13:54.', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif_pesan`
--

CREATE TABLE `notif_pesan` (
  `id_notif_pesan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_pesan` text NOT NULL,
  `is_read` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notif_pesan`
--

INSERT INTO `notif_pesan` (`id_notif_pesan`, `judul`, `isi_pesan`, `is_read`) VALUES
(1, 'Pesan masuk', 'Pesan Siti Humaerok masuk pada Wed, 03-Aug-2022, 05:25.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif_register`
--

CREATE TABLE `notif_register` (
  `id_register` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `isi_notif` varchar(100) NOT NULL,
  `is_read` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notif_register`
--

INSERT INTO `notif_register` (`id_register`, `keterangan`, `isi_notif`, `is_read`) VALUES
(29, 'Register masuk', 'Pendaftaran aini masuk pada 2022-08-05.', 1),
(31, 'Register masuk', 'Pendaftaran siti hirma masuk pada 2022-08-31.', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif_slip`
--

CREATE TABLE `notif_slip` (
  `id` int(11) NOT NULL,
  `nama_penyetor` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `is_read` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notif_slip`
--

INSERT INTO `notif_slip` (`id`, `nama_penyetor`, `keterangan`, `is_read`) VALUES
(1, 'Setoran masuk', 'Setoran  masuk pada Wed, 03-Aug-2022, 05:36.', 1),
(2, 'Setoran masuk', 'Setoran  masuk pada Tue, 09-Aug-2022, 05:50.', 0),
(3, 'Setoran masuk', 'Setoran  masuk pada Mon, 22-Aug-2022, 00:08.', 0),
(7, 'm', 'm', NULL),
(8, 'Setoran masuk', 'Setoran  masuk pada Mon, 22-Aug-2022, 00:09.', 0),
(9, 'Setoran masuk', 'Setoran  masuk pada Mon, 22-Aug-2022, 00:28.', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `nama` varchar(110) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `tanggal_dibuat` int(11) DEFAULT NULL,
  `is_read` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `nama`, `isi_pengumuman`, `tanggal_dibuat`, `is_read`, `id`) VALUES
(1, 'y', 'n', NULL, NULL, NULL),
(2, 'Yanti', 'jj', NULL, NULL, NULL),
(3, 'Yanti', 'hi', NULL, NULL, NULL),
(4, 'Aini', 'looo', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi_pesan` text NOT NULL,
  `is_read` int(1) DEFAULT NULL,
  `tanggal_dibuat` date NOT NULL,
  `id_notif_pesan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `isi_pesan`, `is_read`, `tanggal_dibuat`, `id_notif_pesan`) VALUES
(1, 'Siti Humaerok', 'hi', NULL, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sisa_ansuran`
--

CREATE TABLE `sisa_ansuran` (
  `id_sisa` int(11) NOT NULL,
  `s_pembayaran` varchar(100) NOT NULL,
  `sisa_jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sisa_ansuran`
--

INSERT INTO `sisa_ansuran` (`id_sisa`, `s_pembayaran`, `sisa_jumlah`) VALUES
(1, 'Tidak Ada', 0),
(2, 'Ansuran ke 1', 750000),
(3, 'Ansuran ke 2 ', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slip`
--

CREATE TABLE `slip` (
  `id_slip` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `tanggal_dibuat` bigint(20) DEFAULT NULL,
  `is_read` int(1) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `id_bayar_kamar` int(11) DEFAULT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slip`
--

INSERT INTO `slip` (`id_slip`, `nama`, `keterangan`, `photo`, `tanggal_dibuat`, `is_read`, `id`, `id_bayar_kamar`, `id_kamar`) VALUES
(1, 'Siti Humaerok', '66', 'slip-220803-00b3efad3c.JPG', 0, NULL, NULL, NULL, 0),
(2, 'Lov3', 'slip pembayaran tahun 2022', 'slip-220809-7e3ff4d1cf.JPG', NULL, NULL, NULL, NULL, 0),
(7, 'Siti hirmaa', 'lov', 'slip-220822-3ffb784c3d.JPG', NULL, NULL, NULL, NULL, 0),
(8, 'Siti hirmaa', '111', 'slip-220822-568dc01d27.JPG', NULL, NULL, NULL, NULL, 0),
(9, 'Siti hirmaa', '2333', 'slip-220822-720e38be0f.JPG', NULL, NULL, NULL, NULL, 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ansuran`
--
ALTER TABLE `ansuran`
  ADD PRIMARY KEY (`id_ansuran`);

--
-- Indeks untuk tabel `data_bayar_kamar`
--
ALTER TABLE `data_bayar_kamar`
  ADD PRIMARY KEY (`id_bayar_kamar`),
  ADD KEY `id_sisa` (`id_sisa`),
  ADD KEY `id_ansuran` (`id_ansuran`);

--
-- Indeks untuk tabel `data_checkout`
--
ALTER TABLE `data_checkout`
  ADD PRIMARY KEY (`id_checkout`),
  ADD KEY `id_pengguna` (`id_pengguna`,`id_kamar`);

--
-- Indeks untuk tabel `data_kamar`
--
ALTER TABLE `data_kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_bagian_kamar` (`id_fasilitas`);

--
-- Indeks untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `kamar` (`id_kamar`),
  ADD KEY `hak_akses` (`hak_akses`),
  ADD KEY `id_jlh` (`id_jlh`,`id_pengumuman`,`id_pesan`,`id_checkout`),
  ADD KEY `id_pengumuman` (`id_pengumuman`),
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_checkout` (`id_checkout`),
  ADD KEY `id_pindahan` (`id_pindahan`);

--
-- Indeks untuk tabel `data_pindahan`
--
ALTER TABLE `data_pindahan`
  ADD PRIMARY KEY (`id_pindahan`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hak_akses` (`hak_akses`);

--
-- Indeks untuk tabel `jlh_kamar`
--
ALTER TABLE `jlh_kamar`
  ADD PRIMARY KEY (`id_jlh`);

--
-- Indeks untuk tabel `notif_pengumuman`
--
ALTER TABLE `notif_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notif_pesan`
--
ALTER TABLE `notif_pesan`
  ADD PRIMARY KEY (`id_notif_pesan`);

--
-- Indeks untuk tabel `notif_register`
--
ALTER TABLE `notif_register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indeks untuk tabel `notif_slip`
--
ALTER TABLE `notif_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_notif_pesan` (`id_notif_pesan`);

--
-- Indeks untuk tabel `sisa_ansuran`
--
ALTER TABLE `sisa_ansuran`
  ADD PRIMARY KEY (`id_sisa`);

--
-- Indeks untuk tabel `slip`
--
ALTER TABLE `slip`
  ADD PRIMARY KEY (`id_slip`),
  ADD KEY `id_bayar_kamar` (`id_bayar_kamar`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ansuran`
--
ALTER TABLE `ansuran`
  MODIFY `id_ansuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_bayar_kamar`
--
ALTER TABLE `data_bayar_kamar`
  MODIFY `id_bayar_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `data_checkout`
--
ALTER TABLE `data_checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `data_kamar`
--
ALTER TABLE `data_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `data_pindahan`
--
ALTER TABLE `data_pindahan`
  MODIFY `id_pindahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jlh_kamar`
--
ALTER TABLE `jlh_kamar`
  MODIFY `id_jlh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `notif_pengumuman`
--
ALTER TABLE `notif_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `notif_pesan`
--
ALTER TABLE `notif_pesan`
  MODIFY `id_notif_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `notif_register`
--
ALTER TABLE `notif_register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `notif_slip`
--
ALTER TABLE `notif_slip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sisa_ansuran`
--
ALTER TABLE `sisa_ansuran`
  MODIFY `id_sisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `slip`
--
ALTER TABLE `slip`
  MODIFY `id_slip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_bayar_kamar`
--
ALTER TABLE `data_bayar_kamar`
  ADD CONSTRAINT `data_bayar_kamar_ibfk_2` FOREIGN KEY (`id_ansuran`) REFERENCES `ansuran` (`id_ansuran`),
  ADD CONSTRAINT `data_bayar_kamar_ibfk_5` FOREIGN KEY (`id_sisa`) REFERENCES `sisa_ansuran` (`id_sisa`);

--
-- Ketidakleluasaan untuk tabel `data_kamar`
--
ALTER TABLE `data_kamar`
  ADD CONSTRAINT `fasilitas` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`);

--
-- Ketidakleluasaan untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD CONSTRAINT `data_pengguna_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `data_kamar` (`id_kamar`),
  ADD CONSTRAINT `data_pengguna_ibfk_2` FOREIGN KEY (`id_pengumuman`) REFERENCES `pengumuman` (`id_pengumuman`),
  ADD CONSTRAINT `data_pengguna_ibfk_3` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id_pesan`),
  ADD CONSTRAINT `data_pengguna_ibfk_4` FOREIGN KEY (`id_jlh`) REFERENCES `jlh_kamar` (`id_jlh`),
  ADD CONSTRAINT `data_pengguna_ibfk_5` FOREIGN KEY (`id_checkout`) REFERENCES `data_checkout` (`id_checkout`),
  ADD CONSTRAINT `data_pengguna_ibfk_6` FOREIGN KEY (`id_pindahan`) REFERENCES `data_pindahan` (`id_pindahan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_hakakses` FOREIGN KEY (`hak_akses`) REFERENCES `hak_akses` (`id`);

--
-- Ketidakleluasaan untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `kamar` FOREIGN KEY (`id_kamar`) REFERENCES `data_kamar` (`id_kamar`);

--
-- Ketidakleluasaan untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`id`) REFERENCES `notif_pengumuman` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_notif_pesan`) REFERENCES `notif_pesan` (`id_notif_pesan`);

--
-- Ketidakleluasaan untuk tabel `slip`
--
ALTER TABLE `slip`
  ADD CONSTRAINT `slip_ibfk_1` FOREIGN KEY (`id_bayar_kamar`) REFERENCES `data_bayar_kamar` (`id_bayar_kamar`),
  ADD CONSTRAINT `slip_ibfk_2` FOREIGN KEY (`id`) REFERENCES `notif_slip` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
