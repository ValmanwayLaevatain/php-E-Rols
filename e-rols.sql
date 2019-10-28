-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 04:20 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-rols`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `id_role` int(3) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `nama`, `id_role`, `alamat`, `no_hp`, `email`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Erols', 1, 'Indonesia', '089659950634', 'ramaringsuperenergy@gmail.com'),
('laevatain', '60809a5ec59585f7ec07e39beacc2de1', 'Laevatain', 2, 'Tegal, Jawa Tengah Indonesia', '082313821653', 'rama.gilang11@students.unnes.ac.id'),
('valmanway', 'af6e5b3c9a1903d7ead649defeb9474b', 'Valmanway', 2, 'Tegal, Jawa Tengah, Indonesia', '089659950634', 'ramaringsuperenergy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id` varchar(250) NOT NULL,
  `t_surat` date NOT NULL,
  `no_surat` text NOT NULL,
  `perihal` text NOT NULL,
  `isi_surat` text NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `waktu` text NOT NULL,
  `tempat` text NOT NULL,
  `lampiran` text NOT NULL,
  `keterangan` text NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `t_surat`, `no_surat`, `perihal`, `isi_surat`, `alamat_tujuan`, `waktu`, `tempat`, `lampiran`, `keterangan`, `user`) VALUES
('1', '2019-01-20', '001.1/Pan.Raker/BEM KM Unnes/I/2019', 'd', 'Pelantikan dan Rapat Kerja BEM KM', 'Wakil Rektor Bidang III UNNES', 'Rabu, 23 Jan 2019 /08.00-selesai', 'Dekanat FT Unnes Lt.3', '-', '-', 'Valmanway'),
('2', '2019-01-20', '001.1/Pan.Sem-LPDP/BEM KM Unnes/I/2019', 'hjhj', 'Talkshow Scholarship Beasiswa LPDP', 'Wakil Rektor Bidang III UNNES', 'Sabtu, 26 Januari 2019 / 09.00 wib-selesai', 'PKMU Lt.2 UNNES', '-', 'hghgjgjg', 'Laevatain'),
('3', '2019-05-02', 'nkjkjbj', 'nn,', 'jkjhkjh', 'jhkjh', 'uhuih', 'iuhiuh', 'hkj', 'hjkhkjhkj', 'Laevatain');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `id` int(200) NOT NULL,
  `no_surat` text NOT NULL,
  `t_diterima` date NOT NULL,
  `t_surat` date NOT NULL,
  `perihal` text NOT NULL,
  `isi_surat` text NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `waktu` text NOT NULL,
  `tempat` text NOT NULL,
  `lampiran` text NOT NULL,
  `keterangan` text NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `no_surat`, `t_diterima`, `t_surat`, `perihal`, `isi_surat`, `alamat_pengirim`, `waktu`, `tempat`, `lampiran`, `keterangan`, `user`) VALUES
(2, '001.1/Pan.Sem-LPDP/BEM KM Unnes/I/2019', '2019-01-21', '2019-01-20', '-', 'Talkshow Scholarship Beasiswa LPDP', 'Wakil Rektor Bidang III UNNES', 'Sabtu, 26 Januari 2019 / 09.00 wib-selesai', 'PKMU Lt.2 UNNES', '-', '-', 'Valmanway'),
(3, '001.4/Pan.Raker/BEM KM Unnes/I/2019', '2019-01-22', '2019-01-21', '-', 'Surat Pengantar Proposal RAKER dan UPGRADING', 'Wakil Rektor Bidang III UNNES', 'Rabu-Kamis, 30-31 Jan 2019 / 07.30 â€“ selesai ', 'Kampus Sekaran, UNNES', '-', '-', 'Valmanway'),
(4, '001.2/Pan.TO/BEM KM UNNES/I/2019', '2019-01-24', '2019-01-23', '-', 'TryOutPTN.id bersama Yayasan Indonesia Bisa dan BEM KM UNNES 2019', 'Wakil Rektor Bidang III UNNES', 'Minggu, 17 Februari 2019/ 07.00 wib â€“selesai', 'Universitas Negeri Semarang', '-', '-', 'Valmanway'),
(5, '018.2/Pan.Sos-KPU/BEM KM UNNES/II/2019', '2019-02-06', '2019-02-05', '-', 'Sosialisasi terkait DPT', 'Hima TP UNNES', 'Selasa, 12 Februari 2019/07.00-selesai', 'Graha Cendekia FT UNNES', '-', '-', 'Valmanway'),
(6, '010.2/Pan.Sos-KPU/BEM KM UNNES/II/2019', '2019-02-06', '2019-02-05', '-', 'Sosialisasi terkait DPT', 'DPM FIP UNNES', 'Selasa, 12 Februari 2019/07.00-selesai', 'Graha Cendekia FT UNNES', '-', '-', 'Valmanway'),
(7, '001.03/Pan.TO/BEM KM UNNES/I/2019', '2019-02-11', '2019-02-10', '-', 'Peminjaman Solar kegiatan TryOutPTN.id', 'Ketua BEM FT UNNES', 'Minggu, 17 Feb 2019 / 07.00 wib â€“ selesai ', 'Auditorium UNNES', '-', '-', 'Valmanway'),
(8, '001.2/KP/BEM KM Unnes/II/2019', '2019-02-14', '2019-02-13', '-', 'Diskusi Skorsing Mahasiswa', 'Ketua BEM FIP', 'Kamis, 14 Feb 2019/19.15 wib- selesai', 'PKMU Lt.2', '-', '-', 'Valmanway'),
(9, 'bhjbjhb', '2020-02-02', '2021-02-03', 'hjhjh', 'hjjhg', 'jhjg', 'jhg', 'jjhgjhg', 'gjgjh', 'gjgj', 'Laevatain'),
(10, '001.5/Pan.KPU/BEM KM UNNES/II/2019', '2019-02-19', '2019-02-18', '-', 'KPU Go To Campus Provinsi Jawa Tengah', 'Wakil Dekan Bidang Keuangan dan Umum FIS UNNES', 'Sabtu, 16 Maret 2019/ 07.00 wib-selesai', 'Universitas Negeri Semarang', '-', '-', 'Valmanway'),
(11, 'mnkjnkj', '2019-01-01', '2020-01-02', 'jhkjhk', 'kjhkjh', 'kjh', 'kjh', 'kjhkoo', 'yuyu', 'gggg', 'Laevatain'),
(12, 'jlkjlkj', '2018-11-30', '2020-12-31', 'kjlk', 'kjlkj', 'uhiu', 'hi', 'uhi', 'ooiuoi', 'hkjhkjjhjk', 'Laevatain');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
