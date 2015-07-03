-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Des 2014 pada 19.06
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tabel_ajax`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ajax`
--

CREATE TABLE IF NOT EXISTS `tabel_ajax` (
`id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `asal` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tabel_ajax`
--

INSERT INTO `tabel_ajax` (`id`, `nama`, `nim`, `jurusan`, `asal`) VALUES
(1, 'Kana Rizki', '24010312110067', 'Informatika', 'Aceh'),
(2, 'Muhammad Sofi Yuniarto', '24010312140082', 'Informatika', 'Pekalongan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_ajax`
--
ALTER TABLE `tabel_ajax`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_ajax`
--
ALTER TABLE `tabel_ajax`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
