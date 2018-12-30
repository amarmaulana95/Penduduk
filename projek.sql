-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 09:34 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `tlp`, `username`, `password`) VALUES
(1, 'amar', '11', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id_penduduk` int(60) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `agama` varchar(80) NOT NULL,
  `t_lahir` varchar(80) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kel` enum('L','P') NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `w_negara` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `s_nikah` varchar(20) NOT NULL,
  `hubkel` varchar(30) NOT NULL,
  `alamatl` text NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(20) NOT NULL,
  `nayah` varchar(20) NOT NULL,
  `nibu` varchar(20) NOT NULL,
  `pas` varchar(20) NOT NULL,
  `kitap` varchar(20) NOT NULL,
  `id_keluarga` int(40) NOT NULL,
  `statuspen` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1781718908 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_penduduk`, `nik`, `kk`, `nama`, `agama`, `t_lahir`, `tgl_lahir`, `j_kel`, `gol_darah`, `w_negara`, `pendidikan`, `pekerjaan`, `s_nikah`, `hubkel`, `alamatl`, `rt`, `rw`, `nayah`, `nibu`, `pas`, `kitap`, `id_keluarga`, `statuspen`) VALUES
(1781718861, '3201083003850001', '3201311903140001', 'SAMSUDIN MUSTAFA', 'Islam', 'BOGOR', '1985-03-30', 'L', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'WIRASWASTA', 'nikah', 'ayah', ' KABANDUNGAN', '001', '005', 'WANSAH', 'ICAH', '', '', 2225, 'Pindah'),
(1781718862, '3201316502810001', '3201311903140001', 'EMA SUMARNI', 'Islam', 'BOGOR', '1981-02-25', 'P', 'A', 'WNI', 'SLTP/SEDERAJAT', 'IBU RUMAH TANGGA', 'nikah', 'isteri', ' KABANDUNGAN', '001', '005', 'ENDANG S', 'ICAH', '', '', 2225, ''),
(1781718863, '3201311206030008', '3201311903140001', 'FAIZAL JUNIAR', 'Islam', 'BOGOR', '2003-06-12', 'L', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'PELAJAR/MAHASISWA', 'single', 'anak', ' KABANDUNGAN', '001', '005', 'DENI SUHENDAR', 'EMA SUMARNI', '', '', 2225, ''),
(1781718864, '3201312708110008', '3201311903140001', 'LHUTFY RAMADHAN', 'Islam', 'BOGOR', '2011-08-27', 'L', 'A', 'WNI', 'TIDAK/BLM SEKOLAH', 'TIDAK BEKERJA', 'single', 'anak', ' KABANDUNGAN', '001', '005', 'SAMSUDIN MUSTAFA', 'EMA SUMARNI', '', '', 2225, ''),
(1781718865, '3201311911820003', '3201311608100014', 'ROJANA AFANDI', 'Islam', 'BOGOR', '1982-11-19', 'L', 'A', 'WNI', 'SLTP/SEDERAJAT', 'BURUH/HARIAN LEPAS', 'KAWIN', 'ayah', ' KP.KABANDUNGAN', '001', '005', 'ABDUL ROHI', 'OJAH HODIJAH', '', '', 2226, ''),
(1781718866, '3201316704820005', '3201311608100014', 'SARASWATI SETIAWAN', 'Islam', 'BOGOR', '0082-04-27', 'P', 'A', 'WNI', 'SLTP/SEDERAJAT', 'IBU RUMAH TANGGA', 'KAWIN', 'isteri', ' KP.KABANDUNGAN', '001', '005', 'A.SETIAWAN', 'SUBUR SETIAWATI', '', '', 2226, ''),
(1781718867, '3201314810100001', '3201311608100014', 'NABILA PUTRI SETIAWAN', 'Islam', 'BOGOR', '2010-10-08', 'P', 'A', 'WNI', 'TIDAK/BLM SEKOLAH', 'TIDAK BEKERJA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'ROJANA AFANDI', 'SARASWATI SETIAWAN', '', '', 2226, ''),
(1781718868, '3201310804790008', '3201312104140011', 'JAJAT SUPRIATNA', 'Islam', 'BOGOR', '1979-04-08', 'L', 'A', 'WNI', 'SLTP/SEDERAJAT', 'KARYAWAN SWASTA', 'nikah', 'ayah', 'KP.KABANDUNGAN ', '001', '005', 'ABDUL ROJAK', 'RATNA', '', '', 2227, ''),
(1781718869, '3201315712840003', '3201312104140011', 'DINA RETNO PURWANTI', 'Islam', 'SUMEDANG', '1984-12-18', 'P', 'A', 'WNI', 'SLTP/SEDERAJAT', 'KARYAWAN SWASTA', 'nikah', 'isteri', 'KP.KABANDUNGAN ', '001', '005', 'KUSNANDI', 'IIS SUMIATI', '', '', 2227, ''),
(1781718870, '3201312205110002', '3201312104140011', 'ELANG RIZKI SUPRIATNA', 'Islam', 'BOGOR', '2012-05-22', 'L', 'A', 'WNI', 'TIDAK/BLM SEKOLAH', 'TIDAK BEKERJA', 'single', 'anak', ' KP.KABANDUNGAN', '001', '005', 'JAJAT SUPRIATNA', 'DIAN RETNO PURWANTI', '', '', 2227, ''),
(1781718871, '3271010601880002', '3201312405131007', 'JANUAR SANDI PRIBADI', 'Islam', 'BOGOR', '1988-01-06', 'L', 'A', 'WNI', 'SLTP/SEDERAJAT', 'KARYAWAN SWASTA', 'nikah', 'ayah', ' KP.KABANDUNGAN', '001', '005', 'SANUSI DJUPRI', 'YANIH', '', '', 2228, ''),
(1781718872, '3201316610900008', '3201312405131007', 'NINA YUSNAWATI', 'Islam', 'BOGOR', '1990-10-26', 'P', 'A', 'WNI', 'SLTP/SEDERAJAT', 'IBU RUMAH TANGGA', 'KAWIN', 'isteri', ' KP.KABANDUNGAN', '001', '005', 'YUS PANDI', 'KARSEM KURNIAWATI', '', '', 2228, ''),
(1781718873, '3201315001140001', '3201312405131007', 'ZAHRA TUNNISA MAULIDA', 'Islam', 'BOGOR', '2014-01-10', 'P', 'A', 'WNI', 'TIDAK/BLM SEKOLAH', 'TIDAK BEKERJA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'JANUAR SANDI PRIBADI', 'NINA YUSNAWATI', '', '', 2228, ''),
(1781718874, '3201310102600001', '3201312609060007', 'ADE SYAMSUDIN', 'Islam', 'CIANJUR', '1980-02-01', 'L', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'BURUH/HARIAN LEPAS', 'nikah', 'ayah', 'KP.KABANDUNGAN ', '001', '005', 'UJANG MUGIAR', 'SITI ATIKAH', '', '', 2229, ''),
(1781718875, '3201316808880001', '3201312609060007', 'SITI HALIMAH', 'Islam', 'BOGOR', '0088-08-25', 'P', 'A', 'WNI', 'SLTP/SEDERAJAT', 'IBU RUMAH TANGGA', 'KAWIN', 'isteri', ' KP.KABANDUNGAN', '001', '005', 'H.BAGDJALUDIN', 'H.ROMLAH', '', '', 2229, ''),
(1781718876, '3201312306950001', '3201312609060007', 'MOH.ZULFIQOR', 'Islam', 'BOGOR', '1995-06-23', 'L', 'A', 'WNI', 'SLTP/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'ADE SYAMSUDIN', 'SITI HALIMAH', '', '', 2229, ''),
(1781718877, '3201311711580002', '3201312007070009', 'MAMAT.R', 'Islam', 'BOGOR', '1958-11-17', 'L', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'BURUH/HARIAN LEPAS', 'KAWIN', 'ayah', ' KP.KABANDUNGAN', '001', '005', 'MAMAD', 'OCAH', '', '', 2230, ''),
(1781718878, '3201315005650001', '3201312007070009', 'ASMAH', 'Islam', 'BOGOR', '1965-05-10', 'P', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'IBU RUMAH TANGGA', 'KAWIN', 'anak', 'KP.KABANDUNGAN', '001', '005', 'DARMA', 'ENUNG', '', '', 2230, ''),
(1781718879, '3201311805010001', '3201312007070009', 'MUHAMMAD HARISMAN', 'Islam', 'BOGOR', '2001-05-16', 'L', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'MAMAT.R', 'ASMAH', '', '', 2230, ''),
(1781718880, '3201317101030001', '3201312007070009', 'WULAN YULIANI', 'Islam', 'BOGOR', '2003-01-31', 'P', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'anak', 'KP.KABANDUNGAN', '001', '005', 'MAMAT.R', 'ASMAH', '', '', 2230, ''),
(1781718881, '3201300808840009', '3201311710120063', 'TRISNAWAN', 'Islam', 'BOGOR', '1984-08-08', 'L', 'A', 'WNI', 'SLTP/SEDERAJAT', 'BURUH/HARIAN LEPAS', 'KAWIN', 'ayah', ' KP.KABANDUNGAN', '001', '005', 'BASRI', 'TINI SUMARTINI', '', '', 2231, ''),
(1781718882, '3209015008840008', '3201311710120063', 'IIN KURSINAH', 'Islam', 'CIREBON', '1984-08-10', 'P', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'IBU RUMAH TANGGA', 'KAWIN', 'isteri', 'KP.KABANDUNGAN ', '001', '005', 'WARDI', 'KURTINI', '', '', 2231, ''),
(1781718883, '3201315310070006', '3201311710120063', 'FITRI TRISNAWATI', 'Islam', 'BOGOR', '2007-10-13', 'P', 'A', 'WNI', 'SD/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'TRISNAWAN', 'IIN KURSINAH', '', '', 2231, ''),
(1781718884, '3201315812120002', '3201311710120063', 'DAVINA AULIA SAPUTRI', 'Islam', 'BOGOR', '2012-12-08', 'P', 'A', 'WNI', 'TIDAK/BLM SEKOLAH', 'TIDAK BEKERJA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'TRISNAWAN', 'IIN KURSINAH', '', '', 2231, ''),
(1781718885, '3201311808910001', '3201310808160002', 'ANIM SETIAWAN', 'Islam', 'BOGOR', '1991-08-18', 'L', 'A', 'WNI', 'SLTA/SEDERAJAT', 'KARYAWAN SWASTA', 'KAWIN', 'ayah', 'KP.KABANDUNGAN ', '001', '005', 'HELI', 'ANAH', '', '', 2232, ''),
(1781718886, '3201315303930003', '3201310808160002', 'SITI NURUL SYAMSIAH', 'Islam', 'BOGOR', '1993-03-12', 'P', 'A', 'WNI', 'SLTA/SEDERAJAT', 'KARYAWAN SWASTA', 'KAWIN', 'anak', 'KP.KABANDUNGAN ', '001', '005', 'A.LATIF', 'EEN ROHAENI', '', '', 2232, ''),
(1781718887, '3201312210520002', '3201311104080007', 'ENDANG MASHUDI', 'Islam', 'BANDUNG', '1952-10-22', 'L', 'A', 'WNI', 'AKADEMI/DIPLOMA III', 'PEGAWAI NEGRI SIPIL', 'KAWIN', 'ayah', 'KP.KABANDUNGAN ', '001', '005', 'EMOS.TJ', 'SITI HAYANI', '', '', 2233, ''),
(1781718888, '3201315207770002', '3201311104080007', 'JULITA NGGOMAN ', 'Islam', 'MANADO', '1977-07-12', 'P', 'A', 'WNI', 'SLTA/SEDERAJAT', 'IBU RUMAH TANGGA', 'KAWIN', 'isteri', 'KP.KABANDUNGAN ', '001', '005', 'DICKY ANGGOMAN', 'EMMA MOKALU', '', '', 2233, ''),
(1781718889, '3201314905980001', '3201311104080007', 'BUDIWIRAYANI BILHAQ', 'Islam', 'BOGOR', '1998-08-09', 'P', 'A', 'WNI', 'SLTA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'ENDANG MASHUDI', 'JULITA ANGGOMAN', '', '', 2233, ''),
(1781718890, '3201312706110002', '3201311104080007', 'CHOERUNNAS CAKRAPRAJA', 'Islam', 'GARUT', '2011-05-27', 'L', 'A', 'WNI', 'TIDAK/BLM SEKOLAH', 'TIDAK BEKERJA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'ENDANG MASHUDI', 'JULITA ANGGOMAN', '', '', 2233, ''),
(1781718891, '3201312407880001', '3201311404150004', 'IWAN HERDIAWAN', 'Islam', 'BOGOR', '1988-07-24', 'L', 'A', 'WNI', 'SLTP/SEDERAJAT', 'KARYAWAN SWASTA', 'KAWIN', 'ayah', 'KP.KABANDUNGAN ', '001', '005', 'ANDI', 'ATIKAH', '', '', 2234, ''),
(1781718892, '3201286008930003', '3201311404150004', 'RIA ANGGRAENI', 'Islam', 'JAKARTA', '1993-08-20', 'P', 'A', 'WNI', 'SLTP/SEDERAJAT', 'KARYAWAN SWASTA', 'KAWIN', 'isteri', ' KP.KABANDUNGAN', '001', '005', 'HUSEN SN', 'MARYAETY', '', '', 2234, ''),
(1781718893, '3201312907690002', '3201310404070013', 'SUORIYADI', 'Islam', 'BOGOR', '1969-07-29', 'L', 'A', 'WNI', 'SLTA/SEDERAJAT', 'PEGAWAI NEGRI SIPIL', 'KAWIN', 'ayah', 'KP.KABANDUNGAN ', '001', '005', 'ENCEP', 'HJ.SOPIAH', '', '', 2235, ''),
(1781718894, '3201315905670001', '3201310404070013', 'SITI NURAENI', 'Islam', 'BOGOR', '1967-05-19', 'L', 'A', 'WNI', 'SLTA/SEDERAJAT', 'IBU RUMAH TANGGA', 'KAWIN', 'isteri', 'KP.KABANDUNGAN', '001', '005', 'AMAN LAZIM', 'SITI ROHAENI', '', '', 2235, ''),
(1781718895, '3201311307980001', '3201310404070013', 'MUHAMMAD JAMIL PRATAMA', 'Islam', 'BOGOR', '1998-07-13', 'L', 'A', 'WNI', 'SLTP/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'SUPRIYADI', 'SITI NURAENI', '', '', 2235, ''),
(1781718896, '3201310602010001', '3201310404070013', 'MUHAMMAD JAELANI AMRIL', 'Islam', 'BOGOR', '2001-02-06', 'L', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'SUPRIYADI', 'SITI NURAENI', '', '', 2235, ''),
(1781718897, '3201290411750005', '3201313003150011', 'IDANG', 'Islam', 'BOGOR', '1975-11-04', 'L', 'A', 'WNI', 'SLTP/SEDERAJAT', 'WIRASWASTA', 'KAWIN', 'ayah', 'KP.KABANDUNGAN ', '001', '005', 'SARIPUDIN ', 'INING', '', '', 2236, ''),
(1781718898, '3201315111880002', '3201313003150011', 'SUCININGSIH', 'Islam', 'BOGOR', '1988-11-11', 'P', 'A', 'WNI', 'SLTA/SEDERAJAT', 'IBU RUMAH TANGGA', 'KAWIN', 'isteri', 'KP.KABANDUNGAN ', '001', '005', 'MUHAMAD UPIK', 'ENAH', '', '', 2236, ''),
(1781718899, '3201316405550001', '3201313003150011', 'ENAH', 'Islam', 'BOGOR', '1955-05-24', 'P', 'A', 'WNI', 'SLTA/SEDERAJAT', 'MENGURUS RUMAH TANGG', 'KAWIN', 'isteri', ' KP.KABANDUNGAN', '001', '005', 'SAENAN', 'MAAH', '', '', 2236, ''),
(1781718900, '3201311109650003', '3201310406120013', 'YUS PANDI', 'Islam', 'JAKARTA', '1964-09-11', 'L', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'BURUH/HARIAN LEPAS', 'KAWIN', 'ayah', 'KP.KABANDUNGAN ', '001', '005', 'DUL HALIM', 'RAETI', '', '', 2237, ''),
(1781718901, '3201315112730003', '3201310406120013', 'KARSEM KURNIAWATI', 'Islam', 'KUNINGAN', '1973-12-11', 'P', 'A', 'WNI', 'TAMAT SD/SEDERAJAT', 'IBU RUMAH TANGGA', 'KAWIN', 'isteri', ' KP.KABANDUNGAN', '001', '005', 'KUSMANDI', 'DARYI', '', '', 2237, ''),
(1781718902, '3201314506960005', '3201310406120013', 'RARA YUSTIAWATI', 'Islam', 'BOGOR', '1995-06-06', 'P', 'A', 'WNI', 'SLTA/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'anak', ' KP.KABANDUNGAN', '001', '005', 'YUS PANDI', 'KARSEM KURNIAWATI', '', '', 2237, '');

-- --------------------------------------------------------

--
-- Table structure for table `kk_anggota`
--

CREATE TABLE IF NOT EXISTS `kk_anggota` (
`id` int(20) NOT NULL,
  `id_keluarga` int(20) NOT NULL,
  `kk` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `kk_anggota`
--

INSERT INTO `kk_anggota` (`id`, `id_keluarga`, `kk`) VALUES
(26, 2225, '3201311903140001'),
(27, 2225, '3201311903140001'),
(28, 2225, '3201311903140001'),
(29, 2226, '3201311608100014'),
(30, 2226, '3201311608100014'),
(31, 2227, '3201312104140011'),
(32, 2227, '3201312104140011'),
(33, 2228, '3201312405131007'),
(34, 2228, '3201312405131007'),
(35, 2229, '3201312609060007'),
(36, 2229, '3201312609060007'),
(37, 2230, '3201312007070009'),
(38, 2230, '3201312007070009'),
(39, 2230, '3201312007070009'),
(40, 2231, '3201311710120063'),
(41, 2231, '3201311710120063'),
(42, 2231, '3201311710120063'),
(43, 2232, '3201310808160002'),
(44, 2233, '3201311104080007'),
(45, 2233, '3201311104080007'),
(46, 2233, '3201311104080007'),
(47, 2234, '3201311404150004'),
(48, 2235, '3201310404070013'),
(49, 2235, '3201310404070013'),
(50, 2235, '3201310404070013'),
(55, 2237, ''),
(56, 2236, '');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE IF NOT EXISTS `ktp` (
`id` int(22) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kk` varchar(40) NOT NULL,
  `alamatl` varchar(20) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(20) NOT NULL,
  `statusktp` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`id`, `nama`, `nik`, `kk`, `alamatl`, `rt`, `rw`, `statusktp`) VALUES
(3, 'ELANG RIZKI SUPRIATN', '3201312205110002', '3201312104140011', ' KP.KABANDUNGAN', '001', '005', 'perpanjang'),
(4, 'TRY NUR SAKINAH', '3201315205990002', '', 'KP.KABANDUNGAN', '002', '009', 'perpanjang'),
(5, 'AHMAD KOSASIH', '3201310710820008', '', 'KP.KIRALAWANG', '003', '001', 'BARU'),
(6, 'LIA YULIANI', '3271025307920006', '', 'KP..KIRALAWANG', '003', '001', 'perpanjang'),
(7, 'ADE HUSMAN', '3201311011730001', '', 'KP.KABANDUNGAN', '002', '008', 'BARU'),
(8, 'SALTIAH', '3201314304630002', '', 'KP.KABANDUNGAN', '002', '011', 'perpanjang'),
(9, 'RASINO PUJIONO', '3201312810660001', '', 'KP.KABANDUNGAN', '002', '011', 'perpanjang'),
(10, 'TEMI SITI FATIMAH', '3201316104570002', '', 'JL.KABANDUNGAN 1', '004', '005', 'perpanjang'),
(11, 'BACHRUL HAYAT', '3201311503550002', '', 'JL.KABANDUNGAN 1', '004', '005', 'perpanjang'),
(12, 'RAHMAT MULYA', '3201311711880001', '', 'KP.KABANDUNGAN', '002', '009', 'perpanjang'),
(13, 'DEA ISKANDAR', '3201291909890002', '', 'KP.KABANDUNGAN', '002', '004', 'perpanjang'),
(14, 'FAHRUNNISA', '3201314607930007', '', 'KP.KABANDUNGAN', '002', '004', 'perpanjang'),
(15, 'SULAEMAN', '3201310707770011', '', 'KP.KABANDUNGAN', '002', '009', 'perpanjang'),
(16, 'MARYANI', '320131660980001', '', 'KP.KABANDUNGAN', '002', '009', 'perpanjang'),
(17, 'RIA PUJIANSYAH', '3201310809930003', '', 'KP.KABANDUNGAN', '002', '011', 'perpanjang'),
(18, 'MONICA DERIA HERMAWA', '3201315407970003', '', 'KP.KABANDUNGAN', '002', '003', 'perpanjang'),
(19, 'NINAH', '320129650880005', '', 'KP.KABANDUNGAN', '002', '008', 'perpanjang'),
(20, 'SAMSUDIN MUSTAFA', '3201083003850001', '3201311903140001', ' KABANDUNGAN', '001', '005', 'baru'),
(21, 'SAMSUDIN MUSTAFA', '3201083003850001', '3201311903140001', ' KABANDUNGAN', '001', '005', 'baru'),
(22, 'SAMSUDIN MUSTAFA', '3201083003850001', '3201311903140001', ' KABANDUNGAN', '001', '005', 'baru');

-- --------------------------------------------------------

--
-- Table structure for table `mati`
--

CREATE TABLE IF NOT EXISTS `mati` (
`id` int(20) NOT NULL,
  `id_penduduk` int(23) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `hari` varchar(30) NOT NULL,
  `di` varchar(30) NOT NULL,
  `ket` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mati`
--

INSERT INTO `mati` (`id`, `id_penduduk`, `nik`, `umur`, `tgl`, `hari`, `di`, `ket`) VALUES
(1, 1781718861, '3201083003850001', '99', '0000-00-00', 'senin', '9', '9 ');

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE IF NOT EXISTS `pindah` (
`idsurat` int(11) NOT NULL,
  `id_penduduk` int(20) NOT NULL,
  `tujuan` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pindah`
--

INSERT INTO `pindah` (`idsurat`, `id_penduduk`, `tujuan`) VALUES
(2, 1781718869, ' '),
(3, 1781718864, ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id_penduduk`), ADD KEY `id_keluarga` (`id_keluarga`), ADD KEY `id_keluarga_2` (`id_keluarga`), ADD KEY `id_keluarga_3` (`id_keluarga`), ADD KEY `nik` (`nik`,`kk`), ADD KEY `kk` (`kk`), ADD KEY `id_keluarga_4` (`id_keluarga`);

--
-- Indexes for table `kk_anggota`
--
ALTER TABLE `kk_anggota`
 ADD PRIMARY KEY (`id`), ADD KEY `id_keluarga` (`kk`), ADD KEY `kk` (`kk`), ADD KEY `kk_2` (`kk`), ADD KEY `id_keluarga_2` (`id_keluarga`), ADD KEY `kk_3` (`kk`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mati`
--
ALTER TABLE `mati`
 ADD PRIMARY KEY (`id`), ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
 ADD PRIMARY KEY (`idsurat`), ADD KEY `id_penduduk` (`id_penduduk`), ADD KEY `id_penduduk_2` (`id_penduduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id_penduduk` int(60) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1781718908;
--
-- AUTO_INCREMENT for table `kk_anggota`
--
ALTER TABLE `kk_anggota`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `mati`
--
ALTER TABLE `mati`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pindah`
--
ALTER TABLE `pindah`
MODIFY `idsurat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kk_anggota`
--
ALTER TABLE `kk_anggota`
ADD CONSTRAINT `kk_anggota_ibfk_1` FOREIGN KEY (`id_keluarga`) REFERENCES `data` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mati`
--
ALTER TABLE `mati`
ADD CONSTRAINT `mati_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `data` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pindah`
--
ALTER TABLE `pindah`
ADD CONSTRAINT `pindah_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `data` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
