-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 04:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `alamat`, `jenis_kelamin`, `prodi`) VALUES
(2005112001, 'Rizky Haris Siddiq Gunawan', 'Binjai', 'L', 'Teknik Komputer'),
(2005112006, 'Prayogi Wiranata', 'Berastagi', 'L', 'Teknik Komputer'),
(2005112010, 'Hambali Panjaitan', 'Tanjung Morawa', 'L', 'Teknik Komputer'),
(2005112011, 'M Rifki Abimanyu', 'Tembung', 'L', 'Teknik Komputer'),
(2005112014, 'Jonathan Lase', 'Padangsidimpuan', 'L', 'Teknik Komputer'),
(2005112017, 'Meiyana Tesalonika Sinambela', 'Siborong-borong', 'P', 'Teknik Komputer'),
(2005112020, 'Jenidia Nababan', 'Siborong-borong', 'P', 'Teknik Komputer'),
(2005112022, 'Rahmat Hidayat', 'Medan', 'L', 'Teknik Komputer'),
(2005112026, 'Alya Nur Amitha', 'Tembung', 'P', 'Teknik Komputer'),
(2005112027, 'Yeni Risma Susila', 'Medan', 'P', 'Teknik Komputer'),
(2005112030, 'Ahmed Attamimi Nasution', 'Tebing Tinggi', 'L', 'Teknik Komputer'),
(2005112033, 'Rahmad H Siregar', 'Tembung', 'L', 'Teknik Komputer'),
(2005112039, 'Rivaldo Juniper Bertua Simoran', 'Tangerang', 'L', 'Teknik Komputer'),
(2005112042, 'Anisa Faradilla Harahap', 'Medan', 'P', 'Teknik Komputer'),
(2005112045, 'Imam Ahmad Farhan', 'Mencirim', 'L', 'Teknik Komputer'),
(2005112051, 'Hifzan Rahim', 'Medan', 'L', 'Teknik Komputer'),
(2005112054, 'Mifta Aulia Dini Siregar', 'Siantar', 'P', 'Teknik Komputer'),
(2005112058, 'Raul Hendi Alamsyah', 'Amplas', 'L', 'Teknik Komputer'),
(2005112061, 'Razan Khairan', 'Tembung', 'L', 'Teknik Komputer'),
(2005112064, 'Abdul Fahdi Lubis', 'Tembung', 'L', 'Teknik Komputer'),
(2005112068, 'Dita Amelia Putri', 'Tanjung Morawa', 'P', 'Teknik Komputer'),
(2005112071, 'Surya Fajar Ibnuh', 'Medan', 'L', 'Teknik Komputer'),
(2005112074, 'Salsabila', 'Tebing Tinggi', 'P', 'Teknik Komputer'),
(2005112075, 'Novi Raphita Manalu', 'Sibolga', 'P', 'Teknik Komputer'),
(2005112079, 'Gita GR. Simanjuntak', 'Siborong-borong', 'P', 'Teknik Komputer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `nim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2005112088;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
