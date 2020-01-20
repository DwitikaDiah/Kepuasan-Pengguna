-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 07:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) DEFAULT NULL,
  `pin` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pin`) VALUES
('admin123', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `dataperusahaan`
--

CREATE TABLE `dataperusahaan` (
  `no_handphone` varchar(15) DEFAULT NULL,
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

INSERT INTO `dataperusahaan` (`no_handphone`, `nmperusahaan`, `emailperusahaan`, `teleponperusahaan`, `alamatperusahaan`, `id`, `id_datapribadi`) VALUES
(NULL, 'coba1', 'coba1@gmail.com', '121212', 'alamat', 1, 1),
(NULL, '4', '4', '4', '4', 2, 4),
(NULL, 'coba1', 'coba1@gmail.com', '123', 'coba1', 3, 5),
(NULL, 'a', 'a@gmail.com', '1', 'a', 4, 6),
(NULL, 'b', 'b@gmail.com', '1', 'b', 5, 7),
(NULL, 'c', 'c@gmail.com', '1', 'c', 6, 8),
(NULL, 'ari', 'ariwidianto.mail@gmail.com', '1', 'ari', 7, 9),
(NULL, '1', '1', '1', '1', 8, 12);

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `posisi_jabatan` varchar(50) DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `alamat_email` varchar(25) DEFAULT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pribadi`
--

INSERT INTO `data_pribadi` (`nama_lengkap`, `posisi_jabatan`, `no_handphone`, `alamat_email`, `id`) VALUES
('2', '2', '2', '2@gmail.com', 1),
('1', '1', '1', '1@gmail.com', 2),
('3', '3', '3', '3@gmail.com', 3),
('4', '4', '4', '4@gmail.com', 4),
('coba1', 'coba1', '123', 'coba1@gmail.com', 5),
('a', 'a', '1', 'a@gmail.com', 6),
('b', 'b', '123', 'b@gmail.com', 7),
('c', 'c', 'c', 'c@gmail.com', 8),
('ari', 'coba', '123', '1@gmail.com', 9),
('ari1', 'ari1', '123', 'ari1@gmail.com', 12);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasiindustriterhadaplulusanits`
--

CREATE TABLE `evaluasiindustriterhadaplulusanits` (
  `no_handphone` varchar(15) NOT NULL,
  `penilaiandudi12` varchar(30) NOT NULL,
  `penilaiandudi13` varchar(40) NOT NULL,
  `penilaiandudi14` varchar(40) NOT NULL,
  `penilaiandudi15` varchar(40) NOT NULL,
  `penilaiandudi16` varchar(40) NOT NULL,
  `penilaiandudi17` varchar(40) NOT NULL,
  `penilaiandudi18` varchar(40) NOT NULL,
  `penilaiandudi19` varchar(40) NOT NULL,
  `penilaiandudi20` varchar(40) NOT NULL,
  `id` int(5) NOT NULL,
  `id_datapribadi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasiindustriterhadaplulusanits`
--

INSERT INTO `evaluasiindustriterhadaplulusanits` (`no_handphone`, `penilaiandudi12`, `penilaiandudi13`, `penilaiandudi14`, `penilaiandudi15`, `penilaiandudi16`, `penilaiandudi17`, `penilaiandudi18`, `penilaiandudi19`, `penilaiandudi20`, `id`, `id_datapribadi`) VALUES
('', '1. Tidak penting', '1', 'Ya', '1', 'Ya', 'Data entry', 'Data entry', 'Data entry', '1', 40, 6),
('', '1. Tidak penting', '1', 'Ya', '1', 'Ya', 'Fisika', 'Fisika', 'Fisika', '1', 41, 6),
('', '1. Tidak penting', '1', 'Ya', '1', 'Ya', 'Teknis', 'Teknis', 'Teknis', '1', 42, 6),
('', '1. Tidak penting', '1', 'Ya', '1', 'Ya', '1', '1', '1', '1', 43, 6),
('', '1. Tidak penting', 'b', 'Ya', 'b', 'Ya', 'Data entry', 'Data entry', 'Data entry', 'b', 44, 7),
('', '1. Tidak penting', 'b', 'Ya', 'b', 'Ya', 'Fisika', 'Fisika', 'Fisika', 'b', 45, 7),
('', '1. Tidak penting', 'b', 'Ya', 'b', 'Ya', 'Teknis', 'Teknis', 'Teknis', 'b', 46, 7),
('', '1. Tidak penting', 'b', 'Ya', 'b', 'Ya', 'b', 'b', 'b', 'b', 47, 7),
('', '1. Tidak penting', 'b', 'Ya', 'b', 'Ya', 'Data entry', 'Data entry', 'Data entry', 'b', 48, 8),
('', '1. Tidak penting', 'b', 'Ya', 'b', 'Ya', 'Fisika', 'Fisika', 'Fisika', 'b', 49, 8),
('', '1. Tidak penting', 'b', 'Ya', 'b', 'Ya', 'Teknis', 'Teknis', 'Teknis', 'b', 50, 8),
('', '1. Tidak penting', 'b', 'Ya', 'b', 'Ya', 'b', 'b', 'b', 'b', 51, 8),
('', '4. Sangat Penting', '1', 'Tidak', '1', 'Tidak', 'Programmer', 'Programmer', 'Programmer', '1', 52, 12),
('', '4. Sangat Penting', '1', 'Tidak', '1', 'Tidak', 'Fisika', 'Fisika', 'Fisika', '1', 53, 12),
('', '4. Sangat Penting', '1', 'Tidak', '1', 'Tidak', 'Teknik Sistem Perkapalan', 'Teknik Sistem Perkapalan', 'Teknik Sistem Perkapalan', '1', 54, 12),
('', '4. Sangat Penting', '1', 'Tidak', '1', 'Tidak', 'Perencanaan Wilayah Kota', 'Perencanaan Wilayah Kota', 'Perencanaan Wilayah Kota', '1', 55, 12),
('', '4. Sangat Penting', '1', 'Tidak', '1', 'Tidak', 'Teknis', 'Teknis', 'Teknis', '1', 56, 12),
('', '4. Sangat Penting', '1', 'Tidak', '1', 'Tidak', '1', '1', '1', '1', 57, 12);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_dudi`
--

CREATE TABLE `evaluasi_dudi` (
  `no_handphone` varchar(15) DEFAULT NULL,
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

INSERT INTO `evaluasi_dudi` (`no_handphone`, `penilaiandudi21`, `penilaiandudi22`, `penilaiandudi23`, `penilaiandudi24`, `penilaiandudi25`, `penilaiandudi26`, `penilaiandudi27`, `penilaiandudi28`, `penilaiandudi29`, `penilaiandudi30`, `penilaiandudi31`, `penilaiandudi32`, `penilaiandudi33`, `penilaiandudi34`, `penilaiandudi35`, `penilaiandudi36`, `penilaiandudi37`, `penilaiandudi38`, `penilaiandudi39`, `penilaiandudi40`, `penilaiandudi41`, `penilaiandudi42`, `penilaiandudi43`, `penilaiandudi44`, `penilaiandudi45`, `penilaiandudi46`, `penilaiandudi47`, `penilaiandudi48`, `penilaiandudi49`, `penilaiandudi50`, `penilaiandudi51`, `penilaiandudi52`, `penilaiandudi53`, `penilaiandudi54`, `penilaiandudi55`, `penilaiandudi56`, `penilaiandudi57`, `penilaiandudi58`, `penilaiandudi59`, `penilaiandudi60`, `penilaiandudi61`, `penilaiandudi62`, `id`, `id_datapribadi`) VALUES
(NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, NULL),
(NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 2, 7),
(NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_kerjasama`
--

CREATE TABLE `evaluasi_kerjasama` (
  `no_handphone` varchar(15) NOT NULL,
  `kerjasama_antara_perusahaan` varchar(60) NOT NULL,
  `kerjasama_dengan_ITS` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasi_kerjasama`
--

INSERT INTO `evaluasi_kerjasama` (`no_handphone`, `kerjasama_antara_perusahaan`, `kerjasama_dengan_ITS`) VALUES
('08212011109459', 'Ragu-ragu', 'Ya'),
('08212011109490', 'Biasa', 'Ya'),
('08212011109420', 'Biasa', 'Ya'),
('08212011103020', 'Ragu-ragu', 'Tidak'),
('08212011101211', 'Biasa', 'Ya'),
('08212011109480', 'Ragu-ragu', 'Tidak'),
('08212011109410', 'Biasa', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_dudi_terhadap_kurikulum_its`
--

CREATE TABLE `penilaian_dudi_terhadap_kurikulum_its` (
  `no_handphone` varchar(15) NOT NULL,
  `penilaiandudi1` varchar(40) NOT NULL,
  `id` int(5) NOT NULL,
  `id_datapribadi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_dudi_terhadap_kurikulum_its`
--

INSERT INTO `penilaian_dudi_terhadap_kurikulum_its` (`no_handphone`, `penilaiandudi1`, `id`, `id_datapribadi`) VALUES
('', 'a. Perekrutan Karyawan', 1, 6),
('', 'a. Perekrutan Karyawan', 2, 7),
('', 'a. Perekrutan Karyawan', 3, 8),
('', 'a. Perekrutan Karyawan', 4, 12),
('', 'b. Magang/OJT/Kerja Praktik', 5, 12),
('', 'c. Beasiswa', 6, 12);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_dudi_terhadap_magangpraktekkerja`
--

CREATE TABLE `penilaian_dudi_terhadap_magangpraktekkerja` (
  `id` int(5) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `penilaiandudi9` varchar(25) NOT NULL,
  `penilaiandudi10` varchar(25) NOT NULL,
  `penilaiandudi11` varchar(25) NOT NULL,
  `id_datapribadi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_dudi_terhadap_magangpraktekkerja`
--

INSERT INTO `penilaian_dudi_terhadap_magangpraktekkerja` (`id`, `no_handphone`, `penilaiandudi9`, `penilaiandudi10`, `penilaiandudi11`, `id_datapribadi`) VALUES
(5, '', '1. Tidak penting', '1. Tidak Sesuai', '1. Tidak Puas', 6),
(6, '', '1. Tidak penting', '1. Tidak Sesuai', '1. Tidak Puas', 7),
(7, '', '1. Tidak penting', '1. Tidak Sesuai', '1. Tidak Puas', 8),
(8, '', '1. Tidak penting', '3. Sesuai', '4. Sangat Puas', 12);

-- --------------------------------------------------------

--
-- Table structure for table `profilalumni`
--

CREATE TABLE `profilalumni` (
  `id` int(5) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `alumni` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `asaljurusan` varchar(50) NOT NULL,
  `id_datapribadi` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilalumni`
--

INSERT INTO `profilalumni` (`id`, `no_handphone`, `alumni`, `jabatan`, `asaljurusan`, `id_datapribadi`) VALUES
(21, '', 'a', 'a', 'Fisika', '6'),
(22, '', 'b', 'b', 'Fisika', '7'),
(23, '', 'c', 'c', 'Fisika', '8'),
(24, '', 'IT, Marketing', 'Staff, Direktur', 'Manajemen Bisnis', '9'),
(25, '', 'IT, Marketing', 'Staff, Direktur', 'Teknik Infrastruktur Sipil', '9'),
(26, '', 'Marketing', 'Marketing', 'Fisika', '12'),
(27, '', 'Marketing', 'Marketing', 'Teknik Sistem Perkapalan', '12'),
(28, '', 'Marketing', 'Marketing', 'Perencanaan Wilayah Kota', '12');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `evaluasiindustriterhadaplulusanits`
--
ALTER TABLE `evaluasiindustriterhadaplulusanits`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `evaluasi_dudi`
--
ALTER TABLE `evaluasi_dudi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penilaian_dudi_terhadap_kurikulum_its`
--
ALTER TABLE `penilaian_dudi_terhadap_kurikulum_its`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penilaian_dudi_terhadap_magangpraktekkerja`
--
ALTER TABLE `penilaian_dudi_terhadap_magangpraktekkerja`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profilalumni`
--
ALTER TABLE `profilalumni`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
