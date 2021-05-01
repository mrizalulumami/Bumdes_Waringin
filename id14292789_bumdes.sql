-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Bulan Mei 2021 pada 05.50
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14292789_bumdes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_profile`
--

CREATE TABLE `artikel_profile` (
  `id_artprof` int(11) NOT NULL,
  `judul_prof` text NOT NULL,
  `gambar_prof` varchar(130) NOT NULL,
  `deskrips` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel_profile`
--

INSERT INTO `artikel_profile` (`id_artprof`, `judul_prof`, `gambar_prof`, `deskrips`) VALUES
(7, 'Bantuan Usaha', '2.png', 'Di gambar mengilustrasikan pekerja pangkas rambut yang dibiayai oleh bumdes'),
(8, 'Bantuan Usaha Makanan', 'post_10.png', 'Di gambar mengilustrasikan phasil dari usaha makanan yang dibiayai oleh bumdes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_selamatdatang`
--

CREATE TABLE `artikel_selamatdatang` (
  `id_artsel` int(11) NOT NULL,
  `judul_sambutan` text NOT NULL,
  `isi_sambutan` text NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel_selamatdatang`
--

INSERT INTO `artikel_selamatdatang` (`id_artsel`, `judul_sambutan`, `isi_sambutan`, `gambar`) VALUES
(11, 'SELAMAT DATANG DI WEBSITE BUMDES DESA WARINGIN', 'Semoga kami Dapat membantu anda', 'h1_hero.jpg'),
(13, 'SELAMAT DATANG DI WEBSITE BUMDES DESA WARINGIN', 'Semoga kami Dapat membantu anda', 'IMG20200922104607.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peminjam`
--

CREATE TABLE `data_peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `tempat` text NOT NULL,
  `ttl` date NOT NULL,
  `foto_kk` varchar(128) NOT NULL,
  `total` int(11) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_peminjam`
--

INSERT INTO `data_peminjam` (`id_peminjam`, `foto`, `nama`, `nik`, `alamat`, `tempat`, `ttl`, `foto_kk`, `total`, `ket`) VALUES
(9, 'bumdes.png', 'M. Rizalul Umami', '1234567890123456', 'Cengok', 'Cengok', '2020-09-20', 'Diagram_blower_murah2.jpg', 2000000, 'jual bensin'),
(12, 'ijang1.jpg', 'M. Rizalul Umami', '1234567890123456', 'Cengok', 'Cengok', '2020-09-23', 'Diagram_blower_murah1.jpg', 1000000, 'jual bensin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_artiservis` int(11) NOT NULL,
  `icon_serv` varchar(128) NOT NULL,
  `judul_serv` text NOT NULL,
  `ket_serv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_artiservis`, `icon_serv`, `judul_serv`, `ket_serv`) VALUES
(1, 'flaticon-checklist', 'Strategic Planning', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.'),
(2, 'flaticon-audit', 'Trades & stocks', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.'),
(4, 'flaticon-checklist-1', 'Keamanan akun', 'Dengan Memilih menu keamanan akun,anda dapat mengelola akun sendiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'M.Rizalul Umami', 'ijang@druf.com', 'fx.jpg', '$2y$10$wykk2NcuJxM0nR9kae5KEOz3izt3E9sbpAjSPLmRR9.x3qJK2cvVG', 1, 1, 1599291705),
(2, 'Hafizul Khaeri', 'hafiz@druf.com', 'ardui3.jpg', '$2y$10$vL6lEyrCPnZsDJ0pJCbDtueHDKKz7ee3MjhHBmsCMTPR4P4imKrLC', 2, 1, 1599467516),
(3, 'MUHAMMAD ALI MORDANI', 'mordani@gmail.com', 'patuhkarya.png', '$2y$10$O4lWawzOpHC2JzUSUw79d.5AQyHOfC3NQRZdwuH1DB960dMXlu/Da', 1, 1, 1600654174),
(4, 'admin', 'admin@fmail.com', 'ardui5.jpg', '$2y$10$lPf44QGuX8gX0P8sUStydO5K52WOCjKVDf5GljxfF4VLfk1XiLPX6', 1, 1, 1600744518);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Post');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Pengelola Akses User', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(9, 4, 'Postingan', 'postingan', 'far fa-fw fa-newspaper', 1),
(10, 4, 'Tambah Postingan', 'postingan/tambah', 'fas fa-fw fa-folder-plus', 1),
(11, 1, 'Data Peminjam modal', 'admin/datapeminjam', 'fas fa-fw fa-users', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel_profile`
--
ALTER TABLE `artikel_profile`
  ADD PRIMARY KEY (`id_artprof`);

--
-- Indeks untuk tabel `artikel_selamatdatang`
--
ALTER TABLE `artikel_selamatdatang`
  ADD PRIMARY KEY (`id_artsel`);

--
-- Indeks untuk tabel `data_peminjam`
--
ALTER TABLE `data_peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_artiservis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel_profile`
--
ALTER TABLE `artikel_profile`
  MODIFY `id_artprof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `artikel_selamatdatang`
--
ALTER TABLE `artikel_selamatdatang`
  MODIFY `id_artsel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id_artiservis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
