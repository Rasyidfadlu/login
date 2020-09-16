-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2020 pada 01.49
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webtugasakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- Kesalahan membaca data untuk tabel db_webtugasakhir.failed_jobs: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `db_webtugasakhir`.`failed_jobs`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- Kesalahan membaca data untuk tabel db_webtugasakhir.migrations: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `db_webtugasakhir`.`migrations`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_berita`
--

CREATE TABLE `t_berita` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Headline` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `Isi` text NOT NULL,
  `Pengirim` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Kesalahan membaca data untuk tabel db_webtugasakhir.t_berita: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `db_webtugasakhir`.`t_berita`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_rujuk`
--

CREATE TABLE `t_rujuk` (
  `id` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `nm_rumahsakit` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Tingkat_rujukan` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_rujuk`
--

INSERT INTO `t_rujuk` (`id`, `file`, `nm_rumahsakit`, `Alamat`, `Tingkat_rujukan`, `updated_at`, `created_at`) VALUES
(5, '1591547182_rs-hasansadikin.jpeg', 'Rumah Sakit Hasan Sadikin', 'Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161', 'Kelas A', '2020-06-07 23:39:44', '2020-06-07 09:26:22'),
(6, '1591581310_rs-paru.jpg', 'Rumah Sakit Paru Dr. H. A. Rotinsulu', 'Jl. Bukit Jarian No.40, Hegarmanah, Kec. Cidadap, Kota Bandung, Jawa Barat 40141', 'Kelas B', '2020-06-07 23:39:55', '2020-06-07 18:55:10'),
(7, '1591589008_Syamsyuding.jpg', 'RSUD R. Syamsudin, SH Sukabumi', 'Jl. Rumah Sakit No.1, Sukabumi. Telp: (0266) 245703', 'Kelas A', '2020-06-07 21:03:28', '2020-06-07 21:03:28'),
(8, '1591589047_Rsgunung jati.jpg', 'RSUD Gunung Jati Cirebon', 'Jl. Kesambi Raya No.56, Cirebon. Telp: (0231) 206330', 'Kelas A', '2020-06-07 21:04:07', '2020-06-07 21:04:07'),
(9, '1591589112_SRbekasi.jpg', 'RSUD Kabupaten Bekasi', 'Jl. Raya Teuku Umar No.202, Bekasi. Telp: (021) 883 74 444', 'Kelas A', '2020-06-07 21:05:12', '2020-06-07 21:05:12'),
(10, '1591589291_sentramedi.jpg', 'RS Sentra Medika', 'Jl. Raya Industri Pasir Gombong - Cikarang, Bekasi. Telp: (021) 890 416 064', 'Kelas A', '2020-06-07 21:08:11', '2020-06-07 21:08:11'),
(11, '1591589329_siloam.JPG', 'RS Siloam Cikarang', 'Jl. MH. Thamrin No.Kav. 105, Cikarang, Bekasi. Telp: (021) 296 369 00', 'Kelas A', '2020-06-07 21:08:49', '2020-06-07 21:08:49'),
(12, '1591589425_rsud-tidar.jpg', 'RSUD Tidar Magelang', 'Jl. Tidar No.30 A, Magelang. Telp: (0293) 36226', 'kelas D', '2020-06-07 21:10:25', '2020-06-07 21:10:25'),
(13, '1591589543_kardinah.jpg', 'RSUD Kardinah Tegal', 'Jl. Aip. Ks. Tubun No. 4, Tegal. Telp: (0283) 356067', 'kelas C', '2020-06-07 21:12:23', '2020-06-07 21:12:23'),
(14, '1591589646_senopati.jpg', 'RSUD Panembahan Senopati Bantul', 'Jl. Dr. Wahidin Sudiro Husodo, Bantul. Telp: (0274) 367381', 'kelas B', '2020-06-07 21:14:06', '2020-06-07 21:14:06'),
(15, '1591589732_Soepomo.jpg', 'RSUD dr. Soetomo', 'Jl. Mayjen Prof. Dr. Moestopo No.6 – 8, Surabaya. Telp: (031) 5501078', 'kelas C', '2020-06-07 21:15:32', '2020-06-07 21:15:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_rujuk`
--
ALTER TABLE `t_rujuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `t_rujuk`
--
ALTER TABLE `t_rujuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
