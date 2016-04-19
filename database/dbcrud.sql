-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2015 at 03:05 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud_sederhana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '123', 'Redo Kusuma'),
(2, 'rio', '21232f297a57a5a743894a0e4a801fc3', 'Rio');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` date NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_berita`, `tgl_berita`) VALUES
(0, 'dd', 'dd', '2013-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`nama`, `email`, `komentar`) VALUES
('Redo Kusuma', 'crackcray@yahoo.co.id', 'lumayan'),
('th', 'redokusuma@ymail.com', 'karutt nianan sanak');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(5) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tpt_lahir` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `foto` varchar(40) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `tpt_lahir`, `tgl_lahir`, `kelamin`, `agama`, `jabatan`, `foto`) VALUES
(7, '1233455667', 'redo', '', '0000-00-00', 'LAKI-LAKI', 'ISLAM', 'Wali Kelas', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `kelamin`, `agama`, `alamat`) VALUES
(38, 'redo', 'LAKI-LAKI', 'ISLAM', 'Sawah Lebar'),
(39, 'REDO KUSUMA', 'LAKI-LAKI', 'ISLAM', 'Meranti 3'),
(41, 'pt pt', '', '', 'piyungan'),
(42, 'mmm', '', '', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE IF NOT EXISTS `teknisi` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `ket` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `teknisi`
--

INSERT INTO `teknisi` (`id`, `nama`, `pelanggan`, `alamat`, `kontak`, `telp`, `tgl`, `jam`, `ket`) VALUES
(1, 'aan', 'pt putri', 'jogja', '', '08995477796', '2015-04-08', '10:00:00', '100k'),
(7, 'Widodo', 'pt putri', 'yky', 'p', 'yky', '2015-04-15', '10:00:00', ''),
(8, 'Wintolo', 'p', 'k', '', '789', '2015-04-22', '00:00:00', ''),
(10, 'Anton', 'kkk', '', '', '', '0000-00-00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi1`
--

CREATE TABLE IF NOT EXISTS `teknisi1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teknisi1`
--

INSERT INTO `teknisi1` (`id`, `nama`) VALUES
(1, 'Widodo'),
(2, 'Anton Nugroho'),
(5, 'wintolo'),
(6, 'aan zuniarto');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `kontak` varchar(35) NOT NULL,
  `type` varchar(50) NOT NULL,
  `sn` varchar(35) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `telp`, `kontak`, `type`, `sn`, `tgl`) VALUES
(9, 'keke  ', 'bantul', '', '', 'Matrix Series', '', '2015-04-21'),
(11, 'mimi ', '', '', '', 'Matrix Series', '', '0000-00-00'),
(12, 'nn ', '', '', '', 'Matrix Series', '', '0000-00-00'),
(13, 'o', '', '', '', 'Matrix Series', '', '0000-00-00'),
(14, 'p', '', '', '', 'Matrix Series', '', '0000-00-00'),
(15, 'lll', '', '', '', 'Matrix Series', '', '0000-00-00'),
(16, 'ppppp', '', '', '', 'Matrix Series', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE IF NOT EXISTS `user1` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `nama`, `alamat`, `telp`, `kontak`) VALUES
(1, 'PT PUTRI ', 'jogja', '08995477796', 'putri'),
(10, 'ok', 'piyungan', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
