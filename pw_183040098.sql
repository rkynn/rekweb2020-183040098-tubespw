-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 05:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040098`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` char(16) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '$2y$10$efgs/cnb0ESC32Bamm31KOskEf/ApAisvNTCkWCHAFUgs/uJ9Y0kK');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` varchar(3) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `tipe_mobil` varchar(20) NOT NULL,
  `jenis_transisi` varchar(20) NOT NULL,
  `tahun_rilis` year(4) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `gambar`, `nama_mobil`, `warna`, `tipe_mobil`, `jenis_transisi`, `tahun_rilis`, `harga`) VALUES
('001', 'mobil1.jpg', 'Toyota FT 86', 'Hitam, Putih, Merah', 'Sedan', 'Manual/Otomatis', 2012, 'Rp. 726.850.000'),
('002', 'mobil2.jpg', 'Lamborghini Veneno', 'HItam, Putih, Abu-abu', 'Sedan', 'Otomatis/Manual', 2013, 'Rp. 70 Miliar'),
('003', 'mobil3.jpg', 'Mercedes-Benz GLS', 'Putih, Hitam, Abu-abu', 'SUV', 'Otomatis', 2013, 'Rp. 2 Miliar'),
('004', 'mobil4.jpg', 'Buggati Chiron', 'Biru, Hitam, Abu-abu', 'Sedan', 'Otomatis', 2018, 'Rp. 90 Miliar'),
('005', 'mobil5.jpg', 'Lykan Hypersport', 'Merah, Hitam, Putih', 'Sedan', 'Manual/Otomatis', 2013, 'Rp. 35 Miliar'),
('006', 'mobil6.jpg', 'Mini Cooper Clubman', 'Biru, Merah, Kuning', 'Hatchback', 'Manual/Otomatis', 2017, 'Rp. 815.000.000'),
('007', 'mobil7.jpg', 'Ferrari J50', 'Merah, Hitam', 'Sedan', 'Otomatis', 2016, 'Rp. 33,250 Miliar'),
('008', 'mobil8.jpg', 'Pagani Huayra BC', 'Abu-abu, Hitam', 'Sedan', 'Manual/Otomatis', 2017, 'Rp. 34,580 Miliar'),
('009', 'mobil9.jpg', 'Koenigsegg CCXR Trevita', 'Putih', 'Sedan', 'Manual/Otomatis', 2006, 'Rp. 68 Miliar'),
('010', 'mobil10.jpg', 'Bentley Bentayga', 'Merah, Putih, Hitam', 'SUV', 'Otomatis', 2017, 'Rp. 9,8 Miliar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` char(16) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('123', '$2y$10$r/9ZN1xEYNxw8sB2xB83leLxI4.5Xlz8jGRASQImb920f3neVliNy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
