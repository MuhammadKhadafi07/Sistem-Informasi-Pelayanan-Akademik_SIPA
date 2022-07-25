-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2022 at 10:24 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pblsipa`
--

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__imagelogin`
--

CREATE TABLE `superadmin__imagelogin` (
  `id` varchar(36) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal_diubah` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__imagelogin`
--

INSERT INTO `superadmin__imagelogin` (`id`, `foto`, `tanggal_diubah`, `created_at`, `updated_at`) VALUES
('968b3c67-3a09-4b69-ab72-6f1091718e70', 'app/images/imagelogin/sipa.jpg', '2022-07-19', '2022-07-13 18:27:23', '2022-07-19 07:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa`
--

CREATE TABLE `superadmin__mahasiswa` (
  `id` char(36) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `program_studi` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_alumni` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa`
--

INSERT INTO `superadmin__mahasiswa` (`id`, `nim`, `nama`, `foto`, `program_studi`, `agama`, `jenis_kelamin`, `tempat_lahir`, `no_telepon`, `angkatan`, `tanggal_lahir`, `password`, `is_alumni`, `created_at`, `updated_at`) VALUES
('962cc99a-ecc0-442f-8ecf-c15d9079920d', '3042020026', 'Muhammad Khadafi', 'app/images/mahasiswa/962cc99a-ecc0-442f-8ecf-c15d9079920d-1654755480-3J8gt.jpg', 'Teknologi Pertambangan', 'Islam', 'Laki-laki', 'Kendawangan', '8523059038', '2020', '2002-10-05', '$2y$10$S83e17HUmyoTbR9YnPKHze4tq1nVA9JRf1ppYKIdIHZmv2OJ.Bu5a', NULL, '2022-06-29 22:26:56', '2022-06-30 05:26:56'),
('963562b5-849f-4322-831e-5d712e78ba5e', '3042020027', 'Muhammad Khadafi 2', 'app/images/mahasiswa/963562b5-849f-4322-831e-5d712e78ba5e-1653111695-Kg0Yn.jpg', 'Pemeliharaan Mesin', 'Islam', 'Laki-laki', 'Ketapang', '05834058', '2020', '2001-10-05', '$2y$10$goGkxVnm9Ne0pB.EsJME6u7SQw7KCQhammbq.Trc7qrdl.vY.5x3u', 1, '2022-06-23 19:25:28', '2022-06-23 19:25:28'),
('96416b89-a47b-4d9e-a4f8-69e67aff3e89', '3042020080', 'Muhammad Khadafi 3', 'app/images/mahasiswa/96416b89-a47b-4d9e-a4f8-69e67aff3e89-1653112117-DQEme.jpg', 'Teknologi Pertambangan', 'Islam', 'Laki-laki', 'Ketapang', '34023842390', '2021', '2002-10-05', '$2y$10$887scgSCXeHEufKHQYV7sONPBuHPQD8.I7lXlcW7zK5uQ/4Mkbe0S', NULL, '2022-05-24 04:18:18', '2022-05-24 11:18:18'),
('965cba0f-ab00-4c29-90ac-766ab88aa938', '3042020031', 'Muhammad Khadafi 4', 'app/images/mahasiswa/965cba0f-ab00-4c29-90ac-766ab88aa938-1653250027-QTZkZ.jpg', 'Teknologi Hasil Perkebunan', 'Islam', 'Laki-laki', 'Kendawangan', '089668329191', '2020', '2001-10-05', '$2y$10$4bEkeoDMZui0T3a7iOzY3uMJH2ndWauBA7tPo1idiVWpmP4DEWSnG', NULL, '2022-05-24 04:18:30', '2022-05-24 11:18:30'),
('965d4d78-c1c4-48ef-bc74-f76b9b22f495', '3042020032', 'Muhammad Khadafi 5', 'app/images/mahasiswa/965d4d78-c1c4-48ef-bc74-f76b9b22f495-1653274758-5hql5.jpg', 'Teknologi Produksi Tanaman Perkebunan', 'Islam', 'Laki-laki', 'Kendawangan', '089663294391', '2021', '2001-10-05', '$2y$10$fznBHxUMmoVQD7NRYuJMpOm4eYPfTJ0JDYz0qPzYin6.SuocIACli', NULL, '2022-05-24 04:17:51', '2022-05-24 11:17:51'),
('965e9b3b-9def-4909-9f97-03a27e338a1a', '3042020030', 'Muhammad Khadafi 6', 'app/images/mahasiswa/965e9b3b-9def-4909-9f97-03a27e338a1a-1653330755-QMD3l.jpg', 'Agroindustri', 'Islam', 'Laki-laki', 'kendawangan', '820589084', '2020', '2001-10-05', '$2y$10$9jQZ34fgUYPhH6Pi4a53uu/Yac1EabhiVXB5e6HFYWfb/bVxzWlk.', NULL, '2022-05-24 04:37:01', '2022-05-24 11:37:01'),
('965eba8e-18cd-478e-af6d-6dd9d5c4ae4f', '3042020025', 'Erpi Raviz Ullygio', 'app/images/mahasiswa/965eba8e-18cd-478e-af6d-6dd9d5c4ae4f-1653336009-SOfZE.jpg', 'Teknologi Rekayasa Konstruksi Jalan dan Jembatan', 'Islam', 'Laki-laki', 'Ketapang', '05740583', '2020', '98521-02-05', '$2y$10$GCa9E6dYMp7T2u.QtfFUdO9jNgv1KlUnZLePbzw81K560b2Dyv.wG', NULL, '2022-05-24 04:37:12', '2022-05-24 11:37:12'),
('965f74f9-9a23-44b2-aea0-17fb314f1a7f', '3042020033', 'Kabuto', 'app/images/mahasiswa/965f74f9-9a23-44b2-aea0-17fb314f1a7f-1653367285-l9Vqp.png', 'Teknologi Produksi Tanaman Perkebunan', 'Islam', 'Laki-laki', 'Konoha', '5346685678', '2019', '1993-02-04', '$2y$10$ujEbp2rsZHjfSURqjmh9te41D3SulHLjJ9sEMLOQwPhUYjCfJpSq2', NULL, '2022-05-24 04:41:25', '2022-05-24 11:41:25'),
('966bbb1d-202c-4c19-ac2e-648fa07718ef', '3042020067', 'Erpi Raviz Ullygio', 'app/images/mahasiswa/966bbb1d-202c-4c19-ac2e-648fa07718ef-1653894449-qjW6O.jpg', 'Teknologi Informasi', 'Islam', 'Laki-laki', 'Ketapang', '0897632981378', '2020', '2001-08-05', '$2y$10$/7f/ibWTjR.OKc6ADn5rvucyBLBWLECL8CLIUbO.cYW8qSpoH77X6', NULL, '2022-05-30 07:07:29', '2022-05-30 14:07:29'),
('967ae506-e51c-42d5-8894-de49fe966ca4', '3042020001', 'Muhammad Khadafi 7', 'app/images/mahasiswa/967ae506-e51c-42d5-8894-de49fe966ca4-1654545726-NtZjg.png', 'Teknologi Informasi', 'Islam', 'Laki-laki', 'Kendawangan', '0980840348', '2020', '2001-10-05', '$2y$10$yAL4fVVWwFuj8djrnVz9nubcXD3Nug0WUBV27g4BXa9AWU4saRUNu', NULL, '2022-06-06 20:15:09', '2022-06-07 03:15:09'),
('967f93c6-76ad-499e-8cc2-78cbea7f6154', '3042020002', 'Muhammad Khadafi 8', 'app/images/mahasiswa/967f93c6-76ad-499e-8cc2-78cbea7f6154-1654746842-v1jsQ.jpg', 'Teknologi Listrik', 'Islam', 'Laki-laki', 'kendawangan', '0896683291922', '2020', '2003-10-05', '$2y$10$9iYwS51tqLkx51uLRjkopuE7oz/zC3wUiCJ/7RjVkaHS7pJBPT7o2', 1, '2022-06-23 19:25:39', '2022-07-22 13:55:09'),
('967f94b4-e5b7-4931-a824-05ba4091102f', '3042020003', 'Muhammad Khadafi 9', 'app/images/mahasiswa/967f94b4-e5b7-4931-a824-05ba4091102f-1658498307-jhVbO.jpg', 'Teknologi Pertambangan', 'Islam', 'Laki-laki', 'Ketapang', '089668329192', '2020', '2003-01-10', '$2y$10$.BgP0F9.bl1Jm8RelQHsg.eHxIuTXCrPlJ7kIE3VZdxO5ubTtyCGG', NULL, '2022-06-09 03:56:39', '2022-07-22 13:58:27'),
('967fa6c7-091a-4eb5-829e-f59c016a7433', '3042020004', 'Muhammad Khadafi 10', 'app/images/mahasiswa/967fa6c7-091a-4eb5-829e-f59c016a7433-1654750030-Rf7PH.jpg', 'Teknologi Pertambangan', 'Islam', 'Laki-laki', 'kendawangan', '089668329112', '2020', '2000-10-05', '$2y$10$a02pH5NcM3IVa/jeYNSxB.8Tclk2WQW3pEfllwR2mH5LyJaJj0ptO', NULL, '2022-06-09 04:47:10', '2022-06-09 11:47:10'),
('968ca689-373e-455f-951d-3922ed417dfa', '3042020006', 'Aria', 'app/images/mahasiswa/968ca689-373e-455f-951d-3922ed417dfa-1655308336-VXvh1.jpg', 'Teknologi Informasi', 'Islam', 'Laki-laki', 'Ketapang', '8974389274', '2025', '27475-03-08', '$2y$10$wvRNmiQ04XLURYxrUQDuLOgH5RdSwjwmuFWe05joTE0Q.Flvfv1xC', 1, '2022-06-23 19:25:44', '2022-06-23 19:25:44'),
('969dc24c-5877-466b-b5ad-1ff43bef314d', '3042020008', 'Jalal', 'app/images/mahasiswa/969dc24c-5877-466b-b5ad-1ff43bef314d-1656043138-vVaFD.png', 'Teknologi Informasi', 'Islam', 'Laki-laki', 'Sukadana', '3728913', '2020', '2000-12-31', '$2y$10$nI/gET/jF6g4KCcQQTyGbeGaasHO9z9XgXR49d8E/GWcL/jNCi82i', NULL, '2022-06-24 03:58:58', '2022-06-24 10:58:58'),
('96a34dbb-e17f-480a-b0a7-2fdbc67c1abf', '3042435435', 'Indra', 'app/images/mahasiswa/96a34dbb-e17f-480a-b0a7-2fdbc67c1abf-1656281279-drdIn.jpg', 'Teknologi Hasil Perkebunan', 'Islam', 'Laki-laki', 'Kendawangan', '089668329191', '2011', '2000-03-04', '$2y$10$1EwtUyU78ZpabVc5gsUEKuW7P85p/uMYzNfdkfEh0hnRssYxo2NNW', NULL, '2022-06-26 22:07:59', '2022-06-27 05:07:59'),
('96b33b81-ecfe-4469-be97-d8459ba8d021', '3042020220', 'Muhammad Khadafi', 'app/images/mahasiswa/96b33b81-ecfe-4469-be97-d8459ba8d021-1656965416-gltzE.jpg', 'Teknologi Informasi', 'Islam', 'Laki-laki', 'Kendawangan', '089668329191', '2020', '2002-10-05', '$2y$10$8JaILJWQZoz3M8k/tz3KhOw5Cuz1P.ZZLEpWEDNk2.B19QFAiEnz6', NULL, '2022-07-04 20:10:17', '2022-07-05 03:10:17'),
('96b34132-5538-4b52-8861-39f9323c89fc', '3042020210', 'Erpi', 'app/images/mahasiswa/96b34132-5538-4b52-8861-39f9323c89fc-1656966371-NlWOn.jpg', 'Teknologi Informasi', 'Islam', 'Laki-laki', 'Ketapang', '089668329191', '2020', '2001-10-10', '$2y$10$VT96HvOfyVgYC.IKbGC7gOAKuwL7MkzlcingrDSweOGkC/YwMKXFa', 1, '2022-07-04 20:26:11', '2022-07-05 03:26:11'),
('96c53152-7767-4288-85e6-6a8514d16b97', '3042020791', 'Veni Kusuma Wulandari', 'app/images/mahasiswa/96c53152-7767-4288-85e6-6a8514d16b97-1657736802-xNFCB.jpg', 'Teknologi Informasi', 'Islam', 'Perempuan', 'Ketapang', '085988934758', '2020', '2001-04-08', '$2y$10$BSqITJi9RKxjQVUxOJPrwe/PKQpncUD5kF1tVSVKVmNKL8O61jnR.', NULL, '2022-07-13 18:26:59', '2022-07-25 09:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__alumni`
--

CREATE TABLE `superadmin__mahasiswa__alumni` (
  `id` char(36) NOT NULL,
  `id_bukualumni` char(36) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kegiatan_sekarang` varchar(255) NOT NULL,
  `jenis_pekerjaan` varchar(255) DEFAULT NULL,
  `jenis_pekerjaan_lainnya` varchar(255) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `kategori_perusahaan` varchar(255) DEFAULT NULL,
  `kategori_perusahaan_lainnya` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `waktu_tunggu_kerja` varchar(255) DEFAULT NULL,
  `kesesuaian_kompetensi` varchar(255) DEFAULT NULL,
  `gaji_pertama` varchar(255) DEFAULT NULL,
  `saran_masukan` varchar(255) NOT NULL,
  `kesan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa__alumni`
--

INSERT INTO `superadmin__mahasiswa__alumni` (`id`, `id_bukualumni`, `foto`, `email`, `no_hp`, `alamat`, `kegiatan_sekarang`, `jenis_pekerjaan`, `jenis_pekerjaan_lainnya`, `nama_perusahaan`, `kategori_perusahaan`, `kategori_perusahaan_lainnya`, `jabatan`, `waktu_tunggu_kerja`, `kesesuaian_kompetensi`, `gaji_pertama`, `saran_masukan`, `kesan`, `created_at`, `updated_at`) VALUES
('963562b5-849f-4322-831e-5d712e78ba5e', '96b3652b-c8fb-45dd-b5ad-f3dcc9e2e69f', 'app/images/alumni/963562b5-849f-4322-831e-5d712e78ba5e-1657692025-F7NMK.jpg', 'mhmmdkhadafi0707@gmail.com', '089668329191', 'Jalan M. Tohir, Tengah, kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78812', 'Bekerja', 'Karyawan Swasta/ BUMN/ BUMD/ BUMDES', NULL, 'PLN', 'Perusahaan Nasional', NULL, 'Admin', '0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus', 'Sesuai', '3 Juta - 5 Juta', 'tingkatkan', 'suke', '2022-06-13 06:00:25', '2022-07-19 05:04:13'),
('967f93c6-76ad-499e-8cc2-78cbea7f6154', '96b3652b-c8fb-45dd-b5ad-f3dcc9e2e69f', 'app/images/alumni/967f93c6-76ad-499e-8cc2-78cbea7f6154-1658209920-jsyQT.jpg', 'khadafi@gmail.com', '089668329191', 'Jalan M. Tohir, Tengah, kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78812', 'Bekerja', '1', 'Rumahan', 'Khadafi Made', '1', 'Punyaku sendiri', 'Bos', '0 Bulan/Langsung Bekerja/Dipesan Sebelum Lulus', 'Sangat Sesuai', 'Lebih dari 5 Juta', 'tingkatkan terus', 'kualitas di politap sangat bagus', '2022-07-19 05:52:00', '2022-07-19 05:52:25'),
('967f94b4-e5b7-4931-a824-05ba4091102f', '96b3652b-c8fb-45dd-b5ad-f3dcc9e2e69f', 'app/images/alumni/967f94b4-e5b7-4931-a824-05ba4091102f-1657316079-HPLfY.jpg', 'muhammad.khadafi@gmail.com', '089668329191', 'Jalan M. Tohir, Tengah, kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78812', 'Belum Bekerja', 'Pilih opsi', NULL, NULL, 'Pilih opsi', NULL, NULL, 'Pilih opsi', 'Pilih opsi', 'Pilih opsi', 'baguskan terus', 'suke', '2022-07-08 21:34:39', '2022-07-09 04:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__bukualumni`
--

CREATE TABLE `superadmin__mahasiswa__bukualumni` (
  `id` char(36) NOT NULL,
  `tahun_lulus` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa__bukualumni`
--

INSERT INTO `superadmin__mahasiswa__bukualumni` (`id`, `tahun_lulus`, `program_studi`, `created_at`, `updated_at`) VALUES
('96b36118-6603-4d92-a9d1-3513bf45dd4d', '2023', 'Pemeliharaan Mesin', '2022-07-04 22:06:16', '2022-07-05 05:06:16'),
('96b36512-a5dc-4ef1-9999-071616520686', '2023', 'Teknologi Pertambangan', '2022-07-05 05:06:30', '2022-07-05 05:06:30'),
('96b3651e-87dd-41b6-97fa-b44bcfe7c08b', '2023', 'Teknologi Hasil Perkebunan', '2022-07-05 05:06:38', '2022-07-05 05:06:38'),
('96b3652b-c8fb-45dd-b5ad-f3dcc9e2e69f', '2023', 'Teknologi Informasi', '2022-07-05 05:06:46', '2022-07-05 05:06:46'),
('96bb55f5-fd11-410c-a984-ccad349a594f', '2023', 'Agroindustri', '2022-07-09 03:50:52', '2022-07-09 03:50:52'),
('96bb5601-1ac2-4e08-876c-7f7b6afee146', '2023', 'Teknologi Listrik', '2022-07-09 03:50:59', '2022-07-09 03:50:59'),
('96c410f3-bae7-48c8-bc7b-bae409579b92', '2022', 'Teknologi Informasi', '2022-07-01 12:00:21', '2022-07-19 06:56:11'),
('96d476c4-d521-4a8e-a0f9-2c9c26313e12', '2024', 'Teknologi Informasi', '2022-07-21 08:38:18', '2022-07-21 08:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__etiket`
--

CREATE TABLE `superadmin__mahasiswa__etiket` (
  `id` char(36) NOT NULL,
  `id_mahasiswa` char(36) NOT NULL,
  `masalah` varchar(255) NOT NULL,
  `tingkat_masalah` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto_bukti` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `pesan_admin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa__etiket`
--

INSERT INTO `superadmin__mahasiswa__etiket` (`id`, `id_mahasiswa`, `masalah`, `tingkat_masalah`, `keterangan`, `foto_bukti`, `status`, `pesan_admin`, `created_at`, `updated_at`) VALUES
('96d02221-8808-4180-834f-42f3da11ff8a', '967f93c6-76ad-499e-8cc2-78cbea7f6154', 'Kesalahan Penulisan Data', 'Berat', 'salah tanggal lahir', 'app/images/etiket/96d02221-8808-4180-834f-42f3da11ff8a-1658206700-kGA81.png', 2, 'Data anda sudah diperbaiki', '2022-07-19 04:58:20', '2022-07-19 04:59:16'),
('96d0224f-a91a-40de-9a63-79b388461f75', '967f93c6-76ad-499e-8cc2-78cbea7f6154', 'kritik dan saran', 'Ringan', 'tingkatkan kecepatan pelayanan', NULL, 3, 'terima kasih', '2022-07-19 04:58:50', '2022-07-19 04:59:34'),
('96d03948-7041-43bd-9b2e-91014be7ddef', '967f94b4-e5b7-4931-a824-05ba4091102f', 'Saran', 'Ringan', 'ngade2', NULL, 3, 'tidak, terimakasih.', '2022-07-19 06:03:04', '2022-07-19 06:22:24'),
('96d039be-9812-4999-a6d6-fe3fbae58283', '967f94b4-e5b7-4931-a824-05ba4091102f', 'Kesalahan Penulisan Data', 'Berat', 'tanggal lahir di sistem salah min', NULL, 2, 'sudah diperbaiki.', '2022-07-19 06:04:21', '2022-07-19 06:22:02'),
('96d05127-2bf0-4a40-a298-54c39c9b9fb6', '967f94b4-e5b7-4931-a824-05ba4091102f', 'Kesalahan Penulisan Data', 'Berat', 'salah dalam menulis nama ketika register.', 'app/images/etiket/96d05127-2bf0-4a40-a298-54c39c9b9fb6-1658214588-mqWiF.jpg', 1, NULL, '2022-07-19 07:09:48', '2022-07-19 07:09:48'),
('96d46f26-eef4-409f-8ca5-326dae7c220f', '968ca689-373e-455f-951d-3922ed417dfa', 'Kesalahan Penulisan Data', 'Sedang', 'Salah input nama', NULL, 3, 'akan kami pikirkan', '2022-07-21 08:17:00', '2022-07-21 08:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__etiket__masalah`
--

CREATE TABLE `superadmin__mahasiswa__etiket__masalah` (
  `id` char(36) NOT NULL,
  `masalah` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa__etiket__masalah`
--

INSERT INTO `superadmin__mahasiswa__etiket__masalah` (`id`, `masalah`, `created_at`, `updated_at`) VALUES
('96659b2e-7d8e-48b3-9bbd-0fb3ecac94df', 'Kesalahan Penulisan Data', '2022-05-27 13:03:13', '2022-05-27 13:03:13'),
('9665ca6f-1ac6-45b6-a318-daad5cec1626', 'Pelayanan lambat', '2022-05-27 15:15:21', '2022-05-27 15:15:21'),
('9666801b-9042-4e80-895b-9bddf52b62d9', 'Saran', '2022-05-27 23:43:21', '2022-05-27 23:43:21'),
('966c8cc8-4d69-46c9-95df-a6bc83c13454', 'pelayanan sistem kurang sesuai', '2022-05-30 23:53:45', '2022-05-30 23:53:45'),
('96a95cc0-a36b-4726-93c8-2e3a47ec19b0', 'Pelayanan Admin', '2022-06-30 05:24:57', '2022-06-30 05:24:57'),
('96c40a49-edba-4b6b-acd7-2485d5d1a438', 'kritik dan saran', '2022-07-13 11:41:43', '2022-07-13 11:41:43'),
('96d47612-432e-48d0-aa35-a48a25620390', 'pelayanan sistem sulit dimengerti', '2022-07-21 08:36:21', '2022-07-21 08:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__pengajuanlegalisir`
--

CREATE TABLE `superadmin__mahasiswa__pengajuanlegalisir` (
  `id` char(36) NOT NULL,
  `id_mahasiswa` char(36) NOT NULL,
  `status` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `tanggal_diambil` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa__pengajuanlegalisir`
--

INSERT INTO `superadmin__mahasiswa__pengajuanlegalisir` (`id`, `id_mahasiswa`, `status`, `nama`, `no_hp`, `nim`, `tanggal_diambil`, `created_at`, `updated_at`) VALUES
('96b70acc-c5d1-4550-8a2b-b29f06ca1da1', '967f93c6-76ad-499e-8cc2-78cbea7f6154', 2, 'Muhammad Khadafi', '095884958340', '', '2022-07-10', '2022-07-07 00:37:23', '2022-07-09 04:12:26'),
('96c218ac-fd25-418e-9e88-fe97ec46434d', '967f93c6-76ad-499e-8cc2-78cbea7f6154', 3, 'Muhammad Khadafi', '089968329191', '', '2022-07-14', '2022-07-12 12:30:18', '2022-07-12 12:31:59'),
('96d0362f-3886-41cc-8252-3aefa624b302', '967f93c6-76ad-499e-8cc2-78cbea7f6154', 1, 'Muhammad Khadafi', '08968329191', '3042020026', NULL, '2022-07-19 05:54:24', '2022-07-19 05:54:24'),
('96d46efd-cfe1-42e4-bc38-74f8c41ed624', '968ca689-373e-455f-951d-3922ed417dfa', 3, 'Aria Agus Riadi', '08947329873', '3042020006', '2022-07-22', '2022-07-21 08:16:33', '2022-07-21 08:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__pengajuanmengikutiwisuda`
--

CREATE TABLE `superadmin__mahasiswa__pengajuanmengikutiwisuda` (
  `id` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__pengajuanpengambilanijazah`
--

CREATE TABLE `superadmin__mahasiswa__pengajuanpengambilanijazah` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `status_perpustakaan` int(11) NOT NULL,
  `status_jurusan` int(11) NOT NULL,
  `status_pengajuan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa__pengajuanpengambilanijazah`
--

INSERT INTO `superadmin__mahasiswa__pengajuanpengambilanijazah` (`id`, `nama`, `no_hp`, `nim`, `status_perpustakaan`, `status_jurusan`, `status_pengajuan`, `created_at`, `updated_at`) VALUES
('967f93c6-76ad-499e-8cc2-78cbea7f6154', 'Muhammad Khadafi', '089668329191', '3042020026', 2, 2, 2, '2022-07-19 05:53:20', '2022-07-21 08:43:41'),
('968ca689-373e-455f-951d-3922ed417dfa', 'Aria Agus Ariadi', '089088937298', '3042020006', 1, 1, 1, '2022-07-21 08:16:06', '2022-07-21 08:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__pengajuansuratketeranganaktif`
--

CREATE TABLE `superadmin__mahasiswa__pengajuansuratketeranganaktif` (
  `id` char(36) NOT NULL,
  `id_mahasiswa` char(36) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `alamat_rumahsekarang` varchar(255) NOT NULL,
  `nama_orangtua` varchar(255) NOT NULL,
  `tempat_kerja_orangtua` varchar(255) NOT NULL,
  `alamat_tinggal_orangtua` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `surat_keteranganaktif` varchar(255) DEFAULT NULL,
  `pesan_admin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa__pengajuansuratketeranganaktif`
--

INSERT INTO `superadmin__mahasiswa__pengajuansuratketeranganaktif` (`id`, `id_mahasiswa`, `semester`, `alamat_rumahsekarang`, `nama_orangtua`, `tempat_kerja_orangtua`, `alamat_tinggal_orangtua`, `keperluan`, `status`, `no_telepon`, `surat_keteranganaktif`, `pesan_admin`, `created_at`, `updated_at`) VALUES
('96c629ea-42a4-4601-90d9-a40a8c5a572a', '967f94b4-e5b7-4931-a824-05ba4091102f', '5', 'Ketapang', 'Darmawati', 'hgh', 'Ketapang', 'vsdfgsdfg', 2, '3905', 'app/surat/keterangan_aktif/96c629ea-42a4-4601-90d9-a40a8c5a572a-1658210779-3pN62.pdf', NULL, '2022-07-02 20:01:49', '2022-07-19 06:06:19'),
('96c62ba4-495b-4565-8a8c-c4c5048c26e7', '967f94b4-e5b7-4931-a824-05ba4091102f', '1', 'Ketapang', 'Darmawati', 'Kantor Lurah', 'sdv', 'vv', 3, '654645', NULL, 'Anda belum melunasi administrasi', '2022-07-01 20:06:38', '2022-07-19 06:05:08'),
('96d03ced-7656-415c-a04b-66a1a0e020ea', '967f94b4-e5b7-4931-a824-05ba4091102f', '5', 'Ketapang', 'Darmawati', 'PLN', 'Kendawangan', 'kerje', 2, '089668329191', NULL, NULL, '2022-07-19 06:13:15', '2022-07-19 06:13:26'),
('96d03d89-3fea-4ba9-8fb2-d6c0193162fc', '967f94b4-e5b7-4931-a824-05ba4091102f', '4', 'Ketapang', 'Darma Wati', 'PLN', 'Ketapang', 'untuk pengajuan mengikuti lomba', 3, '089668329191', NULL, 'anda belum melunasi administrasi, silahkan ajukan kembali jika sudah melunasi.', '2022-07-19 06:14:57', '2022-07-21 08:41:02'),
('96d04eb9-23cf-4e13-b201-6dc9c039b46e', '967f93c6-76ad-499e-8cc2-78cbea7f6154', '4', 'Ketapang', 'Darmawati', 'PLN', 'Ketapang', 'Melengkapi syarat untuk mendapatkan beasiswa.', 2, '089668329191', NULL, NULL, '2022-07-19 07:03:01', '2022-07-19 07:05:16'),
('96d04ede-5910-4002-a97f-ab39c7f99db2', '967f93c6-76ad-499e-8cc2-78cbea7f6154', '5', 'Ketapang', 'Darmawati', 'Ketapang', 'Ketapang', 'Melengkapi syarat mengikuti lomba atau kegiatan tertentu.', 3, '089668329191', NULL, 'anda belum melunasi biaya administrasi', '2022-07-19 07:03:25', '2022-07-19 07:05:37'),
('96d05081-a57e-4ee7-a0a4-3f093df44b4e', '967f94b4-e5b7-4931-a824-05ba4091102f', '4', 'Ketapang', 'Darmawati', 'PLN', 'Ketapang', 'Melengkapi syarat mengikuti lomba atau kegiatan tertentu.', 2, '089668329191', 'app/surat/keterangan_aktif/96d05081-a57e-4ee7-a0a4-3f093df44b4e-1658392791-scixj.pdf', NULL, '2022-07-19 07:08:00', '2022-07-21 08:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__pkkmb`
--

CREATE TABLE `superadmin__mahasiswa__pkkmb` (
  `id` char(36) NOT NULL,
  `id_mahasiswa` char(36) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa__pkkmb`
--

INSERT INTO `superadmin__mahasiswa__pkkmb` (`id`, `id_mahasiswa`, `nim`, `nama`, `foto`, `jenis_kelamin`, `program_studi`, `angkatan`, `agama`, `no_telepon`, `created_at`, `updated_at`) VALUES
('9687cb85-fd57-4999-965b-a906601ea426', '967f94b4-e5b7-4931-a824-05ba4091102f', '3042020061', 'Oka Saputra', 'app/images/pkkmb/data_pkkmb/9687cb85-fd57-4999-965b-a906601ea426-1655099793-m7fM3.jpg', 'Laki-laki', 'Pemeliharaan Mesin', '2020', 'Islam', '742340239543', '2022-06-18 04:25:51', '2022-06-18 11:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__pkkmb__absen`
--

CREATE TABLE `superadmin__mahasiswa__pkkmb__absen` (
  `id` char(36) NOT NULL,
  `id_pertemuan` char(36) NOT NULL,
  `id_mahasiswa` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__pkkmb__kelompok`
--

CREATE TABLE `superadmin__mahasiswa__pkkmb__kelompok` (
  `id` char(36) NOT NULL,
  `id_leader` char(36) DEFAULT NULL,
  `id_mahasiswa` char(36) DEFAULT NULL,
  `angkatan` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `kelompok` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa__pkkmb__kelompok`
--

INSERT INTO `superadmin__mahasiswa__pkkmb__kelompok` (`id`, `id_leader`, `id_mahasiswa`, `angkatan`, `program_studi`, `kelompok`, `created_at`, `updated_at`) VALUES
('9691cce6-ae15-420a-8eea-41452c92971a', NULL, NULL, '2022', 'Teknologi Informasi', 'Kelompok biru', '2022-06-18 12:18:41', '2022-06-18 12:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa__pkkmb__pertemuan`
--

CREATE TABLE `superadmin__mahasiswa__pkkmb__pertemuan` (
  `id` char(36) NOT NULL,
  `id_kelompok` char(36) NOT NULL,
  `tanggal` date NOT NULL,
  `materi_kegiatan` varchar(255) NOT NULL,
  `bukti_kegiatan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__module`
--

CREATE TABLE `superadmin__module` (
  `id` char(36) NOT NULL,
  `app` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__module`
--

INSERT INTO `superadmin__module` (`id`, `app`, `tag`, `name`, `title`, `subtitle`, `color`, `menu`, `url`, `created_at`, `updated_at`) VALUES
('96268eb8-9ed5-4e8f-9964-2ad04363e346', 'Super Admin', 'sipa-superadmin', 'Super Admin', 'Master Data', 'Super Admin', '#4863A0', 'superadmin', 'superadmin', '2022-06-24 06:46:41', '2022-06-24 13:46:41'),
('963f8202-5ee7-4806-bbef-a4e3e91e3ad1', 'Etiket', 'etiket-admin', 'Etiket Admin', 'Etiket', 'Admin', '#819FB3', 'etiket', 'etiket/admin', '2022-06-26 21:20:02', '2022-06-27 04:20:02'),
('964177b1-ac88-46cb-9607-1eba2d810b69', 'Etiket', 'etiket-kepalabaak', 'Etiket Kepala BAAK', 'Etiket', 'Kepala BAAK', '#6D9384', 'etiket', 'etiket/kepalabaak', '2022-06-26 21:13:46', '2022-06-27 04:13:46'),
('96436dce-616f-4068-b931-0829d3bf9456', 'Alumni', 'alumni-admin', 'Alumni Admin', 'Alumni', 'Admin', '#819FB3', 'alumni', 'alumni/admin', '2022-06-26 21:20:14', '2022-06-27 04:20:14'),
('96436eb4-bdae-4a52-8dbd-e32d6a04f208', 'Alumni', 'alumni-kepalabaak', 'Alumni Kepala BAAK', 'Alumni', 'Kepala BAAK', '#6D9384', 'alumni', 'alumni/kepalabaak', '2022-06-26 21:14:05', '2022-06-27 04:14:05'),
('9687d80e-9221-4794-b423-6432d95aa019', 'Pengajuan Surat Keterangan Aktif', 'pengajuansuratketeranganaktif-admin', 'Pengajuan Surat Keterangan Aktif Admin', 'Pengajuan Surat Keterangan Aktif', 'Admin', '#819FB3', 'pengajuansuratketeranganaktif', 'pengajuansuratketeranganaktif/admin', '2022-06-26 21:20:23', '2022-06-27 04:20:23'),
('968c9c68-03dd-4513-8262-0fb7d079f9cd', 'Pengajuan Surat Keterangan Aktif', 'pengajuansuratketeranganaktif-kepalabaak', 'Pengajuan Surat Keterangan Aktif Kepala BAAK', 'Pengajuan Surat Keterangan Aktif', 'Kepala BAAK', '#6D9384', 'pengajuansuratketeranganaktif', 'pengajuansuratketeranganaktif/kepalabaak', '2022-06-26 21:14:14', '2022-06-27 04:14:14'),
('9691e5ca-b7ad-4e1a-8bf2-ff5f0f116991', 'Pengajuan Legalisir', 'pengajuanlegalisir-admin', 'Pengajuan Legalisir Admin', 'Pengajuan Legalisir', 'Admin', '#819FB3', 'pengajuanlegalisir', 'pengajuanlegalisir/admin', '2022-06-26 21:20:31', '2022-06-27 04:20:31'),
('9693b00f-a843-4912-8305-6a68bbbcc3d1', 'Pengajuan Legalisir', 'pengajuanlegalisir-kepalabaak', 'Pengajuan Legalisir Kepala BAAK', 'Pengajuan Legalisir', 'Kepala BAAK', '#6D9384', 'pengajuanlegalisir', 'pengajuanlegalisir/kepalabaak', '2022-06-26 21:14:22', '2022-06-27 04:14:22'),
('969de3d9-7125-47be-a7f4-1597471adf8b', 'Admin', 'sipa-admin', 'Admin', 'Master Data', 'Admin', '#4863A0', 'admin', 'admin', '2022-06-24 06:46:56', '2022-06-24 13:46:56'),
('96a4f1e1-0397-4442-9490-8908afee0e55', 'Pengajuan Pengambilan Ijazah', 'pengajuanpengambilanijazah-admin', 'Pengajuan Pengambilan Ijazah Admin', 'Pengajuan Pengambilan Ijazah', 'Admin', '#819FB3', 'pengajuanpengambilanijazah', 'pengajuanpengambilanijazah/admin', '2022-06-28 00:42:49', '2022-06-28 00:42:49'),
('96a4f354-4189-4128-aefc-7fe6a8135442', 'Pengajuan Pengambilan Ijazah', 'pengajuanpengambilanijazah-kepalabaak', 'Pengajuan Pengambilan Ijazah Kepala BAAK', 'Pengajuan Pengambilan Ijazah', 'Kepala BAAK', '#6D9384', 'pengajuanpengambilanijazah', 'pengajuanpengambilanijazah/kepalabaak', '2022-06-28 00:46:51', '2022-06-28 00:46:51'),
('96a76862-db82-4767-a4f0-5167435102cb', 'Koor', 'koor-perpustakaan', 'Koor Perpustakaan', 'Koor', 'Perpustakaan', '#92817A', 'koor', 'koor/perpustakaan', '2022-06-29 03:08:51', '2022-06-29 10:08:51'),
('96a76af6-b1fb-4c28-8723-6dac9d6fe8f8', 'Koor', 'koor-jurusan', 'Koor Jurusan', 'Koor', 'Jurusan', '#92817A', 'koor', 'koor/jurusan', '2022-06-29 03:09:38', '2022-06-29 10:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__pegawai`
--

CREATE TABLE `superadmin__pegawai` (
  `id` char(36) NOT NULL,
  `status_pegawai` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__pegawai`
--

INSERT INTO `superadmin__pegawai` (`id`, `status_pegawai`, `nip`, `nama`, `foto`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('96576dec-ff91-48f2-b4f8-38e6928380ce', 'Admin', '12345678901324567', 'Muhammad Khadafi', 'app/images/pegawai/96576dec-ff91-48f2-b4f8-38e6928380ce-1653108029-55QV2.jpg', 'Laki-laki', 'Islam', 'Kendawangan', '2001-10-05', '089668329191', 'Muhammad Khadafi', 'khadafi@gmail.com', '$2y$10$VsXuSagT6M.BLi3SL7Tg1emU5h5cZ1wOtiTS.RSk7lBWjqYmkHx1a', NULL, '2022-06-26 20:59:35', '2022-06-27 03:59:35'),
('96578c40-f5ae-4de3-9e9d-ab92074c13a3', 'Admin', '423423422121', 'Khadafi 2', 'app/images/pegawai/96578c40-f5ae-4de3-9e9d-ab92074c13a3-1653367842-qz6tn.jpg', 'Laki-laki', 'Islam', 'Kendawangan', '2222-02-22', '08078974382', 'khadafi2', 'khadafi2@gmail.com', '$2y$10$Rl/gdyI2nzSV5j3W4X3hJewfubZiML8rHa91SEmdHz5g/AhA2g9ii', 'M5NIBTkRbVchzXfUQRaFRKljx166RFcoNLkKRRsyNdecHG4ihdigS0W4Ohol', '2022-07-13 18:23:28', '2022-07-25 09:29:44'),
('9659757b-3c5e-4a99-9494-18a44fa63ebf', 'Kepala BAAK', '4253464766457', 'Pak Sahardi', 'app/images/pegawai/9659757b-3c5e-4a99-9494-18a44fa63ebf-1653109672-dAdDG.jpg', 'Laki-laki', 'Islam', 'Ketapang', '2002-05-04', '089784379874', 'Pak Sahardi', 'sahardi@gmail.com', '$2y$10$B9LrIwSCGCd/Ktvks2SaOOyVIvhHQQQ5HEYJ7FB.ErF5Kt/agVDcy', NULL, '2022-06-23 21:15:44', '2022-07-20 17:03:24'),
('966bbdc6-374a-41ba-a910-13d7424ef9ce', 'Admin', '9437923923894', 'khadafi Muhammad', 'app/images/pegawai/966bbdc6-374a-41ba-a910-13d7424ef9ce-1653894895-gRlYt.jpg', 'Laki-laki', 'Islam', 'Kendawangan', '2001-10-05', '', 'khadafi', 'khadafi13@gmail.com', '$2y$10$3knxZM1ThSfyd/Nz1t950uCQN9PK8.duPc0OSa/VSBqkXNq8UQKwK', NULL, '2022-06-23 21:15:53', '2022-06-24 04:15:53'),
('967ae879-4a02-4cea-a373-687983adc1aa', 'Kepala BAAK', '12345678900981213', 'Muhammad Khadafi 2', 'app/images/pegawai/967ae879-4a02-4cea-a373-687983adc1aa-1654546304-EkqoO.jpg', 'Laki-laki', 'Islam', 'Kendawangan', '2002-10-05', '', 'khadafi 2', 'muhammadkhadafi2@gmail.com', '$2y$10$9T3SgzsGB8riNrULV1P.EOLMO3w49gOXig.TXQ4MSQO3SLEztz1r6', NULL, '2022-06-23 21:16:03', '2022-06-24 04:16:03'),
('96a3072b-dddf-4a67-b899-feeff6a1df1d', 'Kepala BAAK', '45435', 'Indra', 'app/images/pegawai/96a3072b-dddf-4a67-b899-feeff6a1df1d-1656269441-wEMev.jpg', 'Laki-laki', 'Islam', 'Ketapang', '1997-11-29', '0897947381478', 'Indra', 'indra@gmail.com', '$2y$10$z9eSeh.onzqW34YnVEAKG.GGetUxL/AWvjN.SPQtjDGwRreHmBJD2', NULL, '2022-06-26 18:54:08', '2022-06-27 01:54:08'),
('96a95acb-b5cb-487a-98e6-c118da837b45', 'Admin', '8737427834728', 'Reza', 'app/images/pegawai/96a95acb-b5cb-487a-98e6-c118da837b45-1656541169-K3jjB.jpg', 'Laki-laki', 'Islam', 'Ketapang', '1997-08-05', '08830821', 'Reza', 'reza@gmail.com', '$2y$10$50cp5WGthZ4kUDIw0SyMF.FMPino.snKAD2gDiB.eLGX1srUdbEWS', NULL, '2022-07-11 23:55:59', '2022-07-25 09:32:04'),
('96c1a2b9-8edc-4bb7-becc-2e26c3fc9e7a', 'Jurusan', '12345678901324561', 'Veni Kusuma Wulandari', 'app/images/pegawai/96c1a2b9-8edc-4bb7-becc-2e26c3fc9e7a-1658391149-Thjuk.png', 'Perempuan', 'Islam', 'Ketapang', '2002-08-14', '0898938181939', 'Veni Kusuma Wulandari', 'veni@gmail.com', '$2y$10$TQs6l4WT.9ELMRqlARqESuyVPhZ/VYj3H7ViuJatITmUJ0Y9WIxa.', NULL, '2022-07-12 00:00:29', '2022-07-21 08:12:29'),
('96c21686-ba9f-4532-8e6d-cc159b6e7759', 'Perpustakaan', '12345678901324594', 'Mawan', 'app/images/pegawai/96c21686-ba9f-4532-8e6d-cc159b6e7759-1657603457-vs9Tc.jpg', 'Laki-laki', 'Islam', 'Ketapang', '2001-12-08', '0897975894453', 'Mawan', 'mawan@gmail.com', '$2y$10$LFXkspBj6U6XSipFIyyX2eUGBYA831FyxmnHYDuPMdHCpPEeKqxdW', NULL, '2022-07-12 05:24:17', '2022-07-12 12:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__role`
--

CREATE TABLE `superadmin__role` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) NOT NULL,
  `id_module` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__role`
--

INSERT INTO `superadmin__role` (`id`, `id_pegawai`, `id_module`, `created_at`, `updated_at`) VALUES
('96596f3a-70c7-4787-a721-a377612af4f0', '96576dec-ff91-48f2-b4f8-38e6928380ce', '96268eb8-9ed5-4e8f-9964-2ad04363e346', '2022-05-21 11:50:23', '2022-05-21 11:50:23'),
('96596f42-a7f6-4cbf-bb5c-5ea252c9f0a1', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '96268eb8-9ed5-4e8f-9964-2ad04363e346', '2022-05-21 11:50:28', '2022-05-21 11:50:28'),
('96597036-b03e-4ce8-84de-99feca6e2a14', '96576dec-ff91-48f2-b4f8-38e6928380ce', '963f8202-5ee7-4806-bbef-a4e3e91e3ad1', '2022-05-21 11:53:08', '2022-05-21 11:53:08'),
('9659703c-8e0f-4f84-8ba5-a37ebd14afdf', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '963f8202-5ee7-4806-bbef-a4e3e91e3ad1', '2022-05-21 11:53:12', '2022-05-21 11:53:12'),
('96597244-c263-41c0-8c90-fc650bcbb78c', '96576dec-ff91-48f2-b4f8-38e6928380ce', '964177b1-ac88-46cb-9607-1eba2d810b69', '2022-05-21 11:58:53', '2022-05-21 11:58:53'),
('9659724c-5cc9-4eb3-a086-dfc9c9dcb408', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '964177b1-ac88-46cb-9607-1eba2d810b69', '2022-05-21 11:58:58', '2022-05-21 11:58:58'),
('965972aa-48e3-4097-b3a1-a248f2f5a87f', '96576dec-ff91-48f2-b4f8-38e6928380ce', '96436dce-616f-4068-b931-0829d3bf9456', '2022-05-21 12:00:00', '2022-05-21 12:00:00'),
('965972b3-ddec-4962-b327-fb535c2053d0', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '96436dce-616f-4068-b931-0829d3bf9456', '2022-05-21 12:00:06', '2022-05-21 12:00:06'),
('965972c9-4720-48d0-a845-38fabfca84b5', '96576dec-ff91-48f2-b4f8-38e6928380ce', '96436eb4-bdae-4a52-8dbd-e32d6a04f208', '2022-05-21 12:00:20', '2022-05-21 12:00:20'),
('965972cf-40f1-40f4-8247-f86578563910', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '96436eb4-bdae-4a52-8dbd-e32d6a04f208', '2022-05-21 12:00:24', '2022-05-21 12:00:24'),
('9687d837-ad23-4fd3-9336-0055d2db1063', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '9687d80e-9221-4794-b423-6432d95aa019', '2022-06-13 13:32:02', '2022-06-13 13:32:02'),
('968c9c80-50bd-4c90-8b5d-626b29b518b0', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '968c9c68-03dd-4513-8262-0fb7d079f9cd', '2022-06-15 22:24:12', '2022-06-15 22:24:12'),
('9691e5dc-88fe-4828-89ed-b4df019c04aa', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '9691e5ca-b7ad-4e1a-8bf2-ff5f0f116991', '2022-06-18 13:28:28', '2022-06-18 13:28:28'),
('9693b038-2350-4bb9-b766-ea0409f494b8', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '9693b00f-a843-4912-8305-6a68bbbcc3d1', '2022-06-19 10:50:08', '2022-06-19 10:50:08'),
('969df64e-c165-49db-94df-fdad106f1eef', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '969de3d9-7125-47be-a7f4-1597471adf8b', '2022-06-24 13:24:23', '2022-06-24 13:24:23'),
('96a4f1ff-86e8-4ece-baf2-77423d50fe05', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '96a4f1e1-0397-4442-9490-8908afee0e55', '2022-06-28 00:43:08', '2022-06-28 00:43:08'),
('96a4f364-9830-4f4a-a7df-63674e1902e5', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '96a4f354-4189-4128-aefc-7fe6a8135442', '2022-06-28 00:47:02', '2022-06-28 00:47:02'),
('96a76a07-7410-4c19-aa1f-b032c381f198', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '96a76862-db82-4767-a4f0-5167435102cb', '2022-06-29 06:10:25', '2022-06-29 06:10:25'),
('96a76b18-29db-4b45-b5a4-8a3dfdb4b47a', '96578c40-f5ae-4de3-9e9d-ab92074c13a3', '96a76af6-b1fb-4c28-8723-6dac9d6fe8f8', '2022-06-29 06:13:24', '2022-06-29 06:13:24'),
('96a95b53-f302-4506-888c-07d4ddb33eff', '96a95acb-b5cb-487a-98e6-c118da837b45', '963f8202-5ee7-4806-bbef-a4e3e91e3ad1', '2022-06-30 05:20:58', '2022-06-30 05:20:58'),
('96a95b68-e12b-434f-bde3-a79c12d93f11', '96a95acb-b5cb-487a-98e6-c118da837b45', '96436dce-616f-4068-b931-0829d3bf9456', '2022-06-30 05:21:12', '2022-06-30 05:21:12'),
('96a95b97-26cc-46b6-9b6a-50675d3aa124', '96a95acb-b5cb-487a-98e6-c118da837b45', '9687d80e-9221-4794-b423-6432d95aa019', '2022-06-30 05:21:42', '2022-06-30 05:21:42'),
('96a95bc9-4022-4b62-977e-588d64b01910', '96a95acb-b5cb-487a-98e6-c118da837b45', '9691e5ca-b7ad-4e1a-8bf2-ff5f0f116991', '2022-06-30 05:22:15', '2022-06-30 05:22:15'),
('96a95be6-5da6-4c32-821b-250fab211593', '96a95acb-b5cb-487a-98e6-c118da837b45', '969de3d9-7125-47be-a7f4-1597471adf8b', '2022-06-30 05:22:34', '2022-06-30 05:22:34'),
('96a95bfc-dcf1-48ed-a17d-c66cfc5a41d3', '96a95acb-b5cb-487a-98e6-c118da837b45', '96a4f1e1-0397-4442-9490-8908afee0e55', '2022-06-30 05:22:49', '2022-06-30 05:22:49'),
('96c1a2f9-aa3b-400b-bf64-0c0a0c22ceb6', '96c1a2b9-8edc-4bb7-becc-2e26c3fc9e7a', '96a76af6-b1fb-4c28-8723-6dac9d6fe8f8', '2022-07-12 07:01:11', '2022-07-12 07:01:11'),
('96c2169f-d8fe-45d5-86ec-e9497303fa70', '96c21686-ba9f-4532-8e6d-cc159b6e7759', '96a76862-db82-4767-a4f0-5167435102cb', '2022-07-12 12:24:33', '2022-07-12 12:24:33'),
('96d328ad-c9d2-4755-a5d5-05c6f90935d2', '9659757b-3c5e-4a99-9494-18a44fa63ebf', '96a4f354-4189-4128-aefc-7fe6a8135442', '2022-07-20 17:04:07', '2022-07-20 17:04:07'),
('96d46a5c-8eef-4b16-ab08-5c8b97437ce0', '9659757b-3c5e-4a99-9494-18a44fa63ebf', '9693b00f-a843-4912-8305-6a68bbbcc3d1', '2022-07-21 08:03:36', '2022-07-21 08:03:36'),
('96d46a88-ddb0-412e-86ee-cde4723d45d0', '9659757b-3c5e-4a99-9494-18a44fa63ebf', '968c9c68-03dd-4513-8262-0fb7d079f9cd', '2022-07-21 08:04:05', '2022-07-21 08:04:05'),
('96d46aa8-5fa5-40a1-a7a3-c0ed8270e856', '9659757b-3c5e-4a99-9494-18a44fa63ebf', '96436eb4-bdae-4a52-8dbd-e32d6a04f208', '2022-07-21 08:04:26', '2022-07-21 08:04:26'),
('96d46ad6-2430-4eb0-b072-aca074fc498c', '9659757b-3c5e-4a99-9494-18a44fa63ebf', '964177b1-ac88-46cb-9607-1eba2d810b69', '2022-07-21 08:04:56', '2022-07-21 08:04:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `superadmin__imagelogin`
--
ALTER TABLE `superadmin__imagelogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa`
--
ALTER TABLE `superadmin__mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__alumni`
--
ALTER TABLE `superadmin__mahasiswa__alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__bukualumni`
--
ALTER TABLE `superadmin__mahasiswa__bukualumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__etiket`
--
ALTER TABLE `superadmin__mahasiswa__etiket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__etiket__masalah`
--
ALTER TABLE `superadmin__mahasiswa__etiket__masalah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__pengajuanlegalisir`
--
ALTER TABLE `superadmin__mahasiswa__pengajuanlegalisir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__pengajuanmengikutiwisuda`
--
ALTER TABLE `superadmin__mahasiswa__pengajuanmengikutiwisuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__pengajuanpengambilanijazah`
--
ALTER TABLE `superadmin__mahasiswa__pengajuanpengambilanijazah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__pengajuansuratketeranganaktif`
--
ALTER TABLE `superadmin__mahasiswa__pengajuansuratketeranganaktif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__pkkmb`
--
ALTER TABLE `superadmin__mahasiswa__pkkmb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__pkkmb__absen`
--
ALTER TABLE `superadmin__mahasiswa__pkkmb__absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__pkkmb__kelompok`
--
ALTER TABLE `superadmin__mahasiswa__pkkmb__kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa__pkkmb__pertemuan`
--
ALTER TABLE `superadmin__mahasiswa__pkkmb__pertemuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__module`
--
ALTER TABLE `superadmin__module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__pegawai`
--
ALTER TABLE `superadmin__pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__role`
--
ALTER TABLE `superadmin__role`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
