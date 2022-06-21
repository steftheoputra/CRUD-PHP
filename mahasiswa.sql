-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 03:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kota_asal` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `no_telp` char(12) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `nim`, `nama`, `kota_asal`, `tanggal_lahir`, `nama_ortu`, `alamat_ortu`, `kode_pos`, `no_telp`, `status`) VALUES
(1, 672019131, 'Stefanus Dorotheoputra', 'Gunung Mas', '2001-01-02', 'Hersin', 'Tumbang Lampahung', 74511, '082157273921', 'Tama'),
(8, 672019121, 'Erlivhia', 'Palangkaraya', '2021-11-10', 'abdul', 'Palangkaraya', 74511, '082157273921', 'janda'),
(11, 672019100, 'Mei Irawati', 'Salatiga', '2021-11-17', 'sukijah', 'banten', 74512, '082157273921', 'WEDA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
