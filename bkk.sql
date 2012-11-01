-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3434
-- Generation Time: Nov 01, 2012 at 01:04 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_canaker`
--

CREATE TABLE IF NOT EXISTS `biodata_canaker` (
  `idcanaker` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(10) NOT NULL,
  `nis` varchar(6) NOT NULL,
  `nilai_upk` varchar(4) NOT NULL,
  `nilai_un` varchar(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `thn_lulus` varchar(5) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `tmp_lhr` varchar(50) NOT NULL,
  `tgl_lhr` varchar(20) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `jns_kel` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kd_pos` varchar(6) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `status_kerja` varchar(25) NOT NULL,
  `sim` varchar(3) NOT NULL,
  UNIQUE KEY `nis_2` (`nis`),
  UNIQUE KEY `idcanaker` (`idcanaker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `biodata_canaker`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_dudi`
--

CREATE TABLE IF NOT EXISTS `data_dudi` (
  `iddudi` int(5) NOT NULL AUTO_INCREMENT,
  `no_reg` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(10) NOT NULL,
  `nm_dudi` varchar(50) NOT NULL,
  `alamat_dudi` varchar(50) NOT NULL,
  `telp_dudi` varchar(12) NOT NULL,
  `email_dudi` varchar(25) NOT NULL,
  `nm_hrd` varchar(50) NOT NULL,
  `telp_hrd` varchar(12) NOT NULL,
  `bdg_kerja` varchar(50) NOT NULL,
  `ket_dudi` text NOT NULL,
  PRIMARY KEY (`nm_dudi`),
  UNIQUE KEY `iddudi` (`iddudi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `data_dudi`
--


-- --------------------------------------------------------

--
-- Table structure for table `fisik_canaker`
--

CREATE TABLE IF NOT EXISTS `fisik_canaker` (
  `idfisik` int(3) NOT NULL AUTO_INCREMENT,
  `nis` varchar(6) NOT NULL,
  `t_badan` varchar(3) NOT NULL,
  `b_badan` varchar(3) NOT NULL,
  `kacamata` varchar(5) NOT NULL,
  `km_kiri` varchar(3) NOT NULL,
  `km_kanan` varchar(3) NOT NULL,
  `merokok` varchar(5) NOT NULL,
  `jml_rokok` varchar(3) NOT NULL,
  `kidal` varchar(5) NOT NULL,
  `sakit` varchar(5) NOT NULL,
  `riwayat_sakit` varchar(50) NOT NULL,
  `cacat` varchar(30) NOT NULL,
  `status_cacat` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `status_canaker` varchar(10) NOT NULL,
  PRIMARY KEY (`nis`),
  UNIQUE KEY `idfisik` (`idfisik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `fisik_canaker`
--


-- --------------------------------------------------------

--
-- Table structure for table `keluarga_canaker`
--

CREATE TABLE IF NOT EXISTS `keluarga_canaker` (
  `id_klrg` int(4) NOT NULL AUTO_INCREMENT,
  `nis` varchar(6) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `usia_ayah` varchar(2) NOT NULL,
  `tmp_ayah` varchar(50) NOT NULL,
  `krj_ayah` varchar(30) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `usia_ibu` varchar(2) NOT NULL,
  `tmp_ibu` varchar(50) NOT NULL,
  `krjr_ibu` varchar(50) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  PRIMARY KEY (`nis`),
  UNIQUE KEY `id_klrg` (`id_klrg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `keluarga_canaker`
--


-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `idlow` int(11) NOT NULL AUTO_INCREMENT,
  `no_reg_low` varchar(15) NOT NULL,
  `nm_dudi` varchar(50) NOT NULL,
  `tgl_publikasi` varchar(25) NOT NULL,
  `low_ker` varchar(50) NOT NULL,
  `status_low` varchar(6) NOT NULL,
  PRIMARY KEY (`nm_dudi`),
  UNIQUE KEY `idlow` (`idlow`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lowongan`
--


-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_canaker`
--

CREATE TABLE IF NOT EXISTS `pengalaman_canaker` (
  `id_pglmn` int(3) NOT NULL AUTO_INCREMENT,
  `nis` varchar(6) NOT NULL,
  `nm_perusahaan` varchar(50) NOT NULL,
  `bd_usaha` varchar(50) NOT NULL,
  `urain_kerja` varchar(100) NOT NULL,
  `thn_1` date NOT NULL,
  `thn2` date NOT NULL,
  PRIMARY KEY (`nis`),
  UNIQUE KEY `id_pglmn` (`id_pglmn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pengalaman_canaker`
--


-- --------------------------------------------------------

--
-- Table structure for table `prestasi_canaker`
--

CREATE TABLE IF NOT EXISTS `prestasi_canaker` (
  `id_pres` int(5) NOT NULL AUTO_INCREMENT,
  `nis` varchar(6) NOT NULL,
  `lomba` varchar(25) NOT NULL,
  `juara` varchar(3) NOT NULL,
  `tingkat` varchar(25) NOT NULL,
  `skor TOEFL` varchar(4) NOT NULL,
  `skor TOEIC` varchar(4) NOT NULL,
  `bhs_asing` varchar(25) NOT NULL,
  UNIQUE KEY `id_pres` (`id_pres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `prestasi_canaker`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `level` (`level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `level`) VALUES
(1, 'admin', '12345', 'admin'),
(2, 'kaksugi', '12345', 'dudi'),
(3, 'siswa', '12345', 'siswa');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengalaman_canaker`
--
ALTER TABLE `pengalaman_canaker`
  ADD CONSTRAINT `pengalaman_canaker_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `biodata_canaker` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
