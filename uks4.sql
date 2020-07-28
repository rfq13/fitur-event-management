-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Jul 2020 pada 06.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uks4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_master`
--

CREATE TABLE `data_master` (
  `id` int(11) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `nama_sekolah` varchar(123) NOT NULL,
  `fhoto` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_master`
--

INSERT INTO `data_master` (`id`, `nama`, `email`, `nama_sekolah`, `fhoto`) VALUES
(3, 'Lee-Jeong Hoo', 'ljhoon@mail.umi', 'SMK BISA', ''),
(4, 'byun-hyuk', 'byungangs00@gmaul.cip', 'SMK BYUNN', ''),
(5, 'kairi', 'kutilkijang@jui.com', 'SMK ISLAM AL BIKR', ''),
(6, 'kepet', 'ljhoon@mail.umi', 'sak karep', ''),
(7, 'kaul', 'ljhoon@mail.umi', 'SMK BRONO', ''),
(8, 'kieng', 'ljhoon@mail.umi', 'SMK SUBAY', ''),
(13, 'bismillah yaallah paringi ridlo', 'ridlonipiunyaallah@email.sot', 'SMK BRONO', ''),
(61, 'saz', 'asdxs@gmail.co', 'kajsnjkmz', ''),
(62, 'saz', 'asdxs@gmail.co', 'kajsnjkmz', ''),
(63, 'Lee Jeong-hoon jijng', 'hjswnsxj@ghavhbz.vcyu', 'smk bida', ''),
(64, 'saz', 'soccerind.id@gmail.com', 'smk sabar', ''),
(65, 'Lee Jeong-hoons', 'asdxs@gmail.co', 'Seung Jung', ''),
(66, 'wsaza', 'ridlonipiunyaallah@email.sot', 'SMK BRONO', ''),
(67, 'asz', 'ljhoon@mail.umi', 'sak karep', ''),
(68, 'saz', 'wdsaz@gmail.com', 'axz', ''),
(69, 'asz', 'ridlonipiunyaallah@email.sot', 'kajsnjkmz', ''),
(70, 'dsxza', 'ridlonipiunyaallah@email.sot', 'kajsnjkmz', ''),
(71, 'saz', 'asdxs@gmail.co', 'SMK BRONO', ''),
(72, 'sazuo', 'asdxs@gmail.co', 'sukses bro alhamdulillah', ''),
(73, 'asz', 'ridlonipiunyaallah@email.sot', 'SMK BRONO', ''),
(74, 'wsazaa', 'ridlonipiunyaallah@email.sot', 'SMK BISA', ''),
(75, 'sazawe', 'ridlonipiunyaallah@email.sot', 'SMK BRONO', ''),
(76, 'saz', 'ridlonipiunyaallah@email.sot', 'SMK BRONO', ''),
(77, 'saz', 'ridlonipiunyaallah@email.sot', 'SMK BRONO', ''),
(78, 'desi ratna sari', 'desirr@gbail.crot', 'kamisen', ''),
(79, 'desi ratna sari', 'desirr@gbail.crot', 'kamisen', ''),
(80, 'Lee Jeong-hoon', 'asdxs@gmail.co', 'sak karep', ''),
(81, 'Lee Jeong-hoon', 'asdxs@gmail.co', 'sak karep', ''),
(82, 'dsxzasiani', 'ridlonipiunyaallah@email.sot', 'SMK BISA', ''),
(83, 'dsxzasiani', 'ridlonipiunyaallah@email.sot', 'SMK BISA', ''),
(84, 'kaminten', 'ljhoon@mail.umi', 'SMK BRONO', ''),
(85, 'MUHAMMAD RIFQY FAKHRUL HADI', 'hadimrifqyfakhrul@paul.com', 'MI DADAR', ''),
(86, 'saz', 'ridlonipiunyaallah@email.sot', 'sak karep', ''),
(87, 'cak yit', 'senggendangcakyit@gmail.com', 'SANTOY', ''),
(88, 'ngiwie', 'ljhoon@mail.umi', 'kajsnjkmz', ''),
(89, 'cak to', 'cato@ahjsb.com', 'sak karep', ''),
(90, 'janatin', 'byh@hailnk.hn', 'kajsnjkmz', ''),
(91, 'kamil', 'kamiludin@gmail.com', 'samk mamak', ''),
(92, 'simpak', 'zaidanline67@gmail.com', 'simpak', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(123) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `kuota` int(123) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tgl_buka_pendaftaran` date NOT NULL,
  `tgl_tutup_Pendaftaran` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jenis` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `gambar` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama`, `kuota`, `deskripsi`, `tgl_buka_pendaftaran`, `tgl_tutup_Pendaftaran`, `tgl_mulai`, `tgl_selesai`, `jenis`, `status`, `gambar`) VALUES
(5, 'asxz', 2, 'AXz', '2020-05-11', '2020-05-21', '2020-05-28', '2020-05-31', 1, 1, 'default.jpg'),
(6, 'asxz', 2, 'AXz', '2020-05-11', '2020-05-21', '2020-05-28', '2020-05-31', 1, 1, 'default.jpg'),
(15, 'PANJAT PINANG', 50, '<p><strong>ini deskripsi</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 1, 'default.jpg'),
(16, 'makan krupuk', 17, '<p xss=removed><em>makan krupuk enak</em></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 1, 'default.jpg'),
(17, 'MAKAN BOTO', 19, '<p><em><span xss=removed>DESKRIPSI MAKAN BOTO</span></em></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 1, 'default.jpg'),
(18, 'kantal', 3, '<p>deskantal</p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 1, 'dsxz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fhoto`
--

CREATE TABLE `fhoto` (
  `id` int(123) NOT NULL,
  `nama` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fhoto`
--

INSERT INTO `fhoto` (`id`, `nama`) VALUES
(1, '0515logo.jpg'),
(2, '0520Capture.PNG'),
(3, '2012Penguins.jpg'),
(4, '2043Koala.jpg'),
(5, '15451.png'),
(6, '15486b2c58d96c3967a532cbd7f3fe908b43.jpg'),
(7, '060120190107_224006.jpg'),
(8, '061720190107_224043.jpg'),
(9, 'Screenshot_from_2020-04-19_13-04-05.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_event`
--

CREATE TABLE `jenis_event` (
  `id` int(11) NOT NULL,
  `jenis` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_event`
--

INSERT INTO `jenis_event` (`id`, `jenis`) VALUES
(1, 'Lomba'),
(2, 'Pelatihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok`
--

CREATE TABLE `kelompok` (
  `id` int(11) NOT NULL,
  `nama_kelompok` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_peserta` int(123) NOT NULL,
  `rfq` varchar(123) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `id_peserta`, `rfq`) VALUES
(1, 3, ''),
(2, 4, ''),
(3, 5, ''),
(4, 6, ''),
(5, 7, ''),
(6, 8, ''),
(7, 13, ''),
(8, 61, ''),
(9, 62, ''),
(10, 63, ''),
(11, 64, ''),
(12, 65, ''),
(13, 66, ''),
(14, 67, ''),
(15, 68, ''),
(16, 69, ''),
(17, 70, ''),
(18, 71, ''),
(19, 72, ''),
(20, 73, ''),
(21, 74, ''),
(22, 75, ''),
(23, 76, ''),
(24, 77, ''),
(25, 78, ''),
(26, 79, ''),
(27, 80, ''),
(28, 81, ''),
(29, 82, ''),
(30, 83, ''),
(31, 84, ''),
(32, 85, ''),
(33, 86, ''),
(34, 87, ''),
(35, 88, ''),
(36, 89, ''),
(37, 90, ''),
(38, 91, ''),
(39, 92, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `id_psrt` int(123) NOT NULL,
  `id_kelompok` int(123) NOT NULL,
  `id_event` int(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_master`
--
ALTER TABLE `data_master`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fhoto`
--
ALTER TABLE `fhoto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_event`
--
ALTER TABLE `jenis_event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_ibfk_1` (`id_peserta`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_master`
--
ALTER TABLE `data_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `fhoto`
--
ALTER TABLE `fhoto`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jenis_event`
--
ALTER TABLE `jenis_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
