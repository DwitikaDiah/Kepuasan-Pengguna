-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2020 at 08:06 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepuasanpengguna1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataperusahaan`
--

CREATE TABLE `dataperusahaan` (
  `nmperusahaan` varchar(40) DEFAULT NULL,
  `emailperusahaan` varchar(60) DEFAULT NULL,
  `teleponperusahaan` varchar(40) DEFAULT NULL,
  `alamatperusahaan` varchar(40) DEFAULT NULL,
  `id` int(5) NOT NULL,
  `id_datapribadi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataperusahaan`
--

INSERT INTO `dataperusahaan` (`nmperusahaan`, `emailperusahaan`, `teleponperusahaan`, `alamatperusahaan`, `id`, `id_datapribadi`) VALUES
('PT. Cipta Bangsa', 'ciptabangsa@gmail.com', '031390110', 'Jl. Pemuda Bangsa No. 40', 1, 1),
('PT. Pertamina', 'pertamina@gmail.com', '031390110', 'Jl. Sukolilo No. 10', 2, 2),
('PT. Kurnia Abadi', 'kurniaabadi@gmail.com', '031390118', 'Jl. Pemuda No. 10', 3, 3),
('PT. PLN', 'pln@gmail.com', '031390114', 'Jl. Indah Pemuda No. 10', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `posisi_jabatan` varchar(50) DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `alamat_email` varchar(50) DEFAULT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pribadi`
--

INSERT INTO `data_pribadi` (`nama_lengkap`, `posisi_jabatan`, `no_handphone`, `alamat_email`, `id`) VALUES
('Putri Hartanti', 'Manager', '08212011176', 'putrihartanti@gmail.com', 1),
('XXX', 'Manager', '08213301987', 'xxx@gmail.com', 2),
('Indah Pertiwi', 'Manager', '08211011198', 'indahpertiwi@gmail.com', 3),
('Kurnia Pratama', 'Manager', '082120111010', 'kurniapratama@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasiindustriterhadaplulusanits`
--

CREATE TABLE `evaluasiindustriterhadaplulusanits` (
  `penilaiandudi12` varchar(30) NOT NULL,
  `penilaiandudi13` varchar(40) NOT NULL,
  `penilaiandudi14` varchar(40) NOT NULL,
  `penilaiandudi15` varchar(40) NOT NULL,
  `penilaiandudi16` varchar(40) NOT NULL,
  `penilaiandudi17` varchar(40) NOT NULL,
  `posisiataubidanglainnya` varchar(50) NOT NULL,
  `penilaiandudi18` varchar(40) NOT NULL,
  `penilaiandudi19` varchar(40) NOT NULL,
  `penilaiandudi20` varchar(40) NOT NULL,
  `id` int(5) NOT NULL,
  `id_datapribadi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasiindustriterhadaplulusanits`
--

INSERT INTO `evaluasiindustriterhadaplulusanits` (`penilaiandudi12`, `penilaiandudi13`, `penilaiandudi14`, `penilaiandudi15`, `penilaiandudi16`, `penilaiandudi17`, `posisiataubidanglainnya`, `penilaiandudi18`, `penilaiandudi19`, `penilaiandudi20`, `id`, `id_datapribadi`) VALUES
('2. Cukup', '2 Bulan', 'Ya', '', 'Tidak', 'User Acceptance Testing', '', 'User Acceptance Testing', 'User Acceptance Testing', 'Januari - Maret', 1, 1),
('2. Cukup', '2 Bulan', 'Ya', '', 'Tidak', 'Programmer', '', 'Programmer', 'Programmer', 'Januari - Maret', 2, 1),
('2. Cukup', '2 Bulan', 'Ya', '', 'Tidak', 'Teknik Sipil', '', 'Teknik Sipil', 'Teknik Sipil', 'Januari - Maret', 3, 1),
('2. Cukup', '2 Bulan', 'Ya', '', 'Tidak', 'Teknik Kimia Industri', '', 'Teknik Kimia Industri', 'Teknik Kimia Industri', 'Januari - Maret', 4, 1),
('2. Cukup', '2 Bulan', 'Ya', '', 'Tidak', 'Teknik Geomatika', '', 'Teknik Geomatika', 'Teknik Geomatika', 'Januari - Maret', 5, 1),
('2. Cukup', '2 Bulan', 'Ya', '', 'Tidak', 'Pengetahuan', '', 'Pengetahuan', 'Pengetahuan', 'Januari - Maret', 6, 1),
('2. Cukup', '2 Bulan', 'Ya', '', 'Tidak', 'Manajerial', '', 'Manajerial', 'Manajerial', 'Januari - Maret', 7, 1),
('2. Cukup', '2 Bulan', 'Ya', '', 'Tidak', '', '', '', '', 'Januari - Maret', 8, 1),
('1. Tidak penting', '3 Bulan', 'Ya', '', 'Ya', 'Data Analyst', '', 'Data Analyst', 'Data Analyst', 'Juli - Agustus', 9, 2),
('1. Tidak penting', '3 Bulan', 'Ya', '', 'Ya', 'Programmer', '', 'Programmer', 'Programmer', 'Juli - Agustus', 10, 2),
('1. Tidak penting', '3 Bulan', 'Ya', '', 'Ya', 'Teknologi Informasi', '', 'Teknologi Informasi', 'Teknologi Informasi', 'Juli - Agustus', 11, 2),
('1. Tidak penting', '3 Bulan', 'Ya', '', 'Ya', 'Teknik Industri', '', 'Teknik Industri', 'Teknik Industri', 'Juli - Agustus', 12, 2),
('1. Tidak penting', '3 Bulan', 'Ya', '', 'Ya', 'Teknik Infrastruktur Sipil', '', 'Teknik Infrastruktur Sipil', 'Teknik Infrastruktur Sipil', 'Juli - Agustus', 13, 2),
('1. Tidak penting', '3 Bulan', 'Ya', '', 'Ya', 'Pengetahuan', '', 'Pengetahuan', 'Pengetahuan', 'Juli - Agustus', 14, 2),
('1. Tidak penting', '3 Bulan', 'Ya', '', 'Ya', 'Manajerial', '', 'Manajerial', 'Manajerial', 'Juli - Agustus', 15, 2),
('1. Tidak penting', '3 Bulan', 'Ya', '', 'Ya', '', '', '', '', 'Juli - Agustus', 16, 2),
('4. Sangat Penting', '2 Bulan', 'Tidak', 'Karena sudah penuh', 'Ya', 'Data Analyst', '', 'Data Analyst', 'Data Analyst', 'Maret - April', 17, 3),
('4. Sangat Penting', '2 Bulan', 'Tidak', 'Karena sudah penuh', 'Ya', 'Teknisi', '', 'Teknisi', 'Teknisi', 'Maret - April', 18, 3),
('4. Sangat Penting', '2 Bulan', 'Tidak', 'Karena sudah penuh', 'Ya', 'Teknik Sipil', '', 'Teknik Sipil', 'Teknik Sipil', 'Maret - April', 19, 3),
('4. Sangat Penting', '2 Bulan', 'Tidak', 'Karena sudah penuh', 'Ya', 'Teknik Elektro', '', 'Teknik Elektro', 'Teknik Elektro', 'Maret - April', 20, 3),
('4. Sangat Penting', '2 Bulan', 'Tidak', 'Karena sudah penuh', 'Ya', 'Manajerial', '', 'Manajerial', 'Manajerial', 'Maret - April', 21, 3),
('4. Sangat Penting', '2 Bulan', 'Tidak', 'Karena sudah penuh', 'Ya', 'Komunikasi', '', 'Komunikasi', 'Komunikasi', 'Maret - April', 22, 3),
('', '', '', '', '', '', '', '', '', '', 23, 3),
('', '', '', '', '', '', '', '', '', '', 24, 3),
('4. Sangat Penting', '', 'Ya', '', 'Ya', 'Data Analyst', '', 'Data Analyst', 'Data Analyst', 'Januari', 25, 3),
('4. Sangat Penting', '', 'Ya', '', 'Ya', '', '', '', '', 'Januari', 26, 3),
('4. Sangat Penting', '', 'Ya', '', 'Ya', 'Teknik Industri', '', 'Teknik Industri', 'Teknik Industri', 'Januari', 27, 3),
('4. Sangat Penting', '', 'Ya', '', 'Ya', 'Teknik Material', '', 'Teknik Material', 'Teknik Material', 'Januari', 28, 3),
('4. Sangat Penting', '', 'Ya', '', 'Ya', 'Teknis', '', 'Teknis', 'Teknis', 'Januari', 29, 3),
('4. Sangat Penting', '', 'Ya', '', 'Ya', 'Pengetahuan', '', 'Pengetahuan', 'Pengetahuan', 'Januari', 30, 3),
('4. Sangat Penting', '', 'Ya', '', 'Ya', '', '', '', '', 'Januari', 31, 3),
('3. Penting', '2 Bulan', 'Ya', '', 'Tidak', 'Programmer', '', 'Programmer', 'Programmer', 'Februari', 32, 4),
('3. Penting', '2 Bulan', 'Ya', '', 'Tidak', '', '', '', '', 'Februari', 33, 4),
('3. Penting', '2 Bulan', 'Ya', '', 'Tidak', 'Studi Pembangunan', '', 'Studi Pembangunan', 'Studi Pembangunan', 'Februari', 34, 4),
('3. Penting', '2 Bulan', 'Ya', '', 'Tidak', 'Teknik Material', '', 'Teknik Material', 'Teknik Material', 'Februari', 35, 4),
('3. Penting', '2 Bulan', 'Ya', '', 'Tidak', 'Teknik Elektro', '', 'Teknik Elektro', 'Teknik Elektro', 'Februari', 36, 4),
('3. Penting', '2 Bulan', 'Ya', '', 'Tidak', 'Pengetahuan', '', 'Pengetahuan', 'Pengetahuan', 'Februari', 37, 4),
('3. Penting', '2 Bulan', 'Ya', '', 'Tidak', '', '', '', '', 'Februari', 38, 4);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_dudi`
--

CREATE TABLE `evaluasi_dudi` (
  `penilaiandudi21` varchar(15) NOT NULL,
  `penilaiandudi22` varchar(15) NOT NULL,
  `penilaiandudi23` varchar(30) NOT NULL,
  `penilaiandudi24` varchar(40) NOT NULL,
  `penilaiandudi25` varchar(15) NOT NULL,
  `penilaiandudi26` varchar(15) NOT NULL,
  `penilaiandudi27` varchar(15) NOT NULL,
  `penilaiandudi28` varchar(15) NOT NULL,
  `penilaiandudi29` varchar(15) NOT NULL,
  `penilaiandudi30` varchar(15) NOT NULL,
  `penilaiandudi31` varchar(15) NOT NULL,
  `penilaiandudi32` varchar(15) NOT NULL,
  `penilaiandudi33` varchar(15) NOT NULL,
  `penilaiandudi34` varchar(15) NOT NULL,
  `penilaiandudi35` varchar(15) NOT NULL,
  `penilaiandudi36` varchar(15) NOT NULL,
  `penilaiandudi37` varchar(15) NOT NULL,
  `penilaiandudi38` varchar(15) NOT NULL,
  `penilaiandudi39` varchar(15) NOT NULL,
  `penilaiandudi40` varchar(15) NOT NULL,
  `penilaiandudi41` varchar(15) NOT NULL,
  `penilaiandudi42` varchar(15) NOT NULL,
  `penilaiandudi43` varchar(15) NOT NULL,
  `penilaiandudi44` varchar(15) NOT NULL,
  `penilaiandudi45` varchar(15) NOT NULL,
  `penilaiandudi46` varchar(15) NOT NULL,
  `penilaiandudi47` varchar(15) NOT NULL,
  `penilaiandudi48` varchar(15) NOT NULL,
  `penilaiandudi49` varchar(15) NOT NULL,
  `penilaiandudi50` varchar(15) NOT NULL,
  `penilaiandudi51` varchar(15) NOT NULL,
  `penilaiandudi52` varchar(15) NOT NULL,
  `penilaiandudi53` varchar(15) NOT NULL,
  `penilaiandudi54` varchar(15) NOT NULL,
  `penilaiandudi55` varchar(15) NOT NULL,
  `penilaiandudi56` varchar(15) NOT NULL,
  `penilaiandudi57` varchar(15) NOT NULL,
  `penilaiandudi58` varchar(15) NOT NULL,
  `penilaiandudi59` varchar(15) NOT NULL,
  `penilaiandudi60` varchar(15) NOT NULL,
  `penilaiandudi61` varchar(15) NOT NULL,
  `penilaiandudi62` varchar(15) NOT NULL,
  `id` int(11) NOT NULL,
  `id_datapribadi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasi_dudi`
--

INSERT INTO `evaluasi_dudi` (`penilaiandudi21`, `penilaiandudi22`, `penilaiandudi23`, `penilaiandudi24`, `penilaiandudi25`, `penilaiandudi26`, `penilaiandudi27`, `penilaiandudi28`, `penilaiandudi29`, `penilaiandudi30`, `penilaiandudi31`, `penilaiandudi32`, `penilaiandudi33`, `penilaiandudi34`, `penilaiandudi35`, `penilaiandudi36`, `penilaiandudi37`, `penilaiandudi38`, `penilaiandudi39`, `penilaiandudi40`, `penilaiandudi41`, `penilaiandudi42`, `penilaiandudi43`, `penilaiandudi44`, `penilaiandudi45`, `penilaiandudi46`, `penilaiandudi47`, `penilaiandudi48`, `penilaiandudi49`, `penilaiandudi50`, `penilaiandudi51`, `penilaiandudi52`, `penilaiandudi53`, `penilaiandudi54`, `penilaiandudi55`, `penilaiandudi56`, `penilaiandudi57`, `penilaiandudi58`, `penilaiandudi59`, `penilaiandudi60`, `penilaiandudi61`, `penilaiandudi62`, `id`, `id_datapribadi`) VALUES
('1', '2', '3', '1', '2', '', '3', '2', '1', '1', '2', '2', '4', '1', '2', '3', '3', '4', '2', '2', '1', '1', '3', '2', '3', '3', '3', '4', '3', '3', '2', '2', '2', '1', '2', '2', '1', '3', '1', '2', '1', '4', 1, 1),
('3', '3', '2', '1', '4', '4', '1', '1', '3', '3', '2', '2', '3', '1', '4', '1', '1', '2', '2', '3', '4', '1', '1', '2', '3', '4', '', '3', '3', '1', '2', '2', '4', '1', '2', '2', '1', '', '2', '', '2', '', 2, 2),
('4', '2', '3', '2', '3', '1', '4', '2', '3', '1', '2', '2', '3', '1', '2', '2', '1', '1', '4', '3', '3', '2', '2', '2', '3', '3', '3', '2', '3', '2', '3', '2', '4', '1', '4', '1', '4', '1', '4', '1', '4', '1', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_dudi_terhadap_kurikulum_its`
--

CREATE TABLE `penilaian_dudi_terhadap_kurikulum_its` (
  `penilaiandudi1` varchar(40) NOT NULL,
  `id` int(5) NOT NULL,
  `id_datapribadi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_dudi_terhadap_kurikulum_its`
--

INSERT INTO `penilaian_dudi_terhadap_kurikulum_its` (`penilaiandudi1`, `id`, `id_datapribadi`) VALUES
('b. Magang/OJT/Kerja Praktik', 1, 1),
('d. Kuliah Tamu', 2, 1),
('c. Beasiswa', 3, 2),
('f. Penelitian', 4, 2),
('c. Beasiswa', 5, 2),
('f. Penelitian', 6, 2),
('e. Workshop/pelatihan/seminar', 7, 3),
('g. Sponsorship', 8, 3),
('Appreticeship', 9, 3),
('d. Kuliah Tamu', 10, 4),
('e. Workshop/pelatihan/seminar', 11, 4),
('', 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_dudi_terhadap_magangpraktekkerja`
--

CREATE TABLE `penilaian_dudi_terhadap_magangpraktekkerja` (
  `id` int(5) NOT NULL,
  `penilaiandudi9` varchar(25) NOT NULL,
  `penilaiandudi10` varchar(25) NOT NULL,
  `penilaiandudi11` varchar(25) NOT NULL,
  `id_datapribadi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_dudi_terhadap_magangpraktekkerja`
--

INSERT INTO `penilaian_dudi_terhadap_magangpraktekkerja` (`id`, `penilaiandudi9`, `penilaiandudi10`, `penilaiandudi11`, `id_datapribadi`) VALUES
(1, '2. Cukup', '1. Tidak Sesuai', '1. Tidak Puas', 1),
(2, '2. Cukup', '3. Sesuai', '4. Sangat Puas', 2),
(3, '2. Cukup', '3. Sesuai', '2. Cukup', 3),
(4, '3. Penting', '3. Sesuai', '1. Tidak Puas', 4);

-- --------------------------------------------------------

--
-- Table structure for table `profilalumni`
--

CREATE TABLE `profilalumni` (
  `id` int(5) NOT NULL,
  `alumni` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `asaljurusan` varchar(50) NOT NULL,
  `id_datapribadi` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilalumni`
--

INSERT INTO `profilalumni` (`id`, `alumni`, `jabatan`, `asaljurusan`, `id_datapribadi`) VALUES
(1, 'IT, Marketing', 'Direktur, Staff', 'Studi Pembangunan', '1'),
(2, 'IT, Marketing', 'Direktur, Staff', 'Teknik Instrumentasi', '1'),
(3, 'IT, Perminyakan', 'Direktur, Staff', 'Informatika', '2'),
(4, 'IT, Perminyakan', 'Direktur, Staff', 'Sistem Informasi', '2'),
(5, 'IT, Perminyakan', 'Direktur, Staff', 'Teknik Industri', '2'),
(6, 'IT, Perminyakan', 'Direktur, Staff', 'Teknik Elektro', '2'),
(7, 'IT, Marketing', 'Direktur, Staff', 'Teknologi Informasi', '3'),
(8, 'IT, Marketing', 'Direktur, Staff', 'Studi Pembangunan', '3'),
(9, 'IT, Marketing', 'Direktur, Staff', 'Teknik Material', '3'),
(10, 'IT, Marketing', 'Staff', 'Teknik Fisika', '4'),
(11, 'IT, Marketing', 'Staff', 'Teknik Infrastruktur Sipil', '4'),
(12, 'IT, Marketing', 'Staff', 'Statistika', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataperusahaan`
--
ALTER TABLE `dataperusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_handphone` (`nama_lengkap`) USING BTREE;

--
-- Indexes for table `evaluasiindustriterhadaplulusanits`
--
ALTER TABLE `evaluasiindustriterhadaplulusanits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluasi_dudi`
--
ALTER TABLE `evaluasi_dudi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaian_dudi_terhadap_kurikulum_its`
--
ALTER TABLE `penilaian_dudi_terhadap_kurikulum_its`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaian_dudi_terhadap_magangpraktekkerja`
--
ALTER TABLE `penilaian_dudi_terhadap_magangpraktekkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilalumni`
--
ALTER TABLE `profilalumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataperusahaan`
--
ALTER TABLE `dataperusahaan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `evaluasiindustriterhadaplulusanits`
--
ALTER TABLE `evaluasiindustriterhadaplulusanits`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `evaluasi_dudi`
--
ALTER TABLE `evaluasi_dudi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penilaian_dudi_terhadap_kurikulum_its`
--
ALTER TABLE `penilaian_dudi_terhadap_kurikulum_its`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penilaian_dudi_terhadap_magangpraktekkerja`
--
ALTER TABLE `penilaian_dudi_terhadap_magangpraktekkerja`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profilalumni`
--
ALTER TABLE `profilalumni`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
