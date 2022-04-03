-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 03:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `msuser`
--

CREATE TABLE `msuser` (
  `namaDepan` varchar(50) NOT NULL,
  `namaTengah` varchar(50) NOT NULL,
  `namaBelakang` varchar(50) NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `wargaNegara` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kodePos` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `fotoProfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msuser`
--

INSERT INTO `msuser` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `NIK`, `wargaNegara`, `email`, `noHp`, `alamat`, `kodePos`, `username`, `password1`, `fotoProfil`) VALUES
('alya', 'dwiputri', 'rania', 'huhu', '2022-04-14', '12314', 'asfsd', 'fgisdgdn@gmail.com', '08625315', 'jalanjalan', '12502', 'alyaa', '010', 'assets/92063d0acef6b5dd61879a8038d9f5ac.jpg'),
('ubah', 'gorusafd', 'sdfgdsfg', 'jambi', '2022-04-15', '151554', 'indo', 'asdad@gmail.com', '8222102000', 'asdad', '36124', 'anj', '012', 'assets/8dae2291f7b771b702094d3f90c3946f.jpg'),
('Exy', 'Glory', 'Sianturi', 'Jeju', '2022-04-20', '41521', 'Indonesia', 'exi@gmail.com', '083162454', 'jalan jalan', '341257', 'exi', '123', 'assets/1a1a37023b8ff1e601a0dd15cf2e9529.jpg'),
('siapa', 'asdaf', 'asadas', 'afgdfg', '2022-04-14', '12314', 'indo', 'asdad@gmail.com', '8222102000', 'dafadsfg', '36124', 'hihi', '010', ''),
('rose', 'blekping', 'park', 'melbourne', '2022-04-16', '0', 'korut', 'rose@gmail.com', '80000000', 'jalan setapak', '0', 'jisu', '111', 'assets/5871b49a7b9125dee2c7f691d807d098.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msuser`
--
ALTER TABLE `msuser`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
