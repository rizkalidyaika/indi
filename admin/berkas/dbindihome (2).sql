-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 03:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbindihome`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbdatateknik`
--

CREATE TABLE `tbdatateknik` (
  `id_datek` varchar(20) NOT NULL,
  `no_tel` varchar(20) NOT NULL,
  `no_inet` varchar(20) NOT NULL,
  `sto` varchar(5) NOT NULL,
  `odc` varchar(5) NOT NULL,
  `odp` varchar(5) NOT NULL,
  `port` varchar(5) NOT NULL,
  `sttus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdatateknik`
--

INSERT INTO `tbdatateknik` (`id_datek`, `no_tel`, `no_inet`, `sto`, `odc`, `odp`, `port`, `sttus`) VALUES
('BJB-FA-02-01', '05116751230', '161213456789', 'BJB', 'FA', 'FA 02', '01', 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `tbpelanggan`
--

CREATE TABLE `tbpelanggan` (
  `no_tiket` varchar(20) NOT NULL,
  `tipe_identitas` varchar(10) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `nama_pel` varchar(25) NOT NULL,
  `kontak_pel` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `paket` varchar(20) NOT NULL,
  `sto` varchar(10) NOT NULL,
  `nama_sales` varchar(20) NOT NULL,
  `tanggal_sur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpelanggan`
--

INSERT INTO `tbpelanggan` (`no_tiket`, `tipe_identitas`, `no_identitas`, `nama_pel`, `kontak_pel`, `tempat_lahir`, `tanggal_lahir`, `kota`, `kelurahan`, `jalan`, `paket`, `sto`, `nama_sales`, `tanggal_sur`) VALUES
('S2023010101', 'KTP', '630305410601003', 'Ratna', '081534567120', 'Malang', '1990-01-27', 'Banjarbaru', 'Landasan Ulin', 'Jalan sukaramai', 'Internet & Telepon', 'BJB', 'Karina', '2023-01-01'),
('S2023010102', 'KTP', '6307116604930001', 'Novita Sari', '085161911404', 'Jakarta', '1990-02-17', 'Banjarbaru', 'Banjarbaru Utara', 'JL. Pangeran Suriansyah ', 'Internet 100 MBPS', 'BJB', 'Santi', '2023-02-17'),
('S2023010203', 'KTP', '6371031907990004', 'Muhammad Rizal', '089765945154', 'Banjarmasin', '1989-01-01', 'Kab Banjar', 'Karang Intan', 'Padang Panjang', 'Internet 100 MBPS', 'LUL', 'Karina', '2023-01-02'),
('S2023010404', 'KTP', '6309061512810002', 'Fauzan Hasani', '085787037897', 'Banjarbaru', '1987-02-01', 'Banjarbaru', 'Cempaka', 'JL. H. Mistar Cokrokusumo', 'Internet dan TV', 'BJB', 'Karina', '2023-01-04'),
('S2023010405', 'KTP', '6371031310860003', 'Amril Bani', '085248111875', 'Surabaya', '1995-09-09', 'Banjarbaru', 'Banjarbaru Selatan', 'Kemuning', 'Internet ', 'BJB', 'Mahmud', '2023-01-04'),
('S2023010506', 'KTP', '6303054106010021', 'Taufik', '082156304144', 'Malang', '1994-01-22', 'Kab Banjar', 'Martapura', 'Komp Duta Permai blok 1 no 12 rt1 rw 05', '3P ', 'BJB', 'Miftahul', '2023-01-05'),
('S2023010507', 'KTP', '630305410601990', 'Maria', '088861203450', 'Jogja', '2001-03-26', 'Kab Banjar', 'Astambul', 'Kelampayan', 'Telpon', 'BJB', 'Miftahul ', '2023-01-05'),
('S2023010908', 'KTP', '630306410601005', 'Heri', '08976945050', 'Jakarta', '1997-02-01', 'Banjarbaru', 'Cempaka ', 'JL. H Mistar Cokrokusumo No 7', 'Internet & Telepon', 'LUL', 'Karina', '2023-01-09'),
('S2023011209', 'KTP', '6371032209970004', 'Muhammad Anwar', '085388359567', 'Martapura', '1996-03-26', 'Banjarbaru', 'Banjarbaru Utara', 'JL. IR. PM. Noor', 'Internet ', 'BJB', 'Miftahul', '2023-01-12'),
('S2023020110', 'SIM', '1205920258035', 'Rezky Nadya', '085245008256', 'Bandung', '1990-04-14', 'Kab Banjar', 'Martapura', 'JL. Taruna Praja Sungai Sipai', 'Internet 100 MBPS', 'LUL', 'Mahmud', '2023-02-01'),
('S2023020211', 'SIM', '1205850100736', 'Andre', '081904271542', 'Banjarmasin', '1987-05-23', 'Banjarbaru', 'Landasan Ulin', 'JL. Ahmad Yani KM 28', 'Internet dan TV', 'LUL', 'Raka', '2023-02-02'),
('S2023020612', 'KTP', '637105067970006', 'Dina Aulia', '082334565992', 'Banjarbaru', '1992-05-31', 'Banjarbaru', 'Liang Anggang', 'Jalan Sukamara', 'Telpon', 'LUL', 'Raka', '2023-02-06'),
('S2023020713', 'KTP', '6371035611980005', 'Muhammad Fahmi', '082251938339', 'Martapura', '1993-06-01', 'Banjarbaru', 'Banjarbaru Utara', 'Loktabat Utara', 'Telpon', 'BJB', 'Karina', '2023-02-07'),
('S2023020814', 'KTP', '6472101612770001', 'Asdiannur', '089691232208', 'Mandiangin', '1987-01-18', 'Kab Banjar', 'Astambul', 'Danau Salak', 'Internet 100 MBPS', 'BJB', 'Mahmud', '2023-02-08'),
('S2023021315', 'KTP', '6371045906920006', 'Maulana', '081354346615', 'Martapura', '1990-11-02', 'Banjarbaru', 'Liang Anggang', 'JL. Gubernur subarjo', 'Internet 100 MBPS', 'LUL', 'Miftahul', '2023-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbpembangunan`
--

CREATE TABLE `tbpembangunan` (
  `id_pembangunan` varchar(20) NOT NULL,
  `vendor` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `sto` varchar(20) NOT NULL,
  `odc` varchar(20) NOT NULL,
  `odp` varchar(20) NOT NULL,
  `kapasitas` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `tanggal_pem` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpembangunan`
--

INSERT INTO `tbpembangunan` (`id_pembangunan`, `vendor`, `tipe`, `sto`, `odc`, `odp`, `kapasitas`, `kota`, `kelurahan`, `jalan`, `tanggal_pem`) VALUES
('P2023010101', 'PT AGRO', 'PEMBANGUNAN JARINGAN', 'LUL', 'FA', 'FA 01', '12', '', 'LIANG ANGGANG', 'JL SUKARAMAI NO 2', '2023-01-01'),
('P2023010302', 'PT BANGUN JAYA	', 'TAMBAH KAPASITAS', 'LUL', 'FA', 'FA 02', '08', 'Banjarbaru', 'Landasan Ulin Timur', 'JALAN SIDOMULYONO. 8', '2023-01-03'),
('P2023010403', 'PT CITRA UTAMA INSAN', 'TAMBAH KAPASITAS', 'BJB', 'FA', 'FA 05', '08', 'Kab Banjar', 'Astambul', 'Jalan Kelampaian', '2023-01-04'),
('P2023010504', 'PT NANANG GADING', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 05', '08', 'Banjarbaru', 'Banjarbaru Utara', 'Jalan Panglima Batur', '2023-01-05'),
('P2023010605', 'PT MUARA', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 01', '08', 'Banjarbaru', 'Banjarbaru Selatan', 'Kemuning', '2023-01-06'),
('P2023010906', 'PT CAHAYA', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 06', '08', 'Banjarbaru', 'Landasan Ulin', 'Syamsudin Noor', '2023-01-09'),
('P2023010907', 'PT BAGUS', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 07', '08', 'Banjarbaru', 'Banjarbaru Utara', 'Komet', '2023-01-09'),
('P2023011008', 'PT CAHAYA MANDIRI', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 08', '08', 'Banjarbaru', 'Landasan Ulin', 'Guntung Manggis', '2023-01-10'),
('P2023012609', 'PT LESTARI', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 09', '08', 'Banjarbaru', 'Cempaka', 'JL. H. Mistar Cokrokusumo', '2023-01-26'),
('P2023020110', 'PT ABADI SENTOSA', 'PEMBANGUNAN JARINGAN', 'LUL', 'FA', 'FA 03', '12', 'Banjarbaru', 'LIANG ANGGANG', 'LANDASAN ULIN ', '2023-02-01'),
('P2023020211', 'PT BERSAMA', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 04', '08', 'Kab Banjar', 'Keraton', 'Jalan menteri 4 no 1', '2023-02-02'),
('P2023020612', 'PT JAYA MURNI', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 10', '08', 'Kab Banjar', 'Martapura', 'Sekumpul ', '2023-02-06'),
('P2023020713', 'PT MERAPI ', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 11', '08', 'Kab Banjar', 'Martapura Barat', 'Teluk Selong', '2023-02-07'),
('P2023020914', 'PT SENTOSA', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 12', '08', 'Kab Banjar', 'Martapura Timur', 'Pekauman ', '2023-02-09'),
('P2023021315', 'PT JAYA PRIMA', 'PEMBANGUNAN JARINGAN', 'BJB', 'FA', 'FA 13', '08', 'Kab Banjar', 'Martapura', 'Bincau', '2023-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbper`
--

CREATE TABLE `tbper` (
  `nama` varchar(40) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `hasil` varchar(30) NOT NULL,
  `jumlah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbpetugas_survei`
--

CREATE TABLE `tbpetugas_survei` (
  `id_petugas_survei` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `kota_ps` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpetugas_survei`
--

INSERT INTO `tbpetugas_survei` (`id_petugas_survei`, `nama`, `alamat`, `kontak`, `kota_ps`, `kelurahan`) VALUES
(1, 'Budiono', 'Komplek Citra Indah 2', '08115197915', 'Kab Banjar', 'Banjarbaru Utara'),
(2, 'Mihad', 'JL. Kelapa Sawit', '085107774141', 'Kab Banjar', 'Astambul'),
(3, 'Supardan', 'Jalan Golf Landasan Ulin', '085715400377', 'Banjarbaru', 'Banjarbaru Selatan'),
(4, 'Manungkalit', ' Jln Merdeka, Komp. Griya Palam, Kec. Cemp., Kota ', '085108874141', 'Kab Banjar', 'Karang Intan'),
(5, 'Mirdan', 'Jalan Pangeran Suriansyah', '082255708828', 'Banjarbaru', 'Cempaka'),
(6, 'Anto', 'Komplek Mustika Griya Angkasa', '085753074225', 'Banjarbaru', 'Landasan Ulin'),
(7, 'Allam', 'Komplek baramarta no 7', '085332998829', 'Kab Banjar', 'Martapura'),
(8, 'Naufal', 'Jalan A. Yani Km 33', '089519528062', 'Banjarbaru', 'Liang Anggang'),
(9, 'Komang', 'Jalan Peramuan', '082161235840', 'Banjarbaru', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbsurat`
--

CREATE TABLE `tbsurat` (
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `no_tiket` varchar(20) NOT NULL,
  `nama_pel` varchar(50) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `tgl_ks` varchar(40) NOT NULL,
  `wkt_ks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbsurat`
--

INSERT INTO `tbsurat` (`nama`, `kontak`, `no_tiket`, `nama_pel`, `kota`, `kelurahan`, `jalan`, `tgl_ks`, `wkt_ks`) VALUES
('Budiono', 'WA : 081251603145', 'S2023010101', 'Ratna', 'Banjarbaru', 'Landasan Ulin', 'Jalan sukaramai', '2023-07-28', '14:42'),
('Supardan', '082161235840', 'S2023010102', 'Novita Sari', 'Banjarbaru', 'Banjarbaru Utara', 'JL. Pangeran Suriansyah ', '2023-07-23', '13:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbtiket_cabut`
--

CREATE TABLE `tbtiket_cabut` (
  `id_cabut` varchar(20) NOT NULL,
  `nama_pel` varchar(20) NOT NULL,
  `no_tel` varchar(20) NOT NULL,
  `no_inet` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `alasan_cabut` varchar(30) NOT NULL,
  `paket` varchar(20) NOT NULL,
  `sto` varchar(10) NOT NULL,
  `odc` varchar(10) NOT NULL,
  `odp` varchar(10) NOT NULL,
  `port` varchar(10) NOT NULL,
  `tanggal_cabut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbtiket_cabut`
--

INSERT INTO `tbtiket_cabut` (`id_cabut`, `nama_pel`, `no_tel`, `no_inet`, `kota`, `kelurahan`, `jalan`, `alasan_cabut`, `paket`, `sto`, `odc`, `odp`, `port`, `tanggal_cabut`) VALUES
('C2023010202', 'Husni', '05116751230', '161213456789', 'Kab Banjar', 'ASTAMBUL', 'jalan sungai danau', 'Tunggakan', 'Internet 100 MBPS', 'BJB', 'FA', 'FA 02', '01', '2023-01-29'),
('C2023010220', 'Rahman', '05116751200', '161231457660', 'Banjarbaru', 'Banjarbaru Utara', 'JL. IR. P.M. Noor 5', 'Tunggakan', 'Paket Hemat Telp+Ine', 'BJB', 'FA', '01', '', '2023-01-02'),
('C2023010403', 'Firanti', '05115921007', '161204289516', 'Banjarbaru', 'Banjarbaru Utara', 'JL. Perambaian', 'Jarang digunakan', 'Internet & Telepon', 'BJB', 'FA', 'FA 01', '02', '2023-01-04'),
('C2023010504', 'Ramadaniah', '05115923627', '161204251101', 'Banjarbaru', 'Landasan Ulin', 'Komple Citra Griya', 'Jarang digunakan', 'Internet & Telepon', 'LUL', 'FA', 'FA 03', '03', '2023-01-05'),
('C2023010905', 'Maulida', '05115923478', '161204251053', 'Kab Banjar', 'Martapura', 'Sekumpul Raya', 'Pindah ', 'Internet & Telepon', 'BJB', 'FA', 'FA 05', '01', '2023-01-09'),
('C2023020106', 'Syarif', '05117645320', '161234708569', 'Banjarbaru', 'Loktabat Utara', 'jalan Ro Ulin', 'Tunggakan', 'Internet Hemat', 'LUL', 'FA', 'FA 03', '02', '2023-02-01'),
('C2023020207', 'Sulaiman Nafari', '05116722314', '161231457612', 'Kab Banjar', 'Keraton', 'Jl Menteri 4 Gang Keluarga 3 no 4', 'Pindah Rumah', 'Internet 50 MBPS', 'BJB', 'FA', 'FA 04', '01', '2023-02-02'),
('C2023020308', 'Clarissa', '05114751300', '161220207500', 'Banjarbaru', 'Landasan Ulin Timur', 'Guntung Payung No 2', 'Tunggakan', '3P ', 'BJB', 'FA', 'FA 03', '08', '2023-02-03'),
('C2023020609', 'Supiani', '05117948845', '161204287647', 'Banjarbaru', 'Liang Anggang', 'JL Peramuan', 'Tidak digunakan lagi', 'Internet & Telepon', 'LUL', 'FA', 'FA 03', '04', '2023-02-06'),
('C2023020710', 'Nasir', '05115913054', '162204287402', 'Kab Banjar', 'Martapura', 'JL Pendidikan Sekumpul', 'Pindah', 'Internet & Telepon', 'BJB', 'FA', 'FA 05', '02', '2023-02-07'),
('C2023020811', 'Erwin', '05115914232', '162206904787', 'Banjarbaru', 'Cempaka', 'JL Cempaka No 5', 'Pindah ', 'Internet & Telepon', 'BJB', 'FA', 'FA 06', '01', '2023-02-08'),
('C2023020912', 'Tria', '05117944652', '161204282680', 'Kab Banjar', 'Martapura', 'JL Cindai Alus No 3', 'Tidak digunakan lagi', 'Internet & Telepon', 'BJB', 'FA', 'FA 07', '01', '2023-02-09'),
('C2023021013', 'Nurul Jannah', '05115925285', '161204253510', 'Kab Banjar', 'Martapura', 'JL kenanga no 28', 'Tidak digunakan lagi', 'Internet & Telepon', 'BJB', 'FA', 'FA 05', '03', '2023-02-10'),
('C2023021314', 'Ahmad Jumaidi', '05116754495', '161204271972', 'Banjarbaru', 'Banjarbaru Utara', 'A Yani KM 36', 'Pelanggan Jarang dirumah', 'Internet & Telepon', 'BJB', 'FA', 'FA 03', '01', '2023-02-13'),
('C2023021515', 'Jonet Budiarto', '05115919803', '162204225463', 'Banjarbaru', 'Loktabat Utara', 'JL Karang Anyar No 25', 'Jarang digunakan', 'Internet & Telepon', 'BJB', 'FA', 'FA 03', '07', '2023-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbtiket_survei`
--

CREATE TABLE `tbtiket_survei` (
  `no_tiket` varchar(20) NOT NULL,
  `id_petugas_survei` varchar(20) NOT NULL,
  `hasil` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `sto` varchar(10) NOT NULL,
  `odc` varchar(10) NOT NULL,
  `odp` varchar(10) NOT NULL,
  `port` varchar(10) NOT NULL,
  `sttus` varchar(10) NOT NULL,
  `berkas` text NOT NULL,
  `rute` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tanggal_closesur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbtiket_survei`
--

INSERT INTO `tbtiket_survei` (`no_tiket`, `id_petugas_survei`, `hasil`, `keterangan`, `sto`, `odc`, `odp`, `port`, `sttus`, `berkas`, `rute`, `jam`, `tanggal_closesur`) VALUES
('S2023010102', '1', 'Teknik Belum Memungkinkan', 'Full ODP', 'BJB', 'FA', 'FA 02', '02', 'CLOSE', '', '0', '00:00:', '2023-01-03'),
('S2023010203', '4', 'Teknik Memungkinkan', 'dapat dijangkau', 'BJB', 'FA', 'FA 01', '02', 'CLOSE', '', '0', '00:00:', '2023-01-06'),
('S2023010404', '5', 'Teknik Memungkinkan', 'OK', 'BJB', 'FA', 'FA 01', '03', 'CLOSE', '', '0', '00:00:', '2023-01-06'),
('S2023010405', '3', 'Teknik Memungkinkan', 'OK', 'BJB', 'FA', 'FA 02', '03', 'CLOSE', '', '0', '00:00:', '2023-01-09'),
('S2023010506', '7', 'Teknik Belum Memungkinkan', 'TIDAK DAPAT DIJANGKAU', 'BJB', 'FA', 'FA 03', '01', 'CLOSE', '', '0', '00:00:', '2023-01-07'),
('S2023010507', '2', 'Teknik Memungkinkan', 'OK', 'BJB', 'FA', 'FA 03', '05', 'CLOSE', '', '0', '00:00:', '2023-01-09'),
('S2023010908', '5', 'Teknik Memungkinkan', 'OK', 'LUL', 'FA', 'FA 03', '02', 'CLOSE', '', '0', '00:00:', '2023-01-11'),
('S2023011209', '1', 'Teknik Memungkinkan', 'OK', 'BJB', 'FA', 'FA 01', '06', 'CLOSE', '', '0', '00:00:', '2023-01-16'),
('S2023020110', '7', 'Teknik Memungkinkan', 'OK', 'LUL', 'FA', 'FA 01', '04', 'CLOSE', '', '0', '00:00:', '2023-02-03'),
('S2023020211', '6', 'Teknik Memungkinkan', 'OK', 'LUL', 'FA', 'FA 01', '07', 'CLOSE', '', '0', '00:00:', '2023-02-06'),
('S2023020612', '7', 'Teknik Memungkinkan', 'OK', 'LUL', 'FA', 'FA 01', '08', 'CLOSE', '', '0', '00:00:', '2023-02-08'),
('S2023020713', '1', 'Teknik Memungkinkan', 'OK', 'BJB', 'FA', 'FA 03', '03', 'CLOSE', '', '0', '00:00:', '2023-02-09'),
('S2023020814', '2', 'Teknik Memungkinkan', 'OK', 'BJB', 'FA', 'FA 03', '04', 'CLOSE', '', '0', '00:00:', '2023-02-08'),
('S2023021315', '7', 'Teknik Belum Memungkinkan', 'TIDAK DAPAT DIJANGKAU', 'LUL', 'FA', 'FA 04', '01', 'CLOSE', '', '0', '00:00:', '2023-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbupdate_cabut`
--

CREATE TABLE `tbupdate_cabut` (
  `id_cabut` varchar(20) NOT NULL,
  `no_tel` varchar(20) NOT NULL,
  `no_inet` varchar(20) NOT NULL,
  `sttus` varchar(20) NOT NULL,
  `tanggal_close` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbupdate_cabut`
--

INSERT INTO `tbupdate_cabut` (`id_cabut`, `no_tel`, `no_inet`, `sttus`, `tanggal_close`) VALUES
('C2023010202', '05116751230', '161213456789', 'CLOSE', '2023-01-03'),
('C2023010403', '05115921007', '161204289516', 'CLOSE', '2023-01-05'),
('C2023010504', '05115923627', '161204251101', 'CLOSE', '2023-01-06'),
('C2023010905', '05115923478', '161204251053', 'CLOSE', '2023-01-10'),
('C2023020106', '05117645320', '161234708569', 'CLOSE', '2023-02-02'),
('C2023020207', '05116722314', '161231457612', 'CLOSE', '2023-02-03'),
('C2023020308', '05114751300', '161220207500', 'CLOSE', '2023-02-06'),
('C2023020609', '05117948845', '161204287647', 'CLOSE', '2023-02-07'),
('C2023020710', '05115913054', '162204287402', 'CLOSE', '2023-02-08'),
('C2023020811', '05115914232', '162206904787', 'CLOSE', '2023-02-09'),
('C2023020912', '05117944652', '161204282680', 'CLOSE', '2023-02-10'),
('C2023021013', '05115925285', '161204253510', 'CLOSE', '2023-02-13'),
('C2023021314', '05116754495', '161204271972', 'CLOSE', '2023-02-14'),
('C2023021515', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbupdate_pem`
--

CREATE TABLE `tbupdate_pem` (
  `id_pembangunan` varchar(20) NOT NULL,
  `petugas_vendor` varchar(20) NOT NULL,
  `sttus` varchar(20) NOT NULL,
  `hasil` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal_close` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbupdate_pem`
--

INSERT INTO `tbupdate_pem` (`id_pembangunan`, `petugas_vendor`, `sttus`, `hasil`, `keterangan`, `tanggal_close`) VALUES
('P2023010302', 'Dedi', 'CLOSE', 'SUKSES', 'Kapasitas ditambahkan ', '2023-01-06'),
('P2023010403', 'Prasetya', 'CLOSE', 'GAGAL', 'Tidak dapat ditambahkan', '2023-01-06'),
('P2023010504', 'Rama', 'CLOSE', 'SUKSES', 'OK', '2023-01-09'),
('P2023010605', 'Dedi', 'CLOSE', 'SUKSES', 'OK', '2023-01-10'),
('P2023010906', 'Rama', 'CLOSE', 'SUKSES', 'OK', '2023-01-11'),
('P2023010907', 'Rama', 'CLOSE', 'SUKSES', 'OK', '2023-01-12'),
('P2023011008', 'Prasetya', 'CLOSE', 'SUKSES', 'OK', '2023-01-13'),
('P2023012609', 'Dedi', 'CLOSE', 'SUKSES', 'OK', '2023-01-30'),
('P2023020110', 'Rama', 'CLOSE', 'SUKSES', 'OK', '2023-02-06'),
('P2023020211', 'Prasetya', 'CLOSE', 'SUKSES', 'OK', '2023-02-06'),
('P2023020612', 'Rama', 'CLOSE', 'SUKSES', 'OK', '2023-02-09'),
('P2023020713', 'Prasetya', 'CLOSE', 'SUKSES', 'OK', '2023-02-10'),
('P2023020914', 'Dedi', 'CLOSE', 'SUKSES', 'OK', '2023-02-13'),
('P2023021315', 'Prasetya', 'CLOSE', 'SUKSES', 'OK', '2023-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `x` int(3) NOT NULL,
  `level` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`x`, `level`, `email`, `pass`) VALUES
(1, 'Admin', 'rizkadya333@gmail.com', 'rizka123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbdatateknik`
--
ALTER TABLE `tbdatateknik`
  ADD PRIMARY KEY (`no_tel`);

--
-- Indexes for table `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  ADD PRIMARY KEY (`no_tiket`);

--
-- Indexes for table `tbpembangunan`
--
ALTER TABLE `tbpembangunan`
  ADD PRIMARY KEY (`id_pembangunan`);

--
-- Indexes for table `tbpetugas_survei`
--
ALTER TABLE `tbpetugas_survei`
  ADD PRIMARY KEY (`id_petugas_survei`);

--
-- Indexes for table `tbsurat`
--
ALTER TABLE `tbsurat`
  ADD PRIMARY KEY (`no_tiket`);

--
-- Indexes for table `tbtiket_cabut`
--
ALTER TABLE `tbtiket_cabut`
  ADD PRIMARY KEY (`id_cabut`);

--
-- Indexes for table `tbtiket_survei`
--
ALTER TABLE `tbtiket_survei`
  ADD PRIMARY KEY (`no_tiket`);

--
-- Indexes for table `tbupdate_cabut`
--
ALTER TABLE `tbupdate_cabut`
  ADD PRIMARY KEY (`id_cabut`);

--
-- Indexes for table `tbupdate_pem`
--
ALTER TABLE `tbupdate_pem`
  ADD PRIMARY KEY (`id_pembangunan`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`x`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `x` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbper`
--
ALTER TABLE `tbper`
  ADD CONSTRAINT `tbper_ibfk_1` FOREIGN KEY (`id_petugas_survei`) REFERENCES `tbpetugas_survei` (`id_petugas_survei`);

--
-- Constraints for table `tbsurat`
--
ALTER TABLE `tbsurat`
  ADD CONSTRAINT `tbsurat_ibfk_1` FOREIGN KEY (`no_tiket`) REFERENCES `tbpelanggan` (`no_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
