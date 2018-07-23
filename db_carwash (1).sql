-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jul 2018 pada 14.25
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_carwash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `nama_lengkap`, `email`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'Admin CarWash', 'admin@admin.com', 'Administrator', 'Aktif'),
(2, 'bagoessprasetyo', 'asdasd123', 'Bagus Prasetyo', 'prasetyobagus7@gmail.com', 'Pemilik', 'Aktif'),
(3, 'haha', 'haha', 'ghahahaha', 'hahaha@gmail.com', 'Kasir', 'Aktif'),
(4, 'pemilik', 'pemilik', 'pemilik', 'pemilik@gmail.com', 'Pemilik', 'Aktif'),
(6, 'kasir', 'kasir', 'kasir', 'kasir@gmail.com', 'Kasir', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carwash`
--

CREATE TABLE `carwash` (
  `id_carwash` int(11) NOT NULL,
  `no_izin` int(123) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kontak` int(11) NOT NULL,
  `email` varchar(123) NOT NULL,
  `nama_pemilik` varchar(123) NOT NULL,
  `alamat` text NOT NULL,
  `kuota` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `logo_carwash` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Aktif',
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `carwash`
--

INSERT INTO `carwash` (`id_carwash`, `no_izin`, `nama`, `kontak`, `email`, `nama_pemilik`, `alamat`, `kuota`, `deskripsi`, `logo_carwash`, `status`, `id_akun`) VALUES
(1, 0, 'Cuci Mobil Oren', 2147483647, '', '', 'Bekasi', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam arcu, rutrum vel tincidunt non, blandit sit amet mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Duis eget felis hendrerit erat gravida euismod. Sed lobortis pellentesque dui, nec efficitur lorem scelerisque vitae. Quisque vulputate nibh at aliquam semper. Integer cursus turpis eu augue consequat consequat. Pellentesque pharetra laoreet eros, a efficitur nibh pharetra et. Nulla ultricies lacus libero, auctor scelerisque mi convallis nec. Proin nibh odio, posuere in pretium blandit, venenatis quis lectus. Aliquam at urna a odio dictum luctus et imperdiet nibh. Vivamus condimentum sem nisi, quis molestie enim fringilla eu. Aenean a feugiat erat. Proin ornare odio ante. Nunc eget ex nec quam consequat facilisis non tincidunt risus. Mauris vulputate velit dolor, quis efficitur magna lobortis vel.\r\n\r\nMorbi ut tellus facilisis, gravida neque ac, varius magna. Morbi at sagittis augue. Donec eu dolor vitae neque congue lacinia a id enim. Suspendisse arcu mi, gravida ut nulla sit amet, rhoncus rhoncus sem. Pellentesque blandit porta odio quis finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus est id vulputate mollis. In nibh diam, maximus nec pulvinar id, pretium in diam. Ut a rhoncus odio. Donec dictum molestie mattis. Suspendisse in felis a justo scelerisque vulputate vel bibendum mi. Morbi posuere luctus accumsan. Cras eu mattis augue, eget venenatis urna. Cras rutrum imperdiet sodales. Quisque at libero placerat, dapibus mauris luctus, posuere velit.\r\n\r\nSed condimentum consequat enim, euismod sodales arcu volutpat rhoncus. Proin ex purus, dictum pharetra pulvinar ac, tincidunt non metus. Proin placerat dui vitae metus molestie, a euismod arcu tincidunt. Donec ut quam lorem. Nam sed mi hendrerit, consectetur odio vel, scelerisque felis. Morbi fermentum velit velit. In non tempor massa, quis vulputate lacus. Nam cursus bibendum ultricies. Cras ut dignissim orci, quis vestibulum libero. Donec eu magna maximus, consectetur risus in, tincidunt lectus. Aenean tempus nisi ut arcu tincidunt, eu consectetur est luctus. Integer euismod erat nunc, consectetur rhoncus lorem efficitur ut. Nam odio tellus, molestie et ipsum non, interdum congue orci.', 'background_login_2.png', 'Aktif', 2),
(2, 0, 'Cuci Mobil Kuning', 2147483647, '', '', 'Bandung', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam arcu, rutrum vel tincidunt non, blandit sit amet mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Duis eget felis hendrerit erat gravida euismod. Sed lobortis pellentesque dui, nec efficitur lorem scelerisque vitae. Quisque vulputate nibh at aliquam semper. Integer cursus turpis eu augue consequat consequat. Pellentesque pharetra laoreet eros, a efficitur nibh pharetra et. Nulla ultricies lacus libero, auctor scelerisque mi convallis nec. Proin nibh odio, posuere in pretium blandit, venenatis quis lectus. Aliquam at urna a odio dictum luctus et imperdiet nibh. Vivamus condimentum sem nisi, quis molestie enim fringilla eu. Aenean a feugiat erat. Proin ornare odio ante. Nunc eget ex nec quam consequat facilisis non tincidunt risus. Mauris vulputate velit dolor, quis efficitur magna lobortis vel.\r\n\r\nMorbi ut tellus facilisis, gravida neque ac, varius magna. Morbi at sagittis augue. Donec eu dolor vitae neque congue lacinia a id enim. Suspendisse arcu mi, gravida ut nulla sit amet, rhoncus rhoncus sem. Pellentesque blandit porta odio quis finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus est id vulputate mollis. In nibh diam, maximus nec pulvinar id, pretium in diam. Ut a rhoncus odio. Donec dictum molestie mattis. Suspendisse in felis a justo scelerisque vulputate vel bibendum mi. Morbi posuere luctus accumsan. Cras eu mattis augue, eget venenatis urna. Cras rutrum imperdiet sodales. Quisque at libero placerat, dapibus mauris luctus, posuere velit.\r\n\r\nSed condimentum consequat enim, euismod sodales arcu volutpat rhoncus. Proin ex purus, dictum pharetra pulvinar ac, tincidunt non metus. Proin placerat dui vitae metus molestie, a euismod arcu tincidunt. Donec ut quam lorem. Nam sed mi hendrerit, consectetur odio vel, scelerisque felis. Morbi fermentum velit velit. In non tempor massa, quis vulputate lacus. Nam cursus bibendum ultricies. Cras ut dignissim orci, quis vestibulum libero. Donec eu magna maximus, consectetur risus in, tincidunt lectus. Aenean tempus nisi ut arcu tincidunt, eu consectetur est luctus. Integer euismod erat nunc, consectetur rhoncus lorem efficitur ut. Nam odio tellus, molestie et ipsum non, interdum congue orci.', 'background_login_1.png', 'Aktif', 2),
(3, 18203818, 'fadhil', 1414, 'fadhilkesuma65@gmail.com', 'fadhil awawa', 'bandung', 0, 'saaaasdsad', '5.png', 'Aktif', 0),
(4, 0, 'asd', 0, 'asd', 'asd', 'asd', 0, 'asd', '5.png', 'Aktif', 0),
(5, 0, 'zxc', 0, 'xzc', 'zxc', 'zxc', 0, 'zxc', '1.jpg', 'Aktif', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(150) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telp`, `email`, `alamat`, `status`) VALUES
(1, 'Yatzir OS', '08978809297', 'prasetyobagus7@gmail.com', 'Bekasi', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_carwash` int(11) NOT NULL,
  `nama_pemesan` varchar(123) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `plat_nomor` varchar(50) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_cuci` date NOT NULL,
  `note` text NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `uang_bayar` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `id_carwash`, `nama_pemesan`, `id_tipe`, `jenis`, `plat_nomor`, `tanggal_pesan`, `tanggal_cuci`, `note`, `total_biaya`, `uang_bayar`, `status`) VALUES
(7, 0, 0, 'Joko', 1, 'Kijang', 'B 2019 WKK', '2018-07-23', '2018-07-25', 'Asal Bersih', 100000, 50000, 'dp'),
(8, 0, 0, 'Bargundi', 2, 'Avanza', 'B 123 BK', '2018-07-23', '2018-07-24', 'Langsung', 150000, 150000, 'lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_cuci`
--

CREATE TABLE `tipe_cuci` (
  `id_tipe` int(11) NOT NULL,
  `nama_tipe` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_cuci`
--

INSERT INTO `tipe_cuci` (`id_tipe`, `nama_tipe`, `harga`) VALUES
(1, 'Normal', 100000),
(2, 'Cepat', 150000),
(3, 'Express', 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `nama_pelanggan` varchar(123) NOT NULL,
  `nopol` varchar(123) NOT NULL,
  `jenis_cuci` varchar(123) NOT NULL,
  `merk_mobil` varchar(123) NOT NULL,
  `status` varchar(231) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pemesanan`, `nama_pelanggan`, `nopol`, `jenis_cuci`, `merk_mobil`, `status`, `tanggal`, `biaya`) VALUES
(1, 0, '', '', '', '', '', '2018-07-17', 100000),
(2, 0, '', '', '', '', '', '2018-07-12', 150000),
(3, 0, 'koko', 'B 1319 WK', '3', 'Honda Brio', '', '2018-07-12', 200000),
(4, 0, 'kiki', 'B 1343 WK', '2', 'Honda Agya', '', '2018-08-01', 150000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `carwash`
--
ALTER TABLE `carwash`
  ADD PRIMARY KEY (`id_carwash`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tipe_cuci`
--
ALTER TABLE `tipe_cuci`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `carwash`
--
ALTER TABLE `carwash`
  MODIFY `id_carwash` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tipe_cuci`
--
ALTER TABLE `tipe_cuci`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;